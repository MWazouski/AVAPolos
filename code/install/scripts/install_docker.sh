#!/bin/bash

if [ "$EUID" -ne 0 ]
  then echo "Este script precisa ser rodado como root."
  exit
fi

version=$(lsb_release -rs)
dir="deps_$version"

echo " "
echo "-----------------"
echo "Instalando Docker"
echo "-----------------"

cd ../resources/"$dir"/
dpkg -i *.deb

if [ -x "$(command -v docker)" ]; then
  echo "Docker instalado com sucesso."
else
	echo "Houve um erro na instalação do Docker, tente novamente."
	exit 1
fi 
