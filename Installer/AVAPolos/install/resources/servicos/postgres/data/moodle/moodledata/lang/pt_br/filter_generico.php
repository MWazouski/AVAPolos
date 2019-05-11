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
 * Strings for component 'filter_generico', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   filter_generico
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Pacote';
$string['commonpageheading'] = 'Configurações gerais';
$string['dataset'] = 'Conjunto de dados';
$string['dataset_desc'] = 'O Generico permite extrair um conjunto de dados do banco para uso em seu modelo. Este é um recurso avançado. Insira a parte sql de uma chamada $ DB->get_records_sql aqui.';
$string['datasetvars'] = 'Variáveis do conjunto de dados';
$string['datasetvars_desc'] = 'Coloque uma lista separada por vírgulas de variáveis que compõem as vars para o SQL. Você pode e provavelmente irá querer usar variáveis aqui.';
$string['filterdescription'] = 'Converta strings do filtro em modelos mesclados com dados';
$string['filtername'] = 'Generico';
$string['jumpcat_explanation'] = 'O conjunto completo de configurações do filtro Generico pode ser encontrado <a href="{$a}">aqui</a>.';
$string['jumpcat_heading'] = 'Configurações do filtro Generico';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Modelo de auto-preenchimento com uma predefinição';
$string['presets_desc'] = 'O Generico vem com algumas predefinições padrão que você pode usar fora da caixa, ou para ajudá-lo a começar seu próprio modelo. Escolha um desses aqui, ou simplesmente crie seu próprio modelo a partir do zero. Você pode exportar um modelo como um pacote clicando na caixa verde acima. Você pode importar um pacote arrastando-o para a caixa verde.';
$string['template'] = 'O corpo do modelo {$a}';
$string['templatealternate'] = 'Conteúdo alternativo';
$string['templatealternate_desc'] = 'Conteúdo que pode ser usado quando o conteúdo de CSS e javascript personalizado e atualizado não está disponível. Atualmente, isso é usado quando o modelo é processado por um webservice, provavelmente para conteúdo no aplicativo móvel';
$string['templatealternate_end'] = 'Final de conteúdo alternativo ((modelo {$a})';
$string['templatealternate_end_desc'] = 'Fechando tags de conteúdo alternativo para modelos que incluam conteúdo de usuário com as tags Generico de início e fim';
$string['templatecount'] = 'Contador do Modelo';
$string['templatecount_desc'] = 'O número de modelos que você pode ter. Padrão é 20.';
$string['templatedefaults'] = 'Padrões de variável (modelo {$a})';
$string['templatedefaults_desc'] = 'Defina os padrões em conjuntos delimitados por vírgulas de pares nome=valor. Por exemplo, largura=800, altura=900, sensação=alegria';
$string['template_desc'] = 'Coloque o modelo aqui, defina as variáveis cercando-as com os símbolos @@. Por exemplo: @@variável@@';
$string['templateend'] = 'Tags de fim (modelo {$a})';
$string['templateend_desc'] = 'Se o seu modelo incluir o conteúdo do usuário, por exemplo, uma caixa de informações, coloque as tags de fechamento aqui. O usuário entrará em algo como {GENERICO: mytag_end} para fechar o filtro.';
$string['templateheading'] = 'Configurações para o Modelo Generico {$a}';
$string['templateheadingcss'] = 'Configurações de Estilo/CSS';
$string['templateheadingjs'] = 'Configurações Javascript';
$string['templateinstructions'] = 'Instruções (modelo {$a})';
$string['templateinstructions_desc'] = 'Todas as instruções inseridas aqui serão exibidas no formulário atto genérico para este modelo que é exibido. Mantenha-os curtos ou parecerá ruim.';
$string['templatekey'] = 'A chave que identifica o modelo {$a}';
$string['templatekey_desc'] = 'A chave deve ser uma palavra e apenas conter números e letras, sublinhados, hifens e pontos.';
$string['templatename'] = 'Nome do Modelo';
$string['templatename_desc'] = 'O nome deste modelo.';
$string['templatepageheading'] = 'Modelo: {$a}';
$string['templaterequire_amd'] = 'Carga via AMD';
$string['templaterequire_amd_desc'] = 'AMD é um mecanismo de carregamento de javascript. Se você carregar ou vincular a bibliotecas javascript no seu modelo, talvez seja necessário desmarcar isso. Só se aplica se sua versão do  Moodle for 2.9 ou superior';
$string['templaterequire_css'] = 'Requer CSS (modelo {$a})';
$string['templaterequire_css_desc'] = 'Um link (1 somente) para um arquivo CSS externo que este modelo requer. opcional.';
$string['templaterequire_js'] = 'Requer JS (modelo {$a})';
$string['templaterequire_js_desc'] = 'Um link (1 somente) para um arquivo JS externo que este modelo requer. opcional.';
$string['templaterequirejsshim'] = 'Requer exportação Shim';
$string['templaterequirejsshim_desc'] = 'Deixe em branco, a menos que você saiba o que é shimming';
$string['templates'] = 'Modelos';
$string['templatescript'] = 'JS personalizado (modelo {$a})';
$string['templatescript_desc'] = 'Se o seu modelo precisar executar javascript personalizado, insira isso aqui. Ele será executado assim que todos os elementos tenham sido carregados na página.';
$string['templatestyle'] = 'CSS personalizado (modelo {$a})';
$string['templatestyle_desc'] = 'Digite qualquer CSS personalizado que seu modelo usa aqui. As variáveis de modelo não funcionarão aqui, somente o CSS básico.';
$string['templateuploadjsshim'] = 'Enviar exportação Shim';
$string['templateuploadjsshim_desc'] = 'Deixe em branco, a menos que você saiba o que é shimming';
$string['templateversion'] = 'A versão desse modelo {$a}';
$string['templateversion_desc'] = 'Ao compartilhar modelos, é melhor manter uma versão livre por lançamento. O formato da versão depende de você.';
$string['uploadcss'] = 'Enviar CSS(modelo {$a})';
$string['uploadcss_desc'] = 'Você pode carregar um arquivo CSS que será carregado para o seu modelo. Apenas um.';
$string['uploadjs'] = 'Enviar JS (modelo {$a})';
$string['uploadjs_desc'] = 'Você pode carregar um arquivo de biblioteca javascript que será carregado para o seu modelo. Apenas um.';
