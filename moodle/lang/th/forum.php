<?PHP // $Id: forum.php,v 1.15.2.5 2006/02/06 10:00:38 moodler Exp $ 
      // forum.php - created with Moodle 1.6 development (2005101200)


$string['addanewdiscussion'] = '��駡�з��';
$string['addanewtopic'] = '�����Ǣ������';
$string['advancedsearch'] = '��ä��Ҫ���٧';
$string['allforums'] = '�ء��дҹ��ǹ�';
$string['allowchoice'] = '���ء�����͡';
$string['allowdiscussions'] = '͹حҵ���  $a  �ʵ�㹡�дҹ����������';
$string['allowratings'] = '��ͧ����������ҹ����ṹ�ʵ����������';
$string['allowsdiscussions'] = '��дҹ���͹حҵ��������Ф�����ö��駡�з���餹��˹�觡�з�� ';
$string['anyfile'] = '���ء������';
$string['attachment'] = 'Ṻ���';
$string['bynameondate'] = '��  $a->name - $a->date';
$string['configcleanreadtime'] = '���ҷ���ͧ���ź�ʵ���� � �ҡ���ҧ \"��ҹ����\"';
$string['configdisplaymode'] = '���ʴ���ҷ��������ҡ����ա�õ�駤��';
$string['configenablerssfeeds'] = '��Ԫ������Դ�͡������͹ RSS ��  �س�ѧ�е�ͧ�Դ��͹����������С�з���ͧ';
$string['configlongpost'] = '�ʵ�㴡����������ҡ���ҹ��ж�������� (¡��� html)';
$string['configmanydiscussions'] = '�ӹǹ�����Դ��繷���ͧ����ʴ��˹��˹��';
$string['configmaxbytes'] = '��Ҵ����٧�ش�������öṺŧ����з����';
$string['configoldpostdays'] = '�ӹǹ�ѹ���������ʵ������Ѻ�����ҹ����';
$string['configreplytouser'] = '㹡óշ��������ӡ����������͡仵�ͧ�������кت��ͼ����������Ţͧ��Ҫԡ�������  �֧�����Ҫԡ�зӡ�ë�͹����Ţͧ���ͧ������';
$string['configshortpost'] = '�ʵ�㴡��������ǵ�ӡ��ҹ��ж�������� (¡��� html)';
$string['configtrackreadposts'] = '��駤���� \"��\" �ҡ��ͧ��ô������Ҫԡ���Ф���ҹ���������ҹ��з��ѧ�����';
$string['configusermarksread'] = '��� \"��\" ��Ҫԡ��ͧ������ͧ������� \"��ҹ����\" ����Ѻ�����ʵ���µ��ͧ ������͡ \"���\" �����㴡������������ҹ��з�����Ǩж�������ҹ����';
$string['couldnotadd'] = ' �բ�ͼԴ��Ҵ �������ö�����ʵ�ͧ�س�� ';
$string['couldnotdeleteratings'] = '�������������öź�� ��������դ�����ṹ���º�������� ';
$string['couldnotdeletereplies'] = '������ �������öź�� �����դ��ͺ���º��������';
$string['couldnotupdate'] = '�������ö �Ѿഷ�ʵ�ͧ�س�� �բ�ͼԴ��Ҵ';
$string['delete'] = 'ź';
$string['deleteddiscussion'] = '��з����١ź�����';
$string['deletedpost'] = '�ʵ�١ź�����';
$string['deletedposts'] = '�ʵ�١ź�����';
$string['deletesure'] = '��㨹���ҵ�ͧ���ź �ʵ���';
$string['deletesureplural'] = '��㨹Ф���ҵ�ͧ���ź�ʵ�����Фӵͺ������ ($a �ʵ�)';
$string['digestmailheader'] = '�����ʷ�ͧ��з�����ա���ʵ�㹡ôҹ  $a->sitename ��Ҥس��ͧ�������¹�ŧ�������������价�� go to $a->userprefs';
$string['digestmailprefs'] = '����ѵ���ǹ��Ǣͧ�س';
$string['digestmailsubject'] = '��дҹ��ǹ���ʷ�����ѹ�ҡ $a';
$string['digestsentusers'] = '�������ʷ�������� $a ��Ҫԡ���º��������';
$string['discussion'] = '��з��';
$string['discussionmoved'] = '��з����������价�� \'$a\'';
$string['discussionname'] = '���͡�з��';
$string['discussions'] = '��з�������';
$string['discussionsstartedby'] = '��駡�з���� $a';
$string['discussionsstartedbyrecent'] = '��駡�з������ش��';
$string['discussthistopic'] = '�ͺ��з��';
$string['displayend'] = '��������ʴ�';
$string['displayperiod'] = '��ǧ���ҷ���ʴ�';
$string['displaystart'] = '������ʴ�';
$string['eachuserforum'] = '˹�觤�˹�觡�з��';
$string['edit'] = '���';
$string['editedby'] = '����� $a->name - $a->date';
$string['editing'] = '���ѧ���';
$string['emptymessage'] = '�ʵ�ͧ�س�բ�ͼԴ��Ҵ �ͧ��Ǩ�ͺ�ա������������������˭��Թ������¹��ͤ�������  �ѧ�����ѹ�֡�ʵ���ŧ�ҹ������';
$string['everyonecanchoose'] = '��Ҫԡ����ö���͡��������Ҫԡ�ͧ��дҹ���';
$string['everyoneissubscribed'] = '�ء������Ҫԡ�ͧ��дҹ���';
$string['existingsubscribers'] = '����Ҫԡ��������';
$string['forcesubscribe'] = '�ء����ͧ��Ѥ�����Ҫԡ��дҹ���';
$string['forcesubscribeq'] = '�ء����ͧ����Ҫԡ��дҹ�����ҹ��?';
$string['forum'] = '��дҹ��ǹ�';
$string['forumintro'] = '�Ը����дҹ';
$string['forumname'] = '���͡�дҹ';
$string['forumposts'] = '�ʵ�';
$string['forums'] = '��дҹ��ǹ�';
$string['forumtype'] = '�������ͧ��дҹ';
$string['generalforum'] = '��дҹ�����';
$string['generalforums'] = '��дҹ�����';
$string['inforum'] = '� $a';
$string['intronews'] = '������л�С��';
$string['introsocial'] = '��дҹ��ǹ�Ẻ�Դ����ö��¡ѹ��ء����ͧ';
$string['introteacher'] = '��дҹ����Ѻ�����ҹ�� ���ͻ�֡������ͧ������¹����͹';
$string['lastpost'] = '�ͺ�����ش����';
$string['learningforums'] = '��дҹ������¹����͹';
$string['markalldread'] = '��˹������ҹ���Ƿء�ʵ�㹡�з����';
$string['markallread'] = '��˹������ҹ���Ƿء�ʵ�㹡�дҹ���';
$string['markread'] = '��������ҹ����';
$string['markreadbutton'] = '��˹���� <br> ��ҹ����';
$string['markunread'] = '�������ѧ�������ҹ';
$string['markunreadbutton'] = '��˹���� <br>�ѧ�������ҹ';
$string['maxattachmentsize'] = '��Ҵ�ͧ����٧�ش';
$string['maxtimehaspassed'] = '�����¤�� ���ҷ����㹡������������  ($a) ��ҹ�';
$string['message'] = '��ͤ���';
$string['missingsearchterms'] = '�ӷ����Ҩл�ҡ���ٻẺ�ͧ HTML markup ���㹢�ͤ���';
$string['modeflatnewestfirst'] = '�ʴ�Ẻ������˹����������ҡ�ӵͺ����ش';
$string['modeflatoldestfirst'] = '�ʴ�Ẻ������˹����������ҡ�ӵͺ�á�ش';
$string['modenested'] = '�ʴ�Ẻ���˹��������§��õͺ';
$string['modethreaded'] = '�ʴ�Ẻ����ͧ����ѹ��';
$string['modulename'] = '��дҹ��ǹ�';
$string['modulenameplural'] = '��дҹ��ǹ�';
$string['more'] = '�������';
$string['movethisdiscussionto'] = '���¡�з����价��...';
$string['namenews'] = '��дҹ����';
$string['namesocial'] = '��дҹ�����ʹ���';
$string['nameteacher'] = '��дҹ����Ҩ����';
$string['newforumposts'] = '�ʵ�����ش㹡�дҹ';
$string['nodiscussions'] = '�ѧ����ա�з��';
$string['noguestpost'] = '�����¤�� �ؤ�ŷ�����������ö�ʵ���������';
$string['noguestsubscribe'] = '�����¤�� �ؤ�ŷ�����������ö����Ҫԡ�����Ѻ�ʵ�ҧ�������';
$string['noguesttracking'] = '�����¤�� �ؤ�ŷ�����������ö�е�駤�ҡ����ҹ��з����';
$string['nomorepostscontaining'] = '��辺����� \'$a\'  ��ʵ���';
$string['nonews'] = '�ѧ����բ���';
$string['noposts'] = '������ʵ�';
$string['nopostscontaining'] = '������ʵ����դ���� \'$a\' ';
$string['nosubscribers'] = '�ѧ�������Ҫԡ㹡�дҹ';
$string['nothingnew'] = '�ѧ�����������������Ѻ $a';
$string['notingroup'] = '�����¤�Фس��ͧ����Ҫԡ㹡��������͹�֧������㹡�дҹ��ǹҹ����';
$string['notrackforum'] = '���ҷ�����ͧ����㹢�ͤ�������ѧ�������ҹ';
$string['nownotsubscribed'] = '$a->name ����Ѻ���Ҩҡ \'$a->forum\' �ҧ�����';
$string['nownottracking'] = '$a->name ���Դ��������ҹ \'$a->forum\'.';
$string['nowsubscribed'] = '$a->name �Ѻ���Ҩҡ \'$a->forum\' �ҧ�����';
$string['nowtracking'] = '$a->name �Դ��������ҹ \'$a->forum\'.';
$string['numposts'] = '$a �ʵ�';
$string['olderdiscussions'] = '��з�����';
$string['oldertopics'] = '��Ǣ�����';
$string['openmode0'] = '��駡�з������� �ͺ�����';
$string['openmode1'] = '��駡�з������� �ͺ��';
$string['openmode2'] = '��駡�з���� �ͺ��';
$string['overviewnumpostssince'] = '$a �ʵ���ѧ�ҡ�������к���������ش';
$string['overviewnumunread'] = '$a  �ʵ��ѧ�������ҹ';
$string['parent'] = '������繡�͹˹��';
$string['parentofthispost'] = '�ʵ���س��¹�ͺ';
$string['postadded'] = '�����ʵ�ͧ�س����<P>�س������ $a �ҡ��ͧ������';
$string['postincontext'] = '���������ʵ�';
$string['postmailinfo'] = '����繡�ͻ����ͤ��� �ҡ�ʵ�  $a � ���䫵�
�ҡ��ͧ��õͺ��ԡ����ԧ��';
$string['postrating1'] = '�ʴ��֧������Ẻ�¡��ǹ';
$string['postrating2'] = '��ӡ���շ�����Ẻ�¡��ǹ���������§';
$string['postrating3'] = '�ʴ��֧������Ẻ������§';
$string['posts'] = '�ʵ�';
$string['posttoforum'] = '�ʵ�ŧ��дҹ��ǹ�';
$string['postupdated'] = '�ʵ�ͧ�س���Ѻ����Ѿഷ����';
$string['potentialsubscribers'] = '���������ö����Ҫԡ��';
$string['processingdigest'] = '�����Թ�š�������������Ѻ $a';
$string['processingpost'] = '���ѧ���Թ����ʵ� $a';
$string['prune'] = '�¡';
$string['prunedpost'] = '��з���������ҧ��鹨ҡ�ʵ�ѧ�����';
$string['pruneheading'] = '�¡�ʵ����ѵ��ѵ����Ƿӡ��������ѧ��з������';
$string['rate'] = '����ṹ';
$string['rating'] = '��ṹ';
$string['ratingeveryone'] = '�ء������ö����ṹ�ʵ�';
$string['ratingno'] = '����ա������ṹ';
$string['ratingonlyteachers'] = '੾���Ҩ������ҹ�鹷������ö����ṹ��ʵ�';
$string['ratingpublic'] = '$a  ����ö��繤�ṹ�ͧ�ء��';
$string['ratingpublicnot'] = '$a ����ö��繤�ṹ�ͧ����ͧ';
$string['ratings'] = '��ṹ�����';
$string['ratingssaved'] = '�ѹ�֡��ṹ����';
$string['ratingsuse'] = '��������ṹ';
$string['ratingtime'] = '����ṹ��੾��㹪�ǧ�ѹ ���ҵ��仹��';
$string['re'] = '�ͺ:';
$string['readtherest'] = '��ҹ�������ͷ����� ���Ǣ�͹��';
$string['replies'] = '�ͺ';
$string['repliesmany'] = '$a �ӵͺ';
$string['repliesone'] = '$a �ӵͺ';
$string['reply'] = '�ͺ';
$string['replyforum'] = '�ͺ��Ѻ����дҹ';
$string['rsssubscriberssdiscussions'] = '�ʴ� RSS ����Ѻ\'$a\'  ���ʹ��� ';
$string['rsssubscriberssposts'] = '�ʴ� RSS ����Ѻ \'$a\' �ʵ�';
$string['search'] = '����';
$string['searchdatefrom'] = '�ʵ��ͧ������ҹ��';
$string['searchdateto'] = '�ʵ��ͧ��ҡ��ҹ��';
$string['searchforumintro'] = '��س����ӷ���ͧ��ä���㹿�Ŵ��ҧ��ҧ���ҧ���� 1 ��Ŵ�';
$string['searchforums'] = '���������';
$string['searchfullwords'] = '������ҹ���û�ҡ�㹤�����';
$string['searchnotwords'] = '������դ�����ҹ������������';
$string['searcholderposts'] = '���ҡ�з�����';
$string['searchphrase'] = '����¤����ͧ��ҡ����觷���ͧ��ä���';
$string['searchresults'] = '�š�ä���';
$string['searchsubject'] = '�ӹ���ͧ�������Ǣ��';
$string['searchuser'] = '���͵�ͧ�ç�Ѻ�����¹';
$string['searchuserid'] = '�����Ţ ID �ͧ�����¹';
$string['searchwhichforums'] = '���͡��з�����ͧ��ä���';
$string['searchwords'] = '������ҹ������ö��ҡ����ǹ㴡���㹡�з��';
$string['seeallposts'] = '�١�з��������ҡ��Ҫԡ�����';
$string['sendinratings'] = '�觤�ṹ����������ش';
$string['showsubscribers'] = '�ʴ���Ҫԡ��дҹ';
$string['singleforum'] = '��дҹ��Ǣ���������ҧ����';
$string['startedby'] = '���';
$string['subject'] = '��Ǣ��';
$string['subscribe'] = '��Ѥ�����Ҫԡ��дҹ';
$string['subscribeall'] = '��Ѥ÷ء���������з����';
$string['subscribed'] = '����Ҫԡ���º����';
$string['subscribenone'] = '��ͧ�����ҷء���͡�ҡ�������Ҫԡ��з����';
$string['subscribers'] = '��Ҫԡ';
$string['subscribersto'] = '��Ҫԡ�ͧ \'$a\'';
$string['subscribestart'] = '��ͧ�����ʵ�㹡�з����ҧ�����';
$string['subscribestop'] = '����ͧ��������ʵ�ҧ�����';
$string['subscription'] = '�������Ҫԡ';
$string['subscriptions'] = '�������Ҫԡ';
$string['timestartenderror'] = '�ѹ����ش��ͧ�������ö�ҡ�͹�ѹ���������';
$string['trackforum'] = '�Դ��������ҹ��ͤ���';
$string['tracking'] = '�Դ���';
$string['trackingoff'] = '�Դ';
$string['trackingon'] = '�Դ';
$string['trackingoptional'] = '������͡';
$string['trackingtype'] = '��ҹ��õԴ��������ҹ��ͤ����ͧ��дҹ����������';
$string['unread'] = '�ѧ�������ҹ';
$string['unreadposts'] = '�ʵ����ѧ�������ҹ';
$string['unreadpostsnumber'] = '$a  �ʵ����ѧ�������ҹ';
$string['unreadpostsone'] = '�ѧ�������ҹ 1 �������';
$string['unsubscribe'] = '��ͧ����͡�ҡ�������Ҫԡ��дҹ';
$string['unsubscribed'] = '���������Ҫԡ';
$string['unsubscribeshort'] = '¡��ԡ�������Ҫԡ';
$string['yesforever'] = '�� ��ʹ����';
$string['yesinitially'] = '�� �͹����ҹ��';
$string['youratedthis'] = '�س����ṹ';
$string['yournewtopic'] = '��з������';
$string['yourreply'] = '�ӵͺ';

?>
