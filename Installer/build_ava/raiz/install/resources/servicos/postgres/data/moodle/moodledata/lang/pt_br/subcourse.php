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
 * Strings for component 'subcourse', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   subcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completioncourse'] = 'Requer a conclusão do curso';
$string['completioncourse_help'] = 'Se habilitado, a atividade é considerada concluída quando um estudante concluir o curso referenciado.';
$string['completioncourse_text'] = 'Os estudantes devem concluir o curso referenciado para concluir esta atividade.';
$string['currentgrade'] = 'Sua nota atual: {$a}';
$string['errfetch'] = 'Não é possível obter notas: código do erro {$a}';
$string['errlocalremotescale'] = 'Não é possível obter nota: o item nota final remoto utiliza uma escala local.';
$string['eventgradesfetched'] = 'Notas obtidas';
$string['fetchnow'] = 'Obter agora';
$string['gotocoursename'] = 'Vá para o curso <a href="{$a->href}">{$a->name}</a>';
$string['hiddencourse'] = '*oculto*';
$string['instantredirect'] = 'Redirecionar para o curso referenciado';
$string['instantredirect_help'] = 'Se habilitado, os usuários serão redirecionados para o curso referenciado ao tentar visualizar a página da atividade do subcurso. Não afeta os usuários com permissão para obter notas manualmente.';
$string['lastfetchnever'] = 'As notas ainda não foram obtidas';
$string['lastfetchtime'] = 'Última execução: {$a}';
$string['modulename'] = 'Subcurso';
$string['modulename_help'] = 'O módulo fornece funcionalidades muito simples e úteis. Quando adicionado a um curso, ele se comporta como uma atividade. A nota de cada aluno é retirada da nota final de outro curso. Combinado com metacursos, permite que os conteudistas organizem cursos em unidades separadas.';
$string['modulenameplural'] = 'Subcursos';
$string['nocoursesavailable'] = 'Nenhum curso que você possa obter notas';
$string['nosubcourses'] = 'Não existem subcursos neste curso';
$string['pluginadministration'] = 'Administração de subcurso';
$string['pluginname'] = 'Subcurso';
$string['refcourse'] = 'Curso referenciado';
$string['refcoursecurrent'] = 'Manter a referência atual';
$string['refcourse_help'] = 'O curso referenciado é onde a nota da atividade é obtida. Os estudantes devem estar inscritos no curso referenciado.

Você precisa ser um professor no curso para que ele seja listado aqui. Você pode solicitar ao administrador do seu site para configurar este subcurso para que você obtenha notas de outros cursos.';
$string['refcourselabel'] = 'Obter notas de';
$string['refcoursenull'] = 'Nenhum curso referenciado configurado';
$string['subcourse:addinstance'] = 'Adicionar um novo subcurso';
$string['subcourse:begraded'] = 'Receber nota do curso referenciado';
$string['subcourse:fetchgrades'] = 'Obter manualmente as notas do curso referenciado';
$string['subcoursename'] = 'Nome do subcurso';
$string['taskcheckcompletedrefcourses'] = 'Verificar a conclusão dos cursos referenciados';
$string['taskfetchgrades'] = 'Obter notas do subcurso';
