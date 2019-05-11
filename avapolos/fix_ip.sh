#!/bin/bash

ip=$(bash install/scripts/get_ip.sh)
echo "IP: $ip"

sudo sed -i '/avapolos/d' /etc/hosts

sudo -- sh -c "echo '$ip avapolos' >> /etc/hosts"asd