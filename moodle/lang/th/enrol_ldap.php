<?PHP // $Id: enrol_ldap.php,v 1.1.2.3 2006/02/06 10:00:38 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005101200)


$string['description'] = '<p>��ҹ����ö����������� LDAP ����Ѻ͹��ѵ����������¹ �����������ѧ����Ǩе�ͧ��Сͺ仴��¡�����������ѧ����Ԫҵ�ҧ �  ��� �������������Ԫҹ�� � ������ª�����Ҫԡ�����ѹ�Ѻ���������������� </p>
<p>���� LDAP ��鹨��ա�èӡѴ��������Ԫ�����繡����˹�觡���� �����С�������տ�Ŵ���Ҫԡ���¿�Ŵ���¡ѹ�� 
(<em>member</em> or <em>memberUid</em>)
��觨��繢�����੾������Ѻ����׹�ѹ��Ǽ�������Ф�
</p>
<p>㹡������͹��ѵԼ�ҹ LDAP ���< ������ͧ�տ�Ŵ������Ţ��Шӵ�� (ID Number) ���١��ͧ  ��㹡�������С����� LDAP �е�ͧ�տ�Ŵ������Ţ��Шӵ��㹿�Ŵ���Ҫԡ������ҧ�������Ѻ��Ҫԡ㹡�è�����繹ѡ���¹�����Ԫҹ�� �  ����ҹ����ҡ��ҹ����͹��ѵԼ�ҹ LDAP �����͹����</p>

<p>�к��зӡ���Ѿഷ�����š������繹ѡ���¹�ء���駷����Ҫԡ�������к� �س����ö��ҹʤ�Ի�������������š���繹ѡ���¹��鹵ç�ѹ ����� <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>�����Թ�������ö���ҧ����Ԫ������鹷ѹ�շ���ҡ����͡�������������� LDAP</P>';
$string['enrol_ldap_autocreate'] = '�к������ҧ����ԪҢ�����ѵ��ѵԶ���ҡ�ա����Ѥ�����繹ѡ���¹��Ԫ�� � �֧�����ѧ����ա�����ҧ����ԪҴѧ������ Moodle';
$string['enrol_ldap_autocreation_settings'] = '��õ�駤�ҡ�����ҧ����Ԫ��ѵ��ѵ�';
$string['enrol_ldap_bind_dn'] = '����ҡ��ͧ����� bind-user 㹡�ä��Ҽ��������кؤ�ҷ���� �� 
\'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = '���ʼ�ҹ����Ѻ bind-user';
$string['enrol_ldap_category'] = '����������Ѻ����Ԫҷ�����ҧ����ѵ��ѵ�';
$string['enrol_ldap_course_fullname'] = '������͡ :  ��Ŵ� LDAP ���д֧�����Ū������';
$string['enrol_ldap_course_idnumber'] = '�����ѧ unique identifier � LDAP �·�������Ǩ��� <em>cn</em> ����<em>uid</em>  �س��èзӡ����ͤ��ҹ���������ҡ���͡���Ըա�����ҧ����Ԫ��ѵ��ѵ�';
$string['enrol_ldap_course_settings'] = '��õ�駤�ҡ���Ѻ����繹ѡ���¹�����Ԫ�';
$string['enrol_ldap_course_shortname'] = '������͡ : ��Ŵ� LDAP ���д֧�����Ū������';
$string['enrol_ldap_course_summary'] = '������͡ : ��Ŵ� LDAP ���д֧�����ź��Ѵ���';
$string['enrol_ldap_editlock'] = '��ͤ���';
$string['enrol_ldap_general_options'] = '������͡�����';
$string['enrol_ldap_host_url'] = '�к� Host LDAP ��ٻẺ�ͧ url �� \'ldap://ldap.myorg.com/\' 
���� \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = ' objectClass �����㹡�ä�������Ԫ� �·������ \'posixGroup\'';
$string['enrol_ldap_search_sub'] = '������Ҫԡ���㹡�����ҡ��Ժ�';
$string['enrol_ldap_server_settings'] = '��õ�駤����������� LDAP';
$string['enrol_ldap_student_contexts'] = '��¡�ú�Ժ�  �������Ԫҷ���չѡ���¹������� ��������͹�¡���к�Ժ� \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = '��õ�駤����Ҫԡ ����ͼ�����������㹡����������Ѥ�����Ҫԡ�ͧ����� ��Ҩ����¡��� \'member\' ���� \'memberUid\'';
$string['enrol_ldap_student_settings'] = '��õ�駤�ҡ���Ѻ����繹ѡ���¹';
$string['enrol_ldap_teacher_contexts'] = '��¡�ú�Ժ�  �������Ԫҷ�����Ҩ���������� ��������͹�¡���к�Ժ� \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = '��õ�駤����Ҫԡ ����ͼ�����������㹡����������Ѥ�����Ҫԡ�ͧ����� ��Ҩ����¡��� \'member\' ���� \'memberUid\'';
$string['enrol_ldap_teacher_settings'] = '��õ�駤�ҡ���Ѻ���Ҩ����';
$string['enrol_ldap_template'] = '������͡ :  ������ҧ����Ԫ��ѵ��ѵ�����ö�ӡ�����Ҥ�ҵ�ҧ � �ҡ����Ԫҵ�Ẻ';
$string['enrol_ldap_updatelocal'] = '�Ѿഷ�����������ͧ';
$string['enrol_ldap_version'] = '�����ѹ�ͧ LDAP ���������';
$string['enrolname'] = 'LDAP';

?>
