<?PHP //$Id: delete.php,v 1.8 2005/05/07 16:10:50 defacer Exp $

// Deletes the moodledata directory, COMPLETELY!!
// BE VERY CAREFUL USING THIS!

    require_once('../config.php');

    require_login();

    $sure = optional_param('sure', '');
    $reallysure = optional_param('reallysure', '');

    if (!isadmin()) {
        error('You must be admin to use this script!');
    }

    $deletedir = $CFG->dataroot;   // The directory to delete!

    if (empty($sure)) {
        notice_yesno ('Are you completely sure you want to delete everything inside the directory '. $deletedir .' ?', 'delete.php?sure=yes&amp;sesskey='.sesskey(), 'index.php');
        exit;
    }

    if (empty($reallysure)) {
        notice_yesno ('Are you REALLY REALLY completely sure you want to delete everything inside the directory '. $deletedir .' (this includes all user images, and any other course files that have been created) ?', 'delete.php?sure=yes&amp;reallysure=yes&amp;sesskey='.sesskey(), 'index.php');
        exit;
    }

    if (!confirm_sesskey()) {
        error('This script was called wrongly');
    }

    /// OK, here goes ...

    delete_subdirectories($deletedir);

    echo '<h1 align="center">Done!</h1>';
    print_continue($CFG->wwwroot);
    exit;


function delete_subdirectories($rootdir) {

    $dir = opendir($rootdir);

    while ($file = readdir($dir)) {
        if ($file != '.' and $file != '..') {
            $fullfile = $rootdir .'/'. $file;
            if (filetype($fullfile) == 'dir') {
                delete_subdirectories($fullfile);
                echo 'Deleting '. $fullfile .' ... ';
                if (rmdir($fullfile)) {
                    echo 'Done.<br />';
                } else {
                    echo 'FAILED.<br />';
                }
            } else {
                echo 'Deleting '. $fullfile .' ... ';
                if (unlink($fullfile)) {
                    echo 'Done.<br />';
                } else {
                    echo 'FAILED.<br />';
                }
            }
        }
    }
    closedir($dir);
}
  
?>
