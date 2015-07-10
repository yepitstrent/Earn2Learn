<?php // $Id: enrol_authorize.php,v 1.3.2.5 2006/02/06 09:59:43 moodler Exp $ 

$string['adminauthorizeccapture'] = 'Contr�le des commandes & r�glages de saisie automatique';
$string['adminauthorizeemail'] = 'R�glages d\'envoi de courriel';
$string['adminauthorizesettings'] = 'R�glages Authorize.net';
$string['adminauthorizewide'] = 'R�glages globaux';
$string['adminavs'] = 'Cochez cette option si vous avez activ� Address Verification System (AVS) dans votre compte authorize.net. Lorsque l\'utilisateur remplit le formulaire de paiement, il lui sera alors demand� de saisir les champs de l\'adresse, par exemple la rue, le code postal, le pays, etc.';
$string['admincronsetup'] = 'Le script de maintenance cron.php n\'a pas �t� lanc� depuis plus de 24 heures.<br />Ce script doit �tre activ� si vous vouslez utiliser la saisie automatique.<br />Veuillez <a href=\"../doc/?frame=install.html&sub=cron\">r�gler le cron</a> ou d�cocher la variable an_review.<br />Si vous d�sactivez la saisie automatique, les transactions seront annuler � moins que vous ne les approuviez dans les 30 jours.<br />Cochez la variable an_review et inscrivez �&nbsp;0&nbsp;� dans le champ de la variable an_capture_day<br />si vous voulez accepter ou refuser manuellement les paiements durant 30 jours.';
$string['adminhelpcapture'] = 'Je ne veux pas seulement accepter ou refuser manuellement les paiements, mais aussi utiliser la saisie automatique pour �viter l\'annullation des paiements. Comment faire&nbsp;?<ul><li>R�gler le cron&nbsp;;</li><li>Cocher la variable an_review&nbsp;;</li><li>Tapez un nombre entre 1 et 29 dans le champ an_capture_day. Les donn�es de la carte de cr�dit seront saisies et l\'utilisateur sera inscrit, sauf si vous sp�cifiez le contraire avant le nombre de jours de an_capture_day.</li></ul>';
$string['adminhelpreview'] = 'Comment accepter ou refuser manuellement les paiements&nbsp;?<ul><li>Cochez la variable an_review.</li><li>Tapez 0 dans le champ de la variable an_capture_day.</li></ul>Comment faire pour que les �tudiants soient inscrits aussit�t apr�s qu\'ils ont tap� leur num�ro de carte de cr�dit&nbsp;?<ul><li>D�cochez la variable an_review.</li></ul>';
$string['adminemailexpired'] = 'Envoyer par courriel aux administrateurs <b>$a</b> jours avant leur �ch�ance le nombre de transaction dont le statut est �&nbsp;Autoris� / En attente de saisie&nbsp;� (0 = pas d\'envoi, par d�faut = 2, max = 5).<br />Ce r�glage est utile si vous avez choisi la saisie manuelle (an_review = activ�, an_capture_day = 0).';
$string['adminneworder'] = 'Cher administrateur,
  	 
Vous avez re�u un nouvel ordre en attente :

    No d\'ordere : $a->orderid
    No de transaction : $a->transid
    Utilisateur : $a->user
    Cours : $a->course
    Montant : $a->amount

    SAISE AUTOMATIQUE ACTIVE ? $a->acstatus

Si la saisie automatique est actovie, les infos de carte de cr�dit seront
saisies le $a->captureon et l\'�tudiant sera inscrit au cours. Dans le cas
contraire, ces donn�es arriveront � �ch�ance le $a->expireon et ne pourront
plus �tre saisies apr�s cette date.

Vous pouvez imm�diatement accepter ou refuser le paiement pour l\'inscription
de l\'�tudiant en cliquant sur le lien ci-dessous.

$a->url';
$string['adminnewordersubject'] = '$a->course : nouvel ordre en attente de traintement ($a->orderid)';
$string['adminpendingorders'] = 'Vous avez d�sactiv� la saisie automatique.<br />Un total de $a->count transactions dont le statut est AN_STATUS_AUTH seront annul�e, � moins que vous ne les approuviez.<br />Pour accepter ou refuser des paiements, visitez la page <a href=\'$a->url\'>Gestion des paiements</a>.';
$string['adminreview'] = 'Contr�le de la commande avant envoi des donn�es de la carte de cr�dit.';
$string['amount'] = 'Montant';
$string['anlogin'] = 'Authorize.net&nbsp;: nom d\'utilisateur';
$string['anpassword'] = 'Authorize.net&nbsp;: mot de passe';
$string['anreferer'] = 'Taper ici une URL (r�f�renceur) si vous avez mis en place cette fonctionnalit� dans votre compte authorize.net. Ceci enverra une ent�te �&nbsp;Referer: URL&nbsp;� incluse dans la requ�te web';
$string['antestmode'] = 'Traiter les transactions en mode test (aucun montant ne sera pr�lev�)';
$string['antrankey'] = 'Authorize.net&nbsp;: clef de transaction';
$string['authcaptured'] = 'Autoris� / Saisi';
$string['authorizedpendingcapture'] = 'Autoris� / En attente de saisie';
$string['avsa'] = 'L\'adresse (rue) correspond, mais pas le code postal';
$string['avsb'] = 'L\'adresse n\'est pas renseign�e';
$string['avse'] = 'Erreur du syst�me de v�rification d\'adresse (AVS)';
$string['avsg'] = 'Carte provenant d\'une banque non-U.S.';
$string['avsn'] = 'Ni l\'adresse (rue), ni le code postal ne correspondent';
$string['avsp'] = 'Le syst�me de v�rification d\'adresse (AVS) ne peut pas fonctionner';
$string['avsr'] = 'Veuillez essayer � nouveau, le syst�me n\'est actuellement pas disponible';
$string['avsresult'] = 'R�sultat AVS&nbsp;:';
$string['avss'] = 'Ce service n\'est pas support� par la banque';
$string['avsu'] = 'Les informations d\'adresse ne sont pas disponibles';
$string['avsw'] = 'Le code postal � 9 chiffres correspond, mais pas l\'adresse (rue)';
$string['avsx'] = 'L\'adresse (rue) et le code postal � 9 chiffres correpondent';
$string['avsy'] = 'L\'adresse (rue) et le code postal � 5 chiffres correpondent';
$string['avsz'] = 'Le code postal � 5 chiffres correspond, mais pas l\'adresse (rue)';
$string['canbecredit'] = 'Remboursable � concurrence de $a->upto';
$string['cancelled'] = 'Annul�';
$string['capture'] = 'Saisie';
$string['capturedpendingsettle'] = 'Saisi / En attente de r�glement';
$string['capturedsettled'] = 'Saisi / R�gl�';
$string['captureyes'] = 'Les donn�es de la carte de cr�dit vont �tre saisies et l\'�tudiant sera inscrit au cours. Voulez-vous continuer&nbsp;?';
$string['ccexpire'] = 'Date d\'�ch�ance';
$string['ccexpired'] = 'La carte de cr�dit est �chue';
$string['ccinvalid'] = 'Num�ro de carte non valable';
$string['ccno'] = 'Num�ro de carte de cr�dit';
$string['cctype'] = 'Type de carte de cr�dit';
$string['ccvv'] = 'Code v�rification';
$string['ccvvhelp'] = 'Au verso de votre carte (les 3 derniers chiffres)';
$string['choosemethod'] = 'Tapez la clef d\'inscription � ce cours&nbsp;; si vous n\'avez pas cette clef, ce cours vous sera accessible contre paiement.';
$string['chooseone'] = 'Veuillez remplir l\'un des deux champs ci-dessous ou tous les deux';
$string['cutofftime'] = 'Date butoir de transaction. Quand la derni�re transaction doit-elle �tre trait�e pour r�glement&nbsp;?';
$string['delete'] = 'D�truire';
$string['description'] = 'Le module Authorize.net permet de mettre en place des cours payant. Si le co�t d\'un cours est nul, les �tudiants peuvent s\'y inscrire sans payer. Un co�t d�fini globalement, que vous fixez ici, est le co�t par d�faut pour tous les cours du site. Chaque cours peut ensuite avoir un co�t sp�cifique fix� individuellement. S\'il est d�fini, le co�t sp�cifique d\'un cours remplace le co�t par d�faut.<br /><br /><b>Remarque&nbsp;:</b> si vous indiquez une clef d\'inscription dans les r�glages du cours, les �tudiants auront �galement la possibilit� de s\'y inscrire avec cette clef. Ceci est utile si vous avez un m�lange d\'�tudiants payant et non payant.';
$string['enrolname'] = 'Paiement par carte de cr�dit Authorize.net';
$string['expired'] = '�chu';
$string['howmuch'] = 'Combien&nbsp;?';
$string['httpsrequired'] = 'Votre requ�te ne peut pas �tre trait�e pour l\'instant. Les r�glages du site n\'ont pas pu �tre configur�s correctement.<br /><br />Veuillez NE PAS taper votre num�ro de carte de  cr�dit, � moins que vous ne voyez un cadenas jaune au bas ou dans la barre d\'adresse de votre navigateur. Ce cadenas indique que toutes les donn�es transmises entre votre ordinateur et le serveur sont chiffr�es, et que les informations �chang�es entre ces deux ordinateurs sont prot�g�es et ne peuvent pas �tre intercept�es sur Internet.';
$string['logindesc'] = 'Cette option doit imp�rativement �tre activ�e&nbsp;!<br /><br />Veuillez vous assurer que l\'option �&nbsp;<a href=\"$a->url\">loginhttps</a>&nbsp;� soit activ�e dans les param�tres de l\'administration, section S�curit�.<br /><br />L\'activation de cette option permettra � Moodle d\'utiliser une connexion s�curis�e pour l\'affichage et le traitement des pages de connexion et de paiement.';
$string['missingaddress'] = 'L\'adresse n\'est pas renseign�e';
$string['missingcc'] = 'Le num�ro de carte n\'est pas renseign�';
$string['missingccexpire'] = 'La date d\'�ch�ance n\'est pas renseign�e';
$string['missingcctype'] = 'Le type de carte n\'est pas renseign�';
$string['missingcvv'] = 'Le num�ro de v�rification n\'est pas renseign�';
$string['missingzip'] = 'Le code postal n\'est pas renseign�';
$string['nameoncard'] = 'Nom sur la carte';
$string['noreturns'] = 'Pas de retour&nbsp;!';
$string['notsettled'] = 'Non r�gl�';
$string['orderid'] = 'No d\'ordre';
$string['paymentmanagement'] = 'Gestion des paiements';
$string['paymentpending'] = 'Votre paiement pour ce cours est en attente de traitement. Son num�ro d\'ordre est $a->orderid.';
$string['pendingordersemail'] = 'Cher administrateur,
  	 
$a->pending transactions arriveront � �ch�ance � moins que vous
n\'acceptiez le paiement dans les $a->days jours.

Ceci est un message d\'avertissement, car vous n\'avez pas activ�
la saisie automatique. Vous devez donc accepter ou refuser les paiements
manuellement.
  	 
Pour accpeter ou refuser les paiements en attente de traitement, veuillez
visiter la page
$a->url
  	 
Pour activer la saisie automatique, afin que vous ne receviez plus de tels
messages d\avertissement, veuillez visiter la page
$a->enrolurl';
$string['reason11'] = 'Un doublon de transaction a �t� transmis.';
$string['reason13'] = 'L\'identifiant de connexion n\'est pas valide ou le compte est inactif.';
$string['reason16'] = 'La transaction n\'a pas �t� trouv�e.';
$string['reason17'] = 'Le marchand n\'accepte pas ce type de carte de cr�dit.';
$string['reason27'] = 'La transaction a abouti � un probl�me AVS. L\'adresse fournie ne correspond � l\'adresse de facturation du d�tenteur de la carte.';
$string['reason28'] = 'Le marchand n\'accepte pas ce type de carte de cr�dit.';
$string['reason30'] = 'Une telle configuration n\'est pas valable. Veuillez appeler votre fournisseur.';
$string['reason39'] = 'Le code de devise fourni est soit non valide, non support�, non autoris� ou ne poss�de pas de taux de change.';
$string['reason43'] = 'The merchant was incorrectly set up at the processor. Call your Merchant Service Provider.';
$string['reason44'] = 'Cette transaction a �t� d�clin�e. Erreur du filtre de carte&nbsp;!';
$string['reason45'] = 'Cette transaction a �t� d�clin�e. Erreur du filtre de code de carte / AVS&nbsp;!';
$string['reason47'] = 'Le montant requis pour le r�glement ne peut pas �tre plus grand que le montant autoris� initiallement.';
$string['reason5'] = 'Un montant valide est requis.';
$string['reason50'] = 'Cette transaction est en attente de r�glement et ne peut �tre rembours�e.';
$string['reason51'] = 'La somme de tous les cr�dits concernant cette transaction est plus grande que le montant original de la transaction.';
$string['reason54'] = 'La transaction r�f�renc�e ne satisfait pas les crit�res permettant de d�livrer un cr�dit.';
$string['reason55'] = 'La somme de tous les cr�dits concernant cette transaction d�passerait le montant d� initialement.';
$string['refund'] = 'Remboursement';
$string['refunded'] = 'Rembours�';
$string['returns'] = 'Retour';
$string['reviewday'] = 'Saisir les donn�es de la carte de cr�dit automatiquement, � moins qu\'un enseignant ou un administrateur ne contr�le la commande dans les <b>$a</b> jours. LE CRON DOIT �TRE ACTIF.<br />(0 jour signifie que la saisie automatique sera d�sactiv�e. Un contr�le par un enseignant ou administrateur est alors n�cessaire. Dans ce cas, la transaction sera annul�e si elle n\'est pas contr�l�e dans les 30 jours)';
$string['reviewnotify'] = 'Votre paiement va �tre contr�l�. Votre enseignant vous contactera par courriel dans quelques jours.';
$string['sendpaymentbutton'] = 'Envoyer paiement';
$string['settled'] = 'R�gl�';
$string['settlementdate'] = 'Date de r�glement';
$string['subvoidyes'] = 'La transaction rembours�e $a->transid sera annul�e et votre compte sera cr�dit� de $a->amount. Voulez-vous continuer&nbsp;?';
$string['tested'] = 'Test�';
$string['testmode'] = '[MODE TEST]';
$string['testwarning'] = 'Les op�rations de saisie/annulation/cr�dit semblent fonctionner correctement en mode test. Aucun enregistrement n\'a cependant �t� mis � jour ni ins�r� dans la base de donn�es.';
$string['transid'] = 'No de transaction';
$string['unenrolstudent'] = 'D�sinscrire l\'�tudiant&nbsp;?';
$string['void'] = 'Nul';
$string['voidyes'] = 'La transaction sera annul�e. Voulez-vous continuer&nbsp;?';
$string['zipcode'] = 'Code postal';

?>
