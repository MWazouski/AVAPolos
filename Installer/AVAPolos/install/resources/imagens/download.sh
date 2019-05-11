#!/bin/bash

echo " "
echo "---------------------------"
echo "Download das imagens Docker"
echo "---------------------------"
echo " "

echo "Download das imagens"

docker pull avapolos/postgres_bdr:master
#docker pull mysql:5.7
docker pull avapolos/webserver:lite
docker pull avapolos/backup:stable
docker pull brendowdf/dspace-educapes
docker pull brendowdf/dspace-postgres-educapes:latest

#docker save --output mysql.tar mysql:5.7
docker save --output postgresql_master.tar avapolos/postgres_bdr:master
docker save --output webserver.tar avapolos/webserver:lite
docker save --output dspace.tar brendowdf/dspace-educapes
docker save --output db_dspace.tar brendowdf/dspace-postgres-educapes:latest
docker save --output backup.tar avapolos/backup:stable

echo " "
echo "------------------"
echo "Download concluído"
echo "------------------"
echo " "
