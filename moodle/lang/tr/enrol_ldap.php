<?PHP // $Id: enrol_ldap.php,v 1.3.2.3 2006/02/06 10:00:40 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005072200)


$string['description'] = '<p>Ders kay�tlar�n� kontrol etmek i�in bir LDAP sunucu kullanabilirsiniz.
LDAP a�ac�n�n kurslar� referans eden gruplar� ve her bir grubun/dersin ��renci �yeliklerinin ayarland���n� var say�yoruz.</p>

<p>Kurslar�n LDAP i�inde grup olarak tan�mland���n� ve her bir grubun (yani dersin) �oklu �yelik alanlar�n�n oldu�unu - ki bu alanlar�n kullan�c�y� tan�mlamak i�in tekil olmas� gerekir (<em>member</em> veya <em>memberUid</em> gibi) - varsay�yoruz.</p>

<p>LDAP kay�t y�ntemini kullanabilmeniz i�in kullan�c�lar�n�z�n ge�erli bir idnumber alan� <strong>olmal�</strong>. Bir kullan�c� derse kaydoldu�unda LDAP gruplar� bu idnumber alan�n� i�ermeli. Zaten LDAP yetkilendirmesini kullan�yorsan�z genellikle bu iyi �al���r.</p>

<p>Ders kay�tlar� kullan�c� giri� yapt���nda g�ncellenir ve ayr�ca kay�tlar�n senkronize olmas� i�in bir betik de �al��t�rabilirsiniz.
Buraya bak�n�z: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>Bu eklenti, LDAP i�inde g�r�nen yeni gruplardan otomatik olarak yeni kurslar da olu�turabilir.</p>';
$string['enrol_ldap_autocreate'] = 'Moodle i�inde hen�z var olmayan bir kursa kay�tlar varsa kurslar otomatik olarak olu�turulabilir.';
$string['enrol_ldap_autocreation_settings'] = 'Otomatik kurs olu�turma ayarlar�';
$string['enrol_ldap_bind_dn'] = 'Kullan�c�lar� aramak i�in yetkili-kullan�c� kullanmak istiyorsan�z burada belirtin. �rnek: \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Yetkili kullan�c� i�in �ifre';
$string['enrol_ldap_category'] = 'Otomatik olu�turulan kurslar i�in kategori.';
$string['enrol_ldap_course_fullname'] = '�ste�e ba�l�: Tam ad�n�n al�naca�� LDAP alan�';
$string['enrol_ldap_course_idnumber'] = 'LDAP\'taki birincil tan�mlay�c�y� belirtin. Genellikle <em>cn</em> veya <em>uid</em>. Otomatik kurs olu�turmay� kullan�yorsan�z de�eri kilitlemeniz �nerilir. ';
$string['enrol_ldap_course_settings'] = 'Kurs kayd� ayarlar�';
$string['enrol_ldap_course_shortname'] = '�ste�e ba�l�: K�sa ad�n�n al�naca�� LDAP alan�';
$string['enrol_ldap_course_summary'] = '�ste�e ba�l�: �zetin al�naca�� LDAP alan�';
$string['enrol_ldap_editlock'] = 'De�eri kilitle';
$string['enrol_ldap_general_options'] = 'Genel Se�enekler';
$string['enrol_ldap_host_url'] = 'LDAP sunucunun adresini belirtin.
�r: \'ldap://ldap.sirketim.com/\' veya \'ldaps://ldap.sirketim.com/\' ';
$string['enrol_ldap_objectclass'] = 'Kurslar� aramak i�in kullan�lacak objectClass. Genellikle \'posixGroup\'';
$string['enrol_ldap_search_sub'] = 'Grup �yeliklerini alt-ba�lamlardan ara';
$string['enrol_ldap_server_settings'] = 'LDAP sunucu ayarlar�';
$string['enrol_ldap_student_contexts'] = '��renci kay�tlar�n�n nerede oldu�unu g�steren ba�lam listeleri. Farkl� ba�lamlar� \';\' ile ay�r�n. �rnek: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = '�ye niteli�i. ��rencilerin ders kayd� yap�l�rken bir gruba mensup oldu�unda. Genellikle \'member\' veya \'memberUid\'.';
$string['enrol_ldap_student_settings'] = '��renci kayd� ayarlar�';
$string['enrol_ldap_teacher_contexts'] = 'E�itimci kay�tlar�n�n nerede oldu�unu g�steren ba�lam listeleri. Farkl� ba�lamlar� \';\' ile ay�r�n. �rnek: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = '�ye niteli�i. E�itimcilerin derse e�itimci olarak atan�rken bir gruba mensup oldu�unda. Genellikle \'member\' veya \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'E�itimci kayd� ayarlar�';
$string['enrol_ldap_template'] = '�ste�e ba�l�: Otomatik olu�turulan kurslar, bir kurs �emas�ndan ayarlar�n� kopyalayabilir. �ablon kursun k�sa ad�n� giriniz.';
$string['enrol_ldap_updatelocal'] = 'Yerel veriyi g�ncelle';
$string['enrol_ldap_version'] = 'Sunucunun kulland��� protokol s�r�m�';
$string['enrolname'] = 'LDAP';

?>
