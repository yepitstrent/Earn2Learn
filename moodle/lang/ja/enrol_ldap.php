<?PHP // $Id: enrol_ldap.php,v 1.3.2.5 2006/02/06 09:59:55 moodler Exp $ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005101200)


$string['description'] = '<p>�桼����Ͽ�򥳥�ȥ��뤹�뤿��ˡ�LDAP�����Ф���Ѥ��뤳�Ȥ��Ǥ��ޤ���LDAP�λ��Ѥϡ����ʤ���LDAP�ĥ꡼������������Ͽ����Ƥ��륰�롼�פ�ޤ�Ǥ��뤳�ȡ����줾��Υ��롼��/��������˳������б��������С���Ͽ�����뤳�Ȥ�����Ȥ��ޤ���</p>
<p>��������LDAP��ǥ��롼�פȤ���������졢��ˡ����ʥ桼�����̤�ޤ�ʣ���Υ��С����åץե������ ( <em>member</em> �ޤ��� <em>memberUid</em> ) ����äƤ��뤳�Ȥ�����Ȥ��ޤ���</p>

<p>LDAP����Ѥ����桼����Ͽ����Ѥ���ˤϡ��桼����ͭ����ID�ʥ�С��ե�����ɤ�<strong>����ɬ��</strong>������ޤ���LDAP���롼�פϡ��桼��������������Ͽ�Ǥ���褦�ˡ����С��ե�����ɤ����ID�ʥ�С������ɬ�פ�����ޤ������ʤ������Ǥ�LDAPǧ�ڤ���Ѥ��Ƥ���ΤǤ����顢�̾盧���������ư��ޤ���</p>

<p>�桼����Ͽ���Ƥϡ��桼���Υ�������˹�������ޤ�����Ͽ�����Ʊ����Ȥ뤿��Υ�����ץȤ�¹Ԥ����뤳�Ȥ�Ǥ��ޤ���<em>enrol/ldap/enrol_ldap_sync.php</em>��������������</p>

<p>���Υץ饰����Ǥϡ����������롼�פ�LDAP��˺������줿���ˡ���ưŪ�˿�������������������뤳�Ȥ�Ǥ��ޤ���</p>';
$string['enrol_ldap_autocreate'] = 'Moodle��¸�ߤ��ʤ�����������Ͽ���줿��硢��ưŪ�˥�������������ޤ���';
$string['enrol_ldap_autocreation_settings'] = '��������ư��������';
$string['enrol_ldap_bind_dn'] = 'bind�桼����桼�������˻��Ѥ��������ϡ������ǻ��ꤷ�Ƥ����������� cn=ldapuser,ou=public,o=org �פΤ褦�ˤʤ�ޤ���';
$string['enrol_ldap_bind_pw'] = 'bind�桼���Υѥ���ɡ�';
$string['enrol_ldap_category'] = '��ư�����������Υ��ƥ��ꡣ';
$string['enrol_ldap_course_fullname'] = '���ץ����: ��̾�Ρפ��������LDAP�ե������';
$string['enrol_ldap_course_idnumber'] = 'LDAP�Υ�ˡ�����identifier�˥ޥåפ��Ƥ����������̾�� <em>cn</em> �ޤ��� <em>uid</em>�Ǥ�����������ư��������Ѥ�������ͤ���ꤷ�Ƥ��������� ';
$string['enrol_ldap_course_settings'] = '��������Ͽ����';
$string['enrol_ldap_course_shortname'] = '���ץ����: �־�ά̾�פ��������LDAP�ե������';
$string['enrol_ldap_course_summary'] = '���ץ����: �ֳ��ספ��������LDAP�ե������';
$string['enrol_ldap_editlock'] = '��å���';
$string['enrol_ldap_general_options'] = '���̥��ץ����';
$string['enrol_ldap_host_url'] = ' �� ldap://ldap.myorg.com/ �פޤ��ϡ� ldaps://ldap.myorg.com/ �פΤ褦��LDAP�ۥ��Ȥ�URL�η����ǻ��ꤷ�Ƥ���������';
$string['enrol_ldap_objectclass'] = '�����������˻��Ѥ��륪�֥������ȥ��饹���̾�ϡ� posixGroup ��';
$string['enrol_ldap_search_sub'] = 'subcontext��ꥰ�롼�ץ��С��򸡺����롣';
$string['enrol_ldap_server_settings'] = 'LDAP����������';
$string['enrol_ldap_student_contexts'] = '��������Ͽ���˳�����Ƥ��륰�롼�ץꥹ�ȤΥ���ƥ����ȤǤ�������ƥ����Ȥϡ� ; �פǶ��ڤäƤ�����������: ��  ou=courses,o=org; ou=others,o=org �� ';
$string['enrol_ldap_student_memberattribute'] = '�桼�������롼�פ�°���� ( ��Ͽ����� ) ������Υ��С�°�����̾�� member �פޤ��ϡ� memberUid ��';
$string['enrol_ldap_student_settings'] = '������Ͽ����';
$string['enrol_ldap_teacher_contexts'] = '���դ���Ͽ���˳�����Ƥ��륰�롼�ץꥹ�ȤΥ���ƥ����ȤǤ�������ƥ����Ȥϡ� ; �פǶ��ڤäƤ�����������: ��  ou=courses,o=org; ou=others,o=org �� ';
$string['enrol_ldap_teacher_memberattribute'] = '�桼�������롼�פ�°���� ( ��Ͽ����� ) ������Υ��С�°�����̾�� member �פޤ��ϡ� memberUid ��';
$string['enrol_ldap_teacher_settings'] = '������Ͽ����';
$string['enrol_ldap_template'] = '���ץ����: ��ư����������������򥳥ԡ�����ƥ�ץ졼�ȥ�������';
$string['enrol_ldap_updatelocal'] = '������ǡ����ι���';
$string['enrol_ldap_version'] = '���ʤ��Υ����Фǻ��Ѥ��Ƥ���LDAP�ץ�ȥ���ΥС������';
$string['enrolname'] = 'LDAP';

?>
