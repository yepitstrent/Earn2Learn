<?PHP // $Id: enrol_ldap.php,v 1.2.2.4 2006/02/06 10:00:30 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.5 + (2005060201)


$string['description'] = '<p>Voc� pode usar um server LDAP para controlar as inscri��es. Se presume que o ramo LDAP contenha grupos mapeados em rela��o aos cursos e que cada um destes grupos/cursos ter� itens que identificam membros mapeados em rela��o aos estudantes.</p>
<p>Se presume que os cursos sejam definidos como grupos em LDAP, com cada grupo contendo campos m�ltiplos que identificam os membros (<em>member</em> ou <em>memberUid</em>) e que cont�m uma identifica��o un�voca do usu�rio </p>';
$string['enrol_ldap_autocreate'] = 'Podem ser criados cursos automaticamente quando existem inscri��es em cursos ainda inexistentes.';
$string['enrol_ldap_autocreation_settings'] = 'Par�metros de cria��o autom�tica de cursos';
$string['enrol_ldap_bind_dn'] = 'Se voc� quiser usar o bind-user para buscar usu�rios, indic�-lo aqui. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Password para o bind-user';
$string['enrol_ldap_category'] = 'Categoria para cursos criados automaticamente';
$string['enrol_ldap_course_fullname'] = 'Opcional: campo LDAP que define o nome completo';
$string['enrol_ldap_course_idnumber'] = 'Mapa ao identificador �nico em LDAP, normalmente <em>cn</em> ou <em>uid</em>. � recomend�vel o bloqueio do valor quando � ativada a cria��o autom�tica de cursos.';
$string['enrol_ldap_course_settings'] = 'Configura��o da Inscri��o em Cursos';
$string['enrol_ldap_course_shortname'] = 'Opcional: campo LDAP que define o nome breve';
$string['enrol_ldap_course_summary'] = 'Opcional: campo LDAP que define o sum�rio';
$string['enrol_ldap_editlock'] = 'Bloquear valor';
$string['enrol_ldap_general_options'] = 'Op��es Gerais';
$string['enrol_ldap_host_url'] = 'Definir o host LDAP em formato URL como \'ldap://ldap.myorg.com/\' 
ou \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass usado para buscar cursos. Normalmente � \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'Buscar membros de grupos em subcontextos';
$string['enrol_ldap_server_settings'] = 'Par�metros do Server LDAP';
$string['enrol_ldap_student_contexts'] = 'Lista de contextos onde grupos com inscri��o de estudantes est�o localizados. Separar contextos diferentes com \';\'. Por exemplo: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Atributo de membro quando os usu�rios est�o inscritos em um grupo. Normalmente \'member\'
or \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Par�metros de inscri��o dos estudantes';
$string['enrol_ldap_teacher_contexts'] = 'Lista de contextos onde grupos com inscri��o de docentes est�o localizados. Separar contextos diferentes com \';\'. Por exemplo: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Atributo de um membro de um grupo. Normalmente \'member\' ou \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Par�metros de inscri��o dos professores';
$string['enrol_ldap_template'] = 'Opcional: cursos criados automaticamente podem copiar as suas configura��es a partir de um modelo de curso';
$string['enrol_ldap_updatelocal'] = 'Atualizar local data';
$string['enrol_ldap_version'] = 'A vers�o de protocolo LDAP que o seu servidor est� usando';
$string['enrolname'] = 'LDAP';

?>
