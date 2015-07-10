<?PHP // $Id: enrol_flatfile.php,v 1.2.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.4.3 (2004083130)


$string['description'] = 'Diese Methode benutzt mehrfach eine speziell formatierte Textdatei, die in dem angegebenen Verzeichnis abgelegt ist. Die Datei kann folgenden Aufbau haben:
<pre>
add, Teilnehmer, 5, CF101
add, Moderator, 6, CF101
add, teacheredit, 7, CF101
del, Teilnehmer, 8, CF101
del, Teilnehmer, 17, CF101
add, Teilnehmer, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Dateiname';
$string['filelockedmail'] = 'Die Textdatei ($a), die f�r die Registrierung genutzt wurde, kann durch den Cron-Job nicht gel�scht werden. Dies ist meist der Fall, wenn die Berechtigungen nicht richtig gesetzt sind. Bitte �ndern Sie die Berechtigungen, so dass Moodle die Datei l�schen kann. Ansonsten wird die Datei mit jedem Cron-Job wieder ausgef�hrt. ';
$string['filelockedmailsubject'] = 'Wichtiger Fehler:  Datei f�r die Registrierung';
$string['location'] = 'Angabe des Verzeichnisses, in dem die Datei abgelegt ist';
$string['mailadmin'] = 'Administrator per E-Mail benachrichtigen';
$string['mailusers'] = 'Benutzer per E-Mail benachrichtigen';

?>
