<?PHP // $Id: enrol_ldap.php,v 1.1.2.4 2006/02/06 09:59:32 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5 + (2005060201)


$string['description'] = '<p>K ��zen� z�pis� do kurz� m��ete pou��v rovn� v� LDAP server. P�edpokl�d� se, �e v� LDAP strom (tree) obsahuje skupiny (groups) odpov�daj�c� va�im kurz�m a �e ka�d� z t�chto skupin m� polo�ky �lenstv� odpov�daj�c� student�m.</p>

<p>Ka�d� kurz by tedy m�l m�t nadefinov�n jako LDAP skupina a ka�d� z t�chto skupin bude m�t n�kolik pol� �lenstv� (<em>member</em> or <em>memberUid</em>), kter� obsahuj� unik�tn� identifikaci u�ivatele.</p>

<p>Chcete-li tento re�im z�pis� do kurz� pou��t, <strong>mus�</strong> m�t va�i u�ivatel� ve sv�ch profilech vypln�no platn� pole idnumber. LDAP skupiny, kter� odpov�daj� kurz�m, uvedou toto idnumber v pol�ch sv�ch �len�. Tento zp�sob by m�l bez probl�m� fungovat, pokud u� pou��v�te ov��ov�n� u�ivatel� pomoc� LDAP.</p>

<p>Z�pisy v kurzech (tzv. enrolments) budou aktualizov�ny poka�d�, co se u�ivatel p�ihl�s�. Pro  synchronizaci m��ete rovn� spou�t�t skript <em>enrol/ldap/enrol_ldap_sync.php</em> (viz zdrojov� k�d pro v�ce informac�).</p>

<p>Tento dopln�k m��e b�t rovn� pou�it pro automatick� vytv��en� nov�ch kurz�, jakmile se odpov�daj�c� skupiny objev� ve va�em LDAP serveru.</p>';
$string['enrol_ldap_autocreate'] = 'Kurzy mohou b�t vytv��eny automaticky, pokud se objev� z�pis do kurzu, kter� v Moodlu je�t� neexistuje.';
$string['enrol_ldap_autocreation_settings'] = 'Nastaven� automatick�ho vytv��en� kurz�';
$string['enrol_ldap_bind_dn'] = 'Chcete-li v vyhled�n� u�ivatel� pou��t bind-user, uve�te zde pln� n�zev. N�co jako  \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Heslo pro bind-user.';
$string['enrol_ldap_category'] = 'Kategorie automaticky vytv��en�ch kurz�.';
$string['enrol_ldap_course_fullname'] = 'Voliteln�: LDAP pole, odkud se p�evezme cel� n�zev.';
$string['enrol_ldap_course_idnumber'] = 'Na kter� unik�tn� identifik�tor v LDAP mapovat id kurzu. V�t�inou <em>cn</em> nebo <em>uid</em>. Doporu�uje se tuto hodnotu uzamknout, pokud pou��v�te automatick� vytv��en� kurz�.';
$string['enrol_ldap_course_settings'] = 'Nastaven� z�pis� do kurz�';
$string['enrol_ldap_course_shortname'] = 'Voliteln�: LDAP pole, odkud se p�evezme kr�tk� n�zev.';
$string['enrol_ldap_course_summary'] = 'Voliteln�: LDAP pole, odkud se p�evezme souhrn kurzu.';
$string['enrol_ldap_editlock'] = 'Uzamknout hodnotu';
$string['enrol_ldap_general_options'] = 'Obecn� nastaven�';
$string['enrol_ldap_host_url'] = 'Ur�ete LDAP hostitele ve form� URL - nap�. ldap://ldap.naseskola.cz/\' nebo ldaps://ldap.naseskola.cz/\'';
$string['enrol_ldap_objectclass'] = 'objectClass pou�it� p�i vyhled�v�n� kurz�. V�t�inou \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Hledej �lenstv� ve skupin�ch v subkontextech';
$string['enrol_ldap_server_settings'] = 'Nastaven� serveru LDAP';
$string['enrol_ldap_student_contexts'] = 'Seznam kontext�, ve kter�ch jsou um�st�ny skupiny se z�pisy student� v kurzech. Kontexty odd�lujte st�edn�kem \';\'. Nap�.: \'ou=kurzy,o=org; ou=dalsi,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atribut skupiny, pokud je u�ivatel jej�m �lenem (tj. student je zaps�n do p��slu�n�ho kurzu). V�t�inou \'member\' nebo \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Nastaven� z�pis� do kurz�';
$string['enrol_ldap_teacher_contexts'] = 'Seznam kontext�, ve kter�ch jsou um�st�ny skupiny se z�pisy vyu�uj�c�ch v kurzech. Kontexty odd�lujte st�edn�kem \';\'. Nap�.: \'ou=kurzy,o=org; ou=dalsi,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atribut skupiny, pokud je u�ivatel jej�m �lenem (tj. u�ivatel je vyu�uj�c�m v p��slu�n�m kurzu). V�t�inou \'member\' nebo \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Nastaven� vyu�uj�c�ch v kurzech';
$string['enrol_ldap_template'] = 'Voliteln�: automaticky vytv��en� kurzy mohou p�evz�t nastaven� z n�jak� �ablony (vzorov�ho kurzu).';
$string['enrol_ldap_updatelocal'] = 'Aktualizovat lok�ln� data';
$string['enrol_ldap_version'] = 'Verze protokolu LDAP, kter� pou��v� v� server';
$string['enrolname'] = 'LDAP';

?>
