#!/bin/bash
#rafael3.0
#VARIABLES
instance="INSTANCENAME" #possible values: IES | POLO # CASE SENSITIVE!!!
containerPoloName="db_moodle_polo"
containerIESName="db_moodle_ies"
containerMoodleName="moodle"
containerWikiName="wiki"
containerDBWikiName="db_wiki"
containerBackupName="backup"
containerDSPaceName="educapes"
containerDBDSPaceName="dspacedb"

dirPath="/opt/AVAPolos"
configPath="$dirPath/config.txt"
dirExportPath="$dirPath/Export/Fila"
dirImportPath="$dirPath/Import"
dirViewPath="$dirPath/data/moodle/public/moodle/admin/tool/avapolos/view"

### VARIABLES SET AUTOMATICALLY - DO NOT TOUCH THEM
if [ "$instance" = "POLO" ]; then
   dataDirMaster="db_moodle_polo";
   dataDirSync="db_moodle_ies";
   containerDBMasterName=$containerPoloName
   containerDBSyncName=$containerIESName
   complement="IES"
elif [ "$instance" = "IES" ]; then
   dataDirMaster="db_moodle_ies";
   dataDirSync="db_moodle_polo";
   containerDBMasterName=$containerIESName
   containerDBSyncName=$containerPoloName
   complement="POLO"
fi

### END

dirDBMaster="$dirPath/data/$dataDirMaster"
dirDBSync="$dirPath/data/$dataDirSync"
dirLogPathMaster="$dirDBMaster/pg_log"
dirLogPathSync="$dirDBSync/pg_log"


lastExport=0
nextExport=0
lastImport=0
exportDir=""
