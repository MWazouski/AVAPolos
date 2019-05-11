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
 * Strings for component 'realtimequiz', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   realtimequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanswers'] = 'Adicionar espaço para mais 3 respostas';
$string['addingquestion'] = 'Adicionar questão';
$string['addquestion'] = 'Adicionar questão';
$string['allquestions'] = 'Retornar para os resultados completos';
$string['allsessions'] = 'Todas as sessões';
$string['alreadyanswered'] = 'Você já respondeu esta questão';
$string['answer'] = 'Resposta';
$string['answers'] = 'Respostas';
$string['answersent'] = 'Resposta enviada - aguardando pelo finalização do tempo restante para a questão:';
$string['answertext'] = 'Texto da resposta:';
$string['atleastoneanswer'] = 'Você precisa ao menos uma resposta';
$string['awaittime'] = 'Tempo de espera do AJAX';
$string['awaittimedesc'] = 'Esta configuração define a frequência em segundos para verificar os dados da questão e do resultado pela janela do navegador do estudante. Quando o questionário tem um número elevado de participantes causa lentidão do servidor. Este número deve ser aumentado para reduzir o número de requisições simultâneas de dados. O valor mínimo é 1 segundo.';
$string['awaittimeerror'] = 'O valor não deve ser inferior a 1';
$string['backquiz'] = 'Retornar ao questionário em tempo real';
$string['backresponses'] = 'Retornar aos resultados completos';
$string['badcurrentquestion'] = 'Erro: currentquestion:';
$string['badquizid'] = 'Erro: quizid:';
$string['badresponse'] = 'Resposta inesperado do servidor -';
$string['badsesskey'] = 'Chave de sessão incorreta';
$string['checkdelete'] = 'Você tem certeza que deseja deletar esta questão?';
$string['choosecorrect'] = 'Marcar como resposta correta';
$string['choosesession'] = 'Escolher uma sessão para exibir:';
$string['classresult'] = 'Resultados da Classe:';
$string['classresultcorrect'] = 'correto';
$string['clicknext'] = 'Clicar \'Próximo\' quando todos estiverem prontos';
$string['correct'] = 'Resposta correta?';
$string['correctnotblank'] = 'Resposta correta não pode ser vazia';
$string['cross'] = 'Resposta errada';
$string['deletequestion'] = 'Deletar questão';
$string['displaynext'] = 'Exibir próxima questão:';
$string['edit'] = 'Editar questionário';
$string['editquestions'] = 'Editar as questões';
$string['editquestiontime'] = 'Tempo para a questão time (0 for default)';
$string['edittingquestion'] = 'Editando a questão';
$string['errorquestiontext'] = 'Erro: você não completou as questões';
$string['eventeditpageviewed'] = 'Página de edição do teste visualizada';
$string['eventresponsesviewed'] = 'Página de respostas do teste visualizada';
$string['finalresults'] = 'Resultados finais';
$string['hideusers'] = 'Esconder usuários';
$string['httperror'] = 'Houve um problema com a requisição - status:';
$string['httprequestfail'] = 'Desistindo :( erro técnico não foi possível criar uma instância XMLHTTP';
$string['incorrectstatus'] = 'Questionário tem status incorreto: \'';
$string['invalidanswer'] = 'Número de resposta inválida';
$string['joininstruct'] = 'Aguarde até que seu professor indique o início antes de clicar aqui';
$string['joinquiz'] = 'Acessar questionário';
$string['joinquizasstudent'] = 'Juntar-se ao teste como aluno';
$string['modulename'] = 'Questionário em tempo real';
$string['modulenameplural'] = 'Questionários em tempo real';
$string['next'] = 'Próximo >>';
$string['nextquestion'] = 'Próximo questionário';
$string['noanswers'] = 'Não foram atribuídas respostas';
$string['nocorrect'] = 'Não há resposta \'correta\'';
$string['noquestion'] = 'Erro na resposta - não há dados nesta questão:';
$string['nosessions'] = 'Este questionário em tempo real não teve ainda tentativas de resposta';
$string['notallowedattempt'] = 'Você não tem permissão para tentar este questionário';
$string['notauthorised'] = 'Você não está autorizado para controlar este questionário';
$string['onecorrect'] = 'Erro: deve haver exatamente apenas uma resposta correta';
$string['pluginadministration'] = 'Administração do questionário em tempo real';
$string['pluginname'] = 'Questionário em tempo real';
$string['prevquestion'] = 'Questão anterior';
$string['question'] = 'Questão';
$string['questiondelete'] = 'Delete question {$a}';
$string['questionfinished'] = 'Question finished, waiting for results';
$string['questionimage'] = 'Imagem (Opcional):';
$string['questionmovedown'] = 'Mover questões {$a} abaixo';
$string['questionmoveup'] = 'Mover questões {$a} acima';
$string['questions'] = 'Questões';
$string['questionslist'] = 'Questões neste questionário em tempo real:';
$string['questiontext'] = 'Texto da Questão:';
$string['questiontime'] = 'Tempo padrão para as questões';
$string['questiontime_help'] = 'O tempo padrão (em segundos) para exibir cada questão.<br />
Isto pode ser sobreescrito para questões individuais.';
$string['quizfinished'] = 'Não há mais questões';
$string['quiznotrunning'] = 'Questionário não iniciado no presente momento - espere até que seu professor inicie';
$string['realtimequiz:addinstance'] = 'Adicionar um novo questionário em tempo real';
$string['realtimequiz:attempt'] = 'Iniciar tentativa para o questionário';
$string['realtimequiz:control'] = 'Iniciar / controlar um questionário';
$string['realtimequiz:editquestions'] = 'Editar as questões para um questionário';
$string['realtimequizintro'] = 'Introdução';
$string['realtimequiz:seeresponses'] = 'Visualizar as respostas para um questionário';
$string['realtimequizsettings'] = 'Configurações do questionário em tempo real';
$string['reconnectquiz'] = 'Entrar novamente no teste';
$string['removeimage'] = 'Remover imagem';
$string['responses'] = 'Visualizar respostas';
$string['resultcorrect'] = 'correto.';
$string['resultoverall'] = 'correto. Total:';
$string['resultthisquestion'] = 'Esta questão:';
$string['saveadd'] = 'Salvar questão e adicionar outra';
$string['scorestable'] = 'Tabela de pontuação';
$string['seeresponses'] = 'Visualizar as respostas para um questionário';
$string['sendinganswer'] = 'enviando resposta';
$string['servererror'] = 'Servidor retornou erro:';
$string['sessions'] = 'Sessões';
$string['showsession'] = 'Exibir';
$string['showusers'] = 'Exibir usuários';
$string['startnewquiz'] = 'Iniciar nova sessão do teste';
$string['startnewquizconfirm'] = 'Tem a certeza absoluta de que pretende sair da sessão de teste atual e iniciar uma nova?';
$string['startquiz'] = 'Iniciar questionário';
$string['submissions'] = 'Envios';
$string['teacherjoinquizinstruct'] = 'Utilize isto se deseja tentar um questionário você mesmo<br />(você também precisa iniciar o questionário em uma janela separada)';
$string['teacherstartinstruct'] = 'Use isto para iniciar um questionário para seus estudantes<br />Utilize a caixa de texto para definir um nome para esta sessão (para auxiliar no momento de verificar os resultados em um momento posterior).';
$string['teacherstartnewinstruct'] = 'Comece uma nova sessão de questionário e abandone a que já está em execução. <br /> Tenha muito cuidado para verificar se a sessão atual ainda não está em uso antes de fazer isso! <br /> Em caso de dúvida, use o primeiro botão para reconectar à sessão atual.';
$string['tick'] = 'Resposta correta';
$string['timeleft'] = 'Tempo restante para a resposta:';
$string['totals'] = 'Tempo total rodado';
$string['tryagain'] = 'Deseja tentar novamente?';
$string['unknownrequest'] = 'Requisição desconhecida: \'';
$string['updatequestion'] = 'Salvar questão';
$string['view'] = 'Visualizar questionário';
$string['waitfirst'] = 'Aguardando pela primeira questão a ser enviada';
$string['waitstudent'] = 'Aguardando pela conexão dos estudantes';
$string['yourresult'] = 'Seus resultados:';
