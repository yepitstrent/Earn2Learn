<?PHP // $Id: enrol_database.php,v 1.1.4.3 2006/02/06 10:00:26 moodler Exp $ 
      // enrol_database.php - created with Moodle 1.5 unstable development (2004083000)


$string['dbhost'] = 'Nome do servidor da base de dados';
$string['dbname'] = 'A base de dados espec�fica a utilizar';
$string['dbpass'] = 'Palavra chave para aceder ao servidor';
$string['dbtable'] = 'Tabela dentro dessa base de dados';
$string['dbtype'] = 'Tipo de servidor de bases de dados';
$string['dbuser'] = 'Nome de utilizadro para aceder � base de dados';
$string['description'] = 'Pode usar uma base de dados externa (de quase qualquer tipo) para controlar as inscri��es. Admite-se que a sua base de dados externa cont�m um campo com um identificador de disciplina (course ID), e um campo com o c�digo de utilizador (user ID). Esses campos ser�o comparados com os campos que seleccionar nas tabelas locais de disciplina e utilizador.';
$string['enrolname'] = 'Base de dados externa';
$string['localcoursefield'] = 'O nome do campo na tabela de disciplinas que se est� a usar para comparar com a base de dados remota (por exemplo, idnumber)';
$string['localuserfield'] = 'O nome do campo na tabela local de utilizadores que se est� a usar para comparar com os nomes de utilizadores na base de dados remota (por exemplo, idnumber)';
$string['remotecoursefield'] = 'O campo da base de dados remota onde se espera encontrar o identificador de disciplina (course ID)';
$string['remoteuserfield'] = 'O campo da base de dados remota onde se espera encontrar o c�digo de utilizador (user ID)';

?>
