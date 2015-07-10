<?php // $Id: defaults.php,v 1.6 2005/05/07 14:29:40 gustav_delius Exp $

// This file is generally only included from upgrade_activity_modules()
// It defines default values for any important configuration variables

   $defaults = array (
       'quiz_review' => hexdec('ffffff'),
       'quiz_attemptonlast' => 0,
       'quiz_attempts' => 0,
       'quiz_grademethod' => '',
       'quiz_decimalpoints' => 2,
       'quiz_maximumgrade' => 10,
       'quiz_password' => '',
       'quiz_popup' => 0,
       'quiz_questionsperpage' => 0,
       'quiz_shuffleanswers' => 1,
       'quiz_shufflequestions' => 0,
       'quiz_subnet' => '',
       'quiz_timelimit' => 0,
       'quiz_optionflags' => 1,
       'quiz_penaltyscheme' => 1,
       'quiz_adaptive' => 1,

       'quiz_fix_review' => 0,
       'quiz_fix_attemptonlast' => 0,
       'quiz_fix_attempts' => 0,
       'quiz_fix_grademethod' => 0,
       'quiz_fix_decimalpoints' => 0,
       'quiz_fix_password' => 0,
       'quiz_fix_popup' => 0,
       'quiz_fix_questionsperpage' => 0,
       'quiz_fix_shuffleanswers' => 0,
       'quiz_fix_shufflequestions' => 0,
       'quiz_fix_subnet' => 0,
       'quiz_fix_timelimit' => 0,
       'quiz_fix_adaptive' => 0,
       'quiz_fix_penaltyscheme' => 0
    );

?>
