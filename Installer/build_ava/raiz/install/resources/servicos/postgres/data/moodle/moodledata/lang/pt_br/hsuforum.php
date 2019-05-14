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
 * Strings for component 'hsuforum', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   hsuforum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessible'] = 'Acessível';
$string['activityoverview'] = 'Há novas publicações no fórum';
$string['addanewtopic'] = 'Adicionar novo tópico';
$string['addareply'] = 'Adicionar sua resposta';
$string['addyourdiscussion'] = 'Adicionar seu tópico';
$string['advancedsearch'] = 'Pesquisa avançada';
$string['ajaxrequesterror'] = 'Falha ao completar sua requisição, favor tentar novamente.';
$string['all'] = 'Tudo';
$string['allforums'] = 'Todos os fóruns';
$string['allowanonymous'] = 'Permitir publicações anônimas';
$string['allowanonymous_help'] = 'Caso selecionado, o nome do autor de cada publicação será escondido na exibição do fórum.';
$string['allowdiscussions'] = '{$a} poderá publicar neste fórum?';
$string['allowsallsubscribe'] = 'Este fórum permite que todos optem em ser assinantes ou não';
$string['allowsdiscussions'] = 'Este fórum permite que todos criem tópicos';
$string['allsubscribe'] = 'Ser assinante em todos os fóruns';
$string['allunsubscribe'] = 'Cancelar a assinatura de todos os fóruns';
$string['alreadyfirstpost'] = 'Esta  é a primeira publicação do tópico';
$string['anonymousalternatename'] = 'Anônimo';
$string['anonymousfirstname'] = 'Anônimo';
$string['anonymousfirstnamephonetic'] = 'Anônimo';
$string['anonymouslastname'] = 'Usuário';
$string['anonymouslastnamephonetic'] = 'Usuário';
$string['anonymousrecentactivity'] = 'Pode haver atividades recentes neste fórum, mas por ser um fórum anônimo detalhes não podem ser exibidos.';
$string['anonymouswarning'] = 'Ao mover este tópico você pode revelar dados anônimos. Você tem certeza que deseja fazer isto?';
$string['anyfile'] = 'Qualquer arquivo';
$string['areapost'] = 'Mensagens';
$string['attachment'] = 'Anexos';
$string['attachment_help'] = 'Você pode optar por anexar um ou mais arquivos a esta publicação. Se você anexar uma imagem, ela será exibida após a mensagem.';
$string['attachmentnopost'] = 'Você não pode exportar os anexos sem a ID da publicação';
$string['attachments'] = 'Anexos';
$string['attachments:x'] = 'Anexos: {$a}';
$string['author'] = 'Autor';
$string['blockafter'] = 'Limite de publicações para bloqueio';
$string['blockafter_help'] = 'Esta configuração define o número máximo de publicações que o usuário pode publicar em um período de tempo. Usuários com permissão  mod/hsuforum:postwithoutthrottling não entram neste limite.';
$string['blockperiod'] = 'Período de tempo para bloqueio';
$string['blockperioddisabled'] = 'Não bloquear';
$string['blockperiod_help'] = 'Estudantes podem ser bloqueados por publicarem um número superior ao definido em um determinado período. Usuários com permissão  mod/hsuforum:postwithoutthrottling não entram neste limite.';
$string['blogforum'] = 'Fórum padrão exibido em formato de blog';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['byx'] = 'por {$a}';
$string['cannnotdeletesinglediscussion'] = 'Desculpe, mas você não tem permissão para excluir este tópico.';
$string['cannotadd'] = 'Não é possível adicionar um novo tópico neste fórum';
$string['cannotadddiscussion'] = 'Adicionar novos tópicos neste fórum requer que você participe de um grupo.';
$string['cannotadddiscussionall'] = 'Você não tem permissão para adicionar novos tópicos gerais (para todos os participantes).';
$string['cannotaddsubscriber'] = 'Não foi possível adicionar assinante com ID {$a} neste fórum!';
$string['cannotaddteacherforumto'] = 'Não é possível converter um fórum do professor para a seção 0 neste curso.';
$string['cannotcreatediscussion'] = 'Não foi possível criar novo tópico.';
$string['cannotcreateinstanceforteacher'] = 'Não foi possível criar um novo módulo do curso para o fórum do professor.';
$string['cannotdeletepost'] = 'Você não pode excluir esta publicação!';
$string['cannoteditposts'] = 'Você não pode editar a publicação de outras pessoas!';
$string['cannotfinddiscussion'] = 'Não foi possível encontrar este tópico neste fórum.';
$string['cannotfindfirstpost'] = 'Não foi possível encontrar a primeira publicação deste fórum.';
$string['cannotfindorcreateforum'] = 'Não foi possível encontrar ou criar um fórum de notícias para este site.';
$string['cannotfindparentpost'] = 'Não foi possível encontrar a publicaçãoi inicial {$a}';
$string['cannotmakeprivatereplies'] = 'Desculpe, mas você não tem permissão para criar respostas privadas neste fórum.';
$string['cannotmovefromsingleforum'] = 'Não é possível mover o tópico a partir de um fórum de discussão simples.';
$string['cannotmovenotvisible'] = 'Fórum oculto';
$string['cannotmovetonotexist'] = 'Você não pode mover para este fórum - ele não existe!';
$string['cannotmovetonotfound'] = 'O fórum de destino não foi encontrado neste curso.';
$string['cannotmovetosingleforum'] = 'Não é permitido mover tópicos  a partir de um fórum de discussão simples.';
$string['cannotpurgecachedrss'] = 'Não foi possível esvaziar o cache do feed RSS para ambos fóruns de origem e/ou destino - verifique seu arquivo de permissões do fórum.';
$string['cannotremovesubscriber'] = 'Não foi possível remover o assinante com  ID {$a} deste fórum!';
$string['cannotreply'] = 'Você não pode responder esta publicação.';
$string['cannotsplit'] = 'Tópicos deste fórum não podem ser divididas.';
$string['cannotsubscribe'] = 'Desculpe, mas você precisa participar de um grupo para ser assinante.';
$string['cannottrack'] = 'Não é possível parar o monitoramento deste fórum.';
$string['cannotunsubscribe'] = 'Não foi possível cancelar sua assinatura deste fórum.';
$string['cannotupdatepost'] = 'Você não pode atualizar esta publicação.';
$string['cannotviewpostyet'] = 'Você não pode ler as questões de outros estudantes neste tópico. Para ter acesso, contribua criando um novo tópico que seu acesso será liberado.';
$string['cannotviewusersposts'] = 'Não há publicações deste usuário que você possa ver.';
$string['cansubscribediscerror'] = 'Você não tem permissão para ser assinante deste tópico.';
$string['cleanreadtime'] = 'Horário para marcar publicações antigas como lidos.';
$string['clicktocollapse'] = 'Clique para ocultar publicações e qualquer réplica.';
$string['clicktoexpand'] = 'Clique para exibir as mensagens e qualquer réplica.';
$string['collapseall'] = 'Expandir todos';
$string['completiondiscussions'] = 'O estudante deve criar discussões:';
$string['completiondiscussionsdesc'] = 'O estudante deve criar no mínimo {$a} tópico(s)';
$string['completiondiscussionsgroup'] = 'Requer discussões';
$string['completiondiscussionshelp'] = 'exigindo discussões para concluí-la.';
$string['completionposts'] = 'O estudante precisa abrir ou responder em um tópico de discussão:';
$string['completionpostsdesc'] = 'O estudante precisa publicar no mínimo {$a} tópico(s) ou réplica(s).';
$string['completionpostsgroup'] = 'Requer publicações';
$string['completionpostshelp'] = 'exigindo tópicos ou réplicas para completar.';
$string['completionreplies'] = 'O estudante deve publicar réplicas:';
$string['completionrepliesdesc'] = 'O estudante precisa publicar no mínimo {$a} réplica(s)';
$string['completionrepliesgroup'] = 'Requer réplicas';
$string['completionreplieshelp'] = 'exigindo respostas para completar';
$string['completionusegradeerror'] = 'Não é permitido requerer nota pois este fórum não é avaliativo. Remova este requisito de conclusão ou torne este fórum avaliativo.';
$string['configcleanreadtime'] = 'Hora do dia para limpar publicações antigas da tabela de " leitura".';
$string['configdigestmailtime'] = 'Pessoas que optam por receber e-mails com resumos os receberão diariamente. Esta configuração controla o horário do dia que o e-mail será enviado (a próxima rotina "cron" que executar após este horário irá disparar o e-mail).';
$string['configenablerssfeeds'] = 'Esta opção ativa a possibilidades de feeds RSS para todos os fóruns. Você ainda precisará ativar individualmente em cada fórum.';
$string['configenabletimedposts'] = 'Defina como "Sim" se você quiser permitir a configuração de períodos de exibição ao publicar uma nova discussão no fórum.';
$string['confighiderecentposts'] = 'Defina como Sim para interromper a exibição de publicações recentes no fórum na página do curso.';
$string['configlongpost'] = 'Qualquer publicação acima deste tamanho (em caracteres,  código HTML não é considerado) será considerado longo. Publicações exibidas na página do curso,  páginas de curso no formato social,  ou perfil do usuário são encurtados em um porto de corte manual entre os valores do hsuforum_shortpost e hsuforum_longpost.';
$string['configmanydiscussions'] = 'Número de tópicos a serem exibidos por página.';
$string['configmaxattachments'] = 'Número máximo de anexos por publicação.';
$string['configmaxbytes'] = 'Tamanho máximo dos anexos em todos os fóruns do site (sujeito ao limite de cada curso e outras configurações pontuais).';
$string['configoldpostdays'] = 'Número de dias para que uma publicação seja considerado lido.';
$string['configreplytouser'] = 'Quando uma publicação no fórum é enviada, ela deve constar o e-mail do usuário para que o destinatário possa respondê-la diretamente, ao invés de utilizar o fórum? Mesmo definindo como " Sim"  o usuário ainda pode optar nas configurações do seu perfil por manter seu e-mail secreto.';
$string['configrssarticlesdefault'] = 'Caso o feeds RSS sejam ativados, defina o número padrão de artigos (inclusive tópicos ou publicações).';
$string['configrsstypedefault'] = 'Caso os feeds RSS sejam ativados, defina o tipo de atividade padrão.';
$string['configshortpost'] = 'Qualquer publicação abaixo deste tamanho (em caracteres,  código HTML não é considerado) será considerada como curta (veja abaixo).';
$string['configsubscriptiontype'] = 'Configuração padrão para o modo de assinatura.';
$string['configusermarksread'] = 'Caso "Sim", o usuário deve marcar manualmente a publicação como lida. Caso "Não", quando a publicação for visualizada será marcada como lida automaticamente.';
$string['confirmsubscribe'] = 'Você realmente deseja ser assinante neste fórum \'{$a}\'?';
$string['confirmunsubscribe'] = 'Você realmente deseja cancelar sua assinatura neste fórum \'{$a}\'?';
$string['couldnotadd'] = 'Por causa de um erro desconhecido, não foi possível adicionar sua publicação.';
$string['couldnotdeletereplies'] = 'Desculpe, não é possível remover pois outras pessoas responderam esta publicação.';
$string['couldnotupdate'] = 'Por causa de um erro desconhecido, não foi possível atualizar sua publicação.';
$string['createdbynameondate'] = 'Criado por {$a->name} em {$a->date}';
$string['crontask'] = 'Fórum Aberto, trabalhos de envio de e-mails e manutenção.';
$string['csv'] = 'CSV';
$string['date'] = 'Data';
$string['default'] = 'Padrão';
$string['delete'] = 'Excluir';
$string['deleteattachments'] = 'Excluir anexos';
$string['deleteattachmentx'] = 'Excluir {$a}';
$string['deleteddiscussion'] = 'O tópico de discussão foi excluído.';
$string['deletedpost'] = 'A publicação foi excluída.';
$string['deletedposts'] = 'As publicações foram excluídas.';
$string['deletesure'] = 'Você tem certeza que deseja excluir esta publicação?';
$string['deletesureplural'] = 'Você tem certeza que deseja excluir esta publicação e todos as suas respostas?  ({$a} publicações)';
$string['digestmailheader'] = 'Este é seu resumo diário do fórum {$a->sitename}. Para alterar sues preferências de e-mail, acesse  {$a->userprefs}.';
$string['digestmailpost'] = 'Altere suas preferências de resumo do fórum.';
$string['digestmailpostlink'] = 'Altere suas preferências de resumo do fórum: {$a}';
$string['digestmailprefs'] = 'seu perfil de usuário';
$string['digestmailsubject'] = '{$a}: formato do resumo';
$string['digestmailtime'] = 'Horário para envio do e-mail com resumos.';
$string['digestsentusers'] = 'E-mails enviados com sucesso para o usuário {$a}.';
$string['disallowsubscribe'] = 'Assinaturas não permitidas.';
$string['disallowsubscribeteacher'] = 'Subscrições não permitidas (exceto para professores).';
$string['discussion'] = 'Discussão';
$string['discussiondisplay'] = 'Exibir discussão';
$string['discussionlocked'] = 'Esta tópico foi bloqueado, então você não poderá responde-lo.';
$string['discussionlockingdisabled'] = 'Não bloquear discussões';
$string['discussionlockingheader'] = 'Bloqueio de discussão';
$string['discussionmoved'] = 'Este tópico foi movido para \'{$a}\'.';
$string['discussionmovedpost'] = 'Este tópico foi movido, <a href="{$a->discusshref}">clique aqui</a> para acessa-la no fórum <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Título do tópico';
$string['discussionpin'] = 'Fixar';
$string['discussionpinned'] = 'Fixado';
$string['discussionpinned_help'] = 'Tópicos fixos aparecem no topo do fórum.';
$string['discussions'] = 'Tópicos';
$string['discussionsortkey:created'] = 'Data de criação';
$string['discussionsortkey:lastreply'] = 'Últimos';
$string['discussionsortkey:replies'] = 'Mais ativos';
$string['discussionsortkey:subscribe'] = 'Inscritos';
$string['discussionsstartedby'] = 'Tópicos iniciados por {$a}';
$string['discussionsubscribers'] = 'Assinantes no tópico';
$string['discussionsummary'] = 'A tabela de todos os tópicos no fórum para {$a}. O cabeçalho é uma combinação do nome, sobrenome e imagem do usuário.';
$string['discussionunpin'] = 'Desafixar';
$string['discussion:x'] = 'Discussão: {$a}';
$string['discussthistopic'] = 'Participe deste tópico';
$string['displaydiscussionreplies'] = 'Exibir respostas ao tópico';
$string['displayend'] = 'Exibir final';
$string['displayend_help'] = 'Essa configuração especifica se uma publicação no fórum deve ser ocultada após uma determinada data. Observe que os administradores sempre podem ver as publicações do fórum.';
$string['displayperiod'] = 'Período de exibição';
$string['displaystart'] = 'Data de início';
$string['displaystart_help'] = 'Essa configuração especifica se uma publicação no fórum deve ser exibida a partir de uma determinada data. Observe que os administradores sempre podem ver as publicações do fórum.';
$string['displaywordcount'] = 'Exibir contagem de palavras.';
$string['displaywordcount_help'] = 'Essa configuração especifica se a contagem de palavras de cada publicação deve ser exibida ou não.';
$string['eachuserforum'] = 'Cada usuário publica um tópico.';
$string['edit'] = 'Editar';
$string['editedby'] = 'Editado por {$a->name} - publicado originalmente em {$a->date}.';
$string['editedpostupdated'] = 'As publicações de {$a} foram atualizadas.';
$string['editing'] = 'Edição';
$string['editingpost'] = 'Edição de mensagem';
$string['emaildigestcompleteshort'] = 'Publicações completas';
$string['emaildigestdefault'] = 'Padrão ({$a})';
$string['emaildigestoffshort'] = 'Sem resumo';
$string['emaildigestsubjectsshort'] = 'Apenas assuntos';
$string['emaildigesttype'] = 'Opções do e-mail de resumo';
$string['emaildigesttype_help'] = 'O tipo de notificação que você receberá para cada fórum.

* Padrão - segue as definições de resumo encontradas no seu perfil do usuário. Se você atualizar seu perfil, então essa mudança será refletida aqui também;
* Sem resumo - você receberá um e-mail a cada publicação no fórum;
* Resumo - publicações completas - você receberá um e-mail por dia contendo todo o conteúdo das publicações no fórum.;
* Resumo - somente assuntos - você receberá um e-mail por dia contendo apenas o assunto das publicações no fórum.';
$string['emptymessage'] = 'Algo está errado com sua publicação. Talvez você tenha deixado algo sem preencher ou o anexo seja muito grande. Suas alterações não foram salvas.';
$string['erroremptymessage'] = 'A publicação não pode estar sem conteúdo.';
$string['erroremptysubject'] = 'O assunto da publicação não pode estar em branco.';
$string['errorenrolmentrequired'] = 'Você precisa estar inscrito no curso para ter acesso a este conteúdo.';
$string['errortimestartgreater'] = 'O horário de início não pode ser maior que o de término.';
$string['errorwhiledelete'] = 'Ocorreu um erro ao excluir o registro.';
$string['eventassessableuploaded'] = 'Algum conteúdo foi publicado.';
$string['eventcoursesearched'] = 'Curso pesquisado';
$string['eventdiscussioncreated'] = 'Tópico criado';
$string['eventdiscussiondeleted'] = 'Tópico excluído';
$string['eventdiscussionmoved'] = 'Tópico movido';
$string['eventdiscussionpinned'] = 'Tópico fixado';
$string['eventdiscussionunpinned'] = 'Tópico desafixado';
$string['eventdiscussionupdated'] = 'Tópico atualizado';
$string['eventdiscussionviewed'] = 'Tópico exibido';
$string['eventpostcreated'] = 'Publicação criada';
$string['eventpostdeleted'] = 'Publicação excluída';
$string['eventpostupdated'] = 'Publicação atualizada';
$string['eventreadtrackingdisabled'] = 'Monitoramento de leitura desativado.';
$string['eventreadtrackingenabled'] = 'Monitoramento de leitura ativado.';
$string['eventsubscribersviewed'] = 'Assinantes visualizados.';
$string['eventsubscriptioncreated'] = 'Assinatura criada.';
$string['eventsubscriptiondeleted'] = 'Assinatura excluída.';
$string['eventuserreportviewed'] = 'Relatório do usuário visualizado.';
$string['everyonecanchoose'] = 'Todos podem optar por ser assinantes.';
$string['everyonecannowchoose'] = 'Todos agora podem optar por ser assinstes.';
$string['everyoneisnowsubscribed'] = 'Todos agora são assinantes neste fórum.';
$string['everyoneissubscribed'] = 'Todos são assinantes neste fórum.';
$string['existingsubscribers'] = 'Assinantes existentes.';
$string['expandall'] = 'Expandir tudo';
$string['export'] = 'Exportar';
$string['exportattachments'] = 'Exportar anexos';
$string['exportdiscussion'] = 'Exportar toda a discussão para o portfólio.';
$string['exportformat'] = 'Formato de exportação';
$string['forcessubscribe'] = 'Este fórum força todos a serem assinantes.';
$string['forum'] = 'Fórum';
$string['forumauthorhidden'] = 'Autor (oculto)';
$string['forumblockingalmosttoomanyposts'] = 'Você está se aproximando do limite de publicações. Você publicou {$a-> numposts} vezes no último {$a-> blockperiod} e o limite é de {$a-> blockafter} mensagens.';
$string['forumbodyhidden'] = 'Esta mensagem não pode ser vista por você, provavelmente porque você não participou da discussão, o tempo máximo de edição ainda não passou, a discussão não começou ou a discussão expirou.';
$string['forumintro'] = 'Descrição';
$string['forumname'] = 'Nome do fórum';
$string['forumposts'] = 'Publicações no fórum';
$string['forums'] = 'Fóruns';
$string['forumsubjecthidden'] = 'Assunto (oculto)';
$string['forumtracked'] = 'Publicações não lidas estão sendo monitorados.';
$string['forumtrackednot'] = 'As publicações não estão sendo monitoradas.';
$string['forumtype'] = 'Tipo de fórum';
$string['forumtype_help'] = 'Existem 5 tipos de fórum:

* Uma única discussão simples - Um único tópico de discussão ao qual todos podem responder (não pode ser usado com grupos separados);
* Cada pessoa publica uma discussão - Cada estudante pode publicar exatamente um novo tópico de discussão, para que todos possam responder;
* Fórum Q e A - Os alunos devem primeiro publicar suas perspectivas antes de ver as publicações de outros alunos;
* Fórum padrão exibido em formato de blog - Um fórum aberto onde qualquer um pode iniciar uma nova discussão a qualquer momento, e em quais tópicos de discussão são exibidos em uma página com links "Responder este tópico";
* Fórum padrão para uso geral - Um fórum aberto onde qualquer pessoa pode iniciar uma nova discussão a qualquer momento.';
$string['general'] = 'Geral';
$string['generalforum'] = 'Fórum padrão para uso geral';
$string['generalforums'] = 'Fóruns gerais';
$string['grade'] = 'Nota';
$string['gradetype'] = 'Tipo de nota';
$string['gradetype_help'] = 'O tipo de nota é usado para determinar o método de avaliação.

* Nenhum: o fórum não é avaliado.
* Manual: o fórum deve ser avaliado manualmente pelo professor através do livro de notas.
* Avaliação: use as avaliações para gerar uma nota.';
$string['gradetypemanual'] = 'Manual';
$string['gradetypenone'] = 'Nenhum';
$string['gradetyperating'] = 'Avaliação';
$string['hiddenforumpost'] = 'Publicação oculta no fórum';
$string['hiderecentposts'] = 'Ocultar publicações recentes';
$string['hsuforum:addinstance'] = 'Adicionar novo fórum';
$string['hsuforum:addnews'] = 'Adicionar avisos';
$string['hsuforum:addquestion'] = 'Adicionar pergunta';
$string['hsuforum:allowforcesubscribe'] = 'Permitir forçar assinatura.';
$string['hsuforum:allowprivate'] = 'Permitir que o usuário responda de maneira privada.';
$string['hsuforum:canoverridediscussionlock'] = 'Responder a discussões bloqueadas.';
$string['hsuforum:canposttomygroups'] = 'Pode publicar em todos os grupos aos quais você tem acesso.';
$string['hsuforum:createattachment'] = 'Criar anexos';
$string['hsuforum:deleteanypost'] = 'Excluir todas as publicações (a qualquer momento)';
$string['hsuforum:deleteownpost'] = 'Excluir suas próprias publicações (dentro do prazo)';
$string['hsuforum:editanypost'] = 'Editar qualquer publicação';
$string['hsuforum:exportdiscussion'] = 'Exportar discussão inteira';
$string['hsuforum:exportownpost'] = 'Exportar publicação pessoal';
$string['hsuforum:exportpost'] = 'Exportar publicação';
$string['hsuforum:managesubscriptions'] = 'Administrar assinaturas';
$string['hsuforum:movediscussions'] = 'Mover discussões';
$string['hsuforum:pindiscussions'] = 'Fixar tópicos';
$string['hsuforum:postwithoutthrottling'] = 'Isento de limite de publicações';
$string['hsuforum:rate'] = 'Avaliar publicações';
$string['hsuforum:replynews'] = 'Responder avisos';
$string['hsuforum:replypost'] = 'Responder publicações';
$string['hsuforum:revealpost'] = 'Revele-se em um fórum anônimo';
$string['hsuforum:splitdiscussions'] = 'Dividir discussão';
$string['hsuforum:startdiscussion'] = 'Iniciar nova discussão';
$string['hsuforum:viewallratings'] = 'Ver todas as avaliações brutas dadas por indivíduos';
$string['hsuforum:viewanyrating'] = 'Ver total de avaliações recebidas';
$string['hsuforum:viewdiscussion'] = 'Ver discussões';
$string['hsuforum:viewflags'] = 'Ver publicações sinalizadas';
$string['hsuforum:viewhiddentimedposts'] = 'Ver as mensagens cronometrados e ocultas';
$string['hsuforum:viewposters'] = 'Ver autores de plubicações do fórum';
$string['hsuforum:viewqandawithoutposting'] = 'Sempre visualizar mensagens Q e A';
$string['hsuforum:viewrating'] = 'Exibir avaliações recebidas';
$string['hsuforum:viewsubscribers'] = 'Ver assinantes';
$string['id'] = 'id';
$string['indicator:cognitivedepth'] = 'Fórum cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade do Fórum.';
