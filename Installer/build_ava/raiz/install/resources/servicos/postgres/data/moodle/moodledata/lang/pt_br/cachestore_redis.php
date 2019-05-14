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
 * Strings for component 'cachestore_redis', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   cachestore_redis
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['password'] = 'Senha';
$string['password_help'] = 'Define a senha do servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefixo de chave';
$string['prefix_help'] = 'Este prefixo é usado por todos os nomes de chave no servidor Redis.
* Se você tem só uma instância Moodle no servidor, você pode deixar o valor padrão.
* Devido às restrições de comprimento de chave, é permitido um máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefixo inválido. Você pode usar somente a-z, A-Z, 0-9, _.';
$string['serializer_igbinary'] = 'Serializador igbinary.';
$string['serializer_php'] = 'Serializador PHP padrão.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Define o nome ou endereço IP do servidor Redis para uso.';
$string['test_password'] = 'Teste da senha do servidor';
$string['test_password_desc'] = 'Teste da senha do servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador para uso em testes.';
$string['test_server'] = 'Servidor de testes';
$string['test_server_desc'] = 'Servidor Redis para uso em testes.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica o serializador a ser usado para serialização.
Os serializadores válidos são Redis::SERIALIZER_PHP ou Redis::SERIALIZER_IGBINARY.
O último é suportado somente quando o phpredis está configurado com a opção --enable-redis-igbinary, e a extensão igbinary está carregada.';
