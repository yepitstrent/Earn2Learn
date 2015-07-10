<?PHP  // $Id: lib.php,v 1.20 2005/05/16 22:41:18 stronk7 Exp $ 
        // modified by mnielsen @ CDC
        /// Update:  The lib.php now contains only the functions that are
        /// used outside of the lesson module.  All functions (I hope) that are only local
        /// are now in locallib.php.

/// Library of functions and constants for module lesson

define("LESSON_MAX_EVENT_LENGTH", "432000");   // 5 days maximum
//echo "LIB.PHP";
/// (replace lesson with the name of your module and delete this line)

/*******************************************************************/
function lesson_add_instance($lesson) {
/// Given an object containing all the necessary data, 
/// (defined by the form in mod.html) this function 
/// will create a new instance and return the id number 
/// of the new instance.
    global $SESSION;

    $lesson->timemodified = time();

    $lesson->available = make_timestamp($lesson->availableyear, 
            $lesson->availablemonth, $lesson->availableday, $lesson->availablehour, 
            $lesson->availableminute);

    $lesson->deadline = make_timestamp($lesson->deadlineyear, 
            $lesson->deadlinemonth, $lesson->deadlineday, $lesson->deadlinehour, 
            $lesson->deadlineminute);
    
    /// CDC-FLAG ///
    if (!empty($lesson->password)) {
        $lesson->password = md5($lesson->password);
    } else {
        unset($lesson->password);
    }
    /// CDC-FLAG ///
    if (!$lesson->id = insert_record("lesson", $lesson)) {
        return false; // bad
    }

    if ($lesson->lessondefault) {
        $lessondefault = $lesson;
        unset($lessondefault->lessondefault);
        unset($lessondefault->name);
        unset($lessondefault->timemodified);
        unset($lessondefault->available);
        unset($lessondefault->deadline);
        if ($lessondefault->id = get_field("lesson_default", "id", "course", $lessondefault->course)) {
            update_record("lesson_default", $lessondefault);
        } else {
            insert_record("lesson_default", $lessondefault);
        }
    } else {
        unset($lesson->lessondefault);
    }
    
    // got this code from quiz, thanks quiz!!!
    delete_records('event', 'modulename', 'lesson', 'instance', $lesson->id);  // Just in case

    $event = new stdClass;
    $event->name        = $lesson->name;
    $event->description = $lesson->name;
    $event->courseid    = $lesson->course;
    $event->groupid     = 0;
    $event->userid      = 0;
    $event->modulename  = 'lesson';
    $event->instance    = $lesson->id;
    $event->eventtype   = 'open';
    $event->timestart   = $lesson->available;
    $event->visible     = instance_is_visible('lesson', $lesson);
    $event->timeduration = ($lesson->deadline - $lesson->available);

    if ($event->timeduration > LESSON_MAX_EVENT_LENGTH) {  /// Long durations create two events
        $event2 = $event;

        $event->name         .= ' ('.get_string('lessonopens', 'lesson').')';
        $event->timeduration  = 0;

        $event2->timestart    = $lesson->deadline;
        $event2->eventtype    = 'close';
        $event2->timeduration = 0;
        $event2->name        .= ' ('.get_string('lessoncloses', 'lesson').')';

        add_event($event2);
    }

    add_event($event);

    return $lesson->id;
}


/*******************************************************************/
function lesson_update_instance($lesson) {
/// Given an object containing all the necessary data, 
/// (defined by the form in mod.html) this function 
/// will update an existing instance with new data.

    $lesson->timemodified = time();
    $lesson->available = make_timestamp($lesson->availableyear, 
            $lesson->availablemonth, $lesson->availableday, $lesson->availablehour, 
            $lesson->availableminute);
    $lesson->deadline = make_timestamp($lesson->deadlineyear, 
            $lesson->deadlinemonth, $lesson->deadlineday, $lesson->deadlinehour, 
            $lesson->deadlineminute);
    $lesson->id = $lesson->instance;

    /// CDC-FLAG ///
    if (!empty($lesson->password)) {
        $lesson->password = md5($lesson->password);
    } else {
        unset($lesson->password);
    }
    /// CDC-FLAG ///

    if ($lesson->lessondefault) {
        $lessondefault = $lesson;
        unset($lessondefault->lessondefault);
        unset($lessondefault->name);
        unset($lessondefault->timemodified);
        unset($lessondefault->available);
        unset($lessondefault->deadline);
        if ($lessondefault->id = get_field("lesson_default", "id", "course", $lessondefault->course)) {
            update_record("lesson_default", $lessondefault);
        } else {
            insert_record("lesson_default", $lessondefault);
        }
    } else {
        unset($lesson->lessondefault);
    }
    
    // update the calendar events (credit goes to quiz module)
    if ($events = get_records_select('event', "modulename = 'lesson' and instance = '$lesson->id'")) {
        foreach($events as $event) {
            delete_event($event->id);
        }
    }

    $event = new stdClass;
    $event->name        = $lesson->name;
    $event->description = $lesson->name;
    $event->courseid    = $lesson->course;
    $event->groupid     = 0;
    $event->userid      = 0;
    $event->modulename  = 'lesson';
    $event->instance    = $lesson->id;
    $event->eventtype   = 'open';
    $event->timestart   = $lesson->available;
    $event->visible     = instance_is_visible('lesson', $lesson);
    $event->timeduration = ($lesson->deadline - $lesson->available);

    if ($event->timeduration > LESSON_MAX_EVENT_LENGTH) {  /// Long durations create two events
        $event2 = $event;

        $event->name         .= ' ('.get_string('lessonopens', 'lesson').')';
        $event->timeduration  = 0;

        $event2->timestart    = $lesson->deadline;
        $event2->eventtype    = 'close';
        $event2->timeduration = 0;
        $event2->name        .= ' ('.get_string('lessoncloses', 'lesson').')';

        add_event($event2);
    }

    add_event($event);

    if (!empty($lesson->deleteattempts)) {
        $subject = "Delete User Attempts";
        $message = "";

        if ($userid = get_field("user", "id", "username", $lesson->deleteattempts)) {
            if (delete_records("lesson_attempts", "lessonid", $lesson->id, "userid", $userid)) {
                // email good
                $message .= "Successfully deleted attempts from \"".format_string($lesson->name)."\" lesson!<br />";
            } else {
                // email couldnt delete
                $message .= "Failed to delete attempts from \"".format_string($lesson->name)."\" lesson!<br />";
            }
            if (delete_records("lesson_grades", "lessonid", $lesson->id, "userid", $userid)) {
                // email good
                $message .= "Successfully deleted grades from \"".format_string($lesson->name)."\" lesson!<br />";
            } else {
                // email couldnt delete
                $message .= "Failed to delete grades from \"".format_string($lesson->name)."\" lesson!<br />";
            }
            if (delete_records("lesson_timer", "lessonid", $lesson->id, "userid", $userid)) {
                // email good
                $message .= "Successfully deleted time records from \"".format_string($lesson->name)."\" lesson!<br />";
            } else {
                // email couldnt delete
                $message .= "Failed to delete time records from \"".format_string($lesson->name)."\" lesson!<br />";
            }

        } else {
            // email couldnt find user
            $message .= "Could not find user in database.<br />";
        }
        $message .= "<br /> User ID used: $lesson->deleteattempts <br />";
        
        $txt = format_text_email($message, FORMAT_HTML);
        
        if ($currentuser = get_record("user", "id", $lesson->deleteattemptsid)) {
            email_to_user($currentuser, $currentuser, $subject, $txt, $message);
        }
        // unset lessondefault
    }
    unset($lesson->deleteattempts);
    unset($lesson->deleteattemptsid);
    
    return update_record("lesson", $lesson);
}


/*******************************************************************/
function lesson_delete_instance($id) {
/// Given an ID of an instance of this module, 
/// this function will permanently delete the instance 
/// and any data that depends on it.  

    if (! $lesson = get_record("lesson", "id", "$id")) {
        return false;
    }

    $result = true;

    if (! delete_records("lesson", "id", "$lesson->id")) {
        $result = false;
    }
    if (! delete_records("lesson_pages", "lessonid", "$lesson->id")) {
        $result = false;
    }
    if (! delete_records("lesson_answers", "lessonid", "$lesson->id")) {
        $result = false;
    }
    if (! delete_records("lesson_attempts", "lessonid", "$lesson->id")) {
        $result = false;
    }
    if (! delete_records("lesson_grades", "lessonid", "$lesson->id")) {
        $result = false;
    }
    if (! delete_records("lesson_timer", "lessonid", "$lesson->id")) {
            $result = false;
    }
    if (! delete_records("lesson_branch", "lessonid", "$lesson->id")) {
            $result = false;
    }
    if (! delete_records("lesson_high_scores", "lessonid", "$lesson->id")) {
            $result = false;
    }
    if ($events = get_records_select('event', "modulename = 'lesson' and instance = '$lesson->id'")) {
        foreach($events as $event) {
            delete_event($event->id);
        }
    }
    
    return $result;
}

/*******************************************************************/
function lesson_user_outline($course, $user, $mod, $lesson) {
/// Return a small object with summary information about what a 
/// user has done with a given particular instance of this module
/// Used for user activity reports.
/// $return->time = the time they did it
/// $return->info = a short text description

    if ($grades = get_records_select("lesson_grades", "lessonid = $lesson->id AND userid = $user->id",
                "grade DESC")) {
        foreach ($grades as $grade) {
            $max_grade = number_format($grade->grade * $lesson->grade / 100.0, 1);
            break;
        }
        $return->time = $grade->completed;
        if ($lesson->retake) {
            $return->info = get_string("gradeis", "lesson", $max_grade)." (".
                get_string("attempt", "lesson", count($grades)).")";
        } else {
            $return->info = get_string("gradeis", "lesson", $max_grade);
        }
    } else {
        $return->info = get_string("no")." ".get_string("attempts", "lesson");
    }
    return $return;
}

/*******************************************************************/
function lesson_user_complete($course, $user, $mod, $lesson) {
/// Print a detailed representation of what a  user has done with 
/// a given particular instance of this module, for user activity reports.

    if ($attempts = get_records_select("lesson_attempts", "lessonid = $lesson->id AND userid = $user->id",
                "retry, timeseen")) {
        print_simple_box_start();
        $table->head = array (get_string("attempt", "lesson"),  get_string("numberofpagesviewed", "lesson"),
            get_string("numberofcorrectanswers", "lesson"), get_string("time"));
        $table->width = "100%";
        $table->align = array ("center", "center", "center", "center");
        $table->size = array ("*", "*", "*", "*");
        $table->cellpadding = 2;
        $table->cellspacing = 0;

        $retry = 0;
        $npages = 0;
        $ncorrect = 0;
        
        foreach ($attempts as $attempt) {
            if ($attempt->retry == $retry) {
                $npages++;
                if ($attempt->correct) {
                    $ncorrect++;
                }
                $timeseen = $attempt->timeseen;
            } else {
                $table->data[] = array($retry + 1, $npages, $ncorrect, userdate($timeseen));
                $retry++;
                $npages = 1;
                if ($attempt->correct) {
                    $ncorrect = 1;
                } else {
                    $ncorrect = 0;
                }
            }
        }
        if ($npages) {
                $table->data[] = array($retry + 1, $npages, $ncorrect, userdate($timeseen));
        }
        print_table($table);
        print_simple_box_end();
        // also print grade summary
        if ($grades = get_records_select("lesson_grades", "lessonid = $lesson->id AND userid = $user->id",
                    "grade DESC")) {
            foreach ($grades as $grade) {
                $max_grade = number_format($grade->grade * $lesson->grade / 100.0, 1);
                break;
            }
            if ($lesson->retake) {
                echo "<p>".get_string("gradeis", "lesson", $max_grade)." (".
                    get_string("attempts", "lesson").": ".count($grades).")</p>";
            } else {
                echo "<p>".get_string("gradeis", "lesson", $max_grade)."</p>";
            }
        }
    } else {
        echo get_string("no")." ".get_string("attempts", "lesson");
    }

    
    return true;
}

/*******************************************************************/
function lesson_print_recent_activity($course, $isteacher, $timestart) {
/// Given a course and a time, this module should find recent activity 
/// that has occurred in lesson activities and print it out. 
/// Return true if there was output, or false is there was none.

    global $CFG;

    return false;  //  True if anything was printed, otherwise false 
}

/*******************************************************************/
function lesson_cron () {
/// Function to be run periodically according to the moodle cron
/// This function searches for things that need to be done, such 
/// as sending out mail, toggling flags etc ... 

    global $CFG;

    return true;
}

/*******************************************************************/
function lesson_grades($lessonid) {
/// Must return an array of grades for a given instance of this module, 
/// indexed by user.  It also returns a maximum allowed grade.
    global $CFG;

    if (!$lesson = get_record("lesson", "id", $lessonid)) {
        return NULL;
    }
    if ($lesson->usemaxgrade) {
        $grades = get_records_sql_menu("SELECT userid,MAX(grade) FROM {$CFG->prefix}lesson_grades WHERE
                lessonid = $lessonid GROUP BY userid");
    } else {
        $grades = get_records_sql_menu("SELECT userid,AVG(grade) FROM {$CFG->prefix}lesson_grades WHERE
            lessonid = $lessonid GROUP BY userid");
    }
    
    // convert grades from percentages and tidy the numbers
    if (!$lesson->practice) {  // dont display practice lessons CDC-FLAG
        if ($grades) {
            foreach ($grades as $userid => $grade) {
                $return->grades[$userid] = number_format($grade * $lesson->grade / 100.0, 1);
            }
        }
        $return->maxgrade = $lesson->grade;
        
        return $return;
    } else {
        return NULL;
    }
}

/*******************************************************************/
function lesson_get_participants($lessonid) {
//Must return an array of user records (all data) who are participants
//for a given instance of lesson. Must include every user involved
//in the instance, independient of his role (student, teacher, admin...)

    global $CFG;
    
    //Get students
    $students = get_records_sql("SELECT DISTINCT u.id, u.id
                                 FROM {$CFG->prefix}user u,
                                      {$CFG->prefix}lesson_attempts a
                                 WHERE a.lessonid = '$lessonid' and
                                       u.id = a.userid");

    //Return students array (it contains an array of unique users)
    return ($students);
}
?>
