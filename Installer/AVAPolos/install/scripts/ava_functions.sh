#!/bin/bash

# arg1 -> yes
# arg2 -> 0, 1, 2
# arg3 -> mysql, postgresql

greet() {
  echo ""
  echo "+----------------------+"
  echo "|Bem vindo ao AVA-Polos|"
  echo "+----------------------+"
  echo ""
  echo "Universidade Federal do Rio Grande - FURG"
  echo "Centro de Ciências Computacionais - C3"
  echo "Coordenação de Aperfeiçoamento de Pessoal de Nível Superior - CAPES"
  echo ""
}

getVarsFromArguments() {
  arg1=$(tr '[:upper:]' '[:lower:]' <<< "$1" )
  arg2=$(tr '[:upper:]' '[:lower:]' <<< "$2" )
  arg3=$(tr '[:upper:]' '[:lower:]' <<< "$3" )
}

getVarsFromUser() {
  if [ -d "/opt/AVAPolos" ]; then
    arg3=$(cat /opt/AVAPolos/install/scripts/database)
    echo "Já existe uma instalação AVAPolos, selecione uma das seguintes opções"
    echo "0 - Sobrescrever instalação"
    echo "1 - Exportar instalador + dados"
    echo "2 - Desinstalar o AVA-Polos existente"
    read option

    option=$(tr '[:upper:]' '[:lower:]' <<< "$option" )
    
  else
    echo "Escolha uma base de dados (mysql/postgresql)"
    yes="y"    
    read database
    option="0"
  fi
}

evaluateArgs() {
  arg1=$(tr '[:upper:]' '[:lower:]' <<< "$1" )
  arg2=$(tr '[:upper:]' '[:lower:]' <<< "$2" )
  arg3=$(tr '[:upper:]' '[:lower:]' <<< "$3" )

  if ! [ "$arg1" = "y" ]; then
    echo "Instalação Cancelada."
    exit
  elif ! [ [ "$arg2" = "0" ] || [ "$arg2" = "1" ] || [ "$arg2" = "2" ] ]; then
    echo "Opção de Instalação Incorreta."
    exit
  elif ! [ [ "$arg3" = "postgresql" ] || [ "$arg3" = "mysql" ] ]; then
    echo "Opção de database Incorreta."
    exit
  else
    echo "Argumentos inseridos corretamente, continuando instalação."
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