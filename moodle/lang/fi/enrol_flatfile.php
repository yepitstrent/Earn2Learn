<?PHP // $Id: enrol_flatfile.php,v 1.6.2.3 2006/02/06 09:59:43 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2004112900)


$string['description'] = 'T�m� moduli tarkistaa ajoittain m��rittelem�si tekstiedoston. Tiedoston tulisi n�ytt�� seuraavalta: <pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Tekstitiedosto';
$string['filelockedmail'] = 'Tiedostoa, jota k�ytet��n kurssikirjaantumisiin, ei voida poistaa. T�m� saattaa tarkoitaa sit�, ett� tiedoston komennot suoritetaan useamman kerran. Ongelmien v�ltt�miseksi korjaa tiedosto-oikeudet niin, ett� cron-toimito voi poistaa tiedoston.';
$string['filelockedmailsubject'] = 'Virhe rekiter�itymis tiedostossa';
$string['location'] = 'Tiedoston sijainti';
$string['mailadmin'] = 'Ilmoita yll�pit�j�lle';
$string['mailusers'] = 'Ilmoita k�ytt�j�lle';

?>
