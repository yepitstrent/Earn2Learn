<?PHP // $Id: enrol_flatfile.php,v 1.2.2.5 2006/02/06 10:00:34 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2005060201)


$string['description'] = 'T�to met�da bude opakovane kontrolova� a spracov�va� �peci�lne form�tovan� textov� s�bor, ktor�ho umiestnenie tu ur��te. S�bor m��e ma� �trukt�ru podobn� tejto:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000 </pre>';
$string['enrolname'] = 'Zo s�boru';
$string['filelockedmail'] = 'Textov� s�bor, ktor� pou��vate pre z�pisy do kurzov($a), nem��e by� odstr�nen� procesom cron. V��inou je to sp�soben� zle nastaven�mi pr�vami. Pros�m, opravte pr�va tak, aby mohol Moodle tento s�bor odstr�ni�. Inak m��e doch�dza� k jeho opakovan�mu spracovaniu.';
$string['filelockedmailsubject'] = 'D�le�it� chyba: S�bor so z�pismi';
$string['location'] = 'Umiestnenie s�boru';
$string['mailadmin'] = 'Upozorni� administr�tora emailom';
$string['mailusers'] = 'Upozorni� pou��vate�ov emailom';

?>
