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
 * Strings for component 'cache', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   cache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addinstance'] = 'Adicionar instância';
$string['addlocksuccess'] = 'Nova instância de travamento adicionada com sucesso.';
$string['addnewlockinstance'] = 'Adicionar uma nova instância de travamento';
$string['addstore'] = 'Adicionar armazenamento {$a}';
$string['addstoresuccess'] = 'Armazenamento {$a} adicionado com sucesso.';
$string['area'] = 'Área';
$string['cacheadmin'] = 'Administração de cache';
$string['cacheconfig'] = 'Configuração';
$string['cachedef_calendar_categories'] = 'Categorias de curso que um usuário pode acessar no calendário';
$string['cachedef_calendar_subscriptions'] = 'Assinaturas de calendário';
$string['cachedef_capabilities'] = 'Lista de capacidades do sistema';
$string['cachedef_completion'] = 'Estado de conclusão da atividade';
$string['cachedef_config'] = 'Definições de configuração';
$string['cachedef_contextwithinsights'] = 'Contexto com insights';
$string['cachedef_coursecat'] = 'Listas de categorias de curso para um usuário em particular';
$string['cachedef_coursecatrecords'] = 'Registros de categorias de cursos';
$string['cachedef_coursecattree'] = 'Árvore de categorias de cursos';
$string['cachedef_coursecompletion'] = 'Status da conclusão do curso';
$string['cachedef_coursecontacts'] = 'Lista de contatos do curso';
$string['cachedef_coursemodinfo'] = 'Informações acumuladas sobre módulos e seções para cada usuário';
$string['cachedef_databasemeta'] = 'Meta informações de banco de dados';
$string['cachedef_eventinvalidation'] = 'Invalidação de evento';
$string['cachedef_externalbadges'] = 'Emblemas externos para determinado usuário';
$string['cachedef_fontawesomeiconmapping'] = 'Mapeamento de ícones para "font awesome"';
$string['cachedef_grade_categories'] = 'Consultas pontuação categoria';
$string['cachedef_groupdata'] = 'Informações do grupo de curso';
$string['cachedef_htmlpurifier'] = 'HTML Purifier - o conteúdo limpo';
$string['cachedef_langmenu'] = 'Lista de idiomas disponíveis';
$string['cachedef_locking'] = 'Trava';
$string['cachedef_message_processors_enabled'] = 'Status do processador de mensagens ativado';
$string['cachedef_message_time_last_message_between_users'] = 'Momento da criação da mensagem mais recente entre os usuários';
$string['cachedef_navigation_expandcourse'] = 'Navegação em cursos expansíveis';
$string['cachedef_observers'] = 'Observadores de eventos';
$string['cachedef_plugin_functions'] = '"Callbacks" de plugins disponíveis';
$string['cachedef_plugin_manager'] = 'Gerenciador de informações de plugin';
$string['cachedef_postprocessedcss'] = 'Post processed CSS';
$string['cachedef_questiondata'] = 'Definições de pergunta';
$string['cachedef_repositories'] = 'Repositórios de instâncias de dados';
$string['cachedef_roledefs'] = 'Definições de papéis';
$string['cachedef_string'] = 'Cache de strings de idioma';
$string['cachedef_suspended_userids'] = 'Lista de usuários suspensos por curso';
$string['cachedef_tagindexbuilder'] = 'Resultados da pesquisa por itens etiquetados';
$string['cachedef_tags'] = 'Coleção de marcadores e áreas';
$string['cachedef_temp_tables'] = 'Cache de tabelas temporárias';
$string['cachedef_user_group_groupings'] = 'Agrupamentos e grupos de usuários por curso';
$string['cachedef_userselections'] = 'Dados usado para manter seleções do usuário em todo Moodle';
$string['cachedef_yuimodules'] = 'Definições do módulo YUI';
$string['cachelock_file_default'] = 'Bloqueio padrão em arquivo (filesystem)';
$string['cachestores'] = 'Armazenamentos de cache (logstore)';
$string['caching'] = 'Caching';
$string['component'] = 'Componente';
$string['confirmlockdeletion'] = 'Confirme a exclusão da trava';
$string['confirmstoredeletion'] = 'Confirmação de exclusão de armazenamento';
$string['default_application'] = 'Armazenamento padrão da aplicação';
$string['defaultmappings'] = 'Armazenamentos utilizados quando nenhum mapeamento está presente';
$string['defaultmappings_help'] = 'Estes são as armazenamentos padrão que serão usados se você não mapear um ou mais armazenamento à definição de cache.';
$string['default_request'] = 'Armazenamento padrão para requisição';
$string['default_session'] = 'Armazenamento padrão para sessão';
$string['defaultstoreactions'] = 'Os armazenamentos padrão não podem ser modificados';
$string['definition'] = 'Definição';
$string['definitionsummaries'] = 'Definições de cache conhecidas';
$string['delete'] = 'Apagar';
$string['deletelock'] = 'Excluir trava';
$string['deletelockconfirmation'] = 'Você tem certeza que deseja excluir a trava {$a}?';
$string['deletelockhasuses'] = 'Você não pode excluir esta instância de trava, porque ela está sendo usada por um ou mais armazenamentos.';
$string['deletelocksuccess'] = 'Trava excluída com sucesso.';
$string['deletestore'] = 'Apagar armazenamento';
$string['deletestoreconfirmation'] = 'Você tem certeza que quer apagar o armazenamento "{$a}"?';
$string['deletestorehasmappings'] = 'Você não pode apagar armazenagens que tem mapeamento. Por favor apague todos os mapeamentos antes de apagar a armazenagem.';
$string['deletestoresuccess'] = 'Armazenagem de cache apagada com sucesso';
$string['editdefinitionmappings'] = 'Definição do mapeamento de armazenagem {$a}';
$string['editdefinitionsharing'] = 'Editar compartilhamento de definição para {$a}';
$string['editmappings'] = 'Editar mapeamento';
$string['editsharing'] = 'Edite compartilhamento';
$string['editstore'] = 'Editar armazenamento';
$string['editstoresuccess'] = 'Armazenamento de cache editado com sucesso.';
$string['ex_configcannotsave'] = 'Não foi possível salvar a configuração de cache no arquivo.';
$string['ex_nodefaultlock'] = 'Não foi possível encontrar instância padrão de trava.';
$string['ex_unabletolock'] = 'Não foi possível obter uma trava para o cache.';
$string['ex_unmetstorerequirements'] = 'Você está impossibilitado de usar esta armazenagem no momento presente. Consulte a documentação para determinar os requisitos.';
$string['gethit'] = 'Get - Hit';
$string['getmiss'] = 'Get - Miss';
$string['inadequatestoreformapping'] = 'Este armazenamento não cumpre os requisitos para todas as definições conhecidas. As definições para que este armazenamento é inadequada, será dado o armazenamento padrão original, em vez do armazenamento selecionado.';
$string['invalidlock'] = 'Trava inválida';
$string['invalidplugin'] = 'Plugin inválido';
$string['invalidstore'] = 'Armazenagem de cache fornecida inválida';
$string['localstorenotification'] = 'Esse cache pode ser mapeado de forma segura a um armazenamento que é local para cada webserver';
$string['lockdefault'] = 'Padrão';
$string['locking'] = 'Travamento (locking)';
$string['locking_help'] = 'O travamento é um mecanismo que restringe o acesso aos dados em cache para um processo de cada vez, evitando que os dados sejam sobrescritos. O método de travamento determina como a tava é obtida e testada.';
$string['lockname'] = 'Nome';
$string['locknamedesc'] = 'O nome deve ser único e só pode consistir dos personagens: a-zA-Z_';
$string['locknamenotunique'] = 'O nome que você selecionou não é único. Por favor selecione um nome único.';
$string['locksummary'] = 'Resumo de instâncias de travamento de cache';
$string['locktype'] = 'Tipo';
$string['lockuses'] = 'Usos';
$string['mappingdefault'] = '(Padrão)';
$string['mappingfinal'] = 'Armazenamento final';
$string['mappingprimary'] = 'Armazenamento principal';
$string['mappings'] = 'Mapeamentos de armazenamentos';
$string['mode'] = 'Modo';
$string['mode_1'] = 'Aplicação';
$string['mode_2'] = 'Sessão';
$string['mode_4'] = 'Requisição';
$string['modes'] = 'Modos';
$string['nativelocking'] = 'Este plugin trata seu próprio travamento.';
$string['none'] = 'Nenhum';
$string['plugin'] = 'Plugin';
$string['pluginsummaries'] = 'Armazenamentos de cache instalados';
$string['purge'] = 'Limpar';
$string['purgedefinitionsuccess'] = 'A definição solicitada foi limpa com sucesso.';
$string['purgestoresuccess'] = 'O armazenamento foi limpo com sucesso.';
$string['requestcount'] = 'Testar com {$a} requisições';
$string['rescandefinitions'] = 'Re-escanear definições';
$string['result'] = 'Resultado';
$string['set'] = 'Conjunto';
$string['sharedstorenotification'] = 'Esse cache deve ser mapeado para um armazenamento que é compartilhado com todos os webservers';
$string['sharing'] = 'Compartilhando';
$string['sharing_all'] = 'Todos.';
$string['sharing_help'] = 'Isso permite que você para determinar como os dados de cache pode ser compartilhado se você tiver uma configuração de cluster, ou se você tiver vários sites todos configurados com a mesma armazenagem e quiser compartilhar os dados. Esta é uma configuração avançada, por favor certifique-se de compreender o seu propósito antes de modificá-lo.';
$string['sharing_input'] = 'Chave Personalizada (indicados abaixo)';
$string['sharingrequired'] = 'Você deve selecionar pelo menos uma opção de compartilhamento.';
$string['sharingselected_all'] = 'Todos';
$string['sharingselected_input'] = 'Chave personalizada';
$string['sharingselected_siteid'] = 'Identificador do site';
$string['sharingselected_version'] = 'Versão';
$string['sharing_siteid'] = 'Sites com o mesmo ID de local.';
$string['sharing_version'] = 'Sites rodando a mesma versão.';
$string['storeconfiguration'] = 'Configuração do armazenamento';
$string['store_default_application'] = 'Armazenamento padrão para caches de aplicação';
$string['store_default_request'] = 'Armazenamento estático padrão para caches de requisição';
$string['store_default_session'] = 'Armazenamento padrão para caches de seção';
$string['storename'] = 'Nome do armazenamento';
$string['storenamealreadyused'] = 'Você deve escolher um nome exclusivo para este armazenamento.';
$string['storename_help'] = 'Isso define o nome da armazenagem. Ele é utilizado para identificar o armazenamento no interior do sistema e pode consistir somente de az 0-9 _-e espaços. Ele também deve ser único. Se você tentar usar um nome que já foi usado, você receberá um erro.';
$string['storenameinvalid'] = 'Nome da armazenagem inválido. Você só pode usar az AZ 0-9-_ e espaços.';
$string['storenotready'] = 'Armazenamento não está pronto';
$string['storeperformance'] = 'Guardar relatório de desempenho da armazenamento - {$a} pedidos únicos por operação.';
$string['storeready'] = 'Pronto';
$string['storerequiresattention'] = 'Requer atenção.';
$string['storerequiresattention_help'] = 'Esta instância de armazenagem não está pronta para ser usada, mas tem mapeamentos. Corrigir esse problema vai melhorar o desempenho do sistema. Por favor, verifique se a armazenagem está pronta para ser utilizado e que todos os requisitos PHP são cumpridos.';
$string['storeresults_application'] = 'Armazena requisições quando usado como um cache da aplicação.';
$string['storeresults_request'] = 'Armazena requisições quando usado como um cache de requisição.';
$string['storeresults_session'] = 'Armazena requisições quando usado como um cache de sessão.';
$string['stores'] = 'Armazenamentos';
$string['storesummaries'] = 'Instâncias de armazenamentos configuradas';
$string['supports'] = 'Suporta';
$string['supports_dataguarantee'] = 'garantia de dados';
$string['supports_keyawareness'] = 'percepção de chave';
$string['supports_multipleidentifiers'] = 'múltiplos identificadores';
$string['supports_nativelocking'] = 'travamento';
$string['supports_nativettl'] = 'ttl';
$string['supports_searchable'] = 'buscar por chave';
$string['tested'] = 'Testado';
$string['testperformance'] = 'Testar performance';
$string['unsupportedmode'] = 'Modo não suportado';
$string['untestable'] = 'Impossível testar';
$string['userinputsharingkey'] = 'Chave personalizada para compartilhamento';
$string['userinputsharingkey_help'] = 'Digite sua própria chave privada aqui. Quando você configurar outras armazenagens em outros sites que você deseja compartilhar dados com certifique-se de definir a mesma chave exata lá.';
