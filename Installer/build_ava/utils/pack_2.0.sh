#!/bin/bash

#Implementando updates nos arquivos compactados em vez de refazer todas as cópias
#https://askubuntu.com/questions/267344/how-can-i-update-a-tar-gz-file

echo " "
echo "+---------------------------------+"
echo "|Empacotamento AVAPolos versão 2.0|"
echo "+---------------------------------+"
echo " "

start=$(date +%s)

echo -e "Assegurando que as permissões estão corretas.\r"

#Não é dinâmico, não esquecer de mudar caso trocar de máquina
#sudo chown biro:biro -R /home/biro/souza/Instalador/

mkdir -p ../pack/uncompressed
mkdir -p ../pack/compressed
mkdir -p ../pack/files
mkdir -p ../stage/

cd ../raiz

echo "Copiando arquivos."

cp -u -r clone ../pack/files
cp -u -r install ../pack/files
cp -u -r start.sh ../pack/files
cp -u -r stop.sh ../pack/files  
cp -u -r fix_ip.sh ../pack/files

# tar cfz postgresql.tar data

# mv -f postgresql.tar ..

cd ../pack/files
cd install/resources/servicos/postgres
# if [ -f ../../../../../uncompressed/postgresql.tar ]; then
#     echo "Atualizando arquivo postgresql.tar para economizar tempo."    
#     tar uvf ../../../../../uncompressed/postgresql.tar data
# else
    echo "Criando arquivo postgresql.tar"
    tar cf ../../../../../uncompressed/postgresql.tar data
# fi
echo "Zipando arquivo postgresql.tar"
gzip -1 ../../../../../uncompressed/postgresql.tar -c > ../../../../../compressed/postgresql.tar.gz
cp ../../../../../compressed/postgresql.tar.gz ../
cd ../
rm -rf postgres
rm -rf postgresql.tar
cd ../../../

if [ -f ../uncompressed/AVAPolos.tar ]; then
    echo "Atualizando arquivo AVAPolos.tar para economizar tempo."
    tar uvf ../uncompressed/AVAPolos.tar *
else
    echo "Criando arquivo AVAPolos.tar"
    tar cf ../uncompressed/AVAPolos.tar *
fi

echo "Zipando arquivo AVAPolos.tar"
gzip -1 ../uncompressed/AVAPolos.tar -c > ../compressed/AVAPolos.tar.gz

cp ../compressed/AVAPolos.tar.gz ../../stage/

cd ../../stage

makeself --target /opt/AVAPolos_installer/ --nooverwrite --needroot . AVAPolos_instalador_IES "Instalador da solução AVAPolos" "./startup.sh"

mv AVAPolos_instalador_IES ../
rm -rf AVAPolos.tar.gz

# if [ -f ../uncompressed/AVAPolos_instalador_IES.tar ]; then
#     echo "Atualizando arquivo AVAPolos_instalador_IES.tar para economizar tempo."
#     tar uvf ../uncompressed/AVAPolos_instalador_IES.tar ../compressed/AVAPolos.tar.gz avapolos avapolos.sh
# else
#     tar cf ../uncompressed/AVAPolos_instalador_IES.tar ../compressed/AVAPolos.tar.gz avapolos avapolos.sh
# fi

# gzip -1 ../uncompressed/AVAPolos_instalador_IES.tar -c > ../compressed/AVAPolos_instalador_IES.tar.gz

# cp ../compressed/AVAPolos_instalador_IES.tar.gz ../../

end=$(date +%s)

runtime=$((end-start))

echo "
+-------------------------+
| Empacotamento Concluído |
+-------------------------+
Em "$runtime"s.
"
