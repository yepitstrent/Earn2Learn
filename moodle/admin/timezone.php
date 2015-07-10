<?php   // $Id: timezone.php,v 1.4 2004/10/04 13:50:36 moodler Exp $

    include("../config.php");

    require_login();

    if (!isadmin()) {
        error("You must be an admin");
    }

    $strtimezone = get_string("timezone");
    $strsavechanges = get_string("savechanges");
    $strusers = get_string("users");
    $strall = get_string("all");

    print_header($strtimezone, $strtimezone, $strtimezone);

    print_heading("");

    if (isset($zone) and confirm_sesskey()) {
        $db->debug = true;
        echo "<center>";
        execute_sql("UPDATE {$CFG->prefix}user SET timezone = '$zone'");
        $db->debug = false;
        echo "</center>";

        $USER->timezone = $zone;
    }

    $user = $USER;

    if (abs($user->timezone) > 13) {
        $user->timezone = 99;
    }
    $timenow = time();
    $timeformat = get_string('strftimedaytime');

    for ($tz = -26; $tz <= 26; $tz++) {
        $zone = (float)$tz/2.0;
        $usertime = $timenow + ($tz * 1800);
        if ($tz == 0) {
            $timezones["$zone"] = gmstrftime($timeformat, $usertime)." (GMT)";
        } else if ($tz < 0) {
            $timezones["$zone"] = gmstrftime($timeformat, $usertime)." (GMT$zone)";
        } else {
            $timezones["$zone"] = gmstrftime($timeformat, $usertime)." (GMT+$zone)";
        }
    }

    echo '<center><form action="timezone.php" method="get">';
    echo "$strusers ($strall): ";
    choose_from_menu ($timezones, "zone", $user->timezone, get_string("serverlocaltime"), "", "99");
    echo "<input type=\"hidden\" name=\"sesskey\" value=\"$USER->sesskey\">";
    echo "<input type=\"submit\" value=\"$strsavechanges\">";
    echo "</form></center>";

    print_footer();

?>
