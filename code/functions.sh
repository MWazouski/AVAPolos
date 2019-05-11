#!/bin/bash

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

startSync(){
   echo " ==================== Sincronização | STATUS = [INICIALIZANDO]"
   stopDBMaster
   stopDBSync
   ### apagar logs dos bancos
   echo "-> Apagando logs antigos..."
   rm $dirLogPathMaster/*
   rm $dirLogPathSync/*
   echo "----> ...logs apagados."

   startDBMaster
   startDBSync

   masterEnded=''
   syncEnded=''
   while [[ -z "$masterEnded" || -z "$syncEnded" ]];
   do
      if [ -z "$masterEnded" ]; then
         lastLog=$(ls $dirLogPathMaster -t1 | head -n 1)
         if [ ! -z $lastLog ]; then
            masterEnded=$(cat $dirLogPathMaster/$lastLog | grep 'no running transactions')
         fi
      fi

      if [ -z "$syncEnded" ]; then
         lastLog=$(ls $dirLogPathSync -t1 | head -n 1)
         if [ ! -z $lastLog ]; then 
            syncEnded=$(cat $dirLogPathSync/$lastLog | grep 'no running transactions')
         fi
      fi

      echo "-> Sincronização em andamento | STATUS = [NÃO FINALIZADA]"
      sleep 7
   done
   stopDBSync #parar instância de sincronização
   echo "----> Sincronização | STATUS = [FINALIZADA]"
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
