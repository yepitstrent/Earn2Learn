<?php // $Id: enrol_database.php,v 1.1.6.4 2006/02/06 09:59:43 moodler Exp $ 

$string['enrolname'] = 'Base de donn�es externe';

$string['autocreate'] = 'Les cours peuvent �tre cr��s automatiquement si des inscriptions ont lieu pour un cours qui n\'existe pas encore dans le Moodle.';
$string['category'] = 'Cat�gorie des cours cr��s automatiquement';
$string['description'] = 'Vous pouvez utiliser une base de donn�es externe (de presque n\'importe quel type) pour contr�ler les inscriptions. La base de donn�es externe doit poss�der un champ contenant l\'identifiant du cours et un champ contenant l\'identifiant de l\'utilisateur. Ces deux champs sont compar�s aux champs que vous choisissez dans les tables locales des cours et des utilisateurs.';
$string['dbtype'] = 'Type de base de donn�es';
$string['dbhost'] = 'Nom d\'h�te du serveur de base de donn�es';
$string['dbuser'] = 'Nom d\'utilisateur pour acc�der � la base de donn�es';
$string['dbpass'] = 'Mot de passe pour acc�der � la base de donn�es';
$string['dbname'] = 'Nom de la base de donn�es';
$string['dbtable'] = 'Nom de la table de cette base de donn�es';
$string['field_mapping'] = 'Appariement des champs';
$string['general_options'] = 'Options g�n�rales';
$string['localcoursefield'] = 'Nom du champ (de la table des cours du Moodle) utilis� pour faire correspondre les cours avec la base de donn�es distante (par exemple � idnumber �)';
$string['localuserfield'] = 'Nom du champ (de la table des utilisateurs du Moodle) utilis� pour faire correspondre les utilisateurs avec la base de donn�es distante (par exemple � id �)';
$string['remotecoursefield'] = 'Nom du champ de la base de donn�es externe contenant l\'identifiant du cours';
$string['remoteuserfield'] = 'Nom du champ de la base de donn�es externe contenant l\'identifiant de l\'utilisateur';
$string['server_settings'] = 'R�glages serveur';
$string['template'] = 'Facultatif&nbsp;: les cours cr��s automatiquement peuvent h�riter leurs r�glages d\'un cours mod�le';

?>