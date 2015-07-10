<?php  // $Id: register.php,v 1.12 2005/05/16 19:09:30 stronk7 Exp $
       // register.php - allows admin to register their site on moodle.org

    include("../config.php");

    require_login();

    if (!isadmin()) {
        error("Only the admin can use this page");
    }

    if (!$site = get_site()) {
        redirect("index.php");
    }

    if (!confirm_sesskey()) {
        error(get_string('confirmsesskeybad', 'error'));
    }

    if (!$admin = get_admin()) {
        error("No admins");
    }

    if (!$admin->country and $CFG->country) {
        $admin->country = $CFG->country;
    }

    if (empty($CFG->siteidentifier)) {    // Unique site identification code
        set_config('siteidentifier', random_string(32));
    }


/// Print headings

    $stradministration = get_string("administration");
    $strregistration = get_string("registration");
    $strregistrationinfo = get_string("registrationinfo");

    print_header("$site->shortname: $strregistration", "$site->fullname", 
                 "<a href=\"../$CFG->admin/index.php\">$stradministration</a> -> $strregistration");

    print_heading($strregistration);

    print_simple_box($strregistrationinfo, "center", "70%");
    echo "<br />";


/// Print the form

    print_simple_box_start("center", "");

    echo "<form name=\"form\" action=\"http://moodle.org/register/\" method=\"post\">\n";
    echo "<table cellpadding=\"9\" border=\"0\">\n";
    echo "<tr valign=\"top\">\n";
    echo "<td align=\"center\" colspan=\"2\">".get_string("location")."</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">Moodle URL:</td>\n";
    echo "<td>$CFG->wwwroot</td>\n";
    echo "<!-- The following hidden variables are to help prevent fake entries being sent. -->\n";
    echo "<!-- Together they form a key.  If any of these change between updates then the entry  -->\n";
    echo "<!-- is flagged as a new entry and will be manually checked by the list maintainer -->\n";
   
    echo "<input type=\"hidden\" name=\"url\" value=\"$CFG->wwwroot\">\n";
    echo "<input type=\"hidden\" name=\"secret\" value=\"$CFG->siteidentifier\">\n";
    echo "<input type=\"hidden\" name=\"host\" value=\"".$_SERVER["HTTP_HOST"]."\">\n";
    echo "<input type=\"hidden\" name=\"lang\" value=\"".current_language()."\">\n";
    echo "</td></tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("currentversion").":</td>\n";
    echo "<td>$CFG->release ($CFG->version)</td>\n";
    echo "<input type=\"hidden\" name=\"version\" value=\"$CFG->version\">\n";
    echo "<input type=\"hidden\" name=\"release\" value=\"$CFG->release\">\n";
    echo "</td></tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("fullsitename").":</td>\n";
    echo "<td><input size=\"50\" type=\"text\" name=\"sitename\" value=\"$site->fullname\"></td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("country").":</td>\n";
    echo "<td>";
    choose_from_menu (get_list_of_countries(), "country", $admin->country, get_string("selectacountry")."...", "", "");
    echo "</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\"><a href=\"http://moodle.org/sites/?country=$admin->country\" title=\"See the current list of sites\" target=_blank>".get_string("publicdirectory")."</a>:</td>\n";
    echo "<td>";
    $options[0] = get_string("publicdirectory0");
    $options[1] = get_string("publicdirectory1");
    $options[2] = get_string("publicdirectory2");
    choose_from_menu ($options, "public", "2", "", "", "");
    unset($options);
    echo "</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("registrationcontact")."</a>:</td>\n";
    echo "<td>\n";
    $options[0] = get_string("registrationcontactno");
    $options[1] = get_string("registrationcontactyes");
    choose_from_menu ($options, "contact", "1", "", "", "");
    unset($options);
    echo "</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("statistics").":";
    echo "<br />(".get_string("notpublic").')';
    echo "</td>\n";
    echo "<td>";

    $count = count_records('course')-1;
    echo get_string("courses").": ".$count;
    echo "<input type=\"hidden\" name=\"courses\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('user')-1;
    echo get_string("users").": ".$count;
    echo "<input type=\"hidden\" name=\"users\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('user_students');
    echo get_string("enrolments").": ".$count;
    echo "<input type=\"hidden\" name=\"enrolments\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('user_teachers');
    echo get_string("teachers").": ".$count;
    echo "<input type=\"hidden\" name=\"teachers\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('forum_posts');
    echo get_string("posts", 'forum').": ".$count;
    echo "<input type=\"hidden\" name=\"posts\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('quiz_questions');
    echo get_string("questions", 'quiz').": ".$count;
    echo "<input type=\"hidden\" name=\"questions\" value=\"$count\">\n";
    echo '<br />';

    $count = count_records('resource');
    echo get_string("modulenameplural", "resource").": ".$count;
    echo "<input type=\"hidden\" name=\"resources\" value=\"$count\">\n";
    echo '<br />';

    echo "</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"center\" colspan=\"2\"><hr size=\"1\" noshade>".get_string("administrator")."</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("administrator").":</td>\n";
    echo "<td><input size=\"50\" type=\"text\" name=\"adminname\" value=\"".fullname($admin, true)."\"></td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("email").":</td>\n";
    echo "<td><input size=\"50\" type=\"text\" name=\"adminemail\" value=\"$admin->email\"></td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">".get_string("registrationemail")."</a>:</td>\n";
    echo "<td>\n";
    $options[0] = get_string("registrationno");
    $options[1] = get_string("registrationyes");
    choose_from_menu ($options, "mailme", "1", "", "", "");
    unset($options);
    echo "</td>\n";
    echo "</tr>\n";

    echo "<tr valign=\"top\">\n";
    echo "<td align=\"right\">&nbsp;</td>\n";
    echo "<td><input type=\"submit\" value=\"".get_string("registrationsend")."\"></td>\n";
    echo "</tr>\n";


    echo "</table>\n";
    echo "</form>\n";

    print_simple_box_end();

    echo "<br />\n";

    print_footer();

?>
