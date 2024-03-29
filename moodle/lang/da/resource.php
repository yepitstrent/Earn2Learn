<?PHP // $Id: resource.php,v 1.11.2.3 2006/02/06 09:59:32 moodler Exp $ 
      // resource.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005033100)


$string['addresource'] = 'Tilf�j materiale';
$string['chooseafile'] = 'V�lg eller upload en fil';
$string['chooseparameter'] = 'V�lg parametre';
$string['configallowlocalfiles'] = 'N�r du laver en ny resourcefil, s� er det en god ide at tillade links til filer p� det lokale filsystem s�som CDROM drev, netv�rksdrev eller p� harddisken. Det kan v�re brugbart i et klassev�relse hvor alle elever har mappet det samme netv�rksdrev eller hvor filerne ligger p� en udleveret CD. Brug af denne feature kan kr�ve nogle �ndringer af browserens sikkerhedsindstillinger.';
$string['configdefaulturl'] = 'Denne v�rdi bruges til at inds�tte i URL formen n�r en ny URL-baseret ressource laves.';
$string['configfilterexternalpages'] = 'Hvis du bruger denne indstilling vil alle eksterne ressourcer (websider, uploaded HTMLfiler) blive behandlet af det nuv�rende sidefiltre (s�som ordbogs autolinks, for eksempel). Brugen af denne indstilling kan for�rsage at sidevisningen bliver betydeligt langsommere. Brug den med omtanke og n�r det virkeligt er n�dvendigt.';
$string['configframesize'] = 'N�r en webside eller en uploadet fil vises i en frame, s� angiver denne v�rdi h�jden p� topbaren (den �verste frame som indeholder navigationen)';
$string['configparametersettings'] = 'Denne angiver standardv�rdien for parameterpanelet i dialogen n�r der tilf�jes nye ressourcer. Efter f�rste gang bliver disse individuelle brugerbestemte indstillinger.';
$string['configpopup'] = 'N�r en ny ressource bliver tilf�jet som kan vises i et vindue, skal denne mulighed v�re aktiveret som udgangspunkt?';
$string['configpopupdirectories'] = 'Skal popupvinduer vise bibliotekslinks som standard?';
$string['configpopupheight'] = 'Hvad skal den normale h�jde for popupvinduer v�re?';
$string['configpopuplocation'] = 'Skal popupvinduer vise adressebaren som standart?';
$string['configpopupmenubar'] = 'Skal popupvinduer vise menubaren som standard?';
$string['configpopupresizable'] = 'Skal popupvinduer kunne skaleres som standart?';
$string['configpopupscrollbars'] = 'Skal popupvinduer kunne scrolles som standart?';
$string['configpopupstatus'] = 'Skal popupvinduer vide statusbaren som standart?';
$string['configpopuptoolbar'] = 'Skal popupvinduer vise v�rkt�jslinjen som standart?';
$string['configpopupwidth'] = 'Hvilken bredde skal popupvinduer have som standart?';
$string['configsecretphrase'] = 'Denne hemmelige s�tning bliver brugt til at generere en krypteret n�gle der kan overf�res som parameter til nogle ressourcer. Den krypterede n�gle bliver lavet med en md5 kryptering af den nuv�rende brugers IP sammensat med den hemmelige s�tning. Som f�lger: code = md5(IP.secretphrase) 
Dette tillader den modtagne ressource at verificere at den er kaldt fra moodle.';
$string['configwebsearch'] = 'N�r der tilf�jes en URL som en webside eller weblink, vil denne placering tilbydes som et sted der kan hj�lpe brugeren med at s�ge efter den URL de �nsker.';
$string['configwindowsettings'] = 'Dette s�tter standardv�rdien for vindue-indstillings panelet, n�r en ny ressource bliver tilf�jet. Efter f�rste gang bliver dette individuelle brugerindstillinger.';
$string['directlink'] = 'Direkte link til denne fil';
$string['directoryinfo'] = 'Alle filer i det valgte bibliotek vil blive vist';
$string['display'] = 'Vindue';
$string['editingaresource'] = 'Rediger i materialet';
$string['encryptedcode'] = 'Krypteret kode';
$string['example'] = 'Eksempel';
$string['exampleurl'] = 'http://www.eksempel.com/enmappe/enfil.html';
$string['fetchclienterror'] = 'Der er opst�et en fejl med din webclient da den skulle hente websiden (M�ske en forkert URL)';
$string['fetcherror'] = 'Der er opst�et en fejl i forbindelse med overf�rslen af websiden.';
$string['fetchservererror'] = 'Der er opst�et en fejl p� serveren i forbindelse med overf�rslen af websiden (m�ske en programfejl).<p>';
$string['filename'] = 'Filnavn';
$string['filtername'] = 'Ressource autolinkning';
$string['frameifpossible'] = 'Put resourcen i en frame for at beholde navigationsbaren synlig.';
$string['fulltext'] = 'Fuld tekst';
$string['htmlfragment'] = 'HTML del';
$string['localfile'] = 'Lokal fil';
$string['localfilechoose'] = 'V�lg en lokal fil (CD-ROM)';
$string['localfilehelp'] = 'Hj�lp ved at vise lokale filer.';
$string['localfileinfo'] = '<p>V�lg en lokal fil fra computeren. Filen vil ikke blive uploadet til websitet, men Moodle vil formode at den samme fil findes i forvejen p� alle de computere som henter ressourcen.</p><p>Dette er is�r brugbart hvis det drejer sig om store multimediefiler og animationer der ligger p� en standart CD-ROM som bliver delt ud til alle deltagerne. Hver deltager kan s� v�lge deres egen lokale sti til disse filer, hvis f.eks. CD-ROM drevet ikke har samme drevbogstaver el. Det g�res ved at <a href=\"$a\" target=\"_blank\">rette bruger profil</a>.</p>';
$string['localfilepath'] = 'For at angive din egen lokale sti til denne ressource skal du v�lge en fil fra drevet. (som regel CD-ROM drevet) p� din computer hvor der skal v�re adgang til ressourcen. Filen vil ikke blive uploadet men stien vil blive gemt s� du ikke skal finde den igen n�ste gang.';
$string['localfileselect'] = 'V�lg stien til filen';
$string['maindirectory'] = 'Hoved biblioteket';
$string['modulename'] = 'Materiale';
$string['modulenameplural'] = 'Materialer';
$string['neverseen'] = 'Ikke set endnu';
$string['newdirectories'] = 'Vis biblioteks links';
$string['newfullscreen'] = 'Fyld hele sk�rmen';
$string['newheight'] = 'Almindelig vindue h�jde (i pixels)';
$string['newlocation'] = 'Vis placerings panel';
$string['newmenubar'] = 'Vis menupanel';
$string['newresizable'] = 'Tillad vinduet at blive skaleret';
$string['newscrollbars'] = 'Tillad vinduet at blive scrollet';
$string['newstatus'] = 'Vis statuspanel';
$string['newtoolbar'] = 'Vis v�rkt�jspanel';
$string['newwidth'] = 'Almindelig vinduebredde (i pixels)';
$string['newwindow'] = 'Nyt vindue';
$string['newwindowopen'] = 'Vis denne ressource i et nyt popupvindue';
$string['notallowedlocalfileaccess'] = 'Adgang til lokale filer er ikke muligt, s� denne ressource er ikke tilg�ngelig.';
$string['note'] = 'Note';
$string['notefile'] = 'For at uploade filer til kurset(s� de vises i denne liste) brug <a href=\"$a\" >File Manager</a>.';
$string['notypechosen'] = 'Du skal v�lge en type. Brug tilbage knappen og pr�v igen';
$string['pagedisplay'] = 'Vis denne ressource i dette vindue';
$string['pagewindow'] = 'Samme vindue';
$string['pan'] = 'Panor�r';
$string['parameter'] = 'Parameter';
$string['parameters'] = 'Parametre';
$string['popupresource'] = 'Dette materiale skal  vises i et popupvindue.';
$string['popupresourcelink'] = 'Hvis det ikke gjorde, tryk her: $a';
$string['resourcetype'] = 'Materiale type';
$string['resourcetype1'] = 'Reference';
$string['resourcetype2'] = 'Web Sted';
$string['resourcetype3'] = 'Uploaded Fil';
$string['resourcetype4'] = 'Alm. tekst';
$string['resourcetype5'] = 'Web Link';
$string['resourcetype6'] = 'HTML tekst';
$string['resourcetype7'] = 'Program';
$string['resourcetype8'] = 'Wikitekst';
$string['resourcetype9'] = 'Bibliotek';
$string['resourcetypedirectory'] = 'Vis et bibliotek';
$string['resourcetypefile'] = 'Fil eller URL';
$string['resourcetypehtml'] = 'Lav en webside';
$string['resourcetypelabel'] = 'Overskrift';
$string['resourcetypetext'] = 'Tekstside';
$string['searchweb'] = 'S�g';
$string['serverurl'] = 'Server URL ($a->wwwroot)';
$string['variablename'] = 'Variabel navn';
$string['vol'] = 'vol';

?>
