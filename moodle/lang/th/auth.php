<?PHP // $Id: auth.php,v 1.14.2.5 2006/02/06 10:00:38 moodler Exp $ 
      // auth.php - created with Moodle 1.6 development (2005101200)


$string['alternatelogin'] = '��� url �ͧ˹�ҷ���ͧ�������˹������Ѻ�������к���˹�Ҵѧ����Ǥ�û�Сͺ仴��� <strong>\'$a\'</strong> ����տ�Ŵ���仹�� <strong>���ͼ����</strong> ��� <strong>���ʼ�ҹ</strong> <br />  �ô��������Ѵ���ѧ㹡������� url  ���С������ҷ�����١��ͧ�Ҩ������к��Ӥس�͡�ҡ�к� <br /> ��駪�ͧ��������ҧ���������˹�ҷ���к�������';
$string['alternateloginurl'] = 'URL �ͧ˹���������к�����ͧ���';
$string['auth_cas_baseuri'] = 'URI �ͧ��������� ������ҧ�� 㹡óշ�� CAS ���������ӧҹ��ͺ�Ѻ  host.domain.uk/CAS/   ��Ңͧ  cas_basuri= CAS/';
$string['auth_cas_create_user'] = '�Դ��ҹ��ҹ�����ҡ��ͧ����á���͹��ѵԼ�ҹ CAS 㹰ҹ������ Moodle  �ҡ���੾����Ҫԡ�������㹰ҹ��������ҹ�鹨֧����ö�������к��� ';
$string['auth_cas_enabled'] = '�Դ��ҹ��ҹ���ҡ��ͧ�����ҹ���͹��ѵԼ�ҹ CAS';
$string['auth_cas_hostname'] = '������ʵ�ͧ CAS ��������� ��  host.domain.uk';
$string['auth_cas_invalidcaslogin'] = '�����¤�� �������к��������稤س������Ѻ͹حҵ����������к�';
$string['auth_cas_language'] = '���͡����';
$string['auth_cas_logincas'] = '����������к�Ẻ������ʹ����٧';
$string['auth_cas_port'] = '��������Ѻ CAS ���������';
$string['auth_cas_server_settings'] = '��õ�駤�� CAS ���������';
$string['auth_cas_text'] = '����������к�������ʹ����٧';
$string['auth_cas_version'] = '�����ѹ�ͧ CAS';
$string['auth_casdescription'] = '�Ըչ���繡���� CAS ��������� ( Central Authentication Service) ����͹��ѵԡ�������ҹ�ͧ��Ҫԡ�����������ö�����ҹẺ Single Sign On environment (SSO) ��ͷӡ�õ�Ǩ�ͺ���ͼ����������ʼ�ҹ�����Ѻ���͹��ѵԼ�ҹ LDAP ���ҧ���� 㹡óշ����ͼ����������ʼ�ҹ�١��ͧ��� CAS   Moodle �зӡ�����ҧ��Ҫԡ����ŧ㹰ҹ�������¹Ӣ����ż����ҡ LDAP �ҡ���� 㹡���������к����駵����к��зӡ�õ�Ǩ�ͺ੾�Ъ��ͼ����������ʼ�ҹ��ҹ��';
$string['auth_castitle'] = '�� CAS ��������� (SSO)';
$string['auth_common_settings'] = '��õ�駤�ҷ����';
$string['auth_data_mapping'] = '��èѺ��������';
$string['auth_dbdescription'] = '�Ըչ���繡����ҹ�����Ź͡㹡�õ�Ǩ�ͺ��Ҫ���������ʼ�ҹ��鹶١��ͧ������� ����ҡ account �ѧ������� ���������� �����Ũж١����ѧ��ǹ��ҧ � � Moodle';
$string['auth_dbextrafields'] = '��ͧ�����������������  �س����ö���͡�� ��ҷ���к� �������͹ �ҡ  <b>�ҹ�����Ź͡</b><p>  ����ҡ �������ҧ ������ �к������͡�� ��� default  <p> ��� ����ͧ�ó� ��Ҫԡ����ö������䢤�ҵ�ҧ� �� �����ѧ�ҡ ��͡�Թ';
$string['auth_dbfieldpass'] = '���Ϳ�Ŵ�㹵��ҧ��������ʼ�ҹ';
$string['auth_dbfielduser'] = '���Ϳ�Ŵ�㹵��ҧ����ժ��ͼ����';
$string['auth_dbhost'] = '���������������纰ҹ������';
$string['auth_dbname'] = '���ͧ͢�ҹ������';
$string['auth_dbpass'] = '���ʼ�ҹ�ç�Ѻ���ͼ����';
$string['auth_dbpasstype'] = '�к��ٻẺ������㹪�ͧ���ʼ�ҹ ���������� MD5 �ջ���ª��㹡�õԴ��͡Ѻ�������èѴ���������� �� PostNuke';
$string['auth_dbtable'] = '���ͧ͢���ҧ㹰ҹ������';
$string['auth_dbtitle'] = '��ҹ�����Ź͡';
$string['auth_dbtype'] = '�������ͧ�ҹ������(�٢�������������ҡ  <A HREF=../lib/adodb/readme.htm#drivers>����� ADOdb </A> )';
$string['auth_dbuser'] = '���ͼ���� (username)�������ö������ҹ�ҹ��������';
$string['auth_emaildescription'] = '㹡����Ѥ�����Ҫԡ��� �����Ѥè����Ѻ���͹��ѵ� ��ҹ����� ����繤�ҷ�������ͧ�к� ����ͼ����Ѥ����͡ ���� ��� ���ʼ�ҹ���� �к��зӡ�����������ѧ ����Ţͧ��Ҫԡ��� ����Ź������ԧ���Ѻ��ѧ˹����ѡ�ͧ˹�� ��觨��繡���׹�ѹ��� ����Ŵѧ����������ԧ  ��ѧ�ҡ�����Ҫԡ ����ö��͡�Թ�������������ʼ�ҹ���';
$string['auth_emailtitle'] = '���Ը�͹��ѵԼ�ҹ�����';
$string['auth_fccreators'] = '��ª��ͧ͢����������Ҫԡ����ö���ҧ����Ԫ������� ����¡���С������������ͧ���� \';\' ���ͷ���駢���ҵ�ͧ�ç�Ѻ�����������';
$string['auth_fcdescription'] = '�Ըչ���繡���������������Ǩ�ͺ��͹��Ҫ��ͼ����������ʼ�ҹ�١��ͧ�������';
$string['auth_fcfppport'] = '���췢ͧ��������� (���Ե������� 3333)';
$string['auth_fchost'] = '�������ͧ��������� ����������Ţ IP ���� DNS';
$string['auth_fcpasswd'] = '���ʼ�ҹ�ͧ�ѭ�ռ�����ҧ��';
$string['auth_fctitle'] = '������ʤ������������';
$string['auth_fcuserid'] = 'Userid ����Ѻ FirstClass account  ������Է��� \" Subadministrator\"';
$string['auth_fieldlock'] = '��ͤ���';
$string['auth_fieldlock_expl'] = '<p><b>��ͤ���:</b> �ҡ�Դ��ҹ�з������Ҫԡ Moodle ��м������к��������ö��䢤��㹿�Ŵ��ҧ � ���µç ������͡���ҹ���ҡ�س��ͧ����红����ŵ�ҧ � ���㹰ҹ�����Ź͡ </p>';
$string['auth_fieldlocks'] = '��ͤ��Ŵ���Ҫԡ';
$string['auth_fieldlocks_help'] = '�س����ö��ͤ��Ŵ��������Ҫԡ �ջ���ª������Ѻ���䫵���੾�м������к�����ҹ�鹷��з�˹�ҷ����䢢����Ţͧ��Ҫԡ�ҡ��鹷ӡ���Ѿ��Ŵ��Ҫԡ�������к� ����ҡ�ա����͡��Ŵ�����Ǩ�ͺ���������ӡ�����������ŷ���������Ѻ������ҧ�ѭ�ռ����� moodle  ���º�����������蹹�鹺ѭ�ռ������������ö������ 
<p> �ҡ��ͧ�����ա����§�ѭ�Ҵѧ���������駤�����������ͤ����� \"�Դ��ͤ�ҡ����բ�����\" ';
$string['auth_imapdescription'] = '���Ըա�� ����������� �� IMAP ���������';
$string['auth_imaphost'] = 'IMAP ����������� �� �Ţ  IP ������Ţ DNS ';
$string['auth_imapport'] = '�����Ţ���� IMAP �»��� ���  143 ���� 993.';
$string['auth_imaptitle'] = '�� IMAP server';
$string['auth_imaptype'] = '������ IMAP servers ���Ը�͹��ѵ���еԴ��������Ըմ��¡ѹ';
$string['auth_ldap_bind_dn'] = '����ҡ��ͧ����� bind-user ���ͤ�����Ҫԡ����� ����ö �кشѧ���仹��  \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = '���ʼ�ҹ����Ѻ bind-user.';
$string['auth_ldap_bind_settings'] = '��ҵ�駤��';
$string['auth_ldap_contexts'] = '�����ҷ�辺��Ҫԡ���� 㹡óշ����������������¡�ѹ��������ͧ���� \';\' �� \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = '�Դ�����Ҫԡ����ö���ҧ��ͤ����ͺ�Ѻ�ҧ����Ŵ��µ��ͧ�� 
�س�����繵�ͧ����ͤ�������� ldap_context-variable, Moodle �Ф�������ѵ��ѵ�';
$string['auth_ldap_creators'] = '�������Ҫԡ������Ѻ�Է���㹡�����ҧ��ѡ�ٵ������� ����ö��������¡������������ͧ���� \';\' ���ͤ��������¡�� �ѧ������ҧ  \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = '���͡ \"���\" �ҡ��ͧ��ûԴ�����ҹ��õ�Ǩ�ͺ�ѹ������آͧ���ʼ�ҹ������ LDAP 㹡����ҹ��� passwordexpiration ';
$string['auth_ldap_expiration_warning_desc'] = '�ӹǹ�ѹ����ͧ�����͹��Ҫԡ��ǧ˹�ҡ�͹������ʼ�ҹ���������';
$string['auth_ldap_expireattr_desc'] = '���ҹ��Ѻ����͵��Ժ�ǵ�ͧ ldap � asswordAxpirationTime';
$string['auth_ldap_graceattr_desc'] = '���ҹ��Ѻ����͵��Ժ�ǵ� gracelogin';
$string['auth_ldap_gracelogins_desc'] = '�Դ�����ҹ gracelogin ��ѧ�ҡ������ʼ�ҹ�������������Ҫԡ�ѧ����ö�������к��騹���� gracelogin ���դ���� 0 �Դ�����ҹ��ǹ����ҡ��ͧ�������к��ʴ���ͤ�����͹������ʼ�ҹ���������';
$string['auth_ldap_host_url'] = '�к� LDAP host ��  \'ldap://ldap.myorg.com/\' ����  \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_login_settings'] = '��駤�ҡ���������к�';
$string['auth_ldap_memberattribute'] = '�س���ѵԢͧ��Ҫԡ����ͧ����� ������  \'member\'';
$string['auth_ldap_objectclass'] = '����������¡Ѻ�������͡�ä�����Ҫԡ �»������Ǩе�駤����������ҧ�� objectClass=posixAccount  �¤�ҷ������� objectClass=* ��ҷ����ʴ��ҡ LDAP';
$string['auth_ldap_opt_deref'] = '�Ԩ�ó���ҵ�ͧ��èѴ��áѺ���ὧ�����㹡�ä������ҧ�� ���͡���㴤��˹�觵��仹�� \"���\" (LDAP_DEREF_NEVER) ���� \"��\" (LDAP_DEREF_ALWAYS) ';
$string['auth_ldap_passwdexpire_settings'] = '��駤���ѹ������آͧ����ʼ�ҹ LDAP';
$string['auth_ldap_preventpassindb'] = '���͡ \"��\" ���ͻ�ͧ�ѹ��������ʼ�ҹ�����㹰ҹ������ Moodle';
$string['auth_ldap_search_sub'] = '����� <> 0 ����ҡ��ͧ��� ������Ҫԡ��ҹ��Ǣ������ ';
$string['auth_ldap_server_settings'] = '��駤�� LDAP ���������';
$string['auth_ldap_update_userinfo'] = '�Ѿഷ��������Ҫԡ (����,���ʡ��,�������..) �ҡ LDAP �֧  Moodle. ������������  /auth/ldap/attr_mappings.php ';
$string['auth_ldap_user_attribute'] = 'attribute �����㹡�ä��Ҫ�����Ҫԡ ��ǹ�˭����  \'cn\'.';
$string['auth_ldap_user_settings'] = '��駤�ҡ�ä�����Ҫԡ';
$string['auth_ldap_user_type'] = '���͡�ԸըѴ����Ҫԡ���� LDAP ��ҹ����кض֧�Ըշ�����ʼ�ҹ��������� gracelogin ���件֧���������Ҫԡ�����蹡ѹ';
$string['auth_ldap_version'] = '��蹢ͧ LDAP ���������';
$string['auth_ldapdescription'] = '�Ըա��͹��ѵԡ����ҹ��ҹ  external LDAP server ����ҡ ���� ��� ���ʷ������ҹ�鹶١��ͧ Moodle �зӡ�����ҧ ��ª�����Ҫԡ����㹰ҹ������  ����Ŵѧ����� ����ö ��ҹ attribute �ͧ��Ҫԡ�ҡ LDAP  ��� ����ҷ���ͧ���� moodle ��ǧ˹��  ��ѧ�ҡ��� ������͡�Թ ����ա���� �����������ʼ�ҹ��ҹ�� ';
$string['auth_ldapextrafields'] = '��ͧ�����������������  �س����ö���͡�� ��ҷ���к� �������͹ �ҡ  <b>LDAP fileds</b><p>  ����ҡ �������ҧ ������ ������ա�ô֧�����Ũҡ LDAP �к������͡�� ��� default � moodle <p> ��� ����ͧ�ó� ��Ҫԡ����ö������䢤�ҵ�ҧ� �� �����ѧ�ҡ ��͡�Թ';
$string['auth_ldaptitle'] = '�� LDAP server';
$string['auth_manualdescription'] = '�Ըա�ù������͹حҵ�����Ҫԡ����ö���ҧ�ѭ����Ҫԡ���µ��ͧ�� ��蹤�� �����Ũ��繤�ŧ����¹��Ҫԡ���';
$string['auth_manualtitle'] = '�������к���ҹ��';
$string['auth_multiplehosts'] = '����ö�����ʵ����� � ���ŧ� �� host1.com;host2.com;host3.com';
$string['auth_nntpdescription'] = '�Ըչ���� ���� ������ʼ�ҹ��Ҷ١��ͧ������� ���� NNTP server ';
$string['auth_nntphost'] = 'NNTP server �� �Ţ IP  ����� DNS ';
$string['auth_nntpport'] = 'Server port (119 ����ǹ�˭�)';
$string['auth_nntptitle'] = '�� NNTP server';
$string['auth_nonedescription'] = '��Ҫԡ����ö ��͡�Թ ������ҧ account ����ѹ�� ������ͧ���Ըա�â�͹��ѵ� �������Ҫԡ�ҡ�ҹ�����Ź͡ ����ͧ�׹�ѹ��ҹ�����  ������ѧ㹡�����͡����ո� ��� ���� ��� �к�������ʹ��¹���չ��� ';
$string['auth_nonetitle'] = '����ͧ��͹��ѵ� ͹حҵ�ѹ��';
$string['auth_pamdescription'] = '�Ըչ���繡���� PAM 㹡����Ҷ֧���ͼ���麹��������� �س���繵�ͧ�Դ��� <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a>���ͷ���������Ź��';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = '���ʼ�ҹ�ͧ�س���ѧ��������ص�ͧ�������¹��������';
$string['auth_passwordwillexpire'] = '���ʼ�ҹ�ͧ�س�����������ա $a �ѹ��ͧ�������¹���ʼ�ҹ�͹�����������';
$string['auth_pop3description'] = '�礪��� ���������Ҷ١��ͧ������� ��ҹ�ҧ  POP3 server ';
$string['auth_pop3host'] = 'POP3 server �� �Ţ IP  ����� DNS ';
$string['auth_pop3mailbox'] = '���ͧ͢���ͧ�����·���ͧ��õԴ��� (���Ԥ�� INBOX)';
$string['auth_pop3port'] = 'Server port (110 �·����)';
$string['auth_pop3title'] = '�� POP3 server';
$string['auth_pop3type'] = '�������ͧ��������� ������������ ��  certificate security ������͡ pop3cert.';
$string['auth_shib_convert_data'] = '�������¹�ŧ������ API';
$string['auth_shib_convert_data_description'] = '�س����ö�� API 㹡����䢢����ŵ�ҧ � ����͹�ҡ Shibboleth ��ҹ <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> �ҡ��ͧ��â������������';
$string['auth_shib_convert_data_warning'] = '��辺������ͧ��������������ö��ҹ��ҡ��кǹ���������������';
$string['auth_shib_instructions'] = '����ҡʶҺѹ�ͧ��ҹʹѺʹع�����ҹ Shibboleth ��ҹ����ö �� <a href=\"$a\">�������к���ҹ Shibboleth</a> �ҡ�������ö�������к����Ըջ���������';
$string['auth_shib_instructions_help'] = '͸Ժ���Ըա���������к�����Ҫԡ����͸Ժ��  Shibboleth ����Ըա�ôѧ����Ǩй���ʴ��˹�ҡ���������к����ǹ�ͧ���й� �Ըմѧ����Ǥ�è����ԧ����ѧ ���觢����ŷ���ͧ�ѹ���� Shibboleth ���з�˹�ҷ�����Ҫԡ��ѧ \"<b>$a</b>\" ���������Ҫԡ Shibboleth ����ö�������к�� Moodle  �ҡ�������ҧ����к����ʴ��Ըա����ҹ��������';
$string['auth_shib_only'] = 'Shibboleth  ��ҹ��';
$string['auth_shib_only_description'] = '���͡��ҹ���ҡ��ͧ�������͹��ѵԼ�ҹ Shibboleth ';
$string['auth_shib_username_description'] = '���ͧ͢����� \"���ͼ����\" � Shibboleth ������������������ Moodle';
$string['auth_shibboleth_login'] = '����������к���ҹ Shibboleth ';
$string['auth_shibboleth_manual_login'] = '�������к����µ��ͧ';
$string['auth_shibbolethdescription'] = '���Ըչ���ҡ��ͧ������ҧ��������͹��ѵ����� a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a><br> ��ҹ������������� <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> ����ǡѺ�Ըա�õ�駤�� Moodle �Ѻ Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth ';
$string['auth_updatelocal'] = '�Ѿഷ���������� ';
$string['auth_updatelocal_expl'] = '<p><b>�Ѿഷ���������� :</b> �ҡ�Դ��ҹ ��Ŵ�ͧ���ҧ㹰ҹ��������¹͡���ա���Ѿഷ�ء���駷����Ҫԡ�������к������ա�� synchronise �ҹ��������Ҫԡ  㹡óշ�����͡����Ѿഷ���������㹤�÷ӡ����͡��Ŵ�������</p>';
$string['auth_updateremote'] = '�Ѿഷ��������¹͡';
$string['auth_updateremote_expl'] = '<p><b>�Ѿഷ��������¹͡:</b>�ҡ�Դ��ҹ�ҹ��������¹͡�����Ѻ����Ѿഷ�ء���駷����Ҫԡ�ӡ������¹�ŧ����¹����ѵ� ��÷ӡ���Դ��ͤ��Ŵ��ҡ͹حҵ���ӡ�����</p>';
$string['auth_updateremote_ldap'] = '<p><b>�����˵�:</b> �Ѿഷ������ LDAP �ҡ��¹͡���繵�ͧ��駤�� binddn ��� bindpw ������Է���bind-user 㹡���������¹����ѵ� ��һѨ�غѹ���������������ö���͵��Ժ�ǵ����µ����Шзӡ�÷�駤�ҷ�����������㹡���Ѿഷ </p>';
$string['auth_user_create'] = '͹حҵ���������Ҫԡ��';
$string['auth_user_creation'] = '͹حҵ�����Ҫԡ���������ö���ҧ�ѭ����Ҫԡ��еͺ�׹�ѹ�� ���͹حҵ �ô�������任�Ѻ���к� moodule-specific ������͡ user creation ����';
$string['auth_usernameexists'] = '����Ҫԡ���͹����к����� ��س����͡��������';
$string['authenticationoptions'] = '�Ըա��͹��ѵԡ������Ҫԡ';
$string['authinstructions'] = '�س����ö�������šѺ��Ҫԡ ����й��Ըա���� ��ҹ��ǹ��� �������Ҫԡ��Һ��� username ��� password �ͧ����ͧ������� ��ͤ������س�к����ǹ���л�ҡ� � ˹����͡�Թ  ����ҡ�س�������ҧ��� ��������Ըա�����ҡ�';
$string['changepassword'] = '����¹���� URL';
$string['changepasswordhelp'] = '�س����ö�к��ԧ�� �����Ҫԡ����ö������¹ ���� �� ���� ��� password�� ������ա����� �ԧ��ѧ����Ǩй���Ҫԡ��ѧ˹�� ��͡�Թ ���˹�Ң�������ǹ��� ���ҡ���������� �����ѧ����Ǩ�����ҡ�';
$string['chooseauthmethod'] = '���͡�Ըա��͹��ѵ�';
$string['createchangepassword'] = '���ҧ�ҡ���� -�ѧ�Ѻ�������¹�ŧ';
$string['createpassword'] = '���ҧ�ҡ����';
$string['forcechangepassword'] = '�ѧ�Ѻ�������¹���ʼ�ҹ';
$string['forcechangepassword_help'] = '�ѧ�Ѻ��Ҫԡ�������¹���ʼ�ҹ㹤��駵��价���������к�';
$string['forcechangepasswordfirst_help'] = '�ѧ�Ѻ�����Ҫԡ����¹���ʼ�ҹ㹤����á����������к�';
$string['guestloginbutton'] = '������͡�Թ㹰ҹкؤ�ŷ����';
$string['infilefield'] = '��Ŵ����ͧ�������';
$string['instructions'] = '�Ը���';
$string['locked'] = '��ͤ���';
$string['md5'] = '�������Ẻ MD5  ';
$string['passwordhandling'] = '��èѴ��ÿ�Ŵ����ʼ�ҹ';
$string['plaintext'] = '���˹ѧ��͸�����(Plain Text)';
$string['shib_no_attributes_error'] = '������͹��ҹ�м�ҹ���͹��ѵ�Ẻ Shibboleth �� moodle ������Ѻ��õ�駤��� � �ͧ��Ҫԡ��سҵ�Ǩ�ͺ��� Identity Provider  ������ҷ����� ($a) ��� Service Provider �����ҹ moodle ����������� ����������������ͧ���������ѧ�����';
$string['shib_not_all_attributes_error'] = 'moodle ��ͧ��á�õ�駤�� Shibboleth �����͹������ҡ���Ҵѧ�����㹡óբͧ�س ��ҹ�鹤�� $a  ��سҵԴ�������������ͧ��������������ԡ������';
$string['shib_not_set_up_error'] = '���͹��ѵԼ�ҹ Shibboleth  ������Ѻ��õԴ������١��ͧ ����֡�� <a href=\"README.txt\">README</a> ����Ѻ�Ըա�õԴ���';
$string['showguestlogin'] = '�س����ö��͹�����ʴ�������͡�Թ㹰ҹкؤ�ŷ�����˹����͡�Թ�������к�';
$string['stdchangepassword'] = '��˹�һ���㹡������¹���ʼ�ҹ';
$string['stdchangepassword_expl'] = '㹡óշ�����к����͹��ѵԨҡ��¹͡���͹حҵ�������¹���ʼ�ҹ moodle  ����駤�ҹ���� \"��\" ��ҹ��е�駤�ҷѺ�Ѻ�ԧ�� \"����¹���ʼ�ҹ\"';
$string['stdchangepassword_explldap'] = '�����˵� : ���й�����ҹ�� LDAP ��ҹ����������Ẻ SSL (ldaps://) 㹡óշ���� LDAP �������������ѡ';
$string['unlocked'] = '�Դ��ͤ';
$string['unlockedifempty'] = '�Դ��ͤ�ҡ����դ��';
$string['update_never'] = '�����';
$string['update_oncreate'] = '��������ҧ����';
$string['update_onlogin'] = '������������к��ء����';
$string['update_onupdate'] = '������ա���Ѿഷ';

?>
