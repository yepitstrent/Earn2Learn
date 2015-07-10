<?PHP // $Id: install.php,v 1.4.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // install.php - created with Moodle 1.6 development (2005111101)


$string['admindirerror'] = 'Das angegebene Admin-Verzeichnis ist falsch.';
$string['admindirname'] = 'Name f�r das Admin-Verzeichnis';
$string['admindirsetting'] = 'Einige wenige Webhosting-Anbieter benutzen /admin als spezielles Verzeichnis f�r den Zugang zum Administrationstool oder andere Dinge. Leider kommt es dadurch zu Konflikten mit dem Standard f�r das Administrationsverzeichnis von moodle. Sie k�nnen dies �ndern, indem Sie das admin-Verzeichnis in der moodle-Installation umbenennen. Den gew�hlten Namen dieses Verzeichnisses m�ssen Sie hier eingeben.
Zum Beispiel: <br /> <br /><b>moodleadmin</b><br /> 
Dies �ndert die Links f�r das Admin-Verzeichnis in moodle.';
$string['caution'] = 'Warnung';
$string['chooselanguage'] = 'Eine Sprache w�hlen';
$string['compatibilitysettings'] = 'Pr�fung Ihrer  PHP- Einstellungen ...';
$string['configfilenotwritten'] = 'Ds Installationsscript kann die Datei config.php, welche die gew�hlten Einstellungen enth�lt, nicht automatisch erstellen, weil der web-user keine Schreibrechte f�r das moodle-Verzeichnis hat. Sie k�nnen den folgenden Code manuell in einer Datei config.php speichern und diese ins moodle- Hauptverzeichnis kopieren.';
$string['configfilewritten'] = 'Die Datei config.php wurde erfolgreich erstellt';
$string['configurationcomplete'] = 'Die Konfiguration ist abgeschlossen.';
$string['database'] = 'Datenbank';
$string['databasecreationsettings'] = 'Sie m�ssen nun die Datenbankeinstellungen f�r die Speicherung der moodledaten konfigurieren. Die Datenbank wird automatisch vom Moodle4Windows-Installationsprozess mit den unten festgelegten Einstellungen angelegt:
<br />
<br /> <br />
<b>Typ:</b> \"mysql\" vom Installer festgelegt<br />
<b>Host:</b> \"localhost\" vom Installer festgelegt<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> \"root\" vom Installer festgelegt<br />
<b>Password:</b> Ihr Datenbankpasswort<br />
<b>Tables Prefix:</b> optionaler Prefix f�r alle Tabellennamen';
$string['databasesettings'] = 'Jetzt wird die Datenbank erstellt, in der die meisten moodle-Daten gespeichert werden. Diese Datenbank muss bereits angelegt sein und Sie m�ssen den Datenbankuser und das Passwort kennen.<br/>
 <br />
<b>Typ:</b> mysql oder postgres7<br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, Z.B. moodle<br />
<b>Nutzer:</b> Ihr Benutzername f�r die Datenbank<br />
<b>Passwort:</b> Ihr Passwort f�r die Datenbank<br />
<b>Tabellen Prefix:</b> optionaler Prefix, der f�r aller Tabellen genutzt wird ';
$string['dataroot'] = 'Datenverzeichnis';
$string['datarooterror'] = 'Das angegebene Datenverzeichnis ist nicht vorhanden und kann nicht angelegt werden. Korrigieren Sie diese Eingabe oder legen Sie das Verzeichnis manuell an.';
$string['dbconnectionerror'] = 'Eine Verbindung zur angegebenen Datenbank konnte nicht hergestellt werden. Bitte �berpr�fen Sie Ihre Eingaben.';
$string['dbcreationerror'] = 'Fehler beim Anlegen der Datenbank. Die Datenbank konnte mit diesen Einstellungen nicht erstellt werden.';
$string['dbhost'] = 'Name des Datenbankservers';
$string['dbpass'] = 'Passwort';
$string['dbprefix'] = 'Prefix f�r alle Tabellen';
$string['dbtype'] = 'Datenbankart';
$string['directorysettings'] = '<p>Bitte �berpr�fen Sie das Verzeichnis f�r diese Moodle Installation.</p>

<p><b>URL Adresse:</b>
Geben Sie hier die vollst�ndige URL f�r Ihre Moodle Installation an. Sollte Ihre Seite �ber mehrere Adressen erreichbar sein, geben Sie die Adresse an, die am h�ufigsten genutzt wird. Bitte geben Sie am Ende kein Backslash ein.</p>

<p><b>Moodle Verzeichnis:</b>
Geben Sie den absoluten Pfad f�r Ihre Moodle Installation an. Bitte beachten Sie ob Gross- und Kleinschreibung korrekt ist.</p>

<p><b>Datenverzeichnis:</b>
Moodle ben�tigt ein Verzeichnis, indem hochgeladene Dateien abgelegt werden. Dieses Verzeichnis muss Lese- und Schreibrechte f�r den 
Webuser des Servers haben. (�blicherweise \'nobody\' or \'apache\'), aber es sollte nicht direkt �ber das Internet erreichbar sein.</p>';
$string['dirroot'] = 'Moodle Verzeichnis';
$string['dirrooterror'] = 'Die Einstellungen f�r das Moodle-Verzeichnis sind nicht korrekt.  Es wurde keine Moodle Installation gefunden. Die anderen Werte wurden gel�scht.';
$string['download'] = 'Herunterladen';
$string['fail'] = 'Fehlgeschlagen';
$string['fileuploads'] = 'Dateien hochladen';
$string['fileuploadserror'] = 'Dies sollte auf \'on\' stehen';
$string['fileuploadshelp'] = '<p>Dateien hochladen ist auf diesem Server abgestellt.</p>

<p>Moodle kann installiert werden. Es ist aber nicht m�glich, Dateien f�r Kurse oder Bilder in den Profilen hochzuladen.</p>

<p>Um das Hochladen von Dateien zu erm�glichen, m�ssen Sie oder der Adminstrator des Servers die Datei php.ini anpassen und die Einstellungen f�r<b>file_uploads</b> �ndern auf \'1\'.</p>';
$string['gdversion'] = 'GD Version';
$string['gdversionerror'] = 'Die GD Bibliothek sollte verf�gbar sein, um Bilder zu erzeugen und anzuzeigen.';
$string['gdversionhelp'] = '<p>Auf Ihrem Server ist vermutlich GD nicht installiert. </p>
<p>GD ist eine Bibliothek, die von PHP ben�tigt wird, damit Bilder, z.B. Nutzer-Bilder oder grafische Darstellungen der LOG-Daten, von moodle angezeigt werden k�nnen. moodle arbeitet auch ohne GD. Die o.g. Funktionen stehen Ihnen dann jedoch nicht zur Verf�gung.</p>
<p> Wenn Sie GD unter UNIX zu PHP hinzuf�gen wollen, kompilieren Sie PHP unter Verwendung des Parameters   with-gd </p>
<p>Unter Windows k�nnen Sie die Datei php.ini bearbeiten und die Zeile libgd.dll auskommentieren.</p>';
$string['globalsquotes'] = 'Unsichere Einstellung von Globals';
$string['globalsquoteserror'] = 'Pr�fen Sie die PHP-Einstellungen: deaktivieren Sie register_globals und/oder aktivieren Sie magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Die Kombination von deaktivierten Magic Quotes GPC und aktivierten Register Globals zur gleichen Zeit sind nicht empfehlenswert.</p>

<p>Die empfohlene Einstellung ist <b>magic_quotes_gpc = On</b> und <b>register_globals = Off</b> in Ihrer php.ini-Datei</p>

<p>Wenn Sie keinen Zugriff auf die Datei php.ini haben, k�nnen Sie die folgende Zeile in der Datei .htaccess im Moodle Verzeichnis einf�gen:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Installation';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Dies sollte ausgeschaltet sein (\'off\')';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes Runtime sollte abgeschaltet \'off\' sein, damit moodle richtig l�uft.  </p>
<p>Normalerweise ist dies der Fall. Pr�fen Sie die Einstellung <b>magic_quotes_runtime</b> in der Datei php.ini. </p>
<p>Wenn Sie keinen Zugriff zur Datei php.ini haben sollten Sie die folgende Zeile in eine Datei .htacess in Ihrem moodle-Verzeichnis einf�gen: <blockquote>php_value magic_quotes_runtime Off</blockquote></p>';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'Die Speichereinstellung PHP memory limit ist zu niedrig. Es wird bei der k�nftigen Nutzung vermutlich zu Problemen kommen.';
$string['memorylimithelp'] = '<p>Die Einstellung der PHP  memory limit f�r Ihren Server ist zur Zeit auf $a eingestellt. </p>
<p>Dies wird vermutlich zu Problemen f�hren wenn Sie moodle mit vielen Aktivit�ten oder vielen Nutzer/innen verwenden. </p>
<p>Wir empfehlen die Einstellung zu erh�hen. Empfohlen werden 16M oder mehr. Dies k�nnen Sie auf verschiedene Arten machen:</p>
<ol>
<li>Wenn Sie PHP neu kompilieren k�nnen, nehmen Sie die Einstellung <i>--enable-memory-limit</i>. Dann kann moodle die Einstellung selber vornehmen.
<li>Wenn Sie Zugriff auf die Datei php.ini haben, k�nnen Sie die Einstellung <b>memory_limit</b> selber auf z.B. 16M anpassen. Wenn Sie selber keinen Zugriff haben, fragen Sie den/die Administrator/in, dies f�r Sie zu tun.
<li>Auf einigen PHP-Servern k�nnen Sie eine .htaccess-Datei im moodle-Verzeichnis einrichten. Tragen Sie darin die folgende Zeile ein: <p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Achtung: auf einigen Servern hindert diese Einstellung <b>alle</b> PHP-Seiten und Sie erhalten Fehlermeldungen. Entfernen Sie dann den Eintrag in der .htaccess-Datei wieder.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP wurde noch nicht richtig f�r diese MySQL Erweiterung konfiguriert. Daher kann es nicht mit MySQL kommunizieren. Pr�fen Sie bitte die php.ini-Einstellungen oder kompilieren Sie PHP neu.';
$string['pass'] = 'Durchgang';
$string['phpversion'] = 'PHP Version';
$string['phpversionerror'] = 'PHP muss mindestens in der Version 4.1.0 installiert sein.';
$string['phpversionhelp'] = '<p>moodle erwartet PHP mit der Version 4.1.0 oderh�her.</p>
<p>Sie nutzen zur Zeit die Version $a.</p>
<p>Sie m�ssen Ihre PHP-Verson aktualisieren oder auf einen Rechner wechseln, der eine neuere Version von PHP nutzt.</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Die Nutzung von moodle im safe mode kann zu Schwierigkeiten f�hren.';
$string['safemodehelp'] = '<p>moodle kann beim Betrieb im safe mode verschiedene Probleme haben, nicht zuletzt kann es unm�glich sein, neue Dateien zu erzeugen. </p>
<p>Safe Mode ist zumeist nur auf einigen �ffentlichen Webservern eingestellt. Suchen Sie sich einen Anbieter, der auf diese Einstellung verzichtet oder bitten Sie Ihren Dienstleister, dass Sie auf einen Server \'umziehen\' k�nnen, der diese Einstellung nicht verwendet.</p>
<p>Sie k�nnen versuchen, die Installation fortzusetzen. Sie m�ssen aber sp�ter mit Problemen rechnen. </p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Dies Option sollte abgestellt sein.';
$string['sessionautostarthelp'] = '<p>Moodle braucht session support und kann nicht funktionieren ohne diese Einstellung.</p>
<p>Sessions sind m�glich durch Einstellungen in der Datei php.ini. Bitte suchen Sie nach der Einstellung f�r session.auto_start </p>';
$string['wwwroot'] = 'URL Adresse';
$string['wwwrooterror'] = 'Diese URL scheint nicht g�ltig zu sein. Moodle ist nicht unter dieser Adresse installiert.  ';

?>
