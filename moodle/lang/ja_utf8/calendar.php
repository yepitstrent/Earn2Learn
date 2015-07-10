<?PHP // $Id: calendar.php,v 1.7.2.4 2006/02/06 09:59:59 moodler Exp $ 
      // calendar.php - created with Moodle 1.6 development (2005101200)


$string['calendar'] = 'カレンダー';
$string['calendarheading'] = '$a カレンダー';
$string['clickhide'] = '非表示';
$string['clickshow'] = '表示';
$string['confirmeventdelete'] = '本当にこのイベントを削除してもよろしいですか?';
$string['courseevents'] = 'コースイベント';
$string['dayview'] = '1日分表示';
$string['daywithnoevents'] = 'イベントがありません。';
$string['default'] = 'デフォルト';
$string['deleteevent'] = 'イベントの削除';
$string['detailedmonthview'] = '詳細な月表示';
$string['durationminutes'] = '期間 ( 分 )';
$string['durationnone'] = '期間無し';
$string['durationuntil'] = '終了日:';
$string['editevent'] = 'イベントの編集';
$string['errorbeforecoursestart'] = 'コースの開始日以前にはイベントを登録できません';
$string['errorinvaliddate'] = '日付に間違いがあります';
$string['errorinvalidminutes'] = '期間 ( 分 ) を1から999の間で指定してください。';
$string['errorinvalidrepeats'] = 'イベントを1から999の間で指定してください。';
$string['errornodescription'] = '説明を入力してください';
$string['errornoeventname'] = '名称を入力してください';
$string['eventdate'] = '日付';
$string['eventdescription'] = '説明';
$string['eventduration'] = '期間';
$string['eventendtime'] = '終了日時';
$string['eventinstanttime'] = '時間';
$string['eventkind'] = 'イベントの種類';
$string['eventname'] = '名称';
$string['eventrepeat'] = '繰り返し';
$string['eventsfor'] = '$a イベント';
$string['eventstarttime'] = '開始日時';
$string['eventtime'] = '時間';
$string['eventview'] = 'イベント詳細';
$string['expired'] = '期間終了';
$string['explain_lookahead'] = 'ここではイベントが直近のイベントとして表示されるための最大日数を設定します。この範囲より後に開催されるイベントは、直近イベントとして表示されません。すべてのイベントがこのスケジュールどおりに開始されることは<strong>保証されません</strong>; もし数多く ( 「直近イベントの最大表示数」以上 ) のイベントが登録されている場合は、時間が遅いイベントが表示されません。';
$string['explain_maxevents'] = 'ここでは直近イベントの最大表示数を設定します。ここで大きな数を設定した場合は、直近のイベントを大量に表示するための画面スペースが必要になります。';
$string['explain_persistflt'] = 'この設定を行った場合、Moodleはあなたの最新のイベントフィルタ設定を記憶します。また、あなたがログインするたびに最新のイベントを自動的に表示します。';
$string['explain_startwday'] = 'ここではすべての月間カレンダーの表示方法を設定します。あなたが慣れ親しんだ表示になるように設定してください。';
$string['explain_timeformat'] = '時間の表示は12時間表示または24時間表示を選択することができます。デフォルトを選択した場合は、使用言語に合わせてフォーマットが自動的に選択されます。';
$string['fri'] = '金';
$string['friday'] = '金曜日';
$string['globalevents'] = '全体のイベント';
$string['gotocalendar'] = 'カレンダーへ移動';
$string['groupevents'] = 'グループイベント';
$string['hidden'] = '非表示中';
$string['manyevents'] = '$a イベント';
$string['mon'] = '月';
$string['monday'] = '月曜日';
$string['monthlyview'] = '月表示';
$string['newevent'] = '新しいイベント';
$string['noupcomingevents'] = '直近のイベントはありません';
$string['oneevent'] = '1 イベント';
$string['pref_lookahead'] = '直近イベントの日数範囲';
$string['pref_maxevents'] = '直近イベントの最大表示数';
$string['pref_persistflt'] = 'フィルタ設定を記憶する';
$string['pref_startwday'] = '週の初め';
$string['pref_timeformat'] = '時間フォーマット';
$string['preferences'] = '設定';
$string['preferences_available'] = '個人設定';
$string['repeateditall'] = '変更内容をすべての $a 繰り返しイベントに適用する。';
$string['repeateditthis'] = '変更内容をこのイベントのみに適用する。';
$string['repeatnone'] = '繰り返し無し';
$string['repeatweeksl'] = '毎週、作成イベント数';
$string['repeatweeksr'] = '件';
$string['sat'] = '土';
$string['saturday'] = '土曜日';
$string['shown'] = '表示中';
$string['spanningevents'] = '進行中イベント';
$string['sun'] = '日';
$string['sunday'] = '日曜日';
$string['thu'] = '木';
$string['thursday'] = '木曜日';
$string['timeformat_12'] = '12時間 ( 午前/午後 )';
$string['timeformat_24'] = '24時間';
$string['today'] = '今日';
$string['tomorrow'] = '明日';
$string['tt_deleteevent'] = 'イベントの削除';
$string['tt_editevent'] = 'イベントの編集';
$string['tt_hidecourse'] = 'コースイベントは表示中です (  クリックで非表示  )';
$string['tt_hideglobal'] = '全体のイベントは表示中です (  クリックで非表示  )';
$string['tt_hidegroups'] = 'グループイベントは表示中です (  クリックで非表示  )';
$string['tt_hideuser'] = 'ユーザイベントは表示中です (  クリックで非表示  )';
$string['tt_showcourse'] = 'コースイベントは非表示中です(  クリックで表示  )';
$string['tt_showglobal'] = '全体のイベントは非表示中です (  クリックで表示  )';
$string['tt_showgroups'] = 'グループイベントは非表示中です (  クリックで表示  )';
$string['tt_showuser'] = 'ユーザイベントは非表示中です (  クリックで表示  )';
$string['tue'] = '火';
$string['tuesday'] = '火曜日';
$string['typecourse'] = 'コースイベント';
$string['typegroup'] = 'グループイベント';
$string['typesite'] = 'サイトイベント';
$string['typeuser'] = 'ユーザイベント';
$string['upcomingevents'] = '直近イベント';
$string['userevents'] = 'ユーザイベント';
$string['wed'] = '水';
$string['wednesday'] = '水曜日';
$string['yesterday'] = '昨日';
$string['youcandeleteallrepeats'] = 'このイベントは繰り返しイベントの一部です。あなたはこのイベントのみを削除することもできますし、一度にすべての $a イベントを削除することもできます。';

?>