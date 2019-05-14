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
 * Strings for component 'enrol_self', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Inscrição está desabilitada ou inativa';
$string['canntenrolearly'] = 'Você não pode se inscrever ainda; a inscrição começa em {$a}.';
$string['canntenrollate'] = 'Você não pode se inscrever mais, pois a inscrição terminou em {$a}.';
$string['cohortnonmemberinfo'] = 'Apenas os membros do coorte \'{$a}\' podem se auto-inscrever';
$string['cohortonly'] = 'Apenas membros do coorte';
$string['cohortonly_help'] = 'Auto-inscrição pode ser restrito a membros de um grupo especificado somente. Note que a alteração dessa configuração não tem efeito sobre as inscrições existentes.';
$string['customwelcomemessage'] = 'Mensagem de boas vindas padrão';
$string['customwelcomemessage_help'] = 'Uma mensagem de boas-vindas personalizada pode ser adicionada como texto simples ou formato Moodle-auto, incluindo tags HTML e tags multi-lang.

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome do curso {$a->coursename}
* Link para a página de perfil do usuário {$a->profileurl}
* Email do usuário {$a->email}
* Nome do usuário {$a->fullname}';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos usuários durante a auto inscrição';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem inscrever-se apenas até esta data.';
$string['enrolenddaterror'] = 'A data de encerramento não pode ser anterior à data de início';
$string['enrolme'] = 'Inscreva-me';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Intervalo de tempo padrão no qual a inscrição é válida. Se for definido para zero, a duração de inscrição será ilimitado por padrão.';
$string['enrolperiod_help'] = 'Intervalo de tempo no qual a inscrição é válida, iniciando no momento em que o usuário realiza sua inscrição. Caso desabilitado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só podem inscrever-se apenas a partir desta data.';
$string['expiredaction'] = 'Ação ao término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário terminar. Por favor, observe que alguns dados e configurações do usuário são removidos do curso durante a desinscrição no curso.';
$string['expirymessageenrolledbody'] = 'Caro {$a->user},

Esta é uma notificação de que sua inscrição no curso &quot;{$a->course}&quot; expira em {$a->timeend}.

Se precisar de ajuda, entre em contato {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração de auto-inscrição';
$string['expirymessageenrollerbody'] = 'Auto-inscrição no curso \'{$a->course} &quot; irá expirar en {$a->threshold} para os seguintes usuários:

{$a->users}

Para estender a sua inscrição, acesse {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de vencimento de auto-inscrição';
$string['groupkey'] = 'Usar chaves de inscrição de grupo';
$string['groupkey_desc'] = 'Usar chaves de inscrição de grupo por padrão.';
$string['groupkey_help'] = 'Além de restringir acesso ao curso apenas para aqueles que conhecem a chave, o uso de uma chave de inscrição de grupo faz com que os usuários sejam automaticamente incluídos ao grupo quando eles se inscrevem no curso.

Nota: Uma chave de inscrição para o curso deve ser especificada nas definições de auto de inscrição, bem como chaves de inscrição em grupo as configurações do grupo.';
$string['keyholder'] = 'Você deve ter recebido esta chave de inscrição a partir de:';
$string['longtimenosee'] = 'Cancelar inscrição de usuário inativo';
$string['longtimenosee_help'] = 'Caso um usuário não tenha acessado um curso por um longo período de tempo, então eles terão sua inscrição automaticamente cancelada. Este parâmetro especifica o limite de tempo';
$string['maxenrolled'] = 'Máximo de usuários inscritos';
$string['maxenrolled_help'] = 'Especifica o número máximo de usuários que podem realizar  auto - inscrição. 0 significa sem limite.';
$string['maxenrolledreached'] = 'Número máximo de usuários com permissão para auto-inscrição já foi alcançado.';
$string['messageprovider:expiry_notification'] = 'Notificações de expira';
$string['newenrols'] = 'Permitir novas inscrições';
$string['newenrols_desc'] = 'Permitir que os usuários se inscrevam em novos cursos pro padrão';
$string['newenrols_help'] = 'Esta configuração determina se um usuário pode se inscrever neste curso.';
$string['nopassword'] = 'Nenhuma chave de inscrição é necessária.';
$string['password'] = 'Chave de inscrição';
$string['password_help'] = 'Uma chave de inscrição habilita para que o acesso ao curso seja restrito apenas para quem possua a chave.

Caso este campo esteja vazio, qualquer usuário poderá se inscrever no curso.

Caso uma chave de inscrição seja especificada, em qualquer tentativa de inscrição será solicitada a informação da chave. Note que o usuário apenas precisa informar a chave de inscrição apenas UMA VEZ, no momento em qyue realizam a inscrição.';
$string['passwordinvalid'] = 'Chave de inscrição incorreta, por favor tente novamente';
$string['passwordinvalidhint'] = 'Código de inscrição errado, por favor tente novamente<br /> (uma dica - começa com \'{$a}\')';
$string['pluginname'] = 'Autoinscrição';
$string['pluginname_desc'] = 'O plugin de auto inscrição permite que usuários escolham em quais cursos querem participar. Os cursos devem estar protegidos por uma chave de inscrição. Internamente a inscrição é realizada através do plugin de inscrição manual que deve estar habilitado no mesmo curso.';
$string['requirepassword'] = 'Exigir chave de inscrição';
$string['requirepassword_desc'] = 'Requer chave de inscrição em novos cursos e previne remoção de chaves de inscrição de cursos existentes.';
$string['role'] = 'Papel atribuído por padrão';
$string['self:config'] = 'Configurar instâncias de auto-inscrição';
$string['self:holdkey'] = 'Aparecer como titular da chave de auto-inscrição';
$string['self:manage'] = 'Gerenciar usuários inscritos';
$string['self:unenrol'] = 'Desinscrever usuários do curso';
$string['self:unenrolself'] = 'Desinscrever-se do curso';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de bem-vindos ao curso';
$string['sendcoursewelcomemessage_help'] = 'Quando um usuário se inscreve no curso, ele pode receber um e-mail com uma mensagem de boas-vindas. Por padrão o remetente do email é o professor. Se mais de um usuário tem esse papel no curso, o remetente do email será o primeiro usuário atribuído a este papel.';
$string['showhint'] = 'Exibir dica';
$string['showhint_desc'] = 'Exibir primeira letra da chave de acesso de visitantes.';
$string['status'] = 'Permitir inscrições existentes';
$string['status_desc'] = 'Ativar método de auto-inscrição em novos cursos';
$string['status_help'] = 'Se desativado, todas as auto-inscrições existentes são suspensas e novos usuários não podem se inscrever.';
$string['unenrol'] = 'Cancelar inscrição do usuário';
$string['unenrolselfconfirm'] = 'Você deseja realmente retirar sua matrícula do curso "{$a}"?';
$string['unenroluser'] = 'Deseja mesmo retirar a inscrição de "{$a->user}" do curso "{$a->course}" ?';
$string['usepasswordpolicy'] = 'Usar política de senha';
$string['usepasswordpolicy_desc'] = 'Utilizar política padrão para chaves de inscrição';
$string['welcometocourse'] = 'Bem-vindo ao curso {$a}';
$string['welcometocoursetext'] = 'Bem vindo ao curso {$a->coursename}!

A primeira coisa a fazer é editar o seu Perfil de Usuário do curso para que possamos saber mais sobre você:

{$a->profileurl}';
