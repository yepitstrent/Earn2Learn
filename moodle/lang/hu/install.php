<?PHP // $Id: install.php,v 1.1.2.3 2006/02/06 09:59:47 moodler Exp $ 
      // install.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005010100)


$string['admindirerror'] = 'A megadott adminisztr�tor-k�nyvt�r hib�s';
$string['admindirname'] = 'Adminisztr�tor-k�nyvt�r';
$string['admindirsetting'] = 'Nagyon kev�s kiszolg�l�n�l haszn�latos a /admin mint a vez�rl�panel vagy egy�b el�r�s�re szolg�l� k�l�n URL. Sajnos ez �tk�zik a Moodle admin-oldalainak szok�sos hely�vel. Ha telep�t�s�ben �tnevezi a k�nyvt�rat �s az �j nevet ide helyezi, a hiba megold�dik. P�ld�ul: <br /> <br /><b>moodleadmin</b><br /> <br />
Ezzel az adminisztr�tori ugr�pontok a Moodle-ban rendbe tehet�k.';
$string['caution'] = 'Vigy�zat';
$string['chooselanguage'] = 'V�lasszon nyelvet';
$string['compatibilitysettings'] = 'PHP-be�ll�t�sainak ellen�rz�se ...';
$string['configfilenotwritten'] = 'A telep�t� k�ddal nem lehetett a megadott be�ll�t�saival l�trehozni a config.php �llom�nyt, feltehet�leg az�rt, mert a Moodle k�nyvt�ra nem �rhat�. Az al�bbi k�dot �tm�solhatja a Moodle gy�k�rk�nyvt�r�ba egy config.php nev� �llom�nyba.';
$string['configfilewritten'] = 'a config.php l�trehoz�sa siker�lt';
$string['configurationcomplete'] = 'Be�ll�t�s k�sz';
$string['database'] = 'Adatb�zis';
$string['databasesettings'] = 'Most be kell �ll�tania azt az adatb�zist, ahol Moodle-adatainak t�bbs�g�t t�rolni fogja. Az adatb�zisnak m�r l�teznie kell, a hozz� tartoz� azonos�t�val �s jelsz�val egy�tt.<br />
<br /> <br />
<b>T�pus:</b> mysql vagy postgres7<br />
<b>Gazdag�p:</b> pl. localhost vagy db.isp.com<br />
<b>N�v:</b>az adatb�zis neve, pl. moodle<br />
<b>Felhaszn�l�:</b>az �n adatb�zishoz haszn�lt azonos�t�ja<br />
<b>Jelsz�:</b> az �n adatb�zishoz haszn�lt jelszava<br />
<b>T�bl�zat el�tagja:</b> opcion�lis el�tag az �sszes t�blan�vhez	';
$string['databasecreationsettings'] = '    Most a Moodle adatainak t�rol�s�ra sz�nt adatb�zis be�ll�t�sait kell elv�geznie.  
Ezt az adatb�zist a Moodle4Windows telep�t� automatikusan be�ll�tja az al�bbiak szerint.<br />
    <br /> <br />
       <b>T�pus:</b> a telep�t� \"mysql\"-re �ll�tja be<br />
       <b>Gazdag�p:</b> a telep�t� \"localhost\"-ra �ll�tja<br />
       <b>N�v:</b> az adatb�zis neve, pl. moodle<br />
       <b>Felhaszn�l�:</b> a telep�t�  \"root\"-ra �ll�tja<br />
       <strong>Jelsz�:</strong> az �n jelszava az adatb�zishoz<br />
       <b>T�bl�zat el�tagja:</b> opcion�lis el�tag az �sszes t�bl�zatn�vhez';
$string['dataroot'] = 'Adatk�nyvt�r';
$string['datarooterror'] = 'A megadott \'Adatk�nyvt�r\' nem l�tezik vagy nem siker�lt l�trehozni. M�dos�tsa az �tvonalat vagy hozza l�tre a k�nyvt�rat.';
$string['dbconnectionerror'] = 'Nem siker�lt a megadott adatb�zishoz csatlakozni. Ellen�rizze adatb�zis�nak be�ll�t�sait.';
$string['dbcreationerror'] = 'Hiba az adatb�zis l�trehoz�sa k�zben. A megadott be�ll�t�sokkal nem lehetett l�trehozni az adatb�zis nev�t.';
$string['dbhost'] = 'Gazdag�p szervere';
$string['dbpass'] = 'Jelsz�';
$string['dbprefix'] = 'T�bl�zat el�tagja';
$string['dbtype'] = 'T�pus';
$string['directorysettings'] = '<p>Hagyja j�v� a Moodle telep�t�s�nek hely�t.</p>

<p><b>Webc�m:</b>
Adja meg a teljes webc�met, ahol a Moodle el�rhet� lesz. Ha port�lja t�bb URL-r�l is el�rhet�, adja meg azt, amelyet a tanul�k legink�bb haszn�lni fognak. Ne tegyen a v�g�re perjelet.</p>

<p><b>Moodle-k�nyvt�r:</b>
Adja meg a telep�t�s teljes �tvonal�t. �gyeljen a kis-/nagybet�k k�l�nb�z�s�re.</p>

<p><b>Adatk�nyvt�r:</b>
Egy helyre lesz sz�ks�ge, ahova a Moodle a felt�lt�tt �llom�nyokat menti. A k�nyvt�rnak olvashat�nak �s a webszerver felhaszn�l�ja �ltal (ez �ltal�ban \'nobody\' vagy \'apache\') �RHAT�NAK kell lennie, ugyanakkor ne legyen az Internetr�l k�zvelten�l el�rhet�.</p>';
$string['dirroot'] = 'Moodle-k�nyvt�r';
$string['dirrooterror'] = 'A \'Moodle-k�nyvt�r\' be�ll�t�sa feltehet�leg hib�s - nem tal�lhat� alatta a Moodle telep�t�se. Az al�bbi �rt�ket vissza�ll�tottuk.';
$string['download'] = 'Let�lt�s';
$string['fail'] = 'Hiba';
$string['fileuploads'] = '�llom�nyok felt�lt�se';
$string['fileuploadserror'] = 'Bekapcsolva kell lennie';
$string['fileuploadshelp'] = '<p>Szerver�n az �llom�nyok felt�lt�se feltehet�leg ki van kapcsolva.</p>
<p>A Moodle ett�l m�g telep�thet�, de nem fog tudni kurzus�llom�nyokat vagy �j felhaszn�l�i profilokat felt�lteni.</p>
<p>�llom�nyok felt�lt�s�nek bekapcsol�s�hoz �nnek (vagy rendszeradminisztr�tor�nak) a rendszer f� php.ini nev� �llom�ny�ban a 
<b>file_uploads</b> be�ll�t�st \'1\'-re kell m�dos�tania.</p>';
$string['gdversion'] = 'GD-verzi�';
$string['gdversionerror'] = 'K�pek feldolgoz�s�hoz �s k�sz�t�s�hez a GD-k�nyvt�rnak l�teznie kell.';
$string['gdversionhelp'] = '<p>Feltehet�leg szerver�n nincs telep�tve a GD.</p>
<p>A GD a PHP sz�m�ra sz�ks�ges k�nyvt�r, mellyel a Moodle k�peket (p�ld�ul flehaszn�l�i ikonokat) tud feldolgozni �s �jakat tud k�sz�teni (p�ld�ul napl�diagramokat). A Moodle m�k�dik GD n�lk�l is - csak ezek a lehet�s�g nem lesznek az �n sz�m�ra el�rhet�k.</p>
<p>A GD Unix alatti PHP-hez val� hozz�ad�s�hoz a PHP-t ford�tsa a --with-gd param�terrel.</p>
<p>Windows alatt szerkesztheti a php.ini-t: el kell t�vol�tani a megjegyz�sjelet a libgd.dll-re hivatkoz� sor elej�r�l.</p>';
$string['globalsquotes'] = 'Glob�lis v�ltoz�k nem biztons�gos kezel�se';
$string['globalsquoteserror'] = 'Jav�tsa ki a PHP be�ll�t�sait: kapcsoolja ki a disable register_globals �s/vagy az enable magic_quotes_gpc opci�kat';
$string['globalsquoteshelp'] = '<p>Nem aj�nlottt egyszerre kikapcsolni a Magic Quotes GPC-t �s bekapcsolni a Register Globals-t.</p>

<p>Az aj�nlott be�ll�t�s <b>magic_quotes_gpc = On</b> �s <b>register_globals = Off</b> a php.ini-ben.</p>

<p>Ha nem tudja szerkeszteni a php.ini �llom�nyt, esetleg megpr�b�lhatja az al�bbi sort besz�rni a Moodle-k�nyvt�rban egy .htaccess �llom�nyba:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>   
   ';
$string['installation'] = 'Telep�t�s';
$string['magicquotesruntime'] = 'Fut�sidej� Magic Quotes';
$string['magicquotesruntimeerror'] = 'Kikapcsolva kell lennie';
$string['magicquotesruntimehelp'] = '<p>A fut�sidej� Magic Quotes-nak kikapcsolva kell lennie runtime should be turned off for Moodle to function properly.</p>

<p>Normally it is off by default ... see the setting <b>magic_quotes_runtime</b> in your php.ini file.</p>

<p>If you don\'t have access to your php.ini, you might be able to place the following line in a file 
called .htaccess within your Moodle directory:
</p><blockquote>php_value magic_quotes_runtime Off</blockquote>
';

$string['memorylimit'] = 'Mem�riakorl�t';
$string['memorylimiterror'] = 'A PHP mem�riakorl�tja t�l alacsonyra van �ll�tva... ez a k�s�bbiekben gondot okozhat.';
$string['memorylimithelp'] = '<p>Szerver�n a PHP mem�riakorl�tja jelenleg $a.</p>
<p>Ez a Moodle sz�m�ra a k�s�bbiekben gondot okozhat, k�l�n�sen akkor, ha sok modulja �s/vagy sok felhaszn�l�ja van bekapcsolva.</p>
<p>Ha lehet, �ll�tsa be a PHP magasabb korl�ttal, pl. 16M-tal. T�bbf�lek�ppen pr�b�lkozhat:</p>
<ol>
<li>Ha lehet, ford�tsa �jra a PHP-t <i>--enable-memory-limit</i>-tel. �gy a Moodle maga �ll�thatja be a mem�riakorl�tot.</li>
<li>Ha el�rhet� a php.ini �llom�ny, m�dos�tsa a <b>memory_limit</b> 
be�ll�t�st pl. 16M-ra. Ha nem �ri el az �llom�nyt, k�rje meg a rendszeradminisztr�tort a m�dos�t�s elv�gz�s�re.</li>
<li>Egyes PHP-szervereken l�trehozhat egy  .htaccess �llom�nyt a Moodle-k�nyvt�rban az al�bbi sorral:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Vannak szerverek, ahol ez <b>az �sszes</b> PHP-oldal m�k�d�s�t megakad�lyozza  
(az oldalak hib�t jeleznek), ez�rt el kell t�vol�tania a .htaccess �llom�nyt.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'A PHP nincs j�l be�ll�tva a has not been properly configured with the MySQL extension so that it can communicate with MySQL. Please check your php.ini file or recompile PHP.';
$string['pass'] = 'Rendben';
$string['phpversion'] = 'PHP-verzi�';
$string['phpversionerror'] = 'A PHP-verzi� legal�bb 4.1.0 legyen';
$string['phpversionhelp'] = '<p>A Moodle haszn�lat�hoz legal�bb PHP 4.1.0 verzi�ja sz�ks�ges.</p>
<p>Az �n �ltal haszn�lt verzi� $a</p>
<p>Friss�tse a PHP-verzi�t vagy t�rjen �t �jabb PHP-verzi�t m�k�dtet� gazdag�pre!</p>';
$string['safemode'] = 'Biztons�gos m�d';
$string['safemodeerror'] = 'A Moodle bekapcsolt biztons�gos m�d eset�n akad�lyba �tk�zhet';
$string['safemodehelp'] = '<p>A Moodle bekapcsolt biztons�gos m�d eset�n egy sor probl�m�ba �tk�zhet, mindenekel�tt feltehet�leg nem tud majd �j �llom�nyokat l�trehozni.</p>
<p>A biztons�gos m�dot �ltal�ban t�lzottan p�nikol� webes gazd�k kapcsolj�k be, �gy val�sz�n�leg egy m�sik gazdag�pet kell keresnie a Moodle sz�m�ra.</p>
<p>Ha k�v�nja, folytathatja a telep�t�st, de sz�m�tson a k�s�bbiekben n�h�ny hib�ra.</p>';
$string['sessionautostart'] = 'Folyamat automatikus kezd�se';
$string['sessionautostarterror'] = 'Ezt ki kell kapcsolni';
$string['sessionautostarthelp'] = '<p>A Moodle-nak folyamatt�mogat�sra van sz�ks�ge, n�lk�le nem m�k�dik.</p>
<p>A folyamatok a php.ini �llom�nyban kapcsolhat�k be, l�sd a session.auto_start param�tert.</p>';
$string['wwwroot'] = 'Webc�m';
$string['wwwrooterror'] = 'A webc�m nem �rv�nyes - a Moodle mostani telep�t�se nincs a megadott c�men.';

?>
