<?php // $Id: pixgroup.php,v 1.6 2005/03/07 12:10:22 moodler Exp $
      // This function fetches group pictures from the data directory
      // Syntax:   pix.php/groupid/f1.jpg or pix.php/groupid/f2.jpg
      //     OR:   ?file=groupid/f1.jpg or ?file=groupid/f2.jpg

    $nomoodlecookie = true;     // Because it interferes with caching

    require_once('../config.php');
    require_once($CFG->libdir.'/filelib.php');

    $relativepath = get_file_argument('pixgroup.php');

    $args = explode('/', trim($relativepath, '/'));

    if (count($args) == 2) {
        $groupid  = (integer)$args[0];
        $image    = $args[1];
        $pathname = $CFG->dataroot.'/groups/'.$groupid.'/'.$image;
    } else {
        $image    = 'f1.png';
        $pathname = $CFG->dirroot.'/pix/g/f1.png';
    }

    if (file_exists($pathname) and !is_dir($pathname)) {
        send_file($pathname, $image);
    } else {
        header('HTTP/1.0 404 not found');
        error(get_string('filenotfound', 'error')); //this is not displayed on IIS??
    }
?>
