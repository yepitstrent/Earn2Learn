<?php // $Id: editquestion.php,v 1.5 2004/11/13 18:29:06 kaipe Exp $

    print_heading_with_help(get_string("editingdescription", "quiz"), "description", "quiz");
    require("$CFG->dirroot/mod/quiz/questiontypes/description/description.html");

?>
