<?PHP // $Id: enrol_authorize.php,v 1.3.2.4 2006/02/06 10:00:40 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.6 development (2005101200)


$string['adminauthorizeccapture'] = 'Sipari�i �nceleme ve Otomatik-�ekme Ayarlar�';
$string['adminauthorizeemail'] = 'Email G�nderme Ayarlar�';
$string['adminauthorizesettings'] = 'Authorize.net Ayarlar�';
$string['adminauthorizewide'] = 'Site Geneli Ayarlar�';
$string['adminavs'] = 'Authorize.net hesab�n�zda AVS\'yi (Adres Do�rulama Sistemi) etkinle�tirdiyseniz bunu se�in. Kullan�c� �deme formunu doldururken cadde, �lke, posta kodu gibi adres alanlar� istenir.';
$string['admincronsetup'] = 'Cron.php bak�m beti�i son 24 saattir �al��m�yor. <br />Otomatik-�ekme �zelli�ini kullanmak istiyorsan�z cron etkin olmal�.<br /><a href=\"../doc/?frame=install.html&sub=cron\">Cronu ayarlay�n</a> veya an_review\'i tekrar se�ili durumdan kald�r�n. <br />Otomatik-�ekmeyi etkinle�tirmezseniz ve 30 g�n i�inde i�lemleri incelemezseniz i�lem iptal edilir.<br />�demeleri 30 g�n i�inde elle kabul etmek veya iptal etmek istiyorsan�z an_review\'i se�in an_capture_day alan�na \'0\' girin.';
$string['adminemailexpired'] = '��lem iptal olmadan �nce y�neticilere <b>$a</b> g�n �nceden \'onaylanm��/�ekilmeyi bekliyor\' durumundaki sipari�lerin say�s�n� i�eren bir uyar� mesaj� g�nder. (0=email g�nderme pasif, varsay�lan=2, en fazla=5)<br />Sipari�i elle incelemeyi etkinle�tirdiyseniz bu kullan��l�d�r (an_review=se�ili, an_capture_day=0).';
$string['adminhelpcapture'] = '�demeleri sadece elle kabul etmek/iptal etmek de�il, ayn� zamanda �demenin iptal olmas�n� engellemek i�in otomatik-�ekmeyi de kullanmak istiyorum. Ne yapmam gerekiyor?

- Cronu ayarlay�n.
- an_review\'i se�in.
- an_capture_day alan�na 1 ile 29 aras�nda bir say� girin. Kredi kart�ndan para �ekilecek ve an_capture_day g�n i�inde �ekmezseniz kullan�c� kursa kaydedilecek.';
$string['adminhelpreview'] = '�demeleri elle nas�l kabul veya reddece�im?

- an_review\'i se�in.
- an_capture_day alan�na \'0\' girin.

��renciler kart numaras�n� girdikten hemen sonra nas�l kursa kaydolurlar?

- an_review\'i se�ili durumdan kald�r�n.';
$string['adminneworder'] = 'De�erli Y�netici,

Yeni bir bekleyen sipari� ald�n�z:

Sipari� no: $a->orderid
��lem ID: $a->transid
Kullan�c�: $a->user
Kurs: $a->course
Miktar: $a->amount

OTOMAT�K-�EKME ETK�N M�?: $a->acstatus

Otomatik �ekme etkinse kredi kart�ndan $a->captureon tarihinde �ekilecek ve ��rencinin derse kayd� yap�lacak. Di�er durumda $a->expireon tarihinde s�resi dolacak ve bu tarihten sonra �ekilemeyecek.

Ayr�ca a�a��daki linki t�klayarak �demeyi derhal kabul veya reddedebilir ve ��renciyi derse kaydedebilirsiniz:
$a->url';
$string['adminnewordersubject'] = '$a->course: Bekleyen Yeni Sipari�($a->orderid)';
$string['adminpendingorders'] = 'Otomatik-�ekme �zelli�ini etkinle�tirmediniz.<br />PROV�ZYON durumundaki toplam $a->count i�lem kontrol etmezseniz iptal edilecek. <br /> �demeleri kabul etmek/reddetmek i�in <a href=\'$a->url\'>�deme Y�netimi</a> sayfas�na gidin.';
$string['adminreview'] = 'Kredi kart�ndan �ekmeden �nce sipari�i incele.';
$string['amount'] = 'Miktar';
$string['anlogin'] = 'Authorize.net: Kullan�c� ad�';
$string['anpassword'] = 'Authorize.net: �ifre';
$string['anreferer'] = 'Authorize.net hesab�n�zda URL referer ayar� yapt�ysan�z buraya yaz�n�z. Bu, web iste�inde \"Referer: URL\" ba�l���n� g�nderir.';
$string['antestmode'] = '��lemleri deneme modunda �al��t�r (para �ekilmez)';
$string['antrankey'] = 'Authorize.net: ��lem Anahtar� (Transaction Key)';
$string['authorizedpendingcapture'] = 'Onaylanm�� / �ekilmeyi Bekliyor';
$string['avsa'] = 'Adres (cadde) uydu, posta kodu uymad�';
$string['avsb'] = 'Adres bilgisi verilmedi';
$string['avse'] = 'Adres Do�rulama Sistemi Hatas�';
$string['avsg'] = 'ABD d��� kart yay�nc�s�';
$string['avsn'] = 'Ne adres (cadde) ne de posta kodu uymad�';
$string['avsp'] = 'Adres Do�rulama Sistemi uygulanamaz';
$string['avsr'] = 'Tekrar dene - Sistem eri�ilemez veya zaman a��m�';
$string['avsresult'] = 'Adres Do�rulama:';
$string['avss'] = 'Servis, yay�nc� taraf�ndan desteklenmiyor';
$string['avsu'] = 'Adres bilgisine eri�ilemiyor';
$string['avsw'] = '9 rakaml�k posta kodu e�le�ti, adres (cadde) e�le�medi';
$string['avsx'] = 'Adres (cadde) ve 9 rakaml�k posta kodu e�le�ti';
$string['avsy'] = 'Adres (cadde) ve 5 rakaml�k posta kodu e�le�ti';
$string['avsz'] = '5 rakaml�k posta kodu e�le�ti, adres (cadde) e�le�medi';
$string['canbecredit'] = '$a->upto\'a kadar geri �denebilir';
$string['cancelled'] = '�ptal edilmi�';
$string['capture'] = '�ek';
$string['capturedpendingsettle'] = '�ekilmi� / �deme Bekleniyor';
$string['capturedsettled'] = '�ekilmi� / �denmi�';
$string['capturetestwarn'] = '�ekme �al���yor olarak g�r�n�yor fakat deneme modunda kay�t g�ncellenmedi';
$string['captureyes'] = 'Para kredi kart�ndan �ekilecek ve ��rencinin derse kayd� yap�lacak. Emin misiniz?';
$string['ccexpire'] = 'Ge�erlilik Tarihi';
$string['ccexpired'] = 'Kredi kart�n�n s�resi ge�mi�';
$string['ccinvalid'] = 'Ge�ersiz kart numaras�';
$string['ccno'] = 'Kredi Kart� No';
$string['cctype'] = 'Kredi Kart� Tipi';
$string['ccvv'] = 'Onay Kodu';
$string['ccvvhelp'] = 'Kart�n arkas�na bak�n�z (son 3 rakam)';
$string['choosemethod'] = 'Kursun kay�t anahtar�n� biliyorsan�z giriniz. Di�er durumda bu kurs i�in �deme yapman�z gerekiyor.';
$string['chooseone'] = 'A�a��daki iki alandan birini veya ikisini doldurun';
$string['credittestwarn'] = 'Geri �deme �al���yor olarak g�r�n�yor fakat deneme modunda yeni kay�t eklenmedi';
$string['cutofftime'] = 'Hesap Kesim Zaman�. Hesap kesimi en son ne zaman yap�lacak?';
$string['delete'] = 'Sil';
$string['description'] = 'Authorize.net mod�l� Kredi Kart� sa�lay�c�lar�yla �cretli kurslar ayarlaman�za olanak verir. Bir kursun �creti s�f�r ise ��rencilere �deme yapmalar� i�in bir istekte bulunulmaz. Sitenin geneli i�in ayarlayabilece�iniz varsay�lan bir tutar vard�r ve her bir dersin �cretini tek tek de ayarlayabilirsiniz. Kurs �creti ayarlan�rsa site genelindeki �cret yoksay�l�r..<br /><br /><b>Not:</b> Kurs ayarlar�nda kay�t anahtar�n� girdiyseniz ��renciler bu anahtara g�re de kay�t olma se�ene�ine sahip olabileceklerdir. Bu, ��recilerden baz�lar�n�n �deme yaparak baz�lar�n�n da kay�t anahtar�na g�re kay�t olmas�n� istiyorsan�z kullan��l�d�r.';
$string['enrolname'] = 'Authorize.net Kredi Kart� Sa�lay�c�s�';
$string['expired'] = 'S�resi dolmu�';
$string['howmuch'] = 'Ne kadar?';
$string['httpsrequired'] = '�zg�n�z, iste�inizi �u anda yerine getiremiyoruz. Bu sitenin ayar� do�ru yap�land�r�lmam��.
<br /><br />
Taray�c�n�z�n alt taraf�nda sar� bir kilit g�rm�yorsan�z kredi kart� numaran�z� girmeyiniz. Bu, sizinle sunucu aras�nda gidip gelen verinin �ifrelendi�i anlam�na gelir. B�ylece 2 bilgisayar aras�nda akan bilgi korunmu� olur ve kredi kart� numaran�z internet �zerinden yakalanamaz.';
$string['logindesc'] = 'Bu se�enek A�IK olmal�.
<br /><br />
<a href=\"$a->url\">Loginhttps</a> se�ene�ini De�i�kenler/G�venlik b�l�m�nden ayarlayabilirsiniz.
<br /><br />
Bu se�enek aktif ise sadece giri� ve �deme sayfalar� i�in g�venli ba�lant� (https) kullan�lacakt�r.';
$string['missingaddress'] = 'Adres eksik';
$string['missingcc'] = 'Kart no eksik';
$string['missingccexpire'] = 'Son kullanma tarihi eksik';
$string['missingcctype'] = 'Kart tipi eksik';
$string['missingcvv'] = 'Onay no eksik';
$string['missingzip'] = 'Posta kodu eksik';
$string['nameoncard'] = 'Kart �zerindeki �sim';
$string['noreturns'] = 'Geri �deme yok';
$string['notsettled'] = 'Faturaland�r�lmam��';
$string['orderid'] = 'Sipari� ID';
$string['paymentmanagement'] = '�deme Y�netimi';
$string['paymentpending'] = '$a->orderid numaral� �demeniz bu kurs i�in onay bekliyor.';
$string['pendingordersemail'] = 'De�erli Y�netici,

2 g�n i�inde onay bekleyen $a->pending i�lemi kabul etmezseniz s�resi dolacak ve iptal edilecek.

Otomatik-�ekmeyi etkinle�tirmedi�iniz i�in bu uyar� mesaj� size g�nderilmi�tir. Bu durumda �demeleri elle kabul veya reddetmelisiniz.

�demeleri kabul/reddetmek i�in:
$a->url

Otomatik-�ekmeyi etkinle�tirmek i�in:
$a->enrolurl';
$string['reason11'] = 'Ayn� i�lem g�nderildi.';
$string['reason13'] = 'Ma�aza Giri� ID hatal� veya hesap etkin de�il';
$string['reason16'] = '��lem bulunamad�.';
$string['reason17'] = 'Ma�aza, bu kredi kart� tipini kabul etmiyor.';
$string['reason27'] = '��lem AVS hatas�na sebep oldu. Verilen adres kart sahibinin adresiyle e�le�miyor.';
$string['reason28'] = 'Ma�aza, bu kredi kart� tipini kabul etmiyor.';
$string['reason30'] = '��leyici yap�land�rmas� hatal�. M��teri Hizmetlerini aray�n.';
$string['reason39'] = 'Verilen para birimi ya hatal� ya desteklenmiyor ya bu ma�aza buna izin vermiyor ya da d�viz kuru yok.';
$string['reason43'] = 'Ma�aza i�leyiciyi hatal� yap�land�rd�. M��teri Hizmetlerini aray�n.';
$string['reason44'] = '��lem reddedildi. Kart kodu s�zgeci hatas�!';
$string['reason45'] = '��lem reddedildi. Kart kodu / Adres s�zgeci hatas�!';
$string['reason5'] = 'Ge�erli bir miktar gerekli.';
$string['refund'] = 'Geri �de';
$string['refunded'] = 'Geri �denmi�';
$string['returns'] = 'Geri �demeler';
$string['reviewday'] = '<b>$a</b> g�n i�inde e�itimci veya y�netici sipari�i incelemezse kredi kart�ndan otomatik olarak paray� �ek. CRON ETK�N OLMALI. <br /> (0 g�n otomatik �ekme aktif de�il anlam�na gelir ve ayn� zamanda e�itimci veya y�neticinin sipari�i kendisi inceleyece�ini zorunlu tutar. Otomatik �ekmeyi etinle�tirmezseniz veya 30 g�n i�inde sipari�i incelemezseniz i�lem iptal edilir.)';
$string['reviewnotify'] = '�demeniz incelenecek. Bir ka� g�n i�inde e�itimcinizden bir email bekleyin.';
$string['sendpaymentbutton'] = '�demeyi Yap';
$string['settled'] = 'Faturaland�r�lm��';
$string['settlementdate'] = 'Hesap Kesim Tarihi';
$string['subvoidyes'] = 'Geri �denen $a->transid nolu i�lem iptal edilecek ve hesab�n�za $a->amount y�klenecek. Emin misiniz?';
$string['tested'] = 'Denendi';
$string['testmode'] = '[DENEME MODU]';
$string['transid'] = '��lem ID';
$string['unenrolstudent'] = '��rencinin ders kayd�n� sil?';
$string['void'] = '�ptal et';
$string['voidtestwarn'] = '�ptal etme �al���yor olarak g�r�n�yor fakat deneme modunda kay�t g�ncellenmedi';
$string['voidyes'] = '��lem iptal edilecek. Emin misiniz?';
$string['zipcode'] = 'Posta Kodu';

?>
