<?PHP // $Id: auth.php,v 1.2.2.3 2006/02/06 10:00:34 moodler Exp $ 
      // auth.php - created with Moodle 1.3.1 (2004052501)


$string['auth_dbdescription'] = 'S to izbiro dolo�ite eksterno bazo podatkov za preverjanje veljavnosti uporabni�kega imena in gesla. Pri novem ra�unu za portal (moodle) je mo�no obstoje�e podatke iz baze prenesti (prekopirati).';
$string['auth_dbextrafields'] = 'Ta polja so izbirna. Vrednosti polj v portalu lahko vnaprej zapolnite <b>z vrednostmi polj v eksterni bazi</b>. �e pustite polja prazna, bodo vpisane privzete vrednosti. Po prijavi sme uporabnik spreminjati vsa polja.';
$string['auth_dbfieldpass'] = 'Stolpec, ki vsebuje geslo';
$string['auth_dbfielduser'] = 'Stolpec, ki vsebuje uporabni�ko ime';
$string['auth_dbhost'] = 'Naziv ra�unalnika (podatkovnega stre�nika)';
$string['auth_dbname'] = 'Naziv (ime) baze podatkov';
$string['auth_dbpass'] = 'Geslo za navedeno uporabni�ko ime';
$string['auth_dbpasstype'] = 'Dolo�ite format uporabljenega gesla. Enkripcija po algoritmu MD5 je koristna za povezovanje z drugimi spletnimi re�itvami kot je npr. PostNuke';
$string['auth_dbtable'] = 'Naziv tabele v bazi ';
$string['auth_dbtitle'] = 'Uporaba eksterne baze';
$string['auth_dbtype'] = 'Tip baze podatkov (glej podrobnosti: <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>)';
$string['auth_dbuser'] = 'Uporabni�ko ime s pravico branja baze';
$string['auth_emaildescription'] = 'Potrjevanje z epo�to je privzeti na�in avtentikacije.  Ko uporabnik vnese novi ime in geslo, portal po�lje epo�to na navedeni naslov. Sporo�ilo vsebuje vareno povezavo na stran, kjer uporabnik potrdi svoj novi ra�un. Pri vseh naslednjih prijavah portal preverja ime in geslo v svoji bazi.';
$string['auth_emailtitle'] = 'Na epo�ti temelje�a avtentikacija';
$string['auth_imapdescription'] = 'Veljavnost uporabni�kega imena in gesla preveri stre�nik IMAP.';
$string['auth_imaphost'] = 'Naslov stre�nika IMAP. Uporabite �tevilko IP - ne DNS.';
$string['auth_imapport'] = '�tevilka vrat stre�nika IMAP (obi�ajno 143 ali 993).';
$string['auth_imaptitle'] = 'Uporabi stre�nik IMAP';
$string['auth_imaptype'] = 'Tip stre�nika IMAP.Stre�niki IMAP lahko uporabljajo razli�ne na�ine avtentikacije in dogovarjanja.';
$string['auth_ldap_bind_dn'] = '�e boste uporabljali LDAP, dolo�ite uporabnika npr. \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Geslo za LDAP.';
$string['auth_ldap_contexts'] = 'Dolo�ite sezname uporabnikov. Sezname lo�ite s \';\'. Primer: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = '�e ste izbrali potrjevanje ra�unov preko epo�te, dolo�ite �e mesto kreiranja. To mesto mora biti razli�no od drugih uporabnikov (iz varnostnih razlogov). Tega niza ni potrebno dodajati v spremenljivko ldap_context-variable, saj bo portal samodejno iskal uporabnike na tem mestu.';
$string['auth_ldap_creators'] = 'Seznam skupin uporabnikov, ki smejo kreirati nove predmete (npr.\'cn=teachers,ou=staff,o=myorg\'). Ve� seznamov lo�ite s \';\'';
$string['auth_ldap_host_url'] = 'Dolo�ite URL LDAP stre�nika (npr. \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Dolo�ite atribute �lana skupine (obi�ajno \'member\')';
$string['auth_ldap_search_sub'] = 'Dolo�ite vrednost <> 0 kadar i��ete uporabnika v podkontekstu.';
$string['auth_ldap_update_userinfo'] = 'Spremeni podatke o uporabniku (ime, priimek, naslov..) na portalu iz stre�nika LDAP (podrobnosti preslikave na  /auth/ldap/attr_mappings.php)';
$string['auth_ldap_user_attribute'] = 'Atribut za imenovanje/iskanje uporabnika (obi�ajno \'cn\').';
$string['auth_ldap_version'] = 'Verzija protokola LDAP na stre�niku.';
$string['auth_ldapdescription'] = 'Ta na�in omogo�a avtentikacijo preko stre�nika LDAP.
                                  �e je vpisano uporabni�ko ime in geslo veljavno, portal kreira novega uporabnika 
                                  v svoji bazi. Ta modul bere uporabnikove atribute v LDAP in jih napolni v polja portala. 
                                  Pri naslednjih prijavah se preverjajo l ime in geslo.';
$string['auth_ldapextrafields'] = 'Ta polja so izbirna.  Vnaprej prenesene vrednosti iz <b>LDAP polj</b> dolo�ite tukajt. <br />�e pustite polja prazna, se ni� ne prenese. Vpisane bodo privzete vrednosti.<br />V vsakem primeru bodo uporabniki smeli spreminjati svoje podatke ob naslednjih prijavah.';
$string['auth_ldaptitle'] = 'Uporabi stre�nik LDAP';
$string['auth_manualdescription'] = 'S tem pristopom uporabniki ne morejo kreirali lastnih ra�unov. Vse ra�une mora ro�no kreirati administrator.';
$string['auth_manualtitle'] = 'Le ro�ni uporabni�ki ra�uni';
$string['auth_multiplehosts'] = 'Dolo�ite lahko ve� stre�nikov(npr. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Veljavnost uporabni�kega imena in gesla preveri stre�nik NNTP.';
$string['auth_nntphost'] = 'Naslov stre�nika NNTP. Uporabite �tevilko IP - ne DNS.';
$string['auth_nntpport'] = '�tevilka vrat stre�nika NNTP (obi�ajno 119).';
$string['auth_nntptitle'] = 'Uporabi stre�nik  NNTP.';
$string['auth_nonedescription'] = 'Uporabniki takoj pridobijo uporabni�ki ra�un - brez avtentikacije v eksterni bazi in brez potrjevanja z epo�to.  Ta pristop ni priporo�ljiv iz varnostnih in administrativnih razlogov.';
$string['auth_nonetitle'] = 'Brez avtentikacije';
$string['auth_pop3description'] = 'Veljavnost uporabni�kega imena in gesla preveri stre�nik POP3';
$string['auth_pop3host'] = 'Naslov stre�nika POP3. Uporabite �tevilko IP - ne DNS.';
$string['auth_pop3port'] = '�tevilka vrat stre�nika POP3 (obi�ajno 110).';
$string['auth_pop3title'] = 'Uporabi stre�nik POP3';
$string['auth_pop3type'] = 'Tip stre�nika. �e stre�nik uporablja varnostni certifikat, izberite pop3cert.';
$string['auth_user_create'] = 'Kreiranje uporabnikov omogo�eno';
$string['auth_user_creation'] = 'Novi (anonimni) uporabniki smejo kreirati ra�une na ekstrenih avtentikacijskih virih in jih potrjevati z epo�to. �e to dovolite, dolo�ite �e posebne opcije za kreiranje uporabnikov';
$string['auth_usernameexists'] = 'Izbrano ime �e obstaja. Dolo�ite novega.';
$string['authenticationoptions'] = 'Izbire avtentikacije';
$string['authinstructions'] = 'Na tem mestu napi�ite navodila za kreiranje uporabni�kih ra�unov. To besedilo se prika�e na strani za prijavo.  �e ne napi�ete navodil, potem bo stran prazna.';
$string['changepassword'] = 'Spremeni geslo URL';
$string['changepasswordhelp'] = 'Dolo�ite mesto za obnovo ali spremembo imena/gesla, �e ga/ju uporabnik pozabi. Na strani za prijavo se izpi�e gumb. �e pustite prazno, se gumb ne bo izpisal.';
$string['chooseauthmethod'] = 'Izberite na�in avtentikacije: ';
$string['guestloginbutton'] = 'Gumb za prijavo gosta';
$string['instructions'] = 'Navodila';
$string['md5'] = 'Enkripcija MD5';
$string['plaintext'] = 'tekst';
$string['showguestlogin'] = 'Gumb za prijavo gosta lahko skrijete ali prika�ete na vstopni strani.';

?>
