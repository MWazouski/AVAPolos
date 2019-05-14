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
 * Strings for component 'groupselect', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   groupselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['assignedteacher'] = 'Supervisor';
$string['assigngroup'] = 'Vincular supervisores aos grupos';
$string['assigngroup_help'] = 'Se definido, o botão permite vincular supervisores aos grupos (se o curso possuir supervisores). Supervisores vinculados não são membros do grupo, mas eles aparecem em arquivos exportados e na visualização principal (se definido). Útil caso o curso use assistentes para cuidar dos grupos. Essa permissão pode ser estabelecida posteriormente nas atribuições.';
$string['cannotselectclosed'] = 'Você não pode mais tornar-se membro do grupo.';
$string['cannotselectmaxed'] = 'Você não pode fazer parte do grupo {$a} - o número máximo de membros já foi alcançado.';
$string['cannotselectnocap'] = 'Você não tem permissão para escolher grupos.';
$string['cannotselectnoenrol'] = 'Você precisa estar matriculado no curso para tornar-se membro de um grupo.';
$string['cannotunselectclosed'] = 'Você não pode mais sair do grupo';
$string['creategroup'] = 'Criar um novo grupo';
$string['deleteallgrouppasswords'] = 'Excluir todas as senhas de grupo';
$string['deleteemptygroups'] = 'Excluir o grupo quando o último participante sair';
$string['deleteemptygroups_help'] = 'Se definido, exclui automaticamente o grupo quando o último participante deixá-lo';
$string['description'] = 'Descrição do grupo';
$string['duedate'] = 'Data limite';
$string['edittooltip'] = 'Clique para editar';
$string['enablepermissions'] = 'Permissões gerais';
$string['eventexportlinkcreated'] = 'Exportar o link criado';
$string['eventgroupteacheradded'] = 'Professor adicionado como supervisor';
$string['export'] = 'Criar um link para download do arquivo (CVS) com dados do grupo';
$string['export_download'] = 'Download do arquivo CSV';
$string['fromallgroups'] = 'Todos os grupos';
$string['globalpassword_help'] = 'Definir uma senha universal para se ingressar no grupo. Anula as senhas definidas pelos participantes.';
$string['groupid'] = 'Identificação do grupo';
$string['groupselect:addinstance'] = 'Adicionar uma nova autosseleção de grupo';
$string['groupselect:assign'] = 'Permitir vincular supervisores aos grupos';
$string['groupselect:create'] = 'Permitir a criação de grupo';
$string['groupselect:export'] = 'Permitir a exportação de membros do grupo';
$string['groupselect:select'] = 'Permitir entrada de membros no grupo';
$string['groupselect:unselect'] = 'Permitir saída de grupo';
$string['hidefullgroups'] = 'Ocultar grupos cheios da visualização principal';
$string['hidefullgroups_help'] = 'Se definido, oculta todos os grupos que atingiram o número máximo de membros da visualização principal (com exceção do grupo do próprio usuário). Pode ser útil caso a atividade tenha muitos grupos.';
$string['incorrectpassword'] = 'Senha incorreta';
$string['managegroups'] = 'Gerenciar grupos';
$string['maxcharlenreached'] = 'Número máximo de caracteres atingido';
$string['maxgroupmembership'] = 'Número máximo de grupos a participar';
$string['maxgroupmembership_error_low'] = 'Números negativos não são permitidos';
$string['maxgroupmembership_help'] = 'Número máximo de grupos a participar. 0 significa que nenhuma participação é possível.';
$string['maxlimitreached'] = 'Número máximo de membros alcançado';
$string['maxmembers'] = 'Número máximo de membros por grupo';
$string['maxmembers_error_low'] = 'Números negativos não são permitidos! Use 0 para ilimitado!';
$string['maxmembers_error_smaller_minmembers'] = 'Precisa ser maior do que o número mínimo de participantes por grupo!';
$string['maxmembers_help'] = 'Número máximo de membros por grupo. Use 0 para ilimitado.';
$string['maxmembers_icon'] = 'O grupo possui muitos membros';
$string['maxmembers_notification'] = 'Seu grupo possui muitos membros! Número máximo é {$a}.';
$string['member'] = 'Membro';
$string['membercount'] = 'Contagem';
$string['membershidden'] = 'A lista de membros não está disponível.';
$string['memberslist'] = 'Membros';
$string['minmembers'] = 'Número mínimo de membros por grupo';
$string['minmembers_error_bigger_maxmembers'] = 'O tamanho mínimo do grupo precisa ser menor do que o número máximo de participantes por grupo!';
$string['minmembers_error_low'] = 'Números negativos não são permitidos para o tamanho mínimo do grupo! Use 0 para desativar!';
$string['minmembers_help'] = 'Número mínimo de membros por grupo. Adiciona notificações para os membros dos grupos que estão neste limite. O padrão é 0 (desativado).';
$string['minmembers_icon'] = 'O grupo possui menos membros do que o necessário';
$string['minmembers_notification'] = 'Seu grupo possui menos membros do que o necessário! O mínimo é {$a}.';
$string['miscellaneoussettings'] = 'Configurações diversas';
$string['modulename'] = 'Escolha de grupo';
$string['modulename_help'] = '<p>Permite que os participantes criem e selecionem grupos. </p>
<ul><li>Características: o participante pode criar grupos, adicionar uma descrição e estabelecer senha para acesso, se desejado.</li><li>O participante pode selecionar e ingressar em grupos.</li><li>Supervisores podem ser designados para os grupos.</li><li>O professor pode exportar uma lista do grupo do curso como arquivo CVS. Compatibilidade total com os grupos básicos do Moodle: grupos podem ser criados por outros meios, se necessário, aceita submissões de trabalhos em grupo etc.';
$string['modulenameplural'] = 'Escolha de grupos';
$string['nogroups'] = 'Não há grupos disponíveis para escolher.';
$string['notavailableanymore'] = 'A escolha de grupo não está mais disponível desde {$a}.';
$string['notavailableyet'] = 'A escolha de grupo estará disponível em {$a}.';
$string['notifyexpiredselection'] = 'Mostra mensagem, caso a data limite seja atingida';
$string['notifyexpiredselection_help'] = 'Se definido, uma mensagem irá aparecer quando a data limite for atingida';
$string['ok'] = 'OK';
$string['password'] = 'Necessita de senha';
$string['pluginadministration'] = 'Gerência do módulo';
$string['pluginname'] = 'Escolha de grupo';
$string['privacy:metadata'] = 'Este plugin de autosseleção de grupo não armazena nenhum dado pessoal.';
$string['removeallsupervisors'] = 'Remover supervisores do grupo';
$string['saving'] = 'Salvando...';
$string['select'] = 'Tornar-se membro de {$a}';
$string['selectconfirm'] = 'Você deseja realmente tornar-se membro do grupo <em>{$a}</em>?';
$string['selectgroupaction'] = 'Selecionar grupo';
$string['showassignedteacher'] = 'Mostrar os supervisores vinculados';
$string['showassignedteacher_help'] = 'Se definido, supervisores vinculados aparecerão como membros do grupo. Útil caso os participantes precisem saber quem é o professor vinculado';
$string['studentcancreate'] = 'Participantes podem criar grupos';
$string['studentcancreate_help'] = 'Se definido, participantes sem grupo (em agrupamentos selecionados) podem criar grupos. Essa permissão pode ser posteriormente estabelecida nas atribuições.';
$string['studentcanjoin'] = 'Participantes podem participar de grupos';
$string['studentcanjoin_help'] = 'Se definido, os participantes podem participar de grupos. Essa permissão poderá ser estabelecida posteriormente nas atribuições.';
$string['studentcanleave'] = 'Participantes podem deixar grupos';
$string['studentcanleave_help'] = 'Se definido, participantes podem sair do grupo. Essa permissão poderá ser estabelecida posteriormente nas atribuições.';
$string['studentcansetdesc'] = 'Participantes podem definir e editar a descrição do grupo';
$string['studentcansetdesc_help'] = 'Se definido, participantes podem estabelecer a descrição do grupo no momento de criação, e seus membros podem editá-la.';
$string['studentcansetenrolmentkey'] = 'Participantes podem estabelecer senhas para participar de grupos';
$string['studentcansetenrolmentkey_help'] = 'Se definido, participantes podem estabelecer um código de inscrição para participar de grupos.';
$string['studentcansetgroupname'] = 'Participantes podem definir o nome de novos grupos';
$string['studentcansetgroupname_help'] = 'Se definido, participantes podem escolher o nome para os novos grupos';
$string['supervisionrole'] = 'Papel do supervisor';
$string['targetgrouping'] = 'Selecionar grupos do agrupamento';
$string['timeavailable'] = 'Aberto de';
$string['timeavailable_error_past_timedue'] = 'Não pode começar após a data limite!';
$string['timedue'] = 'Aberto até';
$string['timedue_error_pre_timeavailable'] = 'Não pode terminar antes da data de início!';
$string['unassigngroup'] = 'Retirar supervisores do grupo';
$string['unassigngroup_confirm'] = 'Essa ação irá retirar os supervisores dos grupos. Você tem certeza?';
$string['unselect'] = 'Sair do grupo {$a}';
$string['unselectconfirm'] = 'Você deseja realmente sair do grupo <em>{$a}</em>?';
