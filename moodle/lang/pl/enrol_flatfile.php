<?PHP // $Id: enrol_flatfile.php,v 1.1.4.3 2006/02/06 10:00:25 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.4 (2004083100)


$string['description'] = 'W tej metodzie Moodle sprawdza specjalnie sformatowany plik tekstowy, którego lokalizacjê podasz. Plik mo¿e wygl±daæ tak:

<p><pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Plik tekstowy';
$string['filelockedmail'] = 'Plik tekstowy u¿ywany do zapisu ($a) nie mo¿e byæ skasowany przez crona. Zwykle oznacza to, ¿e ¼le s± ustawione zezwolenia (chmod) dla tego pliku. Zmieñ zezwolenia aby Moodle mog³o kasowaæ ten plik. W przeciwnym wypadku jego instrukcje bêd± wielokrotnie powtarzane.';
$string['filelockedmailsubject'] = 'Powa¿ny b³±d: Plik zapisu';
$string['location'] = 'Lokalizacja pliku';
$string['mailadmin'] = 'Powiadom admina e-mailem';
$string['mailusers'] = 'Powiadom u¿ytkowników e-mailem';

?>
