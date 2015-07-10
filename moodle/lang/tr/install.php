<?PHP // $Id: install.php,v 1.5.2.3 2006/02/06 10:00:40 moodler Exp $ 
      // install.php - created with Moodle 1.6 development (2005101200)


$string['admindirerror'] = 'Belirtilen y�netici dizini hatal�';
$string['admindirname'] = 'Y�netici Dizini';
$string['admindirsetting'] = 'Baz� web hostingler kontrol paneline ula�mak i�in /admin olarak belirtilmi� bir URL kullan�yor. Maalesef, bu Moodle y�netici sayfalar�yla bir kar���kl�k ortaya ��karmaktad�r. Y�netici dizininin ismini kurulum s�ras�nda de�i�tirerek bu sorunu ortadan kald�rabilirsiniz. �rnek: <br /><br />><b>moodleadmin</b><br /> <br />Bu Moodle i�inde y�netici linklerini d�zeltecektir.';
$string['caution'] = 'Dikkat';
$string['chooselanguage'] = 'Bir dil se�in';
$string['compatibilitysettings'] = 'PHP ayarlar�n�z kontrol ediliyor...';
$string['configfilenotwritten'] = 'Kurulum program�, Moodle dizini yaz�labilir olmad���ndan dolay� se�ti�iniz ayarlar� i�eren bir config.php dosyas� olu�turam�yor.  A�a��daki kodu kopyalay�p bu kodu config.php dosyas� i�ine yap��t�r�p Moodle k�k dizinine olu�turdu�unuz dosyay� y�kleyebilirsiniz.';
$string['configfilewritten'] = 'config.php dosyas� ba�ar�yla olu�turuldu';
$string['configurationcomplete'] = 'Yap�land�rma tamamland�';
$string['database'] = 'Veritaban�';
$string['databasecreationsettings'] = '�imdi, Moodle verilerinin saklanaca�� veritaban�n�
olu�turman�z gerekiyor. Bu veritaban� Moodle4Windows kurulumu taraf�ndan a�a��daki ayarlara g�re otomatik olarak olu�turulacak.<br />
<br /> <br />
<b>Tipi:</b> kurulum taraf�ndan mysql olarak sabitlendi<br />
<b>Sunucu:</b> kurulum taraf�ndan localhost olarak sabitlendi<br />
<b>Ad�:</b> veritaban� ad�, �r: moodle<br />
<b>Kullan�c�:</b> kurulum taraf�ndan root olarak sabitlendi<br />
<b>�ifre:</b> kullan�c� �ifresi<br />
<b>Tablo �neki:</b> t�m tablo isimleri i�in iste�e ba�l� �nek';
$string['databasesettings'] = '�imdi, Moodle verilerinin saklanaca�� veritaban�n�
olu�turman�z gerekiyor. Bu veritaban� �nceden olu�turulmal�
ve bu veritaban�na eri�mek i�in kullan�c� ad� - �ifre ayarlanmal�.<br />
<br /><br />
<b>Tipi:</b> mysql veya postgres7<br />
<b>Sunucu:</b> �r: localhost veya db.iss.com<br />
<b>Ad�:</b> veritaban� ad�, �r: moodle<br />
<b>Kullan�c�:</b> veritaban� kullan�c�s�<br />
<b>�ifre:</b> kullan�c� �ifresi<br />
<b>Tablo �neki:</b> t�m tablo isimleri i�in iste�e ba�l� �nek';
$string['dataroot'] = 'Veri Dizini';
$string['datarooterror'] = 'Belirtilen \'Veri Dizini\' bulunamad� veya olu�turulamad�. Dizin yolunu d�zenleyin veya bu dizini kendiniz olu�turun.';
$string['dbconnectionerror'] = 'Belirti�iniz veritaban�na ba�lant� kuramad�k. L�tfen veritaban� ayarlar�n� kontrol edin.';
$string['dbcreationerror'] = 'Veritaban� olu�turma hatas�. Belirtilen ayarlardan sa�lanan isimle bir veritaban� olu�turulamad�.';
$string['dbhost'] = 'Veritaban� Sunucusu';
$string['dbpass'] = '�ifre';
$string['dbprefix'] = 'Tablo �neki';
$string['dbtype'] = 'Tipi';
$string['directorysettings'] = '<p>L�tfen, Bu Moodle kurulumu i�in yollar� onaylay�n.</p>

<p><b>Web Adresi:</b>
Moodle\'a eri�ilecek olan tam web adresini belirtin.
Web siteniz bir �ok URL\'den eri�ilebiliyorsa, ��rencilerinizin
en s�k kullanaca�� bir tanesini se�in.
Sonuna / (slash) ekleMEyin.</p>

<p><b>Moodle Dizini:</b>
Bu kurulama ait tam fiziksel klas�r yolunu belirtin.
B�Y�K/k���k harflerin do�ru oldu�undan emin olun.</p>

<p><b>Veri Dizini:</b>
Siteye y�klenen dosyalar�n nereye kaydedilece�ini belirtin.
Bu dizin sunucu kullan�c�s� taraf�ndan okunabilir ve
YAZILAB�L�R olmal�. (genellikle \'nobody\',\'apache\',\'www\' olur)
Ancak, bu dizine direkt olarak webden eri�im olMAMAl�.</p>';
$string['dirroot'] = 'Moodle Dizini';
$string['dirrooterror'] = '\'Moodle Dizini\' ayarlar� hatal� g�r�n�yor - Burada bir Moodle kurulumu bulunamad�. A�a��daki de�er s�f�rland�.';
$string['download'] = '�ndir';
$string['fail'] = 'Hata';
$string['fileuploads'] = 'Dosya G�ndermeleri';
$string['fileuploadserror'] = 'Bu a��k olmal�';
$string['fileuploadshelp'] = '<p>Bu sunucuda, Dosya y�klemesi etkinle�tirilmemi� g�r�n�yor.</p>

<p>Moodle hala kurulabilir, fakat bu �zellik olmadan, yeni kullan�c�
resimleri ve kurslara dosya g�nderilemez.</p>

<p>Dosya y�klemesini etkinle�tirmeniz i�in (veya sistem y�neticiniz)
sisteminizin php.ini dosyas�n�ndaki <b>file_uploads</b> ayar� \'1\'
olarak de�i�tirilmeli.</p>';
$string['gdversion'] = 'GD s�r�m�';
$string['gdversionerror'] = 'GD k�t�phanesi resimleri olu�turma ve i�leme �zelli�i sunmal�';
$string['gdversionhelp'] = '<p>Sunucunuzda GD k�t�phanesi kurulu g�r�lm�yor.</p>

<p>Moodle\'�n resimleri i�lemesi ve yeni resim olu�turmas� i�in
GD k�t�phanesi PHP kurulumu s�ras�nda gereklidir. �rne�in,
Moodle bu k�t�phane sayesinde kullan�c� resimlerinin t�rnak
resimlerini ��kart�r ve loglarla ilgili grafikler olu�turur.
Moodle GD olmadan da �al���r, ancak yukar�da bahsedilen
�zelliklerden yararlanamazs�n�z.</p>

<p>Unix alt�nda PHP\'ye GD deste�ini sa�lamak i�in, PHP\'yi --with-gd parametresiyle derleyin.</p>

<p>Windows alt�nda php.ini dosyas�n� d�zenler ve libgd.dll\'yi referans eden sat�rdaki yorumlar� kald�r�rs�n�z.</p>';
$string['globalsquotes'] = 'G�vensiz Global De�i�kenler';
$string['globalsquoteserror'] = 'PHP ayarlar�n�z� d�zeltin. register_globals\'� kapal� ve/veya magic_quotes_gpc a��k tutun.';
$string['globalsquoteshelp'] = '<p>Pasifle�tirilmi� Magic Quotes GPC ve etkinle�tirilmi� Register Globals\'�n bir arada kullan�m� tavsiye edilmez.</p>

<p>Php.ini\'deki tavsiye edilen ayar <b>magic_quotes_gpc = On</b> ve <b>register_globals = Off</b></p>

<p>Php.ini\'ye eri�im hakk�n�z yoksa Moodle dizinindeki .htaccess dosyas�na �u sat�rlar� ekleyebilirsiniz:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p> ';
$string['installation'] = 'Kurulum';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Bu kapal� olmal�';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime ayar�, Moodle\'�n i�levsel �al��mas� i�in kapal� olmal�.</p>

<p>Normalde de zaten bu varsay�lan olarak kapal�d�r ...  php.ini dosyas�ndaki <b>magic_quotes_runtime</b> ayar�na bak�n.</p>

<p>php.ini dosyas�na eri�im hakk�n�z yoksa, Moodle klas�r�nde yer alan .htaccess isimli dosyada �u ayar� yap�n:

<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p> ';
$string['memorylimit'] = 'Bellek Limiti';
$string['memorylimiterror'] = 'PHP bellek limiti ayar� �ok d���k... Daha sonra bu ayardan dolay� baz� sorunlar olu�abilir.';
$string['memorylimithelp'] = '<p>Sunucunuz i�in PHP bellek limiti �u anda $a olarak ayarlanm�� durumda.</p>

<p>�zellikle bir �ok mod�l� etkinle�tirilmi� ve/veya �ok fazla kullan�c�n�z
varsa bu durum daha sonra baz� bellek sorunlar�na sebep olabilir.</p>

<p>M�mk�nse size PHP\'e daha y�ksek limitli bir bellek ayar� yapman�z�,
�rne�in, 16M, �neriyoruz. ��te bunu yapabilmeniz i�in size bir ka� yol:</p>

<ol>
<li>Bunu yapmaya yetkiliyseniz, PHP\'yi <i>--enable-memory-limit</i> ile yeniden derleyin.
Bu, Moodle\'n�n kendi kendine bellek limitini ayarlas�na izin verecek.</li>

<li>php.ini dosyas�na eri�im hakk�n�z varsa, <b>memory_limit</b> ayar�n� 16M gibi
bir ayarla de�i�tirin. Eri�im hakk�n�z yoksa, bunu sistem y�neticinizden sizin
i�in yapmas�n� isteyin.</li>

<li>Baz� PHP sunucular�nda Moodle klas�r� i�inde �u ayar� i�eren bir
.htaccess dosyas� olu�turabilirsiniz:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Ancak, baz� sunucularda bu durum �al��an <b>b�t�n</b> PHP sayfalar�n� engelleyecektir.
(sayfan�z alt�na bakt���n�zda baz� hatalar g�receksiniz)
B�yle bir durumda .htaccess dosyas�n� silmeniz gerekiyor.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP, b�y�k ihtimal MySQL uzant�s�yla birlikte yap�land�r�lmam��. Bu y�zden MySQL ile ba�lant� kurulam�yor. php.ini dosyas�n� kontrol edin veya PHP\'yi tekrar derleyin.';
$string['pass'] = 'Ge�ti';
$string['phpversion'] = 'PHP s�r�m�';
$string['phpversionerror'] = 'PHP s�r�m� en az 4.1.0 olmal�';
$string['phpversionhelp'] = '<p>Moodle, PHP s�r�m�n�n en az 4.1.0 olmas�n� gerektirir.</p>
<p>�u anda bu s�r�m� �al���yor: $a</p>
<p>PHP\'yi g�ncellemeli veya PHP\'nin yeni s�r�m�n� kullananan bir hostinge ta��nmal�s�n�z!</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle, safe mode\'�n a��k olmas� durumunda baz� sorunlar ��kartabilir';
$string['safemodehelp'] = '<p>Moodle, safe mode\'un a��k olmas� durumunda baz� sorunlar ��kartabilir.
   Moodle taraf�ndan en az�ndan baz� dosyalar�n olu�turulmas� gerekiyor,
   ama bu mod yeni dosyalar�n olu�turulmas�na izin vermiyor.</p>

<p>Safe mode sadece paranoyak web hostinglerince kullan�lmaktad�r. Bu durumda
Moodle i�in ba�ka bir web hosting firmas� bulman�z gerekiyor.</p>

<p>�sterseniz devam edebilirsiniz, ama daha sonra bir �ok sorunla kar��la��rs�n�z.</p>   ';
$string['sessionautostart'] = 'Otomatik Oturum Ba�lama';
$string['sessionautostarterror'] = 'Bu kapal� olmal�';
$string['sessionautostarthelp'] = '<p>Moodle, oturum deste�i gerektirir ve bu olmadan i�levsel �al��amaz.</p>

<p>Oturum deste�i php.ini dosyas�ndan ayarlanabilir ... session.auto_start parametresine bak�n.</p>';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Bilgisayar�n�za <strong>$a->packname $a->packversion</strong> paketini ba�ar�yla kurdunuz. Tebrikler!';
$string['welcomep40'] = 'Bu paket <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong> s�r�m�n� de i�erir.';
$string['welcomep60'] = 'A�a��daki sayfalar <strong>Moodle</strong>�n kurulumu ve yap�land�r�lmas� i�in size basit�e yol g�sterecektir. Varsay�lan ayarlar� kabul edebilir veya ihtiya�lar�n�za g�re bunlar� de�i�tirebilirsiniz.';
$string['welcomep70'] = '<strong>Moodle</strong> kurulumu i�in a�a��daki \"�leri\" tu�una bas�n.';
$string['wwwroot'] = 'Web adresi';
$string['wwwrooterror'] = 'Web adresi do�ru ayarlanm�� g�r�nm�yor. Moodle kurulumu belirtilen yerde g�r�nm�yor.';

?>
