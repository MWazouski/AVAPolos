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
 * Strings for component 'tool_httpsreplace', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_httpsreplace
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Concluído';
$string['count'] = 'Número de itens de conteúdo incorporados';
$string['disclaimer'] = 'Entendo os riscos desta operação';
$string['doclink'] = 'Ferramenta de conversão HTTPS';
$string['doit'] = 'Realizar conversão';
$string['domain'] = 'Domínio com problema';
$string['domainexplain'] = 'Quando um site é movido de HTTP para HTTPS, todo conteúdo incorporado HTTP deixará de funcionar. Esta ferramenta permite que você converta automaticamente o conteúdo HTTP para o HTTPS.

Antes de realizar a conversão, o conteúdo será examinado para encontrar qualquer URL que possa não funcionar após a conversão. Você pode querer verificar se há HTTPS disponível ou encontrar recursos alternativos.';
$string['domainexplainhelp'] = 'Esses domínios são encontrados em seu conteúdo, mas não parecem oferecer suporte a conteúdo HTTPS. Depois de mudar para HTTPS, o conteúdo incluído nesses sites não será mais exibido no Moodle para usuários com navegadores modernos seguros. É possível que esses sites estejam temporariamente ou permanentemente indisponíveis e não funcionem com nenhuma das configurações de segurança. Continue apenas depois de analisar esses resultados e determinar se esse conteúdo hospedado externamente não é essencial. Nota: Este conteúdo não funcionaria mais ao mudar para HTTPS de qualquer maneira.';
$string['httpwarning'] = 'Esta instância ainda está em execução no HTTP. Você ainda pode executar esta ferramenta e o conteúdo externo será alterado para HTTPS, mas o conteúdo interno permanecerá no HTTP. Você precisará executar este script novamente depois de mudar para HTTPS para converter o conteúdo interno.';
$string['notimplemented'] = 'Desculpe, esse recurso não foi implementado no driver do banco de dados.';
$string['oktoprocede'] = 'A verificação não encontrou problemas com seu conteúdo. Você pode atualizar qualquer conteúdo HTTP para usar o HTTPS.';
$string['pageheader'] = 'Atualize URLs de conteúdo externo para HTTPS';
$string['pluginname'] = 'Ferramenta de conversão HTTPS';
$string['privacy:metadata'] = 'o plugin da ferramenta de conversão HTTPS não armazena nenhum dado pessoal.';
$string['replacing'] = 'Substituindo o conteúdo HTTP por HTTPS ...';
$string['searching'] = 'Buscando {$a}';
$string['takeabackupwarning'] = 'Aviso: depois de executar esta ferramenta, as modificações não podem ser revertidas. Recomendamos que seja feito um backup antes de prosseguir, pois existe um pequeno risco de substituição de conteúdo incorreto.';
$string['toolintro'] = 'Se você está planejando a conversão do seu site para o HTTPS, você pode utilizar a <a href="{$a}"> ferramenta de conversão HTTPS </a> para converter seu conteúdo incorporado em HTTPS.';
