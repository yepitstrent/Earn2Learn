<?PHP // $Id: auth.php,v 1.45.2.5 2006/02/06 09:59:55 moodler Exp $ 
      // auth.php - created with Moodle 1.6 development (2005101200)


$string['alternatelogin'] = 'ここにURLを入力した場合、このサイトのログインページとして使用されます。ログインページでは、action属性に<strong>「 $a 」</strong>をセットして、 <strong>username</strong>フィールドおよび<strong>password</strong>フィールドを適切にMoodleに渡す必要があります。<br />間違ったURLを設定すると、あなたのサイトから締め出されることになりますので注意してください。<br />デフォルトのログイン画面を使用する場合は、空白のままにしてください。';
$string['alternateloginurl'] = '代替ログインURL';
$string['auth_cas_baseuri'] = 'サーバのURI  ( ベースURIが無い場合は空白 )<br />CASサーバが host.domaine.fr/CAS/ に応答する場合、<br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = 'MoodleデータベースにCAS認証ユーザを挿入したい場合は、「Yes」を選択してください。「No」を選択した場合は、Moodleデータベースに登録されているユーザのみがログインできます。';
$string['auth_cas_enabled'] = 'CAS認証を利用したい場合は、「Yes」を選択してください。';
$string['auth_cas_hostname'] = 'CASサーバのホスト名<br />例: host.domaine.fr';
$string['auth_cas_invalidcaslogin'] = '申し訳ございません、ログインに失敗しました - あなたは認証されませんでした。';
$string['auth_cas_language'] = '言語の選択';
$string['auth_cas_logincas'] = 'セキュアコネクション・アクセス';
$string['auth_cas_port'] = 'CASサーバのポート';
$string['auth_cas_server_settings'] = 'CASサーバ設定';
$string['auth_cas_text'] = 'セキュアコネクション';
$string['auth_cas_version'] = 'CASのバージョン';
$string['auth_casdescription'] = 'この方法は、単一ログイン環境 (Single Sign On environment: SSO) にて、CASサーバ (Central Authentication Service) をユーザ認証に使用します。シンプルLDAP認証を使用することもできます。ユーザ名とパスワードがCASで認証された場合、Moodleは新しいユーザエントリをデータベースに作成します。また、必要であれば、LDAPよりユーザ属性を取得します。次回からはユーザ名とパスワードのみが確認されます。';
$string['auth_castitle'] = 'CASサーバ ( SSO ) を使用';
$string['auth_changepasswordhelp'] = 'パスワードヘルプの変更';
$string['auth_changepasswordhelp_expl'] = 'ユーザが $a パスワードを忘れた場合、パスワード喪失ヘルプを表示します。これは、<strong>パスワード変更URL</strong>またはMoodle内部のパスワード変更画面と同時に、または代わりに表示されます。';
$string['auth_changepasswordurl'] = 'パスワードURLの変更';
$string['auth_changepasswordurl_expl'] = '$a パスワードを忘れたユーザが使用するURLを指定してください。<strong>通常のパスワード変更ページを使用する場合</strong>は、<strong>No</strong>を設定してください。';
$string['auth_common_settings'] = '一般設定';
$string['auth_data_mapping'] = 'データマッピング';
$string['auth_dbdescription'] = 'ユーザ名とパスワードを確認するために外部のデータベースを使用します。新しいアカウントを作成する場合、他のフィールドの情報がMoodleへ複製されます。';
$string['auth_dbextrafields'] = 'これらのフィールドは任意項目です。<b>外部データベースフィールド</b>より事前に入力されたMoodleユーザフィールドを選択することも可能です。<p>空白の場合は初期値が使用されます。</p><p>どちらの場合でも、ユーザはログイン後にすべてのフィールドを編集可能です。</p>';
$string['auth_dbfieldpass'] = 'パスワードを含んだフィールド名';
$string['auth_dbfielduser'] = 'ユーザ名を含んだフィールド名';
$string['auth_dbhost'] = 'データベースサーバが稼動しているコンピュータ';
$string['auth_dbname'] = 'データベース名';
$string['auth_dbpass'] = '上記ユーザ名に合致するパスワード';
$string['auth_dbpasstype'] = 'パスワードフィールドで使用するフォーマットを特定してください。MD5暗号化はPostNukeのような他の一般的なウェブアプリケーションへの接続に便利です。';
$string['auth_dbtable'] = 'データベースのテーブル名';
$string['auth_dbtitle'] = '外部データベースを使用';
$string['auth_dbtype'] = 'データベースタイプ ( 詳細は<a href=../lib/adodb/readme.htm#drivers>ADOdb documentation</a>をご覧ください )';
$string['auth_dbuser'] = 'データベースアクセス用のユーザ名';
$string['auth_emaildescription'] = 'メールによるアカウント確定はデフォルトの認証方法です。ユーザが新しいユーザ名とパスワードを選択してサインアップした場合、アカウント確定用メールがユーザのメールアドレスに送信されます。このメールにはユーザがアカウントを確定するためのリンクが記入されています。アカウント確定後のログインではMoodleデータベースに保存されているユーザ名とパスワードのみを確認します。';
$string['auth_emailtitle'] = 'Emailベースの認証';
$string['auth_fccreators'] = 'メンバーがコースの作成を許可されているグループの一覧です。複数のグループは「;」で分けてください。グループ名はFirstClassサーバと厳密に同じ名前にしてください。システムは、大文字と小文字を区別します。';
$string['auth_fcdescription'] = 'ここでは、ユーザ名とパスワードが正しいかチェックするためにFisrtClassサーバを使用します。';
$string['auth_fcfppport'] = 'サーバポート ( 3333が最も一般的 )';
$string['auth_fchost'] = 'FirstClassサーバアドレス。IPアドレスまたはDNS名を使用してください。';
$string['auth_fcpasswd'] = '上記アカウントのパスワード。';
$string['auth_fctitle'] = 'FirstClassサーバを使用';
$string['auth_fcuserid'] = '権限「Subadministrator」を持ったFirstClassアカウントのユーザID。';
$string['auth_fieldlock'] = '値をロックする';
$string['auth_fieldlock_expl'] = '<p><b>値をロックする:</b> このオプションを有効にした場合、Moodleユーザおよび管理者はフィールドを直接編集するのを防止します。外部認証システムでデータをメンテナンスしている場合にこのオプションを使用してください。</p>';
$string['auth_fieldlocks'] = 'ユーザフィールドのロック';
$string['auth_fieldlocks_help'] = '<p>ここではユーザフィールドをロックすることができます。ユーザレコードを管理者が手動で編集する方法、または「ユーザのアップロード」機能を使ってユーザレコードをアップロードする方法をとっている場合に便利です。Moodleで必要なフィールドをロックする場合、ユーザアカウントを作成するときにそれらのデータを必ず提供してください。そうでない場合は、アカウントを使用できなくなります。</p><p>このトラブルを避けるために、「空の時はロックしない」に設定することを考慮してください。</p>';
$string['auth_imapdescription'] = 'ユーザ名とパスワードを確認するためにIMAPサーバを使用します。';
$string['auth_imaphost'] = 'IMAPサーバアドレスです。IPアドレスではなくドメイン名を使用してください。';
$string['auth_imapport'] = 'IMAPサーバポート番号です。通常は143または993です。';
$string['auth_imaptitle'] = 'IMAPサーバを使用';
$string['auth_imaptype'] = 'IMAPサーバタイプです。IMAPサーバは異なる認証およびネゴシエーションを利用することが可能です。';
$string['auth_ldap_bind_dn'] = 'ユーザ検索にbindユーザを利用したい場合は、ここに明示してください。例 \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'bindユーザ用のパスワード';
$string['auth_ldap_bind_settings'] = 'Bind設定';
$string['auth_ldap_contexts'] = 'ユーザが配置されているコンテキスト一覧です。異なるコンテキストは「;」で分けてください。例 \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'ユーザ作成をメールによる認証で行う場合、ユーザが作成されるコンテキストを特定してください。セキュリティの観点から、このコンテキストは各ユーザごとに異なるものでなければなりません。Moodleが自動的にコンテキストからユーザを探しますので、ldap_context-vaiableをこのコンテキストに追加する必要はありません。<br /><b>注意!</b> ユーザ作成を動作させるために、auth/ldap/lib.phpファイルのauth_user_create() 関数を修正してください。';
$string['auth_ldap_creators'] = 'メンバーが新しいコースの作成を許されているグループのリストです。複数のグループは「;」で分けられています。通常は\'cn=teachers,ou=staff,o=myorg\'のようになります。';
$string['auth_ldap_expiration_desc'] = 'パスワードチェックの有効期限を無効にする場合、またはLDAPがLDAPサーバから直接passwordexpirationを参照する場合は、「No」を選択してください。';
$string['auth_ldap_expiration_warning_desc'] = 'パスワードの有効期限切れを警告するまでの日数を入力してください。';
$string['auth_ldap_expireattr_desc'] = 'オプション: ldap-attributeはパスワードの有効期限passwordExpirationTimeを保存します。';
$string['auth_ldap_graceattr_desc'] = '任意: 猶予ログイン属性をオーバーライドする';
$string['auth_ldap_gracelogins_desc'] = 'LDAPの猶予ログインサポートを有効にします。パスワードの有効期限が切れた後、猶予ログインカウントがゼロになるまでログインすることができます。この設定を「Yes」にすると、パスワードが期限切れになった場合に猶予ログインメッセージが表示されます。';
$string['auth_ldap_host_url'] = 'LDAPホストのURLを次ののように明示してください。\'ldap://ldap.myorg.com/\' または \'ldaps://ldap.myorg.com/\' 複数サーバのフェイルオーバーをサポートするには「;」で分離してください。';
$string['auth_ldap_login_settings'] = 'ログイン設定';
$string['auth_ldap_memberattribute'] = '任意: ユーザがグループに所属している場合、ユーザの属性を特定してください。通常は「member」です。';
$string['auth_ldap_objectclass'] = '任意: ldap_user_typeのname/searchユーザで使用されるオブジェクトクラスをオーバーライドしてください。通常、この設定を変更する必要はありません。';
$string['auth_ldap_opt_deref'] = '検索時にエイリアスがどのように扱われるか決定してください。次の値から選択してください:  「No」 (LDAP_DEREF_NEVER) または 「Yes」 (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAPパスワード有効期限設定';
$string['auth_ldap_preventpassindb'] = 'MoodleのDBにパスワードが保存されることを防ぐには「Yes」を選択してください。';
$string['auth_ldap_search_sub'] = 'サブコンテキストからユーザを検索する。';
$string['auth_ldap_server_settings'] = 'LDAPサーバ設定';
$string['auth_ldap_update_userinfo'] = 'LDAPよりMoodleの情報 ( 名、姓、住所等 ) を更新します。「データマッピング」設定を指定してください。';
$string['auth_ldap_user_attribute'] = '任意: name/searchユーザに使用される属性です。通常は「cn」です。';
$string['auth_ldap_user_settings'] = 'ユーザlookup設定';
$string['auth_ldap_user_type'] = 'ユーザがどのようにLDAPに保存されるか選択してください。この設定では、有効期限、猶予ログイン、ユーザ作成がどのようになされるのかも指定します。';
$string['auth_ldap_version'] = 'サーバで使用しているLDAPプロトコルのバージョン';
$string['auth_ldapdescription'] = '外部のLDAPサーバに対して認証を行います。ユーザ名とパスワードが正しい場合、Moodleは新しいユーザをデータベースに作成します。このモジュールはユーザ属性をLDAPから取得してMoodleのフィールドに入力します。認証後のログインではユーザ名とパスワードのみが確認されます。';
$string['auth_ldapextrafields'] = 'これらのフィールドは任意項目です。<b>LDAPフィールド</b>より事前に入力されたMoodleユーザフィールドを選択することも可能です。<p>空白の場合はLDAPよりデータの転送は行われずにMoodleの初期値が使用されます</p><p>どちらの場合でも、ユーザはログイン後にすべてのフィールドを編集可能です。</p>';
$string['auth_ldaptitle'] = 'LDAPサーバを使用';
$string['auth_manualdescription'] = 'この方法では、ユーザによるユーザアカウント作成機能を停止します。すべてのアカウント作成は、管理者により手動で行う必要があります。';
$string['auth_manualtitle'] = '手動アカウント作成のみ';
$string['auth_multiplehosts'] = '複数のホストまたはアドレスを設定できます ( 例 host1.com;host2.com;host3.com ) または ( 例 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx )';
$string['auth_nntpdescription'] = 'ユーザ名とパスワードを確認するためにNNTPサーバを使用します。';
$string['auth_nntphost'] = 'NNTPサーバアドレスです。IPアドレスではなくドメイン名を使用してください。';
$string['auth_nntpport'] = 'サーバポート ( 119が最も一般的です )';
$string['auth_nntptitle'] = 'NNTPサーバを使用';
$string['auth_nonedescription'] = 'ユーザはログインして外部サーバおよびメールによる認証無しにアカウントを直ちに作成できます。このオプションを使用するときは十分に注意してください - セキュリティーおよび管理上の問題が発生するかもしれないことを考えてください。';
$string['auth_nonetitle'] = '認証無し';
$string['auth_pamdescription'] = 'この方式では、サーバのネイティブユーザ名にアクセスする手段としてPAMを使用します。このモジュールを使用するためには、<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a>がインストールされている必要があります。';
$string['auth_pamtitle'] = 'PAM ( Pluggable Authentication Modules )';
$string['auth_passwordisexpired'] = 'あなたのパスワードの有効期限が切れました。パスワードを変更しますか?';
$string['auth_passwordwillexpire'] = 'あなたのパスワードの有効期限は、$a 日で切れます。パスワードを変更しますか?';
$string['auth_pop3description'] = 'ユーザ名とパスワードを確認するためにPOP3サーバを使用します。';
$string['auth_pop3host'] = 'POP3サーバアドレスです。IPアドレスではなくドメイン名を使用してください。';
$string['auth_pop3mailbox'] = '接続を試みるメールボックス名 ( 通常は受信ボックス )';
$string['auth_pop3port'] = 'サーバポート ( 110は最も一般的、995は一般的なSSL用です。 )';
$string['auth_pop3title'] = 'POP3サーバを使用';
$string['auth_pop3type'] = 'サーバタイプです。もし認証が必要な場合はpop3certを選択してください。';
$string['auth_radiusdescription'] = 'このメソッドでは、与えられたユーザ名およびパスワードが有効かチェックするため <a href=\"http://en.wikipedia.org/wiki/RADIUS\" target=\"_blank\">RADIUS</a> サーバを使用します。';
$string['auth_radiushost'] = 'RADIUSサーバのアドレス';
$string['auth_radiusnasport'] = '接続に使用するポート';
$string['auth_radiussecret'] = '共有鍵';
$string['auth_radiustitle'] = 'RADIUSサーバを使用';
$string['auth_shib_convert_data'] = 'データ修正API';
$string['auth_shib_convert_data_description'] = 'Shibbolethから提供されるデータを修正したい場合にこのAPIを使うことができます。詳細は、<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> をご覧ください。';
$string['auth_shib_convert_data_warning'] = 'ファイルが存在しないか、ウェブプロセスで読み取れません!';
$string['auth_shib_instructions'] = 'あなたの機関がShibbolethをサポートしている場合、Shibboleth経由のアクセスには、<a href=\"$a\">Shibbolethログイン</a>を使用してください。 <br />Shibbolethをサポートしていない場合は、ここに表示される通常ログインを使用してください。';
$string['auth_shib_instructions_help'] = 'Shibbolethに関してユーザに提示する説明文です。 これはログインページの説明セクションに表示されます。Shibbolethユーザが簡単にログインできるように \"<b>$a</b>\" のようなリンクを入れてください。空白にした場合、通常の説明文 ( Shibboleth限定ではなく ) が使用されます。';
$string['auth_shib_only'] = 'Shibbolethのみ';
$string['auth_shib_only_description'] = 'Shibboleth認証を強制する場合は、このオプションをチェックしてください。';
$string['auth_shib_username_description'] = 'Moodleユーザ名として使用されるShibbolethウェブサーバ環境のユーザ名';
$string['auth_shibboleth_login'] = 'Shibbolethログイン';
$string['auth_shibboleth_manual_login'] = '手動ログイン';
$string['auth_shibbolethdescription'] = 'この方法を使用すると、ユーザは<a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>を使用して作成および認証されます。<br>あなたが使用しているMoodleにShibbolethを設定するには、<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> をご覧ください。';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_updatelocal'] = 'ローカルデータの更新';
$string['auth_updatelocal_expl'] = '<p><b>ローカルデータの更新:</b> この設定を「Yes」にした場合、このフィールドは(外部認証を通して)ログイン毎またはユーザの同期ごとに更新されます。更新されるローカルフィールドはロックする必要があります。</p>';
$string['auth_updateremote'] = '外部データの更新';
$string['auth_updateremote_expl'] = '<p><b>外部データの更新:</b> この設定を「Yes」にした場合、ユーザレコードが更新される時に外部認証が更新されます。編集できるようにフィールドをアンロックする必要があります。</p>';
$string['auth_updateremote_ldap'] = '<p><b>注意:</b> 外部LDAPデータを更新するためには、binddnとbindpwを書き込み権を持ったbindユーザに設定する必要があります。現在、マルチバリュー属性を保護しません。また、更新時にエクストラバリューは取り除かれます。</p>';
$string['auth_user_create'] = 'ユーザの作成を許可する';
$string['auth_user_creation'] = '新しい ( 匿名の ) ユーザは外部認証によりユーザアカウントを作成することができます。ユーザの確定はメールによって行われます。このオプションを有効にした場合、module-specificオプションも同時に有効にする必要があります。';
$string['auth_usernameexists'] = 'このユーザ名はすでに存在します。新しいものを選んでください。';
$string['authenticationoptions'] = '認証オプション';
$string['authinstructions'] = 'どのようなユーザ名やパスワードを使用したらよいのかユーザに説明します。ここに入力した文章はログインページに表示されます。空白の場合、何も表示されません。';
$string['changepassword'] = 'パスワードURLの変更';
$string['changepasswordhelp'] = 'ユーザがユーザ名/パスワードを忘れたときに回復または変更するためのボタンをログインページに表示します。この設定により、ログインページおよびユーザページにボタンが表示されます。空白の場合、ボタンは表示されません。';
$string['chooseauthmethod'] = '認証方法の選択:';
$string['forcechangepassword'] = 'パスワード変更の強制';
$string['forcechangepassword_help'] = '次にMoodleへログインするときに、ユーザのパスワード変更を強制します。';
$string['forcechangepasswordfirst_help'] = '最初にMoodleへログインするときに、ユーザのパスワード変更を強制します。';
$string['guestloginbutton'] = 'ゲストログインボタン';
$string['infilefield'] = 'ファイルの必須フィールド';
$string['instructions'] = '説明';
$string['internal'] = '内部';
$string['locked'] = 'ロックする';
$string['md5'] = 'MD5暗号化';
$string['passwordhandling'] = 'パスワードフィールド取り扱い';
$string['plaintext'] = 'テキスト';
$string['shib_no_attributes_error'] = 'あなたはShibbolethによる認証を行ったようですが、Moodleはユーザ属性を受信していません。Moodleが稼動しているプロバイダへ必要な属性 ( $a ) を発行するアイデンティティ・プロバイダを確認するか、このサーバの管理者に連絡してください。';
$string['shib_not_all_attributes_error'] = 'あなたの場合、存在していないShibboleth属性をMoodleは必要とします。属性は次のとおりです: $a<br/>このサーバの管理者またはアイデンティティ・プロバイダにご連絡ください。';
$string['shib_not_set_up_error'] = 'Shibboleth認証が正しく設定されていないようです。Shibboleth認証の設定に関する更なる情報は、<a href=\"README.txt\">README</a>をご覧ください。';
$string['showguestlogin'] = 'ログインページのゲストログインボタンを表示／非表示にできます。';
$string['stdchangepassword'] = '標準パスワード変更ページを使用';
$string['stdchangepassword_expl'] = '外部認証システムがMoodleにパスワードの変更を許可する場合、この設定を「Yes」にしてください。この設定は、「Change Password URL」をオーバーライドします。';
$string['stdchangepassword_explldap'] = '注意: LDAPサーバがリモートの場合、SSL暗号化トンネル (ldaps://) の使用をお勧めします。';
$string['unlocked'] = 'ロックしない';
$string['unlockedifempty'] = '空の場合はロックしない';
$string['update_never'] = 'しない';
$string['update_oncreate'] = '作成時';
$string['update_onlogin'] = '毎回ログイン時';
$string['update_onupdate'] = '更新時';

?>
