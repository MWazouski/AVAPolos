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
 * Strings for component 'block_inactiveuseralert', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   block_inactiveuseralert
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Atividade';
$string['activityalerttemplate'] = 'Modelo de email';
$string['activityalerttemplate_help'] = 'Os seguintes parâmetros podem ser usados no seu modelo de email:

{alink} : exibe o nome da atividade em formato de web link<br />
{clink} : exibe o nome completo do curso em formato de web link<br />
{cfull} : o nome completo do curso<br />
{cshort} : o nome curto do curso<br />
{userfullname} : o nome completo do usuário';
$string['addalert'] = 'Adicionar alerta';
$string['alert'] = 'Alerta';
$string['alertdate'] = 'Alerta {$a}';
$string['alertssent'] = 'Alertas enviados';
$string['alerttemplate'] = 'Modelo de email';
$string['cc'] = 'Alertas CC(Com Cópia)';
$string['cc_help'] = 'Se habilitado, os contatos do curso serão copiados(CC) nos alertas enviados';
$string['configtemplateactivity'] = 'O modelo padrão usado para os novos alertas de login';
$string['configtemplateactivitydefault'] = 'Olá, {userfullname}.

Parece que você ainda não completou a atividade {alink}\' no curso \'{clink}\'.';
$string['configtemplatelogin'] = 'O modelo padrão usado para os novos alertas de login';
$string['configtemplatelogindefault'] = 'Olá, {userfullname}.

Parece que você ainda não acessou o curso \'{clink}\'.';
$string['configure'] = 'Configurar';
$string['deleteconfirm'] = 'Excluir o alerta para a ativiadade \'{$a}\'?';
$string['deleteconfirminvalidalert'] = 'Excluir este alerta inválido?';
$string['enabled'] = 'Habilitado';
$string['errorcoursecompletiondisabled'] = 'A Conclusão de Curso está desativada atualmente neste curso, então nenhum alerta de atividade será disparado';
$string['errorcoursemismatch'] = 'O alerta que você tenta alterar não pertence a este curso';
$string['errorearlierthanprevious'] = 'A data selecionada deve ser posterior ao do alerta anterior';
$string['errorinthepast'] = 'Novos alertas devem ser configurados para o futuro';
$string['errornoactivitieswithcompletion'] = 'Seu curso não tem atividades com critérios de Conclusão já configurados';
$string['inactiveuseralert:addinstance'] = 'Adicionar novo bloco \'Alerta de Usuário Inativo\'';
$string['invalidalert'] = 'Alerta inválido';
$string['loginalerttemplate'] = 'Modelo de email';
$string['loginalerttemplate_help'] = 'Os seguintes parâmetros podem ser usados no seu modelo de email:

{clink} : exibe o nome completo do curso em formato de web link<br />
{cfull} : o nome completo do curso<br />
{cshort} : o nome curto do curso<br />
{userfullname} : o nome completo do usuário';
$string['noalerts'] = 'Nenhum alerta foi configurado';
$string['nomoreactivities'] = 'Nenhuma atividade a mais pode ter alerta configurado. Ou nenhuma atividade tem Conclusão configurada ou aquelas que já têm já possuem alertas';
$string['numbersent'] = '{$a} enviados';
$string['pluginname'] = 'Alertas de Usuário Inativo';
$string['reportname'] = 'Relatório de Usuário Inativo';
$string['sendalertstask'] = 'Enviar alertas de usuário inativo';
$string['studentsonly'] = 'Estudantes apenas';
$string['studentsonly_help'] = 'Apenas usuários com papel de estudante receberão notificação de atividade/login';
$string['subject'] = 'Alerta de Usuário Inativo';
$string['templateactivity'] = 'Alerta padrão de atividade';
$string['templatelogin'] = 'Alerta padrão de login';
$string['type'] = 'Tipo';
$string['typeactivity'] = 'Alerta de atividade';
$string['typelogin'] = 'Alerta de login';
$string['viewreport'] = 'Ver relatório de acessos de usuários';
