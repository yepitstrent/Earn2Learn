<?PHP // $Id: enrol_flatfile.php,v 1.5.2.4 2006/02/06 10:00:35 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.3.2 (2004052502)


$string['description'] = 'Den h�r metoden kommer att �terkommande leta efter och bearbeta en specialformatterad textfil som Du anger. Filen kan se ut ungef�r s� h�r:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>
';
$string['enrolname'] = 'platt fil';
$string['filelockedmail'] = 'Den textfil som Du anv�nder f�r filbaserade registreringar ($a) kan inte tas bort av cronprocessen. Detta inneb�r vanligtvis att det �r n�got fel med r�ttigheterna p� den. Var sn�ll och modifiera r�ttigheterna s� att Moodle kan ta bort filen annars kan den komma att bli �terkommande bearbetad.';
$string['filelockedmailsubject'] = 'Viktigt fel: registreringsfilen';
$string['location'] = 'Placering av fil';
$string['mailadmin'] = 'Meddela admin via e-post';
$string['mailusers'] = 'Meddela anv�ndare via e-post';

?>
