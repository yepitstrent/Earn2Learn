<?PHP // $Id: calendar.php,v 1.8.2.4 2006/02/06 09:59:26 moodler Exp $ 
      // calendar.php - created with Moodle 1.6 development (2005052400)


$string['calendar'] = '�����';
$string['calendarheading'] = '$a �����';
$string['clickhide'] = '���� �������';
$string['clickshow'] = '���� �����';
$string['confirmeventdelete'] = '�� ��� ����� ������ ���� ��� �����';
$string['courseevents'] = '����� ������ �������';
$string['dayview'] = '������ �����';
$string['daywithnoevents'] = '�� ���� ����� ���� �����';
$string['default'] = '�������';
$string['deleteevent'] = '���� �����';
$string['detailedmonthview'] = '������ ����� ����';
$string['durationminutes'] = '����� ��������';
$string['durationnone'] = '���� ��� �����';
$string['durationuntil'] = '���';
$string['editevent'] = '����� ���';
$string['errorbeforecoursestart'] = '�� ���� ����� ��� ��� ����� ���� ������ �������';
$string['errorinvaliddate'] = '����� ��� ����';
$string['errorinvalidminutes'] = '��� ����� �������� ���� ���� ��� �� ��� 1-99';
$string['errorinvalidrepeats'] = '������ ������� ���� ���� ��� �� ��� 1-99';
$string['errornodescription'] = '����� �����';
$string['errornoeventname'] = '����� �����';
$string['eventdate'] = '�����';
$string['eventdescription'] = '���';
$string['eventduration'] = '��� �����';
$string['eventendtime'] = '��� ��������';
$string['eventinstanttime'] = '���';
$string['eventkind'] = '��� �����';
$string['eventname'] = '���';
$string['eventrepeat'] = '�����';
$string['eventsfor'] = '$a �����';
$string['eventstarttime'] = '��� ������';
$string['eventtime'] = '���';
$string['eventview'] = '������ �����';
$string['expired'] = '�����';
$string['explain_lookahead'] = '���� ��� ��� (���� ������) ������ ���������� ���� ����� ������ ����� ������. ������� ���� ������ ��� ��� ������� �� ���� ������ �����. ������ ������ <strong> �� ���� ���� </strong> ������ �� ������� ���� ������ ���� ��� ����� ������. �� ��� ������ �� ������� ������� (���� �� ���� ������ ������ ������� �������) �� ������� ������� ������ �� ����.';
$string['explain_maxevents'] = '���� ��� ���� ������ ���� ������� ������� ���� ���� ����� ����. �� ��� ������� ��� ���� ������ ��� ������� ����� ���� ������ ����� ���� ��� ������.';
$string['explain_persistflt'] = '�� �� ����� ��� ������ϡ ���������� ���� ��� ������� ����� ����������� �� ��� ���� ���� ��� ������.';
$string['explain_startwday'] = '������ ������� ����� ������ ������ ���� ������ ����';
$string['explain_timeformat'] = '������ ������ ����� ���� ���������� 12 �� 24 ����. �� ��� ������� ����� \"���������\" ����� ���� ������ ������� ��� ����� ��������� �� ������.';
$string['fri'] = '������';
$string['friday'] = '������';
$string['globalevents'] = '����� �����';
$string['gotocalendar'] = '���� ��� �������';
$string['groupevents'] = '����� ������';
$string['hidden'] = '����';
$string['manyevents'] = '$a �����';
$string['mon'] = '�������';
$string['monday'] = '�������';
$string['monthlyview'] = '������  �����';
$string['newevent'] = '��� ����';
$string['noupcomingevents'] = '�� ���� ����� �����';
$string['oneevent'] = '��� ����';
$string['pref_lookahead'] = '������ ������� �������';
$string['pref_maxevents'] = '���� ������ ������� �������';
$string['pref_persistflt'] = '���� ���� ���������';
$string['pref_startwday'] = '��� ���� �������';
$string['pref_timeformat'] = '���� ��� �����';
$string['preferences'] = '�������';
$string['preferences_available'] = '�������� �������';
$string['repeateditall'] = '��� �������� ��� �� $a ������� �� ��� ������ ��������.';
$string['repeateditthis'] = '��� ��� �������� ��� ��� ����� ���';
$string['repeatnone'] = '�� �����';
$string['repeatweeksl'] = '��� �������� ���� ������';
$string['repeatweeksr'] = '�����';
$string['sat'] = '�����';
$string['saturday'] = '�����';
$string['shown'] = '����';
$string['spanningevents'] = '������ �������';
$string['sun'] = '�����';
$string['sunday'] = '�����';
$string['thu'] = '������';
$string['thursday'] = '������';
$string['timeformat_12'] = '12 ���� (�/�)';
$string['timeformat_24'] = '24 ����';
$string['today'] = '�����';
$string['tomorrow'] = '����';
$string['tt_deleteevent'] = '���� ���';
$string['tt_editevent'] = '����� ���';
$string['tt_hidecourse'] = '����� ������ ������� ������ (���� ���������) ';
$string['tt_hideglobal'] = '������� ������� ������ (���� ���������) ';
$string['tt_hidegroups'] = '����� �������� ������ (���� ���������) ';
$string['tt_hideuser'] = '����� �������� ������ (���� ���������)';
$string['tt_showcourse'] = '����� ������ ������� ����� (���� ������)';
$string['tt_showglobal'] = '������� ������� ����� (���� ������)';
$string['tt_showgroups'] = '����� ��������  ����� (���� ������)';
$string['tt_showuser'] = '����� �������� ����� (���� ������)';
$string['tue'] = '��������';
$string['tuesday'] = '��������';
$string['typecourse'] = '��� ���� �����';
$string['typegroup'] = '��� ������';
$string['typesite'] = '��� ������';
$string['typeuser'] = '��� ��������';
$string['upcomingevents'] = '������� �������';
$string['userevents'] = '����� ��������';
$string['wed'] = '��������';
$string['wednesday'] = '��������';
$string['yesterday'] = '���';
$string['youcandeleteallrepeats'] = '��� ����� �� ��� �� ����� ����� ������. ������ ��� ��� ����� ��ء �� �� $a ������� �� ��� ������ �����';

?>
