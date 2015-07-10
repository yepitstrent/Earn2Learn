<?PHP // $Id: install.php,v 1.6.2.4 2006/02/06 10:00:35 moodler Exp $ 
      // install.php - created with Moodle 1.6 development (2005101200)


$string['admindirerror'] = 'Den katalog f�r administration som �r angiven �r felaktig';
$string['admindirname'] = 'Katalog f�r administration';
$string['admindirsetting'] = 'Ett litet f�tal webbv�rdar (t ex hotell) anv�nder /admin som en speciell URL som Du f�r tillg�ng till f�r att kunna anv�nda en kontrollpanel e d. Tyv�rr s� st�mmer detta inte s� bra �verens med standardplaceringen av Moodles sidor f�r administration. Du kan ordna till det genom att d�pa om admin katalogen i Din installation och skriva in detta nya namn h�r. Till exempel: <br/> <br /><b>moodleadmin</b><br /> <br /> Detta kommer att r�tta till l�nkarna till admin i Moodle';
$string['caution'] = 'Varning';
$string['chooselanguage'] = 'V�lj ett spr�k';
$string['compatibilitysettings'] = 'Kontrollerar Dina PHP-inst�llningar';
$string['configfilenotwritten'] = 'Skriptet f�r installationen kunde inte automatiskt skapa en config.php som inneh�ller de inst�llningar som Du har valt. Var sn�ll och kopiera den f�ljande koden till en fil med namnet config.php i Moodles \"root\"-katalog.';
$string['configfilewritten'] = 'config.php har skapats framg�ngsrikt';
$string['configurationcomplete'] = 'Konfigurationen �r  genomf�rd';
$string['database'] = 'Databas';
$string['databasecreationsettings'] = 'Nu beh�ver Du konfigurera inst�llningarna i databasen d�r det mesta av data i Moodle kommer att lagras. Den h�r databasen kommer att skapas automatiskt av Moodle4Windows-installeraren med de inst�llningar som anges nedan.
<br /><b>Typ:</b> fixerad till \"mysql\" av installeraren
<br /><b>V�rd:</b> fixerad till \"localhost\" av installeraren
<br /><b>Namn:</b> databasnamn, t.ex. Moodle  
<br /><b>Anv�ndare:</b> fixerad till \"root\" av installeraren
<br /><b>L�senord:</b> l�senordet till Din databas
<br /><b>Prefix f�r tabeller:</b> valfritt prefix som anv�nds f�r alla tabeller';
$string['databasesettings'] = 'Nu beh�ver Du konfigurera den databas d�r det mesta av Moodles data kommer att sparas. Den h�r databasen m�ste redan vara skapad och det m�ste ing� ett anv�ndarnamn och ett l�senord som Du kan anv�nda.<br />
<br /> <br />
<b>Typ:</b> mysql eller postgres7<br />
<b>V�rd:</b> t ex localhost eller db.isp.com<br />
<b>Namn:</b> namn p� databasen, t ex moodle<br />
<b>Anv�ndare:</b> Ditt anv�ndarnamn f�r tillg�ng till databasen<br />
<b>L�senord:</b> Ditt l�senord f�r tillg�ng till databasen<br />
<b>Prefix f�r tabeller:</b> ett valfritt prefix som kopplas till alla namn p� tabeller';
$string['dataroot'] = 'katalog f�r data';
$string['datarooterror'] = 'Den \"katalog f�r data\" som Du har angivit gick inte att hitta eller skapa. Du f�r antingen korrigera s�kv�gen eller skapa katalogen manuellt.';
$string['dbconnectionerror'] = 'Det gick inte att ansluta till den databas som Du har angivit. Var sn�ll och kontrollera inst�llningarna till Din databas.';
$string['dbcreationerror'] = 'Fel (error) n�r databasen skulle skapas. Det gick tyv�rr inte att skapa det namn (och med de inst�llningar) p� databasen som Du har angivit ';
$string['dbhost'] = 'V�rdserver';
$string['dbpass'] = 'L�senord';
$string['dbprefix'] = 'Prefix f�r tabeller';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p>Var sn�ll och bekr�fta placeringarna av denna installation av Moodle</p>
<p><b>Webbadress</b>
Ange den fullst�ndiga adressen till Moodle. Om Din webbplats g�r att n� via flerfaldiga (ett antal olika) URL:er s� b�r Du v�lja den som �r mest naturlig f�r Dina anv�ndare (studenter etc).
Ta inte inte med n�got avslutande v�nsterlutat snedstreck \"/\".</p>

<p><b>Katalogen f�r Moodle</b>
Ange den fullst�ndiga s�kv�gen till den h�r installationen. Kontrollera att det st�mmer med s�dant som �r skiftl�gesk�nsligt (stor/liten bokstav).
</p>
<p><b>Katalogen f�r data</b>
Du beh�ver ett utrymme d�r Moodle kan spara uppladdade filer. Till denna katalog b�r det finnas l�s- OCH SKRIV-r�ttigheter f�r anv�ndaren av webbservern (vanligtvis \'nobody\' eller  \'apache\') men katalogen b�r inte vara tillg�nglig direkt via webben. ';
$string['dirroot'] = 'Katalogen f�r Moodle';
$string['dirrooterror'] = 'Inst�llningarna f�r \"Katalogen f�r Moodle\" tycks vara felaktiga - det g�r inte att hitta n�gon installation av Moodle d�r. V�rdet h�r nedan har �terst�llts.';
$string['download'] = 'Ladda ner';
$string['fail'] = 'Misslyckas';
$string['fileuploads'] = 'Uppladdningar av filer';
$string['fileuploadserror'] = 'Detta b�r vara aktiverat (on)';
$string['fileuploadshelp'] = '<p>Uppladdning av filer verkar vara avaktiverat p� Din server.</p>
<p>Det kan fortfarande vara s� att Moodle �r installerat, men utan denna funktionalitet s� kommer Du inte att kunna ladda upp kursfiler eller nya bilder till anv�ndarprofilerna. </p>
<p>F�r att aktivera uppladdning av filer s� m�ste Du (eller Din systemadministrat�r) redigera den �vergripande php.ini-filen p� Ert system och �ndra inst�llningen f�r <b>uppladdning av filer (file uploads)</b> till \'1\'.</p>';
$string['gdversion'] = 'GD version';
$string['gdversionerror'] = 'GD biblioteket b�r vara tillg�ngligt f�r att Du ska kunna bearbeta och skapa bilder. ';
$string['gdversionhelp'] = '<p>Det verkar som om GD inte �r installerat p� Din server. </p>
<p>GD �r ett bibliotek som �r n�dv�ndigt i PHP om Moodle ska kunna bearbeta bilder (som t ex bilderna i anv�ndarprofilerna) eller skapa nya (som t ex graferna till loggarna). Moodle kommer fortfarande att fungera utan GD men dessa funktioner kommer allts� att saknas. </p>
<p>Om Du vill l�gga till GD under UNIX, s� f�r Du kompilera PHP genom att anv�nda parametern --with-gd.</p>
<p>Under Windows kan Du vanligtvis redigera php.ini och ta bort kommentarmarkeringen f�r den rad som refererar till libgd.dll</p>';
$string['globalsquotes'] = 'Inte s�ker hantering av globala variabler';
$string['globalsquoteserror'] = 'Ordna till Dina inst�llningar f�r PHP: avaktivera register_globals och/eller avaktivera magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinationen av avaktiverade Magic Quotes GPC och aktiverade Register Globals samtidigt rekommenderas inte.</p>

<p>Den rekommenderade inst�llningen �r <b>magic_quotes_gpc = On</b> och <b>register_globals = Off</b> i Din php.ini</p>

<p>Om Du inte har tillg�ng till Din php.ini, s� kanske Du kan placera f�ljande rad i en fil som kallas .htaccess inne i Din Moodle-katalog:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>';
$string['installation'] = 'Installation';
$string['magicquotesruntime'] = 'k�rtid f�r \'Magiska citat\'';
$string['magicquotesruntimeerror'] = 'Det h�r b�r vara \'off\'';
$string['magicquotesruntimehelp'] = '<p>K�rtid f�r \'Magiska citat\' (Magic quotes runtime) b�r vara inst�llt till \'off\' f�r att Moodle ska fungera korrekt</p>
<p>Som standard �r det normalt sett inst�llt till \'off\'... Kontrollera inst�llningen f�r \'Magic quotes runtime\' i Din php.ini-fil.</p>
<p>Om Du inte har tillg�ng till Din php.ini-fil s� kanske Du kan l�gga in f�ljande rad i en fil som heter .htaccess i Din katalog f�r Moodle:<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Minnesbegr�nsning';
$string['memorylimiterror'] = 'Minnesbegr�nsningen f�r PHP p� Din server �r f n inst�llt till ett ganska l�gt v�rde... Detta kan leda till problem senare.';
$string['memorylimithelp'] = '<p>Minnesbegr�nsningen f�r PHP p� Din server �r f n inst�llt till $a.</p>
<p>Detta kan f�rorsaka att Moodle f�r minnesproblem senare, s�rskilt om Du har aktiverat m�nga moduler och/eller har m�nga anv�ndare.</p>
<p>Vi rekommenderar att Du konfigurerar PHP med en h�gre begr�nsning, som t ex 16M. Det finns flera s�tt att g�ra detta som Du kan pr�va med:</p> <ol>
<li>Om Du har m�jlighet till det s� kan Du kompilera om PHP med<i>--enable-memory-limit </i>Detta g�r det m�jligt f�r Moodle att st�lla in minnesbegr�nsningen sj�lv. </li>
<li>Om Du har tillg�ng till Din php.ini-fil s� kan Du �ndra inst�llningen f�r <b>memory limit</b> till n�got i stil med 16M. Om Du inte har tillg�ng sj�lv s� kan Du kanske be Din systemadministrat�r att g�ra detta �t Dig.</li>
<li>P� en del PHP-servrar kan Du skapa en .htaccess-fil i Moodle-katalogen som inneh�ller den h�r raden: <blockquote>php_value memory_limit 16M</blockquote>.<br />Detta kan dock p� en del servrar leda till att <b>inga</b> PHP-sidor fungerar. (Du f�r Error-sidor ist�llet f�r de riktiga) s� d� f�r Du ta bort .htaccess-filen.</li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP har inte konfigurerats p� det s�tt som m�ste i f�rh�llande till MySQL-extensionen f�r att kunna kommunicera med MySQL. Var sn�ll och kontrollera Din php.ini-fil eller kompilera om PHP.';
$string['pass'] = 'Pass';
$string['phpversion'] = 'PHP-version';
$string['phpversionerror'] = 'PHP-versionen m�ste vara minst 4.1.0';
$string['phpversionhelp'] = '<p>Moodle kr�ver minst PHP 4.1.0</p>
<p>Du anv�nder f n verion $a</p>
<p>Du m�ste uppgradera PHP eller flytta till en v�rd som har en nyare version av PHP!</p>';
$string['safemode'] = 'S�kert l�ge';
$string['safemodeerror'] = 'Moodle kan f� problem om \'s�kert l�ge\' (safe mode) �r aktiverat';
$string['safemodehelp'] = '<p>Moodle kan f� ett antal problem om \'s�kert 
l�ge\' �r aktiverat. Systemet kommer t ex troligtvis inte att kunna skapa nya filer.</p>
<p>S�kert l�ge �r normalt sett bara aktiverat hos mycket f�rsiktiga webbv�rdar(t ex webbhotell) s� Du kanske helt enkelt m�ste hitta ett annat webbhotell f�r Din webbplats med Moodle.</p>
<p>Du kan f�rs�ka att forts�tta installationen om Du vill, men bli inte f�rv�nad om det dyker upp ett och annat problem l�ngre fram.</p>';
$string['sessionautostart'] = 'Automatisk start av session';
$string['sessionautostarterror'] = 'De h�r b�r vara inst�llt till \'off\'.';
$string['sessionautostarthelp'] = '<p>Moodle kr�ver st�d f�r sessioner och kommer inte att fungera utan det.</p>
<p>Sessioner kan vara aktiverade i php.ini-filen... kontrollera parametern f�r session.auto_start. </p>';
$string['wwwroot'] = 'Webbadress';
$string['wwwrooterror'] = 'Webbadressen verkar inte vara giltig - den h�r installationen av Moodle verkar inte att finnas d�r.';

?>
