<?PHP // $Id: auth.php,v 1.6.2.5 2006/03/08 18:40:25 koenr Exp $ 
      // auth.php - created with Moodle 1.2 (2004032000)


$string['auth_dbdescription'] = 'Denne metoden bruker en ekstern database for � kontrollere om et gittt brukernavn og passord er gyldig. Hvis kontoen er ny, kan oplysninger fra andre felter ogs� kopieres inn til Moodle.';
$string['auth_dbextrafields'] = 'Disse feltene er valgfrie. Du kan velge � forh�ndsutfylle noen brukerfelter i Moodle fra <b>den eksterne databasen</b> som du skriver her.<p> Hvis du ikke skriver noe her, vil standardverdierne bli brukt.<p> I alle tilfeller vil brukeren v�re i stand til � endre disse feltene n�r de er innlogget.';
$string['auth_dbfieldpass'] = 'Navn p� feltet som inneholder passord';
$string['auth_dbfielduser'] = 'Navn p� feltet som inneholder brukernavn';
$string['auth_dbhost'] = 'Datamaskinen som er vertsmaskon for databaseserveren';
$string['auth_dbname'] = 'Navnet p� selve databasen';
$string['auth_dbpass'] = 'Passord som passer til brukernavnet ovenfor';
$string['auth_dbpasstype'] = 'Angi hvilket format passordfeltet bruker. MD5-kryptering er nyttig for � koble til vanlige nettapplikasjoner som PostNuke';
$string['auth_dbtable'] = 'Navn p� tabellen i databasen';
$string['auth_dbtitle'] = 'Bruk en ekstern database';
$string['auth_dbtype'] = 'Typen database (Se <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for detaljer)';
$string['auth_dbuser'] = 'Brukernavn med lesetilgang til databasen';
$string['auth_emaildescription'] = 'E-postbekreftelse er standard autentiseringsmetode. N�r brukerne registrerer seg og velger brukernavn og passord, vil en e-post om bekreftelse bli sendt til brukerens e-postadresse. Denne e-posten inneholder en sikker link til en side der brukeren kan bekrefte registreringen. Fremtidige innlogginger kontrolleres kun ved sammenligning av brukernavn og tilh�rende passord som ligger i Moodle-databasen.';
$string['auth_emailtitle'] = 'E-postbasert autentisering';
$string['auth_imapdescription'] = 'Denne metoden bruker en IMAP-server for � sjekke om et gitt brukernevn og passord er gyldig.';
$string['auth_imaphost'] = 'IMAP-serveradressen. Bruk IP-nummeret, ikke DNS-navn.';
$string['auth_imapport'] = 'IMAP-serverens portnummer. Vanligvis er dette 143 eller 993.';
$string['auth_imaptitle'] = 'Bruk en IMAP-server';
$string['auth_imaptype'] = 'Typen IMAP-server. IMAP-servere kan ha forskjellige typer autentisering og kompatibilitet.';
$string['auth_ldap_bind_dn'] = 'Hvis du vil bruke bind-user for � s�ke blant brukere skal det angis her. (Noe som f.eks. \'cn=ldapuser,ou=public,o=org\')';
$string['auth_ldap_bind_pw'] = 'Passord for bind-user';
$string['auth_ldap_contexts'] = 'Innholdsliste over hvor brukerne er. Del ulike sammenhenger med \';\'. (F.eks. \'ou=users,o=org; ou=others,o=org\')';
$string['auth_ldap_create_context'] = 'Hvis du lar brukere registrere seg med e-postbekreftelse, spesifiser sammenhengen de registreres. Dette m� v�re ulikt andre brukere for � forhindre sikkerhetsproblemer. Du trenger ikke � legge denne sammenhengen til variabelen ldap_context, Moodle vil automatisk s�ke etter brukere fra denne sammenhengen.';
$string['auth_ldap_creators'] = 'Liste over grupper der medlemmene tillates � opprette nye klassesider. Separer flere grupper med \';\'. (Vanligvis f.eks. \'cn=teachers,ou=staff,o=myorg\')';
$string['auth_ldap_host_url'] = 'Angi LDAP-vert i URL-form, f.eks. \'ldap://ldap.myorg.com/\' eller \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Spesifiser atributt for medlemmer i en gruppe, f.eks. \'medlem\'';
$string['auth_ldap_search_sub'] = 'Sett verdi &lt;&gt; 0 hvis du vil s�ke etter brukere fra underemner.';
$string['auth_ldap_update_userinfo'] = 'Oppdater brukerinfo (fornavn, etternavn, adresse...) fra LDAP til Moodle. Se /auth/ldap/attr_mappings.php for informasjon';
$string['auth_ldap_user_attribute'] = 'Atributten for � navngi og s�ke etter brukere (vanligvis \'cn\').';
$string['auth_ldapdescription'] = 'Denne metoden krever godkjenning opp mot en ekstern LDAP-server. Hvis det gitte brukernavnet/passordet er gyldig oppretter Moodle en ny bruger i databasen. Denne modulen kan lese brugerinfo fra LDAP og forh�ndsutfylle �nskede felter i Moodle. For senere innlogging blir kun brukernavn og passord kontrollert.';
$string['auth_ldapextrafields'] = 'Disse feltene er valgfrie.  Du kan velge � forh�ndsutfylle noen brukerfelter i Moodle p� forh�nd fra <b>LDAP-felterne</b> som du spesifiserer her. <p>Hvis du ikke skriver noe her, vil det ikke overf�res noe fra LDAP og standardene i Moodle vil bli brukt i stedet.<p>Uansett vil brukeren v�re i stand til � endre disse feltene etter at de har logget inn.';
$string['auth_ldaptitle'] = 'Bruk en LDAP-server';
$string['auth_manualdescription'] = 'Denne metoden fjerner alle muligheter for brukere til � registrere seg p� egenh�nd. Alle kontoene m� lages manuelt av administrator.';
$string['auth_manualtitle'] = 'Bare manuelle kontoer';
$string['auth_multiplehosts'] = 'Flere verter kan spesifiseres (f.eks. vert1.no;vert2.no;vert3.no)';
$string['auth_nntpdescription'] = 'Denne metoden bruker en NNTP-server for � kontrollere om gitte brukernavn og passord er gyldige.';
$string['auth_nntphost'] = 'NNTP-serveradressen. Bruk IP-nummeret, ikke DNS-navn.';
$string['auth_nntpport'] = 'Serverport (119 er den vanligste)';
$string['auth_nntptitle'] = 'Bruk en NNTP-server';
$string['auth_nonedescription'] = 'Brukerne lage gyldige brukerkontoer med det samme og logge inn, uten godkjennelse opp mot en ekstern server og uten bekreftelse via e-post. V�r forsiktig med � bruke denne muligheten - tenk p� sikkerhets- og administrasjonsproblemer dette kan medf�re!';
$string['auth_nonetitle'] = 'Ingen autentisering';
$string['auth_pop3description'] = 'Denne metoden bruker en POP3-server for � kontrollere om gitte brukernavn og passord er gyldige.';
$string['auth_pop3host'] = 'POP3-serveradressen. Bruk IP-nummeret, ikke DNS-navn.';
$string['auth_pop3port'] = 'Serverport (110 er vanligst)';
$string['auth_pop3title'] = 'Bruk en POP3-server';
$string['auth_pop3type'] = 'Servertype. Hvis serveren din bruker sikkerhet med sertifikater, velg pop3cert.';
$string['auth_user_create'] = 'Sl� p� brukerinnmelding';
$string['auth_user_creation'] = 'Nye (anonyme) brukere kan opprette brukerkontoer med kilden til den eksterne autentiseringen og bekrefte via e-post. Hvis du sl�r p� denne m� du ogs� huske p� � konfigurere spesielle innstillinger for oppretting av brukere.';
$string['auth_usernameexists'] = 'Noen har allerede valgt dette brukernavnet. Vennligst pr�v et annet.';
$string['authenticationoptions'] = 'Valgmuligheter autentisering';
$string['authinstructions'] = 'Her kan du komme med informasjon til dine brukere om hvordan de skal lage sitt eget brukernavn og passord. Teksten du skriver her vil bli vist p� login-siden. Hvis du ikke skriver noe her vil det ikke vises noe p� login-siden.';
$string['changepassword'] = 'URL for � endre passord';
$string['changepasswordhelp'] = 'Her kan du angi et sted der dine brukere kan finne eller endre deres brukernavn og passord hvis de har glemt det. Brukerne vil f� vist en knapp p� login-siden. Hvis du ikke skriver noe her, vil knappen ikke vises.';
$string['chooseauthmethod'] = 'Velg en autentiseringsmetode:';
$string['guestloginbutton'] = 'Logg inn-knapp for gjester';
$string['instructions'] = 'Instruksjoner';
$string['md5'] = 'MD5-kryptering';
$string['plaintext'] = 'Ren tekst';
$string['showguestlogin'] = 'Du kan skjule eller vise logg inn-knappen for gjester p� innloggingssiden.';

?>
