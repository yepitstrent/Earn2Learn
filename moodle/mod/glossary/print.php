<?php   // $Id: print.php,v 1.29.2.1 2005/12/07 05:57:19 moodler Exp $

    global $CFG;

    require_once("../../config.php");
    require_once("lib.php");

    $id            = required_param('id', PARAM_INT);                     // Course Module ID
    $sortorder     = optional_param('sortorder', 'asc', PARAM_ALPHA);     // Sorting order
    $offset        = optional_param('offset', 0, PARAM_INT);              // number of entries to bypass
    $displayformat = optional_param('displayformat',-1, PARAM_INT);

    $mode    = required_param('mode', PARAM_ALPHA);             // mode to show the entries
    $hook    = optional_param('hook','ALL', PARAM_ALPHANUM);   // what to show
    $sortkey = optional_param('sortkey','UPDATE', PARAM_ALPHA); // Sorting key

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    if (! $glossary = get_record("glossary", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    if ( !$entriesbypage = $glossary->entbypage ) {
        $entriesbypage = $CFG->glossary_entbypage;
    }

    print_header();

    require_course_login($course, true, $cm);

    if (!isteacher($course->id) and !$glossary->allowprintview) {
        notice(get_string('printviewnotallowed', 'glossary'));
    }

/// setting the default values for the display mode of the current glossary
/// only if the glossary is viewed by the first time
    if ( $dp = get_record('glossary_formats','name', addslashes($glossary->displayformat)) ) {
        $printpivot = $dp->showgroup;
        if ( $mode == '' and $hook == '' and $show == '') {
            $mode      = $dp->defaultmode;
            $hook      = $dp->defaulthook;
            $sortkey   = $dp->sortkey;
            $sortorder = $dp->sortorder;
        }
    } else {
        $printpivot = 1;
        if ( $mode == '' and $hook == '' and $show == '') {
            $mode = 'letter';
            $hook = 'ALL';
        }
    }

    if ( $displayformat == -1 ) {
         $displayformat = $glossary->displayformat;
    }

/// stablishing flag variables
    if ( $sortorder = strtolower($sortorder) ) {
        if ($sortorder != 'asc' and $sortorder != 'desc') {
            $sortorder = '';
        }
    }
    if ( $sortkey = strtoupper($sortkey) ) {
        if ($sortkey != 'CREATION' and
            $sortkey != 'UPDATE' and
            $sortkey != 'FIRSTNAME' and
            $sortkey != 'LASTNAME'
            ) {
            $sortkey = '';
        }
    }

    switch ( $mode = strtolower($mode) ) {
    case 'entry':  /// Looking for a certain entry id
        $tab = GLOSSARY_STANDARD_VIEW;
    break;

    case 'cat':    /// Looking for a certain cat
        $tab = GLOSSARY_CATEGORY_VIEW;
        if ( $hook > 0 ) {
            $category = get_record("glossary_categories","id",$hook);
        }
    break;

    case 'approval':    /// Looking for entries waiting for approval
        $tab = GLOSSARY_APPROVAL_VIEW;
        if ( !$hook and !$sortkey and !$sortorder) {
            $hook = 'ALL';
        }
    break;

    case 'term':   /// Looking for entries that include certain term in its concept, definition or aliases
        $tab = GLOSSARY_STANDARD_VIEW;
    break;

    case 'date':
        $tab = GLOSSARY_DATE_VIEW;
        if ( !$sortkey ) {
            $sortkey = 'UPDATE';
        }
        if ( !$sortorder ) {
            $sortorder = 'desc';
        }
    break;

    case 'author':  /// Looking for entries, browsed by author
        $tab = GLOSSARY_AUTHOR_VIEW;
        if ( !$hook ) {
            $hook = 'ALL';
        }
        if ( !$sortkey ) {
            $sortkey = 'FIRSTNAME';
        }
        if ( !$sortorder ) {
            $sortorder = 'asc';
        }
    break;

    case 'letter':  /// Looking for entries that begin with a certain letter, ALL or SPECIAL characters
    default:
        $tab = GLOSSARY_STANDARD_VIEW;
        if ( !$hook ) {
            $hook = 'ALL';
        }
    break;
    }

    include_once("sql.php");

    $entriesshown = 0;
    $currentpivot = '';
    if ( $hook == 'SPECIAL' ) {
        $alphabet = explode(",", get_string("alphabet"));
    }

    $site = get_record("course","id",1);
    echo '<p align="right"><font size="-1">' . userdate(time()) . '</font></p>';
    echo get_string("site") . ': <strong>' . $site->fullname . '</strong><br />';
    echo get_string("course") . ': <strong>' . $course->fullname . ' ('. $course->shortname . ')</strong><br />';
    echo get_string("modulename","glossary") . ': <strong>' . format_string($glossary->name, true) . '</strong><p>';
    if ( $allentries ) {
        foreach ($allentries as $entry) {

            // Setting the pivot for the current entry
            $pivot = $entry->pivot;
            if ( !$fullpivot ) {
                $pivot = substr($pivot, 0, 1);
            }            
            
            // If there's  group break
            if ( $currentpivot != strtoupper($pivot) ) {

                // print the group break if apply
                if ( $printpivot )  {
                    $currentpivot = strtoupper($pivot);

                    $pivottoshow = $currentpivot;
                    if ( isset($entry->uid) ) {
                        // printing the user icon if defined (only when browsing authors)
                        $user = get_record("user","id",$entry->uid);
                        $pivottoshow = fullname($user, isteacher($course->id));
                    }

                    echo "<p align=\"center\"><strong><i>".clean_text($pivottoshow)."</i></strong></p>" ;
                }
            }

            glossary_print_entry($course, $cm, $glossary, $entry, $mode, $hook,1,$displayformat,false,true);
        }
    }

    echo '</body></html>';
?>
