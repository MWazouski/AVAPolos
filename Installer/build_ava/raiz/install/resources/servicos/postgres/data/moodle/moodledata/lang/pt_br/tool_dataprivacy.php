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
 * Strings for component 'tool_dataprivacy', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Atividades e recursos';
$string['addcategory'] = 'Adicionar categoria';
$string['addnewdefaults'] = 'Adicionar um novo padrão de módulo';
$string['addpurpose'] = 'Adicionar objetivo';
$string['addroleoverride'] = 'Adicionar substituição de papel';
$string['approve'] = 'Aprovar';
$string['approverequest'] = 'Aprovar solicitação';
$string['automaticdeletionrequests'] = 'Criar solicitações de exclusão automática de dados';
$string['automaticdeletionrequests_desc'] = 'Se ativado, uma solicitação de exclusão de dados será criada automaticamente para qualquer conta de usuário excluída manualmente.';
$string['bulkapproverequests'] = 'Aprovar solicitações';
$string['bulkdenyrequests'] = 'Negar solicitações';
$string['cachedef_contextlevel'] = 'Propósito e categoria dos níveis de contexto';
$string['cachedef_purpose'] = 'Finalidades de dados';
$string['cachedef_purpose_overrides'] = 'Substituições de finalidade na ferramenta de privacidade de dados';
$string['cancelrequest'] = 'Cancelar solictação';
$string['cancelrequestconfirmation'] = 'Você realmente quer cancelar essa solicitação de dados?';
$string['cannotreset'] = 'Não é possível redefinir essa solicitação. Somente solicitações rejeitadas podem ser redefinidas.';
$string['categories'] = 'Categorias';
$string['categorieslist'] = 'Lista de categorias de dados';
$string['category'] = 'Categorias';
$string['categorycreated'] = 'Categoria criada';
$string['categorydefault'] = 'Categoria padrão';
$string['categoryupdated'] = 'Categoria atualizada';
$string['close'] = 'Fechar';
$string['compliant'] = 'Compatível';
$string['confirmapproval'] = 'Você realmente deseja aprovar essa solicitação de dados?';
$string['confirmbulkapproval'] = 'Você quer aprovar em massa as solicitações de dados selecionadas?';
$string['confirmbulkdenial'] = 'Você realmente quer negar em massa as solicitações de dados selecionadas?';
$string['confirmcompletion'] = 'Você realmente deseja marcar essa consulta do usuário como concluída?';
$string['confirmcontextdeletion'] = 'Você realmente quer confirmar a exclusão dos contextos selecionados? Isso também excluirá todos os dados do usuário para seus respectivos sub-contextos.';
$string['confirmdenial'] = 'Você realmente quer negar essa solicitação de dados?';
$string['confirmrequestresubmit'] = 'Tem certeza de que deseja cancelar a solicitação atual de {$a->type} para {$a->username} e reenviá-la?';
$string['contactdataprotectionofficer_desc'] = 'Se habilitado, os usuários poderão entrar em contato com o responsável pela privacidade e fazer uma solicitação de dados por meio de um link na página de perfil deles.';
$string['contactdpoviaprivacypolicy'] = 'Por favor, entre em contato com o oficial de privacidade, conforme descrito na política de privacidade.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Usuários';
$string['contextlevelname40'] = 'Categorias de curso';
$string['contextlevelname50'] = 'Cursos';
$string['contextlevelname70'] = 'Módulos de atividades';
$string['contextlevelname80'] = 'Blocos';
$string['contextpurposecategorysaved'] = 'Finalidade e categoria salvas.';
$string['createcategory'] = 'Criar categoria de dados';
$string['createnewdatarequest'] = 'Crie uma nova solicitação de dados';
$string['createpurpose'] = 'Criar um propósito de dados';
$string['creationauto'] = 'Autometicamente';
$string['creationmanual'] = 'Manualmente';
$string['datadeletion'] = 'Exclusão de dados';
$string['datadeletionpagehelp'] = 'Os dados para os quais o período de retenção expirou estão listados aqui. Revise e confirme a exclusão de dados, que será executada pela tarefa programada "Excluir contextos expirados".';
$string['dataprivacy:downloadallrequests'] = 'Baixar dados exportados para todos';
$string['dataprivacy:downloadownrequest'] = 'Faça o download dos seus próprios dados exportados';
$string['dataprivacy:makedatarequestsforchildren'] = 'Fazer solicitações de dados para menores';
$string['dataprivacy:managedataregistry'] = 'Gerenciar registro de dados';
$string['dataprivacy:managedatarequests'] = 'Gerenciar solicitações de dados';
$string['dataregistry'] = 'Registro de dados';
$string['dataregistryinfo'] = 'O registro de dados permite que categorias (tipos de dados) e finalidades (as razões para o processamento de dados) sejam definidas para todo o conteúdo do site - de usuários e cursos até atividades e blocos. Para cada finalidade, um período de retenção pode ser definido. Quando um período de retenção expirou, os dados são sinalizados e listados para exclusão, aguardando a confirmação do administrador.';
$string['datarequestcreatedfromscheduledtask'] = 'Criada automaticamente a partir de uma tarefa agendada (usuário excluído pré-existente).';
$string['datarequestcreatedupondelete'] = 'Criado automaticamente após a exclusão do usuário.';
$string['datarequestemailsubject'] = 'Solicitação de dados: {$a}';
$string['datarequests'] = 'Solicitações de dados';
$string['dataretentionexplanation'] = 'Este resumo mostra as categorias e finalidades padrão para reter dados do usuário. Certas áreas podem ter categorias e finalidades mais específicas do que as listadas aqui.';
$string['dataretentionsummary'] = 'Resumo de retenção de dados';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Dados requeridos';
$string['daterequesteddetail'] = 'Dados requeridos:';
$string['defaultexpired'] = 'Dados para todos os usuários';
$string['defaultsinfo'] = 'As categorias e finalidades padrão são aplicadas a todas as instâncias novas e existentes em que um valor não está definido.';
$string['defaultssaved'] = 'Padrões salvos';
$string['defaultswarninginfo'] = 'Aviso: A alteração desses padrões pode afetar o período de retenção de instâncias existentes.';
$string['deletecategory'] = 'Apagar categoria';
$string['deletecategorytext'] = 'Tem certeza de que deseja excluir a categoria \'{$a}\'?';
$string['deletedefaults'] = 'Excluir padrões: {$a}';
$string['deletedefaultsconfirmation'] = 'Tem certeza de que deseja excluir a categoria padrão e a finalidade dos módulos {$a}?';
$string['deleteexistingdeleteduserstask'] = 'Criar solicitação de exclusão de dados para usuários excluídos existentes';
$string['deleteexpiredcontextstask'] = 'Excluir contextos expirados';
$string['deleteexpireddatarequeststask'] = 'Excluir arquivos de exportação de solicitação de dados expirados';
$string['deletemyaccount'] = 'Deletar minha conta';
$string['deletepurpose'] = 'Excluir objetivos';
$string['deletepurposetext'] = 'Tem certeza de que deseja excluir a finalidade \'{$a}\'?';
$string['deny'] = 'Negar';
$string['denyrequest'] = 'Negar solicitação';
$string['deprecated'] = 'Depreciado';
$string['deprecatedexplanation'] = 'Este plugin está usando uma versão antiga de uma das interfaces de privacidade e deve ser atualizado.';
$string['download'] = 'Download';
$string['downloadexpireduser'] = 'O download expirou. Envie uma nova solicitação se você deseja exportar seus dados pessoais.';
$string['duplicaterole'] = 'Papel já especificado';
$string['editcategories'] = 'Editar categorias';
$string['editcategory'] = 'Editar categoria';
$string['editdefaults'] = 'Editar padrões: {$a}';
$string['editmoduledefaults'] = 'Editar padrões dos módulos';
$string['editpurpose'] = 'Editar objetivo';
$string['editpurposes'] = 'Editar objetivos';
$string['effectiveretentionperiodcourse'] = '{$a} (após a data de término do curso)';
$string['effectiveretentionperioduser'] = '{$a} (desde a última vez que o usuário acessou o site)';
$string['emailsalutation'] = 'Prezado(a) {$a},';
$string['errorcontexthasunexpiredchildren'] = 'O contexto "{$a}" ainda tem subcontextos que ainda não expiraram. Nenhum contexto foi sinalizado para exclusão.';
$string['errornocapabilitytorequestforothers'] = 'O usuário {$a->requestedby} não tem a capacidade de fazer uma solicitação de dados em nome do usuário {$a->userid}';
$string['errornoexpiredcontexts'] = 'Não há contextos expirados para processar';
$string['errorsendingmessagetodpo'] = 'Foi encontrado um erro ao tentar enviar uma mensagem para {$a}.';
$string['exceptionnotificationsubject'] = 'Exceção ocorreu durante o processamento de dados de privacidade';
$string['expandplugin'] = 'Expandir e recolher o plugin.';
$string['expandplugintype'] = 'Expandir e recolher o tipo de plugin.';
$string['expiredretentionperiodtask'] = 'Período de Retenção Expirado';
$string['explanationtitle'] = 'Ícones usados nesta página e o que eles significam.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Um plugin adicional instalado neste site.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Página inicial do curso';
$string['gdpr_art_6_1_a_description'] = 'O titular dos dados consentiu com o processamento dos seus dados pessoais para um ou mais fins específicos';
$string['gdpr_art_6_1_a_name'] = 'Consentimento (GDPR Art. 6.1 (a))';
$string['gdpr_art_6_1_b_description'] = 'O processamento é necessário para a execução de um contrato do qual o titular dos dados é parte ou para tomar medidas a pedido do titular dos dados antes de celebrar um contrato';
$string['gdpr_art_6_1_b_name'] = 'Contrato (DPR Art. 6.1 (b))';
$string['gdpr_art_6_1_c_description'] = 'O processamento é necessário para o cumprimento de uma obrigação legal à qual o controlador está sujeito';
$string['gdpr_art_6_1_c_name'] = 'Obrigação legal (DPR Art 6.1 (c))';
$string['gdpr_art_6_1_d_description'] = 'O tratamento é necessário para proteger os interesses vitais do titular dos dados ou de outra pessoa singular';
$string['gdpr_art_6_1_d_name'] = 'Interesses vitais (DDP Art. 6.1 (d))';
$string['gdpr_art_6_1_e_description'] = 'O processamento é necessário para o desempenho de uma tarefa realizada no interesse público ou no exercício da autoridade oficial conferida ao responsável pelo tratamento.';
$string['gdpr_art_6_1_e_name'] = 'Tarefa pública (GDPR Art. 6.1 (e))';
$string['gdpr_art_6_1_f_description'] = 'O tratamento é necessário para os fins legítimos prosseguidos pelo responsável pelo tratamento ou por um terceiro, exceto se esses interesses forem sobrepostos pelos interesses ou direitos e liberdades fundamentais do titular dos dados que requeiram proteção dos dados pessoais, em particular quando os dados sujeito é uma criança';
$string['gdpr_art_6_1_f_name'] = 'Interesses legítimos (DPR Art. 6.1 (f))';
$string['gdpr_art_9_2_a_description'] = 'O titular dos dados deu o seu consentimento explícito ao tratamento desses dados para um ou mais fins especificados, exceto nos casos em que a legislação da União ou de um Estado-Membro preveja que a proibição referida no n.º 1 do artigo 9.º do GDPR não pode ser levantada pela pessoa em causa';
$string['gdpr_art_9_2_a_name'] = 'Consentimento explícito (DPR Art. 9.2 (a))';
$string['gdpr_art_9_2_b_description'] = 'O tratamento é necessário para efeitos do cumprimento das obrigações e do exercício de direitos específicos do responsável pelo tratamento ou da pessoa em causa no domínio do direito do trabalho e da segurança social e da proteção social, desde que autorizado pelo direito da União ou do Estado-Membro ou Acordo colectivo nos termos da legislação do Estado-Membro que preveja as salvaguardas adequadas para os direitos fundamentais e os interesses da pessoa em causa';
$string['gdpr_art_9_2_b_name'] = 'Lei de emprego e previdência / proteção (DPR Art. 9.2 (b))';
$string['gdpr_art_9_2_c_description'] = 'O processamento é necessário para proteger os interesses vitais do titular dos dados ou de outra pessoa singular quando o titular dos dados é física ou legalmente incapaz de dar o seu consentimento.';
$string['gdpr_art_9_2_c_name'] = 'Proteção de interesses vitais (GDPR Art. 9.2 (c))';
$string['gdpr_art_9_2_d_description'] = 'O processamento é realizado no curso de suas atividades legítimas com salvaguardas apropriadas por uma fundação, associação ou qualquer outro órgão sem fins lucrativos com um objetivo político, filosófico, religioso ou sindical e sob a condição de que o processamento se refira exclusivamente ao membros ou a antigos membros do órgão ou a pessoas que tenham contacto regular com o mesmo em relação aos seus fins e que os dados pessoais não sejam divulgados fora desse órgão sem o consentimento dos titulares dos dados';
$string['gdpr_art_9_2_d_name'] = 'Atividades legítimas relativas aos membros / contatos próximos de uma fundação, associação ou outro órgão sem fins lucrativos (GDPR Art. 9.2 (d))';
$string['gdpr_art_9_2_e_description'] = 'Processamento refere-se a dados pessoais que são manifestamente tornados públicos pela pessoa em causa';
$string['gdpr_art_9_2_e_name'] = 'Dados tornados públicos pelo titular dos dados (GDPR Art. 9.2 (e))';
$string['gdpr_art_9_2_f_description'] = 'O processamento é necessário para o estabelecimento, exercício ou defesa de ações judiciais ou sempre que os tribunais estiverem atuando em sua capacidade judicial.';
$string['gdpr_art_9_2_f_name'] = 'Ações judiciais e ações judiciais (GDPR Art. 9.2 (f))';
$string['gdpr_art_9_2_g_description'] = 'O tratamento é necessário por razões de interesse público substancial, com base na legislação da União ou dos Estados-Membros, que seja proporcional ao objetivo visado, respeite a essência do direito à proteção de dados e preveja medidas adequadas e específicas para salvaguardar os direitos fundamentais e os interesses da pessoa em causa';
$string['gdpr_art_9_2_g_name'] = 'Interesse público substancial (GDPR Art. 9.2 (g))';
$string['gdpr_art_9_2_h_description'] = 'O processamento é necessário para fins de medicina preventiva ou ocupacional, para a avaliação da capacidade de trabalho do funcionário, diagnóstico médico, prestação de cuidados de saúde ou sociais ou tratamento ou gestão de sistemas e serviços de saúde ou assistência social com base em Legislação da União ou do Estado-Membro ou por força de contrato com um profissional de saúde e sujeito às condições e salvaguardas referidas no n.º 3 do artigo 9.º do GDPR';
$string['gdpr_art_9_2_h_name'] = 'Propósitos médicos (GDPR Art. 9.2 (h))';
$string['gdpr_art_9_2_i_description'] = 'O tratamento é necessário por razões de interesse público no domínio da saúde pública, como a proteção contra ameaças sanitárias transfronteiriças graves ou a garantia de normas rigorosas de qualidade e segurança dos cuidados de saúde e de medicamentos ou dispositivos médicos, com base na União. ou legislação do Estado-Membro que preveja medidas adequadas e específicas para salvaguardar os direitos e liberdades da pessoa em causa, em especial o sigilo profissional';
$string['gdpr_art_9_2_i_name'] = 'Saúde pública (GDPR Art. 9.2 (i))';
$string['gdpr_art_9_2_j_description'] = 'O tratamento é necessário para fins de arquivo de interesse público, para fins de investigação científica ou histórica ou para fins estatísticos em conformidade com o artigo 89.º, n.º 1, com base na legislação da União ou de um Estado-Membro, proporcional ao objetivo visado, respeitar a essência do direito de protecção de dados e prever medidas adequadas e específicas para salvaguardar os direitos fundamentais e os interesses da pessoa em';
$string['gdpr_art_9_2_j_name'] = 'Interesse público ou pesquisa científica / histórica / estatística (DPR Art. 9.2 (j))';
$string['hide'] = 'Recolher todos';
$string['httpwarning'] = 'Qualquer dado baixado deste site pode não estar criptografado. Entre em contato com o administrador do sistema e solicite que eles instalem o SSL neste site.';
$string['inherit'] = 'Herdar';
$string['lawfulbases'] = 'Bases legais';
$string['lawfulbases_help'] = 'Selecione pelo menos uma opção que servirá como base legal para o processamento de dados pessoais. Para obter detalhes sobre essas bases legais, consulte <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Marcar como completo';
$string['markedcomplete'] = 'Sua consulta foi marcada como concluída pelo oficial de privacidade.';
$string['message'] = 'Mensagem';
$string['messagelabel'] = 'Mensagem:';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} filhos';
$string['noactivitiestoload'] = 'Sem atividades';
$string['noassignedroles'] = 'Nenhum papel atribuído neste contexto';
$string['noblockstoload'] = 'Sem blocos';
$string['nocategories'] = 'Ainda não existem categorias';
$string['nocoursestoload'] = 'Sem atividades';
$string['nodatarequests'] = 'Não há solicitações de dados';
$string['nodatarequestsmatchingfilter'] = 'Não há solicitações de dados correspondentes ao filtro fornecido';
$string['noexpiredcontexts'] = 'Este nível de contexto não possui dados para os quais o período de retenção expirou.';
$string['nopersonaldatarequests'] = 'Você não tem solicitações de dados pessoais';
$string['nopurposes'] = 'Ainda não há objetivos';
$string['nosubjectaccessrequests'] = 'Não há solicitações de dados nas quais você precise agir';
$string['notset'] = 'Não definido (use o valor padrão)';
$string['notyetexpired'] = '{$a} (ainda não expirado)';
$string['overrideinstances'] = 'Redefinir instâncias com valores personalizados';
$string['pluginname'] = 'Dados privados';
$string['pluginname_help'] = 'Plugin de privacidade de dados';
$string['pluginregistry'] = 'Registro de privacidade de plug-in';
$string['pluginregistrytitle'] = 'Registro de conformidade com privacidade de plug-ins';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Os filtros atualmente aplicados à página de solicitações de dados.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'O número de solicitações de dados que o usuário prefere ver em uma página';
$string['privacy:metadata:request'] = 'Informações de solicitações de dados pessoais (solicitações de acesso e exclusão de assuntos) feitas para este site.';
$string['privacy:metadata:request:comments'] = 'Qualquer comentário do usuário que acompanhe a solicitação.';
$string['privacy:metadata:request:dpocomment'] = 'Quaisquer comentários feitos pelo responsável pela privacidade do site em relação à solicitação.';
$string['privacy:metadata:request:requestedby'] = 'O ID do usuário que faz a solicitação, se feito em nome de outro usuário.';
$string['privacy:metadata:request:timecreated'] = 'O registro de data e hora indicando quando a solicitação foi feita pelo usuário.';
$string['privacy:metadata:request:userid'] = 'O ID do usuário a quem a solicitação pertence';
$string['privacyrequestexpiry'] = 'Expiração da solicitação de dados';
$string['privacyrequestexpiry_desc'] = 'A hora em que as solicitações de dados aprovadas estarão disponíveis para download antes de expirar. Se definido como zero, então não há limite de tempo.';
$string['protected'] = 'Protegido';
$string['purpose'] = 'Objetivo';
$string['purposecreated'] = 'Objetivo criado';
$string['purposedefault'] = 'Objetivo padrão';
$string['purpose_help'] = 'O objetivo descreve o motivo do processamento dos dados. Uma nova finalidade pode ser adicionada ou, se Herdar for selecionado, a finalidade de um contexto superior será aplicada. Os contextos são (de baixo a alto): Blocos> Módulos de atividades> Cursos> Categorias de cursos> Usuário> Site.';
$string['purposeoverview'] = 'Um objetivo descreve a política de uso e retenção pretendida para os dados armazenados. A base para armazenar e reter esses dados também é descrita no objetivo.';
$string['purposes'] = 'Objetivos';
$string['purposeupdated'] = 'Objetivos atualizados';
$string['replyto'] = 'Responder para';
$string['requestactions'] = 'Ações';
$string['requestby'] = 'Solicitado por';
$string['requestbydetail'] = 'Solicitado por:';
$string['requestcomments'] = 'Comentários';
$string['requestcomments_help'] = 'Esta caixa permite que você insira mais detalhes sobre sua solicitação de dados.';
$string['requestcreation'] = 'Criação';
$string['requestdenied'] = 'A solicitação foi negada';
$string['requestemailintro'] = 'Você recebeu uma solicitação de dados:';
$string['requestfor'] = 'Usuário';
$string['requestorigin'] = 'Site';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Sua solicitação foi enviada ao agente de privacidade';
$string['requesttype'] = 'Tipo';
$string['requesttypedelete'] = 'Excluir todos os meus dados pessoais';
$string['requesttypedeleteshort'] = 'Apagar';
$string['requesttypeexport'] = 'Exportar todos os meus dados pessoais';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttype_help'] = 'Selecione o motivo para entrar em contato com o diretor de privacidade. Esteja ciente de que a exclusão de todos os dados pessoais resultará na impossibilidade de você efetuar login no site.';
$string['requesttypeothersshort'] = 'Mensagem';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = 'Requer atenção.';
$string['requiresattentionexplanation'] = 'Este plugin não implementa a API de privacidade do Moodle. Se este plugin armazenar quaisquer dados pessoais, ele não poderá ser exportado ou excluído através do sistema de privacidade do Moodle.';
$string['resubmitrequest'] = 'Reenvie a solicitação {$a->type} para {$a->username}';
$string['resubmittedrequest'] = 'A solicitação existente de {$a->type} para {$a->username} foi cancelada e reenviada';
$string['resultdeleted'] = 'Você solicitou recentemente que sua conta e dados pessoais em {$a} fossem excluídos. Este processo foi concluído e você não poderá mais efetuar login.';
$string['resultdownloadready'] = 'Sua cópia dos seus dados pessoais em {$a} que você solicitou recentemente está disponível para download. Por favor, clique no link abaixo para ir para a página de download.';
$string['retentionperiod'] = 'Período de retenção';
$string['retentionperiod_help'] = 'O período de retenção especifica o período de tempo durante o qual os dados devem ser mantidos. Quando o período de retenção expirou, os dados são sinalizados e listados para exclusão, aguardando a confirmação do administrador.';
$string['retentionperiodnotdefined'] = 'Nenhum período de retenção foi definido';
$string['retentionperiodzero'] = 'Nenhum período de retenção';
$string['reviewdata'] = 'Rever dados';
$string['role'] = 'Papel';
$string['role_help'] = 'O papel ao qual a sobreposição deve se aplicar.';
$string['roleoverrides'] = 'Substituições de papel';
$string['selectbulkaction'] = 'Por favor, selecione uma ação em massa.';
$string['selectdatarequests'] = 'Por favor selecione solicitações de dados.';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Razões sensíveis de processamento de dados pessoais';
$string['setdefaults'] = 'Definir padrões';
$string['showdataretentionsummary'] = 'Mostrar resumo de retenção de dados';
$string['statusapproved'] = 'Aprovado';
$string['statusawaitingapproval'] = 'Aguardando aprovação';
$string['statuscancelled'] = 'Cancelado';
$string['statuscomplete'] = 'Completo';
$string['statusdeleted'] = 'Apagado';
$string['statusdetail'] = 'Status:';
$string['statusexpired'] = 'Expirado';
$string['statuspending'] = 'Pendente';
$string['statuspreprocessing'] = 'Pré-processamento';
$string['statusprocessing'] = 'Processando';
$string['statusready'] = 'Download pronto';
$string['statusrejected'] = 'Rejeitado';
$string['subjectscope'] = 'Escopo do assunto';
$string['summary'] = 'Resumo da configuração do registro';
$string['tobedeleted'] = 'Dados a serem excluídos';
$string['user'] = 'Usuário';
$string['userlistexplanation'] = 'Esse plug-in tem o provedor de base, mas também deve implementar o provedor de lista de usuários para suporte total da funcionalidade de privacidade.';
$string['userlistnoncompliant'] = 'Provedor de lista de usuários ausente';
$string['visible'] = 'Expandir todos';
