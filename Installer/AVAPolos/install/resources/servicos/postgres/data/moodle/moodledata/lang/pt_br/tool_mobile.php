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
 * Strings for component 'tool_mobile', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'O debuggimg ADOdb está habilitado. Ele deve ser desabilitado na autenticação do banco de dados externo ou nas configurações do plugin de inscrição no banco de dados externo.';
$string['androidappid'] = 'O identificador único do aplicativo Android';
$string['androidappid_desc'] = 'Esta configuração pode ser mantida como padrão, a menos que você tenha um aplicativo Android personalizado.';
$string['apppolicy'] = 'URL da política de aplicativos';
$string['apppolicy_help'] = 'O URL de uma política para usuários do aplicativo, listada na página Sobre no aplicativo. Se o campo for deixado em branco, o URL da política do site será usado.';
$string['autologinkeygenerationlockout'] = 'A geração de chave de login automático está bloqueada. Você precisa esperar 6 minutos entre as solicitações.';
$string['autologinnotallowedtoadmins'] = 'A autenticação automática não é permitida aos administradores do site.';
$string['cachedef_plugininfo'] = 'Isso armazena a lista de plugins com addons móveis';
$string['clickheretolaunchtheapp'] = 'Clique aqui se a aplicação não abrir automaticamente.';
$string['configmobilecssurl'] = 'Um arquivo CSS para customizar a interface do aplicativo movel.';
$string['customlangstrings'] = 'Strings de linguagem personalizadas';
$string['customlangstrings_desc'] = 'Palavras e frases exibidas no aplicativo podem ser personalizadas aqui. Insira cada string de idioma personalizado em uma nova linha com format: string identifier, custom language string e language code, separados por caracteres de pipe. Por exemplo:
<pre>
mm.user.student | Aprendiz | pt
mm.user.student | Aprendiz | es
</pre>
Para obter uma lista completa de identificadores de string, consulte a documentação.';
$string['custommenuitems'] = 'Itens de menu personalizados';
$string['custommenuitems_desc'] = 'Itens adicionais podem ser adicionados ao menu principal do aplicativo, especificando-os aqui. Insira cada item de menu personalizado em uma nova linha com formato: texto do item, URL do link, método de abertura de link e código de idioma (opcional, para exibir o item apenas para usuários do idioma especificado), separados por caracteres de canal.

Os métodos de abertura de links são: app (para vincular a uma atividade suportada pelo aplicativo), inappbrowser (para abrir um link em um navegador sem sair do aplicativo), navegador (para abrir o link no navegador padrão do dispositivo fora do aplicativo) e incorporado (para exibir o link em um iframe em uma nova página no aplicativo).

Por exemplo:
<pre>
Ajuda do aplicativo|https: //someurl.xyz/help|inappbrowser
Minhas notas|https: //someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https: //someurl.xyz/local/mygrades/index.php|incorporado|es
</pre>';
$string['disabledfeatures'] = '';
$string['disabledfeatures_desc'] = 'Selecione aqui os recursos que deseja desativar no aplicativo Móvel para o seu site. Observe que alguns recursos listados aqui podem já estar desabilitados através de outras configurações do site. Você terá que sair e fazer login novamente no aplicativo para ver as mudanças.';
$string['displayerrorswarning'] = 'Mostrar mensagens de debug (debugdisplay) está habilitado. Ele deve ser desabilitado.';
$string['downloadcourse'] = 'Download do curso';
$string['downloadcourses'] = 'Download dos cursos';
$string['enablesmartappbanners'] = 'Ativar Smart App Banners';
$string['enablesmartappbanners_desc'] = 'Se habilitado, um banner promovendo o aplicativo móvel será exibido ao acessar o site usando um navegador móvel.';
$string['forcedurlscheme'] = 'Se quiser permitir que apenas a sua aplicação personalizada da marca seja aberta numa janela do navegador, especifique o esquema de URL aqui, caso contrário, deixe o campo vazio.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forçar sair';
$string['forcelogout_desc'] = 'Se habilitado, a opção do aplicativo \'Mudar site\' é substituída por \'Sair. Desta forma o usuário será completamente desconectado e deverá inserir novamente sua senha na próxima vez que desejar acessar o site.';
$string['getmoodleonyourmobile'] = 'Obter o aplicativo para dispositivos móveis';
$string['httpsrequired'] = 'HTTPS necessário';
$string['insecurealgorithmwarning'] = 'Parece que o certificado HTTPS usa um algoritmo inseguro para assinar (SHA-1). Tente atualizar o certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que a cadeia de certificados é inválida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que o certificado HTTPS para o site expirou.';
$string['invalidcertificatestartdatewarning'] = 'Parece que o certificado HTTPS para o site ainda não é válido (está com a data de início no futuro).';
$string['invalidprivatetoken'] = 'Token privado inválido. O Token não pode estar vazio ou ser transmitido através do parâmetro GET.';
$string['invaliduserquotawarning'] = 'A quota de usuário (userquota) está definida com um número inválido. Defina um número válido (um valor inteiro) nas políticas do Site.';
$string['iosappid'] = 'Identificador exclusivo da aplicação móvel';
$string['iosappid_desc'] = 'Esta configuração pode ser deixada com o valor padrão a não que tenha uma aplicação iOS personalizada.';
$string['loginintheapp'] = 'Através da aplicação móvel';
$string['logininthebrowser'] = 'Através de uma janela do navegador (para módulos SSO)';
$string['loginintheembeddedbrowser'] = 'Através de navegador incorporado (para módulos SSO)';
$string['mainmenu'] = 'Menu principal';
$string['mobileapp'] = 'Aplicação móvel';
$string['mobileappconnected'] = 'Aplicativo móvel conectado';
$string['mobileappearance'] = 'Aparência em dispositivos móveis';
$string['mobileappenabled'] = 'Este site está habilitado para acesso pelo aplicativo móvel. <br /> <a href="{$a}"> Baixe o aplicativo</a>.';
$string['mobileauthentication'] = 'Autenticação em dispositivos móveis';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcionalidade Mobile';
$string['mobilenotificationsdisabledwarning'] = 'As notificações móveis não estão habilitadas. Elas devem ser habilitadas em Gerenciar saídas de mensagens.';
$string['mobilesettings'] = 'Configurações para dispositivos móveis';
$string['offlineuse'] = 'Uso offline';
$string['pluginname'] = 'Ferramentas do Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'Módulo não ativo ou não configurado.';
$string['privacy:metadata:core_userkey'] = 'As chaves do usuário usadas para criar a chave de login automático para o usuário atual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'A data da última solicitação de chave de login automático. Entre cada solicitação, são necessários 6 minutos.';
$string['remoteaddons'] = 'Complementos remotos';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que o certificado HTTPS é auto-assinado ou não é confiável. O aplicativo móvel só funcionará com sites confiáveis';
$string['setuplink'] = 'Página de download do aplicativo';
$string['setuplink_desc'] = 'URL da página com links para baixar o aplicativo móvel da App Store e do Google Play.';
$string['smartappbanners'] = 'Smart App Banners (apenas iOS)';
$string['typeoflogin'] = 'Tipo de autenticação';
$string['typeoflogin_desc'] = 'Se o site usar um método de autenticação de SSO, selecione por meio de uma janela do navegador ou por meio de um navegador incorporado. Um navegador incorporado oferece uma melhor experiência ao usuário, embora não funcione com todos os plug-ins do SSO.';
