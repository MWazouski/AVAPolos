#!/bin/bash

echo " "
echo "---------------------------------"
echo "Limpando e organizando diretórios"
echo "---------------------------------"

uid=$(id -u avapolos)

sudo rm -rf /opt/AVAPolos/AVAPolos.tar.gz

#Implementar isso em outro lugar
chown $uid:docker -R /opt/AVAPolos
