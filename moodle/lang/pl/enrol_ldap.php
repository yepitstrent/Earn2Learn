<?PHP // $Id: enrol_ldap.php,v 1.1.2.2 2006/02/06 10:00:25 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5.2 + (2005060223)


$string['description'] = '<p>Mo�esz u�y� serwera LDAP do kontroli zapis�w.
Zak�ada si� �e twoje drzewo LDAP zawiera grupy odwzorowuj�ce kursy �e ka�da z tych grup/kurs�w b�dzie mia�a wpisy cz�onkowskie odwzorowuj�ce student�w. </p>
Zak�ada si�, �e kursy s� zdefiniowane jako grupy w LDAPie, a ka�da z tych grup ma wiele p�l czlonkowkich (<em>member</em> lub <em>memberUid</em>)  kt�re zawieraj� unikatowy identyfikator u�ytkownika.
Aby wykorzystywa� zapisy przez LDAP twoi u�ytkownicy <strong> musz� </strong> mie� wa�ne (aktualne, poprawne) pole idnumber. Grupy LDAP musz� mie� ten idnumber w polach cz�onk�w aby u�ytkownik zosta� zapisany na kurs.
To b�dzie dzia�a� poprawnie je�li ju� korzystasz z autoryzacji LDAP.</p>
Zapisywanie b�dzie uaktualniane kiedy u�ytkownik zaloguje si�. Mo�na r�wnie� uruchomi� skrypt do synchronizacji zapis�w. Zobacz w em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p> Ta wtyczka mo�e r�wnie� tworzy� automatycznie nowe kursy, kiedy pojawiaj� si� nowe grupy w LDAP. </p>';
$string['enrol_ldap_autocreate'] = 'Kursy mog� by� tworzone automatycznie je�eli pojawia si� zg�oszenie na kurs, kt�ry dotychczas nie istnieje w Moodle';
$string['enrol_ldap_autocreation_settings'] = 'Ustawinia automatycznego tworzenia kurs�w';
$string['enrol_ldap_bind_dn'] = 'Je�eli chcesz u�ywa� bind-user do poszukiwania u�ytkownik�w, okre�l ich tutaj. Podobnie do \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Has�o dla bind-user';
$string['enrol_ldap_category'] = 'Kategoria dla automatycznie tworzonych kurs�w';
$string['enrol_ldap_course_fullname'] = 'Opcjonalne: Pole sk�d LDAP ma pobiera� pe�n� nazw�.';
$string['enrol_ldap_course_idnumber'] = 'Mapuj (odwzoruj) unikalny identyfikator w LDAP, przewa�nie <em>cn</em> lub <em>uid</em>. Blokuj t� warto�� je�eli u�ywasz automatycznego tworzenia kurs�w.';
$string['enrol_ldap_course_settings'] = 'Ustawienie zapisywania na kurs';
$string['enrol_ldap_course_shortname'] = 'Opcjonalne:Pole sk�d LDAP ma pobiera� nazw� skr�con�';
$string['enrol_ldap_course_summary'] = 'Opcjonalne:Pole sk�d LDAP ma pobiera� opis';
$string['enrol_ldap_editlock'] = 'Blokuj warto��';
$string['enrol_ldap_general_options'] = 'Opcje og�lne';
$string['enrol_ldap_host_url'] = 'Okre�l URL hostu LDAP podobnie do: \'ldap://ldap.myorg.com/\' 
lub \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass u�ywany do szukania kurs�w. Przewa�nie \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Szukaj cz�onk�w grupy dla podkontekst�w.';
$string['enrol_ldap_server_settings'] = 'Ustawienia sewera LDAP';
$string['enrol_ldap_student_contexts'] = 'Wymie� kolejno list� kontekst�w gdzie grupy z zapisanymi studentami s� rozmieszczane . Oddziel r�ne konteksty \';\'. Np: ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Cecha cz�onek grupy, okre�la kiedy student nale�y (jest zapisany) do grupy. Zwykle zawiera pole \'member\' albo \'memberUid\'. ';
$string['enrol_ldap_student_settings'] = 'Ustawienia zapisywania student�w';
$string['enrol_ldap_teacher_contexts'] = 'Wymie� kolejno list� kontekst�w gdzie grupy z zapisanymi prowadz�cymi s� rozmieszczane . Oddziel r�ne konteksty \';\'. Np: ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Cecha cz�onek grupy, okre�la kiedy prowadz�cy nale�y (jest zapisany) do grupy. Zwykle zawiera pole \'member\' albo \'memberUid\'. ';
$string['enrol_ldap_teacher_settings'] = 'Ustawienia zapisywania prowadz�cych';
$string['enrol_ldap_template'] = 'Opcjonalnie: Auto-tworzenie kurs�w mo�e kopiowa� ustawienia z wzorcowego kursu.';
$string['enrol_ldap_updatelocal'] = 'Uaktualnij dane lokalne';
$string['enrol_ldap_version'] = 'Wersja protoko�u LDAP zainstalowana na Twoim serwerze.';
$string['enrolname'] = 'LDAP';

?>
