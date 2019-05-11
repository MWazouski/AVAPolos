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
 * Strings for component 'report_trainingsessions', language 'pt_br', branch 'MOODLE_34_STABLE'
 *
 * @package   report_trainingsessions
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytime'] = 'Tempo nas atividades';
$string['activitytime_help'] = '<p> Este cálculo de tempo considera todo o tempo de uso gasto nas atividades do curso, deixando os tempos de layout do curso fora do cálculo. Em certos casos (quando se usa a Verificação de Tempo de Aprendizado (não padrão) com alocação de tempo padrão (http://github.com/vfremaux/moodle-mod_learningtimecheck.git), o tempo padrão adicional é usado em vez de tempos reais extraídos do log. </p>';
$string['addcoursegrade'] = 'Adicionar nota do curso ao relatório';
$string['addmodulelabel'] = 'Adicionar módulo de atividade';
$string['addmoduletitle'] = 'Adicionar um módulo de atividade que você deseja para adicionar nota no relatório.';
$string['addtimebonus'] = 'Bônus de tempo em nota geral';
$string['addtimegrade'] = 'Nota de tempo';
$string['advancement'] = 'Avanço';
$string['allcourses'] = 'Todos os cursos';
$string['allgroups'] = 'Todos os grupos';
$string['authoritysign'] = 'Autoridade da Educação';
$string['availableactivities'] = 'Atividades disponíveis';
$string['batchdate'] = 'Data da tarefa';
$string['batchdate_help'] = '<p> Esta configuração significa a data exata em que o lote será lançado e os documentos gerados. Se teme que os documentos sejam pesados (muitos alunos, muitos históricos para acompanhar), escolha uma data/hora em um período de baixa carga de seu servidor. </p>';
$string['batchreports_task'] = 'Relatórios em lote';
$string['bgcolor'] = 'Cor de fundo';
$string['binary'] = 'Saída binária';
$string['bonusgrademode'] = 'Modo de nota de bônus de tempo';
$string['calculated'] = 'Calculado';
$string['calculatedcolumns'] = 'Colunas calculadas (Somente XLS)';
$string['calculated_help'] = 'Digite uma fórmula de excel usando referências de excel locais, conforme produzidas no documento de saída. Use o espaço reservado {linha} para inserir o número da linha atual nas referências de células.';
$string['checklistadvice'] = 'Efeitos especiais de conclusão lateral';
$string['chooseagroup'] = 'Escolher um grupo';
$string['chooseaninstitution'] = 'Escolher uma instituição';
$string['colors'] = 'Cores';
$string['columnname'] = 'Nome da coluna:';
$string['connections'] = 'Conexões';
$string['contiguoussessions'] = 'Sessões contíguas';
$string['continuous'] = 'Saída contínua';
$string['coupling'] = 'Acoplamento';
$string['course'] = 'Curso';
$string['courseglobals'] = 'Áreas globais do curso';
$string['coursegrade'] = 'Pontuação do curso ativada';
$string['courselabel'] = 'como coluna:';
$string['coursename'] = 'Nome do grupo';
$string['courseraw'] = 'Lotes';
$string['coursesessions'] = 'Sessões de trabalho em curso (tempos reais adivinhados)';
$string['coursestart'] = 'Data de início do curso';
$string['coursesummary'] = 'Resumo por participante';
$string['coursetime'] = 'Duração no curso (atividades externas)';
$string['coursetime_help'] = '<p> isso resume o tempo passado nas telas gerais do curso, mas FORA das atividades.';
$string['coursetotaltime'] = 'Duração total do curso';
$string['coursetotaltime_help'] = '<p> Isso resume todo o tempo gasto no curso ou qualquer dependência do curso. </p>';
$string['crop'] = 'Escolher sessões fora de alcance';
$string['csv'] = 'Texto (CSV)';
$string['csvoutputtoiso'] = 'Saída Iso CSV';
$string['csvoutputtoiso_desc'] = 'Se ativado, o relatório bruto do curso será gerado na codificação ISO-8859-1 para aplicações compatíveis de CSV antigos.';
$string['currentcourse'] = 'Curso atual';
$string['debugmode'] = 'Modo de depuração ativado';
$string['defaultmeanformula'] = '=MÉDIA({col}{minrow}:{col}{maxrow})';
$string['defaultsumformula'] = '=SOMA({col}{minrow}:{col}{maxrow})';
$string['disabled'] = '|--------- desabilitado -----------|';
$string['discrete'] = 'Saída discreta';
$string['done'] = 'Realizado:';
$string['duration'] = 'Duração';
$string['elapsed'] = 'Tempo total';
$string['elapsedadvice'] = 'O tempo decorrido pode ser diferente do intervalo de tempo da sessão devido a tempos de crédito adicionais nas quebras de sessões. Consulte a configuração do bloco Usar Estatísticas.';
$string['elapsedlastweek'] = 'Duração da semana passada';
$string['email'] = 'E-mail';
$string['emulatecommunity'] = 'Emular a versão da comunidade';
$string['emulatecommunity_desc'] = 'Se ativado, o plugin se comportará como a versão da comunidade pública. Isso pode soltar recursos!';
$string['enablecoursescore'] = 'Pontuação do curso habilitada';
$string['enablelearningtimecheckcoupling'] = 'Acoplamento LTC habilitado';
$string['enablelearningtimecheckcoupling_desc'] = 'Se ativado, os relatórios de sessão usarão a filtragem de dias úteis do Relatório de Verificação de Tempo de Aprendizado';
$string['enddate'] = 'Data final';
$string['enterprisesign'] = 'Empreendimento';
$string['equlearningtime'] = 'Tempo de treinamento equivalente:';
$string['equlearningtime_help'] = '<p> O tempo de aprendizagem equivalente resume todo o tempo gasto no curso, incluindo os tempos de alocação padrão se o módulo da lista de verificação da Verificação do Tempo de Aprendizado for usado (http://github.com/vfremaux/moodle-mod_learningtimecheck.git). </p>';
$string['errorbadcoursestructure'] = 'Erro na estrutura do curso: id incorreto {$a}';
$string['errorbadviewid'] = 'visualização de relatório não existente';
$string['errorcontinuousscale'] = 'Você não pode usar escalas como fonte de notas em modo contínuo';
$string['errorcoursestructurefirstpage'] = 'Erro na estrutura do curso: falha em obter a primeira página';
$string['errorcoursetoolarge'] = 'Curso é muito grande. Escolhendo um grupo';
$string['errordiscretenoranges'] = 'Você deve definir intervalos ao usar o modo discreto';
$string['errornotingroup'] = 'Você não tem acesso a todos os usuários e não tem nenhuma associação de grupo.';
$string['extelapsed'] = 'Tempo total (estendido)';
$string['extelapsed_help'] = 'O tempo de curso estendido calcula o tempo estritamente gasto no contexto do curso, além do tempo gasto para obter o material do curso e algum tempo gasto em telas gerais do site ao qual o usuário tem acesso.';
$string['extelapsedlastweek'] = 'Tempo da semana passada (estendido)';
$string['exthits'] = 'Acertos (estendidos)';
$string['exthitslastweek'] = 'Acertos na última semana (estendidos)';
$string['extother'] = 'Tempo extra fora do curso';
$string['extother_help'] = '<p> Tempo decorrido fora deste curso, mas anexado a estas sessões do curso. Eles geralmente são gastos em páginas de usuários, ou no escopo global do site. </p>';
$string['extotherlastweek'] = 'Tempo extra (última semana)';
$string['extrauserinfo'] = 'Informações adicionais do usuário em relatórios';
$string['extrauserinfo_desc'] = 'Você pode opcionalmente adicionar dados do campo do usuário à parte de informação do usuário';
$string['fail'] = 'FALHA';
$string['filetimesuffixformat'] = 'Ymd_His';
$string['firstaccess'] = 'Primeiro acesso';
$string['firstconnection'] = 'Primeira conexão';
$string['firstenrolldate'] = 'Primeira matrícula';
$string['firstname'] = 'Primeiro nome';
$string['formulalabel'] = 'Etiqueta da coluna';
$string['from'] = 'De';
$string['generatecsv'] = 'Gerar como CSV';
$string['generatepdf'] = 'Gerar como PDF';
$string['generatereports'] = 'Gerar relatórios';
$string['generatexls'] = 'Gerar como XLS';
$string['gradesettings'] = 'Configurações de nota';
$string['head1application'] = 'As cores Head 1 são usadas na linha superior do cabeçalho quando apropriadas.';
$string['head2application'] = 'As cores Head 2 são usadas na linha de cabeçalho normal acima das colunas de dados. Este é o caso mais comum.';
$string['headsection'] = 'Seção do título';
$string['hits'] = 'Acessos';
$string['incourses'] = 'Nos cursos';
$string['institution'] = 'Instituição';
$string['institutions'] = 'Instituições';
$string['item'] = 'Item';
$string['nodata'] = 'Não há dados de curso';
$string['nopermissiontoview'] = 'Você não tem permissões suficientes neste curso para ver esta informação.';
$string['over'] = 'sobre';
$string['pluginname'] = 'Sessões de Treinamento';
$string['reports'] = 'Relatórios';
$string['role'] = 'Papel';
$string['sectionname'] = 'Nome da seção';
$string['seedetails'] = 'Veja mais detalhes';
$string['sessionend'] = 'Final da sessão';
$string['sessionreports'] = 'Relatório de sessão de usuário';
$string['sessionstart'] = 'Início da sessão';
$string['startdate'] = 'Data inicial';
$string['timeelapsed'] = 'Tempo gasto';
$string['timeelapsedcurweek'] = 'Tempo gasto semana corrente';
$string['todate'] = 'Data final';
$string['totalduration'] = 'Duração total';
$string['totalsessions'] = 'Tempo total da sessão';
$string['trainingreports'] = 'Relatórios de treinamento';
$string['trainingsessions'] = 'Sessões de Treinamento';
$string['trainingsessions_report_advancement'] = 'Relatório de Progresso';
$string['trainingsessions_report_connections'] = 'Relatório de conexão';
$string['trainingsessions_report_institutions'] = 'Relatório de instituição';
$string['updatefromaccountstart'] = 'Obter do primeiro acesso do usuário';
$string['uploadresult'] = 'Baixar resultados brutos';
$string['user'] = 'Por participante';
$string['weekstartdate'] = 'Início da semana';
$string['workingsessions'] = 'Sessões de trabalho:';
