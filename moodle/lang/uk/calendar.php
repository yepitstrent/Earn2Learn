<?PHP // $Id: calendar.php,v 1.1.4.3 2006/02/06 10:00:40 moodler Exp $ 
      // calendar.php - created with Moodle 1.3.1 + (2004052501)


$string['april'] = '������';
$string['august'] = '�������';
$string['calendar'] = '��������';
$string['calendarheading'] = '�������� $a';
$string['clickhide'] = '���������, ��� ���������';
$string['clickshow'] = '���������, ��� ��������';
$string['confirmeventdelete'] = '�� ��������, �� ������ �������� �� ����?';
$string['courseevents'] = '��䳿 � ����';
$string['dayview'] = '���� ���������';
$string['daywithnoevents'] = '�������� �� �������� ������ ����';
$string['december'] = '�������';
$string['default'] = '�� �������������';
$string['deleteevent'] = '�������� ��䳿';
$string['detailedmonthview'] = '���������  ������� �����';
$string['durationminutes'] = '��������� � ��������';
$string['durationnone'] = '�������� ���������';
$string['durationuntil'] = '��';
$string['editevent'] = '����������� ��䳿';
$string['errorbeforecoursestart'] = '��������� ����������� ���� ��� ���� ������� �����';
$string['errorinvaliddate'] = '����������� ����';
$string['errorinvalidminutes'] = '��������� ��������� � �������� (�������������� ����� �� 1 �� 999).';
$string['errorinvalidrepeats'] = '��������� ������� ���� (�������������� ����� �� 1 �� 99).';
$string['errornodescription'] = '���� ����\'�������';
$string['errornoeventname'] = '��\'� ����\'������ �� ���� ���������';
$string['eventdate'] = '����';
$string['eventdescription'] = '����';
$string['eventduration'] = '���������';
$string['eventendtime'] = '��� ��������� ��䳿';
$string['eventinstanttime'] = '���';
$string['eventkind'] = '��� ��䳿';
$string['eventname'] = '��\'�, �����';
$string['eventrepeat'] = '�������� / �������� ����������';
$string['eventsfor'] = '��䳿 $a';
$string['eventstarttime'] = '��� �������';
$string['eventtime'] = '���';
$string['eventview'] = '��������� ��䳿';
$string['expired'] = '����� ���������';
$string['explain_lookahead'] = '��� ������������� (�����������) ������� ����, � �� ������� ����������� �������� ����, ��� ���� ��������� �� ������������. ';
$string['explain_maxevents'] = '��� ������������� ����������� ������� ������������� ����, �� ������ ���� ��������. ���� �� ������� ��� ������ �������, ������ ���� ������� ������ ���� �� ������ ������.';
$string['explain_startwday'] = '���������� ����� ������ �������� �������� ���, ���� �� ��� �������.';
$string['explain_timeformat'] = '�� ������ ������, �� �������� ��� - � ������������������� �� �������� ������. ���� �� ������ \"�� �������������\", ��� ������ ���� ����������� ����������� �������� �� ������ ���� ����.';
$string['february'] = '�����';
$string['fri'] = '�\'������';
$string['friday'] = '�\'������';
$string['globalevents'] = '�������� ��䳿';
$string['gotocalendar'] = '����������� ��������';
$string['groupevents'] = '��䳿 � ����';
$string['hidden'] = '����������';
$string['january'] = 'ѳ����';
$string['july'] = '������';
$string['june'] = '�������';
$string['manyevents'] = '��� � $a';
$string['march'] = '��������';
$string['may'] = '�������';
$string['mon'] = '��������';
$string['monday'] = '��������';
$string['monthlyview'] = '̳������ ��������';
$string['newevent'] = '��� ��䳿';
$string['noupcomingevents'] = '���� ����� ����';
$string['november'] = '��������';
$string['october'] = '�������';
$string['oneevent'] = '1 ����';
$string['pref_lookahead'] = '���������� �������� �������� ����';
$string['pref_maxevents'] = '����������� ����������� ����';
$string['pref_startwday'] = '������ ���� �����';
$string['pref_timeformat'] = '������ ������ ����';
$string['preferences'] = '���������';
$string['preferences_available'] = '���� ������ ���������';
$string['repeatnone'] = '�� �����������';
$string['repeatweeksl'] = '����������� �������, ��������� �������';
$string['repeatweeksr'] = '��䳿';
$string['sat'] = '������';
$string['saturday'] = '������';
$string['september'] = '��������';
$string['shown'] = '��������';
$string['spanningevents'] = '��� � ������ ��������';
$string['sun'] = '�����';
$string['sunday'] = '�����';
$string['thu'] = '������';
$string['thursday'] = '������';
$string['timeformat_12'] = '������������������';
$string['timeformat_24'] = '�������';
$string['today'] = '��������';
$string['tomorrow'] = '������';
$string['tt_deleteevent'] = '�������� ����';
$string['tt_editevent'] = '���������� ����';
$string['tt_hidecourse'] = '��䳿 � ���� ������ ��� ��������� (���������, ��� ���������)';
$string['tt_hideglobal'] = '�������� ��䳿 ������ ��� ��������� (���������, ��� ���������)';
$string['tt_hidegroups'] = '��� � ���� ������ ��� ��������� (���������, ��� ���������)';
$string['tt_hideuser'] = '��䳿 ������������ ������ ��� ��������� (���������, ��� ���������)';
$string['tt_showcourse'] = '��䳿 � ���� (���������, ��� ��������)';
$string['tt_showglobal'] = '������� ��䳿 ��������� (���������, ��� ��������)';
$string['tt_showgroups'] = '��䳿 � ���� ��������� (���������, ��� ��������)';
$string['tt_showuser'] = '�䳿 � ������������ ��������� (���������, ��� ��������)';
$string['tue'] = '³������';
$string['tuesday'] = '³������';
$string['typecourse'] = '���� � ����';
$string['typegroup'] = '���� � ����';
$string['typesite'] = '���� �� ����';
$string['typeuser'] = '���� � �����������';
$string['upcomingevents'] = '������������ ��䳿';
$string['userevents'] = '��� � ������������';
$string['wed'] = '������';
$string['wednesday'] = '������';
$string['yesterday'] = '�����';

?>
