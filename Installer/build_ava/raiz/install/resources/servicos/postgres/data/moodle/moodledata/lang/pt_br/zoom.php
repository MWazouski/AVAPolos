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
 * Strings for component 'zoom', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addtocalendar'] = 'Adicionar ao calendário';
$string['allmeetings'] = 'Todas as reuniões';
$string['alternative_hosts'] = 'Hosts Alternativos';
$string['alternative_hosts_help'] = 'A opção de host alternativo permite agendar reuniões, e designar outro usuário Pro na mesma conta, de modo que ele possa iniciar a reunião ou o webinar, se você não conseguir. Este usuário receberá um e-mail informando que foi adicionado como anfitrião alternativo, com um link para iniciar a reunião. Separe vários emails por vírgula (sem espaços).';
$string['apikey'] = 'Chave da API do Zoom';
$string['apisecret'] = 'Segredo da API do Zoom';
$string['apiurl'] = 'URL da API do Zoom';
$string['attentiveness_score'] = 'Pontuação de atenção*';
$string['attentiveness_score_help'] = '* A pontuação de atenção é reduzida quando um participante não tem foco no Zoom por mais de 30 segundos quando alguém está compartilhando uma tela.';
$string['audio_both'] = 'VoIP e Telefonia';
$string['audio_telephony'] = 'Apenas telefonia';
$string['audio_voip'] = 'Apenas VoIP';
$string['cachedef_sessions'] = 'Informações da solicitação do Zoom que obtêm o relatório do usuário';
$string['cachedef_zoomid'] = 'O ID do usuário do Zoom';
$string['clickjoin'] = 'Botão de entrada na reunião clicado';
$string['connectionfailed'] = 'A conexão falhou:';
$string['connectionok'] = 'A conexão está funcionando.';
$string['connectionstatus'] = 'Status da conexão';
$string['defaultsettings'] = 'Configurações padrão do Zoom';
$string['defaultsettings_help'] = 'Essas configurações definem os padrões para todas as novas reuniões e webinars do Zoom.';
$string['duration'] = 'Duração (em minutos)';
$string['endtime'] = 'Tempo de encerramento';
$string['err_duration_nonpositive'] = 'A duração deve ter valor positivo.';
$string['err_duration_too_long'] = 'A duração não pode exceder 150 horas.';
$string['err_long_timeframe'] = 'O intervalo de tempo solicitado é muito longo, mostrando os resultados do último mês no intervalo.';
$string['errorwebservice'] = 'Erro de serviço Web do Zoom: {$a}.';
$string['err_password'] = 'A senha pode conter apenas os seguintes caracteres: [a-z A-Z 0-9 @ - _ *]. Máximo de 10 caracteres.';
$string['err_start_time_past'] = 'A data de início não pode estar no passado.';
$string['export'] = 'Exportar';
$string['firstjoin'] = 'Quem pode entrar primeiro';
$string['firstjoin_desc'] = 'O mais cedo que um usuário pode entrar em uma reunião agendada (minutos antes do início).';
$string['getmeetingreports'] = 'Obter relatório da reunião do Zoom';
$string['googlecalendar'] = 'Calendário do Google';
$string['googleiconalt'] = 'Ícone do Google';
$string['invalid_status'] = 'Status inválido, verifique o banco de dados.';
$string['join'] = 'Entrar';
$string['joinbeforehost'] = 'Entrar na reunião antes do mediador';
$string['join_meeting'] = 'Entrar na reunião';
$string['jointime'] = 'Hora de entrada';
$string['leavetime'] = 'Hora de saída';
$string['licensesnumber'] = 'Número de licenças';
$string['login_api'] = 'API';
$string['login_facebook'] = 'Facebook';
$string['login_google'] = 'Google';
$string['login_sso'] = 'Login único';
$string['logintypes'] = 'Tipos de login';
$string['logintypesexplain'] = 'Selecione todos os tipos de login para pesquisa de e-mail do usuário. Segure a tecla CTRL para selecionar vários campos. (As opções estão listadas na ordem em que a pesquisa será efetuada)';
$string['login_zoom'] = 'Zoom';
$string['lowlicenses'] = 'Se o número de suas licenças exceder as necessárias, então quando você criar cada nova atividade por usuário, ela receberá uma licença PRO reduzindo o status de outro usuário. A opção é ativada quando o número de licenças PRO ativas é maior que 5.';
$string['meeting_finished'] = 'Encerrada';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente no zoom';
$string['meeting_not_started'] = 'Não foi iniciada';
$string['meetingoptions'] = 'Opção da reunião';
$string['meetingoptions_help'] = '* Ingressar antes do mediador * permite que os participantes entrem na reunião antes do mediador entrar ou quando o mediador não puder participar da reunião.';
$string['meeting_started'] = 'Em progresso';
$string['meeting_time'] = 'Hora de início';
$string['modulename'] = 'Reunião do Zoom';
$string['modulename_help'] = 'O Zoom é uma plataforma de videoconferência e webconferência que oferece aos usuários autorizados a capacidade de mediar reuniões online.';
$string['modulenameplural'] = 'Reuniões do Zoom';
$string['newmeetings'] = 'Novas Reuniões';
$string['nomeetinginstances'] = 'Nenhuma sessão encontrada para esta reunião.';
$string['noparticipants'] = 'Nenhum participante encontrado para esta sessão neste momento.';
$string['nosessions'] = 'Nenhuma sessão encontrada para o intervalo especificado.';
$string['nozooms'] = 'Sem reuniões';
$string['off'] = 'Desligado';
$string['oldmeetings'] = 'Reuniões Encerradas';
$string['on'] = 'Ligado';
$string['option_audio'] = 'Opções de áudio';
$string['option_host_video'] = 'Vídeo do mediador';
$string['option_jbh'] = 'Permitir a entrada antes do mediador';
$string['option_participants_video'] = 'Vídeo dos participantes';
$string['outlook'] = 'Observação';
$string['participants'] = 'Participantes';
$string['password'] = 'Senha';
$string['passwordprotected'] = 'Protegido por Senha';
$string['pluginadministration'] = 'Gerenciar reunião do Zoom';
$string['pluginname'] = 'Reunião do Zoom';
$string['privacy:metadata:mdl_zoom_meeting_details'] = 'A tabela do banco de dados que armazena informações sobre cada instância de reunião.';
$string['privacy:metadata:mdl_zoom_meeting_details:topic'] = 'O nome da reunião que o usuário participou.';
$string['privacy:metadata:mdl_zoom_meeting_participants'] = 'A tabela do banco de dados que armazena informações sobre os participantes de reuniões.';
$string['privacy:metadata:mdl_zoom_meeting_participants:attentiveness_score'] = 'Pontuação da atenção do participante';
$string['privacy:metadata:mdl_zoom_meeting_participants:duration'] = 'Quanto tempo o participante estave na reunião';
$string['privacy:metadata:mdl_zoom_meeting_participants:join_time'] = 'O horário em que o participante ingressou na reunião';
$string['privacy:metadata:mdl_zoom_meeting_participants:leave_time'] = 'A hora em que o participante saiu da reunião';
$string['privacy:metadata:mdl_zoom_meeting_participants:name'] = 'O nome do participante';
$string['privacy:metadata:mdl_zoom_meeting_participants:user_email'] = 'O email do participante';
$string['recurringmeeting'] = 'Recorrente';
$string['recurringmeeting_help'] = 'Não tem data de encerramento';
$string['recurringmeetinglong'] = 'Reunião recorrente (reunião sem data ou hora de encerramento)';
$string['redefinelicenses'] = 'Redefinir licenças';
$string['report'] = 'Relatórios';
$string['reportapicalls'] = 'As chamadas da API de relatórios se esgotaram';
$string['requirepassword'] = 'Exigir senha para reunião';
$string['resetapicalls'] = 'Redefinir o número de chamadas de API disponíveis';
$string['sessions'] = 'Sessões';
$string['start'] = 'Começar';
$string['starthostjoins'] = 'Começar o vídeo quando o mediador entrar';
$string['start_meeting'] = 'Começar reunião';
$string['startpartjoins'] = 'Começar o vídeo quando o participante entrar';
$string['starttime'] = 'Hora de início';
$string['start_time'] = 'Quando';
$string['status'] = 'Status';
$string['title'] = 'Título';
$string['topic'] = 'Tópico';
$string['unavailable'] = 'Não é possível participar neste momento';
$string['updatemeetings'] = 'Atualizar as configurações de reunião do Zoom';
$string['usepersonalmeeting'] = 'Use o ID de reunião pessoal {$a}';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Este módulo já foi definido como uma reunião, não como um webinar. Você não pode alternar essa configuração depois de criar a reunião.</b></p>';
$string['webinar_already_true'] = '<p><b>Este módulo já foi definido como um webinar, e não uma reunião. Você não pode alternar essa configuração depois de criar o webinar.</b></p>';
$string['webinar_help'] = 'Esta opção só está disponível para contas do Zoom pré-autorizadas.';
$string['windowsiconalt'] = 'Ícone do Windows';
$string['zoom:addinstance'] = 'Adicionar uma nova reunião do Zoom';
$string['zoomerr'] = 'Ocorreu um erro com o Zoom.';
$string['zoomerr_apikey_missing'] = 'Chave da API do Zoom não encontrada';
$string['zoomerr_apisecret_missing'] = 'Segredo da API do Zoom não encontrado';
$string['zoomerr_id_missing'] = 'Você deve especificar um ID do(a) course_module ou um ID de instância';
$string['zoomerr_licensescount_missing'] = 'Ajuste máximo do Zoom encontrado, mas a configuração de licença da conta não foi encontrada';
$string['zoomerr_meetingnotfound'] = 'Esta reunião não pode ser encontrada no Zoom. Você pode <a href="{$a->recreate}">recriá-la aqui</a> ou <a href="{$a->delete}">excluí-la completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunião não pode ser encontrada no Zoom. Por favor entre em contato com o mediador da reunião se você tiver dúvidas.';
$string['zoomerr_usernotfound'] = 'Não foi possível encontrar sua conta no Zoom. Se você estiver usando o Zoom pela primeira vez, você deverá ativar a sua conta Zoom ao fazer o login em <a href="{$a}" target="_blank">{$a}</a>. Depois de ativar sua a conta do Zoom, recarregue esta página e continue configurando sua reunião. Além disso, verifique se o seu e-mail no Zoom corresponde ao seu e-mail neste sistema.';
$string['zoomurl'] = 'URL da página inicial do Zoom';
$string['zoom:view'] = 'Visualizar as reuniões do Zoom';
