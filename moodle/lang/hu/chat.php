<?PHP // $Id: chat.php,v 1.6.2.3 2006/02/06 09:59:47 moodler Exp $ 
      // chat.php - created with Moodle 1.4 (2004083100)


$string['beep'] = 'cs�nget�s';
$string['chatintro'] = 'Bevezet� sz�veg';
$string['chatname'] = 'A cseveg�szoba neve';
$string['chatreport'] = 'Cseveg�sek';
$string['chattime'] = 'A k�vetkez� cseveg�si id�';
$string['configmethod'] = 'Szok�sos cseveg�si m�dszern�l a cseveg�k rendszeresen r�kapcsol�dnak a szerverre friss�t�sek�rt. Be�ll�t�sra nincs sz�ks�g �s mindenhol m�k�dik, de sok cseveg� eset�n megterhelheti a szervert. Szerverd�mon haszn�lata eset�n megk�veteli a Unix-h�jhoz val� hozz�f�r�st, de gyors �s m�retezhet� cseveg�si k�rnyezetet ad.';
$string['configoldping'] = 'Mennyi ideig tart� hallgat�s ut�n kell egy felhaszn�l�t kil�pettnek tekinteni (m�sodpercben)?
Ez csak egy fels� hat�r, mert a lekapcsol�d�s gyorsan �rz�kelhet�. Alacsonyabb �rt�kek jobban megterhelik a szervert. Ha a szok�sos m�dszert haszn�lja, <strong>soha</strong> ne �ll�tsa ezt az �rt�ket alacsonyabbra, mint 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Milyen gyakran legyen friss�tve a cseveg�szoba (m�sodpercben)? Alacsony �rt�kre �ll�tva a cseveg�szoba gyorsabbnak l�tszik, azonban nagyobb terhel�st jelenthet a szervernek, ha egyszerre sokan csevegnek';
$string['configrefreshuserlist'] = 'Milyen gyakran legyen friss�tve a felhaszn�l�k list�ja? (mp-ben)';
$string['configserverhost'] = 'A szerverd�mont tartalmaz� sz�m�t�g�p gazdaneve';
$string['configserverip'] = 'A fenti gazdan�vnek megfelel� IP-c�m';
$string['configservermax'] = 'Cseveg�k megengedett max. sz�ma';
$string['configserverport'] = 'A szerveren a d�monnal haszn�land� port';
$string['currentchats'] = 'Zajl� cseveg�sek';
$string['currentusers'] = 'Aktu�lis felhaszn�l�k';
$string['deletesession'] = 'Cseveg�s t�rl�se';
$string['deletesessionsure'] = 'Biztosan t�r�lni akarja ezt a cseveg�st?';
$string['donotusechattime'] = 'Ne jelenjen meg a cseveg�sek ideje';
$string['enterchat'] = 'Kattintson ide a cseveg�sbe val� bekapcsol�d�shoz';
$string['errornousers'] = 'Nem tal�lhat� felhaszn�l�!';
$string['explaingeneralconfig'] = 'Ezek a be�ll�t�sok <strong>mindig</strong> �rv�nyesek';
$string['explainmethoddaemon'] = 'Ezek a be�ll�t�sok <strong>csak</strong> akkor sz�m�tanak, ha a chat_method sz�m�ra \"Cseveg� szerverd�monnal\"-t v�lasztott';
$string['explainmethodnormal'] = 'Ezek a be�ll�t�sok <strong>csak</strong> akkor sz�m�tanak, ha a chat_method sz�m�ra \"Szok�sos m�dszer\"-t v�lasztott';
$string['generalconfig'] = '�ltal�nos be�ll�t�s';
$string['helpchatting'] = 'Cseveg�s s�g�ja';
$string['idle'] = 'Nem zajlik cseveg�s';
$string['messagebeepseveryone'] = '$a mindenkit cs�nget!';
$string['messagebeepsyou'] = '$a most cs�ngetett �nnek!';
$string['messageenter'] = '$a most l�pett be';
$string['messageexit'] = '$a most t�vozott';
$string['messages'] = '�zenetek';
$string['methoddaemon'] = 'Cseveg� szerverd�mon';
$string['methodnormal'] = 'Szok�sos m�dszer';
$string['modulename'] = 'Cseveg�s';
$string['modulenameplural'] = 'Cseveg�sek';
$string['neverdeletemessages'] = 'Az �zenetek soha nem t�rl�djenek';
$string['nextsession'] = 'A k�vetkez� cseveg�s';
$string['noguests'] = 'A cseveg�sbe vend�gek nem kapcsol�dhatnak be';
$string['nomessages'] = 'M�g nincs �zenet';
$string['repeatdaily'] = 'Minden nap ugyanakkor';
$string['repeatnone'] = 'Nincs ism�tl�s - csak a megadott id�pont megjelen�t�se';
$string['repeattimes'] = 'Cseveg�sek ism�tl�se';
$string['repeatweekly'] = 'Minden h�ten ugyanakkor';
$string['savemessages'] = 'Kor�bbi cseveg�sek ment�se';
$string['seesession'] = 'A cseveg�s megtekint�se';
$string['sessions'] = 'Cseveg�sek';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Kor�bbi cseveg�sek megtekint�se mindenkinek';
$string['viewreport'] = 'Kor�bbi cseveg�sek megtekint�se';

?>
