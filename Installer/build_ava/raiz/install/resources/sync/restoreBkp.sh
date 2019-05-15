#!/bin/bash

source variables.sh
source functions.sh

if [ ! $# -eq 1 ]; then
   echo "Wrong usage: tar file name should be passed."
else
   stopMoodle 
   stopDBMaster
   stopDBSync

   rm -rf config.txt data/$dataDirMaster data/$dataDirSync data/moodle/moodledata/filedir Export/ Import/*
   tar -xvzf $1

   startMoodle
   startDBMaster

fi



