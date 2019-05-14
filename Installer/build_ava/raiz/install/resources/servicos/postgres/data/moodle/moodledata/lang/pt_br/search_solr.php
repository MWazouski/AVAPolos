<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'search_solr', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   search_solr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'O servidor Solr especificado não está disponível ou o índice especificado não existe';
$string['connectionsettings'] = 'Configurações de conexão';
$string['errorcreatingschema'] = 'Erro ao criar o esquema Solr: {$a}';
$string['errorvalidatingschema'] = 'Erro ao validar o esquema do Solr: campo {$a->fieldname} não existe. Por favor, <a href="{$a->setupurl}">siga este link</a> para configurar os campos necessários.';
$string['extensionerror'] = 'A extensão do PHP Apache Solr não está instalada. Por favor, verifique a documentação.';
$string['fileindexing'] = 'Habilitar a indexação de arquivos';
$string['fileindexing_help'] = 'Se o seu Solr possuir suporte, esse recurso permite que Moodle envie arquivos para serem indexados.<br/>Você precisará reindexar todo o conteúdo do site depois de habilitar esta opção para que todos os arquivos sejam adicionados.';
$string['fileindexsettings'] = 'Configurações de indexação de arquivos';
$string['maxindexfilekb'] = 'Tamanho máximo dos arquivos (KB) para indexar';
$string['maxindexfilekb_help'] = 'Arquivos maiores que esse número de kilobytes não serão incluído na indexação de busca. Se definido como zero, arquivos de qualquer tamanho serão indexados.';
$string['minimumsolr4'] = 'Solr 4.0 é a versão mínima necessária para o Moodle';
$string['missingconfig'] = 'Seu servidor Apache Solr ainda não está configurado no seu Moodle.';
$string['multivaluedfield'] = 'O campo "{$a}" retornou uma matriz em vez de um escalar. Por favor, apague o índice atual, crie um novo e executar setup_schema.php antes dos dados de indexação em Solr.';
$string['nodatafromserver'] = 'Não há dados de servidor';
$string['pluginname'] = 'Solr';
$string['schemafieldautocreated'] = 'O campo "{$a}" já existe no esquema Solr. Provavelmente esqueceu-se de executar este script antes de indexar os dados e os campos foram criados automaticamente pelo Solr. Por favor apague esta indexação, crie uma nova e execute o script setup_schema.php novamente antes de indexar os dados no Solr.';
$string['schemasetupfromsolr5'] = 'Sua versão do servidor Solr é menor do que 5,0. Este script só pode definir o esquema se sua versão Solr é 5.0 ou superior. Você precisará configurar manualmente os campos no seu esquema de acordo com \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Procurar consultas na base de dados';
$string['searchinfo_help'] = 'O campo pesquisado pode ser especificado na pesquisa pelo prefixo com \'title:\', \'content:\', \'name:\', ou \'intro:\'. Por exemplo, ao pesquisar por \'title:notícias\' irão aparecer resultados com a palavra \'notícias\' no título.

Os operadores booleanos (\'AND\', \'OR\', \'NOT\') podem ser usados para combinar ou excluir palavras-chave.

Os caracteres coringa (\'*\' ou \'?\') podem ser usados para representar caracteres na pesquisa.';
$string['setupok'] = 'O esquema está pronto para ser utilizado.';
$string['solrauthpassword'] = 'Senha da autenticação por HTTP';
$string['solrauthuser'] = 'Nome de usuário da autenticação por HTTP';
$string['solrhttpconnectionport'] = 'Porta';
$string['solrhttpconnectiontimeout'] = 'Tempo Limite';
$string['solrhttpconnectiontimeout_desc'] = 'O tempo limite de conexão HTTP é o tempo máximo, em segundos, permitido para a operação de transferência de dados HTTP.';
$string['solrindexname'] = 'O nome de índice';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'O motor Solr não é o motor de busca configurado';
$string['solrsecuremode'] = 'Modo seguro';
$string['solrserverhostname'] = 'Nome do host';
$string['solrserverhostname_desc'] = 'Nome de domínio do servidor Solr.';
$string['solrsetting'] = 'Configurações do Solr';
$string['solrsslcainfo'] = 'Nome dos certificados CA SSL';
$string['solrsslcainfo_desc'] = 'Nome do arquivo que contém um ou mais certificados CA para verificar os pares com';
$string['solrsslcapath'] = 'Caminho dos certificados CA SSL';
$string['solrsslcapath_desc'] = 'Caminho do diretório que contém múltiplos certificados CA para verificar os pares com';
$string['solrsslcert'] = 'Certificado SSL';
$string['solrsslcert_desc'] = 'Nome do arquivo para um certificado privado PEM-formatted';
$string['solrsslkey'] = 'Chave SSL';
$string['solrsslkey_desc'] = 'Nome do arquivo para a chave privada PEM-formatted';
$string['solrsslkeypassword'] = 'Senha da chave SSL';
$string['solrsslkeypassword_desc'] = 'Senha para o arquivo da chave privada PEM-formatted';
