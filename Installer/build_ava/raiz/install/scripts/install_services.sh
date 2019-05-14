#!/bin/bash

echo " "
echo "-------------------"
echo "Instalando Serviços"
echo "-------------------"

database=$(cat database)
uid=$(id -u avapolos)
ip=$(bash get_ip.sh)
working_dir=$PWD

echo "Ip detectado: $ip"

cd ../resources/servicos

case "$database" in

	"mysql")
	
		echo "MySQL selecionado"
		cd mysql.tar ../../../
		cd ../../../
		tar xfz mysql.tar
	;;

	"postgresql")

		echo "PostgreSQL" 
		tar xf postgresql.tar.gz
		mv data ../../../
		cd ../
		cp sync/functions.sh ../../
		cp sync/createBkp.sh ../../
		cp sync/restoreBkp.sh ../../
		cp sync/sync.sh ../../
		cp sync/variables.sh ../../

		sed -i 's/INSTANCENAME/'"IES"'/g' ../../variables.sh
		sed -i 's/SERVER/'"$ip"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/sincro.php		
		mkdir -p ../../Export/Fila
		mkdir -p ../../Import
	;;

	*)

		echo "Nenhum banco de dados selecionado."
		exit 2
	;;
			
esac

if  [ -f ../scripts/polo ]; then
	echo "Esta instalação é um polo, invertendo estruturas..."
	sed -i 's/172.12.0.2/'"172.12.0.3"'/g' ../../data/moodle/public/moodle/config.php
	sed -i 's/SCRIPT/'"avapolos_sync_polo.sh"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/functions.php
	cp sync/sincro.php ../../data/moodle/public/moodle/admin/tool/avapolos/view/
	cp sync/variables.sh ../../
	sed -i 's/SERVER/'"$ip"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/sincro.php
	sed -i 's/avapolos_sync_ies.sh/'"avapolos_sync_polo.sh"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/functions.php
	sudo sed -i '/avapolos/d' /etc/hosts
	sudo -- sh -c "echo '$ip avapolos' >> /etc/hosts"
	sed -i 's/INSTANCENAME/'"POLO"'/g' ../../variables.sh
else
	sed -i 's/SCRIPT/'"avapolos_sync_ies.sh"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/functions.php
	sed -i 's/SERVER/'"$ip"'/g' ../../data/moodle/public/moodle/admin/tool/avapolos/view/sincro.php
	sudo sed -i '/avapolos/d' /etc/hosts
	sudo -- sh -c "echo '$ip avapolos' >> /etc/hosts"
fi

sed -i 's/DSPACEASSETSTORE/'"\/opt\/dspace\/assetstore"'/g' $working_dir/../../docker-compose.yml
sed -i 's/DSPACEDIRSOLR/'"\/opt\/dspace\/data-solr\/data"'/g' $working_dir/../../docker-compose.yml
sed -i 's/DSPACEDB/'"\/opt\/dspace\/database\/var\/lib\/postgresql\/data\/"'/g' $working_dir/../../docker-compose.yml

# sudo mkdir -p /opt/dspace/database
# sudo chown root:root /opt/dspace -R
# sudo chown 999:docker /opt/dspace/database -R
# sudo chmod 755 /opt/dspace/data-solr -R

//FIXME: PERMISSÕES DO CONTAINER POSTGRESQL DO EDUCAPES


# if [ -d /opt/dspace/assetstore ]; then
# 	echo "Recursos do DSpace já instalados."
# 	echo -e "true" > ../scripts/educapes
# 	chmod 666 ../scripts/educapes
# else
# 	if [ -f "/opt/dspace/volumesEducapes.part01.rar" ]; then
# 		#cmd="cd /opt/dspace/ && unrar x volumesEducapes.part01.rar && echo -e 'true' > /opt/AVAPolos/install/scripts/educapes ";
# 		#${cmd} &>/dev/null &disown;
# 		echo -e "false" > ../scripts/educapes
# 		chmod 666 ../scripts/educapes
# 		cd /opt/dspace/ 
# 		unrar x volumesEducapes.part01.rar
# 	else
# 		echo "Baixando recursos do DSpace, isso pode demorar, o DSpace NÃO será inicializado até o download ser concluído. Continuando a instalação"
# 		cmd="sudo bash download_dspace.sh";
# 		${cmd} &>/dev/null &disown;
# 		echo -e "false" > ../scripts/educapes
# 		chmod 666 ../scripts/educapes
# 	fi
# fi

cd $working_dir/../../

chown $uid:docker -R data/

echo "Serviços instalados com sucesso."
