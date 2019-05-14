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
 * Strings for component 'assignfeedback_editpdf', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Adicionar à lista rápida';
$string['annotationcolour'] = 'Cor da anotação';
$string['black'] = 'Preto';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'Não é possível abrir o arquivo PDF. O arquivo pode estar corrompido ou em um formato não suportado.';
$string['clear'] = 'Limpar';
$string['colourpicker'] = 'Seletor de cores';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentários';
$string['commentcolour'] = 'Cor do comentário';
$string['commentcontextmenu'] = 'Comentário de contexto de menu';
$string['commentindex'] = 'Índice de comentários';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Não foi possível salvar página {$a}';
$string['currentstamp'] = 'Selo';
$string['default'] = 'Habilitado por padrão';
$string['default_help'] = 'Se habilitado, este método de feedback estará disponível por padrão para todas as tarefas.';
$string['deleteannotation'] = 'Excluir anotação';
$string['deletecomment'] = 'Excluir comentário';
$string['deletefeedback'] = 'Excluir o feedback PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Baixar o feedback PDF';
$string['draftchangessaved'] = 'Rascunho de anotações salvas';
$string['drag'] = 'Arrastar';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotações de estudantes são feitas direto no navegador (browser) e resulta em um documento PDF editado para download.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Se habilitado, o professor poderá criar anotações em arquivos PDF quando estiver fazendo a correção. O professor terá permissão para adicionar comentários, adicionando diretamente desenhos e selos em cima do trabalho do estudante. As anotações são feitas no navegador (browser) e não é necessário o uso de qualquer outro software.';
$string['errorgenerateimage'] = 'Erro ao gerar imagem com ghostscript, informações de depuração: {$a}';
$string['errorpdfpage'] = 'Ocorreu um erro ao gerar a página.';
$string['expcolcomments'] = 'Mostrar/ocultar todos os comentários';
$string['filter'] = 'Filtrar comentários...';
$string['generatefeedback'] = 'Gerar feedback PDF';
$string['generatingpdf'] = 'Gerando o PDF...';
$string['gotopage'] = 'Ir para página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagem de teste Ghostscript';
$string['highlight'] = 'Realçar';
$string['jsrequired'] = 'O JavaScript é necessário para anotar um PDF. Ative o JavaScript no seu navegador para utilizar esta funcionalidade.';
$string['launcheditor'] = 'Iniciar editor PDF...';
$string['line'] = 'Linha';
$string['loadingeditor'] = 'Iniciando editor PDF';
$string['navigatenext'] = 'Próxima página';
$string['navigateprevious'] = 'Página anterior';
$string['output'] = 'Saída:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Página {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['pathtogspathdesc'] = 'Por favor, note que anotar PDF requer que o caminho para o Ghostscript esteja definido em {$a}.';
$string['pen'] = 'Caneta';
$string['pluginname'] = 'Anotar PDF';
$string['preparesubmissionsforannotation'] = 'Preparar envios para anotações';
$string['privacy:metadata:colourpurpose'] = 'Cor do comentário ou anotação';
$string['privacy:metadata:conversionpurpose'] = 'Arquivos são convertidos para PDF para permitir anotações.';
$string['privacy:metadata:filepurpose'] = 'Armazena um PDF com anotações com feedback para o usuário.';
$string['privacy:metadata:rawtextpurpose'] = 'Armazena textos em raw para dados rápidos.';
$string['privacy:metadata:tablepurpose'] = 'Armazena comentários específicos na lista rápida do professor';
$string['privacy:metadata:userid'] = 'ID do usuário';
$string['privacy:path'] = 'Feedback do PDF';
$string['rectangle'] = 'Retângulo';
$string['red'] = 'Vermelho';
$string['result'] = 'Resultado:';
$string['searchcomments'] = 'Pesquisar comentários';
$string['select'] = 'Selecionar';
$string['stamp'] = 'Selo';
$string['stamppicker'] = 'Seletor de selo';
$string['stamps'] = 'Selos';
$string['stampsdesc'] = 'Selos devem ser arquivos de imagens (tamanho recomendado de 40x40). Estas imagens podem ser usadas com a ferramenta de selos para se fazer anotações no arquivo PDF';
$string['test_doesnotexist'] = 'O caminho para o ghostscript aponta para um arquivo inexistente';
$string['test_empty'] = 'O caminho para o ghostscript está vazio - digite o caminho correto';
$string['testgs'] = 'Testar caminho para o ghostscript';
$string['test_isdir'] = 'O caminho para o ghostscript aponta para uma pasta, por favor inclua o programa ghostscript no caminho especificado';
$string['test_notestfile'] = 'O PDF de teste está faltando';
$string['test_notexecutable'] = 'O ghostscript aponta para um arquivo que não é executável';
$string['test_ok'] = 'O caminho para o ghostscript parece estar correto - por favor verifique se você pode ver a mensagem na imagem abaixo';
$string['tool'] = 'Ferramenta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver PDF com anotações...';
$string['white'] = 'Branco';
$string['yellow'] = 'Amarelo';
