<?php // $Id: enrol_flatfile.php,v 1.2.6.3 2006/02/06 09:59:43 moodler Exp $ 

$string['enrolname'] = 'Fichier plat';

$string['description'] = 'Cette m�thode permet une v�rification syst�matique � partir d\'un fichier texte sp�cialement mis en forme dispos� un emplacement que vous choisissez. Le fichier peut ressembler � ceci :
<pre>
    add, student, 5, CF101
    add, teacher, 6, CF101
    add, teacheredit, 7, CF101
    del, student, 8, CF101
    del, student, 17, CF101
    add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['filelockedmailsubject'] = 'Erreur importante : fichier d\'inscriptions';
$string['filelockedmail'] = 'Le fichier texte que vous utilisez pour l\'inscription ($a) ne pourra pas �tre effac� par le cron. Cela signifie la plupart du temps que ses permissions ne sont pas correctement r�gl�es. Veuillez corriger ces permissions, de sorte que Moodle puisse effacer le fichier. Sans cela les inscriptions pourraient �tre effectu�es � plusieurs reprises.';
$string['location'] = 'Emplacement du fichier';
$string['mailusers'] = 'Avertir les utilisateurs par courriel';
$string['mailadmin'] = 'Avertir l\'administrateur par courriel';

?>
