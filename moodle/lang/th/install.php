<?PHP // $Id: install.php,v 1.3.2.5 2006/02/06 10:00:39 moodler Exp $ 
      // install.php - created with Moodle 1.6 development (2005101200)


$string['admindirerror'] = '��á���� admin ����к����١��ͧ';
$string['admindirname'] = '��á���� admin';
$string['admindirsetting'] = '�������ʵ�ӹǹ���·���� /admin  㹡�õԴ����к��Ǻ������䫵������� ����繪������ǡѺ˹�Ҽ������к�� moodle  �Ը���ա����§�ѭ�Ҥ�����س����¹���� admin � Moodle �繪������������ҧ��õԴ��� ����������������ͧ��õ�����ҧ�� moodleadmin';
$string['caution'] = '����͹';
$string['chooselanguage'] = '���͡����';
$string['compatibilitysettings'] = '��Ǩ�ͺ��õ�駤�� PHP';
$string['configfilenotwritten'] = '��ǵԴ����ѵ��ѵ��������ö���ҧ��� config.php �� �Ҩ����������������ö��¹ŧ��á���� moodle �� �س����ö���ҧ���ѧ��������ͧ�¡�á�ͻ����鴵��仹��ŧ�������ͧ������ҧ����';
$string['configfilewritten'] = '���ҧ config.php ���º��������';
$string['configurationcomplete'] = '��駤�ҵ���������������';
$string['database'] = '�ҹ������';
$string['databasecreationsettings'] = '�س���繵�ͧ��駤�Ұҹ�����ŷ����㹡���红����Ţͧ moodle �ҹ�����Ŵѧ����Ǩе�ͧ�ա�����ҧ���������ǧ˹�� 
<br /> <br />

<b>������:</b> ��駤������� mysql <br />

<b>��ʵ�:</b> ��駤������� localhost <br />

<b>���Ͱҹ������:</b> ���Ͱҹ������, ��moodle<br />

<b>���ͼ���� (username):</b>��駤������� root <br />

<b>���ʼ�ҹ:</b> ���ʼ�ҹ��Ұҹ������<br />

<b>�ӹ�˹�ҵ��ҧ:</b> �ӹ�˹�ҵ��ҧ �ջ���ª���ҡ�հҹ�����Ţͧ���������������¡�͡�������� ���ҧ��繢ͧ������ �� mdl_';
$string['databasesettings'] = '�س���繵�ͧ��駤�Ұҹ�����ŷ����㹡���红����Ţͧ moodle �ҹ�����Ŵѧ����Ǩе�ͧ�ա�����ҧ���������ǧ˹�� 
<br />�<br />

<b>������:</b> mysql ���� postgres7<br />

<b>��ʵ�:</b> ��  localhost ���� db.isp.com<br />

<b>���Ͱҹ������:</b> ���Ͱҹ������, ��moodle<br />

<b>���ͼ���� (username):</b> username �ͧ�ҹ������<br />

<b>���ʼ�ҹ:</b> ���ʼ�ҹ��Ұҹ������<br />

<b>�ӹ�˹�ҵ��ҧ:</b> �ӹ�˹�ҵ��ҧ �ջ���ª���ҡ�հҹ�����Ţͧ���������������¡�͡�������� ���ҧ��繢ͧ������ �� mdl_';
$string['dataroot'] = '��á���բ�����';
$string['datarooterror'] = '��辺��á���բ����ŷ��س�к���������������ö���ҧ�� ��س���� Path ���١��ͧ�������ҧ��á���չ������';
$string['dbconnectionerror'] = '�������ö�Դ��Ͱҹ�����ŷ��س�к������ ��سҵ�Ǩ�ͺ��ҷ�������ͧ�ҹ������';
$string['dbcreationerror'] = '�բ�ͼԴ��Ҵ㹡�����ҧ�ҹ������ �������ö���ҧ�ҹ�����ŷ���кش��¤�ҷ����������';
$string['dbhost'] = '��ʵ����������';
$string['dbpass'] = '���ʼ�ҹ';
$string['dbprefix'] = '�ӹ�˹�ҵ��ҧ (Table Prefix)';
$string['dbtype'] = '������';
$string['directorysettings'] = '<p>��س��׹�ѹ����駢ͧ��õԴ���  Moodle .</p>

<p><b>�������ͧ��� (Web Address):</b>

�кط������ͧ���䫵���س�й� Moodle ��� ����ҡ��红ͧ�س��Ҽ�ҹ URLs ���¢��������͡���ѡ���¹�ͧ�س�������� ����ͧ�������ͧ���� /  �Դ����</p>

<p><b>��á���� moodle </b>

�к� path �ͧ��á������� � �����㹡�õԴ��� ���ѧ����ͧ�������͵�Ǿ�����˭������������ ��������Ҷ١��ͧ </p>

<p><b>��á���բ�����:</b>

��á���չ����繷��������� moodle �зӡ�úѹ�֡��� �繢����Ţͧ��� �ѧ��鹤������Է���㹡����ҹ ��� ��¹ŧ��á���չ��  (��������� \'nobody\' ���� \'apache\') ����������仵ç � ��ҹ�����
</p>';
$string['dirroot'] = 'Moodle ��á����';
$string['dirrooterror'] = '��õ�駤�� ��á���� moodle ���١��ͧ ��辺���Դ��駷���к�  �к��ӡ�����絤�Ҵ�ҹ��ҧ��� ';
$string['download'] = '��ǹ���Ŵ';
$string['fail'] = '�������';
$string['fileuploads'] = '����Ѿ��Ŵ';
$string['fileuploadserror'] = '��è��Դ(on)';
$string['fileuploadshelp'] = '<p>���������������������Ѿ��Ŵ</p>

<p>�س����ö�Դ��� Moodle ��֧����ҹ����ѧ������ա��͹حҵ����������ö�Ѿ��Ŵ���㹴 � �����ٻ�Ҿ��Сͺ����ѵ���ǹ��Ǣͧ��Ҫԡ��

<p>���Դ���������������ͧ��ҹ�������ӡ���Դ����� ����Ѿ��Ŵ��觻��Է�����������  php.ini ������¹��� <b>file_uploads</b> ��\'1\'.</p>';
$string['gdversion'] = 'GD  �����ѹ';
$string['gdversionerror'] = '������������ա���� GD library ���ͷ����';
$string['gdversionhelp'] = '<p>���������ͧ�س�ѧ����ա�õԴ��� GD </p>

<p>GD ����ǹ������㹡�ê���㹡���ʴ���л����ż��ٻ�Ҿ��ҧ � ���� Moodle �ҷ��� �Ҿ�ͤ͹㹻���ѵ���ǹ��� ��С�����ҧ�Ҿ�����蹡�û����Ǽš�ҿ�ͧ�ѹ�֡�����ҹ���䫵��ҧ�  ���ҧ�á����س�ѧ����ö�� Moodle ��֧�������� GD �Դ�������������ö��ҹ����ǡѺ����ʴ���л����ż��Ҿ����ҹ��</p>

<p> ��õԴ��� GD � PHP ������ٹԡ������������� ������  --with-gd</p>

<p>��ǹ���������ҹ�Թ���س����ö�Դ����¡��������  php.ini ����������ͧ���¤��������ҹ˹�� libgd.dll �͡</p>';
$string['globalsquotes'] = '�����ҹẺ Globals �ѧ����ʹ���';
$string['globalsquoteserror'] = '��䢤�� PHP �ͧ��ҹ�»Դ�����ҹ register_globals ���/���� �Դ�����ҹ magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>����й�����Դ�����ҹ Magic Quotes GPC ���  Register Globals  ��������ǡѹ</p>
<p>�й�������ҵ��仹��� php.ini <b>magic_quotes_gpc = On</b> ��� <b>register_globals = Off</b></p>
<p> ����ҡ��ҹ�������ö��ҷӡ�������� php.ini ������ö�ӡ�����ҧ��� .httaccess ����������ҧ���ѧ��� 
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote> �����Ѿ��Ŵ����������á���� moodle 
</p> 
';
$string['installation'] = '��õԴ���';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = '��èлԴ (off)';
$string['magicquotesruntimehelp'] = '<p>��÷ӡ�ûԴ Magic quotes runtime ������� moodle �ӧҹ��١��ͧ</p>

<p>�·�����������������зӡ�ûԴ��ҹ������͹ ������ö����ҡ��õ�駤�ҵ���� <b>magic_quotes_runtime</b> ���� php.ini </p>

<p>��Ҥس�������ö������ php.ini ����µ��ͧ�س����ö�ӡ�ûԴ�ѧ���蹹���¡��������� .htaccess �������á���� moodle �����ҧ������ա�õ�駤�Ҵѧ���

<blockquote>php_value magic_quotes_runtime Off</blockquote>

</p> ';
$string['memorylimit'] = '�������٧�ش (Memory Limit)';
$string['memorylimiterror'] = '�������٧�ش���س�������͹��ҧ��� �Ҩ�ջѭ��������ѧ���';
$string['memorylimithelp'] = '<p>��Ҥ������٧�ش�ͧ���������ͧ�س��������  $a</p>

<p>�����Ӵѧ������դ�ҹ���令���Ҩ������ջѭ��㹡����ҹ moodle ������ѧ��੾������ͤس����������� � ������件֧����Ҫԡ�ӹǹ�ҡ

<p>��ҷ����������õ������ҡ����ش��ҷ����ҡ�� ��ҷ�����й������ 16M �����������Ը�㹡��������Ҥ������٧�ش ����Ǥ��:

<ol>

<li>�դ����� PHP ���� ����������� <i>--enable-memory-limit</i> ����繡�õ�駤����� moodle ��˹��մ�ӡѴ����٧�ش�ͧ 

<li>��Ҥس����ö������  php.ini ����µ��ͧ������ö����¹��� <b>memory_limit</b> ����繤���������  16M �����������ö����¹��ҹ������µ��ͧ����駼������к����

<li>���������� PHP �ҧ��Ǥس����ö���ҧ ��� .htaccess �������á���� moodle ����պ�÷Ѵ���仹������:

<p><blockquote>php_value memory_limit 16M</blockquote></p>

<p>���ҧ�á���㹺ҧ���������س�������ö�� �Ըչ���� �¨��ա���ʴ� error ����Ҥس���繵�ͧź���ѧ����ǹ���� 
</ol>';
$string['mysqlextensionisnotpresentinphp'] = '��õ�駤��  PHP �����Ѻ MySQL ���١��ͧ��سҵ�Ǩ�ͺ� php.ini �ա���������դ����� php';
$string['pass'] = '�����';
$string['phpversion'] = 'PHP �����ѹ';
$string['phpversionerror'] = '�����ѹ�ͧ PHP ��������ҧ���� 4.1.0';
$string['phpversionhelp'] = '<p>Moodle ���繵�ͧ�� PHP �����ѹ 4.1.0 �����ҧ����</p>

<p>�س���ѧ�������ѹ $a</p>

<p>�س��ͧ�Ѿ�ô  PHP ����������ʵ��������� PHP �����ѹ�������</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'moodle �Ҩ�ջѭ���ҡ safe mode on';
$string['safemodehelp'] = '<p>Moodle �Ҩ�ջѭ���ҡ safe mode on ��觨з����س�������ö���ҧ���������</p>

<p>Safe mode �·�������Ǩ��Դ��㹺ҧ�����ʵ�� �Ҩ���繵�ͧ����ʵ������������������Ѻ�����ҹ Moodle </p>

<p>�س����ö�������õԴ���㹵͹������Ҩ�ջѭ�ҵ���������ѧ</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = '��èлԴ (off)';
$string['sessionautostarthelp'] = '<p>Moodle �зӧҹ������������������ʹѺʹع session </p>

<p>�س����ö����� Sessions �ӧҹ���¡��������  php.ini �����������  session.auto_start </p>';
$string['wwwroot'] = '�������ͧ���';
$string['wwwrooterror'] = '�������ͧ������١��ͧ �к���辺����� Moodle ��������';

?>
