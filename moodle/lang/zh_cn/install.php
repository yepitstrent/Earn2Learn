<?PHP // $Id: install.php,v 1.2.2.4 2006/02/06 10:00:42 moodler Exp $



$string['admindirerror'] = 'ָ���Ĺ���Ŀ¼����ȷ';
$string['admindirname'] = '����Ŀ¼';
$string['admindirsetting'] = '��һЩ��������/admin��������������֮������⹦���ϣ��������׼��Moodle����ҳ���ͻ�ˡ�ͨ���޸Ĺ���Ŀ¼�����Ʋ�����������д������Ϳ��Ա����ͻ�ˡ�����: <br /> <br /><b>moodleadmin</b><br /> <br />
�⽫����Moodle�еĹ������ӡ�';
$string['caution'] = 'ԭ��';
$string['chooselanguage'] = 'ѡ��һ������';
$string['compatibilitysettings'] = '�������PHP����...';
$string['configfilenotwritten'] = '��װ�ű��޷��Զ�����һ�����������õ�config.php�ļ���������������MoodleĿ¼�ǲ���д�ġ������Ը������µĴ��뵽Moodle��Ŀ¼�µ�config.php�ļ��С�';
$string['configfilewritten'] = '�Ѿ��ɹ�������config.php�ļ�';
$string['configurationcomplete'] = '�������';
$string['database'] = '���ݿ�';
$string['databasesettings'] = '��������Ҫ�������ݿ��ˣ�������Moodle���ݶ����洢�����С�������ݿ�����Ѿ������ˣ����ұ�����һ���û�������������������<br /> <br /> <br />
<b>����:</b> mysql��postgres7<br />
<b>����:</b> ��localhost��db.isp.com<br />
<b>����:</b> ���ݿ����ƣ���moodle<br />
<b>�û�:</b> �������ݿ���û���<br />
<b>����:</b> �������ݿ������<br />
<b>���ǰ׺:</b> �����еı������ǰ���Ͽ�ѡ��ǰ׺';
$string['dataroot'] = '����Ŀ¼';
$string['datarooterror'] = '�Ҳ���Ҳ�޷�������ָ���ġ�����Ŀ¼���������·�����ֹ���������';
$string['dbconnectionerror'] = '�޷����ӵ���ָ�������ݿ⣬�����������ݿ����á�';
$string['dbcreationerror'] = '���ݿⴴ�������޷����趨�е����ƴ������ݿ⡣';
$string['dbhost'] = '����������';
$string['dbpass'] = '����';
$string['dbprefix'] = '�������ǰ׺';
$string['dbtype'] = '����';
$string['directorysettings'] = '<p>��ȷ�ϰ�װMoodle��λ�á�</p>

<p><b>Web��ַ:</b>
ָ������Moodle������Web��ַ�����������վ����ͨ�����URL���ʣ���ôѡ��������õ�һ������ַ��ĩβ��Ҫ��б�ߡ�</p>

<p><b>MoodleĿ¼:</b>
ָ����װ������·����Ҫȷ����Сд��ȷ��</p>

<p><b>����Ŀ¼:</b>
Moodle��Ҫһ��λ�ô���ϴ����ļ������Ŀ¼����Web�������û�(ͨ���ǡ�nobody����apache��)Ӧ���ǿɶ���д�ģ���Ӧ������ֱ��ͨ��Web��������</p>';
$string['dirroot'] = 'MoodleĿ¼';
$string['dirrooterror'] = '��MoodleĿ¼�������ÿ���ȥ���ԡ����������Ҳ�����װ�õ�Moodle�������ֵ�Ѿ������ˡ�';
$string['download'] = '����';
$string['fail'] = 'ʧ��';
$string['fileuploads'] = '�ϴ��ļ�';
$string['fileuploadserror'] = '��Ӧ���ǿ�����';
$string['fileuploadshelp'] = '<p>����������ϵ��ļ��ϴ����ܿ���ȥ���ر��ˡ�</p>

<p>�����Լ�����װMoodle����û��������ܣ����������ϴ��κ��ļ����û�ͷ��</p>

<p>Ҫ�����ļ��ϴ�����(������ϵͳ����Ա)��Ҫ�޸�ϵͳ�ϵ�php.ini�ļ�����������<b>file_uploads</b>�����ø�Ϊ\'1\'��</p>';
$string['gdversion'] = 'GD�汾';
$string['gdversionerror'] = 'Ϊ���ܹ�����ʹ���ͼƬ���������ϱ�����GD�⡣';
$string['gdversionhelp'] = '<p>���ķ���������ȥ��û�а�װGD��</p>

<p>PHPҪ��GD�������Moodle����ͼ��(���û�ͼ��)��û��GD��Moodle���ǿ��Թ����ġ���ֻ����Щ��ҪGD�Ĺ��ܾͲ���ʹ���ˡ�</p>

<p>��Unix��ΪPHP����GD���ܣ�������--with-gdѡ��������PHP��</p>

<p>��Windows�ϣ��޸�php.ini��ȥ��libgd.dll��ǰ��ע�ͷ��žͿ����ˡ�</p>';
$string['installation'] = '��װ';
$string['magicquotesruntime'] = '����ʱ��Magic Quotes';
$string['magicquotesruntimeerror'] = '��Ӧ���ǹرյ�';
$string['magicquotesruntimehelp'] = '<p>����ʱ��Magic QuotesӦ���رգ�����Moodle��������������</p>

<p>ͨ��ȱʡʱ���ǹرյ�...�ο�php.ini�ļ��е�<b>magic_quotes_runtime</b>���á�</p>

<p>��������ܷ���php.ini�ļ���Ҳ�������԰������������ӵ�MoodleĿ¼����Ϊ.htaccess���ļ���:</p>
<blockquote>php_value magic_quotes_runtime Off</blockquote>';
$string['memorylimit'] = '�ڴ�����';
$string['memorylimiterror'] = 'PHP�ڴ��������õ�̫����...�Ժ�������������ġ�';
$string['memorylimithelp'] = '<p>���ķ�������PHP�ڴ�������${a}��</p>

<p>���ʹMoodle�ڽ��������������ڴ����⣬�ر�������װ�˺ܶ�ģ�鲢��/�����кܶ��û���</p>

<p>���ǽ�����ܵĻ��������趨�ĸ�һЩ��Ʃ��16M���м��ַ�������������һ��:</p>
<ol>
<li>������ԣ����±���PHP��ʹ��<i>--enable-memory-limit</i>ѡ�������Moodle�Լ��趨�ڴ����ơ�</li>
<li>������Է���php.ini�ļ����������޸�<b>memory_limit</b>������Ϊ����ֵ��16M��������޷����ʣ����������Ĺ���Ա�����޸�һ�¡�</li>
<li>��һЩPHP�������ϣ���������MoodleĿ¼�д���һ��.htaccess�ļ���������������:
<blockquote>php_value memory_limit 16M</blockquote>
<p>Ȼ������һЩ�������������<b>����</b>PHPҳ���޷���������(�ڷ���ҳ��ʱ���д���)����������ܲ��ò�ɾ��.htaccess�ļ���</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'PHP��MySQL��չ��δ��װ��ȷ������޷���MySQLͨ�š���������php.ini�ļ������±���PHP��';
$string['pass'] = 'ͨ��';
$string['phpversion'] = 'PHP�汾';
$string['phpversionerror'] = 'PHP�汾����Ϊ4.1.0';
$string['phpversionhelp'] = '<p>Moodle��ҪPHP 4.1.0���ϵİ汾��</p>
<p>����ǰʹ�õ���${a}</p>
<p>����������PHP����ת�Ƶ�һ�����°�PHP�ķ�������!</p>';
$string['safemode'] = '��ȫģʽ';
$string['safemodeerror'] = '�ڰ�ȫģʽ������Moodle���ܻ����鷳';
$string['safemodehelp'] = '<p>�ڰ�ȫģʽ������Moodle���ܻ�����һϵ�е����⣬�����ڻ��޷��������ļ���</p>

<p>ֻ����Щ�а�ȫ����֤�Ĺ���Webվ��Ż�ʹ�ð�ȫģʽ���������������������鷳����õķ�������Ϊ����Moodleվ�㻻һ��Web�����ṩ�̡�</p>

<p>�����ϲ�����Լ�����װ���̣�����������������ġ�</p>';
$string['sessionautostart'] = '�Զ������Ự';
$string['sessionautostarterror'] = '��Ӧ���ǹرյ�';
$string['sessionautostarthelp'] = '<p>Moodle��Ҫ�Ự֧�֣�������޷�����������</p>

<p>ͨ���޸�php.ini�ļ����Լ���Ự֧��...����session.auto_start����</p>';
$string['wwwroot'] = '��վ��ַ';
$string['wwwrooterror'] = '�����վ��ַ�ƺ��Ǵ�ġ��������ﲢû�иո�װ�õ�Moodle��';
?>
