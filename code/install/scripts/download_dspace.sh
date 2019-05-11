#!/bin/bash

uid=$(id -u $user)

downloads=( "http://uploads.capes.gov.br/files/volumesEducapes.part01.rar" 
"http://uploads.capes.gov.br/files/volumesEducapes.part02.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part03.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part04.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part05.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part06.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part07.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part08.rar"
"http://uploads.capes.gov.br/files/volumesEducapes.part09.rar")

cd /opt/dspace/

for f in "${downloads[@]}"; do
    echo "Download do arquivo: $f. (9 partes)" >> status.log
    wget --tries=999 -c $f
done

unrar x volumesEducapes.part01.rar

echo -e "true" > /opt/AVAPolos/install/scripts/educapes 