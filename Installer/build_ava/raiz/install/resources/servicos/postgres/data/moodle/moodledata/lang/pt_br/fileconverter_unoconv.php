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
 * Strings for component 'fileconverter_unoconv', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   fileconverter_unoconv
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Caminho para o conversor de documentos unoconv';
$string['pathtounoconv_help'] = 'Caminho para o conversor de documentos Unoconv. Este é um executável que é capaz de converter formatos de documentos suportados pelo LibreOffice. Isso é opcional, mas se especificado, o Moodle o utilizará para converter automaticamente formatos entre documento. É utilizado para dar suporte a uma ampla gama de arquivos de entrada para o recurso anotar PDF da tarefa.';
$string['pluginname'] = 'Unoconv';
$string['test_unoconv'] = 'Testar caminho do unoconv';
$string['test_unoconvdoesnotexist'] = 'O caminho unoconv não aponta para o programa unoconv. Por favor verifique as configurações de caminho.';
$string['test_unoconvdownload'] = 'Baixar o arquivo de teste convertido em PDF';
$string['test_unoconvempty'] = 'O caminho unoconv não está definido. Por favor verifique as configurações de caminho.';
$string['test_unoconvisdir'] = 'O caminho unoconv aponta para um diretório, por favor insira o programa unoconv no caminho especificado';
$string['test_unoconvnotestfile'] = 'Está faltando o documento de teste para ser convertido em PDF';
$string['test_unoconvnotexecutable'] = 'O caminho unoconv aponta para um arquivo não executável';
$string['test_unoconvok'] = 'O caminho unoconv parece estar configurado corretamente.';
$string['test_unoconvversionnotsupported'] = 'A versão do unoconv instalada não é suportada.';
