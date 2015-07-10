<?PHP // $Id: enrol_ldap.php,v 1.2.2.4 2006/02/06 09:59:39 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5 Beta (2005052300)


$string['description'] = '<p>Usted puede utilizar un servidor LDAP para coltrolar sus matriculaciones. Se asume que su �rbol LDAP contiene grupos que apuntan a los cursos, y que cada uno de esos grupos o cursos contienen entradas de matriculaci�n que hacen referencia a los estudiantes.</p>
<p>Se asume que los cursos est�n definidos como grupos en LDAP, de modo que cada grupo tiene m�ltiples campos de matriculaci�n  (<em>member</em> or <em>memberUid</em>) que contienen una identificaci�n �nica del usuario.</p>
<p>Para usar la matriculaci�n LDAP, los usuarios <strong>deben</strong> tener un campo \'idnumber\' v�lido. Los grupos LDAP deben contener ese \'idnumber\' en los campos de membres�a para que un usuario pueda matricularse en un curso. Esto normalmente funcionar� bien si usted ya est� usando la Autenticaci�n LDAP.</p>
<p>Las matriculaciones se actualizar�n cuando el usuario se identifica. Consulte en <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Este plugin puede tambi�n ajustarse para crear nuevos cursos de forma autom�tica cuando aparecen nuevos grupos en LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Los cursos pueden crearse autom�ticamente si existen matriculaciones en un curso que a�n no existe en Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Ajustes para la creaci�n autom�tica de cursos';
$string['enrol_ldap_bind_dn'] = 'Si desea usar \'bind-user\' para buscar usuarios, especif�quelo aqu�. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Contrase�a para \'bind-user\'.';
$string['enrol_ldap_category'] = 'Categor�a para cursos auto-creados.';
$string['enrol_ldap_course_fullname'] = 'Opcional: campo LDAP del que conseguir el nombre completo.';
$string['enrol_ldap_course_idnumber'] = 'Mapa del identificador �nico en LDAP, normalmente  <em>cn</em> or <em>uid</em>. Se recomienda bloquear el valor si se est� utilizando la creaci�n autom�tica del curso.';
$string['enrol_ldap_course_settings'] = 'Ajustes de matriculaci�n de Curso';
$string['enrol_ldap_course_shortname'] = 'Opcional: campo LDAP del que conseguir el nombre corto.';
$string['enrol_ldap_course_summary'] = 'Opcional: campo LDAP del que conseguir el sumario.';
$string['enrol_ldap_editlock'] = 'Bloquear valor';
$string['enrol_ldap_general_options'] = 'Opciones generales';
$string['enrol_ldap_host_url'] = 'Especifique el host LDAP en formato URL, e.g.,  \'ldap://ldap.myorg.com/\'
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass usada para buscar cursos. Normalmente
\'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Buscar pertenencia al grupo en los subcontextos.';
$string['enrol_ldap_server_settings'] = 'Ajustes de Servidor LDAP';
$string['enrol_ldap_student_contexts'] = 'Lista de contextos en que se ubican los grupos con matriculaciones de estudiantes. Separe los distintos contextos con \';\'. Por ejemplo:  \'ou=cursos,o=org; ou=otros,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atributo de miembro, cuando el usuario pertenece a un grupo (i.e., est� matriculado). Normalmente \'miembro\' o \'memberUid\'-';
$string['enrol_ldap_student_settings'] = 'Ajustes de matriculaci�n de estudiantes';
$string['enrol_ldap_teacher_contexts'] = 'Lista de contextos en que se ubican los grupos con matriculaciones de profesores. Separe los distintos contextos con \';\'. Por ejemplo:  \'ou=cursos,o=org; ou=otros,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atributo de miembro, cuando el usuario pertenece a un grupo (i.e., est� matriculado). Normalmente \'miembro\' o \'memberUid\'-';
$string['enrol_ldap_teacher_settings'] = 'Ajustes de matriculaci�n de profesores';
$string['enrol_ldap_template'] = 'Opcional: los cursos auto-creados pueden copiar sus ajustes a partir de un curso-plantilla.';
$string['enrol_ldap_updatelocal'] = 'Actualizar datos locales';
$string['enrol_ldap_version'] = 'Versi�n del protocolo LDAP usado por el servidor.';
$string['enrolname'] = 'LDAP';

?>
