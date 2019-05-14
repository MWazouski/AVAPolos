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
 * Strings for component 'qtype_ordering', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   qtype_ordering
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posição absoluta';
$string['addmultipleanswers'] = 'Adicionar mais {$a} itens';
$string['addsingleanswer'] = 'Adicionar mais um item';
$string['allornothing'] = 'Tudo ou nada';
$string['answer'] = 'Item texto';
$string['answerheader'] = 'Item arrastável {no}';
$string['correctorder'] = 'A ordem correta para estes itens é a seguinte:';
$string['defaultanswerformat'] = 'Formato de resposta predefinido';
$string['defaultquestionname'] = 'Arraste os seguintes itens para a ordem correta.';
$string['editingordering'] = 'Editando questão de Ordenação';
$string['gradedetails'] = 'Detalhes da avaliação';
$string['gradingtype'] = 'Tipos de avaliação';
$string['gradingtype_help'] = 'Escolha o tipo de avaliação.

**Tudo ou nada**
: Se todos os itens estão na posição correta, a pontuação obtida é igual à pontuação máxima. Caso contrário, a pontuação é zero.

**Posição absoluta**
: Um item é considerado correto se está na mesma posição como na resposta correta. A pontuação mais alta possível para a questão é **a mesma** que o número de itens mostrados ao estudante.

**Posição relativa à resposta correta**
: Um item é considerado correto se estiver na mesma posição da resposta correta. Itens corretos recebem uma pontuação igual ao número de itens mostrados, menos um. Itens incorretos recebem uma pontuação igual ao número de itens mostrados menos um e menos a "distância" do item à sua posição correta. Assim, se ***n*** itens são mostrados ao estudante, o número de pontuações possíveis para cada item é ***(n - 1)*** e a pontuação mais alta possível para a questão é ***n x (n - 1)***, o que é o mesmo que ***(n² - n)***.

**Relacionado ao item seguinte (exceto o último)**
: Um item é considerado correto se o seu próximo for o mesmo item que está na resposta correta. O item da última posição não é verificado. A pontuação mais alta possível para a questão é **um a menos** que o número de itens mostrados ao estudante.

**Relacionado ao item seguinte (incluindo o último)**
: Um item é considerado correto se a seu próximo for o mesmo item que está na resposta correta. O último item não pode ter qualquer item seguinte. A pontuação mais alta possível para a questão é **a mesma** que o número de itens mostrados ao estudante.

**Relacionado a ambos os itens, anterior e seguinte**
: Um item é considerado correto se ambos os itens, anterior e seguinte, são os mesmos que estão na resposta correta. O primeiro não pode  ter nenhum item antes e o último item não pode ter nenhum item seguinte. Assim, existem dois pontos possíveis para cada item e a pontuação mais alta possível para a questão é **o dobro** que o número de itens mostrados ao estudante.

**Relativo a TODOS os itens anteriores e seguintes**
: Um item é considerado correto se for precedido por todos os mesmos itens tal como na resposta correta e é seguido pelos mesmos itens, exatamente como na resposta correta. A ordem dos itens anteriores não importa, assim como não importa a ordem dos itens seguintes. Assim, se ***n*** itens são mostrados ao estudante, o número de pontos disponíveis para cada item é ***(n - 1)*** e a nota mais alta possível para a questão é ***n x (n - 1)***, que é o mesmo que ***(n² - n)***.

**Maior subconjunto ordenado**
: A nota é o número de itens no maior subconjunto de itens ordenados. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam começar no primeiro item (mas podem) e não precisam de ser contíguos (mas podem ser). Se houver vários subconjuntos de tamanhos iguais, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.

**Maior subconjunto de contíguos**
: A nota é o número de itens no maior subconjunto de itens contíguos. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam começar no primeiro item (apesar de poderem) mas TÊM DE SER CONTÍGUOS. Se houver vários subconjuntos de igual tamanho, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.';
$string['horizontal'] = 'Horizontal';
$string['layouttype'] = 'Estrutura dos itens';
$string['layouttype_help'] = 'Escolha se os itens serão apresentados verticalmente ou horizontalmente.';
$string['longestcontiguoussubset'] = 'Maior subconjunto de contíguos';
$string['longestorderedsubset'] = 'Maior subconjunto ordenado';
$string['noresponsedetails'] = 'Os detalhes da resposta para esta questão não estão disponíveis.';
$string['noscore'] = 'Sem pontuação';
$string['notenoughanswers'] = 'Questões de Ordenação devem ter mais do que {$a} respostas.';
$string['pluginname'] = 'Ordenação';
$string['pluginnameadding'] = 'Adicionar uma questão de Ordenação';
$string['pluginnameediting'] = 'Editando uma questão de Ordenação';
$string['pluginname_help'] = 'Vários itens são mostrados de forma desordenada. Os itens podem ser arrastados para uma ordem que faça sentido.';
$string['pluginnamesummary'] = 'Dispor os itens desorganizados em uma ordem que faça sentido.';
$string['positionx'] = 'Posição {$a}';
$string['privacy:metadata'] = 'O módulo do tipo de questão de Ordenação não armazena qualquer dado pessoal.';
$string['relativeallpreviousandnext'] = 'Relacionado a TODOS os itens anteriores e seguintes';
$string['relativenextexcludelast'] = 'Relacionado ao item seguinte (excluindo o último)';
$string['relativenextincludelast'] = 'Relacionado ao item seguinte (incluindo o último)';
$string['relativeonepreviousandnext'] = 'Relacionado a ambos os itens, anterior e seguinte';
$string['relativetocorrect'] = 'Relacionado à resposta correta';
$string['removeeditor'] = 'Remover editor HTML';
$string['removeitem'] = 'Eliminar item arrastável';
$string['scoredetails'] = 'Aqui está a pontuação para cada item nesta resposta:';
$string['selectall'] = 'Selecionar todos os itens';
$string['selectcontiguous'] = 'Selecionar um subconjunto contíguo de itens';
$string['selectcount'] = 'Tamanho do subconjunto';
$string['selectcount_help'] = 'O número de itens a mostrar quando a questão é apresentada em um teste.';
$string['selectrandom'] = 'Selecionar um subconjunto aleatório de itens';
$string['selecttype'] = 'Tipo de seleção de itens';
$string['selecttype_help'] = 'Escolha se pretender mostrar todos os itens ou apenas um subconjunto.';
$string['showgrading'] = 'Detalhes da avaliação';
$string['showgrading_help'] = 'Escolha se pretende mostrar ou ocultar os detalhes do cálculo da nota, quando um estudante revisa a resposta desta questão de Ordenação.';
$string['vertical'] = 'Vertical';
