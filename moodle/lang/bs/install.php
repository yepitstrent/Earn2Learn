<?PHP // $Id: install.php,v 1.1.2.3 2006/02/06 09:59:29 moodler Exp $ 
      // install.php - created with Moodle 1.4.3 + (2004083131)


$string['admindirerror'] = 'Odre�eni administratorski direktorij je nepravilan';
$string['admindirname'] = 'Administratorski direktorij';
$string['admindirsetting'] = 'Veoma nekoliko ili prili�no nekoliko webhostova koristi administrator kao specijalni URL za Va� pristup kontrolnoj plo�i. Na nesre�u ovo je konflikt sa standardnom lokacijom za Moodle administratorsku stranicu. Mo�ete ovo fiksirati preimenovanjem administratorskog direktorija u Va�oj instalaciji, postavijaju�i ovdje novo ime. Na primjer: <br />�<br /><b>moodleadmin</b><br />�<br />
Ovo �e fiksirati administratorski link na Moodle.';
$string['caution'] = 'Pa�nja';
$string['chooselanguage'] = 'Izaberite jezik';
$string['compatibilitysettings'] = 'Provjerite Va�a PHP pode�avanja ...';
$string['configfilenotwritten'] = 'Instalacijska skripta nije u mogu�nosti da automatski kreira config.php datoteku koja obuhvata Va�e izabrano pode�avanje, vjerovatno zbog Moodle direktorija koji nije pisan. Mo�ete ru�no kopirati prate�i kod u ime fajla config.php unutar osnovnog direktorija za Moodle.';
$string['configfilewritten'] = 'config.php je bio uspje�no kreiran';
$string['configurationcomplete'] = 'Konfiguracija je kompletirana';
$string['database'] = 'Baza podataka';
$string['databasesettings'] = 'Sada Vam je potrebno da konfiguri�ete bazu podataka gdje �e i ve�ina Moodle podataka biti pohranjena. Ova baza podataka ve� mora biti kreirana i korisni�ko ime i lozinku kreirajte da je dostupno.<br />
<br />�<br />
<b>Tip:</b> mysql or postgres7<br />
<b>Glavni:</b> eg lokalhost ili db.isp.com<br />
<b>Ime:</b> ime baze podataka, eg moodle<br />
<b>Korisnik:</b> Va�e korisni�ko ime baze podataka<br />
<b>Lozinka:</b> your database password<br />
<b>Tabelarni prefiks:</b> alternativni prefiks da koristi svim imenima tabela';
$string['dataroot'] = 'Direktorij podataka';
$string['datarooterror'] = '\'Directorij podataka\' koji ste naveli ne mo�e biti prona�en ili kreiran.  Svaka korekcija puta ili pravljenja ru�no tog direktorija.';
$string['dbconnectionerror'] = 'Ne mo�emo se spojiti na bazu podataka koju ste naveli. Molimo Vas da provjerite svoja pode�avanja baze podataka.';
$string['dbcreationerror'] = 'Gre�ka prilikom pravljenja baze podataka. Ne mo�ete napraviti ime date baze podataka sa predvi�enim pode�avanjima';
$string['dbhost'] = 'Glavni server';
$string['dbpass'] = 'Lozinka';
$string['dbprefix'] = 'Lista prefiksa';
$string['dbtype'] = 'Tip';
$string['directorysettings'] = '<p>Molim Vas potvrdite lokaciju ove Moodle instalacije.</p>

<p><b>Web Adresa:</b>
Navedite punu web adresu gdje �e Moodle biti dostupan. Ako je Va� web sajt dostupan preko vi�e URLa tada izaberite �to prirodniji jedan od onih koje �e Va�i studenti koristiti. Ne uklju�ujte prate�u crticu.</p>

<p><b>Moodle Directorij:</b>
Navedite punu putanju direktorija za ovu instalaciju. Budite sigurni da je gornji/donji slu�aj ta�an.</p>

<p><b>Directorij podataka:</b>
Potrebno Vam je mjesto gdje Moodle mo�ete spasiti u�itavaju�i datoteke. Ovaj direktorij bi trebao biti �itljiv i pisan od web server korisnika (obi�no \'niko\' ili \'apache\'), ali to ne�e biti direktno pristupa�no od weba.</p>';
$string['dirroot'] = 'Direktorij Moodla';
$string['dirrooterror'] = 'Pode�avanje \'Direktorija Moodla\' izgleda je neta�no - ne mo�emo tamo na�i Moodle instalaciju. Ni�a vrijednost �e biti ponovo dovedena na po�etni polo�aj.';
$string['download'] = 'Preuzeti';
$string['fail'] = 'Izostati';
$string['fileuploads'] = 'Katalog za u�itavanja datoteka';
$string['fileuploadserror'] = 'Ovo bi trebalo biti uklju�eno';
$string['fileuploadshelp'] = '<p>Katalog za u�itavanje datoteka izgleda da je nedostupan na Va�em serveru.</p>

<p>Moodle jo� uvijek mo�e biti instaliran, ali bez ove mogu�nosti, ne�ete biti u mogu�nosti da u�itavate datoteke kursa ili duplikate novih korisni�kih profila.</p>

<p>Da u�itavanje datoteke bude dostupno Vi (ili Va� sistem administratora) trebat �ete promijeniti svoju php.ini datoteku na Va�em sistemu i promijeniti pode�avanja za <b>katalog_ucitavanja_datoteka</b> to \'1\'.</p>';
$string['gdversion'] = 'GD verzija';
$string['gdversionerror'] = 'GD datoteka sa izvornim kodom trebala bi prezentirati proces i kreirati duplikate';
$string['gdversionhelp'] = '<p>Va� server ne�e izgledati isto imaju�i GD instalaciju.</p>

<p>GD je datoteka sa izvornim kodom �to je potrebno da PHP dozvoli Moodle da izradi duplikate (kao �to je ikona korisni�kog profila) i da kreira nove duplikate (kao �to je operativni registar slika).  Moodle �e jo� uvijek raditi bez GD a ova lica jednostavno ne�e biti dostupna vama.</p>

<p>Da dodate GD u PHP na osnovu Unixa, kompajlirate PHP koriste�i se gd parametrom.</p>

<p>Na osnovu Windows obi�no mo�ete podesiti php.ini i ne bilje�iti liniju referenciraju�i libgd.dll.</p>';
$string['installation'] = 'Instalacija';
$string['magicquotesruntime'] = '�ari naznake vremenskog kretanja';
$string['magicquotesruntimeerror'] = 'Ovo bi trebalo biti isklju�eno';
$string['magicquotesruntimehelp'] = '<p>�ini kvote vremena pokretanja trebalo bi isklju�iti da Moodle propisno funkcioni�e.</p>

<p>Normalno ovo je isklju�eno po podrazumijevanoj vrijednosti ... pogledaj pode�avanje<b>cini_kvote_vremena_pokretanja </b> na Va�oj php.ini datoteci.</p>

<p>Ako nemate pristu na Va� php.ini, mo�i �ete biti u mogu�nosti da ocjenite prate�i liniju u datoteci pozivaju�i .htapristup unutar Va�eg Moodle direktorija:  <blocquote>php_vrijednost_cina_kvote_vremena_pokretanja isklju�eno</blockquote>
</p>   
   ';
$string['memorylimit'] = 'Ograni�enje memorije';
$string['memorylimiterror'] = 'PHP ograni�enje je pode�eno na potpuno malo memorije ... kasnije se mo�ete kretati unutar problema.';
$string['memorylimithelp'] = '<p>PHP ograni�enje memorije za Va� server je trenutno pode�eno na $a.</p>

<p>Ovo mo�da prouzrokuje Moodlu da kasnije ima problema sa memorijom, posebno ako imate mnogo dozvoljenih modula i /ili mnogo korisnika.</p>

<p>Preporu�ujemo Vam da konfiguri�ete PHP sa  visokim ograni�enjem ako je mogu�e, kao 16M. �ine�i ovo tamo je nekoliko na�ina pa mo�ete poku�ati: </p><ol>
<li>Ako ste, opet kompajlisati PHP sa <i>--dostupnim-memorijskim-ograni�enjem</i>. Ovo �e dozvoliti Moodle da postavi memorijsko ograni�enje sam za sebe.</li>
<li>Ako imate pristup na Va�u php.ini datoteku, mo�ete promijeniti <b>memorijsko_ograni�enje</b> pode�avanje u ne�to kao ovo 16M. Ako nemate pristup mo�ete pitati svog administratora da to uradi za Vas.</li>
<li>Na nekim PHP serverima mo�ete kreirati  a.ht pristupnu datoteku u Moodle direktoriju koji se sadr�i na ovoj liniji:<br /><blockquote>php_vrijednost memorijskog_ograni�enja 16M</blockquote></li>
<br />Kakogod, na istom serveru ovo izbjegavajte <b>sve</b> PHP stranice za rad (vidjet �ete gre�ku prilkom pregleda stranice) �ete na njima morati izbrisati .htpristupnu datoteku. </li></ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP ne�e biti propisno konfigurisan sa MySQL ekstenzijom tako da mo�e komunicirati sa  MySQL.  Molimo Vas da provjerite svoju php.ini datoteku ili opet kompajli�ite PHP.';
$string['pass'] = 'Pro�i';
$string['phpversion'] = 'PHP verzija';
$string['phpversionerror'] = 'PHP verzija mora biti najmanje 4.1.0';
$string['phpversionhelp'] = '<p>Moodle zahtijeva najmanju PHP verziju 4.1.0.</p>
<p>Trenutno pokre�ete verziju $a</p>
<p>Mo�ete nadograditi PHP ili premjestiti na glavnu sa novijom verzijom PHP!</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle mo�e imati problema sa uklju�enim safe mode-om';
$string['safemodehelp'] = '<p>Moodle mo�e imati razli�ite probleme sa ukljiu�enim safe modom, ni najmanji taj problem vjerovatno ne�e dozvoliti kreiranje novih datoteka.</p>
   
<p>Safe mode je obi�no jedino dozvoljen od paranoi�ne javnosti web gostiju, tako da Vi mo�ete imati jednostavnu potra�nju nove web gostuju�e kompanije za Va� Moodle sajt.</p>
   
<p>Mo�ete poku�ati nastaviti sa instalacijom ako �elite, ali o�ekujte nekoliko problema kasnije.</p>';
$string['sessionautostart'] = 'Automatski po�etak akcije';
$string['sessionautostarterror'] = 'Ovo bi trebalo biti isklju�eno';
$string['sessionautostarthelp'] = '<p>Moodle zahtijeva podr�ku za postupanje i ne�e funcionisati bez toga.</p>

<p>Etapa u radu mo�e biti dozvoljena u php.ini datoteci ... pogledajte za postupanje.auto_start parameter.</p>';
$string['wwwroot'] = 'Web adresa';
$string['wwwrooterror'] = 'Web adresa nije jasna da bi bila validna - ovom Moodle instalacija je nejasna da bila tu.';

?>
