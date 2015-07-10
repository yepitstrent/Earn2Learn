<?php // $Id: index.php,v 1.2 2004/09/12 16:16:35 gustav_delius Exp $

    require_once("../../config.php");
    require_once("lib.php");

    require_variable($id);   // course

    redirect("$CFG->wwwroot/course/view.php?id=$id");

?>
