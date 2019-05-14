 #!/bin/bash
 #RafaelV3.0
 # PROJETO
 #     _                      ____            _               
 #    / \    __   __   __ _  |  _ \    ___   | |   ___    ___ 
 #   / _ \   \ \ / /  / _` | | |_) |  / _ \  | |  / _ \  / __|
 #  / ___ \   \ V /  | (_| | |  __/  | (_) | | | | (_) | \__ \
 # /_/   \_\   \_/    \__,_| |_|      \___/  |_|  \___/  |___/
 # UNIVERSIDADE FEDERAL DO RIO GRANDE - RS 

option=$1   # 1=export; 2=import; 4=exit;
username=$2


if [ ! "$option" = "1" ] && [ ! "$option" = "2" ]; then
   echo "Usage: sync.sh option moodleUser [pathToManualTar];
            --> option = 1 to export or 2 to import."
   exit 1
fi

source variables.sh
source functions.sh

#remove a flag de finalização caso ela já exista
[ -e $dirViewPath/syncFinalizada ] && $( rm $dirViewPath/syncFinalizada )
                                                
if [ "$option" = "1" ]; then     
    echo " ================= INICIANDO PROCESSO DE EXPORTAÇÃO =================\n"
    
    ###limpa arquivos tar anteriores
    rm $dirViewPath/dadosV*.tar.gz   

    queueExportFiles $username

    ###gera arquivo de exportação
    createExportFile "$exportDir.tar.gz"

   
    echo " ================= PROCESSO DE EXPORTAÇÃO CONCLUÍDO. ================="
    
    echo "$exportDir.tar.gz" > $dirViewPath/syncFinalizada #sinaliza ao PHP que a sincronização foi finalizada
elif [ "$option" = "2" ]; then

    exportDone=0
    tarImport="$dirPath/data/moodle/public/moodle/admin/tool/avapolos/view/dadosImportTemp.tar.gz" 
    if [ ! -z $3 ]; then
       tarImport=$3
    fi
    # mv -f "$dirPath/data/moodle/public/moodle/admin/tool/avapolos/view/dadosImportTemp.tar.gz" "$dirPath"
    tar -xpzf $tarImport -C "$dirPath/Import/"

    #Para cada arquivo que foi descompactado Backup_Import_XX_IES
    list=$(ls $dirImportPath | grep dadosV_)

    for nameFile in $list; do
        # verifica se o diretorio existe ou pula ele
        nameFile=$(basename $nameFile)
        echo "$dirImportPath/$nameFile"
        [ -e "$dirImportPath/$nameFile" ] || continue

        ### carregando dados sobre última exportação, última importação
	loadConfig	   

        #Pega o numero do arquivo a ser importado
        importNumber=$(cut -d'_' -f2 <<< "$nameFile")

        if [ "$importNumber" -le  "$lastImport" ]; then ## se este diretório já foi importado - skip
           echo "== Import número $importNumber já foi realizado, o último sync foi o de número $lastImport. Os dados não serão carregados novamente. =="
           continue
        fi  

	if [ $exportDone -eq 0 ]; then
      	   queueExportFiles $username
           exportDone=1
	fi

   	createControlRecord $importNumber I $username
	stopDBSync
        stopDBMaster  
        ### SUBSTITUIR DB_SYNC
	changeDBSync 
        
        ### Fazer a sincronização de arquivos usando rsync entre a pasta de dentro do import e a pasta de arquivos do moodle
        echo "-> SINCRONIZANDO ARQUIVOS..."
        rsync -avzh  "$dirImportPath/$nameFile/arquivos/filedir/" "$dirPath/data/moodle/moodledata/filedir/"
        echo "---> ...ARQUIVOS SINCRONIZADOS."
      	
        startSync $importNumber #inicia a sincronização do banco de dados e espera que ela acabe
        
	stopMoodle && startMoodle #reinicia o moodle

        #atualiza ultima importação realizada	

        ### Ajustando o arquivo
        echo "Último export realizado $instance: $nextExport | Último sync $instance realizado: $importNumber" > $configPath
	echo "============= Processo de importação finalizado. ======================"
    done
    echo 1 > $dirViewPath/syncFinalizada #Sinaliza ao PHP que a sincronização foi finalizada
fi

echo "Script ended!"

