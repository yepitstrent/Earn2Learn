<?PHP // $Id: calendar.php,v 1.9.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // calendar.php - created with Moodle 1.6 development (2005101200)


$string['calendar'] = 'Kalender';
$string['calendarheading'] = '$a Kalender';
$string['clickhide'] = 'Mit einem Klick verstecken';
$string['clickshow'] = 'Mit einem Klick anzeigen';
$string['confirmeventdelete'] = 'Sind Sie sicher, dass Sie diesen Termin l�schen wollen?';
$string['courseevents'] = 'Kurstermine';
$string['dayview'] = 'Tagesansicht';
$string['daywithnoevents'] = 'Es gibt heute keine Termine';
$string['default'] = 'Grundeinstellung';
$string['deleteevent'] = 'Termin l�schen';
$string['detailedmonthview'] = 'Monatsgesamtansicht';
$string['durationminutes'] = 'Dauer in Minuten';
$string['durationnone'] = 'Ohne Zeitangabe';
$string['durationuntil'] = 'Bis';
$string['editevent'] = 'Termin bearbeiten';
$string['errorbeforecoursestart'] = 'Der angegebene Termin liegt vor dem Beginn des Kurses. Bitte korrigieren Sie den Eintrag.';
$string['errorinvaliddate'] = 'Ung�ltiges Datum';
$string['errorinvalidminutes'] = 'Geben Sie die Dauer in Minuten ein (Zahl zwischen 1 und 999)';
$string['errorinvalidrepeats'] = 'Geben Sie die Zahl der Veranstaltungen ein (Zahl zwischen 1 und 99';
$string['errornodescription'] = 'Eine Beschreibung f�r den Termin mu� eingetragen werden.';
$string['errornoeventname'] = 'Eine Bezeichnung f�r den Termin ist erforderlich.';
$string['eventdate'] = 'Datum';
$string['eventdescription'] = 'Beschreibung';
$string['eventduration'] = 'Dauer';
$string['eventendtime'] = 'Endzeitpunkt';
$string['eventinstanttime'] = 'Zeit';
$string['eventkind'] = 'Art des Termins';
$string['eventname'] = 'Name';
$string['eventrepeat'] = 'Wiederholungen';
$string['eventsfor'] = '$a Termine';
$string['eventstarttime'] = 'Startzeitpunkt';
$string['eventtime'] = 'Zeit';
$string['eventview'] = 'Details zu den Terminen';
$string['expired'] = 'Abgeschlossen';
$string['explain_lookahead'] = 'Mit dieser Einstellung legen Sie fest wie weit im voraus Termine angezeigt werden. Sp�ter liegende Termine werden nicht als bevorstehende Termine angezeigt. Beachten Sie folgenden Hinweis: Es werden nur so viele Termine als bevorstehend angezeigt wie Sie sie in der Einstellung H�chstzahl der angezeigten bevorstehenden Termine festgelegt haben. Sie k�nnen also den Zeitraum f�r den Termine angezeigt werden und die H�chstzahl der in dieser Zeit dargestellten Termine festlegen.';
$string['explain_maxevents'] = 'Diese Einstellung legt die H�chstzahl k�nftiger Termine fest, die angezeigt werden. Wenn Sie hier eine sehr gro�e Zahl eingeben, kann es sein, dass die Anzeige auf dem Bildschirm in einer sehr langen Liste erfolgt.';
$string['explain_persistflt'] = 'Wenn Sie diese Einstellung aktivieren, pr�ft moodle bei jedem Login die Filtereinstellungen f�r Termine und aktualisiert sie.';
$string['explain_startwday'] = 'Diese Einstellung legt die Art der Monatsdarstellung des Kalenders fest. ';
$string['explain_timeformat'] = 'Mit dieser Einstellung w�hlen Sie das Format der Zeitanzeige (12/24-Stunden-Anzeige). Die Default-Einstellung �bernimmt das Format der Zeitanzeige aus der Sprachversion, die Sie f�r Ihre Seite gew�hlt haben.';
$string['fri'] = 'Fr';
$string['friday'] = 'Freitag';
$string['globalevents'] = 'Allgemeine Termine';
$string['gotocalendar'] = 'Zum Kalender';
$string['groupevents'] = 'Termine meiner Gruppen';
$string['hidden'] = 'versteckt';
$string['manyevents'] = '$a Termine';
$string['mon'] = 'Mo';
$string['monday'] = 'Montag';
$string['monthlyview'] = 'Monats�bersicht';
$string['newevent'] = 'Neuer Termin';
$string['noupcomingevents'] = 'Es gibt keine weiteren Termine';
$string['oneevent'] = '1 Termin';
$string['pref_lookahead'] = 'Terminvorschau';
$string['pref_maxevents'] = 'H�chstzahl der bevorstehenden Termine';
$string['pref_persistflt'] = 'An Filtereinstellungen erinnern';
$string['pref_startwday'] = 'Erster Tag der Woche';
$string['pref_timeformat'] = 'Format der Zeitanzeige';
$string['preferences'] = 'Einstellungen';
$string['preferences_available'] = 'Ihre pers�nlichen Einstellungen';
$string['repeateditall'] = 'Ver�nderungen f�r alle $a Termine dieser Reihe bearbeiten';
$string['repeateditthis'] = 'Ver�nderungen nur an diesem einen Termin vornehmen';
$string['repeatnone'] = 'Keine Wiederholungen';
$string['repeatweeksl'] = 'W�chentliche Wiederholung, automatische Erstellung';
$string['repeatweeksr'] = 'Termine';
$string['sat'] = 'Sa';
$string['saturday'] = 'Samstag';
$string['shown'] = 'angezeigt';
$string['spanningevents'] = 'Termine in Vorbereitung';
$string['sun'] = 'So';
$string['sunday'] = 'Sonntag';
$string['thu'] = 'Do';
$string['thursday'] = 'Donnerstag';
$string['timeformat_12'] = '12-Stunden-Anzeige';
$string['timeformat_24'] = '24-Stunden-Anzeige';
$string['today'] = 'Heute';
$string['tomorrow'] = 'Morgen';
$string['tt_deleteevent'] = 'Termin l�schen';
$string['tt_editevent'] = 'Termin bearbeiten';
$string['tt_hidecourse'] = 'Kurstermine werden angezeigt (klicken Sie hier ,um sie zu verstecken).';
$string['tt_hideglobal'] = 'Globale Termine werden angezeigt (klicken Sie hier, um sie zu verstecken ).';
$string['tt_hidegroups'] = 'Gruppentermine werden angezeigt (klicken Sie hier, um sie zu verstecken).';
$string['tt_hideuser'] = 'Teilnehmertermine werden angezeigt (klicken Sie hier, um sie zu verstecken).';
$string['tt_showcourse'] = 'Kurstermine werden verborgen (klicken Sie hier, um sie anzuzeigen).';
$string['tt_showglobal'] = 'Globale Termine werden verborgen (klicken Sie hier, um sie anzuzeigen).';
$string['tt_showgroups'] = 'Gruppentermine werden verborgen (klicken Sie hier, um sie anzuzeigen).';
$string['tt_showuser'] = 'Teilnehmertermine werden verborgen (klicken Sie hier, um sie anzuzeigen).';
$string['tue'] = 'Di';
$string['tuesday'] = 'Dienstag';
$string['typecourse'] = 'Kurstermine';
$string['typegroup'] = 'Termine meiner Gruppen';
$string['typesite'] = 'Allgemeine Termine';
$string['typeuser'] = 'pers�nliche Termine';
$string['upcomingevents'] = 'Bald aktuell ...';
$string['userevents'] = 'Pers�nliche Termine';
$string['wed'] = 'Mi';
$string['wednesday'] = 'Mittwoch';
$string['yesterday'] = 'Gestern';
$string['youcandeleteallrepeats'] = 'Dieser Termin ist Teil einer ganzen Reihe von Terminen. Sie k�nnen diesen einzelnen Termin oder alle $a Termine dieser Reihe auf einmal l�schen.';

?>