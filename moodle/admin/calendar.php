<?PHP // $Id: calendar.php,v 1.15 2005/04/10 18:23:18 moodler Exp $

    // Allows the admin to configure calendar and date/time stuff

    require_once('../config.php');

    require_login();

    if (!isadmin()) {
        error('Only administrators can use this page!');
    }

    if (!$site = get_site()) {
        error('Site isn\'t defined!');
    }

/// Print headings

    $stradministration = get_string('administration');
    $strconfiguration = get_string('configuration');
    $strcalendarsettings = get_string('calendarsettings', 'admin');

    print_header("$site->shortname: $strcalendarsettings", "$site->fullname",
                 "<a href=\"index.php\">$stradministration</a> -> ".
                 "<a href=\"configure.php\">$strconfiguration</a> -> $strcalendarsettings");

    print_heading($strcalendarsettings);

/// If data submitted, process and store

    if (($form = data_submitted()) && confirm_sesskey()) {
        if(isset($form->adminseesallcourses)) {
            set_config('calendar_adminseesall', intval($form->adminseesallcourses) != 0);
            unset($SESSION->cal_courses_shown);
        }
        if(isset($form->forcetimezone)) {
            // To protect from SQL injections ...
            $form->forcetimezone = str_replace(';', '', $form->forcetimezone);
            $form->forcetimezone = str_replace('\'', '', $form->forcetimezone);
            set_config('forcetimezone', $form->forcetimezone);
        }
        if(isset($form->startwday)) {
            $startwday = intval($form->startwday);
            if($startwday >= 0 && $startwday <= 6) {
                set_config('calendar_startwday', $startwday);
            }
        }
        if(isset($form->weekend)) {
            if(is_array($form->weekend)) {
                // Creating a packed bitfield; look at /calendar/lib.php if you can't figure it out
                $bitfield = 0;
                foreach($form->weekend as $day) {
                    $bitfield |= (1 << (intval($day) % 7));
                }
                if($bitfield > 0) {
                    set_config('calendar_weekend', $bitfield);
                }
            }
        }
        if(isset($form->lookahead)) {
            $lookahead = intval($form->lookahead);
            if($lookahead > 0) {
                set_config('calendar_lookahead', $lookahead);
            }
        }
        if(isset($form->maxevents)) {
            $maxevents = intval($form->maxevents);
            if($maxevents > 0) {
                set_config('calendar_maxevents', $maxevents);
            }
        }
        redirect('index.php');
    }

    // Include the calendar library AFTER modifying the data, so we read the latest values
    require_once($CFG->dirroot.'/calendar/lib.php');

    // Populate some variables we 're going to need in calendar.html
    $timezones = get_list_of_timezones();

    $weekdays = array(
        0 => get_string('sunday', 'calendar'),
        1 => get_string('monday', 'calendar'),
        2 => get_string('tuesday', 'calendar'),
        3 => get_string('wednesday', 'calendar'),
        4 => get_string('thursday', 'calendar'),
        5 => get_string('friday', 'calendar'),
        6 => get_string('saturday', 'calendar')
    );

    // Main display starts here

    print_simple_box_start("center", "80%");
    include('./calendar.html');
    print_simple_box_end();

    print_footer();

?>
