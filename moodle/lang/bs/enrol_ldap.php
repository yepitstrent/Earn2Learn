<?PHP // $Id: enrol_ldap.php,v 1.1.2.3 2006/02/06 09:59:29 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.4.3 + (2004083131)


$string['description'] = '<p>Mo�ete koristiti LDAP server za kontrolu Va�eg upisa. To simulira Va� LDAP mre�u da obuhvati grupe planirane za kurs, i svaka od tih grupa / kurseva �e imati broj �lanova u kolonama planiranih kao studenati.</p>

<p>To simulira te kurseve da se defini�u kao grupe u LDAP, sa svakom grupom imate vi�estruko polje broja �lanova (<em>member</em> or <em>memberUid</em>) to obuhvata jedinsvenu indentifikaciju za korisnike.</p>

<p>Koriste�i LDAP upis, Va�i korisnici <strong>must</strong> imaju validan id broj u polju. LDAP grupe moraju imati taj id broj u polju �lanova da bi korisnik bio upisan na kurs. Ovo �e obi�no raditi dobro ako ve� koristite LDAP Autorizaciju.</p>

<p>Upis �e biti nadogra�en kada se korisnik prijavi. Tako�e mo�ete postaviti skriptu da �uva spisak u vidu. Pogledajte u <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>Ovaj utika� tako�e mo�e biti postavljen da automatski kreira novi kurs kada nove grupe budu o�igledno u LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurs mo�e biti automatski kreiran ako upisivanje na kurs jo� na postoji na Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Automatsko pode�avanje kreiranja kursa';
$string['enrol_ldap_bind_dn'] = 'Ako �elite da koristite obaveznog korisnika za tra�enje korisnika, navedite to ovdje. Ne�to kao \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Lozinka za obaveznog korisnika.';
$string['enrol_ldap_category'] = 'Kategorija za automatsko kreiranje kursa.';
$string['enrol_ldap_course_fullname'] = 'Opcija: dati LDAP polju puno ime iz.';
$string['enrol_ldap_course_idnumber'] = 'Planirati jedinstveni indentifikator LDAP, obi�no <em>cn</em> or <em>uid</em>. To je preporu�eno da zaklju�ate vrijednost ako ste koristili automatsko kreiranje kursa.';
$string['enrol_ldap_course_settings'] = 'Podesite upis kursa';
$string['enrol_ldap_course_shortname'] = 'Opcija: dati LDAP polju kratko ime iz.';
$string['enrol_ldap_course_summary'] = 'Opcija: dati LDAP polju kratak pregled iz.';
$string['enrol_ldap_editlock'] = 'Zaklju�ajte vrijednosti';
$string['enrol_ldap_host_url'] = 'Nazna�ite glavni LDAP u URL-obliku kao \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass koristi za tra�enje kursa. Obi�no \'posixGroup\'.';
$string['enrol_ldap_server_settings'] = 'LDAP pode�avanja servera';
$string['enrol_ldap_student_contexts'] = 'Spisak obja�njenja gdje grupe sa studentima lociraju spiskove. Odvojite razli�ite sadr�aje sa \';\'. Na primjer \'ou=kurs,o=org; ou=ostali,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Dio atributa, gdje korisnik pripada (je spisak) u grupi. Obi�no \'�lan\' ili \'�lanUid\'.';
$string['enrol_ldap_student_settings'] = 'Podesite upis studenta';
$string['enrol_ldap_teacher_contexts'] = 'Spisak obja�njenja gdje grupe sa nastavnicima lociraju spiskove. Odvojite razli�ite sadr�aje sa \';\'. Na primjer \'ou=kurs,o=org; ou=ostali,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Dio atributa, gdje korisnik pripada (je spisak) u grupi. Obi�no \'�lan\' ili \'�lanUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Podesite upis nastavnika';
$string['enrol_ldap_template'] = 'Opcija: auto-kreiranje kursa mo�e kopirati njihova pode�avanja iz uzorka kursa.';
$string['enrol_ldap_updatelocal'] = 'Nadogradite lokalne podatke';
$string['enrol_ldap_version'] = 'Verzija LDAP protokola koju Va� server koristi.';
$string['enrolname'] = 'LDAP';

?>
