<?PHP // $Id: admin.php,v 1.5.2.3 2006/02/06 09:59:32 moodler Exp $ 
      // admin.php - created with Moodle 1.6 development (2005101200)


$string['adminseesallevents'] = 'Administratorer kan se alle begivenheder';
$string['adminseesownevents'] = 'Administratorer er som andre brugere';
$string['backgroundcolour'] = 'Transparent farve';
$string['badwordsconfig'] = 'Angiv en liste af censurerede ord adskilt af komma.';
$string['badwordsdefault'] = 'Hvis denne liste er tom, s� benyttes den standardlisten fra overs�ttelsen.';
$string['badwordslist'] = 'Liste over censurerede ord.';
$string['blockinstances'] = 'Instanser';
$string['blockmultiple'] = 'Flere';
$string['cachetext'] = 'Tekst cache levetid';
$string['calendarsettings'] = 'Kalender';
$string['change'] = 'ret';
$string['configallowcoursethemes'] = 'Hvis du acceptere dette kan man v�lge tema for hvert kursus. Kursustemaet bliver brugt lige meget hvad der ellers er valgt som tema (sitewide, bruger eller sessionstemaer)';
$string['configallowemailaddresses'] = 'Hvis du �nsker at begr�nse alle nye email-adresser til bestemte dom�ner, s� skriv dem her adskilt af mellemrum. Alle e-mails fra andre dom�ner vil blive afvist. f.eks. <strong>skolenavn.dk adsl.dk</strong>';
$string['configallowobjectembed'] = 'Af sikkerhedsfgrunde kan almindelige brugere normalt ikke indlejre multimediefiler (som flash) vha. EMBED og OBJECT tags i deres HTML (det kan dog g�res sikkert vha. multimedieplugin filtre) Hvis du �nsker at tillade disse tags s� aktiver denne indstilling. ';
$string['configallowunenroll'] = 'Hvis denne er sat til \'ja\' kan studerende n�r som helst framelde dem selv fra et kursus. I modsat fald kan de kun frameldes hvis l�reren eller administratoren g�r det.';
$string['configallowuserblockhiding'] = '�nsker du at tillade brugere at kunne maksimere eller minimere blokke p� siden? Denne funktion bruger javascript og cookies for at huske tilstanden af hver blok der kan minimeres, og p�virker kun hvordan brugeren ser siden.';
$string['configallowuserthemes'] = 'Hvis du tillader dette kan brugere selv v�lge hvilket tema de vil bruge. Brugertemaet bliver brugt selvom der er valgt et andet p� siden. (dog ikke hvis der er valgt et andet tema p� kurset)';
$string['configallusersaresitestudents'] = 'Skal alle brugere ses som mulige deltagere i aktiviteter p� forsiden af sitet? Hvis du svarer \"ja\" s� vil enhver oprettet bruger have mulighed for at deltage i disse aktiviteter. Hvis du svarer \"nej\" er det kun brugere der allerede deltager i mindst �t kursus kunne deltage i aktiviteter p� forsiden. Kun administratorer og l�rere specifikt tilknyttet aktiviteten kan fungerer som l�rere for disse forsideaktiviteter.';
$string['configautologinguests'] = 'Skal bes�gene automatisk logges ind som g�ster hvis de bes�ger et kursus med g�steadgang?';
$string['configcachetext'] = 'For store sites eller sites der bruger tekstfiltre kan denne indstilling forbedre ydeevnen ved at cache den filtrede side. Denne indstilling angiver hvor lang tid den cachede side skal gemmes. Hvis indstillingen er for lille kan den muligvis sl�ve lidt, hvis den er for stor kan det tage et stykke tid at opdatere (med nye links for eksempel)';
$string['configclamactlikevirus'] = 'Filer kan v�re viruser';
$string['configclamdonothing'] = 'Filer er OK';
$string['configclamfailureonupload'] = 'Hvis du har konfigureret \'clam\' til at scanne uploadede filer men den er konfigureret forkert eller ikke kan starte af en eller anden �rsag hvordan skal siden s� opf�rer sig? Hvis du v�lger \'Filer kan v�re viruser\' bliver de flyttet i karant�ne eller slettet. Hvis du v�lger \'Filer er OK\' bliver de flyttet til deres destinationsfolder som normalt. Under alle omst�ndigheder vil administrator f� besked om at \'clam\' ikke fungere. Hvis du v�lger \'Filer kan v�re viruser\' og \'clam\' af en eller anden �rsag ikke k�rer (som regel fordi der er angivet en forkert sti til \'clam\') vil ALLE filer der bliver uploadet blive flyttet til karant�neomr�det eller slettet. Pas p� med denne indstilling!';
$string['configcountry'] = 'Hvis du har valgt et land her s� vil det blive valgt som default for nye brugeroprettelser. For at tvinge en bruger til at v�lge land s� lad dette felt v�re blankt.';
$string['configdbsessions'] = 'Hvis denne indstilling er aktiveret vil sessionsdata blive skrevet i databasen i stedet for i en fil. Dette kan give en performance forbedring ved meget store sites eller sites der k�rer p� serverklustre. I de fleste tilf�lde er det bedst at lade den v�re deaktiveret, s� sessions bliver gemt p� disken. Hvis denne indstilling bliver skiftet bliver alle brugere logget af.';
$string['configdebug'] = 'Denne indstilling for�rsager at PHP\'s fejlrapportering vil vise warnings som fejl. Dette er hovedsagligt en indstillings til brug for udviklere.';
$string['configdefaultallowedmodules'] = 'Hvilke moduler �nsker du at tillade som standard, i kurser der h�rer under den overn�vnte kategori, n�r de bliver oprettet.';
$string['configdefaultrequestedcategory'] = 'Hvilken kategori skal godkendte kurser som standard tilh�rer hvis de bliver godkendt?';
$string['configdeleteunconfirmed'] = 'Hvis du bruger emailautorisering er dette, den periode som siden venter p� svar fra en bruger. Hvis der ikke er modtaget svar inden for den fastlagte periode vil uautoriserede brugere blive slettet.';
$string['configdenyemailaddresses'] = 'For at forbyde emailadresser fra visse dom�ner kan de skrives her. Alle andre dom�ner er s�ledes OK. For at forbyde hotmail og yahoo adresser kan f.eks. skrives <strong>hotmail.com yahoo.com</strong>';
$string['configdigestmailtime'] = 'Folk som har valgt at f� tilsendt akkumulerede emails vil h�jst f� �n email om dagen. Denne indstilling er til at kontrollere p� hvilken tidspunkt af dagen den vil blive sendt. (det n�ste cronjob efter det tidspunkt vil mailen blive afsendt)';
$string['configdisplayloginfailures'] = 'Dette vil vise information til udvalgte brugere om mislykkede loginfors�g.';
$string['configenablecourserequests'] = 'Dette vil tillade alle brugere kan �nske at et kursus bliver oprettet.';
$string['configenablerssfeeds'] = 'Denne indstilling vil muligg�re RSS-feeds fra hele sitet. For rent faktisk at se �ndringer skal hvert modul\'s RSS-feed ogs� aktiveres. Det g�res i modulindstillinger under Administrator konfiguration.';
$string['configenablerssfeedsdisabled'] = 'Dette er ikke muligt fordi RSS-feed er deaktiveret for hele sitet. Det skal f�rst aktiveres under indstilling af variabler p� administrationssiden.';
$string['configenablestats'] = 'Hvis du v�lger \'ja\' her vil Moodle\'s cronjob behandle og indsamle statistik. Afh�ngig af m�ngden af trafik til dit site kan dette tage et stykke tid. Hvis du aktivere denne funktion kan du se grafer og statistik om hvert kursus eller for hele sitet.';
$string['configerrorlevel'] = 'V�lg hvor meget der skal til for at vise en PHP warning. Normalt er typisk det bedste valg.';
$string['configextendedusernamechars'] = 'Denne indstilling tillader brugere at benytte alle karakterer i deres brugernavn. (Dette p�virker ikke deres rigtige navn). Det er som standard sat til \"falsk\" hvilket betyder at brugernavne kun kan indeholde bogstaver og tal.';
$string['configfilterall'] = 'Filtrer alle strenge, inklusiv overskrifter, titler, navigations bar og s� videre. Dette er mest brugbart n�r man bruger et flersproget filtre, ellers vil det blot belaste sitet mere unden v�sentligt forandring.';
$string['configfiltermatchoneperpage'] = 'Automatiske linkfiltre vil kun generere et link for den f�rste ord p� hele siden der passer. Hvis der er flere der passer vil de blive igoreret.';
$string['configfiltermatchonepertext'] = 'Automatisk linkfiltre vil kun generere et link for f�rste ord der passer filtret i hver tekstblok p� siden, (f.eks. resource, sideblok). Hvis der er flere forekomster vil disse blive igoreret. Denne indstilling vil blive ignoreret hvis \"En pr side\" er aktiveret.';
$string['configfilteruploadedfiles'] = 'Denne indstilling for�rsager at moodle sender alle uploadede HTML og tekstfiler igennem et evt. filter f�r de bliver vist.';
$string['configforcelogin'] = 'Normalt kan forsiden af sitet og kursusoversigten (men ikke kurserne) l�ses uden at folk logger sig ind. Hvis du �nsker at folk skal logge ind f�r de overhovedet har adgang til sitet skal du aktivere denne indstilling';
$string['configforceloginforprofiles'] = 'Aktiver denne indstilling for at tvinge folk til at logge ind som registrede brugere (ikke g�ster) f�r de kan se andres brugeres profilsider. Dette er som udgangspunkt deaktiveret s� kommende studerende kan l�se om underviserne p� hvert enkelt kursus, men det betyder ogs� at s�gemaskiner kan se se dem.';
$string['configframename'] = 'Hvis du indlejrer Moodle i htmlframes skal du skrive framenavnet her. I modsat fald skal der bare st� \'_top\'';
$string['configfullnamedisplay'] = 'Dette definere hvordan en brugers fulde navne skal vises. For de fleste ensprogede sites vil den mest effekttive indstilling v�re \"Fornavn + Efternavn\". Man kan v�lge at skjule fornavnet helt eller lade det v�re op til sprogpakken. (nogle sprog har forskellige ops�tninger)';
$string['configgdversion'] = 'Indikere hvilken version af GD der er installeret. Versionen der vises er den der er blevet autodetekteret. Pas p� med at �ndre indstillingen med mindre du virkelig ved hvad du med at g�re.';
$string['confighiddenuserfields'] = 'V�lg hvilken brugerinformations felter du �nsker at skjule fra andre brugere (undtagen undervisere p� kurser og administratorer). Dette vil g�re elever mere anonyme. Hold CTRL nede for at v�lge flere felter.';
$string['confightmleditor'] = 'V�lg om indlejret HTML WYSIWYG editor skal benyttes.  Det er ikke alle browsere der kan vise editoren. ';
$string['configidnumber'] = 'Denne indstilling angiver om: <br />
(a) Brugere bliver ikke spurgt om et IDnummer.
(b) Brugere kan angive et IDnummer men kan ogs� lade v�re.
(c) Brugere skal angive et IDnummer.
Hvis brugeren har skrevet et IDnummer bliver det vist i deres profil.';
$string['configintro'] = 'P� denne side kan du specificere et antal konfigurationsvariabler for at hj�lpe Moodle fungere p� din server. Som regel fungere standardv�rdierne fint og du kan altid �ndre p� dem senere.';
$string['configintroadmin'] = 'P� denne side skal du konfigurere din administratorkonto med hvilken du vil have fuld kontrol over sitet. V�r sikker p� at bruge et sikkert brugernavn og password samt en brugbar emailadresse. Du kan lave flere administratorkontoer senere.';
$string['configintrosite'] = 'P� denne side kan du konfigurere forsiden og navnet p� sitet. Du kan komme tilbage hertil senere og �ndre disse indstillinger til enhver tid ved at bruge \'Site konfiguration\' linket p� administratormenuen.';
$string['configintrotimezones'] = 'Denne side vil s�ge efter nye informationer om verdens tidszoner (inklusiv sommmertidsregler) og opdatere den lokale database med disse informationer. Disse lokationer vil bliver kontrolleret i denne r�kkef�lge: $a Denne procedure er generalt meget sikker og kan ikke �del�gge en normal installation. �nsker du at opdatere tidszonerne nu?';
$string['configlang'] = 'V�lg et standardsprog for hele sitet. Brugere kan v�lge alternative sprog senere.';
$string['configlangcache'] = 'Cache sprogmenuen. Dette sparer en del hukommelse og cpukraft. Hvis du aktivere dette kan det tage et stykke tid at opdatere f�rste gang efter at du tilf�jer eller fjerner et sprog.';
$string['configlangdir'] = 'De fleste sprog skrives fra venstre mod h�jre men nogle som Arabisk og Hebr�isk skrives fra h�jre mod venstre.';
$string['configlanglist'] = 'Hvis dette felt er blankt kan brugeren v�lge mellem alle tilg�ngelige sprog i Moodle. Med dette felt kan du s�tte hvilke sprog brugerne skal kunne v�lge imellem. Det g�res ved at liste sprogkoderne for de mulige sprog adskilt af kommaer som for eksempel: da,en,fr';
$string['configlangmenu'] = 'Skal der vises en general sprogmenu p� forsiden, loginsiden osv. Dette p�virker ikke brugerens mulighed for at v�lge et sprog tilknyttet deres egen profil.';
$string['configlocale'] = 'Lokalindstillinger for dit site. Det vil have indflydelse p� format og sprog med hensyn til datoer. Du skal have disse lokalindstillinger installeret p� din operativ system (f.eks. en_US eller da_DK). Hvis du ikke ved, hvad du skal v�lge, s� lad feltet st� tomt.';
$string['configloginhttps'] = 'Hvis du sl�r denne til vil moodle bruge en sikker http forbindelse (HTTPS) til loginsiden, s� brugernavn og password bliver krypteret. Derefter vil siden igen g� over til almindelig HTTP pga. hastigheden. ADVARSEN: Denne indstilling KR�VER at https bliver specielt aktiveret p� webserveren - hvis den ikke er KAN DU IKKE LOGGE IND OG �NDRE DETTE IGEN.';
$string['configloglifetime'] = 'Dette angiver hvor lang tid du �nsker at gemme logfiler med brugeraktiviteter. Logs der er �ldrer end denne alder bliver automatisk slettet. Det er bedst at gemme logfilerne s� l�nge du kan, i tilf�lde af at du f�r brug for dem. Hvis du har en meget belastet server eller performance problemer, s� kan du pr�ve at s�tte levetiden for logfilerne ned.';
$string['configlongtimenosee'] = 'Hvis kursisterne ikke har v�ret logget p� i lang tid, s� bliver de automatisk slettet fra kurset. Denne indstilling s�tter tidsbegr�nsningen.';
$string['configmaxbytes'] = 'Dette angiver hvor store filer der generelt kan uploades til hele siden. Denne indstilling er begr�nset af PHP konfigurationsindstillingen \'upload_max_filesize\' og Apache direktivet \'LimitRequestBody\'. Det vil sige at denne indstilling er maksst�rrelsen p� filer der kan uploades fra et kursus eller et modul.';
$string['configmaxeditingtime'] = 'Denne angiver hvor lang tid brugerne har til editere i deres indl�g i et forum, logbog etc. Normalt er 30 minutter en god v�rdi.';
$string['configmessaging'] = 'Skal beskedsystemet mellem brugere aktiveres';
$string['configmymoodleredirect'] = 'Denne indstilling sender ikke administratorer til /min moodle n�r de er logget ind og erstatter topelementet i br�dkrummelinkene til /min moodle';
$string['confignoreplyaddress'] = 'E-mails bliver nogen gange sendt ud p� vegne af brugere f.eks. forum indl�g. Den e-mailadresse du angiver her vil st� som \"Fra\" adresse p� de e-mails som bliver sendt fra de brugere som har valgt at hemmeligholde deres e-mail.';
$string['confignotifyloginfailures'] = 'Hvis der bliver lavet et fejllogin der bliver logget kan der blive sendt en e-mail ud. Hvem skal modtage disse.';
$string['confignotifyloginthreshold'] = 'Hvis fejllogin-logging er sl�et hvor mange forkerte loginfors�g af den samme bruger eller IP adresse er det v�rd at sende en e-mail omkring.';
$string['configopentogoogle'] = 'Hvis du aktivere denne indstilling, kan Google s�ge p� siden som g�st. Derudover vil folk som f�lger et link fra Google vil automatisk blive logget ind som g�st. Dette vil selvf�lgelig kun v�re tilf�lde for hvis kurset tillader g�steadgang.';
$string['configpathtoclam'] = 'Stien til clam Antivirus, sandsynligvis noget i stil med /usr/bin/clamscan eller /usr/bin/clamdscan. Stien er n�dvendig hvis filer skal kontrolleres for virus.';
$string['configpathtodu'] = 'Stien til du. Ofte noget i stil med /usr/bin/du. Hvis du skriver stien vil sider der viser indholdet af biblioteker blive en del hurtigere hvis der er mange filer.';
$string['configperfdebug'] = 'Hvis du aktivere dette vil parsetiden blive vist i bunden af siden i standard temaet.';
$string['configproxyhost'] = 'Hvis denne server skal bruge en proxy computer (f.eks. en firewall) for at komme p� Internettet, s� skriv proxy hostnavn og port her.';
$string['configquarantinedir'] = 'Hvis du �nsker at clam Antivirus skal flytte inficerede filer til et karant�ne bibliotek skal det skrives her. Det skal v�re skrivbart for webserveren. Hvis du lader dette felt v�re blankt, eller skriver en sti der ikke findes eller ikke kan skrives til vil inficerede filer blive slettet. Der skal ikke nogen skr�streg i slutningen af stien. ';
$string['configrequestedstudentname'] = 'Ord for elev brugt i �nskede kurser.';
$string['configrequestedstudentsname'] = 'Ord for elever brugt i �nskede kurser.';
$string['configrequestedteachername'] = 'Ord for underviser brugt i �nskede kurser.';
$string['configrequestedteachersname'] = 'Ord for undervisere brugt i �nskede kurser.';
$string['configrestrictbydefault'] = 'Skal nye kurser i denne kategori have restriktioner for, hvilke moduler der kan bruges.';
$string['configrestrictmodulesfor'] = 'Hvilke kurser skulle have <b>muligheden</b> for at begr�nse nogle aktivitetsmoduler.';
$string['configrunclamonupload'] = 'Skal clam Antivirus kontrollere uploadede filer? Du skal bruge en korrekt stil til clam AV for at det virker. (Clam AV er en GPL licenseret Antivirusscanner der kan hentes fra http://www.clamav.net/ )';
$string['configsectioninterface'] = 'Interface';
$string['configsectionmail'] = 'Post';
$string['configsectionmaintenance'] = 'Vedligeholdelse';
$string['configsectionmisc'] = 'Forskelligt';
$string['configsectionoperatingsystem'] = 'Operativsystem';
$string['configsectionpermissions'] = 'Rettigheder';
$string['configsectionrequestedcourse'] = 'Kursus foresp�rgsler';
$string['configsectionsecurity'] = 'Sikkerhed';
$string['configsectionstats'] = 'Statistik';
$string['configsectionuser'] = 'Bruger';
$string['configsecureforms'] = 'Moodle kan tilf�je et ekstra niveau af sikkerhed, n�r man skriver data til den. Hvis dette er aktivt s� bliver browserens HTTP_REFERER variabel sammenholdt med det der bliver sendt til moodle vha. forms. Dette kan i f� tilf�lde give problemer hvis der er en firewall imellem f.eks. zonealarm kan v�re konfigureret til at fjerne HTTP_REFERER fra HTTP trafikken, eller proxier kan ogs� lave det samme. Symptomerne er at man bliver h�ngene i form. Hvis brugerne har den type problemer med loginsiden s� kan du sl� det fra. Det g�r dog sitet mere s�rbart for \'Brute force\' angreb. Hvis du er i tvivl s� lad denne indstilling v�re sl�et til.';
$string['configsessioncookie'] = 'Denne indstilling angiver navnet p� den cookie der bliver brugt til Moodle sessioner. Den er valgfri, og kun brugbar hvis der er flere kopier af moodle der k�rer p� samme server.';
$string['configsessiontimeout'] = 'Hvis brugere er inaktive p� siden i lang tid (uden af skifte sider) s� bliver de automatisk logget ud. (deres session slutter). Denne variabel specificere hvor lang tid der skal g� f�r de bliver logget ud.';
$string['configshowblocksonmodpages'] = 'Nogle aktivitetsmoduler underst�tter blokke p� deres sider. Hvis du aktivere disse kan underviseren tilf�je sideblokke til disse sider.';
$string['configshowsiteparticipantslist'] = 'Alle studerende og undervisere bliver listet i deltagerlisten. Hvem skal kunne se deltagerlisten for hele sitet.';
$string['configsitepolicy'] = 'Hvis der er nogle regler som brugerne skal l�se og acceptere f�r de kan bruge sitet skal linket URL\'en angives her, i modsat fald kan den v�re blank. URL\'en kan pege hvorhen det skal v�re - et bekvemt sted kunne v�re en uploadetfil som f.eks. http://yoursite/file.php/1/policy.html';
$string['configslasharguments'] = 'Filer (billeder, uploads mv) bliver sendt via et script vha. \'skr�stregsargumenter\' (den anden mulighed her). Denne metode tillader at filer lettere bliver cached i webbrowsere, proxyservere mm. Desv�rre tillader nogle PHPservere ikke altid denne metode s� hvis du har problemer med at se uploadede filer og billeder (f.eks. brugerbilleder),  s� s�t denne indstilling til den f�rste mulighed.';
$string['configsmtphosts'] = 'Angiv fuld navn til en eller flere STMP servere som Moodle skal bruge til at sende mail (f.eks. mail.a.com, mail.b.com etc.) Hvis du intet angiver vil Moodle bruge PHP default metoden til at sende mail.';
$string['configsmtpuser'] = 'Hvis du har angivet en STMP server herover, og serveren kr�ver brugernavn og password, s� indtast det her.';
$string['configstatsfirstrun'] = 'Dette angiver hvor langt tilbage logfiler skal bahandles <b>f�rste gang</b> cronjobbet �nsker at generere statistikken. Hvis der en del trafik og siden befinder sig p� en delt server, er det ikke en god ide at g� for langt tilbage, da det godt kan tage en del tid og er ret resourcekr�vende. (ifm. denne indstilling er 1 m�ned=28 dage. I grafer og rapporter er 1m�ned = 1 kalenderm�ned.)';
$string['configstatsmaxruntime'] = 'Statistikbehandling kan v�re ret resourcekr�vende, s� brug en kombination af dette felt og det n�ste, for at angive hvorn�r det skal g�res og hvor l�nge det skal g�res for.';
$string['configstatsruntimestart'] = 'P� hvilket tidspunkt skal cronjobbet generere statistikken.';
$string['configstatsuserthreshold'] = 'Hvis du angiver et nummer her, en ikke nummerisk v�rdi for rangering af kurser, vil kurser med mindre end dette antal af tilmeldte brugere (elever+undervisere) blive ignoreret.';
$string['configteacherassignteachers'] = 'Skal almindelige undervisere tillades at tilf�je andre undervisere til et kursus de underviser i. Hvis \'Nej\' kan kun kursusopretteren og admins tilf�je undervisere.';
$string['configthemelist'] = 'Hvis dette felt er blankt kan brugeren v�lge mellem alle temaer. Du kan begr�nse udvalget ved at skrive en kommasepareret liste af temaer her f.eks. standard,orangewhite';
$string['configtimezone'] = 'Hvad skal standardtidszonen v�re? Dette er kun den tidszone der bliver brugt som udgangspunkt - hver bruger kan overskrive denne indstilling i deres egen profil. \'Server tid\' vil f�lge serverens tidszone. Hvis \'Server tid\' v�lges i brugerens profil vil den f�lge denne indstilling.';
$string['configunzip'] = 'Indikerer placeringen af dit zip program ( kun for Unix). Dette for at kunne zippe filer p� serveren.';
$string['configvariables'] = 'Variabler';
$string['configwarning'] = 'Pas p� med at �ndre p� disse indstillinger - forkerte v�rdier kan for�rsage problemer.';
$string['configzip'] = 'Her skal stien til zipprogrammet angives (kun unix) Hvis den er specificeret kan du oprette zipfiler p� serveren. Hvis du lader stien v�re blank vil Moodle fors�ge at benytte PHP\'s interne rutiner hvis de er tilg�ngelige.';
$string['confirmation'] = 'Godkendelse';
$string['cronwarning'] = 'Cron <a href=\"cron.php\">vedligeholdelsesscriptet</a>  har ikke v�ret k�rt indenfor de sidste 24 timer.<br /> Der st�r i <a href=\"../doc/?frame=install.html&#8834;=cron\">installationsscriptet </a> hvordan du kan automatisere det.';
$string['density'] = 'T�thed';
$string['edithelpdocs'] = 'Ret i hj�lpefiler';
$string['editstrings'] = 'Ret tekst';
$string['filterall'] = 'Filtrer alle strenge';
$string['filtermatchoneperpage'] = 'Filtrer f�rste forekomst pr side';
$string['filtermatchonepertext'] = 'Filtrer f�rste forekomst pr tekstblok';
$string['filteruploadedfiles'] = 'Filtrer uploadede filer';
$string['globalsquoteswarning'] = '<p><strong>Advarsel om sikkerhed</strong>: For at Moodle kan fungere ordentligt kr�ver det nogle �ndringer i den nuv�rende PHPkonfiguration.</p> <p>Du <em>skal</em> s�tte <code>register_globals=off</code> og/eller <code>magic_quotes_gpc=on</code>. <br />
Hvis det er muligt b�r du ogs� s�tte <code>register_globals=off</code> for at forbedre <br /> serverens sikkerhed generalt, indstillingen <code>magic_quotes_gpc=on</code> kan ogs� anbefales.<p/><p>Disse indstillinger kan s�ttes ved at rette i <code>php.ini</code>, Apache/IIS <br />konfiguration eller en <code>.htaccess</code> fil.</p>';
$string['helpadminseesall'] = 'Skal administratorer se alle begivenheder eller kun dem som vedkommer dem.';
$string['helpcalendarsettings'] = 'Konfigurer kalender og tid/dato relaterede indstillinger i Moodle';
$string['helpforcetimezone'] = 'Du kan tillade brugere selv at v�lge deres tidszone eller tvinge alle brugere til at bruge den samme tidszone.';
$string['helpsitemaintenance'] = 'For upgraderinger og andet vedligeholdelse.';
$string['helpstartofweek'] = 'Hvilken dag starter ugen i kalenderen.';
$string['helpupcominglookahead'] = 'Hvor mange dage frem skal kalenderen kikke efter begivenheder.';
$string['helpupcomingmaxevents'] = 'Hvor mange begivenheder skal maksimalt vises til brugere som standard.';
$string['helpweekenddays'] = 'Hvilke dage skal betragtes som weekend og vises med en anden farve.';
$string['importtimezones'] = 'Opdater alle tidszoner';
$string['importtimezonescount'] = '$a->count enheder importeret fra $a->source';
$string['importtimezonesfailed'] = 'Ingen kilder fundet (Uheldigt)';
$string['incompatibleblocks'] = 'Ukompatible blokke';
$string['latexpreamble'] = 'LaTeX Preamble';
$string['latexsettings'] = 'LaTeX render indstillinger';
$string['mediapluginavi'] = 'Aktiver .avi filter';
$string['mediapluginflv'] = 'Aktiver .flv filter';
$string['mediapluginmov'] = 'Aktiver .mov filter';
$string['mediapluginmp3'] = 'Aktiver .mp3 filter';
$string['mediapluginmpg'] = 'Aktiver .mpg filter';
$string['mediapluginswf'] = 'Aktiver .swf filter';
$string['mediapluginwmv'] = 'Aktiver .wmv filter';
$string['optionalmaintenancemessage'] = 'Besked der vises under vedligeholdelse af sitet.';
$string['pathconvert'] = 'Stien til <i>konveteret</i> bin�r fil';
$string['pathdvips'] = 'Stien til <i>dvips</i> bin�r fil';
$string['pathlatex'] = 'Stien til <i>latex</i> bin�r fil';
$string['pleaseregister'] = 'Registrer venlist for at fjerne denne knap.';
$string['sitemaintenance'] = 'Dette site er i �jeblikket lukket ned pga. vedligeholdelse.';
$string['sitemaintenancemode'] = 'Vedligeholdelses tilstand';
$string['sitemaintenanceoff'] = 'Vedligeholdelses tilstand er afsluttet og sitet fungere normalt igen.';
$string['sitemaintenanceon'] = 'Sitet er i vedligeholdelsestilstand s� kun administratorer kan logge ind.';
$string['sitemaintenancewarning'] = 'Sitet er i �jeblikket i vedligeholdelsestilstand og kun administratorer kan logge ind. For at returnere til normaltilstand kan vedligeholdelsestilstanden <a href=\"maintenance.php\">deaktiveres</a>.';
$string['stickyblocks'] = 'Kl�brige blokke';
$string['stickyblockscourseview'] = 'Kursus side';
$string['stickyblocksduplicatenotice'] = 'Hvis en blok du tilf�jer her allerede er tilf�jet p� en side vil det resultere i dubletter. <br />Kun den angivne blok vil ikke v�re til at rette, dubletten vil stadig kunne rettes.';
$string['stickyblocksmymoodle'] = 'Min moodle';
$string['stickyblockspagetype'] = 'Konfigurer sidetype';
$string['tabselectedtofront'] = 'P� tabeller med tabulatorer skal den valgte r�kke s� flyttet fremad.';
$string['therewereerrors'] = 'Der var fejl i dine data';
$string['timezoneforced'] = 'Dette er gennemtvunget af sideadministratoren';
$string['timezoneisforcedto'] = 'Tving alle brugere til at bruge den';
$string['timezonenotforced'] = 'Alle brugere kan bestemme deres egen tidszone';
$string['upgradeforumread'] = 'En ny funktion er blevet tilf�jet i Moodle 1.5 til at holde styr p� l�ste/ikke l�ste forumindl�g.<br />For at benytte denne funktionalitet bliver du n�d til at <a href=\"$a\">opdeter tabellerne</a>.';
$string['upgradeforumreadinfo'] = 'En ny funktion er blevet tilf�jet i Moodle 1.5 til at holde styr p� l�ste/ikke l�ste forumindl�g.<br />For at benytte denne funktionalitet bliver du n�d til at opdater dine tabeller med informationer om de eksisterende poster. Afh�ngig af st�rrelsen p� sitet kan dette godt tage en del tid. (timer) og kan v�re ret belastene for databasen, s� det er bedst at g�re dette i stille perioder. Sitet vil fungere normalt under opdateringen, og brugerne vil ikke blive p�virket. N�r du starter opdateringen b�r du lade den k�re til ende, (hold browservinduet �bent). Hvis du kommer til at stoppe opdateringen ved at lukke vinduet, s� kan du forts�tte igen.
<br /><br />�nsker du at starte opdateringsprocessen nu?';
$string['upgradelogs'] = 'For fuld funktionalitet skal de gamle logfiler opgraderes. <a href=\"$a\">Yderligere information</a>';
$string['upgradelogsinfo'] = 'Der er lavet nogle �ndringer i den m�de som logfiler bliver gemt p�. For at du stadig kan se all login-informationer sorteret efter aktivitet, skal logfilerne opgraderes. Afh�ngig af logfilernes st�rrelse kan dette godt tage lang tid (m�ske op til flere timer) og v�re ret belastende for databaseserveren for store sites. N�r du f�rst har startet processen b�r du lade den arbejde f�rdig (ved at lade browservinduet st� �bent). For andre vil sitet stadig fungere fint selvom logfilerne bliver opdateret.<br /><br />�nsker du at opgradere logfilerne nu?';
$string['upgradesure'] = 'Moodles filer er blevet �ndret sitet skal til at udf�rer en automatik opgradering af serveren til version <p><b>$a</b></p>
<p>N�r serveren �n gang er opdateret kan det ikke laves om</p><p>Er du sikker p� at du vil forts�tte</p>';
$string['upgradingdata'] = 'Opgraderer data';
$string['upgradinglogs'] = 'Opgraderer logfiler';

?>
