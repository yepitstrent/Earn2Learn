<?PHP // $Id: admin.php,v 1.34.2.14 2006/02/06 09:59:35 moodler Exp $ 
      // admin.php - created with Moodle 1.6 development (2005053000)


$string['adminseesallevents'] = 'Administrators see all events';
$string['adminseesownevents'] = 'Administrators are just like other users';
$string['allowrenames'] = 'Allow renames';
$string['availablelangs'] = 'Available Language Packs';
$string['backgroundcolour'] = 'Transparent Colour';
$string['badwordsconfig'] = 'Enter your list of bad words separated by commas.';
$string['badwordsdefault'] = 'If the custom list is empty, a default list from the language pack will be used.';
$string['badwordslist'] = 'Custom Bad Words List';
$string['blockinstances'] = 'Instances';
$string['blockmultiple'] = 'Multiple';
$string['cachetext'] = 'Text cache lifetime';
$string['calendarsettings'] = 'Calendar';
$string['change'] = 'change';
$string['changesitelang'] = 'Change site language';
$string['componentinstalled'] = 'Component Installed';
$string['configallowcoursethemes'] = 'If you enable this, then courses will be allowed to set their own themes.  Course themes override all other theme choices (site, user, or session themes)';
$string['configallowemailaddresses'] = 'If you want to restrict all new email addresses to particular domains, then list them here separated by spaces.  All other domains will be rejected.  eg <strong>ourcollege.edu.au .gov.au</strong>';
$string['configallowobjectembed'] = 'As a default security measure, normal users are not allowed to embed multimedia (like Flash) within texts using explicit EMBED and OBJECT tags in their HTML (although it can still be done safely using the mediaplugins filter).  If you wish to allow these tags then enable this option.';
$string['configallowunenroll'] = 'If this is set \'Yes\', then students are allowed to unenroll themselves from courses whenever they like. Otherwise they are not allowed, and this process will be solely controlled by the teachers and administrators.';
$string['configallowuserblockhiding'] = 'Do you want to allow users to hide/show side blocks throughout this site?  This feature uses Javascript and cookies to remember the state of each collapsible block, and only affects the user\'s own view.';
$string['configallowusermailcharset'] = 'Enabling this, every user in the site will be able to specify his own charset for email.';
$string['configallowuserthemes'] = 'If you enable this, then users will be allowed to set their own themes.  User themes override site themes (but not course themes)';
$string['configallusersaresitestudents'] = 'For activities on the front page of the site, should ALL users be considered as students?  If you answer \"Yes\", then any confirmed user account will be allowed to participate as a student in those activities.  If you answer \"No\", then only users who are already a participant in at least one course will be able to take part in those front page activities. Only admins and specially assigned teachers can act as teachers for these front page activities.';
$string['configautologinguests'] = 'Should visitors be logged in as guests automatically when entering courses with guest access?';
$string['configcachetext'] = 'For larger sites or sites that use text filters, this setting can really speed things up.  Copies of texts will be retained in their processed form for the time specified here.  Setting this too small may actually slow things down slightly,  but setting it too large may mean texts take too long to refresh (with new links, for example).';
$string['configclamactlikevirus'] = 'Treat files like viruses';
$string['configclamdonothing'] = 'Treat files as OK';
$string['configclamfailureonupload'] = 'If you have configured clam to scan uploaded files, but it is configured incorrectly or fails to run for some unknown reason, how should it behave?  If you choose \'Treat files like viruses\', they\'ll be moved into the quarantine area, or deleted. If you choose \'Treat files as OK\', the files will be moved to the desination directory like normal. Either way, admins will be alerted that clam has failed.  If you choose \'Treat files like viruses\' and for some reason clam fails to run (usually because you have entered an invalid pathtoclam), ALL files that are uploaded will be moved to the given quarantine area, or deleted. Be careful with this setting.';
$string['configcountry'] = 'If you set a country here, then this country will be selected by default on new user accounts.  To force users to choose a country, just leave this unset.';
$string['configdbsessions'] = 'If enabled, this setting will use the database to store information about current sessions.  This is especially useful for large/busy sites or sites built on cluster of servers.  For most sites this should probably be left disabled so that the server disk is used instead.  Note that changing this setting now will log out all current users (including you).';
$string['configdebug'] = 'If you turn this on, then PHP\'s error_reporting will be increased so that more warnings are printed.  This is only useful for developers.';
$string['configdefaultallowedmodules'] = 'For the courses which fall into the above category, which modules do you want to allow by default <b>when the course is created</b>?';
$string['configdefaultrequestedcategory'] = 'Default category to put courses that were requested into, if they\'re approved.';
$string['configdeleteunconfirmed'] = 'If you are using email authentication, this is the period within which a response will be accepted from users.  After this period, old unconfirmed accounts are deleted.';
$string['configdenyemailaddresses'] = 'To deny email addresses from particular domains list them here in the same way.  All other domains will be accepted.  eg <strong>hotmail.com yahoo.co.uk</strong>';
$string['configdigestmailtime'] = 'People who choose to have emails sent to them in digest form will be emailed the digest daily. This setting controls which time of day the daily mail will be sent (the next cron that runs after this hour will send it).';
$string['configdisplayloginfailures'] = 'This will display information to selected users about previous failed logins.';
$string['configenablecourserequests'] = 'This will allow any user to request a course be created.';
$string['configenablerssfeeds'] = 'This switch will enable RSS feeds from across the site.  To actually see any change you will need to enable RSS feeds in the individual modules too - go to the Modules settings under Admin Configuration.';
$string['configenablerssfeedsdisabled'] = ' It is not available because RSS feeds are disabled in all the Site. To enable them, go to the Variables settings under Admin Configuration.';
$string['configenablestats'] = 'If you choose \'yes\' here, Moodle\'s cronjob will process the logs and gather some statistics.  Depending on the amount of traffic on your site, this can take awhile. If you enable this, you will be able to see some interesting graphs and statistics about each of your courses, or on a sitewide basis.';
$string['configerrorlevel'] = 'Choose the amount of PHP warnings that you want to be displayed.  Normal is usually the best choice.';
$string['configextendedusernamechars'] = 'Enable this setting to allow students to use any characters in their usernames (note this does not affect their actual names).  The default is \"false\" which restricts usernames to be alphanumeric characters only';
$string['configfilterall'] = 'Filter all strings, including headings, titles, navigation bar and so on.  This is mostly useful when using the multilang filter, otherwise it will just create extra load on your site for little gain.';
$string['configfiltermatchoneperpage'] = 'Automatic linking filters will only generate a single link for the first matching text instance found on the complete page. All others are ignored.'; 
$string['configfiltermatchonepertext'] = 'Automatic linking filters will only generate a single link for the first matching text instance found in each item of text (e.g., resource, block) on the page. All others are ignored. This setting is ignored if the one per page setting is <i>yes</i>.';
$string['configfilteruploadedfiles'] = 'Enabling this setting will cause Moodle to process all uploaded HTML and text files with the filters before displaying them.';
$string['configforcelogin'] = 'Normally, the front page of the site and the course listings (but not courses) can be read by people without logging in to the site.  If you want to force people to log in before they do ANYTHING on the site, then you should enable this setting.';
$string['configforceloginforprofiles'] = 'Enable this setting to force people to login as a real (non-guest) account before being allowed to see the user profile pages.  By default this is disabled (\"false\") so that prospective students can read about the teachers of each course, but this also means that web search engines can see them.';
$string['configframename'] = 'If you are embedding Moodle within a web frame, then put the name of this frame here.  Otherwise this value should remain as \'_top\'';
$string['configfullnamedisplay'] = 'This defines how names are shown when they are displayed in full. For most mono-lingual sites the most efficient setting is the default \"Given names + Surname\", but you may choose to hide surnames altogether, or to leave it up to the current language pack to decide (some languages have different conventions).';
$string['configgdversion'] = 'Indicate the version of GD that is installed.  The version shown by default is the one that has been auto-detected.  Don\'t change this unless you really know what you\'re doing.';
$string['confighiddenuserfields'] = 'Select which user infomation fields you wish to hide from other users other than course teachers/admins. This will increase student privacy. Hold CTRL key to select multiple fields.';
$string['confightmleditor'] = 'Choose whether or not to allow use of the embedded HTML text editor. Even if you choose allow, this editor will only appear when the user is using a compatible web browser.  Users can also choose not to use it.';
$string['configidnumber'] = 'This option specifies whether (a) Users are not be asked for an ID number at all, (b) Users are asked for an ID number but can leave it blank or (c) Users are asked for an ID Number and cannot leave it blank. If given the User\'s ID number is displayed in their Profile.';
$string['configintro'] = 'On this page you can specify a number of configuration variables that help make Moodle work properly on your server.  Don\'t worry too much about it - the defaults will usually work fine and you can always come back to this page later and change these settings.';
$string['configintroadmin'] = 'On this page you should configure your main administrator account which will have complete control over the site. Make sure you give it a secure username and password as well as a valid email address.  You can create more admin accounts later on.';
$string['configintrosite'] = 'This page allows you to configure the front page and name of this new site.  You can come back here later to change these settings any time using the \'Site Settings\' link on the home page.';
$string['configintrotimezones'] = 'This page will search for new information about world timezones (including daylight savings time rules) and update your local database with this information.  These locations will be checked, in order: $a This procedure is generally very safe and can not break normal installations.  Do you wish to update your timezones now?';
$string['configlang'] = 'Choose a default language for the whole site.  Users can override this setting later.';
$string['configlangcache'] = 'Cache the language menu. Saves a lot of memory and processing power. If you enable this, the menu takes a few minutes to update after you have added or removed languages.';
$string['configlangdir'] = 'Most languages are printed left-to-right, but some, like Arabic and Hebrew, are printed right-to-left.';
$string['configlanglist'] = 'Leave this blank to allow users to choose from any language you have in this installation of Moodle.  However, you can shorten the language menu by entering a comma-separated list of language codes that you want.  For example:  en,es_es,fr,it';
$string['configlangmenu'] = 'Choose whether or not you want to display the general-purpose language menu on the home page, login page etc.  This does not affect the user\'s ability to set the preferred language in their own profile.';
$string['configlocale'] = 'Choose a sitewide locale - this will affect the format and language of dates. You need to have this locale data installed on your operating system.  (eg en_US or es_ES).  If you don\'t know what to choose leave it blank.';
$string['configloginhttps'] = 'Turning this on will make Moodle use a secure https connection just for the login page (providing a secure login), and then afterwards revert back to the normal http URL for general speed.  CAUTION: this setting REQUIRES https to be specifically enabled on the web server - if it is not then YOU COULD LOCK YOURSELF OUT OF YOUR SITE.';
$string['configloglifetime'] = 'This specifies the length of time you want to keep logs about user activity.  Logs that are older than this age are automatically deleted.  It is best to keep logs as long as possible, in case you need them, but if you have a very busy server and are experiencing performance problems, then you may want to lower the log lifetime.';
$string['configlongtimenosee'] = 'If students haven\'t logged in for a very long time, then they are automatically unsubscribed from courses.  This parameter specifies that time limit.';
$string['configmaxbytes'] = 'This specifies a maximum size that uploaded files can be throughout the whole site.  This setting is limited by the PHP setting upload_max_filesize and the Apache setting LimitRequestBody.  In turn, maxbytes limits the range of sizes that can be chosen at course level or module level.';
$string['configmaxeditingtime'] = 'This specifies the amount of time people have to re-edit forum postings, glossary comments etc.  Usually 30 minutes is a good value.';
$string['configmessaging'] = 'Should the messaging system between site users be enabled?';
$string['configmymoodleredirect'] = 'This setting forces redirects to /my on login for non-admins and replaces the top level site breadcrumb with /my';
$string['confignoreplyaddress'] = 'Emails are sometimes sent out on behalf of a user (eg forum posts). The email address you specify here will be used as the \"From\" address in those cases when the recipients should not be able to reply directly to the user (eg when a user chooses to keep their address private).';
$string['confignotifyloginfailures'] = 'If login failures have been recorded, email notifications can be sent out.  Who should see these notifications?';
$string['confignotifyloginthreshold'] = 'If notifications about failed logins are active, how many failed login attempts by one user or one IP address is it worth notifying about?';
$string['configopentogoogle'] = 'If you enable this setting, then Google will be allowed to enter your site as a Guest.  In addition, people coming in to your site via a Google search will automatically be logged in as a Guest.  Note that this only provides transparent access to courses that already allow guest access.';
$string['configpathtoclam'] = 'Path to clam AV.  Probably something like /usr/bin/clamscan or /usr/bin/clamdscan. You need this in order for clam AV to run.';
$string['configpathtodu'] = 'Path to du. Probably something like /usr/bin/du. If you enter this, pages that display directory contents will run much faster for directories with a lot of files.';
$string['configperfdebug'] = 'If you turn this on, performance info will be printed in the footer of the standard theme';
$string['configproxyhost'] = 'If this <b>server</b> needs to use a proxy computer (eg a firewall) to access the Internet, then provide the proxy hostname and port here.  Otherwise leave it blank.';
$string['configquarantinedir'] = 'If you want clam AV to move infected files to a quarantine directory, enter it here. It must be writable by the webserver.  If you leave this blank, or if you enter a directory that doesn\'t exit or isn\'t writable, infected files will be deleted.  Do not include a trailing slash.';
$string['configrequestedteachername'] = 'Word for teacher used in requested courses';
$string['configrequestedteachersname'] = 'Word for teachers used in requested courses';
$string['configrequestedstudentname'] = 'Word for student used in requested courses';
$string['configrequestedstudentsname'] = 'Word for students used in requested courses';
$string['configrestrictbydefault'] = 'Should new courses that are created that fall into the above category have their modules restricted by default?';
$string['configrestrictmodulesfor'] = 'Which courses should have <b>the setting</b> for disabling some activity modules?';
$string['configrunclamonupload'] = 'Run clam AV on file upload? You will need a correct path in pathtoclam for this to work.  (Clam AV is a free virus scanner that you can get from http://www.clamav.net/)';
$string['configsectioninterface'] = 'Interface';
$string['configsectionmail'] = 'Mail';
$string['configsectionmaintenance'] = 'Maintenance';
$string['configsectionmisc'] = 'Miscellaneous';
$string['configsectionoperatingsystem'] = 'Operating System';
$string['configsectionpermissions'] = 'Permissions';
$string['configsectionrequestedcourse'] = 'Course requests';
$string['configsectionsecurity'] = 'Security';
$string['configsectionstats'] = 'Statistics';
$string['configsectionuser'] = 'User';
$string['configsecureforms'] = 'Moodle can use an additional level of security when accepting data from web forms. If this is enabled, then the browser\'s HTTP_REFERER variable is checked against the current form address.  In a very few cases this can cause problems if the user is using a firewall (eg Zonealarm) configured to strip HTTP_REFERER from their web traffic.  Symptoms are getting \'stuck\' on a form. If your users are having problems with the login page (for example) you might want to disable this setting, although it might leave your site more open to brute-force password attacks.  If in doubt, leave this set to \'Yes\'.';
$string['configsessioncookie'] = 'This setting customises the name of the cookie used for Moodle sessions.  This is optional, and only useful to avoid cookies being confused when there is more than one copy of Moodle running within the same web site.';
$string['configsessiontimeout'] = 'If people logged in to this site are idle for a long time (without loading pages) then they are automatically logged out (their session is ended).  This variable specifies how long this time should be.';
$string['configshowblocksonmodpages'] = 'Some activity modules support blocks on their pages.  If you turn this on, then teachers will be able to add side blocks on those pages, otherwise the interface does not show this feature.';
$string['configshowsiteparticipantslist'] = 'All of these site students and site teachers will be listed on the site participants list. Who shall be allowed to see this site participants list?';
$string['configsitemailcharset'] = 'All the emails generated by your site will be sent in the charset specified here. Anyway, every individual user will be able to adjust it if the next setting is enabled.';
$string['configsitepolicy'] = 'If you have a site policy that all users must see and agree to before using this site, then specify the URL to it here, otherwise leave this field blank.  The URL can point to anywhere - one convenient place would be a file in the site files.  eg http://yoursite/file.php/1/policy.html';
$string['configslasharguments'] = 'Files (images, uploads etc) are provided via a script using \'slash arguments\' (the second option here). This method allows files to be more easily cached in web browsers, proxy servers etc.  Unfortunately, some PHP servers don\'t allow this method, so if you have trouble viewing uploaded files or images (eg user pictures), set this variable to the first option.';
$string['configsmtphosts'] = 'Give the full name of one or more local SMTP servers that Moodle should use to send mail (eg \'mail.a.com\' or \'mail.a.com;mail.b.com\'). If you leave it blank, Moodle will use the PHP default method of sending mail.';
$string['configsmtpuser'] = 'If you have specified an SMTP server above, and the server requires authentication, then enter the username and password here.';
$string['configstatsfirstrun'] = 'This specifies how far back the logs should be processed <b>the first time</b> the cronjob wants to process statistics. If you have a lot of traffic and are on shared hosting, it\'s probably not a good idea to go too far back, as it could take a long time to run and be quite resource intensive. (Note that for this setting, 1 month = 28 days. In the graphs and reports generated, 1 month = 1 calendar month.)';
$string['configstatsmaxruntime'] = 'Stats processing can be quite intensive, so use a combination of this field and the next one to specify when it will run and how long for.';
$string['configstatsruntimestart'] = 'What time should the cronjob that does the stats processing <b>start</b>?';
$string['configstatsuserthreshold'] = 'If you enter a non-zero,  non numeric value here, for ranking courses, courses with less than this number of enrolled users (students + teachers) will be ignored';
$string['configteacherassignteachers'] = 'Should ordinary teachers be allowed to assign other teachers within courses they teach?  If \'No\', then only course creators and admins can assign teachers.';
$string['configthemelist'] = 'Leave this blank to allow any valid theme to be used.  If you want to shorten the theme menu, you can specify a comma-separated list of names here (Don\'t use spaces!).  
For example:  standard,orangewhite.';
$string['configtimezone'] = 'You can set the default timezone here.  This is the only the DEFAULT timezone for displaying dates - each user can override this by setting their own in their profile. \"Server time\" here will make Moodle default to the server\'s operating system setting, but \"Server time\" in the user profile will make the user default to this timezone setting.  Cronjobs that depend on a time of day to run will use this timezone.';
$string['configunzip'] = 'Indicate the location of your unzip program (Unix only, optional).  If specified, this will be used to unpack zip archives on the server.  If you leave this blank, then Moodle will use internal routines.';
$string['configvariables'] = 'Variables';
$string['configwarning'] = 'Be careful modifying these settings - strange values could cause problems.';
$string['configzip'] = 'Indicate the location of your zip program (Unix only, optional).  If specified, this will be used to create zip archives on the server.  If you leave this blank, then Moodle will use internal routines.';
$string['confirmation'] = 'Confirmation';
$string['confirminstall'] = 'You are about to install language pack ($a), are you sure?';
$string['cronwarning'] = 'The <a href=\"cron.php\">cron.php maintenance script</a> has not been run for at least 24 hours. <br />The <a href=\"../doc/?frame=install.html&amp;sub=cron\">installation documentation</a> explains how you can automate this.';
$string['dbmigrate'] = 'Moodle Database Migration';
$string['dbmigratewarning'] = 'Please make sure that you have backed up your moodle database before commencing this procedure. If you are unsure of how to do that, please contact your system admin. Your Moodle site will be put under maintenance mode after you start the migration process';
$string['dbmigratewarning2'] = '<b>Warning: You are about to start the database migration process. Please be very sure that your entire Moodle database is backed up.</b>';
$string['density'] = 'Density';
$string['download'] = 'Download';
$string['edithelpdocs'] = 'Edit help documents';
$string['editlang'] = '<b>Edit</b>';
$string['editstrings'] = 'Edit strings';
$string['environment'] = 'Environment';
$string['environmenterrortodo'] = 'You must solve all the environmental problems (errors) found above before proceeding to install this Moodle version!';
$string['environmentrecommendinstall'] = 'is recommended to be installed/enabled';
$string['environmentrecommendversion'] = 'version $a->needed is recommended and you are running $a->current';
$string['environmentrequireinstall'] = 'is required to be installed/enabled.';
$string['environmentrequireversion'] = 'version $a->needed is required and you are running $a->current';
$string['environmentxmlerror'] = 'Error reading environment data ($a->error_code)';
$string['errors'] = 'Errors';
$string['filterall'] = 'Filter all strings';
$string['filtermatchoneperpage'] = 'Filter match once per page';
$string['filtermatchonepertext'] = 'Filter match once per text';
$string['filteruploadedfiles'] = 'Filter uploaded files';
$string['globalsquoteswarning'] = '<p><strong>Security Warning</strong>: to operate properly, Moodle requires <br />that you make certain changes to your current PHP settings.<p/><p>You <em>must</em> set <code>register_globals=off</code> and/or <code>magic_quotes_gpc=on</code>. <br />If possible, you should set <code>register_globals=off</code> to improve general <br /> server security, setting <code>magic_quotes_gpc=on</code> is also recommended.<p/><p>These settings are controlled by editing your <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file.</p>';
$string['helpadminseesall'] = 'Do admins see all calendar events or just those that apply to themselves?';
$string['helpcalendarsettings'] = 'Configure various calendar and date/time-related aspects of Moodle';
$string['helpforcetimezone'] = 'You can allow users to individually select their timezone, or force a timezone for everyone.';
$string['helpsitemaintenance'] = 'For upgrades and other work';
$string['helpstartofweek'] = 'Which day starts the week in the calendar?';
$string['helpupcominglookahead'] = 'How many days in the future does the calendar look for upcoming events by default?';
$string['helpupcomingmaxevents'] = 'How many (maximum) upcoming events are shown to users by default?';
$string['helpweekenddays'] = 'Which days of the week are treated as \"weekend\" and shown with a different colour?';
$string['iconvrecommended'] = 'Installing the optional ICONV library is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['importlangreminder'] = 'The database migration process is commencing. You will need to <b>log in again</b> for the upgrade to take effect. Please install unicode language packs as soon as possible from Admin->Lang->Lang Import Utility <b>after</b> the database migration process is completed. ';
$string['importtimezones'] = 'Update complete list of timezones';
$string['importtimezonescount'] = '$a->count entries imported from $a->source';
$string['importtimezonesfailed'] = 'No sources found! (Bad news)';
$string['incompatibleblocks'] = 'Incompatible Blocks';
$string['install'] = 'Install Selected Language Pack';
$string['installedlangs'] = 'Installed Language Packs';
$string['invaliduserchangeme'] = 'Username "changeme" is reserved -- you cannot create an account with it.';
$string['lang16notify'] = 'Moodle 1.6 and above allows you to install and update language packs directly from download.moodle.org by following the link below';
$string['langimport'] = 'Language Import Utility';
$string['langimportsuccess'] = 'Language Pack successfully upgraded';
$string['langpackremoved'] = 'Language Pack uninstallation completed';
$string['langpackupdated'] = 'Language Pack $a Updated';
$string['langupdatecomplete'] = 'Language Pack Update Completed';
$string['latexpreamble'] = 'LaTeX Preamble';
$string['latexsettings'] = 'LaTeX Renderer Settings';
$string['mbstringrecommended'] = 'Installing the optional MBSTRING library is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['maintfileopenerror'] = 'Error opening maintenance files!';
$string['maintinprogress'] = 'Maintenance is in progress...';
$string['managelang'] = '<b>Manage</b>';
$string['mediapluginavi'] = 'Enable .avi filter';
$string['mediapluginflv'] = 'Enable .flv filter';
$string['mediapluginmov'] = 'Enable .mov filter';
$string['mediapluginmp3'] = 'Enable .mp3 filter';
$string['mediapluginmpg'] = 'Enable .mpg filter';
$string['mediapluginswf'] = 'Enable .swf filter';
$string['mediapluginwmv'] = 'Enable .wmv filter';
$string['mysql416bypassed'] = 'However, if your site is using iso-8859-1 (latin) languages ONLY, you may continue using your currently installed MySQL 4.1.12 (or higher).';
$string['mysql416required'] = 'MySQL 4.1.16 is the minimum version required for Moodle 1.6 in order to guarantee that all data can be converted to UTF-8 in the future.';
$string['nolangupdateneeded'] = 'All your language packs are up to date, no update is needed';
$string['optionalmaintenancemessage'] = 'Optional maintenance messsage';
$string['order1'] = 'First';
$string['order2'] = 'Second';
$string['order3'] = 'Third';
$string['pathdvips'] = 'Path of <i>dvips</i> binary';
$string['pathconvert'] = 'Path of <i>convert</i> binary';
$string['pathlatex'] = 'Path of <i>latex</i> binary';
$string['pleaseregister'] = 'Please register your site to remove this button';
$string['remotelangnotavailable'] = 'Because Moodle can not connect to download.moodle.org, we are unable to do language pack installation automatically. Please download the appropriate zip file(s) from the list below, copy them to your $a directory and unzip them manually.';
$string['sitelangchanged'] = 'Site language setting changed successfully';
$string['sitemaintenance'] = 'The site is undergoing maintenance and is currently not available';
$string['sitemaintenancemode'] = 'Maintenance mode';
$string['sitemaintenanceoff'] = 'Maintenance mode has been disabled and the site is running normally again';
$string['sitemaintenanceon'] = 'Your site is currently in maintenance mode (only admins can log in or use the site).';
$string['sitemaintenancewarning'] = 'Your site is currently in maintenance mode (only admins can log in).  To return this site to normal operation, <a href=\"maintenance.php\">disable maintenance mode</a>.';
$string['stickyblocks'] = 'Sticky blocks';
$string['stickyblocksduplicatenotice'] = 'If any block you add here is already present in a particular page, it will result in a duplicate.<br />Only the pinned block will be non-editable, the duplicate will still be editable.';
$string['stickyblockspagetype'] = 'Page type to configure';
$string['stickyblocksmymoodle'] = 'My moodle';
$string['stickyblockscourseview'] = 'Course page';
$string['renameerrors'] = 'Errors in renames';
$string['tabselectedtofront'] = 'On tables with tabs, should the row with the currently selected tag be placed at the front';
$string['therewereerrors'] = 'There were errors in your data';
$string['timezoneforced'] = 'This is forced by the site administrator';
$string['timezoneisforcedto'] = 'Force all users to use';
$string['timezonenotforced'] = 'Users can choose their own timezone';
$string['updatecomponent'] = 'Update Component';
$string['updatelangs'] = 'Update Language Packs';
$string['unicodeupgradenotice'] = 'In Moodle 1.6 we have migrated all languages to Unicode.  To complete the upgrade for this site, you need to convert all the data in your database to Unicode using our migration script.  <a href=\"utfdbmigrate.php\">Click here to run the migration script now</a>!';
$string['uninstall'] = 'Uninstall Seleted Language Pack';
$string['uninstallconfirm'] = 'You are about to completely uninstall Language Pack $a, are you sure?';
$string['upgradeforumread'] = 'A new feature has been added in Moodle 1.5 to track read/unread forum posts.<br />To use this functionality you need to <a href=\"$a\">update your tables</a>.';
$string['upgradeforumreadinfo'] = 'A new feature has been added in Moodle 1.5 to track read/unread forum posts.  To use this functionality you need to update your tables with all the tracking information for existing posts.  Depending on the size of your site this can take a long time (hours) and can be quite taxing on the database, so it\'s best to do it during a quiet period.  However, your site will continue functioning during this upgrade and users won\'t be affected.  Once you start this process you should let it finish (keep your browser window open).  However, if you stop the process by closing the window: don\'t worry, you can start over.<br /><br />Do you want to start the upgrading process now?';
$string['upgradelogs'] = 'For full functionality, your old logs need to be upgraded.  <a href=\"$a\">More information</a>';
$string['upgradelogsinfo'] = 'Some changes have recently been made in the way logs are stored.  To be able to view all of your old logs on a per-activity basis, your old logs need to be upgraded.  Depending on your site this can take a long time (eg several hours) and can be quite taxing on the database for large sites.  Once you start this process you should let it finish (by keeping the browser window open).  Don\'t worry - your site will work fine for other people while the logs are being upgraded.<br /><br />Do you want to upgrade your logs now?';
$string['upgradesure'] = 'Your Moodle files have been changed, and you are about to automatically upgrade your server to this version:
<p><b>$a</b></p>
<p>Once you do this you can not go back again.</p> 
<p>Are you sure you want to upgrade this server to this version?</p>';
$string['upgradingdata'] = 'Upgrading data';
$string['upgradinglogs'] = 'Upgrading logs';
$string['userrenamed']   = 'User renamed';
$string['useraccountupdated']   = 'User updated';
$string['userscreated']  = 'Users created';
$string['usersrenamed']  = 'Users renamed';
$string['usersupdated']  = 'Users updated';
$string['updateaccounts']  = 'Update existing accounts';
$string['upwards']  = 'upwards';

?>
