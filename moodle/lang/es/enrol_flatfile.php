<?PHP // $Id: enrol_flatfile.php,v 1.2.4.3 2006/02/06 09:59:39 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.5 unstable development (2004083000)


$string['description'] = 'Este m�todo comprueba y procesa un archivo de texto con formato especial en el lugar que usted especifica. El archivo puede tener una apariencia semejante a �sta:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Archivo plano (\'flat file\')';
$string['filelockedmail'] = 'El archivo de texto que usted est� utilizando para realizar las matriculaciones basadas en archivo ($a) no puede ser eliminado por el proceso del cron. Esto normalmente significa que sus permisos est�n equivocados. Por favor, fije los permisos de forma que Moodle pueda eliminar el archivo, ya que de otro modo el proceso se repetir�.';
$string['filelockedmailsubject'] = 'Error importante: Archivo de matriculaci�n';
$string['location'] = 'Ubicaci�n del archivo';
$string['mailadmin'] = 'Notificar al administrador por email';
$string['mailusers'] = 'Notificar a los usuarios por email';

?>
