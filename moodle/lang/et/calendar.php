<?PHP // $Id: calendar.php,v 1.1.2.3 2006/02/06 09:59:41 moodler Exp $ 
      // calendar.php - created with Moodle 1.4.4 + (2004083140)


$string['calendar'] = 'Kalender';
$string['calendarheading'] = '$a kalender';
$string['clickhide'] = 'kliki ,et peita';
$string['clickshow'] = 'kliki ,et n�idata';
$string['confirmeventdelete'] = 'Kas oled kindel, et tahad seda s�ndmust kustutada?';
$string['courseevents'] = 'kursuse s�ndmused';
$string['day'] = 'p�ev';
$string['dayview'] = 'p�eva vaade';
$string['daywithnoevents'] = 'T�nasel p�eval pole �htegi s�ndmust';
$string['default'] = 'Vaikimisi';
$string['deleteevent'] = 'Kustuta s�ndmus';
$string['detailedmonthview'] = 'Kuu detailne vaade';
$string['dstadjusttime'] = 'Liiguta aega';
$string['dstdefaultpresetname'] = 'Uus DST ettem��rus';
$string['dsthumanreadable'] = '$a->activate_indeks
$a->activate_n�dalap�evad
a->activate_kuu, liiguta aega $a->offset minutid $a->suund. See muutus kehtib kuni $a->deactivate_indeks $a->deactivate_n�dalap�evad of $a->deactivate_kuu';
$string['dstpresetactivated'] = 'Aktiveerimine';
$string['dstpresetadjusttime'] = 'Aja kohandamine';
$string['dstpresetdeactivated'] = 'deaktiveerimine';
$string['dstpresetname'] = 'Ettem��ratud nimi';
$string['durationminutes'] = 'Minutite kestvus';
$string['durationnone'] = 'Kestuseta';
$string['durationuntil'] = 'Kuni';
$string['editevent'] = 'S�ndmuse redigeerimine';
$string['errorbeforecoursestart'] = 'S�ndmus ei saa toimuda enne kursuse alguskuup�eva';
$string['errorinvaliddate'] = 'Vigane kuup�ev';
$string['errorinvalidminutes'] = 'T�psuta minutite kestvust valides numbri 1 ja 999 vahel';
$string['errorinvalidrepeats'] = 'T�psusta s�ndmuste arvu valides numbri 1 ja 99 vahel';
$string['errornodescription'] = 'Kirjeldus on kohustuslik';
$string['errornoeventname'] = 'Nimi on kohustuslik';
$string['eventdate'] = 'Kuup�ev';
$string['eventdescription'] = 'Kirjeldus';
$string['eventduration'] = 'Kestus';
$string['eventendtime'] = 'L�puaeg';
$string['eventinstanttime'] = 'Aeg';
$string['eventkind'] = 'S�ndmuse liik';
$string['eventname'] = 'Nimi';
$string['eventrepeat'] = 'Kordused';
$string['eventsfor'] = '$a s�ndmust';
$string['eventstarttime'] = 'Algusaeg';
$string['eventtime'] = 'Aeg';
$string['eventview'] = 'S�ndmuse �ksikasjad';
$string['expired'] = 'Aegunud';
$string['explain_dstpreset'] = 'Sa saad valida millist ala sa soovid kasutada DST seadistuse jaoks';
$string['explain_dstpresetforced'] = 'Saidi administraator ei luba kasutajaid muuta seda seadistust';
$string['explain_lookahead'] = 'See m��rab (maksimum) p�evade arvu tulevikus millal s�ndmus peab toimuma selleks ,et teda kuvatakse kui kavandatavat s�ndmust. S�ndmus mis hakkab peale seda ei kuvata kunagi kui kavandatava s�ndmusena. Palun m�rkige <strong>,et ei ole mingit garantiid</strong>,et k�ik s�ndmused sellel ajal kuvatakse. Kui neid on liiga palju (rohkem kui \"maksimum s�ndmuste arvu ettem��rus\") siis k�ige kaugemaid s�ndmusi ei kuvata ';
$string['explain_maxevents'] = 'See m��rab kavandavate s�ndmuste maksimum  arvu mida saab kuvada. Kui te valite suure arvu siis on v�imalik ,et kavandatavate s�ndmuste kuvamine v�tab teie ekraanil palju ruumi';
$string['explain_persistflt'] = 'Kui see on sisse l�litatud, siis Moodle j�tab meelde viimase s�ndmuse filtreeritud seaded ja k�ivatab selle automaatselt iga kord kui te ennast sisse logite';
$string['explain_startwday'] = 'Kalendri n�dalad n�idatakse alates sellest p�evast mille te ise valite';
$string['explain_timeformat'] = 'Te v�ite valida 12 tunnise v�i 24 tunnise aja formaadi vahel. Kui te valite \"vaikimisi\" siis see formaat valitakse automaatselt teie saidi keele alusel';
$string['first'] = 'esimene';
$string['fri'] = 'R';
$string['friday'] = 'reede';
$string['globalevents'] = 'Globaalsed s�ndmused';
$string['gotocalendar'] = 'Liigu kalendri juurde';
$string['groupevents'] = 'Grupi s�ndmused';
$string['hidden'] = 'peidetud';
$string['last'] = 'viimane';
$string['manyevents'] = '$a s�ndmust';
$string['mon'] = 'E';
$string['monday'] = 'Esmasp�ev';
$string['monthlyview'] = 'Kuu vaade';
$string['newevent'] = 'Uus s�ndmus';
$string['notusingdst'] = 'ei kasuta DST';
$string['noupcomingevents'] = 'Pole �htegi saabuvat s�ndmust';
$string['nth'] = '{$a}';
$string['oneevent'] = '1 s�ndmus';
$string['pref_dstpreset'] = 'Hoitud p�eva aeg';
$string['pref_lookahead'] = 'Saabuvate s�ndmuste eelvaade';
$string['pref_maxevents'] = 'Maksimaalne tulevaste s�ndmuste arv';
$string['pref_persistflt'] = 'Meenuta filtri seadistamine';
$string['pref_startwday'] = 'N�dala esimene p�ev';
$string['pref_timeformat'] = 'Aja kuvamise formaat';
$string['preferences'] = 'Eelistused';
$string['preferences_available'] = 'Sinu isiklikud eelistused';
$string['repeatnone'] = 'Ei korda';
$string['repeatweeksl'] = 'Korda igal n�dalal, luues �heskoos';
$string['repeatweeksr'] = 's�ndmused';
$string['sat'] = 'L';
$string['saturday'] = 'Laup�ev';
$string['shown'] = 'n�idatud';
$string['spanningevents'] = 'Alustatud tegevused';
$string['sun'] = 'P';
$string['sunday'] = 'P�hap�ev';
$string['thu'] = 'N';
$string['thursday'] = 'Neljap�ev';
$string['timeformat_12'] = '12-tunnine (am/pm)';
$string['timeformat_24'] = '24-tunnine';
$string['timeforward'] = 'edaspidi';
$string['timerewind'] = 'tagurpidi';
$string['today'] = 'T�na';
$string['tomorrow'] = 'Homme';
$string['tt_deleteevent'] = 'Kustuta s�ndmus';
$string['tt_editevent'] = 'Redigeeri s�ndmust';
$string['tt_hidecourse'] = 'N�idatakse �ppeaine s�ndmusi (kl�psa peitmiseks)';
$string['tt_hideglobal'] = 'N�idatakse globaalseid s�ndmusi (kl�psa peitmiseks)';
$string['tt_hidegroups'] = 'N�idatakse grupi s�ndmusi (kl�psa peitmiseks)';
$string['tt_hideuser'] = 'N�idatakse kasutaja s�ndmusi (kl�psa peitmiseks)';
$string['tt_showcourse'] = 'Peidetakse �ppeaine s�ndmusi (kl�psa n�itamiseks)';
$string['tt_showglobal'] = 'Peidetakse globaalseid s�ndmusi (kl�psa n�itamiseks)';
$string['tt_showgroups'] = 'Peidetakse grupi s�ndmusi (kl�psa n�itamiseks)';
$string['tt_showuser'] = 'Peidetakse kasutaja s�ndmusi (kl�psa n�itamiseks)';
$string['tue'] = 'T';
$string['tuesday'] = 'Teisip�ev';
$string['typecourse'] = 'kursuse s�ndmus';
$string['typegroup'] = 'Grupi s�ndmus';
$string['typesite'] = 'Saidi s�ndmus';
$string['typeuser'] = 'Kasutaja s�ndmus';
$string['upcomingevents'] = 'Tulekul s�ndmused';
$string['userevents'] = 'Kasutaja s�ndmus';
$string['wed'] = 'K';
$string['wednesday'] = 'Kolmap�ev';
$string['yesterday'] = 'Eile';

?>
