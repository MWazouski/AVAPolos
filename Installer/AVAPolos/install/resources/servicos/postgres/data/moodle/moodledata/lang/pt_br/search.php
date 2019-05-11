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
 * Strings for component 'search', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Pesquisa Avançada';
$string['all'] = 'Todos';
$string['allareas'] = 'Todas as áreas';
$string['allcourses'] = 'Todos os cursos';
$string['allusers'] = 'Todos os usuários';
$string['author'] = 'Autor';
$string['authorname'] = 'Nome do autor';
$string['back'] = 'Voltar';
$string['beadmin'] = 'Você precisa ter perfil de administrador para usar esta página.';
$string['checkdb'] = 'Verifique o banco de dados';
$string['checkdbadvice'] = 'Verifique se seu banco de dados tem algum problema.';
$string['checkdir'] = 'Verifique o diretório';
$string['checkdiradvice'] = 'Verifique se o diretório de dados existe e tem permissão para escrita';
$string['commenton'] = 'Comentar sobre';
$string['confirm_delete'] = 'Tem certeza de que deseja excluir o índice de {$a}? Até que a área de pesquisa seja indexada, os usuários não obterão resultados de pesquisa dessa área.';
$string['confirm_deleteall'] = 'Tem certeza de que deseja excluir todo o conteúdo indexado agora? Até que o site seja indexado novamente, os usuários não obterão resultados de pesquisa.';
$string['confirm_reindexall'] = 'Tem certeza de que deseja reindexar todo o conteúdo do site agora? Se o seu site contiver uma grande quantidade de conteúdo, isso levará um longo tempo e os usuários não poderão obter resultados completos da pesquisa até que sejam concluídos.';
$string['createanindex'] = 'criar um índice';
$string['createdon'] = 'Criado em';
$string['database'] = 'Banco de dados';
$string['databasestate'] = 'Indexando o banco de dados';
$string['datadirectory'] = 'Diretório de dados';
$string['deleteindex'] = 'Excluir índice {$a}';
$string['deletionsinindex'] = 'Remoções no índice';
$string['docmodifiedon'] = 'Última modificação em {$a}';
$string['doctype'] = 'Doctype';
$string['doctypenotsupported'] = 'O tipo de documento especificado ainda não é suportado';
$string['documents'] = 'documentos';
$string['documentsfor'] = 'Documentos para';
$string['documentsindatabase'] = 'Documentos no banco de dados';
$string['documentsinindex'] = 'Documentos no índice';
$string['duration'] = 'Duração';
$string['emptydatabaseerror'] = 'A tabela do banco de dados não existe ou não contém registros indexados.';
$string['enginenotfound'] = 'Mecanismo {$a} não encontrado.';
$string['enginenotinstalled'] = 'Mecanismo {$a} não está instalado.';
$string['enginenotselected'] = 'Você não escolheu nenhum mecanismo de busca.';
$string['engineserverstatus'] = 'O mecanismo de busca não está disponível. Por favor, entre em contato com o administrador.';
$string['enteryoursearchquery'] = 'Inserir termos de pesquisa';
$string['errorareanotavailable'] = '{$a} área de busca não está disponível.';
$string['error_indexing'] = 'Ocorreu um erro durante a indexação';
$string['errors'] = 'Erros';
$string['everywhere'] = 'Em toda parte você pode acessar';
$string['filesinindexdirectory'] = 'Arquivos no diretório índice';
$string['filterheader'] = 'Filtro';
$string['fromtime'] = 'Modificado após';
$string['globalsearch'] = 'Busca global';
$string['globalsearchdisabled'] = 'Pesquisa global não está habilitada.';
$string['gradualreindex'] = 'Reindexação gradual {$a}';
$string['gradualreindex_confirm'] = 'Tem certeza de que deseja reindexar {$a}? Isso pode levar algum tempo, embora os dados existentes permaneçam disponíveis durante a reindexação.';
$string['gradualreindex_queued'] = 'Reindexação foi solicitada para {$a->name} ({$a->count} contextos). Essa indexação será executada pela tarefa agendada "Indexação de pesquisa global".';
$string['incourse'] = 'No curso {$a}';
$string['index'] = 'Índice';
$string['indexwhendisabledshortnotice'] = 'A indexação não está disponível.';
$string['invalidindexerror'] = 'O diretório do índice ou contém um índice inválido ou está vazio.';
$string['ittook'] = 'Durou';
$string['matchingfile'] = 'Correspondente do arquivo <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Correspondente do arquivo:';
$string['next'] = 'Próxima';
$string['noindexmessage'] = 'Admin: Parece não haver índice de pesquisa. Por favor';
$string['noresults'] = 'Sem resultados';
$string['normalsearch'] = 'Pesquisa normal';
$string['notitle'] = 'Sem título';
$string['openedon'] = 'Aberto em';
$string['optimize'] = 'Otimizar';
$string['order'] = 'Ordenar resultado';
$string['order_location'] = 'Priorize os resultados relacionados a {$a}';
$string['order_relevance'] = 'Primeiro os resultados mais relevantes';
$string['priority'] = 'Prioridade';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Reindexação';
$string['privacy:metadata'] = 'O subsistema de pesquisa não armazena nenhum dado pessoal.';
$string['progress'] = 'Progresso';
$string['queryerror'] = 'A consulta fornecida não pôde ser analisada pelo mecanismo de busca: {$a}';
$string['queueheading'] = 'Fila de indexação adicional (itens {$a})';
$string['resultsreturnedfor'] = 'resultados retornados para';
$string['runindexer'] = 'Rodar indexador (real)';
$string['runindexertest'] = 'Rodar indexador de teste';
$string['schemanotupdated'] = 'O esquema de pesquisa está desatualizado.';
$string['schemaversionunknown'] = 'O mecanismo de pesquisa não sabe sobre a versão atual do esquema.';
$string['score'] = 'Pontuação';
$string['search'] = 'Pesquisar';
$string['searcharea'] = 'Área de busca';
$string['searching'] = 'Pesquisando em....';
$string['search:message_received'] = 'Mensagens recebidas';
$string['search:message_sent'] = 'Mensagens enviadas';
$string['search:mycourse'] = 'Meus cursos';
$string['searchnotpermitted'] = 'Você não tem permissão para fazer uma busca';
$string['search:section'] = 'Seções do curso';
$string['searchsetupdescription'] = 'Os passos seguintes ajudam você a configurar a busca global do Moodle';
$string['search:user'] = 'Usuários';
$string['searchwithin'] = 'Pesquisar dentro';
$string['seconds'] = 'segundos';
$string['solutions'] = 'Soluções';
$string['statistics'] = 'Estatísticas';
$string['step'] = 'Etapa';
$string['thesewordshelpimproverank'] = 'Estas palavras ajudam a melhorar a posição';
$string['thesewordsmustappear'] = 'Estas palavras devem aparecer';
$string['thesewordsmustnotappear'] = 'Estas palavras não devem aparecer';
$string['title'] = 'Título';
$string['tofetchtheseresults'] = 'para atingir estes resultados';
$string['totalsize'] = 'Tamanho Total';
$string['totime'] = 'Modificado antes';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'A indexação não foi concluída com sucesso, por favor tente outra vez.';
$string['versiontoolow'] = 'Sinto muito, a pesquisa global requer PHP 5.0.0 ou mais recente';
$string['viewresultincontext'] = 'Ver este resultado no contexto';
$string['wordsintitle'] = 'Palavras no título';
