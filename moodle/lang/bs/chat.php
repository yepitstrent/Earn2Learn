<?PHP // $Id: chat.php,v 1.1.2.3 2006/02/06 09:59:29 moodler Exp $ 
      // chat.php - created with Moodle 1.4.3 + (2004083131)


$string['beep'] = 'signal';
$string['chatintro'] = 'Uvodni tekst';
$string['chatname'] = 'Ime ove pri�aonice';
$string['chatreport'] = 'Razgovori';
$string['chattime'] = 'Vrijeme narednog razgovora';
$string['configmethod'] = 'Normalni chat metod obuhvata klijente regularnim kontaktima nadogradnjom servera. To ne zahtjeva  svugdje konfiguraciju i rad, ali to mo�e kreirati veliko optere�enje na serveru sa mnogim sagovornicima.  Koriste�i samostartuju�i program servera potreban je pristup Unixu, ali to u brzini rezultira outline chat okru�enje.';
$string['configoldping'] = 'Koje je maksimalno vrijeme potrebno da pro�e (u sekundama) prije nego mi registrujemo diskonektovane korisnike? Ovo je samo ve�e ograni�enje jer kao i obi�no diskonekcija se veoma brzo otkriva. Ni�a vrijednost �e biti sa vi�e o�te�enja na Va�em serveru. Ako koristite normalnu metodu, <strong>never</strong> podesite ovo ni�e od 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Koliko �esto bi se pri�aonica trebala osvje�avati? (u sekundama) Pode�avanje na nizak nivo omogu�ava da pri�aonica izgleda br�e, ali mo�e predstavljati ve�i teret na serveru kad je prisutan ve�i broj ljudi';
$string['configrefreshuserlist'] = 'Koliko �esto bi lista korisnika trebala biti osvje�ena? (u sekundama)';
$string['configserverhost'] = 'Ime glavnog ra�unara gdje se gdje se nalazi samostartuju�i program servera';
$string['configserverip'] = 'IP adresa koja odgovara pomenutom ra�unaru';
$string['configservermax'] = 'Maksimalan broj dozvoljenih klijenata';
$string['configserverport'] = 'Za kori�tenje porta na samostartuju�i program servera';
$string['currentchats'] = 'Aktivni razgovori';
$string['currentusers'] = 'Trenutni korisnici';
$string['deletesession'] = 'Obri�i ovu seansu';
$string['deletesessionsure'] = 'Da li ste sigurni da �elite izbrisati ovu seansu?';
$string['donotusechattime'] = 'Ne prikazuj vrijeme provedeno na pri�aonici';
$string['enterchat'] = 'Pritisnite ovdje da u�ete u pri�aonicu';
$string['errornousers'] = 'Korisnici ne mogu biti prona�eni';
$string['explaingeneralconfig'] = 'Ova pode�avanja su <strong>always</strong> unutar dejstva';
$string['explainmethoddaemon'] = 'Ova pode�avanja su zna�ajna <strong>only</strong> ako imate ozna�en \"Samostartuju�i program chat servera\" za chat_metod';
$string['explainmethodnormal'] = 'Ova pode�avanja su zna�ajna <strong>only</strong> ako imate ozna�en \"Normalni metod\" za chat_metod';
$string['generalconfig'] = 'Osnovna pode�avanja';
$string['helpchatting'] = 'Pomo� pri razgovoru';
$string['idle'] = 'prazno';
$string['messagebeepseveryone'] = '$a signali svima!';
$string['messagebeepsyou'] = '$a ste dobili signal!';
$string['messageenter'] = '$a je upravo u�ao u pri�aonicu';
$string['messageexit'] = '$a je napusti pri�aonicu';
$string['messages'] = 'Poruke';
$string['methoddaemon'] = 'Samostartuju�i program chat servera';
$string['methodnormal'] = 'Normalna metoda';
$string['modulename'] = 'Razgovor (Chat)';
$string['modulenameplural'] = 'Razgovori';
$string['neverdeletemessages'] = 'Nikad ne bri�i poruke';
$string['nextsession'] = 'Naredna planirana seansa';
$string['noguests'] = 'Ovaj razgovor nije otvoren za goste';
$string['nomessages'] = 'Jo� nema poruka';
$string['repeatdaily'] = 'U isto vrijeme svaki dan';
$string['repeatnone'] = 'Nema ponavljanja - objaviti samo odre�eno vrijeme';
$string['repeattimes'] = 'Ponovite seanse';
$string['repeatweekly'] = 'U isto vrijeme svake sedmice';
$string['savemessages'] = 'Sa�uvajte prethodne seanse';
$string['seesession'] = 'Pogledajte ovu seansu';
$string['sessions'] = 'Razgovori';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Svako mo�e pregledati prethodne seanse';
$string['viewreport'] = 'Pogledajte prethodne seanse';

?>
