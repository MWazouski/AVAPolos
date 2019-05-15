#!/bin/bash
#rafaelV2
source variables.sh

getLastSnapshot() {
  while IFS='|' read -r item1 item2
  do 
    last_generated=${item1#*:}
    last_sync=${item2#*:}
  done < $configPath
  echo $last_generated
}

getLastSync() {
  while IFS='|' read -r item1 item2
  do 
    last_sync=${item2#*:}
  done < $configPath
  echo $last_sync
}

#-------------------------------------------------------------------------------------------------

startMoodle(){
    echo "-> Starting container MOODLE..."
    startContainer $containerMoodleName
    echo "-----> DOCKER MOODLE | STATUS = [ON]"
}

stopMoodle(){
    echo "-> Stopping container MOODLE..."
    stopContainer $containerMoodleName
    echo "-----> DOCKER MOODLE | STATUS = [OFF]"
}

startDBMaster(){
    echo "-> Starting container DB_MASTER..."
    startContainer $containerDBMasterName
    echo "-----> DOCKER DB_MASTER | STATUS = [ON]"
}

stopDBMaster(){ 
    echo "-> Stopping container DB_MASTER..."
    stopContainer $containerDBMasterName
    echo "-----> DOCKER DB_MASTER | STATUS = [OFF]"
}

startDBSync(){
    echo "-> Starting container DB_SYNC..."
    startContainer $containerDBSyncName
    echo "----> DOCKER DB_SYNC | STATUS = [ON]"
}

stopDBSync(){
    echo "-> Stopping container DB_SYNC..."
    stopContainer $containerDBSyncName
    echo "----> DOCKER DB_SYNC | STATUS = [OFF]"
}

startWiki(){
    echo "-> Starting container WIKI..."
    startContainer $containerWikiName
    startContainer $containerDBWikiName
    echo "----> DOCKER WIKI | STATUS = [ON]"
}

stopWiki(){
    echo "-> Stopping container WIKI..."
    stopContainer $containerWikiName
    stopContainer $containerDBWikiName
    echo "----> DOCKER WIKI | STATUS = [OFF]"
}

startEducapes(){
    echo "-> Starting Educapes..."
    startContainer $containerDBDSPaceName
    sleep 3
    startContainer $containerDSPaceName
    echo "----> DOCKER EDUCAPES | STATUS = [ON]"
}

stopEducapes(){
    echo "-> Stopping Educapes..."
    stopContainer $containerDSPaceName
    stopContainer $containerDBDSPaceName
    echo "----> DOCKER EDUCAPES | STATUS = [OFF]"
}


#-------------------------------------------------------------------------------------------------

stopContainer(){ #container
    docker stop $1
    while [ "$(docker inspect -f '{{.State.Running}}' $1)" == true ]; do
      sleep 5 #10 seconds
    done
}

startContainer(){ #container
    docker start $1
    while [ "$(docker inspect -f '{{.State.Running}}' $1)" == false ]; do
      sleep 5 #10 seconds
    done
}

clearQueue(){ #$1 = versao da exportacao/clone sendo feita
   echo " ==================== LIMPANDO FILA DE SINCRONIZAÇÃO | STATUS = [INICIALIZANDO]"
   startDBMaster
   startDBSync

   waitSyncEndSync $instance $1

   stopDBSync #parar instância de sincronização
   echo "----> LIMPANDO FILA DE SINCRONIZAÇÃO | STATUS = [FINALIZADA]"
}

startSync(){ #$1 = versao da importacao sendo feita
   echo " ==================== Sincronização | STATUS = [INICIALIZANDO]"
   startDBMaster
   startDBSync

   waitSyncEndMaster $complement $1
   
   stopDBSync #parar instância de sincronização
   echo "----> Sincronização | STATUS = [FINALIZADA]"
}

waitSyncEnd(){ #$1 = nome do container do banco; $2 = instancia do registro a ser verificado POLO ou IES; $3 = versao do export a ser procurada
   ret=""
   while [ -z "$ret" ]; do
      echo "-> Sincronização em andamento | STATUS = [NÃO FINALIZADA]"
      sleep 7
      ret=$(docker exec $1 psql -U moodle -d moodle -c "SELECT COUNT(*) FROM avapolos_sync WHERE instancia='$2' AND tipo='E' AND versao=$3" | sed -n '3p' | grep -o 1)
   done 
}

waitSyncEndMaster(){ #wait for DBMaster to be synchronized with DBSync (to has the same records) $1 = instancia do registro a ser verificado (POLO ou IES); $2 = versao do export a ser procurada
   waitSyncEnd $containerDBMasterName $1 $2
}

waitSyncEndSync(){ #wait for DBSync to be synchronized with DBMaster (to has the same records) $1 = instancia do registro a ser verificado (POLO ou IES); $2 = versao do export a ser procurada
   waitSyncEnd $containerDBSyncName $1 $2
   if [ $2 -eq 0 ]; then #delete cloneControl record in both servers if this is a clone operation - bdr might try to sync the deletions and fail, but it will just ignore the fail
      echo " --> APAGANDO REGISTROS DE CONTROLE DE CLONAGEM."
      deleteCloneControlRecord
   fi
}

copyExportFiles(){
    exportDir="$dirExportPath/$1"
    exportDirFiles="$exportDir/arquivos/filedir"
    exportDirDb="$exportDir/database"
    exportDirFileList="$exportDir/filedirList"

    echo " -> Copiando arquivos...."

    if [ -e "$exportDir" ]; then
       labelData=$(date -u "+%Y%m%d%H%M%S")
       echo " -> Diretório $exportDir já existe, criando backup..."
       mv "$exportDir" "$dirExportPath/${$1}_CONFLICT_$labelData"
       echo " ---> ...backup criado. Diretório $dirExportPath/${$1}_CONFLICT_$labelData"
    fi

    mkdir -p "$exportDirFiles" "$exportDirDb" "$exportDirFileList"

    copyDbFiles $exportDirDb #copy database files to the exportDatabaseDir
    copyDiffFileDir $exportDirFiles #copy moodledata/filedir to the exportFileDir
    cp -r $masterFileDirListPath/* $exportDirFileList/ #

    echo " ----> ...arquivos copiados."
}

createExportFile(){
    nameTar=$1
    echo " -> Gerando arquivo para exportação..."
    cd $dirExportPath
    tar -cpzf "$dirViewPath/$nameTar" * && cd $dirPath
    echo " ----> ...arquivo gerado."
}

loadConfig(){
    lastExport=0
    lastImport=0
    if [ ! -f $configPath ]; then
       echo "-> Checking configuration file | STATUS = [NOT CREATED YET]"
       echo "---------------> Creating configuration file"
     else
       echo "-> CONFIG FILE | STATUS = [OK]"
       lastExport=$( getLastSnapshot )
       lastImport=$( getLastSync )
     fi
     nextExport=$(( $lastExport + 1))
     echo "---> Último Export : $lastExport"
     echo "---> Último Import : $lastImport"
}

changeDBSync(){
   importDir=$1
   echo "-> REMOVING DB_SYNC..."
   rm -rf "$dirPath/data/$dataDirSync" #or postgresql_master depending if it is IES or polo
   while [ -e $dirPath/data/$dataDirSync ];
   do
      echo "Aguardando exclusao de DB_SYNC";
      sleep 5
   done
   echo "------> DB_SYNC removed."

   echo "-> COPYING DB_SYNC FROM THE IMPORT FILE..."
   cp -R "$dirImportPath/$importDir/database/$dataDirSync" "$dirPath/data/${dataDirSync}STAGE" && mv "$dirPath/data/${dataDirSync}STAGE" "$dirPath/data/$dataDirSync"
   echo "-------> NEW DB_SYNC COPIED."
}

createControlRecord(){ #$1 = versao do export sendo exportado ou importado; 
	ret=$(docker exec $containerDBMasterName psql -U moodle -d moodle -c "INSERT INTO avapolos_sync (instancia,versao,tipo,moodle_user) VALUES ('$instance',$1,'$2','$3');")
	res=$(echo $ret | grep "INSERT 0 1")
	if [ -z "$res" ]; then
		echo "ERRO AO CRIAR REGISTRO DE CONTROLE"
		echo " -----> INSERT INTO avapolos_sync (instancia,versao,tipo,moodle_user) VALUES ('$instance',$1,'$2','$3');"
   		echo "ERROR: $ret"
		exit
	else
		echo "REGISTRO DE CONTROLE CRIADO COM SUCESSO"
	fi
}

deleteCloneControlRecord(){
   docker exec $containerDBMasterName psql -U moodle -d moodle -c "DELETE FROM avapolos_sync WHERE versao=0;"
   docker exec $containerDBSyncName psql -U moodle -d moodle -c "DELETE FROM avapolos_sync WHERE versao=0;"
}

queueExportFiles(){ #$1 = moodleUser - usuario do moodle que gerou a exportacao (em caso de clone sera instaladorAvapolos)
    ###carrega variaveis de ultimo export, ultimo import
    loadConfig
    exportDirName="dadosV_${nextExport}_$instance"

    ###Remover acesso ao moodle

    echo "createControlRecord $nextExport E $1"
    createControlRecord $nextExport E $1 && stopDBMaster

    ###cria arquivos de exportação na pasta Export/Fila
    copyExportFiles $exportDirName

    ###ajusta o arquivo de configuração
    echo "Último export realizado $instance: $nextExport | Último sync $instance realizado: $lastImport" > $configPath

    ###realiza a sincronização para limpar a fila
    echo "-> Limpando fila de sincronização..."
    clearQueue $nextExport
    echo " ----> ...fila limpa."
}

createFileDirList(){ #$1 = fileDirListPath
   fileDirListPath=$1
   if [ -e $fileDirListPath ]; then
      rm -rf $fileDirListPath;
   fi
   for file in $(find $fileDirPath | grep -Eo '([a-f0-9]{2}/){2}([a-f0-9]){40}$'); do namedir=$fileDirListPath/$(dirname $file); mkdir $namedir -p; touch $namedir/$(basename $file); done

}

createSyncFileDirList(){ #this function is used only when the clone is done, when the master knows that the syncFileDir is exactly the same as the masterFileDir
   createFileDirList $syncFileDirListPath
}

copySyncFileDirList(){ #$1 = SyncFileDirListPath
   if [ -e $syncFileDirListPath ]; then
      rm $syncFileDirListPath -rf;
      mkdir $syncFileDirListPath -p;
      cp -r $1/* $syncFileDirListPath;
   fi
}

createMasterFileDirList(){
   createFileDirList $masterFileDirListPath
}

copyDbFiles(){ #$1 = exportDir/database
   cp -rf "$dirPath/data/$dataDirMaster/" $1
}

copyDiffFileDir(){ #$1 exportFileDir (use absolutePath!!!)
    exportFileDir=$1
    if [ ! -e $syncFileDirListPath ]; then
       mkdir -p $syncFileDirListPath
    fi
    createMasterFileDirList
    for file in $(diff -rq $masterFileDirListPath $syncFileDirListPath | grep $masterFileDirListPath | cut -d" " -f3,4 | sed -e 's/: /\//g'); do 
       echo $file
       fileSourcePath=$(echo $file | sed -e "s/$(escapePath $masterFileDirListPath)/$(escapePath $fileDirPath)/g")
       destPath=$(echo $file | sed -e "s/$(escapePath $masterFileDirListPath)/$(escapePath $exportFileDir)/g")
       nameFile=$(basename $destPath)
       destPath=$(dirname $destPath)
       mkdir -p $destPath;
       cp -r $fileSourcePath $destPath/;
    done
}

escapePath(){
   echo $1 | sed -e 's/\//\\\//g'
}

