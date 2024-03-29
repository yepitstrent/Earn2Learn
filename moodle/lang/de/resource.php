<?PHP // $Id: resource.php,v 1.23.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // resource.php - created with Moodle 1.6 development (2005101200)


$string['addresource'] = 'Material hinzuf�gen';
$string['chooseafile'] = 'W�hlen Sie ein Datei aus oder laden Sie eine auf den Server';
$string['chooseparameter'] = 'Parameter ausw�hlen';
$string['configallowlocalfiles'] = 'Beim Erstellen neuer Arbeitsunterlagen k�nnen  Verlinkungen zu lokalen Dateisystemen, Festplatten oder CD-Laufwerken angelegt werden. Das ist sinnvoll wenn in einem Schulungsraum alle Nutzer/innen Zugriff auf gemeinsam Netzwerkverzeichnisse oder CD-Laufwerke haben. Evtl. m�ssen Sie jedoch Sicherheitseinstelungen des Browsers anpassen.';
$string['configdefaulturl'] = 'Wenn Sie eine neue URL basierte Ressource anlegen wird dieser Wert als Voreinstellung bereits angezeigt.';
$string['configfilterexternalpages'] = 'Diese Option wendet den eingestellten Filter (W�rterbuch, Autolinks, etc.) auch f�r alle externen Quellen (Webseiten und hochgeladene HTML-Seiten) an. Wenn Sie diese Option aktivieren, werden Ihre Kursseiten wesentlich langsamer laufen. Nutzen Sie diese Option daher nur wenn Sie sie wirklich ben�tigen.';
$string['configframesize'] = 'Wenn eine Webseite oder eine hochgeladene Datei in einem Frame angezeigt wird, so gibt dieser Wert die Gr��e des Top-Frames, der die Navigation beinhaltet, in Pixeln an.';
$string['configparametersettings'] = 'Stellen Sie die Anfangswerte f�r die Parameter im Formular zur Bereitstellung neuer Arbeitsunterlagen ein. Nach dem ersten �ffnen kann diese individuell angepasst werden.';
$string['configpopup'] = 'Soll eine neue Ressource in einem Popup-Fenster angezeigt werden, falls dies m�glich ist (Grundeinstellung)?';
$string['configpopupdirectories'] = 'Sollen von Popup-Fenstern Verzeichnislinks angezeigt werden? (Voreinstellung)';
$string['configpopupheight'] = 'Welche H�he sollen Popup-Fenster haben (Voreinstellung)?';
$string['configpopuplocation'] = 'Sollen Popup-Fenster das Adressmenu zeigen (Voreinstellung)?';
$string['configpopupmenubar'] = 'Sollen Popup-Fenster das Menu zeigen (Voreinstellung)?';
$string['configpopupresizable'] = 'Soll die Gr��e von Popup-Fenstern ver�nderbar sein (Voreinstellung)?';
$string['configpopupscrollbars'] = 'Sollen Popup-Fenster scrollbar sein (Voreinstellung)?';
$string['configpopupstatus'] = 'Sollen Popup-Fenster eine Statusanzeige haben (Voreinstellung)?';
$string['configpopuptoolbar'] = 'Sollen Popup-Fenster die Toolbar anzeigen (Voreinstellung)?';
$string['configpopupwidth'] = 'Welche Breite sollen Popup-Fenster haben (Voreinstellung)?';
$string['configsecretphrase'] = 'Dieser versteckte Wert wird verwandt, um einen verschl�sselten Wert zu erstellen, der als Parameter an andere Ressourcen gesandt wird. Der verschl�sselte Code wird erstellt von einem md5 Wert der derzeitigen IP Adresse in Verbindung mit dem eingegenen Wert. Z.B. code = md5(IP.secretphrase). Dies erlaubt der angesprochenen Ressource die Verbindung f�r erh�hte Sicherheit zu �berpr�fen.';
$string['configwebsearch'] = 'Wenn eine URL als Webseite oder Link eingef�gt wird soll diese Seite dem Benutzer bei der Suche nach einer URL unterst�tzen.';
$string['configwindowsettings'] = 'Stellen Sie die Anfangswerte f�r die Fenstereinstellungen im Formular zur Bereitstellung neuer Arbeitsunterlagen ein. Nach dem ersten �ffnen kann diese individuell angepasst werden.';
$string['deploy'] = 'Verwenden';
$string['directlink'] = 'Direkter Link zu dieser Datei';
$string['directoryinfo'] = 'Alle Dateien im ausgew�hlten Verzeichnis werden angezeigt';
$string['display'] = 'Fenster';
$string['editingaresource'] = 'Material bearbeiten';
$string['encryptedcode'] = 'Verschl�sselter Code';
$string['example'] = 'Beispiel';
$string['exampleurl'] = 'http://www.beispiel.de/Beispielverzeichnis/Beispieldatei.html';
$string['fetchclienterror'] = 'Beim Aufruf der Seite ist ein Fehler aufgetreten (evtl. eine falsche Web-Adresse).';
$string['fetcherror'] = 'Ein Fehler ist beim Aufruf der Seite aufgetreten.';
$string['fetchservererror'] = 'Ein Fehler (evtl. ein Programmfehler) ist beim Remoteserver aufgetreten . </p>';
$string['filename'] = 'Dateiname';
$string['filtername'] = 'Automatische Verlinkung von Arbeitsunterlagen';
$string['frameifpossible'] = 'Zeigt das Arbeitsmaterial in einem Frame. Die Seitennavigation bleibt sichtbar';
$string['fulltext'] = 'Text-/Webseite';
$string['htmlfragment'] = 'HTML-Teil';
$string['imspackageloaded'] = 'Paket geladen';
$string['localfile'] = 'Lokale Datei';
$string['localfilechoose'] = 'W�hlen Sie eine lokale Datei aus (z.B. CD-ROM Laufwerk)';
$string['localfilehelp'] = 'Hilfe zur Anzeige lokaler Dateien';
$string['localfileinfo'] = '<p>W�hlen Sie eine lokale Datei von Ihrem Computer(-netzwerk). Die Datei wird nicht in das Kursverzeichnis hochgeladen. Beim Aufruf dieser Arbeitsunterlage wird die Datei an dem angegebenen Ort aufgerufen.</p> <p>Dies ist sehr n�tzlich wenn Sie gro�e Dateien verwenden, die Sie auf CD-ROM an alle Teilnehmer/innen verteilen. Jede/r Teilnehmer/in kann f�r den Zugriff einen eigenen Pfad f�r solche Dateien im Nutzerprofil definieren.
<a href=\"$a\" target=\"_blank\">Nutzerprofil bearbeiten</a>.</p>';
$string['localfilepath'] = 'Legen Sie den Pfad zu den Arbeitsmaterialien auf Ihrem PC (z.B. CD-Rom-Laufwerk) fest. W�hlen Sie dazu irgendeine Datei auf diesem Laufwerk aus. Die Datei wird nicht hochgeladen, aber die Verzeichnisinformation wird abgespeichert und f�r alle lokalen Dateiressourcen verwandt.';
$string['localfileselect'] = 'Diesen Dateipfad ausw�hlen.';
$string['maindirectory'] = 'Hauptverzeichnis f�r Dateien';
$string['modulename'] = 'Arbeitsmaterial';
$string['modulenameplural'] = 'Arbeitsmaterialien';
$string['navigationbuttons'] = 'Navigationsbuttons';
$string['neverseen'] = 'Nie gelesen';
$string['newdirectories'] = 'Die Verzeichnis-Verkn�pfungen anzeigen';
$string['newfullscreen'] = 'Den ganzen Bildschirm ausf�llen';
$string['newheight'] = 'Standard-Fensterh�he (in Pixeln)';
$string['newlocation'] = 'Die Positionsleiste anzeigen';
$string['newmenubar'] = 'Die Men�leiste anzeigen';
$string['newresizable'] = 'Das Ver�ndern der Fenstergr��e zulassen';
$string['newscrollbars'] = 'Das Verschieben des Fensters zulassen';
$string['newstatus'] = 'Die Statusleiste anzeigen';
$string['newtoolbar'] = 'Die Werkzeugleiste anzeigen';
$string['newwidth'] = 'Standard Fensterbreite (in Pixeln)';
$string['newwindow'] = 'Neues Fenster';
$string['newwindowopen'] = 'Dieses Quelle in einem neuen Popup-Fenster anzeigen';
$string['notallowedlocalfileaccess'] = 'Der Zugriff auf lokale Dateiressourcen ist zur Zeit nicht aktiviert. Daher sind die Materialien nicht verf�gbar.';
$string['note'] = 'Anmerkung';
$string['notefile'] = 'Um mehr als eine Datei f�r diesen Kurs hochzuladen (damit diese in der Liste erscheinen) benutzen Sie bitte den 
<a href=\"$a\">Datei-Manager</a>.';
$string['notypechosen'] = 'Sie m�ssen einen Typ ausw�hlen. Verwenden Sie den Zur�ck-Knopf und probieren Sie es erneut';
$string['packagechanged'] = 'Dieses IMS Contentpaket hat gewechselt';
$string['packagenotdeplyed'] = 'Dieses IMS Contentpaket wird nicht verwendet';
$string['pagedisplay'] = 'Zeigt das Arbeitsmaterial im derzeitigen Fenster';
$string['pagewindow'] = 'Gleiches Fenster';
$string['pan'] = 'Pan';
$string['parameter'] = 'Einstellung';
$string['parameters'] = 'Einstellungen';
$string['popupresource'] = 'Diese Quelle erscheint in einem Pop-Up-Fenster';
$string['popupresourcelink'] = 'Wenn es nicht klappt, klicken Sie hier $a';
$string['redeploy'] = 'Nochmal verwenden';
$string['resourcetype'] = 'Typ der Quelle';
$string['resourcetype1'] = 'Referenz';
$string['resourcetype2'] = 'Internet-Seite';
$string['resourcetype3'] = 'Hochgeladene Datei';
$string['resourcetype4'] = 'Reiner Text';
$string['resourcetype5'] = 'Internet-Verkn�pfung';
$string['resourcetype6'] = 'HTML-Text';
$string['resourcetype7'] = 'Programm';
$string['resourcetype8'] = 'Wiki-Text';
$string['resourcetype9'] = 'Verzeichnis';
$string['resourcetypedirectory'] = 'Ein Verzeichnis anzeigen';
$string['resourcetypefile'] = 'Link auf Datei oder Webseite';
$string['resourcetypehtml'] = 'Erstellen einer Textseite (mit Editor)';
$string['resourcetypeims'] = 'IMS Contentpaket verwenden';
$string['resourcetypelabel'] = '�berschrift/Text auf Kursseite einf�gen';
$string['resourcetyperepository'] = 'Link auf ein Bibliotheksobjekt';
$string['resourcetypetext'] = 'Erstellen einer Textseite (ohne Editor)';
$string['searchweb'] = 'Suche nach einer Webseite';
$string['serverurl'] = 'Server URL ($a->wwwroot)';
$string['showcourseblocks'] = 'Kursbl�cke anzeigen';
$string['tableofcontents'] = 'Inhaltsverzeichnis';
$string['variablename'] = 'Name der Variable';
$string['viewims'] = 'IMS  Contentpaket anzeigen';
$string['vol'] = 'Vol';

?>
