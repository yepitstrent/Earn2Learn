<?PHP // $Id: enrol_authorize.php,v 1.1.2.5 2006/02/06 10:00:35 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.6 development (2005101200)


$string['adminauthorizeccapture'] = '�versyn av best�llningar och inst�llningar f�r 
\'Auto-Capture\' (automatiskt notera/registrera?)';
$string['adminauthorizeemail'] = 'Inst�llningar f�r s�ndning av e-post';
$string['adminauthorizesettings'] = 'Inst�llningar f�r Authorize.net ';
$string['adminauthorizewide'] = 'Inst�llningar p� global webbplatsniv�';
$string['adminneworder'] = 'Kare administrat�r!

Du har f�tt en ny avvaktande best�llning:

Best�llning ID: $a->orderid
Transaktion ID: $a->transid
Anv�ndare: $a->user
Kurs: $a->course
Summa: $a->amount

\'AUTO-CAPTURE\' AKTIVERAD?: $a->acstatus

Om \'auto-capture\' �r aktiverat s� kommer 
kreditkortet att \'noteras\' $a->captureon
och sedan kommer studenten/eleven/deltagaren/
den l�rande att registreras p� kursen annars
kommer det att utg� p� $a->expireon och d� g�r 
det inte att \'notera\' efter denna dag. 

Du kan �ven omedelbart acceptera/avsl� betalningen
f�r att registrera studenten/eleven/deltagaren/den
l�rande genom att f�lja denna l�nk: 
$a->url
';
$string['adminnewordersubject'] = '$a->course: Ny avvaktande best�llning($a->orderid)';
$string['adminreview'] = 'Granska best�llningen igen innan kreditkortet behandlas.';
$string['amount'] = 'Summa';
$string['anlogin'] = 'Authorize.net: Namn f�r inloggning';
$string['anpassword'] = 'Authorize.net: L�senord (inte obligatoriskt)';
$string['anreferer'] = 'Definiera referer URL om det �r n�dv�ndigt. 
Detta skickar raden \"Referer: URL\" som en 
inb�ddad del  webb-f�rfr�gan. ';
$string['antestmode'] = 'Authorize.net:  Testa bara transaktionerna (inga pengar kommer att dras)';
$string['antrankey'] = 'Authorize.net: Transaktionskod';
$string['authorizedpendingcapture'] = 'Auktoriserad/Avvaktar notering';
$string['canbecredit'] = '�terbetalning kan ske t.o.m.  $a->upto';
$string['cancelled'] = 'Avbruten';
$string['capture'] = 'Noterad';
$string['capturedpendingsettle'] = 'Noterad/Avvaktar �verenskommelse';
$string['capturedsettled'] = 'Noterad/�verenskommen';
$string['capturetestwarn'] = 'Noteringen tycks fungera men ingen post i databasen
har uppdaterats i testl�ge';
$string['captureyes'] = 'Kreditkortet kommer att bli noterat och studenten/eleven/
deltagaren/den l�rande kommer att bli registrerad p� kursen. �r Du s�ker?';
$string['ccexpire'] = 'Datum f�r utg�ng';
$string['ccexpired'] = 'Kreditkortet �r utg�nget';
$string['ccinvalid'] = 'Ogiltigt kortnummer';
$string['ccno'] = 'Nummer p� kreditkort';
$string['cctype'] = 'Typ av kreditkort';
$string['ccvv'] = 'Verifiering av kort';
$string['ccvvhelp'] = 'Se p� kortets baksida (de tre sista siffrorna)';
$string['choosemethod'] = 'Om Du har kursnyckeln f�r att registrera Dig p�
kursen - skriv d� in den; annars m�ste Du betala 
f�r den h�r kursen.';
$string['chooseone'] = 'Fyll i det ena eller b�da av de f�ljande f�lten';
$string['credittestwarn'] = 'Kredit tycks vara accepterad men ingen post i databasen har lagts in i testl�ge';
$string['cutofftime'] = 'Avbrott av transaktion. N�r den senaste transaktion h�mtas f�r �verenskommelse?';
$string['description'] = 'Modulen Authorize.net g�r det m�jligt f�r Dig att
arrangera betalkurser. Om kostnaden f�r kursen �r 
NOLL s� blir inte
studenterna/eleverna/deltagarna/de l�rande 
avkr�vda n�gon betalning. Det finns en inst�llning
f�r kostnad som avser hela webbplatsen som Du kan
st�lla in som standard och en inst�llning som
avser kurser som Du kan st�lla in f�r varje 
enskild kurs. Kostnaden f�r en kurs g�ller f�re
den f�r webbplatsen.<br /><br /><b>OBS!</b>Om Du anger en nyckel f�r att registrera sig p� kursen
s� kan studenter/elever/deltagare/l�rande �ven 
registrera sig p� det s�ttet. Detta kan Du anv�nda
f�r att administrera en blandning av betalande och
inte-betalande deltagare.
';
$string['enrolname'] = 'Authorize.net: Credit Card Gateway';
$string['expired'] = 'Utg�tt';
$string['howmuch'] = 'Hur mycket?';
$string['httpsrequired'] = 'Tyv�rr kan vi inte behandla Din f�rfr�gan just nu.
Konfigurationen av den h�r webbplatsen fungerade
inte korrekt. <br /><br />
Var sn�ll och mata inte in numret p� Ditt kreditkort
om Du inte ser ett gult l�s l�ngst ner p� webbl�saren. 
Det betyder att alla data som s�nds mellan klienten
och servern krypteras. S� informationen �r skyddad 
under f�rflyttningen mellan tv� datorer och ingen 
kan f�nga upp Ditt kortnummer under den proceduren.
';
$string['logindesc'] = 'Det h�r alternativet m�ste vara P�.
<br /><br />
Vi rekommenderar starkt att Du st�ller in  alternativet
<a href=\"$a->url\">loginhttps ON</a> i Admin>> Variabler>> S�kerhet.
<br /><br /> 
Om Du aktiverar detta s� kommer Moodle att anv�nda en s�ker https anslutning enbart f�r sidorna f�r inloggning och betalning.';
$string['nameoncard'] = 'Namn p� kort';
$string['noreturns'] = 'Inga \'returns\' ers�ttningar';
$string['notsettled'] = 'Inte �verenskommen';
$string['orderid'] = 'ID f�r best�llning';
$string['paymentmanagement'] = 'Administration av betalningar';
$string['paymentpending'] = 'Din betalning f�r den h�r kursen �r avvaktande enligt det h�r best�llningsnumret $a->orderid.';
$string['refund'] = '�terbetalning';
$string['refunded'] = '�terbetalad';
$string['returns'] = ' \'returns\' ers�ttningar';
$string['reviewday'] = 'Registrera automatiskt kreditkortet om inte en 
l�rare eller administrat�r granskar best�llningen
igen inom <b>$a</b> dagar. CRON M�STE VARA AKTIVERAT.<br />
(O dagar inneb�r att automatisk registrering
avaktiveras, det inneb�r ocks� att  l�rare, admin
granskar best�llningen manuellt. Transaktionen 
kommer att avbrytas om Du avaktiverar autoregistrering 
eller om Du inte granskar den inom 30 dagar).';
$string['reviewnotify'] = 'Din betalning kommer att granskas. Du kan f�rv�nta
Dig ett e-postmeddelande fr�n Din l�rare inom ett
par dagar.';
$string['sendpaymentbutton'] = 'Skicka betalning';
$string['settled'] = '�verenskommen';
$string['settlementdate'] = 'Datum f�r �verenskommelse';
$string['subvoidyes'] = 'Transaktion f�r �terbetalning $a->transid kommer att
avbrytas och det kommer att kreditera Ditt konto med
$a->amount   �r Du s�ker?';
$string['tested'] = 'Testad';
$string['testmode'] = '[TESTL�GE]';
$string['transid'] = 'ID f�r transaktion';
$string['unenrolstudent'] = 'Avregistrera l�rande?';
$string['void'] = 'Void';
$string['voidtestwarn'] = '\'Void\' tycks fungera men ingen post i databasen har  uppdaterats i testl�ge';
$string['voidyes'] = 'Transaktionen kommer att avbrytas. �r Du s�ker?';
$string['zipcode'] = 'Postkod, t.ex . postnummer';

?>
