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
 * Strings for component 'local_staticpage', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   local_staticpage
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Forçar o mod_rewrite no Apache';
$string['apacherewrite_desc'] = 'Apresentar páginas estáticas apenas com o URL limpo, reescrito pelo mod_rewrite do Apache. Veja o arquivo README para detalhes.';
$string['available'] = 'Disponível';
$string['cleanhtml'] = 'Limpeza do código HTML';
$string['cleanhtml_desc'] = 'Configurar se o código HTML da página estática deve ser limpo (e, portanto, tags especiais como &lt;iframe&gt; serão removidas). Veja o README para detalhes.';
$string['cleanhtmlno'] = 'Não limpar o código HTML';
$string['cleanhtmlyes'] = 'Limpar o código HTML';
$string['documentheadingsource'] = 'Fonte de dados do cabeçalho do documento';
$string['documentheadingsource_desc'] = 'Fonte de dados do cabeçalho do documento da página estática';
$string['documentnavbarsource'] = 'Fonte de dados do título do item de breadcrumb';
$string['documentnavbarsource_desc'] = 'Fonte de dados do título do item de breadcrumb da página estática (usado no "Navbar" do Moodle)';
$string['documents'] = 'Documentos';
$string['documents_desc'] = 'Arquivos .html com o código HTML das páginas estáticas. Veja o arquivo README para detalhes.';
$string['documenttitlesource'] = 'Fonte de dados do título do documento';
$string['documenttitlesource_desc'] = 'Fonte de dados do título do documento de páginas estáticas (usado na barra de título do navegador)';
$string['documenttitlesourceh1'] = 'Primeira tag h1 no código HTML (geralmente localizada logo após a abertura da tag body)';
$string['documenttitlesourcehead'] = 'Primeira tag de título no código HTML (geralmente localizada na tag head)';
$string['forcelogin'] = 'Forçar login';
$string['forcelogin_desc'] = 'Apresentar páginas estáticas somente para usuários autenticados ou também para visitantes. Esse comportamento pode ser definido especificamente para páginas estáticas ou para considerar a configuração global de forçar autenticação do Moodle. Veja o README para detalhes.';
$string['forceloginglobal'] = 'Considerar a configuração global $CFG->forcelogin';
$string['notavailable'] = 'Não disponível';
$string['pagenotfound'] = 'Página não encontrada';
$string['pluginname'] = 'Páginas estáticas';
$string['privacy:metadata'] = 'O plugin de páginas estáticas fornece uma funcionalidade adicional para os administradores do Moodle, mas não armazena nenhum dado pessoal.';
$string['processcontent'] = 'Conteúdo do processo';
$string['processfilters'] = 'Filtros de processo';
$string['processfilters_desc'] = 'Configure se os filtros do Moodle (especialmente o filtro multilíngüe) devem ser processados ao servir o conteúdo da página estática. Veja o README para detalhes.';
$string['processfiltersno'] = 'Não processar filtros';
$string['processfiltersyes'] = 'Processar filtros';
$string['settingspagelist'] = 'Lista de páginas estáticas';
$string['settingspagelistentryfilename'] = 'O seguinte arquivo de documento foi encontrado: <br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'A partir do nome do arquivo do arquivo do documento, o Moodle derivou o seguinte nome da página: <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'A página estática deve estar disponível no seguinte URL limpo, mas na verdade um navegador não poderá baixá-lo e visualizá-lo. Talvez haja algo errado com o seu servidor web ou a configuração do mod_rewrite. Veja o arquivo README para detalhes: <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'A página estática está disponível e pode ser vinculada ao seguinte URL limpo <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'A página estática deve estar disponível no seguinte URL padrão, mas na verdade um navegador não poderá baixá-lo e visualizá-lo. Talvez haja algo errado com o seu servidor web ou a configuração do mod_rewrite. Veja o arquivo README para detalhes: <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'A página estática está disponível e pode ser vinculada ao seguinte URL padrão: <br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Esta lista mostra todas as páginas estáticas que foram carregadas em <a href="{$a}">static pages document area</a> e seus URLs';
$string['settingspagelistnofiles'] = 'Não há arquivos .html em <a href="{$a}">static pages document area</a>, portanto, não há páginas estáticas a serem entregues. Veja o arquivo README para detalhes.';
$string['upgrade_notice_2016020307'] = '<strong>NOTA SOBRE A ATUALIZAÇÃO:</ strong> os arquivos foram movidos para a nova área de arquivos no Moodle. Você pode excluir o diretório de documentos anterior {$a} agora. Para mais instruções de atualização, especialmente se você estiver usando os recursos multilíngues deste plugin, veja o arquivo README.';
