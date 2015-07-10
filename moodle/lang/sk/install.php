<?PHP // $Id: install.php,v 1.2.2.5 2006/02/06 10:00:34 moodler Exp $ 
      // install.php - created with Moodle 1.6 development (2005052400)


$string['admindirerror'] = 'Adres�r pre spr�vu (admin) nie je ur�en� spr�vne';
$string['admindirname'] = 'Adres�r pre spr�vu (admin)';
$string['admindirsetting'] = 'Niektor� poskytovatelia web priestoru pou��vaj� adres�r /admin pre pr�stup ku kontroln�mu panelu, pr�padne ku podobn�m funkci�m. To bohu�ia� nie je v s�lade so �tandardn�m umiestnen�m adres�ru pre spr�vu v Moodle. Tento konflikt je mo�n� vyrie�i� premenovan�m adres�ru pre spr�vu vo Va�ej in�tal�cii. Vlo�te sem nov� n�zov, napr.<br /><br />
<b>moodleadmin</b><br /><br />
T�m se opravia odkazy na spr�vu Moodle.';
$string['caution'] = 'Varovanie';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['compatibilitysettings'] = 'Kontrola nastaven� v�ho PHP...';
$string['configfilenotwritten'] = 'In�tala�n� skript nebol schopn� automaticky vytvori�  config.php s�bor, obsahuj�ci Va�e zvolen� nastavenia, pravdepodobne preto, �e adres�r Moodle nie je zapisovate�n�. M��ete ru�ne skop�rova� nasledovn� k�d do s�boru s n�zvom config.php v r�mci  kore�ov�ho adres�ra Moodle.';
$string['configfilewritten'] = 's�bor config.php bol �spe�ne vytvoren�';
$string['configurationcomplete'] = 'Konfigur�cia ukon�en�';
$string['database'] = 'Datab�za';
$string['databasesettings'] = 'Teraz potrebujete nastavi� datab�zu, kde bude uchov�van� v��ina �dajov Moodle. T�to datab�za v�ak mus� by� predt�m vytvoren� a tie� mus� by� vytvoren� pou��vate�sk� meno a pr�stupov� heslo.<br /><br /><br />
<b>Typ:</b> mysql alebo postgres7<br />
<b>Host:</b> napr. localhost alebo db.isp.com<br />
<b>Meno:</b> meno datab�zy, napr. moodle<br />
<b>Pou��vate�:</b> pou��vate�sk� meno Va�ej datab�zy<br />
<b>Heslo:</b> heslo Va�ej datab�zy<br />
<b>Predpona tabuliek:</b> nepovinn� predpona pre v�etky men� tabuliek';
$string['dataroot'] = 'Adres�r pre �daje';
$string['datarooterror'] = '\'Adres�r pre �daje\', ktor� ste zadali, nem��e by� n�jden� alebo vytvoren�. Upravte bu� cestu alebo vytvorte ten adres�r ru�ne.';
$string['dbconnectionerror'] = 'Nemohli sme sa pripoji� k vami zadanej datab�ze. Pros�m skontrolujte nastavenia Va�ej datab�zy.';
$string['dbcreationerror'] = 'Chyba pri vytv�ran� datab�zy. Nebolo mo�n� vytvori� datab�zu so zadan�m menom a jej nastaveniami';
$string['dbhost'] = 'Hos�ovsk� server';
$string['dbpass'] = 'Heslo';
$string['dbprefix'] = 'Predpona tabuliek';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p>Pros�m, potvr�te umiestnenie in�tal�cie Moodle.</p>

<p><b>Web adresa:</b> �pecifikujte cel� web adresu, kde bude Moodle umiestnen�. Ak sa na t�to adresu pristupuje z viacer�ch url adries, potom vyberte t�, ktor� bud� pou��va� Va�i �tudenti. Na konci nepou��vajte lom�tko.</p>

<p><b>Adres�r Moodle:</b> �pecifikujte cel� cestu k adres�ru a tejto in�tal�cii. Ubezpe�te sa, �e ste korektne pou�ili ve�k� a mal� p�smen�.</p>

<p><b>Adres�r pre �daje:</b> Potrebujete miesto, kde Moodle bude uklada� pren�an� s�bory. Tento adres�r by mal by� pou��vate�ovi webov�ho servera pr�stupn� aj na ��tanie, aj na ZAPISOVANIE (zvy�ajne \'nobody\' alebo \'apache\'), ale nemalo by sa da� k nemu pristupova� priamo z webu.</p>';
$string['dirroot'] = 'Adres�r Moodle';
$string['dirrooterror'] = 'Nastavenia v \'Adres�ri Moodle\' s� nespr�vne - nem��eme tu n�js� in�tal�ciu Moodle. Hodnota dole bola vynulovan�.';
$string['download'] = 'Stiahnu�';
$string['fail'] = 'Ne�spe�n�';
$string['fileuploads'] = 'prenesen� s�bory';
$string['fileuploadserror'] = 'Toto by malo by� zapnut�';
$string['fileuploadshelp'] = '<p>Zd� sa, �e na Va�om serveri nie je aktivovan� prenos s�borov.</p>

<p>Moodle m��e by� aj napriek tomu nain�talovan�, ale bez tejto mo�nosti, nebudete schopn� prenies� s�bory kurzu, alebo obr�zky v nov�ch pou��vate�sk�ch profiloch.</p>

<p>Na aktivovanie prenosu s�borov, Vy (alebo V� syst�mov� administr�tor) budete musie� upravi� main php.ini s�bor v syst�me a zmeni� nastavenie pre <b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verzia kni�nice GD';
$string['gdversionerror'] = 'Kni�nica GD by mala existova� na spracov�vanie a vytv�ranie obr�zkov';
$string['gdversionhelp'] = '<p>Na Va�om serveri zrejme nie je nain�talovan� GD kni�nica.</p>

<p>GD je kni�nica, ktor� si vy�aduje PHP, aby mohlo Moodle povoli� spracov�va� obr�zky (napr. ikony v pou��vate�sk�ch profiloch) a vytv�ra� nov� obr�zky (napr. grafy z prihl�sen�). Moodle bude st�le pracova� bez GD - tieto mo�nosti bud� dostupn� len V�m.</p>

<p>Ke� chcete prida� GD do PHP pod Unixom, vytvorte PHP pou�it�m --with-gd parameter.</p>

<p>Pod Windows m��ete upravi� php.ini a odkomentova� riadok obsahuj�ci libgd.dll.</p>';
$string['installation'] = 'In�tal�cia';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Toto by malo by� vypnut�';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime by malo by� vypnut�, aby Moodle fungoval tak, ako m�.</p>

<p>Zvy�ajne je vo�ba �tandardne vypnut� ... pozri nastavenia <b>magic_quotes_runtime</b> vo Va�om php.ini s�bore.</p>

<p>Ak nem�te pr�stup k s�boru php.ini, mali by ste nasledovn� riadok do s�boru s n�zvom .htaccess v r�mci adres�ra Moodle: 
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p> ';
$string['memorylimit'] = 'Limit pam�te';
$string['memorylimiterror'] = 'PHP limit pam�te je nastaven� na minimum...S t�mto m��ete ma� nesk�r probl�my.';
$string['memorylimithelp'] = '<p>PHP limit pam�te pre V� server je moment�lne nastaven� na $a.</p>

<p>Toto m��e nesk�r sp�sobi� probl�my v Moodle, najm� ak m�te ve�a modulov a/alebo ve�a pou��vate�ov.</p>

<p>Odpor��ame V�m, aby ste nastavili PHP s vy���m limitom pam�te, ak je to mo�n�, napr. 16M. Na to existuje ve�a sp�sobov, ktor� m��ete vysk��a�:</p>
<ol>
<li>Ak je to mo�n�, znovu vytvorte PHP s <i>--enable-memory-limit</i>. Toto umo�n� Moodle samonastavenie limitu pam�te.</li>
<li>Ak m�te pr�stup k V�mu php.ini s�boru, m��ete zmeni� <b>memory_limit</b> nastavenie, napr. na 16M. Ak nem�te pr�stup k s�boru, m��ete sa na to sp�ta� V�ho administr�tora.</li>
Na niektor�ch PHP serveroch, si m��ete vytvori� s�bor .htaccess v Adres�ri Moodle, ktor� bude obsahova� tento riadok: <p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Av�ak, na niektor�ch serveroch bude toto br�ni� <b>v�etk�m</b> PHP str�nkam v pr�ci (budete vidie� chyby, ke� sa pozriete na str�nky), tak�e budete musie� odstr�ni� s�bor .htaccess.</p></li>
</ol> 	';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebolo spr�vne nakonfigurovan� s MySQL roz��ren�m a tak nem��e komunikova� s MySQL. Pros�m, skontrolujte si V� php.ini s�bor alebo znovu vytvorte PHP.';
$string['pass'] = 'Prejs�';
$string['phpversion'] = 'Verzia PHP';
$string['phpversionerror'] = 'Verzia PHP mus� by� aspo�  4.1.0';
$string['phpversionhelp'] = '<p>Moodle si vy�aduje verziu PHP aspo�  4.1.0.</p>
<p>Vy m�te moment�lne nain�talovan� t�to verziu $a</p>
<p>Mus�te obnovi� PHP alebo presun�� na hostite�sk� po��ta� s novou verziou PHP!</p>';
$string['safemode'] = 'Bezpe�n� m�d';
$string['safemodeerror'] = 'Moodle m��e ma� probl�my, ak je zapnut� bezpe�n� m�d';
$string['safemodehelp'] = '<p>Moodle m��e ma� viacero probl�mov, ak je zapnut� bezpe�n� m�d, pravdepodobne nedovol� vytv�ra� nov� s�bory.</p>

<p>Bezpe�n� m�d je zvy�ajne povolen� verejn�mi poskytovate�mi webov�ho priestoru, tak�e by ste si mali n�js� nov�ho poskytovate�a webov�ho priestoru pre str�nku Moodle.</p>';
$string['sessionautostart'] = 'Auto�tart sekcie';
$string['sessionautostarterror'] = 'Toto by malo by� vypnut�';
$string['sessionautostarthelp'] = '<p>Moodle vy�aduje podporu sekcie a nebude bez nej fungova�.</p>';
$string['wwwroot'] = 'Web adresa';
$string['wwwrooterror'] = 'T�to web adresa pravdepodobne nie je platn� - t�to in�tal�cia Moodle tu pravdepodobne nie je.';

?>
