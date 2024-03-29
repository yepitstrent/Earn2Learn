<?PHP // $Id: auth.php,v 1.8.2.3 2006/02/06 09:59:32 moodler Exp $ 
      // auth.php - created with Moodle 1.6 development (2005101200)


$string['alternatelogin'] = 'Her kan du skrive en URL der vil blive brugt som loginside for dette site. Siden b�r indeholde en form hvis action er sat til <strong>\'$a\'</strong> og returnere 2 felter <strong>username</strong> og <strong>password</strong>.<br />Pas p� ikke at skrive en forkert URL da du kan risikere at ikke at kunne logge ind igen. <br />Lad denne v�re blank for bruge den almindelige loginside.';
$string['alternateloginurl'] = 'Alternativ loginside';
$string['auth_cas_baseuri'] = 'URI for CAS server<br />For eksempel hvis CAS serveren svarer p� host.domain.dk/CAS/ s� skal der st�<br />cas_basedir = CAS/';
$string['auth_cas_create_user'] = 'Aktiver denne indstilling hvis du �nsker at inds�tte brugere der er CAS-autoriseret i moodles database. Hvis ikke er det kun brugere der er autoriseret i Moodle der kan logge ind.';
$string['auth_cas_enabled'] = 'Aktiver denne indstilling hvis du �nsker at benytte CAS autorisation.';
$string['auth_cas_hostname'] = 'V�rtsnavn for CAS server<br />F.eks: host.domain.dk';
$string['auth_cas_invalidcaslogin'] = 'Desv�rre, du kan ikke logges ind - da du ikke kunne blive godkendt.';
$string['auth_cas_language'] = 'V�lg sprog';
$string['auth_cas_logincas'] = 'Benyt sikker forbindelse ';
$string['auth_cas_port'] = 'CAS serverens port';
$string['auth_cas_server_settings'] = 'CAS serverens konfiguration';
$string['auth_cas_text'] = 'Sikker forbindelse';
$string['auth_cas_version'] = 'Version af CAS';
$string['auth_casdescription'] = 'Denne metode benytter en CAS server (Central Authentication Service) til at autorisere brugere i et SSO (Single Sign On) milj�. Du kan ogs� benytte en simpel LDAP autorisering. Hvis det givne brugernavn og password er korrekte i forhold til CAS s� opretter Moodle en brugerprofil til den bruger i  databasen. Moodle kan efterf�lgende overf�re nogle eller alle brugerens informationer fra LDAP hvis det kan lade sig g�re. Efterf�lgende er det kun brugernavn og password der bliver kontrolleret.  ';
$string['auth_castitle'] = 'Benyt en CAS server (SSO)';
$string['auth_changepasswordhelp'] = 'Hj�lp til skift af password';
$string['auth_changepasswordhelp_expl'] = 'Vis hj�lp til skift af password til brugere som har glemt deres $a password. Dette vil blive vist enten sammen med eller i stedet for <strong>URL til skift af password</strong> eller Moodle\'s interne skift af password.';
$string['auth_changepasswordurl'] = 'URL til skift af password';
$string['auth_changepasswordurl_expl'] = 'Angiv den URL som brugere skal sendes til hvis de har mistet deres $a password. S�t <strong>Benyt standardside til skift af password</strong> til <strong>Nej</strong>';
$string['auth_common_settings'] = 'F�lles indstillinger';
$string['auth_data_mapping'] = 'Data mapping';
$string['auth_dbdescription'] = 'Denne metode bruger en ekstern database for at kontrollere om et givet username og password er gyldigt. Hvis kontoen er ny, kan oplysninger fra andre felter ogs� kopieres ind i Moodle.';
$string['auth_dbextrafields'] = 'Disse felter er valgfri. Du kan v�lge at udfylde nogle af de felter Moodle bruger p� forh�nd fra <b>den eksterne database</b>, som du har specificeret her.<p> Hvis du ikke skriver noget her, vil default v�rdierne blive brugt.</p><p> I alle tilf�lde vil brugeren v�re i stand til at skrive i alle felterne, n�r de er logget ind.';
$string['auth_dbfieldpass'] = 'Navn p� feltet der indeholder password';
$string['auth_dbfielduser'] = 'Navnet p� feltet der indeholder usernames';
$string['auth_dbhost'] = 'Computeren der hoster database serveren.';
$string['auth_dbname'] = 'Navnet p� databasen';
$string['auth_dbpass'] = 'Password der matcher ovenn�vnte username';
$string['auth_dbpasstype'] = 'Angiv hvilket format password feltet anvender. MD5 kryptering er anvendeligt n�r der samarbejdes med almindelige webapplikationer som PostNuke eller PHPnuke';
$string['auth_dbtable'] = 'Navnet p� tabellen i databasen';
$string['auth_dbtitle'] = 'Brug en ekstern database';
$string['auth_dbtype'] = 'Database typen(Se <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for detaljer)';
$string['auth_dbuser'] = 'Username med l�serrettigheder til databasen';
$string['auth_emaildescription'] = 'E-mail bekr�ftelse er default godkendelsesmetode. N�r brugerne melder sig ind og v�lger deres username og password, vil en bekr�ftelses e-mail blive sendt til brugerens e-mailaddresse. Denne email indeholder et sikkert link til en side, hvor brugeren kan bekr�ftige sine oplysninger. Fremtidige logins kontrolleres ved sammenligning af det username og password, som der er gemt i databasen.';
$string['auth_emailtitle'] = 'Email-baseret godkendelse';
$string['auth_fccreators'] = 'Liste af grupper hvis medlemmer kan oprette nye kurser. Adskil flere grupper med \';\'. Navne skal staves n�jagtig som p� FirstClass serveren. Systemet er case-sensitivt.';
$string['auth_fcdescription'] = 'Denne metode bruger en FirstClass server til at kontrollere om et givent brugernavn og password er korrekt.';
$string['auth_fcfppport'] = 'Server port (3333 er den mest brugte)';
$string['auth_fchost'] = 'FirstClass server adresse. Brug IP-nummeret eller DNS-navnet.';
$string['auth_fcpasswd'] = 'Password for ovenst�ende konto';
$string['auth_fctitle'] = 'Brug en FirstClass Server';
$string['auth_fcuserid'] = 'BrugerID for FirstClass konto med privilegiet \'Subadministrator\' sat.';
$string['auth_fieldlock'] = 'L�s v�rdi';
$string['auth_fieldlock_expl'] = '<p><b>L�s v�rdi:</b> Hvis denne er aktiveret er moodle\'s brugere og admins forhindret i at rette direkte i feltet. Denne mulighed kan benyttes hvis du vedligeholder disse data i et externt autorisationssystem</p>';
$string['auth_fieldlocks'] = 'L�s brugerfelter';
$string['auth_fieldlocks_help'] = '<p>Du kan l�se brugerdata felter. Det er brugbart for sites hvor brugerdata vedligeholdes udelukkende af administratorer, der ved manuelt at rette brugerdata eller uploader brugerdata vha. \"upload brugerdata\".Hvis du l�ser felter der kr�vet for moodle, skal du s�rge for at de n�dvendige datafelter er tilstede, i modsat fald vil de oprettede brugere eller vil v�re ubrugelige.</p><p>For at forhindre dette kan l�semetoden \'U�st hvis tom\' benyttes for at undg� dette problem.</p>';
$string['auth_imapdescription'] = 'Denne metode bruger en IMAP server for at kontrollere om usernam og password er gyldigt.';
$string['auth_imaphost'] = 'IMAP serverens adresse. Brug IP nummeret, ikke DNS navn.';
$string['auth_imapport'] = 'IMAP server port nummer. S�dvanligvis er det 143 eller 993.';
$string['auth_imaptitle'] = 'Brug en IMAP server';
$string['auth_imaptype'] = 'IMAP server typen. IMAP servere kan have forskellige typer godkendelser.';
$string['auth_ldap_bind_dn'] = 'Hvis du bruger bind-user til s�gning, skal det angives her. Noget  med \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password for bind-user.';
$string['auth_ldap_bind_settings'] = 'Bind indstilling';
$string['auth_ldap_contexts'] = 'Liste med indhold over brugere. Adskil forskellige indhold med \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Hvis du tillader brugeroprettelse med e-mail verificering, s� angiv i hvilken sammenh�ng brugerne bliver oprettet. Denne sammenh�ng skulle v�re anderledes end andre p.g.a. sikkerhedsm�ssige �rsager. Du beh�ves ikke at tilf�je sammenh�ngen til \'ldap_context\' variablen, Moodle vil automatisk s�ge efter brugere i denne sammenh�ng.';
$string['auth_ldap_creators'] = 'List af grupper hvis medlemmer kan oprette nye kurser. Adskil flere grupper med \';\'. F.eks. i stil med \'cn=teachers, ou=staff, o=myirg\'';
$string['auth_ldap_expiration_desc'] = 'V�lg nej for at deaktivere kontrol af udl�bet password eller LDAP hvis passwordsudl�bstiden skal l�ses direkte fra LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Hvor mange dage f�r at et password udl�ber skal der skrives en meddelelse om det.';
$string['auth_ldap_expireattr_desc'] = 'Valgfrit: overskriver ldap-attribut der gemmer password-udl�bs tid.';
$string['auth_ldap_graceattr_desc'] = 'Valgfrit: Overskriver gracelogin attribut.';
$string['auth_ldap_gracelogins_desc'] = 'Aktivere LDAP gracelogin underst�ttelse. Efter at kodeordet er udl�bet kan brugeren logge ind indtil gracelogin-t�lleren er 0. Hvis denne indstilling er aktiveret vil en gracelogin besked blive vist hvis kodeordet er udl�bet.';
$string['auth_ldap_host_url'] = 'Angiv LDAP host i URL-form f.eks. \'ldap://ldap.myorg.com/\' eller \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_login_settings'] = 'Login indstilling';
$string['auth_ldap_memberattribute'] = 'Angiv bruger attribut, n�r en bruger tilh�rer en gruppe. Normalt \'member\'';
$string['auth_ldap_objectclass'] = 'Valgfrit: Overskriver objectClass brugt til name/search brugere p� ldap_user_type. Du beh�ver normalt ikke at �ndre det.';
$string['auth_ldap_opt_deref'] = 'Bestemmer hvordan aliaser behandles under s�gning. V�lg en af de f�lgende v�rdier: \"Nej\" (LDAP_DEREF_NEVER) eller \"ja\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password udl�bs indstilling';
$string['auth_ldap_preventpassindb'] = 'V�lg Ja for at forhindre at passwords bliver gemt i Moodle\'s database.';
$string['auth_ldap_search_sub'] = 'S�t v�rdi <> 0 hvis du vil s�ge efter brugere ud fra underemner.';
$string['auth_ldap_server_settings'] = 'LDAP server indstilling';
$string['auth_ldap_update_userinfo'] = 'Updater bruger information (fornavn, efternavn, addresse..) fra LDAP til Moodle. Se /auth/ldap/attr_mappings.php for information';
$string['auth_ldap_user_attribute'] = 'Attributten til navngivning/s�gning af brugere. S�dvanligvis \'cn\'.';
$string['auth_ldap_user_settings'] = 'Brugeropslag indstilling';
$string['auth_ldap_user_type'] = 'V�lger hvordan brugere gemmes i LDAP. Denne indstilling specificere hvordan loginudl�b, gracelogins og brugeroprettelse skal fungere.';
$string['auth_ldap_version'] = 'Versionen af LDAP protokollen din server bruger.';
$string['auth_ldapdescription'] = 'Denne metode kr�ver godkendelse op mod en ekstern LDAP server.
Hvis det givne username/password er gyldige opretter Moodle en ny bruger i databasen.     Dette modul kan l�se bruger attributter fra en LDAP server og udfylde �nskede felter i Moodle 
For f�lgende logins bliver kun username og password kontrolleret.';
$string['auth_ldapextrafields'] = 'Disse felter er valgfrie.  Du kan v�lge at udfylde Moodle felter p� forh�nd fra <b>LDAP felterne</b> som du angiver her. </p><p>Hvis du ikke skriver noget her, vil intet overf�res fra LDAP og Moodle standardv�rdier vil blive brugt i stedet.</p><p>I alle tilf�lde vil brugeren v�re i stand �ndre i felterne efter de har logget ind.</p>';
$string['auth_ldaptitle'] = 'Brug en LDAP server';
$string['auth_manualdescription'] = 'Denne metode fjerner enhver m�de for brugerne selv at oprette en brugerkonto. Alle brugerkonti skal laves manuelt af en admin bruger.';
$string['auth_manualtitle'] = 'Kun manuel brugeroprettelse.';
$string['auth_multiplehosts'] = 'Flere v�rter kan specificeres (f.eks. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Denne metode bruger en NNTP server for at kontrollere om de givne username og password er gyldige.';
$string['auth_nntphost'] = 'NNTP server adressen. Brug IP nummeret, ikke DNS navn.';
$string['auth_nntpport'] = 'Server port (119 er den mest almindelige)';
$string['auth_nntptitle'] = 'Brug en NNTP server';
$string['auth_nonedescription'] = 'Brugerne kan oprette sig selv og lave gyldige konti med det samme, uden godkendelse op mod en ekstern server og uden bekr�ftelse via e-mail. V�r forsigtig med at bruge denne mulighed - t�nk administrationsproblemerne!';
$string['auth_nonetitle'] = 'Ingen godkendelse';
$string['auth_pamdescription'] = 'Denne metode benytter PAM til at tilg� brugernavne p� serveren. Du bliver n�dt til at installere et <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> modul for at bruge denne mulighed.';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'Dit kodeord er udl�bet. �nsker du at �ndre det nu?';
$string['auth_passwordwillexpire'] = 'Dit kodeord udl�ber om $a dage. �nsker du at �ndre det nu?';
$string['auth_pop3description'] = 'Denne metode bruger en POP3 server til at kontrollere om de givne username og password er gyldige';
$string['auth_pop3host'] = 'POP3 server adressen. Brug IP nummeret, ikke DNS navn.';
$string['auth_pop3mailbox'] = 'Navnet p� den postbox som der skal forbindes til (som regel INBOX)';
$string['auth_pop3port'] = 'Server port (110 er mest almindelig)';
$string['auth_pop3title'] = 'Brug en POP3 server';
$string['auth_pop3type'] = 'Server type. Hvis din server anvender certifikat sikkerhed, s� v�lg pop3cert.';
$string['auth_shib_convert_data'] = 'Datamanipulerings API';
$string['auth_shib_convert_data_description'] = 'Du kan benytte dette API til yderligere at �ndre data fra Shibboleth. L�s evt a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> for yderligere information.';
$string['auth_shib_convert_data_warning'] = 'Filen eksistere ikke eller kan ikke l�ses af webserverens process.';
$string['auth_shib_instructions'] = 'Benyt <a href=\"$a\">Shibboleth login</a> til at f� adgang via Shibboleth, hvis din institution underst�tter dette.<br />Ellers kan den normale loginmetode benyttes.';
$string['auth_shib_instructions_help'] = 'Her b�r du forklare brugere hvad Shibboleth er og hvordan de bruger det. Det vil blive vist p� loginsiden i instruktionssektionen. Det b�r indeholde et link til en Shibboleth beskyttet resource der stiller brugere videre til \"<b>$a</b>\" s� Shibbolethbrugere kan logge ind i Moodle. Hvis den er blank vil standardinstruktioner blive vist. (ikke specielt for Shibboleth)';
$string['auth_shib_only'] = 'Kun Shibboleth';
$string['auth_shib_only_description'] = 'Benyt denne mulighed hvis Shibboleth autorisering skal gennemtvinges.';
$string['auth_shib_username_description'] = 'Navnet p� Shibboleth webserverens environment variabel der skal benyttes som Moodles brugernavn.';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_manual_login'] = 'Manuelt login';
$string['auth_shibbolethdescription'] = 'Ved at benytte denne metode kan man forbinde moodle til en eksisterende Shibboleth server for at checke og oprette nye brugerkonti.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_updatelocal'] = 'Opdater lokale data';
$string['auth_updatelocal_expl'] = '<p><b>Opdater lokale data:</b> hvis aktiveret vil felter blive opdateret (fra extern autorisering) hver gang brugeren logger ind eller der er en bruger synkronisering. Felter der er sat til lokal opdatering skulle ikke l�ses. </p>';
$string['auth_updateremote'] = 'Opdatere eksterne data';
$string['auth_updateremote_expl'] = '<p><b>Opdater ekstern data:</b> Hvis aktiveret vil den ekstern autoriseringsdata blive opdateret n�r brugerens profildata bliver opdateret. Felter b�r v�re ul�st for at tillade rettelser.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> I forbindelse med opdatering af eksterne LDAP data er det vigtigt at s�tte binddnog bindpw til en bind-bruger med editeringsrettigheder til alle brugerdata. I �jeblikket bevarer den ikke felter med flere v�rdier og ekstra data vil blive fjernet under opdatering.';
$string['auth_user_create'] = 'Tillad bruger oprettelse';
$string['auth_user_creation'] = 'Nye (anonyme) brugere kan blive oprettet vha. en ekstern autorisations kilde og bekr�ftet via e-mail. Hvis du tillader dette, s� husk at konfigurer modul-afh�ngig mulighed for brugeroprettelse.';
$string['auth_usernameexists'] = 'Det valgte brugernavn eksistere allerede. V�lg venligst et andet.';
$string['authenticationoptions'] = 'Godkendelses options';
$string['authinstructions'] = 'Her kan du komme med anvisninger til dine brugere om, hvordan de skal oprette username og password. Teksten du skriver her, vil blive vist p� login siden. Hvis du ikke skriver noget her, vil der ikke vises noget p� login siden.';
$string['changepassword'] = 'Lav password URL om';
$string['changepasswordhelp'] = 'Her kan du angive et sted, hvor dine brugere kan finde eller �ndre deres username/password, hvis de har glemt det. Brugerne vil f� vist en knap p� login siden. Hvis du ikke skriver noget her, vil knappen ikke blive vist.';
$string['chooseauthmethod'] = 'V�lg en godkendelses metode';
$string['createchangepassword'] = 'Hvis mangler - tving skift';
$string['createpassword'] = 'Opret hvis det mangler';
$string['forcechangepassword'] = 'Gennemtving skift af passwords';
$string['forcechangepassword_help'] = 'Tving brugere til at skifte passwords n�ste gang de logger ind.';
$string['forcechangepasswordfirst_help'] = 'Tving brugere til at skifte password f�rste gang de logger ind p� Moodle';
$string['guestloginbutton'] = 'G�ste login knap';
$string['infilefield'] = 'N�dvendige felter i filen';
$string['instructions'] = 'Instruktioner';
$string['locked'] = 'L�st';
$string['md5'] = 'MD5 kryptering';
$string['passwordhandling'] = 'Behandling af passwordfelter';
$string['plaintext'] = 'Alm. tekst';
$string['shib_no_attributes_error'] = 'Du er blevet autoriseret af Shibboleth men Moodle har ikke modtaget nogle brugeroplysninger. Kontroller venligst at din Identity Provider frigiver de n�dvendige attributter ($a) til den Service Provider som Moodle k�rer p� eller fort�l det til administratoren af webserveren.';
$string['shib_not_all_attributes_error'] = 'Moodle kr�ver bestemte Shibboleth oplysninger som ikke er tilg�ngelige i dit tilf�lde. Oplysningerne er: $a<br/>Kontakt venligst Moodles administrator eller identifikationssystemets administrator.';
$string['shib_not_set_up_error'] = 'Shibboleth autoriseringen lader ikke til at v�re sat korrekt op. Se venligst a href=\"README.txt\">README</a> for yderlige instruktioner om hvordan Shibboleth autorisering konfigureres.';
$string['showguestlogin'] = 'Du kan vise eller gemme g�ste login knappen p� login-siden.';
$string['stdchangepassword'] = 'Brug standardsiden til skift af passwords';
$string['stdchangepassword_expl'] = 'Hvis det eksterne autoriseringssystem tillader passwordskift gennem moodle s�t denne indstilling til Ja. Denne indstilling overskriver \'Skift Password URL\'.';
$string['stdchangepassword_explldap'] = 'NOTE: Det er tilr�deligt at bruge LDAP over en SSL krypteret tunnel (ldaps://) hvis LDAP serveren kontaktes over netv�rket.';
$string['unlocked'] = 'Ul�st';
$string['unlockedifempty'] = 'Ul�st hvis tom';
$string['update_never'] = 'Aldrig';
$string['update_oncreate'] = 'Ved oprettelse';
$string['update_onlogin'] = 'Ved hvert login';
$string['update_onupdate'] = 'Ved opdatering';

?>
