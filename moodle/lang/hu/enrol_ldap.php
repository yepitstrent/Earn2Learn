<?PHP // $Id: enrol_ldap.php,v 1.2.2.3 2006/02/06 09:59:47 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.4 (2004083100)


$string['description'] = '<p>Beiratkoz�sait kezelheti egy LDAP-szerver seg�ts�g�vel. Felt�telez�s szerint az �n LDAP-f�ja olyan csoportokat tartalmaz, amelyek kurzusoknak vannak megfeleltetve, az egyes kurzusok/csoportok pedig tagjegyz�kkel rendelkeznek a tanul�k megfeleltet�s�hez.</p>
<p>A kurzusok csoportokk�nt szerepelnek az  
LDAP-ben, mindegyik csoport t�bb olyan tags�gi mez�vel  
(<em>tag</em> vagy <em>tagazonos�t�</em>) rendelkezik, amely a felhaszn�l� egyedi azo�nos�t�j�t tartalmazza.</p>
<p>Az LDAP-beiratkoz�s haszn�lat�hoz felhaszn�l�inak �rv�nyes azonos�t�sz�mot tartalmaz� mez�kkel <strong>kell</strong> 
rendelkezni. Az LDAP-csoportoknak ezzel az azonos�t�sz�mmal kell rendelkezni ahhoz, hogy egy felhaszn�l� felvehesse a kurzust.
Ez �ltal�ban akkor m�k�dik megfelel�en, ha m�r haszn�l LDAP-hiteles�t�st.</p>
<p>A beiratkoz�sok friss�t�se a felhaszn�l� bejelentkez�sekor t�rt�nik. A beiratkoz�sok naprak�szen tart�s�hoz lefuttathat egy programk�dot is. L�sd:  
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Ezt a k�dr�szletet be�ll�thatja �gy, hogy automatikusan �j kurzusokat hozzon l�tre, ha �j csoportok jelennek meg az LDAP-ben.</p>';
$string['enrol_ldap_autocreate'] = 'Automatikusan l�trehozhat�k kurzusok, ha a Moodle-ban m�g nem l�tez� kurzusra iratkoznak fel.';
$string['enrol_ldap_autocreation_settings'] = 'Automatikus kurzus-l�trehoz�si be�ll�t�sok';
$string['enrol_ldap_bind_dn'] = 'Ha felhaszn�l�k keres�s�hez a bind-user opci�t k�v�nja haszn�lni, adja meg itt. P�ld�ul:
\'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'A  bind-user jelszava.';
$string['enrol_ldap_category'] = 'Automatikusan l�trehozott kurzusok kateg�ri�ja.';
$string['enrol_ldap_course_fullname'] = 'Opcion�lis: LDAP-mez� a teljes n�v el�r�s�hez';
$string['enrol_ldap_course_idnumber'] = 'Egyeztesse az LDAP egyedi azonos�t�j�val, ez �ltal�ban <em>cn</em> vagy <em>uid</em>. Automatikusan l�trehozott kurzusok eset�n c�lszer� az �rt�ket z�rolni.';
$string['enrol_ldap_course_settings'] = 'Be�ll�t�sok a kurzusbeiratkoz�shoz';
$string['enrol_ldap_course_shortname'] = 'Opcion�lis: LDAP-mez� a r�vid n�v el�r�s�hez';
$string['enrol_ldap_course_summary'] = 'Opcion�lis: LDAP-mez� az �sszeg� forma el�r�s�hez';
$string['enrol_ldap_editlock'] = '�rt�k z�rol�sa';
$string['enrol_ldap_general_options'] = '�ltal�nos opci�k';
$string['enrol_ldap_host_url'] = 'Az LDAP-gazdag�pet URL-form�ban adja meg: 
\'ldap://ldap.myorg.com/\' vagy \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'Kurzusok kjeres�s�re haszn�lt objektumoszt�ly. �ltal�ban \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Csoporttags�g kikeres�se r�sztartalom alapj�n';
$string['enrol_ldap_server_settings'] = 'LDAP-szerver be�ll�t�sai';
$string['enrol_ldap_student_contexts'] = 'Azon k�rnyezetek felsorol�sa, ahol a tanul�i beiratkoz�sok csoportjai tal�lhat�k. A k�rnyezeteket v�lassza el \';\'-vel. P�ld�ul: 
\'ou=kurzusok,o=org; ou=egyebek,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Tag jellemz�je, ha a felhaszn�l� egy csoporthoz tartozik (iratkozott be). �ltal�ban \'tag\'
vagy \'tagazonos�t�\'.';
$string['enrol_ldap_student_settings'] = 'Tanul�k beiratkoz�s�nak be�ll�t�sai';
$string['enrol_ldap_teacher_contexts'] = 'Azon k�rnyezetek felsorol�sa, ahol a tan�ri beiratkoz�sok csoportjai tal�lhat�k. A k�rnyezeteket v�lassza el \';\'-vel. P�ld�ul: 
\'ou=kurzusok,o=org; ou=egyebek,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Tag jellemz�je, ha a felhaszn�l� egy csoporthoz tartozik (iratkozott be). �ltal�ban \'tag\'
vagy \'tagazonos�t�\'.';
$string['enrol_ldap_teacher_settings'] = 'Tan�ri beiratkoz�sok be�ll�t�sai';
$string['enrol_ldap_template'] = 'Opcion�lis: az automatikusan l�trehozott kurzusok a sablonkurzusb�l �t�m�solhatj�k be�ll�t�saikat.';
$string['enrol_ldap_updatelocal'] = 'Helyi adatok friss�t�se';
$string['enrol_ldap_version'] = 'A szervere �ltal haszn�lt LDAP-protokoll verzi�ja';
$string['enrolname'] = 'LDAP';

?>
