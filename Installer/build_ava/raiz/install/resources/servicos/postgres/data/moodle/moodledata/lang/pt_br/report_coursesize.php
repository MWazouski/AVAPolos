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
 * Strings for component 'report_coursesize', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   report_coursesize
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Tamanho de backups';
$string['catsystembackupuse'] = 'O uso por backups do sistema e categorias é {$a}.';
$string['catsystemuse'] = 'O uso pelo sistema e pelas categorias excluindo usuários e cursos é: {$a}.';
$string['coursebackupbytes'] = '{$a->backupbytes} bytes utilizados para backup pelo curso {$a->shortname}';
$string['coursebytes'] = '{$a->bytes} bytes utilizados pelo curso {$a->shortname}';
$string['coursereport'] = 'Resumo dos tipos de plugins - NOTE que isso pode ser menor do que a lista de cursos principais e provavelmente é mais preciso.';
$string['coursesize'] = 'Tamanho do curso';
$string['coursesize_desc'] = '<p>Este relatório fornece apenas valores aproximados. Se um arquivo é utilizado várias vezes em um curso ou em vários cursos, o relatório contabiliza cada instância, embora o Moodle armazene uma única versão física no disco.</p>';
$string['coursesize:view'] = 'Visualizar relatório de tamanho dos cursos';
$string['coursesummary'] = '(ver estatísticas)';
$string['diskusage'] = 'Total';
$string['emptycourseshidden'] = 'Cursos que não utilizam armazenamento de arquivos foram excluídos deste relatório.';
$string['nouserfiles'] = 'Nenhum arquivo de usuários listado.';
$string['pluginname'] = 'Tamanho do curso';
$string['sharedusage'] = 'Uso compartilhado';
$string['sharedusagecourse'] = 'Aproximadamente {$a}  são compartilhados com outros cursos.';
$string['sitefilesusage'] = 'Relatório de uso de arquivos';
$string['sizepermitted'] = '(Utilização permitida {$a}MB)';
$string['sizerecorded'] = '(Gravado {$a})';
$string['totalsitedata'] = 'Total de utilização dos dados do site: {$a}';
$string['userstopnum'] = 'Usuários (top {$a})';
