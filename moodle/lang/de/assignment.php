<?PHP // $Id: assignment.php,v 1.25.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // assignment.php - created with Moodle 1.6 development (2005101200)


$string['allowresubmit'] = 'Erneutes Einreichen erlauben';
$string['assignmentdetails'] = 'Aufgabendetails';
$string['assignmentmail'] = '$a->teacher hat einen Kommentar zu Ihrer eingereichten Aufgabe \'$a->assignment\' verfasst.

Sie finden diesen im Anhang Ihrer abgegebenen Aufgabe:

$a->url';
$string['assignmentmailhtml'] = '$a->teacher hat einen Kommentar zu Ihrer abgegebenen Aufgabe verfasst.</i>\'<i>$a->assignment</i>\'<br /><br />
Sie finden diesen im Anhang Ihrer 
<a href=\"$a->url\">eingereichten Aufgabe</a>:.';
$string['assignmentname'] = 'Link (Kursseite)';
$string['assignmenttype'] = 'Aufgabentyp';
$string['availabledate'] = 'Verf�gbar von';
$string['comment'] = 'Kommentar';
$string['commentinline'] = 'eingearbeiteter Kommentar';
$string['configitemstocount'] = 'Werte, die bei den Online Aufgaben der Teilnehmer/innen, ausgez�hlt werden sollen (z.B. Wortzahl, Zeichenzahl)';
$string['configmaxbytes'] = 'Voreingestellte maximale Gr��e f�r alle Einstellungen auf dieser Seite';
$string['description'] = 'Zusammenfassung';
$string['duedate'] = 'Abgabetermin (Datum, Zeitpunkt)';
$string['duedateno'] = 'Kein Abgabedatum';
$string['early'] = '$a fr�h';
$string['editmysubmission'] = 'Meine L�sung bearbeiten';
$string['emailteachermail'] = '$a->username hat die Aufgabe \'$a->assignment\' �berarbeitet und neu hochgeladen 

Sie ist hier abgelegt:

$a->url';
$string['emailteachermailhtml'] = '$a->username hat die Aufgabe <i>\'$a->assignment\'</i> �berarbeitet und neu hochgeladen <br /><br />
Sie ist auf der Webseite <a href=\"$a->url\"> verf�gbar.</a>.';
$string['emailteachers'] = 'E-Mail-Nachrichten f�r Trainer/innen';
$string['emptysubmission'] = 'Sie haben noch nichts eingereicht';
$string['existingfiledeleted'] = 'Die vorhandene Datei wurde gel�scht: $a';
$string['failedupdatefeedback'] = 'Keine Aktualisierung der R�ckmeldung f�r Benutzer $a';
$string['feedback'] = 'R�ckmeldung';
$string['feedbackfromteacher'] = 'R�ckmeldung von $a';
$string['feedbackupdated'] = 'R�ckmeldung aktualisiert f�r $a Teilnehmer/innen';
$string['guestnoupload'] = 'G�ste d�rfen keine Dateien hochladen.';
$string['helpoffline'] = '<p>Dieser Aufgabentyp ist n�tzlich wenn die Erledigung der Aufgabe ausserhalb von moodle erfolgt.</p> <p>Die Teilnehmer/innen sehen die Aufgabenbeschreibung. Sie k�nnen jedoch keine L�sungsdatei hochladen. Die Bewertung erfolgt in dieser Aufgabe und die Teilnehmer/inenn k�nnen auch die Bewertung hier einsehen.</p>';
$string['helponline'] = '<p>Dieser Aufgabentyp fordert die Teilnehmer/innen auf ihre L�sung im Editorfenster einzutragen. Der/die Trainer/in kann die L�sung online bewerten und im Textfenster direkt Kommentare eintragen oder Ver�nderungen vornehmen.</p> <p>In fr�heren moodle-Versionen wurde diese Funktion vom Journal-Modul wahrgenommen.</p>';
$string['helpuploadsingle'] = '<p>Diese Aufgabenart erm�glicht den Upload einer beliebigen Datei f�r jede/n Teilnehmer/in</p><p>Dies kann eine Textdatei, eine Bilddatei, eine Zip-Datei oder eine Datei in einem Format, das Sie in der Aufgabenstellung definiert haben.</p>';
$string['late'] = '$a sp�t ';
$string['maximumgrade'] = 'H�chste Bewertung ';
$string['maximumsize'] = 'Maximale Gr��e';
$string['modulename'] = 'Aufgabe';
$string['modulenameplural'] = 'Aufgaben';
$string['newsubmissions'] = 'Aufgaben eingereicht';
$string['noassignments'] = 'Es gibt derzeit keine  Aufgaben';
$string['noattempts'] = 'Bisher wurden keine Arbeiten eingereicht.';
$string['notgradedyet'] = 'Noch nicht bewertet';
$string['notsubmittedyet'] = 'Noch nichts eingereicht';
$string['overwritewarning'] = 'Hinweis: erneutes hochladen ERSETZT Ihren gegenw�rtigen Eintrag ';
$string['pagesize'] = 'Zahl der abgegebenen Aufgaben pro Seite';
$string['preventlate'] = 'Verhindert versp�tete Abgaben';
$string['quickgrade'] = 'Schnelle Bewertung zulassen';
$string['saveallfeedback'] = 'Alle meine R�ckmeldungen speichern';
$string['submission'] = 'Aufgabenabgabe';
$string['submissionfeedback'] = 'R�ckmeldung zu den eingereichten Aufgaben';
$string['submissions'] = 'Eingereichte Aufgaben';
$string['submissionsaved'] = 'Ihre Ver�nderungen wurden gespeichert';
$string['submitassignment'] = 'Tragen Sie Ihre Aufgabe unter Verwendung dieses Formulars ein';
$string['submitted'] = 'Eingereicht';
$string['typeoffline'] = 'Offline Aktivit�t ';
$string['typeonline'] = 'Online-Aktivit�t';
$string['typeuploadsingle'] = 'Eine einzige Datei hochladen';
$string['uploadbadname'] = 'Dieser Dateiname enth�lt unzul�ssige Zeichen und kann nicht hochgeladen werden.';
$string['uploadedfiles'] = 'hochgeladene Dateien';
$string['uploaderror'] = 'Beim Hochladen der Datei trat ein Fehler auf';
$string['uploadfailnoupdate'] = 'Die Datei wurde korrekt hochgeladen, aber Ihr Eintrag kann nicht aktualisiert werden!';
$string['uploadfiletoobig'] = 'Entschuldigung, aber diese Datei ist zu gro� (die Begrenzung liegt bei $a Bytes)';
$string['uploadnofilefound'] = 'Es wurde keine Datei gefunden. Sind Sie sicher, dass Sie eine f�r das Hochladen ausgew�hlt haben?';
$string['uploadnotregistered'] = '\'$a\' wurde korrekt hochgeladen, aber der Eintrag wurde nicht registriert!';
$string['uploadsuccess'] = '\'$a\' wurde erfolgreich hochgeladen';
$string['viewfeedback'] = 'Aufgabenbewertung und R�ckmeldung anzeigen ';
$string['viewsubmissions'] = '$a eingereichte Aufgabe(n) ansehen, bewerten und kommentieren ';
$string['yoursubmission'] = 'Ihre eingereichten Aufgaben';

?>
