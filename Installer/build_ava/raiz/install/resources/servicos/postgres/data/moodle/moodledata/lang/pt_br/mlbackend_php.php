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
 * Strings for component 'mlbackend_php', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   mlbackend_php
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Apenas parte do conjunto de dados foi avaliada devido ao seu tamanho. Configure $CFG->mlbackend_php_no_memory_limit se você tiver certeza de que seu sistema pode lidar com um conjunto de dados {$a}.';
$string['errorcantloadmodel'] = 'O arquivo de modelo {$a} não existe. O modelo deveria ter sido experimentado antes de ser utilizado para prever.';
$string['errorlowscore'] = 'A precisão da previsão do modelo avaliado não é muito alta, então algumas previsões podem não ser precisas. Pontuação do modelo = {$a->score}, pontuação mínima = {$a->minscore}';
$string['errornotenoughdata'] = 'Não há dados suficientes para avaliar este modelo utilizando o método de divisão de tempo.';
$string['errornotenoughdatadev'] = 'Os resultados da avaliação variaram muito. Recomenda-se que mais dados sejam reunidos para garantir que o modelo seja válido. Desvio padrão dos resultados da avaliação = {$a->deviation}, desvio padrão máximo recomendado = {$a->accepteddeviation}';
$string['errorphp7required'] = 'O backend PHP de aprendizado de máquina precisa do PHP 7';
$string['pluginname'] = 'Backend PHP de aprendizado de máquina';
