<?php
// version $Id: forbidden.php,v 1.3.2.1 2005/07/05 16:59:29 skodak Exp $
// Page for forbidden access from CAS
    require("../../config.php");

    if (!$site = get_site()) {
        error("No site found!");
    }

    $loginsite = get_string("loginsite");
    $errormsg = get_string("auth_cas_invalidcaslogin", "auth");

    print_header("$site->fullname: $loginsite", "$site->fullname", $loginsite);
    include("forbidden.html");
    print_footer();
    exit;
?>

