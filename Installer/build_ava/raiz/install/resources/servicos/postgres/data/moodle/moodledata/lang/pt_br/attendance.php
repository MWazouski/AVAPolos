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
 * Strings for component 'attendance', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'Au';
$string['absenteereport'] = 'Relatório de ausência';
$string['acronym'] = 'Acrônimo';
$string['add'] = 'Adicionar';
$string['addmultiplesessions'] = 'Adicionar várias sessões';
$string['addsession'] = 'Adicionar sessão';
$string['adduser'] = 'Adicionar usuário';
$string['addwarning'] = 'Adicionar aviso';
$string['Afull'] = 'Ausente';
$string['all'] = 'Todas';
$string['allcourses'] = 'Todos os cursos';
$string['allpast'] = 'Todas as passadas';
$string['allsessions'] = 'Todas as sessões';
$string['attendance:addinstance'] = 'Adicionar uma nova atividade de presença';
$string['attendance_already_submitted'] = 'Você não pode registrar presença que já foi previamente registrada.';
$string['attendance:canbelisted'] = 'Aparece na lista';
$string['attendance:changeattendances'] = 'Alterando Presenças';
$string['attendance:changepreferences'] = 'Alterando Preferências';
$string['attendancedata'] = 'Dados de presença';
$string['attendance:export'] = 'Exportar Relatórios';
$string['attendanceforthecourse'] = 'Presença para o curso';
$string['attendancegrade'] = 'Nota de presença';
$string['attendance:manageattendances'] = 'Gerenciar Presenças';
$string['attendance:managetemporaryusers'] = 'Gerenciar usuários temporários';
$string['attendancenotset'] = 'Você precisa selecionar uma opção para a presença';
$string['attendancenotstarted'] = 'Presença ainda não foi iniciada para este curso';
$string['attendancepercent'] = 'Percentual de presença';
$string['attendancereport'] = 'Relatório de presença';
$string['attendancesuccess'] = 'Presença registrada com sucesso';
$string['attendance:takeattendances'] = 'Obtendo Presenças';
$string['attendanceupdated'] = 'Presença atualizada com sucesso';
$string['attendance:view'] = 'Visualizando Presenças';
$string['attendance:viewreports'] = 'Visualizando Relatórios';
$string['attendance:viewsummaryreports'] = 'Visualizar relatórios de resumo do curso';
$string['attendance:warningemails'] = 'Pode ser inscrito em emails com usuários ausentes';
$string['attforblockdirstillexists'] = 'O antigo diretório mod/attforblock ainda existe: você deve apagar esse diretório no seu servidor antes de realizar esta atualização.';
$string['attrecords'] = 'Registros de presença';
$string['automark'] = 'Marcação automática';
$string['automarkall'] = 'Sim';
$string['automarkclose'] = 'Definir desmarcado no final da sessão';
$string['automark_help'] = 'Permite que a marcação seja completada automaticamente.
Se "Sim" os estudantes serão automaticamente marcados, dependendo do seu primeiro acesso ao curso.
Se "Definir não marcado no final da sessão", qualquer estudante que não tenha marcado a sua presença será definido com o status desmarcado selecionado.';
$string['autorecorded'] = 'Sistema automático gravado';
$string['averageattendance'] = 'Média de presença';
$string['calclose'] = 'Fechar';
$string['caleventcreated'] = 'Evento de calendário para sessão criado com sucesso';
$string['calmonths'] = 'Janeiro,Fevereiro,Março,Abril,Maio,Junho,Julho,Agosto,Setembro,Outubro,Novembro,Dezembro';
$string['calshow'] = 'Escolher data';
$string['caltoday'] = 'Hoje';
$string['calweekdays'] = 'Dom,Seg,Ter,Qua,Qui,Sex,Sáb';
$string['cannottakeforgroup'] = 'Você não pode registrar a presença para o grupo "{$a}"';
$string['cantaddstatus'] = 'Você deve definir um acrônimo e uma descrição ao adicionar um novo status.';
$string['categoryreport'] = 'Relatório da categoria do curso';
$string['changeattendance'] = 'Alterar presença';
$string['changeduration'] = 'Alterar duração';
$string['changesession'] = 'Alterar sessão';
$string['checkweekdays'] = 'Selecione as semanas que se enquadram dentro do seu intervalo de datas da sessão selecionada.';
$string['column'] = 'coluna';
$string['columns'] = 'colunas';
$string['commonsession'] = 'Todos os estudantes';
$string['commonsessions'] = 'Todos os estudantes';
$string['confirmdeletehiddensessions'] = 'Tem certeza de que deseja excluir {$a->count} sessões agendadas antes da data de início do curso ({$a->date})?';
$string['confirmdeleteuser'] = 'Tem certeza de que deseja excluir o usuário \'{$a->fullname}\' ({$a->email})?<br/> Todos os seus registos de assiduidade serão excluídas permanentemente .';
$string['copyfrom'] = 'Copiar dados de presença de';
$string['countofselected'] = 'Contagem da seleção';
$string['coursesummary'] = 'Relatório de resumo do curso';
$string['createmultiplesessions'] = 'Criar várias sessões';
$string['createmultiplesessions_help'] = 'Esta função possibilita a criação de várias sessões num único passo.

 * <strong>Data de início da sessão</strong>: Selecione a data de início do curso (o primeiro dia de aulas)
 * <strong>Data de término da sessão</strong>: Selecione o último dia de aulas (o último dia que você deseja registrar presenças).
 * <strong>Dias da sessão</strong>: Selecione os dias da semana no qual haverá aula (por exemplo, Segunda/Quarta/Sexta).
 * <strong>Frequência</strong>: Se há aulas todas as semanas, selecione 1; a cada duas semanas, selecione 2; e assim por diante.';
$string['createonesession'] = 'Criar uma sessão para o curso';
$string['days'] = 'Dia';
$string['defaultdisplaymode'] = 'Modo de visualização padrão';
$string['defaults'] = 'Padrões';
$string['defaultsessionsettings'] = 'Configurações de sessão padrão';
$string['defaultsessionsettings_help'] = 'Essas configurações definem os padrões para todas as novas sessões';
$string['defaultstatus'] = 'Conjunto de status padrão';
$string['defaultsubnet'] = 'Endereço de rede padrão';
$string['defaultsubnet_help'] = 'A gravação de presença pode ser restrita a sub-redes específicas, especificando uma lista separada por vírgulas de endereços IP parciais ou completos. Este é o valor padrão usado ao criar novas sessões.';
$string['defaultview'] = 'Visualização padrão no login';
$string['defaultview_desc'] = 'Esta é a visualização padrão mostrada aos professores no primeiro login.';
$string['defaultwarnings'] = 'Conjunto de aviso padrão';
$string['defaultwarningsettings'] = 'Configurações de aviso padrão';
$string['defaultwarningsettings_help'] = 'Essas configurações definem os padrões para todos os avisos novos';
$string['delete'] = 'Apagar';
$string['deletedgroup'] = 'O grupo associado a esta sessão foi excluído';
$string['deletehiddensessions'] = 'Excluir todas as sessões escondidas';
$string['deletelogs'] = 'Apagar registros de presença';
$string['deleteselected'] = 'Apagar selecionado';
$string['deletesession'] = 'Apagar sessão';
$string['deletesessions'] = 'Apagar todas as sessões';
$string['deleteuser'] = 'Excluir usuário';
$string['deletewarningconfirm'] = 'Tem certeza de que deseja excluir esse aviso?';
$string['deletingsession'] = 'Apagando sessão para o curso';
$string['deletingstatus'] = 'Apagando status para o curso';
$string['description'] = 'Descrição';
$string['display'] = 'Exibir';
$string['displaymode'] = 'Modo de exibição';
$string['donotusepaging'] = 'Não utilizar paginação';
$string['downloadexcel'] = 'Download no formato Excel';
$string['downloadooo'] = 'Download no formato OpenOffice';
$string['downloadtext'] = 'Download no formato de texto';
$string['duration'] = 'Duração';
$string['Eacronym'] = 'Di';
$string['editsession'] = 'Editar Sessão';
$string['edituser'] = 'Editar usuário';
$string['Efull'] = 'Dispensado';
$string['emailcontent'] = 'Conteúdo de e-mail';
$string['emailcontent_help'] = 'Quando um aviso é enviado para um estudante, ele leva o conteúdo do e-mail deste campo. Os seguintes caracteres curinga podem ser usados:
<ul>
<li>%coursename%</li>
<li>% userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename% </li>
<li>% cmid% </li>
<li>%numtakensessions% </li>
<li>%points% </li>
<li>% maxpoints% </li>
<li>% percent% </li>
</ ul>';
$string['emailsubject'] = 'Assunto do e-mail';
$string['emailsubject_default'] = 'Aviso de presença';
$string['emailsubject_help'] = 'Quando um aviso é enviado para um estudante, utiliza o assunto do e-mail deste campo.';
$string['emailuser'] = 'Usuário de e-mail';
$string['emailuser_help'] = 'Se marcado, um aviso será enviado ao estudante.';
$string['emptyacronym'] = 'Siglas em branco não são permitidas. Registro de status não foi atualizado.';
$string['emptydescription'] = 'Descrições vazias não são permitidas. Registro não atualizado.';
$string['enablecalendar'] = 'Criar eventos de calendário';
$string['enablewarnings'] = 'Habilitar avisos';
$string['endofperiod'] = 'Término do período';
$string['endtime'] = 'Horário final da sessão';
$string['enrolmentend'] = 'Inscrição de usuários termina {$a}';
$string['enrolmentstart'] = 'Inscrição de usuários inicia {$a}';
$string['enrolmentsuspended'] = 'Inscrições suspensas';
$string['errorgroupsnotselected'] = 'Selecione um ou mais grupos';
$string['errorinaddingsession'] = 'Erro ao adicionar sessão';
$string['erroringeneratingsessions'] = 'Erro ao gerar sessões';
$string['eventdurationupdated'] = 'Duração da sessão atualizada';
$string['eventreportviewed'] = 'Relatório de presença foi visualizado';
$string['eventscreated'] = 'Eventos de calendário criados';
$string['eventsdeleted'] = 'Eventos de calendário excluídos';
$string['eventsessionadded'] = 'Sessão adicionada';
$string['eventsessiondeleted'] = 'Sessão removida';
$string['eventsessionupdated'] = 'Sessão atualizada';
$string['eventstatusadded'] = 'Status adicionado';
$string['eventstatusupdated'] = 'Status alterado';
$string['eventtaken'] = 'Presença registrada';
$string['eventtakenbystudent'] = 'Presença registrada por estudante';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restrições extras';
$string['from'] = 'De:';
$string['gradebookexplanation'] = 'Nota no livro de notas';
$string['gradebookexplanation_help'] = 'O módulo de Presença mostra sua nota de presença atual baseada no número de pontos que você ganhou e o número total de pontos que poderiam ter sido ganhos até agora; ele não inclui aulas futuras. No livro de notas, sua nota de presença é baseada na percentagem da sua presença atual e o número de pontos que poderiam ser ganhos ao longo de todo o período do curso, incluindo aulas futuras. Deste modo, suas notas de presença mostradas no módulo de Presença e no livro de notas podem não ser o mesmo número de pontos, mas eles são a mesma percentagem.

Por exemplo, se você ganhou 8 de 10 pontos até agora (80% de presença) e a presença para todo o curso é de 50 pontos, o módulo de Presença mostrará 8/10 e o livro de notas mostrará 40/50. Você ainda não ganhou 40 pontos, mas 40 é o valor equivalente de pontos para a sua percentagem atual de presença de 80%. Os pontos que você ganhou no módulo de Presença nunca podem diminuir, pois ela é baseada apenas na presença registrada até o momento; no entanto, os pontos de presença mostrados no livro de notas podem aumentar ou diminuir baseada na sua futura frequência, pois ela é calculada tomando em conta toda a duração do curso.';
$string['gridcolumns'] = 'Colunas da grade';
$string['groupsession'] = 'Grupo';
$string['hiddensessions'] = 'Sessões ocultas';
$string['hiddensessionsdeleted'] = 'Todas sessões ocultas foram excluídas.';
$string['hiddensessions_help'] = 'Sessões deixam de ser visíveis se sua data é anterior à data de início do curso. Altere a data de início do curso e as sessões ocultas serão apresentadas.

Você pode usar esta facilidade para ocultar sessões antigas em vez de excluí-las. Note que somente sessões visíveis são usadas no Livro de Notas.';
$string['hidensessiondetails'] = 'Detalhes de seção oculta';
$string['identifyby'] = 'Identificar estudante por';
$string['includeall'] = 'Selecionar todas as sessões';
$string['includenottaken'] = 'Incluir sessões não realizadas';
$string['includeremarks'] = 'Incluir observações';
$string['incorrectpassword'] = 'Você digitou uma senha incorreta e sua presença não foi registrada, por favor, digite a senha correta.';
$string['indetail'] = 'Em detalhe...';
$string['invalidaction'] = 'Você deve selecionar uma ação';
$string['invalidemails'] = 'Você deve especificar endereços de contas de usuário existentes, não pôde encontrar: {$a}';
$string['invalidsessionenddate'] = 'A data final da sessão não pode ser anterior à data de início da sessão';
$string['invalidsessionendtime'] = 'O tempo final deve ser maior que o tempo inicial';
$string['invalidstatus'] = 'Você selecionou um status inválido. Por favor, tente novamente';
$string['jumpto'] = 'Pular para';
$string['Lacronym'] = 'At';
$string['Lfull'] = 'Atrasado';
$string['maxpossible'] = 'Máximo possível';
$string['maxpossible_help'] = 'Mostra a pontuação que cada usuário pode alcançar se receberem o máximo de pontos em cada sessão ainda não tomada (passado e futuro):
     <ul>
     <li> <strong> Pontos </ strong>: pontos máximos que cada usuário pode alcançar em todas as sessões. </li>
     <li> <strong> Porcentagem </ strong>: porcentagem máxima que cada usuário pode alcançar em todas as sessões. </ li>
     </ ul>';
$string['maxpossiblepercentage'] = 'Porcentagem possível máxima';
$string['maxpossiblepoints'] = 'Pontos possíveis máximos';
$string['maxwarn'] = 'Número máximo de avisos de e-mail';
$string['maxwarn_help'] = 'Número máximo de vezes que um aviso deve ser enviado (apenas um aviso por sessão é enviado)';
$string['mergeuser'] = 'Combinar usuário';
$string['modulename'] = 'Presença';
$string['modulename_help'] = 'O módulo de atividade de presença permite ao professor registrar a presença durante a aula e aos estudantes visualizarem os seus dados de frequência.

O professor pode criar várias sessões e registrar a frequência como "Presente", "Ausente", "Atrasado" ou "Dispensado", ou modificar as opções de acordo com as suas necessidades.

Relatórios estão disponíveis para toda a turma ou individualmente para cada estudante.';
$string['modulenameplural'] = 'Presenças';
$string['months'] = 'Meses';
$string['moreattendance'] = 'A presença foi registrada com sucesso para esta página';
$string['moveleft'] = 'Mover para a esquerda';
$string['moveright'] = 'Mover para a direita';
$string['multisessionexpanded'] = 'Sessões múltiplas expandidas';
$string['multisessionexpanded_desc'] = 'Mostrar as configurações de "Múltiplas sessões" como expandidas por padrão ao criar novas sessões.';
$string['mustselectusers'] = 'Deve selecionar usuários para exportar';
$string['newdate'] = 'Nova data';
$string['newduration'] = 'Nova duração';
$string['newstatusset'] = 'Novo conjunto de status';
$string['noattendanceusers'] = 'Não é possível exportar dados, pois não há estudantes inscritos no curso.';
$string['noattforuser'] = 'Não existem registros de presença para o usuário';
$string['noautomark'] = 'Desabilitado';
$string['nodescription'] = 'Sessão de aula regular';
$string['noeventstoreset'] = 'Não há eventos de calendário que exijam uma atualização.';
$string['nogroups'] = 'Você não pode adicionar sessões de grupo. Nenhum grupo existe no curso.';
$string['noguest'] = 'Visitantes não podem ver presença';
$string['noofdaysabsent'] = 'Nº de dias ausente';
$string['noofdaysexcused'] = 'Nº de dias dispensado';
$string['noofdayslate'] = 'Nª de dias atrasado';
$string['noofdayspresent'] = 'Nº de dias presente';
$string['nosessiondayselected'] = 'Nenhum dia de sessão selecionado';
$string['nosessionexists'] = 'Nenhuma sessão existe para este curso';
$string['nosessionsselected'] = 'Nenhuma sessão selecionada';
$string['notfound'] = 'Atividade de presença não encontrada para o curso!';
$string['notifytask'] = 'Enviar avisos aos usuários';
$string['notmember'] = 'não membro';
$string['noupgradefromthisversion'] = 'O módulo attendance não pode ser atualizado a partir da versão do attforblock instalado. Por favor, remova o attforblock ou atualize-o para a última versão antes de instalar o novo módulo attendance.';
$string['numsessions'] = 'Número de sessões';
$string['olddate'] = 'Data anterior';
$string['onlyselectedusers'] = 'Exporte usuários específicos';
$string['overallsessions'] = 'Durante toda as sessões';
$string['overallsessions_help'] = 'Mostra estatísticas para todas as sessões, incluindo as que ainda não foram registradas (passado e futuro):
     <ul>
     <li><strong>Sessões</strong>: número total de sessões.</li>
     <li><strong>Pontos</strong>: pontos atribuídos com base nas sessões registradas.</li>
     <li><strong>Porcentagem</strong>: porcentagem de pontos atribuídos sobre os pontos máximos possíveis para todas as sessões.</li>
     </ul>';
$string['oversessionstaken'] = 'Sessões ultrapassadas';
$string['oversessionstaken_help'] = 'Mostra estatísticas para as sessões onde a presença foi registrada:
     <ul>
     <li><strong>Sessões</strong>: número de sessões com registro.</li>
     <li><strong>Pontos</strong>: pontos atribuídos com base nas sessões realizadas.</li>
     <li><strong>Porcentagem</strong>: porcentagem de pontos atribuídos no máximo dos pontos possíveis das sessões realizadas.</li>
     </ul>';
$string['Pacronym'] = 'Pr';
$string['participant'] = 'Participant';
$string['password'] = 'Senha';
$string['passwordgrp'] = 'Senha do estudante';
$string['passwordgrp_help'] = 'Se configurado, os estudantes serão obrigados a inserir esta senha antes para  definir seu próprio status de presença para a sessão. Se vazio, nenhuma senha é necessária.';
$string['passwordrequired'] = 'Você deve inserir a senha da sessão antes de enviar sua participação';
$string['percentage'] = 'Porcentagem';
$string['percentageallsessions'] = 'Porcentagem em todas as sessões';
$string['percentagesessionscompleted'] = 'Porcentagem durante as sessões realizadas';
$string['Pfull'] = 'Presente';
$string['pluginadministration'] = 'Administração da presença';
$string['pluginname'] = 'Presença';
$string['points'] = 'Pontos';
$string['pointsallsessions'] = 'Pontos em todas as sessões';
$string['pointssessionscompleted'] = 'Pontos durante as sessões realizadas';
$string['preferences_desc'] = 'Alterações na definição do status afetarão as sessões de presença existentes e podem afetar as avaliações.';
$string['priorto'] = 'A data da sessão é anterior à data de início do curso ({$a}), portanto as novas sessões agendadas antes dessa data ficarão ocultas (não acessíveis). Você pode alterar a data de início do curso a qualquer momento (consulte as configurações do curso) para ter acesso as sessões anteriores. <br/> <br/> Por favor, altere a data da sessão ou simplesmente clique no botão "Adicionar sessão" novamente para confirmar?';
$string['randompassword'] = 'Senha aleatória';
$string['remark'] = 'Observação para: {$a}';
$string['remarks'] = 'Observações';
$string['repeatasfollows'] = 'Repita a sessão acima, da seguinte forma';
$string['repeatevery'] = 'Repetir a cada';
$string['repeaton'] = 'Repetir';
$string['repeatuntil'] = 'Repetir até';
$string['report'] = 'Relatório';
$string['required'] = 'Obrigatório*';
$string['requiredentries'] = 'Registros temporários sobrescreveram registro de presença';
$string['requiredentry'] = 'Guia de ajuda de usuários temporários';
$string['requiredentry_help'] = '<p align="center"><b>Presença</b></p>
<p align="left"><strong>Combine contas</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Usuário Moodle</th>
<th>Usuário temporário</th>
<th>Ação</th>
</tr>
<tr>
<td>Informação de presença</td>
<td>Informação de presença</td>
<td>Usuário temporário irá sobrepor usuário do Moodle</td>
</tr>
<tr>
<td>Sem informação de presença</td>
<td>Informação de presença</td>
<td>Presença de usuário temporário será transferida para usuário do Moodle</td>
</tr>
<tr>
<td>Informação de presença</td>
<td>Sem informação de presença</td>
<td>Usuário temporário será apagado</td>
</tr>
<tr>
<td>Sem informação de presença</td>
<td>Sem informação de presença</td>
<td>Usuário temporário será apagado</td>
</tr>
</table>

</p>
<p align="left"><strong>Usuário temporário será apagado em todos casos de combinar usuário</strong></p>';
$string['requiresubnet'] = 'Alunos só podem registrar sua presença desses computadores';
$string['requiresubnet_help'] = 'O registro de presença pode ser restrito a sub-redes específicas, se definida uma lista separada por vírgulas de endereços IP parciais ou completos.';
$string['resetcaledarcreate'] = 'Os eventos do calendário foram habilitados, mas várias sessões existentes não têm eventos. Deseja criar eventos do calendário para todas as sessões existentes?';
$string['resetcaledardelete'] = 'Os eventos do calendário foram desativados, mas várias sessões existentes têm eventos que devem ser excluídos. Deseja excluir todos os eventos existentes?';
$string['resetcalendar'] = 'Redefinir calendário';
$string['resetdescription'] = 'Lembre-se que apagar os dados de presença irá apagar a informação do banco de dados. Você pode apenas esconder antigas sessões que tiveram a data de início do curso alteradas.';
$string['resetstatuses'] = 'Redefinir status padrão';
$string['restoredefaults'] = 'Restaurar padrões';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de estudantes mostrados por página';
$string['save'] = 'Salvar presença';
$string['search:activity'] = 'Presença - informação da atividade';
$string['session'] = 'Sessão';
$string['sessionadded'] = 'Sessão adicionada com sucesso';
$string['sessionalreadyexists'] = 'Sessão já existe para esta data';
$string['sessiondate'] = 'Data da sessão';
$string['sessiondays'] = 'Dias da sessão';
$string['sessiondeleted'] = 'Sessão apagada com sucesso';
$string['sessionexist'] = 'Sessão não adicionada (já existe)!';
$string['sessiongenerated'] = 'Uma sessão foi gerada com sucesso';
$string['session_help'] = 'Sessão';
$string['sessions'] = 'Sessões';
$string['sessionscompleted'] = 'Sessões registradas';
$string['sessionsgenerated'] = '{$a} sessões geradas com sucesso';
$string['sessionsids'] = 'IDs das sessões';
$string['sessionsnotfound'] = 'Não existem sessões no intervalo de tempo selecionado';
$string['sessionstartdate'] = 'Data de início da sessão';
$string['sessionstotal'] = 'Número total de sessões';
$string['sessiontype'] = 'Tipo de sessão';
$string['sessiontype_help'] = 'Há dois tipos de sessões: regular e em grupos. A capacidade para definir tipos diferentes depende da modalidade de grupos da atividade:

 * Na modalidade "Nenhum grupo" só é possível adicionar sessões regulares.
 * Na modalidade "Grupos visíveis" é possível adicionar sessões regulares e sessões em grupo.
 * Na modalidade  "Grupos separados" só é possível adicionar sessões em grupo.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionupdated'] = 'Sessão atualizada com sucesso';
$string['setallstatuses'] = 'Defina o status para todos os usuários';
$string['setallstatusesto'] = 'Definir status de todos os usuário para «{$a}»';
$string['set_by_student'] = 'Autoregistrado';
$string['settings'] = 'Configurações';
$string['setunmarked'] = 'Definir automaticamente quando não está marcado';
$string['setunmarked_help'] = 'Se habilitado na sessão, define este status para o estudante que não marcou sua própria presença.';
$string['showdefaults'] = 'Mostrar padrões';
$string['showduration'] = 'Mostrar duração';
$string['showsessiondetails'] = 'Mostrar detalhes da sessão';
$string['somedisabledstatus'] = '(Algumas opções foram removidas, pois a sessão foi iniciada.)';
$string['sortedgrid'] = 'Grade ordenada';
$string['sortedlist'] = 'Lista ordenada';
$string['startofperiod'] = 'Início do período';
$string['status'] = 'Status';
$string['statusdeleted'] = 'Status excluído';
$string['statuses'] = 'Status';
$string['statusset'] = 'Defina status  {$a}';
$string['statussetsettings'] = 'Definir status';
$string['strftimedm'] = '%d/%m';
$string['strftimedmy'] = '%d/%m/%Y';
$string['strftimedmyhm'] = '%d/%m/%Y %H:%M';
$string['strftimedmyw'] = '%d/%m/%y (%a)';
$string['strftimeh'] = '%H';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d/%m/%Y';
$string['studentavailability'] = 'Disponível para estudantes (minutos)';
$string['studentavailability_help'] = 'Quando os estudantes estão marcando sua própria presença, o número de minutos que este status está disponível após o início da sessão.
<br/>Se vazio, esse status estará sempre disponível, se definido como 0 estará sempre oculto para os estudantes.';
$string['studentid'] = 'ID do Estudante';
$string['studentmarking'] = 'Registro do estudante';
$string['studentpassword'] = 'Senha do estudante';
$string['studentrecordingexpanded'] = 'Registro de estudante expandido';
$string['studentrecordingexpanded_desc'] = 'Mostrar as configurações de "Registro do estudante" como expandidas por padrão ao criar novas sessões.';
$string['studentscanmark'] = 'Permitir que os próprios estudantes registrem suas presenças';
$string['studentscanmark_desc'] = 'Se marcados, os professores poderão permitir que os estudante marquem sua própria presença.';
$string['studentscanmark_help'] = 'Se marcado, os próprios estudantes poderão alterar o status para a sessão.';
$string['studentscanmarksessiontime'] = 'Estudantes registram presença durante o tempo de sessão';
$string['studentscanmarksessiontime_desc'] = 'Se marcado, os estudantes podem registrar sua presença somente durante a sessão.';
$string['studentscanmarksessiontimeend'] = 'Final de sessão (minutos)';
$string['studentscanmarksessiontimeend_desc'] = 'Se a sessão não tem um final, quantos minutos a sessão estará disponível para que os estudante possam registrar sua presença.';
$string['submitattendance'] = 'Registrar presença';
$string['subnetactivitylevel'] = 'Permitir configuração de sub-rede no nível de atividade';
$string['subnetactivitylevel_desc'] = 'Se habilitado, os professores podem substituir a sub-rede padrão no nível de atividade ao criar uma presença. Caso contrário, o padrão do site será utilizado  ao criar uma sessão.';
$string['subnetwrong'] = 'A presença só pode ser registrada em determinados locais, e esse computador não está na lista permitida.';
$string['summary'] = 'Resumo';
$string['tablerenamefailed'] = 'A renomeação da antiga tabela do attforblock para o attendance falhou';
$string['tactions'] = 'Ação';
$string['takeattendance'] = 'Registrar presença';
$string['takensessions'] = 'Sessões realizadas';
$string['tcreated'] = 'Criado';
$string['tempaddform'] = 'Adicionar usuário temporário';
$string['tempexists'] = 'Já existe um usuário temporário com este endereço de email';
$string['temptable'] = 'Lista de usuário temporário';
$string['tempuser'] = 'Usuário temporário';
$string['tempusermerge'] = 'Combinar usuário temporário';
$string['tempusers'] = 'Usuários temporários';
$string['tempusersedit'] = 'Editar usuário temporário';
$string['tempuserslist'] = 'Usuários temporários';
$string['thirdpartyemails'] = 'Notificar outros usuários';
$string['thirdpartyemails_help'] = 'Lista de outros usuários que serão notificados. (requer capacidade mod / attendance: viewreports)';
$string['thirdpartyemailsubject'] = 'Aviso de presença';
$string['thirdpartyemailtext'] = 'A presença de {$a->firstname} {$a->lastname} dentro de {$a->coursename} {$a->aname} é menor que {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Você está recebendo isso porque o professor deste curso adicionou seu e-mail à lista de destinatário';
$string['thiscourse'] = 'Este curso';
$string['time'] = 'Tempo';
$string['timeahead'] = 'Não podem ser criadas sessões que excedem um ano. Por favor, ajuste as datas de início e término.';
$string['to'] = 'até:';
$string['triggered'] = 'Primeiro notificado';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nome completo';
$string['unknowngroup'] = 'Grupo desconhecido';
$string['update'] = 'Atualizar';
$string['usedefaultsubnet'] = 'Utilizar o padrão';
$string['userexists'] = 'Já existem um usuário real com este endereço de email';
$string['users'] = 'Usuário para exportar';
$string['usestatusset'] = 'Use a definição de status';
$string['variable'] = 'variável';
$string['variablesupdated'] = 'Variáveis atualizadas com sucesso';
$string['versionforprinting'] = 'versão para impressão';
$string['viewmode'] = 'Modo de visualização';
$string['warnafter'] = 'Número de sessões realizadas antes do aviso';
$string['warnafter_help'] = 'Os avisos só serão disparados quando o usuário tiver sua presença registrada por pelo menos este número de sessões.';
$string['warningdeleted'] = 'Aviso excluído';
$string['warningdesc'] = 'Esses avisos serão automaticamente adicionados as novas atividades de presença. Se mais de um aviso for disparado exatamente ao mesmo tempo, somente o aviso com o limite mais baixo será enviado.';
$string['warningdesc_course'] = 'As entradas de avisos aqui estabelecidas afetam o relatório de ausência e permitem que os estudantes e terceiros sejam notificados. Se mais de um aviso for disparado exatamente ao mesmo tempo, somente o aviso com o limite de aviso mais baixo será enviado.';
$string['warningfailed'] = 'Você não pode criar um aviso que use a mesma porcentagem e número de sessões.';
$string['warningpercent'] = 'Avise se a percentagem está abaixo';
$string['warningpercent_help'] = 'Um aviso será ativado quando a porcentagem geral estiver abaixo desse número.';
$string['warnings'] = 'Definir avisos';
$string['warningthreshold'] = 'Entrada de aviso';
$string['warningupdated'] = 'Avisos atualizados';
$string['week'] = 'semana(s)';
$string['weeks'] = 'Semanas';
$string['youcantdo'] = 'Você não pode fazer nada';
