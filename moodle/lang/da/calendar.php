<?PHP // $Id: calendar.php,v 1.5.2.3 2006/02/06 09:59:32 moodler Exp $ 
      // calendar.php - created with Moodle 1.6 development (2005101200)


$string['calendar'] = 'Kalender';
$string['calendarheading'] = '$a Kalender';
$string['clickhide'] = 'tryk for at skjule';
$string['clickshow'] = 'tryk for at vise';
$string['confirmeventdelete'] = 'Er du sikker p� at du vil slette denne begivenhed?';
$string['courseevents'] = 'Kursus begivenheder';
$string['dayview'] = 'Dagvisning';
$string['daywithnoevents'] = 'Der er ingen begivenheder denne dag.';
$string['default'] = 'Standart';
$string['deleteevent'] = 'Slet begivenhed';
$string['detailedmonthview'] = 'Detaljeret m�neds visning';
$string['durationminutes'] = 'Varighed i minutter';
$string['durationnone'] = 'Uden varighed';
$string['durationuntil'] = 'Indtil';
$string['editevent'] = 'Ret begivenhed';
$string['errorbeforecoursestart'] = 'Kan ikke placere begivenhed f�r kursus start.';
$string['errorinvaliddate'] = 'Ugyldig dato';
$string['errorinvalidminutes'] = 'Angiv varigheden i antal minutter, fra 1 min til 999 minutter.';
$string['errorinvalidrepeats'] = 'Angiv antallet af begivenheder, fra 1 til 99.';
$string['errornodescription'] = 'Beskrivelse er n�dvendig';
$string['errornoeventname'] = 'Navn er n�dvendigt';
$string['eventdate'] = 'Dato';
$string['eventdescription'] = 'Beskrivelse';
$string['eventduration'] = 'Varighed';
$string['eventendtime'] = 'Afslutningstid';
$string['eventinstanttime'] = 'Tid';
$string['eventkind'] = 'Begivenhedstype';
$string['eventname'] = 'Navn';
$string['eventrepeat'] = 'Gentagelser';
$string['eventsfor'] = '$a begivenheder';
$string['eventstarttime'] = 'Starttid';
$string['eventtime'] = 'Tid';
$string['eventview'] = 'Begivenhedsdetaljer';
$string['expired'] = 'Udl�bet';
$string['explain_lookahead'] = 'Denne indstilling s�tter det (maksimale) antal dage i fremtiden som en begivenhed starter for at den bliver vist som kommende begivenhed. Begivenheder der starter senere vil ikke blive vist. L�g m�rke til at <strong>der ikke er nogen garanti</strong> for at alle kommende begivenheder vil blive vist; hvis der er for mange (flere end \"Vis antal kommende begivenheder\" indstillingen) i s� fald vi de begivenheder som er l�ngst ude i fremtiden ikke blive vist.';
$string['explain_maxevents'] = 'Denne indstilling angiver det h�jeste antal kommende begivenheder der kan vises. Hvis du v�lger et h�jt antal er det muligt at visningen af begivenheder vil fylde en hel del p� sk�rmen. ';
$string['explain_persistflt'] = 'Hvis aktiveret vil moodle huske din sidste begivenhedsfilter indstilling og automatisk genskabe den hver gang du logger ind.';
$string['explain_startwday'] = 'Denne indstilling konfigurere hvordan alle m�nedskalendere skal vises. Brug det til at vise kalenderen p� den m�de du er vant til.';
$string['explain_timeformat'] = 'Denne indstilling kontrollere hvordan tiden skal vises i kalenderen. Du kan v�lge at se tiden enten i 12 timere format eller 24 timere format. Hvis du v�lger \"standart\", s� vil formatet automatisk blive valgt i henhold til det sprog der er valgt p� sitet.';
$string['fri'] = 'Fri';
$string['friday'] = 'Fredag';
$string['globalevents'] = 'Globale begivenheder';
$string['gotocalendar'] = 'G� til kalender';
$string['groupevents'] = 'Gruppe begivenheder';
$string['hidden'] = 'skjult';
$string['manyevents'] = '$a begivenheder';
$string['mon'] = 'Man';
$string['monday'] = 'Mandag';
$string['monthlyview'] = 'M�nedsvisning';
$string['newevent'] = 'Ny begivenhed';
$string['noupcomingevents'] = 'Der er ikke nogle kommende begivenheder';
$string['oneevent'] = '1 begivenhed';
$string['pref_lookahead'] = 'Kommende begivenheder i fremtiden';
$string['pref_maxevents'] = 'Vis antal kommende begivenheder';
$string['pref_persistflt'] = 'Husk filterindstillinger';
$string['pref_startwday'] = 'F�rste dag af uge';
$string['pref_timeformat'] = 'Tidsvisning format';
$string['preferences'] = 'Indstillinger';
$string['preferences_available'] = 'Dine personlige indstillinger';
$string['repeateditall'] = 'Tilf�j rettelser til alle $a begivenheder i denne tilbagevendene serie';
$string['repeateditthis'] = 'Tilf�j kun �ndringer til denne begivenhed';
$string['repeatnone'] = 'Ingen gentagelser';
$string['repeatweeksl'] = 'Gentag ugentlig.';
$string['repeatweeksr'] = 'Begivenheder';
$string['sat'] = 'L�r';
$string['saturday'] = 'L�rdag';
$string['shown'] = 'vist';
$string['spanningevents'] = 'Begivenheder undervejs';
$string['sun'] = 'S�n';
$string['sunday'] = 'S�ndag';
$string['thu'] = 'Tors';
$string['thursday'] = 'Torsdag';
$string['timeformat_12'] = '12-timer (am/pm)';
$string['timeformat_24'] = '24-timer';
$string['today'] = 'I dag';
$string['tomorrow'] = 'I morgen';
$string['tt_deleteevent'] = 'Slet begivenhed';
$string['tt_editevent'] = 'Ret begivenhed';
$string['tt_hidecourse'] = 'Kursus begivenheder er vist (tryk for at skjule)';
$string['tt_hideglobal'] = 'Globale begivenheder er vist (tryk for at skjule)';
$string['tt_hidegroups'] = 'Gruppe begivenheder er vist (tryk for at skjule)';
$string['tt_hideuser'] = 'Bruger begivenheder er vist (tryk for at skjule)';
$string['tt_showcourse'] = 'Kursus begivenheder er skjult (tryk for at vise)';
$string['tt_showglobal'] = 'Globale begivenheder er skjult (tryk for at vise)';
$string['tt_showgroups'] = 'Gruppe begivenheder er skjult (tryk for at vise)';
$string['tt_showuser'] = 'Bruger begivenheder er skjult (tryk for at vise)';
$string['tue'] = 'Tirs';
$string['tuesday'] = 'Tirsdag';
$string['typecourse'] = 'Kursus begivenhed';
$string['typegroup'] = 'Gruppebegivenhed';
$string['typesite'] = 'Site begivenhed';
$string['typeuser'] = 'Bruger begivenhed';
$string['upcomingevents'] = 'Kommende begivenheder';
$string['userevents'] = 'Bruger begivenheder';
$string['wed'] = 'Ons';
$string['wednesday'] = 'Onsdag';
$string['yesterday'] = 'I g�r';
$string['youcandeleteallrepeats'] = 'Denne begivenhed er en del af en tilbagevendene serie af begivenheder. Du kan kun slette denne begivenhed, eller alle $a begivenheder i serien p� en gang.';

?>