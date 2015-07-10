<?php // $Id: editquestion.php,v 1.5 2004/11/13 18:29:25 kaipe Exp $

    if (!empty($question->id)) {
        $options = get_record("quiz_truefalse", "question", "$question->id");
    }
    if (!empty($options->trueanswer)) {
        $true    = get_record("quiz_answers", "id", $options->trueanswer);
    } else {
        $true->fraction = 1;
        $true->feedback = "";
    }
    if (!empty($options->falseanswer)) {
        $false   = get_record("quiz_answers", "id", "$options->falseanswer");
    } else {
        $false->fraction = 0;
        $false->feedback = "";
    }

    if ($true->fraction > $false->fraction) {
        $question->answer = 1;
    } else {
        $question->answer = 0;
    }

    print_heading_with_help(get_string("editingtruefalse", "quiz"), "truefalse", "quiz");
    require("$CFG->dirroot/mod/quiz/questiontypes/truefalse/truefalse.html");

?>
