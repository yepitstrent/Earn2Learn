<?PHP // $Id: enrol_flatfile.php,v 1.3.2.3 2006/02/06 10:00:30 moodler Exp $ 
      // enrol_flatfile.php - created with Moodle 1.4.1 (2004083101)


$string['description'] = 'Este m�todo controla e processa regularmente um arquivo de texto com formato especial no endere�o indicado por voc�
Veja o seguinte exemplo: 
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Arquivo Flat';
$string['filelockedmail'] = 'O arquivo de texto que voc� est� utilizando para fazer as inscri��es ($a) n�o p�de ser cancelado pelo processo cron. Isto normalmente significa que a configura��o das permiss�es do arquivo n�o � compat�vel. Por favor corrija as permiss�es para que o sistema possa cancelar o arquivo e impedir que o mesmo seja processado diversas v�zes';
$string['filelockedmailsubject'] = 'Erro importante: Arquivo de inscri��o';
$string['location'] = 'Localiza��o do arquivo';
$string['mailadmin'] = 'Avisar administrador via email';
$string['mailusers'] = 'Avisar usu�rios via email';

?>
