<?PHP // $Id: enrol_flatfile.php,v 1.2.4.3 2006/02/06 09:59:32 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.5 + (2005060201)


$string['description'] = 'Tato metoda bude opakovan� kontrolovat a zpracov�vat speci�ln� form�tovan� textov� soubor, jeho� um�st�n� zde ur��te. Soubor m��e m�t strukturu podobnou t�hle:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Ze souboru';
$string['filelockedmail'] = 'Textovy soubor, ktery pouzivate pro zapisy ($a), nemuze byt odstranen procesem cron. Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Dulezita chyba: Soubor se zapisy';
$string['location'] = 'Um�t�n� souboru';
$string['mailadmin'] = 'Upozornit spr�vce emailem';
$string['mailusers'] = 'Upozornit u�ivatele emailem';

?>
