#!/bin/bash

if [ "$EUID" -ne 0 ]
  then echo "Este script precisa ser rodado como root."
  exit
fi

database=$(cat database)

echo " "
echo "------------------"
echo "Carregando imagens"
echo "------------------"
echo "$database selecionado."

cd ../resources/imagens/

#Mudar nomenclatura das imagens
docker load -i $database"_master.tar"
docker load -i "backup.tar"
docker load -i "webserver.tar"
docker load -i "dspace.tar"
docker load -i "db_dspace.tar"

echo "Imagens carregadas com sucesso."
