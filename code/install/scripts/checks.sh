#!/bin/bash

if [ "$EUID" -ne 0 ]; then
    echo "Este script precisa ser rodado como root"
    exit
fi

version=$(lsb_release -rs)

if [ "$version" == "18.04" ] || [ "$version" == "16.04" ]; then
    echo "Ubuntu $version é compatível com AVAPolos, continuando..."
else
    echo "Seu sistema é incompatível com a solução AVAPolos"
    exit 1
fi

#Se apache estiver instalado, mudar a porta dos containers moodle e wiki

#Checagem de PORTAS, não de serviços rodando.
services=("apache2")

for i in "${services[@]}"; do 
    if $(systemctl is-active --quiet $i); then
        echo "O servico $i esta rodando, será finalizado"
        systemctl stop "$i".service
    fi
done


if [ -x "$(command -v docker)" ]; then
    echo "Docker já está instalado"
    case '$1' in
        'y')
            bash uninstall_docker.sh $1
            bash install_docker.sh $1
        ;;
        'n')
            echo "continuando..."
        ;;
        *)
           echo "Deseja instalar a versão compatível com AVAPolos? (y/n)"
           read option
           if [ "$option" = "y" ]; then
            bash uninstall_docker.sh
            bash install_docker.sh
           else
            echo "continuando..."
           fi 
        ;;
    esac
else
    bash install_docker.sh
fi


while fuser /var/lib/dpkg/lock >/dev/null 2>&1 ; do
    echo -en "\rO dpkg está ocupado, esperando..." 
    sleep 3
done 
