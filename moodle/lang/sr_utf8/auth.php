<?PHP // $Id: auth.php,v 1.2.2.3 2006/02/06 10:00:35 moodler Exp $ 
      // auth.php - created with Moodle 1.3 (2004052500)


$string['auth_dbdescription'] = 'Овај метод користи табелу вањске базе података за провјеру да ли су додијељено корисничко име и лозинка исправни. Ако је налог нов, онда информација из осталих поља може бити копирана у Moodle. ';
$string['auth_dbextrafields'] = 'Ова поља су по избору. Можете изабрати да преднапуните нека Moodle корисничка поља са информацијом из <b>вањска поља базе података</b> која назначите овдје.  <br />Ако их оставите празне, онда ће бити кориштене подразумјеване.<br /> У сваком случају, корисник ће бити у могућности да уређује сва поља након пријављивања.';
$string['auth_dbfieldpass'] = 'Име поља које садржи лозинке';
$string['auth_dbfielduser'] = 'Име поља које садржи корисничка имена';
$string['auth_dbhost'] = 'Рачунар који хостује сервер базе података.';
$string['auth_dbname'] = 'Име базе података';
$string['auth_dbpass'] = 'Лозинка која одговара горенаведеном корисничком имену';
$string['auth_dbpasstype'] = 'Задајте формат које користи поље за лозинку. 
MD5 шифровање је корисно приликом повезивања на остале опште мрежне апликације као што је PostNuke.';
$string['auth_dbtable'] = 'Име табеле у бази података';
$string['auth_dbtitle'] = 'Употријебите вањску базу података';
$string['auth_dbtype'] = 'Тип базе података (Погледајте <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb документација</a> за детаље)';
$string['auth_dbuser'] = 'Корисничко име са приступом читању корисничке базе';
$string['auth_emaildescription'] = 'Потврђивање путем електронске поште је уобичајен начин провјере. Након што се корисник пријави и изабере своје ново име и лозинку, електронска пошта се шаље на адресу тог корисника.
У електронској пошти се налази сигурносни линк према страници гдје нови корисник потврђује свој налог.
Сви будући уписи се само провјеравају у постојећој Moodle бази података.';
$string['auth_emailtitle'] = 'Провјера путем електронске поште';
$string['auth_imapdescription'] = 'Овај метод користи IMAP сервер да провјери да ли су додијељено корисничко име и лозинка исправни.';
$string['auth_imaphost'] = 'IMAP адреса сервера. Користи IP број, а не DNS називе.';
$string['auth_imapport'] = 'Број порта IMAP сервера. Обично је 143 или 993.';
$string['auth_imaptitle'] = 'IMAP сервер';
$string['auth_imaptype'] = 'Тип IMAP сервера. IMAP сервери могу имати различите типове провјере.';
$string['auth_ldap_bind_dn'] = 'Ако желите користити bind-корисника за претрагу корисника, одредите то овдје. Нешто налик  на \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Лозинка за bind-корисника.';
$string['auth_ldap_contexts'] = 'Листа садржаја гдје су корисници лоцирани. Раздвојите различите садржаје са \';\'. 
Примјер : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ако омогућите креирање корисника са email потврдом, назначите садржај гдје су корисници креирани. Овај садржај би требао бити другачији од осталих корисника да би се спријечили сигурносни проблеми. Нема потребе додавати овај садржај у ldap_context-variable, јер ће Moodle потражити кориснике из тог садржаја аутоматски.';
$string['auth_ldap_creators'] = 'Листа група чијим члановима је дозвољено креирање нових курсева. Раздвојите вишеструке групе са \';\'. Обично нешто слично \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Назначи LDAP host у URL-форми као што је \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Одређује корисников члански придјев, кад корисник припада групи. Обично \'member\'';
$string['auth_ldap_search_sub'] = 'Ставите вриједност <> 0 ако желите тражити кориснике у подконтексту';
$string['auth_ldap_update_userinfo'] = 'Ажурирајте корисничке информације (име, презиме, адресе..) из LDAP у Moodle. За информације, погледајте /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Атрибут који се користи за име/претрага корисника. Углавном је \'cn\'.';
$string['auth_ldap_version'] = 'Верзија LDAP протокола који Ваш сервер користи.';
$string['auth_ldapdescription'] = 'Овај метод служи за провјеру од стране спољног LDAP сервера.
Ако су додијељено корисничко име и лозинка исправни, Moodle креира нови кориснички улаз у своју базу корисника. Овај модул може читати корисничке атрибуте са LDAP-а и поставити 
тражена поља у Moodle. 
За сљедеће уписе само се провјеравају корисничко име и лозинка.';
$string['auth_ldapextrafields'] = 'Ова поља нису обавезна. Можете изабрати да испуните нека Moodle корисничка поља са информацијама из <b>LDAP fields</b> која овдје одредите. <br />Ако поља оставите празна, онда се ништа неће пребацити са LDAP, тако да ће подразумијеване опције на Moodle ће бити кориштене.<br />У сваком случају, корисници могу да уређују ова поља након уписивања.';
$string['auth_ldaptitle'] = 'LDAP сервер';
$string['auth_manualdescription'] = 'Овај метод уклања корисницима све начине прављења њихових властитих налога. Сви налози морају бити ручно направљени од администратора.';
$string['auth_manualtitle'] = 'Само за ручно прављење налога';
$string['auth_multiplehosts'] = 'Одређивање више host-ова (нпр. host1.com;host2.com;host3.com';
$string['auth_nntpdescription'] = 'Овај метод користи NNTP сервер за провјеру исправности корисничких имена и лозинки.';
$string['auth_nntphost'] = 'NNTP адресе сервера. Користите IP број, а не DNS називе.';
$string['auth_nntpport'] = 'Серверски порт (119 је најчешћи)';
$string['auth_nntptitle'] = 'NNTP сервер';
$string['auth_nonedescription'] = 'Корисници се могу уписати и одмах направити важеће налоге, без провјере од стране спољног сервера и без потврде путем електронске поште.
Будите опрезни кад користите ову опцију - мислите на сигурност и административне проблеме који могу бити проузроковани!';
$string['auth_nonetitle'] = 'Нема провјере';
$string['auth_pop3description'] = 'Овај метод користи POP3 server за провјеру исправности корисничких имена и лозинки.';
$string['auth_pop3host'] = 'POP3 адресе сервера. Користите IP број, а не DNS име.';
$string['auth_pop3port'] = 'Серверски порт (110 је уобичајен)';
$string['auth_pop3title'] = 'POP3 сервер';
$string['auth_pop3type'] = 'Тип сервера. Ако ваш сервер користи сигурносне цертификате, изаберите pop3cert.';
$string['auth_user_create'] = 'Дозвола креирања корисницима';
$string['auth_user_creation'] = 'Нови (анонимни) корисници могу направити корисничке налоге на спољном извору за провјеру и извршити потврду путем електронске поште. Ако омогућите ову опцију, пазите да такође уредите опције за модуле који дозвољавају креирање корисницима.';
$string['auth_usernameexists'] = 'Ово корисничко име већ постоји. Молимо Вас да изаберите друго.';
$string['authenticationoptions'] = 'Опције за провјеру';
$string['authinstructions'] = 'Овдје можете дати инструкције вашим корисницима, тако да знају које корисничко име и лозинку требају користити. Текст који овдје напишете биће приказан на страници за упис. Ако поље оставите празно, онда инструкције неће бити приказане. ';
$string['changepassword'] = 'Промјени лозинку URL-a';
$string['changepasswordhelp'] = 'Овде можете задати локацију на којој Ваши корисници могу обновити или промијенити своје корисничко име/лозинку, у случају да се заборави.
Ова опција се може пружити корисницима у виду дугмета на страници за упис и њиховој корисничкој страни. Ако оставите празно поље, дугме неће бити приказано.';
$string['chooseauthmethod'] = 'Изаберите метод провјере';
$string['guestloginbutton'] = 'Дугме за пријаву гостију';
$string['instructions'] = 'Упуства';
$string['md5'] = 'MD5 кодирање';
$string['plaintext'] = 'Чисти (Plain) текст';
$string['showguestlogin'] = 'Можете сакрити или приказати дугме за пријаву гостију на пријавној страници.';

?>
