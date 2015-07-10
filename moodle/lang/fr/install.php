<?php // $Id: install.php,v 1.11.2.3 2006/02/06 09:59:43 moodler Exp $

$string['admindirerror'] = 'Le dossier d\'administration sp�cifi� est incorrect';
$string['admindirname'] = 'Dossier d\'administration';
$string['admindirsetting'] = 'De rares  h�bergeurs web utilisent le dossier �&nbsp;/admin&nbsp;� comme URL sp�ciale vous permettant d\'acc�der � un tableau de bord ou autre chose. Ceci entre en collision avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger cela en renommant le dossier d\'administration de votre installation de Moodle, en inscrivant ici le nouveau nom, par exemple <br /><br /><strong>moodleadmin</strong>.<br /><br />Les liens vers l\'administration de Moodle seront ainsi corrig�s.';
$string['caution'] = 'Attention';
$string['admindirsettinghead'] = 'R�glage du dossier �&nbsp;admin&nbsp;�...';
$string['admindirsettingsub'] = 'De rares  h�bergeurs web utilisent le dossier �&nbsp;/admin&nbsp;� comme URL sp�ciale vous permettant d\'acc�der � un tableau de bord ou autre chose. Ceci entre en collision avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger cela en renommant le dossier d\'administration de votre installation de Moodle, en inscrivant ici le nouveau nom, par exemple <br /><br /><strong>moodleadmin</strong>.<br /><br />Les liens vers l\'administration de Moodle seront ainsi corrig�s.';
$string['chooselanguage'] = 'Choisissez une langue';
$string['chooselanguagehead'] = 'Choisissez une langue';
$string['chooselanguagesub'] = '';
$string['compatibilitysettings'] = 'V�rification de votre configuration PHP...';
$string['compatibilitysettingshead'] = 'V�rification de votre configuration PHP...';
$string['compatibilitysettingssub'] = '';
$string['configfilenotwritten'] = 'Le programme d\'installation n\'a pas pu cr�er automatiquement le fichier de configuration �&nbsp;config.php&nbsp;� contenant vos r�glages, vraisemblablement parce que le dossier principal de Moodle n\'est pas accessible en �criture. Vous pouvez copier le code ci-dessous dans un fichier appel� �&nbsp;config.php&nbsp;�, que vous placerez � l\'int�rieur du dossier principal de Moodle (l� o� se trouve un fichier �&nbsp;config-dist.php&nbsp;�).';
$string['configfilewritten'] = 'Le fichier �&nbsp;config.php&nbsp;� a �t� cr�� avec succ�s';
$string['configurationcomplete'] = 'Configuration termin�e';
$string['configurationcompletehead'] = 'Configuration termin�e';
$string['configurationcompletesub'] = '';
$string['database'] = 'Base de donn�es';
$string['databasecreationsettings'] = 'La base de donn�es dans laquelle sont enregistr�es la plupart des donn�es utilis�es par Moodle doit maintenant �tre configur�e. Cette base de donn�es sera cr��e automatiquement par l\'installeur Moodle4Windows avec les options sp�cifi�es ci-dessous.<br /><br /><br />
<strong>Type&nbsp;:</strong> r�gl� sur �&nbsp;mysql&nbsp;� par l\'installeur<br />
<strong>Serveur&nbsp;:</strong> r�gl� sur �&nbsp;localhost&nbsp;� par l\'installeur<br />
<strong>Nom&nbsp;:</strong> nom de la base de donn�es, par exemple �&nbsp;moodle&nbsp;�<br />
<strong>Utilisateur&nbsp;:</strong> r�gl� sur �&nbsp;root&nbsp;� par l\'installeur<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de donn�es<br />
<strong>Pr�fixe des tables&nbsp;:</strong> le pr�fixe � utiliser pour les noms de toutes les tables (facultatif)';
$string['databasecreationsettingshead'] = 'La base de donn�es dans laquelle sont enregistr�es la plupart des donn�es utilis�es par Moodle doit maintenant �tre configur�e. Cette base de donn�es sera cr��e automatiquement par l\'installeur Moodle4Windows avec les options sp�cifi�es ci-dessous.';
$string['databasecreationsettingssub'] = '<strong>Type&nbsp;:</strong> r�gl� sur �&nbsp;mysql&nbsp;� par l\'installeur<br />
<strong>Serveur&nbsp;:</strong> r�gl� sur �&nbsp;localhost&nbsp;� par l\'installeur<br />
<strong>Nom&nbsp;:</strong> nom de la base de donn�es, par exemple �&nbsp;moodle&nbsp;�<br />
<strong>Utilisateur&nbsp;:</strong> r�gl� sur �&nbsp;root&nbsp;� par l\'installeur<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de donn�es<br />
<strong>Pr�fixe des tables&nbsp;:</strong> le pr�fixe � utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettings'] = 'La base de donn�es dans laquelle sont enregistr�es la plupart des donn�es utilis�es par Moodle doit maintenant �tre configur�e. Cette base de donn�es doit avoir d�j� �t� cr��e sur le serveur, ainsi qu\'un nom d\'utilisateur et un mot de passe permettant d\'y acc�der.<br /><br /><br />
<strong>Type&nbsp;:</strong> �&nbsp;mysql&nbsp;� ou �&nbsp;postgres7&nbsp;�<br />
<strong>Serveur h�te&nbsp;:</strong> le plus souvent �&nbsp;localhost&nbsp;� ou par exemple �&nbsp;db.isp.com&nbsp;�<br />
<strong>Nom&nbsp;:</strong> nom de la base de donn�es, par exemple �&nbsp;moodle&nbsp;�<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de donn�es<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de donn�es<br />
<strong>Pr�fixe des tables&nbsp;:</strong> le pr�fixe � utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettingshead'] = 'La base de donn�es dans laquelle sont enregistr�es la plupart des donn�es utilis�es par Moodle doit maintenant �tre configur�e. Cette base de donn�es doit avoir d�j� �t� cr��e sur le serveur, ainsi qu\'un nom d\'utilisateur et un mot de passe permettant d\'y acc�der.';
$string['databasesettingssub'] = '<strong>Type&nbsp;:</strong> �&nbsp;mysql&nbsp;� ou �&nbsp;postgres7&nbsp;�<br />
<strong>Serveur h�te&nbsp;:</strong> le plus souvent �&nbsp;localhost&nbsp;� ou par exemple �&nbsp;db.isp.com&nbsp;�<br />
<strong>Nom&nbsp;:</strong> nom de la base de donn�es, par exemple �&nbsp;moodle&nbsp;�<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de donn�es<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de donn�es<br />
<strong>Pr�fixe des tables&nbsp;:</strong> le pr�fixe � utiliser pour les noms de toutes les tables (facultatif)';
$string['dataroot'] = 'Dossier de donn�es';
$string['datarooterror'] = 'Le dossier de donn�es indiqu� n\'a pas pu �tre trouv� ou cr��. Veuillez corriger le param�tre ou cr�er manuellement le dossier.';
$string['dbconnectionerror'] = 'Moodle n\'a pas pu se connecter � la base de donn�es indiqu�e. Veuillez v�rifier les param�tres de votre base de donn�es';
$string['dbcreationerror'] = 'Erreur lors de la cr�ation de la base de donn�es. Impossible de cr�er la base de donn�es avec les param�tres fournis';
$string['dbwrongencoding'] = 'La base de donn�es choisie fonctionne avec un encodage non recommand� ($a). La meilleure solution serait d\'utiliser plut�t une base de donn�es encod�e en Unicode (UTF-8). Vous pouvez cependant passer outre ce test en cochant l\'option �&nbsp;Ne pas effectuer le test d\'encodage de la base de donn�es&nbsp;� ci-dessous, mais alors des probl�mes pourraient survenir � l\'avenir.';
$string['dbhost'] = 'Serveur h�te';
$string['dbpass'] = 'Mot de passe';
$string['dbprefix'] = 'Pr�fixe des tables';
$string['dbtype'] = 'Type';
$string['directorysettings'] = '<p>Veuillez confirmer les emplacements de cette installation de Moodle.</p>
<p><strong>Adresse web :</strong> veuillez indiquer l\'adresse web compl�te par laquelle on acc�dera � Moodle. Si votre site web est accessible par plusieurs URL, choisissez celle qui est la plus naturelle ou la plus �vidente. Ne placez pas de barre oblique � la fin de l\'adresse.</p>
<p><strong>Dossier Moodle :</strong> veuillez sp�cifier le chemin complet de cette installation de Moodle (�&nbsp;OS path&nbsp;�). Assurez-vous que la casse des caract�res (majuscules/minuscules) est correcte.</p>
<p><strong>Dossier de donn�es :</strong> Moodle a besoin d\'un emplacement o� enregistrer les fichiers d�pos�s sur le site. Le serveur web (utilisateur d�nomm� habituellement �&nbsp;www&nbsp;�, �&nbsp;apache&nbsp;� ou �&nbsp;nobody&nbsp;�) doit avoir acc�s � ce dossier en lecture et EN �CRITURE. Toutefois ce dossier ne devrait pas �tre accessible directement depuis le web.</p>';
$string['directorysettingshead'] = 'Veuillez confirmer les emplacements de cette installation de Moodle.';
$string['directorysettingssub'] = '<strong>Adresse web :</strong> veuillez indiquer l\'adresse web compl�te par laquelle on acc�dera � Moodle. Si votre site web est accessible par plusieurs URL, choisissez celle qui est la plus naturelle ou la plus �vidente. Ne placez pas de barre oblique � la fin de l\'adresse.<br /><br />
<strong>Dossier Moodle :</strong> veuillez sp�cifier le chemin complet de cette installation de Moodle (�&nbsp;OS path&nbsp;�). Assurez-vous que la casse des caract�res (majuscules/minuscules) est correcte.<br /><br />
<strong>Dossier de donn�es :</strong> Moodle a besoin d\'un emplacement o� enregistrer les fichiers d�pos�s sur le site. Le serveur web (utilisateur d�nomm� habituellement �&nbsp;www&nbsp;�, �&nbsp;apache&nbsp;� ou �&nbsp;nobody&nbsp;�) doit avoir acc�s � ce dossier en lecture et EN �CRITURE. Toutefois ce dossier ne devrait pas �tre accessible directement depuis le web.';
$string['dirroot'] = 'Dossier Moodle';
$string['dirrooterror'] = 'Le dossier Moodle semble incorrect : aucune installation de Moodle ne se trouve dans ce dossier. Le dossier Moodle indiqu� ci-dessous est vraisemblablement correct.';
$string['download'] = 'T�l�charger';
$string['environmenthead'] = 'V�rification de l\'environnement...';
$string['environmentsub'] = '';
$string['fail'] = '�chec';
$string['fileuploads'] = 'T�l�chargement des fichiers';
$string['fileuploadserror'] = 'Le t�l�chargement des fichiers sur le serveur doit �tre activ�';
$string['fileuploadshelp'] = '<p>Le t�l�chargement des fichiers semble d�sactiv� sur votre serveur.</p><p>Moodle peut �tre install� malgr� tout, mais personne ne pourra d�poser aucun fichier de cours, ni aucune image dans les profils utilisateurs.</p><p>Pour activer le t�l�chargement des fichiers sur votre serveur, vous (ou l\'administrateur du serveur) devez modifier le fichier �&nbsp;php.ini&nbsp;� du syst�me en donnant au param�tre <strong>file_uploads</strong> la valeur 1.</p>';
$string['gdversion'] = 'Version de GD';
$string['gdversionerror'] = 'La librairie GD doit �tre activ�e pour traiter et cr�er les images';
$string['gdversionhelp'] = '<p>Il semble que la librairie GD n\'est pas install�e sur votre serveur.</p><p>GD est une librairie requise par PHP pour permettre � Moodle de traiter les images (comme les photos des profils) et de cr�er des graphiques (par exemple ceux des historiques). Moodle fonctionnera sans GD, mais ces fonctionnalit�s ne seront pas disponibles pour vous.</p><p>Sur Unix ou Mac OS X, pour ajouter GD � PHP, vous pouvez compiler PHP avec l\'option <em>--with-gd</em>.</p><p>Sous Windows, on peut normalement modifier le fichier �&nbsp;php.ini&nbsp;� en enlevant le commentaire de la ligne r�f�ren�ant la librairie libgd.dll.</p>';
$string['globalsquotes'] = 'Traitement non s�r des variables globales';
$string['globalsquoteserror'] = 'Veuillez corriger vos r�glages PHP&nbsp;: d�sactivez �&nbsp;register_globals&nbsp;� et/ou activez �&nbsp;magic_quotes_gpc&nbsp;�';
$string['globalsquoteshelp'] = '<p>Pour des raisons de s�curit�, la combinaison de la d�sactivation de l\'option �&nbsp;Magic Quotes GPC&nbsp;� et de l\'activation de l\'option �&nbsp;Register Globals&nbsp;� n\'est pas recommand�e.</p> <p>Le r�glage recommand� est <b>magic_quotes_gpc = On</b> et <b>register_globals = Off</b> dans votre fichier �&nbsp;php.ini&nbsp;�.</p> <p>Si vous n\'avez pas acc�s au fichier �&nbsp;php.ini&nbsp;�, il vous est peut-�tre possible de placer les deux lignes suivantes dans un fichier d�nomm� �&nbsp;.htaccess&nbsp;� plac� dans votre dossier Moodle. <blockquote>php_value magic_quotes_gpc On</blockquote> <blockquote>php_value register_globals Off</blockquote></p>';
$string['installation'] = 'Installation';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Ce r�glage doit �tre d�sactiv�';
$string['magicquotesruntimehelp'] = '<p>Le r�glage �&nbsp;Magic quotes runtime&nbsp;� doit �tre d�sactiv� pour que Moodle fonctionne correctement.</p><p>Il est normalement d�sactiv� par d�faut. Voyez le param�tre <strong>magic_quotes_runtime</strong> du fichier �&nbsp;php.ini&nbsp;� de votre serveur.</p><p>Si vous n\'avez pas acc�s � votre fichier �&nbsp;php.ini&nbsp;�, vous pouvez cr�er dans le dossier principal de Moodle un fichier �&nbsp;.htaccess&nbsp;� contenant cette ligne&nbsp;:<br /><blockquote>php_value magic_quotes_runtime Off</blockquote></p>';
$string['memorylimit'] = 'Limite de m�moire';
$string['memorylimiterror'] = 'La limite de m�moire de PHP est tr�s basse. Vous risquez de rencontrer des probl�mes ult�rieurement.';
$string['memorylimithelp'] = '<p>La limite de m�moire de PHP sur votre serveur est actuellement de $a.</p><p>Cette valeur trop basse risque de g�n�rer des probl�mes de manque de m�moire pour Moodle, notamment si vous utilisez beaucoup de modules et/ou si vous avez un grand nombre d\'utilisateurs.</p><p>Il est recommand� de configurer PHP avec une limite de m�moire aussi �lev�e que possible, par exemple 16 Mo. Vous pouvez obtenir cela de diff�rentes fa�ons :
<ol>
<li>si vous en avez la possibilit�, recompilez PHP avec l\'option <em>--enable-memory-limit</em>. Cela permettra � Moodle de fixer lui-m�me sa limite de m�moire ;</li>
<li>si vous avez acc�s � votre fichier �&nbsp;php.ini&nbsp;�, vous pouvez attribuer au param�tre <strong>memory_limit</strong> une valeur comme 16M. Si vous n\'y avez pas acc�s, demandez � l\'administrateur de le faire pour vous ;</li>
<li>sur certains serveur, vous pouvez cr�er dans le dossier principal de Moodle un fichier �&nbsp;.htaccess&nbsp;� contenant cette ligne : <p><blockquote>php_value memory_limit 16M</blockquote></p><p>Cependant, sur certains serveur, cela emp�chera le fonctionnement correct de <strong>tous</strong> les fichiers PHP (vous verrez s\'afficher des erreurs lors de la consultation de pages). Dans ce cas, vous devrez supprimer le fichier �&nbsp;.htaccess&nbsp;�.</li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'La configuration de l\'extension MySQL de PHP n\'a pas �t� effectu�e correctement. De ce fait, PHP ne peut communiquer avec MySQL. Veuillez contr�ler votre fichier �&nbsp;php.ini&nbsp;� ou recompiler PHP.';
$string['pass'] = 'R�ussi';
$string['phpversion'] = 'Version de PHP';
$string['phpversionerror'] = 'La version du programme PHP doit �tre au moins 4.1.0';
$string['phpversionhelp'] = '<p>Moodle n�cessite au minimum la version 4.1.0 de PHP.</p><p>Vous utilisez actuellement la version $a.</p><p>Pour que Moodle fonctionne, vous devez mettre � jour PHP ou aller chez un h�bergeur ayant une version r�cente de PHP.</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle risque de rencontrer des probl�mes lorsque le mode �&nbsp;safe mode&nbsp;� est activ�';
$string['safemodehelp'] = '<p>Moodle risque de rencontrer un certain nombre de probl�mes lorsque le mode �&nbsp;safe mode&nbsp;� est activ�. Il pourra notamment �tre incapable de cr�er de nouveaux fichiers.</p><p>Ce mode n\'est habituellement activ� que chez certains h�bergeurs parano�aques. Il vous faudra donc trouver un autre h�bergeur pour votre site Moodle.</p><p>Vous pouvez continuer l\'installation de Moodle, mais attendez-vous � des probl�mes ult�rieurement.</p>';
$string['sessionautostart'] = 'D�marrage automatique des sessions';
$string['sessionautostarterror'] = 'Ce param�tre doit �tre d�sactiv�';
$string['sessionautostarthelp'] = '<p>Moodle a besoin du support des sessions. il ne fonctionnera pas sans cela.</p><p>Les sessions peuvent �tre activ�es dans le fichier �&nbsp;php.ini&nbsp;� de votre serveur, en changeant la valeur du param�tre <strong>session.auto_start</strong>.</p>';
$string['skipdbencodingtest'] = 'Ne pas effectuer le test d\'encodage de la base de donn�es';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Vous voyez cette page, car vous avez install� Moodle correctement et lanc� le logiciel <strong>$a->packname $a->packversion</strong> sur votre ordinateur. F�licitations&nbsp;!';
$string['welcomep30'] = 'Cette version du paquet <strong>$a->installername</strong> comprend des logiciels qui cr�ent un environnement dans lequel <strong>Moodle</strong> va fonctionner, � savoir&nbsp;:';
$string['welcomep40'] = 'Ce paquet contient �galement <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'L\'utilisation de tous les logiciels de ce paquet est soumis � l\'acceptation de leurs licences respectives. Le paquet <strong>$a->installername</strong> est un <a href=\"http://www.opensource.org/docs/definition_plain.html\">logiciel libre</a>. Il est distribu� sous licence <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Les pages suivantes vous aideront pas � pas � configurer et mettre en place <strong>Moodle</strong> sur votre ordinateur. Il vous sera possible d\'accepter les r�glages par d�faut ou, facultativement, de les adapter � vos propres besoins.';
$string['welcomep70'] = 'Cliquer sur le bouton �&nbsp;Suivant&nbsp;� ci-dessous pour continuer l\'installation de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adresse web';
$string['wwwrooterror'] = 'L\'adresse web indiqu�e semble incorrecte&nbsp;: aucune installation de Moodle ne se trouve � cette adresse.';

?>