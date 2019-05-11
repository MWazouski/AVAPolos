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
 * Strings for component 'repository_googledocs', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Id do cliente';
$string['configplugin'] = 'Configure o plugin do Google Drive';
$string['external'] = 'Externo (apenas os links são armazenados no Moodle)';
$string['googledocs:view'] = 'Visualize o repositório do Google Drive';
$string['internal'] = 'Interno (os arquivos são armazenados no Moodle)';
$string['issuer'] = 'Serviço OAuth';
$string['issuer_help'] = 'Selecione o serviço OAuth 2 configurado para conversar com a API do Google Drive. Se o serviço ainda não existe, você precisará criá-lo.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link para configuração de serviços OAuth 2"> Configuração de serviços OAuth 2</a>';
$string['oauthinfo'] = '<p>Para utilizar este plugin, você deve registrar seu site com o Google, conforme descrito na documentação <a href="{$a->docsurl} "> Configuração do Google OAuth 2.0</a>. </ p> <p > Como parte do processo de registro, você precisará inserir a seguinte URL como "URIs de redirecionamento autorizado": </ p><p>{$a->callbackurl}</ p> <p> Uma vez registrado, você receberá um ID de cliente e um segredo que podem ser utilizados para configurar todos os plugins do Google Drive e do Picasa.</ p><p> Observe também que você terá que habilitar o serviço \'Drive API\'. </ p>';
$string['pluginname'] = 'Google Drive';
$string['searchfor'] = 'Buscar por {$a}';
$string['secret'] = 'Segredo';
$string['servicenotenabled'] = 'O acesso não foi configurado. Verifique se o serviço \'Drive API\' está ativado.';
$string['supportedreturntypes'] = 'Arquivos suportados';
