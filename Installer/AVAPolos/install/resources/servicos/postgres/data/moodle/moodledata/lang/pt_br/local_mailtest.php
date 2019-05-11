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
 * Strings for component 'local_mailtest', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   local_mailtest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Sempre mostre o log das comunicações com o servidor de correio, mesmo que não haja erros.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/"> TNG Consulting Inc. </a>';
$string['errorcommunications'] = 'O Moodle não conseguiu se comunicar com o seu servidor de correio.</p><p><strong> Recomendação:</strong></p> <p>Comece verificando seu Moodle <a href ="{$a}" target = "_blank">Configurações de correio SMTP</a>.</p><p>Se elas parecem corretas, verifique as configurações do servidor SMTP e/ou firewall para garantir que eles estejam configurados para aceitar conexões SMTP do seu servidor web Moodle e do seu endereço de e-mail sem resposta. Para obter mais ajuda, consulte a seção de FAQ na documentação.';
$string['errorsend'] = 'A mensagem de e-mail de teste não pôde ser entregue ao servidor de correio.</p><p><strong> Recomendação: </strong> </p><p>Verifique seu Moodle <a href="{$a}" target="_blank">Configurações de email</a>. Para obter mais ajuda, consulte a seção de FAQ na documentação.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Do endereço de e-mail';
$string['heading'] = 'Teste de configuração de e-mail';
$string['message'] = '<p>Esta é uma mensagem de teste. Desconsidere.</p>
<p>Se você recebeu este e-mail, significa que você obteve  sucesso com as configurações de e-mail do seu site Moodle.</p>
<hr><p><strong>Informações adicionais do usuário </strong></p>
<ul>
<li><strong>Status do registro: </strong> {$a->regstatus} </li>
<li><strong>Idioma preferido: </strong> {$a->lang} </li>
<li><strong>Navegador da web do usuário: </strong> {$a->browser} </li>
<li><strong>Mensagem enviada de: </strong> {$a->referer} </li>
<li><strong>Versão Moodle: </strong> {$a->release} </li>
<li><strong>Endereço IP do usuário: </strong> {$a->ip} </li>
</ul>';
$string['notregistered'] = 'Não registrado ou não logado.';
$string['phpmethod'] = 'Método padrão PHP';
$string['pluginname'] = 'Teste de e-mail';
$string['pluginname_help'] = 'O teste de e-mail irá verificar as configurações de e-mail para este site do Moodle, enviando uma mensagem de e-mail de teste para o endereço que você especificou. Somente para administradores de sites.';
$string['primaryadminemail'] = 'E-mail de administrador primário';
$string['recipientisrequired'] = 'Você deve especificar o endereço de e-mail do recipiente.';
$string['registered'] = 'Usuário registrado ({$a}).';
$string['sendmethod'] = 'Método de envio de e-mail';
$string['sendtest'] = 'Enviar uma mensagem de teste';
$string['sentmail'] = 'O Moodle entregou com sucesso a mensagem de teste ao servidor de correio SMTP.';
$string['sentmailphp'] = 'A mensagem de teste do Moodle foi aceita com sucesso pelo Correio do PHP.';
$string['smtpmethod'] = 'Hosts SMTP: {$a}';
$string['toemail'] = 'Para o endereço de e-mail';
$string['youremail'] = 'Seu endereço de e-mail';
