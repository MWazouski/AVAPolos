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
 * Strings for component 'assignfeedback_offline', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Confirmar importação de notas';
$string['default'] = 'Habilitado por padrão';
$string['default_help'] = 'Se habilitado, a avaliação offline com planilhas será ativada por padrão para todas as novas tarefas.';
$string['downloadgrades'] = 'Baixar planilha de notas';
$string['enabled'] = 'Planilha de notas offline';
$string['enabled_help'] = 'Se habilitado, o professor poderá baixar e enviar uma planinha com as notas dos estudantes ao avaliar as tarefas.';
$string['feedbackupdate'] = 'Definir o campo "{$a->field}" de "{$a->student}" para "{$a->text}"';
$string['gradelockedingradebook'] = 'A nota foi bloqueada no livro de notas para {$a}';
$string['graderecentlymodified'] = 'A avaliação foi modificada no Moodle mais recentemente do que na planilha de notas para {$a}';
$string['gradesfile'] = 'Planilha de notas (formato csv)';
$string['gradesfile_help'] = 'Planilha de notas com notas modificadas. O arquivo deve ser no formato CSV com codificação UTF-8, tendo sido baixado da tarefa, com colunas para as notas dos estudantes e identificador.';
$string['gradeupdate'] = 'Definir a nota {$a->grade} para o estudante {$a->student}';
$string['ignoremodified'] = 'Permitir a atualização dos registros que foram modificados mais recentemente no Moodle do que na planilha.';
$string['ignoremodified_help'] = 'Quando a planilha de notas é baixado do Moodle, contém a data da última modificação de cada uma das notas. Se qualquer uma das notas for atualizada no Moodle após esta planilha ser baixada, por padrão o Moodle irá se recusar a substituir essa informação atualizada ao importar as notas. Ao selecionar esta opção o Moodle irá desativar essa verificação de segurança e isto tornará possível a sobreposição de múltiplas notas.';
$string['importgrades'] = 'Confirmar mudanças na planilha de notas';
$string['invalidgradeimport'] = 'O Moodle não conseguiu ler a planilha carregada. Certifique-se de que está no formato de valor separado por vírgula (.csv) e tente novamente.';
$string['nochanges'] = 'Nenhuma modificação encontrada na planilha de notas enviada';
$string['offlinegradingworksheet'] = 'Notas';
$string['pluginname'] = 'Planilha de notas offline';
$string['privacy:nullproviderreason'] = 'Este plugin não tem banco de dados para armazenar informação de usuários. Ele usa apenas APIs em mod_assign para ajudar a mostrar a interface de avaliação.';
$string['processgrades'] = 'Importar notas';
$string['skiprecord'] = 'Pular registro';
$string['updatedgrades'] = '{$a} notas e feedback atualizados';
$string['updaterecord'] = 'Atualizar o registro';
$string['uploadgrades'] = 'Carregar planilha de notas';
