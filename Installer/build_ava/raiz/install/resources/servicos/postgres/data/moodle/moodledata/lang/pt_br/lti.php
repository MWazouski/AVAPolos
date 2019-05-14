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
 * Strings for component 'lti', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar';
$string['accepted'] = 'Aceito';
$string['accept_grades'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin_help'] = 'Especifique se o provedor de ferramenta pode adicionar, atualizar, ler e apagar notas associadas com as instâncias desta ferramenta.

Alguns provedores de ferramenta têm suporte para transmitir notas de volta ao Moodle com base em ações realizadas dentro da ferramenta, criando uma experiência mais integrada.';
$string['accept_grades_help'] = 'Especifique se o provedor de ferramenta pode adicionar, atualizar, ler e apagar notas associadas apenas com essa instância ferramenta externa.

Alguns fornecedores de ferramenta de suporte relatando notas de volta ao Moodle baseado em ações realizadas dentro da ferramenta, criando uma experiência mais integrada.

Observe que essa configuração pode ser substituída na configuração da ferramenta.';
$string['action'] = 'Ação';
$string['activate'] = 'Ativar';
$string['activatetoadddescription'] = 'Você precisará ativar esta ferramenta, antes você pode adicionar uma descrição.';
$string['active'] = 'Ativo';
$string['activity'] = 'Atividade';
$string['addnewapp'] = 'Habilitar aplicação externa';
$string['addserver'] = 'Adicionar novo servidor';
$string['addtype'] = 'Adicionar ferramenta pré-configurada';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permite ferramenta armazenar 8K de configurações no Moodle';
$string['always'] = 'Sempre';
$string['autoaddtype'] = 'Adicionar ferramenta';
$string['automatic'] = 'Automático, com base na URL da ferramenta';
$string['baseurl'] = 'URL Base';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'Atividades LTI';
$string['basiclti_base_string'] = 'Base de strings LTI OAuth';
$string['basiclti_endpoint'] = 'Lançamento LTI Endpoint';
$string['basicltifieldset'] = 'Fieldset personalizado de exemplo';
$string['basiclti_in_new_window'] = 'Sua atividade foi aberta em uma nova janela';
$string['basiclti_in_new_window_open'] = 'Abrir em uma nova janela';
$string['basicltiintro'] = 'Descrição da atividade';
$string['basicltiname'] = 'Nome da atividade';
$string['basiclti_parameters'] = 'Parâmetros de inicialização LTI';
$string['basicltisettings'] = 'Configurações básicas de ferramenta de interoperabilidade de aprendizagem';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'Você não pode excluir a configuração desta ferramenta.';
$string['cannot_edit'] = 'Você não deve editar a configuração desta ferramenta.';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Selecione os recursos que você deseja oferecer ao provedor de ferramenta. Mais do que uma capacidade pode ser seleccionado.';
$string['capabilitiesrequired'] = 'Esta ferramenta requer acesso aos seguintes dados para ativar:';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Clique aqui para continuar</a>';
$string['comment'] = 'Comentário';
$string['configpassword'] = 'Senha padrão da ferramenta externa';
$string['configpreferheight'] = 'Altura';
$string['configpreferwidget'] = 'Conjunto de widgets como padrão de lançamento';
$string['configpreferwidth'] = 'Largura padrão preferida';
$string['configresourceurl'] = 'URL recurso padrão';
$string['configtoolurl'] = 'URL da ferramenta remota padrão';
$string['configtypes'] = 'Habilitar Aplicações LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = 'Tem certeza de que deseja ativar esta ferramenta?';
$string['contentitem'] = 'Mensagem de item de conteúdo';
$string['contentitem_help'] = 'Se marcado, a opção \'Selecionar conteúdo\' estará disponível ao adicionar uma ferramenta externa.';
$string['courseactivitiesorresources'] = 'Atividades ou recursos do curso';
$string['courseid'] = 'Número identificador do curso';
$string['courseinformation'] = 'Informação do curso';
$string['courselink'] = 'Ir para o curso';
$string['coursemisconf'] = 'Curso está desconfigurado';
$string['course_tool_types'] = 'Tipos de ferramentas do curso';
$string['createdon'] = 'Criada em';
$string['curllibrarymissing'] = 'Biblioteca PHP Curl deve estar instalada para utilizar LTI';
$string['custom'] = 'Parâmetros customizados';
$string['custom_config'] = 'Usando configuração personalizada da ferramenta.';
$string['custom_help'] = 'Parâmetros personalizados são as configurações utilizadas pelo provedor da ferramenta. Por exemplo, um parâmetro personalizado pode ser utilizado para exibir um recurso específico do provedor. Cada parâmetro deve ser inserido em uma linha separada utilizando o formato de "nome = valor"; por exemplo, "chapter = 3".

É seguro deixar este campo inalterado, a menos que orientado pelo provedor da ferramenta.';
$string['custominstr'] = 'Parâmetros customizados';
$string['debuglaunch'] = 'Opção de debug';
$string['debuglaunchoff'] = 'Lançamento normal';
$string['debuglaunchon'] = 'Lançamento de debug';
$string['default'] = 'Padrão';
$string['default_launch_container'] = 'Container de inicialização padrão';
$string['default_launch_container_help'] = 'O container de inicialização afeta a exibição da ferramenta, quando iniciado a partir do curso. Alguns containers de inicialização podem fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o ambiente Moodle.

Padrão - Utilizar o container de inicialização especificado pela configuração da ferramenta.

Incorporado - A ferramenta é exibida no interior da janela Moodle existente, de uma maneira semelhante aos outros tipos de atividade.

Incorporada sem blocos - A ferramenta é exibida no interior da janela Moodle existente, com apenas os controles de navegação no topo da página.

Nova janela - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ela vai abrir em uma nova aba ou janela pop-up. É possível que os navegadores bloqueiem a abertura da nova janela.';
$string['delegate'] = 'Delegar ao Professor';
$string['delete'] = 'Excluir';
$string['delete_confirmation'] = 'Tem certeza que quer excluir esta ferramenta externa pré-configurada?';
$string['deletetype'] = 'Excluir ferramenta externa pré-configurada';
$string['display_description'] = 'Exibir descrição da atividade quando lançado';
$string['display_description_help'] = 'Caso selecionado, a descrição da atividade (especificada acima) irá exibir o conteúdo do provedor da ferramenta.

A descrição será utilizada para providenciar instruções adicionais para inicializar a ferramenta, mas não é necessário.

A descrição nunca é exibida quando o container de inicialização da ferramenta está em uma nova janela';
$string['display_name'] = 'Exibir nome da atividade quando lançado';
$string['display_name_help'] = 'Se selecionado, o nome da atividade (especificado acima) irá exibir o conteúdo do provedor ferramenta.

É possível que o fornecedor de ferramenta também pode apresentar o título. Esta opção pode impedir o título da atividade seja exibida duas vezes.

O título nunca é exibido quando o recipiente de lançamento da ferramenta é em uma nova janela.';
$string['domain_mismatch'] = 'O domínio da URL da ferramenta não corresponde à configuração da ferramenta.';
$string['donot'] = 'Não enviar';
$string['donotaccept'] = 'Não aceitar';
$string['donotallow'] = 'Não permitir';
$string['duplicateregurl'] = 'Esta URL de inscrição já está em uso';
$string['editdescription'] = 'Clique aqui para fornecer a esta ferramenta uma descrição';
$string['edittype'] = 'Editar ferramenta pré-configurada';
$string['embed'] = 'Incorporado';
$string['embed_no_blocks'] = 'Incorporado sem blocos';
$string['enableemailnotification'] = 'Enviar notificação por emails';
$string['enableemailnotification_help'] = 'Caso habilitado, estudantes irão receber notificações por email quando a ferramenta de submissão receber notas';
$string['enterkeyandsecret'] = 'Digite a chave do consumidor e segredo compartilhado';
$string['enterkeyandsecret_help'] = 'Se você recebeu uma chave de consumidor e/ou um segredo compartilhado, insira aqui';
$string['errorbadurl'] = 'URL não é uma URL ou cartridge de ferramenta válido.';
$string['errorincorrectconsumerkey'] = 'A chave do consumidor está incorreta.';
$string['errorinvaliddata'] = 'Dado inválido: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de mídia inválido: {$a}';
$string['errorinvalidresponseformat'] = 'Formato de resposta de item de conteúdo inválido.';
$string['errormisconfig'] = 'Ferramenta errada. Por favor, pergunte ao administrador do Moodle para corrigir a configuração da ferramenta.';
$string['errortooltypenotfound'] = 'Tipo de ferramenta LTI não encontrado.';
$string['existing_window'] = 'Janela existente';
$string['extensions'] = 'Serviços de extensão LTI';
$string['external_tool_type'] = 'Ferramenta pré-configurada';
$string['external_tool_type_help'] = 'O principal objetivo de uma ferramenta de configuração é criar um canal de comunicação segura entre Moodle eo provedor ferramenta.
Ele também fornece uma oportunidade para os padrões de configuração e criação de serviços adicionais fornecidos pela ferramenta.

*** Automática, com base na URL Lançamento ** - Esta definição deve ser usado em quase todos os casos. Moodle irá selecionar a configuração da ferramenta mais adequada
        com base na URL lançamento. Ferramentas configurados tanto por um administrador ou dentro deste curso será utilizado.
        Quando o URL lançamento está especificado, o Moodle irá fornecer feedback sobre se reconhece ou não. Se o Moodle não reconhece a URL de Lançamento,
        você pode precisar para entrar nos detalhes de configuração da ferramenta manualmente.
*** Um tipo de ferramenta específica ** - Ao selecionar um tipo de ferramenta específica, você pode forçar Moodle para usar essa configuração de ferramentas de comunicação com o
        provedor de ferramenta externa. Se o URL de lançamento não parecem pertencer ao fornecedor de ferramenta, aparecerá um aviso. Em alguns casos, não é necessário
        para introduzir um URL de lançamento na prestação de um tipo de ferramenta específica (se não o lançamento de um recurso especial no âmbito do provedor de ferramenta).
Configuração personalizada *** ** - Para configurar ferramenta de configuração personalizada em apenas um exemplo disso, mostrar as opções avançadas, e inserir a chave do consumidor e
        segredo compartilhado si mesmo. Se você não tem uma chave do consumidor e segredo compartilhado, você pode ser capaz de solicitá-los a partir do fornecedor de ferramenta.
        Nem todas as ferramentas necessitam de uma chave secreta do consumidor e partilhada, caso em que os campos podem ser deixados em branco.

 # # # Edição tipoFerramenta

Três ícones estão disponíveis após a lista externo ferramenta de texto dropdown:

 ***Adicionar ** - Criar um curso de configuração de ferramentas de nível. Todas as instâncias de ferramentas externas neste curso podem usar a ferramenta de configuração.
 ***Editar ** - Escolha um tipo de curso ferramenta de nível no menu suspenso, clique neste ícone. Os pormenores da configuração da ferramenta pode ser editado.
 ***Excluir ** - Retire o selecionado tipo de curso ferramenta de nível.';
$string['external_tool_types'] = 'Ferramentas pré-configuradas';
$string['failedtoconnect'] = 'O Moodle não foi capaz de se comunicar com o sitema "{$a}"';
$string['failedtocreatetooltype'] = 'Falha ao criar uma nova ferramenta. Verifique o URL e tente novamente.';
$string['failedtodeletetoolproxy'] = 'Falha ao excluir o registro da ferramenta. Você pode precisar visitar "Gerenciar registros de ferramentas externas" e excluí-lo manualmente.';
$string['filter_basiclti_configlink'] = 'Configure seus sites preferidos e suas senhas';
$string['filter_basiclti_password'] = 'Senha é obrigatória';
$string['filterconfig'] = 'Administração LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Usar uma configuração existente para a instancia desconfigurada';
$string['fixnew'] = 'Nova configuração';
$string['fixnewconf'] = 'Definir uma nova configuração para a instância desconfigurada';
$string['fixold'] = 'Utilizar existente';
$string['forced_help'] = 'Esta configuração foi forçada em uma ferramenta de configuração de um curso ou ao nível do site. Você não pode modificar a partir da interface.';
$string['force_ssl'] = 'Forçar SSL';
$string['force_ssl_help'] = 'Selecionando esta opção é forçada a utilização de SSL para inicialização de ferramentas.

Em adição, todos as requisições via web services do provedor da ferramenta utilizarão SSL.

Caso utilizar esta opção, confirme que o site Moodle e o provedor SSL suportam SSL';
$string['generaltool'] = 'Ferramenta Geral';
$string['global_tool_types'] = 'Ferramentas pré-configuradas globais';
$string['grading'] = 'Roteamento de nota';
$string['icon_url'] = 'URL do ícone';
$string['icon_url_help'] = 'A URL do ícone permite ser modificado na listagem de cursos para esta atividade. Ao invés de usar o ícone LTI padrão, um ícone transmite o tipo de atividade que pode ser especificado';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do LTI';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade LTI.';
$string['indicator:socialbreadth'] = 'Indicador social do LTI';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade LTI.';
$string['invalidid'] = 'LTI ID está incorreta';
$string['launch_in_moodle'] = 'Inicializar ferramenta no Moodle';
$string['launchinpopup'] = 'Container de inicialização';
$string['launch_in_popup'] = 'Ferramenta de lançamento em pop-up';
$string['launchinpopup_help'] = 'O container de inicialização afeta a exibição da ferramenta, quando iniciado a partir do curso. Alguns containers de inicialização podem fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o ambiente Moodle.

Padrão - Utilizar o container de inicialização especificado pela configuração da ferramenta.

Incorporado - A ferramenta é exibida no interior da janela Moodle existente, de uma maneira semelhante aos outros tipos de atividade.

Incorporada sem blocos - A ferramenta é exibida no interior da janela Moodle existente, com apenas os controles de navegação no topo da página.

Nova janela - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ela vai abrir em uma nova aba ou janela pop-up. É possível que os navegadores bloqueiem a abertura da nova janela.';
$string['launchoptions'] = 'Opções de inicialização';
$string['launch_url'] = 'URL da ferramenta';
$string['launch_url_help'] = 'A URL de lançamento indica que o endereço web da ferramenta externa, e pode conter informações adicionais, tais como o recurso para mostrar.

Se você não sabe o que para entrar para a URL de Lançamento, por favor verifique com o fornecedor de ferramenta para obter mais informações. Se você tiver selecionado um tipo de ferramenta específica, você pode não precisar digitar uma URL de lançamento. Se a ligação ferramenta é usada apenas para lançar no sistema do fornecedor de ferramenta, e não ir para um recurso específico, este será provavelmente o caso.';
$string['leaveblank'] = 'Deixe em branco se você não precisar';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Adicionar configurações no nível do curso à ferramenta';
$string['lti:addinstance'] = 'Adicionar uma nova atividade de ferramenta externa (LTI)';
$string['lti:admin'] = 'Seja um administrador quando a ferramenta for executada';
$string['lti_administration'] = 'Editar ferramenta pré-configurada';
$string['lti_errormsg'] = 'A ferramenta retornou a mensagem de erro a seguir: "{$a}"';
$string['lti:grade'] = 'Ver as notas retornadas pela ferramenta externa';
$string['lti_launch_error'] = 'Ocorreu um erro ao inicializar a ferramenta externa:';
$string['lti_launch_error_tool_request'] = '<p>Para enviar uma requisição para o administrador para completar a ferramenta de configuração, clique <a href="{$a->admin_request_url}" target="_top">aqui</a></p>';
$string['lti_launch_error_unsigned_help'] = '<p> Este erro pode ser um resultado de uma chave secreta consumidor ausente e partilhada para o prestador de ferramenta. </p><p> Se você tem uma chave secreta compartilhada do consumidor e, pode introduzi-lo ao editar a instância ferramenta externa (certifique-se opções avançadas são visíveis). <br /> Alternativamente, você pode criar um curso de nível configuração do provedor ferramenta <a href="{$a->course_tool_editor}">aqui</a> . </p>';
$string['lti:manage'] = 'Editar atividades LTI';
$string['lti:requesttooladd'] = 'Enviar uma ferramenta aos administradores para configuração';
$string['ltisettings'] = 'Configurações LTI';
$string['lti_tool_request_added'] = 'Solicitação de pedido para configuração da ferramenta enviado com sucesso. Você talvez precise contatar o administrador para completar a configuração da ferramenta';
$string['lti_tool_request_existing'] = 'A ferramenta de configuração para o domínio de ferramentas já foi apresentado.';
$string['ltiunknownserviceapicall'] = 'Chamada LTI de serviço desconhecido';
$string['lti:view'] = 'Iniciar atividades LTI';
$string['main_admin'] = 'Ajuda geral';
$string['main_admin_help'] = 'Ferramentas externas permitem aos usuários do Moodle interagir sem interferências com recursos de aprendizagem hospedados remotamente. Através da execução de um protocolo especial, a ferramenta remota terá acesso a algumas informações gerais sobre o usuário iniciante. Por exemplo, o nome da instituição, curso ID, ID de usuário e outras informações como nome do usuário ou endereço de email.

Os tipos de ferramentas listados nesta página são separados em três categorias:

*** Ativo ** - Estes provedores de ferramentas foram aprovados e configurados por um administrador. Eles podem ser utilizados a partir de qualquer curso nessa instância Moodle. Se uma chave de consumidor e um segredo compartilhado forem inseridos, uma relação de confiança é estabelecida entre esta instância do Moodle e a ferramenta remota, fornecendo um canal de comunicação seguro.
 *** Pendente ** - Estes provedores de ferramenta foram inseridos através de uma importação de pacote, mas não foram configurados por um administrador. Os professores ainda podem usar ferramentas desses provedores se eles tiverem uma chave de consumidor e um segredo compartilhado, ou se nenhum deles for necessário.
*** Rejeitado ** - Estes provedores de ferramentas são marcados como aqueles que o administrador não tem a intenção de disponibilizar para toda a instância Moodle. Os professores ainda podem usar ferramentas desses provedores se eles tiverem uma chave de consumidor e um segredo compartilhado, ou se nenhum deles for necessário.';
$string['manage_external_tools'] = 'Gerenciar ferramentas';
$string['manage_tool_proxies'] = 'Gerenciar inscrições de ferramentas externas';
$string['manage_tools'] = 'Gerenciar ferramentas pré-configuradas';
$string['manuallyaddtype'] = 'Alternadamente, você pode <a href="{$a}"> configurar uma ferramenta manualmente </a>.';
$string['miscellaneous'] = 'Miscelânea';
$string['misconfiguredtools'] = 'Instâncias de ferramentas não configuradas foram detectadas';
$string['missingparameterserror'] = 'Esta página não está configurada: "{$a}"';
$string['module_class_type'] = 'Tipo de módulo do Moodle';
$string['modulename'] = 'Ferramenta externa';
$string['modulename_help'] = 'O módulo de atividade ferramenta externa permite aos estudantes interagir com os recursos de aprendizagem e atividades em outros sites. Por exemplo, uma ferramenta externa pode fornecer acesso a um tipo de atividade nova ou materiais de aprendizagem de uma editora.

Para criar uma atividade ferramenta externa, é necessário que o provedor da ferramenta tenha suporte a LTI (Learning Tools Interoperability) . Um professor pode criar uma atividade ferramenta externa ou fazer uso de uma ferramenta configurada pelo administrador do site.

Atividades de ferramentas externas diferem de recursos URL em alguns aspectos:

* As ferramentas externas utilizam informações de contexto, ou seja, têm acesso a informações sobre o usuário que iniciou a ferramenta, como: o curso, instituição e nome
* Ferramentas externas suportam a leitura, atualização e exclusão de notas associado com a instância da atividade
* Configurações de ferramentas externas criam uma relação de confiança entre seu site e o provedor de ferramentas, permitindo uma comunicação segura entre eles';
$string['modulename_link'] = 'mod/lti/view';
$string['modulenameplural'] = 'Ferramentas externas';
$string['modulenamepluralformatted'] = 'Instâncias LTI';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['name'] = 'Nome';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nova janela';
$string['noattempts'] = 'Nenhuma tentativa foi realizada nesta instância desta ferramenta';
$string['no_lti_configured'] = 'Não há ferramentas externas ativas configuradas.';
$string['no_lti_pending'] = 'Não há ferramentas externas pendentes.';
$string['no_lti_rejected'] = 'Não há ferramentas externas rejeitadas.';
$string['noltis'] = 'Não há instâncias de ferramentas externas';
$string['no_lti_tools'] = 'Não há ferramentas externas configuradas';
$string['noprofileservice'] = 'Serviço de Perfil não encontrado';
$string['noservers'] = 'Nao foram encontrados servidores';
$string['no_tp_accepted'] = 'Não há registros de ferramentas externas aceitos.';
$string['no_tp_cancelled'] = 'Não há registros de ferramentas externas cancelados.';
$string['no_tp_configured'] = '';
$string['no_tp_pending'] = 'Não há registros de ferramentas externas pendentes.';
$string['no_tp_rejected'] = 'Não há registros de ferramentas externas rejeitados.';
$string['notypes'] = 'No momento não existem ferramentas LTI configuradas no Moodle. Clique no link Install acima para adicionar alguma.';
$string['noviewusers'] = 'Não foram encontrados usuários com permissões para usar esta ferramenta';
$string['optionalsettings'] = 'Configurações opcionais';
$string['organization'] = 'Detalhes da organização';
$string['organizationdescr'] = 'Descrição da organização';
$string['organizationid'] = 'ID da organização';
$string['organizationid_help'] = 'Um identificador único para esta instância Moodle. Tipicamente, o nome DNS da organização é utilizado.

Caso este campo seja deixado em branco, o "host name" deste site Moodle será utilizado como valor padrão.';
$string['organizationurl'] = 'URL da organização';
$string['organizationurl_help'] = 'A URL base desta instância do Moodle.

Caso este campo tenha sido deixado em branco, um valor padrão será utilizado com base na configuração do site.';
$string['pagesize'] = 'Envios submetidos por página';
$string['parameter'] = 'Parâmetros da ferramenta';
$string['parameter_help'] = 'Parâmetros da ferramenta são configurações solicitadas a serem passadas pelo provedor de ferramenta no proxy ferramenta aceita.';
$string['password'] = 'Segredo compartilhado';
$string['password_admin'] = 'Segredo compartilhado';
$string['password_admin_help'] = 'O segredo compartilhado pode ser pensado como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecido juntamente com a chave do consumidor a partir do fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir um segredo compartilhado.';
$string['password_help'] = 'Para a pré-configurados ferramentas, não é necessário para inserir um segredo compartilhado aqui, como o segredo compartilhado será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez neste curso, acrescentando uma ferramenta de configuração do curso é uma boa idéia. O segredo compartilhado pode ser pensado como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecido juntamente com a chave do consumidor a partir do fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir um segredo compartilhado.';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração de ferramenta externa - LTI';
$string['pluginname'] = 'Ferramenta externa - LTI';
$string['preferheight'] = 'Altura preferida';
$string['preferwidget'] = 'Widget de inicialização preferido';
$string['preferwidth'] = 'Largura preferida';
$string['press_to_submit'] = 'Pressione para iniciar esta atividade';
$string['privacy'] = 'Privacidade';
$string['quickgrade'] = 'Permitir avaliação rápida';
$string['quickgrade_help'] = 'Caso habilitado, múltiplas ferramentas podem associar notas em uma única página. Adicione notas e comentários e clique em "Salvar todos meus feedbacks"  para salvar todas as mudanças para aquela página.';
$string['redirect'] = 'Você será redirecionado em alguns segundos. Caso contrário, pressione o botão.';
$string['register'] = 'Cadastre-se';
$string['registertype'] = 'Configurar um novo registro de Ferramenta externa';
$string['register_warning'] = 'A página de registro parece demorar um pouco para abrir. Se não aparecer, verifique se você digitou o URL correto nas configurações. Se o Moodle estiver usando https, assegure-se de que a ferramenta que você está configurando suporta https e você está usando https no URL.';
$string['registrationname'] = 'Nome do provedor';
$string['registrationname_help'] = 'Digite o nome do provedor de ferramenta que está sendo registrada.';
$string['registration_options'] = 'Opções de registro';
$string['registrationurl'] = 'URL do registro';
$string['registrationurl_help'] = 'A URL de registro deve estar disponível a partir do fornecedor de ferramentas como o local para o qual os pedidos de registo devem ser enviados.';
$string['reject'] = 'Rejeitar';
$string['rejected'] = 'Rejeitado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Chave do consumidor';
$string['resourcekey_admin'] = 'Chave do consumidor';
$string['resourcekey_admin_help'] = 'A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de recurso.';
$string['resourcekey_help'] = 'Para a pré-configurados ferramentas, não é necessário introduzir uma chave de recurso aqui, como a chave consumidor será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez neste curso, acrescentando uma ferramenta de configuração do curso é uma boa idéia. A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de recurso.';
$string['resourceurl'] = 'Recurso URL';
$string['return_to_course'] = 'Clique <a href="{$a->link}" target="_top">aqui</a> para retornar ao curso.';
$string['saveallfeedback'] = 'Salvar todos os meus feedbacks';
$string['search:activity'] = 'Ferramenta externa - informações sobre a atividade';
$string['secure_icon_url'] = 'URL seguro do ícone';
$string['secure_icon_url_help'] = 'Similar ao URL do ícone, mas usada se o usuário acessar o Moodle de forma segura através de SSL. O principal objectivo para este campo é para impedir que o navegador alerta o usuário se a página subjacente foi acessado através de SSL, mas pedindo para mostrar uma imagem insegura.';
$string['secure_launch_url'] = 'URL seguro da ferramenta';
$string['secure_launch_url_help'] = 'Similar to Launch URL, mas usado em vez do url lançamento, se a segurança é necessária. Moodle usará o URL lançamento seguro em vez do URL do lançamento se o site Moodle é acessado através de SSL, ou se a ferramenta de configuração está definida para sempre lançar através de SSL. A URL de lançamento também pode ser configurado para um endereço https para forçar o lançamento através de SSL, e este campo pode ser deixado em branco.';
$string['selectcontent'] = '';
$string['send'] = 'Enviar';
$string['services'] = 'Serviços';
$string['services_help'] = 'Selecione os serviços que deseja oferecer ao provedor de ferramenta. Mais do que um serviço pode ser selecionado.';
$string['setupoptions'] = 'Opções de configuração';
$string['share_email'] = 'Compartilhar email da inicialização com ferramenta';
$string['share_email_admin'] = 'Compartilhar email de inicialização com ferramenta';
$string['share_email_admin_help'] = 'Especifique se o endereço de e-mail do usuário lançar a ferramenta será compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar lançador de endereços de correio electrónico para distinguir usuários com o mesmo nome na interface do usuário, ou enviar e-mails aos usuários com base em ações dentro da ferramenta.';
$string['share_email_help'] = 'Especifique se o endereço de e-mail do usuário lançar a ferramenta será compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar lançador de endereços de correio electrónico para distinguir usuários com o mesmo nome, ou enviar e-mails aos usuários com base em ações dentro da ferramenta. Observe que essa configuração pode ser substituído na configuração da ferramenta.';
$string['share_name'] = 'Compartilhar nome de inicialização com a ferramenta';
$string['share_name_admin'] = 'Compartilhar nome de inicialização com ferramenta';
$string['share_name_admin_help'] = 'Especifique se o nome completo do usuário lançar a ferramenta deve ser compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar nomes dos lançadores para mostrar informação relevante dentro da ferramenta.';
$string['share_name_help'] = 'Especifique se o nome completo do usuário lançar a ferramenta deve ser compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar nomes dos lançadores para mostrar informação relevante dentro da ferramenta. Observe que essa configuração pode ser substituído na configuração da ferramenta.';
$string['share_roster'] = 'Permitir a ferramenta acesso a lista de cursos';
$string['share_roster_admin'] = 'Ferramenta pode acessar lista de cursos';
$string['share_roster_admin_help'] = 'Especificar se a ferramenta pode acessar a lista de usuários inscritos em cursos a partir do qual o tipo de ferramenta é inicializado';
$string['share_roster_help'] = 'Especifica se a ferramenta pode acessar a lista de usuários inscritos neste curso.

Note que esta configuração pode ser sobrescrita na configuração da ferramenta.';
$string['show_in_course_activity_chooser'] = 'Mostrar no seletor de atividades como uma ferramenta pré-configurada';
$string['show_in_course_lti1'] = 'Uso da configuração da ferramenta';
$string['show_in_course_lti1_help'] = 'Esta ferramenta pode ser exibida no seletor de atividade para que um professor selecione para adicionar a um curso. Alternativamente, pode ser exibida no menu da ferramenta pré-configurada ao adicionar uma ferramenta externa a um curso. Outra opção é para que a configuração da ferramenta seja usada somente se a URL exata da ferramenta for inserida ao adicionar uma ferramenta externa a um curso.';
$string['show_in_course_lti2'] = 'Uso da configuração da ferramenta';
$string['show_in_course_lti2_help'] = 'Esta ferramenta pode ser exibida no seletor de atividade para que um professor selecione para adicionar a um curso ou no menu da ferramenta pré-configurada ao adicionar uma ferramenta externa a um curso.';
$string['show_in_course_no'] = 'Não mostrar; utilizar somente quando o URL da ferramenta correspondente for inserido';
$string['show_in_course_preconfigured'] = 'Mostrar como ferramenta pré-configurada ao adicionar uma ferramenta externa';
$string['size'] = 'Parâmetros de tamanho';
$string['submission'] = 'Envio';
$string['submissions'] = 'Envios';
$string['submissionsfor'] = 'Envios para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de serviço LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de serviços LTI';
$string['subplugintype_ltiservice'] = 'Serviço LTI';
$string['subplugintype_ltiservice_plural'] = 'Serviços LTI';
$string['subplugintype_ltisource'] = 'Fonte LTI';
$string['subplugintype_ltisource_plural'] = 'Fontes LTI';
$string['successfullycreatedtooltype'] = 'Nova ferramenta criada com sucesso!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Configuração da ferramenta obtida com sucesso a partir do conteúdo selecionado.';
$string['toggle_debug_data'] = 'Inicialize dados para debugar';
$string['tool_config_not_found'] = 'Configuração da ferramenta não encontrada para esta URL.';
$string['tooldescription'] = 'Descrição da ferrramenta';
$string['tooldescription_help'] = 'A descrição da ferramenta que será exibida aos professores na lista de atividades.

Isso deve descrever o que é a ferramenta e o que ela faz e qualquer informação adicional que o professor precise saber.';
$string['toolisbeingused'] = 'Esta ferramenta está sendo usada {$a} vezes';
$string['toolisnotbeingused'] = 'Esta ferramenta nunca foi utilizada';
$string['toolproxy'] = 'Inscrições de ferramentas externas';
$string['toolproxy_help'] = 'Inscrições ferramenta externa permitir Moodle administradores do site para configurar ferramentas externas a partir de um proxy ferramenta obtido de um fornecedor de ferramentas de apoio LTI 2.0. A URL de inscrição fornecido pelo provedor de ferramenta é tudo o que é necessário para iniciar o processo. Os recursos e serviços oferecidos ao provedor ferramenta estiver selecionada quando a configuração de um novo registo. Inscrições Ferramenta listados nesta página são separadas em quatro categorias: * ** Configurado ** - Esses registros ferramentas foram criadas, mas o processo de registro ainda não foi iniciado. * Pendente ** ** - O processo regisitration para esses registros ferramenta foi iniciada, mas não foi concluída. Abrir e salvar as configurações para movê-lo de volta para a categoria \'configurado\'. * ** Aceito ** - Esses registros ferramentas foram aprovados; os recursos especificados no proxy ferramenta aparecerá na página de tipos de ferramenta externa com um estado inicial de &quot;pendentes&quot;. * ** Rejeitado ** - Esses registros ferramentas são aquelas que foram rejeitadas durante o processo de registro. Abrir e salvar as configurações para movê-lo de volta para a categoria \'configurado\' para que o processo de registro cna ser reiniciado.';
$string['toolproxyregistration'] = 'Registro de ferramenta externa';
$string['toolregistration'] = 'Registro de ferramenta externa';
$string['tool_settings'] = 'Configurações da ferramenta';
$string['toolsetup'] = 'Configuração da ferramenta externa';
$string['tooltypeadded'] = 'Ferramenta pré-configurada adicionada';
$string['tooltypedeleted'] = 'Ferramenta pré-configurada excluída';
$string['tooltypenotdeleted'] = 'Não foi possível excluir a ferramenta pré-configurada';
$string['tooltypes'] = 'Ferramenta';
$string['tooltypeupdated'] = 'Ferramenta pré-configurada atualizada';
$string['toolurl'] = 'URL da ferramenta';
$string['toolurl_help'] = 'A URL base da ferramenta é usada para combinar com URLs lançamento ferramenta para a configuração correta da ferramenta. Prefxing a URL com http (s) é opcional. Além disso, o URL de base é utilizada como o URL lançamento se um URL lançamento não é especificado no exemplo ferramenta externa. <table><thead><tr><td> <b>URL Base</b> </td><td> <b>Casa com padrões</b> </td></tr></thead><tbody><tr><td> tool.com </td><td> tool.com, tool.com / quizzes, tool.com / quizzes / quiz.php? id = 10, www.tool.com / quizzes </td></tr><tr><td> www.tool.com / quizzes </td><td> tool.com / quizzes, tool.com / quizzes / take.php? id = 10, www.tool.com / quizzes </td></tr><tr><td> quiz.tool.com </td><td> quiz.tool.com, quiz.tool.com / take.php? ID = 10 </td></tr></tbody></table> Se duas configurações diferentes de ferramentas são válidos para o mesmo domínio, a correspondência mais específica será usado.';
$string['toolurlplaceholder'] = 'URL da ferramenta...';
$string['typename'] = 'Nome da ferramenta';
$string['typename_help'] = 'O nome da ferramenta é utilizado pelo provedor da ferramenta através do moodle. O nome inserido será visível a professores quando adicionadas ferramentas externas nos cursos.';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'Não é possível criar a ferramenta';
$string['unabletofindtooltype'] = 'Ferramenta não disponível para {$a->id}';
$string['unknownstate'] = 'Estado desconhecido';
$string['update'] = 'Atualização';
$string['useraccountinformation'] = 'Informações da conta do usuário';
$string['userpersonalinformation'] = 'Informações pessoais do usuário';
$string['using_tool_cartridge'] = 'Usando a ferramenta cartridge';
$string['using_tool_configuration'] = 'Configurações da ferramenta:&nbsp;';
$string['validurl'] = 'Um aURL válida deve iniciar com http(s)://';
$string['viewsubmissions'] = 'Ver envios e tela de notas';
