<?PHP // $Id: admin.php,v 1.4.2.5 2006/02/06 10:00:33 moodler Exp $ 
      // admin.php - created with Moodle 1.6 development (2005060201)


$string['adminseesallevents'] = 'Administr�tori m��u prezera� v�etky udalosti';
$string['adminseesownevents'] = 'Administr�tori maj� rovnak� pr�va ako ostatn� pou��vatelia';
$string['blockinstances'] = 'V�skyty';
$string['blockmultiple'] = 'Viacn�sobn�';
$string['cachetext'] = 'Doba existencie textovej vyrovn�vacej pam�te';
$string['calendarsettings'] = 'Kalend�r';
$string['change'] = 'zmeni�';
$string['configallowcoursethemes'] = 'Ke� zapnete t�to vo�bu, bude mo�n� nastavi� pre kurz vlastn� t�mu. T�ma kurzu m� najvy��iu prioritu, zobraz� sa aj v pr�pade, ke� bude nastavenie t�my hlavnej str�nky, pou��vate�a �i aktu�lneho sedenia odli�n�.';
$string['configallowemailaddresses'] = 'Ak chcete obmedzi� v�etky nov� emailov� adresy na ur�it� dom�ny, uve�te ich tu, oddelen� medzerami. V�etky ostatn� dom�ny bud� odmietnut�. Napr. <strong>vasaskola.sk inaskola.sk</strong>';
$string['configallowobjectembed'] = 'Ako �tandardne nastaven� bezpe�nostn� opatrenie, norm�lni pou��vatelia nem��u do textov vklada� multimedi�lne prvky (napr. Flash) prostredn�ctvom EMBED a OBJECT tagov v ich HTML (hoci sa to d� bezpe�ne urobi� pou�it�m filtera multimedi�lnych pluginov). Ak si �el�te, aby boli tieto tagy povolen� pre pou��vate�ov, potom zapnite t�to vo�bu.  ';
$string['configallowunenroll'] = 'Ak je toto nastaven� na \'�no\', potom sa m��u �tudenti sami kedyko�vek odhl�si� z kurzov. V opa�nom pr�pade im to nie je dovolen� a cel� proces prihlasovania sa do kurzov bude kontrolovan� iba u�ite�mi a administr�tormi.';
$string['configallowuserblockhiding'] = 'Chcete povoli� pou��vate�om skrytie/zobrazenie postrann�ch blokov na v�etk�ch t�chto str�nkach? T�to vlastnos� pou��va Javasript a Cookies pre ulo�enie aktu�lneho stavu pre ka�d� blok a ovplyvn� iba pou��vate�ov poh�ad.';
$string['configallowuserthemes'] = 'Ke� zapnete t�to vo�bu, pou��vate� si bude m�c� nastavi� vlastn� t�my. T�my pou��vate�a maj� vy��iu prioritu, zobrazia sa aj v pr�pade, ke� bude nastavenie t�my hlavnej str�nky in� (toto neplat� pre t�my kurzu).';
$string['configallusersaresitestudents'] = 'Mali by by� v�etci pou��vatelia pova�ovan� za �tudentov vzh�adom k aktivit�m, ktor� s� im dostupn�  na hlavnej str�nke syst�mu? Ak je Va�a odpove� \'�no\', potom ka�d� autorizovan� pou��vate� sa m��e t�chto aktiv�t z��astni� ako �tudent. Ak je Va�a odpove� \'Nie\', potom len t� pou��vatelia, ktor� s� u� ��astn�kmi aspo� jedn�ho kurzu, sa m��u z��astni� t�chto aktiv�t. Ako u�itelia t�chto aktiv�t m��u vystupova� len administr�tori a �peci�lne na to vymenovan� u�itelia. ';
$string['configautologinguests'] = 'Mali by by� n�v�tevn�ci automaticky prihlasovan� ako hostia, ak vst�pia do kurzov s hos�ovsk�m pr�stupom?';
$string['configcachetext'] = 'Toto nastavenie m��e zr�chli� prev�dzku syst�mu predov�etk�m pre tie str�nky, ktor� s� obsahovo rozsiahlej�ie alebo pou��vaj� textov� filtre. K�pie textov sa tu bud� uchov�va� v p�vodnej forme po�as vopred stanoven�ho �asov�ho rozp�tia. Ak sa tu nastavia n�zke hodnoty parametrov, m��e to spomali� v�etky �innosti, ale ak sa tu nastavia pomerne vysok� hodnoty parametrov, bude obnova textov (napr. pri pridan� nov�ch linkov) trva� ve�mi dlho.';
$string['configclamactlikevirus'] = 'Pova�ova� s�bory za napadnut� v�rusom';
$string['configclamdonothing'] = 'Pova�ova� s�bory za norm�lne';
$string['configclamfailureonupload'] = 'Ak ste nastavili clam, aby skenoval pren�an� s�bory, ale nie je spr�vne nastaven� alebo z nezn�mych d�vodov nereaguje tak, ako m�, ako sa m� syst�m spr�va�? Ak si vyberiete \'Pova�ova� s�bory za napadnut� v�rusom\', bud� s�bory presunut� do karant�nnej oblasti alebo vymazan�. Ak si vyberiete \'Pova�ova� s�bory za norm�lne\', bud� s�bory presunut� na to miesto, ktor� si Vy ur��te bez probl�mov. Samozrejme, administr�tori bud� upozornen�, ak clam nebude fungova�. Ak si vyberiete \'Pova�ova� s�bory za napadnut� v�rusom\' a z nezn�mych d�vodov clam nebude reagova� spr�vne (v��inou je nespr�vne nastaven� cesta ku clam), v�etky pren�an� s�bory bud� presunut� do zadanej karant�nnej oblasti alebo vymazan�. Bu�te opatrn� pri tomto nataven�.';
$string['configcountry'] = 'Ak si tu vyberiete krajinu, tak bude t�to krajina nastav� aj pre nov� pou��vate�sk� kont�. Ak chcete, aby si pou��vatelia sami vybrali krajinu, nenastavujte ju tu.';
$string['configdbsessions'] = 'Ak povol�te t�to vo�bu, toto nastavenie bude pou��va� datab�zu na uchovanie inform�ci� o aktu�lnych sedeniach (lekci�ch). Toto je v�hodn� pou�i� najm� pri obsahovo rozsiahlej��ch str�nkach zalo�en�ch na zoskupen� serverov. Pre v��inu str�nok by t�to vo�ba mala zosta� neakt�vna, aby sa namiesto datab�zy pou��val disk servera. Pros�m berte na vedomie, �e ak teraz zmen�te toto nastavenie, v�etci pou��vatelia (vr�tane V�s) bud� zo syst�mu odhl�sen�.';
$string['configdebug'] = 'Ak zapnete t�to vo�bu, PHP zv��i oznamovanie ch�b tak, �e bude uv�dzan�ch viac varovan�. Toto je u�ito�n� len pre v�vojov�ch pracovn�kov.';
$string['configdeleteunconfirmed'] = 'Ak pou��vate emailov� autoriz�ciu, toto je �asov� rozp�tie, po�as ktor�ho bude odpove� akceptovan� pou��vate�mi. Po tomto obdob� bud� star� nepou��van� kont� vymazan�.    ';
$string['configdenyemailaddresses'] = 'Ak chcete zak�za� emailov� adresy z ur�it�ch dom�n, uve�te ich tu, oddelen� medzerami. V�etky ostatn� dom�ny bud� akceptovan�. Napr. <strong>atlas.sk szm.sk hotmail.com</strong>';
$string['configdigestmailtime'] = '�u�om, ktor� sa rozhodn� pre zasielanie emailov v �trukt�rovanej forme, bude ka�d� de� prich�dza� email stru�ne informuj�ci o najnov��ch udalostiach v kurze. Toto nastavenie ur�uje t� �as� d�a, kedy bude tento email zasielan� pou��vate�om (odo�le ho nasleduj�ci cron po ukon�en� tejto hodiny).  ';
$string['configdisplayloginfailures'] = 'Toto zobraz� vybran�m pou��vate�om inform�cie o predch�dzaj�cich ne�spe�n�ch pokusoch o prihl�senie.';
$string['configenablerssfeeds'] = 'Tento prep�na� umo�n� RSS kan�ly z in�ch str�nok. Aby ste videli v�etky aktu�lne zmeny, mus�te aktivova� RSS kan�ly aj v jednotliv�ch moduloch - cho�te do Nastaven� Moodle v Konfigur�cii administr�tora.';
$string['configenablerssfeedsdisabled'] = 'Vo�ba nie je dostupn�, preto�e RSS kan�ly s� deaktivovan� na celej Str�nke. Ak ich chcete aktivova�, cho�te do Nastaven� premenn�ch v Konfigur�cii administr�tora.';
$string['configerrorlevel'] = 'Vyberte si mno�stvo PHP varovan�, ktor� chcete ma� zobrazovan�. Normal je zvy�ajne najlep�ia mo�nos�.';
$string['configextendedusernamechars'] = 'Ak povol�te toto nastavenie, �tudenti m��u vo svojich pou��vate�sk�ch men�ch pou��va� ak�ko�vek znaky (to v�ak neovplyvn� ich skuto�n� men�). �tandardn� nastavenie je \'Nespr�vne\', ktor� obmedzuje pou��van� znaky v men�ch len na alfanumerick� znaky.';
$string['configfilterall'] = 'Filtrova� v�etky re�azce, vr�tane hlavi�iek, titulov, naviga�nej li�ty a podobne. Toto je najviac u�ito�n� pri pou��van� viacjazy�n�ho filtera, inak sp�sobuje iba mierne zv��en� z�a� pri generovan� str�nok.';
$string['configfilteruploadedfiles'] = 'Aktivovan�m tejto vo�by bude Moodle spracov�va� v�etky na��tan� HTML a textov� s�bory s filtrami predt�m, ako sa zobrazia.';
$string['configforcelogin'] = 'Norm�lne m��e by� hlavn� str�nka s uveden�m zoznamom kurzov (nie s konkr�tnymi kurzami) prezeran� pou��vate�mi bez toho, aby sa predt�m prihl�sili. Ak chcete, aby sa pou��vatelia prihl�sili predt�m, ako �oko�vek urobia na str�nke, potom by ste mali aktivova� toto nastavenie. ';
$string['configforceloginforprofiles'] = 'Aktivovan�m tohto nastavenia sa ka�d� re�lny pou��vate� (nie hos�) bude musie� najsk�r prihl�si�, ak si chce prezera� profily pou��vate�ov. T�to vo�ba je �tandardne deaktivovan� (\'Nespr�vne\'), aby si perspekt�vni �tudenti mohli pre��ta� inform�cie o u�ite�och jednotliv�ch kurzov. Znamen� to v�ak tie�, �e webov� vyh�ad�va�e ich dok�u vyh�ada� a prezera�.';
$string['configframename'] = 'Ak pou��vate Moodle vo web-frame (r�mci), potom tu uve�te n�zov tohto r�mca. Inak nechajte tento n�zov ako \'_top\'.';
$string['configfullnamedisplay'] = 'Toto definuje, ako sa zobrazuj� men�, ak s� uveden� v plnej rozsahu. Pre v��inu jednojazy�n�ch str�nok je najlep�ie nastavenie toto: \'Meno a Priezvisko\', ale m��ete napr�klad aj skry� v�etky priezvisk� alebo to necha� na samotn� jazykov� bal�k, nech sa rozhodne (niektor� jazyky maj� �pecifick� zvyklosti). ';
$string['configgdversion'] = 'Ozna�te verziu GD, ktor� je nain�talovan�. Nastaven� verzia je t�, ktor� bola automaticky zisten�. Neme�te to, iba ak skuto�ne viete �o rob�te!';
$string['confightmleditor'] = 'Vyberte si, �i chcete povoli� pou��vanie zakomponovan�ho HTML textov�ho editora alebo nie. Aj ke� si vyberiete povoli�, tento editor sa objav� iba ke� pou��vate� pou��va kompatibiln� prehliada� (IE 5.5 alebo nov�ie verzie). Pou��vatelia sa ale m��u tie� rozhodn�� nepou��va� tento prehliada�.';
$string['configidnumber'] = '�pecifick� nastavenia �i (a)Pou��vatelia nebud� po�iadan� o zadanie ID ��sla v�bec, (b)Pou��vatelia bud� po�iadan� o zadanie ID ��sla, ale nemusia ho vyplni�, (c)Pou��vatelia bud� po�iadan� o zadanie ID ��sla a musia ho vyplni�. Ak bude zadan� ID ��slo pou��vate�a, bude zobrazovan� v profile.';
$string['configintro'] = 'Na tejto str�nke m��ete �pecifikova� r�zne konfigura�n� premenn�, ktor� pom��u Moodle spr�vne spolupracova� s Va�im serverom. Ve�mi sa t�m neza�a�ujte - v�chodiskov� nastavenia zvy�ajne pracuj� spr�vne a v�dy sa m��ete k tejto str�nke vr�ti� a tieto nastavenia zmeni�.';
$string['configintroadmin'] = 'Na tejto str�nke by ste mali konfigurova� Va�e hlavn� administr�torsk� konto. Administr�tor m� pln� kontrolu nad celou str�nkou. Dbajte na to, aby mal bezpe�n� pou��vate�sk� meno, heslo a tie� platn� emailov� adresu. Nesk�r m��ete vytvori� viac administr�torsk�ch ��tov.';
$string['configintrosite'] = 'T�to str�nka V�m umo��uje konfigurova� hlavn� str�nku a meno tejto str�nky. Nesk�r to m��ete kedyko�vek zmeni� cez link \'Nastavenia str�nky\' na domovskej str�nke. ';
$string['configintrotimezones'] = 'T�to str�nka umo�n� vyh�ada� nov� inform�cie o svetov�ch �asov�ch p�smach (spolu s inform�ciami o pravidl�ch zmeny letn�ho a zimn�ho �asu). Tieto miesta bud� skontrolovan� v porad�: $a. T�to proced�ra je bezpe�n� a nepo�kod� �tandardn� in�tal�ciu. 
Chcete aktualizova� Va�e �asov� p�sma teraz? ';
$string['configlang'] = 'Vyberte si v�chodz� jazyk pre cel� str�nku. Pou��vatelia m��u nesk�r toto nastavenie zmeni�.';
$string['configlangcache'] = 'Ulo�te v�ber jazykov do vyrovn�vaj�cej pam�te. U�etr�te tak ve�a pam�te a v�konu pri spracov�van� str�nok. Pokia� zapnete t�to vo�bu, m��e sa menu chv�u (nieko�ko min�t) aktualizova�, pri pridan� �i odstr�nen� jazyka.';
$string['configlangdir'] = 'Pri v��ine jazykov sa p�e z�ava doprava, ale pri niektor�ch, napr.arab�ina a hebrej�ina, sa p�e sprava do�ava.';
$string['configlanglist'] = 'Nechajte t�to vo�bu pr�zdnu, ak chcete, aby si pou��vatelia mohli vybra� �ubovo�n� jazyk z tejto verzie Moodle. Tento zoznam m��ete skr�ti�, ak uvediete zoznam jazykov, oddelen�ch �iarkou, napr.

sk,cz,en,es_es,fr,it.';
$string['configlangmenu'] = 'Vyberte si, �i chcete zobrazi� menu pre vo�bu jazyka na www str�nkach Moodle (domovsk� str�nka, autoriza�n� str�nka a podobne). To neovplyvn� pou��vate�ove mo�nosti nastavenia preferovan�ho jazyka vo svojom vlastnom profile.';
$string['configlocale'] = 'Vyberte si miestne jazykov� nastavenie - toto ovplyvn� form�t a jazyk �dajov. Tieto miestne �daje mus�te ma� nain�talovan� vo Va�om opera�nom syst�me (napr�klad en_US alebo es_ES). Ak neviete, �o si vybra�, nechajte toto pr�zdne.';
$string['configloginhttps'] = 'Aktivovanie tejto vo�by bude znamena�, �e Moodle bude pou��va� bezpe�n� https spojenie len pri autoriza�nej str�nke (pri prihlasovan� do syst�mu)uveden�m bezpe�n�ho prihlasovacieho mena. N�sledne sa vr�ti k norm�lnemu http protokolu URL pre v�eobecn� r�chlos�. UPOZORNENIE: Toto nastavenie VY�ADUJE, aby https protokol bol aktivovan� na web serveri - ak nie je, MALI BY STE ZAMKNګ VA�U STR�NKU.';
$string['configloglifetime'] = 'T�to vo�ba �pecifikuje d�ku �asov�ho intervalu, po�as ktor�ho si chcete uchova� z�znamy o pou��vate�sk�ch aktivit�ch. Z�znamy, ktor� s� star�ie, sa automaticky vyma��. Je dobr� uchov�va� si z�znamy tak dlho, ako je to mo�n�, ale ak m�te ve�mi zanepr�zdnen� server a m�te probl�my s jeho r�chlos�ou, potom si vyberte krat�� �as pre uchov�vanie z�znamov.';
$string['configlongtimenosee'] = 'Ak sa �tudenti dlh� �as neprihl�sia, s� automaticky vyraden� z kurzov. Tento parameter stanovuje tento �asov� limit.';
$string['configmaxbytes'] = 'T�to vo�ba �pecifikuje maxim�lnu ve�kos� pren�an�ch s�borov na celej str�nke. Toto nastavenie je limitovan� PHP nastaven�m upload_max_filesize a nastaven�m Apache LimitRequestBody. Nastavenie maxbytes ohrani�uje rozsah ve�kost�, z ktor�ch si m��ete vybra� v ka�dej �rovni kurzu alebo modulu.';
$string['configmaxeditingtime'] = 'Toto ur�uje �as, ktor� maj� �udia na upravovanie pr�spevkov do f�ra, sp�tnej v�zby pre p�somn� pr�ce , at�. Zvy�ajne je to 30 min�t.';
$string['configmessaging'] = 'M� by� aktivovan� syst�m posielania spr�v medzi pou��vate�mi str�nky?';
$string['confignoreplyaddress'] = 'Emaily sa niekedy posielaj� v mene pou��vate�a (napr. prispievanie do f�r). Emailov� adresa, ktor� tu �pecifikujete, bude pou��van� ako adresa \'Od koho\' v pr�pade, ak prij�matelia nie s� schopn� priamo odpoveda� pou��vate�ovi (napr. ke� si pou��vate� vyberie zachovanie s�kromnej adresy).';
$string['confignotifyloginfailures'] = 'Ak sa uchov�vaj� z�znamy o ne�spe�n�ch pokusoch o prihl�senie do syst�mu, m��u by� tieto odoslan� emailom. Kto by si mal prezera� tieto ozn�menia?';
$string['confignotifyloginthreshold'] = 'Ak s� akt�vne ozn�menia o ne�spe�n�ch pokusoch o prihl�senie do syst�mu, ko�ko tak�chto prihl�sen� od jedn�ho pou��vate�a alebo jednej IP adresy sa m� zobrazova� v ozn�meniach?';
$string['configopentogoogle'] = 'Ak aktivujete toto nastavenie, potom Google bude ma� opr�vnenie vstupu do Va�ej str�nky ako Hos�. Naviac, �udia prich�dzaj�ci na Va�u str�nku z prostredia vyh�ad�va�a Google, bud� automaticky prihlasovan� ako Hostia. Betrte pros�m na vedomie, �e tak�to pr�stup m��e by� realizovan� len u t�ch kurzov, ktor� povo�uj� vstup hos�ov. ';
$string['configpathtoclam'] = 'Cesta do Clam AV. Pravdepodobne nie�o ako usr/bin/clamscan alebo /usr/bin/clamdscan. T�to cestu potrebujete, aby Clam AV fungoval spr�vne.';
$string['configproxyhost'] = 'Ak tento <b>server</b> potrebuje pou��va� server proxy (napr�klad br�nu firewall) pri pr�stupe na Internet, tak tu uve�te hostite�sk� meno a port. V opa�nom pr�pade to nechajte pr�zdne.';
$string['configquarantinedir'] = 'Ak chcete, aby Clam AV presunul napadnut� s�bory do karant�nneho adres�ra, nap�te ho sem. Mus� by� ale zobrazite�n� web serverom. Ak t�to vo�bu nevypln�te alebo ak zad�te adres�r, ktor� neexistuje alebo sa ned� zobrazi�, bud� napadnut� s�bory vymazan�. Neprid�vajte koncov� lom�tko.';
$string['configrunclamonupload'] = 'Spusti� Clam AV pri pren�an� s�boru? K tomu budete potrebova� nastavi� spr�vnu cestu v pathtoclam. (Clam AV je vo�ne ��rite�n� v�rusov� skener, ktor� si m��ete stiahnu� na http://www.clamav.net/)';
$string['configsectioninterface'] = 'Rozhranie';
$string['configsectionmail'] = 'Po�ta';
$string['configsectionmaintenance'] = '�dr�ba';
$string['configsectionmisc'] = 'R�zne';
$string['configsectionoperatingsystem'] = 'Opera�n� syst�m';
$string['configsectionpermissions'] = 'Pr�va';
$string['configsectionsecurity'] = 'Bezpe�nos�';
$string['configsectionuser'] = 'Pou��vate�';
$string['configsecureforms'] = 'Moodle m��e pou�i� dodato�n� bezpe�nostn� opatrenia pri akceptovan� vstupov z web formul�rov. Ak to umo�n�te, potom sa bude overova� premenn� HTTP_REFERER, ktor� po�le browser a porovn� sa s aktu�lnou adresou formul�ra. Toto m��e sp�sobi� (vo ve�mi zriedkav�ch pr�padoch) probl�my, napr. ak je pou��vate� pou��va firewall, ktor� je konfigurovan� tak, �e odstr�ni premenn� HTTP_REFERER. Vtedy sa m��e sta�, �e formul�r V�m \'zmrzne\'. Ak sa na to pou��vatelia s�a�uj�, m��ete deaktivova� toto nastavenie. V tomto pr�pade sa v�ak vystavujete v���m �tokom zvonku (brute force password attacks).
Ak si nie ste ist�, nechajte t�to vo�bu nastaven� na \'Yes\'. ';
$string['configsessioncookie'] = 'Toto nastavenie upravuje meno cookie pou��van�ho v Moodle sedeniach (lekci�ch). T�to mo�nos� je volite�n� a u�ito�n� v tom pr�pade, ak je spusten� viac ako jedna k�pia Moodle v r�mci tej istej www str�nky (aby ste sa vyhli popleteniu cookies).';
$string['configsessiontimeout'] = 'Ak s� �udia pripojen� na t�to str�nku dlho ne�inn� (bez \"prech�dzania\" str�nok), s� automaticky odpojen� (ich sedenie je ukon�en�). T�to premenn� ur�uje, ak� dlh� by mal by� ten �asov� interval ne�innosti.';
$string['configshowblocksonmodpages'] = 'Niektor� moduly aktiv�t podporuj� mo�nos� zobrazovania bloku na Va�ich str�nkach. Pokia� t�to vo�bu zapnete, m��u u�itelia prid�va� nov� bloky na okraj svojich str�nok, inak rozhranie nebude zobrazova� t�to mo�nos�.';
$string['configshowsiteparticipantslist'] = 'V�etci t�to pou��vatelia str�nky a u�itelia bud� v zozname ��astn�kov str�nky. Komu by malo by� povolen� prezeranie tohto zoznamu?';
$string['configsitepolicy'] = 'Ak m�te definovan� podmienku, ktor� v�etci pou��vatelia musia vidie� a s �ou s�hlasi� pred pou��van�m tejto str�nky, potom sem vlo�te dan� URL adresu; v opa�nom pr�pade t�to vo�bu nevyp��ajte. URL adresa m��e by� nastaven� v ktoromko�vek mieste - jedno z najvhodnej��ch miest by bol s�bor v s�boroch str�nky, napr. http://yoursite/file.php/1/policy.html ';
$string['configslasharguments'] = 'S�bory (obr�zky at�.) s� pren�an� prostredn�ctvom skriptu pou��vaj�ceho zna�ku \'lom�tko\' (druh� mo�nos� vo v�bere). T�to met�da umo��uje, aby boli s�bory �ah�ie zachyten� na webov�ch prehliada�och, proxy serveroch at�. Bohu�ia�, niektor� PHP servery  t�to met�du nepodporuj�. Ak m�te probl�my pri zobrazovan� stiahnut�ch s�borov alebo obr�zkov (napr. obr�zky pou��vate�a), nastavte tu prv� mo�nos� vo v�bere.';
$string['configsmtphosts'] = 'Zadajte pln� n�zov jedn�ho alebo viacer�ch SMTP serverov, ktor� m� Moodle pou��va� pri posielan� po�ty (napr�klad \'mail.a.com\' alebo \'mail.a.com;mail.b.com\'). Ak to neuvediete, Moodle pou�ije postup posielania po�ty pod�a v�chodz�ch nastaven�.';
$string['configsmtpuser'] = 'Ak ste hore uviedli SMTP server a ten vy�aduje overovanie, uve�te tu pou��vate�sk� meno a heslo.';
$string['configteacherassignteachers'] = 'M��u oby�ajn� u�itelia prideli� in�ch u�ite�ov do toho kurzu, v ktorom vyu�uj�? Ak \'Nie\', potom iba tvorcovia kurzov a administr�tori m��u pride�ova� u�ite�ov do kurzov.';
$string['configthemelist'] = 'Pokia� ponech�te toto pole pr�zdne, povol�te pou�itie ktorejko�vek platnej t�my. Pokia� chcete skr�ti� v�ber t�m, m��ete tu ur�i� zoznam mien t�m oddelen�ch �iarkou. Napr�klad: standard,orangewhite';
$string['configtimezone'] = 'Tu m��ete nastavi� v�chodzie �asov� p�smo. Toto je len V�CHODZIE �asov� p�smo pre zobrazovanie d�tumov - ka�d� pou��vate� toto m��e zmeni� nastaven�m svojho preferovan�ho zobrazovania d�tumu v profile pou��vate�a. \'�as servera\' na Moodle bude implicitne nastaven� pod�a opera�n�ho syst�mu servera ale \'�as servera\' v profile pou��vate�a bude nastaven� pod�a nastavenia �asov�ho p�sma.';
$string['configunzip'] = 'Uve�te umiestnenie V�ho unzip programu (iba Unix, nepovinn�). Je to potrebn� pre rozbalenie zozipovan�ch arch�vov na serveri. Ak t�to vo�bu nevypln�te, Moodle bude pou��va� vlastn� intern� postup.';
$string['configvariables'] = 'Nastavi� premenn�';
$string['configwarning'] = 'Postupujte ve�mi opatrne pri zmen�ch t�chto nastaven� - nespr�vne hodnoty m��u sp�sobi� probl�my.';
$string['configzip'] = 'Uve�te cestu k V�mu zip programu (len pre UNIX, nepovinn�). Pokia� je cesta �pecifikovan�, bude pou�it� pre tvorbu zip arch�vov na serveri. Pokia� ju ponech�te pr�zdnu, Moodle bude pou��va� vlastn� intern� postup.';
$string['confirmation'] = 'Potvrdenie';
$string['cronwarning'] = '<a href=\"cron.php\" title=\"cron.php\">Skript pre �dr�bu cron.php?</a> nebol spusten� najmenej 24 hod�n.<br /><a href=\"../doc/?frame=install.html&#8834;=cron\">T�to dokument�cia o in�tal�cii</a> vysvet�uje, ako tento proces m��ete zautomatizova�.';
$string['edithelpdocs'] = 'Upravi� dokument�ciu n�povede';
$string['editstrings'] = 'Upravi� textov� re�azce';
$string['filterall'] = 'Filtrova� v�etky re�azce';
$string['filteruploadedfiles'] = 'Filtrova� pren�an� s�bory';
$string['helpadminseesall'] = 'M��u si administr�tori prezera� v�etky udalosti kalend�ra, alebo len tie, ktor� sa ich t�kaj�? ';
$string['helpcalendarsettings'] = 'Konfigurova� viacer� aspekty kalend�ra t�kaj�ce sa d�tumu/�asu v prostred� Moodle';
$string['helpforcetimezone'] = 'M��ete povoli� pou��vate�om, aby si individu�lne zvolili ich vlastn� �asov� p�smo, alebo nastavi� jedno �asov� p�smo pre ka�d�ho.';
$string['helpsitemaintenance'] = 'Pre aktualiz�cie a �al�iu �dr�bu';
$string['helpstartofweek'] = 'Ktor�m d�om v t��dni by sa mal za��na� t��de� v kalend�ri?';
$string['helpupcominglookahead'] = 'Ko�ko dn� dopredu sa m� �tandardne zobrazova� v kalend�ri pri prezeran� nadch�dzaj�cich udalost�? ';
$string['helpupcomingmaxevents'] = 'Ko�ko nadch�dzaj�cich udalost� (maximum) sa m� �tandardne zobrazova� pou��vate�om?';
$string['helpweekenddays'] = 'Ktor� dni v t��dni s� pova�ovan� za \"v�kend\", t.j. s� ozna�en� inou farbou?';
$string['importtimezones'] = 'Aktualizova� kompletn� zoznam �asov�ch p�siem';
$string['importtimezonescount'] = '$a->count polo�iek importovan�ch z $a->source';
$string['importtimezonesfailed'] = 'Nebol n�jden� zdroj! (Zl� spr�va)';
$string['incompatibleblocks'] = 'Nekompatibiln� bloky';
$string['optionalmaintenancemessage'] = 'Spr�va o �dr�be str�nky (nepovinn�)';
$string['pleaseregister'] = 'Pros�m, zaregistrujte si Va�u str�nku, aby ste odstr�nili toto tla�idlo';
$string['sitemaintenance'] = 'T�to str�nka sa nach�dza v re�ime �dr�by a moment�lne nie je pr�stupn�';
$string['sitemaintenancemode'] = 'Re�im �dr�by';
$string['sitemaintenanceoff'] = 'Re�im �dr�by bol deaktivovan� a t�to str�nka bude �alej be�a� norm�lne';
$string['sitemaintenanceon'] = 'Va�a str�nka je moment�lne v re�ime �dr�by (prihl�si� sa a pou��va� str�nku m��u iba administr�tori).';
$string['sitemaintenancewarning'] = 'Va�a str�nka je moment�lne v re�ime �dr�by (prihl�si� sa a pou��va� str�nku m��u iba administr�tori). Pre n�vrat k norm�lnej prev�dzke str�nky <a href=\"maintenance.php\">deaktivujte re�im �dr�by</a>.';
$string['tabselectedtofront'] = 'Mal by by� ozna�en� tag v aktu�lnom riadku v tabu�k�ch s tabul�torom umiestnen� vpredu?';
$string['therewereerrors'] = 'Vo Va�ich �dajoch boli n�jden� chyby';
$string['timezoneforced'] = 'Toto je nastaven� administr�torom str�nky';
$string['timezoneisforcedto'] = 'Nastavi� rovnak� pou�itie pre v�etk�ch pou��vate�ov';
$string['timezonenotforced'] = 'Pou��vate� si m��e vybra� vlastn� �asov� z�nu';
$string['upgradeforumread'] = 'Novou vlastnos�ou pridanou do Moodle 1.5 je sledovanie ��tan�ch/ne��tan�ch pr�spevkov do f�r.<br />
Pre pou�itie tejto funkcie je potrebn� <a href=\"$a\">aktualizova� tabu�ky</a>.';
$string['upgradeforumreadinfo'] = 'Novou vlastnos�ou pridanou do Moodle 1.5 je sledovanie ��tan�ch/ne��tan�ch pr�spevkov do f�r. Pre pou�itie tejto funkcie je potrebn� aktualizova� tabu�ky v�etk�mi inform�ciami pre sledovanie existuj�cich pr�spevkov. Toto m��e trva� pod�a ve�kosti Va�ej str�nky a� nieko�ko hod�n a m��e to ve�mi za�a�i� V� datab�zov� server. Napriek tomu bude Va�a str�nka st�le funk�n� a pou��vatelia nebud� zasiahnut�. Ak tento proces raz za�nete, mus�te ho aj dokon�i�  (nechajte otvoren� okno v prehliada�i). Napriek tomu, pokia� tento proces zastav�te zatvoren�m okna, nemus�te sa b�, m��ete ho na�tartova� znovu.<br /><br />
Chcete na�tartova� aktualiz�ciu teraz?';
$string['upgradelogs'] = 'Va�e star� z�znamy musia by� aktualizovan�, aby bol syst�m plne funk�n�.<a href=\"$a\">Viac inform�ci�</a>';
$string['upgradelogsinfo'] = 'Ned�vno boli preveden� nejak� zmeny t�kaj�ce sa sp�sobu, ak�m s� z�znamy uchov�van�. Aby ste si mohli prezera� v�etky Va�e star� z�znamy, mus�te ich aktualizova�. Toto m��e trva� dos� dlho (napr. nieko�ko hod�n - to z�le�� od Va�ej str�nky) a m��e to dos� za�a�i� samotn� datab�zov� server u obsiahlej��ch str�nok. Ak tento proces raz za�nete, mus�te ho aj dokon�i� (nechajte otvoren� okno v prehliada�i). Neob�vajte sa, Va�a str�nka bude pre ostatn�ch pou��vate�ov fungova� bez probl�mov, pok�m Vy budete aktualizova� z�znamy. <br /><br />Chcete aktualizova� Va�e z�znamy teraz?';
$string['upgradesure'] = '<p>Va�e s�bory v Moodle boli zmenen� a Vy sa pr�ve chyst�te pov��i� V� server na t�to verziu:</p>
<p><b>$a</b></p>
<p>Ak to teraz za�nete, u� sa nem��ete vr�ti� sp�.</p>
<p>Ste si ist�, �e chcete pov��i� tento server na t�to verziu?</p>';
$string['upgradingdata'] = '�daje sa aktualizuj�';
$string['upgradinglogs'] = 'Z�znamy sa aktualizuj�';

?>
