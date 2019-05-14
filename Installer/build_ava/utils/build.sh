#!/bin/bash

clear

echo " "
echo "+-----------------------+"
echo "|Empacotamento AVA-Polos|"
echo "+-----------------------+"
echo " "

start=$(date +%s)

cd ..
build="$PWD"
cd raiz
raiz="$PWD"

rm -rf "$raiz"/install/resources/servicos/postgres/data

cp -ru /opt/AVAPolos/data "$raiz"/install/resources/servicos/postgres

echo -e "Assegurando permissões corretas.\r"
sudo chown $USER:$USER -R "$raiz"

cd "$raiz"/install/resources/servicos/postgres

sudo tar cfz postgresql.tar.gz data

mv -f postgresql.tar.gz ..

cd "$raiz"

if [ -f "AVAPolos.tar.gz" ]; then
	sudo rm AVAPolos.tar.gz
fi

if [ -f "AVAPolos_instalador_IES.tar.gz" ]; then
	sudo rm AVAPolos_instalador_IES.tar.gz
fi

if [ -d "pack" ]; then
	sudo rm -r pack
fi

mkdir -p ../pack
mkdir -p ../stage

echo -e "Copiando arquivos.\r"

cp -ru clone ../pack
cp -ru install ../pack
cp -u start.sh ../pack
cp -u stop.sh ../pack
cp -u fix_ip.sh ../pack

cd ../pack

echo -e "Empacotando.\r"

tar cfz AVAPolos.tar.gz *

mv AVAPolos.tar.gz ../stage

cd ../stage

#makeself --target "$build"/instalador/ --needroot . AVAPolos_instalador2.0_IES "Instalador da solução AVAPolos" "./startup.sh"
makeself --target /opt/AVAPolos_instaler/ --needroot . AVAPolos_instalador_3.0_IES "Instalador da solução AVAPolos" "./startup.sh"

rm -rf AVAPolos.tar.gz
mv -f AVAPolos_instalador_3.0_IES ../instalador/
cd ..
if [ -d "pack" ]; then
	sudo rm -r pack
fi

end=$(date +%s)

runtime=$((end-start))

echo "
+-------------------------+
| Empacotamento Concluído |
+-------------------------+
Em "$runtime"s.
"
