<?PHP // $Id: auth.php,v 1.1.2.3 2006/02/06 09:59:29 moodler Exp $ 
      // auth.php - created with Moodle 1.4.3 + (2004083131)


$string['auth_common_settings'] = 'Op�ta pode�avanja';
$string['auth_data_mapping'] = 'Mapiranje podataka';
$string['auth_dbdescription'] = 'Ovaj metod koristi tabelu vanjske baze podataka za provjeru da li su dodijeljeno korisni�ko ime i lozinka ispravni. Ako je nalog nov, onda informacija iz ostalih polja mo�e biti kopirana u Moodle.';
$string['auth_dbextrafields'] = 'Ova polja su po izboru. Mo�ete izabrati da prednapunite neka Moodle korisni�ka polja sa informacijom iz <b>vanjska polja baze podataka</b> koja nazna�ite ovdje.  <br />Ako ih ostavite prazne, onda �e biti kori�tene podrazumjevane.<br /> U svakom slu�aju, korisnik �e biti u mogu�nosti da ure�uje sva polja nakon prijavljivanja.';
$string['auth_dbfieldpass'] = 'Ime polja koje sadr�i lozinke';
$string['auth_dbfielduser'] = 'Ime polja koje sadr�i korisni�ka imena';
$string['auth_dbhost'] = 'Ra�unar koji hostuje server baze podataka.';
$string['auth_dbname'] = 'Ime baze podataka';
$string['auth_dbpass'] = 'Lozinka koja odgovara gore navedenom korisni�kom imenu';
$string['auth_dbpasstype'] = 'Zadajte format koje koristi polje za lozinku. MD5 �ifrovanje je korisno prilikom povezivanja na ostale op�te mre�ne aplikacije kao �to je PostNuke.';
$string['auth_dbtable'] = 'Ime tabele u bazi podataka';
$string['auth_dbtitle'] = 'Upotrijebite vanjsku bazu podataka';
$string['auth_dbtype'] = 'Tip baze podataka (Pogledajte <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentacija</a> za detalje)';
$string['auth_dbuser'] = 'Korisni�ko ime sa pristupom �itanju korisni�ke baze';
$string['auth_editlock'] = 'Pogledaj vrijednosti';
$string['auth_editlock_expl'] = '<p><b>Obuhvatanje vrijednosti:</b> Ako je omogu�ena, korisnici i administratori Moodla �e se za�tititi od direktnih prepravki polja. Upotrijebi ovu opciju ako odr�avate ove podatake izvan sistema. </p>';
$string['auth_emaildescription'] = 'Potvr�ivanje putem elektronske po�te je uobi�ajen na�in provjere. Nakon �to se korisnik prijavi i izabere svoje novo ime i lozinku, elektronska po�ta se �alje na adresu tog korisnika. U elektronskoj po�ti se nalazi sigurnosni link prema stranici gdje novi korisnik potvr�uje svoj nalog. Svi budu�i upisi se samo provjeravaju u postoje�oj Moodle bazi podataka.';
$string['auth_emailtitle'] = 'Provjera putem elektronske po�te';
$string['auth_fccreators'] = 'Lista grupa �ijim saradnicima je dozvoljeno da kreiraju nove kurseve. Odvojite spojene grupe sa \';\'. Imena moraju biti sro�ena upravo onako kao ona na FirstClass serveru. Sistem je osjetljiv na promjene.';
$string['auth_fcdescription'] = 'Ova metoda koristi FisrtClass server za provjeru ako je dato korisni�ko ime i lozinka validno.';
$string['auth_fcfppport'] = 'Serverski port (3333 je naj�e��i)';
$string['auth_fchost'] = 'Adresa FirstClass servera. Koristi IP broj ili DSN ime.';
$string['auth_fcpasswd'] = 'Lozinka za otvoreni nalog.';
$string['auth_fctitle'] = 'Koristi  FirstClass server';
$string['auth_fcuserid'] = 'Korisnik FirstClass naloga sa kompletnom privilegijom \'podadministrator\'';
$string['auth_imapdescription'] = 'Ovaj metod koristi IMAP server da provjeri da li su dodijeljeno korisni�ko ime i lozinka ispravni.';
$string['auth_imaphost'] = 'IMAP adresa servera. Koristi IP broj, a ne DNS nazive.';
$string['auth_imapport'] = 'Broj porta IMAP servera. Obi�no je 143 ili 993.';
$string['auth_imaptitle'] = 'IMAP server';
$string['auth_imaptype'] = 'Tip IMAP servera. IMAP serveri mogu imati razli�ite tipove provjere.';
$string['auth_ldap_bind_dn'] = 'Ako �elite koristiti bind-korisnika za pretragu korisnika, odredite to ovdje. Ne�to nalik  na \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Lozinka za bind-korisnika.';
$string['auth_ldap_bind_settings'] = 'Bind pode�avanja';
$string['auth_ldap_contexts'] = 'Lista sadr�aja gdje su korisnici locirani. Razdvojite razli�ite sadr�aje sa \';\'. Primjer : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ako omogu�ite kreiranje korisnika sa email potvrdom, nazna�ite sadr�aj gdje su korisnici kreirani. Ovaj sadr�aj bi trebao biti druga�iji od ostalih korisnika da bi se sprije�ili sigurnosni problemi. Nema potrebe dodavati ovaj sadr�aj u ldap_context-variable, jer �e Moodle potra�iti korisnike iz tog sadr�aja automatski.';
$string['auth_ldap_creators'] = 'Lista grupa �ijim �lanovima je dozvoljeno kreiranje novih kurseva. Razdvojite vi�estruke grupe sa \';\'. Obi�no ne�to sli�no \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Izaberite NO da onemogu�ite provjeru isteka lozinke ili LDAP da u�itate vrijeme isteka lozinke direktno sa LDAP-a.';
$string['auth_ldap_expiration_warning_desc'] = 'Dodijeljeno je upozorenje brojem dana prije isteka lozinke.';
$string['auth_ldap_expireattr_desc'] = 'Mimoi�ite LDAP atribute koji su potrebni za vrijeme isteka lozinke';
$string['auth_ldap_graceattr_desc'] = 'Mimoi�ite pri�ek unosa atributa';
$string['auth_ldap_gracelogins_desc'] = 'Omogu�ite LDAP podr�ku za pri�ek unosa. Nakom isteka lozinke korisnik se mo�e logirati sve dok je iznos pri�eka unosa 0. Ako je lozinka istekla omogu�ite ova pode�avanja za prikazivanje poruke pri�eka unosa.';
$string['auth_ldap_host_url'] = 'Nazna�i LDAP host u URL-formi kao �to je \'ldap://ldap.myorg.com/\' ili \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Pode�avanje uno�enja naziva korisnika';
$string['auth_ldap_memberattribute'] = 'Odre�uje korisnikov �lanski pridjev, kad korisnik pripada grupi. Obi�no \'member\'';
$string['auth_ldap_objectclass'] = 'Odre�uje objectClass koriste�i ime/tra�e�i korisnika na ldap_user_type. Obi�no nemate potrebu da ovo mijenjate.';
$string['auth_ldap_opt_deref'] = 'Ustanovite kako druga�ije upravljati u toku tra�enja. Izaberite jednu od prate�ih vrijednosti: 
\"No\" (LDAP_DEREF_NEVER) ili
\"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'Pode�avanje LDAP isteka lozinke';
$string['auth_ldap_search_sub'] = 'Stavite vrijednost <> 0 ako �elite tra�iti korisnike u podkontekstu';
$string['auth_ldap_server_settings'] = 'Pode�avanje LDAP servera';
$string['auth_ldap_update_userinfo'] = 'A�urirajte korisni�ke informacije (ime, prezime, adrese..) iz LDAP u Moodle. Za informacije, pogledajte /auth/ldap/attr_mappings.php\'';
$string['auth_ldap_user_attribute'] = 'Atribut koji se koristi za ime/pretraga korisnika. Uglavnom je \'cn\'.';
$string['auth_ldap_user_settings'] = 'Izgled korisni�kog pode�avanja';
$string['auth_ldap_user_type'] = 'Izaberite kako se korisnik snabdjeva u LDAP. Ovo pode�avanje je tako�er odre�eno istekom upisa, pri�ekom unosa i da li �e korisni�ko djelo raditi.';
$string['auth_ldap_version'] = 'Verzija LDAP protokola koji Va� server koristi.';
$string['auth_ldapdescription'] = 'Ovaj metod slu�i za provjeru od strane spoljnog LDAP servera.
Ako su dodijeljeno korisni�ko ime i lozinka ispravni, Moodle kreira novi korisni�ki ulaz u svoju bazu korisnika. Ovaj modul mo�e �itati korisni�ke atribute sa LDAP-a i postaviti
tra�ena polja u Moodle. Za sljede�e upise samo se provjeravaju korisni�ko ime i lozinka.';
$string['auth_ldapextrafields'] = 'Ova polja nisu obavezna. Mo�ete izabrati da ispunite neka Moodle korisni�ka polja sa informacijama iz <b>LDAP fields</b> koja ovdje odredite. <br />Ako polja ostavite prazna, onda se ni�ta ne�e prebaciti sa LDAP, tako da �e podrazumijevane opcije na Moodle �e biti kori�tene.<br />U svakom slu�aju, korisnici mogu da ure�uju ova polja nakon upisivanja.';
$string['auth_ldaptitle'] = 'LDAP server';
$string['auth_manualdescription'] = 'Ovaj metod uklanja korisnicima sve na�ine pravljenja njihovih vlastitih naloga. Svi nalozi moraju biti ru�no napravljeni od administratora.';
$string['auth_manualtitle'] = 'Samo za ru�no pravljenje naloga';
$string['auth_multiplehosts'] = 'Odre�ivanje vi�e host-ova (npr. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Ovaj metod koristi NNTP server za provjeru ispravnosti korisni�kih imena i lozinki.';
$string['auth_nntphost'] = 'NNTP adrese servera. Koristite IP broj, a ne DNS nazive.';
$string['auth_nntpport'] = 'Serverski port (119 je naj�e��i)';
$string['auth_nntptitle'] = 'NNTP server';
$string['auth_nonedescription'] = 'Korisnici se mogu upisati i odmah napraviti va�e�e naloge, bez provjere od strane spoljnog servera i bez potvrde putem elektronske po�te.
Budite oprezni kad koristite ovu opciju - mislite na sigurnost i administrativne probleme koji mogu biti prouzrokovani!';
$string['auth_nonetitle'] = 'Nema provjere';
$string['auth_pamdescription'] = 'Ovaj metod koristi PAM za pristup korisni�kom imenu na doma�em serveru. Imate za instalaciju <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> kopiju da koristite ovaj modul. ';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'Va�a �ifra je istekla. Da li �elite sada promjeniti Va�u lozinku?';
$string['auth_passwordwillexpire'] = 'Va�a �ifra isti�e za $a dana. Da li �elite sada promjeniti Va�u lozinku?';
$string['auth_pop3description'] = 'Ovaj metod koristi POP3 server za provjeru ispravnosti korisni�kih imena i lozinki.';
$string['auth_pop3host'] = 'POP3 adrese servera. Koristite IP broj, a ne DNS ime.';
$string['auth_pop3mailbox'] = 'Koristi ime u mailboxu za poku�aj pristupa sa. (obi�no INBOX)';
$string['auth_pop3port'] = 'Serverski port (110 je uobi�ajen)';
$string['auth_pop3title'] = 'POP3 server';
$string['auth_pop3type'] = 'Tip servera. Ako va� server koristi sigurnosne certifikate, izaberite pop3cert.';
$string['auth_updatelocal'] = 'Nadogradi lokalne podatke';
$string['auth_updatelocal_expl'] = '<p><b>Nadogradite lokalne podatke:</b> Ako su dostupni polje �e biti nadogra�eno (iz unutra�njeg auth-a) svaki puta kada se korisnik prijavi a tamo je korisni�ka sinhronizacija. Polje namje�teno na lokalnu nadogradnju �e biti zaklju�ano.</p>';
$string['auth_updateremote'] = 'Nadogradi vanjske podatke';
$string['auth_updateremote_expl'] = '<p><b>Nadogradite vanjske podatke:</b> Ako su dostupni, unutra�nji auth �e biti nadogra�en kada je i korisni�ki dokument nadogra�en. Polja �e biti otklju�ana za dozvolu korigovanja.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Bilje�ka:</b> Nadogradite vanjske LDAP podatke zahtijevaju�i povezivanje dn i pw za povezivanje korisnika sa privilegijama korigovanja svih korisni�kih dokumenata. Ovo trenutno nije za�ti�eno multivrijednosnim atributima i ukloniti �e ekstra vrijednosti sa nadogradnje.</p>';
$string['auth_user_create'] = 'Dozvola kreiranja korisnicima';
$string['auth_user_creation'] = 'Novi (anonimni) korisnici mogu napraviti korisni�ke naloge na spoljnom izvoru za provjeru i izvr�iti potvrdu putem elektronske po�te. Ako omogu�ite ovu opciju, pazite da tako�e uredite opcije za module koji dozvoljavaju kreiranje korisnicima.';
$string['auth_usernameexists'] = 'Ovo korisni�ko ime ve� postoji. Molimo Vas da izaberite drugo.';
$string['authenticationoptions'] = 'Opcije za provjeru';
$string['authinstructions'] = 'Ovdje mo�ete dati instrukcije va�im korisnicima, tako da znaju koje korisni�ko ime i lozinku trebaju koristiti. Tekst koji ovdje napi�ete bi�e prikazan na stranici za upis. Ako polje ostavite prazno, onda instrukcije ne�e biti prikazane.';
$string['changepassword'] = 'Promjeni lozinku URL-a';
$string['changepasswordhelp'] = 'Ovde mo�ete zadati lokaciju na kojoj Va�i korisnici mogu obnoviti ili promijeniti svoje korisni�ko ime/lozinku, u slu�aju da se zaboravi.
Ova opcija se mo�e pru�iti korisnicima u vidu dugmeta na stranici za upis i njihovoj korisni�koj strani. Ako ostavite prazno polje, dugme ne�e biti prikazano.';
$string['chooseauthmethod'] = 'Izaberite metod provjere';
$string['forcechangepassword'] = 'Primoraj na promjenu lozinke';
$string['forcechangepassword_help'] = 'Primoraj korisnike da promijene lozinku na sljede�em pristupu Moodl-u';
$string['forcechangepasswordfirst_help'] = 'Primoraj korisnike da promijene lozinku na prvom pristupu Moodl-u';
$string['guestloginbutton'] = 'Dugme za prijavu gostiju';
$string['instructions'] = 'Uputstva';
$string['md5'] = 'MD5 kodiranje';
$string['plaintext'] = '�isti (Plain) tekst';
$string['showguestlogin'] = 'Mo�ete sakriti ili prikazati dugme za prijavu gostiju na prijavnoj stranici.';
$string['stdchangepassword'] = 'Upotrijebi standardnu stranicu za promjenu lozinke';
$string['stdchangepassword_expl'] = 'Ako vanjski autenti�ni sistem dozvoljava promjenu lozinke iz Moodla, uklju�i ga na YES. Ovo pode�avanje obilazi \'Change Password URL\'.';
$string['stdchangepassword_explldap'] = 'Bilje�ka: Ovo je preporu�eno da mo�ete upotrijebiti LDAP iznad SSL �ifrovanjem tunela (ldaps://) ako je LDAP server udaljen.';

?>
