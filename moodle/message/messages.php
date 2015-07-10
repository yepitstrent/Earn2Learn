<?php // $Id: messages.php,v 1.2.2.2 2005/12/26 08:43:06 moodler Exp $

    require('../config.php');

/// Select encoding
    if (!empty($CFG->unicode)) {
        $encoding = 'utf-8';
    } else {
        $encoding = get_string('thischarset');
    }
/// Select direction
    if ( get_string('thisdirection') == 'rtl' ) {
        $direction = ' dir="rtl"';
    } else {
        $direction = ' dir="ltr"';
    }
/// Output the header
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html <?php echo $direction ?>>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $encoding ?>" />
  </head>
  <body class="message course-1" id="message-messages">
