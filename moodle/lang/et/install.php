<?PHP // $Id: install.php,v 1.1.2.3 2006/02/06 09:59:41 moodler Exp $ 
      // install.php - created with Moodle 1.4.4 + (2004083140)


$string['admindirerror'] = 'Valitud adminni kataloog on vale';
$string['admindirname'] = 'Administraatori kataloog';
$string['admindirsetting'] = 'V�ga v�hesed administraatorid kasutavad spetsiaalset URL-i et saada ligip��s kontroll paneeli v�i mingisse muusse kohta. Kahjuks l�heb see konflikti Moodle standartse asukohaga. Sa saad seda viga parandada kui nimetad oma adminni kataloogi �mber. N�iteks nagu: : <br /> <br /><b>moodleadmin</b><br /> <br /> See teeb adminni lingid Moodles korda';
$string['caution'] = 'Hoiatus';
$string['chooselanguage'] = 'Vali keel';
$string['compatibilitysettings'] = 'Kontrollin teie PHP s�tteid ...';
$string['configfilenotwritten'] = 'Installatsiooni skript ei suutnud automaatselt tekitada config.php faili mis sisaldasid sinu valitud seadeid. Arvatavasti sellep�rast ,et sinu Moodel kataloog ei ole kirjutatav. Sa saad manuaalselt kopeerida j�rgnevat koodi faili mille nimeks on config.php mis asub Moodle p�hikataloogis';
$string['configfilewritten'] = 'config.php on edukalt loodud';
$string['configurationcomplete'] = 'Seadistamine l�petatud';
$string['database'] = 'Andmekogu';
$string['databasesettings'] = 'Sa pead konfigureerima admebaasi kus suurem osa Moodle andmetest asub. See andmebaas peab juba olema loodud ja kasutajanimi ja parool peavad eksisteerima.
br />
<br /> <br />
<b>Type:</b> mysql or postgres7<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> andmebaasi nimi, eg moodle<br />
<b>User:</b> sinu andmebaasi kasutajanimi<br />
<b>Password:</b> sinu andmebaasi parool<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['dataroot'] = 'Andmete kataloog';
$string['datarooterror'] = 'Andme kataloog mis t�psustasid ei suudetud luua. Paranda teekond v�i tee ise manuaalselt';
$string['dbconnectionerror'] = 'Me ei suutnud sinu t�psustatud andmebaasi �hendada. Palun kontrollige oma andmebaasi seadeid';
$string['dbcreationerror'] = 'Andmebaasi loomise viga. Ei suudetud luua andmebaasi antud nimega ';
$string['dbhost'] = 'Pea Server';
$string['dbpass'] = 'Parool';
$string['dbprefix'] = 'Tabeli eesliide';
$string['dbtype'] = 'T��p';
$string['directorysettings'] = '<p>Palun kinnita Moodle installerimise asukoht.</p>

<p><b>Veebi aadress:</b>
T�psuta veebi aadress kus Moodlel on l�bip��su
Kui sinu veebilehel on l�bip��s l�bi mitme URL aadressi siis kasuta seda mis on sinu �pilaste jaoks k�ige kergem meeles pidada</p>

<p><b>Moodle Kataloog:</b>
T�psusta kataloogi kogu teekond kuni installeerimiseni.
Tee kindlaks ,et suured/v�iket�hed oleksid �iged</p>

<p><b>Andmete kataloog:</b>
Sul on vaja kohta kus Moodle saab salvestada �lesse laetud failid. See kataloog peaks olem loetav JA KIRJUTATAV veebi serveri kasutaja poolt. Kuid sellel ei tohiks olla l�bip��su otseselt l�bi veebi
</p>

';
$string['dirroot'] = 'Moodle kataloog';
$string['dirrooterror'] = 'Moodle Kataloogi seaded paistavad olevat valed. Me ei suuda Moodle installerimist siit leida. V��rtus on nullitud';
$string['download'] = 'Lae alla';
$string['fail'] = 'Fail';
$string['fileuploads'] = 'Failide �leslaadimine';
$string['fileuploadserror'] = 'See peaks olema sisse l�litatud';
$string['fileuploadshelp'] = '<p>Faili �lesse laadimine tundub olevat sinu serveris v�lja l�litatud.</p>

<p>Moodlet v�ib ikka installeerida kui ilma selle v�imaluseta. Te ei saa kursuse faile �lesse laadida</p>

<p>�lesselaadimise sissel�litamiseks pead sa redigeerima main php.ini faili oma s�steemis ja vahetama seaded
<b>file_uploads</b> to \'1\'.</p>';
$string['gdversion'] = 'GD versioon';
$string['gdversionerror'] = 'GD teek ei tohiks olla esitatud piltide protsessimiseks ja loomiseks';
$string['gdversionhelp'] = '<p>Sinu serveril ei paist GD installeeritud olevat.</p>

<p>GD on andmeteek mis on vajalik PHP-le selleks et ta lubaks Moodlel protsessida pilte. (Selliseid nagu profiili ikoone) ja luua uusi pilte ( nagu graafika logi) Moodle t��tab ikka ilma GD-ta aha need v�imalused oleksid teil v�lja l�litatud.</p>

<p>GD lisamine PHP-le Unixi all, kompileeri PHP-d kasutates --with-gd parameetrit.</p>';
$string['installation'] = 'Installeerimine';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'See peaks olema v�lja l�litatud';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime peaks olema v�lja l�litatud ,et Moodle saaks korralikult funktsioneerida.</p>

<p>Tavalielt on see vaikimisi v�lja l�litatud. Vaata seadistusi <b>magic_quotes_runtime</b>  sinu php.ini file </p>

<p>Kui sul ei ole ligip��su oma php.ini failile siis sa peaksid lisama j�rgmise koodi faili mille nimi on .htaccess mis asub sinu Moodle kataloogis:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'M�lu limiit';
$string['memorylimiterror'] = 'PHP m�lu limiit on pandud p�ris madalale .... hiljem v�ib sellega tekkida probleeme';
$string['memorylimithelp'] = '<p>PHP m�lu limiit sinu serveris on hetkel $a.</p>

<p>See v�ib hiljem tekitada Moodlel m�lu probleeme
</p>

<p>Me soovitame ,et sa konfigureeriksid PHP-d k�rgema limiidi peale, n�iteks 16M. On mitmeid viise selle tegemiseks:</p>
<ol>
<li>kui v�imalik siis kompileeri PHP uuesti <i>--enable-memory-limit</i>.

See lubab Moodlel ise m��rata m�lu limiiti.</li>
<li>Kui sul on l�bip�aas oma php.ini failile siis saa saad muuta  <b>m�lu limiiti</b> sealt. Kui sul ei ole l�bip��su siis sa v�id administraatorilt abi paluda
</li>
<li>M�nedel PHP serveritel sa saad tekitada  .htaccess faili oma Moodle kataloogi mis sisaldaks seda koodi:<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Kuigi m�nedel serveritel ei pruugi see t��data 
(Sa n�ed vigu kui vaatad lehti) Siis sa pead eemaldama selle .htaccess faili.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP-d ei ole �ieti MySQL-ga konfigureeritud. Palun kontrollige oma php.ini faili';
$string['pass'] = 'Korras';
$string['phpversion'] = 'PHP versioon';
$string['phpversionerror'] = 'PHP versioon peab olema v�hemalt 4.1.0';
$string['phpversionhelp'] = '<p>Moodle vajab v�hemalt 4.1.0 php versiooni</p>
<p>Sinu jooksev versioon on $a</p>
<p>Sa pead oma PHP-d uuendama!</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle\'l v�ib tekkida safe mode\'s komplikatsioone';
$string['safemodehelp'] = '<p>Moodle v�ib olla mitmesuguseid probleeme kui safe mood on sisse l�litatud. Ta ei pruugi lubada luua uusi faile.</p>

<p>Safe mood on tavaliselt sisse l�litatud paranoiliste veebi peremeeste poolt seega sa pead leidma endale uue veebi teenuse pakkuja </p>

<p>Sa v�id proovida installeerimist j�tkata kui soovid aga arvatavasti tekib sul hiljem probleeme</p>
';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'See peaks olema v�lja l�litatud';
$string['sessionautostarthelp'] = '<p>Moodle vahab sessiooni tuge ja ei t��ta ilma selleta.</p>

<p>Sessioone saab sisse l�litada php.ini failist.</p>';
$string['wwwroot'] = 'Veebi aadress';
$string['wwwrooterror'] = 'Veebi aadress ei paista olevat �ige. Moodle installatsioon ei paista olevat seal';

?>
