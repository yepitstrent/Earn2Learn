<?PHP // $Id: enrol_ldap.php,v 1.3.2.4 2006/02/06 09:59:33 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005060201)


$string['description'] = '<p>Sie k�nnen LDAP Server nutzen, um automatisch Eintragungen zu kontrollieren. Es wird angenommen, dass der LDAP tree Gruppen enth�lt, die zu Kursen geh�ren und dass jede der Gruppen/Kurse Eintr�ge von Teilnehmern hat.</p>
<p>Es wird angenommen, dass Kurse als Gruppen in LDAP definiert sind und jede Gruppe �ber mehrere Mitgliedsfelder verf�gt
(<em>member</em> oder <em>memberUid</em>) mit einem eindeutigen Identifikationsfeld f�r die Nutzer.</p>
<p>Um LDAP Eintragungen zu verwenden, <strong>mu�</strong>
jeder Nutzer eine g�ltige idnumber besitzen. Die LDAP Grupppen m�ssen diese idnumber im member Feld aufweisen, um den Teilnehmer in den Kurs einzutragen.
Dies funktioniert einwandfrei wenn ausschlie�lich die LDAP Authentifizierung genutzt wird.</p>
<p>Eintragungen werden aktualisiert wenn der Nutzer  sich einloggt. Sie k�nnen auch ein Script nutzen, um Eintragungsdaten zu synchronisieren. Siehe
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Dieses plugin kann auch genutzt werde, um automatisch Kurse anzulegen wenn neue Gruppe im LDAP eingerichtet werden.</p>';
$string['enrol_ldap_autocreate'] = 'Kurse k�nnen automatisch angelegt werden wenn es Eintragungen zu einem Kurs gibt, der in moodle noch nicht existiert.';
$string['enrol_ldap_autocreation_settings'] = 'Einstellungen f�r automatische Kurseinrichtung';
$string['enrol_ldap_bind_dn'] = 'Wenn Sie  bind-user f�r die Kurssuche nutzen wollen, legen Sie es hier fest. Z.B. \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Passwort f�r bind-user';
$string['enrol_ldap_category'] = 'Kategorie f�r automatisch erzeugte Kurse';
$string['enrol_ldap_course_fullname'] = 'Option: LDAP Feld f�r Kurstitel';
$string['enrol_ldap_course_idnumber'] = 'Abbild der eindeutigen Identifizierung in LDAP, meist
<em>cn</em> oder <em>uid</em>. Es wird erwartet, dass der Wert geschlossen wird, wenn die automatische Kurserstellung verwendet wird.';
$string['enrol_ldap_course_settings'] = 'Kurseintragung-Einstellung';
$string['enrol_ldap_course_shortname'] = 'Option: LDAP Feld f�r den Kurznamen';
$string['enrol_ldap_course_summary'] = 'Opton: LDAP Feld f�r die Zusammenfassung';
$string['enrol_ldap_editlock'] = 'Schl�sselwert';
$string['enrol_ldap_general_options'] = 'Allgemeine Optionen';
$string['enrol_ldap_host_url'] = 'LDAP host in URL-form definieren, z.B.
\'ldap://ldap.myorg.com/\'
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass f�r Kurssuche. Normalerweise \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Suche Gruppenmitgliedschaften aus Subcontexts';
$string['enrol_ldap_server_settings'] = 'LDAP Server Einstellungen';
$string['enrol_ldap_student_contexts'] = 'Fundstelle f�r Liste der Verbindung von Gruppen und Teilnehmerereintragung. Verschiedene Eintr�ge werden durch ein Semikolon getrennt: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Mitgliedseigenschaften, wenn Nutzer zu einer Gruppe geh�rt/eingetragen wird. Normalerweise \'member\' oder memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Teilnehmereintragung-Einstellungen';
$string['enrol_ldap_teacher_contexts'] = 'Fundstelle f�r Liste der Verbindung von Gruppen und Trainereintragung. Verschiedene Eintr�ge werden durch ein Semikolon getrennt: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Mitgliedseigenschaften, wenn Nutzer zu einer Gruppe geh�rt/eingetragen wird. Normalerweise \'member\' oder memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Trainereintragung-Einstellungen';
$string['enrol_ldap_template'] = 'Option: automatisch erstellte Kurse (auto created courses) k�nnen ihre Einstellungen aus einem Templatekurs kopieren.';
$string['enrol_ldap_updatelocal'] = 'Update lokaler Daten';
$string['enrol_ldap_version'] = 'Version des LDAP Protokolls auf Ihrem Server';
$string['enrolname'] = 'LDAP';

?>
