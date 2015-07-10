<?PHP // $Id: resource.php,v 1.5.2.4 2006/02/06 09:59:46 moodler Exp $ 
      // resource.php - created with Moodle 1.4.1 (2004083101)


$string['addresource'] = 'Ajouter une ressource';
$string['chooseafile'] = 'Choisir ou t�l�verser un fichier sur le serveur.';
$string['chooseparameter'] = 'Choisir le param�tre';
$string['configdefaulturl'] = 'Cette valeur est utilis�e comme valeur par d�faut lorsque vous cr�ez un nouveau lien.';
$string['configfilterexternalpages'] = 'En activant cette option, toutes les ressources externes (pages Web, fichiers t�l�vers�s) seront trait�s par des filtres d�finis pour le site entier (par exemple : liens automatiques avec les articles du glossaire). L\'activation de ces filtres peut ralentir le site consid�rablement. Utilisez-la avec pr�caution et seulement si n�cessaire.';
$string['configframesize'] = 'Lorsqu\'une page ou un fichier t�l�vers� est affich� dans un cadre, cette valeur repr�sente la taille en pixels du cadre sup�rieur qui contient la barre du chemin parcouru.';
$string['configparametersettings'] = 'Ceci d�cide de la valeur par d�faut pour le panneau qui sert � ajuster les param�tres dans le formulaire d\'ajout de nouvelles ressources. Apr�s la premi�re fois, ceci devient une pr�f�rence de l\'utlisateur.';
$string['configpopup'] = 'Lorsque vous ajoutez une nouvelle ressource, celle-ci peut �tre affich�e dans une nouvelle fen�tre. Est-ce que cette option doit �tre activ�e par d�faut?';
$string['configpopupdirectories'] = 'Est-ce que les fen�tres contextuelles (popup) doivent montrer les liens par d�faut ?';
$string['configpopupheight'] = 'Quelle doit �tre la hauteur des fen�tres contextuelles (popup)par d�faut?';
$string['configpopuplocation'] = 'Est-ce que les fen�tres contextuelles doivent  montrer la barre de navigation par d�faut?';
$string['configpopupmenubar'] = 'Est-ce que les fen�tres contextuelles doivent montrer la barre de menu par d�faut?';
$string['configpopupresizable'] = 'Est-ce que la taille des fen�tres contextuelles peut  �tre modifiable par d�faut?';
$string['configpopupscrollbars'] = 'Doit-on permettre  le d�filement dans les fen�tres contextuelles par d�faut?';
$string['configpopupstatus'] = 'Est-ce que les fen�tres contextuelles doivent montrer  la barre d\'�tats par d�faut?';
$string['configpopuptoolbar'] = 'Est-ce que les fen�tres contextuelles doivent montrer la barre d\'outils par d�faut ?';
$string['configpopupwidth'] = 'Quelle doit �tre la largeur  des fen�tres contextuelles (popup) par d�faut?';
$string['configsecretphrase'] = 'Cette phrase secr�te est utilis�e pour produire le code crypt� qui peut �tre envoy� � certainnes ressources comme param�tre. Ce code est produit par une valeur md5 de l\'adresse IP de l\'utilisateur actuel concat�n�e � votre phrase secr�te. Par exemple, code = md5(IP.phrasesecr�te). Cela permet � la ressource de destination de v�rifier la connexion pour plus de s�curit�.';
$string['configwebsearch'] = 'Lorsqu\'un utilisateur ajoute une hyperlien sur une page Web, le site indiqu� par ce lien l\'aidera � trouver la page qu\'il cherche.';
$string['configwindowsettings'] = 'Ceci ajuste la valeur par d�faut pour les param�tres de la fen�tre du formulaire lors de l\'ajout d\'une nouvelle ressource. Apr�s la premi�re fois, ceci devient une pr�f�rence de l\'utlisateur.';
$string['directlink'] = 'Lien direct vers le fichier';
$string['directoryinfo'] = 'Tous les fichiers du r�pertoire choisi seront affich�s.';
$string['display'] = 'Fen�tre';
$string['editingaresource'] = 'Modifier une ressource';
$string['encryptedcode'] = 'Code crypt�';
$string['example'] = 'Exemple';
$string['exampleurl'] = 'http://www.exemple.fr/dossiers/fichier.html';
$string['fetchclienterror'] = 'Une erreur est survenue avec votre client Web lors de la recherche de la page Web (mauvaise adresse?)';
$string['fetcherror'] = 'Une erreur est survenue lors de la recherche de la page Web.';
$string['fetchservererror'] = 'Une erreur est survenue avec le serveur sur lequel Moodle essayait de se connecter (possiblement une erreur dans le programme). </p>';
$string['filename'] = 'Nom du fichier';
$string['filtername'] = 'Lien automatique sur les noms des ressources';
$string['frameifpossible'] = 'Met la ressource dans un cadre afin de continuer � voir la barre de navigation';
$string['fulltext'] = 'Texte complet';
$string['htmlfragment'] = 'Morceau de HTML';
$string['maindirectory'] = 'R�pertoire principal des fichiers';
$string['modulename'] = 'Ressource';
$string['modulenameplural'] = 'Ressources';
$string['neverseen'] = 'Jamais lu';
$string['newdirectories'] = 'Afficher les liens sur les r�pertoires';
$string['newfullscreen'] = 'Remplir l\'�cran';
$string['newheight'] = 'Hauteur par d�faut de la fen�tre (en pixels)';
$string['newlocation'] = 'Montrer la barre du chemin parcouru';
$string['newmenubar'] = 'Afficher la barre du menu';
$string['newresizable'] = 'Permettre la modification de la taille de la fen�tre';
$string['newscrollbars'] = 'Permettre le d�filement dans la fen�tre';
$string['newstatus'] = 'Afficher la barre d\'�tats';
$string['newtoolbar'] = 'Afficher la barre d\'outils';
$string['newwidth'] = 'Largeur par d�faut de la fen�tre (en pixels)';
$string['newwindow'] = 'Nouvelle fen�tre';
$string['newwindowopen'] = 'Afficher cette ressource dans une nouvelle fen�tre';
$string['note'] = 'Note';
$string['notefile'] = 'Pour t�l�verser plus de fichiers dans le cours (afin qu\'ils apparaissent dans cette liste), utiliser le 

<a href=$a>Gestionnaire de fichiers</a>.';
$string['notypechosen'] = 'Vous devez choisir un type. Utiliser le bouton � Retour � de votre navigateur pour recommencer.';
$string['pagedisplay'] = 'Afficher la ressource dans la fen�tre actuelle';
$string['pagewindow'] = 'M�me fen�tre';
$string['parameter'] = 'Param�tre';
$string['parameters'] = 'Param�tres';
$string['popupresource'] = 'Cette ressource devrait appara�tre dans une fen�tre contextuelle (popup).';
$string['popupresourcelink'] = 'Si ce n\'est pas le cas, cliquez ici : $a';
$string['resourcetype'] = 'Type de ressource';
$string['resourcetype1'] = 'R�f�rence';
$string['resourcetype2'] = 'Page Web dans un cadre';
$string['resourcetype3'] = 'Fichier t�l�vers�';
$string['resourcetype4'] = 'Texte';
$string['resourcetype5'] = 'Lien vers une page Web en quittant Moodle';
$string['resourcetype6'] = 'Texte HTML';
$string['resourcetype7'] = 'Programme';
$string['resourcetype8'] = 'Texte Wiki';
$string['resourcetype9'] = 'R�pertoire';
$string['resourcetypedirectory'] = 'Afficher un r�pertoire';
$string['resourcetypefile'] = 'Lier � un fichier ou un site Web';
$string['resourcetypehtml'] = 'R�diger une page Web';
$string['resourcetypelabel'] = 'Ins�rer une �tiquette';
$string['resourcetypetext'] = 'Composer une page de texte';
$string['searchweb'] = 'Chercher une page Web';
$string['variablename'] = 'Nom de la variable';

?>
