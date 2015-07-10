<?PHP // $Id: enrol_authorize.php,v 1.1.2.3 2006/02/06 09:59:47 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.6 development (2005101200)

$string['adminauthorizeccapture'] = 'Megrendel�s ellen�rz�se �s be�ll�t�sok automatikus r�gz�t�se';
$string['adminauthorizeemail'] = 'E-mail k�ld�s�nek be�ll�t�sai';
$string['adminauthorizesettings'] = 'Authorize.net be�ll�t�sai';
$string['adminauthorizewide'] = 'Port�lra �rv�nyes be�ll�t�sok';
$string['adminneworder'] = ' Tisztelt Rendszergazda!
                
  �j elb�r�land� megrendel�st kapott:

   Rendel�sazonos�t�: $a->orderid
   �gyletazonos�t�: $a->transid
   Felhaszn�l�: $a->user
   Kurzus: $a->course
   �sszeg: $a->amount
               
   AUTOMATIKUS MEGTERHEL�S BEKAPCSOLVA?: $a->acstatus
                
  Ha az automatikus megterhel�s be van kapcsolva, $a->captureon eset�n megt�rt�nik a hitelk�rtya megterhel�se, 
  �s a tanul�t beiratkoztatja a kurzusra. Ellenkez� esetben  $a->expireon d�tummal lej�r, �s ezt k�vet�en m�r nem lehet megterhelni.
                
  Lehet�s�ge van a tanul�t beiratkoztat� fizet�s elfogad�s�ra/elutas�t�s�ra az al�bbi ugr�pontot k�vetve:
  $a->url';
$string['adminnewordersubject'] = '$a->course: �j elb�r�land� megrendel�s($a->orderid)';
$string['adminreview'] = 'Rendel�s ellen�rz�se a hitelk�rtya haszn�lata el�tt.';
$string['amount'] = '�sszeg';
$string['anlogin'] = 'Authorize.net: felhaszn�l�n�v';
$string['anpassword'] = 'Authorize.net: jelsz� (nem sz�ks�ges)';
$string['anreferer'] = 'Adja meg itt az URL-hivatkoz�st, ha ezt be�ll�tja az authorize.net fi�kj�ban. Ezzel a weboldalk�r�sben egy \"Referer: URL\" fejl�c tov�bb�t�dik.';
$string['antestmode'] = 'Authorize.net: �gyletek ellen�rz�se';
$string['antrankey'] = 'Authorize.net: �gyletkulcs';
$string['authorizedpendingcapture'] = 'Enged�lyezett / Folyamatban l�v� megterhel�s';
$string['canbecredit'] = 'Nem t�r�thet� vissza ide:  $a->upto';
$string['cancelled'] = 'T�r�lve';
$string['capture'] = 'Megterhel�s';
$string['capturedpendingsettle'] = 'Megterhelve / Rendez�s folyamatban';
$string['capturedsettled'] = 'Megterhelve / Rendezve';
$string['capturetestwarn'] = 'A megterhel�s m�k�dni l�tszik, de tesztel� m�dban nem t�rt�nt rekordfriss�t�s';
$string['captureyes'] = 'A hitelk�rty�t megterhelj�k �s a tanul�t beiratkoztatjuk. Biztosan ezt akarja?';
$string['ccexpire'] = 'Lej�rat d�tuma';
$string['ccexpired'] = 'A hitelk�rtya lej�rt';
$string['ccinvalid'] = '�rv�nytelen k�rtyasz�m';
$string['ccno'] = 'Hitelk�rtyasz�m';
$string['cctype'] = 'Hitelk�rtyat�pus';
$string['ccvv'] = 'K�rtyaellen�rz�s';
$string['ccvvhelp'] = 'L�sd a k�rtya t�loldal�n (3 sz�mjegy)';
$string['choosemethod'] = 'Adja meg a kurzus beiratkoz�si k�dj�t, ha ismeri; ellenkez� esetben fizetnie kell a kurzus elv�gz�s��rt.';
$string['chooseone'] = 'Az al�bbi k�t mez�t vagy az egyiket t�ltse ki';
$string['credittestwarn'] = 'A hitel m�k�dni l�tszik, de tesztel� m�dban nem ker�lt rekord az adatb�zisba';
$string['cutofftime'] = '�gylet megsz�ntet�s�nek ideje. Mikor ker�l sor az utols� �gylet rendez�s�re?';
$string['description'] = 'Az Authorize.net modullal forgalmaz�k t�r�t�ses kurzusai hozhat�k l�tre. Ha valamely kurzus �ra nulla, a tanul�knak nem kell fizetni a bel�p�shez. Itt adhat� meg a port�lra glob�lisan �rv�nyes k�lts�g, valamint az egyes kurzusokhoz egyenk�nt be�ll�that� k�lts�g. A kurzusk�lts�g fel�l�rja a port�lk�lts�get.';
$string['enrolname'] = 'Authorize.net: hitelk�rtyakapu';
$string['expired'] = 'Lej�rt';
$string['howmuch'] = 'Mennyi?';
$string['httpsrequired'] = 'Sajnos k�r�s�t jelenleg nem tudjuk feldolgozni. A port�lt nem lehetett megfelel� m�don be�ll�tani.<br /><br /> Ne adja meg a hitelk�rtyasz�m�t, ha a b�ng�sz� alj�n nem jelenik meg egy s�rga lakat. Ez azt jelzi, hogy az �gyf�l �s a kiszolg�l� k�z�tt minden adat tov�bb�t�sa k�doltan t�rt�nik. �gy a 2 sz�m�t�g�p k�z�tti kapcsolat adatforgalma v�dve van �s hitelk�rty�ja sz�m�t nem lehet interneten kereszt�l levenni.';
$string['logindesc'] = 'Ezt az opci�t be kell kapcsolni. <br /><br /> A Rendszergazda / V�ltoz�k / Biztons�g r�szben ellen�rizze, be van-e kapcsolva a <a href=\"$a->url\">loginhttps</a> opci�. <br /><br />
Ennek bekapcsol�sakor a Moodle csak a bejelentkez�si �s fizet�si oldalakon haszn�l biztons�gos https-csatlakoz�st.';
$string['nameoncard'] = 'K�rty�n szerepl� n�v';
$string['noreturns'] = 'Nincs visszat�r�t�s!';
$string['notsettled'] = 'Nincs rendezve';
$string['orderid'] = 'Rendel�s azonos�t�ja';
$string['paymentmanagement'] = 'Fizet�s kezel�se';
$string['paymentpending'] = 'Ezen kurzushoz tartoz� fizet�s�nek rendez�se folyamatban ezzel a rendel�sazonos�t�val: $a->orderid.';
$string['refund'] = 'Visszat�r�t';
$string['refunded'] = 'Visszat�r�tve';
$string['returns'] = 'Visszat�r�t�sek';
$string['reviewday'] = 'Automatikusan terhelje meg a hitelk�rty�t, ha egy tan�r vagy egy rendszergazda  <b>$a</b> napon bel�l nem vizsg�lja fel�l a rendel�st. A CRON LEGYEN BEKAPCSOLVA.<br />(0 nap = automatikus terhel�s kikapcsol�sa = tan�r, rendszergazda k�zi �ton fel�lvizsg�lja. Az �gylet t�rl�dik, ha kikapcsolja az automatikus terhel�st, vagy ha 30 napon bel�l fel�lvizsg�lja.)';
$string['reviewnotify'] = 'Fizet�s�t ellen�rizz�k. N�h�ny napon bel�l e-mail �zenetet kap a tan�r�t�l.';
$string['sendpaymentbutton'] = 'P�nz k�ld�se';
$string['settled'] = 'Rendezve';
$string['settlementdate'] = 'Rendez�s d�tuma';
$string['subvoidyes'] = 'A visszat�r�tett $a->transid �gylet t�r�lve lesz �s $a->amount �sszeget j�v��runk a sz�ml�j�n. Biztosan ezt akarja?';
$string['tested'] = 'Elen�rizve';
$string['testmode'] = '[ELLEN�RZ�SI M�D]';
$string['transid'] = '�gyletazonos�t�';
$string['unenrolstudent'] = 'A tanul�t kiiratkoztatja?';
$string['void'] = '�rv�nytelen';
$string['voidtestwarn'] = 'Az �rv�nytelen m�k�dni l�tszik, de tesztel� m�dban nem t�rt�nt rekordfriss�t�s';
$string['voidyes'] = 'Az �gyletet t�r�lj�k. Biztosan ezt akarja?';
$string['zipcode'] = 'Ir�ny�t�sz�m';

?>
