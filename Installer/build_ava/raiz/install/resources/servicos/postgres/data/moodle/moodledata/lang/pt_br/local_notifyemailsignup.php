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
 * Strings for component 'local_notifyemailsignup', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   local_notifyemailsignup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['notifyemailsignupbody'] = 'Oi {$a->supportname},

Uma nova conta foi solicitada em \'{$a->sitename}\' usando os seguintes dados:

- endereço de email: {$a->signup_user_email}
- nome de usuário: {$a->signup_user_username}
- nome: {$a->signup_user_firstname}
- sobrenome: {$a->signup_user_lastname}

Cumprimentos do administrador de \'{$a->sitename}\',
{$a->signoff}';
$string['notifyemailsignupsubject'] = '{$a}: Notificação de nova inscrição na conta';
$string['pluginname'] = 'Notificar os administradores do site sobre novas inscrições via e-mail';
