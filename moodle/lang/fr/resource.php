<?php // $Id: resource.php,v 1.31.2.4 2006/02/06 09:59:43 moodler Exp $ 

$string['addresource'] = 'Ajouter une ressource';
$string['chooseafile'] = 'Choisir ou d�poser un fichier';
$string['chooseparameter'] = 'Choisir un param�tre';
$string['configallowlocalfiles'] = 'Lors de la cr�ation d\'une nouvelle ressource de type fichier, permettre des liens vers les fichiers disponibles sur un syst�me de fichiers local, par exemple sur un CD ou sur un disque dur. Cela peut �tre utile dans une classe o� tous les �tudiants ont acc�s a un volume r�seau commun ou si des fichiers sur un CD sont n�cessaires. Il est possible que l\'utilisation de cette fonctionnalit� requi�re une modification des r�glages de s�curit� de votre navigateur.';
$string['configdefaulturl'] = 'Ce champ permet de pr�-remplir le champ de l\'URL qui appara�t lors de la cr�ation d\'une ressource de type URL.';
$string['configfilterexternalpages'] = 'L\'activation de ce r�glage permettra le filtrage des ressources externes (pages web, fichiers HTML d�pos�s) par les filtres d�finis dans le site (comme les liens des glossaires). Lorsque ce r�glage est actif, l\'affichage de vos pages sera ralenti de fa�on sensible. � utiliser avec pr�caution.';
$string['configframesize'] = 'Quand une page web ou un fichier est affich� dans un cadre (frame), cette valeur indique (en pixels) la taille du cadre contenant la navigation (en haut de la fen�tre).';
$string['configparametersettings'] = 'D�termine si par d�faut la zone de configuration des param�tres est affich�e ou non, lors de l\'ajout de nouvelles ressources. Apr�s la premi�re utilisation, ce r�glage devient individuel.';
$string['configpopup'] = 'Lors de l\'ajout d\'une ressource pouvant �tre affich�e dans une fen�tre pop-up, cette option doit-elle �tre activ�e par d�faut ?';
$string['configpopupdirectories'] = 'Les fen�tres pop-up affichent le lien du dossier par d�faut';
$string['configpopupheight'] = 'Hauteur par d�faut des fen�tres pop-up';
$string['configpopuplocation'] = 'La barre de l\'URL est affich�e par d�faut dans les fen�tres pop-up';
$string['configpopupmenubar'] = 'La barre des menus est affich�e par d�faut dans les fen�tres pop-up';
$string['configpopupresizable'] = 'Les fen�tres pop-up sont redimensionnables par d�faut';
$string['configpopupscrollbars'] = 'Les barres de d�filement sont affich�es par d�faut dans les fen�tres pop-up';
$string['configpopupstatus'] = 'La barre d\'�tat est affich�e par d�faut dans les fen�tres pop-up';
$string['configpopuptoolbar'] = 'La barre des outils est affich�e par d�faut dans les fen�tres pop-up';
$string['configpopupwidth'] = 'Largeur par d�faut des fen�tres pop-up';
$string['configsecretphrase'] = 'Cette phrase secr�te est utilis�e pour g�n�rer le code crypt� pouvant �tre envoy� comme param�tre � certaines ressources. Ce code crypt� est fabriqu� en concat�nant une valeur md5 de l\'adresse IP du current_user et de cette phrase secr�te, par exemple : code = md5(IP.secretphrase). Ceci permet � la ressource recevant le param�tre de v�rifier la connexion pour plus de s�curit�.';
$string['configwebsearch'] = 'URL affich�e lors de l\'ajout d\'une page web ou d\'un lien, pour permettre � l\'utilisateur de rechercher l\'URL d�sir�e.';
$string['configwindowsettings'] = 'D�termine si par d�faut la zone de configuration des fen�tres est affich�e ou non, lors de l\'ajout de nouvelles ressources. Apr�s la premi�re utilisation, ce r�glage devient individuel.';
$string['deploy'] = 'D�ployer';
$string['directlink'] = 'Lien direct vers ce fichier';
$string['directoryinfo'] = 'Tous les fichiers du dossier choisi seront affich�s.';
$string['display'] = 'Fen�tre';
$string['editingaresource'] = 'Modifier une ressource';
$string['encryptedcode'] = 'Code chiffr�';
$string['example'] = 'Exemple';
$string['exampleurl'] = 'http://www.exemple.fr/dossier/fichier.html';
$string['fetchclienterror'] = 'Votre navigateur web a rencontr� une erreur en essayant de charger la page web (peut-�tre une mauvaise URL).';
$string['fetcherror'] = 'Une erreur est survenue lors du chargement de la page web.';
$string['fetchservererror'] = 'Une erreur est survenue lors du chargement de la page web sur le serveur qui l\'h�berge.';
$string['filename'] = 'Nom du fichier';
$string['filtername'] = 'Liens automatiques des noms des ressources';
$string['frameifpossible'] = 'Afficher la ressource dans un cadre pour conserver les menus de navigation du site';
$string['fulltext'] = 'Texte de la page';
$string['htmlfragment'] = 'Fragment de code HTML';
$string['imspackageloaded'] = 'Fichier IMS charg�.';
$string['localfile'] = 'Fichier local';
$string['localfilechoose'] = 'Choisir un fichier local (par exemple sur CD)';
$string['localfileinfo'] = '<p>Choisir un fichier local sur votre ordinateur. Le fichier ne sera pas t�l�charg� sur le site web, mais Moodle cherchera le m�me fichier sur l\'ordinateur des utilisateurs d�sirant consulter la ressource.</p><p>Ceci est utile surtout si vous avez sur un CD-Rom de tr�s gros fichiers que vous d�sirez distribuer aux participants. Chaque participant peut choisir lui-m�me le chemin d\'acc�s local de ces fichiers, en <a href=\"$a\" target=\"_blank\">modifiant son profil utilisateur</a>.</p>';
$string['localfilehelp'] = 'Aide pour l\'utilisation de fichiers locaux';
$string['localfilepath'] = 'Pour choisir votre propre chemin d\'acc�s � cette ressource, veuillez s�lectionner un fichier sur un volume (par exemple un CD-Rom) de votre ordinateur o� se trouve la ressource. Le fichier ne sera pas t�l�charg�, mais le chemin d\'acc�s sera enregistr� et utilis� pour chacun des fichiers locaux';
$string['localfileselect'] = 'Choisir le chemin d\'acc�s de ce fichier';
$string['maindirectory'] = 'Dossier principal';
$string['modulename'] = 'Ressource';
$string['modulenameplural'] = 'Ressources';
$string['navigationbuttons'] = 'Boutons de navigation';
$string['neverseen'] = 'Jamais consult�';
$string['newdirectories'] = 'Afficher la barre des liens';
$string['newfullscreen'] = 'Remplir tout l\'�cran';
$string['newheight'] = 'Hauteur de fen�tre par d�faut (en pixels)';
$string['newlocation'] = 'Afficher la barre d\'adresse';
$string['newmenubar'] = 'Afficher les menus';
$string['newresizable'] = 'Permettre le redimensionnement de la fen�tre';
$string['newscrollbars'] = 'Afficher les barres de d�filement';
$string['newstatus'] = 'Afficher la barre d\'�tat';
$string['newtoolbar'] = 'Afficher la barre d\'outils';
$string['newwidth'] = 'Largeur de fen�tre par d�faut (en pixels)';
$string['newwindow'] = 'Nouvelle fen�tre';
$string['newwindowopen'] = 'Afficher cette ressource dans une nouvelle fen�tre';
$string['notallowedlocalfileaccess'] = 'L\'acc�s aux fichiers locaux est actuellement d�sactiv�. Cette ressource n\'est donc pas disponible.';
$string['note'] = 'Remarque';
$string['notefile'] = 'Pour d�poser des fichiers dans le cours (afin qu\'ils apparaissent dans cette liste), utiliser le <a href=$a>Gestionnaire de fichiers</a>.';
$string['notypechosen'] = 'Vous devez choisir un type. Utilisez le bouton � Retour � de votre navigateur et recommencez.';
$string['packagechanged'] = 'Ce fichier IMS Content Package a �t� modifi�.';
$string['packagenotdeplyed'] = 'Ce fichier IMS Content Package n\'est pas d�ploy�.';
$string['pagedisplay'] = 'Afficher cette ressource dans la fen�tre courante';
$string['pagewindow'] = 'M�me fen�tre';
$string['pan'] = 'Pan';
$string['parameter'] = 'Param�tre';
$string['parameters'] = 'Param�tres';
$string['popupresource'] = 'Cette ressource appara�tra dans une fen�tre pop-up';
$string['popupresourcelink'] = 'Dans le cas contraire, cliquez ici&nbsp;: $a';
$string['redeploy'] = 'D�ployer � nouveau';
$string['resourcetype'] = 'Type de ressource';
$string['resourcetypedirectory'] = 'Afficher le contenu d\'un dossier';
$string['resourcetypefile'] = 'Lien vers un fichier ou un site web';
$string['resourcetypehtml'] = 'Composer une page web';
$string['resourcetypeims'] = 'D�ployer un fichier IMS Content Package';
$string['resourcetypelabel'] = 'Ins�rer une �tiquette';
$string['resourcetyperepository'] = 'Lien vers un espace de d�p�t';
$string['resourcetypetext'] = 'Composer une page de texte';
$string['searchweb'] = 'Rechercher une page web';
$string['serverurl'] = 'URL du serveur ($a->wwwroot)';
$string['showcourseblocks'] = 'Afficher les blocs de cours';
$string['tableofcontents'] = 'Table des mati�res';
$string['variablename'] = 'Nom de la variable';
$string['viewims'] = 'Visualiser le fichier IMS CP Package';
$string['vol'] = 'Vol';

// The following strings are to be deleted after 1.4 release
$string['resourcetype1'] = 'R�f�rence';
$string['resourcetype2'] = 'Page web (interne)';
$string['resourcetype3'] = 'Fichier';
$string['resourcetype4'] = 'Texte Moodle';
$string['resourcetype5'] = 'Page web (externe)';
$string['resourcetype6'] = 'Texte HTML';
$string['resourcetype7'] = 'Programme';
$string['resourcetype8'] = 'Texte Wiki';
$string['resourcetype9'] = 'Dossier';

?>