<?PHP // $Id: auth.php,v 1.3.2.3 2006/02/06 09:59:29 moodler Exp $ 
      // auth.php - created with Moodle 1.4.1+ (2004083101)


$string['auth_dbdescription'] = '��� ���� ����� �� �������� ������ ���� ����� �� �������� �� ��������������� ����� � ������. ��� �������� � ���, ������������ �� ������� ������ ���� ���� �� ���� �������� � Moodle.';
$string['auth_dbextrafields'] = '���� ������ �� �� ������������. ������ �� ��������� ����� �� �������� �� Moodle, ��������� ������� �� �����������, � ���������� �� <B>�������� ���� �����</B>, ����� ����������� ���. <P>��� �� ��������� ����, �� ����� ���������� ����������� �� ������������.<P>� � ����� ������, ������������� ����� �� ���������� ���� ������, ���� ���� ������� � ���������.';
$string['auth_dbfieldpass'] = '��� �� ������, ��������� ��������';
$string['auth_dbfielduser'] = '��� �� ������, ��������� ��������������� �����';
$string['auth_dbhost'] = '��� �� ���������, ���������� ������ �����';
$string['auth_dbname'] = '��� �� ������ �����';
$string['auth_dbpass'] = '������, ������������� �� ������� ���';
$string['auth_dbpasstype'] = '������ �� ������, ��������� ��������. ������� MD5 � ������� ��� ��������� � ����� ����� ������� web ����������, ���� PostNuke.';
$string['auth_dbtable'] = '��� �� ��������� � ������ �����';
$string['auth_dbtitle'] = '���������� �� ������ ���� �����';
$string['auth_dbtype'] = '��� �� ������ �����. (�� ������ ����������, ����� <a href=\"../lib/adodb/readme.htm#drivers\">�������������� �� ADOdb</a>.)';
$string['auth_dbuser'] = '������������� ��� �� ������ �� ������ �� ������ �����';
$string['auth_emaildescription'] = '�������������� �� ���������� ���� � ������ �� �������������� �� ������������. ������ ����������� �� ����������, ��������� ���� ��� � ������, �� ����������� �� ����� �� ������� ����� �� ������������. � ������� �� ������� �������� ������ ��� ��������, �� ����� ����������� ���� �� �������� ���� ������. ��� �������� �������� � ���������, ��������������� ��� � �������� �� ��������� ��� �����������, ��������� � ������ ����� �� Moodle.';
$string['auth_emailtitle'] = '������������� �� �-����';
$string['auth_fccreators'] = '������ �� �������, ����� ������� ����� �� �������� ���� �������. �������� ����� � ������� �� �������� � \';\'. ������� ������ �� �� �������� ����� ����� �� FirstClass �������. ��������� � ������������ ��� �����/������ �����.';
$string['auth_fcdescription'] = '���� ����� �������� FirstClass ������ �� �������� �� ��������������� ����� � ������.';
$string['auth_fcfppport'] = '���� (���-����� � 3333)';
$string['auth_fchost'] = '������� �� FirstClass �������. ����������� IP �����  ��� DNS ���.';
$string['auth_fcpasswd'] = '������ �� ������ ������.';
$string['auth_fctitle'] = '���������� �� FirstClass ������';
$string['auth_fcuserid'] = '������������� �� ���������� �� FirstClass �������, ���� \'Subadministrator\' ������������.';
$string['auth_imapdescription'] = '���� ����� �������� IMAP ������ �� �������� �� ��������������� ����� � ������.';
$string['auth_imaphost'] = '����� �� IMAP �������. ����������� IP ����� ��� DNS ���.';
$string['auth_imapport'] = '���� �� IMAP �������. (���������� 143 ��� 993.)';
$string['auth_imaptitle'] = '���������� �� IMAP ������';
$string['auth_imaptype'] = '��� �� IMAP �������. IMAP ��������� ����� �� ���� �������� ������ �� ���������� � �����������.';
$string['auth_ldap_bind_dn'] = '��� ������ �� ���������� bind-user, �� �� ������� �����������, ������� �� ���. ���� �� ���� �� \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = '������ �� bind-user.';
$string['auth_ldap_contexts'] = '������ �� ������� (contexts), ������ �� ������� ��������������� �������. ������������ � \';\'. ������: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = '��� ��������� ����������� �� ����������� �� ���� ������������ �� �-����, ������� ������� (context), ������ �� �� �������� �������������. �� ������ ����� �� ����������� � ��-����� ���� ����������� �� �� �������� �� ����������. ����������, �� �� � ����� �� �������� ���� ����� � ������������ ldap_context. ��� ���� Moodle ����������� �� �� ��������.';
$string['auth_ldap_creators'] = '������ �� �������, ����� ������� ����� �� �������� ���� �������. ������������ � \';\'. ������: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = '������� URL ������ �� LDAP �������. ��������: \'ldap://ldap.myorg.com/\' ��� \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_version'] = '�������� �� ��������� LDAP, ���������� �� �������.';
$string['auth_ldapdescription'] = '���� ����� ��������� ������������� �� ������ �� ������ LDAP ������. ��� ��������� ��� � ������ �� ��������� �� LDAP �������, Moodle ������� ��� ���������� � ������ ���� �����. ���� ����� ���� �� ������ ���������� �������� �� LDAP ������� � ����������� �� ������� ����������� ������ �� ������ ����� �� Moodle. ����������� �� ������������� �� LDAP �� ��������� ���� ������, ���� ���� ���� �� �������� ������ ����� �� Moodle.';
$string['auth_ldapextrafields'] = '���� ������ �� �� ������������. ������ �� ������� ������������� �� ���������� �� ����� �� �������� � ������ ����� �� Moodle �� <B>LDAP ���������</B>. ��� �� ������� ����, �� ����� ���������� �������������� �� ��������� �� Moodle.<P>� � ����� ������, ������������� ���� ���������� �� ���������� ��������, ���� ���� ������� � ���������.';
$string['auth_ldaptitle'] = '���������� �� LDAP ������';
$string['auth_manualdescription'] = '���� ����� �������� ����������� �� ���� ������� �� ������ �����������. ������ ������� ������ �� ����� ��������� �� ���� �� �������������.';
$string['auth_manualtitle'] = '����� ��������� �� ������ �������';
$string['auth_multiplehosts'] = '����� �� ����� ������� ��������� ������� ��� ������ (����.:host1.com;host2.com;host3.com ��� xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = '��� ���� ����� �� �������� NNTP ������, �� ������������� �� ��������� ������������� ����� � ������.';
$string['auth_nntphost'] = '����� �� NNTP �������. ������ �� ���������� IP ����� ��� DNS ���.';
$string['auth_nntpport'] = '���� (���-����� 119)';
$string['auth_nntptitle'] = '���������� �� NNTP ������';
$string['auth_nonedescription'] = '������������� ����� �� �������� ���� ������� ���������, ��� �� � ���������� ���������� �� ������ ������ ��� ������������ �� �-����. ���������� � ���� �����. ����� �� � ���������� �� ��������� �� ���������� ��� ����������� � ��� ����������������, ����� ���� �� ����������.';
$string['auth_nonetitle'] = '��� ����������';
$string['auth_pop3description'] = '���� ����� �������� POP3 ������ �� �������� ����������� �� ��������������� ����� � ������.';
$string['auth_pop3host'] = '����� �� POP3 �������. ������ �� ���������� IP ����� ��� DNS ���.';
$string['auth_pop3mailbox'] = '��� �� ���������� �����, � ����� �� ���� ���������� ������ (����������� INBOX).';
$string['auth_pop3port'] = '���� (���-����� 110 ��� 995 ��� �� ������ SSL)';
$string['auth_pop3title'] = '���������� �� POP3 ������';
$string['auth_pop3type'] = '��� �� ������� (��� ������ ������ �������� ������� �����������, �������� pop2cert)';
$string['auth_user_create'] = '���������� �� ��������� �� �����������';
$string['auth_usernameexists'] = '��������� ������������� ��� ���� � ������������! ����, �������� �� �����.';
$string['authenticationoptions'] = '��������� �� ���������������';
$string['authinstructions'] = '��� ������ �� �������� ������������ �� ��� ������������� ������� ��������������� ����� � ������. ���� ����� �� �� ������� �� ���������� �� ������� � ���������. ��� �� ��������� ����, ���� �� ����� ��������� ����������.';
$string['changepassword'] = '����� �� ������� �� ������';
$string['changepasswordhelp'] = '��� ������ �� ������� �����, ������ ������������� ����� �� ����������� ��� �������� ��������������� �� ��� � ������, � ������ �� �� �� ���������. ��� ������� �����, ��� �� � �������� ��� ������� �� ����� �� ���������� �� ������� � ���������. ��� �������� ������ ������, ������� ���� �� ���� ��������.';
$string['chooseauthmethod'] = '����� �� ����������:';
$string['guestloginbutton'] = '����� �� ���� ���� ����';
$string['instructions'] = '����������';
$string['md5'] = 'MD5 ���������';
$string['plaintext'] = '��������� �����';
$string['showguestlogin'] = '������ �� ��������/��������� ����������� �� ������ �� ���� ���� ����.';
$string['auth_common_settings'] = "Common settings";
$string['auth_data_mapping'] = "Data mapping";
$string['auth_editlock'] = "Lock value";
$string['auth_editlock_expl'] = "<p><b>Lock value:</b> If enabled, will prevent Moodle users and admins from editing the field directly. Use this option if you are maintaining this data in the external auth system. </p>";
$string['auth_ldap_bind_settings'] = "Bind settings";
$string['auth_ldap_expiration_desc'] = "Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP";
$string['auth_ldap_expiration_warning_desc'] = "Number of days before password expiration warning is issued.";
$string['auth_ldap_expireattr_desc'] = "Optional: overrides ldap-attribute what stores password expiration time asswordAxpirationTime";
$string['auth_ldap_graceattr_desc'] = "Optional: Overrides  gracelogin attribute";
$string['auth_ldap_gracelogins_desc'] = "Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.";
$string['auth_ldap_login_settings'] = "Login settings";
$string['auth_ldap_memberattribute'] = "Optional: Overrides user member attribute, when users belongs to a group. Usually 'member'";
$string['auth_ldap_objectclass'] = "Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.";
$string['auth_ldap_opt_deref'] = "Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS) ";
$string['auth_ldap_passwdexpire_settings'] = "LDAP password expiration settings.";
$string['auth_ldap_search_sub'] = "Put value <> 0 if  you like to search users from subcontexts.";
$string['auth_ldap_server_settings'] = "LDAP server settings";
$string['auth_ldap_update_userinfo'] = "Update user information (firstname, lastname, address..) from LDAP to Moodle.  Specify \"Data mapping\" settings as you need.";
$string['auth_ldap_user_attribute'] = "Optional: Overrides the attribute used to name/search users. Usually 'cn'.";
$string['auth_ldap_user_settings'] = "User lookup settings";
$string['auth_ldap_user_type'] = "Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work. ";
$string['auth_pamdescription'] = "This method uses PAM to access the native usernames on this server. You have to install <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> in order to use this module.";
$string['auth_pamtitle'] = "PAM (Pluggable Authentication Modules)";
$string['auth_passwordisexpired'] = "Your password is expired. Do you want change your password now?";
$string['auth_passwordwillexpire'] = "Your password will expire in \$a days. Do you want change your password now?";
$string['auth_updatelocal'] = "Update local data";
$string['auth_updatelocal_expl'] = "<p><b>Update local data:</b> If enabled, the field will be updated (from external auth) every time the user logs in or there is a user synchronization. Fields set to update locally should be locked.</p>";
$string['auth_updateremote'] = "Update external data";
$string['auth_updateremote_expl'] = "<p><b>Update external data:</b> If enabled, the external auth will be updated when the user record is updated. Fields should be unlocked to allow edits.</p>";
$string['auth_updateremote_ldap'] = "<p><b>Note:</b> Updating external LDAP data requires that you set binddn and bindpw to a bind-user with editing privileges to all the user records. It currently does not preserve multi-valued attributes, and will remove extra values on update. </p>";
$string['auth_user_creation'] = "New (anonymous) users can create user accounts on the external authentication source and confirmed via email. If you enable this , remember to also configure module-specific options for user creation.";
$string['forcechangepassword'] = "Force change password";
$string['forcechangepassword_help'] = "Force users to change password on their next login to Moodle.";
$string['forcechangepasswordfirst_help'] = "Force users to change password on their first login to Moodle.";
$string['stdchangepassword'] = "Use standard Change Password Page";
$string['stdchangepassword_expl'] = "If the external authentication system allows password changes through Moodle, switch this to Yes. This setting overrides 'Change Password URL'.";
$string['stdchangepassword_explldap'] = "NOTE: It is recommended that you use LDAP over an SSL encrypted tunnel (ldaps://) if the LDAP server is remote.";

?>