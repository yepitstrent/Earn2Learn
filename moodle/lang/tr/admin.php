<?PHP // $Id: admin.php,v 1.5.2.3 2006/02/06 10:00:39 moodler Exp $ 
      // admin.php - created with Moodle 1.6 development (2005101200)


$string['adminseesallevents'] = 'Y�neticiler b�t�n olaylar� g�r�r';
$string['adminseesownevents'] = 'Y�neticiler di�er kullan�c�lar gibidir';
$string['availablelangs'] = 'Kullan�labilir Dil Paketleri';
$string['backgroundcolour'] = 'Arkaplan Rengi';
$string['badwordsconfig'] = 'K�t� kelimeleri virg�lle ay�rarak girin';
$string['badwordsdefault'] = 'Belirtilen liste bo�sa, dil paketinde ge�en kelimeler kullan�lacakt�r.';
$string['badwordslist'] = 'K�t� Kelime Listesi';
$string['blockinstances'] = 'Kullan�m';
$string['blockmultiple'] = '�oklu';
$string['cachetext'] = 'Yaz� �nbelle�i �mr�';
$string['calendarsettings'] = 'Takvim';
$string['change'] = 'de�i�tir';
$string['configallowcoursethemes'] = 'Etkinle�tirseniz, kurslar�n kendi temalar�n� ayarlamas�na izin verirsiniz. Kurs temalar� di�er b�t�n temalar� (site, kullan�c� veya oturum temalar�) yok sayar.';
$string['configallowunenroll'] = 'Bu se�enek \'Evet\' ise ��renciler istedikleri zaman kendi kendilerine kurstan kay�tlar�n� silebilirler. Di�er durumda buna izin verilmez ve sadece y�neticiler ve e�itimciler taraf�ndan bu i� kontrol edilir.';
$string['configallowuserthemes'] = 'Etkinle�tirirseniz, kullan�c�lar kendi temalar�n� ayarlayabileceklerdir. Kullan�c� temalar� site temas�n� yok sayar (ancak kurs temas�n� de�il).';
$string['configclamactlikevirus'] = 'Dosya V�R�SL� olarak muamele g�rs�n';
$string['configclamdonothing'] = 'Dosya SA�LAM olarak muamele g�rs�n';
$string['configclamfailureonupload'] = 'Clam\'� y�klenen dosyalar� taramas� i�in yap�land�rd�ysan�z, fakat yol yanl�� belirtilir veya program�n �al��mas� s�ras�nda bilinmeyen bir sebepten dolay� hata olu�ursa nas�l davran�lacak? \'Dosya V�R�SL� olarak muamele g�rs�n\'� se�erseniz dosya karantina klas�r�ne ta��n�r ya da silinir. \'Dosya SA�LAM olarak muamele g�rs�n\'� se�erseniz dosya normal �ekilde y�klenir. Ayn� zamanda y�neticilere clam program�nda hata olu�tu�u bildirilir. \'Dosya V�R�SL� olarak muamele g�rs�n\'� se�er ve baz� sebeplerden dolay� clam�n �al��mas� hata ile sonu�lan�rsa (genellikle pathtoclam yolu yanl�� girilirse olur), T�M dosyalar belirtilen karantina klas�r�ne ta��n�r ya da silinir. Bu ayar� de�i�tirirken D�KKATL� olun.';
$string['configcountry'] = 'Buradan bir �lke se�erseniz, yeni kullan�c�lar i�in bu �lke varsay�lan olarak se�ili olacakt�r. �lke se�meyi zorunlu tutmak istiyorsan�z, bu se�ene�i ayarlamay�n.';
$string['configdebug'] = 'Bu se�ene�i a��k tutarsan�z PHP\'deki error_reporting metodu daha fazla uyar� mesaj� g�sterecektir. Bu, geli�tiriciler i�in kullan��l�d�r.';
$string['configdeleteunconfirmed'] = 'Bu, email yetkilendirmesi kullan�yorsan�z, kullan�c�n�n ne kadar s�rede bu emali onaylamas� gerekti�ini belirtir. Bu s�reden sonra, onyalanma�� eski hesaplar silinecektir.';
$string['configdisplayloginfailures'] = 'Bu, se�ilen kullan�c�n�n �nceden yapm�� oldu�u giri� hatalar� hakk�nda ekranda bilgi g�sterir.';
$string['configextendedusernamechars'] = '��rencilerin kullan�c� adlar�nda iste�i herhangi bir karakteri se�ebilmesini istiyorsan�z bu ayar� etkinle�tirin. (Not: Ad� ve soyad�n� etkilemez, giri� i�in kullan�lan kullan�c� ad�n� etkiler) Bu ayar \'hay�r\' ise sadece ingilizceki alfan�merik karakterler kullan�labilecektir.';
$string['configgdversion'] = 'Kurulu olan GD s�r�m�n� se�iniz. Varsay�lan olarak se�ilen otomatik olarak alg�lanm��t�r. Ne yapt���n�z� bilmiyorsan�z buray� de�i�tirmeyiniz.';
$string['configintrotimezones'] = 'Bu sayfa d�nya zaman dilimleri (yaz saati uygulamas� dahil) hakk�nda yeni bilgiyi arayacak ve yerel veritaban�n� bu bilgi ile g�ncelleyecek. Bu kontrol �u s�raya g�re yap�lacak: $a Bu i�lem genel olarak �ok g�venlidir ve normal kurulumlar� bozmaz. �imdi zaman dilimlerini g�ncellemek ister misiniz?';
$string['configlang'] = 'Sitenin tamam�nda ge�erli olan varsay�lan bir dil se�in. Kullan�c�lar daha sonra istedikleri dili se�ebilirler.';
$string['configlanglist'] = 'Kurulumla birlikte gelen dillerin herhangi birinin se�ilebilmesi i�in buray� bo� b�rak�n. Ancak dil men�s�n� k�s�tlamak istiyorsan�z buraya dil listesini virg�lle ay�rarak girin. �rnek: tr,fr,de,en_us';
$string['configlangmenu'] = 'Ana sayfa, giri� sayfas� vb. yerlerde dil men�s�n�n g�r�n�p g�r�nmeyece�ini belirtin. Bu, kullan�c�n�n kendi profilinde d�zenleyebilece�i dil tercihini etkilemeyecektir.';
$string['configlocale'] = 'Sitenin tamam�nda ge�erli olan yerelle�tirme kodunu girin. Bu, g�n bi�imini ve dilini etkileyecektir. ��letim sisteminde bu yerelle�tirmenin var olmas� gerekmektedir. E�er neyi se�ene�inizi bilmiyorsan�z bo� b�rak�n�z.
<br /> �rnekler: Linux i�in: de_DE, en_US, tr_TR; Windows i�in: turkish, german, spanish';
$string['configmessaging'] = 'Sitede kullan�c�lar aras� mesajla�ma etkinle�tirilsin mi?';
$string['configopentogoogle'] = 'Bu ayar etkinle�tirilirse, Google, siteye konuk kullan�c� olarak giri� yapabilecektir. Ek olarak, sitenize Google arac�l���yla gelen kullan�c�lar da konuk kullan�c� olarak giri� yapabileceklerdir. Not: Bu, zaten ziyaret�i giri�ine a��k olan kurslara eri�imi Google a��s�ndan �effafla�t�r�r.';
$string['configpathtoclam'] = 'Clam AV\'in yolu. B�y�k ihtimal /usr/bin/clamscan veya /usr/bin/clamdscan olmas� gerekiyor. Clam AV\'in �al��mas� i�in bunu belirtmeniz gerekir.';
$string['configquarantinedir'] = 'Clam AV\'in vir�s bula�m�� dosyalar� karantina klas�r�ne ta��mas�n� istiyorsan�z buraya yolu yaz�n�z. Bu klas�r Web sunucu taraf�ndan yaz�labilir olmal�. Buray� bo� b�rak�rsan�z veya olmayan bir klas�r� girerseniz ya da klas�r yaz�labilir de�ilse, vir�sl� dosyalar silinir. Klas�r�n sonuna slash (/) ekleMEyin.';
$string['configrunclamonupload'] = 'Dosya y�klemelerinde Clam AV �al��t�r�ls�n m�? Bunun i�in do�ru bir pathtoclam yolu belirtmeniz gerekiyor. (Clam AV, http://www.clamav.net/ sitesinden indirebilece�iniz �cretsiz bir vir�s tarama program�d�r.)';
$string['configsectioninterface'] = 'Aray�z';
$string['configsectionmail'] = 'Mail';
$string['configsectionmaintenance'] = 'Bak�m';
$string['configsectionmisc'] = '�e�itli';
$string['configsectionoperatingsystem'] = '��letim Sistemi';
$string['configsectionpermissions'] = '�zinler';
$string['configsectionrequestedcourse'] = 'Kurs istekleri';
$string['configsectionsecurity'] = 'G�venlik';
$string['configsectionstats'] = '�statistikler';
$string['configsectionuser'] = 'Kullan�c�';
$string['configsessioncookie'] = 'Bu se�enek Moodle oturumlar� i�in kullan�lan �erezlerin ad�n� ayarlar. Bu se�enek iste�e ba�l�d�r, ancak ayn� anda ayn� web sitesi birden �ok moodle kopyas� ile �al���yorsa bu se�enek olu�an kar���kl��� ortadan kald�r�r.';
$string['configsessiontimeout'] = 'Bu siteye giri� yapan kullan�c�lar uzun s�re i�lem yapmazlarsa (sayfalar� gezinmezse) ne kadar s�re i�inde oturum sona erecek?';
$string['configsmtphosts'] = 'Moodle\'nin email g�ndermesi i�in bir veya birden fazla SMTP sunucu girebilirsiniz (�r: \'mail.a.com\' veya \'mail.a.com;mail.b.com\'). Bu se�ene�i bo� b�rak�rsan�z PHP\'nin email g�nderirken kulland��� varsay�lan metot kullan�lacakt�r.';
$string['configsmtpuser'] = 'Yukar�da bir SMTP sunucu belirttiyseniz ve bu sunucu yetki istiyorsa buraya sunucu i�in kullan�c� ad� ve �ifreyi giriniz.';
$string['configunzip'] = 'Unzip program�n�n yerini belirtin (Sadece Unix i�in, iste�e ba�l�d�r). Belirtilirse, sunucuda zip ar�ivini a�mak i�in bu kullan�lacakt�r. Bo� b�rak�rsan�z, zip ar�ivini a�mak i�in dahili i�lemler kullan�lacakt�r.';
$string['configvariables'] = 'De�i�kenler';
$string['configwarning'] = 'Bu ayarlar� de�i�tirirken dikkatli olun. Bilmedi�iniz de�erleri girmeniz sorunlara sebep olabilir.';
$string['configzip'] = 'Zip program�n�n yerini belirtin (Sadece Unix i�in, iste�e ba�l�d�r). Belirtilirse, sunucuda zip ar�ivi olu�turmak i�in bu kullan�lacakt�r. Bo� b�rak�rsan�z, zip ar�ivi olu�turmak i�in dahili i�lemler kullan�lacakt�r.';
$string['confirmation'] = 'Onay';
$string['confirminstall'] = 'Dil paketini kurmak �zereseniz ($a), emin misiniz?';
$string['cronwarning'] = '<a href=\"cron.php\">cron.php bak�m program�</a> son 24 saattir �al��m�yor. <br /><a href=\"../doc/?frame=install.html&sub=cron\">Kurulum belgesi</a> bunu nas�l otomatikle�tirece�inizi a��kl�yor.';
$string['density'] = 'Yo�unluk';
$string['edithelpdocs'] = 'Yard�m belgelerini d�zenle';
$string['editstrings'] = '�fadeleri d�zenle';
$string['filterall'] = 'T�m ifadeleri filtrele';
$string['filteruploadedfiles'] = 'T�m g�nderilen dosyalar� filtrele';
$string['helpadminseesall'] = 'Y�neticiler t�m olaylar� m� yoksa sadece kendine ait olaylar� m� g�rs�n?';
$string['helpcalendarsettings'] = 'Moodle\'a ili�kin tarih/saat ve takvim ayarlar�n� yap�land�r�n';
$string['helpforcetimezone'] = 'Kullan�c�lar�n bireysel olarak zaman dilimlerini se�melerine izin verebilir ya da herkesin ayn� zaman dilimini kullanmas�n� zorunlu tutabilirsiniz.';
$string['helpsitemaintenance'] = 'G�ncellemeler ve di�er �al��malar i�in';
$string['helpstartofweek'] = 'Takvimde hafta hangi g�nle ba�l�yor?';
$string['helpupcomingmaxevents'] = 'Varsay�lan olarak en fazla ka� tane yakla�an olay kullan�c�lara g�sterilecek?';
$string['helpweekenddays'] = 'Hangi g�nler \"Hafta sonu\" olarak de�erlendirilecek ve farkl� bir renkte g�r�necek?';
$string['importtimezones'] = 'Zaman dilimleri listesinin tamam�n� g�ncelle';
$string['importtimezonescount'] = '$a->source \'dan $a->count kay�t ��kart�ld�';
$string['importtimezonesfailed'] = 'Hi� kaynak bulunamad�! (K�t� haber)';
$string['incompatibleblocks'] = 'Uyumsuz Bloklar';
$string['install'] = 'Kur';
$string['installedlangs'] = 'Kurulu Dil Paketleri';
$string['langimportsuccess'] = 'Dil Paketi ba�ar�yla g�ncellendi';
$string['langpackremoved'] = 'Dil paketinin kald�r�lmas� tamamland�';
$string['latexpreamble'] = 'LaTeX �ns�z�';
$string['latexsettings'] = 'LaTeX G�stericisi Ayarlar�';
$string['mediapluginavi'] = '.AVI filtresini etkinle�tir';
$string['mediapluginflv'] = '.FLV filtresini etkinle�tir';
$string['mediapluginmov'] = '.MOV filtresini etkinle�tir';
$string['mediapluginmp3'] = '.MP3 filtresini etkinle�tir';
$string['mediapluginmpg'] = '.MPG filtresini etkinle�tir';
$string['mediapluginswf'] = '.SWF filtresini etkinle�tir';
$string['mediapluginwmv'] = '.WMV filtresini etkinle�tir';
$string['optionalmaintenancemessage'] = '�ste�e ba�l� bak�m mesaj�';
$string['pathconvert'] = '<i>convert</i> binari yolu';
$string['pathdvips'] = '<i>dvips</i> binari yolu';
$string['pathlatex'] = '<i>latex</i> binari yolu';
$string['pleaseregister'] = 'Bu butonu silmek i�in l�tfen kaydolun';
$string['sitemaintenance'] = 'Bu siteye �u anda bak�m yap�l�yor ve �imdilik eri�ilemez';
$string['sitemaintenancemode'] = 'Bak�m modu';
$string['sitemaintenanceoff'] = 'Bak�m modu pasifle�tirildi ve site �u anda tekrar normal �al���yor';
$string['sitemaintenanceon'] = 'Siteniz �u anda bak�m modunda (sadece y�neticiler gir� yapabilir ve siteyi kullanabilir)';
$string['sitemaintenancewarning'] = 'Siteniz �u anda bak�m modunda (sadece y�neticiler gir� yapabilir). Bu siteyi normal haline d�nd�rmek i�in <a href=\"maintenance.php\">bak�m modunu pasifle�tirin</a>.';
$string['stickyblocks'] = 'Sabit bloklar';
$string['stickyblockscourseview'] = 'Kurs sayfas�';
$string['stickyblocksmymoodle'] = 'Ki�isel Moodle';
$string['stickyblockspagetype'] = 'Yap�land�r�lacak sayfa tipi';
$string['therewereerrors'] = 'Verinizde hatalar var';
$string['timezoneforced'] = 'Bu site y�neticisi taraf�ndan zorunlu tutuldu';
$string['timezoneisforcedto'] = 'B�t�n kullan�c�lar� kullanmaya zorunlu tut';
$string['timezonenotforced'] = 'Kullan�c�lar kendi zaman dilimini se�ebilsin';
$string['uninstall'] = 'Kald�r';
$string['uninstallconfirm'] = 'Dil Paketini ($a)  kald�rmak �zeresiniz, emin misiniz?';
$string['upgradelogs'] = 'Tam i�levsellik i�in, eski kay�t dosyalar�n�z g�ncellenmeli. <a href=\"$a\">Daha fazla bilgi</a>';
$string['upgradesure'] = 'Moodle dosyalar�n� de�i�ti ve otomatik olarak sunucunuzu �u s�r�me terfi etmek �zeresiniz:
<p><b>$a</b></p>
<p>Bunu yapt���n�zda tekrar geri d�nemezsiniz.</p> 
<p>Bu sunucuyu bu s�r�me terfi etmek istedi�inizden emin misiniz?</p>';
$string['upgradingdata'] = 'Veri g�ncelleniyor';
$string['upgradinglogs'] = 'Loglar g�ncelleniyor';

?>
