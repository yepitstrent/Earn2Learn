<?PHP // $Id: survey.php,v 1.8.2.3 2006/02/06 10:00:40 moodler Exp $ 
      // survey.php - created with Moodle 1.5 ALPHA (2005042300)


$string['actual'] = 'Ger�ek';
$string['actualclass'] = 'Ger�ek s�n�f';
$string['actualstudent'] = 'Ger�ek $a';
$string['allquestions'] = 'S�ral� t�m sorular, t�m ��renciler';
$string['allscales'] = 'T�m �l�ekler, t�m ��renciler';
$string['alreadysubmitted'] = 'Bu anketi daha �nce uygulad�n�z';
$string['analysisof'] = '$a ��z�mlemesi';
$string['answers'] = 'Yan�tlar';
$string['attls1'] = 'Birilerinin s�yledi�ini de�erlendirirken, bu d���nceyi sunan ki�iye de�il, d���ncesinin kalitesine odaklan�r�m.   ';
$string['attls10'] = 'Bir�eyleri analiz ederken m�mk�n oldu�unca tarafs�z davranmak benim i�in �nemlidir.';
$string['attls10short'] = 'tarafs�z kal';
$string['attls11'] = '�nsanlara kar�� olmaktansa onlarla birlikte d���nmeye �al���r�m.';
$string['attls11short'] = 'insanlarla B�RL�KTE d���n';
$string['attls12'] = 'D���nceleri de�erlendirirken baz� belirli kriterlerim vard�r. ';
$string['attls12short'] = 'de�erlendirirken kriter kullan';
$string['attls13'] = 'Birilerinin d���ncelerini ele�tirmekten �ok anlamaya �al���r�m.';
$string['attls13short'] = 'anlamaya �al��';
$string['attls14'] = 'Ba�kalar�n�n d���ncelerinin zay�fl�klar�n� bularak, onlar�, d���nceleri konusunda ayd�nlatmaya �al���r�m.';
$string['attls14short'] = 'zay�fl�klar� bul';
$string['attls15'] = 'Kar��tl�k i�eren bir konuyu tart���rken, neden b�yle d���nd�klerini anlamak i�in kendimi kar��mdakinin yerine koymaya �al���r�m.';
$string['attls15short'] = 'kendimi onun yerine koyar�m';
$string['attls16'] = 'Bir�eyleri analiz metodum \"bilgileri yarg�lamak\" olarak adland�r�labilir ��nk� ben b�t�n delilleri dikkatlice incelerim. ';
$string['attls16short'] = 'bilgileri yarg�la';
$string['attls17'] = 'Problem ��zerken d���ncelerimi sebep sonu� mant���n� �zerine kurar�m.';
$string['attls17short'] = 'mant�k daha �nemlidir';
$string['attls18'] = 'Benimkinden farkl� d���ncelerin i�y�z�n� empati sayesinde anlayabilirim. ';
$string['attls18short'] = 'empati ile i�y�z';
$string['attls19'] = 'D���nceleri bana kar��t gelen insanlar� d���nd���mde, kendimi onlara yak�n hissetmeye �al��arak nas�l bu d���nceye sahip olabildiklerini anlamak i�in �ok �aba harcar�m.';
$string['attls19short'] = 'anlamak i�in �aba harca';
$string['attls1short'] = 'd���ncenin kalitesine odaklan';
$string['attls2'] = 'Birilerinin s�yledi�inin tersini tart���rken \"�eytan�n avukat�\" rol�n� oynamay� severim.';
$string['attls20'] = 'Neyin \"yanl��\" gitti�ini belirlemek i�in zaman harcar�m. �rne�in; yeterince iyi tart���lmam�� bir konuda ara�t�rma yapar�m.  ';
$string['attls20short'] = 'yanl�� olan nedir?';
$string['attls2short'] = '\"�eytan�n avukat�\"n� oyna';
$string['attls3'] = '�nsanlar�n nereden geldi�ini ve sahip olduklar� hislere hangi deneyimlerin sebep oldu�unu anlamay� severim. ';
$string['attls3short'] = 'insanlar�n nereden geldi�i';
$string['attls4'] = 'E�itimimin en �nemli par�as� benden �ok farkl� insanlar� anlamay� ��renmektir. ';
$string['attls4short'] = 'farkl� insanlar� anla';
$string['attls5'] = 'Bana �yle geliyor ki; kendi kimli�imi olu�turmak i�in en iyi yol farkl� insanlarla etkile�imde bulunmak.';
$string['attls5short'] = 'fark� ki�ilerle etkile�im kur';
$string['attls6'] = 'Benimkinden farkl� bir �zge�mi�e sahip insanlar�n d���ncelerini duymaktan ho�lan�yorum. Bu bana ayn� �eylerin nas�l farkl� a��lardan g�r�lebilece�ini anlamama yard�mc� oluyor.';
$string['attls6short'] = 'd���nce duymaktan ho�lan';
$string['attls7'] = 'Benimle ayn� fikirde olmayan biriyle tart��arak kendi d���ncemi g��lendirebilece�imi ke�fettim. ';
$string['attls7short'] = 'tart��ma ile g��len';
$string['attls8'] = '�nsanlar�n neyi, neden s�ylediklerini ve inand�klar�n� ��renmek konusunda her zaman ilgiliyimdir.';
$string['attls8short'] = 'insanlar�n nedenlerini bil';
$string['attls9'] = 'Kendimi s�k s�k okudu�um kitaplar�n yazarlar� ile tart���rken bulurum ve onlar�n neden hatal� olduklar�n� mant�kl� bir �ekilde ortaya ��karmaya �al���r�m. ';
$string['attls9short'] = 'yazarlarla tart��';
$string['attlsintro'] = 'Bu anketin amac� sizin d���nmeye ve ��renmeye kar�� yakla��mlar�n�z� de�erlendirmemize yard�m etmektir.

\'Do�ru\' ya da \'Yanl��\' cevap yoktur. Biz sadece sizin d���ncenizi ��renmek istiyoruz. Cevaplar�n�z�n tam bir gizlilik i�inde de�erlendirilece�inden ve notlar�n�z� etkilemeyece�inden emin olabilirsiniz. ';
$string['attlsm1'] = 'D���nmeye ve ��renmeye Kar�� Yakla��mlar';
$string['attlsm2'] = 'Birle�tirilmi� ��renme';
$string['attlsm3'] = 'Ayr� ��renme';
$string['attlsmintro'] = 'B�R TARTI�MADA ...';
$string['attlsname'] = 'D���nme ve ��renme Yakla��mlar� (20 maddelik)';
$string['ciq1'] = 'Bir ��renci olarak, s�n�fta hangi anda en fazla kat�l�m g�sterirsin?';
$string['ciq1short'] = 'En fazla kat�l�m';
$string['ciq2'] = 'Bir ��renci olarak, s�n�ftan hangi anda en fazla uzakla��rs�n?';
$string['ciq2short'] = 'En uzak';
$string['ciq3'] = 'Bu forumlardaki herhangi birinden hangi etkinli�i en yararl� buluyorsun?';
$string['ciq3short'] = 'Yararl� an';
$string['ciq4'] = 'Bu forumlardaki herhangi birinden hangi etkinli�i en kar���k buluyorsun?';
$string['ciq4short'] = 'Kar���k an';
$string['ciq5'] = 'Hangi olay seni en �ok �a��rtt�?';
$string['ciq5short'] = '�a��rt�c� an';
$string['ciqintro'] = 'A�a��daki sorular� s�n�ftaki son olaylar� d���nerek cevaplan�z';
$string['ciqname'] = '�nemli Olaylar';
$string['clicktocontinue'] = 'Devam etmek i�in buraya t�klay�n';
$string['clicktocontinuecheck'] = 'Kontrol etmek ve devam etmek i�in buraya t�klay�n';
$string['colles1'] = '��renmem, beni ilgilendiren konulara odaklan�r.';
$string['colles10'] = 'di�er ��rencilerden d���ncelerini a��klamas�n� isterim. ';
$string['colles10short'] = 'a��klamalar isterim';
$string['colles11'] = 'di�er ��renciler benden d���ncelerimi a��klamam� ister.';
$string['colles11short'] = 'a��klamam istenir';
$string['colles12'] = 'di�er ��renciler benim d���ncelerime kar��l�k verir.';
$string['colles12short'] = '��renciler bana kar��l�k verir';
$string['colles13'] = '��retici, d���nmem i�in beni harekete ge�irir.';
$string['colles13short'] = '��retici, d���nmeyi harekete ge�irir';
$string['colles14'] = '��retici, kat�lmam i�in beni cesaretlendirir. ';
$string['colles14short'] = '��retici, beni cesaretlendirir';
$string['colles15'] = '��retici, iyi bir konu�ma modeli sergiler.';
$string['colles15short'] = '��retici, konu�ma modeli sergiler';
$string['colles16'] = '��retici, kendine ele�tirel yakla�ma modeli sergiler.';
$string['colles16short'] = '��retici, kendine ele�tirel yakla��r';
$string['colles17'] = 'di�er ��renciler kat�l�m�m i�in beni cesaretlendirir. ';
$string['colles17short'] = 'di�er ��renciler kat�l�m�m� cesaretlendirir.';
$string['colles18'] = 'di�er ��renciler benim katk�lar�m� be�enir. ';
$string['colles18short'] = '��renciler beni be�enir';
$string['colles19'] = 'di�er ��renciler benim katk�lar�ma de�er verir.';
$string['colles19short'] = '��renciler bana de�er verir';
$string['colles1short'] = 'ilgin� konulara odaklan';
$string['colles2'] = '��rendiklerim mesleki uygulamalar�m i�in �nemlidir.';
$string['colles20'] = 'di�er ��renciler benim ��renme �abama empatik yakla��r.';
$string['colles20short'] = '��renciler empatik yakla��r';
$string['colles21'] = 'di�er ��rencilerin mesajlar�n� iyi anlar�m.';
$string['colles21short'] = 'di�er ��rencileri anlar�m';
$string['colles22'] = 'di�er ��renciler mesajlar�m� iyi anlar.';
$string['colles22short'] = '��renciler beni anlar';
$string['colles23'] = '��reticinin mesajlar�n� iyi anlar�m. ';
$string['colles23short'] = '��reticiyi anlar�m';
$string['colles24'] = '��retici mesajlar�m� iyi anlar.';
$string['colles24short'] = '��retici beni anlar';
$string['colles2short'] = 'uygulamalar�m i�in �nemlidir';
$string['colles3'] = 'mesleki uygulamalr�m� nas�l geli�tirece�imi bilirim';
$string['colles3short'] = 'uygulamalar�m� geli�tiririm ';
$string['colles4'] = '��rendiklerim mesleki uygulamalar�mla s�k� s�k�ya ba�l�d�r.';
$string['colles4short'] = 'uygulamalar�mla ba�l�d�r';
$string['colles5'] = 'nas�l ��rendi�im konusunda ele�tirel d���n�r�m.';
$string['colles5short'] = '��renmemi ele�tiririm';
$string['colles6'] = 'kendi d���ncelerim hakk�nda ele�tirel d���n�r�m.';
$string['colles6short'] = 'kendi d���ncelerimi ele�tiririm';
$string['colles7'] = 'di�er ��rencilerin d���nceleri hakk�nda ele�tirel d���n�r�m.';
$string['colles7short'] = 'di�er ��rencileri ele�tiririm';
$string['colles8'] = 'okuduklar�m hakk�nda ele�tirel d���n�r�m.';
$string['colles8short'] = 'okuduklar�m� ele�tiririm';
$string['colles9'] = 'd���ncelerimi di�er ��rencilere a��klar�m.';
$string['colles9short'] = 'd���ncelerimi a��klar�m';
$string['collesaintro'] = 'Bu anketin amac�, bu �nitenin �evrimi�i sunumunun ��renmenize ne kadar katk� sa�lad���n� anlamam�za yard�mc� olmakt�r. 

A�a��daki 24 c�mle sizin bu �nitedeki deneyiminizle ilgili olarak verilmi�tir.  

\'Do�ru\' ya da \'Yanl��\' cevap yoktur. Biz sadece sizin d���ncenizi ��renmek istiyoruz. Cevaplar�n�z�n tam bir gizlilik i�inde de�erlendirilece�inden ve notlar�n�z� etkilemeyece�inden emin olabilirsiniz.

Sizin dikkatlice d���n�lm�� cevaplar�n�z, bu �nitenin ileride yap�lacak olan �evrimi�i sunumunu geli�tirmemize yard�mc� olacakt�r. 

�ok te�ekk�r ederiz. ';
$string['collesaname'] = 'Yap�salc� �evrimi�i ��renme Ortam� (Ger�ek)';
$string['collesapintro'] = 'Bu anketin amac�, bu �nitenin �evrimi�i sunumunun ��renmenize ne kadar katk� sa�lad���n� anlamam�za yard�mc� olmakt�r. 

A�a��daki 24 c�mle sizin <b>istedi�iniz</b> (ideal olan) ve <b>ger�ekte olan</b> durumu kar��la�t�rmak i�in verilmi�tir. 

\'Do�ru\' ya da \'Yanl��\' cevap yoktur. Biz sadece sizin d���ncenizi ��renmek istiyoruz. Cevaplar�n�z�n tam bir gizlilik i�inde de�erlendirilece�inden ve notlar�n�z� etkilemeyece�inden emin olabilirsiniz.

Sizin dikkatlice d���n�lm�� cevaplar�n�z, bu �nitenin ileride yap�lacak olan �evrimi�i sunumunu geli�tirmemize yard�mc� olacakt�r. 

�ok te�ekk�r ederiz. ';
$string['collesapname'] = 'Yap�salc� �evrimi�i ��renme Ortam� (Ger�ek ve �stenilen)';
$string['collesm1'] = '�lgi';
$string['collesm1short'] = '�lgi';
$string['collesm2'] = 'Ele�tirel D���nce';
$string['collesm2short'] = 'Ele�tirel D���nce';
$string['collesm3'] = 'Etkile�im';
$string['collesm3short'] = 'Etkile�im';
$string['collesm4'] = '��retici Deste�i';
$string['collesm4short'] = '��retici Deste�i';
$string['collesm5'] = 'Kar��l�kl� Destek';
$string['collesm5short'] = 'Kar��l�kl� Destek';
$string['collesm6'] = 'Yorumlama';
$string['collesm6short'] = 'Yorumlama';
$string['collesmintro'] = 'Bu �evrimi�i �nitede...';
$string['collespintro'] = 'Bu anketin amac�, bu �nitenin �evrimi�i sunumunun ��renmenize ne kadar katk� sa�lad���n� anlamam�za yard�mc� olmakt�r. 

A�a��daki 24 c�mle sizin <b>istedi�iniz</b> (ideal) durumu belirlemek i�in verilmi�tir. 

\'Do�ru\' ya da \'Yanl��\' cevap yoktur. Biz sadece sizin d���ncenizi ��renmek istiyoruz. Cevaplar�n�z�n tam bir gizlilik i�inde de�erlendirilece�inden ve notlar�n�z� etkilemeyece�inden emin olabilirsiniz.

Sizin dikkatlice d���n�lm�� cevaplar�n�z, bu �nitenin ileride yap�lacak olan �evrimi�i sunumunu geli�tirmemize yard�mc� olacakt�r. 

�ok te�ekk�r ederiz. ';
$string['collespname'] = 'Yap�salc� �evrimi�i ��renme Ortam� (�stenilen)';
$string['done'] = 'Tamamland�';
$string['download'] = '�ndir';
$string['downloadexcel'] = 'Verileri Excel olarak indir';
$string['downloadinfo'] = 'Bu anketten elde edilebilecek ham bilgiyi Excel, SPSS veya benzeri programramlarda analiz etmeye uygun bir �ekilde indirebilirsiniz. ';
$string['downloadtext'] = 'Verileri d�z yaz� dosyas� olarak indir';
$string['editingasurvey'] = 'Anket d�zenleme';
$string['guestsnotallowed'] = 'Anketi ziyaret�ilerin yan�tlamas�na izin verilmemektedir';
$string['helpsurveys'] = 'Farkl� anket t�rleriyle ilgili yard�m';
$string['howlong'] = 'Bu anketi tamamlaman�z ne kadar zaman�n�z� ald�?';
$string['howlongoptions'] = '1 dakikadan az,1-2 dk,2-3 dk,3-4 dk,4-5 dk,5-10 dk,10 dakikadan �ok';
$string['ifoundthat'] = 'Ger�ekte olan';
$string['introtext'] = 'Tan�t�m metni';
$string['ipreferthat'] = '�stedi�im';
$string['modulename'] = 'Anket Formu';
$string['modulenameplural'] = 'Anket Formlar�';
$string['name'] = 'Ad';
$string['newsurveyresponses'] = 'Yeni anket cevaplar�';
$string['nobodyyet'] = 'Hen�z kimse bu anketi tamamlamad�';
$string['notdone'] = 'Hen�z tamamlanmad�';
$string['notes'] = '�zel ��z�mlemeleriniz ve notlar�n�z';
$string['othercomments'] = 'Ba�ka bir yorumunuz var m�?';
$string['peoplecompleted'] = '�u ana kadar $a ki�i bu anketi tamamlad�';
$string['preferred'] = '�stenilen';
$string['preferredclass'] = 'S�n�f�n istedi�i';
$string['preferredstudent'] = '$a istedi�i';
$string['question'] = 'Soru';
$string['questions'] = 'Sorular';
$string['questionsnotanswered'] = 'Baz� �oktan se�meli sorular yan�tlanmad�.';
$string['report'] = 'Anket raporu';
$string['savednotes'] = 'Notlar�n�z kaydedildi';
$string['scaleagree5'] = 'Kesinlikle kar��,Olduk�a kar��,Ne kar�� ne de taraftar,Olduk�a taraftar,Tamamen taraftar';
$string['scales'] = '�l�ekler';
$string['scaletimes5'] = 'Hi�bir zaman,Nadiren,Ara s�ra,S�k s�k,Her zaman';
$string['seemoredetail'] = 'Ayr�nt�lar� g�rmek i�in t�klay�n�z';
$string['selectedquestions'] = '�l�ekten se�ilen sorular, t�m ��renciler';
$string['summary'] = '�zet';
$string['surveycompleted'] = 'Bu anketi tamamlad�n�z.  A�a��daki grafikte s�n�f ortalamas�na g�re �zet sonucunuz g�sterilmektedir.';
$string['surveyname'] = 'Anket ad�';
$string['surveysaved'] = 'Anket kaydedildi';
$string['surveytype'] = 'Anket t�r�';
$string['thanksforanswers'] = 'Bu ankete kat�ld���n�z i�in te�ekk�r ederiz, $a';
$string['time'] = 'S�re';
$string['viewsurveyresponses'] = 'Toplam $a anket sonucunu g�ster';

?>
