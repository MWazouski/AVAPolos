#!/bin/bash

source variables.sh
source functions.sh

if [ ! $# -eq 1 ]; then
   echo "usage: provide the tar name output"
else
   stopMoodle
   stopDBMaster
   stopDBSync

   tar -cvzf $1 config.txt data/$dataDirMaster data/$dataDirSync data/moodle/moodledata/filedir Export/

   startMoodle
   startDBMaster
fi
