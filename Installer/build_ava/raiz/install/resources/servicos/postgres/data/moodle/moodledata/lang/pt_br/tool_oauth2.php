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
 * Strings for component 'tool_oauth2', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Esta ação concederá acesso permanente da API ao Moodle para a conta autenticada. Este destina-se a ser usado como uma conta do sistema para gerenciar arquivos pertencentes ao Moodle.';
$string['authconnected'] = 'A conta do sistema agora está conectada para acesso off-line';
$string['authnotconnected'] = 'A conta do sistema agora não está conectada para acesso off-line';
$string['configured'] = 'Configurado';
$string['configuredstatus'] = 'Configurado';
$string['connectsystemaccount'] = 'Conectar a uma conta do sistema';
$string['createfromtemplate'] = 'Criar um serviço OAuth 2 a partir de um modelo';
$string['createfromtemplatedesc'] = 'Escolha um dos modelos de serviço OAuth 2 abaixo para criar um serviço OAuth com uma configuração válida para um dos tipos de serviço conhecidos. Isso criará o serviço OAuth 2, com todos os endpoints e parâmetros corretos necessários para autenticação, embora você ainda precise inserir o ID do cliente e o segredo do novo serviço antes de poder ser usado.';
$string['createnewendpoint'] = 'Criar novo terminal para o emissor "{$a}"';
$string['createnewfacebookissuer'] = 'Criar novo serviço Facebook';
$string['createnewgoogleissuer'] = 'Criar novo serviço Google';
$string['createnewissuer'] = 'Criar novo serviço personalizado';
$string['createnewmicrosoftissuer'] = 'Criar novo serviço Microsoft';
$string['createnewuserfieldmapping'] = 'Criar novo mapeamento de campo do usuário para o emissor "{$a}"';
$string['deleteconfirm'] = 'Tem certeza de que deseja excluir o emissor de identidade "{$a}"? Todos os plugins que dependem deste emissor irão parar de funcionar.';
$string['deleteendpointconfirm'] = 'Tem certeza de que deseja excluir o terminal "{$a->endpoint}" para o emissor "{$a->issuer}"? Quaisquer plugins que dependem deste endpoint deixarão de funcionar.';
$string['deleteuserfieldmappingconfirm'] = 'Tem certeza de que deseja excluir o mapeamento de campo do usuário para o emissor "{$a}"?';
$string['editendpoint'] = 'Editar endpoint: {$a->endpoint} para o emissor {$a->issuer}';
$string['editendpoints'] = 'Configurar endpoints';
$string['editissuer'] = 'Editar emissor da identidade: {$a}';
$string['edituserfieldmapping'] = 'Editar o mapeamento do campo do usuário para o emissor {$a}';
$string['edituserfieldmappings'] = 'Configurar mapeamentos de campo do usuário';
$string['endpointdeleted'] = 'Endpoint excluído';
$string['endpointname'] = 'Nome';
$string['endpointname_help'] = 'Chave usada para procurar esse endpoint. Deve terminar com "_endpoint".';
$string['endpointsforissuer'] = 'Endpoints para o emissor: {$ a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL para este endpoint. Deve usar o protocolo https://.';
$string['issueralloweddomains'] = 'Domínios de login';
$string['issueralloweddomains_help'] = 'Se definida, essa configuração é uma lista separada por vírgula de domínios aos quais os logins serão restritos ao usar esse provedor.';
$string['issuerbaseurl'] = 'URL base do serviço';
$string['issuerbaseurl_help'] = 'URL base utliizadada  para acessar este serviço';
$string['issuerclientid'] = 'ID do cliente';
$string['issuerclientid_help'] = '';
$string['issuerclientsecret'] = 'Segredo do cliente';
$string['issuerclientsecret_help'] = 'O segredo do cliente OAuth para este provedor.';
$string['issuerdeleted'] = 'Provedor de identidade excluído';
$string['issuerdisabled'] = 'Provedor de identidade desabilitado';
$string['issuerenabled'] = 'Provedor de identidade habilitado';
$string['issuerimage'] = 'URL do logotipo';
$string['issuerimage_help'] = 'Um URL de imagem usado para mostrar um logotipo para esse provedor. Pode ser exibido na página de login.';
$string['issuerloginparams'] = 'Parâmetros adicionais incluídos em uma solicitação de login.';
$string['issuerloginparams_help'] = 'Alguns sistemas requerem parâmetros adicionais para uma solicitação de login para ler o perfil básico do usuário.';
$string['issuerloginparamsoffline'] = 'Parâmetros adicionais incluídos em uma solicitação de login para acesso off-line.';
$string['issuerloginparamsoffline_help'] = 'Cada sistema OAuth define uma maneira diferente de solicitar acesso off-line. Por exemplo. O Google exige os parâmetros adicionais: "access_type=offline&prompt=consent". Esses parâmetros devem estar no formato de parâmetro de consulta da URL.';
$string['issuerloginscopes'] = 'Escopos incluídos em uma requisição de login.';
$string['issuerloginscopes_help'] = 'Alguns sistemas exigem escopos adicionais para uma solicitação de login para ler o perfil básico do usuário. Os escopos padrão para um sistema compatível com OpenID Connect são "email de perfil openid".';
$string['issuerloginscopesoffline'] = 'Escopos incluídos em uma requisição de login para acesso offline.';
$string['issuerloginscopesoffline_help'] = 'Cada sistema OAuth define uma maneira diferente de solicitar acesso off-line. Por exemplo. A Microsoft exige um escopo adicional "offline_access".';
$string['issuername'] = 'Nome';
$string['issuername_help'] = 'Nome do emissor da identidade. Pode ser exibido na página de login.';
$string['issuerrequireconfirmation'] = 'Exigir verificação de e-mail';
$string['issuerrequireconfirmation_help'] = 'Exija que todos os usuários verifiquem seu endereço de e-mail antes que possam fazer login com o OAuth. Isso se aplica a contas recém-criadas como parte do processo de login ou quando uma conta existente do Moodle está conectada a um login do OAuth por meio de endereços de e-mail correspondentes.';
$string['issuers'] = 'Provedores';
$string['issuersetup'] = 'Instruções detalhadas sobre a configuração dos serviços comuns OAuth 2';
$string['issuersetuptype'] = 'Instruções detalhadas sobre como configurar o provedor OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'Mostrar na página de login';
$string['issuershowonloginpage_help'] = 'Se o plug-in de autenticação do OAuth 2 estiver ativado, esse emissor de login será listado na página de login para permitir que os usuários façam login com contas desse emissor.';
$string['loginissuer'] = 'Permitir login';
$string['notconfigured'] = 'Não configurado';
$string['notloginissuer'] = 'Não permitir login';
$string['pluginname'] = 'Serviços OAuth 2';
$string['privacy:metadata'] = 'O plug-in de serviços OAuth 2 não armazena dados pessoais.';
$string['savechanges'] = 'Salvar mudanças';
$string['serviceshelp'] = 'Instruções de configuração do provedor de serviços.';
$string['systemaccountconnected'] = 'Conta do sistema conectada';
$string['systemaccountnotconnected'] = 'Conta do sistema não conectada';
$string['systemauthstatus'] = 'Conta do sistema conectada';
$string['usebasicauth'] = 'Autenticar solicitações de token via cabeçalhos HTTP';
$string['usebasicauth_help'] = 'Utilize o esquema de autenticação HTTP Basic ao enviar o ID e a senha do cliente com uma solicitação de token de atualização. Recomendado pelo padrão OAuth 2, mas pode não estar disponível com alguns emissores.';
$string['userfieldexternalfield'] = 'Nome do campo externo';
$string['userfieldexternalfield_error'] = 'Este campo não pode conter HTML.';
$string['userfieldexternalfield_help'] = 'Nome do campo fornecido pelo sistema externo OAuth 2.';
$string['userfieldinternalfield'] = 'Nome do campo interno';
$string['userfieldinternalfield_help'] = 'Nome do campo do usuário Moodle que deve ser mapeado do campo externo.';
$string['userfieldmappingdeleted'] = 'Mapeamento de campo do usuário excluído';
$string['userfieldmappingsforissuer'] = 'Mapeamentos de campo do usuário para o emissor: {$a}';
