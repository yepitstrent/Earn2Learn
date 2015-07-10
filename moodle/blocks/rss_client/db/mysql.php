<?php //$Id: mysql.php,v 1.1.2.1 2005/11/14 02:35:56 mjollnir_ Exp $

function rss_client_upgrade($oldversion) {
/// This function does anything necessary to upgrade 
/// older versions to match current functionality 

    global $CFG;

    if ($oldversion < 2003111500) {
       # Do something ...
    }

    if ($oldversion < 2004112001) {
        // title and description should be TEXT as we don't have control over their length.
        table_column('block_rss_client','title','title','text',10,'unsigned','');
        table_column('block_rss_client','description','description','text',10,'unsigned','');
    }

    return true;
}

?>
