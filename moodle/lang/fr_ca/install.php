<?PHP // $Id: install.php,v 1.1.4.4 2006/02/06 09:59:46 moodler Exp $ 
      // install.php - created with Moodle 1.4.1 (2004083101)


$string['admindirerror'] = 'Le dossier d\'administration sp�cifi� est incorrect';
$string['admindirname'] = 'Dossier d\'administration';
$string['admindirsetting'] = 'Quelques h�bergeurs web utilisent le dossier � /admin � comme URL sp�ciale vous permettant d\'acc�der � un tableau de bord ou autre chose. Ceci entre en collision avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger cela en renommant le dossier d\'administration de votre installation de Moodle, en inscrivant ici le nouveau nom, par exemple <br /> <br /><b>moodleadmin</b>.<br /> <br />Les liens vers l\'administration de Moodle seront ainsi corrig�s.</p>';
$string['caution'] = 'Attention';
$string['chooselanguage'] = 'Choisissez une langue';
$string['compatibilitysettings'] = 'V�rification de votre configuration PHP...';
$string['configfilenotwritten'] = 'Le programme d\'installation n\'a pas pu cr�er automatiquement le fichier de configuration � config.php � contenant vos r�glages, vraisemblablement parce que le dossier principal de Moodle n\'est pas accessible en �criture. Vous pouvez copier le code ci-dessous dans un fichier appel� � config.php �, que vous placerez � l\'int�rieur du dossier principal de Moodle (l� o� se trouve un fichier � config-dist.php �).';
$string['configfilewritten'] = 'Le fichier � config.php � a �t� cr�� avec succ�s';
$string['configurationcomplete'] = 'Configuration termin�e';
$string['database'] = 'Base de donn�es';
$string['databasesettings'] = 'La base de donn�es dans laquelle sont enregistr�es la plupart des donn�es utilis�es par Moodle doit maintenant �tre configur�e. Cette base de donn�es doit avoir d�j� �t� cr��e sur le serveur, ainsi qu\'un nom d\'utilisateur et un mot de passe permettant d\'y acc�der.<br /><br /> <br />
<b>Type :</b> mysql ou postgres7<br />
<b>Serveur h�te :</b> le plus souvent � localhost � ou par exemple � db.isp.com �<br />
<b>Nom :</b> nom de la base de donn�es, par exemple � moodle �<br />
<b>Utilisateur :</b> le nom d\'utilisateur de la base de donn�es<br />
<b>Mot de passe :</b> le mot de passe de la base de donn�es<br />
<b>Pr�fixe des tables :</b> pr�fixe � utiliser pour les noms de toutes les tables (facultatif)';
$string['dataroot'] = 'Dossier de donn�es';
$string['datarooterror'] = 'Le dossier de donn�es indiqu� n\'a pas pu �tre trouv�, ni cr��. Veuillez corriger le param�tre ou cr�er manuellement le dossier.';
$string['dbconnectionerror'] = 'Moodle n\'a pas pu se connecter � la base de donn�es indiqu�e. Veuillez v�rifier les param�tres de votre base de donn�es';
$string['dbcreationerror'] = 'Erreur lors de la cr�ation de la base de donn�es. Impossible de cr�er la base de donn�es avec les param�tres fournis';
$string['dbhost'] = 'Serveur h�te';
$string['dbpass'] = 'Mot de passe';
$string['dbprefix'] = 'Pr�fixe des tables';
$string['dbtype'] = 'Type';
$string['directorysettings'] = '<p>Veuillez confirmer les emplacements de cette installation de Moodle.</p>
<p><b>Adresse web :</b> veuillez indiquer l\'adresse web compl�te par laquelle on acc�dera � Moodle. Si votre site web est accessible par plusieurs URL, choisissez celle qui est la plus naturelle ou la plus �vidente. Ne placez pas de barre oblique � la fin de l\'adresse.</p>
<p><b>Dossier Moodle :</b> veuillez sp�cifier le chemin complet de cette installation de Moodle (� OS path �). Assurez-vous que la casse des caract�res (majuscules/minuscules) est correcte.</p>
<p><b>Dossier de donn�es :</b> Moodle a besoin d\'un emplacement o� enregistrer les fichiers d�pos�s sur le site. Le serveur web (utilisateur d�nomm� habituellement � www �, � apache � ou � nobody �) doit avoir acc�s � ce dossier en lecture et EN �CRITURE. Toutefois ce dossier ne devrait pas �tre accessible directement depuis le web.</p>';
$string['dirroot'] = 'Dossier Moodle';
$string['dirrooterror'] = 'Le dossier Moodle semble incorrect : aucune installation de Moodle ne se trouve dans ce dossier. Le dossier Moodle indiqu� ci-dessous est vraisemblablement correct.';
$string['download'] = 'T�l�charger';
$string['fail'] = '�chec';
$string['fileuploads'] = 'T�l�chargement des fichiers';
$string['fileuploadserror'] = 'Le t�l�chargement des fichiers sur le serveur doit �tre activ�';
$string['fileuploadshelp'] = '<p>Le t�l�chargement des fichiers semble d�sactiv� sur votre serveur.</p> <p>Moodle peut �tre install� malgr� tout, mais personne ne pourra d�poser aucun fichier de cours, ni aucune image dans les profils utilisateurs.</p> <p>Pour activer le t�l�chargement des fichiers sur votre serveur, vous (ou l\'administrateur du serveur) devez modifier le fichier � php.ini � du syst�me en donnant au param�tre <b>file_uploads</b> la valeur 1.</p>';
$string['gdversion'] = 'Version de GD';
$string['gdversionerror'] = 'La librairie GD doit �tre activ�e pour traiter et cr�er les images';
$string['gdversionhelp'] = '<p>Il semble que la librairie GD n\'est pas install�e sur votre serveur.</p> <p>GD est une librairie requise par PHP pour permettre � Moodle de traiter les images (comme les photos des profils) et de cr�er des graphiques (par exemple ceux des historiques). Moodle fonctionnera sans GD, mais ces fonctionnalit�s ne seront pas disponibles pour vous.</p> <p>Sous Unix ou Mac OS X, pour ajouter GD � PHP, vous pouvez compiler PHP avec l\'option <i>--with-gd</i>.</p> <p>Sous Windows, on peut normalement modifier le fichier � php.ini � en enlevant le commentaire de la ligne r�f�ren�ant la librairie libgd.dll.</p>';
$string['installation'] = 'Installation';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Ce r�glage doit �tre d�sactiv�';
$string['magicquotesruntimehelp'] = '<p>Le r�glage � Magic quotes runtime � doit �tre d�sactiv� pour que Moodle fonctionne correctement.</p> <p>Il est normalement d�sactiv� par d�faut. Voyez le param�tre <b>magic_quotes_runtime</b> du fichier � php.ini � de votre serveur.</p> <p>Si vous n\'avez pas acc�s � votre fichier � php.ini �, vous pouvez cr�er dans le dossier principal de Moodle un fichier � .htaccess � contenant cette ligne : <p><blockquote>php_value magic_quotes_runtime Off</blockquote></p>';
$string['memorylimit'] = 'Limite de m�moire';
$string['memorylimiterror'] = 'La limite de m�moire de PHP est tr�s basse. Vous risquez de rencontrer des probl�mes ult�rieurement.';
$string['memorylimithelp'] = '<p>La limite de m�moire de PHP sur votre serveur est actuellement de $a.</p> <p>Cette valeur tr�s faible risque de g�n�rer des probl�mes de manque de m�moire pour Moodle, notamment si vous utilisez beaucoup de modules et/ou si vous avez un grand nombre d\'utilisateurs.</p> <p>Il est recommand� de configurer PHP avec une limite de m�moire aussi �lev�e que possible, par exemple 16 Mo. Vous pouvez obtenir cela de diff�rentes fa�ons :
<ol>
<li>si vous en avez la possibilit�, recompilez PHP avec l\'option <i>--enable-memory-limit</i>. Cela permettra � Moodle de fixer lui-m�me sa limite de m�moire ;</li>
<li>si vous avez acc�s � votre fichier � php.ini �, vous pouvez attribuer au param�tre <b>memory_limit</b> une valeur comme 16M. Si vous n\'y avez pas acc�s, demandez � l\'administrateur de le faire pour vous ;</li>
<li>sur certains serveur, vous pouvez cr�er dans le dossier principal de Moodle un fichier � .htaccess � contenant cette ligne : <p><blockquote>php_value memory_limit 16M</blockquote></p> <p>Cependant, sur certains serveur, cela emp�chera le fonctionnement correcte de <b>tous</b> les fichiers PHP (vous verrez s\'afficher des erreurs lors de la consultation de pages). Dans ce cas, vous devrez supprimer le fichier � .htaccess �.</li>
</ol>';
$string['pass'] = 'R�ussi';
$string['phpversion'] = 'Version de PHP';
$string['phpversionerror'] = 'La version du programme PHP doit �tre au moins 4.1.0';
$string['phpversionhelp'] = '<p>Moodle n�cessite au minimum la version 4.1.0 de PHP.</p> <p>Vous utilisez actuellement la version $a.</p> <p>Pour que Moodle fonctionne, vous devez mettre � jour PHP ou aller chez un h�bergeur ayant une version r�cente de PHP.</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle risque de rencontrer des probl�mes lorsque le mode � safe mode � est activ�';
$string['safemodehelp'] = '<p>Moodle risque de rencontrer un certain nombre de probl�mes lorsque le mode � safe mode � est activ�. Il pourra notamment �tre incapable de cr�er de nouveaux fichiers.</p> <p>Ce mode n\'est habituellement activ� que chez certains h�bergeurs parano�aques. Il vous faudra donc trouver un autre h�bergeur pour votre site Moodle.</p> <p>Vous pouvez continuer l\'installation de Moodle, mais attendez-vous � des probl�mes ult�rieurement.</p>';
$string['sessionautostart'] = 'D�marrage automatique des sessions';
$string['sessionautostarterror'] = 'Ce param�tre doit �tre d�sactiv�';
$string['sessionautostarthelp'] = '<p>Moodle a besoin du support des sessions. il ne fonctionnera pas sans cela.</p> <p>Les sessions peuvent �tre activ�es dans le fichier � php.ini � de votre serveur, en changeant la valeur du param�tre <b>session.auto_start</b>.</p>';
$string['wwwroot'] = 'Adresse web';
$string['wwwrooterror'] = 'L\'adresse web indiqu�e semble incorrecte : aucune installation de Moodle ne se trouve � cette adresse.';

?>
