#!/bin/bash

if [ "$EUID" -ne 0 ]; then
    echo "Este script precisa ser rodado como root"
    exit
fi

user="avapolos"

echo "Criando usuário avapolos."
useradd -s /bin/bash -c "Usuário da solução AVA-Polos" -m -N -g docker -G sudo $user

#Checar segurança, testar ssh por chave privada para não precisar de senha, nesse caso -s nologin
echo -e "avapolos\navapolos" | sudo passwd $user

uid=$(id -u $user)
echo "UID: $uid"

##TESTAR