<?PHP // $Id: forum.php,v 1.7.2.5 2006/04/23 06:51:20 koenr Exp $ 
      // forum.php - created with Moodle 1.5.3+ (2005060230)


$string['addanewdiscussion'] = '添加一个新讨论话题';
$string['addanewquestion'] = '添加一个新问题';
$string['addanewtopic'] = '添加一个新话题';
$string['advancedsearch'] = '高级搜索';
$string['allforums'] = '全部讨论区';
$string['allowchoice'] = '允许每个人选择';
$string['allowdiscussions'] = '允许{$a}在此讨论区发贴吗?';
$string['allowratings'] = '允许对贴子评分吗?';
$string['allowsdiscussions'] = '该讨论区允许每个人发起新话题。';
$string['allsubscribe'] = '订阅所有的论坛';
$string['allunsubscribe'] = '退订所有的论坛';
$string['anyfile'] = '任何文件';
$string['attachment'] = '附件';
$string['blockperioddisabled'] = '不阻止';
$string['bynameondate'] = '由{$a->name}发表于$a->date';
$string['configcleanreadtime'] = '一天中从“已读”表格中清除旧帖子的时间';
$string['configdisplaymode'] = '讨论的缺省显示模式';
$string['configenablerssfeeds'] = '这个选项允许所有的论坛支持RSS种子。您仍需手工激活每一个论坛配置中的RSS种子选项。';
$string['configlongpost'] = '超过该长度(字符个数，不含HTML)的帖子被认为是长的。在站点首页、社区格式的课程页或用户资料显示的帖子会被精简到一个自然的中断位置，其长度在forum_shortpost 和forum_longpost之间。';
$string['configmanydiscussions'] = '每页显示的讨论主题数';
$string['configmaxbytes'] = '缺省的所有论坛最大附件尺寸(受课程设置和本地配置的限制)';
$string['configoldpostdays'] = '帖子在多少天后应当被视为已读。';
$string['configreplytouser'] = '当通过电子邮件发送论坛中的帖子时，是否将用户的电子邮件地址加入其中，以便收信人直接而不是通过论坛回复发贴人？即使设置为“是”，用户仍可以在他们的个人资料里设置email地址为秘密。';
$string['configshortpost'] = '少于该长度(字符个数，不含HTML)的帖子被认为是短的（见下一项）。';
$string['configtrackreadposts'] = '如果希望跟踪每一个用户的已读/未读信息则设定为“是”。';
$string['configusermarksread'] = '若设定为“是”则用户必须手动将帖子标记为已读。如果设定为“否”，则帖子被浏览时自动标记为已读。';
$string['couldnotadd'] = '由于一个未知的错误，您的贴子无法发表';
$string['couldnotdeleteratings'] = '抱歉，已经被评分的贴子不能删除';
$string['couldnotdeletereplies'] = '抱歉，已经有跟贴的贴子不能删除';
$string['couldnotupdate'] = '由于一个未知的错误，您的贴子无法更新';
$string['delete'] = '删除';
$string['deleteddiscussion'] = '讨论话题已被删除';
$string['deletedpost'] = '贴子已删除';
$string['deletedposts'] = '那些帖子已删除';
$string['deletesure'] = '您确定要删除该贴吗?';
$string['deletesureplural'] = '您确定要删除这个帖子及其回复么?({$a}个帖子)';
$string['digestmailheader'] = '这是{$a->sitename}论坛的每日新帖摘要。要修改您的关于论坛的偏好，请访问{$a->userprefs}。';
$string['digestmailprefs'] = '您的用户信息';
$string['digestmailsubject'] = '$a: 论坛摘要';
$string['digestsentusers'] = '已经成功地给{$a}位用户发送了E-mail摘要。';
$string['disallowsubscribe'] = '不允许订阅';
$string['disallowsubscribeteacher'] = '不允许订阅(教师除外)';
$string['discussion'] = '话题';
$string['discussionmoved'] = '该讨论已被移到$a';
$string['discussionname'] = '话题名称';
$string['discussions'] = '话题';
$string['discussionsstartedby'] = '由{$a}发起的话题';
$string['discussionsstartedbyrecent'] = '最近由{$a}发起的话题';
$string['discussthistopic'] = '讨论这个话题';
$string['displayend'] = '结束时间';
$string['displayperiod'] = '可视时段';
$string['displaystart'] = '开始时间';
$string['eachuserforum'] = '每个人发表一个话题';
$string['edit'] = '编辑';
$string['editedby'] = '由{$a->name}修改 - $a->date';
$string['editing'] = '正在编辑';
$string['emptymessage'] = '您的贴子有点错误。大概是您没有填写内容，或附件太大。您的更改<b>没有</b>保存。';
$string['everyonecanchoose'] = '每个人均可选择订阅';
$string['everyoneissubscribed'] = '每个人都订阅该讨论区';
$string['existingsubscribers'] = '已存在的订阅者';
$string['forcesubscribe'] = '强制每个人都订阅';
$string['forcesubscribeq'] = '强制每个人都订阅吗?';
$string['forum'] = '讨论区';
$string['forumauthorhidden'] = '作者(隐藏)';
$string['forumintro'] = '讨论区简介';
$string['forumname'] = '讨论区名称';
$string['forumposts'] = '讨论区帖子';
$string['forums'] = '讨论区';
$string['forumsubjecthidden'] = '主题(隐藏)';
$string['forumtype'] = '讨论区类型';
$string['generalforum'] = '一般用途的标准讨论区';
$string['generalforums'] = '普通讨论区';
$string['inforum'] = '在{$a}里';
$string['intronews'] = '普通新闻与通告';
$string['introsocial'] = '开放的讨论区，可以随便聊聊';
$string['introteacher'] = '教师专用讨论区';
$string['lastpost'] = '最后一贴';
$string['learningforums'] = '学习讨论区';
$string['mailnow'] = '立刻发送邮件';
$string['markalldread'] = '将此话题中的所有帖子标记为已读';
$string['markallread'] = '将此讨论区中的所有帖子标记为已读';
$string['markread'] = '标记为已读';
$string['markreadbutton'] = '标记<br />已读';
$string['markunread'] = '标记为未读';
$string['markunreadbutton'] = '标记<br />未读';
$string['maxattachmentsize'] = '最大附件大小';
$string['maxtimehaspassed'] = '抱歉，编辑该贴的时间限制($a)已过!';
$string['message'] = '正文';
$string['missingsearchterms'] = '下列搜索词只出现在正文的HTML标记中：';
$string['modeflatnewestfirst'] = '列表显示回贴内容，新贴在前';
$string['modeflatoldestfirst'] = '列表显示回贴内容，旧贴在前';
$string['modenested'] = '嵌套显示回贴内容';
$string['modethreaded'] = '树状显示回贴标题';
$string['modulename'] = '讨论区';
$string['modulenameplural'] = '讨论区';
$string['more'] = '更多';
$string['movethisdiscussionto'] = '将此论题移至...';
$string['namenews'] = '新闻讨论区';
$string['namesocial'] = '公众讨论区';
$string['nameteacher'] = '教师讨论区';
$string['newforumposts'] = '新贴子';
$string['nodiscussions'] = '该讨论区尚无讨论话题';
$string['noguestpost'] = '抱歉，访客不允许发贴';
$string['noguestsubscribe'] = '抱歉，系统不允许访客用email订阅讨论区的帖子。';
$string['noguesttracking'] = '对不起，访客不能设定跟踪选项。';
$string['nomorepostscontaining'] = '未找到关键词是“{$a}”的帖子';
$string['nonews'] = '尚无消息发布';
$string['noposts'] = '没有贴子';
$string['nopostscontaining'] = '找不到包含“{$a}”的贴子';
$string['noquestions'] = '在此讨论区中尚无问题';
$string['nosubscribers'] = '尚无人订阅此讨论区';
$string['nothingnew'] = '{$a}中没有什么新东西';
$string['notingroup'] = '对不起, 您需要是一个组的成员才能浏览这个论坛。';
$string['notrackforum'] = '不跟踪未读消息';
$string['nowallsubscribed'] = '已订阅{$a}中的所有课程';
$string['nowallunsubscribed'] = '已退订{$a}中的所有课程';
$string['nownotsubscribed'] = '{$a->name}将<b>不</b>再收到含有“{$a->forum}”帖子复件的电子邮件。';
$string['nownottracking'] = '{$a->name}不再跟踪“{$a->forum}”了。';
$string['nowsubscribed'] = '{$a->name}将收到含有“{$a->forum}”帖子复件的电子邮件。';
$string['nowtracking'] = '{$a->name}现在跟踪“{$a->forum}”。';
$string['numposts'] = '{$a}个贴子';
$string['olderdiscussions'] = '旧的讨论话题';
$string['oldertopics'] = '旧些的话题';
$string['openmode0'] = '不能发起新话题，也不能回贴';
$string['openmode1'] = '不能发起新话题，但允许回复';
$string['openmode2'] = '发起新话题和回贴均允许';
$string['overviewnumpostssince'] = '从上次登录以来{$a}个帖子';
$string['overviewnumunread'] = '共{$a}个未阅读';
$string['parent'] = '显示父帖子';
$string['parentofthispost'] = '该贴的父贴';
$string['postadded'] = '<p>您的贴子已经成功发表。</p>
<p>如果需要，可以在{$a}内修改它。</p>';
$string['postincontext'] = '在上下文中看此贴';
$string['postmailinfo'] = '这是一份来自网站{$a}的贴子。
点击下面的链接便可在网站上回贴:';
$string['postrating1'] = '极端独立型';
$string['postrating2'] = '独立型与情景型兼备';
$string['postrating3'] = '极端情况型';
$string['posts'] = '帖子';
$string['posttoforum'] = '发到论坛上';
$string['postupdated'] = '您的贴子已经更新';
$string['potentialsubscribers'] = '潜在订阅者';
$string['processingdigest'] = '正在为用户{$a}处理邮件摘要';
$string['processingpost'] = '正在处理贴子$a';
$string['prune'] = '分割';
$string['prunedpost'] = '从该帖子创建了新的论题';
$string['pruneheading'] = '分割论题并将此帖子移到一个新的论题中';
$string['qandaforum'] = '问题及解答讨论区';
$string['rate'] = '评价';
$string['rating'] = '等级';
$string['ratingeveryone'] = '所有人可以评价';
$string['ratingno'] = '无评价';
$string['ratingonlyteachers'] = '只有{$a}可以发表评价';
$string['ratingpublic'] = '{$a}能看见每个人的等级';
$string['ratingpublicnot'] = '{$a}只能看见他们自己的等级';
$string['ratings'] = '评价';
$string['ratingssaved'] = '评价已保存';
$string['ratingsuse'] = '用户等级';
$string['ratingtime'] = '该时间段内限制评分';
$string['re'] = '回复: ';
$string['readtherest'] = '阅读该话题的其它贴子';
$string['replies'] = '回贴';
$string['repliesmany'] = '迄今有{$a}个回贴';
$string['repliesone'] = '迄今有{$a}个回贴';
$string['reply'] = '回复';
$string['replyforum'] = '回复到论坛';
$string['rsssubscriberssdiscussions'] = '显示话题“{$a}”的RSS种子';
$string['rsssubscriberssposts'] = '显示帖子“{$a}”的RSS种子';
$string['search'] = '搜索';
$string['searchdatefrom'] = '帖子必须在此时间之后发布';
$string['searchdateto'] = '帖子必须在此时间之前发布';
$string['searchforumintro'] = '请在下面的一个或多个项目中输入搜索词条：';
$string['searchforums'] = '搜索讨论区';
$string['searchfullwords'] = '这些词应当作为完整的词出现';
$string['searchnotwords'] = '这些词应当不包含在其中';
$string['searcholderposts'] = '搜索旧帖子...';
$string['searchphrase'] = '这个词组必须出现在帖子中';
$string['searchresults'] = '搜索结果';
$string['searchsubject'] = '这些文字应当出现在标题中';
$string['searchuser'] = '此名字要和作者匹配';
$string['searchuserid'] = '作者的Moodle ID';
$string['searchwhichforums'] = '选择要搜索哪个讨论区';
$string['searchwords'] = '这些文字可以在帖子的任何位置出现';
$string['seeallposts'] = '查看此用户发表的全部帖子';
$string['sendinratings'] = '呈送我的最新评分';
$string['showsubscribers'] = '显示/修改订阅者';
$string['singleforum'] = '单个简单话题';
$string['startedby'] = '发起人';
$string['subject'] = '主题';
$string['subscribe'] = '订阅此讨论区';
$string['subscribeall'] = '让所有人订阅此讨论区';
$string['subscribed'] = '订阅';
$string['subscribenone'] = '让所有人退订此讨论区';
$string['subscribers'] = '订阅者';
$string['subscribersto'] = '订阅“{$a}”者';
$string['subscribestart'] = '此论坛有新帖就发电子邮件给我';
$string['subscribestop'] = '此论坛有新帖不要发电子邮件给我';
$string['subscription'] = '订阅';
$string['subscriptions'] = '订阅';
$string['timestartenderror'] = '可视时段的结束时间不能早于开始时间。';
$string['trackforum'] = '跟踪未读信息';
$string['tracking'] = '跟踪';
$string['trackingoff'] = '关闭';
$string['trackingon'] = '开启';
$string['trackingoptional'] = '可选';
$string['trackingtype'] = '是否跟踪此讨论区的阅读情况？';
$string['unread'] = '未读';
$string['unreadposts'] = '未读帖子';
$string['unreadpostsnumber'] = '{$a}条未读帖子';
$string['unreadpostsone'] = '1条未读帖子';
$string['unsubscribe'] = '不再订阅该讨论区';
$string['unsubscribed'] = '未订阅';
$string['unsubscribeshort'] = '退订';
$string['yesforever'] = '是的，永远这样';
$string['yesinitially'] = '是的，初始设为这样';
$string['youratedthis'] = '您对此评分';
$string['yournewquestion'] = '您的新问题';
$string['yournewtopic'] = '您的新讨论话题';
$string['yourreply'] = '您的回复';

?>
