<?PHP // $Id: enrol_ldap.php,v 1.1.2.3 2006/02/06 10:00:06 moodler Exp $



$string['description'] = '<p>LDAP������ �̿��Ͽ� ����� ����ڸ� ���� �Ҽ� �ֽ��ϴ�. 
LDAP������ ���� ����(map)�� 
�׷��� �����ϰ� �ְ�. ������ �׷�/������ �л���� ����(mpa)�� ȸ���� �����㰡�� ������ �ִٰ� �����Ҽ� �ִ�.<p>
<p>���� �� ���´� LDAP�� ���п� ���Ͽ� ���������� �� �׷��� ���� ���� Ȱ�������� ������ �ȴ�(<em>member</em> Ȥ�� <em>memberUid</em>) �װ��� �� �������� ���� �ٸ� ID�� ������ �Ѵ�.</p>
<p>LDAP����� �̿��Ϸ��� ����ڵ��� <strong>��!</strong> ��ȿ�� ID���� ������ �־�� �Ѵ�. 
���� LDAP�׷��� ���������� ����� ���ؼ� �� ������� ������ �´� ID���� ������ �־�� �Ѵ�. 
���� LDAP ������ ����ϰ� �ִٸ� �̷��� �͵��� �� �۵��ɰ��̴�.</p>
<p>����� ����ڰ� �α����Ҷ� ������Ʈ �ȴ�.
���� ��� ������ ��ũ��Ű�� ���ؼ� ��ũ��Ʈ�� ����Ҽ��� �ִ�. 
���� ������ ���� �϶� <em>enrol/ldap/enrol_ldap_sync.php</em></p>
<p>�� �÷������� �� �׷��� LDAP�� ����Ǹ� �ڵ������� �� ���¸� �����Ѵ�.</p>';
$string['enrol_ldap_autocreate'] = '���� Moodle�� ��ϵ��� ���� �ڽ��� ��ϵǸ� �ڵ����� �� �ڽ��� ������ ���̴�. ';
$string['enrol_ldap_autocreation_settings'] = '�ڵ� ���� �ڽ� ����';
$string['enrol_ldap_bind_dn'] = '���� �� search����ڵ鿡 ���� bind-user �� ����ϰ� �ʹٸ� ������ �����Ͻʽÿ�. ex) \'cn=ldapuser,ou=public,o=org\' ';
$string['enrol_ldap_bind_pw'] = 'bind-user�� ���� �н�����';
$string['enrol_ldap_category'] = '�ڵ� ���� �ڽ��� �з�(ī�װ�)';
$string['enrol_ldap_course_fullname'] = '�ɼ�: ��ü�̸��� ���� LDAP â';
$string['enrol_ldap_course_idnumber'] = 'LDAP������ ���δٸ� identifier�� ���� ����, ��κ�
<em>cn</em>�� <em>uid</em>. ���� �ڵ� �ڽ� ��������� ����ϸ� �� ������ ���� ���� ���� ��õ �մϴ�.';
$string['enrol_ldap_course_settings'] = '�ڽ� ��� ����';
$string['enrol_ldap_course_shortname'] = '�ɼ�: ����(shortname)�� ���� LDAP â';
$string['enrol_ldap_course_summary'] = '�ɼ�: ������ ������ ���� LDAP â';
$string['enrol_ldap_editlock'] = '������ ���';
$string['enrol_ldap_general_options'] = '�⺻ �ɼ�';
$string['enrol_ldap_host_url'] = 'Specify LDAP host in URL-â�� LDAPȣ��Ʈ ���� ������ ���� �Է��Ͻÿ�
\'ldap://ldap.myorg.com/\' 
or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass �� search courses�� ���Ǿ���.��κ�
\'posixGroup\'';
$string['enrol_ldap_search_sub'] = '�Ϻγ��뿡�� �׷� ȸ�� ã��';
$string['enrol_ldap_server_settings'] = 'LDAP ���� ����';
$string['enrol_ldap_student_contexts'] = '�׷�� �л����� ��ϼ����� �ִ� ���� ���� ���

���� ������� ������ ���̴� \';\'. ���� ���: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'ȸ�� �Ӽ�, ����ڵ��� (��Ϸ�) �׷쿡���� �ִٸ�
 . ��κ� \'member\'
�� \'memberUid\'.�ϰ��̴�';
$string['enrol_ldap_student_settings'] = '�л� ��� ����';
$string['enrol_ldap_teacher_contexts'] = '�׷�� �������� ��� ������ �ִ� ���� ���� ���
. ���� ������� ������ ���̴� \';\'. ���� ���: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'ȸ�� �Ӽ�, ����ڵ��� (��Ϸ�) �׷쿡���� �ִٸ�
 . ��κ� \'member\'
�� \'memberUid\'.�ϰ��̴�';
$string['enrol_ldap_teacher_settings'] = '���� ��� ����';
$string['enrol_ldap_template'] = '�ɼ�: �ڵ� ���� �ڽ��� �׵��� �������� template�ڽ����� �����´�.';
$string['enrol_ldap_updatelocal'] = '���� �ð� ������Ʈ';
$string['enrol_ldap_version'] = '����Ǽ����� ����ϰ� �ִ� LDAP ���������� ����';
$string['enrolname'] = 'LDAP';
?>
