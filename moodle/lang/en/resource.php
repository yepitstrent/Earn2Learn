<?PHP // $Id: resource.php,v 1.36.2.4 2006/02/06 09:59:37 moodler Exp $ 
      // resource.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005032600)


$string['addresource'] = 'Add a resource';
$string['chooseafile'] = 'Choose or upload a file';
$string['chooseparameter'] = 'Choose parameter';
$string['configallowlocalfiles'] = 'When creating a new file resource, allow links to files on a local file system such as a CD drive or a hard drive. This may be useful in a classroom where all students have access to a common network drive or where files on a CD need to be accessed. Use of this feature may require changes to your browser\'s security settings.';
$string['configdefaulturl'] = 'This value is used to prefill the URL form when creating a new URL-based resource.';
$string['configfilterexternalpages'] = 'Enabling this setting will cause all external resources (web pages, uploaded HTML files) to be processed by the currently defined site filters (such as glossary autolinks, for example).  Turning this option on may cause your course pages to slow down significantly - use with caution and only if you really need it.';
$string['configframesize'] = 'When a web page or an uploaded file is displayed within a frame, this value is the size (in pixels) of the top frame (which contains the navigation).';
$string['configparametersettings'] = 'This sets the default value for the Parameter settings pane in the form when adding some new resources. After the first time, this becomes an individual user preference.';
$string['configpopup'] = 'When adding a new resource which is able to be shown in a popup window, should this option be enabled by default?';
$string['configpopupdirectories'] = 'Should popup windows show directory links by default?';
$string['configpopupheight'] = 'What height should be the default height for new popup windows?';
$string['configpopuplocation'] = 'Should popup windows show the location bar by default?';
$string['configpopupmenubar'] = 'Should popup windows show the menu bar by default?';
$string['configpopupresizable'] = 'Should popup windows be resizable by default?';
$string['configpopupscrollbars'] = 'Should popup windows be scrollable by default?';
$string['configpopupstatus'] = 'Should popup windows show the status bar by default?';
$string['configpopuptoolbar'] = 'Should popup windows show the tool bar by default?';
$string['configpopupwidth'] = 'What width should be the default width for new popup windows?';
$string['configsecretphrase'] = 'This secret phrase is used to produce the encrypted code value that can be sent to some resources as a parameter.  The encrypted code is produced by an md5 value of the current_users IP address concatenated with your secret phrase. ie code = md5(IP.secretphrase).  This allows the destination resource to verify the connection for extra security.';
$string['configwebsearch'] = 'When adding a URL as a webpage or weblink, this location is offered as a site to help the user search for the URL they want.';
$string['configwindowsettings'] = 'This sets the default value for the Window settings pane in the form when adding some new resources. After the first time, this becomes an individual user preference.';
$string['deploy'] = 'Deploy';
$string['directlink'] = 'Direct link to this file';
$string['directoryinfo'] = 'All the files in the chosen directory will be displayed.';
$string['display'] = 'Window';
$string['editingaresource'] = 'Editing a resource';
$string['encryptedcode'] = 'Encrypted code';
$string['example'] = 'Example';
$string['exampleurl'] = 'http://www.example.com/somedirectory/somefile.html';
$string['fetchclienterror'] = 'An error was found with your web client while trying to retrieve the web page (possibly a wrong URL).';
$string['fetcherror'] = 'An error was found while trying to retrieve the web page.';
$string['fetchservererror'] = 'An error was found with the remote server while trying to retrieve the web page (possibly a program error).';
$string['filename'] = 'File name';
$string['filtername'] = 'Resource Names Auto-linking';
$string['frameifpossible'] = 'Put resource in a frame to keep site navigation visible';
$string['fulltext'] = 'Full text';
$string['htmlfragment'] = 'HTML fragment';
$string['imspackageloaded'] = 'Package loaded.';
$string['localfile'] = 'Local file';
$string['localfilechoose'] = 'Choose a local file (CD-ROM)';
$string['localfileinfo'] = '<p>Choose a local file from your computer. The file will not be uploaded to the web site, but Moodle will look for the same file on the computer of anyone viewing this resource.</p><p>This is mostly useful when you have large media files stored on a standard CD-ROM that you distribute to all participants.  Each participant is able to choose their own local path for such files, by <a href=\"$a\" target=\"_blank\">editing their user profile</a>.</p>';
$string['localfilehelp'] = 'Help displaying local files';
$string['localfilepath'] = 'To set your own local path for this resource, choose any file from the drive (usually a CD_ROM) on your computer where the resource exists. The file will not be uploaded but the drive information will be stored and used for any local file resources';
$string['localfileselect'] = 'Choose this file path.';
$string['maindirectory'] = 'Main files directory';
$string['modulename'] = 'Resource';
$string['modulenameplural'] = 'Resources';
$string['navigationbuttons'] = 'Navigation Buttons';
$string['neverseen'] = 'Never seen';
$string['newdirectories'] = 'Show the directory links';
$string['newfullscreen'] = 'Fill the whole screen';
$string['newheight'] = 'Default window height (in pixels)';
$string['newlocation'] = 'Show the location bar';
$string['newmenubar'] = 'Show the menu bar';
$string['newresizable'] = 'Allow the window to be resized';
$string['newscrollbars'] = 'Allow the window to be scrolled';
$string['newstatus'] = 'Show the status bar';
$string['newtoolbar'] = 'Show the toolbar';
$string['newwidth'] = 'Default window width (in pixels)';
$string['newwindow'] = 'New window';
$string['newwindowopen'] = 'Display this resource in a new popup window';
$string['notallowedlocalfileaccess'] = 'Access to local files is currently disabled, so this resource is not available.';
$string['note'] = 'Note';
$string['notefile'] = 'To upload more files into the course (so they appear in this list) use the <a href=\"$a\">File Manager</a>.';
$string['notypechosen'] = 'You need to choose a type.  Use your back button to go back and retry.';
$string['packagechanged'] = 'This IMS Content Package has changed.';
$string['packagenotdeplyed'] = 'This IMS Content Package is not deployed.';
$string['pagedisplay'] = 'Display this resource within the current window';
$string['pagewindow'] = 'Same window';
$string['pan'] = 'Pan';
$string['parameter'] = 'Parameter';
$string['parameters'] = 'Parameters';
$string['popupresource'] = 'This resource should appear in a popup window.';
$string['popupresourcelink'] = 'If it didn\'t, click here: $a';
$string['redeploy'] = 'Deploy Again';
$string['resourcetype'] = 'Type of resource';
$string['resourcetype1'] = 'Reference';
$string['resourcetype2'] = 'Web Page';
$string['resourcetype3'] = 'Uploaded File';
$string['resourcetype4'] = 'Plain text';
$string['resourcetype5'] = 'Web Link';
$string['resourcetype6'] = 'HTML text';
$string['resourcetype7'] = 'Program';
$string['resourcetype8'] = 'Wiki-like text';
$string['resourcetype9'] = 'Directory';
$string['resourcetypedirectory'] = 'Display a directory';
$string['resourcetypefile'] = 'Link to a file or web site';
$string['resourcetypehtml'] = 'Compose a web page';
$string['resourcetypeims'] = 'Deploy an IMS Content Package';
$string['resourcetypelabel'] = 'Insert a label';
$string['resourcetyperepository'] = 'Link to a repository object';
$string['resourcetypetext'] = 'Compose a text page';
$string['showcourseblocks'] = 'Show the course blocks';
$string['searchweb'] = 'Search for web page';
$string['serverurl'] = 'Server URL ($a->wwwroot)';
$string['tableofcontents'] = 'Table of Contents';
$string['variablename'] = 'Variable name';
$string['viewims'] = 'View IMS CP Package';
$string['vol'] = 'Vol';

?>
