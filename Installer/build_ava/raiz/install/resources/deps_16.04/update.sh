#!/bin/bash

if [ "$EUID" -ne 0 ]; then
	echo "Este script precisa ser rodado como root"
	exit
fi

echo "---------------------------"
echo "Atualizando as dependências"
echo "---------------------------"

rm *.deb

sudo apt-get update

apt-get download $(apt-rdepends docker-ce|grep -v "^ ")

chmod 744 *.deb

echo "-------"
echo "Sucesso"
echo "-------"
