<?PHP // $Id: auth.php,v 1.4.2.3 2006/02/06 09:59:41 moodler Exp $ 
      // auth.php - created with Moodle 1.4.4 + (2004083140)


$string['auth_common_settings'] = 'Tavalised seaded';
$string['auth_data_mapping'] = 'Andmete kaardistamine';
$string['auth_dbdescription'] = 'See meetod kasutab v�lise andmebaasi tabelit, et kontrollida, kas antud kasutajanimi ja salas�na kehtivad. Kui tegemist on uue kontoga, siis v�ib Moodle\'isse kopeerida infot ka mujalt.';
$string['auth_dbextrafields'] = 'Need v�ljad on valikulised. Otsustage, kas soovite eelt�ita m�ned Moodle\'i v�ljad infoga <b>v�lisandmebaasidest v�ljadelt</b> mida t�psustate siin. <br />Kui j�tate need t�hjaks, kasutatatkse vaikeseadeid.<br />M�lemal juhul on kasutajal v�imalus redigeerida k�iki v�lju, kui ta on sisse loginud.';
$string['auth_dbfieldpass'] = 'Salas�na sisaldava v�lja nimi';
$string['auth_dbfielduser'] = 'Kasutajanime sisaldava v�lja nimi';
$string['auth_dbhost'] = 'Andmebaasi serveri arvuti.';
$string['auth_dbname'] = 'Andmebaasi enese nimi';
$string['auth_dbpass'] = 'Antud kasutajanimega sobiv salas�na.';
$string['auth_dbpasstype'] = 'T�psusta formaati, mida salas�na v�li kasutab.  MD5 kr�pteerimine on kasulik, et �hendada teiste tavaliste veebirakendustega nagu PostNuke';
$string['auth_dbtable'] = 'Tabeli nimi andmebaasis';
$string['auth_dbtitle'] = 'V�lise andmebaasi kasutamine';
$string['auth_dbtype'] = 'Andmebaasi t��p(Vaata <a hrefF="../lib/adodb/readme.htm#drivers">ADOdb dokumentatsiooni</a>, et detaile t�psustada)';
$string['auth_dbuser'] = 'Kasutajanimi andmebaasist lugemiseks';
$string['auth_editlock'] = 'Luku v��rtus';
$string['auth_editlock_expl'] = '<p><b>Lock value:</b> Sissel�lituna v�ldib Moodle kasutajaid ja administraatorit toimetamast v�lja otseselt. Kasuta seda v�imalust kui sa hoiad v�lja v�lises autoriseerimis s�steemis </p>';
$string['auth_emaildescription'] = 'Emaili kinnitus on vaikimisi autentsuse kontrolli meetod. Kui kasutaja registreerub, valides omale uue kasutajanime ja salas�na, saadetakse tema emaili aadressile kinnituskiri. See email sisaldab turvalist linki lehele, kus kasutaja saab oma konto kinnitada. Edasipidised logimised �ksnes kontrollivad kasutajanime ja salas�na, v�rreldes neid Moodle\'i andmebaasis s�ilitatavatega.';
$string['auth_emailtitle'] = 'Emailil p�hinev autentsuse kontroll';
$string['auth_fccreators'] = 'Grupi list kes on lubatud luua uusi kursuseid. Hoia mitmeid gruppe lahus \';\' s�mboliga. Nimed peavad vastama \"esimese klassi\" serveriga nimedega. S�steem on t�he tundlik';
$string['auth_fcdescription'] = 'See meetod kasutab \"esimese klassi\" serverit kontrollimaks kas antud kasutajanimi ja parool on �iged';
$string['auth_fcfppport'] = 'Serveri port (3333 on k�ige tavalisem)';
$string['auth_fchost'] = '\"Esimese klassi\" serveri aadress. Kasuta IP numbrit v�i DNS nime';
$string['auth_fcpasswd'] = 'Parool �laloeva  konto jaoks';
$string['auth_fctitle'] = 'Kasuta \"esimese klassi\" serverit';
$string['auth_fcuserid'] = 'Kasutaja id \"esimese klassi\" konto privileeg \'Alamadministraator\' seatud';
$string['auth_imapdescription'] = 'See meetod kasutab IMAP serverit kontrollimaks, kas antud kasutajanimi ja salas�na kehtivad.';
$string['auth_imaphost'] = 'IMAP serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_imapport'] = 'IMAP serveri pordi number. Tavaliselt on see 143 v�i  993.';
$string['auth_imaptitle'] = 'Kasuta IMAP serverit';
$string['auth_imaptype'] = 'IMAP serveri t��p.  IMAP serveritel v�ib olla erinevat t��pi autentsuse kontrolli ja loovutamist.';
$string['auth_ldap_bind_dn'] = 'Kui soovid kasutada bind-user kasutajate otsimiseks,t�psusta see siin. N�iteks \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Salas�na bind-user tarvis.';
$string['auth_ldap_bind_settings'] = 'Sidumise seaded';
$string['auth_ldap_contexts'] = 'Kontekstide loend, kus kasutajad paiknevad. Eralda erinevad kontekstid semikooloniga \';\'. N�iteks: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Kui v�imaldad kasutajate tekitamist emaili konfiguratsioonis, t�psusta kontekst, milles kasutajaid tekitatakse. See kontekst peaks erinema teiste kasutajate omast, et ei tekiks turvaprobleeme. Seda konteksti pole vaja lisada ldap_context-muutujale, Moodle otsib automaatselt sellest kontekstist kasutajaid.';
$string['auth_ldap_creators'] = 'Gruppide loend, mille liikmetel on �igus tekitada uusi kursusi. Eralda erinevad grupid semikooloniga \';\'. Enamasti midagi sellist \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Vali \"ei\" kui soovid v�lja l�litada aegunud parooli kontrolli v�i LDAP aegunud paroolide kontrolli otse LDAP-st';
$string['auth_ldap_expiration_warning_desc'] = 'P�evade number enne kui kuvatakse aegunud parooli hoiatus ';
$string['auth_ldap_expireattr_desc'] = 'Valikuline: L�litab v�lja ldap-atribuudi mis hoiab parooli aegumise aja';
$string['auth_ldap_graceattr_desc'] = 'Valikuline: L�litab v�lja gracelogimise atribuudi';
$string['auth_ldap_gracelogins_desc'] = 'L�lita sisse LDAP gracelogimise tugi. Peale parooli aegumist saab kasutaja sisse logida nii kaua kui gracelogi �ldarv on 0. Selle seade sisse l�litamine kuvab grace logimise teade kui parool on aegunud';
$string['auth_ldap_host_url'] = 'T�psusta LDAP host URL-formaadis nagu \'ldap://ldap.myorg.com/\' v�i \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_login_settings'] = 'Sisselogimise seaded';
$string['auth_ldap_memberattribute'] = 'T�psusta kasutaja liikme atribuut, kui kasutajad kuuluvad gruppi. Enamasti \'member\'';
$string['auth_ldap_objectclass'] = 'Valikuline: L�litab v�lja objekti klassi mida kasutatakse kasutajate otsinguks. Tavaliselt sa ei pea seda muutma';
$string['auth_ldap_opt_deref'] = 'M��rab kuidas otsingu ajal aliast kasutatakse. Vali �ks j�gnevatest v��rtustest. No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP parooli aegumise seaded';
$string['auth_ldap_search_sub'] = 'M��ra v��rtus <> 0 kui soovid kasutajaid alakontekstidest otsida.';
$string['auth_ldap_server_settings'] = 'LDAP serveri seaded';
$string['auth_ldap_update_userinfo'] = 'V�rskenda kasutajanifot (eesnimi, perekonnanimi, aadress,..) alates LDAP-ist kuni Moodle\'ni. Vaata /auth/ldap/attr_mappings.php kaardistamisinfo saamiseks';
$string['auth_ldap_user_attribute'] = 'Atribuut kasutajate nimetamiseks / otsimiseks. Enamasti \'cn\'.';
$string['auth_ldap_user_settings'] = 'Kasutaja otsimise seaded';
$string['auth_ldap_user_type'] = 'Vali kuidas kasutajaid LDAP-s hoitakse. See seade m��rab ka selle kui pikk on logimise aeg, grace logimised ja kasutaja loomised t��tavad';
$string['auth_ldap_version'] = 'Sinu serveri LDAP protokolli versioon.';
$string['auth_ldapdescription'] = 'See meetod tagab autentsuse kontrolli v�rreldes v�lise LDAP serveriga.
Kui antud kasutajanimi ja salas�na kehtivad, tekitab Moodle uue kasutajakande oma andmebaasi.See moodul oskab lugeda kasutaja atribuute LDAP-ist ja eelt�ita soovitud v�ljad Moodle\'is.  Logied j�lgimiseks kontrollitakse �ksnes kasutajanime ja salas�na.';
$string['auth_ldapextrafields'] = 'Need v�ljad pole kohustuslikud. V�id otsustada eelt�ita m�ned Moodle\'I kasutajav�ljad infoga <b>LDAP v�ljadelt</b> mille t�psustad siin. <br /> Kui j�tad need v�ljad t�hjaks, ei kanta LDAP\'ist midagi �le ja selle asemel kasutatakse Moodle\'I vaikeseadeid. <br /> M�lemil puhul tohib kasutaja redigeerida k�iki neid v�lju, kui ta on sisse loginud.';
$string['auth_ldaptitle'] = 'Kasuta LDAP serverit';
$string['auth_manualdescription'] = 'See meetod v�tab kasutajatelt igasuguse v�imaluse ise endale kontosid tekitada. K�ik kontod tuleb tekitada k�sitsi admin. kasutaja poolt.';
$string['auth_manualtitle'] = 'Kontod ainult k�sitsi';
$string['auth_multiplehosts'] = 'Mitu hosti saad kirjeldada lihtsalt (n�iteks host1.ee;host2.ee;host3.ee)';
$string['auth_nntpdescription'] = 'See meetod kasutab NNTP serverit, et kontrollida, kas antud kasutajanimi ja salas�na kehtivad.';
$string['auth_nntphost'] = 'NNTP serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_nntpport'] = 'Serveri port (119 on k�ige tavalisem)';
$string['auth_nntptitle'] = 'Kasuta NNTP serverit';
$string['auth_nonedescription'] = 'Kasutaja v�ib end sisse kirjutada ja tekitada kehiva konto otsekohe, ilma autentsuse kontrollita v�lisserveri suhtes ja ilma emaili teel kinnitamata. Selle v�imaluse kasutamisel ole ettevaatlik - m�tle turvalisusele ja haldamisprobleemidele, mida see v�ib tekitada.';
$string['auth_nonetitle'] = 'Ilma autentsuse kontrollita';
$string['auth_pamdescription'] = 'See meetod kasutab PAM-i et saada ligip��s kasutaja nime p�ritolule. Sa pead installeerima <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> kui soovid seda moodulit kasutada';
$string['auth_pamtitle'] = 'Pam( Sissel�litatav Autentne Moodul)';
$string['auth_passwordisexpired'] = 'Sinu parool on aegunud. Kas sa soovid vahetada oma parooli n��d?';
$string['auth_passwordwillexpire'] = 'Sinu parool aegu $a p�rast. Kas sa soovid oma parooli praegu vahetada?';
$string['auth_pop3description'] = 'See meetod kasutab POP3 serverit kontrollimaks, kas antud kasutajanimi ja salas�na kehtivad.';
$string['auth_pop3host'] = 'POP3 serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_pop3mailbox'] = 'Mailboksi nimi millega �ritatkse �hendust luua (tavaliselt inbox)';
$string['auth_pop3port'] = 'Serveri port (110 on k�ige tavalisem)';
$string['auth_pop3title'] = 'Kasuta POP3 serverit';
$string['auth_pop3type'] = 'Serveri t��p. Kui sinu server kasutab turvasertifikaati, vali pop3cert.';
$string['auth_updatelocal'] = 'Uuedne lokaalseid andmeid';
$string['auth_updatelocal_expl'] = '<p><b>Uuenda lokaalseid andmeid:</b> Sissel�lituna on see v�li uuendatud iga kord kui kasutaja ennast sisse logib. V�ljad mis lokaalselt ennast uuendavad peaksid olema v�lja l�litatud</p>';
$string['auth_updateremote'] = 'Uuenda v�liseid andmeid';
$string['auth_updateremote_expl'] = '<p><b>Uuenda v�liseid andmeid:</b> Sissel�lituna on toimub uuendus siis kui kaustaja kirje on uuendatud. V�li peaks olema avatud ,et lubada toimetamist</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> V�lise LDAP andmete uuendamine vajab  binddn ja bindpw seadistamist. Ta ei hoia alles mitme v��rtusega atribuute ja uuendusel �lej��nus v��rtused eemaldatakse </p>';
$string['auth_user_create'] = 'Luba tekitada kasutajaid';
$string['auth_user_creation'] = 'Uued (anon��msed) kasutajad v�ivad luua kasutajakontosid v�lise autentsuse kontrolli allika kaudu ja saada kinnituse emaili teel. Kui seda lubad, �ra unusta konfigureerida moodulspetsiifilisi valikuid kasutaja loomiseks.';
$string['auth_usernameexists'] = 'Valitud kasutajanimi on juba olemas. Palun vali uus.';
$string['authenticationoptions'] = 'Autentsuse kontrooli valikud';
$string['authinstructions'] = 'Siin v�id instrueerida kasutajaid, et nad teaksid, millist kasutajanime ja salas�na nad peaksid kasutama. Siia sisestatud tekst ilmub logimislehel. Kui j�tad selle v�lja t�hjaks, ei tr�kita mingeid instruktsioone.';
$string['changepassword'] = 'Muuda salas�na URL';
$string['changepasswordhelp'] = 'Siin v�id t�psustada asukohta, kus kasutajad saavad oma kasutajanime / salas�na taastada, kui see on ununenud. See antakse kasutajale klahvi kujul logimislehel ja tema kasutajalehel. Kui j�tad selle t�hjaks, siis klahvi ei tr�kita.';
$string['chooseauthmethod'] = 'Vali autentsuse kontrooli meetod: ';
$string['forcechangepassword'] = 'Sunni parooli vahetama';
$string['forcechangepassword_help'] = 'Sunni kasutajat parooli vahetama j�rgmise Moodle sisse logimise ajal';
$string['forcechangepasswordfirst_help'] = 'Sunni kasutajat parooli vahetama esimese Moodle sisse logimise ajal';
$string['guestloginbutton'] = 'K�lalise logimisklahv';
$string['instructions'] = 'Instruktsioonid';
$string['md5'] = 'MD5 kr�ptimine';
$string['plaintext'] = 'Lihttekst';
$string['showguestlogin'] = 'V�id peita v�i n�idata k�lalisele logimisklahvi logimislehel.';
$string['stdchangepassword'] = 'Kasuta standartset parooli muutmist';
$string['stdchangepassword_expl'] = 'Kui v�lise autentimise s�steem lubab vahetada paroole l�bi Moodle siis l�lita see \"jah\" peale.
See seade l�litav v�lja \'Change Password URL\' funktsiooni';
$string['stdchangepassword_explldap'] = 'T�helepanu: On soovitatav ,et sa kasutad LDAP-d �le SSL-i kr�pteeritud tunneli (ldaps://) Seda juhul kui LDAP server on eemal';

?>
