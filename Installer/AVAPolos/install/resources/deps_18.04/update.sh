#!/bin/bash

echo "---------------------------"
echo "Atualizando as dependências"
echo "---------------------------"

sudo rm *.deb

sudo apt-get update

if ! [ -x "$(command -v apt-rdepends)" ]; then
	sudo apt install apt-rdepends -y
fi

apt-get download $(apt-rdepends docker-ce|grep -v "^ ")

apt-get download $(apt-rdepends net-tools|grep -v "^ ")

apt-get download $(apt-rdepends openssh-server| grep -v "^ " | grep -v debconf-2.0)

apt-get download $(apt-rdepends unrar| grep -v "^ " | grep -v debconf-2.0)

apt-get download $(apt-rdepends makeself| grep -v "^ " | grep -v debconf-2.0)

chmod 744 *.deb

echo "-------"
echo "Sucesso"
echo "-------"
