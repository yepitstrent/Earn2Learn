<?PHP // $Id: grades.php,v 1.1.2.4 2006/02/06 10:00:35 moodler Exp $ 
      // grades.php - created with Moodle 1.6 development (2005101200)


$string['addcategory'] = 'L�gg till en kategori';
$string['addcategoryerror'] = 'Det gick inte att l�gga till en kategori';
$string['addexceptionerror'] = 'Ett fel intr�ffade n�r ett undantag lades till f�r anv�ndarid:betygselement';
$string['allgrades'] = 'Alla betyg/omd�men enligt kategori';
$string['allstudents'] = 'Alla studenter/elever/deltagare/l�rande';
$string['average'] = 'Medel';
$string['bonuspoints'] = 'Bonuspo�ng';
$string['categories'] = 'Kategorier';
$string['category'] = 'Kategori';
$string['choosecategory'] = 'V�lj kategori';
$string['creatinggradebooksettings'] = 'Skapar inst�llningar f�r betygs/omd�meskatalog';
$string['curveto'] = 'Kurva till';
$string['deletecategory'] = 'Ta bort kategori';
$string['displaylettergrade'] = 'Visa bokstavsbetyg';
$string['displaypercent'] = 'Visa procent';
$string['displaypoints'] = 'Visa po�ng';
$string['displayweighted'] = 'Visa viktade betyg/omd�men';
$string['dropped'] = 'Inte inkluderad';
$string['dropxlowest'] = 'Ta inte med X l�gsta';
$string['dropxlowestwarning'] = 'OBS! Om Du anv�nder Dig av \'Ta inte med X l�gsta\' s� inneb�r det att alla enheter i den kategorin har samma v�rde i po�ng r�knat. Om po�ngtalen varierar s� kommer resultaten att bli of�ruts�gbara.';
$string['errorgradevaluenonnumeric'] = 'Fick icke-numerisk f�r l�gt eller h�gt betyg f�r';
$string['errornocategorizedid'] = 'Det gick inte att hitta ett id som inte var kategoriserat';
$string['errornocourse'] = 'Det gick inte att hitta n�gon information om kurs';
$string['errorreprintheadersnonnumeric'] = 'Fick ett icke-numeriskt v�rde f�r skriv-ut-igen-rubriker';
$string['exceptions'] = 'Undantag';
$string['excluded'] = 'Utesluten';
$string['extracredit'] = 'Extra tillgodor�knande';
$string['extracreditwarning'] = 'OBS! Om Du st�ller in alla enheter i en kategori till \'Extra tillgodor�knande\' s� kommer det att effektivt ta bort dem fr�n ber�kningen av betyg/omd�men. Detta eftersom det inte kommer att bli n�gon totalsumma f�r po�ng.';
$string['forstudents'] = 'F�r studenter/elever/deltagare/l�rande';
$string['gradebook'] = 'Betygs/omd�meskatalog';
$string['gradebookhiddenerror'] = 'Betygs/omd�meskatalogen �r f.n. inst�lld till att d�lja allt f�r studenterna/eleverna/deltagarna/de l�rande.';
$string['gradecategoryhelp'] = 'Hj�lp ang�ende kategorier av betyg/omd�men';
$string['gradeexceptions'] = 'Undantag ang�ende betyg/omd�men';
$string['gradeexceptionshelp'] = 'Hj�lp ang�ende  undantag avseende betyg/omd�men';
$string['gradehelp'] = 'Hj�lp ang�ende betyg/omd�men';
$string['gradeitem'] = 'Element f�r betyg/omd�me';
$string['gradeitemaddusers'] = 'Ta inte med i betyg/omd�me';
$string['gradeitemmembersselected'] = 'Inte med i betyg/omd�me';
$string['gradeitemnonmembers'] = 'Med i betyg/omd�me';
$string['gradeitemremovemembers'] = 'Ta med i betyg/omd�me';
$string['gradeitems'] = 'Komponent f�r betyg/omd�men';
$string['gradeletter'] = 'Bokstav f�r betyg/omd�me';
$string['gradeletterhelp'] = 'Hj�lp ang�ende bokstavsbetyg/omd�men';
$string['gradeletternote'] = 'F�r att ta bort en bokstav f�r betyg/omd�me s� t�mmer Du bara vilken som helst av de<br />tre textrutorna p� den bokstaven och bekr�ftar.';
$string['gradepreferenceshelp'] = 'Hj�lp ang�ende inst�llningar f�r betyg/omd�men';
$string['grades'] = 'Betyg/omd�men';
$string['gradeweighthelp'] = 'Hj�lp ang�ende viktning av betyg/omd�men ';
$string['hideadvanced'] = 'D�lj avancerade egenskaper';
$string['hidecategory'] = 'Dold';
$string['highgradeascending'] = 'Sortera enligt stigande skala f�r h�ga betyg/omd�men';
$string['highgradedescending'] = 'Sortera enligt fallande skala f�r h�ga betyg/omd�men';
$string['highgradeletter'] = 'H�g/a';
$string['incorrectcourseid'] = 'ID f�r kurs var felaktigt';
$string['item'] = 'Komponent';
$string['items'] = 'Komponenter';
$string['lettergrade'] = 'Bokstavsbetyg/omd�me';
$string['lettergradenonnumber'] = 'L�gt och/eller h�gt betyg/omd�me var icke-numeriskt f�r';
$string['letters'] = 'Bokst�ver';
$string['lowest'] = 'L�gsta';
$string['lowgradeletter'] = 'L�g/a';
$string['max'] = 'H�gsta';
$string['maxgrade'] = 'Max betyg/omd�me';
$string['median'] = 'Medel';
$string['min'] = 'L�gsta';
$string['mode'] = 'L�ge';
$string['no'] = 'Ingen';
$string['nocategories'] = 'Det gick inte att hitta eller l�gga till kategorier f�r betyg/omd�men f�r denna kurs';
$string['nocategoryview'] = 'Ingen kategori att visa med';
$string['nogradeletters'] = 'Inga bokstavsbetyg har blivit inst�llda';
$string['nogradesreturned'] = 'Inga bokstavsbetyg har returnerats';
$string['nolettergrade'] = 'Inget bokstavsbetyg/omd�me f�r ';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Mottaget icke-numeriskt v�rde f�r';
$string['nonweightedpct'] = 'icke-viktat %%';
$string['notteachererror'] = 'Du m�ste vara l�rare f�r att f� anv�nda det h�r';
$string['pctoftotalgrade'] = '%% av sammanlagda betyget/omd�met';
$string['percent'] = 'Procent';
$string['percentascending'] = 'Sortera stigande enligt procent';
$string['percentdescending'] = 'Sortera fallande enligt procent';
$string['percentshort'] = '%%';
$string['points'] = 'po�ng';
$string['pointsascending'] = 'Sortera stigande enligt po�ng';
$string['pointsdescending'] = 'Sortera fallande enligt po�ng';
$string['preferences'] = 'Preferenser';
$string['rawpct'] = 'R� %%';
$string['reprintheaders'] = 'Skriv rubrikerna igen';
$string['savechanges'] = 'Spara �ndringar';
$string['savepreferences'] = 'Spara preferenser';
$string['scaledpct'] = 'Skalad %%';
$string['setcategories'] = 'St�ll in kategorier';
$string['setcategorieserror'] = 'Du m�ste f�rst st�lla in kategorierna f�r Din kurs innan Du kan ge dem viktningar.';
$string['setgradeletters'] = 'St�ll in bokstavsbetyg';
$string['setpreferences'] = 'St�ll in preferenser';
$string['setting'] = 'Inst�llning';
$string['settings'] = 'Inst�llningar';
$string['setweights'] = 'St�ll in viktningar';
$string['showallstudents'] = 'Visa alla studenter/elever/deltagare/l�rande';
$string['showhiddenitems'] = 'Visa alla dolda element';
$string['sort'] = 'Sortera';
$string['sortbyfirstname'] = 'Sortera efter f�rnamn';
$string['sortbylastname'] = 'Sortera efter efternamn';
$string['standarddeviation'] = 'Standaravvikelse';
$string['stats'] = 'Statistik';
$string['statslink'] = 'Stats';
$string['student'] = 'Student/elev/deltagare/l�rande';
$string['total'] = 'Summa';
$string['totalweight100'] = 'Den sammanlagda viktningen �r lika med 100';
$string['totalweightnot100'] = 'Den sammanlagda viktningen �r inte lika med 100';
$string['uncategorised'] = 'Inte kategoriserad';
$string['useadvanced'] = 'Anv�nd avancerade egenskaper';
$string['usepercent'] = 'Anv�nd procent';
$string['useweighted'] = 'Anv�nd viktat';
$string['viewbygroup'] = 'Grupp';
$string['viewgrades'] = 'Visa betyg/omd�men';
$string['weight'] = 'vikt';
$string['weightedascending'] = 'Sortera efter stigande viktad procent';
$string['weighteddescending'] = 'Sortera efter fallande viktad procent';
$string['weightedpct'] = 'viktad %%';
$string['weightedpctcontribution'] = 'viktat  %%  bidrag';
$string['writinggradebookinfo'] = 'Skriver inst�llningar f�r betygs/omd�meskatalogen';
$string['yes'] = 'Ja';

?>