<?PHP // $Id: enrol_authorize.php,v 1.1.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.6 development (2005111101)


$string['adminauthorizeccapture'] = 'Orderreview & Auto-Capture Einstellungen';
$string['adminauthorizeemail'] = 'E-Mailversand-Einstellungen';
$string['adminauthorizesettings'] = 'Authorize.net Einstellungen';
$string['adminauthorizewide'] = 'Seitenweite Einstellungen';
$string['adminavs'] = 'Klicken Sie die Funktion an wenn Sie das Adress Verification System (AVS) im Authorize Account aktiviert haben. Damit sind Eintragungen in Adressfeldern wie Strasse, Staat, Country und ZiP beim Ausf�llen des Zahlungsvorgangs erforderlich.';
$string['admincronsetup'] = 'Die cron.php Datei wurde in den letzten 24 Stunden nicht ausgel�st.<br />Der Cron-Prozess ist erforderlich, um das Autocapture Feature zu nutzen.<br /><a href=\"../doc/?frame=install.html&#8834;=cron\">Cron Setup</a> oder deaktivieren Sie an_review wieder.<br />Wenn Sie autocapture deaktivieren werden Transaktionen deaktiviert, die nicht innerhalb von 30 Tagen manuell best�tigt werden.<br />Pr�fen Sie an_review und geben Sie \'0\' im Feld an_capture_day<br />wenn Sie innerhalb von 30 Tagen  Zahlungen manuell akzeptieren/zur�ckweisen wollen.';
$string['adminemailexpired'] = 'Versendet <b>$a</b> Tage vor Ende der Bearbeitungsfrist f�r offene Zahlungsvorg�nge Warn-E-Mails an Admins. (0=E-Mail versenden deaktivieren, default=2, max=5)<br />Die Einstellung ist hilfreich wenn manuelles Capturing aktiviert ist (an_review=checked, an_capture_day=0).';
$string['adminhelpcapture'] = 'Sie m�ssen Zahlungen nicht manuell akzeptieren oder zur�ckweisen. Mit Hilfe von Autocapture k�nnen Sie verhindern, dass Zahlungsvorg�nge widerrufen werden. Was ist zu tun?
- Cron setup vornehmen.
- an_review pr�fen
- Eintrag eines Wertes zwischen 1 und 29 in das Feld an_capture_day Feld. Kartenzahlungen werden angenommen und die Teilnehmer/innen in die Kurse eingetragen bis Sie innerhalb der Frist den Vorgang bearbeitet haben.';
$string['adminhelpreview'] = 'Wie kann ich manuell Zahlungen annehmen/zur�ckweisen?
- an_review pr�fen.
- \'0\' im Feld an_capture_day eintragen.

Wie werden Teilnehmer/innen sofort nach Eingabe der Kartendaten in den Kurs eingetragen?
- Deaktivieren Sie an_review.';
$string['adminneworder'] = 'An den Admin,

Eine neue Zhalungist registriert worden:

Order ID: $a->orderid
TransaKtion ID: $a->transid
Nutzer/innen: $a->user
Kurse: $a->course
Betrag: $a->amount

AUTO-CAPTURE AKTIVIERT?: $a->acstatus

Mit aktivem auto-capture wird die Kreditkarte angenommen unter $a->captureon und die Teilnehmer/in wird im Kurs eingetragen. Sonst wird die Karte unter $a->captureon eingetragen und kann am gleichen Tag nicht mehr akzeptiert werden.

Zahlungen k�nnen angenommen/zur�ckgewiesen werden wenn Sie diesem Link folgen: 
$a->url';
$string['adminnewordersubject'] = '$a->course: Neue offene Zahlungen ($a->orderid)';
$string['adminpendingorders'] = 'Sie haben das auto-capture Feature deaktiviert. <br />Insgesamt $a->count Transaktionen mit dem Status AN_STATUS_AUTH werden zur�ckgewiesen wenn Sie diese nicht pr�fen.<br />Gehen Sie zum <a href=\'�a->url\'>Zahlungsmanagement</a>, um diese zu bearbeiten.';
$string['adminreview'] = 'Zahlung �berpr�fen bevor Kreditkarte akzeptiert wird';
$string['amount'] = 'Betrag';
$string['anlogin'] = 'Authorize.net: Loginname';
$string['anpassword'] = 'Authorize.net: Passwort (nicht erforderlich)';
$string['anreferer'] = 'Tragen Sie hier die URL ein wenn Sie dies in Ihrem authorize.net account eintragen. Damit wird eine \"Referer:URL\" in der Webanfrage erstellt.';
$string['antestmode'] = 'Authorize.net: Test Transaktionen';
$string['antrankey'] = 'Authorize.net: Transaktionskey';
$string['authorizedpendingcapture'] = 'Best�tigte/Wartende Zahlungen';
$string['canbecredit'] = 'Kann erstattet werden an $a->upto';
$string['cancelled'] = 'Aufgehoben';
$string['capture'] = 'Zahlungen';
$string['capturedpendingsettle'] = 'Best�tigte/offene Zahlungen';
$string['capturedsettled'] = 'Best�tigt/ gezahlt';
$string['capturetestwarn'] = 'Die Zahlungen scheinen zu funktionieren. Im Testmodus wurde aber kein Datensatz aktualisiert.';
$string['captureyes'] = 'Die Kreditkarte wird angenommen und der/die Teilnehmer/in in den Kurs eingetragen. Sind Sie sicher?';
$string['ccexpire'] = 'Verfallsdatum';
$string['ccexpired'] = 'Die Kreditkarte ist abgelaufen';
$string['ccinvalid'] = 'Ung�ltige Kartennummer';
$string['ccno'] = 'Kreditkartennummer';
$string['cctype'] = 'Kreditkartentyp';
$string['ccvv'] = 'Kreditkarten �berpr�fung';
$string['ccvvhelp'] = 'Schauen Sie auf der Kartenr�ckseite nach (letzte drei Zeichen)';
$string['choosemethod'] = 'Wenn Sie den Zugangsschl�ssel kennen, tragen Sie ihn hier ein. Im anderen Fall m�ssen Sie erst die Kursgeb�hren entrichten.';
$string['chooseone'] = 'F�llen Sie eines oder beide Felder aus';
$string['credittestwarn'] = 'Die Kreditkartenabwicklung scheint zu funktionieren. Im Testmodus wurde aber kein Datensatz zur Datenbank hinzugef�gt.';
$string['cutofftime'] = 'Transaktionsende. Wannn soll die letze Zahlung zur Abwicklung aufgenommen werden?';
$string['delete'] = 'L�schen';
$string['description'] = 'Das Authorize.net Modul erlaubt Kursgeb�hren �ber Kreditkarten abzurechnen. Wenn der Betrag f�r einen Kurs auf \'0\' gesetzt wird, wird die Geb�hrenabfrage nicht gestartet. Sie k�nnen hier einen seitenweit g�ltigen Betrag einsetzen, der als Grundbetrag f�r jeden Kurs voreingestellt ist. Diese Einstellung kann in den Kurseinstellungen �berschrieben werden.';
$string['enrolname'] = 'Authorize.net Kreditkartenabrechnung';
$string['expired'] = 'Ablauffrist';
$string['howmuch'] = 'Wie viel?';
$string['httpsrequired'] = 'Ihre Anfrage kann leider zur Zeit nicht bearbeitet werden. Die Konfiguration der Seite weist einen Fehler auf. <br /><br />
Geben Sie Ihre Kreditkartennummer solange nicht ein bis Sie ein gelbes Schlo� am Fu� des Browsers sehen k�nnen. Es signalisiert eine einfache Verschl�sselung f�r die �bermittlung aller Daten zwischen Ihrem Rechner und dem Server. Damit wird die Daten�bertragung gesch�tzt und Ihre Kreditkartendaten k�nnen nichtin falsche H�nde geraten.';
$string['logindesc'] = 'Sie k�nnen in den Optionen (Variables/Security) eine sichere <a href=\"$a->url\">Https Verbindung</a> ausw�hlen.
<br /><br />
Ist diese Variable gesetzt, wird Moodle f�r die Login- und Zahlungsseite eine sichere https Verbindung aufbauen.';
$string['nameoncard'] = 'Name auf den die Karte ausgestellt ist';
$string['noreturns'] = 'Kein Zur�ck!';
$string['notsettled'] = 'Nicht bearbeitet';
$string['orderid'] = 'Order ID';
$string['paymentmanagement'] = 'Zahlungsmanagement';
$string['paymentpending'] = 'Ihre Zahlung f�r diesen Kurs wird unter der Nummer  $a->orderid  bearbeitet.';
$string['pendingordersemail'] = 'Hallo Admin,

$a->pending Transaktionen m�ssen innerhalb von zwei Tagen von Ihnen bearbeitet werden.

Dies ist ein Warnhinweis, weil Sie autocapture nicht eingerichtet haben. Die Zahlungen m�ssen daher manuell von Ihnen best�tigt oder zur�ckgewiesen werden.

Die offenen Zahlungen k�nnen unter $a->url bearbeitet werden.

Unter $a->enrolurl kann autcapture eingerichtet werden, damit Sie k�nftig diese E-Mial nicht mehr erhalten.';
$string['refund'] = 'R�ckzahlung';
$string['refunded'] = 'Zur�ckgezahlt';
$string['returns'] = 'R�ckl�ufe';
$string['reviewday'] = 'Bewahren der Kreditkarte automatisch f�r <b>$a </b> Tage bis ein/e Trainer/in oder ein/e Administrator/in die Zahlung gepr�ft hat. CronJobs m�ssen hierf�r aktiv sein.<br/>Wert 0 Tage = Funktion deaktiviert<br/>autocapture = Trainer/in, Admin pr�ft manuell.<br/>Transaktion wird gel�scht wenn autocapture deaktiviert wird oder innerhalb von 30 Tagen keine Pr�fung erfolgt ist.';
$string['reviewnotify'] = 'Ihre Zahlung wird gepr�ft. Sie erhalten eine E-Mailnachricht von Ihrer/m Trainer/in in einigen Tagen.';
$string['sendpaymentbutton'] = 'Zahlung �bertragen';
$string['settled'] = 'Erledigt';
$string['settlementdate'] = 'Erledigungstermin';
$string['subvoidyes'] = 'Zur�ckgezahlte Transaktionen $a->transid werden aufgehoben und Ihr Account wird mit $a->amount belastet.';
$string['tested'] = 'Gepr�ft';
$string['testmode'] = '[TEST MODUS]';
$string['transid'] = 'Transaktons-ID';
$string['unenrolstudent'] = 'Teilnehmer/in aus Kurs austragen?';
$string['void'] = 'G�ltig';
$string['voidtestwarn'] = 'Die G�ltigkeitspr�fung scheint zu arbeiten. Im Testmodus wurde jedoch kein Datensatz aktualisiert. ';
$string['voidyes'] = 'Ihre Transaktion wird abgebrochen. Sind Sie sicher?';
$string['zipcode'] = 'Zip Code/Postleitzahl';

?>
