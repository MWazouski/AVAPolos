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
 * Strings for component 'format_tiles', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   format_tiles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Adicionar blocos';
$string['all'] = 'Todos';
$string['allcomplete'] = 'Tudo completo';
$string['allowlabelconversion'] = 'Permitir a conversão de rótulo para página (experimental)';
$string['allowlabelconversion_desc'] = 'Se estiver marcado, os professores editores terão uma opção nas configurações de edição em cada rótulo para convertê-lo em uma página. Este é um cenário experimental.';
$string['allowsubtilesview'] = 'Permitir visualização de sub-blocos';
$string['allowsubtilesview_desc'] = 'Permitir o uso de uma configuração de curso que, se selecionada, dentro de um bloco mostra atividades (exceto rótulos) como sub-blocos, em vez de lista padrão';
$string['asfraction'] = 'Mostrar como fração';
$string['aspercentagedial'] = 'Mostrar como porcentagem (%) em um círculo';
$string['assumedatastoreconsent'] = 'Aceitar e permitir o uso do armazenamento local do navegador';
$string['assumedatastoreconsent_desc'] = 'Se selecionado, <b>não</ b> será mostrado uma caixa de diálogo solicitando consentimento do usuário para armazenar dados no armazenamento local do navegador';
$string['basecolour'] = 'Cor dos blocos';
$string['basecolour_help'] = 'Este conjunto de cores será aplicado a todos os blocos do curso';
$string['brandcolour'] = 'Cor da marca';
$string['browsersessionstorage'] = 'Armazenamento de sessão do navegador (armazenando conteúdo do curso)';
$string['changecourseicon'] = 'Clique para escolher o novo ícone';
$string['close'] = 'Fechar';
$string['collapse'] = 'Recolher seção';
$string['collapsesections'] = 'Recolher todas as seções';
$string['colourblue'] = 'Azul';
$string['colourdarkgreen'] = 'Verde escuro';
$string['colourgreen'] = 'Verde';
$string['colourlightblue'] = 'Azul claro';
$string['colourname_descr'] = 'Nome de exibição da cor (por exemplo, "Azul") a ser usado nos menus suspensos ao escolher uma cor para um curso';
$string['colournamegeneral'] = 'Nome de exibição da cor acima';
$string['colourpurple'] = 'Roxo';
$string['colourred'] = 'Vermelho';
$string['coloursettings'] = 'Configurações de cor';
$string['complete'] = 'completo';
$string['complete-n-auto'] = 'Item não concluído. Ele será marcado como concluído quando você atender aos critérios de conclusão. Você não pode mudar isso manualmente.';
$string['complete-y-auto'] = 'Item concluído. Ele foi marcado como concluído quando você atendeu aos critérios de conclusão. Você não pode mudar isso manualmente.';
$string['completion_help'] = 'Um sinal à direita de uma atividade pode ser usado para indicar quando a atividade está completa (caso contrário, um círculo vazio será mostrado).<br><br>
Dependendo da configuração, um sinal pode aparecer automaticamente quando você completar a atividade de acordo com as condições estabelecidas pelo professor.<br><br>
Em outros casos, você pode clicar no círculo vazio quando achar que completou a atividade e ela se transformará em uma marca verde assinalada. (Clicando novamente, remove se você mudar de idéia).';
$string['completionswitchhelp'] = '<p>Você optou por visualizar o acompanhamento de conclusão em cada bloco. Por isso, definimos "Acompanhamento de Conclusão > Habilitado" mais abaixo nesta página para "Sim".</p>
<p>Além disso, você precisa ativar o acompanhamento de conclusão para <b>cada item</b> que você está acompanhando. Por exemplo: para um PDF, clique em "Editar configurações", procure abaixo de "Conclusão da Atividade" e escolha a configuração desejada.</p>
<p>Você também pode fazer isso em <b>massa</ b>, conforme explicado na <a href="https://docs.moodle.org/36/en/Activity_completion_settings" target="_blank">explicação detalhada de acompanhamento de conclusão no moodle.org</a></p>';
$string['completionwarning'] = 'Você tem o acompanhamento de conclusão ativado no nível do curso, mas no nível de atividade individual, nenhum item tem o rastreamento ativado, por isso não há nada para rastrear.';
$string['completionwarning_changeinbulk'] = 'Mudança em massa';
$string['completionwarning_help'] = 'Você precisa tornar os itens individuais rastreáveis para editá-los (em Conclusão da Atividade > Acompanhamento de Conclusão) ou você pode fazer isso em massa em Administração do Curso > Conclusão do Curso > Edição em lote de conclusão de atividade';
$string['contents'] = 'Conteúdo';
$string['converttopage'] = 'Converter para página';
$string['converttopage_confirm'] = 'Você tem certeza? Essa operação não pode ser desfeita (você terá que criar o rótulo novamente manualmente, se precisar).';
$string['courseshowtileprogress'] = 'Progresso em cada bloco';
$string['courseshowtileprogress_error'] = 'Você tem "Rastreamento de conclusão > Ativar rastreamento de conclusão" definido como "Não" (veja mais abaixo nesta página) que está em conflito com essa configuração. Se você deseja exibir o progresso nos blocos, defina "Rastreamento de conclusão > Ativar rastreamento de conclusão" como "Sim". Caso contrário, defina esta configuração como \'Não\'.';
$string['courseshowtileprogress_help'] = '<p>Quando selecionado, o progresso do usuário com as atividades será mostrado em cada bloco, como uma <em>fração</em> (por exemplo: \'Progresso 2/10\' que significa que 2 de 10 atividades serão concluídas) ou como uma <em> porcentagem</em> em um círculo.</p>
<p>Isso só pode ser usado se "Conclusão > Ativar acompanhamento de conclusão" tiver sido ativado.</p>
<p>Se não houverem atividades à acompanhar dentro de um determinado bloco, o indicador não será exibido para esse bloco.</p>';
$string['courseusebarforheadings'] = 'Enfatizar títulos com aba colorida';
$string['courseusebarforheadings_help'] = 'Exibe uma aba colorida à esquerda do cabeçalho do curso sempre que um estilo de título é selecionado no editor de texto';
$string['courseusesubtiles'] = 'Utilizar sub-blocos para atividades';
$string['courseusesubtiles_help'] = 'Em cada bloco, mostre todas as atividades como um sub-bloco, em vez de uma lista de atividades ao longo da página. Isso não se aplica a rótulos que não serão mostrados como sub-blocos, portanto, podem ser usados como títulos entre blocos.';
$string['currentsection'] = 'Este bloco';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'CSS personalizado para aplicar ao conteúdo da seção do curso enquanto este formato de curso é usado. Isso não será validado, portanto, tome cuidado para inserir um código válido. Por exemplo:
<p>.section {color: red; }</p>
<p>li.activity.subtile.resource.pdf {background-color: orange! important; }</p>';
$string['datapref'] = 'Preferência dos dados';
$string['datapreferror'] = 'O recurso de preferência dos dados só estará disponível se você tiver o JavaScript ativado no seu navegador. Caso contrário, o armazenamento de dados não poderá ser ativado.';
$string['dataprefquestion'] = '<p>Para tornar este site mais fácil de usar, armazenamos informações funcionais em seu navegador, como o conteúdo do último bloco que você abriu. Isso permanece na sua máquina por um curto período, caso você visite a página novamente. Nós não usamos estes dados para rastreamento. Tudo bem?</p><p>Armazenaremos sua escolha até você limpar seu histórico de navegação. Escolher "Não" pode resultar no carregamento de página mais lento.</p>';
$string['defaultthiscourse'] = 'Padrão para este curso';
$string['defaulttileicon'] = 'Ícone do bloco';
$string['defaulttileicon_help'] = 'O ícone selecionado aqui aparecerá em <em>todos os</em> blocos neste curso. Os blocos individuais podem ter um ícone diferente selecionado, usando uma configuração específica a nível de bloco.';
$string['deletesection'] = 'Excluir bloco';
$string['displayfilterbar'] = 'Barra de filtro';
$string['displayfilterbar_error'] = 'A menos que tenha configurado os resultados para este curso, você só pode exibir a barra de filtro com base nos números de blocos e não com base nos resultados. Crie alguns resultados primeiro e depois volte aqui. Veja';
$string['displayfilterbar_help'] = '<p>Quando selecionado, exibirá automaticamente uma matriz de botões antes da tela lado a lado de um curso, na qual os usuários podem clicar para filtrar blocos para determinados intervalos.</p><p>Quando \'com base nos números de blocos\' for selecionado, série de botões será exibida por exemplo um botão para telhas 1-4, um botão para fichas 5-8 etc. </ p> <p> Quando \'com base nos resultados do curso\' for selecionado, haverá um botão por resultado do curso. Cada bloco pode ser atribuído a um determinado resultado (e, portanto, a um determinado botão) da página de configurações do bloco. </ P>';
$string['displaytitle_mod_doc'] = 'Documento do Word';
$string['displaytitle_mod_html'] = 'Página da WEB';
$string['displaytitle_mod_jpeg'] = 'Imagem';
$string['displaytitle_mod_mp3'] = 'Áudio';
$string['displaytitle_mod_mp4'] = 'Vídeo';
$string['displaytitle_mod_pdf'] = 'PDF';
$string['displaytitle_mod_ppt'] = 'Apresentação em Powerpoint';
$string['displaytitle_mod_txt'] = 'Texto plano';
$string['displaytitle_mod_xls'] = 'Planilha';
$string['displaytitle_mod_zip'] = 'Zip';
$string['download'] = 'Download';
$string['editsectionname'] = 'Editar nome do bloco';
$string['entersection'] = 'Entrar na seção';
$string['expand'] = 'Expandir';
$string['expandsections'] = 'Revelar todas as atividades (todas as seções)';
$string['fileaddedtobottom'] = 'Arquivo adicionado ao final da seção';
$string['filenoshowtext'] = 'Se o arquivo não aparecer aqui, por favor use os botões à direita para baixar ou visualizar em uma nova janela';
$string['filterboth'] = 'Mostrar botões com base nos números de blocos e nos resultados do curso';
$string['filternumbers'] = 'Mostrar botões baseado nos números dos blocos';
$string['filteroutcomes'] = 'Mostrar botões baseado nos resultados do curso';
