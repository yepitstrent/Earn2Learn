<?PHP // $Id: calendar.php,v 1.3.2.5 2006/02/06 10:00:06 moodler Exp $



$string['calendar'] = '달력';
$string['calendarheading'] = '$a 달력';
$string['clickhide'] = '감추기';
$string['clickshow'] = '보이기';
$string['confirmeventdelete'] = '이 일정을 삭제할까요?';
$string['courseevents'] = '배움터 일정';
$string['dayview'] = '날짜 보기';
$string['daywithnoevents'] = '계획된 일정이 없습니다.';
$string['default'] = '기본';
$string['deleteevent'] = '일정 삭제하기';
$string['detailedmonthview'] = '상세하게 달력 보기';
$string['durationminutes'] = '유지 시간(분으로)';
$string['durationnone'] = '기간 제한없이';
$string['durationuntil'] = '까지';
$string['editevent'] = '일정 고치기';
$string['errorbeforecoursestart'] = '배움터가 시작되기 전에 이벤트를 설정할 수 없음';
$string['errorinvaliddate'] = '유효하지 않은 날짜';
$string['errorinvalidminutes'] = '지속기간을 분으로 적으세요. 1부터 999까지 가능합니다.';
$string['errorinvalidrepeats'] = '일정의 수를 적으세요. 1부터 99까지 가능합니다.';
$string['errornodescription'] = '설명이 필요합니다.';
$string['errornoeventname'] = '이름이 필요합니다.';
$string['eventdate'] = '날짜';
$string['eventdescription'] = '설명';
$string['eventduration'] = '기간';
$string['eventendtime'] = '끝나는 시간';
$string['eventinstanttime'] = '시간';
$string['eventkind'] = '이벤트 유형';
$string['eventname'] = '이름';
$string['eventrepeat'] = '반복';
$string['eventsfor'] = '$ 일정';
$string['eventstarttime'] = '시작 시간';
$string['eventtime'] = '시간';
$string['eventview'] = '일정 상세정보';
$string['expired'] = '기간이 끝남';
$string['explain_lookahead'] = '앞으로 있을 일정을 표시하기 위해 일정을 며칠 전부터 보여주어야 할지 그 날짜의 최대값을 설정합니다. 이 날수보다 나중에 실행될 일정은 화면에 표시되지 않을 것입니다. 또한 현 화면상에 <strong>계획된 모든 일정이 표시된다는 보장은 없음</strong>을 유의해주시기 바랍니다. 만약 너무 많은(\"도래할 일정의 최대값\"보다 더 많은)일정이 있다면 나중에 있을 일정은 표시되지 않을 것입니다. ';
$string['explain_maxevents'] = '화면에 표시될 일정의 최대수(\"도래할 일정의 최대값\")를 설정합니다. 만약 여기서 너무 큰 수를 지정하면 일정표시는 화면에서 너무 많은 공간을 차지하게 될 것입니다. ';
$string['explain_persistflt'] = '이를 활성화시키면, Moodle은 최근 일정의 반복 설정을 점검하고 자동적으로 당신이 로그인 할때마다 일정을 조정할 것입니다. ';
$string['explain_startwday'] = '여기에서 선택한 요일이 한 주의 시작하는 요일이 되도록 달력이 표시될 것입니다. ';
$string['explain_timeformat'] = '당신은 시간을 12시간 또는 24간으로 표시할 수 있습니다. 
만약 당신이 \"초기설정\"을 선택한다면, 당신이 사이트에서 사용하는 언어에 따라서 자동적으로 표현될 것입니다. ';
$string['fri'] = '금';
$string['friday'] = '금요일';
$string['globalevents'] = '너른 일정';
$string['gotocalendar'] = '달력으로 가기';
$string['groupevents'] = '모듬 일정';
$string['hidden'] = '감추기';
$string['manyevents'] = '$a 일정';
$string['mon'] = '월';
$string['monday'] = '월요일';
$string['monthlyview'] = '월별로 보기';
$string['newevent'] = '새로운 일정';
$string['noupcomingevents'] = '계획된 일정이 없습니다.';
$string['oneevent'] = '일정 하나';
$string['pref_lookahead'] = '곧 있을 일정 미리보기';
$string['pref_maxevents'] = '도래할 일정의 최대수';
$string['pref_persistflt'] = '반복 기능 설정 ';
$string['pref_startwday'] = '한 주의 첫 요일';
$string['pref_timeformat'] = '시간 표시 형식';
$string['preferences'] = '맞춤설정';
$string['preferences_available'] = '개인적 설정';
$string['repeateditall'] = '반복된 일련의 모든 $a 일정 변경';
$string['repeateditthis'] = '이 일정만 변경 ';
$string['repeatnone'] = '반복 없음';
$string['repeatweeksl'] = '매주 반복, 모두 생성함';
$string['repeatweeksr'] = '반복일정';
$string['sat'] = '토';
$string['saturday'] = '토요일';
$string['shown'] = '보여짐';
$string['spanningevents'] = '진행중인 일정';
$string['sun'] = '일';
$string['sunday'] = '일요일';
$string['thu'] = '목';
$string['thursday'] = '목요일';
$string['timeformat_12'] = '12-시간(오전/오후)';
$string['timeformat_24'] = '24-시간';
$string['today'] = '오늘';
$string['tomorrow'] = '내일';
$string['tt_deleteevent'] = '일정 삭제';
$string['tt_editevent'] = '일정 고치기';
$string['tt_hidecourse'] = '배움터 일정 보임(감추기 클릭)';
$string['tt_hideglobal'] = '광역 일정 보임(감추기 클릭)';
$string['tt_hidegroups'] = '모듬 일정 보임(감추기 클릭)';
$string['tt_hideuser'] = '사용자 일정 보임(감추기 클릭)';
$string['tt_showcourse'] = '배움터 일정 감춤(보이기 클릭)';
$string['tt_showglobal'] = '너른 일정 감춤(보이기 클릭)';
$string['tt_showgroups'] = '모듬 일정 감춤(보이기 클릭)';
$string['tt_showuser'] = '사용자 일정 감춤(보이기 클릭)';
$string['tue'] = '화';
$string['tuesday'] = '화요일';
$string['typecourse'] = '배움터 일정';
$string['typegroup'] = '모듬 일정';
$string['typesite'] = '사이트 일정';
$string['typeuser'] = '사용자 일정';
$string['upcomingevents'] = '예정된 행사';
$string['userevents'] = '사용자 일정';
$string['wed'] = '수';
$string['wednesday'] = '수요일';
$string['yesterday'] = '어제';
$string['youcandeleteallrepeats'] = '이 일정은 일련의 반복되는 일정의 한 부분입니다. 당신은 이 일정만 제거하거나 일련의 모든 $a 일정을 한꺼번에 제거할 수 있습니다. ';
?>
