<?PHP // $Id: auth.php,v 1.3.2.4 2006/02/06 10:00:39 moodler Exp $ 
      // auth.php - created with Moodle 1.6 development (2005060201)


$string['alternatelogin'] = 'Kapag nagpasok ka ng URL dito, gagamitin ito bilang pahinang panglog-in para sa site na ito.  Dapat maglaman ang pahina ng isang form na ang action property ay nakatakda sa <strong>\'$a\'</strong> at mga  return field na <strong>username</strong> at <strong>password</strong>.<br />Ingatan na huwag makapagpasok ng maling URL, kundi\'y masasarhan kayo ng site na ito.<br />Iwanang blangko ang kaayusang ito upang gamitin ang default na pahinang panglog-in.';
$string['alternateloginurl'] = 'Alternatibong PinaglaLog-inan na URL';
$string['auth_cas_baseuri'] = 'URL ng server (wala kung walang baseUri)<br />halimbawa, kung ang CAS server ay tumutugon sa host.domaine.fr/CAS/ , samakatuwid ay <br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = 'Buhayin ito kung nais mong magsingit ng mga CAS-authenticated na user sa Moodle database.  Kung hindi ay tanging ang mga user na nasa Moodle database na, ang maaaring maglog-in.';
$string['auth_cas_enabled'] = 'Buhayin ito kung nais mong gumamit ng CAS na pag-aauthenticate.';
$string['auth_cas_hostname'] = 'Hostname ng CAS server <br />hal:host.domain.fr';
$string['auth_cas_invalidcaslogin'] = 'Paumanhin, nabigo ang paglalog-in mo - hindi ka ma-authorise';
$string['auth_cas_language'] = 'Piniling wika';
$string['auth_cas_logincas'] = 'Pagpasok na may ligtas na koneksiyon';
$string['auth_cas_port'] = 'Port ng CAS server';
$string['auth_cas_server_settings'] = 'Kaayusan ng CAS server';
$string['auth_cas_text'] = 'Ligtas na koneksiyon';
$string['auth_cas_version'] = 'Bersiyon ng CAS';
$string['auth_casdescription'] = 'Ang paraang ito ay gumagait ng CAS server (Central Authentication Service) upang ma-authenticate ang mga user sa isang Single Sign On environment (SSO). Maaari ka ring gumamit ng simpleng LDAP na pag-aauthenticate, kung ang ibinigay na username at password ay tanggap ayon sa CAS, lilikha ang Moodle ng bagong user entry sa database nito, gamit ang mga user attribute mula sa LDAP kung kinakailangan.  Sa mga susunod na paglog-in, tanging ang username at password ang tsetsekin.';
$string['auth_castitle'] = 'Gumamit ng CAS server (SSO)';
$string['auth_changepasswordhelp'] = 'Palitan ang pantulong sa password';
$string['auth_changepasswordhelp_expl'] = 'Ipakita ang pantulong para sa nawawalang password sa mga user na nawala ang kanilang $a na password.  Ipapakita ito kasama na o kapalit ng <strong>Baguhin ang Password na URL</strong> o dili kaya\'y Internal na pagbabago ng password ng Moodle.';
$string['auth_changepasswordurl'] = 'Baguhin ang URL ng password';
$string['auth_changepasswordurl_expl'] = 'Itakda ang url na ipapadala sa mga user na naiwala ang kanilang $a password. Itakda ang <strong>Gamitin ang istandard na Baguhin ang Password na pahina</strong> sa <strong>Hindi</strong>.';
$string['auth_common_settings'] = 'Kaayusang para sa lahat';
$string['auth_data_mapping'] = 'Data mapping';
$string['auth_dbdescription'] = 'Gumagamit ang paraang ito ng panlabas na database teybol upang masuri kung ang ibinigay na username at password ay tanggap.  Kung bago ang account, ang impormasyon sa iba pang field ay maaari ring kopyahin ng Moodle.';
$string['auth_dbextrafields'] = 'Opsiyonal ang mga field na ito.  Maaari mong piliin na magkalaman kaagad ang ilang Moodle-user-field ng impormasyon mula sa <b>mga panlabas na database field</b> na tutukuyin mo rito. <p>Kung pababayaan mong blangko ang mga ito, ang mga default ang gagamitin.</p><p>Ano\'t-anuman, maeedit ng mga user ang mga field na ito pagkatapos nilang maglog-in.</p>';
$string['auth_dbfieldpass'] = 'Pangalan ng field na naglalaman ng mga password';
$string['auth_dbfielduser'] = 'Pangalan ng field na naglalaman ng mga username';
$string['auth_dbhost'] = 'Ang kompyuter na naghohost ng database server.';
$string['auth_dbname'] = 'Pangalan ng database mismo';
$string['auth_dbpass'] = 'Password na katugon ng username sa itaas';
$string['auth_dbpasstype'] = 'Itakda ang format na gagamitin ng password field.  Magagamit ang MD5 encryption sa pagkonek sa ibang karaniwang aplikasyong pangweb tulad ng PostNuke';
$string['auth_dbtable'] = 'Pangalan ng teybol sa database';
$string['auth_dbtitle'] = 'Gumamit ng panlabas na database';
$string['auth_dbtype'] = 'Ang uri ng database (Tingnan ang <a href=\"../lib/adodb/readme.htm#drivers\">Dokumentasyon ng ADOdb</a> para sa detalye)';
$string['auth_dbuser'] = 'Username na may karapatang basahin ang database';
$string['auth_emaildescription'] = 'Ang email confirmation ang default na paraan ng pag-aauthenticate.  Kapag nag-sign-up ang user at napili na nila ang sarili nilang username at password, may ipapadalang confirmation email sa email address ng user.  Ang email na ito ay may ligtas na link sa isang pahina na maaaring kumpirmahin ng user ang account niya.  Sa mga susunod na log-in ay itsetsek na lamang ang username at password kung nasa Moodle database nga ito.';
$string['auth_emailtitle'] = 'Pag-aauthenticate na nakabatay sa email';
$string['auth_fccreators'] = 'Listahan ng mga pangkat na ang mga miyembro ay pinapahintulutan na lumikha ng mga bagong kurso.  Paghiwalayin ang maraming pangkat ng \';\'. Ang mga pangalan ay kailangang baybayin nang katulad-na-katulad ng nasa FirstClass server. Mahalaga sa sistema ang pagkakaiba ng laki ng mga titik (case-sensitive).';
$string['auth_fcdescription'] = 'Gumagamit ang paraang ito ng FirstClass server para matsek kung tanggap ang ibinigay na username at password.';
$string['auth_fcfppport'] = 'Server port (3333 ang pinakakaraniwan)';
$string['auth_fchost'] = 'Ang address ng FirstClass server. Gamitin ang IP number o DNS name.';
$string['auth_fcpasswd'] = 'Password para sa account na nasa itaas.';
$string['auth_fctitle'] = 'Gumamit ng FirstClass server';
$string['auth_fcuserid'] = 'Userid para sa FirstClass account na may pribilehiyong \'Subadministrator\' na itinakda.';
$string['auth_fieldlock'] = 'Ikandado ang halaga';
$string['auth_fieldlock_expl'] = '<p><b>Ikandado ang halaga:</b> Kapag binuhay, ay pipigil sa mga Moodle user at admin na editin ang field nang direkta.  Gamitin ang opsiyong ito kung pinapanatili mo ang datos na ito sa panlabas na auth system. </p>';
$string['auth_fieldlocks'] = 'Ikandado ang mga field ng user';
$string['auth_fieldlocks_help'] = '<p>Maari mong ikandado ang mga data field ng user.  Kapakipakinabang para sa mga site na ang datos ng user ay minementina ng administrador nang mano-mano; sa pamamagitan ng pag-edit ng mga rekord ng user o pag-aaplowd g�mit ang \'Iaplowd ang mga user\' na pasilidad.  Kung ikinakandado mo ang mga field na kinakailangan ng Moodle, tiyakin ninyo na ibibigay ninyo ang datos na ito sa paglikha ng mga account ng user &emdash; kundi ay hindi magagamit ang mga account.</p><p>Pag-isipan ninyo kung mas mabuting itakda ang mode ng pagkandado sa \'Dinakakandado kung walang laman\' upang maiwasan ang problemang ito.</p>';
$string['auth_imapdescription'] = 'Gumagamit ang paraang ito ng IMAP server upang matsek kung tanggap ang ibinigay na username at password.';
$string['auth_imaphost'] = 'Ang address ng IMAP server.  Gamitin ang IP number, huwag ang DNS name.';
$string['auth_imapport'] = 'Port number ng IMAP server.  Ito ay karaniwang 143 o 993.';
$string['auth_imaptitle'] = 'Gumamit ng IMAP server';
$string['auth_imaptype'] = 'Ang uri ng IMAP server.  Maaaring magkaroon ng iba\'t-ibang uri ng pag-aauthenticate at negotiation ang mga IMAP server.';
$string['auth_ldap_bind_dn'] = 'Kung nais mong gumamit ng bind-user upang maghanap ng mga user, itakda mo rito.  Tulad nito \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password para sa bind-user.';
$string['auth_ldap_bind_settings'] = 'Kaayusan ng bind';
$string['auth_ldap_contexts'] = 'Listahan ng mga konteksto ng lokasyon ng user.  Paghiwalayin ang iba\'t-ibang konteksto ng \';\'. Halimbawa: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Kung bubuhayin mo ang paglikha ng user na may email confirmation, itakda mo ang konteksto kung saa lilikhain ang mga user.  Ang kontekstong ito ay dapat kakaiba ng sa iba panguser upang maiwasan ang mga problema sa seguridad.  Hindi mo kailangang ilagay ang kontekstong ito sa ldap_context-variable, awtomatikong hahanapin ng Moodle ang user sa kontekstong ito.<br /><b>Tandaan!</b> Kailangan mong baguhin ang function na auth_user_create() sa file na auth/ldap/lib.php upang mapagana ang paglikha ng user';
$string['auth_ldap_creators'] = 'Listahan ng mga pangkat na ang mga miyembro ay pinapayagang lumikha ng bagong kurso.  Paghiwalayin ang maraming pangkat ng \';\'. Karaniwan ay tulad ng \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Piliin ang Hindi upang mapatay ang pagtsek ng pas� nang password o para basahin ng LDAP ang oras ng passwordexpiration nang direkta mula sa LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Bilang ng araw bago ipakita ang babala sa pagkapas� ng password.';
$string['auth_ldap_expireattr_desc'] = 'Opsiyonal: Nananaig sa ldap-attribute na nag-iimbak ng oras ng pagkapas� ng password passwordExpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Opsiyonal: Nananaig sa gracelogin attribute';
$string['auth_ldap_gracelogins_desc'] = 'Buhayin ang may palugit na paglog-in (gracelogin) na suporta sa LDAP.  Matapos mapas� ang password, ang user ay makapaglalog-in pa hanggang maging 0 ang bilang ng palugit sa paglalog-in.  Ang pagpapagana ng kaayusang ito ay magpapakita ng mensahe ng may-palugit na log-in kapag ang password ay pas� na.';
$string['auth_ldap_host_url'] = 'Itakda ang LDAP host sa anyong-URL tulad ng  \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\' Paghiwalayin ang maraming server ng \';\' upang makakuha ng suportang failover. ';
$string['auth_ldap_login_settings'] = 'Kaayusan ng log-in';
$string['auth_ldap_memberattribute'] = 'Opsiyonal: Nananaig sa user member attribute, kapag ang mga user ay kabilang sa isang pangkat.  Karaniwan ay \'member\'';
$string['auth_ldap_objectclass'] = 'Opsiyonal: Nananaig sa objectClass na ginagamit sa pagpapangalan/paghahanap ng mga user sa ldap_user_type.  Kadalasan ay hindi mo na kailangang baguhin ito.';
$string['auth_ldap_opt_deref'] = 'Itinatakda kung paano hinahandle ang mga alias kapag naghahanap.  Piliin ang isa sa mga sumusunod na halaga:  \"Hindi\" (LDAP_DEREF_NEVER) o \"Oo\" (LDAP_DEREF_ALWAYS) ';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password expiration settings.';
$string['auth_ldap_preventpassindb'] = 'Piliin ang oo upang huwag maimbak ang mga password sa DB ng Moodle.';
$string['auth_ldap_search_sub'] = 'Hanapin ang mga user mula sa subcontext.';
$string['auth_ldap_server_settings'] = 'Kaayusan ng LDAP server';
$string['auth_ldap_update_userinfo'] = 'Baguhin ang impormasyon ng user (unang pangalan, apelyido, tirahan..) mula LDAP hanggang Moodle.  Itakda ang kaayusan ng \"Data mapping\" alinsunod sa pangangailangan mo.';
$string['auth_ldap_user_attribute'] = 'Opsiyonal: Nananaig sa attribute na ginagamit sa pagpapangalan/paghahanap ng mga user.  Karaniwan ay \'cn\'.';
$string['auth_ldap_user_settings'] = 'Pang-lookup na kaayusan ng user';
$string['auth_ldap_user_type'] = 'Piliin kung paano iiimbak ang user sa LDAP.  Itinatakda ng kaayusang ito kung paano gumagana ang pagkapas� ng log-in, may palugit na paglog-in at paglikha ng user. ';
$string['auth_ldap_version'] = 'Ang bersiyon ng LDAP protocol na ginagamit ng server mo ay.';
$string['auth_ldapdescription'] = 'Ang paraang ito ay nagbibigay ng pag-aauthenticate alinsunod sa isang panlabas na LDAP server.  
Kung tanggap ang ibinigay na username at password, lilikha ang Moodle ng bagong user 
entry sa database nito.  Nakababasa ang modyul na ito ng mga user attribute mula sa LDAP at napupunan nang maaga 
ang mga kailangang field sa Moodle.  Sa mga susunod na log-in, tanging ang username at 
password ang tsinitsek.';
$string['auth_ldapextrafields'] = 'Ang mga field na ito ay opsiyonal.  Maaari mong piliing mapunan nang maaga ang ilang Moodle user field ng impormasyon mula sa <b>mga LDAP field</b> na itatakda mo rito. <p>Kapag iniwan mong blangko ang mga field na ito, walang maisasalin mula sa LDAP at sa halip ay mga Moodle default ang gagamitin.</p><p>Anu\'t-anoman, maeedit ng user ang mga field na ito pagkatapos nilang maglog-in.</p>';
$string['auth_ldaptitle'] = 'Gumamit ng LDAP server';
$string['auth_manualdescription'] = 'Inaalis ng paraang ito ang anumang paraan para makalikha ang mga user ng sarili nilang account.  Lahat ng user ay kailangang likhain nang mano-mano ng admin user.';
$string['auth_manualtitle'] = 'Tanging mano-mano na account';
$string['auth_multiplehosts'] = 'Maaring magtakda ng maraming host O address (hal. host1.com;host2.com;host3.com) o (hal. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = 'Gumagamit ang paraang ito ng NTTP server upang matsek kung tanggap ang ibinigay na username at password.';
$string['auth_nntphost'] = 'Ang address ng NNTP server.  Gamitin ang IP numver, huwag ang DNS name.';
$string['auth_nntpport'] = 'Server port (119 ang pinakakaraniwan)';
$string['auth_nntptitle'] = 'Gumamit ng NNTP server';
$string['auth_nonedescription'] = 'Maaring magsign-in at lumikha ng kaagad ng tanggap na account ang mga user, nang walang pag-aauthenticate sa isang panlabas na server at walang kumpirmasyon sa pamamagitan ng email.  Mag-ingat sa paggamit ng opsiyong ito - isipin mo na lamang ang ibubunga nitong problemang panseguridad at pang-administrasyon.';
$string['auth_nonetitle'] = 'Walang pag-aauthenticate';
$string['auth_pamdescription'] = 'Gumagamit ang paraang ito ng PAM upang mapasok ang mga taal na username sa server na ito.  Kailangan mong iinstol ang <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\"target=\"_blank\">PHP4 PAM na Pag-aauthenticate</a> para magamit ang modyul na ito.';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'Pas� na ang password mo. Nais mo bang baguhin ang iyong password ngayon?';
$string['auth_passwordwillexpire'] = 'Mapapas� ang password mo sa loob ng $a araw.  Nais mo bang baguhin ang iyong password ngayon?';
$string['auth_pop3description'] = 'Gumagamit ang paraang ito ng POP3 server upang matsek kung tanggap ang ibinigay na username at password.';
$string['auth_pop3host'] = 'Ang address ng POP3 server.  Gamitin ang IP number, huwag ang DNS name.';
$string['auth_pop3mailbox'] = 'Pangalan ng mailbox na pagtatangkaang magkipagkonek. (karaniwan ay INBOX)';
$string['auth_pop3port'] = 'Server port (110 ang pinakakaraniwan, 995 ay karaniwan sa SSL)';
$string['auth_pop3title'] = 'Gumamit ng POP3 server';
$string['auth_pop3type'] = 'Uri ng server.  Kung gumagamit ng certificate security ang server mo, piliin ang pop3cert.';
$string['auth_shib_convert_data'] = 'API para sa pagbabago ng datos';
$string['auth_shib_convert_data_description'] = 'Magagamit mo ang API na ito upang lalong mabago ang datos na ibinigay ng Shibboleth. Basahin ang <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> para sa iba pang instruksiyon.';
$string['auth_shib_convert_data_warning'] = 'Walang ganitong file o hindi ito mabasa ng proseso na webserver!';
$string['auth_shib_instructions'] = 'Gamitin ang <a href=\"$a\">Shibboleth log-in</a> upang makapasok sa pamamagitan ng Shibboleth, kung sinusuportahan ito ng isntitusyon mo. <br />Kung hindi, gamitin ang normal na form ng log-in na ipinapakita rito.';
$string['auth_shib_instructions_help'] = 'Dito ay dapat kang magbigay ng pasadyang panuto para sa user mo na nagpapaliwanag ng Shibboleth.  Ipapakita ito sa pahinang panglog-in sa may seksiyon ng panuto.  Dapat itong magkaroon ng link na \"<b>$a</b>\" upang makapaglog-in ng madali ang mga user ng Shibboleth.  Kapag iniwan mo itong blangko, ang mga istandard na panuto ang gagamitin (hindi ang partikular sa Shibboleth)';
$string['auth_shib_only'] = 'Shibboleth lamang';
$string['auth_shib_only_description'] = 'Tsekan ang opsiyon na ito kung ipatutupad ang isang Shibboleth na pag-aauthenticate';
$string['auth_shib_username_description'] = 'Pangalan ng webserver Shibboleth environment baryabol na gagamitin bilang Moodle username';
$string['auth_shibboleth_login'] = 'Shibboleth Log-in';
$string['auth_shibboleth_manual_login'] = 'Mano-manong Log-in';
$string['auth_shibbolethdescription'] = 'Sa pamamagitan ng paraang ito, ang mga user ay lilikhain at iaauthenticate sa pamamagitan ng <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>. <br>Tiyakin ninyo na nabasa ninyo ang <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> ng Shibboleth, ito ay para sa kung paano iaayos ang Moodle mo na may Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_updatelocal'] = 'Baguhin ang lokal';
$string['auth_updatelocal_expl'] = '<p><b>Baguhin ang lokal:</b> Kapag binuhay, ang field ay babaguhin (mula sa panlabas na auth) tuwing maglalog-in ang user o may user synchronization.  Dapat ikandado ang field na isinaayos na magpanibago nang lokal.</p>';
$string['auth_updateremote'] = 'Baguhin ang panlabas na datos';
$string['auth_updateremote_expl'] = '<p><b>Baguhin ang panlabas na datos:</b> Kapag binuhay, babaguhin ang panlabas na auth kpag ang rekord ng user ay binago.  Dapat alisin ang kandado ng mga field upang mapahintulutan ang pag-eedit.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Tandaan:</b> Ang pagbabago ng panlabas na datos ng LDAP ay nangangailangan na iayos mo ang binddn at bindpw na maging isang bind-user na may pribelehiyo na mag-edit ng lahat ng rekord ng user.  Sa kasalukuyan ay hindi nito pinananatili ang mga attribute na marami ang halaga, at tatanggalin nito ang labis na halaga kapag may binago na ito. </p>';
$string['auth_user_create'] = 'Paganahin ang paglikha ng user';
$string['auth_user_creation'] = 'Ang mga bagong (anonymous) na user ay makakalikha ng user account sa panlabas na pinagmumulan ng pag-aauthenticate at kukumpirmahin ito sa pamamagitan ng email.  Kapag binuhay mo ito, tandaan din na iayos ang mga pangmodyul na opsiyon para sa paglikha ng user.';
$string['auth_usernameexists'] = 'May gumagamit na ng pinili mong username.  Pumili ng iba.';
$string['authenticationoptions'] = 'Mga opsiyon sa pag-aauthenticate';
$string['authinstructions'] = 'Dito ay maaari kang magbigay ng panuto sa mga user, upang malaman nila kung anong username at password ang dapat nilang gamitin.  Ang tekstong ipapasok mo rito ay lilitaw sa pahinang panglog-in.  Kapag iniwan mo itong blangko, walang panuto na malalathala.';
$string['changepassword'] = 'Baguhin ang password URL';
$string['changepasswordhelp'] = 'Dito ay maitatakda mo ang lokasyon ng pahina kung saan maaaring makuha mul� o mabago ng mga user ang username/password nila, sakaling nakalimutan nila ito.  Ipapakita ito sa mga user bilang isang buton sa pahina na panglog-in at sa kanilang pahina na pang-user.  Kapag iniwan mo itong blangko ang buton ay hindi makikita.';
$string['chooseauthmethod'] = 'Pumil� ng paraan ng pag-aauthenticate: ';
$string['createchangepassword'] = 'Likhain kung nawawal� - ipilit ang pagbabago';
$string['createpassword'] = 'Likhain kung nawawal�';
$string['forcechangepassword'] = 'Ipilit ang pagpapalit ng password';
$string['forcechangepassword_help'] = 'Pilitin ang mga user na palitan ang password nila sa susunod nilang log-in sa Moodle.';
$string['forcechangepasswordfirst_help'] = 'Pilitin ang mga user na palitan ang password nila sa unang log-in nila sa Moodle.';
$string['guestloginbutton'] = 'Buton na panlog-in ng bisita';
$string['infilefield'] = 'Kinakailangan ang field sa file';
$string['instructions'] = 'Mga Panuto';
$string['locked'] = 'Nakakandado';
$string['md5'] = 'MD5 encryption';
$string['passwordhandling'] = 'Kung paano gagamitin ang field ng password';
$string['plaintext'] = 'Plain text';
$string['showguestlogin'] = 'Maari mong itago o ilantad ang buton na panlog-in ng bisita sa pahinang panlog-in.';
$string['stdchangepassword'] = 'Gumamit ng istandard na Pahinang Pampalit ng Password';
$string['stdchangepassword_expl'] = 'Kung pinapahintulutan ng panlabas na sistemang pan-authenticate ang pagbabago ng password sa pamamagitan ng Moodle, iswits ito sa Oo.  Nananaig ang kaayusang ito sa \'Baguhin ang Password URL\'.';
$string['stdchangepassword_explldap'] = 'TANDAAN:  Iminumungkahi na gumamit kayo ng LDAP sa isang SSL encrypted tunnel (ldaps://) kung nasa ibang lugar ang LDAP server.';
$string['unlocked'] = 'Dinakakandado';
$string['unlockedifempty'] = 'Dinakakandado kung walang laman';
$string['update_never'] = 'Dikailanman';
$string['update_oncreate'] = 'Sa paglikha';
$string['update_onlogin'] = 'Sa tuwing maglalog-in';
$string['update_onupdate'] = 'sa pagpapanibago';

?>
