<?PHP // $Id: forum.php,v 1.3.2.3 2006/02/06 09:59:41 moodler Exp $ 
      // forum.php - created with Moodle 1.4.4 + (2004083140)


$string['addanewdiscussion'] = 'Lisa uus arutlusteema';
$string['addanewtopic'] = 'Lisa uus teema';
$string['allowchoice'] = 'Luba iga�hel valida';
$string['allowdiscussions'] = 'Kas $a v�ib postitada siia foorumisse?';
$string['allowratings'] = 'Luba postitusi hinnata?';
$string['allowsdiscussions'] = 'See foorum v�imaldab iga�hel algatada �he arutlusteema.';
$string['anyfile'] = 'Mistahes fail';
$string['attachment'] = 'Manus';
$string['bynameondate'] = ' $a->name - $a->date poolt ';
$string['configcleanreadtime'] = 'Tund p�evas kus vanu postitusi kustutatakse';
$string['configdisplaymode'] = 'Arutelude n�itamise viisi vaikev��rtus, kasutatakse kui enne ei ole seatud';
$string['configenablerssfeeds'] = 'See l�liti l�litab sisse RSS s��da iga foorumi jaoks. Sa pead ikka igas foorumis manuaalselt s��ta sisse l�litama.';
$string['configlongpost'] = 'K�ik postitused mis on sellest pikkusest (ei arvestata HTML\'i) pikemad, loetakse pikaks.';
$string['configmanydiscussions'] = 'Arutelude maksimaalne arv foorumi lehek�lje kohta';
$string['configmaxbytes'] = 'K�igi foorumi lisandite maksimaalne suurus (allub kursuse limiidile ja teistele lokaalsetele seadetele)';
$string['configoldpostdays'] = 'P�evade vanus mil posti peetakse loetavaks';
$string['configreplytouser'] = 'Kui foorumi postitus v�lja saadetakse kas ta peaks sisaldama kasutaja e-posti aadressi ,et vastu v�tjad saaksid personaalselt vastata foorumis kirjutamise asemel. Isegi kui see on valitud \"jah\" saab kasutaja  oma profiilis valida kas hoida oma e-post aadress salastatuna';
$string['configshortpost'] = 'K�ik postitused mis on sellest pikkusest (ei arvestata HTML\'i) l�hemad, loetakse l�hikeseks.';
$string['configtrackreadposts'] = 'Pane \"jah\" kui sa soovid j�lgida loetud/lugemata iga kasutaja jaoks';
$string['configusermarksread'] = 'Pane \"jah\" nad peavad manuaalsed m�rkima posti kui loetud. Kui \"ei\" siis seda posti vaadatakse kui lugemata';
$string['couldnotadd'] = 'Ei saanud lisada sinu postitusele tundmatu vea t�ttu';
$string['couldnotdeleteratings'] = 'Kahjuks ei saa seda kustutada, kuna seda on juba kellegi poolt hinnatud';
$string['couldnotdeletereplies'] = 'Kahjuks ei saa seda kustutada, kuna sellele on juba kellegi poolt vastatud';
$string['couldnotupdate'] = 'Sinu kirja ei saa v�rskendada vea t�ttu';
$string['delete'] = 'Kustuta';
$string['deleteddiscussion'] = 'See arutlusteema on kustutatud';
$string['deletedpost'] = 'Kiri on kustutatud';
$string['deletesure'] = 'Kas oled veendunud, et soovid selle kirja ksututada?';
$string['digestmailheader'] = 'See on sinu p�evane uute postituste l�bi t��tlus $a->sitename foorumilt. Foorumi e-posti seadistuste vahetamiseks mine $a->userprefs';
$string['digestmailprefs'] = 'Sinu kasutajaprofiil';
$string['digestmailsubject'] = '$a: L�bi t��tatud foorum';
$string['digestsentusers'] = 'E-posti l�bit��tlus edukalt saadetud $a kasutajatele';
$string['discussion'] = 'Arutelu';
$string['discussionmoved'] = 'See arutelu on viidud �le \'$a\'.';
$string['discussionname'] = 'Arutelu teema';
$string['discussions'] = 'Arutelud';
$string['discussionsstartedby'] = 'Arutelud algatas $a';
$string['discussionsstartedbyrecent'] = 'Arutelud algatas $a';
$string['discussthistopic'] = 'Arutle sellel teemal';
$string['eachuserforum'] = 'Iga�ks saadab �he arutelu';
$string['edit'] = 'Redigeeri';
$string['editing'] = 'Redigeerin';
$string['emptymessage'] = 'Sinu postitusega oli midagi viltu. Ehk oli see t�hjaks j�etud v�i oli manus liiga suur. Sinu tehtud muudatusi EI SALVESTATUD.';
$string['everyonecanchoose'] = 'Iga�ks v�ib valida, kas liituda ';
$string['everyoneissubscribed'] = 'Iga�ks v�ib selle foorumiga liituda';
$string['existingsubscribers'] = 'Eksisteerivad tellijad';
$string['forcesubscribe'] = 'Kohusta k�iki foorumiga liituma ';
$string['forcesubscribeq'] = 'Kohusta k�iki liituma?';
$string['forum'] = 'Foorum';
$string['forumintro'] = 'Foorumi tutvustus';
$string['forumname'] = 'Foorumi nimi';
$string['forums'] = 'Foorumid';
$string['forumtype'] = 'Foorumi t��p';
$string['generalforum'] = 'Standardne foorum �ldiseks kasutamiseks';
$string['generalforums'] = '�ldised foorumid';
$string['inforum'] = 'foorumis $a';
$string['intronews'] = '�ldised uudised ja teated';
$string['introsocial'] = 'Avatud foorum lobisemiseks mistahes teemal ';
$string['introteacher'] = 'Foorum �ksnes �petajate m�rkusteks ja aruteluks  ';
$string['lastpost'] = 'Viimane postitus';
$string['learningforums'] = '�ppefoorumid';
$string['markread'] = 'M�rgi loetud';
$string['markunread'] = 'M�rgi mitte loetud';
$string['maxattachmentsize'] = 'Manuse maksimaalne suurus';
$string['maxtimehaspassed'] = 'Kahjuks on maksimaalne aeg ($a) selle kirja redigeerimiseks l�bi!';
$string['message'] = 'Teade';
$string['modeflatnewestfirst'] = 'Kuva vastused flat lamedalt,uuemad eespool';
$string['modeflatoldestfirst'] = 'Kuva vastused flat lamedalt,vanemad eespool ';
$string['modenested'] = 'Kuva vastused pesastatud kujul';
$string['modethreaded'] = 'Kuva vastused jutul�ime kujul';
$string['modulename'] = 'Foorum';
$string['modulenameplural'] = 'Foorumid';
$string['more'] = 'veel';
$string['movethisdiscussionto'] = 'Vii see arutelu �le ... ';
$string['namenews'] = 'Uudistefoorum';
$string['namesocial'] = 'Sotsiaalne foorum';
$string['nameteacher'] = '�petajate foorum';
$string['newforumposts'] = 'Uued foorumi postitused';
$string['nodiscussions'] = 'Sellel foorumil pole veel arutlusteemasid';
$string['noguestpost'] = 'Kahjuks pole k�lalistel luba postitada';
$string['nomorepostscontaining'] = '\'$a\' sisaldavaid postitusi rohkem ei ole';
$string['nonews'] = 'Momendil uudiseid pole';
$string['noposts'] = 'Postitused puuduvad';
$string['nopostscontaining'] = 'Ei leitud �htegi postitust, mis sisaldaks \'$a\' ';
$string['nosubscribers'] = 'Selle foorumiga pole keegi  veel liitunud ';
$string['notingroup'] = 'Vabandust! Kuid sa pead kuuluma sellesse gruppi, et lugeda seda foorumit.';
$string['nownotsubscribed'] = '$a->name EI saa koopiaid \'$a->forum\' e-maili teel.';
$string['nowsubscribed'] = '$a->name saab koopiaid\'$a->foorumist\' e-maili teel.';
$string['numposts'] = '$a postitused';
$string['olderdiscussions'] = 'Vanemad arutelud';
$string['openmode0'] = 'Puuduvad nii arutelud kui vastused';
$string['openmode1'] = 'Arutelu puudub, kuid vastused on lubatud';
$string['openmode2'] = 'Arutelud ja vastused on lubatud';
$string['parent'] = 'N�ita algatajat';
$string['parentofthispost'] = 'Selle postituse algataja';
$string['postadded'] = 'Teie postitus lisati edukalt.<br />Teil on $a selle redigeerimiseks, kui soovite muudatusi teha.';
$string['postincontext'] = 'Vaata seda postitust kontekstis';
$string['postmailinfo'] = 'See on koopia s�numist, mis postitati $a veebilehele.
Oma vastuse lisamiseks veebisaidi kaudu kliki sellelel lingile:';
$string['postrating1'] = 'N�itab enamasti ERALDATUD teadmisi';
$string['postrating2'] = 'V�rdselt eraldatud ja �hendatud';
$string['postrating3'] = 'N�itab enamasti �HENDATUD teadmisi';
$string['posts'] = 'Postitused';
$string['posttoforum'] = 'Postita foorumisse';
$string['postupdated'] = 'Sinu postitus on v�rskendatud';
$string['potentialsubscribers'] = 'Potentsiaalsed tellijad';
$string['processingdigest'] = 'l�bi t��tatud e-kirjade protsessimine kasutaja 	$a jaoks';
$string['processingpost'] = 'T��tlen postitust $a';
$string['prune'] = 'Eralda';
$string['prunedpost'] = 'Sellest postitusest arenes uus arutlusteema';
$string['pruneheading'] = 'Eralda arutelu ja t�sta see postitus uude arutellu';
$string['rate'] = 'Hinda';
$string['rating'] = 'Hinnang';
$string['ratingeveryone'] = 'K�ik saavad postitusi hinnata';
$string['ratingno'] = 'Hinnangud puuduvad';
$string['ratingonlyteachers'] = 'Ainult $a saab postitusi hinnata';
$string['ratingpublic'] = '$a n�eb k�ikide hinnanguid';
$string['ratingpublicnot'] = '$a n�eb ainult enda hinnangut';
$string['ratings'] = 'Hinnangud';
$string['ratingssaved'] = 'Hinnangud salvestatud';
$string['ratingsuse'] = 'Luba hinnang';
$string['ratingtime'] = 'Keela hinnangud postitustele ajavahemikus';
$string['re'] = 'Vastus:';
$string['readtherest'] = 'Loe selle teema kohta edasi';
$string['replies'] = 'Vastused';
$string['repliesmany'] = '$a vastust praeguseks';
$string['repliesone'] = '$a vastus praeguseks';
$string['reply'] = 'Vasta';
$string['replyforum'] = 'Vasta foorumisse';
$string['rsssubscriberssdiscussions'] = 'Kuva \'$a\' arutelu RSS feed';
$string['rsssubscriberssposts'] = 'Kuva \'$a\' postituse RSS feed';
$string['search'] = 'Otsi';
$string['searchforums'] = 'Otsi foorumeid';
$string['searcholderposts'] = 'Otsi vanemaid postitusi ...';
$string['searchresults'] = 'Otsi tulemusi';
$string['sendinratings'] = 'Saada mu viimased reitingud';
$string['showsubscribers'] = 'N�ita/redigeeri liikmeid';
$string['singleforum'] = '�ksik lihtne arutelu';
$string['startedby'] = 'Algatas';
$string['subject'] = 'Pealkiri';
$string['subscribe'] = 'Liitu selle foorumiga ';
$string['subscribeall'] = 'Lisa k�ik kasutajad selle foorumi liikmeteks';
$string['subscribed'] = 'Liitunud';
$string['subscribenone'] = 'Eemalda k�ik kasutajad sellest foorumist';
$string['subscribers'] = 'Liitujad';
$string['subscribersto'] = '\'$a\' liitujad';
$string['subscribestart'] = 'Saada mulle emaili koopiad selle foorumi postitustest';
$string['subscribestop'] = 'Ma ei soovi emaili koopiaid selle foorumi postitustest';
$string['subscription'] = 'Liitumine';
$string['subscriptions'] = 'Liitumised';
$string['unread'] = 'Lugemata';
$string['unreadposts'] = 'Lugemata postitused';
$string['unreadpostsnumber'] = '$a lugemata postitused';
$string['unreadpostsone'] = '1 lugemata post';
$string['unsubscribe'] = 'T�hista liitumine selle foorumiga';
$string['unsubscribed'] = 'Foorumist eemaldatud';
$string['unsubscribeshort'] = 'Eemalda foorumist';
$string['yesforever'] = 'Jah, igavesti';
$string['yesinitially'] = 'Jah, esialgselt';
$string['youratedthis'] = 'Sina hindasid seda';
$string['yournewtopic'] = 'Sinu uus arutlusteema';
$string['yourreply'] = 'Sinu vastus';

?>