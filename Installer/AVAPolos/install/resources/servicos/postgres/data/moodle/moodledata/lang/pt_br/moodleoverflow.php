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
 * Strings for component 'moodleoverflow', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   moodleoverflow
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Adicionar um novo tópico de discussão';
$string['addanewreply'] = 'Adicionar uma nova resposta';
$string['allowcoursereputation'] = 'Somar reputação dentro de um curso.';
$string['allownegativereputation'] = 'Permitir reputação negativa?';
$string['allownegativereputation_help'] = 'Se definido como sim, a reputação dos usuários em um curso ou dentro de um módulo pode ser negativa. Se definido como não, a reputação será interrompida para diminuir até zero.';
$string['allowratingchange'] = 'Permitir alterações de avaliação';
$string['allsubscribe'] = 'Assinar todos os fóruns';
$string['allunsubscribe'] = 'Cancelar assinatura de todos os fóruns';
$string['areaattachment'] = 'Anexos';
$string['areapost'] = 'Mensagens';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Opcionalmente, pode anexar um ou mais arquivos para uma mensagem do fórum. Se você anexar uma imagem, ela será exibida após a mensagem.';
$string['attachments'] = 'Anexos';
$string['bestanswer'] = 'O dono da questão e o dono do curso reconheceram esta como a melhor resposta.';
$string['bynameondate'] = 'por {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'por {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Não foi possível criar nova discussão';
$string['cannotdeletepost'] = 'Você não pode excluir esta mensagem!';
$string['cannotfindparentpost'] = 'Não foi possível encontrar a mensagem anterior da mensagem {$a}';
$string['cannotreply'] = 'Você não pode responder esta mensagem';
$string['cannottrack'] = 'Não foi possível interromper o monitoramento desse fórum';
$string['cannotunsubscribe'] = 'Não foi possível cancelar a assinatura desse fórum';
$string['cannotupdatepost'] = 'Você não pode atualizar esta mensagem';
$string['cleanreadtime'] = 'Quando marcar as mensagens antigas como lidas';
$string['clicktosubscribe'] = 'Você não é assinante nessa discussão. Clique para se inscrever.';
$string['clicktounsubscribe'] = 'Você está inscrito nessa discussão. Clique para cancelar sua inscrição.';
$string['configallowcoursereputation'] = 'Permite somar a reputação de todas as instâncias do curso atual?';
$string['configallowratingchange'] = 'Um usuário pode alterar suas avaliações?';
$string['configcleanreadtime'] = 'Hora do dia em que as mensagens antigas serão apagadas da tabela \'lidas\'.';
$string['configforcedreadtracking'] = 'Permitir que o Moodleoverflows seja configurado para monitoramento de leitura forçado. Isso resultará em desempenho reduzido para alguns usuários, especialmente em cursos com muitos moodleoverflows e mensagens. Quando desativado, qualquer moodleoverflows configurado anteriormente como "Forçado" será tratado como opcional.';
$string['configmanydiscussions'] = 'Número máximo de discussões mostradas numa instância de Moodleoverflow por página';
$string['configmaxattachments'] = 'Número máximo padrão de anexos permitido por mensagem.';
$string['configmaxbytes'] = 'Tamanho máximo padrão para todos os anexos do fórum no site (sujeito aos limites do curso e outras configurações locais)';
$string['configmaxeditingtime'] = 'Máximo de segundos padrão é de 3600 (= uma hora).';
$string['configmaxmailingtime'] = 'Mensagens mais antigas que esse número de horas não serão enviadas para os usuários. Isso ajudará a evitar problemas nos quais o cron não foi executado há muito tempo.';
$string['configoldpostdays'] = 'Número de dias que qualquer mensagem é considerada lida.';
$string['configpreferteachersmark'] = 'A resposta marcada como resolvida pelo proprietário de um curso é priorizada sobre a resposta marcada como útil pelo autor da discussão.';
$string['configreputationnotnegative'] = 'Proíbe a reputação do usuário como negativa.';
$string['configtrackingtype'] = 'Configuração padrão para o monitoramento de leitura.';
$string['configtrackmoodleoverflow'] = 'Escolha \'sim\' se você quiser monitorar as mensagens lidas/não lidas de cada usuário.';
$string['configvotescaledownvote'] = 'A quantidade de reputação de uma avaliação negativa para o sua mensagem.';
$string['configvotescalehelpful'] = 'A quantidade de reputação marcada como útil de sua mensagem.';
$string['configvotescalesolved'] = 'A quantidade de reputação marcada como resolvida de sua mensagem .';
$string['configvotescaleupvote'] = 'A quantidade de reputação que um voto para o seu post fornece.';
$string['configvotescalevote'] = 'A quantia de voto de reputação fornece.';
$string['confirmsubscribe'] = 'Você realmente quer se inscrever no fórum \'{$a}\'?';
$string['confirmsubscribediscussion'] = 'Você realmente quer se inscrever na discussão \'{$a->discussion}\' no fórum \'{$a->moodleoverflow}\'?';
$string['confirmunsubscribe'] = 'Você realmente deseja cancelar a assinatura do moodleoverflow \'{$a}\'?';
$string['confirmunsubscribediscussion'] = 'Você realmente deseja cancelar a assinatura da discussão \'{$a->discussion}\' no moodleoverflow \'{$a->moodleoverflow}\'?';
$string['couldnotadd'] = 'Não foi possível adicionar sua mensagem devido a um erro desconhecido';
$string['couldnotdeletereplies'] = 'Desculpe, isso não pode ser excluído porque as pessoas já responderam a ele';
$string['couldnotupdate'] = 'Não foi possível atualizar sua mensagem devido a um erro desconhecido';
$string['coursewidereputation'] = 'Cruzar reputação de módulo?';
$string['coursewidereputation_help'] = 'Se definido como sim, a reputação dos usuários de todos os módulos do moodleoverflow neste curso será somada.';
$string['crontask'] = 'Tarefas de manutenção do Moodleoverflow';
$string['delete'] = 'Excluir';
$string['deletesure'] = 'Tem certeza de que deseja excluir esta mensagem?';
$string['deletesureplural'] = 'Tem certeza de que deseja excluir esta mensagem e todas as respostas? ({$a} mensagens)';
$string['disallowsubscribe'] = 'Assinaturas não permitidas';
$string['discussionlocked'] = 'Esta discussão foi bloqueada para que você não possa mais respondê-la.';
$string['discussionname'] = 'Nome de discussão';
$string['discussionnownotsubscribed'] = '{$a->name} não será notificado de novos posts em \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussionnowsubscribed'] = '{$a->name} será notificado de novas postagens em \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussions'] = 'Discussões';
$string['discussionsubscription'] = 'Inscrição em discussão';
$string['discussionsubscription_help'] = 'Ser assinante em uma discussão significa que você receberá notificações de novas postagens nessa discussão.';
$string['downvote'] = 'Votar contra';
$string['downvotenotchangeable'] = 'Votar contra (não alterável)';
$string['edit'] = 'Editar';
$string['editedby'] = 'Editado por {$a->name} - submissão original {$a->date}';
$string['editedpostupdated'] = '{$a}\'s mensagens foram atualizadas';
$string['erroremptymessage'] = 'A mensagem não pode estar vazia';
$string['erroremptysubject'] = 'Assunto da mensagem não pode estar vazio.';
$string['errorwhiledelete'] = 'Um erro ocorreu durante a exclusão do registro.';
$string['eventdiscussioncreated'] = 'Discussão criada';
$string['eventdiscussiondeleted'] = 'Discussão excluída';
$string['eventdiscussionsubscriptioncreated'] = 'Submissão de discussão criada';
$string['eventdiscussionsubscriptiondeleted'] = 'Submissão de discussão excluída';
$string['eventdiscussionviewed'] = 'Discussão visualizada';
$string['eventpostcreated'] = 'Mensagem criada';
$string['eventpostdeleted'] = 'Mensagem excluída';
$string['eventpostupdated'] = 'Mensagem atualizada';
$string['eventratingcreated'] = 'Avaliação criada';
$string['eventratingdeleted'] = 'Classificação excluída';
$string['eventratingupdated'] = 'Classificação atualizada';
$string['eventreadtrackingdisabled'] = 'Monitoramento de leitura desativado';
$string['eventreadtrackingenabled'] = 'Monitoramento de leitura ativado';
$string['eventsubscriptioncreated'] = 'Submissão criada';
$string['eventsubscriptiondeleted'] = 'Submissão excluída';
$string['everyonecannowchoose'] = 'Todos agora podem optar por ser assinantes';
$string['everyoneisnowsubscribed'] = 'Todos agora são assinantes neste fórum';
$string['everyoneissubscribed'] = 'Todos são assinantes neste fórum';
$string['forcedreadtracking'] = 'Permitir monitoramento de leitura forçado';
$string['generalmoodleoverflows'] = 'Fóruns neste curso';
$string['gotoindex'] = 'Gerenciar preferências';
$string['headerdiscussion'] = 'Discussão';
$string['headerlastpost'] = 'Última mensagem';
$string['headerreplies'] = 'Respostas';
$string['headerstartedby'] = 'Iniciado por';
$string['headerstatus'] = 'Situação';
$string['headerunread'] = 'Não lido';
$string['headervotes'] = 'Avaliações';
$string['helpfulanswer'] = 'O dono da questão reconheceu esta como a melhor resposta.';
$string['hiddenmoodleoverflowpost'] = 'Ocultar mensagem do fórum';
$string['invaliddiscussionid'] = 'ID da discussão estava incorreto';
$string['invalidforcesubscribe'] = 'Modo de assintura forçada inválido';
$string['invalidmoodleoverflowid'] = 'ID de fórum estava incorreto';
$string['invalidparentpostid'] = 'ID da mensagem principal estava incorreto';
$string['invalidpostid'] = 'ID de mensagem inválido - {$a}';
$string['invalidratingid'] = 'A avaliação submetida não é positiva nem negativa.';
$string['mailindexlink'] = 'Altere suas preferências de fórum: {$a}';
$string['manydiscussions'] = 'Discussões por página';
$string['markallread'] = 'Marcar todas as mensagens desta discussão como lidas.';
$string['markdiscussionreadsuccessful'] = 'A discussão foi marcada como lida.';
$string['markhelpful'] = 'Marcar como Útil';
$string['markmoodleoverflowreadsuccessful'] = 'Todas as mensagens foram marcadas como lidas.';
$string['marknothelpful'] = 'Não Útil';
$string['marknotsolved'] = 'Não Resolvido';
$string['markread'] = 'Marcar como lido';
$string['markreadfailed'] = 'A mensagem não pôde ser marcada como lida.';
$string['marksolved'] = 'Marcar como Resolvido';
$string['markunread'] = 'Marcar como não lido';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachments_help'] = 'Esta configuração define o número máximo de arquivos que podem ser anexados a uma mesnsagem de fórum.';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo.';
$string['maxattachmentsize_help'] = 'Essa configuração define o tamanho máximo do arquivo que pode ser anexado a uma mensagem de fórum.';
$string['maxeditingtime'] = 'Quantidade máxima de tempo durante o qual uma mensagem pode ser editada por seu proprietário (seg)';
$string['maxmailingtime'] = 'Tempo de envio máximo';
$string['message'] = 'Mensagem';
$string['messageprovider:posts'] = 'Notificação de novas postagens';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'O módulo Moodleoverflow permite que os participantes usem uma estrutura de fórum de perguntas e respostas. A exibição do fórum não segue uma ordenação cronológica, pois a ordenação depende da avaliação em vez do horário.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Adicionar uma nova instância de Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Permitir assinatura forçada';
$string['moodleoverflowauthorhidden'] = 'Autor (oculto)';
$string['moodleoverflowbodyhidden'] = 'Esta mensagem não pode ser vista por você, provavelmente porque você ainda não postou na discussão, o tempo máximo de edição ainda não finalizou, a discussão não começou ou expirou.';
$string['moodleoverflow:createattachment'] = 'Criar anexos';
$string['moodleoverflow:deleteanypost'] = 'Excluir mensagens';
$string['moodleoverflow:deleteownpost'] = 'Excluir próprias mensagens';
$string['moodleoverflow:editanypost'] = 'Editar mensagens';
$string['moodleoverflowfieldset'] = 'Personalizar conjunto de campos de exemplo';
$string['moodleoverflow:managesubscriptions'] = 'Gerenciar inscrições';
$string['moodleoverflow:marksolved'] = 'Marcar uma mensagem como resolvida';
$string['moodleoverflowname'] = 'Nome do Moodleoverflow';
$string['moodleoverflow:ratehelpful'] = 'Marcar uma mensagem como útil';
$string['moodleoverflow:ratepost'] = 'Avaliar uma mensagem';
$string['moodleoverflow:replypost'] = 'Responder na discussão';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflow:startdiscussion'] = 'Iniciar uma discussão';
$string['moodleoverflowsubjecthidden'] = 'Sujeito (oculto)';
$string['moodleoverflow:view'] = 'Visualizar lista de discussão';
$string['moodleoverflow:viewanyrating'] = 'Visualizar avaliações';
$string['moodleoverflow:viewdiscussion'] = 'Visualizar discussão';
$string['nodiscussions'] = 'Ainda não existem tópicos de discussão nesse fórum.';
$string['nodownvote'] = 'Sem avaliações negativas';
$string['noguestpost'] = 'Desculpe, os visitantes não estão autorizados a postar.';
$string['noguesttracking'] = 'Desculpe, os visitantes não estão autorizados a definir opções de monitoramento.';
$string['noonecansubscribenow'] = 'Não estão permitidas assinaturas agora.';
$string['nopermissiontosubscribe'] = 'Você não tem a permissão de visualizar assinantes';
$string['nopostmoodleoverflow'] = 'Desculpe, você não tem permissão para postar neste fórum.';
$string['noratemoodleoverflow'] = 'Desculpe, você não tem permissão para avaliar neste fórum.';
$string['noratingchangeallowed'] = 'Você não tem permissão para alterar suas avaliações.';
$string['notexists'] = 'Discussão não existe mais';
$string['notpartofdiscussion'] = 'Essa mensagem não é parte de uma discussão!';
$string['notrackmoodleoverflow'] = 'Não monitorar mensagens não lidas';
$string['notstartuser'] = 'Somente o usuário que iniciou a discussão pode marcar uma resposta como útil.';
$string['notteacher'] = 'Apenas os donos do curso podem fazer isso.';
$string['noupvote'] = 'Sem avaliações positivas';
$string['noviewdiscussionspermission'] = 'Você não tem a permissão de visualizar discussões nesse fórum';
$string['nowallsubscribed'] = 'Todos os fóruns em {$a} estão assinados.';
$string['nowallunsubscribed'] = 'Todos os fóruns em {$a} não estão assinados.';
$string['nownotsubscribed'] = '{$a->name} NÃO será notificado de novas postagens em \'{$a->moodleoverflow}\\';
$string['nownottracking'] = '{$a->name} não está mais monitorando  \'{$a->moodleoverflow}\'.';
$string['nowsubscribed'] = '{$a->name} será notificado de novas postagens em \'{$a->moodleoverflow}\\';
$string['nowtracking'] = '{$a->name} está agora monitorando \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = 'Lido após dias';
$string['parent'] = 'Mostrar fonte';
$string['permalink'] = 'Permalink';
$string['pluginadministration'] = 'Administração de Moodleoverflow';
$string['pluginname'] = 'Moodleoverflow';
$string['postaddedsuccess'] = 'Sua mensagem foi adicionada com sucesso.';
$string['postaddedtimeleft'] = 'Você tem {$a} para editar se quiser fazer algumas alterações.';
$string['postbyuser'] = '{$a->post} por {$a->user}';
$string['postincontext'] = 'Ver esta mensagem no contexto';
$string['postmailinfolink'] = 'Essa é uma cópia de uma mensagem postada em {$a->coursename}.

Para responder clique neste link: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'Mensagem requerida não existe';
$string['posttomoodleoverflow'] = 'Postar no fórum';
$string['postupdated'] = 'Sua mensagem foi atualizada';
$string['preferteachersmark'] = 'Prefere marcas de proprietário do curso?';
$string['rateownpost'] = 'Você não pode avaliar sua própria mensagem.';
$string['ratingfailed'] = 'Avaliação falhou. Tente novamente.';
$string['ratingheading'] = 'Avaliação e reputação';
$string['ratingpreference'] = 'Exibir primeiro';
$string['ratingpreference_help'] = 'As respostas podem ser marcadas como resolvidas e úteis. Esta opção decide qual delas será fixada como a primeira resposta da discussão. Existem 2 opções:

* Útil - Marcada como útil no tópico inicial será fixada no topo da discussão
* Resolvida - Marcada como resolvida pelo professor será fixada no topo da discussão';
$string['ratingtoold'] = 'As avaliações só podem ser alteradas 30 minutos após a primeira avaliação.';
$string['re'] = 'Re:';
$string['reply'] = 'Comentário';
$string['replyfirst'] = 'Resposta';
$string['reputation'] = 'Reputação';
$string['reputationnotnegative'] = 'Reputação';
$string['smallmessage'] = '{$a->user} postado em {$a->moodleoverflowname}';
$string['solvedanswer'] = 'Essa mensagem está marcada como resolvida.';
$string['starterrating'] = 'Útil';
$string['subject'] = 'Assunto';
$string['subscribe'] = 'Assinar este fórum';
$string['subscribed'] = 'Assinante';
$string['subscribeenrolledonly'] = 'Desculpe, apenas os usuários inscritos podem assinar o fórum para receber as notificações de postagem.';
$string['subscribestart'] = 'Envie-me notificações de novas mensagens neste fórum';
$string['subscribestop'] = 'Não quero ser notificado de novas mensagens neste fórum';
$string['subscriptionauto'] = 'Inscrição automática';
$string['subscriptiondisabled'] = 'Inscrição desativada';
$string['subscriptionforced'] = 'Assinatura forçada';
$string['subscriptionmode'] = 'Modo de assinatura';
$string['subscriptionmode_help'] = 'Quando um participante assina um fórum, isto quer dizer que ele irá receber notificações de novos posts. Existem 4 tipos de assinatura:

* Assinatura opcional - Participantes podem escolher se querem se inscrever
* Assinatura forçada - Todos são assinantes e não conseguem cancelar a assinatura
* Assinatura automática - Todos são inicialmente assinantes mas podem escolher deixar de assinar a qualquer momento
* Assinatura desabilitada - Assinaturas não são permitidas

Observação: qualquer alteração no modo de assinatura afetará apenas os futuros usuários, e não os usuários existentes.';
$string['subscriptionoptional'] = 'Assinatura Opcional';
$string['subscriptiontrackingheader'] = 'Assinatura e monitoramento';
$string['taskcleanreadrecords'] = 'Tarefa de manutenção do Moodleoverflow para limpar registros de leitura antigos';
$string['tasksendmails'] = 'Tarefa de manutenção do Moodleoverflow para enviar e-mails';
$string['teacherrating'] = 'Resolvido';
$string['tracking'] = 'Rastrear';
$string['trackingoff'] = 'Desligado';
$string['trackingon'] = 'Forçado';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Monitoramento de leitura';
$string['trackingtype_help'] = 'A opção de monitorar leitura permite que os participantes verifiquem facilmente quais as mensagens ainda não foram lidas, colocando em evidência as novas mensagens.

Se configurado como opcional, os participantes podem escolher se desejam ativar ou desativar o monitoramento através de um link no bloco de administração. (Os usuários também devem ativar o monitoramento do fórum em suas preferências de fórum).

Se \'Permitir monitoramento de leitura forçado\' estiver habilitado na administração do site, uma outra opção fica disponível - forçado. Isso significa que o monitoramento será sempre ativado, independentemente das preferências de fórum configuradas no perfil dos usuários.';
$string['trackmoodleoverflow'] = 'Monitorar mensagens não lidas';
$string['unknownerror'] = 'Não é esperado que isso aconteça.';
$string['unreadposts'] = 'Mensagens não lidas';
$string['unreadpostsnumber'] = '{$a} mensagens não lidas';
$string['unreadpostsone'] = '1 mensagem não lida';
$string['unsubscribe'] = 'Cancelar assinatura nesse fórum';
$string['unsubscribediscussion'] = 'Cancelar assinatura nessa discussão';
$string['unsubscribediscussionlink'] = 'Cancelar assinatura nessa discussão: {$a}';
$string['unsubscribelink'] = 'Cancelar assinatura nesse fórum: {$a}';
$string['upvote'] = 'Voto positivo';
$string['upvotenotchangeable'] = 'Voto positivo (não alterável)';
$string['votescaledownvote'] = 'Reputação: Voto negativo';
$string['votescalehelpful'] = 'Reputação: Útil';
$string['votescalesolved'] = 'Reputação: Resolvida';
$string['votescaleupvote'] = 'Reputação: Voto positivo';
$string['votescalevote'] = 'Reputação: Voto.';
$string['yournewtopic'] = 'Seu novo tópico de discussão';
$string['yourreply'] = 'Sua resposta';
