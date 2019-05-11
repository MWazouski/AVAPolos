#!/bin/bash

set -e

source functions.sh
source variables.sh

if ! ps ax | grep -v grep | grep docker > /dev/null
then
    echo "Docker não está rodando, inicializando.."
    sudo systemctl start docker
fi


#Workaround para bug do docker
for iface in $(ip -o -4 addr show | grep 172.12 | awk '{print $2}'); do
	sudo ip link delete $iface
done

sudo docker-compose up --no-start

startWiki
startMoodle
startDBMaster
stopDBSync

# if [ "$(cat install/scripts/educapes)" = "true" ]; then
    startEducapes
# fi

echo "
+------------------------------------------------------+
|                                                      |
|  Serviços iniciados!                                 |
|                                                      |
|  Acesse o seguinte endereço no seu navegador:        |
|                                                      |
|  http://avapolos/                                    |
|                                                      |
+------------------------------------------------------+
"

sleep 10
