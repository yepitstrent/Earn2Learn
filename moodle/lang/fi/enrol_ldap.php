<?PHP // $Id: enrol_ldap.php,v 1.1.2.4 2006/02/06 09:59:43 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5.2 + (2005060222)


$string['description'] = '<p>Voit k�ytt�� LDAP-palvelinta hallinnoidaksesi ilmoittautumisia. T�ll�in oletetaan ett� LDAP-puusi sis�lt�� ryhm�t, jotka liittyv�t kursseihin ja ett� jokainen n�ist� ryhmist�/kursseista tulee sis�lt�m��n j�senyysrekisterin, johon oppilaat liitet��n.</p>

<p>Oletetaan my�s, ett� kurssit m��ritell��n ryhmin� LDAPss� ja ett� jokaisessa ryhm�ss� on useita j�senyyskentti� (<em>member</em> or <em>memberUid</em>), jotka sis�lt�v�t yksil�llisen identiteetin k�ytt�jill�.</p>

<p>K�ytt��ksesi LDAP-ilmoittautumisia k�ytt�jill�si <strong>t�ytyy</strong> olla kelvollinen id-numero kent�ss��n. LDAP-ryhmill� t�ytyy olla t�m� id-numero j�senyyskent�ss��n, jotta k�ytt�j� voi liitty� kurssille. Yleens� t�m� toimii hyvin, jos k�yt�t jo LDAP-varmennusta.</p>

<p>Ilmoittautumiset p�ivitet��n kun k�ytt�j�t kirjautuvat sis��n. Voit my�s ajaa scriptin, joka pit�� ilmoittautumiset synkronoituina. Se l�ytyy  <em>enrol/ldap/enrol_ldap_sync.php</em> polulta.</p>

<p>T�m� laajennus voidaan my�s asettaa luomaan uusia kursseja kun LDAPhen luodaan uusia ryhmi�.</p>';
$string['enrol_ldap_autocreate'] = 'Kurssit voidaan luoda automaattisesti, jos sellaisella kurssille on ilmoittautumisia, jota ei viel� ole Moodlessa.';
$string['enrol_ldap_autocreation_settings'] = 'Automaattisen kurssin luonnin asetukset';
$string['enrol_ldap_bind_dn'] = 'Jos haluat k�ytt�� bind-useria etsi�ksesi k�ytt�ji�, merkitse se t�h�n. Esimerkki:  \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Salasana �bind-user�ille.';
$string['enrol_ldap_category'] = 'Kategoria automaattisesti luoduille kursseille.';
$string['enrol_ldap_course_fullname'] = 'Valinnainen: LDAP-kentt� jolta haetaan koko nimi.';
$string['enrol_ldap_course_idnumber'] = 'Linkit� yksil�lliseen tunnukseen LDAPssa, yleens�  <em>cn</em> tai <em>uid</em>. On suositeltavaa lukita arvo, jos k�yt�t automaattista kurssin luontia.';
$string['enrol_ldap_course_settings'] = 'Kurssin ilmoittautumisen asetukset';
$string['enrol_ldap_course_shortname'] = 'Valinnainen: LDAP-kentt� jolta haetaan lyhyt nimi.';
$string['enrol_ldap_course_summary'] = 'Valinnainen: LDAP-kentt� jolta haetaan yhteenveto.';
$string['enrol_ldap_editlock'] = 'Lukitse arvo';
$string['enrol_ldap_general_options'] = 'Yleiset asetukset';
$string['enrol_ldap_host_url'] = 'M��rit� LDAP-palvelin URL-muodossa. Malli:  \'ldap://ldap.myorg.com/\'tai \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objektiLuokka jolla etsitt�n kursseilta. Yleens� \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Etsi ryhmien j�senyyksi� alakonteksteista';
$string['enrol_ldap_server_settings'] = 'LDAP-palvelimen asetukset';
$string['enrol_ldap_student_contexts'] = 'Lista konteksteista, joissa ryhm�t joille on ilmoittautunut oppilaita sijaitsevat. Eri kontekstit erotetaan puolipisteell� �;�. Esimerkki: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'J�senominaisuus, kun k�ytt�j� kuuluu (on ilmoittautunut) ryhm��n. Yleens� �member� tai �memberUid�.';
$string['enrol_ldap_student_settings'] = 'Oppilaan ilmoittautumisen asetukset';
$string['enrol_ldap_teacher_contexts'] = 'Lista konteksteista, joissa ryhm�t joille on ilmoittautunut opettaja, sijaitsee. Eri kontekstit erotetaan puolipisteell� �;�. Esimerkki: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'J�senominaisuus, kun k�ytt�j� kuuluu (on ilmoittautunut) kurssille. Yleens� �member� tai �memberUid�.';
$string['enrol_ldap_teacher_settings'] = 'Opettajan ilmoittautumisen asetukset';
$string['enrol_ldap_template'] = 'Valinnainen: automaattisesti luodut kurssit voivat kopioida asetuksensa k�ytt�en pohjana mallikurssin asetuksia.';
$string['enrol_ldap_updatelocal'] = 'P�ivit� paikalliset tiedot';
$string['enrol_ldap_version'] = 'LDAP-protokollan versio, jota palvelimesi k�ytt��.';
$string['enrolname'] = 'LDAP';

?>
