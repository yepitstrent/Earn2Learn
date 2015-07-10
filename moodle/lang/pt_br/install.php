<?PHP // $Id: install.php,v 1.3.2.3 2006/02/06 10:00:30 moodler Exp $ 
      // install.php - created with Moodle 1.5 + (2005060201)


$string['admindirerror'] = 'O diret�rio  admin indicado n�o � correto';
$string['admindirname'] = 'Diret�rio Admin';
$string['admindirsetting'] = 'Alguns provedores usam /admin como uma URL especial para o acesso ao painel de administra��o do site. Infelizmente isto entra em conflito com o percurso de acesso predefinido para as p�ginas de administra��o de Moodle. Voc� pode superar este problema mudando o nome do diret�rio de administra��o da sua instala��o e inserindo este nome aqui. Por exemplo:
<br/>�<br /><b>moodleadmin</b><br />�<br />
Isto resolve os problemas dos links da p�gina de administra��o de Moodle ';
$string['caution'] = 'Aten��o';
$string['chooselanguage'] = 'Escolha um idioma';
$string['compatibilitysettings'] = 'Controlando configura��es do PHP ...';
$string['configfilenotwritten'] = 'O script do instalador n�o conseguiu criar o arquivo config.php com as configura��es que voc� definiu, provavelmente o diret�rio n�o est� protegido e n�o aceita modifica��es. Voc� pode copiar o seguinte c�digo manualmente em um arquivo de texto com o nome config.php e carregar este arquivo no diret�rio principal de Moodle.';
$string['configfilewritten'] = 'config.php foi criado com sucesso';
$string['configurationcomplete'] = 'Configura��o terminada';
$string['database'] = 'Base de dados';
$string['databasecreationsettings'] = 'Agora � necess�rio configurar a base de dados que vai arquivar os dados de Moodle. Esta base de dados vai ser criada automaticamente pelo instalador Moodle4Windows com as op��es definidas abaixo.<br />
<br /> <br />
<b>Tipo:</b> definido como \"mysql\" pelo instalador<br />
<b>Host:</b> definido como \"localhost\" pelo instalador<br />
<b>Nome:</b> nome da base de dados, ex. moodle<br />
<b>Usu�rio:</b> definido como \"root\" pelo instalador<br />
<b>Senha:</b> a senha da sua base de dados<br />
<b>Prefixo das tabelas:</b> prefixo opcional a ser usado no nome de todas as tabelas';
$string['databasesettings'] = 'Agora voc� precisa configurar a base de dados em que os dados de Moodle ser�o conservados. Esta base de dados deve ter sido criada anterirmente bem como o nome de usu�rio e a senha necess�rios ao acesso..<br />
<br />�<br />
<b>Tipo:</b> mysql ou postgres7<br />
<b>Host:</b> ex. localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, ex. moodle<br />
<b>Usu�rio:</b> nome do usu�rio da sua base de dados<br />
<b>Senha:</b> a senha da sua base de dados<br />
<b>Prefixo das tabelas:</b> prefixo opcional a ser utilizado no nome das tabelas';
$string['dataroot'] = 'Diret�rio Data';
$string['datarooterror'] = 'O \'Diret�rio Data\' indicado n�o foi encontrado e n�o foi poss�vel criar um novo diret�rio. Corrija a indica��o do percurso ou crie o diret�rio manualmente.';
$string['dbconnectionerror'] = 'N�o foi poss�vel fazer a conex�o � base de dados indicada. Controle as configura��es da base de dados.';
$string['dbcreationerror'] = 'Erro de cia��o de base de dados. N�o foi poss�vel criar o nome da base de dados indicado com os par�metros fornecidos.';
$string['dbhost'] = 'Servidor hospedeiro';
$string['dbpass'] = 'Senha';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dbtype'] = 'Tipo';
$string['directorysettings'] = '<p>Por favor confirme os endere�os desta instala��o.</p>

<p><b>Endere�o Web:</b>
Indique o endere�o web completo para o acesso a Moodle. Se o seu site pode ser acessado por URLs m�ltiplas, escolha o endere�o que pode ser mais intuitivo para os seus estudantes. N�o adicione uma barra (slash) ao final do endere�o.</p>

<p><b>Diret�rio de Moodle:</b>
Indique o endere�o completo do diret�rio de instala��o, prestando muita aten��o quanto ao uso de mai�sculas e min�sculas.</p>

<p><b>Diret�rio Data:</b>
Indique um diret�rio para o arquivamento de documentos carregados no servidor. Este diret�rio deve ter as autoriza��es de acesso configuradas para que o Usu�rio do Servidor (ex. \'nobody\' ou \'apache\')possa acessar e criar novos arquivos. Aten��o, este diret�rio n�o deve ter o acesso via web autorizado.</p>';
$string['dirroot'] = 'Diret�rio Moodle';
$string['dirrooterror'] = 'A configura��o do percurso de acesso ao Diret�rio Moodle parece errada - n�o foi poss�vel encontrar uma instala��o de Moodle neste endere�o. O valor abaixo foi reconfigurado.';
$string['download'] = 'Download';
$string['fail'] = 'Erro';
$string['fileuploads'] = 'Carregamento de arquivos';
$string['fileuploadserror'] = 'Isto deve estar ativado';
$string['fileuploadshelp'] = '<p>Parece que o envio de documentos a este servidor n�o est� habilitado.</p>
<p>Moodle pode ser instalado, mas n�o ser� poss�vel carregar arquivos ou imagens nos cursos.</p>
<p>para habilitar o envio de arquivos � necess�rio editar edit o arquivo php.ini do sistema and mudar a configura��o de  
<b>file_uploads</b> para \'1\'.</p>';
$string['gdversion'] = 'Vers�o do gd';
$string['gdversionerror'] = 'A library GD';
$string['gdversionhelp'] = '<p>parece que o seu servidor n�o tem o GD instalado.</p>
<p>GD � uma library de PHP necess�ria � elabora��o de imagens como os fotos do perfil do usu�rio e os gr�ficos de estat�sticas. Moodle funciona sem o GD mas a elabora��o de imagens n�o ser� poss�vel.</p>
<p>para adicionar o GD ao PHP emUnix, compile o PHP usando o par�metro --with-gd .</p>
<p>Em Windows edite php.ini and cancele o coment�rio � linha que se refere a libgd.dll.</p>';
$string['globalsquotes'] = 'Tratamento de Globais sem Seguran�a';
$string['globalsquoteserror'] = 'Corrija a configura��o do seu PHP: desabilitar register_globals e/ou habilitar magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>N�o � aconselh�vel habilitar Register Globals e desabilitar Magic Quotes GPC ao mesmo tempo.</p>

<p>A configura��o aconselhada �
<b>magic_quotes_gpc = On</b> e
<b>register_globals = Off</b> no seu php.ini</p>

<p>Se voc� n�o tem acesso ao seu php.ini, adicione a seguinte linha de c�digo no arquivo .htaccess do diret�rio principal do seu Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p> 
';
$string['installation'] = 'Instala��o';
$string['magicquotesruntime'] = 'Run Time Magic Quotes ';
$string['magicquotesruntimeerror'] = 'Isto deve estar desativado';
$string['magicquotesruntimehelp'] = '<p> A runtime Magic Quotes  deve ser desativada para que Moodle to funcione corretamente.</p>

<p>Normalmente esta runtime j� � desativada ... controle o par�metro <b>magic_quotes_runtime</b> no seu arquivo php.ini .</p>

<p>Se voc� n�o tem acesso ao arquivo php.ini , adicione a seguinte linha no c�digo de um arquivo chamado .htaccess no diret�rio Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p> ';
$string['memorylimit'] = 'Limite de Mem�ria';
$string['memorylimiterror'] = 'A configura��o do limite da mem�ria do PHP est� muito baixa ... isto pode causar problemas no futuro.';
$string['memorylimithelp'] = '<p>O limite de mem�ria do PHP configurado atualmente no seu servidor � de $a.</p>

<p>Este limite pode causar problemas no futuro, especialmente quando muitos m�dulos estiverem ativados ou em caso de um n�mero elevado de usu�rios.</p>

<p>� aconselh�vel a configura��o do limite de mem�ria com o valor mais alto poss�vel, como 16M. Voc� pode tentar um dos seguintes caminhos:</p>
<ol>
<li>Se voc� puder, recompile o PHP com <i>--enable-memory-limit</i>.
Com esta opera��o Moodle ser� capaz de configurar o limite de mem�ria s�zinho.</li>
<li>Se voc� tiver acesso ao arquivo php.ini, voc� pode mudar o par�metro <b>memory_limit</b> para um valor pr�ximo a 16M. Se voc� n�o tiver acesso direto, pe�a ao administrador do sistema para fazer esta opera��o.</li>
<li>Em alguns servidores � poss�vel fazer esta mudan�a criando um arquivo .htaccess no diret�rio Moodle. O arquivo deve conter a seguinte express�o:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Alguns servidores n�o aceitam este procedimento e <b>todas</b> as p�ginas PHP do servidor ficam bloqueadas ou imprimem mensagens de erro. Neste caso ser� necess�rio cancelar o arquivo .htaccess .</p>
</li></ol> ';
$string['mysqlextensionisnotpresentinphp'] = 'O pHP n�o foi configurado corretamente com a extens�o MySQL e n�o pode comunicar com a base de dados. Controle o seu php.ini ou fa�a a recompila��o do PHP.';
$string['pass'] = 'OK';
$string['phpversion'] = 'Vers�o do PHP';
$string['phpversionerror'] = 'A vers�o do PHP n�o deve ser inferior a 4.1.0';
$string['phpversionhelp'] = '<p>Moodle requer a vers�o 4.1.0 de PHP ou posterior.</p>
<p>A sua vers�o � $a</p>
<p>Atualize a vers�o do PHP!</p>';
$string['safemode'] = 'Modalidade segura';
$string['safemodeerror'] = 'Moodle pode ter problemas se a modalidade segura estiver ativa';
$string['safemodehelp'] = '<p>Moodle pode ter alguns problemas quando o safe mode est� ativado. Provavelmente n�o ser� poss�vel criar novos arquivos.</p>
<p>O Safe mode normalmente � ativado apenas por servi�os de web hosting p�blicos enabled by paran�icos, � poss�vel que voc� tenha que escolher um outro servi�o de webhosting para o seu site.</p>
<p>Voc� pode continuar a instala��o mas provavelmente outros problemas surgir�o.</p>';
$string['sessionautostart'] = 'In�cio da sess�o autom�tico';
$string['sessionautostarterror'] = 'Isto deve estar ativado';
$string['sessionautostarthelp'] = '<p>Moodle requer o suporte a sess�es e n�o funciona sem isto.</p>

<p>As sess�es podem se habilitadas no arquivo php.ini ... controle o par�metro session.auto_start .</p>';
$string['wwwroot'] = 'Endere�o web';
$string['wwwrooterror'] = 'Este endere�o web n�o est� correto - a instala��o do Moodle n�o foi lencontrada.';

?>
