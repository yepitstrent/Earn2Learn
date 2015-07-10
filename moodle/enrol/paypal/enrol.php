<?php  // $Id: enrol.php,v 1.15 2005/05/04 07:31:25 moodler Exp $
       // Implements all the main code for the Paypal plugin

require_once("$CFG->dirroot/enrol/enrol.class.php");


class enrolment_plugin extends enrolment_base {


/// Override the base print_entry() function
function print_entry($course) {
    global $CFG, $USER;


    $strloginto = get_string("loginto", "", $course->shortname);
    $strcourses = get_string("courses");


    $teacher = get_teacher($course->id);


    if ( (float) $course->cost < 0 ) {
        $cost = (float) $CFG->enrol_cost;
    } else {
        $cost = (float) $course->cost;
    }
    $cost = format_float($cost, 2);


    if (abs($cost) < 0.01) { // no cost, default to base class entry to course


        parent::print_entry($course);

    } else {

        print_header($strloginto, $course->fullname, 
                     "<a href=\"$CFG->wwwroot/course/\">$strcourses</a> -> $strloginto");
        print_course($course, "80%");

        if ($course->password) {  // Presenting two options
            print_simple_box(get_string('costorkey', 'enrol_paypal'), 'center');
        }

        print_simple_box_start("center");

        //Sanitise some fields before building the PayPal form
        $coursefullname  = $this->sanitise_for_paypal($course->fullname);
        $courseshortname = $this->sanitise_for_paypal($course->shortname);
        $userfullname    = $this->sanitise_for_paypal(fullname($USER));
        $userfirstname   = $this->sanitise_for_paypal($USER->firstname);
        $userlastname    = $this->sanitise_for_paypal($USER->lastname);
        $useraddress     = $this->sanitise_for_paypal($USER->address);
        $usercity        = $this->sanitise_for_paypal($USER->city);

        include($CFG->dirroot.'/enrol/paypal/enrol.html');

        print_simple_box_end();

        if ($course->password) {  // Second option
            $password = '';
            include($CFG->dirroot.'/enrol/internal/enrol.html');
        }

        print_footer();

    }
} // end of function print_entry()




/// Override the get_access_icons() function
function get_access_icons($course) {
    global $CFG;

    $str = '';

    if ( (float) $course->cost < 0) {
        $cost = (float) $CFG->enrol_cost;
    } else {
        $cost = (float) $course->cost;
    }

    if (abs($cost) < 0.01) {
        $str = parent::get_access_icons($course);

    } else {
    
        $strrequirespayment = get_string("requirespayment");
        $strcost = get_string("cost");

        if (empty($CFG->enrol_currency)) {
            set_config('enrol_currency', 'USD');
        }

        switch ($CFG->enrol_currency) {
           case 'EUR': $currency = '&euro;'; break;
           case 'CAD': $currency = '$'; break;
           case 'GBP': $currency = '&pound;'; break;
           case 'JPY': $currency = '&yen;'; break;
           case 'AUD': $currency = '$'; break;
           default:    $currency = '$'; break;
        }
        
        $str .= '<div class="cost" title="'.$strrequirespayment.'">'.$strcost.': ';
        $str .= $currency.format_float($cost,2).'</div>';
        
    }

    return $str;
}


/// Override the base class config_form() function
function config_form($frm) {
    global $CFG;

    $paypalcurrencies = array(  'USD' => 'US Dollars',
                                'EUR' => 'Euros',
                                'JPY' => 'Japanese Yen',
                                'GBP' => 'British Pounds',
                                'CAD' => 'Canadian Dollars',
                                'AUD' => 'Australian Dollars'
                             );

    $vars = array('enrol_cost', 'enrol_currency', 'enrol_paypalbusiness', 
                  'enrol_mailstudents', 'enrol_mailteachers', 'enrol_mailadmins');
    foreach ($vars as $var) {
        if (!isset($frm->$var)) {
            $frm->$var = '';
        } 
    }

    include("$CFG->dirroot/enrol/paypal/config.html");
}

function process_config($config) {

    if (!isset($config->enrol_cost)) {
        $config->enrol_cost = 0;
    }
    set_config('enrol_cost', $config->enrol_cost);

    if (!isset($config->enrol_currency)) {
        $config->enrol_currency = 'USD';
    }
    set_config('enrol_currency', $config->enrol_currency);

    if (!isset($config->enrol_paypalbusiness)) {
        $config->enrol_paypalbusiness = '';
    }
    set_config('enrol_paypalbusiness', $config->enrol_paypalbusiness);

    if (!isset($config->enrol_mailstudents)) {
        $config->enrol_mailstudents = '';
    }
    set_config('enrol_mailstudents', $config->enrol_mailstudents);

    if (!isset($config->enrol_mailteachers)) {
        $config->enrol_mailteachers = '';
    }
    set_config('enrol_mailteachers', $config->enrol_mailteachers);

    if (!isset($config->enrol_mailadmins)) {
        $config->enrol_mailadmins = '';
    }
    set_config('enrol_mailadmins', $config->enrol_mailadmins);
    
    return true;

}

//To avoid wrong (for PayPal) characters in sent data
function sanitise_for_paypal($text) {
    global $CFG;

    if (!empty($CFG->sanitise_for_paypal)) {
        //Array of characters to replace (not allowed by PayPal)
        //Can be expanded as necessary to add other diacritics
        $replace = array('�' => 'a',        //Spanish characters
                         '�' => 'e',
                         '�' => 'i',
                         '�' => 'o',
                         '�' => 'u',
                         '�' => 'A',
                         '�' => 'E',
                         '�' => 'I',
                         '�' => 'O',
                         '�' => 'U',
                         '�' => 'n',
                         '�' => 'N',
                         '�' => 'u',
                         '�' => 'U');
        $text = strtr($text, $replace);
    
        //Make here other sanities if necessary

    }

    return $text;

}


} // end of class definition

?>
