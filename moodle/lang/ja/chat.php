<?PHP // $Id: chat.php,v 1.19.2.4 2006/02/06 09:59:55 moodler Exp $ 
      // chat.php - created with Moodle 1.6 development (2005101200)


$string['beep'] = '�ӡ���';
$string['chatintro'] = '�Ҳ�ʸ';
$string['chatname'] = '����åȥ롼��̾';
$string['chatreport'] = '����åȥ��å����';
$string['chattime'] = '����Υ���åȥ�����';
$string['configmethod'] = '�̾�Υ���åȥ᥽�åɤǤϡ����饤����Ȥ����Ū�˥����Ф˥��������������Ƥ򹹿����ޤ������Υ᥽�åɤ������ɬ�פȤ������ɤ��Ǥ�Ȥ����Ȥ��Ǥ��ޤ���������åȻ��üԤ�¿���ʤ�Х����Ф��Ф���¿�����ô�������ޤ��������Хǡ�������Ѥ�����ϡ�Unix�Υ����륢��������ɬ�פǤ������ڲ��ʥ���åȴĶ����󶡤��뤳�Ȥ��Ǥ��ޤ���';
$string['configoldping'] = '�桼���α������ʤ��ʤäƤ��顢�ɤ줯�餤�λ��� ( �ÿ� ) ���༼�����ȸ��ʤ��ޤ���? �����ñ�˾�¤Ǥ��ꡢ�̾���Ф�����®�����Ф���ޤ������ʤ��Υ����Фˤϡ����˾������ͤ����ꤹ��ɬ�פ�����ޤ����̾�Υ᥽�åɤ���Ѥ��Ƥ����硢2* chat_refresh_room ��꾮�����ͤ�<strong>���ꤷ�ʤ��Ǥ�������</strong>��';
$string['configrefreshroom'] = '�ɤ줯�餤�Υ����ߥ� ( �ÿ� ) �ǥ���åȥ롼����ե�å��夷�ޤ���?�������Τ򾮤�������Х���åȥ롼��ϥ쥹�ݥ󥹤��ɤ��褦�˸����ޤ�����¿���οͤ�����åȤ򤹤��硢�����Фˤ�������ô���礭���ʤ�ޤ���';
$string['configrefreshuserlist'] = '�ɤ줯�餤�Υ����ߥ� ( �ÿ� ) �ǥ桼���ꥹ�Ȥ��ե�å��夷�ޤ���?';
$string['configserverhost'] = '�����Хǡ���󤬲�ư���Ƥ���ۥ���';
$string['configserverip'] = '�嵭�ۥ���̾�˴ؤ���IP���ɥ쥹';
$string['configservermax'] = '���祯�饤����ȿ�';
$string['configserverport'] = '�ǡ����˻��Ѥ��륵���ФΥݡ���';
$string['currentchats'] = '�����ƥ��֡�����åȥ��å����';
$string['currentusers'] = '���ߤΥ桼��';
$string['deletesession'] = '���å�����������';
$string['deletesessionsure'] = '�����ˤ��Υ��å����������Ƥ������Ǥ���?';
$string['donotusechattime'] = '����åȻ��֤�������ʤ�';
$string['enterchat'] = '����åȥ롼�������';
$string['errornousers'] = '�桼�������Ĥ���ޤ���Ǥ���!';
$string['explaingeneralconfig'] = '����������ϡ�<strong>���</strong>ȿ�Ǥ���ޤ���';
$string['explainmethoddaemon'] = '����������ϡ�����åȥ᥽�åɤˡ�Chat�����Хǡ����פ����򤷤���<strong>�Τ�</strong>�ƶ����ޤ���';
$string['explainmethodnormal'] = '����������ϡ�����åȥ᥽�åɤˡ֥Ρ��ޥ�᥽�åɡפ����򤷤���<strong>�Τ�</strong>�ƶ����ޤ���';
$string['generalconfig'] = '��������';
$string['helpchatting'] = '����åȥإ��';
$string['idle'] = '�����ɥ�';
$string['messagebeepseveryone'] = '$a �������˥ӡ��פ��ޤ�!';
$string['messagebeepsyou'] = '$a �����ʤ��˥ӡ��פ��ޤ���!';
$string['messageenter'] = '$a ���������ޤ�����';
$string['messageexit'] = '$a ���༼���ޤ�����';
$string['messages'] = '��å�����';
$string['methoddaemon'] = 'Chat�����Хǡ����';
$string['methodnormal'] = '�Ρ��ޥ�᥽�å�';
$string['modulename'] = '����å�';
$string['modulenameplural'] = '����å�';
$string['neverdeletemessages'] = '��å������������ʤ�';
$string['nextsession'] = '���Υ������塼�륻�å����';
$string['noguests'] = '�����ȤϤ��Υ���åȤ����ѤǤ��ޤ���';
$string['nomessages'] = '��å�����������ޤ���';
$string['repeatdaily'] = '����Ʊ�����֤�';
$string['repeatnone'] = '�����֤�̵�� - ���ꤷ�����֤ˤΤ߸���';
$string['repeattimes'] = '���å����η����֤�';
$string['repeatweekly'] = '�轵Ʊ�����֤�';
$string['savemessages'] = '���å�������¸����';
$string['seesession'] = '���Υ��å����򸫤�';
$string['sessions'] = '����åȥ��å����';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = '���٤Ƥοͤ����Υ��å����򸫤뤳�Ȥ��Ǥ���';
$string['viewreport'] = '���Υ���åȥ��å�����ɽ��';

?>
