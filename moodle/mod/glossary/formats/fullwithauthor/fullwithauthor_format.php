<?php  // $Id: fullwithauthor_format.php,v 1.13.2.1 2005/06/19 15:23:54 stronk7 Exp $

function glossary_show_entry_fullwithauthor($course, $cm, $glossary, $entry, $mode="", $hook="", $printicons=1, $ratings=NULL, $aliases=true) {
    global $CFG, $USER;


    $user = get_record('user', 'id', $entry->userid);
    $strby = get_string('writtenby', 'glossary');

    $return = false;
    if ($entry) {
        echo '<table class="glossarypost fullwithauthor" cellspacing="0">';
        echo '<tr valign="top">';
        
        echo '<td class="picture">';
        print_user_picture($user->id, $course->id, $user->picture);
        echo '</td>';
        
        echo '<td class="entryheader">';

        echo '<span class="concept">';
        glossary_print_entry_concept($entry);
        echo '</span><br />';

        $fullname = fullname($user, isteacher($course->id));
        $by->name = '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$user->id.'&amp;course='.$course->id.'">'.$fullname.'</a>';
        $by->date = userdate($entry->timemodified);
        echo '<span class="author">'.get_string('bynameondate', 'forum', $by).'</span>';

        echo '</td>';
        echo '<td class="entryattachment">';

        glossary_print_entry_approval($cm, $entry, $mode);
        glossary_print_entry_attachment($entry,'html','right');
        echo '</td>';

        echo '</tr>';

        echo '<tr valign="top">';
        echo '<td class="left">&nbsp;</td>';
        echo '<td colspan="2" class="entry">';

        glossary_print_entry_definition($entry);

        echo '</td></tr>';
        echo '<tr valign="top">';
        echo '<td class="left">&nbsp;</td>';
        echo '<td colspan="2" class="entrylowersection">';
        
        $return = glossary_print_entry_lower_section($course, $cm, $glossary, $entry, $mode, $hook, $printicons, $ratings, $aliases);
        echo ' ';
        echo '</td></tr>';
        echo "</table>\n";
    } else {
        echo '<center>';
        print_string('noentry', 'glossary');
        echo '</center>';
    }
    return $return;
}

function glossary_print_entry_fullwithauthor($course, $cm, $glossary, $entry, $mode="", $hook="", $printicons=1, $ratings=NULL) {

    //The print view for this format is exactly the normal view, so we use it

    //Take out autolinking in definitions un print view
    $entry->definition = '<span class="nolink">'.$entry->definition.'</span>';

    //Call to view function (without icons, ratings and aliases) and return its result
    return glossary_show_entry_fullwithauthor($course, $cm, $glossary, $entry, $mode, $hook, false, false, false);

}

?>
