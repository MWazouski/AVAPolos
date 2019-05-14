#!/bin/bash

if [ "$EUID" -ne 0 ]
  then echo "Este script precisa ser rodado como root."
  exit
fi

echo " "
echo "--------------------"
echo "Desinstalando Docker"
echo "--------------------"

sudo systemctl stop docker.service
sudo systemctl stop containerd.service

while fuser /var/lib/dpkg/lock >/dev/null 2>&1 ; do
    echo -en "\rO dpkg está ocupado, esperando..." 
    sleep 3
done 

sudo apt-get --fix-broken install -y

sudo apt-get purge -y docker-engine docker docker.io docker-ce docker-ce-cli containerd.io
sudo apt-get autoremove -y --purge docker-engine docker docker.io docker-ce docker-ce-cli containerd.io

if [ "$1" = "y" ]; then   
  echo "Removendo arquivos do Docker."
	sudo rm -rf /var/lib/docker
	sudo rm -f /etc/apparmor.d/docker
else
    echo "Deseja remover todos os dados do Docker? É recomendável fazer uma instalação limpa (y/n)"
    read option
    
    if [ "$option" = "y" ]; then
      echo "Removendo arquivos do Docker."
      sudo rm -rf /var/lib/docker
		  sudo rm -f /etc/apparmor.d/docker
    else 
      echo "continuando..."
    fi 
fi

if [ -x "$(command -v docker)" ]; then
  echo "Ocorreu um erro na desinstalação do docker, tente novamente."
  exit 1  
else
  echo "Docker desinstalado com sucesso."
fi
