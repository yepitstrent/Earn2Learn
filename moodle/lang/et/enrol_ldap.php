<?PHP // $Id: enrol_ldap.php,v 1.1.2.3 2006/02/06 09:59:41 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.4.4 + (2004083140)


$string['description'] = '<p> Sa v�id kasutada LDAP serverit kontrollimaks oma regristreerimisi.
On eeldatud et sinu LDAP puu sisaldab gruppe mis on markeeritud kursustele ja igal nendel kursustel on olemas liikme sisestused mis on markeeritud �pilastele</p>
<p>Eeldatakse ,et LDAP-s on kursused defineeritud kui grupid kus igal krupil on mitmeid liikme v�lju
(<em>member</em> or <em>memberUid</em>) mis sisaldavad unikaalset kasutaja identifitseerimist</p>
<p>LDAP registreerimise jaoks <strong>peavad</strong> peavad teie �pilased omama kehtivaid Idnumbri v�lju. LDAP grupid peavad omama seda idnumbrit kasutaja v�ljas selleks ,et kasutaja saaks ennast kursusele regitreerida.
Tavaliselt t��tab see h�sti kui sa juba kasutad LDAP autoriseerimist</p>
<p>Registreerimine uuendatakse kui kasutaja logib ennast sisse. Registreerimise s�nkroniseerimise jaoks v�id sa kasutata spetsiaalset skripti. Vaata  <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> Seda pluginit saab seadistada nii ,et see tekitaks LDAP uue grupi ilmumisel automaatselt uusi kursuseid';
$string['enrol_ldap_autocreate'] = 'Kursuseid saab tekitada automaatselt kui on olemas registreerimised kursusele mis veel ei eksisteeri Moodles';
$string['enrol_ldap_autocreation_settings'] = 'Automaatse kursuse tekitamise seaded';
$string['enrol_ldap_bind_dn'] = 'Kui sa tahad kasutada seotud-kasutajat otsimaks kasutajaid siis t�psusta see siin. Midagi sellist nagu \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Parool seotud-kasutaja jaoks';
$string['enrol_ldap_category'] = 'Automaatselt loodud kursuste kategooria';
$string['enrol_ldap_course_fullname'] = 'Valikuline: LDAP v�li kust saab terve nime';
$string['enrol_ldap_course_idnumber'] = 'Markeeri LDAP-s unikaalne identifikaator ,tavaliselt
<em>cn</em> v�i <em>uid</em>. On soovitatav ,et te lukustate v��rtused kui te kasutate automaatset kursuse tekitamist';
$string['enrol_ldap_course_settings'] = 'Kursuse registreerimise seaded';
$string['enrol_ldap_course_shortname'] = 'Valikuline:koht kust LDAP v�li saab l�hikese nime';
$string['enrol_ldap_course_summary'] = 'Valikuline:koht kust LDAP v�li saab summa';
$string['enrol_ldap_editlock'] = 'Lukusta v��rtus';
$string['enrol_ldap_host_url'] = 'T�psusta LDAO host URL formaadis
\'ldap://ldap.myorg.com/\'
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objektiKlass mida kasutatakse kursuste otsimiseks. Tavaliselt  \'posixGroup\'';
$string['enrol_ldap_server_settings'] = 'LDAP serveri seaded';
$string['enrol_ldap_student_contexts'] = 'Konteksti list kus grupid koos �pilaste registreerimised asuvad. Eemalda erinevad kontekstid \';\' m�rgiga. N�iteks \'ou=courses,o=org;ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Liikme atribuut. Kui kasutaja kuulub gruppi. Tavaliselt member\'v�i \'memberUid\'';
$string['enrol_ldap_student_settings'] = '�pilase registreerimise seaded';
$string['enrol_ldap_teacher_contexts'] = 'Konteksti list kus grupp koos �petaja registreerimistega asuvad. Eemalda erinevad kontekstid \';\' m�rgiga. N�iteks \'ou=courses,o=org; ou=others,o=org\' ';
$string['enrol_ldap_teacher_memberattribute'] = 'Liikme atribuut. Kui kasutaja kuulub gruppi. Tavaliselt \'member\' v�i \'memberUid\'';
$string['enrol_ldap_teacher_settings'] = '�petaja registreerimise seaded';
$string['enrol_ldap_template'] = 'Valikuline: Automaatselt loodud kursused suudavad malli kursusest kopeerida seadeid ';
$string['enrol_ldap_updatelocal'] = 'Uuenda lokaalseid andmeid';
$string['enrol_ldap_version'] = 'LDAP protokolli versioon mida sinu server kasutab';
$string['enrolname'] = 'LDAP';

?>
