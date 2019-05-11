#!/bin/bash

echo " "
echo "-----------------------"
echo "Desinstalando AVA-Polos"
echo "-----------------------"

cd ../../

cd install/scripts/

if [ "$1" = "y" ]; then
	sudo bash uninstall_docker.sh y
else
	sudo bash uninstall_docker.sh
fi

sudo rm -r /opt/AVAPolos

echo " "
echo "-----------------------"
echo "Desinstalação concluída"
echo "-----------------------"
