<?PHP // $Id: auth.php,v 1.2.2.3 2006/02/06 10:00:34 moodler Exp $ 
      // auth.php - created with Moodle 1.2.1 (2004032500)


$string['auth_dbdescription'] = 'Kjo metod� p�rdor nj� tabel� t� nj� databaze t� jashtme p�r t� kontrolluar n�se emri i nj� p�rdoruesi dhe fjal�kalimi i tij jan� t� vlefsh�m. N�se �sht� nj� llogari e re, at�her� informacioni nga fusha t� tjera mund t� kopjohet n� Moodle.';
$string['auth_dbextrafields'] = 'K�to fusha jan� fakultative. Mund t� zgjidhni t� mbushni m� p�rpara disa fusha t� p�rdoruesit t�  Moodle me informacion nga <b>fushat e databaz�s s� jashtme</b> q� specifikoni k�tu.  <br />N�se i lini k�to bosh at�her� do t� p�rdoren default-et .<br />N� t� dyja rastet p�rdoruesi mund t\'i ndryshoj� t� gjitha k�to fusha pasi logohet.';
$string['auth_dbfieldpass'] = 'Emri i fush�s q� p�rmban fjal�kalimet';
$string['auth_dbfielduser'] = 'Emri i fush�s q� p�rmban emrat e p�rdoruesve';
$string['auth_dbhost'] = 'Kompjuteri ku gjendet serveri i databazave';
$string['auth_dbname'] = 'Emri i databaz�s';
$string['auth_dbpass'] = 'Fjal�kalimi q� i korrespondon k�tij emri p�rdoruesi';
$string['auth_dbpasstype'] = 'Specifiko formatin q� p�rdor fusha e fjal�kalimit. Enkriptimi MD5 �sht� i dobish�m dhe p�r t\'u lidhur me aplikime t� tjera web si PostNuke';
$string['auth_dbtable'] = 'Emri i tabel�s s� databaz�s';
$string['auth_dbtitle'] = 'P�rdor nj� databaz� t� jashtme';
$string['auth_dbtype'] = 'Tipi i databaz�s(Shiko <a href=\"../lib/adodb/readme.htm#drivers\">dokumentacioni ADOdb</a> p�r detaje)';
$string['auth_dbuser'] = 'Emri i p�rdoruesit me akses p�r t� lexuar n� databaz�';
$string['auth_emaildescription'] = 'Konfirmimi me email �sht� m�nyra standarte e verifikimit. Kur p�rdoruesi rregjistrohet, duke zgjedhur emrin e vet t� p�rdoruesit dhe fjal�kalimin, nj� email konfirmimi d�rgohet n� adres�n email t� p�rdoruesit. Ky email p�rmban nj� link t� sigurt� t� nj� faqeje ku p�rdoruesi mund t� konfirmoj� llogarin� e vet. Login t� ardhsh�m vet�m kontrollojn� emrin e p�rdoruesit dhe fjal�kalimin me ato q� ruhen n� databaz�n e Moodle.';
$string['auth_emailtitle'] = 'Verifikimi n�p�rmjet email-it';
$string['auth_imapdescription'] = 'Kjo metod� p�rdor nj� server IMAP p�r t� kontrolluar n�se nj� em�r i dh�n� p�rdoruesi dhe nj� fjal�kalim jan� t� sakt�. ';
$string['auth_imaphost'] = 'Adresa e serverit IMAP. P�rdor numrin IP, jo emrin DNS.';
$string['auth_imapport'] = 'Porti i serverit IMAP. Normalisht �sht� 143 ose 993.';
$string['auth_imaptitle'] = 'P�rdor nj� server IMAP';
$string['auth_imaptype'] = 'Tipi i serverit IMAP. Serverat IMAP mund t� ken� m�nyra t� ndryshme verifikimi dhe negocimi.';
$string['auth_ldap_bind_dn'] = 'N�se do t� p�rdor�sh bind-user p�r t� k�rkuar p�rdoruesit, specifikoje k�tu. Di�ka si \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Fjal�kalimi p�r p�rdorues t� verb�r.';
$string['auth_ldap_contexts'] = 'Lista e specifikimeve (konteksti) ku futen p�rdoruesit. Ndaji specifikimet e ndryshme me \';\'. Psh : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'N�se e pajisni krijimin e p�rdoruesit me konfirmimin n�p�rmjet email-it, specifiko kontekstin ku krijohen p�rdoruesit. Ky kontekst duhet t� jet� i ndrysh�m nga p�rdoruesit e tjer� p�r arsye sigurie. Nuk �sht� e nevojshme ta shtosh k�t� kontekst tek variabli ldap_context, Moodle do t� k�rkoj� automatikisht p�rdoruesit n� k�t� kontekst. ';
$string['auth_ldap_creators'] = 'Lista e grupeve n� t� cilat antar�t mund t� krijojn� kurse t� reja. Ngaji grupet e shumfishta multipli me \';\'. Zakonisht di�ka si \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Specifiko server-in LDAP me nj� URL t� tipit \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Specifiko atributin e antarit p�rdorues, kur  p�rdoruesit i p�rkasin nj� grupi. Zakonisht \'member\'';
$string['auth_ldap_search_sub'] = 'Vendos vlerat e &lt;&gt; 0 n�se preferon t� k�rkosh p�rdoruesit sipas n�nkonteksteve.';
$string['auth_ldap_update_userinfo'] = 'Azhorno informacionin e p�rdoruesit (emri, mbiemri, adresa...) nga LDAP te Moodle. Shiko te /auth/ldap/attr_mappings.php p�r informacione mbi rrug�zimin';
$string['auth_ldap_user_attribute'] = 'Atributi i p�rdorur p�r t� k�rkuar emrat e p�rdoruesve. Zakonisht \'cn\'.';
$string['auth_ldapdescription'] = 'Kjo metod� jep autentifikimin n�p�rmjet nj� server-i LDAP t� jasht�m.
M�se emri i p�rdoruesit dhe password-i q� jan� dh�n� jan� t� vlefshme, Moodle krijon nj� p�rdorues t� ri tek baza e t� dh�nave. Ky modul mund t� lexoj� atributet nga LDAP dhe t� mbushi fushat e k�rkuara n� Moodle. N� logimet suksesive, vet�m emri i p�rdoruesit dhe password-i do t� kontrollohen.';
$string['auth_ldapextrafields'] = '<p>K�to fusha jan� opsionale. Mund t� zgjedh�sh q� t� paraplot�sohen disa fusha t� p�rdoruesit t�  Moodle me informacione nga <b>fushat LDAP</b> q� ju i specifikoni k�tu. </p><p>N�se i lini k�to fusha bosh, at�here asgj� nuk do t� trasferohet nga LDAP dhe do t� p�rdoren t� dh�nat default t� Moodle.</p><p>N� rast t� kund�rt, p�rdoruesit  mund ti modifikojn� t� gjitha k�to fusah pasi t� jen� loguar.</p>';
$string['auth_ldaptitle'] = 'P�rdor nj� server LDAP';
$string['auth_manualdescription'] = 'Kjo metod� u heq �do mund�si p�rdoruesve q� t� krijojn� llogarit� e tyre. T� gjitha llogarit� duhet t� krijohen manualisht nga nj� administrator.';
$string['auth_manualtitle'] = 'Vet�mo regjistrime manualisht';
$string['auth_multiplehosts'] = 'Mund t� listohen host-e (kupmjutera t� larg�t) t� shum�fisht� (psh. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Kjo metod� p�rdor nj� server NNTP p�r t� kontrolluar n�se emri i p�rdoruesit dhe password-i �sht� i vlefsh�m.';
$string['auth_nntphost'] = 'Adresa e server-it NNTP. P�rdor numerin IP, jo emrin DNS.';
$string['auth_nntpport'] = 'Porta e server-it  (zakonisht 119 )';
$string['auth_nntptitle'] = 'P�rdor nj� server NNTP';
$string['auth_nonedescription'] = 'P�rdoruesit mund t� regjistrohen dhe t� krijojn� llogari t� vlefshme menj�her�, pa autentifikimin nga nj� server i jasht�m dhe pa konfirmim n�p�rmjet email-it. Kujdes n� p�rdorimin e k�tij opsioni - mendo p�r sigurin� dhe problemet e  administrimit q� mund t� shkaktoj� ky opsion. ';
$string['auth_nonetitle'] = 'Pa autentfikim';
$string['auth_pop3description'] = 'Kjo metod� p�rdor nj� server POP3 p�r t� kontrolluar n�se emri i p�rdoruesit dhe password-i �sht� i vlefsh�m.';
$string['auth_pop3host'] = 'Adresa e server-it POP3. P�rdor numerin IP, dhe jo emrin DNS.';
$string['auth_pop3port'] = 'Porta e server-it (zakonisht 110 )';
$string['auth_pop3title'] = 'P�rdor server POP3';
$string['auth_pop3type'] = 'Tipi i server-it. N�se server-i juaj p�rdor �ertifikime sigurie, zgjidh pop3cert.';
$string['auth_user_create'] = 'Mund�so krijimin e p�rdoruesvete';
$string['auth_user_creation'] = 'P�rdoruesit e rinj (anonim�) mund t� krijojn� llogari p�rdoruesish te autentifikuesi i jash�m dhe t� konfirmohen n�p�rmjet email-it. N�se e mund�son k�t�, mbaje mend q� t� konfigurosh edhe  opsionet specifike t� modulit p�r krijimin e p�rdoruesve.';
$string['auth_usernameexists'] = 'Emri i zgjedhur p�r p�rdorues �sht� tashm� i p�rdorur. Zgjidhni nj� tjet�r. ';
$string['authenticationoptions'] = 'Opsionet e autentifikimit';
$string['authinstructions'] = 'K�tu mund t� jap�sh instruksione p�r p�rdoruesit e tu, k�shtu ata mund t� m�sojn� se cilin em�r p�rdoruesi dhe password-i duhet t� p�rdorin. Teksti q� ju futni k�tu do t� shfaqet n� faqen e login-it. N�se e l� bosh nuk do t� jepen instruksione.';
$string['changepassword'] = 'Ndrysho password-in URL';
$string['changepasswordhelp'] = 'K�tu mund t� specifikosh se ku mund t� rikuperojn� ose ndryshojn� p�rdoruesit username/password n�se i kan� harruar. Kjo do tu jepet p�rdoruesve si nj� buton n� faqen e logimit dhe n� faqen e p�rdoruesit. N�se e l� bosh butoni nuk do t� shfaqet.';
$string['chooseauthmethod'] = 'Zgjidhi nj� metod�  autentifikimi:';
$string['guestloginbutton'] = 'Butoni i logimit si guest ';
$string['instructions'] = 'Instruksione';
$string['md5'] = 'Kodimi MD5';
$string['plaintext'] = 'Tekst i thjesht�';
$string['showguestlogin'] = 'Mund ta fsheh�sh ose ta shfaq�sh butonin e logimit si vizitor(mysafir) n� faqen e logimit.';

?>
