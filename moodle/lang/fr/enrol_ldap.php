<?php // $Id: enrol_ldap.php,v 1.2.2.4 2006/02/06 09:59:43 moodler Exp $ 

$string['enrolname'] = 'LDAP';
$string['description'] = '<p>Vous pouvez utiliser un serveur LDAP pour contr�ler les inscriptions aux cours. On suppose que votre arbre LDAP contient des groupes correspondant aux cours, et que chacun de ces groupes/cours contiendra les inscriptions � faire correspondre avec les �tudiants.</p>
<p>On suppose que dans LDAP, les cours sont d�finis comme des groupes, et que chaque groupe comporte plusieurs champs indiquant l\'appartenance (<em>member</em> ou <em>memberUid</em>), contenant un identificateur unique de l\'utilisateur.</p>
<p>Pour pouvoir utiliser les inscriptions par LDAP, les utilisateurs <strong>doivent</strong> avoir un champ idnumber valide. Les groupes LDAP doivent comporter cet idnumber dans le champ d�finissant l\'appartenance afin que l\'utilisateur soit inscrit � ce cours. Cela fonctionne bien si vous utilisez d�j� l\'authentification par LDAP.</p>
<p>Les inscriptions sont mises � jour lors de la connexion de l\'utilisateur. Il est aussi possible de lancer un script pour synchroniser les inscriptions. voyez pour cela le fichier <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Cette extension peut �galement servir � la cr�ation automatique de nouveaux cours lorsque de nouveaux groupes apparaissent dans LDAP.</p>';
$string['enrol_ldap_server_settings'] = 'R�glages du serveur LDAP';
$string['enrol_ldap_host_url'] = 'Indiquez l\'h�te LDAP en format URL, par exemple �&nbsp;ldap://ldap.myorg.com/&nbsp;� ou �&nbsp;ldaps://ldap.myorg.com/&nbsp;�';
$string['enrol_ldap_version'] = 'La version du protocole LDAP qu\'utilise votre serveur.';
$string['enrol_ldap_bind_dn'] = 'Si vous voulez utiliser bind-user pour rechercher des utilisateurs, veuillez le sp�cifier ici, par exemple sous la forme �&nbsp;cn=ldapuser,ou=public,o=org&nbsp;�';
$string['enrol_ldap_bind_pw'] = 'Mot de passe pour bind-user.';
$string['enrol_ldap_search_sub'] = 'Rechercher les affiliations aux groupes � partir des sous-contextes.';
$string['enrol_ldap_student_settings'] = 'R�glages pour l\'inscription des �tudiants';
$string['enrol_ldap_teacher_settings'] = 'R�glages pour l\'inscription des enseignants';
$string['enrol_ldap_course_settings'] = 'R�glages de l\'inscription aux cours';
$string['enrol_ldap_student_contexts'] = 'Liste des contextes o� sont plac�s les groupes contenant les inscriptions des �tudiants. S�parez les diff�rents contextes par des �&nbsp;;&nbsp;�. Par exemple&nbsp;: �&nbsp;ou=courses,o=org; ou=others,o=org&nbsp;�';
$string['enrol_ldap_student_memberattribute'] = 'Nom de l\'attribut d\'appartenance (inscription) d\'un �tudiant � un groupe (cours). D\'habitude �&nbsp;member&nbsp;� ou �&nbsp;memberUid&nbsp;�.';
$string['enrol_ldap_teacher_contexts'] = 'Liste des contextes o� sont plac�s les groupes contenant les inscriptions des enseignants. S�parez les diff�rents contextes par des �&nbsp;;&nbsp;�. Par exemple&nbsp;: �&nbsp;ou=courses,o=org; ou=others,o=org&nbsp;�';
$string['enrol_ldap_teacher_memberattribute'] = 'Nom de l\'attribut d\'appartenance (inscription) d\'un enseignant � un groupe (cours). D\'habitude �&nbsp;member&nbsp;� ou �&nbsp;memberUid&nbsp;�.';
$string['enrol_ldap_autocreation_settings'] = 'R�glages de la cr�ation automatique de cours';
$string['enrol_ldap_autocreate'] = 'Des cours peuvent �tre cr��s automatiquement si des inscriptions existent pour un cours qui n\'existe pas encore dans Moodle.';
$string['enrol_ldap_objectclass'] = 'Classe objectClass utilis�e pour la recherche de cours. D\'habitude �&nbsp;posixGroup&nbsp;�.';
$string['enrol_ldap_category'] = 'Cat�gorie des cours cr��s automatiquement.';
$string['enrol_ldap_template'] = 'Facultatif&nbsp;: les cours cr��s automatiquement peuvent copier leurs r�glages sur un cours mod�le.';
$string['enrol_ldap_updatelocal'] = 'Mettre � jour les donn�es locales';
$string['enrol_ldap_editlock'] = 'Verrouiller la valeur';
$string['enrol_ldap_course_idnumber'] = 'Champ correspondant avec l\'identificateur unique LDAP, D\'habitude <em>cn</em> ou <em>uid</em>. On recommande de verrouiller cette valeur lors de l\'utilisation de la cr�ation automatique de cours.';
$string['enrol_ldap_course_shortname'] = 'Facultatif&nbsp;: champ LDAP d\'o� tirer le nom abr�g� du cours.';
$string['enrol_ldap_course_fullname']  = 'Facultatif&nbsp;: champ LDAP d\'o� tirer le nom complet du cours.';
$string['enrol_ldap_course_summary']   = 'Facultatif&nbsp;: champ LDAP d\'o� tirer le r�sum� du cours.';                                                                                                                                                
$string['enrol_ldap_general_options']   = 'Options g�n�rales';

?>
