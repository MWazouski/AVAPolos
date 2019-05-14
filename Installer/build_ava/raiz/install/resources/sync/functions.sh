#!/bin/bash
#RafaelV3.0
source /opt/AVAPolos/variables.sh

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
      ret=$(docker exec $1 psql -U moodle -d moodle -c "SELECT COUNT(*) FROM avapolos_sync WHERE instancia='$2' AND tipo='E' AND versao=$3" | sed -n '3p' | grep -o 1)
      sleep 5
   done 
}

waitSyncEndMaster(){ #wait for DBMaster to be synchronized with DBSync (to has the same records) $1 = instancia do registro a ser verificado (POLO ou IES); $2 = versao do export a ser procurada
   waitSyncEnd $containerDBMasterName $1 $2
}

waitSyncEndSync(){ #wait for DBSync to be synchronized with DBMaster (to has the same records) $1 = instancia do registro a ser verificado (POLO ou IES); $2 = versao do export a ser procurada
   waitSyncEnd $containerDBSyncName $1 $2
}

copyExportFiles(){
    pastaBackup=$1
    echo " -> Copiando arquivos...."       

    if [ -e "$dirExportPath/$pastaBackup" ]; then
       labelData=$(date -u "+%Y%m%d%H%M%S")
       echo " -> Diretório $dirExportPath/$pastaBackup já existe, criando backup..."
       mv "$dirExportPath/$pastaBackup" "$dirExportPath/../${pastaBackup}CONFLICT$labelData"
       echo " ---> ...backup criado. Diretório $dirExportPath/../${pastaBackup}CONFLICT$labelData"
    fi

    mkdir "$dirExportPath/$pastaBackup" "$dirExportPath/$pastaBackup/arquivos" "$dirExportPath/$pastaBackup/database"
    
    if cp -rf "$dirPath/data/$dataDirMaster/" "$dirExportPath/$pastaBackup/database/"; then
      if cp -rf "$dirPath/data/moodle/moodledata/filedir/" "$dirExportPath/$pastaBackup/arquivos/"; then
        sleep 3
      else
        echo "-> BACKUP | STATUS = [ERROR FILEDIR- CONTATE O ADMINISTRADOR]"
      fi
    else
        echo "-> BACKUP | STATUS = [ERROR DB - CONTATE O ADMINISTRADOR]"
    fi

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
   echo "-> REMOVING DB_SYNC..."
   rm -rf "$dirPath/data/$dataDirSync" #or postgresql_master depending if it is IES or polo
   while [ -e $dirPath/data/$dataDirSync ];
   do
      echo "Aguardando exclusao de DB_SYNC";
      sleep 5
   done
   echo "------> DB_SYNC removed."

   echo "-> COPYING DB_SYNC FROM THE IMPORT FILE..."
   cp -R "$dirImportPath/$nameFile/database/$dataDirSync" "$dirPath/data/${dataDirSync}STAGE" && mv "$dirPath/data/${dataDirSync}STAGE" "$dirPath/data/$dataDirSync"
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
   ret=$(docker exec $containerDBMasterName psql -U moodle -d moodle -c "DELETE FROM avapolos_sync WHERE versao=0;")
}

queueExportFiles(){ #$1 = moodleUser - usuario do moodle que gerou a exportacao (em caso de clone sera instaladorAvapolos)
    ###carrega variaveis de ultimo export, ultimo import
    loadConfig
    exportDir="dadosV_${nextExport}_$instance"   

    ###Remover acesso ao moodle

    echo "createControlRecord $nextExport E $1"
    createControlRecord $nextExport E $1 && stopDBMaster

    ###cria arquivos de exportação na pasta Export/Fila
    copyExportFiles $exportDir

    ###ajusta o arquivo de configuração
    echo "Último export realizado $instance: $nextExport | Último sync $instance realizado: $lastImport" > $configPath

    ###realiza a sincronização para limpar a fila
    echo "-> Limpando fila de sincronização..."
    clearQueue $nextExport
    echo " ----> ...fila limpa."
}
