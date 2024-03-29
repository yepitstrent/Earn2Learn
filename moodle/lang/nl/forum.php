<?PHP // $Id: forum.php,v 1.45.2.5 2006/02/06 10:00:23 moodler Exp $ 
      // forum.php - created with Moodle 1.6 development (2005101200)


$string['addanewdiscussion'] = 'Voeg een nieuw onderwerp voor discussie toe';
$string['addanewquestion'] = 'Voeg een nieuwe vraag toe';
$string['addanewtopic'] = 'Voeg een nieuw onderwerp toe';
$string['advancedsearch'] = 'Uitgebreid zoeken';
$string['allforums'] = 'Alle forums';
$string['allowchoice'] = 'Sta iedereen toe om te kiezen';
$string['allowdiscussions'] = 'Mag een $a berichten posten?';
$string['allowratings'] = 'Mogen berichten beoordeeld worden?';
$string['allowsdiscussions'] = 'In dit forum mag iedereen precies ��n discussie starten.';
$string['allsubscribe'] = 'Ik wil mail van alle forums';
$string['allunsubscribe'] = 'Ik wil van geen enkel forum mail';
$string['anyfile'] = 'Een bestand';
$string['attachment'] = 'Bijlage';
$string['blockperiod'] = 'Blokkeertijd';
$string['blockperioddisabled'] = 'Niet blokkeren';
$string['bynameondate'] = 'door  $a->name  - $a->date';
$string['cannotviewpostyet'] = 'Je kunt de vragen van andere leerlingen in deze discussie nog niet lezen, omdat je zelf nog niets gepost hebt';
$string['configcleanreadtime'] = 'Het uur van de dag waarop oude berichten van de \'gelezen\'-tabel moeten verwijderd worden.';
$string['configdisplaymode'] = 'De standaardmanier voor het weergeven van discussies als er geen methode is ingesteld.';
$string['configenablerssfeeds'] = 'Met deze instelling kun je de mogelijkheid voor het maken van RSS-feeds inschakelen voor alle forums. Je zult wel nog voor elk forum afzonderlijk het maken van de RSS-feeds moeten  inschakelen. ';
$string['configlongpost'] = 'Elk bericht dat langer is dan deze waarde (HTML-code niet inbegrepen) wordt als lang beschouwd.';
$string['configmanydiscussions'] = 'Maximale aantal discussies van een forum die per pagina getoond worden';
$string['configmaxbytes'] = 'Standaard maximumgrootte voor alle forumbijlagen op deze site (afhankelijk van vaklimieten en andere lokale instellingen)';
$string['configoldpostdays'] = 'Aantal dagen waarna elk bericht als gelezen moet beschouwd worden.';
$string['configreplytouser'] = 'Wil je dat de e-mail van een bericht op het forum het e-mailadres van de verstuurder bevat, zodat de ontvangers eventueel ook persoonlijk kunnen antwoorden, eerder dan via het forum? Zelfs als je hier \'Ja\' instelt, kunnen gebruikers ervoor kiezen hun e-mailadres priv� te houden via hun profielpagina';
$string['configshortpost'] = 'Elk bericht dat korter is dan deze waarde (HTML-code niet inbegrepen) wordt als kort beschouwd.';
$string['configtrackreadposts'] = 'Zet op \'ja\' als je gelezen/niet gelezen wil bijhouden voor elke gebruiker.';
$string['configusermarksread'] = 'Indien \'ja\' moet de lezer de berichten manueel als gelezen markeren. Indien \'nee\' wordt het bericht als gelezen gemarkeerd wanneer het geopend werd.';
$string['couldnotadd'] = 'Door een onbekende fout was het niet mogelijk om je bericht toe te voegen .';
$string['couldnotdeleteratings'] = 'Helaas, dit kan niet worden verwijderd omdat iemand het bericht al beoordeeld heeft';
$string['couldnotdeletereplies'] = 'Helaas, dit kan niet worden verwijderd omdat er al op geantwoord is.';
$string['couldnotupdate'] = 'Kon je bericht niet bijwerken door een onbekende fout.';
$string['delete'] = 'Verwijder';
$string['deleteddiscussion'] = 'De discussie is verwijderd';
$string['deletedpost'] = 'Het bericht  is verwijderd';
$string['deletedposts'] = 'Deze berichten werden verwijderd';
$string['deletesure'] = 'Weet je zeker dat je dit bericht wilt verwijderen?';
$string['deletesureplural'] = 'Weet je zeker dat je dit bericht en alle antwoorden erop wil verwijderen? ($a berichten)';
$string['digestmailheader'] = 'Dit is je dagelijkse samenvattende e-mail met de nieuwe berichten van de forums van $a->sitename. Als je jouw voorkeurinstellingen voor de e-maildienst van de forums wil wijzigen, ga dan naar $a->userprefs.';
$string['digestmailprefs'] = 'Jouw gebruikersprofiel';
$string['digestmailsubject'] = 'Dagelijkse forumsamenvatting van $a';
$string['digestsentusers'] = 'Samenvattende e-mail met succes naar $a gebruikers gestuurd.';
$string['disallowsubscribe'] = 'Inschrijven niet niet toegelaten';
$string['disallowsubscribeteacher'] = 'Inschrijven niet toegelaten (behalve voor leraren)';
$string['discussion'] = 'Discussie';
$string['discussionmoved'] = 'Deze discussie is verplaatst naar \'$a\'.';
$string['discussionname'] = 'Discussienaam';
$string['discussions'] = 'Discussies';
$string['discussionsstartedby'] = 'Discussies die door $a zijn gestart';
$string['discussionsstartedbyrecent'] = 'Discussies die recentelijk door $a zijn gestart';
$string['discussthistopic'] = 'Draag bij aan de discussie';
$string['displayend'] = 'Toon einde';
$string['displayperiod'] = 'Toon periode';
$string['displaystart'] = 'Toon start';
$string['eachuserforum'] = 'Iedereen voegt ��n discussie toe';
$string['edit'] = 'Wijzig';
$string['editedby'] = 'Bewerkt door $s->name - $a->date';
$string['editing'] = 'Wijzigen';
$string['emptymessage'] = 'Er was iets mis met je bericht. Misschien heb je het leeg gelaten of was de bijlage te groot. Je wijzigingen zijn NIET bewaard.';
$string['everyonecanchoose'] = 'Iedereen kan kiezen om al dan niet lid te zijn.';
$string['everyoneissubscribed'] = 'Iedereen is lid van dit forum';
$string['existingsubscribers'] = 'Huidige leden';
$string['forcesubscribe'] = 'Verplicht iedereen om lid te zijn';
$string['forcesubscribeq'] = 'Moet iedereen verplicht lid zijn?';
$string['forum'] = 'Forum';
$string['forumauthorhidden'] = 'Auteur (verborgen)';
$string['forumbodyhidden'] = 'Je kunt dit bericht niet bekijken, waarschijnlijk omdat je zelf nog niets gepost hebt in deze discussie.';
$string['forumintro'] = 'De inleiding van het forum';
$string['forumname'] = 'Naam van het forum';
$string['forumposts'] = 'Forumberichten';
$string['forums'] = 'Forums';
$string['forumsubjecthidden'] = 'Onderwerp (verborgen)';
$string['forumtype'] = 'Soort forum';
$string['generalforum'] = 'Standaardforum voor algemeen gebruik ';
$string['generalforums'] = 'Algemene forums';
$string['inforum'] = 'in $a';
$string['intronews'] = 'Algemeen nieuws en aankondigingen';
$string['introsocial'] = 'Een open forum om te chatten over wat je maar wilt';
$string['introteacher'] = 'Een forum alleen bestemd voor discussies en aantekeningen van leraren';
$string['lastpost'] = 'Laatste bericht';
$string['learningforums'] = 'Leerforums';
$string['mailnow'] = 'Stuur nu e-mail';
$string['markalldread'] = 'Markeer alle berichten in deze discussie als gelezen';
$string['markallread'] = 'Markeer alle berichten in dit forum als gelezen';
$string['markread'] = 'Markeer als gelezen';
$string['markreadbutton'] = 'Markeer als<br />gelezen';
$string['markunread'] = 'Markeer als niet gelezen';
$string['markunreadbutton'] = 'Markeer als<br />niet gelezen';
$string['maxattachmentsize'] = 'Maximum grootte van bijlagen';
$string['maxtimehaspassed'] = 'Helaas is de maximale tijd voor het wijzigen van dit bericht ($a) verstreken!';
$string['message'] = 'Bericht';
$string['missingsearchterms'] = 'Volgende zoektermen komen alleen in de HTML-opmaak van deze boodschap voor:';
$string['modeflatnewestfirst'] = 'Laat de antwoorden in ��n lijst zien, met de nieuwste eerst';
$string['modeflatoldestfirst'] = 'Laat de antwoorden in ��n lijst zien, met de oudste eerst';
$string['modenested'] = 'Laat de antwoorden \'genest\' zien';
$string['modethreaded'] = 'Laat de antwoorden in hun \'draden\' zien';
$string['modulename'] = 'Forum';
$string['modulenameplural'] = 'Forums';
$string['more'] = 'meer';
$string['movethisdiscussionto'] = 'Verplaats deze discussie naar ...';
$string['namenews'] = 'Nieuwsforum';
$string['namesocial'] = 'Sociaal forum';
$string['nameteacher'] = 'Forum voor leraren';
$string['newforumposts'] = 'Nieuwe forumberichten';
$string['nodiscussions'] = 'Er zijn nog geen discussies in dit forum';
$string['noguestpost'] = 'Sorry, gasten mogen geen berichten posten';
$string['noguestsubscribe'] = 'Sorry, gasten mogen zich niet inschrijven om forumberichten via mail te kunnen ontvangen.';
$string['noguesttracking'] = 'Sorry, gasten kunnen de instellingen voor het opvolgen van forumberichten niet wijzigen.';
$string['nomorepostscontaining'] = 'Er zijn geen berichten met \'$a\' meer gevonden';
$string['nonews'] = 'Er zijn nog geen nieuwsberichten';
$string['noposts'] = 'Geen berichten';
$string['nopostscontaining'] = 'Er zijn geen berichten met \'$a\' gevonden';
$string['noquestions'] = 'Er zijn nog geen vragen in dit forum';
$string['nosubscribers'] = 'Er is nog niemand lid van dit forum';
$string['nothingnew'] = 'Niets nieuw voor $a';
$string['notingroup'] = 'Sorry, je moet bij een groep horen om dit forum te kunnen zien.';
$string['notrackforum'] = 'Schakel opvolgen van ongelezen berichten uit';
$string['nowallsubscribed'] = 'Je krijgt mail van alle forums in $a';
$string['nowallunsubscribed'] = 'Je krijgt van geen enkel forum in $a mail';
$string['nownotsubscribed'] = '$a->name zal via e-mail GEEN bijdragen aan \'$a->forum\' ontvangen.';
$string['nownottracking'] = '$a->name volgt niet langer het forum \'$a->forum\'.';
$string['nowsubscribed'] = '$a->naam zal bijdragen aan \'$a->forum\' ontvangen via e-mail.';
$string['nowtracking'] = '$a->name volgt nu het forum \'$a->forum\'.';
$string['numposts'] = '$a berichten';
$string['olderdiscussions'] = 'Oudere discussies';
$string['oldertopics'] = 'Oudere onderwerpen';
$string['openmode0'] = 'Geen nieuwe discussies, geen antwoorden';
$string['openmode1'] = 'Geen nieuwe discussies mogelijk, maar antwoorden zijn toegestaan';
$string['openmode2'] = 'Nieuwe discussies en antwoorden zijn toegestaan';
$string['overviewnumpostssince'] = '$a berichten sinds je laatste login';
$string['overviewnumunread'] = 'Totaal $a berichten nog niet gelezen';
$string['parent'] = 'Toon discussiestart';
$string['parentofthispost'] = 'Discussiestart van dit bericht';
$string['postadded'] = 'Je bericht is gepost.<p> Je hebt $a de tijd om dit bericht te wijzigen als je nog iets wilt veranderen.';
$string['postincontext'] = 'Bekijk dit bericht in zijn context';
$string['postmailinfo'] = 'Dit is een kopie van een bericht dat op de $a website is toegevoegd.

Klik op deze link om jouw antwoord via de website toe te voegen:';
$string['postmailnow'] = '<p>Dit bericht zal onmiddellijk naar alle leden van dit forum verstuurd worden.</p>';
$string['postrating1'] = 'Vooral \'Separate Knowing\'';
$string['postrating2'] = '\'Separate\'en \'Knowing\'';
$string['postrating3'] = 'Vooral \'Connected\'';
$string['posts'] = 'Berichten';
$string['posttoforum'] = 'Plaats op het forum';
$string['postupdated'] = 'Je bericht is bijgewerkt';
$string['potentialsubscribers'] = 'Mogelijke leden';
$string['processingdigest'] = 'E-mailsamenvatting aan het verwerken voor gebruiker $a';
$string['processingpost'] = 'Bericht $a aan het verwerken';
$string['prune'] = 'Splits discussie';
$string['prunedpost'] = 'Er is een nieuwe discussie gestart met dat bericht';
$string['pruneheading'] = 'Splits deze discussie en begin met dit bericht een nieuwe discussie';
$string['qandaforum'] = 'Vraag- en antwoordforum';
$string['qandanotify'] = 'Dit is een vraag- en antwoordforum. Om de andere antwoorden op deze vraag te kunnen zien, moet je eerst je eigen antwoord posten.';
$string['rate'] = 'Beoordeel';
$string['rating'] = 'Beoordeling';
$string['ratingeveryone'] = 'Iedereen kan berichten beoordelen';
$string['ratingno'] = 'Geen beoordelingen';
$string['ratingonlyteachers'] = 'Alleen $a kunnen berichten beoordelen';
$string['ratingpublic'] = '$a kunnen ieders beoordelingen zien';
$string['ratingpublicnot'] = '$a kunnen alleen hun eigen beoordelingen zien';
$string['ratings'] = 'Beoordelingen ';
$string['ratingssaved'] = 'Beoordelingen zijn bewaard';
$string['ratingsuse'] = 'Gebruik beoordelingen';
$string['ratingtime'] = 'Beperk het beoordelen van berichten tot het bereik van deze data:';
$string['re'] = 'Re:';
$string['readtherest'] = 'Lees de rest van deze discussie';
$string['replies'] = 'Antwoorden';
$string['repliesmany'] = '$a antwoorden tot nu toe';
$string['repliesone'] = '$a antwoord tot nu toe';
$string['reply'] = 'Antwoord';
$string['replyforum'] = 'Antwoord op het forum';
$string['rsssubscriberssdiscussions'] = 'Met deze link kun je inschrijven op het \'$a\' forum RSS-discussiekanaal';
$string['rsssubscriberssposts'] = 'Met deze link kun je inschrijven op het \'$a\' forum RSS-postkanaal';
$string['search'] = 'Zoek';
$string['searchdatefrom'] = 'Berichten nieuwer dan dit';
$string['searchdateto'] = 'Berichten ouder dan dit';
$string['searchforumintro'] = 'Geef zoekwoorden in ��n of meer van volgende velden:';
$string['searchforums'] = 'Zoeken in forums';
$string['searchfullwords'] = 'Deze woorden moeten als volledige woorden voorkomen';
$string['searchnotwords'] = 'Deze woorden mogen NIET voorkomen';
$string['searcholderposts'] = 'Doorzoek oudere berichten...';
$string['searchphrase'] = 'Dit zinsdeel moet exact voorkomen in het bericht';
$string['searchresults'] = 'Zoekresultaten';
$string['searchsubject'] = 'Deze woorden moeten in het onderwerp staan';
$string['searchuser'] = 'Dit is de naam van de auteur';
$string['searchuserid'] = 'Dit is de Moodle ID van de auteur';
$string['searchwhichforums'] = 'Kies in welke forums je wil zoeken';
$string['searchwords'] = 'Deze woorden mogen overal in het bericht voorkomen';
$string['seeallposts'] = 'Bekijk alle berichten die deze gebruiker gepost heeft';
$string['sendinratings'] = 'Bewaar mijn beoordelingen';
$string['showsubscribers'] = 'Toon / wijzig leden';
$string['singleforum'] = 'E�n eenvoudige discussie';
$string['startedby'] = 'Begonnen door';
$string['subject'] = 'Onderwerp  ';
$string['subscribe'] = 'Word lid van dit forum';
$string['subscribeall'] = 'Maak alle deelnemers van de cursus lid van dit forum';
$string['subscribed'] = 'Lid';
$string['subscribenone'] = 'Zeg lidmaatschap van alle leden van dit forum op';
$string['subscribers'] = 'Leden';
$string['subscribersto'] = 'Leden van \'$a\'';
$string['subscribestart'] = 'Stuur me een kopie per e-mail wanneer iemand een bericht op dit forum plaatst';
$string['subscribestop'] = 'Ik wil geen kopie van inzendingen op dit forum per e-mail ontvangen';
$string['subscription'] = 'Lid worden';
$string['subscriptions'] = 'Inschrijvingen';
$string['thisforumisthrottled'] = 'Dit forum heeft een beperking op het aantal berichten dat je kan posten in een bepaalde tijdsperiode - deze is nu ingesteld op $a->blockafter bericht(en) in $a->blockperiod';
$string['timestartenderror'] = 'De datum van het einde kan niet voor de startdatum zijn.';
$string['trackforum'] = 'Volg ongelezen berichten op';
$string['tracking'] = 'Opvolgen';
$string['trackingoff'] = 'Uit';
$string['trackingon'] = 'Aan';
$string['trackingoptional'] = 'Optioneel';
$string['trackingtype'] = 'Lezen van dit forum opvolgen?';
$string['unread'] = 'Niet gelezen';
$string['unreadposts'] = 'Niet gelezen berichten';
$string['unreadpostsnumber'] = '$a berichten niet gelezen';
$string['unreadpostsone'] = '1 bericht niet gelezen';
$string['unsubscribe'] = 'Zeg lidmaatschap van dit forum op';
$string['unsubscribed'] = 'Je zult geen mail meer ontvangen';
$string['unsubscribeshort'] = 'Ik wil geen mail meer';
$string['yesforever'] = 'Ja, voor altijd';
$string['yesinitially'] = 'Ja, initieel';
$string['youratedthis'] = 'Je beoordeelde dit';
$string['yournewquestion'] = 'Je nieuwe vraag';
$string['yournewtopic'] = 'Je nieuwe discussieonderwerp';
$string['yourreply'] = 'Jouw antwoord';

?>
