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
 * Strings for component 'cachestore_apcu', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   cachestore_apcu
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Lembre-se de que APCu é uma escolha adequada apenas para sites de nó único ou se o cache pode ser armazenado localmente.
Para mais informação, veja a <a href="{$a}">documentação de cache de usuário APC</a>.';
$string['notice'] = 'Aviso';
$string['pluginname'] = 'Cache de usuário APC (APCu)';
$string['prefix'] = 'Prefixo';
$string['prefix_help'] = 'O prefixo acima é usado por todas as chaves armazenadas nesta instância de armazenamento APC. Por padrão o prefixo do banco de dados é usado.';
$string['prefixinvalid'] = 'O prefixo que você selecionou é inválido. Você somente pode usar a-z, A-Z, 0-9, _.';
$string['prefixnotunique'] = 'O prefixo que você selecionou não é único. Por favor escolha um prefixo único.';
$string['testperformance'] = 'Teste de desempenho';
$string['testperformance_desc'] = 'Se habilitado, o desempenho APCu será incluído na visualização da página Performance de teste. Não é recomendado habilitar este recurso em um site de produção';
