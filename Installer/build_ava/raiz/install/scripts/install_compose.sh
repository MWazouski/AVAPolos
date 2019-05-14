#!/bin/bash

if [ "$EUID" -ne 0 ]
  then echo "Este script precisa ser rodado como root."
  exit
fi

echo " "
echo "------------------"
echo "Instalando Compose"
echo "------------------"

database=$(cat database)
uid=$(id -u avapolos) 

cp ../resources/docker-compose /usr/local/bin/
chmod 755 /usr/local/bin/docker-compose

if [ -x "$(command -v docker-compose)" ]; then
  echo "Compose instalado com sucesso."
else
	echo "Houve um erro na instalação do compose, tente novamente."
	exit 1
fi 

if [ "$database" = "postgresql" ]; then

	cp ../resources/stacks/avapolos_postgresql.yml ../../
	sed -i 's/USER/'"$uid"'/g' ../../avapolos_postgresql.yml
	mv ../../avapolos_postgresql.yml ../../docker-compose.yml

elif [ "$database" = "mysql" ]; then

	cp ../resources/stacks/avapolos_mysql.yml ../../
    sed -i 's/USER/'"$uid"'/g' ../../avapolos_mysql.yml
    mv ../../avapolos_mysql.yml ../../docker-compose.yml

else
	echo "Erro na seleção de banco."
	exit 1
fi
