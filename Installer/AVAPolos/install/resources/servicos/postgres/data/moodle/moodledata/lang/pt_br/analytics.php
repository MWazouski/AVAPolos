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
 * Strings for component 'analytics', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analisador {$a->analysableid} não utilizado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analisador {$a->analysableid} não é valido para este destino: {$a->result}';
$string['analysisinprogress'] = 'Ainda sendo analisado por uma execução anterior';
$string['analytics'] = 'Analytics';
$string['analyticslogstore'] = 'Logs utilizados para análise';
$string['analyticslogstore_help'] = 'O armazenamento de log que será utilizado pela API do analytics para registrar a atividade do usuário';
$string['analyticssettings'] = 'Configurações do analytics';
$string['coursetoolong'] = 'O curso é muito longo';
$string['disabledmodel'] = 'Modelo desabilitado';
$string['enabledtimesplittings'] = 'Métodos de divisão de tempo';
$string['erroralreadypredict'] = 'O arquivo {$a} já foi utilizado para gerar previsões.';
$string['errorcannotreaddataset'] = 'Arquivo de Dataset {$a} não pode ser lido';
$string['errorcannotwritedataset'] = 'Arquivo de Dataset {$a} não pode ser escrito';
$string['errorendbeforestart'] = 'A data final ({$a}) é anterior a data de início do curso.';
$string['errorinvalidindicator'] = 'Indicador {$a} inválido';
$string['errorinvalidtimesplitting'] = 'Divisão de tempo inválida; por favor, assegure-se de ter adicionado o nome da classe totalmente qualificado';
$string['errornoindicators'] = 'Este modelo não possui indicadores.';
$string['errornopredictresults'] = 'Nenhum resultado retornado do processador de previsões. Verifique o conteúdo do diretório de saída para mais informações.';
$string['errornoroles'] = 'Papéis de estudante ou professor não foram definidos. Defina-os na página de configurações do analytics.';
$string['errornotarget'] = 'Este modelo não possui nenhum alvo.';
$string['errornotimesplittings'] = 'Este modelo não tem nenhum método de divisão do tempo.';
$string['errorpredictioncontextnotavailable'] = 'Esse contexto de previsão não está mais disponível.';
$string['errorpredictionformat'] = 'Formato de cálculos de previsão incorreto';
$string['errorpredictionnotfound'] = 'Previsão não encontrada';
$string['errorpredictionsprocessor'] = 'Erro no processador de previsões: {$a}';
$string['errorpredictwrongformat'] = 'O retorno do processador de previsões não pode ser decodificado: "{$a}"';
$string['errorprocessornotready'] = 'O processador de previões selecionado não está pronto: "{$a}"';
$string['errorsamplenotavailable'] = 'A amostra prevista não está mais disponível';
$string['errorunexistingmodel'] = 'Modelo não existente {$a}';
$string['errorunexistingtimesplitting'] = 'O método de divisão de tempo selecionado não está disponível.';
$string['errorunknownaction'] = 'Ação desconhecida';
$string['eventinsightsviewed'] = 'Insights vistos';
$string['eventpredictionactionstarted'] = 'Processo de previsão iniciado';
$string['fixedack'] = 'Reconhecido';
$string['insightinfomessage'] = 'O sistema gerou alguns insights para você: {$a}';
$string['insightinfomessagehtml'] = 'O sistema gerou alguns insights para você: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Novo insight para "{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Não pode ser analisado usando o método de divisão de tempo {$a}.';
$string['invalidtimesplitting'] = 'O modelo com ID {$a} precisa de um método de divisão de tempo antes de ser utilizado para treinamento.';
$string['modeloutputdir'] = 'Diretório de saída dos modelos';
$string['modeloutputdirinfo'] = 'Diretório onde os processadores de previsão armazenam todas as informações de avaliação. Útil para depuração e pesquisa.';
$string['modeltimelimit'] = 'Limite de tempo de análise por modelo';
$string['modeltimelimitinfo'] = 'Esta configuração limita o tempo que cada modelo gasta analisando o conteúdo do site.';
$string['nocourses'] = 'Sem cursos para analisar';
$string['nodata'] = 'Sem dados para analisar';
$string['noevaluationbasedassumptions'] = 'Modelos baseados em premissas não podem ser avaliados.';
$string['noinsights'] = 'Sem insights reportados';
$string['noinsightsmodel'] = 'Este modelo não gera insights';
$string['nonewdata'] = 'Nenhum novo dado disponível';
$string['nonewranges'] = 'Nenhuma nova previsão ainda';
$string['nonewtimeranges'] = 'Nenhum intervalo de tempo novo; nada para prever.';
$string['nopredictionsyet'] = 'Nenhuma previsão disponível ainda';
$string['noranges'] = 'Nenhuma previsão ainda';
$string['notrainingbasedassumptions'] = 'Modelos baseados em premissas não precisam de treinamento';
$string['notuseful'] = 'Inútil';
$string['novaliddata'] = 'Não há dados válidos disponíveis';
$string['novalidsamples'] = 'Nenhum exemplo válido disponível';
$string['onlycli'] = 'Execução dos processos do analytics somente por linha de comando';
$string['onlycliinfo'] = 'Processos analíticos, como avaliar modelos, treinamento de algoritmos de aprendizado de máquinas ou obtenção de previsões podem levar algum tempo, eles serão executados como tarefas cron e podem ser forçados via linha de comando. Desabilite esta configuração se você que que os gerentes do site possam executar esses processos manualmente pela interface web';
$string['predictionsprocessor'] = 'Processador de previsões';
$string['predictionsprocessor_help'] = 'Um processador de previsões é a aprendizagem de máquina no servidor que processa os conjuntos de dados gerados calculando indicadores e metas dos modelos. Todos os algoritmos e previsões treinados serão excluídos se você mudar para outro processador de previsões.';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'A classe da calculadora do indicador';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'O ID da amostra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'A tabela de origem da amostra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hora de início do cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quando a previsão foi feita';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'O valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Ações de previsão';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'O nome da ação';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'O ID de previsão';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Quando a ação de previsão foi executada';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'O usuário que fez a ação';
$string['privacy:metadata:analytics:predictions'] = 'Previsões';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos de indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID do modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'A previsão';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'A pontuação de previsão';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'O índice do método de divisão de tempo';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'O ID da amostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quando a previsão foi feita';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Término do cálculo';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Início do cálculo';
$string['processingsitecontents'] = 'Processando o conteúdo do site';
$string['successfullyanalysed'] = 'Analisado com sucesso';
$string['timesplittingmethod'] = 'Método de divisão do tempo';
$string['timesplittingmethod_help'] = 'O método de divisão do tempo divide a duração do curso em partes; O mecanismo de previsão será executado no final dessas partes. Recomenda-se que você habilite apenas os métodos de divisão de tempo que você está interessado em utilizar. O processo de avaliação irá se repetir por todos os métodos habilitados, sendo assim, quanto mais métodos estiverem habilitados, mais lento será o processo de avaliação.';
$string['viewprediction'] = 'Ver detalhes da previsão';
