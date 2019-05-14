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
 * Strings for component 'scheduler', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['actions'] = 'Ações';
$string['addappointment'] = 'Adicionar outro estudante';
$string['addcommands'] = 'Adicionar períodos';
$string['addondays'] = 'Adicionar compromissos em';
$string['addsession'] = 'Adicionar períodos repetidos';
$string['addsingleslot'] = 'Adicionar um único período';
$string['addslot'] = 'Você pode adicionar períodos de compromisso adicionais a qualquer hora.';
$string['addstudenttogroup'] = 'Adicionar esse estudante ao grupo de compromisso';
$string['allappointments'] = 'Todos os compromissos';
$string['allononepage'] = 'Todos os períodos em uma página';
$string['allowgroup'] = 'Período exclusivo - clique para modificar';
$string['allteachersgrading'] = 'Professores podem dar nota a todos os compromissos';
$string['allteachersgrading_desc'] = 'Quando habilitados, professores podem avaliar os compromissos que eles não estão inscritos.';
$string['alreadyappointed'] = 'Não pode criar compromisso. O período está totalmente agendado.';
$string['appointagroup_help'] = 'Escolha se você quer criar o compromisso apenas para si mesmo, ou para um grupo inteiro.';
$string['appointfor'] = 'Criar compromisso para';
$string['appointforgroup'] = 'Criar compromissos para: {$a}';
$string['appointingstudent'] = 'Compromisso para período';
$string['appointingstudentinnew'] = 'Compromisso para novo período';
$string['appointment'] = 'Compromisso';
$string['appointmentmode'] = 'Configurando o modo de compromisso';
$string['appointmentmode_help'] = '<p> Você pode escolher aqui algumas variantes na forma como os compromissos podem ser tomados. </p>
<p><ul>
<li><strong> "<emph>n</emph> compromissos neste organizador": </strong> O estudante só pode agendar um número fixo de compromissos nesta atividade. Mesmo se o professor marcá-los como "visto", eles não serão autorizados a agendar mais compromissos. A única maneira de restaurar a capacidade de agendamento de um estudante é excluir os  registros antigos "vistos". </Li>
<li><strong>"<emph>n</emph> compromissos em um momento": </strong> O estudante pode agendar um número fixo de compromissos. Quando a reunião acabar e o professor marcar o estudante como "visto", o estudante pode fazer novos compromissos. No entanto, o estudante é limitado a <emph>n</emph> períodos "abertos" (não vistos), em determinado momento.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Compromisso {$a}';
$string['appointmentnote'] = 'Comentários (visível ao estudante)';
$string['appointments'] = 'Compromissos';
$string['appointmentsgrouped'] = 'Compromissos agrupados por período';
$string['appointmentsummary'] = 'Compromisso habilitado {$a->startdate} de {$a->starttime} para {$a->endtime} com {$a->teacher}';
$string['appointsolo'] = 'somente eu';
$string['appointsomeone'] = 'Adicionar novo compromisso';
$string['areaappointmentnote'] = 'Arquivos nos comentários do compromisso';
$string['areaslotnote'] = 'Arquivos nos comentários do período';
$string['areateachernote'] = 'Arquivos em comentários confidenciais';
$string['attendable'] = 'Apto';
$string['attendablelbl'] = 'Total de candidatos para agendamento';
$string['attended'] = 'Atendido';
$string['attendedlbl'] = 'Quantidade de estudantes atendidos';
$string['attendedslots'] = 'períodos atendidos';
$string['availableslots'] = 'períodos disponíveis';
$string['availableslotsall'] = 'Todos os períodos';
$string['availableslotsnotowned'] = 'Não agendado';
$string['availableslotsowned'] = 'Agendado';
$string['bookaslot'] = 'Agendar um período';
$string['bookingdetails'] = 'Detalhes do agendamento';
$string['bookingformoptions'] = 'Formulário de agendamento e dados fornecidos pelo estudante';
$string['bookinginstructions'] = 'Instruções de agendamento';
$string['bookinginstructions_help'] = 'Este texto será exibido para os estudantes antes de realizarem um agendamento. Pode, por exemplo, conter instruções de como preencher o campo opcional de mensagem ou quais arquivos enviar.';
$string['bookslot'] = 'Agendar período';
$string['bookwithteacher'] = 'Professor';
$string['bookwithteacher_help'] = 'Escolha um professor para o compromisso.';
$string['break'] = 'Intervalo entre períodos';
$string['breaknotnegative'] = 'Tamanho do intervalo não deve ser negativo';
$string['canbook1appointment'] = 'Você pode agendar mais um compromisso nesse organizador.';
$string['canbooknappointments'] = 'Você pode agendar mais {$a} compromissos nesse organizador.';
$string['canbooknofurtherappointments'] = 'Você não pode agendar novos compromissos nesse organizador.';
$string['canbooksingleappointment'] = 'Você pode agendar um compromisso nesse organizador.';
$string['canbookunlimitedappointments'] = 'Você pode agendar qualquer número de compromissos nesse organizador.';
$string['cancelbooking'] = 'Cancelar agendamento';
$string['chooseexisting'] = 'Escolher existente';
$string['choosingslotstart'] = 'Escolhendo o horário de início';
$string['choosingslotstart_help'] = 'Mudar (ou escolher) o horário de início do compromisso. Se esse compromisso conflita com outros períodos, você será perguntado se esse período substitui todos os compromissos conflitantes. Note-se que os novos parâmetros do período substituirão todas as configurações anteriores.';
$string['comments'] = 'Comentários';
$string['complete'] = 'Agendado';
$string['confirmbooking'] = 'Confirmar agendamento';
$string['confirmdelete-all'] = '<b>Todos</b> os períodos neste organizador serão excluídos. A exclusão não poderá ser desfeita. Continuar mesmo assim?';
$string['confirmdelete-mine'] = 'Todos os seus períodos neste organizador serão excluídos. A exclusão não poderá ser desfeita. Continuar mesmo assim?';
$string['confirmdelete-myunused'] = 'Todos os seus períodos não usados neste organizador serão excluídos. A exclusão não poderá ser desfeita. Continuar mesmo assim?';
$string['confirmdelete-one'] = 'Excluir período?';
$string['confirmdelete-selected'] = 'Todos os períodos selecionados serão excluídos. A exclusão não poderá ser desfeita. Continuar mesmo assim?';
$string['confirmdelete-unused'] = 'Todos os períodos não usados nesse organizador serão excluídos. A exclusão não poderá ser desfeita. Continuar mesmo assim?';
$string['conflictingslots'] = 'O período em {$a} não pode ser criado devido a períodos conflitantes:';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} minutos) neste organizador';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} minutos) no curso {$a->courseshortname}, organizador {$a->schedulername}';
$string['contentformat'] = 'Formato';
$string['contentformat_help'] = '<p>Existem três escolhas básicas para o formato de exportação, diferindo na quantidade de períodos com vários compromissos que são tratados.
     <dl>
         <dt>Uma linha por períodos</dt>:
         <dd>
             O arquivo de saída conterá uma linha para cada período. Se um período possui múltiplos compromissos, então ao invés do nome do estudante, etc., um marcador "(múltiplo)" será mostrado.
         </dd>
         <dt>Uma linha por compromisso</dt>:
         <dd>
             O arquivo de saída conterá uma linha para cada compromisso. Se um período possui múltiplos
			 compromissos, então aparecerá várias vezes na lista (com seus dados repetidos).
         </dd>
         <dt>Compromissos agrupados por períodos</dt>:
         <dd>
             Todos os compromissos de um período são agrupados juntos, precedidos por uma linha de cabeçalho que
			 indica o período em questão. Isso pode não funcionar bem com o formato de arquivo de saída CSV,
             com o número de colunas não é constante.
         </dd>
    </dl>
    Você pode explorar o efeito dessas opções usando o botão "Preview".</p>';
$string['copytomyself'] = 'Enviar uma cópia para mim';
$string['course'] = 'Curso';
$string['createexport'] = 'Criar arquivo de exportação';
$string['csvfieldseparator'] = 'Separador de campo para csv';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = 'Duração somada dos compromissos';
$string['datatoinclude'] = 'Dados para incluir';
$string['datatoinclude_help'] = 'Selecione os campos que devem ser incluídos para exportação. Each um deles aparecerá em uma coluna no arquivo de saída.';
$string['date'] = 'Data';
$string['datelist'] = 'Resumo';
$string['defaultslotduration'] = 'Duração padrão de período';
$string['defaultslotduration_help'] = 'Tamanho padrão (em minutos) para os períodos de compromissos que você configurou';
$string['deleteallslots'] = 'Excluir todos os períodos';
$string['deleteallunusedslots'] = 'Excluir períodos não utilizados';
$string['deletecommands'] = 'Excluir períodos';
$string['deletedconflictingslots'] = 'Para o período em {$a}, os períodos conflitantes foram excluídos:';
$string['deletemyslots'] = 'Excluir todos os meus períodos';
$string['deleteonsave'] = 'Excluir esse compromisso (ao salvar o formulário)';
$string['deleteselection'] = 'Excluir períodos selecionados';
$string['deletetheseslots'] = 'Excluir esses períodos';
$string['deleteunusedslots'] = 'Excluir meus períodos não utilizados';
$string['department'] = 'De onde?';
$string['disengage'] = 'Excluir todos os meus compromissos';
$string['displayfrom'] = 'Mostrar compromissos para estudantes de';
$string['distributetoslot'] = 'Distribuir para o grupo inteiro';
$string['divide'] = 'Dividir entre slots?';
$string['duration'] = 'Duração';
$string['durationrange'] = 'Duração de slot deve estar entre {$a->min} e {$a->max} minutos.';
$string['editbooking'] = 'Editar reserva';
$string['email_applied_html'] = '<p>Um compromisso foi aplicado em {$a->date} às {$a->time},<br/>
pelo estudante <a href="{$a->attendee_url}">{$a->attendee}</a> para o curso:</p>

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando o organizador intitulado "<em>{$a->module}</em>" no website: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Um compromisso foi aplicado em {$a->date} às {$a->time},
pelo estudante {$a->attendee} para o curso:

{$a->course_short}: {$a->course}

usando o organizador intitulado "{$a->module}" no website: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Novo compromisso';
$string['email_cancelled_html'] = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time}</strong>,<br/>
com o estudante <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para o curso:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador intitulado "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" no site : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado ou removido</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Seu compromisso em  {$a->date} às {$a->time},
com o estudante {$a->attendee} para o curso:

{$a->course_short} : {$a->course}

no organizador intitulado "{$a->module}" no website : {$a->site}

foi cancelado ou removido.';
$string['email_cancelled_subject'] = '{$a->course_short}: Compromisso cancelado ou removido por um estudante';
$string['email_invite_html'] = '<p>Por favor escolha um slot de tempo para um compromisso em:</p> <p>{$a->scheduler_url}</p>';
$string['email_invitereminder_html'] = '<p>Este é um lembrete de que você ainda não agendou seu compromisso. Por favor, escolha um slot de tempo assim que possível em:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'Lembrete: {$a->module}';
$string['email_invite_subject'] = 'Convite: {$a->module}';
$string['emailreminder'] = 'Envie um lembrete';
$string['email_reminder_html'] = '<p>Você tem um próximo compromisso em <strong>{$a->date}</strong>
de <strong>{$a->time}</strong> até<strong>{$a->endtime}</strong><br/>
com<strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Local: <strong>{$a->location}</strong></p>';
$string['emailreminderondate'] = 'Envie um lembrete em';
$string['email_reminder_plain'] = 'Você tem um próximo compromisso
em {$a->date} de {$a->time} até {$a->endtime}
com {$a->attendant}.

Local: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Lembrete de compromisso';
$string['email_teachercancelled_html'] = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time} </strong>,<br/>
com o {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para o curso:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" no site: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado</span></strong>. Por favor, solicite por um novo slot.</p>';
$string['email_teachercancelled_plain'] = 'Seu compromisso em {$a->date} às {$a->time},
com o {$a->staffrole} {$a->attendant} para o curso:

{$a->course_short}: {$a->course}

no organizador intitulado "{$a->module}" no website: {$a->site}

foi cancelado. Por favor, solicite por um novo slot.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Compromisso cancelado pelo professor';
$string['end'] = 'Fim';
$string['enddate'] = 'Repetir slots de tempo até';
$string['event_appointmentlistviewed'] = 'Organizador de lista de compromissos visualizado';
$string['event_bookingadded'] = 'Organizador de agendamentos adicionado';
$string['event_bookingformviewed'] = 'Organizador de formulário de agendamentos visualizado';
$string['event_bookingremoved'] = 'Organizador de agendamentos removido';
$string['event_slotadded'] = 'Slot adicionado';
$string['event_slotdeleted'] = 'Slot excluído';
$string['everyone'] = 'Todos';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Exclusivo';
$string['exclusivity'] = 'Exclusividade';
$string['exclusivity_help'] = '<p>Você pode armazenar um limite no número de estudantes que podem solicitar um dado slot. </p>
<p>Armazenando um limite de 1 (padrão) significará que o slot é exclusivo para um único estudante.</p>
<p>Armazenando um limite de, por exemplo, 3, significará que até três estudantes podem agendar no slot.</p>
<p>Se desabilitado, qualquer número de estudantes pode reservar o slot; nunca será considerado "cheio".</p>';
$string['exclusivityoverload'] = 'O slot possui {$a} estudantes agendados, mais do que o permitido por essa configuração.';
$string['exclusivitypositive'] = 'O número de estudantes por slot precisa ser no mínimo 1.';
$string['explaingeneralconfig'] = 'Essas opções podem ser apenas configuradas no nível do site e aplicarão para todos os organizadores nessa instalação do Moodle.';
$string['export'] = 'Exportar';
$string['exporthdr'] = 'Exportar slots e compromissos';
$string['field-appointmentnote'] = 'Comentários (ao estudante)';
$string['field-attended'] = 'Assistido';
$string['field-date'] = 'Dados';
$string['field-endtime'] = 'Tempo final';
$string['field-filecount'] = 'Número de arquivos atualizados';
$string['field-grade'] = 'Nota';
$string['field-location'] = 'Localização';
$string['field-maxstudents'] = 'Máx. estudantes';
$string['field-slotnotes'] = 'Notas de slot';
$string['field-starttime'] = 'Tempo inicial';
$string['field-studentemail'] = 'E-mail do estudante';
$string['field-studentfirstname'] = 'Primeiro nome do estudante';
$string['field-studentfullname'] = 'Nome completo do estudante';
$string['field-studentidnumber'] = 'Número id do estudante';
$string['field-studentlastname'] = 'Último sobrenome do estudante';
$string['field-studentnote'] = 'Mensagem por estudante';
$string['field-studentusername'] = 'Nome de usuário do estudante';
$string['field-teachernote'] = 'Comentários confidenciais (somente professor)';
$string['fileformat'] = 'Formato de arquivo';
$string['fileformat_help'] = 'Os seguintes formatos de arquivo são disponíveis:
     <ul>
          <li>Arquivos de texto CSV (Comma Separated Value). O campo separador, por padrão uma vírgula, pode ser escolhido abaixo.
               Arquivos CSV podem ser abertos na maior parte das aplicações de planilhas;</li>
          <li>Arquivos Microsoft Excel (formato Excel 2007);</li>
          <li>ODS (Open Document spreadsheets);</li>
          <li>Formato HTML - uma página web exibindo a tabela de saída, que pode ser impressa usando o recurso de impressão do browser;</li>
          <li>Documentos PDF. Você pode escolher a orientação entre paisagem e retrato.</li>
     </ul>';
$string['finalgrade'] = 'Nota final';
$string['firstslotavailable'] = 'O primeiro slot não será aberto: {$a}';
$string['forbidgroup'] = 'Slot de grupo - clique para alterar';
$string['forcewhenoverlap'] = 'Forçar quando coincidir';
$string['forcewhenoverlap_help'] = '<h3>Forçar criação de slot quando slots coincidirem</h3>
<p>Essa configuração determina quantos slots novos serão tratados se eles se coincidirem com outros slots já existentes.</p>
<p>Se habilitado, a sobreposição de slot existente será removida e o novo slot criado.</p>
<p>Se desabilitado, a sobreposição de slot existente será mantida e um novo slot <em>não</em> será criado.</p>';
$string['forcourses'] = 'Escolher estudantes em cursos';
$string['friday'] = 'Sexta-feira';
$string['generalconfig'] = 'Configuração geral';
$string['grade'] = 'Nota';
$string['gradeingradebook'] = 'Nota no livro de notas';
$string['gradingstrategy'] = 'Estratégia de avaliação';
$string['gradingstrategy_help'] = 'Em um organizador, quando estudantes podem ter vários compromissos, selecione quantas notas são agregadas.
  O livro de notas pode mostrar entre <ul><li>a nota principal ou</li><li>a nota máxima</li></ul>que o estudante alcançou.';
$string['group'] = 'grupo';
$string['groupbookings'] = 'Agendamento em grupos';
$string['groupbookings_help'] = 'Permitir aos estudantes agendarem um slot para todos os membros de seu grupo.
(Note que isso é separado da configuração "modo grupo", que controla os slots que um estudante pode ver.)';
$string['groupbreakdown'] = 'Por tamanho do grupo';
$string['groupmodeyourgroups'] = 'Modo grupo:{$a->groupmode}. Apenas estudantes em {$a->grouplist} podem agendar compromissos com você.';
$string['groupmodeyourgroupsempty'] = 'Modo grupo: {$a->groupmode}. Você não é membro de qualquer grupo, portanto estudantes não podem agendar compromissos com você.';
$string['groupscheduling'] = 'Habilitar organização de grupo';
$string['groupscheduling_desc'] = 'Permitir que grupos inteiros sejam agendados ao mesmo tempo.
(Além da opção global, a definição de "Agendamentos em grupos" deve ser habilitado na respectiva instância do organizador.)';
$string['groupsession'] = 'Sessão de grupo';
$string['groupsize'] = 'Tamanho do grupo';
$string['guardtime'] = 'Tempo de proteção';
$string['guardtime_help'] = 'Um tempo de proteção impede que os estudantes alterem sua reserva um pouco antes do compromisso.
 <p> Se o tempo de guarda estiver habilitado e configurado para, por exemplo, 2 horas, em seguida, os estudantes serão capazes de reservar um slot que começa em menos de 2 horas de tempo a partir de agora, e eles serão incapazes de deixar cair um compromisso se iniciar em menos de 2 horas. </p>';
$string['guestscantdoanything'] = 'Visitantes não podem fazer nada aqui.';
$string['howtoaddstudents'] = 'Para adicionar estudantes a um agendador de escopo global, use a configuração da função para o módulo. <br/> Você também pode usar definições de função do módulo para definir quem atenderá seus estudantes.';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'Ignorar conflitos de planejamento';
$string['ignoreconflicts_help'] = 'Se esta opção estiver assinalada, então o slot será movido para a data e hora solicitada, mesmo se existirem outros slots ao mesmo tempo. Isso pode levar à sobreposição de compromissos para alguns professores ou estudantes, e deve, portanto, ser usada com cuidado.';
$string['includeemptyslots'] = 'Incluir slots vazios';
$string['includeslotsfor'] = 'Incluir slots para';
$string['incourse'] = 'em curso';
$string['introduction'] = 'Introdução';
$string['isnonexclusive'] = 'Não-exclusivo';
$string['landscape'] = 'Paisagem';
$string['lengthbreakdown'] = 'Por duração de slot';
$string['limited'] = 'Limitado ({$a} left)';
$string['location'] = 'Localização';
$string['location_help'] = 'Especificar o local da reunião agendada.';
$string['markasseennow'] = 'Marcar como visto agora';
$string['markseen'] = 'Depois de ter tido uma consulta com um estudante, por favor, marcá-los como "Visto" ao clicar na caixa próxima à imagem de usuário acima.';
$string['maxgrade'] = 'Pegar a nota mais alta';
$string['maxstudentlistsize'] = 'Tamanho máximo da lista de estudantes';
$string['maxstudentlistsize_desc'] = 'O comprimento máximo da lista dos estudantes que precisam criar um compromisso, como mostrado na visão do professor do organizador. Se houver mais estudantes do que isso, nenhuma lista será exibida.';
$string['maxstudentsperslot'] = 'Número máximo de estudantes por slot';
$string['maxstudentsperslot_desc'] = 'Slots de grupo / slots não-exclusivos podem ter no máximo esse número de estudantes. Note que em adição, a configuração "ilimitada" pode sempre ser escolhida para um slot.';
$string['meangrade'] = 'Pegar a nota média';
$string['meetingwith'] = 'Encontro com seu';
$string['meetingwithplural'] = 'Encontro com seu';
$string['message'] = 'Mensagem';
$string['messagebody'] = 'Corpo da mensagem';
$string['messageprovider:bookingnotification'] = 'Notificar quando uma reserva é feita ou cancelada';
$string['messageprovider:invitation'] = 'Convite para fazer reserva';
$string['messageprovider:reminder'] = 'Lembrete de compromisso próximo';
$string['messagesent'] = 'Mensagem enviada para {$a} destinatários';
$string['messagesubject'] = 'Assunto';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por slot';
$string['missingstudents'] = '{$a} estudantes ainda precisarão criar um compromisso';
$string['missingstudentsmany'] = '{$a} estudantes ainda precisarão criar um compromisso. Nenhuma lista está sendo exibida devido ao tamanho.';
$string['mixindivgroup'] = 'Misturar agendamentos em grupo e individuais';
$string['mixindivgroup_desc'] = 'Onde o agendamento de grupo estiver habilitado, permitir agendamentos individuais também.';
$string['mode'] = 'Modo';
$string['modeappointments'] = 'compromisso(s)';
$string['modeintro'] = 'Estudantes podem registrar';
$string['modeoneatatime'] = 'em uma vez';
$string['modeoneonly'] = 'nesse organizador';
$string['modulename'] = 'Organizador';
$string['modulename_help'] = 'A atividade do organizador ajuda você a programar compromissos com seus estudantes.

Professores especificar intervalos de tempo para as reuniões, os estudantes, em seguida, escolhem um deles no Moodle.
Os professores, por sua vez, podem gravar o resultado da reunião - e, opcionalmente, um grau - dentro do organizador.

Organizador de grupo é suportada; isto é, cada intervalo de tempo pode acomodar vários estudantes, e, opcionalmente, é possível programar compromissos para grupos inteiros, ao mesmo tempo.';
$string['modulenameplural'] = 'Agendador';
$string['monday'] = 'Segunda-feira';
$string['multiple'] = '(múltiplo)';
$string['myappointments'] = 'Meus compromissos';
$string['myself'] = 'Mim';
$string['name'] = 'Nome do agendador';
$string['needteachers'] = 'Slots não podem ser adicionados a curso sem professores';
$string['negativerange'] = 'Faixa é negativa. Isso não pode.';
$string['never'] = 'Nunca';
$string['nfiles'] = '{$a} arquivos';
$string['noappointments'] = 'Nenhum compromisso';
$string['noexistingstudents'] = 'Não há estudantes disponíveis para organização';
$string['nogroups'] = 'Não há grupos disponíveis para organização.';
$string['noresults'] = 'Sem resultados.';
$string['noschedulers'] = 'Não há agendadores';
$string['noslots'] = 'Não há slots de compromisso disponíveis.';
$string['noslotsavailable'] = 'Nenhum slot disponível para agendamento nesse momento.';
$string['noslotsopennow'] = 'Nenhum slot aberto para agendamento agora.';
$string['nostudents'] = 'Nenhum estudante escalado';
$string['nostudenttobook'] = 'Nenhum estudante para agendar';
$string['note'] = 'Nota';
$string['noteacherforslot'] = 'Nenhum professor para os slots';
$string['noteachershere'] = 'Nenhum professor disponível';
$string['notenoughplaces'] = 'Sinto muito, não há compromissos livres suficientes nesse slot.';
$string['notesrequired'] = 'Você deve inserir texto neste campo antes de agendar o período.';
$string['notifications'] = 'Notificações';
$string['notifications_help'] = 'Quando essa opção estiver habilitada, professores e estudantes receberão notificações quando compromissos são solicitados ou cancelados.';
$string['notseen'] = 'Não visto';
$string['now'] = 'Agora';
$string['occurrences'] = 'Ocorrências';
$string['odsformat'] = 'ODS';
$string['on'] = 'em';
$string['onedaybefore'] = 'Slot de 1 dia antes';
$string['onelineperappointment'] = 'Uma linha por compromisso';
$string['onelineperslot'] = 'Uma linha por slot';
$string['oneslotadded'] = '1 slot adicionado';
$string['oneslotdeleted'] = '1 slot excluído';
$string['oneweekbefore'] = 'Slot de 1 semana antes';
$string['onthemorningofappointment'] = 'Na manhã do compromisso';
$string['options'] = 'Opções';
$string['otherstudents'] = 'Outros participantes';
$string['outlineappointments'] = '{$a->attended} compromissos atendidos, {$a->upcoming} próximos.';
$string['outlinegrade'] = 'Nota: {$a}.';
$string['overall'] = 'No geral';
$string['overlappings'] = 'Alguns outros slots estão sobrepostos';
$string['pageperteacher'] = 'Uma página para cada {$a}';
$string['pagination'] = 'Paginação';
$string['pagination_help'] = 'Escolha se o exportador deve conter uma página separada para cada professor.
  Nos formatos de arquivo ODS e Excel, essas páginas correspondem a abas (planilhas) na pasta de trabalho.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientação de página PDF';
$string['pluginadministration'] = 'Administração do agendador';
$string['pluginname'] = 'Agendador';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Pré-visualização';
$string['previewlimited'] = '(Pré-visualização está limitada para {$a} linhas.)';
$string['purgeunusedslots'] = 'Remover slots não usados no passado';
$string['recipients'] = 'Destinatários';
$string['registeredlbl'] = 'Estudante agendado';
$string['reminder'] = 'Lembrete';
$string['requireupload'] = 'Carregamento de arquivo obrigatório';
$string['resetappointments'] = 'Compromissos e notas excluídos';
$string['resetslots'] = 'Excluir slots de organizador';
$string['return'] = 'Retornar ao curso';
$string['revoke'] = 'Revogar o compromisso';
$string['saturday'] = 'Sábado';
$string['save'] = 'Salvar';
$string['savechoice'] = 'Salvar minha escolha';
$string['saveseen'] = 'Salvar visto';
$string['schedule'] = 'Organizar';
$string['scheduleappointment'] = 'Organizar compromisso para {$a}';
$string['schedulecancelled'] = '{$a}: Seu compromisso cancelado ou movido';
$string['schedulegroups'] = 'Organizar por grupo';
$string['scheduleinnew'] = 'Agendar em um novo período';
$string['scheduleinslot'] = 'Agendar em período';
$string['scheduler'] = 'Agendador';
$string['scheduler:addinstance'] = 'Adicionar um novo agendador';
$string['scheduler:appoint'] = 'Agendar períodos';
$string['scheduler:attend'] = 'Assistir estudantes';
$string['scheduler:canscheduletootherteachers'] = 'Agendar compromissos para outros membros da equipe';
$string['scheduler:canseeotherteachersbooking'] = 'Ver e buscar outros agendamentos de professores';
$string['scheduler:disengage'] = 'Essa capacidade está depreciada e não faz nada';
$string['scheduler:manage'] = 'Gerenciar seus períodos e compromissos';
$string['scheduler:manageallappointments'] = 'Gerenciar todos os dados do agendador';
$string['scheduler:seeotherstudentsbooking'] = 'Ver outros agendamentos de estudantes no período';
$string['scheduler:seeotherstudentsresults'] = 'Ver outros períodos de resultados de estudantes';
$string['scheduler:seeoverviewoutsideactivity'] = 'Usar a tela de visão geral para ver períodos que estão fora da atividade do agendador corrente.';
$string['scheduler:viewfullslots'] = 'Ver períodos mesmo se não tiverem vagas (visão do estudante)';
$string['scheduler:viewslots'] = 'Ver períodos disponíveis para reserva (visão do estudante)';
$string['schedulestudents'] = 'Agendar por estudante';
$string['scopemenu'] = 'Mostrar slots em: {$a}';
$string['scopemenuself'] = 'Mostrar meus slots em: {$a}';
$string['search:activity'] = 'Organizador - informações de atividade';
$string['seen'] = 'Visto';
$string['selectedtoomany'] = 'Você selecionou muitos períodos. Você não pode selecionar mais do que {$a}.';
$string['sendinvitation'] = 'Enviar convite';
$string['sendmessage'] = 'Enviar mensagem';
$string['sendreminder'] = 'Enviar lembrete';
$string['sendreminders'] = 'Enviar lembretes por e-mail sobre compromissos próximos';
$string['sepcolon'] = 'Dois pontos';
$string['sepcomma'] = 'Vírgula';
$string['sepsemicolon'] = 'Ponto-e-vírgula';
$string['septab'] = 'Aba';
$string['showemailplain'] = 'Mostrar endereços de e-mail em texto simples';
$string['showemailplain_desc'] = 'Na visão do professor do agendador, mostrar os endereços de e-mail dos estudantes que precisam de um novo compromisso em texto simples, em adição aos links mailto:';
$string['showparticipants'] = 'Mostrar participantes';
$string['slot'] = 'Período';
$string['slotdatetime'] = '{$a->shortdatetime} por {$a->duration} minutos';
$string['slotdatetimelabel'] = 'Data e hora';
$string['slotdatetimelong'] = '{$a->date}, {$a->starttime} &ndash; {$a->endtime}';
$string['slotdescription'] = '{$a->status} em {$a->startdate} de {$a->starttime} para {$a->endtime} em {$a->location} com {$a->facilitator}.';
$string['slot_is_just_in_use'] = 'Desculpe, mas o compromisso foi escolhido por outro estudante! Por favor, tente novamente.';
$string['slots'] = 'Períodos';
$string['slotsadded'] = '{$a} períodos foram adicionados';
$string['slotsdeleted'] = '{$a} períodos foram excluídos';
$string['slottype'] = 'Tipo de período';
$string['slotupdated'] = '1 período atualizado';
$string['slotwarning'] = '<strong>Aviso: </strong> Movendo esse período para o tempo selecionado entra em conflito com o período(s) listado(s) abaixo. Assinale "Ignorar conflitos de agendamento" se você quiser mover o período mesmo assim.';
$string['staffbreakdown'] = 'Por {$a}';
$string['staffrolename'] = 'Nome do papel do professor';
$string['staffrolename_help'] = 'O rótulo para o papel que atende estudantes. Este não é necessariamente um "professor".';
$string['start'] = 'Iniciar';
$string['startpast'] = 'Você não pode iniciar um período de agendamento vazio no passado';
$string['statistics'] = 'Estatística';
$string['student'] = 'Estudante';
$string['studentbreakdown'] = 'Por estudante';
$string['studentcomments'] = 'Notas do estudante';
$string['studentdetails'] = 'Detalhes do estudante';
$string['studentfiles'] = 'Arquivos carregados';
$string['studentmultiselect'] = 'Cada estudante pode ser selecionado apenas uma vez nesse período';
$string['studentnote'] = 'Mensagem por estudante';
$string['studentprovided'] = 'Estudante fornecido: {$a}';
$string['students'] = 'Estudantes';
$string['sunday'] = 'Domingo';
$string['tab-otherappointments'] = 'Todos os compromissos desse estudante';
$string['tab-otherstudents'] = 'Estudantes nesse período';
$string['tab-thisappointment'] = 'Esse compromisso';
$string['teacher'] = 'Professor';
$string['teachernote'] = 'Comentários confidenciais (visível somente ao professor)';
$string['teachersmenu'] = 'Mostrar períodos para: {$a}';
$string['thiscourse'] = 'esse curso';
$string['thisscheduler'] = 'esse organizador';
$string['thissite'] = 'o site inteiro';
$string['thursday'] = 'Quinta-feira';
$string['timefrom'] = 'De:';
$string['timerange'] = 'Intervalo';
$string['timeto'] = 'Para:';
$string['totalgrade'] = 'Nota total';
$string['tuesday'] = 'Terça-feira';
$string['unattended'] = 'Não atendido';
$string['unlimited'] = 'Ilimitado';
$string['unregisteredlbl'] = 'Estudantes não atendidos';
$string['upcomingslots'] = 'Próximos períodos';
$string['updategrades'] = 'Atualizar notas';
$string['updatesingleslot'] = 'Atualizar período';
$string['uploadmaxfiles'] = 'Número máximo de arquivos carregados';
$string['uploadmaxfilesglobal'] = 'Número máximo de arquivos carregados';
$string['uploadmaxfilesglobal_desc'] = 'O número máximo de arquivos que um estudante pode atualizar em um formulário de agendamento. Isso pode ser reduzido ainda mais ao nível de agendadores individuais.';
$string['uploadmaxfiles_help'] = 'O número máximo de arquivos que um estudante pode enviar no formulário de agendamento. O carregamento do arquivo é opcional, a menos que a caixa "Carregar arquivo obrigatório" seja assinalada. Se definido como 0, os estudantes não verão uma caixa de upload de arquivos.';
$string['uploadmaxsize'] = 'Tamanho máximo do arquivo';
$string['uploadmaxsize_help'] = 'Tamanho máximo do arquivo carregado pelos estudantes. Este limite aplica-se por arquivo.';
$string['uploadrequired'] = 'Você deve fazer o upload de arquivos aqui antes de agendar o período.';
$string['uploadstudentfiles'] = 'Atualizar arquivos';
$string['usebookingform'] = 'Usar formulário de agendamento';
$string['usebookingform_help'] = 'Se habilitado, o estudante vê uma tela de agendamento separada antes de poder agendar um período. A tela de agendamento pode exigir que eles insiram dados, façam upload de arquivos ou resolvam um captcha; veja as opções abaixo.';
$string['usecaptcha'] = 'Use CAPTCHA para novos agendamentos';
$string['usecaptcha_help'] = 'Se habilitado, os estudantes precisarão resolver uma questão de segurança CAPTCHA antes de fazer um novo agendamento.
Use esta configuração se suspeitar que os estudantes utilizem programas automatizados para encontrar períodos disponíveis.
<p>Nenhum captcha será exibido se o estudante edita um agendamento existente. </p>';
$string['usenotes'] = 'Usar comentários';
$string['usenotesboth'] = 'Ambos tipos de comentários';
$string['usenotesnone'] = 'nenhum';
$string['usenotesstudent'] = 'Comentário de compromisso, visível ao professor e estudante';
$string['usenotesteacher'] = 'Comentário confidencial, visível somente ao professor';
$string['usestudentnotes'] = 'Permitir aos estudantes inserir uma mensagem';
$string['usestudentnotes_help'] = 'Se habilitado, a tela de reserva conterá uma caixa de texto na qual os estudantes podem inserir uma mensagem. Use as "instruções de reserva" acima para instruir os estudante sobre as informações que devem ser fornecidas.';
$string['viewbooking'] = 'Ver detalhes';
$string['wednesday'] = 'Quarta-feira';
$string['welcomebackstudent'] = 'Você pode agendar períodos adicionais clicando no botão "Agendar período" correspondente  abaixo.';
$string['welcomenewstudent'] = 'A tabela abaixo mostra todos os períodos disponíveis para agendamento. Faça sua escolha clicando no botão "Agendar período" correspondente  abaixo. Você poderá voltar a esta página para mudar seu agendamento.';
$string['welcomenewteacher'] = 'Por favor, clique no botão abaixo para adicionar períodos de agendamento.';
$string['what'] = 'O quê?';
$string['whathappened'] = 'O que houve?';
$string['whatresulted'] = 'Qual o resultado?';
$string['when'] = 'Quando?';
$string['where'] = 'Onde?';
$string['who'] = 'Com quem?';
$string['whosthere'] = 'Quem estava?';
$string['xdaysbefore'] = '{$a} dias antes do período';
$string['xweeksbefore'] = '{$a} semanas antes do período';
$string['yesallgroups'] = 'Sim, para todos os grupos';
$string['yesingrouping'] = 'Sim, no grupo {$a}';
$string['yesoptional'] = 'Sim, opcional para o estudante';
$string['yesrequired'] = 'Sim, o estudante deve inserir uma mensagem';
$string['yourappointmentnote'] = 'Comentários para você';
$string['yourslotnotes'] = 'Comentários sobre a reunião';
$string['yourstudentnote'] = 'Sua mensagem';
$string['yourtotalgrade'] = 'Sua nota total nessa atividade é <strong>{$a}</strong>.';
