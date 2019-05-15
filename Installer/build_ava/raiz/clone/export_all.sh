#!/bin/bash
#rafaelV2
echo " "
echo "--------------------"
echo "Exportação AVA-Polos"
echo "--------------------"

source ../functions.sh
source ../variables.sh

database=$(cat ../install/scripts/database)

sudo mkdir temp

cd ..

echo "Executando sincronização..."

createControlRecord 0 E 'instaladorAvapolos'
stopDBMaster
###TO-DO: tornar moodle inacessivel
clearQueue 0
#apagando o registro de controle do clone para que uma nova clonagem possa ser gerada quando desejado

echo "Parando serviços..."

sudo bash stop.sh

echo "Copiando arquivos..."


sudo mkdir -p clone/temp/
sudo cp -r install clone/temp/
sudo cp start.sh clone/temp/
sudo cp stop.sh clone/temp/
sudo touch clone/temp/install/scripts/polo
sudo cp -r Export clone/temp
sudo cp -r Import clone/temp
sudo cp -R *.sh clone/temp
sudo rm -r clone/temp/Export/Fila/*
sudo rm -r clone/temp/Import/*

cd clone

case "$database" in

	"mysql")
	
		echo "MySQL selecionado"
		cp mysql.tar ../../../
		cd ../../../
		tar xfz mysql.tar
	;;

	"postgresql")

		echo "PostgreSQL selecionado"
		sudo rm temp/install/resources/servicos/postgresql.tar.gz
		cd ..
		sudo tar cpfz postgresql.tar.gz data
		mv postgresql.tar.gz clone/temp/install/resources/servicos/postgresql.tar.gz
	;;

	*)

		echo "Nenhum banco de dados selecionado."
		exit 2
	;;
			
esac

cd clone/temp

echo "Compactando serviços, pode demorar um pouco..."

echo "Compactando clonagem, pode demorar um pouco..."

tar cfz AVAPolos.tar.gz *
cd ..
sudo mkdir -p /opt/AVAPolos_installer_POLO/
sudo cp /opt/AVAPolos_installer/*.sh /opt/AVAPolos_installer_POLO
sudo cp /opt/AVAPolos_installer/*.desktop /opt/AVAPolos_installer_POLO
sudo cp /opt/AVAPolos_installer/*.ico /opt/AVAPolos_installer_POLO
sudo cp /opt/AVAPolos_installer/avapolos /opt/AVAPolos_installer_POLO
sudo mv temp/AVAPolos.tar.gz /opt/AVAPolos_installer_POLO/
sudo rm -r temp

echo "Compactando instalador, pode demorar um pouco..."

cd /opt/AVAPolos_installer_POLO/
makeself --target /opt/AVAPolos_installer/ --nooverwrite --needroot . AVAPolos_instalador_POLO "Instalador da solução AVAPolos" "./startup.sh"
cd /opt/AVAPolos/clone
cp /opt/AVAPolos_installer_POLO/AVAPolos_instalador_POLO .

startWiki
startMoodle
startDBMaster
stopDBSync

echo "
+------------------------------------------------------+
|                                                      |
|                      AVA-Polos                       |
|                                                      |
+------------------------------------------------------+
|                                                      |
|  Clonagem concluída!                                 |
|                                                      |
|  Aguarde a inicialização dos serviços.               |
|                                                      |
+------------------------------------------------------+
"
