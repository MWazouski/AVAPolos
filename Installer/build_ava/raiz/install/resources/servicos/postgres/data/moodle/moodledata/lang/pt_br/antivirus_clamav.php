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
 * Strings for component 'antivirus_clamav', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV falhou. A mensagem de erro foi {$a}. Eis o resultado do ClamAV:';
$string['clamfailureonupload'] = 'Na falha do ClamAV';
$string['configclamactlikevirus'] = 'Tratar arquivos como vírus';
$string['configclamdonothing'] = 'Tratar arquivos como seguros';
$string['configclamfailureonupload'] = 'Se você configurou o Clam para escanear arquivos anexados e ele está configurado incorretamente ou falha ao executar por alguma razão desconhecida, como ele deveria comportar? Se você escolher \'Tratar arquivos como vírus\', eles serão movidos para a área de quarentena ou excluídos. Se você escolher \'Tratar arquivos como seguros\', eles serão movidos para o diretório de destino normalmente. Em ambos os casos, os administradores receberão um alerta de que o Clam falhou. Se você escolher \'Tratar arquivos como vírus\' e for alguma razão o Clam falha ao executar (geralmente porque você informou um caminho inválido para o Clam), TODOS os arquivos anexados serão movidos para a área de quarentena ou excluídos. Tenha cuidado com esta configuração.';
$string['errorcantopensocket'] = 'A ligação ao socket de domínio UNIX resultou no erro {$a}';
$string['errorclamavnoresponse'] = 'O Antivírus ClamAV não responde; verifique o estado de execução do daemon.';
$string['errornounixsocketssupported'] = 'O transporte do socket de domínio Unix não é suportado neste sistema. Por favor utilize antes a opção da linha de comandos.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ativar o Clam durante o upload de arquivos, mas o percurso indicado para o acesso de Clam AV, {$a}, não é válido.';
$string['pathtoclam'] = 'Linha de comando';
$string['pathtoclamdesc'] = 'Se o método de execução estiver configurado para "linha de comandos", adicione o caminho para o Antivírus ClamAV aqui. No Linux será /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket de domínio Unix';
$string['pathtounixsocketdesc'] = 'Se o método de execução estiver configurado para "socket de domínio Unix", adicione o caminho para o Antivírus ClamAV aqui. No Debian Linux isto será /var/run/clamav/clamd.ctl. Por favor certifique-se de que o daemon clamav tem acesso de leitura aos arquivos carregados, a forma mais fácil de garantir que é adicionar \'clamav\' utilizador ao seu grupo do webserver (\'www-data\' no Debian Linux).';
$string['pluginname'] = 'Antivírus ClamAV';
$string['quarantinedir'] = 'Diretório da quarentena';
$string['runningmethod'] = 'Método de execução';
$string['runningmethodcommandline'] = 'Linha de comando';
$string['runningmethoddesc'] = 'Método de execução do Antivírus ClamAV. A linha de comandos é utilizada por predefinição, contudo em sistemas Unix pode ser conseguido um melhor desempenho através da utilização de sockets do sistema.';
$string['runningmethodunixsocket'] = 'Socket de domínio Unix';
$string['unknownerror'] = 'Erro desconhecido com ClamAV.';
