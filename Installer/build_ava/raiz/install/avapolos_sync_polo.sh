 #!/bin/bash
 
 # PROJETO
 #     _                      ____            _               
 #    / \    __   __   __ _  |  _ \    ___   | |   ___    ___ 
 #   / _ \   \ \ / /  / _` | | |_) |  / _ \  | |  / _ \  / __|
 #  / ___ \   \ V /  | (_| | |  __/  | (_) | | | | (_) | \__ \
 # /_/   \_\   \_/    \__,_| |_|      \___/  |_|  \___/  |___/
 # UNIVERSIDADE FEDERAL DO RIO GRANDE - RS 
          
                                                  
#VARIABLES
dirPath="/opt/AVAPolos"
configPath="$dirPath/config.txt"
dirExportPath="$dirPath/Export/Fila"
dirImportPath="$dirPath/Import"
dirLogPath="$dirPath/data/postgresql_slave/pg_log"
dirViewPath="$dirPath/data/www/html/moodle/admin/tool/ava_solution/view"

get_lastSnapshot() {
  while IFS='|' read -r item1 item2
  do 
    last_generated=${item1#*:}
    last_sync=${item2#*:}
  done < $configPath
  echo $last_generated
}

get_lastSync() {
  while IFS='|' read -r item1 item2
  do 
    last_sync=${item2#*:}
  done < $configPath
  echo $last_sync
}


option=$1

echo "$option"

while [ "$option" -ne "4" ]; do
  case $option in
  [1]* )
    echo "PROCESSO DE EXPORTAÇÃO. INICIALIZADO: 2019 \n"
    sync=0 
    if [ ! -f $configPath ]; then
       echo "-> CONFIG FILE | STATUS = [NO]"
       status=1
       pastaBackup="Backup_Import_"$status"_POLO"
     else
       echo "-> CONFIG FILE | STATUS = [OK]"
       snap=$( get_lastSnapshot )
       sync=$( get_lastSync )
       status=$(( $snap + 1))
       echo "STATUS : $status"
       pastaBackup="Backup_Import_"$status"_POLO"
     fi

     mkdir "$dirExportPath/$pastaBackup" "$dirExportPath/$pastaBackup/arquivos" "$dirExportPath/$pastaBackup/database"
     echo "Último export realizado POLO: $status | Último sync POLO-IES realizado:$sync" > $configPath

    echo "-> DOCKER MASTER | STATUS = [ON]"
    while [ "$(docker inspect -f '{{.State.Running}}' master)" == true ]; do
      docker stop master
      sleep 5 #10 seconds
    done
    echo "-> DOCKER MASTER | STATUS = [OFF]"

    echo "-> DOCKER SYNC| STATUS = [ON]"
    while [ "$(docker inspect -f '{{.State.Running}}' sync)" == true ]; do
      docker stop sync
      sleep 10 #10 seconds
    done
    echo "-> DOCKER SYNC | STATUS = [OFF]"

    if cp -rf "$dirPath/dbdata2/" "$dirExportPath/$pastaBackup/database/"; then
      if cp -rf "$dirPath/data/www/moodledata/filedir/" "$dirExportPath/$pastaBackup/arquivos/"; then
        sleep 3
      else
        echo "-> BACKUP | STATUS = [ERROR FILEDIR- CONTATE O ADMINISTRADOR]"
      fi
    else
        echo "-> BACKUP | STATUS = [ERROR DB - CONTATE O ADMINISTRADOR]"
    fi

    cd $dirExportPath
    tar -cpzf "$dirPath/data/www/html/moodle/admin/tool/ava_solution/view/export.tar.gz" * && cd $dirPath

    docker start sync
    sleep 20
    echo "-> DOCKER MASTER | STATUS = [ON] FIM"

  


















    break;;
  [2]* ) 

    mv -f "$dirPath/data/www/html/moodle/admin/tool/ava_solution/view/export.tar.gz" "$dirPath"
    #if [ -f "$sync_filename" ]; then 
    tar -xpzf "$dirPath/export.tar.gz" -C "$dirPath/"Import/
    # #else
    #  echo "-> ERROR | STATUS = [ARQUIVO DE IMPORTAÇÃO NÃO ENCONTRADO]"
    #fi



    #Para cada arquivo que foi descompactado Backup_Import_XX_IES
    list=$(ls $dirImportPath | grep Backup_Import_)
    sync=0
    for nameFile in $list; do
      nameFile=$(basename $nameFile)
      if [ ! -f $configPath ]; then
        echo "-> CONFIG FILE | STATUS = [NO]"
        status=1
        pastaBackup="Backup_Import_"$status"_POLO"
     	else
        echo "-> CONFIG FILE | STATUS = [OK]"
        snap=$( get_lastSnapshot )
        sync=$( get_lastSync )
        status=$(( $snap + 1))
        pastaBackup="Backup_Import_"$status"_POLO"
      fi

        mkdir "$dirExportPath/$pastaBackup" "$dirExportPath/$pastaBackup/arquivos" "$dirExportPath/$pastaBackup/database"
        echo "Último export realizado POLO: $status | Último sync POLO-IES realizado: $sync" > $configPath


        echo "-> DOCKER MASTER | STATUS = [ON]"
        while [ "$(docker inspect -f '{{.State.Running}}' master)" == true ]; do
           docker stop master
           sleep 5 #10 seconds
        done
        echo "-> DOCKER MASTER | STATUS = [OFF]"

        echo "-> DOCKER SYNC| STATUS = [ON]"
        while [ "$(docker inspect -f '{{.State.Running}}' sync)" == true ]; do
           docker stop sync
           sleep 5 #10 seconds
        done
        echo "-> DOCKER SYNC | STATUS = [OFF]"

    #REDEFINE AS PERMISSÕES DA PASTA DO DB
    #chown 999:docker -R Documentos/Avapolos/dbdata2

        if cp -rf "$dirPath/dbdata2/" "$dirExportPath/$pastaBackup/database/"; then
           if cp -rf "$dirPath/data/www/moodledata/filedir/" "$dirExportPath/$pastaBackup/arquivos/"; then
              sleep 3;
           else
              echo "-> BACKUP | STATUS = [ERROR FILEDIR- CONTATE O ADMINISTRADOR]"
           fi
        else
           echo "-> BACKUP | STATUS = [ERROR DB - CONTATE O ADMINISTRADOR]"
        fi
        echo "$dirImportPath/$nameFile"
        [ -e "$dirImportPath/$nameFile" ] || continue
        #Pego o numero deste arquivo _XX_

        imp_number=$(cut -d'_' -f3 <<< "$nameFile")
        #Pego o numero da ultima sincronização realizada
        sync=$( get_lastSync ) 

        #Se o numero da ultima sincronização for maior que a do arquivo
        ##Então não se deve sincronizar este arquivo pois teoricamente este já foi sincronizado
        ##Sendo assim, segue-se para o proximo arquivo fazendo a mesma verificação
        if [ "$imp_number" -gt  "$sync" ]; then
          status=$( get_lastSnapshot )

        ### Ajustando o arquivo
        echo "Último export realizado POLO: $status | Último sync POLO realizado: $imp_number" > $configPath
        
        ### Parando os containers
        echo "-> DOCKER MASTER | STATUS = [ON]"

        docker stop master
        while [ "$(docker inspect -f '{{.State.Running}}' master)" == true ]; do
          sleep 5 #10 seconds
        done
        echo "-> DOCKER MASTER | STATUS = [OFF]"

        echo "-> DOCKER SYNC| STATUS = [ON]"
        docker stop sync
        while [ "$(docker inspect -f '{{.State.Running}}' sync)" == true ]; do          
          sleep 5 #10 seconds
        done
        echo "-> DOCKER SYNC | STATUS = [OFF]"

        ### Deletar a pasta dbdata2
        echo "REMOVING DBDATA1... | STATUS = [OK]"
        rm -rf "$dirPath/dbdata1"

        while [ -e $dirPath/dbdata1 ];
        do
           echo "Aguardando exclusao de dbdata 1";
           sleep 5
        done
        echo "DBDATA1 removed. | STATUS = [OK]"

        ### Copio a pasta db2 dentro do backup para fora
        echo "COPIANDO NOVO DBDATA1 | STATUS = [OK]"
        cp -R "$dirImportPath/$nameFile/database/dbdata1" "$dirPath/dbdata1"
        
        ### Fazer rsync com a pasta de dentro do snap com a pasta data/
        echo "SINCRONIZANDO ARQUIVOS | STATUS = [OK]"
        rsync -avzh  "$dirImportPath/$nameFile/arquivos/filedir/" "$dirPath/data/www/moodledata/filedir/"

        docker start master
        while [ "$(docker inspect -f '{{.State.Running}}' master)" == false ]; do
          echo "Aguardando container master iniciar."          
          sleep 5 #10 seconds
        done
        
        docker start sync
        while [ "$(docker inspect -f '{{.State.Running}}' sync)" == false ]; do
          echo "Aguardando container sync iniciar."          
          sleep 5 #10 seconds
        done        

        echo "CONTAINERS MASTER E SYNC INICIADOS | STATUS = [OK]"

        
        #VERIFICANDO SE JA TERMINOU - REPENSAR ISSO - ESTA SUJEITO A FALHAS
        result=''
        echo "Valor do Result = $result"
        while [ -z "$result" ];
        do
           lastLog=$(ls $dirLogPath -t1 | head -n 1)
           result=$(tail -1 $dirLogPath/$lastLog | grep 'no running transactions')
           echo "SYNC | STATUS = [NÃO FINALIZADA]"
        done

        docker stop master #master no polo eh o banco de sincronização - mudar nome do container de naster para IES e de sync para POLO
        while [ "$(docker inspect -f '{{.State.Running}}' master)" == true ]; do          
          echo "Aguardando stop do container master (IES)."
          sleep 5 #10 seconds
        done
        echo "CONTAINER MASTER | STATUS = [OFF]"

        
        docker restart moodle_IES
        while [ "$(docker inspect -f '{{.State.Running}}' moodle_IES)" == false ]; do          
          echo "Aguardando restart do container moodle."
          sleep 5 #10 seconds
        done

        echo "CONTAINER MOODLE REINICIADO | STATUS [OK]"

      else
        echo "--- Arquivo já sincronizado!!!... [NEXT]"
      fi
    done
    break;;
    

    [3]* ) 
          exit 0;;

      * ) echo "Por favor, digite sim ou nao!";;
  esac
done 

echo "Script rodou ate o fim"
echo 1 > $dirViewPath/syncFinalizada #Sinaliza ao PHP que a sincronização foi finalizada
