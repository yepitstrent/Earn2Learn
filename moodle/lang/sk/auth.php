<?PHP // $Id: auth.php,v 1.8.2.5 2006/02/06 10:00:33 moodler Exp $ 
      // auth.php - created with Moodle 1.6 development (2005060201)


$string['alternatelogin'] = 'Pokia� sem vlo��te nejak� URL, bude pou�it� ako prihlasovacia str�nka k tomuto syst�mu. T�to Va�a str�nka by mala obsahova� formul�r s vlastnos�ou \'action\' nastavenou na <strong>\'$a\'</strong>, ktor� vracia pole <strong>username</strong> a <strong>password</strong>.<br />Dbajte na to, aby ste vlo�ili platn� URL! V opa�nom pr�pade by ste mohli komuko�vek vr�tane seba zamedzi� pr�stup k t�mto str�nkam.<br />Ak chcete pou��va� �tandardn� prihlasovaciu str�nku, nechajte toto pole pr�zdne.';
$string['alternateloginurl'] = 'Alternat�vne URL pre prihl�senie';
$string['auth_cas_baseuri'] = 'URI serveru (alebo ni�, pokia� nie je baseUri)<br />Ak je napr. CAS server dostupn� na  host.domena.sk/CAS/ potom nastavte<br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = 'Pokia� chcete vlo�i� do Moodle datab�zy pou��vate�ov overen�ch pomocou CAS, mus�te zapn�� t�to vo�bu. Pokia� ju nezapnete, bud� sa m�c� prihl�si� len t� pou��vatelia, ktor� u� existuj� v datab�ze Moodle.';
$string['auth_cas_enabled'] = 'Pokia� chcete pou��va� overovanie pomocou CAS, mus�te zapn�� t�to vo�bu.';
$string['auth_cas_hostname'] = 'Hostite�sk� meno (hostname) CAS serveru<br />napr. host.domena.sk';
$string['auth_cas_invalidcaslogin'] = 'Prep��te, nepodarilo sa V�m prihl�si� - nebolo mo�n� V�s overi�';
$string['auth_cas_language'] = 'Zvolen�  jazyk';
$string['auth_cas_logincas'] = 'Pr�stup cez zabezpe�en� spojenie';
$string['auth_cas_port'] = 'Port CAS serveru';
$string['auth_cas_server_settings'] = 'Konfigur�cia CAS serveru';
$string['auth_cas_text'] = 'Zabezpe�en� spojenie';
$string['auth_cas_version'] = 'Verzia CAS';
$string['auth_casdescription'] = 'T�to met�da pou��va CAS server (Central Authentication Service) pre overovanie pou��vate�ov v prostred� jednotn�ho syst�mu prihlasovania (Single Sign On - SSO). Tie� m��ete pou�i� jednoduch� LDAP overovanie. Pokia� je zadan� meno a heslo platn� na serveri CAS, Moodle vytvor� z�znam pre nov�ho pou��vate�a v datab�ze, pri�om si potrebn� pou��vate�sk� �daje vezme z datab�zy LDAP. Pri nasleduj�cich prihl�seniach s� u� kontrolovan� len prihlasovacie meno a heslo.';
$string['auth_castitle'] = 'Pou�i� CAS server (SSO)';
$string['auth_common_settings'] = 'Be�n� nastavenia';
$string['auth_data_mapping'] = 'Mapovanie �dajov';
$string['auth_dbdescription'] = 'T�to met�da vyu��va tabu�ku v externej datab�ze na kontrolu platnosti dan�ho pou��vate�sk�ho mena a hesla. Ak je to nov� konto, m��u by� do prostredia Moodle skop�rovan� inform�cie aj z in�ch pol��ok.';
$string['auth_dbextrafields'] = 'Tieto pol��ka s� nepovinn�. Je tu mo�nos�, aby niektor� pou��vate�sk� pol��ka v prostred� Moodle uv�dzali inform�cie z <b>pol��ok extern�ch datab�z</b>, ktor� tu zad�te.<br />
Ak toto pol��ko nech�te pr�zdne, bude tu uv�dzan� p�vodn� nastavenie.<br /><p>
V obidvoch pr�padoch, bude m�c� pou��vate� po prihl�sen� upravova� v�etky tieto pol��ka.</p>';
$string['auth_dbfieldpass'] = 'N�zov pol��ka obsahuj�ceho hesl�';
$string['auth_dbfielduser'] = 'N�zov pol��ka obsahuj�ceho pou��vate�sk� men�';
$string['auth_dbhost'] = 'Po��ta� hos�uj�ci datab�zov� server.';
$string['auth_dbname'] = 'N�zov datab�zy';
$string['auth_dbpass'] = 'Heslo pre uveden�ho pou��vate�a';
$string['auth_dbpasstype'] = '�pecifkujte form�t, ktor� pou��va pol��ko s heslom. MD5 �ifrovanie je vhodn� pre pripojenie k �al��m be�n�m web aplik�ci�m ako PostNuke';
$string['auth_dbtable'] = 'N�zov tabu�ky v datab�ze';
$string['auth_dbtitle'] = 'Pou�i� extern� datab�zu';
$string['auth_dbtype'] = 'Datab�zov� typ (bli��ie vi� <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokument�cia</a>)';
$string['auth_dbuser'] = 'Pou��vate�sk� meno s pr�stupom do datab�zy len na ��tanie.';
$string['auth_emaildescription'] = 'Emailov� potvrdzovanie je prednastaven� sp�sob overovania. Ke� sa pou��vate� prihl�si, vyberie si vlastn� nov� pou��vate�sk� meno a heslo. N�sledne dostane potvrdzuj�ci email na svoju emailov� adresu. Tento email obsahuje bezpe�n� odkaz na str�nku, kde m��e pou��vate� potvrdi� svoje nastaven� �daje. Pri �al��ch prihlasovaniach sa u� iba skontroluje pou��vate�sk� meno a heslo v porovnan� s �dajmi ulo�en�mi v Moodle datab�ze.';
$string['auth_emailtitle'] = 'Emailov� overovanie';
$string['auth_fccreators'] = 'Zoznam skup�n, ktor�ch �lenovia maj� opr�vnenie na vytv�ranie nov�ch kurzov. Ak ide o viacer� skupiny, odde�te ich bodko�iarkou. Men� musia by� nap�san� presne tak, ako na FirstClass serveri. Syst�m zoh�ad�uje p�sanie mal�ch a ve�k�ch p�smen.';
$string['auth_fcdescription'] = 'T�to met�da pou��va FirstClass server na skontrolovanie spr�vnosti pou��vate�sk�ho mena a hesla.';
$string['auth_fcfppport'] = 'Port servera (3333 je najbe�nej��)';
$string['auth_fchost'] = 'Adresa FirstClass servera. Pou�ite IP adresu alebo meno DNS.';
$string['auth_fcpasswd'] = 'Heslo pre hore uveden� pou��vate�sk� ��et.';
$string['auth_fctitle'] = 'Pou�i� FirstClass server';
$string['auth_fcuserid'] = 'ID pou��vate�a pre ��et na FirstClass serveri s nastaven�m privil�gia \'Ved�aj�� administr�tor\'.';
$string['auth_fieldlock'] = 'Zamkn�� hodnotu';
$string['auth_fieldlock_expl'] = '<p><b>Zamkn�� hodnotu:</b>Ak je vo�ba aktivovan�, bude zabra�ova� priamemu upravovaniu pol��ok pou��vate�mi a administr�tormi Moodle. Pou�ite t�to vo�bu, ak spravujete �daje v externom overovacom syst�me.</p>';
$string['auth_fieldlocks'] = 'Zamkn�� pol��ka pou��vate�ov';
$string['auth_fieldlocks_help'] = '	<p>M��ete zamkn�� �daje v pol��kach pou��vate�ov. Toto je u�ito�n� najm� na t�ch str�nkach , kde s� �daje pou��vate�ov spravovan� administr�tormi ru�ne, prostredn�ctvom upravovania ich z�znamov alebo ich prenesenia cez vo�bu \'Prenies� pou��vate�ov\'. Ak zamknete pol��ka, ktor� s� vy�adovan� Moodle, uistite sa, �e pri vytv�ran� pou��vate�sk�ch ��tov a &emdash, potom poskytnete v�etky potrebn� �daje; v opa�nom pr�pade bud� ��ty nepou�ite�n�.</p><p>Odpor��ame zv�i� mo�nos� nastavenia re�imu zamk�nania na \'Odomknut�, ak pr�zdne\', aby ste sa vyhli tomuto probl�mu.</p>';
$string['auth_imapdescription'] = 'Na kontrolu spr�vnosti dan�ho pou��vate�sk�ho mena a hesla pou��va t�to met�da IMAP server.';
$string['auth_imaphost'] = 'Adresa IMAP serveru. Pou��vajte ��slo IP, nie n�zov DNS.';
$string['auth_imapport'] = '��slo portu IMAP serveru . Zvy�ajne je to 143 alebo 993.';
$string['auth_imaptitle'] = 'Pou�i� IMAP server';
$string['auth_imaptype'] = 'Typ IMAP serveru. IMAP servery m��u pou��va� rozli�n� typy overovania.';
$string['auth_ldap_bind_dn'] = 'Ak chcete pou��va� spoluu��vate�ov na vyh�ad�vanie pou��vate�ov, uve�te to tu. Napr�klad: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_bind_pw'] = 'Heslo pre spoluu��vate�a.';
$string['auth_ldap_bind_settings'] = 'Spolo�n� nastavenia ';
$string['auth_ldap_contexts'] = 'Zoznam kontextov, v ktor�ch sa nach�dzaj� pou��vatelia. Odde�te rozli�n� kontexty bodko�iarkou. Napr�klad: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ak umo�n�te vytv�ranie pou��vate�ov s emailov�m potvrdzovan�m, �pecifikujte kontext, kde bud� pou��vatelia vytvoren�. Tento kontext by mal by� in�, ako pre ostatn�ch pou��vate�ov, v z�ujme bezpe�nosti. Nepotrebujete prida� tento kontext do premennej ldap-context, Moodle bude vyh�ad�va� pou��vate�ov z tohto kontextu automaticky.<br />
<b>Pozor!</b> Mus�te upravi� funkciu auth_user_create() v s�bore auth/ldap/lib.php, aby mohli by� tak�mto sp�sobom vytv�ran� nov� pou��vatelia.';
$string['auth_ldap_creators'] = 'Zoznam skup�n, ktor�ch �lenovia maj� povolen� vytv�ra� nov� kurzy. Jednotliv� skupiny odde�ujte bodko�iarkou. Oby�ajne nie�o ako cn=ucitelia,ou=ostatni,o=univ\'';
$string['auth_ldap_expiration_desc'] = 'Vyberte si \'Nie\', aby sa deaktivovalo kontrolovanie neakt�vneho hesla alebo LDAP na ��tanie \'passwordexpiration time\' priamo z LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Po�et dn� pred t�m, ako sa objav� upozornenie o vypr�an� platnosti hesla.';
$string['auth_ldap_expireattr_desc'] = 'Nepovinn�: toto potla�� ldap-vlastnosti, ktor� uchov�vaj�  �as do vypr�ania hesla  passwordExpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Nepovinn�: Potla�� vlastnos� gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Umo�ni� podporu LDAP gracelogin (tzv. prihl�senie z milosti). Po tom, ako vypr�� platnos� hesla, pou��vate� sa m��e prihl�si�, pok�m nie je hodnota gracelogin 0. Ak povol�te toto nastavenie, pou��vatelia bud� informovan�, v pr�pade, �e im vypr�� platnos� hesla.';
$string['auth_ldap_host_url'] = '�pecifikujte hostite�a LDAP v podobe URL, napr. \'ldap://ldap.myorg.com/\' alebo \'ldaps://ldap.myorg.com/\'. Jednotliv� servery odde�te bodko�iarkou.';
$string['auth_ldap_login_settings'] = 'Nastavenia prihlasovania';
$string['auth_ldap_memberattribute'] = 'Nepovinn�: vo�ba potla�� n�zov atrib�tu �lena skupiny, ak pou��vate� patr� do skupiny. Oby�ajne je to \'member\'';
$string['auth_ldap_objectclass'] = 'Nepovinn�: vo�ba potla�� funkciu objectClass pou��van� na vyh�ad�vanie pou��vate�ov na ldap_user_type. Zvy�ajne t�to vo�bu nepotrebujete meni�.';
$string['auth_ldap_opt_deref'] = 'T�to vo�ba ur�uje, ako sa zaobch�dza s aliasmi pri vyh�ad�van�. Vyberte jednu z nasleduj�cich hodn�t: \"Nie\"(LDAP_DEREF_NEVER) alebo \"�no\"(LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP nastavenia pri vypr�an� platnosti hesla.';
$string['auth_ldap_search_sub'] = 'Uve�te hodnotu <> 0, ak chcete h�ada� pou��vate�ov v subkontextoch.';
$string['auth_ldap_server_settings'] = 'LDAP nastavenia servera';
$string['auth_ldap_update_userinfo'] = 'Aktualizova� inform�cie o pou��vate�ovi (krstn� meno, priezvisko, adresa...) z LDAP do Moodle. H�ada� v /auth/ldap/attr_mappings.php pre prira�uj�ce inform�cie. Ak potrebujete, definujte nastavenia pre \"Mapovanie �dajov\". ';
$string['auth_ldap_user_attribute'] = 'Nepovinn�: vo�ba potla�� vlastnos� pou��van� na h�adanie mien pou��vate�ov. Zvy�ajne \'cn\'.';
$string['auth_ldap_user_settings'] = 'Nastavenia preh�ad�vania pou��vate�ov';
$string['auth_ldap_user_type'] = 'Vyberte si, ako bud� pou��vatelia uchov�van� v LDAP. Toto nastavenie tie� �pecifikuje, ako bude fungova� vytv�ranie nov�ch pou��vate�ov, grace loginy a vypr�anie platnosti hesla.';
$string['auth_ldap_version'] = 'Verzia LDAP protokolu, ktor� pou��va v� server';
$string['auth_ldapdescription'] = 'T�to met�da poskytuje overovanie pou��vate�ov proti  LDAP serveru. 

Ak je pou��vate�sk� meno a heslo spr�vne, Moodle vytvor� nov�ho pou��vate�a vo svojej datab�ze. 	  

Tento modul dok�e na��ta� pou��vate�sk� vlastnosti z LDAP a predvyplni� po�adovan� pol��ka v Moodle. 

Pre nasleduj�ce prihlasovania sa kontroluj� u� iba pou��vate�sk� meno a heslo.';
$string['auth_ldapextrafields'] = 'Tieto pol��ka s� nepovinn�. M��ete predvyplni� niektor� pol��ka v profile pou��vate�a v Moodle s inform�ciami z <b>LDAP pol��ok</b>, ktor� tu uvediete.
<p>Ak tu ni� neuvediete, inform�cie z LDAP nebud� prenesen� a namiesto toho bude uv�dzan� �tandardn� Moodle nastavenie.</p>
<p>V obidvoch pr�padoch bude m�c� pou��vate� po prihl�sen� upravova� v�etky tieto pol��ka.</p>';
$string['auth_ldaptitle'] = 'Pou�i� LDAP server';
$string['auth_manualdescription'] = 'T�to met�da neumo��uje pou��vate�om vytv�ra� vlastn� kont�. V�etky kont� mus� ru�ne vytvori� administr�tor.';
$string['auth_manualtitle'] = 'Len ru�ne vytvoren� kont�';
$string['auth_multiplehosts'] = 'Tu m��u by� �pecifikovan� viacer� hostitelia ALEBO ich adresy (napr. host1.com;host2.com;host3.com)alebo (napr.xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = 'T�to met�da pou��va na kontrolu spr�vnosti pou��vate�sk�ho mena a hesla NNTP server.';
$string['auth_nntphost'] = 'Adresa NNTP serveru. Pou�ite ��slo IP, nie n�zov DNS.';
$string['auth_nntpport'] = 'Port serveru (119 je najbe�nej��)';
$string['auth_nntptitle'] = 'Pou�i� NNTP server';
$string['auth_nonedescription'] = 'Pou��vatelia sa m��u prihl�si� a okam�ite si vytvori� kont� bez nutnosti overovania proti extern�m serverom a bez potvrdzovania prostredn�ctvom emailu. Bu�te opatrn� pri tejto vo�be - myslite na bezpe�nos� a probl�my pri administr�cii, ktor� t�m m��u vznikn��.';
$string['auth_nonetitle'] = 'Bez overenia';
$string['auth_pamdescription'] = 'T�to met�da pou��va PAM na pr�stup do pou��vate�sk�ch mien na tomto serveri. Mus�te si nain�talova� <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a>, aby ste mohli pou��va� tento modul.';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'Platnos� V�ho hesla vypr�ala. Chcete si zmeni� Va�e heslo teraz?';
$string['auth_passwordwillexpire'] = 'Platnos� V�ho hesla vypr�� o $a dn�. Chcete si zmeni� Va�e heslo teraz?';
$string['auth_pop3description'] = 'T�to met�da pou��va na kontrolu spr�vnosti pou��vate�sk�ho mena a hesla POP3 server.';
$string['auth_pop3host'] = 'Adresa POP3 serveru. Pou�ite ��slo IP, nie n�zov DNS.';
$string['auth_pop3mailbox'] = 'N�zov po�tovej schr�nky, s ktorou by mohol by� nadviazan� kontakt. (v��inou prie�inok doru�enej po�ty INBOX)';
$string['auth_pop3port'] = 'Port serveru  (110 je najbe�nej��)';
$string['auth_pop3title'] = 'Pou��va� POP3 server';
$string['auth_pop3type'] = 'Typ serveru. Ak V� server pou��va zabezpe�enie pomocou certifik�tu, vyberte si pop3cert.';
$string['auth_shib_convert_data'] = 'API pre �pravu �dajov';
$string['auth_shib_convert_data_description'] = 'Toto API (aplika�n� rozhranie) V�m umo��uje �alej upravova� �daje, ktor� m�te k dispoz�cii zo syst�mu Shibboleth. Viac infom�ci� <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">n�jdete tu</a>.';
$string['auth_shib_convert_data_warning'] = 'S�bor neexistuje alebo k nemu proces web serveru nem� pr�stup na ��tanie!';
$string['auth_shib_instructions'] = 'Pou�ite <a href=\"$a\">prihl�senie cez Shibboleth</a>, pokia� Va�a in�tit�cia tento syst�m podporuje.<br />V opa�nom pr�pade pou�ite norm�lny formul�r pre prihl�senie.';
$string['auth_shib_instructions_help'] = 'Tu m��ete vlo�i� vlastn� inform�cie o Va�om syst�me Shibboleth. Bud� sa zobrazova� na prihlasovacej str�nke. Vlo�en� inform�cie by mali obsahova� odkaz na zdroj chr�nen� syst�mom Shibboleth, ktor� presmeruje pou��vate�ov na \"<b>$a</b>\", tak�e sa pou��vatelia syst�mu Shibboleth bud� m�c� prihl�si� do Moodle. Ak nech�te toto pole pr�zdne, bud� sa na prihlasovacej str�nke zobrazova� v�eobecn� pokyny.';
$string['auth_shib_only'] = 'Len Shibboleth';
$string['auth_shib_only_description'] = 'Za�krtnite t�to vo�bu, pokia� si chcete nastavi� prihl�senie za pomoci syst�mu Shibboleth';
$string['auth_shib_username_description'] = 'N�zov premennej prostredia webserveru Shibboleth, ktor� m� by� pou�it� ako pou��vate�sk� meno Moodle ';
$string['auth_shibboleth_login'] = 'Prihl�senie cez Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ru�n� prihl�senie';
$string['auth_shibbolethdescription'] = 'T�to met�da umo��uje vytv�ra� a overova� pou��vatelov pomocou syst�mu <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br />
Uistite sa, �e ste si pre��tali s�bor <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> obsahuj�ci inform�cie o tom, ako nastavi� V� Moodle pre podporu syst�mu Shibboleth.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_updatelocal'] = 'Aktualizova� miestne �daje';
$string['auth_updatelocal_expl'] = '<p><b>Aktualizova� miestne �daje:</b> Ak je t�to vo�ba akt�vna, pol��ko bude aktualizovan� (z extern�ho overovacieho zdroja) zaka�d�m, ke� sa pou��vate� prihl�si, alebo pri synchroniz�cii pou��vate�ov. Pol��ka ur�en� na miestnu aktualiz�ciu by mali by� uzamknut�.</p>';
$string['auth_updateremote'] = 'Aktualizova� extern� �daje';
$string['auth_updateremote_expl'] = '<p><b>Aktualizova� extern� �daje:</b> Ak je t�to vo�ba akt�vna, extern� overovac� zdroj bude aktualizovan� zaka�d�m, ke� d�jde k aktualiz�cii profilu pou��vate�a. Pol��ka ur�en� na miestnu aktualiz�ciu by nemali by� uzamknut�, aby sa mohli upravova�.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Pozn�mka:</b> Aktualiz�cia extern�ch LDAP �dajov si vy�aduje nastavenie binddn a bindpw spoluu��vate�om s pr�vom �pravy v�etk�ch z�znamov o pou��vate�och. Moment�lne syst�m nepodporuje vlastnosti s viacer�mi hodnotami a pri aktualiz�cii sa preto odstr�nia nadbyto�n� hodnoty.</p>';
$string['auth_user_create'] = 'Umo�ni� vytv�ranie pou��vate�ov';
$string['auth_user_creation'] = 'Nov� (anonymn�) pou��vatelia m��u vytv�ra� pou��vate�sk� kont� v externom zdroji a overova� ich cez email. Ak to umo�n�te, nezabudnite tie� konfigurova� �pecifick� vo�by pre vytv�ranie pou��vate�sk�ch ��tov v danom externom zdroji.';
$string['auth_usernameexists'] = 'Zvolen� pou��vate�sk� meno u� existuje. Pros�m, vyberte si in�.';
$string['authenticationoptions'] = 'Mo�nosti overovania';
$string['authinstructions'] = 'Tu m��ete uvies� pokyny pre pou��vate�ov, aby vedeli, ak� pou��vate�sk� meno a heslo maj� pou��va�. Text, ktor� tu vlo��te sa objav� na prihlasovacej str�nke. Ak to tu neuvediete, nebud� zobrazen� �iadne pokyny.';
$string['changepassword'] = 'URL na zmenu hesla ';
$string['changepasswordhelp'] = 'Tu m��ete uvies� URL, na ktorom si Va�i pou��vatelia m��u obnovi� alebo zmeni� pou��vate�sk� meno/heslo, ak ho zabudli. Pre pou��vate�ov to bude zobrazen� ako tla�idlo na prihlasovacej str�nke ich pou��vate�skej str�nky. Ak to tu neuvediete, tla�idlo sa nezobraz�.';
$string['chooseauthmethod'] = 'Vyberte si sp�sob overovania pou��vate�ov: ';
$string['createchangepassword'] = 'Vytvori�, ak ch�ba - je nutn� zmeni�';
$string['createpassword'] = 'Vytvori�, ak ch�ba';
$string['forcechangepassword'] = 'Vy�adova� zmenu hesla';
$string['forcechangepassword_help'] = 'Vy�adova� od pou��vate�ov zmenu hesla pri ich �al�om prihl�sen� do Moodle.';
$string['forcechangepasswordfirst_help'] = 'Vy�adova� od pou��vate�ov zmenu hesla pri ich prvom prihl�sen� do Moodle.';
$string['guestloginbutton'] = 'Prihlasovacie tla�idlo pre hos�a';
$string['infilefield'] = 'Pol��ko vy�adovan� v s�bore';
$string['instructions'] = 'In�trukcie';
$string['locked'] = 'Zamknut�/Zamknut�';
$string['md5'] = 'MD5 �ifrovanie';
$string['passwordhandling'] = 'Zaobch�dzanie s pol��kom s heslom';
$string['plaintext'] = '�ist� text';
$string['showguestlogin'] = 'M��ete skry�, alebo zobrazi�, prihlasovacie tla�idlo pre hos�a na prihlasovacej str�nke.';
$string['stdchangepassword'] = 'Pou�i� �tandardn� str�nku pre zmenu hesla';
$string['stdchangepassword_expl'] = 'Ak V� extern� overovac� syst�m povo�uje zmeny hesla v prostred� Moodle, prepnite t�to vo�bu na \"�no\". Toto nastavenie potla�� funkciu \"URL na zmenu hesla\".';
$string['stdchangepassword_explldap'] = 'Pozn�mka: Ak pou��vate vzdialen� LDAP server, odpor��ame V�m komunikova� cez �ifrovan� SSL spojenie (ldaps://).';
$string['unlocked'] = 'Odomknut�/Odomknut�';
$string['unlockedifempty'] = 'Odomknut�, ak pr�zdne';
$string['update_never'] = 'Nikdy';
$string['update_oncreate'] = 'Pri vytv�ran�';
$string['update_onlogin'] = 'Pri ka�dom prihl�sen�';
$string['update_onupdate'] = 'Pri aktualiz�cii';

?>
