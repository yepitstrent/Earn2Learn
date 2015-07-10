<?php

   include('../config.php');

   require_login();

   if (!isadmin()) {
       error('Admin only');
   }

   print_header("Convert all tables from MYISAM to InnoDB", "Convert all tables from MYISAM to InnoDB", 
                "Convert all tables from MYISAM to InnoDB");


   if (!empty($confirm) and confirm_sesskey()) {

       print_heading("Please be patient and wait for this to complete...");

       if ($tables = $db->MetaTables()) {
           $db->debug = true;
           foreach ($tables as $table) {
               execute_sql("ALTER TABLE $table TYPE=INNODB; ");
           }
       }
   } else {
       notice_yesno("Are you sure you want convert all your tables to the InnoDB format?", 
                    "innodb.php?confirm=yes&sesskey=".sesskey(), "index.php");
   }

?>
