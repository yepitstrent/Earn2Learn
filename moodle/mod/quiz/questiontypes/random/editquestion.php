<?php // $Id: editquestion.php,v 1.5 2004/11/13 18:29:23 kaipe Exp $

    print_heading_with_help(get_string("editingrandom", "quiz"), "random", "quiz");
    require("$CFG->dirroot/mod/quiz/questiontypes/random/random.html");

?>
