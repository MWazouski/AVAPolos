#!/bin/bash

if [ "$EUID" -ne 0 ]; then
    echo "Este script precisa ser rodado como root, digite no terminal: sudo bash avapolos.sh"
    exit
fi

WD=$PWD

#Case duplicado, otimizar
#Se auto, as vars são preenchidas com os argumentos de execução
#Se manual, as vars são preenchidas pelo usuário

check_install_read() {
  if [ -d "/opt/AVAPolos" ]; then
    echo "Já existe uma instalação AVAPolos, selecione uma das seguintes opções"
    echo "0 - Sobrescrever instalação"
    echo "1 - Exportar instalador + dados"
    echo "2 - Desinstalar o AVA-Polos existente"
    read option
    case $option in
        0)
          #Rodar uninstall
          if [ -f "/opt/AVAPolos/install/scripts/uninstall_avapolos.sh" ]; then
            cd /opt/AVAPolos/install/scripts/
            sudo bash uninstall_avapolos.sh
          else
            echo "Não foi possível encontrar o script de desinstalação. Removendo na força bruta."
            sudo rm -rf /opt/AVAPolos
          fi
          cd $WD
          install_ava
          exit
        ;;
        1)
          export_all
          exit
        ;;

        2)
          uninstall
          exit
        ;;

        *)
          echo "Nenhuma opção foi selecionada"
          exit
        ;;
    esac
  else
    install_ava
    exit
  fi
}

check_install_auto() {
  if [ $1 = 'y' ]; then
    if [ -d "/opt/AVAPolos" ]; then
      case $2 in
          0)
            #echo "Efetuando cópia de segurança, pode demorar um pouco."

            #sudo cp -r /opt/AVAPolos/* /opt/AVAPolos_old/
            if [ -f "/opt/AVAPolos/install/scripts/uninstall_avapolos.sh" ]; then
              cd /opt/AVAPolos/install/scripts/
              sudo bash uninstall_avapolos.sh y
            else
              echo "Não foi possível encontrar o script de desinstalação. Removendo na força bruta."
              sudo rm -rf /opt/AVAPolos
            fi
            cd $WD          
            install_ava y $3
            exit
          ;;
          1)
            export_all y
            exit
          ;;

          2)
            uninstall y
            exit
          ;;

          *)
            exit
          ;;
      esac
    else
      install_ava y $3
      exit
    fi
  else
    echo "Instalação cancelada."
    exit
  fi
}

install_ava () {
  {
    echo "Argumentos passados: $1 $2 $3"
    echo "Criando diretório de instalação."
    sudo mkdir -p /opt/AVAPolos
    if [ -f "AVAPolos.tar.gz" ]; then
      echo "Movendo arquivos de instalação."
      sudo cp AVAPolos.tar.gz /opt/AVAPolos/
      cd /opt/AVAPolos/
    else
      echo "O arquivo 'AVAPolos.tar.gz' não foi encontrado, certifique-se que o mesmo se encontra nesse diretório: $PWD"
      exit
    fi
    echo "Extraindo arquivos."
    sudo tar xf AVAPolos.tar.gz
    cd install
    #Otimizar com variáveis no inicio da execução
    if ! [ -f /opt/AVAPolos/install/scripts/database ]; then
      if [ -z $2 ]; then
        echo "Deseja instalar qual banco de dados? (postgresql/mysql)"
        sudo touch scripts/database
        sudo chmod 777 scripts/database
        read option
          if [ "$option" = "postgresql" ]; then
            echo "PostgreSQL selecionado."
            echo "postgresql" >> scripts/database
          elif [ "$option" = "mysql" ]; then
            echo "MySQL selecionado."
            echo "mysql" >> scripts/database
          else
            echo "Nenhum banco de dados selecionado."
            exit;
          fi
      else
        if [ "$2" = "postgresql" ]; then
          echo "PostgreSQL selecionado."
          echo "postgresql" >> scripts/database
        elif [ "$2" = "mysql" ]; then
          echo "MySQL selecionado."
          echo "mysql" >> scripts/database
        else
          echo "Nenhum banco de dados selecionado."
          exit;
        fi
      fi
    fi
    ##
    #sudo chmod +x install.sh

    if [ $1='y' ]; then
      sudo bash install.sh y
    else
      sudo bash install.sh
    fi
    exit
  } 2>&1 | tee install_ava.log
}

uninstall() {
  {
    echo "Argumentos passados: $1 $2"
    if [ -f "/opt/AVAPolos/install/scripts/uninstall_avapolos.sh" ]; then
      cd /opt/AVAPolos/install/scripts
      if [ $1='y' ]; then
        sudo bash uninstall_avapolos.sh y
      else
        sudo bash uninstall_avapolos.sh
      fi
    else
      echo "Não foi possível encontrar o script de desinstalação. Removendo na força bruta."
      sudo rm -rf /opt/AVAPolos
    fi    
  } 2>&1 | tee uninstall.log
}

export_all() {
  {

    echo "Argumentos passados: $1 $2"
    
    if [ -f "AVAPolos.tar.gz" ]; then
      mv AVAPolos.tar.gz AVAPolos.tar.gz.old
    fi

    cd /opt/AVAPolos/clone
    sudo bash export_all.sh
    
    echo "Mova o arquivo 'AVAPolos_instalador.tar.gz' para o disco removível."
    sleep 2
    nautilus $PWD

  } 2>&1 | tee export_all.log
}

## Otimizar
if [ -z "$1" ]; then

  check_install_read

else

  check_install_auto $1 $2 $3

fi
