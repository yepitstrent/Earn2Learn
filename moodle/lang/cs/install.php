<?PHP // $Id: install.php,v 1.3.2.4 2006/02/06 09:59:32 moodler Exp $ 
      // install.php - created with Moodle 1.5.2 + (2005060223)


$string['admindirerror'] = 'Adres�� spr�vy (admin) nen� ur�en spr�vn�';
$string['admindirname'] = 'Adres�� spr�vy (admin)';
$string['admindirsetting'] = 'Velmi mal� mno�stv� webov�ch hostitel� pou��v� /admin jako speci�ln� URL k p��stupu ke kontroln�mu panelu nebo k podobn�m funkc�m. To bohu�el zp�sobuje konflikty se standardn�m um�st�n�m adres��e spr�vy v Moodle. Tento konflikt m��ete vy�e�it p�ejmenov�n�m adres��e spr�vy va�� instalace. Vlo�te sem nov� n�zev, nap�. <br/> <br /><b>moodleadmin</b><br /> <br />T�m se oprav� odkazy na spr�vu Moodle.';
$string['caution'] = 'Varov�n�';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['compatibilitysettings'] = 'Kontrola nastaven� va�eho PHP...';
$string['configfilenotwritten'] = 'Instala�n� skript nemohl automaticky vytvo�it soubor config.php s va�� konfigurac� - pravd�podobn� z d�vod� nastaven� pr�v k z�pisu do adres��e Moodle. M��ete ru�n� zkop�rovat n�sleduj�c� k�d do souboru s n�zvem config.php v hlavn�m adres��i va�� instalace Moodle.';
$string['configfilewritten'] = 'config.php byl �sp�n� vytvo�en';
$string['configurationcomplete'] = 'Konfigurace hotov�';
$string['database'] = 'Datab�ze';
$string['databasecreationsettings'] = 'Nyn� mus�te nakonfigurovat spojen� k datab�zi, kde si bude Moodle ukl�dat v�t�inu sv�ch dat. Tato datab�ze bude vytvo�ena automaticky instala�n�m programem Moodle4Windows s n�sleduj�c�m nastaven�m.<br/>
<br /> <br />
<b>Typ:</b>instal�tor nastav� na \"mysql\"<br />
<b>Hostitel:</b>instal�tor nastav� na \"localhost\"<br />
<b>N�zev:</b> n�zev datab�ze, nap�. moodle<br />
<b>U�ivatel:</b>instal�tor nastav� na \"root\"<br />
<b>Heslo:</b> heslo k tomuto ��tu<br />
<b>P�edpona tabulek:</b> voliteln� p�edpona, kter� se vlo�� p�ed n�zvy v�ech tabulek (umo��uje m�t jednu datab�zi pro v�ce instalac� Moodle)';
$string['databasesettings'] = 'Nyn� mus�te nakonfigurovat spojen� k datab�zi, kde si bude Moodle ukl�dat v�t�inu sv�ch dat. Tato datab�ze mus� ji� existovat, stejn� jako mus� b�t nastaveno u�ivatelsk� jm�no a heslo pro p��stup k n�.<br/>
<br /> <br />
<b>Typ:</b> mysql nebo postgres7<br />
<b>Hostitel:</b> nap�. localhost nebo db.naseskola.cz<br />
<b>N�zev:</b> n�zev datab�ze, nap�. moodle<br />
<b>U�ivatel:</b> u�ivatelsk� jm�no ��tu pro p��stup k datab�zi<br />
<b>Heslo:</b> heslo k tomuto ��tu<br />
<b>P�edpona tabulek:</b> voliteln� p�edpona, kter� se vlo�� p�ed n�zvy v�ech tabulek (umo��uje m�t jednu datab�zi pro v�ce instalac� Moodle)';
$string['dataroot'] = 'Datov� adres��';
$string['datarooterror'] = 'V�mi specifikovan� datov� adres�� nebyl nalezen a nemohl b�t vytvo�en. Bu� opravte vlo�enou cestu, nebo vytvo�te adres�� ru�n�.';
$string['dbconnectionerror'] = 'Nem��u se spojit s datab�z�, kterou jste specifikovali. Pros�m, zkontrolujte nastaven� datab�ze.';
$string['dbcreationerror'] = 'Chyba p�i vytv��en� datab�ze. Nelze vytvo�it datab�zi dan�ho jm�na s poskytnut�m nastaven�m';
$string['dbhost'] = 'Hostitelsk� server';
$string['dbpass'] = 'Heslo';
$string['dbprefix'] = 'P�edpona tabulek';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p>Pros�m, potvr�te um�st�n� t�to Moodle instalace.</p>

<p><b>Webov� adresa:</b>
Ur�ete �plnou webovou adresu, na ni� bude v� Moodle dostupn�. Jsou-li va�e str�nky dostupn� p�es v�ce URL, vyberte z nich tu, kterou budou pou��vat va�i studenti. Na konci adresy nevkl�dejte lom�tko.</p>

<p><b>Moodle adres��:</b>
Ur�tete �plnou cestu k adres��i s touto instalac�. Ujist�te se, �e v�m odpov�daj� mal�/VELK� p�smena.</p>

<p><b>Datov� adres��:</b>
Je t�eba m�t diskov� prostor, kam m��e Moodle ukl�dat nahran� (uploadovan�) soubory. K tomuto adres��i mus� m�t proces webov�ho serveru pr�vo ke �ten� I Z�PISU (webov� server b�v� spou�t�n pod u�ivatelem \'nobody\' nebo \'apache\' nebo n�co podobn�ho). Tento adres�� by nem�l b�t dostupn� p��mo p�es webov� rozhran� (m��e obsahovat neve�ejn� data).</p>';
$string['dirroot'] = 'Moodle adres��';
$string['dirrooterror'] = 'Hodnota \'Moodle adres��\' nevypad� nastaven� spr�vn� - nem��u tam naj�t Moodle instalaci. N�sleduj�c� hodnota byla resetov�na.';
$string['download'] = 'St�hnout';
$string['fail'] = 'Selhalo';
$string['fileuploads'] = 'Nahran� soubory (uploads)';
$string['fileuploadserror'] = 'M�lo by b�t zapnuto';
$string['fileuploadshelp'] = '<p>Vypad� to, �e na va�em serveru nen� umo�n�no nahr�vat soubory.</p>

<p>Moodle m��e b�t i p�esto nainstalov�n, ale bez t�to funkce nebudete moci nahr�vat ��dn� soubory (nap�. studijn� materi�ly nebo fotografie u�ivatel�).</p>

<p>Chcete-li povolit nahr�v�n� soubor�, budete muset vy (nebo v� spr�vce) upravit hlavn� soubor php.ini na va�em serveru a zm�nit nastaven�
<b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verze GD';
$string['gdversionerror'] = 'Knihovna GD je pot�ebn� ke zpracov�v�n� a tvorb� obr�zk� (nap�. fotografie, grafy apod.)';
$string['gdversionhelp'] = '<p>Vypad� to, �e na va�em serveru nen� nainstalov�na knihovna GD.</p>

<p>GD je knihovna, kterou vy�aduje PHP, aby umo�nilo Moodlu zpracov�vat obr�zky (jako jsou ikony u�ivatel�) a vytv��et nov� obr�zky (jako jsou nap�. grafy p��stup� na va�e str�nky). Moodle bude fungovat i bez GD, ale tyto funkce nebudou dostupn�.</p>

<p>Chcete-li p�idat GD do PHP pod Unixem, zkompilujte PHP s parametrem --with-gd .</p>

<p>Pod syst�mem Windows sta�� v�t�inou upravit php.ini a odkomentovat ��dek odkazuj�c� na libgd.dll.</p>';
$string['installation'] = 'Instalace';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'M�lo by b�t vypnuto';
$string['magicquotesruntimehelp'] = '<p>Funkce \'Magic quotes runtime\' by m�la b�t vypnuta pro spr�vn� fungov�n� Moodlu.</p>

<p>Norm�ln� b�v� tato funkce implicitn� vypnut� ... pod�vejte se na nastaven� <b>magic_quotes_runtime</b> ve va�em php.ini .</p>

<p>Pokud nem�te p��stup k va�emu php.ini, m��ete zkusit um�stit n�sleduj�c� ��dek do souboru  .htaccess ve va�em Moodle adres��i:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Limit pam�ti';
$string['memorylimiterror'] = 'Limit pam�ti pro PHP skripty je nastaven relativn� n�zko ... pozd�ji v�s to m��e st�t probl�my.';
$string['memorylimithelp'] = '<p>Limit pam�ti pro PHP skripty je na va�em serveru moment�ln� nastaven na hodnotu $a.</p>

<p>Toto m��e pozd�ji zp�sobovat Moodlu probl�my, zvl�t� p�i v�t��m mno�stv� modul� a/nebo u�ivatel�.</p>

<p>Je-li to mo�n�, doporu�ujeme v�m nakonfigurovat PHP s vy���m limitem - nap�. 16M. Je n�kolik zp�sob�, kter� m��ete zkusit:
<ol>
<li>M��ete-li, p�ekompilujte PHP s volbou <i>--enable-memory-limit</i>.
Toto umo�n� Moodlu nastavit si pro sebe po�adovan� limit.</li>
<li>M�te-li p��stup k va�emu souboru php.ini, zm��te nastaven� <b>memory_limit</b>
na hodnotu bl�zkou 16M. Nem�te-li takov� pr�va, po��dejte va�eho spr�vce webov�ho serveru, aby to pro v�s ud�lal.</li>
<li>Na n�kter�ch PHP serverech m��ete v Moodle adres��i vytvo�it soubor .htaccess s n�sleduj�c�m ��dkem:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Bohu�el, na n�kter�ch serverech t�mto vy�ad�te z provozu <b>v�echny</b> PHP str�nky (p�i jejich prohl�en� uvid�te chybov� zpr�vy), tak�e budete muset soubor .htaccess odstranit.</li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebylo korektn� nakonfigurov�no pro komunikaci v MySQL. Zkontrolujte v� php.ini nebo p�ekompilujte PHP.';
$string['pass'] = 'Pro�lo';
$string['phpversion'] = 'Verze PHP';
$string['phpversionerror'] = 'Verze PHP mus� b�t alespo� 4.1.0 nebo vy���';
$string['phpversionhelp'] = '<p>Moodle vy�aduje verzi PHP alespo� 4.1.0.</p>
<p>Va�e st�vaj�c� PHP m� verzi $a</p>
<p>Mus�te upgradovat va�e PHP nebo Moodle nainstalovat na hostitele s vy��� verz�!</p>';
$string['safemode'] = 'Bezpe�n� re�im (safe mode)';
$string['safemodeerror'] = 'Moodle m��e m�t probl�my p�i zapnut�m bezpe�n�m re�imu (safe mode)';
$string['safemodehelp'] = '<p>Moodle m��e m�t mno�stv� probl�m� p�i zapnut�m bezpe�n�m re�imu PHP (tzv. safe mode). Jedn�m z nich je, �e pravd�podobn� nebude moci vytv��et nov� soubory.</p>

<p>Bezpe�n� re�im b�v� zapnut� u paranoidn�ch ve�ejn�ch webov�ch hostitel�, tak�e mo�n� bude sta�it naj�t si jin�ho hostitele pro v� Moodle.</p>

<p>M��ete zkusit pokra�ovat v instalaci, ale o�ek�vejte mo�n� probl�my.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'M�lo by b�t vypnuto';
$string['sessionautostarthelp'] = '<p>Moodle po�aduje podporu session a nebude bez n� fungovat.</p>

<p>Podporu session m��ete povolit v souboru php.ini  ... pod�vejte se na parametr session.auto_start .</p>';
$string['wwwroot'] = 'Webov� adresa';
$string['wwwrooterror'] = 'Toto nevypad� jako platn� webov� adresa t�to instalace Moodle.';

?>
