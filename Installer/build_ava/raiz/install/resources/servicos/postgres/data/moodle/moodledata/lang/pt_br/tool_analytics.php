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
 * Strings for component 'tool_analytics', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['allpredictions'] = 'Todas previsões';
$string['analysingsitedata'] = 'Analisando o site';
$string['analyticmodels'] = 'Modelos de análise';
$string['bettercli'] = 'Avaliar modelos e gerar previsões pode envolver processamento pesado. Recomenda-se executar estas ações a partir da linha de comando.';
$string['cantguessenddate'] = 'Não é possível adivinhar a data final';
$string['cantguessstartdate'] = 'Não é possível adivinhar a data de início';
$string['clearmodelpredictions'] = 'Tem certeza de que deseja limpar todas as previsões "{$a}"?';
$string['clearpredictions'] = 'Limpar previsões';
$string['clienablemodel'] = 'Você pode ativar o modelo selecionando um método de divisão de tempo por seu ID. Observe que você também pode ativá-lo posteriormente usando a interface da Web (\'none\' para sair).';
$string['clievaluationandpredictions'] = 'Uma tarefa agendada itera através de modelos ativados e obtém previsões. A avaliação de modelos por meio da interface da Web está desativada. Você pode permitir que esses processos sejam executados manualmente por meio da interface da Web, desativando a configuração de análise <a href="{$a}"> \'onlycli\' </a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Uma tarefa agendada itera através de modelos ativados e obtém previsões. A avaliação de modelos por meio da interface da Web está desativada. Pode ser ativado por um administrador do site.';
$string['disabled'] = 'Desativado';
$string['editmodel'] = 'Edita o modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo já foi treinado. Observe que alterar seus indicadores ou seu método de divisão de tempo excluirá suas previsões anteriores e começará a gerar novas previsões.';
$string['enabled'] = 'Habilitado';
$string['errorcantenablenotimesplitting'] = 'Você precisa selecionar um método de divisão de tempo antes de habilitar o modelo.';
$string['errornoenabledandtrainedmodels'] = 'Não há modelos habilitados e treinados para prever.';
$string['errornoenabledmodels'] = 'Não há modelos habilitados para treinar.';
$string['errornoexport'] = 'Somente modelos treinados podem ser exportados';
$string['errornostaticedit'] = 'Modelos baseados em suposições não podem ser editados.';
$string['errornostaticevaluated'] = 'Modelos baseados em suposições não podem ser avaliados. Eles estão sempre 100% corretos de acordo com a forma como foram definidos.';
$string['errornostaticlog'] = 'Modelos baseados em suposições não podem ser avaliados porque não há log de desempenho.';
$string['erroronlycli'] = 'Execução permitida somente via linha de comando';
$string['errortrainingdataexport'] = 'Os dados de treinamento do modelo não puderam ser exportados';
$string['evaluate'] = 'Avaliar';
$string['evaluatemodel'] = 'Avaliar modelo';
$string['evaluationinbatches'] = 'O conteúdo do site é calculado e armazenado em lotes. O processo de avaliação pode ser interrompido a qualquer momento. Na próxima vez que for executado, ele continuará a partir do ponto em que foi interrompido.';
$string['export'] = 'Exportar';
$string['exporttrainingdata'] = 'Exportar dados de treinamento';
$string['extrainfo'] = 'Informações';
$string['generalerror'] = 'Erro de avaliação. Código de status {$a}';
$string['getpredictions'] = 'Obter previsões';
$string['getpredictionsresults'] = 'Resultados usando {$a->name} divisão do tempo do curso';
$string['getpredictionsresultscli'] = 'Resultados usando {$a->name} (id: {$a->id}) duração do curso dividido';
$string['goodmodel'] = 'Este é um bom modelo para usar para obter previsões. Ativá-lo para começar a obter previsões.';
$string['indicators'] = 'Indicadores';
$string['info'] = 'Informações';
$string['insights'] = 'Insights';
$string['invalidanalysables'] = 'Elementos de site inválidos';
$string['invalidanalysablesinfo'] = 'Esta página lista este site analisável elementos que não podem ser utilizados por este modelo de previsão. Os elementos listados não podem ser usados nem para treinar o modelo de previsão, nem o modelo de previsão pode obter previsões para eles.';
$string['invalidanalysablestable'] = 'Tabela de elementos analisáveis do site inválida';
$string['invalidprediction'] = 'Inválido para receber previsões';
$string['invalidtraining'] = 'Inválido para treinar o modelo';
$string['loginfo'] = 'Registrar informação extra';
$string['modelid'] = 'ID do modelo';
$string['modelinvalidanalysables'] = 'Elementos analisáveis inválidos para o modelo "{$a}"';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Divisão de tempo';
$string['nextpage'] = 'Próxima página';
$string['nodatatoevaluate'] = 'Não há dados para avaliar o modelo';
$string['nodatatopredict'] = 'Nenhum novo elemento para obter previsões para';
$string['nodatatotrain'] = 'Não há novos dados que possam ser usados para treinamento';
$string['notdefined'] = 'Ainda não definido';
$string['pluginname'] = 'Modelos analíticos';
$string['predictionprocessfinished'] = 'Processo de previsão finalizado';
$string['predictionresults'] = 'Resultados da previsão';
$string['predictmodels'] = 'Prever modelos';
$string['predictorresultsin'] = 'Informações registradas pelo preditor no diretório {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'O plug-in de modelos analíticos não armazena nenhum dado pessoal.';
$string['sameenddate'] = 'A data final atual está ok';
$string['samestartdate'] = 'A data inicial atual está ok';
$string['target'] = 'Meta';
$string['timesplittingnotdefined'] = 'Divisão de tempo não definida.';
$string['timesplittingnotdefined_help'] = 'Você precisa selecionar um método de divisão de tempo antes de habilitar o modelo.';
$string['trainandpredictmodel'] = 'Modelo de treinamento e cálculo de previsões';
$string['trainingprocessfinished'] = 'Processo de treinamento concluído';
$string['trainingresults'] = 'Resultados de treinamento';
$string['trainmodels'] = 'Modelos de treino';
$string['viewlog'] = 'Log';
$string['weeksenddateautomaticallyset'] = 'Data de término definida automaticamente com base na data de início e no número de seções';
$string['weeksenddatedefault'] = 'Data de término calculada automaticamente a partir da data de início do curso.';
