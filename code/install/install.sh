#!/bin/bash
#EXIT CODES: 0 - OK, 1 - SILENT EXIT, 2 - ERRO

echo " "
echo "--------------------"
echo "Instalando AVA-Polos"
echo "--------------------"
echo " "

cd ../install/scripts/

scripts=( "checks.sh" "setup_users.sh"  "install_compose.sh" "load_images.sh" "install_services.sh" "cleanup.sh" )

for s in "${scripts[@]}"; do

	if [ -z $1 ]; then
		sudo bash $s
	else
		if [ $1 = 'y' ]; then
			sudo bash $s $1
		fi
	fi

	code=$?
	
	if [ "$code" -ne 0 ]; then
		 case  $code  in
            1)       
     		    exit
     		    ;;
            2)
				echo "Erro no script $s"
				exit
				;;
     		*)              
        esac 
    fi		
done

echo "
+------------------------------------------------------+
|                                                      |
|                      AVA-Polos                       |
|                                                      |
+------------------------------------------------------+
|                                                      |
|  Instalação Concluída!                               |
|                                                      |
|  Aguarde a inicialização dos serviços.               |
|                                                      |
+------------------------------------------------------+
"

cd ../../

sudo bash start.sh
