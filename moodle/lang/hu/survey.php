<?PHP // $Id: survey.php,v 1.8.2.3 2006/02/06 09:59:47 moodler Exp $ 
      // survey.php - created with Moodle 1.4 (2004083100)


$string['actual'] = 'Aktu�lis';
$string['actualclass'] = 'Aktu�lis oszt�ly';
$string['actualstudent'] = 'Aktu�lis $a';
$string['allquestions'] = 'Minden k�rd�s sorrendben, minden tanul�';
$string['allscales'] = 'Minden sk�la, minden tanul�';
$string['alreadysubmitted'] = 'M�r elk�ldte ezt a k�rd��vet';
$string['analysisof'] = '$a elemz�se';
$string['answers'] = 'V�laszok';
$string['attls1'] = 'M�sok mondanival�j�nak �rt�kel�s�n�l az �rvek min�s�g�t veszem figyelembe, �s nem azt, hogy ki mondja.';
$string['attls10'] = 'Fontos sz�momra, hogy egy elemz�sn�l objekt�v maradjak, amennyire csak lehets�ges.';
$string['attls10short'] = 'objekt�vnak maradni';
$string['attls11'] = 'Ink�bb egy�tt pr�b�lok gondolkodni az emberekkel, nem pedig vitatkozni vel�k.';
$string['attls11short'] = 'egy�tt gondolkodni az emberekkel';
$string['attls12'] = 'Az �rvek �rt�kel�s�n�l vannak bizonyos krit�riumaim.';
$string['attls12short'] = '�rt�kel�s krit�riumokkal';
$string['attls13'] = 'Ink�bb meg�rteni pr�b�lom m�sok v�lem�ny�t, mintsem �rt�kelni.';
$string['attls13short'] = 'pr�b�lni meg�rteni';
$string['attls14'] = 'Megpr�b�lom megmutatni m�sok gondolkod�s�nak gyenge pontjait, hogy seg�tsem �ket v�lem�ny�k tiszt�z�s�ban.';
$string['attls14short'] = 'gyenge pontok megmutat�sa';
$string['attls15'] = 'Vit�s k�rd�sek megbesz�l�sekor megpr�b�lom belek�pzelni magam m�sok helyzet�be, hogy meg�rtsem, mi�rt gondolkodnak �gy.';
$string['attls15short'] = 'belek�pzel�s';
$string['attls16'] = 'Az elemz�si m�dszeremet \'kipr�b�l�sosnak\' lehetne nevezni, mert nagyon alaposan figyelembe veszek minden t�nyt.';
$string['attls16short'] = 'kipr�b�l�s';
$string['attls17'] = 'Probl�mamegold�s sor�n t�bbre �rt�kelem a logik�t �s az �rvel�st saj�t egy�ni szempontjaimn�l.';
$string['attls17short'] = 'a logik�t t�bbre tartom';
$string['attls18'] = 'Az eny�mt�l k�l�nb�z� v�lem�nyeket emp�ti�val kezelem.';
$string['attls18short'] = 'emp�tia';
$string['attls19'] = 'Ha olyanokkal tal�lkozom, akiknek a v�lem�nye idegennek t�nik a sz�momra, megpr�b�lom elk�pzelni, mik�nt alak�thatt�k ki ezt a v�lem�nyt.';
$string['attls19short'] = 'megpr�b�lni elk�pzelni ';
$string['attls1short'] = 'az �rv min�s�g�re figyelni ';
$string['attls2'] = 'Szeretem elj�tszani az �rd�g �gyv�dj�t - a m�sikkal ellent�tes dolgot �ll�tani.';
$string['attls20'] = 'Szoktam gondolkodni azon, hogy mi a baj egyes dolgokkal. P�ld�ul egy irodalmi �rtelmez�sben olyasmit keresek, ami nincs j�l megindokolva.';
$string['attls20short'] = 'mi rossz?';
$string['attls2short'] = 'elj�tszani az �rd�g �gyv�dj�t';
$string['attls3'] = 'Szeretem tudni, milyen h�tt�rrel rendelkeznek m�sok �s milyen tapasztalatok alapj�n v�lekednek �gy, ahogyan v�lekednek.';
$string['attls3short'] = 'milyen h�tt�rrel rendelkeznek m�sok';
$string['attls4'] = 'Tanulm�nyaim legfontosabb r�sze az volt, amikor olyanokr�l tanultam, akik nagyon k�l�nb�znek t�lem.';
$string['attls4short'] = 'a t�lem k�l�nb�z�k meg�rt�se';
$string['attls5'] = 'A legink�bb �gy azonosulhatok �nmagammal, ha egy sor m�sf�le emberrel �rintkezem.';
$string['attls5short'] = '�rintkez�s m�sf�le emberekkel';
$string['attls6'] = 'Szeretem az eny�mt�l elt�r� h�tt�rrel rendelkez�k v�lem�ny�t meghallgatni - seg�t meg�rtenem, mit�l l�that�k a dolgok annyira sokf�lek�ppen.';
$string['attls6short'] = 'szeretek v�lem�nyeket hallgatni';
$string['attls7'] = '�gy l�tom, hogy er�s�thetem a v�lem�nyemet, ha olyannal vitatkozom, aki nem �rt velem egyet.';
$string['attls7short'] = 'meger�s�t�s vit�n kereszt�l ';
$string['attls8'] = 'Mindig is �rdekelt, hogy az emberek mi�rt teszik �s hiszik azt, amit cselekednek.';
$string['attls8short'] = 'ismerni, hogy mi�rt teszik ';
$string['attls9'] = 'Gyakran tapasztalom azt, hogy �ltalam olvasott k�nyvek szerz�ivel vitatkozom �s megpr�b�lok logikusan r�j�nni, hogy hol t�vednek.';
$string['attls9short'] = 'vitatkozni a szerz�kkel';
$string['attlsintro'] = 'Ennek a k�rd��vnek az a c�lja, hogy seg�tsen a gondolkod�s �s a tanul�s ir�nti viszonyul�sok meg�rt�s�ben.
Nincsenek j� �s rossz v�laszok. A v�lem�ny�re vagyunk k�v�ncsiak. V�laszait bizalmasan fogjuk kezelni, �s nem befoly�solj�k majd az �n �rt�kel�s�t.';
$string['attlsm1'] = 'Viszonyul�sok a gondolkod�shoz �s a tanul�shoz';
$string['attlsm2'] = 'Kapcsolt tanul�s';
$string['attlsm3'] = 'Elk�l�n�lt tanul�s';
$string['attlsmintro'] = 'Vita t�rgya ...';
$string['attlsname'] = 'ATTLS (20 t�teles v�ltozat)';
$string['ciq1'] = 'Mikor k�t�tte le legink�bb az oszt�lyban a tanul�s?';
$string['ciq1short'] = 'Legjobban lek�t�tt';
$string['ciq2'] = 'Mikor k�t�tte le legkev�sb� az oszt�lyban a tanul�s?';
$string['ciq2short'] = 'Legkev�sb� lek�t�tt';
$string['ciq3'] = 'Mely tev�kenys�get tal�lta a f�rumokon b�rki r�sz�r�l a legink�bb t�mogat� vagy seg�t� jelleg�nek?';
$string['ciq3short'] = 'Seg�t� mozzanat';
$string['ciq4'] = 'Mely tev�kenys�get tal�lta a f�rumokon b�rki r�sz�r�l a legink�bb zavarba ejt�nek?';
$string['ciq4short'] = 'Zavarba ejt� mozzanat';
$string['ciq5'] = 'Milyen esem�ny lepte meg a legjobban?';
$string['ciq5short'] = 'Meglep� mozzanat';
$string['ciqintro'] = 'Az oszt�lyban t�rt�nt legut�bbi esem�nyekre gondolva v�laszolja meg az al�bbi k�rd�seket.';
$string['ciqname'] = 'Fontos esem�nyek';
$string['clicktocontinue'] = 'A folytat�shoz kattintson ide';
$string['clicktocontinuecheck'] = 'Az ellen�rz�shez �s folytat�shoz kattintson ide';
$string['colles1'] = 'tanul�som sz�momra �rdekes dolgokra ir�nyul.';
$string['colles10'] = 'Megk�rek m�s tanul�kat, hogy fejts�k ki v�lem�ny�ket.';
$string['colles10short'] = 'Magyar�zatot k�rek';
$string['colles11'] = 'm�s tanul�k megk�rnek, hogy fejtsem ki a v�lem�nyemet.';
$string['colles11short'] = 'Magyar�zatot k�rnek t�lem';
$string['colles12'] = 'm�s tanul�k reag�lnak �tleteimre.';
$string['colles12short'] = 'a tanul�k reag�lnak r�m';
$string['colles13'] = 'a tutor gondolkod�sra serkent.';
$string['colles13short'] = 'a tutor gondolkodtat';
$string['colles14'] = 'a tutor r�szv�telre serkent.';
$string['colles14short'] = 'a tutor b�tor�t';
$string['colles15'] = 'a tutor megfelel� p�rbesz�det biztos�t.';
$string['colles15short'] = 'a tutor p�rbesz�det biztos�t';
$string['colles16'] = 'a tutor kritikus �nvizsg�latra �szt�n�z.';
$string['colles16short'] = 'a tutor kritikus �nvizsg�latra �szt�n�z';
$string['colles17'] = 'a t�bbi tanul� r�szv�telre serkent.';
$string['colles17short'] = 'a tanul�k b�tor�tanak';
$string['colles18'] = 'm�s tanul�k dics�rik r�szv�telemet.';
$string['colles18short'] = 'a tanul�k dics�rnek';
$string['colles19'] = 'm�s tanul�k �rt�kelik r�szv�telemet.';
$string['colles19short'] = 'a tanul�k �rt�kelnek';
$string['colles1short'] = '�rdekes dolgokra ir�nyul';
$string['colles2'] = 'amit tanulok, fontos a szakmai gyakorlatomhoz.';
$string['colles20'] = 'm�s tanul�k �t�rzik tanul�si er�fesz�t�seimet.';
$string['colles20short'] = 'a tanul�k �t�rzik';
$string['colles21'] = 'M�s tanul�k �zeneteit figyelembe veszem.';
$string['colles21short'] = 'Meg�rtem a t�bbi tanul�t';
$string['colles22'] = 'M�s tanul�k figyelembe veszik �zeneteimet.';
$string['colles22short'] = 'A tanul�k meg�rtenek';
$string['colles23'] = 'Figyelembe veszem a tutor �zeneteit.';
$string['colles23short'] = 'Meg�rtem a tutort';
$string['colles24'] = 'A tutor figyelembe veszi �zeneteimet.';
$string['colles24short'] = 'A tutor meg�rt';
$string['colles2short'] = 'fontos a gyakorlatomhoz';
$string['colles3'] = 'Megtanulom, mik�nt jav�tsam a szakmai j�rtass�gomat.';
$string['colles3short'] = 'jav�tom a j�rtass�gomat';
$string['colles4'] = 'amit tanulok, j�l kapcsol�dik a szakmai gyakorlatomhoz.';
$string['colles4short'] = 'kapcsol�dik a j�rtass�gomhoz';
$string['colles5'] = 'Kritikusan �llok hozz� a tanul�si m�dszeremhez.';
$string['colles5short'] = 'Kritikusan szeml�lem a tanul�somat';
$string['colles6'] = 'Kritikusan �llok hozz� a saj�t gondolataimhoz.';
$string['colles6short'] = 'Kritikusan szeml�lem saj�t gondolataimat';
$string['colles7'] = 'Kritikusan �llok hozz� m�s tanul�k gondolataihoz.';
$string['colles7short'] = 'Kritikusan szeml�lem a t�bbi tanul�t';
$string['colles8'] = 'Kritikusan �llok hozz� az olvasm�nyokban szerepl� gondolatokhoz.';
$string['colles8short'] = 'Kritikusan szeml�lem az olvasm�nyokat';
$string['colles9'] = 'Elmagyar�zom gondolataimat m�s tanul�knak.';
$string['colles9short'] = 'Elmagyar�zom gondolataimat';
$string['collesaintro'] = 'Ennek a k�rd��vnek az a c�lja, hogy seg�tsen benn�nket annak felm�r�s�ben, hogy ez az online egys�g mennyire seg�tette �nt a tanul�sban. 
Az al�bbi 24 kijelent�s a jelen egys�ggel kapcsolatos tapasztalat�ra k�rdez r�.

Nincsenek j� �s rossz v�laszok. A v�lem�ny�re vagyunk k�v�ncsiak. V�laszait bizalmasan fogjuk kezelni, �s nem befoly�solj�k majd az �n �rt�kel�s�t. Ha j�l �tgondolt v�laszokat ad, seg�ts�g�nkre lesz abban, hogy ez az egys�g a j�v�ben megfelel�bb form�ban ker�lj�n online t�lal�sra.

K�sz�nj�k!';
$string['collesaname'] = 'COLLES (aktu�lis)';
$string['collesapintro'] = 'Ennek a k�rd��vnek az a c�lja, hogy seg�tsen benn�nket annak felm�r�s�ben, hogy ez az online egys�g mennyire seg�tette �nt a tanul�sban. 
Az al�bbi 24 kijelent�s a jelen egys�gben szerzett <b>kedvez�</b> (ide�lis) �s <b>t�nyleges</b> tapasztalat�nak �sszehasonl�t�s�t k�ri.

Nincsenek j� �s rossz v�laszok. A v�lem�ny�re vagyunk k�v�ncsiak. V�laszait bizalmasan fogjuk kezelni, �s nem befoly�solj�k majd az �n �rt�kel�s�t. Ha j�l �tgondolt v�laszokat ad, seg�ts�g�nkre lesz abban, hogy ez az egys�g a j�v�ben megfelel�bb form�ban ker�lj�n online t�lal�sra.

K�sz�nj�k!';
$string['collesapname'] = 'COLLES (Ide�lis �s t�nyleges)';
$string['collesm1'] = 'Relevancia';
$string['collesm1short'] = 'Relevancia';
$string['collesm2'] = 'Reag�l� gondolkod�s';
$string['collesm2short'] = 'Reag�l� gondolkod�s';
$string['collesm3'] = 'Interaktivit�s';
$string['collesm3short'] = 'Interaktivit�s';
$string['collesm4'] = 'Tutort�mogat�s';
$string['collesm4short'] = 'Tutort�mogat�s';
$string['collesm5'] = 'Tanul�t�rsi t�mogat�s';
$string['collesm5short'] = 'Tanul�t�rsi t�mogat�s';
$string['collesm6'] = '�rtelmez�s';
$string['collesm6short'] = '�rtelmez�s';
$string['collesmintro'] = 'Ebben az online egys�gben...';
$string['collespintro'] = 'Ennek a k�rd��vnek az a c�lja, hogy seg�tsen benn�nket annak felm�r�s�ben, hogy mit �rt�kel �n egy online tanul�sban.

AZ al�bbi 24 meg�llap�t�s az egy�ggel kapcsolatosan az �n <b>prefer�lt</b> (ide�lis) �lm�ny�re k�rdez r�.

Nincsenek \'helyes\' vagy \'rossz\' v�laszok; minkezt a v�lem�nye �rdekel. V�laszait bizalmasan kezelj�k, ezek nem befoly�solj�k az �n �rt�kel�s�t.
Megfontolt v�laszaival seg�t benn�nket abban, hogy az egys�g bemutat�s�t a j�v�ben t�k�letes�thess�k.

K�sz�nj�k!';
$string['collespname'] = 'COLLES (Ide�lis)';
$string['done'] = 'K�sz';
$string['download'] = 'Let�lt�s';
$string['downloadexcel'] = 'Adatok let�lt�se Excel-t�bl�zatk�nt';
$string['downloadinfo'] = 'A k�rd��v �sszes nyers adat�t let�ltheti Excel, SPSS vagy m�s program �ltali elemz�sre alkalmas form�ban.';
$string['downloadtext'] = 'Adatok let�lt�se egyszer� sz�veges f�jlk�nt';
$string['editingasurvey'] = 'K�rd��v szerkeszt�se';
$string['guestsnotallowed'] = 'Vend�gek nem t�lthetnek ki k�rd��vet';
$string['helpsurveys'] = 'K�l�nb�z� t�pus� k�rd��vek s�g�ja';
$string['howlong'] = 'Mennyi ideig tartott a k�rd��v kit�lt�se?';
$string['howlongoptions'] = '1 perc,1-2 perc,2-3 perc,3-4 perc,4-5-perc,5-10 perc,t�bb mint 10 perc alatt';
$string['ifoundthat'] = 'Azt tal�ltam';
$string['introtext'] = 'Bevezet� sz�veg';
$string['ipreferthat'] = 'Ink�bb ezt szeretn�m';
$string['modulename'] = 'Felm�r�s';
$string['modulenameplural'] = 'Felm�r�sek';
$string['name'] = 'N�v';
$string['newsurveyresponses'] = 'Felm�r�sre adott �j v�laszok';
$string['nobodyyet'] = 'Senki nem t�lt�tte m�g ki ezt a k�rd��vet';
$string['notdone'] = 'M�g nincs k�sz';
$string['notes'] = 'Az �n szem�lyes elemz�se �s megjegyz�sei';
$string['othercomments'] = 'Van egy�b megjegyz�se?';
$string['peoplecompleted'] = 'Eddig $a szem�ly t�lt�tte ki a k�rd��vet';
$string['preferred'] = 'Ide�lis';
$string['preferredclass'] = 'Ide�lis oszt�ly';
$string['preferredstudent'] = 'Ide�lis $a';
$string['question'] = 'K�rd�s';
$string['questions'] = 'K�rd�sek';
$string['questionsnotanswered'] = 'N�h�ny feleletv�laszt�s k�rd�sre nem �rkezett v�lasz.';
$string['report'] = 'Felm�r�ssel kapcsolatos jelent�s';
$string['savednotes'] = 'A megjegyz�seit elmentett�k ';
$string['scaleagree5'] = 'Nagyon nem �rt egyet,Valamelyest nem �rt egyet,Semleges, Valamelyest egyet�rt,Teljesen egyet�rt';
$string['scales'] = 'Sk�l�k';
$string['scaletimes5'] = 'Szinte soha,Ritk�n,N�ha,Gyakran,Majdnem mindig';
$string['seemoredetail'] = 'A r�szletek�rt kattintson ide';
$string['selectedquestions'] = 'Egy sk�l�r�l v�lasztott k�rd�sek, minden tanul�';
$string['summary'] = '�sszegz�s';
$string['surveycompleted'] = 'Kit�lt�tte ezt a k�rd��vet. Az al�bbi �bra mutatja v�laszainak �sszegz�s�t az oszt�ly�tlaggal �sszevetve.';
$string['surveyname'] = 'Felm�r�s neve';
$string['surveysaved'] = 'Felm�r�s elmentve';
$string['surveytype'] = 'Felm�r�s t�pusa';
$string['thanksforanswers'] = 'K�sz�nj�k a v�laszait, $a';
$string['time'] = 'Id�';
$string['viewsurveyresponses'] = '$a v�laszainak megtekint�se';

?>
