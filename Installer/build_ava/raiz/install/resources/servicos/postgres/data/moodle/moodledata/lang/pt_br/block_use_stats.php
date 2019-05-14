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
 * Strings for component 'block_use_stats', language 'pt_br', branch 'MOODLE_34_STABLE'
 *
 * @package   block_use_stats
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetrackingparams'] = 'Ativar configurações de rastreamento';
$string['activities'] = 'Atividades';
$string['allowrule'] = 'Permitir o envio ao combinar a regra';
$string['allusers'] = 'Todos os usuários';
$string['blockdisplay'] = 'Sintonização de exibição em bloco';
$string['blockname'] = 'Usar estatísticas';
$string['byname'] = 'Por nome';
$string['bytimedesc'] = 'Por hora';
$string['cachedef_aggregate'] = 'Agregados';
$string['capabilitycontrol'] = 'Capacidade';
$string['configbacktrackmode'] = 'Retornar ao modo de trilha';
$string['configbacktrackmode_desc'] = 'Seleciona como os blocos escolhem quando são tempos de retrocesso.';
$string['configbacktracksource'] = 'Retornar à fonte de trilha';
$string['configbacktracksource_desc'] = 'Seleciona quem informa aos blocos a referência do tempo de retrocesso.';
$string['configcalendarskin'] = 'Aparência do calendário';
$string['configcalendarskin_desc'] = 'Modifica a aparência do calendário.';
$string['configcustomtagselect'] = 'Selecione para etiqueta personalizada';
$string['configcustomtagselect_desc'] = 'Essa consulta precisa retornar um único resultado por linha de log. Esse resultado irá alimentar a coluna de etiqueta personalizada {$a}.';
$string['configdisplayactivitytimeonly'] = 'Escolha o tempo de referência para exibir';
$string['configdisplayactivitytimeonly_desc'] = 'Você pode escolher qual é o tempo de aprendizagem de referência para exibir';
$string['configdisplayothertime'] = 'Exibir tempo "Fora de curso"';
$string['configdisplayothertime_desc'] = 'É definido, exibe a linha de curso de tempo "Fora de curso"';
$string['configenablecompilecube'] = 'Habilitar compilação de cubo';
$string['configenablecompilecube_desc'] = 'Quando ativado, as dimensões adicionais são calculadas usando seleções definidas';
$string['configfilterdisplayunder'] = 'Filtrar exibição sob';
$string['configfilterdisplayunder_desc'] = 'Se não for nulo, somente os tempos do curso acima do limite dado (em segundos) serão exibidos no bloco';
$string['configfromwhen'] = 'Desde';
$string['configfromwhen_desc'] = 'Período de compilação (em dias até hoje)';
$string['configkeepalivecontrol'] = 'Método de controle';
$string['configkeepalivecontrol_desc'] = 'Dados internos usados para controlar a capacidade de envio';
$string['configkeepalivecontrolvalue'] = 'Nome do item de controle';
$string['configkeepalivecontrolvalue_desc'] = 'Irá combinar a regra se a capacidade for permitida ou se o campo de perfil não tiver valor nulo. A configuração padrão exclui os administradores.';
$string['configkeepalivedelay'] = 'Período de manutenção da sessão';
$string['configkeepalivedelay_desc'] = 'Atraso entre dois sinais de log keepalive para usuários conectados (segundos). Mantenha o máximo possível para diminuir a carga do servidor quando muitos usuários estiverem conectados, mantendo as pistas de rastreamento consistentes.';
$string['configkeepaliverule'] = 'Enviar keepalive se';
$string['configkeepaliverule_desc'] = 'Regra para controlar envio keepalive ajax';
$string['configlastcompiled'] = 'Última data de registro compilada';
$string['configlastcompiled_desc'] = 'Após a mudança desta data de busca, o cron irá recalcular todos os registros após a data fornecida';
$string['configlastpingcredit'] = 'Crédito de tempo extra no último ping';
$string['configlastpingcredit_desc'] = 'Esta quantidade de tempo (em minutos) será sistematicamente adicionada à contagem de tempo de busca de log cada vez que o final da sessão ou a descontinuidade forem adivinhadas';
$string['configonesessionpercourse'] = 'Uma sessão por curso';
$string['configonesessionpercourse_desc'] = 'Quando ativada, estatística de uso vai dividir sessões cada vez que a busca mudar o curso atual. Se desativada, uma sessão representa uma seqüência de trabalho que pode usar vários cursos.';
$string['configthreshold'] = 'Limite';
$string['configthreshold_desc'] = 'Limite de continuidade da atividade (minutos). Acima deste intervalo de tempo entre duas buscas sucessivas no log, o usuário é considerado como desconectado. O tempo de "Último Crédito de Ping" arbitrário será adicionado à sua contagem de tempo.';
$string['datacubing'] = 'Data cubing';
$string['declaredtime'] = 'Hora declarada';
$string['denyrule'] = 'Permitir o envio a menos que a regra de correspondência';
$string['dimensionitem'] = 'Aulas observáveis';
$string['displayactivitiestime'] = 'Apenas tempo atribuído a atividades efetivas no curso';
$string['displaycoursetime'] = 'Curso em tempo real (todo o tempo gasto em todos os contextos do curso)';
$string['emulatecommunity'] = 'Emular a versão da comunidade';
$string['emulatecommunity_desc'] = 'Se ativado, o plugin se comportará como a versão da comunidade pública. Isso pode liberar recursos!';
$string['errornorecords'] = 'Nenhuma informação de rastreamento';
$string['eventscount'] = 'Êxitos';
$string['eventusestatskeepalive'] = 'Sessão persistente';
$string['fixedchoice'] = 'Configurações forçadas para a data de início do curso / conta';
$string['fixeddate'] = 'A partir de uma referência de data fixa';
$string['from'] = 'Desde&ensp;';
$string['fromrange'] = 'De&ensp;';
$string['go'] = 'Vá!';
$string['hidecourselist'] = 'Ocultar horários de aula';
$string['isfiltered'] = 'Apenas o tempo acima {$a} segundos são exibidos';
$string['keepuseralive'] = 'Usuário {$a} ainda está na sessão';
$string['loganalysisparams'] = 'Parâmetros de análise de log';
$string['modulename'] = 'Rastreamento de atividade';
$string['noavailablelogs'] = 'Não há logs disponíveis';
$string['onthismoodlefrom'] = 'aqui desde';
$string['other'] = 'Outra presença fora do curso';
$string['othershort'] = 'OUTRO';
$string['plugindist'] = 'Distribuição de Plugin';
$string['plugindist_desc'] = '<p> Este plugin é a versão da comunidade e é publicado para qualquer um usar como está e verifica a aplicação principal do plugin. Existe uma versão "pro" deste plugin e é distribuída sob condições para alimentar o ciclo de vida, atualização, documentação e esforço de melhoria. </p>
<p> Por favor, entre em contato com um dos nossos distribuidores para obter suporte à versão "Pro". .
</p>
<ul><li><a href="http://www.activeprolearn.com/plugin.php?plugin=block_use_stats&lang=en">ActiveProLearn SAS</a></li>
<li><a href="http://www.edunao.com">Edunao SAS</a></li></ul>';
$string['pluginname'] = 'Estatísticas de uso';
$string['pluginname_desc'] = 'Um bloco que compila tempos de sessão';
$string['printpdf'] = 'Imprimir PDF';
$string['profilefieldcontrol'] = 'Campo Perfil';
$string['showdetails'] = 'Mostrar detalhes';
$string['sliding'] = 'Janela de tempo deslizante';
$string['studentchoice'] = 'Alunos escolhem';
$string['studentscansee'] = 'Alunos podem ver';
$string['task_cache_ttl'] = 'Cache de agregação TTL';
$string['task_cleanup'] = 'Limpeza de intervalos de tempo';
$string['task_compile'] = 'Compilação de intervalos de tempo';
$string['timeelapsed'] = 'Tempo decorrido';
$string['to'] = '&ensp;para&ensp;';
$string['use_stats:addinstance'] = 'Pode adicionar uma instância';
$string['use_stats_description'] = 'Ao publicar este serviço, você permite que os servidores remotos solicitem estatísticas de leitura de usuários locais.<br/> Ao se inscrever neste serviço, você permite que seu servidor local consulte um servidor remoto sobre as estatísticas de seus membros.
<br/>';
$string['use_stats:export'] = 'Pode exportar como pdf (precisa de um relatório de treinamentos)';
$string['use_stats:myaddinstance'] = 'Pode adicionar uma instância à Minha Página';
$string['use_stats_name'] = 'Acesso remoto para estatística';
$string['use_stats_rpc_service'] = 'Acesso remoto para estatística';
$string['use_stats_rpc_service_name'] = 'Acesso remoto para estatística';
$string['use_stats:seecoursedetails'] = 'Pode ver detalhes de todos os usuários do curso';
$string['use_stats:seegroupdetails'] = 'Pode ver detalhes de todos os usuários dos grupos';
$string['use_stats:seeowndetails'] = 'Pode ver seus próprios detalhes';
$string['use_stats:seesitedetails'] = 'Pode ver seus próprios detalhes';
$string['use_stats:view'] = 'Pode ver estatísticas';
$string['youspent'] = 'Você gastou&ensp;';
