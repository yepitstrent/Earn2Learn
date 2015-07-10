<?PHP // $Id: install.php,v 1.1.4.3 2006/02/06 10:00:25 moodler Exp $ 
      // install.php - created with Moodle 1.5.2 + (2005060222)


$string['admindirerror'] = 'Podany katalod admin jest nieprawid�owy';
$string['admindirname'] = 'Katalog admin';
$string['caution'] = 'Ostrze�enie';
$string['chooselanguage'] = 'Wybierz j�zyk';
$string['compatibilitysettings'] = 'Sprawdzanie Twoich ustawie� PHP';
$string['configfilenotwritten'] = 'Instalator nie m�g� automatycznie utworzy� plik config.php zawieraj�cy Twoje parametry instalacyjne, prawdopodobnie dlatego �e katalog Moodle nie ma prawa zapisu. Musisz r�cznie przekopiowa� poni�szy kod do pliku config.php, kt�ry powinien znajdowa� si� w g��wnym katalogu Moodle.';
$string['configfilewritten'] = 'config.php zosta� pomy�lnie stworzony';
$string['configurationcomplete'] = 'Konfiguracja sko�czona';
$string['database'] = 'Baza danych';
$string['databasecreationsettings'] = 'Teraz skonfiguruj baz� danych gdzie Moodle mo�e przechowywa� dane. Ta baza danych b�dzie stworzona automatycznie przez instalator: Moodle4Windows z parametrami instalacyjnymi okre�lanymi poni�ej.<br />
<br /> <br />
<b>Typ:</b>Instalator ustali�  \"mysql\"<br/>
<b>Host:</b> Instalator ustali� \"localhost\"<br />
<b>nazwa:</b>Nazwa Twojej bazy danych, np. Moodle<br/>
<b>U�ytkownik:</b> u�ytkownik Twojej bazy danych<br />
<b>Has�o:</b> Has�o dost�pu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks u�ywany przed wszystkimi nazwami tabeli ';
$string['databasesettings'] = 'Teraz skonfiguruj baz� danych gdzie Moodle mo�e przechowywa� dane. Baza danych musi by� utworzona, oraz u�ytkownik i has�o kt�ry mo�e si� odwo�ywa� do bazy danych.<br/><br/><br/>
<b>Typ:</b> mysql lub postgres 7<br/>
<b>Host:</b> np: localhost lub db.isp.com<br />
<b>nazwa:</b>Nazwa Twojej bazy danych, np. Moodle<br/>
<b>U�ytkownik:</b> u�ytkownik Twojej bazy danych<br />
<b>Has�o:</b> Has�o dost�pu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks u�ywany przed wszystkimi nazwami tabeli';
$string['dataroot'] = 'Katalog z danymi';
$string['datarooterror'] = 'Katalog z danymi kt�ry poda�e� nie mo�e by� znaleziony lub utworzony. Popraw �cie�k� lub utw�rz katalog r�cznie.';
$string['dbconnectionerror'] = 'Nie mo�na po��czy� si� z podan� baz� danych. Sprawd� ustawienia Twojej bazy danych.';
$string['dbhost'] = 'Serwer baz danych';
$string['dbpass'] = 'Has�o';
$string['dbprefix'] = 'prefiksy tabel';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p> Potwierd� lokalizacj� dla tej instalacji Moodle.</p>

<p><b>Adres w sieci:</b>
Podaj pe�ny adres w sieci gdzie Moodle b�dzie dost�pny. 
Je�eli adres�w w sieci jest wiele wybierz jeden kt�ry b�d� u�ywali studenci. Nie dodawaj slash</p>

<p><b> Katalog Moodle:</b>
Podaj pe�n� �cie�k� dost�pu do tej intalacji upewnij si� �e wielko�� liter jest poprawna. </p>

<p><b> Katalog z danymi:</b>
Miejsce gdzie Moodle mo�e przechowywa� pliki, Ten katalog powinien mie� prawo odczytu i ZAPISU dla serwera www(przewa�nie \'nobody\' lub \'apache\'), ale nie ma by� dost�pny bezpo�rednio przez sie� </p>';
$string['dirroot'] = 'Katalog Moodle';
$string['dirrooterror'] = '\"Katalog Moodle\" wydaje si� by� nieprawid�owy - tam nie mo�na znale�� instalacji Moodle. Warto�ci poni�ej zostan� usuni�te.';
$string['download'] = 'Pobierz';
$string['fail'] = 'zawie��';
$string['fileuploads'] = 'Plik pobrany';
$string['fileuploadserror'] = 'Powinno by� w��czone';
$string['gdversion'] = 'versja biblioteki GD';
$string['installation'] = 'Instalacja';
$string['magicquotesruntime'] = 'Magic Quotes Runtime';
$string['magicquotesruntimeerror'] = 'Powinno by� wy��czone';
$string['memorylimit'] = 'Ograniczenie pami�ci';
$string['phpversion'] = 'wersja PHP';
$string['phpversionerror'] = 'Wersja PHP musi by� ca najmniej 4.1.0';
$string['phpversionhelp'] = '<p> Moodle wymaga wersji PHP co najmniej 4.1.0. </p> 
<p>Obecnie jest uruchomiona wersja $a</p>
<p> Musisz uaktualni� wersje PHP lub przenie�� na host z nowsz� wersj� PHP!</p>';
$string['safemode'] = 'Bezpieczny tryb';
$string['safemodeerror'] = 'Moodle ma trudno�ci z w��czeniem bezpiecznego trybu';
$string['sessionautostarterror'] = 'To powinno by� wy��czone';
$string['wwwroot'] = 'Adres w sieci';
$string['wwwrooterror'] = 'Adres w sieci wydaje si� by� niepoprawny - wydaje si� �e nie ma tam instalacji Moodle';

?>
