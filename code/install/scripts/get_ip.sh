#!/bin/bash

myip=$(hostname -I | grep -Eo '^[^ ]+')
echo $myip