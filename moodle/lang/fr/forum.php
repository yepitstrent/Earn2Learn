<?php // $Id: forum.php,v 1.57.2.3 2006/02/06 09:59:43 moodler Exp $ 

$string['addanewdiscussion'] = 'Ajouter un nouveau sujet de discussion';
$string['addanewquestion'] = 'Ajouter une nouvelle question';
$string['addanewtopic'] = 'Ajouter un nouveau sujet';
$string['advancedsearch'] = 'Recherche avanc�e';
$string['allforums'] = 'Tous les forums';
$string['allowchoice'] = 'Autoriser tout le monde � choisir de s\'abonner ou non';
$string['allowdiscussions'] = 'Interventions autoris�es';
$string['allowratings'] = 'Autoriser l\'�valuation des articles';
$string['allowsdiscussions'] = 'Tout le monde peut commencer une nouvelle discussion dans ce forum';
$string['allsubscribe'] = 'S\'abonner � tous les forums';
$string['allunsubscribe'] = 'Se d�sabonner de tous les forums';
$string['anyfile'] = 'Tout fichier';
$string['attachment'] = 'Annexe';
$string['blockafter'] = 'Nombre maximal de messages';
$string['blockperiod'] = 'Dur�e avant blocage';
$string['blockperioddisabled'] = 'Ne pas bloquer';
$string['bynameondate'] = 'par $a->name - $a->date';
$string['cannotviewpostyet'] = 'Vous ne pouvez pas lire les questions des autres �tudiants, car vous n\'avez pas encore �crit de message';
$string['configcleanreadtime'] = 'L\'heure � laquelle nettoyer les anciens messages de la table des messages lus.';
$string['configdisplaymode'] = 'Mode d\'affichage par d�faut des discussions';
$string['configenablerssfeeds'] = 'Activation de l\'option des canaux RSS pour tous les forums. Il est en outre n�cessaire d\'activer manuellement les canaux dans les r�glages de chaque forum.';
$string['configlongpost'] = 'Tout message d�passant cette longueur (nombre de caract�res, code HTML non compris) est consid�r� comme long message. L\'affichage des messages sur la page d\'accueil du site, sur la page des cours en format informel et dans le profil des utilisateurs est tronqu� � un endroit ad�quat, entre les valeurs forum_shortpost et forum_longpost.';
$string['configmanydiscussions'] = 'Nombre maximum de discussions affich�es sur une page';
$string['configmaxbytes'] = 'Taille maximale de l\'ensemble des annexes de tous les forums du site (d�pend des limites du cours et d\'autres r�glages locaux)';
$string['configoldpostdays'] = 'Nombre de jours apr�s lequel tout message est consid�r� comme lu.';
$string['configreplytouser'] = 'Lorsqu\'un message est envoy� par courriel, doit-il contenir l\'adresse de courriel de son auteur, afin que le destinataire puisse l\'atteindre personnellement ? M�me lorsque cette option est activ�e, les utilisateurs peuvent choisir dans leur profil de garder leur adresse secr�te.';
$string['configshortpost'] = 'Tout message plus court que cette longueur (nombre de caract�res, code HTML non compris) est consid�r� comme message court (voir ci-dessous).';
$string['configtrackreadposts'] = 'Choisissez �&nbsp;Oui&nbsp;� pour activer le suivi des messages pour chaque utilisateur.';
$string['configusermarksread'] = 'Si �&nbsp;Oui&nbsp;�, l\'utilisateur doit marquer manuellement un message comme lu. Si �&nbsp;Non&nbsp;�, le message est automatiquement marqu� comme lu apr�s sa lecture.';
$string['couldnotadd'] = 'Impossible d\'ajouter votre message � cause d\'une erreur ind�termin�e';
$string['couldnotdeleteratings'] = 'D�sol�, la suppression de ce message n\'est plus possible car quelqu\'un l\'a d�j� �valu�';
$string['couldnotdeletereplies'] = 'D�sol�, la suppression n\'est plus possible car quelqu\'un a d�j� r�pondu';
$string['couldnotupdate'] = 'Impossible de modifier votre message � cause d\'une erreur ind�termin�e';
$string['delete'] = 'Supprimer';
$string['deleteddiscussion'] = 'Le sujet de discussion a �t� supprim�';
$string['deletedpost'] = 'Ce message a �t� supprim�';
$string['deletedposts'] = 'Ces messages ont �t� supprim�s';
$string['deletesure'] = 'Voulez-vous vraiment supprimer ce message ?';
$string['deletesureplural'] = 'Voulez-vous vraiment supprimer ces messages et toutes les r�ponses&nbsp;? ($a messages)';
$string['digestmailheader'] = 'Ceci est le courriel quotidien contenant tous les nouveaux messages des forums de $a->sitename. Pour modifier les r�glages de votre abonnement, veuillez aller sur $a->userprefs.';
$string['digestmailprefs'] = 'votre profil utilisateur';
$string['digestmailsubject'] = 'Courriel quotidien de $a';
$string['digestsentusers'] = 'Les courriels quotidiens ont �t� envoy�s correctement � $a utilisateurs.';
$string['disallowsubscribe'] = 'L\'abonnement n\'est pas autoris�';
$string['disallowsubscribeteacher'] = 'L\'abonnement n\'est pas autoris� (sauf pour les enseignants)';
$string['discussion'] = 'Discussion';
$string['discussionmoved'] = 'Cette discussion a �t� d�plac�e vers �&nbsp;$a&nbsp;�.';
$string['discussionname'] = 'Nom de la discussion';
$string['discussions'] = 'Discussions';
$string['discussionsstartedby'] = 'Discussions commenc�es par $a';
$string['discussionsstartedbyrecent'] = 'Discussions r�centes commenc�es par $a';
$string['discussthistopic'] = 'Discuter sur ce sujet';
$string['displayend'] = 'Fin de l\'affichage';
$string['displayperiod'] = 'P�riode d\'affichage';
$string['displaystart'] = 'D�but de l\'affichage';
$string['eachuserforum'] = 'Chaque personne commence une discussion';
$string['edit'] = 'Modifier';
$string['editedby'] = 'Modifi� par $a->name -  $a->date';
$string['editing'] = 'Modification';
$string['emptymessage'] = 'Il y a eu un probl�me avec votre message. Peut-�tre est-il vide ou alors la taille de l\'annexe est trop grande. Vos modifications n\'ont pas �t� enregistr�es.';
$string['everyonecanchoose'] = 'Tout le monde peut s\'abonner';
$string['everyoneissubscribed'] = 'Tout le monde est abonn� � ce forum.<br />Les utilisateurs ne peuvent pas se d�sabonner.';
$string['existingsubscribers'] = 'Abonn�s actuels';
$string['forcesubscribe'] = 'Abonner tout le monde';
$string['forcesubscribeq'] = 'Abonner tout le monde ?';
$string['forum'] = 'Forum';
$string['forumauthorhidden'] = 'Auteur (masqu�)';
$string['forumblockingalmosttoomanyposts'] = 'Vous approchez du nombre maximal de messages autoris�s. Vous avez �crit $a->numposts durant les derniers $a->blockperiod. La limite est de $a->blockafter messages.';
$string['forumbodyhidden'] = 'Vous ne pouvez pas voir ce message, probablement parce que vous n\'avez pas encore particip� � cette discussion.';
$string['forumintro'] = 'Introduction au forum';
$string['forumname'] = 'Nom du forum';
$string['forumposts'] = 'Messages des forums';
$string['forums'] = 'Forums';
$string['forumsubjecthidden'] = 'Sujet (masqu�)';
$string['forumtype'] = 'Type de forum';
$string['generalforum'] = 'Forum standard pour utilisation g�n�rale';
$string['generalforums'] = 'Forums standard';
$string['inforum'] = 'dans $a';
$string['intronews'] = 'Nouvelles diverses et annonces';
$string['introsocial'] = 'Un forum pour discuter de sujets divers';
$string['introteacher'] = 'Un forum r�serv� aux remarques et discussions des enseignants';
$string['lastpost'] = 'Dernier message';
$string['learningforums'] = 'Forums d\'apprentissage';
$string['mailnow'] = 'Envoyer maintenant';
$string['markalldread'] = 'Marquer tous les messages de cette discussion comme lus.';
$string['markallread'] = 'Marquer tous les messages de ce forum comme lus.';
$string['markread'] = 'Marquer comme lu';
$string['markreadbutton'] = 'Marquer<br />comme lu';
$string['markunread'] = 'Marquer comme non lu';
$string['markunreadbutton'] = 'Marquer comme<br />non lu';
$string['maxattachmentsize'] = 'Taille maximale de l\'annexe';
$string['maxtimehaspassed'] = 'D�sol�. Le d�lai maximum pour modifier ce message ($a) est d�pass�';
$string['message'] = 'Message';
$string['missingsearchterms'] = 'Le terme recherch� suivant n\'appara�t que dans le code HTML de ce message&nbsp;:';
$string['modeflatnewestfirst'] = 'R�ponses en ligne, la plus r�cente en premier';
$string['modeflatoldestfirst'] = 'R�ponses en ligne, la plus ancienne en premier';
$string['modenested'] = 'R�ponses embo�t�es';
$string['modethreaded'] = 'R�ponses en fils de discussions';
$string['modulename'] = 'Forum';
$string['modulenameplural'] = 'Forums';
$string['more'] = 'plus';
$string['movethisdiscussionto'] = 'D�placer cette discussion vers ...';
$string['namenews'] = 'Forum des nouvelles';
$string['namesocial'] = 'Forum informel';
$string['nameteacher'] = 'Forum des enseignants';
$string['newforumposts'] = 'Nouveaux messages dans les forums';
$string['nodiscussions'] = 'Il n\'y a pas encore de sujet de discussion dans ce forum';
$string['noguestpost'] = 'D�sol�, les invit�s ne sont pas autoris�s � �crire des messages.';
$string['noguestsubscribe'] = 'D�sol�, les invit�s ne sont pas autoris�s � s\'abonner pour recevoir les messages des forums par courriel.';
$string['noguesttracking'] = 'D�sol�, les invit�s ne peuvent modifier les options de suivi des forums.';
$string['noquestions'] = 'Il n\'y a pas encore de question dans ce forum';
$string['nowallsubscribed'] = 'Vous �tes abonn� � tous les forums de $a.';
$string['nowallunsubscribed'] = 'Vous �tes d�sabonn� de tous les forums de $a.';
$string['nomorepostscontaining'] = 'Plus aucun message contenant �&nbsp;$a&nbsp;� n\'a �t� trouv�';
$string['nonews'] = 'Aucune br�ve n\'a �t� encore publi�e';
$string['noposts'] = 'Aucun message';
$string['nopostscontaining'] = 'Aucun message contenant �&nbsp;$a&nbsp;� n\'a �t� trouv�';
$string['nosubscribers'] = 'Personne n\'est abonn� � ce forum';
$string['nothingnew'] = 'Rien de neuf pour $a';
$string['notingroup'] = 'D�sol�, vous devez faire partie d\'un groupe pour consulter ce forum.';
$string['notrackforum'] = 'Ne pas signaler les messages non lus';
$string['nownotsubscribed'] = 'Les messages du forum �&nbsp;$a->forum&nbsp;� NE seront PAS envoy�s � $a->name.';
$string['nownottracking'] = '$a->name ne d�sire plus le suivi des messages du forum �&nbsp;$a->forum&nbsp;�.';
$string['nowsubscribed'] = 'Les messages du forum �&nbsp;$a->forum&nbsp;� seront envoy�s � $a->name.';
$string['nowtracking'] = '$a->name d�sire le suivi des messages du forum �&nbsp;$a->forum&nbsp;�.';
$string['numposts'] = '$a messages';
$string['olderdiscussions'] = 'Discussions ant�rieures';
$string['oldertopics'] = 'Sujets ant�rieurs';
$string['openmode0'] = 'Aucune discussion, aucune r�ponse';
$string['openmode1'] = 'Aucune discussion, mais les r�ponses sont autoris�es';
$string['openmode2'] = 'Discussions et r�ponses';
$string['overviewnumpostssince'] = 'messages depuis la derni�re connexion';
$string['overviewnumunread'] = 'messages non lus';
$string['parent'] = 'Niveau sup�rieur';
$string['parentofthispost'] = 'Niveau sup�rieur de cet article';
$string['postadded'] = '<p>Votre message a �t� enregistr�.</p><p>Il vous est possible de le modifier pendant $a.</p>';
$string['postincontext'] = 'Voir ce message dans son contexte';
$string['postmailinfo'] = 'Ceci est une copie du message post� sur le site $a.

Pour y r�pondre sur le site, cliquer sur ce lien :';
$string['postmailnow'] = '<p>Ce message sera envoy� imm�diatement � tous les participants abonn�s � ce forum.</p>';
$string['postrating1'] = 'Message plut�t d�tach�';
$string['postrating2'] = 'Message �quilibr�, d�tach� et li�';
$string['postrating3'] = 'Message plut�t li�';
$string['posts'] = 'Messages';
$string['posttoforum'] = '�crire dans le forum';
$string['postupdated'] = 'Votre message a �t� modifi�';
$string['potentialsubscribers'] = 'Abonn�s potentiels';
$string['processingpost'] = 'Enregistrement de l\'article $a';
$string['processingdigest'] = 'Traitement du courriel quotidien de l\'utilisateur $a';
$string['prune'] = 'S�parer';
$string['pruneheading'] = 'S�parer la discussion et d�placer ce message vers une nouvelle discussion';
$string['prunedpost'] = 'Une nouvelle discussion a �t� cr��e � partir de ce message';
$string['qandaforum'] = 'Forum questions/r�ponses';
$string['qandanotify'] = 'Ce forum est un forum �&nbsp;Questions et R�ponses&nbsp;�. Pour voir les autres r�ponses � ces questions, vous devez d\'abord �crire votre propre r�ponse';
$string['rate'] = 'Note';
$string['rating'] = 'Notation';
$string['ratingeveryone'] = 'Tout le monde peut �valuer les messages';
$string['ratingno'] = 'Pas d\'�valuation';
$string['ratingonlyteachers'] = 'Seul $a peut �valuer les messages';
$string['ratingpublic'] = '$a peut voir les �valuations de tous';
$string['ratingpublicnot'] = '$a ne peut voir que ses propres �valuations';
$string['ratings'] = '�valuations';
$string['ratingssaved'] = '�valuations enregistr�es';
$string['ratingsuse'] = '�valuation des messages';
$string['ratingtime'] = 'Restreindre les �valuations aux messages post�s entre ces dates :';
$string['re'] = 'Re:';
$string['readtherest'] = 'Lire le reste du sujet';
$string['replies'] = 'R�ponses';
$string['repliesmany'] = '$a r�ponses';
$string['repliesone'] = '$a r�ponse';
$string['reply'] = 'R�pondre';
$string['replyforum'] = 'R�pondre au forum';
$string['rsssubscriberssdiscussions'] = 'Affichage du canal RSS des discussions du forum �&nbsp;$a&nbsp;�';
$string['rsssubscriberssposts'] = 'Affichage du canal RSS des messages du forum �&nbsp;$a&nbsp;�';
$string['searchforumintro'] = 'Veuillez saisir les termes � rechercher dans l\'un ou plusieurs des champs ci-dessous&nbsp;:';
$string['search'] = 'Rechercher';
$string['searchdatefrom'] = 'Dans les messages post�rieurs �';
$string['searchdateto'] = 'Dans les messages ant�rieurs �';
$string['searchforums'] = 'Recherche (forums)';
$string['searchfullwords'] = 'Mots entiers';
$string['searchnotwords'] = 'Termes � exclure';
$string['searchphrase'] = 'Phrase exacte dans le corps du message';
$string['searchsubject'] = 'Terme dans le sujet du message';
$string['searchuser'] = 'Nom de l\'auteur';
$string['searchuserid'] = 'Identifiant (Moodle ID) de l\'auteur';
$string['searchwhichforums'] = 'Rechercher dans quels forums&nbsp;?';
$string['searchwords'] = 'Termes apparaissant n\'importe o� dans le message';
$string['searcholderposts'] = 'Rechercher les anciens messages...';
$string['searchresults'] = 'R�sultats de la recherche';
$string['seeallposts'] = 'Afficher tous les messages �crits par cet utilisateur';
$string['sendinratings'] = 'Envoyer mes derni�res �valuations';
$string['showsubscribers'] = 'Afficher/modifier les abonn�s � ce forum';
$string['singleforum'] = 'Une seule discussion simple';
$string['startedby'] = 'commenc�e par';
$string['subject'] = 'Sujet';
$string['subscribe'] = 'S\'abonner � ce forum';
$string['subscribeall'] = 'Abonner tous les utilisateurs';
$string['subscribed'] = 'Abonn�';
$string['subscribenone'] = 'D�sabonner tous les utilisateurs';
$string['subscribers'] = 'Abonn�s';
$string['subscribersto'] = 'Abonn�s � �&nbsp;$a&nbsp;�';
$string['subscribestart'] = 'Abonnez-moi � ce forum';
$string['subscribestop'] = 'D�sabonnez-moi de ce forum ';
$string['subscription'] = 'Abonnement';
$string['subscriptions'] = 'Abonnements';
$string['thisforumisthrottled'] = 'Ce forum a une limite du nombre de messages que vous pouvez poster durant une p�riode donn�e. Cette limite est actuellement de $a->blockafter message(s) durant $a->blockperiod';
$string['timestartenderror'] = 'La date de fin d\'affichage ne peut pas �tre ant�rieure � la date du d�but de l\'affichage';
$string['trackforum'] = 'Activer le suivi des messages';
$string['tracking'] = 'Suivi des messages';
$string['trackingon'] = 'Activ�';
$string['trackingoff'] = 'D�sactiv�';
$string['trackingoptional'] = 'Facultatif';
$string['trackingtype'] = 'Suivi des messages lus dans ce forum&nbsp;?';
$string['unread'] = 'Non lu';
$string['unreadposts'] = 'Messages non lus';
$string['unsubscribe'] = 'Se d�sabonner de ce forum';
$string['unreadpostsnumber'] = '$a messages non lus';
$string['unreadpostsone'] = '1 message non lu';
$string['unsubscribed'] = 'D�sabonn�';
$string['unsubscribeshort'] = 'D�sabonner';
$string['warnafter'] = 'Nombre de messages avant avertissement';
$string['yesinitially'] = 'Oui, initialement';
$string['yesforever'] = 'Oui, ind�finiment';
$string['youratedthis'] = 'Vous l\'avez �valu�';
$string['yournewquestion'] = 'Nouvelle question';
$string['yournewtopic'] = 'Nouveau sujet de discussion';
$string['yourreply'] = 'Votre r�ponse';

?>
