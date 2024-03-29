<?PHP // $Id: calendar.php,v 1.4.2.4 2006/02/06 10:00:39 moodler Exp $ 
      // calendar.php - created with Moodle 1.5 ALPHA (2005043000)


$string['calendar'] = 'Kalendaryo';
$string['calendarheading'] = 'Kalendaryo ng $a';
$string['clickhide'] = 'Iklik para maitago';
$string['clickshow'] = 'Iklik para mailantad';
$string['confirmeventdelete'] = 'Talaga bang nais mong burahin ang okasyong ito?';
$string['courseevents'] = 'Pangkursong okasyon';
$string['dayview'] = 'Arawang Tanaw';
$string['daywithnoevents'] = 'Walang okasyon sa araw na ito.';
$string['default'] = 'Default';
$string['deleteevent'] = 'Burahin ang okasyon';
$string['detailedmonthview'] = 'Detalyadong Buwanang Tanaw';
$string['durationminutes'] = 'Tag�l sa minuto';
$string['durationnone'] = 'Walang tag�l';
$string['durationuntil'] = 'Hanggang';
$string['editevent'] = 'Ineedit ang okasyon';
$string['errorbeforecoursestart'] = 'Hindi puwedeng itakda ang okasyon bago ang araw na magsisimula ang kurso';
$string['errorinvaliddate'] = 'Ditanggap na petsa';
$string['errorinvalidminutes'] = 'Itakda ang tag�l sa minuto, sa pamamagitan ng pagbibigay ng bilang na nasa pagitan ng 1 at 999.';
$string['errorinvalidrepeats'] = 'Itakda ang dami ng okasyon sa pamamgitan ng pagbibigay ng bilang sa pagitan ng 1 at 99.';
$string['errornodescription'] = 'Kinakailangan ng Deskripsiyon';
$string['errornoeventname'] = 'Kinakailangan ng pangalan';
$string['eventdate'] = 'Petsa';
$string['eventdescription'] = 'Deskripsiyon';
$string['eventduration'] = 'Tag�l';
$string['eventendtime'] = 'Katapusang oras';
$string['eventinstanttime'] = 'Oras';
$string['eventkind'] = 'Uri ng okasyon';
$string['eventname'] = 'Pangalan';
$string['eventrepeat'] = 'Pag-ulit';
$string['eventsfor'] = '$a okasyon';
$string['eventstarttime'] = 'Simulang oras';
$string['eventtime'] = 'Oras';
$string['eventview'] = 'Detalye ng Okasyon';
$string['expired'] = 'Pas� na';
$string['explain_lookahead'] = 'Itinatakda dito ang (pinakamaraming) bilang ng araw sa hinaharap na kailangang pagsimulan ng okasyon bago ito madispley sa maaabangang okasyon.  Ang mga okasyon na magsisimula nang lampas dito ay hindi ididispley na maaabangan.  Tandaan na <strong>walang garantiya</strong> na lahat ng okasyong magsisimula sa panahong ito ay maipapakita; kung labis (higit sa \"Pinakamaraming maaabangang okasyon\" na kaayusan) ang bilang ng okasyon, ang pinakamalayo sa hinaharap na okasyon ay hindi ipapakita.';
$string['explain_maxevents'] = 'Itinatakda dito ang pinakamaraming bilang ng maaabangang okasyon na maipapakita.  Kapag pinili mo ang malaking bilang dito, maaaring kakain ng maraming espasyo ang displey ng abangan sa screen mo.';
$string['explain_persistflt'] = 'Kapag binuhay ito, matatandaan ng Moodle ang huli mong kaayusan ng filter ng okasyon at awtomatiko nitong ibabalik ang mga ito tuwing maglalog-in ka.';
$string['explain_startwday'] = 'Ang mga linggo ng kalendaryo ay ipapakita na magsisimula sa araw na piliin mo rito.';
$string['explain_timeformat'] = 'Maaari mong piliin na makita ang oras sa tuwing 12 o 24 oras na format.  Kapag pinili mo ang \"default\", ang format ay awtomatikong isusunod sa itinakda mong wika para sa site.';
$string['fri'] = 'Biy';
$string['friday'] = 'Biyernes';
$string['globalevents'] = 'Pangkalahatang okasyon';
$string['gotocalendar'] = 'Tumungo sa kalendaryo';
$string['groupevents'] = 'Pampangkat na okasyon';
$string['hidden'] = 'itinago';
$string['manyevents'] = '$a okasyon';
$string['mon'] = 'Lun';
$string['monday'] = 'Lunes';
$string['monthlyview'] = 'Buwanang Tanaw';
$string['newevent'] = 'Bagong Okasyon';
$string['noupcomingevents'] = 'Wala pang okasyon';
$string['oneevent'] = '1 okasyon';
$string['pref_lookahead'] = 'Look-ahead ng maaabangang okasyon';
$string['pref_maxevents'] = 'Pinakamaraming maaabangang okasyon';
$string['pref_persistflt'] = 'Tandaan ang kaayusan ng filter';
$string['pref_startwday'] = 'Unang araw ng linggo';
$string['pref_timeformat'] = 'Format ng pagdidispley ng oras';
$string['preferences'] = 'Ibig';
$string['preferences_available'] = 'Ang pansarili mong ibig';
$string['repeateditall'] = 'Gawin ang mga pagbabago sa lahat ng $a okasyon sa umuulit na seryeng ito';
$string['repeateditthis'] = 'Tanging sa  okasyong ito gawin ang pagbabago';
$string['repeatnone'] = 'Walang pag-uulit';
$string['repeatweeksl'] = 'Ulitin nang lingguhan, likhain pati ';
$string['repeatweeksr'] = 'mga okasyon';
$string['sat'] = 'Sab';
$string['saturday'] = 'S�bad�';
$string['shown'] = 'ipinakita';
$string['spanningevents'] = 'Malapit nang magka-okasyon';
$string['sun'] = 'Lgo';
$string['sunday'] = 'Linggo';
$string['thu'] = 'Huw';
$string['thursday'] = 'Huwebes';
$string['timeformat_12'] = '12-oras (am/pm)';
$string['timeformat_24'] = '24-oras';
$string['today'] = 'Ngayong Araw';
$string['tomorrow'] = 'Bukas';
$string['tt_deleteevent'] = 'Burahin ang okasyon';
$string['tt_editevent'] = 'Iedit ang okasyon';
$string['tt_hidecourse'] = 'Ang pangkursong okasyon ay nakalantad (iklik para maitago)';
$string['tt_hideglobal'] = 'Ang pangkalahatang okasyon ay nakalantad (iklik para maitago)';
$string['tt_hidegroups'] = 'Ang pampangkat na okasyon ay nakalantad (ikik para maitago)';
$string['tt_hideuser'] = 'Ang pang-user na okasyon ay nakalantad (iklik para maitago)';
$string['tt_showcourse'] = 'Ang pangkursong okasyon ay nakatago (iklik para malantad)';
$string['tt_showglobal'] = 'Ang pangkalahatang okasyon ay nakatago (iklik para malantad)';
$string['tt_showgroups'] = 'Ang pampangkat na okasyon ay nakatago (iklik para malantad)';
$string['tt_showuser'] = 'Ang pang-user na okasyon ay nakatago (iklik para malantad)';
$string['tue'] = 'Mar';
$string['tuesday'] = 'Martes';
$string['typecourse'] = 'Okasyon na pangkurso';
$string['typegroup'] = 'Okasyon na pangpangkat';
$string['typesite'] = 'Okasyon na pang-site';
$string['typeuser'] = 'Okasyon na pang-user';
$string['upcomingevents'] = 'Abangan';
$string['userevents'] = 'Okasyon na pang-user';
$string['wed'] = 'Miy';
$string['wednesday'] = 'Miy�rkul�s';
$string['yesterday'] = 'Kahapon';
$string['youcandeleteallrepeats'] = 'Ang okasyong ito ay bahagi ng umuulit na serye ng okasyon.  Maaari mong mabura mo ang okasyong ito, o lahat ng $a okasyon sa serye sa isang iglap.';

?>
