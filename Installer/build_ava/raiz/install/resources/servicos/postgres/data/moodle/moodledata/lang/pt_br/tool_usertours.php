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
 * Strings for component 'tool_usertours', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Acima';
$string['actions'] = 'Ações';
$string['appliesto'] = 'Aplica-se a';
$string['backdrop'] = 'Mostrar com plano de fundo';
$string['backdrop_help'] = 'Pode usar um plano de fundo para realçar a parte da página para onde está apontando.

Atenção: os planos de fundo não são compatíveis com algumas partes da página tal como, por exemplo, a barra de navegação.';
$string['below'] = 'Abaixo';
$string['block'] = 'Bloco';
$string['block_named'] = 'Bloco nomeado \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista das etapas da demonstração ao usuário';
$string['cachedef_tourdata'] = 'Lista de informações das demonstrações que são trazidas em todas as páginas';
$string['confirmstepremovalquestion'] = 'Tem certeza que pretende excluir esta etapa?';
$string['confirmstepremovaltitle'] = 'Confirmar a exclusão da etapa';
$string['confirmtourremovalquestion'] = 'Tem certeza que pretende excluir esta demonstração?';
$string['confirmtourremovaltitle'] = 'Confirmar a exclusão da demonstração';
$string['content'] = 'Conteúdo';
$string['content_heading'] = 'Conteúdo';
$string['content_help'] = 'O conteúdo que descreve a etapa pode ser adicionado como texto simples, colocado entre "tags multi-idiomas" se for necessário (para uso com o filtro de conteúdo em vários idiomas).

Em alternativa, um ID de string do idioma pode ser inserido no formato identificador,componente (sem parênteses ou espaço após a vírgula).';
$string['cssselector'] = 'Seletor CSS';
$string['defaultvalue'] = 'Padrão ({$a})';
$string['delay'] = 'Atraso antes de mostrar a etapa';
$string['delay_help'] = 'Você pode optar por adicionar um atraso antes que a etapa seja exibida.

Este atraso é em milissegundos.';
$string['description'] = 'Descrição';
$string['done'] = 'Concluído';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endtour'] = 'Fim do tour';
$string['event_step_shown'] = 'Etapa apresentada';
$string['event_tour_ended'] = 'Demonstração terminada';
$string['event_tour_reset'] = 'Reiniciar demonstração';
$string['event_tour_started'] = 'Demonstração iniciada';
$string['exporttour'] = 'Exportar demonstração';
$string['filter_category'] = 'Categoria';
$string['filter_category_help'] = 'Mostre o tour em uma página associada a um curso na categoria selecionada.';
$string['filter_course'] = 'Cursos';
$string['filter_courseformat'] = 'Formato de curso';
$string['filter_courseformat_help'] = 'Mostrar o tour em uma página que está associada ao curso utilizando o formato de curso selecionado.';
$string['filter_course_help'] = 'Mostrar o tour em uma página que está associada ao curso selecionado.';
$string['filter_header'] = 'Filtros da demonstração';
$string['filter_help'] = 'Selecione as condições sob as quais a demonstração será mostrada. Todos os filtros devem corresponder a uma demonstração para ela ser mostrada a um usuário.';
$string['filter_role'] = 'Papel';
$string['filter_role_help'] = 'Uma demonstração pode ser exclusiva para usuários com papel selecionado no contexto em que a demonstração é mostrada. Por exemplo, restringir uma demonstração de Painel do usuário aos usuários com o papel de aluno não funcionará se os usuários tiverem o papel de aluno num curso (como geralmente é o caso). Uma demonstração de Painel do usuário só pode ser restrita a usuários com um papel no nível de sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar a demonstração quando o usuário estiver usando um dos temas selecionados.';
$string['importtour'] = 'Importar demonstração';
$string['left'] = 'Esquerda';
$string['modifyshippedtourwarning'] = 'Esta é uma demonstração ao usuário que vem com o Moodle. Quaisquer modificações que você fizer poderão ser substituídas durante a próxima atualização do site.';
$string['movestepdown'] = 'Mover etapa para baixo';
$string['movestepup'] = 'Mover etapa para cima';
$string['movetourdown'] = 'Mover demonstração para baixo';
$string['movetourup'] = 'Mover demonstração para cima';
$string['name'] = 'Nome';
$string['newstep'] = 'Nova etapa';
$string['newtour'] = 'Criar nova demonstração';
$string['next'] = 'Seguinte';
$string['options_heading'] = 'Opções';
$string['orphan'] = 'Mostrar se o destino não for encontrado';
$string['orphan_help'] = 'Mostre a etapa se o destino não for encontrado na página.';
$string['pathmatch'] = 'Aplicar à correspondência de URL';
$string['pathmatch_help'] = 'As demonstrações serão mostradas em qualquer página cujo URL corresponda a este valor.

Pode usar o carácter % como uma série numérica para dar significado a qualquer coisa.
Alguns exemplos de valores:

* /my/% - para corresponder ao Painel do usuário
* /course/view.php?id=2 - para corresponder a determinada disciplina
* /mod/forum/view.php% - para corresponder à lista de discussão do fórum
* /user/profile.php% - para corresponder à página de perfil do usuário

Se pretender mostrar uma demonstração na Página inicial do site, pode usar o valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausar';
$string['placement'] = 'Posicionamento';
$string['placement_help'] = 'Uma etapa pode ser colocada acima, abaixo, à esquerda ou à direita do destino. Acima ou abaixo é recomendado, uma vez que se ajustam melhor em dispositivos móveis.

Se não for possível ajustar a etapa no local especificado de uma determinada página, ela será automaticamente colocada noutro lugar.';
$string['pluginname'] = 'Demonstrações ao usuário';
$string['privacy:metadata:preference:completed'] = 'A hora em que um usuário concluiu pela última vez um tour do usuário.';
$string['privacy:metadata:preference:requested'] = 'A hora em que um usuário solicitou pela última vez um tour do usuário.';
$string['privacy:request:preference:completed'] = 'Você marcou pela última vez a visita do usuário "{$a->name}" como concluída em {$a->time}';
$string['privacy:request:preference:requested'] = 'A última vez que você solicitou o tour do usuário "{$a->name}" foi em {$a->time}';
$string['reflex'] = 'Clique para avançar';
$string['reflex_help'] = 'Ir para a próxima etapa quando clicar no destino.';
$string['resettouronpage'] = 'Redefinir o tour de usuário nessa página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Direita';
$string['select_block'] = 'Selecione um bloco';
$string['selector_defaulttitle'] = 'Insira um título descritivo';
$string['selectordisplayname'] = 'Um seletor CSS correspondente a \'{$a}\'';
$string['selecttype'] = 'Selecione o tipo de etapa';
$string['sharedtourslink'] = 'Repositório de demonstrações';
$string['skip'] = 'Pular';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloco';
$string['target_heading'] = 'Destino da etapa';
$string['target_selector'] = 'Seletor';
$string['target_selector_targetvalue'] = 'Seletores CSS';
$string['target_selector_targetvalue_help'] = 'Um seletor CSS pode ser usado para selecionar quase qualquer elemento da página. O seletor apropriado pode ser facilmente encontrado através das ferramentas de desenvolvimento para o seu navegador da Web.';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada etapa é associada a uma parte da página - o destino. Os tipos de destino são:

* Bloco - para mostrar uma etapa ao lado de um bloco específico
* Seletor CSS - para definir com precisão a área de destino usando CSS
* Mostrar no meio da página - para uma etapa que não precisa de ser associada a uma parte específica da página';
$string['target_unattached'] = 'Mostrar no meio da página';
$string['title'] = 'Título';
$string['title_help'] = 'O título de uma etapa pode ser adicionado como texto simples, entre em "tags multi-idioma" se for necessário (para uso com o filtro de conteúdo em vários idiomas).

Em alternativa, um ID de string do idioma pode ser inserido no formato identificador,componente (sem parênteses ou espaço após a vírgula).';
$string['tour1_content_addingblocks'] = 'Na verdade, pense cuidadosamente sobre como incluir quaisquer blocos em suas páginas. Os blocos não são mostrados no aplicativo do Moodle Mobile, portanto, como regra geral, é muito melhor certificar-se de que seu site funciona bem sem nenhum bloco.';
$string['tour1_content_blockregion'] = 'Ainda há uma região de bloco aqui. Recomendamos remover completamente os blocos de Navegação e Administração, já que toda a funcionalidade está em outro lugar no tema Boost.';
$string['tour1_content_customisation'] = 'Para personalizar a aparência do seu site e da primeira página, use o menu de configurações no canto desse cabeçalho. Tente ativar a edição agora mesmo.';
$string['tour1_content_end'] = 'Esta foi uma demonstração ao usuário, um novo recurso no Moodle 3.2. Não será mostrada novamente a menos que a reinicie através do link existente no rodapé. Como administrador, você também pode criar as suas demonstrações!';
$string['tour1_content_navigation'] = 'A navegação principal é agora através deste menu de navegação. O conteúdo atualiza dependendo de onde você está no site. Use o botão na parte superior para ocultá-lo ou mostrá-lo.';
$string['tour1_content_welcome'] = 'Bem-vindo ao tema Boost para o Moodle 3.2. Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes.';
$string['tour1_title_addingblocks'] = 'Adicionando blocos';
$string['tour1_title_blockregion'] = 'Região dos blocos';
$string['tour1_title_customisation'] = 'Personalizar';
$string['tour1_title_end'] = 'Fim do tour';
$string['tour1_title_navigation'] = 'Navegação';
$string['tour1_title_welcome'] = 'Bem-vindo';
$string['tour2_content_addblock'] = 'Se você ativar a edição, você pode adicionar blocos da gaveta de navegação. No entanto, pense cuidadosamente sobre como incluir quaisquer blocos em suas páginas. Os blocos não são mostrados no aplicativo Moodle Mobile, portanto, para melhor experiência do usuário, é melhor certificar-se de que seu curso funciona bem sem nenhum bloco.';
$string['tour2_content_addingblocks'] = 'Você pode adicionar blocos a esta página usando este botão. No entanto, pense cuidadosamente sobre como incluir quaisquer blocos em suas páginas. Os blocos não são mostrados no aplicativo Moodle Mobile, portanto, para melhor experiência do usuário, é melhor certificar-se de que seu curso funciona bem sem nenhum bloco.';
$string['tour2_content_customisation'] = 'Para alterar as configurações do curso, use o menu de configurações no canto desse cabeçalho. Você encontrará um menu de configurações semelhante na página inicial de todas as atividades, também. Tente ativar a edição agora mesmo.';
$string['tour2_content_end'] = 'Esta foi um tour de usuário, um novo recurso no Moodle 3.2. Ele não será exibido novamente a menos que você redefina usando o link no rodapé. O administrador do site também pode criar tours adicionais para este site, se necessário.';
$string['tour2_content_navigation'] = 'A navegação é agora através deste menu de navegação. Use o botão na parte superior para ocultá-lo ou mostrá-lo. Você verá que existem links para seções de seu curso.';
$string['tour2_content_opendrawer'] = 'Tente abrir o menu de navegação agora.';
$string['tour2_content_participants'] = 'Veja os participantes aqui. Este é também onde você vai para adicionar ou remover estudantes.';
$string['tour2_content_welcome'] = 'Bem-vindo ao tema Boost para o Moodle 3.2. Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes aqui na página do curso.';
$string['tour2_title_addblock'] = 'Adicionar um bloco';
$string['tour2_title_addingblocks'] = 'Adicionando blocos';
$string['tour2_title_customisation'] = 'Personalização';
$string['tour2_title_end'] = 'Fim do tour';
$string['tour2_title_navigation'] = 'Navegação';
$string['tour2_title_opendrawer'] = 'Abra o menu de navegação';
$string['tour2_title_participants'] = 'Participantes do curso';
$string['tour2_title_welcome'] = 'Bem-vindo';
$string['tourconfig'] = 'Arquivo de configuração da demonstração para importar';
$string['tourisenabled'] = 'Demonstração ativada';
$string['tourlist_explanation'] = 'Você pode criar as demonstrações que quiser e habilitá-las para diferentes partes do Moodle. Apenas uma demonstração pode ser criada por página.';
$string['tour_resetforall'] = 'O estado da demonstração foi redefinido. Será mostrada novamente a todos os usuários.';
$string['tours'] = 'Demonstrações';
$string['usertours'] = 'Demonstrações ao usuário';
$string['usertours:managetours'] = 'Criar, editar e excluir demonstrações';
$string['viewtour_edit'] = 'Pode <a href="{$a->editlink}">editar os valores predefinidos da demonstração</a> e <a href="{$a->resetlink}">forçar a demonstração a ser mostrada</a> a todos os usuários novamente.';
$string['viewtour_info'] = 'Esta é a demonstração \'{$a->tourname}\'. Aplica-se ao caminho \'{$a->path}\'.';
