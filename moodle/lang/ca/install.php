<?PHP // $Id: install.php,v 1.3.2.3 2006/02/06 09:59:30 moodler Exp $ 
      // install.php - created with Moodle 1.5.3+ (2005060230)


$string['admindirerror'] = 'El directori d\'administraci� especificat �s incorrecte';
$string['admindirname'] = 'Directori d\'administraci�';
$string['admindirsetting'] = 'Alguns servidors web utilitzen un URL especial /admin per accedir a un tauler de control o quelcom semblant. Malauradament aquesta �s tamb� la ubicaci� est�ndard de les p�gines d\'administraci� de Moodle. Podeu arreglar aquest problema canviant el nom del directori d\'administraci� de Moodle en la vostra instal�laci� i posant el nou nom aqu�. Per exemple:<br /> <br /><b>moodleadmin</b><br /> <br />
Aix� modificar� els enlla�os d\'administraci� de Moodle.';
$string['caution'] = 'Alerta';
$string['chooselanguage'] = 'Trieu un idioma';
$string['compatibilitysettings'] = 'S\'estan comprovant els par�metres del PHP...';
$string['configfilenotwritten'] = 'La seq��ncia d\'instal�laci� no ha estat capa� de crear autom�ticament un fitxer config.php que contingui els par�metres que heu triat, probablement perqu� no pugui escriure al directori de Moodle. Podeu copiar a m� el codi seg�ent en un fitxer anomenat config.php dins del directori arrel de Moodle.';
$string['configfilewritten'] = 'S\'ha creat amb �xit el fitxer config.php';
$string['configurationcomplete'] = 'S\'ha completat la configuraci�';
$string['database'] = 'Base de dades';
$string['databasecreationsettings'] = 'Ara cal configurar els par�metres de la base de dades on s\'emmagatzemara la majoria de dades de Moodle. L\'instal�lador Moodle4Windows crear� autom�ticament aquesta base de dades amb els par�metres que especifiqueu aqu�.<br /><br /><br />
<b>Tipus:</b> mysql (determinat per l\'instal�lador).<br />
<b>Servidor:</b> localhost (determinat per l\'instal�lador.<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle.<br />
<b>Usuari:</b> root (determinat per l\'instal�lador).<br />
<b>Contrasenya</b>: la vostra contrasenya per a la base de dades.<br />
<b>Prefix de les taules:</b>: prefix opcional per als noms de les taules.';
$string['databasesettings'] = 'Ara heu de configurar la base de dades on s\'emmagatzemaran la major part de les dades de Moodle. Aquesta base de dades s\'ha de crear abans i cal tenir un nom d\'usuari i una contrasenya amb acc�s a ella.<br />
<br /> <br />
<b>Tipus:</b> mysql o postgres7<br />
<b>Ordinador:</b> p. ex. localhost o db.isp.com<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle<br />
<b>Usuari:</b> el nom d\'usuari de la base de dades<br />
<b>Contrasenya:</b> la contrasenya corresponent<br />
<b>Prefix de les taules:</b> prefix opcional del nom de les taules';
$string['dataroot'] = 'Directori de dades';
$string['datarooterror'] = 'No s\'ha pogut trobar o crear el directori de dades que heu especificat. Corregiu el cam� o creeu el directori a m�.';
$string['dbconnectionerror'] = 'No es pot obrir la connexi� amb la base de dades que heu especificat. Comproveu els par�metres de la base de dades.';
$string['dbcreationerror'] = 'Error en la creaci� de la base de dades. No s\'ha pogut crear la base de dades amb els par�metres proporcionats.';
$string['dbhost'] = 'Ordinador servidor';
$string['dbpass'] = 'Contrasenya';
$string['dbprefix'] = 'Prefix de taules';
$string['dbtype'] = 'Tipus';
$string['directorysettings'] = '<p>Confirmeu les ubicacions d\'aquesta instal�laci� de Moodle.</p>

<p><b>Adre�a web:</b>
Especifiqueu l\'adre�a web completa d\'acc�s a Moodle. Si el vostre lloc �s accessible per mitj� de diversos URL, trieu el m�s natural per als estudiants. No inclogueu la barra final.</p>

<p><b>Directori de Moodle:</b>
Especifiqueu el cam� complet del directori d\'aquesta instal�laci�. Assegureu-vos que les maj�scules/min�scules s�n correctes.</p>

<p><b>Directori de dades:</b>
Necessiteu un lloc on Moodle pugui desar els fitxers que es pengin. L\'usuari del servidor web (generalment \'nobody\' o \'apache\') ha de tenir permisos de lectura i d\'ESCRIPTURA en aquest directori, per� no hauria de ser accessible directament per web.</p>';
$string['dirroot'] = 'Directori de Moodle';
$string['dirrooterror'] = 'El par�metre \'Directori de Moodle\' sembla incorrecte: no s\'hi ha pogut trobat cap instal�laci� de Moodle. S\'ha reiniciat el valor del par�metre.';
$string['download'] = 'Baixa';
$string['fail'] = 'Error';
$string['fileuploads'] = 'C�rrega de fitxers';
$string['fileuploadserror'] = 'Hauria d\'estar habilitada';
$string['fileuploadshelp'] = '<p>Sembla que la c�rrega de fitxers est� inhabilitada al vostre servidor.</p>

<p>Moodle es pot instal�lar igualment, per� sense aquesta capacitat no podreu penjar fitxers als cursos o imatges dels usuaris.</p>

<p>Per habilitar la c�rrega de fitxers cal editar el fitxer php.ini principal del sistema i posar el par�metre <b>file_uploads</b> a \'1\'.</p>';
$string['gdversion'] = 'Versi� GD';
$string['gdversionerror'] = 'La biblioteca GD hauria d\'estar present per processar i crear imatges';
$string['gdversionhelp'] = '<p>Sembla que el vostre servidor no t� instal�lat el GD.</p>

<p>GD �s una biblioteca requerida pel PHP per tal que Moodle pugui processar imatges (p. ex. les icones dels perfils d\'usuari) i crear imatges noves (p. ex. els gr�fics dels registres d\'activitat). Moodle pot funcionar sense GD, per� aquestes caracter�stiques no estaran disponibles.</p>

<p>Per afegir GD al PHP en Unix, compileu el PHP amb el par�metre --with-gd.</p>

<p>En Windows generalment es pot editar el fitxer php.ini i treure el comentari de la l�nia que porti la refer�ncia a libgd.dll.</p>';
$string['globalsquotes'] = 'Gesti� insegura dels globals';
$string['globalsquoteserror'] = 'Arregleu els par�metres del vostre PHP: inhabiliteu register_globals i/o habiliteu magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>No s\'aconsella tenir inhabilitat Magic Quotes GPC i tenir alhora habilitat Register Globals.</p>

<p>La configuraci� recomanada �s <b>magic_quotes_gpc = On</b> i <b>register_globals = Off</b> en el fitxer php.ini</p>

<p>Si no teniu acc�s al php.ini, potser podreu afegir les l�nies seg�ents en un fitxer anomenat .htaccess dins del directori Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p> ';
$string['installation'] = 'Instal�laci�';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Hauria d\'estar desactivat';
$string['magicquotesruntimehelp'] = '<p>Aquest par�metre hauria d\'estar desactivat per tal que Moodle funcioni correctament.</p>

<p>Normalment est� desactivat per defecte. Comproveu el valor de <b>magic_quotes_runtime</b> al vostre fitxer php.ini.</p>

<p>Si no teniu acc�s al php.ini, haur�eu de col�locar la l�nia seg�ent en un fitxer anomenat .htaccess dins del directori de Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'L�mit de mem�ria';
$string['memorylimiterror'] = 'El l�mit de mem�ria del PHP est� definit una mica baix. Podeu tenir problemes m�s endavant.';
$string['memorylimithelp'] = '<p>El l�mit de mem�ria del PHP del vostre servidor actualment est� definit en $a.</p>

<p>Aix� pot causar que Moodle tingui problemes de mem�ria m�s endavant, especialment si teniu molts m�duls habilitats i/o molts usuaris.</p>

<p>�s recomanable que configureu el PHP amb un l�mit superior, com ara 16 MB, sempre que sigui possible. Hi ha diverses maneres de fer aix�:</p>
<ol>
<li>Si podeu, recompileu el PHP amb <i>--enable-memory-limit</i>. Aix� permetr� que Moodle defineixi el l�mit de mem�ria per si mateix.</li>
<li>Si teniu acc�s al fitxer php.ini, podeu canviar el par�metre <b>memory_limit</b> a 16M. Si no hi teniu acc�s podeu demanar al vostre administrador que ho faci ell.</li>
<li>En alguns servidors PHP podeu crear un fitxer .htaccess dins del directori de Moodle amb aquesta l�nia:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Tanmateix, en alguns servidors aix� far� que no funcioni <b>cap</b> p�gina PHP (es visualitzaran errors) en el qual cas haur�eu de suprimir el fitxer .htaccess.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'El PHP no s\'ha configurat correctament amb l\'extensi� MySQL per tal que es pugui comunicar amb MySQL. Comproveu el fitxer php.ini o recompileu el PHP.';
$string['pass'] = 'Correcte';
$string['phpversion'] = 'Versi� PHP';
$string['phpversionerror'] = 'La versi� del PHP ha de ser com a m�nim la 4.1.0';
$string['phpversionhelp'] = '<p>Moodle necessita la versi� de PHP 4.1.0 o posterior.</p>
<p>A hores d\'ara esteu utilitzant la versi� $a.</p>
<p>Us caldr� actualitzar el PHP o traslladar Moodle a un ordinador amb una versi� de PHP m�s recent.</p>';
$string['safemode'] = 'Mode segur';
$string['safemodeerror'] = 'Moodle pot tenir problemes amb el mode segur activat';
$string['safemodehelp'] = '<p>Moodle pot tenir diversos problemes amb el mode segur activat. Probablement no podr� crear fitxers nous.</p>

<p>Normalment el mode segur nom�s est� habilitat en servidors webs p�blics una mica paranoics, de manera que �s probable que h�giu de buscar un altre servei d\'allotjament per al vostre Moodle.</p>

<p>Podeu continuar la instal�laci� si voleu, per� trobareu problemes de funcionament m�s endavant.</p>';
$string['sessionautostart'] = 'Autoinici de sessi�';
$string['sessionautostarterror'] = 'Hauria d\'estar desactivat';
$string['sessionautostarthelp'] = '<p>Moodle necessita suport per a sessions i no funcionar� sense.</p>

<p>Les sessions es poden habilitar en el fitxer php.ini. Comproveu el par�metre session.auto_start.</p>';
$string['wwwroot'] = 'Adre�a web';
$string['wwwrooterror'] = 'L\'adre�a web no sembla v�lida. La instal�laci� de Moodle no sembla que sigui en aquesta ubicaci�,';

?>
