<?PHP // $Id: enrol_ldap.php,v 1.3.2.4 2006/02/06 10:00:35 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5 + (2005060201)


$string['description'] = '<p>Du kan anv�nda en LDAP-server f�r att styra Dina registreringar. Utg�ngspunkten �r att Ditt LDAP-tr�d inneh�ller grupper som visar en karta till kurserna och att var och en av dessa grupper/kurser har kartor �ver medlemsdata som visar v�gen till studenterna/eleverna/deltagarna/de l�rande</p><p>Utg�ngspunkten �r att kurser �r definierade som grupper i LDAP d�r varje grupp har ett flertal f�lt f�r medlemsskap (<em>member</em> eller <em>memberUid</em>) som inneh�ller en unik identifiering av anv�ndaren.</p><p>F�r att anv�nda LDAP-registrering <strong>m�ste</strong> Dina anv�ndare ha giltiga f�lt f�r ID-nummer. LDAP-grupperna m�ste ha detta ID-nummer i f�ltet f�r medlemmar f�r att man ska kunna registrera en anv�ndare p� en kurs. Detta kommer i normalfallet att fungera bra om Du redan anv�nder autenticering via LDAP.</p><p>Registreringarna kommer att uppdateras n�r anv�ndaren loggar in. Du kan ocks� k�ra ett skript f�r att synkronisera registreringarna. Titta i <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Denna plugin kan ocks� st�llas in s� att den automatiskt skapar nya kurser n�r det dyker upp nya grupper i LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurser kan skapas automatiskt om det finns registreringar p� en kurs som �nnu inte finns i Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Inst�llningar f�r att skapa kurser automatiskt.';
$string['enrol_ldap_bind_dn'] = 'Om Du vill anv�nda \"bind\"-anv�ndare f�r att s�ka anv�ndare s� ska Du ange detta h�r. N�gonting i stil med \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'L�senord f�r \'bind\'-anv�ndare';
$string['enrol_ldap_category'] = 'Kategorin f�r automatiskt skapade kurser';
$string['enrol_ldap_course_fullname'] = 'Valfritt: LDAP-f�lt f�r att h�mta det kompletta namnet fr�n';
$string['enrol_ldap_course_idnumber'] = 'Karta som visar var den unika identifieraren i LDAP finns, vanligtvis <em>cn</em> or <em>uid</em>. Du rekommenderas att l�sa detta  v�rde om Du anv�nder automatiskt skapande av kurser.';
$string['enrol_ldap_course_settings'] = 'Inst�llningar f�r registrering p� kurser';
$string['enrol_ldap_course_shortname'] = 'Valfritt: LDAP-f�lt att h�mta kortnamnet fr�n.';
$string['enrol_ldap_course_summary'] = 'Valfritt: LDAP-f�lt att h�mta sammanfattningen fr�n.';
$string['enrol_ldap_editlock'] = 'L�sets v�rde';
$string['enrol_ldap_general_options'] = 'Allm�nna alternativ';
$string['enrol_ldap_host_url'] = 'Ange LDAP-v�rden i URL-form som \'ldap://ldap.myorg.com/\' 
eller \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass som anv�nds f�r att s�ka kurser. Vanligtvis \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'S�k efter medlemskap i grupper fr�n underliggande sammanhang';
$string['enrol_ldap_server_settings'] = 'Inst�llningar f�r LDAP-server';
$string['enrol_ldap_student_contexts'] = 'Lista �ver sammanhang d�r grupper med registreringar av studenter/elever/deltagare/l�rande �r placerade. Skilj olika sammanhang �t med \';\'. T.ex. \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Attribut till medlem, n�r anv�ndare tillh�r (�r registrerade i) en grupp. Vanligtvis \'member\'
eller \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Inst�llningar f�r registrering av student/elev/deltagare/l�rande';
$string['enrol_ldap_teacher_contexts'] = 'Lista �ver sammanhang d�r grupper med registreringar av (distans)l�rare har placerats. Skilj olika sammanhang �t med \';\'. Till exempel: 
\'ou=kurser,o=org; ou=andra,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Attribut till medlem (member), n�r anv�ndare tillh�r (�r registrerade i) en grupp. Vanligtvis \'medlem\' (member) eller \'medlemAnvid\'
(memberUid).';
$string['enrol_ldap_teacher_settings'] = 'Inst�llningar f�r registrering av (distans)l�rare';
$string['enrol_ldap_template'] = 'Valfritt: automatiskt skapade kurser kan kopiera sina inst�llningar fr�n en kursmall.';
$string['enrol_ldap_updatelocal'] = 'Uppdatera lokala data';
$string['enrol_ldap_version'] = 'Detta �r den version av LDAP-protokollet som DIn server anv�nder.';
$string['enrolname'] = 'LDAP';

?>
