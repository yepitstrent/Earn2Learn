<?PHP // $Id: enrol_flatfile.php,v 1.3.2.3 2006/02/06 10:00:40 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.5 ALPHA (2005042300)


$string['description'] = 'Bu y�ntem a�a��da �zel olarak bi�imlendirilmi� dosyay� belirli aral�klarla kontrol edecek ve i�leme alacakt�r. Bu dosya �u �ekilde olabilir:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'D�zyaz� Dosyas�';
$string['filelockedmail'] = 'Ders kayd� i�in kulland���n�z dosya ($a) cron uygulamas� taraf�ndan silinemedi. Bu, dosyada yanl�� izinlerin kullan�lmas� anlam�na gelmektedir. Moodle\'nin bu dosyay� silebilmesi i�in izinleri de�i�tirin. Aksi takdirde bu i�lem s�rekli tekrar edecektir.';
$string['filelockedmailsubject'] = '�nemli hata: Kay�t dosyas�';
$string['location'] = 'Dosya yeri';
$string['mailadmin'] = 'Y�neticileri emaille bilgilendir';
$string['mailusers'] = 'Kullan�c�lar� emaille bilgilendir';

?>
