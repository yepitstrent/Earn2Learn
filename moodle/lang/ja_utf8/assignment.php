<?PHP // $Id: assignment.php,v 1.13.2.4 2006/02/06 09:59:59 moodler Exp $ 
      // assignment.php - created with Moodle 1.6 development (2005101200)


$string['allowresubmit'] = '再提出を許可する';
$string['assignmentdetails'] = '課題の詳細';
$string['assignmentmail'] = '$a->teacher があなたの課題「 $a->assignment 」に対するフィードバックを登録しました。

フィードバックはあなたの提出課題に追加されています:

$a->url';
$string['assignmentmailhtml'] = '$a->teacher があなたの課題「 <i>$a->assignment</i> 」 に対する提出課題にフィードバックを登録しました。<br /><br />フィードバックはあなたの<a href=\"$a->url\">提出課題</a>に追加されています。';
$string['assignmentname'] = '課題名';
$string['assignmenttype'] = '課題タイプ';
$string['availabledate'] = '開始日時';
$string['comment'] = 'コメント';
$string['commentinline'] = 'インラインコメント';
$string['configitemstocount'] = 'オンライン課題でカウントされる学生の提出課題の種類';
$string['configmaxbytes'] = 'このサイトにおけるすべての課題に関するデフォルトの最大サイズ ( コース制限および他のローカル設定に従います )';
$string['description'] = '詳細';
$string['duedate'] = '終了日時';
$string['duedateno'] = '提出期限無し';
$string['early'] = '$a 早く提出';
$string['editmysubmission'] = '提出課題を編集';
$string['emailteachermail'] = '$a->username が「 $a->assignment 」の提出課題を更新しました。

下記にて閲覧可能です:

$a->url';
$string['emailteachermailhtml'] = '$a->username が「 <i>$a->assignment</i> 」の提出課題を更新しました。<br /><br />
<a href=\"$a->url\">ウェブサイトにて閲覧可能です</a>。';
$string['emailteachers'] = '教師にメール通知する';
$string['emptysubmission'] = 'あなたはまだ何も提出していません。';
$string['existingfiledeleted'] = '登録済みファイルが削除されました: $a';
$string['failedupdatefeedback'] = 'ユーザ $a のフィードバック更新に失敗しました ';
$string['feedback'] = 'フィードバック';
$string['feedbackfromteacher'] = '$a のフィードバック';
$string['feedbackupdated'] = '$a の参加者に対するフィードバックの更新';
$string['guestnosubmit'] = '申し訳ございません、ゲストは課題を提出できません。課題を提出するにはログインまたはユーザ登録してください。';
$string['guestnoupload'] = '申し訳ございません、ゲストはアップロードできません。';
$string['helpoffline'] = '<p>このタイプの課題は、Moodleの外で課題が行われる時に便利です。他のウェブサイト上での課題、対面により課される課題が考えられます。</p>
<p>学生は課題の説明を読むことはできますが、ファイル等をアップロードすることはできません。評定は通常どおり動作し、評定に関する通知メールが学生宛に送信されます。</p>';
$string['helponline'] = '<p>このタイプの課題は、ユーザに通常の編集ツールを使用したテキストの編集を求めます。教師はオンラインでこれらを評定でき、インラインコメントの追加・変更を行うこともできます。</p>
<p>(  あなたが古いバージョンのMoodleに慣れているのでしたら、このタイプの課題は古い日誌モジュールと同じように動作すると考えてください。 )</p>';
$string['helpuploadsingle'] = '<p>このタイプの課題では、各参加者があらゆる種類の単一ファイルをアップロードすることができます。</p> <p>ワードプロセッサ文書、イメージ、ZIP圧縮したウェブサイト、その他あなたが参加者に提出するように求めたファイルです。</p>';
$string['late'] = '$a 遅く提出';
$string['maximumgrade'] = '最大評価';
$string['maximumsize'] = '最大サイズ';
$string['modulename'] = '課題';
$string['modulenameplural'] = '課題';
$string['newsubmissions'] = '課題が提出されました。';
$string['noassignments'] = '課題はまだありません。';
$string['noattempts'] = 'この課題には提出物がありません。';
$string['notgradedyet'] = '未評価';
$string['notsubmittedyet'] = '未提出';
$string['overwritewarning'] = '注意: 再度アップロードすることにより現在の提出物は置き換えられます。';
$string['pagesize'] = '1ページあたりの提出課題数';
$string['preventlate'] = '提出期限後の課題提出を許可しない';
$string['quickgrade'] = 'クイック評定を許可';
$string['saveallfeedback'] = 'フィードバックを保存する';
$string['submission'] = '提出課題';
$string['submissionfeedback'] = '提出課題へのフィードバック';
$string['submissions'] = '提出課題';
$string['submissionsaved'] = '変更内容が保存されました。';
$string['submitassignment'] = 'このフォームを使用して課題を提出する';
$string['submitted'] = '提出';
$string['typeoffline'] = 'オフライン活動';
$string['typeonline'] = 'オンラインテキスト';
$string['typeuploadsingle'] = '単一ファイルのアップロード';
$string['uploadbadname'] = '不正な文字がファイル名に含まれているため、このファイルをアップロードできませんでした。';
$string['uploadedfiles'] = 'ファイルをアップロードしました。';
$string['uploaderror'] = 'サーバにファイルの保存中にエラーが発生しました。';
$string['uploadfailnoupdate'] = 'ファイルはアップロードされましたが提出物の更新はできませんでした!';
$string['uploadfiletoobig'] = '申し訳ございません、ファイルサイズが制限を越えています ( $a バイト以内 )';
$string['uploadnofilefound'] = 'ファイルが見つかりませんでした - 実際に存在するファイルですか?';
$string['uploadnotregistered'] = '「 $a 」は正常にアップロードされましたが登録されませんでした!';
$string['uploadsuccess'] = '「 $a 」のアップロードが完了しました。';
$string['viewfeedback'] = '課題の評価とフィードバックを確認する';
$string['viewsubmissions'] = '$a 件の提出課題を確認する';
$string['yoursubmission'] = 'あなたの提出課題';

?>
