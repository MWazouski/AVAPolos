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
 * Strings for component 'lesson', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   lesson
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Controle de acesso';
$string['actionaftercorrectanswer'] = 'Ação após uma Resposta Correta';
$string['actionaftercorrectanswer_help'] = '<p>A ação padrão é seguir conforme especificado na resposta. Na maioria dos casos isso provavelmente mostrará a pŕoxima página da lição. O estudante passa pela lição de maneira linear, começando no ínicio e terminando no final.</p>

<p>Entretanto, o módulo de lição também pode ser usado como uma tipo de tarefa <if>Flash Card</i> .
    É mostrada alguma informação (opcional) e uma questão em ordem aleatória. Não há início nem final definidos. Apenas um conjunto de <i>Cards</i> (fichas) é mostrado um após outro sem uma ordem particular.</p>

<p>Essa opção permite duas variantes similares de comportamento Flash Card. A opção "Mostrar uma página nunca vista" nunca permite que a mesma página seja mostrada duas vezes (mesmo se o estudante <b>não</b> responder a questão associada com o Card/Página corretamente). A outra opção não-padrão é "Mostrar uma página não respondida", que permite que os estudantes vejam páginas já navegadas, caso não as questões não tenham sido respondidas corretamente.</p>

<p>Em cada tipo de lições Flash Card, o professor pode decidir usar todos os Cards/Páginas na lição ou escolher um subconjunto (aleatório). Isso pode ser definido no parâmetro "Número de Páginas (fichas) a serem mostradas" .</p>';
$string['actions'] = 'Ações';
$string['activitylink'] = 'Link para a próxima atividade';
$string['activitylink_help'] = 'Para inserir um link no final da lição para outra atividade deste curso, selecione esta atividade na caixa de seleção.';
$string['activitylinkname'] = 'Vai a {$a}';
$string['activityoverview'] = 'Você tem aulas que são devidas';
$string['addabranchtable'] = 'Inserir página com painel de navegação';
$string['addanendofbranch'] = 'Inserir Fim de seção';
$string['addanewpage'] = 'Adicionar uma nova página';
$string['addaquestionpage'] = 'Inserir página com questões';
$string['addaquestionpagehere'] = 'Adicionar página de questões aqui';
$string['addbranchtable'] = 'Adicionar uma página de conteúdo';
$string['addcluster'] = 'Inserir cluster';
$string['addedabranchtable'] = 'Painel de Navegação adicionado';
$string['addedanendofbranch'] = 'Fim de seção adicionado';
$string['addedaquestionpage'] = 'Página de Questões adicionada';
$string['addedcluster'] = 'Cluster adicionado';
$string['addedendofcluster'] = 'Fim de cluster adicionado';
$string['addendofbranch'] = 'Adicionar final ao ramo';
$string['addendofcluster'] = 'Inserir fim de cluster';
$string['addessay'] = 'Criar uma página de questão de Dissertação';
$string['additionalattemptsremaining'] = 'Concluída, você pode tentar novamente esta lição';
$string['addmatching'] = 'Criar uma página de questão de Associação';
$string['addmultichoice'] = 'Criar uma página de questão de Múltipla escolha';
$string['addnewgroupoverride'] = 'Adicionar sobreposição de grupo';
$string['addnewuseroverride'] = 'Adicionar sobreposição de usuário';
$string['addnumerical'] = 'Criar uma página de questão Numérica';
$string['addpage'] = 'Adicionar página';
$string['addshortanswer'] = 'Criar uma página de questão de Resposta curta';
$string['addtruefalse'] = 'Criar uma página de questão Verdadeiro/falso.';
$string['allowofflineattempts'] = 'Permitir que a lição seja realizada de forma offline utilizando o aplicativo para dispositivos móveis';
$string['allowofflineattempts_help'] = 'Se habilitado, um usuário do aplicativo móvel pode baixar a lição e realizar uma tentativa offline.
Todas as respostas possíveis e respostas corretas também serão baixadas.
Nota: Não é possível que uma tentativa da lição seja realizada offline se tiver um limite de tempo.';
$string['anchortitle'] = 'Início do conteúdo principal';
$string['and'] = 'E';
$string['answer'] = 'Resposta';
$string['answeredcorrectly'] = 'respondidas corretamente.';
$string['answersfornumerical'] = 'As respostas para questões numéricas devem ser pares de valores Máximos e Mínimos';
$string['arrangebuttonshorizontally'] = 'Ordenar os botões das seções horizontalmente?';
$string['attempt'] = 'Tentativa: {$a}';
$string['attemptheader'] = 'Tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptsdeleted'] = 'Tentativas apagadas';
$string['attemptsremaining'] = 'Você tem ainda {$a} tentativas';
$string['available'] = 'Disponível a partir de';
$string['averagescore'] = 'Pontuação média';
$string['averagetime'] = 'Tempo médio';
$string['branch'] = 'Conteúdo';
$string['branchtable'] = 'Painel de Navegação';
$string['cancel'] = 'Cancelar';
$string['cannotfindanswer'] = 'Erro: não foi possível encontrar a resposta';
$string['cannotfindattempt'] = 'Erro: não foi possível encontrar a tentativa';
$string['cannotfindessay'] = 'Erro: não pôde achar ensaio';
$string['cannotfindfirstgrade'] = 'Erro: não foi possível encontrar as avaliações';
$string['cannotfindfirstpage'] = 'Não foi possível encontrar a orimeira página';
$string['cannotfindgrade'] = 'Erro: não foi possível encontrar as avaliações';
$string['cannotfindnewestgrade'] = 'Erro: não foi possível encontrar a nova avaliação';
$string['cannotfindnextpage'] = 'Backup da Lição: Próxima página não encontrada!';
$string['cannotfindpagerecord'] = 'Adicionar final do ramo: registro de página não encontrada';
$string['cannotfindpages'] = 'Não foi possível encontrar as páginas da lição';
$string['cannotfindpagetitle'] = 'Confirmar exlusão: título da página não encontrado';
$string['cannotfindpreattempt'] = 'O registro da tentativa anterior não foi encontrado!';
$string['cannotfindrecords'] = 'Erro: não foi possível encontrar os registros da lição.';
$string['cannotfindtimer'] = 'Erro: não foi possível encontrar os registros lesson_timer';
$string['cannotfinduser'] = 'Erro: não foi possível encontrar os usuários';
$string['canretake'] = '{$a} pode tentar novamente';
$string['casesensitive'] = 'Usar expressões regulares';
$string['casesensitive_help'] = '<p>Alguns tipos de questão têm uma opção que pode ser ativada clicando na caixa. Os tipos e o significado das opções são detalhados a seguir:</p>

<ol>
<li><p><b>Múltipla escolha</b> Há uma variante das questões de múltipla escolha chamadas questões de    <b>&quot;Múltipla escolha Multi-resposta&quot;</b>. Se essa opção for escolhida, então o estudante deve marcar todas as respostas corretas em um conjunto de respostas. A questão pode ou não dizer <i>quantas</i> respostas corretas existem. Por exemplo, &quot;Quais desses foram presidentes dos Estados Unidos?&quot; não diz, mas "Selecione dois presidentes dos Estados Unidos na lista a seguir." o faz. O número de respostas corretas pode variar de <b>um</b> até o número de alternativas. (Uma questão de Resposta Múltipla com uma resposta correta <b>é</b> diferente de uma questão Múltipla Escolha, já que a anterior permite que o estudante escolha mais de uma resposta.)</p></li>

<li>
  <p><b>Resposta Curta</b> Há dois tipos diferentes de sistemas de comparação para o tipo de questão de Resposta Curta: o mais simples é utilizado por padrão;
      o sistema de &quot;Expressões Regulares&quot; é utilizado caso a opção &quot;Usar Expressões Regulares&quot; estiver marcada. Para mais informações, leia o arquivo de ajuda dos tipos de questões da Lição.</p>
</li>
</ol>
<p>Os outros tipos de questão não utilizam opções de questão.</p>';
$string['checkbranchtable'] = 'Testar painel de navegação';
$string['checkedthisone'] = 'Selecionado este.';
$string['checknavigation'] = 'Testar navegação';
$string['checkquestion'] = 'Testar questão';
$string['classstats'] = 'Estatísticas da classe';
$string['clicktodownload'] = 'Clique no seguinte link para baixar o arquivo.';
$string['closebeforeopen'] = 'Não foi possível atualizar a lição. Você especificou uma data de encerramento anterior a da data de abertura.';
$string['cluster'] = 'Cluster';
$string['clusterjump'] = 'Questão não vista em um cluster';
$string['clustertitle'] = 'Cluster';
$string['collapsed'] = 'Colapsado';
$string['comments'] = 'Seus comentários';
$string['completed'] = 'Concluída';
$string['completederror'] = 'Completar a lição';
$string['completethefollowingconditions'] = 'Você deve atingir os seguintes objetivos na lição <b>{$a}</b> antes de prosseguir.';
$string['completionendreached'] = 'Exigir alcançar o fim';
$string['completionendreached_desc'] = 'Estudante deve chegar ao final da página da lição para completar esta atividade';
$string['completiontimespent'] = 'Estudante deve fazer esta atividade, ao menos por';
$string['completiontimespentdesc'] = 'Estudante deve realizar esta atividade pelo menos {$a} vez';
$string['completiontimespentgroup'] = 'Exigir tempo gasto';
$string['conditionsfordependency'] = 'Condições de dependência';
$string['configintro'] = 'Os valores que são usados como padrão nas configurações ao criar uma nova atividade de aula. As configurações especificadas como avançadas só serão mostradas quando o link \'Mostrar mais ...\' for clicado.';
$string['configmaxanswers'] = 'Valor padrão máximo de respostas por páginas';
$string['configmediaclose'] = 'Exibe um botão \'fechar\', como parte do <em>popup</em> gerado para um arquivo de mídia vinculado.';
$string['configmediaheight'] = 'Define a altura do <em>popup</em> exibido para um arquivo de mídia vinculado.';
$string['configmediawidth'] = 'Define a largura do <em>popup</em> exibido para um arquivo de mídia vinculado.';
$string['configpassword_desc'] = 'Se for necessária uma senha para acessar a lição.';
$string['configslideshowbgcolor'] = 'Cor de fundo da apresentação de slides se estiver habilitada';
$string['configslideshowheight'] = 'Configura a altura da apresentação de slides se estiver habilitada';
$string['configslideshowwidth'] = 'Configura a largura da apresentação de slides se estiver habilitada';
$string['configtimelimit_desc'] = 'Se for definido um tempo limite para a realização da lição, será mostrado no início da tentativa um aviso sobre o limite de tempo e é exibida uma contagem decrescente. Se definir esta opção como zero, não existirá tempo limite para realização da lição.';
$string['confirmdelete'] = 'Excluir página';
$string['confirmdeletionofthispage'] = 'Confirmar exclusão desta página';
$string['congratulations'] = 'Você chegou ao fim desta lição';
$string['continue'] = 'Continuar';
$string['continuetoanswer'] = 'Continuar a mudar as respostas.';
$string['continuetonextpage'] = 'Continuar para a próxima página.';
$string['correctanswerjump'] = 'Destino da resposta correta';
$string['correctanswerscore'] = 'Pontuação da resposta correta';
$string['correctresponse'] = 'Resposta correta';
$string['createaquestionpage'] = 'Criar uma página de questão';
$string['credit'] = 'Crédito';
$string['customscoring'] = 'Pontuação personalizada';
$string['customscoring_help'] = '<p>Isto permitirá que você coloque um valor de pontuação numérica em cada resposta. As respostas podem ter valores negativos ou positivos. Questões importadas terão atribuídos, automaticamente,
1 ponto para respostas corretas e 0 para incorretas, embora você possa mudar isto
após a importação.</p>';
$string['deadline'] = 'Prazo final';
$string['defaultessayresponse'] = 'Sua dissertação será avaliada pelo seu professor.';
$string['deleteallattempts'] = 'Excluir todas as tentativas da lição';
$string['deletedefaults'] = 'Excluir {$a} x padrão';
$string['deletedpage'] = 'Página excluída';
$string['deletepagenamed'] = 'Excluir página: {$a}';
$string['deleting'] = 'Excluindo';
$string['deletingpage'] = 'Excluindo página: {$a}';
$string['dependencyon'] = 'Dependente de';
$string['dependencyon_help'] = '<p>Este parâmetro possibilita que esta lição seja dependente do desempenho do estudante em outra
lição do mesmo curso.</p>

<p>As condições para a dependência incluem:
    <ul>
        <li><b>Tempo Gasto:</b> o aluno deve gastar esta quantidade de tempo estabelecida na lição requerida.</li>
        <li><b>Concluída:</b> o aluno deve completar a lição requerida.</li>
        <li><b>Nota melhor que:</b> o aluno deve obter uma nota na lição requerida maior que a especificada aqui.</li>
    </ul></p>
  <p>  Qualquer combinação das opções acima pode ser usada, se necessário.
</p>';
$string['description'] = 'Texto do link';
$string['detailedstats'] = 'Estatísticas detalhadas';
$string['didnotanswerquestion'] = 'Não respondeu esta questão.';
$string['didnotreceivecredit'] = 'Não recebeu nenhum crédito';
$string['disabled'] = 'Desabilitado';
$string['displaydefaultfeedback'] = 'Use o feedback padrão';
$string['displaydefaultfeedback_help'] = '<p align="center"><strong>Mostrar Feedback Padrão</strong></p>

<p>Se configurado com <strong>Sim</strong>, quando uma resposta não é encontrada para uma questão específica, a resposta padrão "Esta é a resposta correta" ou "Esta é a resposta errada" será usada.</p>
<p>Se configurado com <strong>Não</strong>, quando uma resposta não é encontrada para uma questão específica, então nenhum feedback é mostrado. O usuário fazendo a lição será automaticamente transferido para a próxima página da Lição.</p>';
$string['displayinleftmenu'] = 'Mostrar no menu?';
$string['displayleftif'] = 'Nota mínima para a exibição do menu';
$string['displayleftif_help'] = 'Esta configuração determina se o estudante deve obter uma determinada nota para visualizar o menu da lição. Isso obriga o estudante a passar por toda a lição em sua primeira tentativa. Depois de obter a nota requerida, ele pode utilizar o menu para revisão.';
$string['displayleftmenu'] = 'Mostrar menu';
$string['displayleftmenu_help'] = 'Se habilitado, é mostrado um menu que permite aos usuários navegar pela lista de páginas.';
$string['displayofgrade'] = 'Visualização das notas (apenas para estudantes)';
$string['displayreview'] = 'Fornecer uma opção para tentar uma nova questão denovo';
$string['displayreview_help'] = 'Se habilitado, quando uma questão é respondida incorretamente, o estudante recebe a opção de tentar novamente sem pontuação ou continuar com a lição. Não é compatível com questões dissertativas.';
$string['displayscorewithessays'] = '<p>Você recebeu {$a->score} de um total de {$a->tempmaxgrade} nas questões avaliadas automaticamente.</p>
<p>A(s) sua(s) {$a->essayquestions} questão(ões) dissertativa(s) será(ão) avaliada(s) e somada(s) ao seu resultado final em uma data posterior. </ p>
<p>Sua nota atual, sem a(s) questão(ões) dissertativa(s), é {$a->score} de um total de {$a->grade}>/p>';
$string['displayscorewithoutessays'] = 'A sua pontuação é {$a->score} (de {$a->grade}).';
$string['duplicatepagenamed'] = 'Duplicar página: {$a}';
$string['edit'] = 'Editar';
$string['editbranchtable'] = 'Editando uma página de conteúdo';
$string['editcluster'] = 'Editando um cluster';
$string['editendofbranch'] = 'Editando uma página de fim de ramo';
$string['editendofcluster'] = 'Editando o fim da página de cluster';
$string['editessay'] = 'Editando uma página de questão de Dissertação';
$string['editingquestionpage'] = 'Editando página de questão {$a}';
$string['editlessonsettings'] = 'Editar as configurações desta lição';
$string['editmatching'] = 'Editando uma página de questão de Associação';
$string['editmultichoice'] = 'Editando uma página de questão de Múltipla escolha';
$string['editnumerical'] = 'Editando uma página de questão Numérica';
$string['editoverride'] = 'Editar sobreposição';
$string['editpage'] = 'Editar conteúdo de página';
$string['editpagecontent'] = 'Editar o conteúdo desta página';
$string['editquestion'] = 'Editando uma página de questão';
$string['editshortanswer'] = 'Editando uma página de questão de Resposta curta.';
$string['edittruefalse'] = 'Editando uma página de questão Verdadeiro/falso.';
$string['email'] = 'Email';
$string['emailallgradedessays'] = 'Enviar email de todas as dissertações avaliadas ';
$string['emailgradedessays'] = 'Enviar email das dissertações avaliadas';
$string['emailsuccess'] = 'Envio de email bem sucedido';
$string['emptypassword'] = 'Senha não pode ser vazia';
$string['enabled'] = 'Habilitado';
$string['endofbranch'] = 'Fim de seção';
$string['endofcluster'] = 'Fim do cluster';
$string['endofclustertitle'] = 'Fim do cluster';
$string['endoflesson'] = 'Fim da lição';
$string['enteredthis'] = 'inserido este.';
$string['enterpassword'] = 'Inserir a senha:';
$string['eolstudentoutoftime'] = 'Atenção: O tempo para terminar esta lição acabou. Se a sua última resposta foi enviada quando o tempo de duração já tinha sido superado, ela não será considerada.';
$string['eolstudentoutoftimenoanswers'] = 'Você não respondeu nenhuma questão. A nota atribuída foi igual a 0 .';
$string['essay'] = 'Dissertação';
$string['essayemailmessage2'] = '<p>Questão Ensaio:<blockquote>{$a->question}</blockquote></p><p>Sua resposta:<blockquote><em>{$a->response}</em></blockquote></p><p>Comentário do avaliador:<blockquote><em>{$a->comment}</em></blockquote></p><p>Você recebeu {$a->earned} por {$a->outof} por esta questão de ensaio.</p><p>Sua avaliação para a lição foi modificada para {$a->newgrade}%.</p>';
$string['essayemailsubject'] = 'Nota disponível para a questão da lição';
$string['essayresponses'] = 'Respostas dissertativas';
$string['essays'] = 'Dissertações';
$string['essayscore'] = 'Nota da dissertação';
$string['eventcontentpageviewed'] = 'Página de conteúdo visualizada';
$string['eventessayassessed'] = 'Ensaio avaliado';
$string['eventessayattemptviewed'] = 'Tentativa de Ensaio visualizada';
$string['eventlessonended'] = 'Lição finalizada';
$string['eventlessonrestarted'] = 'Lição reiniciada';
$string['eventlessonresumed'] = 'Lição retomada';
$string['eventlessonstarted'] = 'Lição iniciada';
$string['eventoverridecreated'] = 'Sobreposição da lição criada';
$string['eventoverridedeleted'] = 'Sobreposição da lição excluída';
$string['eventoverrideupdated'] = 'Sobreposição da lição atualizada';
$string['eventpagecreated'] = 'Página criada';
$string['eventpagedeleted'] = 'Página excluída';
$string['eventpagemoved'] = 'Página movida';
$string['eventpageupdated'] = 'Página atualizada';
$string['eventquestionanswered'] = 'Questão respondida';
$string['eventquestionviewed'] = 'Questão visualizada';
$string['false'] = 'Falso';
$string['fileformat'] = 'Formato do documento';
$string['finalwrong'] = 'Não suficiente.';
$string['finish'] = 'Finalizado';
$string['firstanswershould'] = 'A primeira resposta deve ter como destinação a página correta';
$string['firstwrong'] = 'Você respondeu incorretamente. Você gostaria de tentar novamente a questão? (Se você responder a pergunta corretamente, sua pontuação final não será alterada.)';
$string['flowcontrol'] = 'Controle de fluxo';
$string['fractionsaddwrong'] = 'As soma das notas positivas escolhidas não totaliza 100%
<br />A soma é {$a}%
<br />Quer retornar e corrigir esta questão?';
$string['fractionsnomax'] = 'Uma das respostas deve ser 100% para que seja
<br />possível obter a nota total nesta pergunta.
<br />Quer retornar e corrigir esta questão?';
$string['full'] = 'Expandido';
$string['general'] = 'Geral';
$string['gotoendoflesson'] = 'Ir para o final da lição';
$string['grade'] = 'Avaliação';
$string['gradebetterthan'] = 'Avaliação melhor que (%)';
$string['gradebetterthanerror'] = 'Tem nota superior a {$a} por cento';
$string['graded'] = 'Avaliado';
$string['gradeessay'] = 'Avaliação de Questões de dissertação  ({$a->notgradedcount} não avaliadas e {$a->notsentcount} não enviadas)';
$string['gradeis'] = 'Resultado: {$a}';
$string['gradeoptions'] = 'Opções de avaliação';
$string['groupoverrides'] = 'Sobreposições de grupo';
$string['groupoverridesdeleted'] = 'Sobreposições de grupo excluídas';
$string['groupsnone'] = 'Não existem grupos neste curso';
$string['handlingofretakes'] = 'Calculando o resultado das tentativas';
$string['handlingofretakes_help'] = '<p>Quando são habilitadas novas tentativas na lição, esta opção permite que
    o professor mostre a nota para a lição, por exemplo, na página de Notas,
    tanto como a <b>média</b>, isto é, média aritmética das notas da primeira
    tentativa e subsequentes, ou como a nota obtida nas <b>melhores</b> tentativas dos estudantes.</p>

<p>Esta opção pode ser mudada a qualquer momento.</p>';
$string['havenotgradedyet'] = 'Ainda não foi avaliado.';
$string['here'] = 'aqui';
$string['highscore'] = 'Pontuação alta';
$string['hightime'] = 'Tempo alto';
$string['importcount'] = 'Importando {$a} questões';
$string['importquestions'] = 'Importar questões';
$string['importquestions_help'] = 'Esta característica habilita a importação de vários formatos de questão através de arquivos de texto.';
$string['inactiveoverridehelp'] = '* Estudante não tem grupo ou papel correto para ver/responder a lição';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo da Lição';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade da Lição.';
$string['indicator:socialbreadth'] = 'Indicador social da Lição';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na amplitude social alcançada pelo estudante em uma atividade Lição.';
$string['insertedpage'] = 'Página inserida';
$string['invalidfile'] = 'Arquivo inválido';
$string['invalidid'] = 'Nenhuma identificação de módulo ou de lição foi informada.';
$string['invalidlessonid'] = 'O ID desta lição está incorreto';
$string['invalidoverrideid'] = 'ID de sobreposição inválido';
$string['invalidpageid'] = 'Identificação de página inválido';
$string['jump'] = 'Destinação';
$string['jumps'] = 'Destinações';
$string['jumps_help'] = '<p>Cada Resposta (para questões) ou Descrição (para páginas de ramificação) tem um link
   Saltar-para. Quando esta opção é escolhida, a resposta para a pergunta
    é mostrada ao aluno. Depois disso o aluno vê a página que aparece no link Saltar-para.
    Esse link pode ser relativo ou absoluto. Links relativos são <b>Esta
    página</b> e <b>Próxima página</b>. <b>Esta página</b> significa que o aluno vê a
    página corrente novamente. <b>Próxima página</b> mostra a página seguinte a esta página na
    ordem lógica das páginas. Um link absoluto para a página é especificado pela escolha do
    <b>título</b> da página.</p>
<p>Note que um link Saltar-para <b>Próxima página</b> (relativo) pode mostrar uma página
   diferente se as páginas forem movidas. Por outro lado, links Saltar-para que usam <b>títulos</b> de páginas sempre mostram a mesma página mesmo que páginas sejam movidas.</p>
<p>Saltos Especiais</p>
<p>Questão não vista dentro de uma Seção</p>
<p>Isto apontará para uma questão não vista (pelo aluno, nesta tentativa) escolhida aleatoriamente
	entre esta tabela de ramificação e o Fim da Lição ou o próximo Fim de Ramificação.</p>

<p>Questão aleatória dentro de uma Seção</p>
<p>Isto apontará para uma questão escolhida aleatoriamente entre a tabela de ramificação corrente e
	o Fim da Lição ou o próximo Fim da Ramificação. Se o aluno já viu a
	questão e as tentativas são maiores que 1, ele terá outra chance de ganhar
	os pontos para esta questão. Se as tentativas forem fixadas em 1, a questão será pulada
	e outra questão aleatória será mostrada.</p>

<p>Painel de Navegação Aleatória</p>
<p>Isto pulará para uma Painel de Navegação aleatória entre o Painel de Navegação corrente e o Fim
	da Lição ou o próximo Fim da Seção.</p>';
$string['jumpsto'] = 'Destinações para <em>{$a}</em>';
$string['leftduringtimed'] = 'Você interrompeu uma lição com tempo de duração definido.<br />Por favor clique em Continuar para recomeçar a lição.';
$string['leftduringtimednoretake'] = 'Você interrompeu uma lição com tempo de duração definido.<br />Não será possível continuar ou recomeçar.';
$string['leftduringtimedsession'] = 'Você abandonou uma lição com tempo limite.';
$string['lesson:addinstance'] = 'Adicionar nova lição';
$string['lessonclosed'] = 'Esta lição foi fechada em {$a}.';
$string['lessoncloses'] = 'A lição termina';
$string['lessoncloseson'] = 'Lição termina em {$a}';
$string['lesson:edit'] = 'Editar uma lição';
$string['lessoneventcloses'] = 'Término de {$a}';
$string['lessoneventopens'] = 'Início de {$a}';
$string['lessonformating'] = 'Formatação da lição';
$string['lesson:grade'] = 'Avaliar questões dissertativas da lição';
$string['lesson:manage'] = 'Gerenciar uma lição';
$string['lesson:manageoverrides'] = 'Gerenciar sobreposições da lição';
$string['lessonmenu'] = 'Menu da lição';
$string['lessonname'] = 'Lição: {$a}';
$string['lessonnotready'] = 'Esta lição ainda não pode ser acessada. Contate o seu {$a}.';
$string['lessonnotready2'] = 'Esta lição não está pronta para ser utilizada.';
$string['lessonopen'] = 'Esta lição será acessível a partir de {$a}.';
$string['lessonopens'] = 'A lição inicia';
$string['lessonpagelinkingbroken'] = 'A página inicial não foi encontrada. Os links entre as páginas da lição podem estar com problemas. Contate um administrador.';
$string['lessonstats'] = 'Estatísticas da Lição';
$string['lesson:view'] = 'Ver atividade lição';
$string['lesson:viewreports'] = 'Exibir relatórios de aula';
$string['linkedmedia'] = 'Arquivo multimídia vinculado';
$string['loginfail'] = 'Erro de login, por favor tente novamente...';
$string['lowscore'] = 'Pontuação baixa';
$string['lowtime'] = 'Tempo breve';
$string['manualgrading'] = 'Avaliar dissertações';
$string['matchesanswer'] = 'Corresponde à resposta';
$string['matching'] = 'Associando';
$string['matchingpair'] = 'Associando par {$a}';
$string['maxgrade'] = 'Avaliação máxima';
$string['maxgrade_help'] = '<p>Este valor determina a nota máxima que pode ser obtida na Lição.
    O intervalo é de 0 a 100%. Este valor pode ser mudado a qualquer momento durante a
lição. Qualquer mudança tem um efeito imediato na página de Notas e nas
notas mostradas aos estudantes em várias listas. Se a nota for fixada em 0
a Lição não aparece em nenhum dos relatórios de Notas.</p>';
$string['maximumnumberofanswersbranches'] = 'Número máximo de respostas/seções';
$string['maximumnumberofanswersbranches_help'] = '<p>Este valor determina o número máximo de respostas que o professor pode usar.
    O valor padrão é 4. Por exemplo, se a lição usar sempre questões VERDADEIRO ou FALSO,
    é recomendável que este valor seja 2.</p>

<p>Este parâmetro também define o número máximo de seções que pode ser usado em
    uma Painel de Navegação</p>

<p>É seguro mudar o valor deste parâmetro em uma lição que já tem conteúdo.
    Na realidade, se você quiser acrescentar uma questão com muitas alternativas ou uma
    Painel de Navegação longa, será necessário mudar este parâmetro. Depois que a
    questão ou Painel de Navegação pouco comum tiver sido acrescentada, este parâmetro
    pode ser reduzido para valores mais comuns.</p>';
$string['maximumnumberofattempts'] = 'Número máximo de tentativas';
$string['maximumnumberofattempts_help'] = 'Esta configuração especifica o número máximo de tentativas permitidas para cada questão. Se for respondida repetidamente de forma incorreta, quando o máximo for atingido, a próxima página da lição será mostrada.';
$string['maximumnumberofattemptsreached'] = 'Número máximo de tentativas atingido - indo para a próxima página';
$string['mediaclose'] = 'Mostrar botão finalizar';
$string['mediafile'] = 'Mídia vinculada';
$string['mediafile_help'] = 'Um arquivo multimídia pode ser enviado para uso na lição. Um link \'Clique aqui para ver o arquivo multimídia desta lição\' será exibido em um bloco chamado \'Arquivo multimídia vinculado\' em cada página da lição.';
$string['mediafilepopup'] = 'Clique aqui para ver o arquivo multimídia desta lição';
$string['mediaheight'] = 'Altura da janela <em>popup</em>:';
$string['mediawidth'] = 'Largura da janela <em>popup</em>:';
$string['messageprovider:graded_essay'] = 'Notificação da avaliação de dissertação';
$string['minimumnumberofquestions'] = 'Número mínimo  de questões';
$string['minimumnumberofquestions_help'] = 'Esta configuração especifica o número mínimo de questões que serão utilizadas para calcular uma nota para a atividade.';
$string['missingname'] = 'Inserir apelido';
$string['modattempts'] = 'Permitir revisão pelo estudante';
$string['modattempts_help'] = '<p>Isto permitirá que o estudante volte atrás na lição, caso queira mudar suas respostas.</p>';
$string['modattemptsnoteacher'] = 'A revisão dos estudantes só é ativa para eles.';
$string['modulename'] = 'Lição';
$string['modulename_help'] = 'Uma lição publica o conteúdo em um modo interessante e flexível. Ela consiste em um certo número de páginas. Cada página, normalmente, termina com uma questão e uma série de possíveis respostas. Dependendo da resposta escolhida pelo estudante, ou ele passa para a próxima página ou é levado de volta para uma página anterior. A navegação através da lição pode ser direta ou complexa, dependendo em grande parte da estrutura do material que está sendo apresentado.';
$string['modulename_link'] = 'mod/lesson/view';
$string['modulenameplural'] = 'Lições';
$string['move'] = 'Mais páginas';
$string['movedpage'] = 'Página transferida';
$string['movepagehere'] = 'Mover página para cá';
$string['movepagenamed'] = 'Mover página: {$a}';
$string['moving'] = 'Movendo página: {$a}';
$string['multianswer'] = 'Multi-Respostas';
$string['multianswer_help'] = '<p>Alguns tipos de questão têm uma opção que pode ser ativada clicando na caixa. Os tipos e o significado das opções são detalhados a seguir:</p>

<ol>
<li><p><b>Múltipla escolha</b> Há uma variante das questões de múltipla escolha chamadas questões de    <b>&quot;Múltipla escolha Multi-resposta&quot;</b>. Se essa opção for escolhida, então o estudante deve marcar todas as respostas corretas em um conjunto de respostas. A questão pode ou não dizer <i>quantas</i> respostas corretas existem. Por exemplo, &quot;Quais desses foram presidentes dos Estados Unidos?&quot; não diz, mas "Selecione dois presidentes dos Estados Unidos na lista a seguir." o faz. O número de respostas corretas pode variar de <b>um</b> até o número de alternativas. (Uma questão de Resposta Múltipla com uma resposta correta <b>é</b> diferente de uma questão Múltipla Escolha, já que a anterior permite que o estudante escolha mais de uma resposta.)</p></li>

<li>
  <p><b>Resposta Curta</b> Há dois tipos diferentes de sistemas de comparação para o tipo de questão de Resposta Curta: o mais simples é utilizado por padrão;
      o sistema de &quot;Expressões Regulares&quot; é utilizado caso a opção &quot;Usar Expressões Regulares&quot; estiver marcada. Para mais informações, leia o arquivo de ajuda dos tipos de questões da Lição.</p>
</li>
</ol>
<p>Os outros tipos de questão não utilizam opções de questão.</p>';
$string['multichoice'] = 'Múltipla escolha';
$string['multipleanswer'] = 'Resposta múltipla';
$string['nameapproved'] = 'Nome aprovado';
$string['namereject'] = 'Sinto muito, o seu nome não foi aceito pelo filtro.<br />Por favor use um outro nome.';
$string['new'] = 'novo';
$string['nextpage'] = 'Próxima página';
$string['noanswer'] = 'Uma ou mais questões estão sem resposta. Por favor, volte e envie uma resposta.';
$string['noattemptrecordsfound'] = 'Não foram encontrados registros de tentativas para esta lição: não foi definido nenhum resultado';
$string['nobranchtablefound'] = 'Nenhum Painel de Navegação encontrado';
$string['noclose'] = 'Nenhuma data de encerramento';
$string['nocommentyet'] = 'Nenhum comentário ainda.';
$string['nocoursemods'] = 'Nenhuma atividade encontrada';
$string['nocredit'] = 'Nenhum crédito';
$string['nodeadline'] = 'Nenhum Limite de tempo';
$string['noessayquestionsfound'] = 'Nenhuma tarefa de dissertação encontrada nesta lição.';
$string['nohighscores'] = 'Nenhuma pontuação alta';
$string['nolessonattempts'] = 'Nenhuma tentativa feita nesta lição.';
$string['nolessonattemptsgroup'] = 'Não há tentativas feitas por membros do grupo {$a} nesta lição.';
$string['none'] = 'Nenhum';
$string['nooneansweredcorrectly'] = 'Ninguém respondeu corretamente.';
$string['nooneansweredthisquestion'] = 'Ninguém respondeu esta questão.';
$string['noonecheckedthis'] = 'Ninguém controlou isto.';
$string['nooneenteredthis'] = 'Ninguém inseriu isto.';
$string['noonehasanswered'] = 'Ninguém respondeu ainda as questões de dissertação.';
$string['noonehasansweredgroup'] = 'Ninguém de {$a} ainda respondeu uma questão de dissertação.';
$string['noopen'] = 'Nenhuma data de abertura';
$string['nooverridedata'] = 'Você deve sobrepor pelo menos uma das configurações da lição.';
$string['noretake'] = 'Não é permitido refazer esta lição.';
$string['normal'] = 'Normal - seguir percurso da lição';
$string['notcompleted'] = 'Não concluída';
$string['notdefined'] = 'Não definido';
$string['notenoughsubquestions'] = 'Não foi definido um número suficiente de questões subordinadas!';
$string['notenoughtimespent'] = 'Você completou esta lição em {$a->timespent}, que é menos do que o tempo requerido de {$a->timerequired}. Você deve tentar fazer a lição novamente.';
$string['notgraded'] = 'Não há notas';
$string['notitle'] = 'Nenhum título';
$string['notyetcompleted'] = 'Lição foi iniciada, mas ainda não foi concluída';
$string['numberofcorrectanswers'] = 'Número de respostas corretas: {$a}';
$string['numberofcorrectanswersheader'] = 'Número de respostas corretas';
$string['numberofcorrectmatches'] = 'Número de associações corretas: {$a}';
$string['numberofpagestoshow'] = 'Número  de páginas (fichas) a serem mostradas';
$string['numberofpagestoshow_help'] = '<p>Este parâmetro somente é usado em lições do tipo Fichas "Resumo" (Flash cards). O valor padrão é zero, o que significa que todas as Páginas/Fichas são mostradas em uma lição. Fixando o parâmetro com um valor diferente de zero mostra esse número de páginas. Após esse número de Páginas/Fichas terem sido mostradas, o fim da lição é alcançado e a nota é mostrada ao estudante.</p>

<p>Se este parâmetro for fixado em um valor maior que o número de páginas na lição, então o final da lição é atingido quando todas as páginas tiverem sido mostradas.</p>';
$string['numberofpagesviewed'] = 'Número de páginas vistas: {$a}';
$string['numberofpagesviewedheader'] = 'Número de questões respondidas';
$string['numberofpagesviewednotice'] = 'Número de questões respondidas {$a->nquestions}; (Você deve responder pelo menos: {$a->minquestions})';
$string['numerical'] = 'Numérica';
$string['offlinedatamessage'] = 'Nesta tentativa você utilizou um dispositivo móvel. Os dados foram salvos pela última vez neste site {$a} atrás. Por favor, verifique se você não tem nenhum trabalho pendente.';
$string['ongoing'] = 'Visualizar pontuação corrente';
$string['ongoingcustom'] = 'Esta lição corresponde a {$a->score} pontos. Você recebeu {$a->score} ponto(s) de um total de {$a->currenthigh} pontos até agora.';
$string['ongoing_help'] = '<p>Com isto ativado, cada página mostrará os pontos acumulados até este momento pelo estudante,
    em relação ao total possível ao final. Por exemplo: um estudante respondeu quatro questões de
    5 pontos e respondeu uma incorretamente. Na Pontuação Atual aparecerá que ele ganhou
    até o momento 15/20 pontos.</p>';
$string['ongoingnormal'] = 'Você respondeu corretamente {$a->correct} questões de um total de {$a->viewed} .';
$string['onpostperpage'] = 'Apenas uma mensagem por avaliação';
$string['openafterclose'] = 'Você definiu uma data inicial posterior a data final';
$string['options'] = 'Opções';
$string['or'] = 'OU';
$string['ordered'] = 'Ordenada';
$string['other'] = 'Outro';
$string['outof'] = 'de {$a}';
$string['override'] = 'Sobrepor';
$string['overridedeletegroupsure'] = 'Você tem certeza de que deseja excluir a sobreposição para o grupo {$a}?';
$string['overridedeleteusersure'] = 'Você tem certeza de que deseja excluir a sobreposição para o usuário {$a}?';
$string['overridegroup'] = 'Sobrepor grupo';
$string['overridegroupeventname'] = '{$a->lesson} - {$a->group}';
$string['overrides'] = 'Sobreposições';
$string['overrideuser'] = 'Sobrepor usuário';
$string['overrideusereventname'] = '{$a->lesson} - Sobrepor';
$string['overview'] = 'Visão geral';
$string['overview_help'] = 'Uma lição é feita de um número de páginas e opcionalmente páginas de conteúdo. Uma página contém algum conteúdo e normalmente termina com uma questão. Associado com cada resposta de questão existe um salto. O salto pode ser relativo, como por exemplo para próxima página, ou absoluto, especificando qualquer uma das páginas na lição. Uma página de conteúdo é uma página contendo um conjunto de links para outras páginas na lição, como por exemplo o índice de conteúdo.';
$string['page'] = 'Página: {$a}';
$string['pageanswers'] = 'Respostas da página';
$string['pagecontents'] = 'Conteúdo da página';
$string['page-mod-lesson-edit'] = 'Editar página da Lição';
$string['page-mod-lesson-view'] = 'Visualizar ou pré-visualizar página da lição';
$string['page-mod-lesson-x'] = 'Qualquer página da lição';
$string['pageresponses'] = 'Respostas da página';
$string['pages'] = 'Páginas';
$string['pagetitle'] = 'Título da página';
$string['password'] = 'Senha';
$string['passwordprotectedlesson'] = '{$a} é uma atividade protegida por senha.';
$string['pleasecheckoneanswer'] = 'Salvar a resposta selecionada';
$string['pleasecheckoneormoreanswers'] = 'Salvar as respostas selecionadas';
$string['pleaseenteryouranswerinthebox'] = 'Por favor insira sua resposta na caixa';
$string['pleasematchtheabovepairs'] = 'Salvar os pares associados acima';
$string['pluginadministration'] = 'Administração de Lição';
$string['pluginname'] = 'Lição';
$string['pointsearned'] = 'Pontos recebidos';
$string['postprocesserror'] = 'Ocorreu um erro durante o processamento da mensagem!';
$string['postsuccess'] = 'Envio bem sucedido';
$string['practice'] = 'Lição para praticar';
$string['practice_help'] = 'Uma lição prática não aparece no livro de notas.';
$string['preprocesserror'] = 'Ocorreu um erro durante o pré-processamento!';
$string['prerequisiteisobsolete'] = 'A opção de pré-requisito da lição esta para ser removida. Por favor, use as restrições de acesso.';
$string['prerequisitelesson'] = 'Lição de pré-requisito';
$string['preview'] = 'Visualizar';
$string['previewlesson'] = 'Visualizar {$a}';
$string['previewpagenamed'] = 'Pré-visualizar página: {$a}';
$string['previouspage'] = 'Página anterior';
$string['processerror'] = 'Ocorreu um erro durante o processamento!';
$string['progressbar'] = 'Barra de progresso';
$string['progressbar_help'] = 'Se habilitado, uma barra é mostrada no fim das páginas da lição mostrando aproximadamente a porcentagem da conclusão.';
$string['progressbarteacherwarning'] = 'Barra de progresso não é mostrada para {$a}';
$string['progressbarteacherwarning2'] = 'Você não verá a barra de progresso porque você pode editar esta lição.';
$string['progresscompleted'] = 'Você completou {$a}% da lição';
$string['qtype'] = 'Tipo de página';
$string['question'] = 'Questão';
$string['questionoption'] = 'Modalidade opcional';
$string['questiontype'] = 'Tipo de questão';
$string['randombranch'] = 'Página de conteúdo aleatório';
$string['randompageinbranch'] = 'Questão aleatória dentro de uma página de conteúdo';
$string['rank'] = 'Classificação';
$string['rawgrade'] = 'Nota não ponderada';
$string['receivedcredit'] = 'Créditos recebidos';
$string['redisplaypage'] = 'Mostrar página de novo';
$string['removeallgroupoverrides'] = 'Excluir todas as sobreposições de grupo';
$string['removealluseroverrides'] = 'Excluir todas as sobreposições de usuário';
$string['report'] = 'Relatório';
$string['reports'] = 'Relatórios';
$string['response'] = 'Retorno';
$string['retakesallowed'] = 'Permite-se retomar a lição.';
$string['retakesallowed_help'] = '<p>Esta configuração determina se os estudantes poderão fazer a lição mais de uma vez ou sómente uma vez. O professor pode decidir que a lição contém material que o estudante deve aprender inteiramente. Neste caso repetir a lição deve ser permitido. Entretanto, se o material é usado mais como um exame então os estudantes não podem ter permissão para repetir a lição</p>

<p>Quando os estudantes tem permissão para refazer a lição, as <b>notas</b> mostradas na página de Notas ou são sua <b>média</b> das repetições ou sua <b>melhor</b> nota para a lição. O parametro seguinte determina qual destas duas alternativas de avaliação é usada.</p>

<p>Note que a <b>A Análise da Questão</b> sempre usa as resposta da primeira tentativa da lição, tentativas seguintes são ignoradas.</p>

<p>O valor padrão desta opção é <b>Não</b>, significando que estudantes não tem permissão para refazer a lição. É esperado que sómente em circunstancias excepcionais esta opção seja configurada para o valor <b>Sim</b>.</p>';
$string['returnto'] = 'Voltar para {$a}';
$string['returntocourse'] = 'Voltar ao curso';
$string['reverttodefaults'] = 'Reverter para os padrões da lição';
$string['review'] = 'Revisão';
$string['reviewlesson'] = 'Rever Lição';
$string['reviewquestionback'] = 'Sim, eu gostaria de tentar novamente';
$string['reviewquestioncontinue'] = 'Não, quero continuar com a próxima questão';
$string['sanitycheckfailed'] = 'O controle dos dados falhou: Esta tentativa foi cancelada';
$string['save'] = 'Salvar';
$string['savechanges'] = 'Salvar alterações';
$string['savechangesandeol'] = 'Salvar todas as mudanças e ir para o fim da lição.';
$string['saveoverrideandstay'] = 'Salvar e entrar com outra sobreposição';
$string['savepage'] = 'Salvar página';
$string['score'] = 'Pontuação';
$string['score_help'] = 'Pontuação só é utilizada quando a pontuação personalizada está ativada. A cada resposta pode então ser dada uma pontuação numérica (positiva ou negativa).';
$string['scores'] = 'Pontuações';
$string['search:activity'] = 'Lição - informações da atividade';
$string['secondpluswrong'] = 'Não é exato. Você quer tentar novamente?';
$string['selectaqtype'] = 'Escolha um tipo de questões';
$string['sent'] = 'Enviar';
$string['shortanswer'] = 'Resposta curta';
$string['showanunansweredpage'] = 'Mostrar uma página ainda não respondida';
$string['showanunseenpage'] = 'Mostrar uma página ainda não visitada';
$string['singleanswer'] = 'Resposta única';
$string['skip'] = 'Avançar navegação';
$string['slideshow'] = 'Apresentação de Slides';
$string['slideshowbgcolor'] = 'Cor do fundo da página da Apresentação de Slides';
$string['slideshowheight'] = 'Altura da Apresentação de Slides';
$string['slideshow_help'] = '<p>Isso permite a exibição das lições como uma apresentação de slide, com largura e altura fixas e cor do plano de fundo alterável. Uma barra de rolagem em CSS será mostrada se o conteúdo do slide exceder o tamanho da página. Quando aparecer questões, a tela sairá do modo de slides, somente páginas (tabelas ramificadas) serão mostradas em um slide por padrão. Botões de Ir e Voltar, já traduzidos no idioma padrão, serão mostrados nas extremas direita e esquerda se essa opção for ativada. Outros botões serão centralizados abaixo do slide.</p>';
$string['slideshowwidth'] = 'Largura da Apresentação de Slides';
$string['startlesson'] = 'Iniciar Lição';
$string['studentattemptlesson'] = 'número da tentativa {$a->attempt} de {$a->lastname}, {$a->firstname}';
$string['studentname'] = '{$a} Nome';
$string['studentoneminwarning'] = 'Atenção: Você tem menos de 1 minuto para acabar a lição.';
$string['studentoutoftimeforreview'] = 'Atenção: você ficou sem tempo para revisar esta lição';
$string['studentresponse'] = 'resposta de {$a}';
$string['submit'] = 'Enviar';
$string['submitname'] = 'Enviar nome';
$string['teacherjumpwarning'] = 'Um destino {$a->cluster} ou um destino {$a->unseen} está sendo usado nesta lição. O destino Próxima Página substituirá o anterior. Faça o login como estudante para testar estes destinos.';
$string['teacherongoingwarning'] = 'Para testar a pontuação corrente é necessário fazer o login como estudante.';
$string['teachertimerwarning'] = 'O temporizador funciona somente para estudantes. Teste o temporizador acessando como estudante.';
$string['thatsthecorrectanswer'] = 'Esta é a resposta correta';
$string['thatsthewronganswer'] = 'Esta é a resposta errada';
$string['thefollowingpagesjumptothispage'] = 'As seguintes páginas tem como destino esta página';
$string['thispage'] = 'Esta página';
$string['timeisup'] = 'O tempo expirou';
$string['timelimit'] = 'Limite de tempo';
$string['timelimit_help'] = 'Se ativado, um aviso sobre o limite de tempo é mostrado no início da lição e o cronômetro regressivo é exibido. Respostas dadas após o prazo não são consideradas.';
$string['timelimitwarning'] = 'Você tem {$a} para concluir a lição.';
$string['timeremaining'] = 'Tempo restante';
$string['timespenterror'] = 'Dedica pelo menos {$a}  a esta lição';
$string['timespentminutes'] = 'Tempo dedicado (em minutos)';
$string['timetaken'] = 'Tempo utilizado';
$string['totalpagesviewedheader'] = 'Número de páginas vizualizadas';
$string['true'] = 'Verdadeiro';
$string['truefalse'] = 'Verdadeiro/Falso';
$string['unabledtosavefile'] = 'O arquivo que você fez upload não pode ser salvo';
$string['unknownqtypesnotimported'] = '{$a} questões com tipos de questões não suportadas não foram importadas.';
$string['unseenpageinbranch'] = 'Questão não visualizada dentro de uma página de conteúdo';
$string['unsupportedqtype'] = 'Tipo de questão incompatível  ({$a})!';
$string['updatedpage'] = 'Página atualizada';
$string['updatefailed'] = 'Erro na atualização';
$string['updatepagenamed'] = 'Atualizar página: {$a}';
$string['usemaximum'] = 'Usar melhor resultado entre as tentativas';
$string['usemean'] = 'Usar média das tentativas';
$string['usepassword'] = 'Lição protegida por senha';
$string['usepassword_help'] = '<p>Isto bloqueará o acesso dos estudantes à lição a menos que digitem a senha..</p>';
$string['useroverrides'] = 'Sobreposições de usuários';
$string['useroverridesdeleted'] = 'Sobreposições de usuário excluídas';
$string['usersnone'] = 'Nenhum estudante tem acesso a esta lição';
$string['viewgrades'] = 'Ver notas';
$string['viewreports'] = 'Ver {$a->attempts} {$a->student} tentativas completas';
$string['viewreports2'] = 'Ver {$a} tentativas completas';
$string['warning'] = 'Aviso';
$string['welldone'] = 'Muito bem!';
$string['whatdofirst'] = 'O que você gostaria de fazer primeiro?';
$string['wronganswerjump'] = 'Destino da resposta errada';
$string['wronganswerscore'] = 'Pontuação da resposta errada';
$string['wrongresponse'] = 'Resposta errada';
$string['xattempts'] = '{$a} tentativas';
$string['youhaveseen'] = 'Você já visitou algumas páginas desta lição.<br />Você quer iniciar a partir da última página visitada?';
$string['youranswer'] = 'A sua resposta';
$string['yourcurrentgradeis'] = 'A sua avaliação atual é {$a}';
$string['yourcurrentgradeisoutof'] = 'A sua nota atual é {$a->grade} sobre {$a->total}';
$string['youshouldview'] = 'Você deve responder pelo menos: {$a}';
