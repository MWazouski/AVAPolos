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
 * Strings for component 'tool_policy', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Confirmo ter recebido pedido para dar anuência em nome do(s) usuário(s) acima.';
$string['acceptancecount'] = '{$a->agreedcount} de {$a->policiescount}';
$string['acceptancenote'] = 'Observações';
$string['acceptancepolicies'] = 'Políticas';
$string['acceptancessavedsucessfully'] = 'As anuências foram salvas com sucesso.';
$string['acceptancestatusoverall'] = 'Geral';
$string['acceptanceusers'] = 'Usuários';
$string['actions'] = 'Ações';
$string['activate'] = 'Mudar para "Ativo"';
$string['activateconfirm'] = '<p>Você está prestes a ativar política<em>\'{$a->name}\'</em> e tornar a versão <em>\'{$a->revision}\'</em> como principal.</p><p>Todos os usuários terão de concordar com esta nova versão a fim de utilizar o site.</p>';
$string['activateconfirmyes'] = 'Ativar';
$string['activating'] = 'Ativando uma política';
$string['agreed'] = 'De acordo.';
$string['agreedby'] = 'Anuência dada por';
$string['agreedno'] = 'Anuência negada';
$string['agreednowithlink'] = '';
$string['agreednowithlinkall'] = 'Anuência negada; clique para dar anuência em nome do(a) usuário(a) para todas as políticas';
$string['agreedon'] = 'Anuência dada';
$string['agreedyes'] = 'De acordo';
$string['agreedyesonbehalf'] = 'Anuência dada em nome do(a) usuário(a)';
$string['agreepolicies'] = 'Por gentileza, é necessário concordar com as seguintes políticas';
$string['backtoprevious'] = 'Voltar à página anterior';
$string['backtotop'] = 'Ir ao início';
$string['consentbulk'] = 'Dar anuência';
$string['consentdetails'] = 'Dar anuência em nome do(s) usuário(s)';
$string['consentpagetitle'] = 'Concordar';
$string['contactdpo'] = 'Em caso de dúvidas sore as políticas, por favor, entrar em contato com o responsável pela segurança dos dados.';
$string['dataproc'] = 'Processando dados pessoais';
$string['deleteconfirm'] = '<p>Tem certeza de que deseja excluir a política <em>\'{$a->name}\'</em>?</p> <p>Esta operação não pode ser desfeita.</p>';
$string['deleting'] = 'Excluindo versão';
$string['editingpolicydocument'] = 'Editando política';
$string['errorpolicyversionnotfound'] = 'Não há versão de política com esse identificador';
$string['errorsaveasdraft'] = 'Alteração mínima não pode ser salva como rascunho';
$string['errorusercantviewpolicyversion'] = 'O usuário não tem acesso a esta versão da política.';
$string['event_acceptance_created'] = 'Acordo de política de usuário criado';
$string['event_acceptance_updated'] = 'Acordo de política de usuário atualizado';
$string['filtercapabilityno'] = 'Permissão: não é possível concordar';
$string['filtercapabilityyes'] = 'Permissão: dar anuência';
$string['filterplaceholder'] = 'Buscar palavra-chave ou selecionar filtro';
$string['filterpolicy'] = 'Política: {$a}';
$string['filterrevision'] = 'Versão: {$a}';
$string['filterrevisionstatus'] = 'Versão: {$a->name} ({$a->status})';
$string['filterrole'] = 'Papel: {$a}';
$string['filters'] = 'Filtros';
$string['filterstatusno'] = 'Estado: anuência negada';
$string['filterstatusyes'] = 'Estado: anuência dada';
$string['guestconsent:continue'] = 'Continuar';
$string['guestconsentmessage'] = 'Se continuar navegando neste site, você assume concordar com nossas políticas:';
$string['iagree'] = 'Eu concordo com {$a}';
$string['iagreetothepolicy'] = 'Dar anuência';
$string['inactivate'] = 'Mudar para "Inativo"';
$string['inactivating'] = 'Desativando política';
$string['inactivatingconfirm'] = '<p>Você está prestes a desativar uma política <em>\'{$a->name}\'</em> versão<em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Desativar';
$string['invalidversionid'] = 'Não há política com esse identificador!';
$string['irevokethepolicy'] = 'Cancelar anuência de usuário(a)';
$string['listactivepolicies'] = 'Lista de políticas ativas';
$string['managepolicies'] = 'Administrar políticas';
$string['minorchange'] = 'Alteração mínima';
$string['minorchangeinfo'] = 'Alteração mínima não muda o sentido da política. Os usuários não precisarão concordar com a política novamente se a alteração for marcada como mínima.';
$string['movedown'] = 'Mover para baixo';
$string['moveup'] = 'Mover para cima';
$string['mustagreetocontinue'] = 'Antes de prosseguir, você deve concordar com todas estas políticas.';
$string['newpolicy'] = 'Nova política';
$string['newversion'] = 'Nova versão';
$string['noactivepolicies'] = 'Não há políticas com versão ativa';
$string['nofiltersapplied'] = 'Nenhum filtro aplicado';
$string['nopermissiontoagreedocs'] = 'Sem permissão para concordar com as políticas';
$string['nopermissiontoagreedocsbehalf'] = 'Sem permissão para concordar com as políticas em nome deste(a) usuário(a)';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Ops, você não tem a permissão necessária para concordar com as seguintes políticas em nome de {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Para mais assistência, por favor, contatar';
$string['nopermissiontoagreedocs_desc'] = 'Ops, você não tem permissão necessária para concordar com as políticas.<br />Você não poderá utilizar este site até concordar com as seguintes políticas:';
$string['nopermissiontoviewpolicyversion'] = 'Você não tem permissão para ver esta versão de política';
$string['nopolicies'] = 'Não há políticas com versão ativa para usuários registrados.';
$string['pluginname'] = 'Políticas';
$string['policiesagreements'] = 'Políticas e anuências';
$string['policy:accept'] = 'Concordar com as políticas';
$string['policy:acceptbehalf'] = 'Dar consentimento para políticas em nome de outra pessoa';
$string['policydocaudience'] = 'Anuência de usuário';
$string['policydocaudience0'] = 'Todos os usuários';
$string['policydocaudience1'] = 'Usuários autenticados';
$string['policydocaudience2'] = 'Visitantes';
$string['policydoccontent'] = 'Política completa';
$string['policydochdrpolicy'] = 'Política';
$string['policydochdrversion'] = 'Versão do documento';
$string['policydocname'] = 'Nome';
$string['policydocrevision'] = 'Versão';
$string['policydocsummary'] = 'Resumo';
$string['policydocsummary_help'] = 'Este texto deve fornecer um resumo da política de modo simplificado e facilmente acessível, usando linguagem inteligível e simples.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Política do site';
$string['policydoctype1'] = 'Política de privacidade';
$string['policydoctype2'] = 'Política de terceiros';
$string['policydoctype99'] = 'Outra política';
$string['policydocuments'] = 'Documentos de políticas';
$string['policy:managedocs'] = 'Administrar políticas';
$string['policynamedversion'] = 'Política {$a->name} (versão {$a->revision} - {$a->id})';
$string['policyversionacceptedinbehalf'] = 'Anuência a esta política foi dada em seu nome.';
$string['policyversionacceptedinotherlang'] = 'Anuência a esta versão foi dada em idioma diferente.';
$string['policy:viewacceptances'] = 'Ver relatórios de anuência de usuários';
$string['previousversions'] = '{$a} versões anteriores';
$string['privacy:metadata:acceptances'] = 'Informações sobre anuência a políticas concedidas por usuários.';
$string['privacy:metadata:acceptances:lang'] = 'O idioma utilizado para mostrar a política quando foi dada anuência.';
$string['privacy:metadata:acceptances:note'] = 'Quaisquer comentários feitos por usuário(a) ao dar anuência em nome de outro(a) usuário(a).';
$string['privacy:metadata:acceptances:policyversionid'] = 'Versão da política à qual foi dada anuência.';
$string['privacy:metadata:acceptances:status'] = 'Estado da anuência.';
$string['privacy:metadata:acceptances:timecreated'] = 'Horário em que o(a) usuário(a) concordou com a política.';
$string['privacy:metadata:acceptances:timemodified'] = 'O horário em que o(a) usuário(a) atualizou sua anuência.';
$string['privacy:metadata:acceptances:userid'] = 'O(a) usuário(a) a quem se refere a anuência à política';
$string['privacy:metadata:acceptances:usermodified'] = 'O(a) usuário(a) que deu anuência à política, se dada em nome de outro(a) usuário(a)';
$string['privacy:metadata:subsystem:corefiles'] = 'A ferramente de políticas armazena arquivos inseridos no resumo e na política completa.';
$string['privacy:metadata:versions'] = 'Informações sobre a versão da política.';
$string['privacy:metadata:versions:archived'] = 'O estado da política (ativa ou inativa).';
$string['privacy:metadata:versions:audience'] = 'O tipo de usuários que devem estar de acordo.';
$string['privacy:metadata:versions:content'] = 'O conteúdo da versão desta política.';
$string['privacy:metadata:versions:contentformat'] = 'O formato do campo de conteúdo.';
$string['privacy:metadata:versions:name'] = 'O nome da política.';
$string['privacy:metadata:versions:policyid'] = 'A política a que esta versão está associada.';
$string['privacy:metadata:versions:revision'] = 'A nome da versão revista desta política.';
$string['privacy:metadata:versions:summary'] = 'O resumo da versão desta política.';
$string['privacy:metadata:versions:summaryformat'] = 'O formato do campo de resumo.';
$string['privacy:metadata:versions:timecreated'] = 'O horário em que a versão desta política foi criada.';
$string['privacy:metadata:versions:timemodified'] = 'O horário em que a versão desta política foi atualizada.';
$string['privacy:metadata:versions:type'] = 'Tipo de política.';
$string['privacy:metadata:versions:usermodified'] = 'O(a) usuário(a) que modificou a política.';
$string['privacysettings'] = 'Configurações de privacidade';
$string['readpolicy'] = 'Por favor, leia nossa {$a}';
$string['refertofullpolicytext'] = 'Por favor, ver a forma completa de {$a} se você quiser revisar o texto.';
$string['revokeacknowledgement'] = 'Confirmo ter recebido um pedido para cancelar a anuência em nome do(s) usuário(s) acima.';
$string['revokedetails'] = 'Cancelar anuência.';
$string['save'] = 'Salvar';
$string['saveasdraft'] = 'Salvar como rascunho';
$string['selectpolicyandversion'] = 'Usar o filtro acima para selecionar política e/ou versão';
$string['selectuser'] = 'Selecionar usuário {$a}';
$string['selectusersforconsent'] = 'Selecionar usuários aos quais se deseja representar para dar anuência';
$string['settodraft'] = 'Criar novo rascunho';
$string['status'] = 'Estado da política';
$string['status0'] = 'Rascunho';
$string['status1'] = 'Ativo';
$string['status2'] = 'Inativo';
$string['statusinfo'] = 'Política em estado "Ativo" exige que usuários deem anuência, quer seja quando acessam pela primeira, quer seja no caso de usuários existentes quando fizerem o próximo acesso.';
$string['steppolicies'] = 'Política {$a->numpolicy} de {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Anuências de usuário';
$string['userpolicysettings'] = 'Políticas';
$string['usersaccepted'] = 'Anuências';
$string['viewarchived'] = 'Ver versões anteriores';
$string['viewconsentpageforuser'] = 'Visualizar esta página em nome de {$a}';
