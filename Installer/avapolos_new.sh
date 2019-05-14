#!/bin/bash

if [ "$EUID" -ne 0 ]; then
    echo "Este script precisa ser rodado como root, digite no terminal: sudo bash avapolos.sh"
    exit
fi

source ava_functions.sh
WD=$PWD

# arg1 -> y
# arg2 -> 0, 1, 2
# arg3 -> mysql, postgresql


main () {
  if [ "$arg1" = "y" ]; then
    if [ -d "/opt/AVAPolos" ]; then
      case $option in
        0)
          overwrite_ava
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

          3)
            overwrite_ava dev
            exit
          ;;

          *)
            exit
          ;;
      esac


  case $arg2
}

overwrite_ava() {
  echo "Efetuando cópia de segurança, pode demorar um pouco."
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
  if [ "$1" = "dev" ]
}

check_install_auto() {
  if [ $1 = 'y' ]; then
    if [ -d "/opt/AVAPolos" ]; then
      case $2 in
          0)
            #
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



if [ $# -eq 0 ]; then

  getVarsFromUser

else

  getVarsFromArguments $1 $2 $3

fi
