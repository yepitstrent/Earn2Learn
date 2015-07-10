<?php // $Id: editquestion.php,v 1.6 2005/05/06 06:24:00 gustav_delius Exp $
    if (!empty($question->id)) {
        $options = get_record("quiz_randomsamatch", "question", $question->id);
    } else {
        $options->choose = "";
    }
    $saquestions = $QUIZ_QTYPES[RANDOMSAMATCH]->get_sa_candidates($category->id);
    $numberavailable = count($saquestions);
    unset($saquestions);
    print_heading_with_help(get_string("editingrandomsamatch", "quiz"), "randomsamatch", "quiz");
    require("$CFG->dirroot/mod/quiz/questiontypes/randomsamatch/randomsamatch.html");

?>
