<?PHP  //$Id: version.php,v 1.95.2.3 2006/05/20 00:08:42 stronk7 Exp $
// This file defines the current version of the
// backup/restore code that is being used.  This can be
// compared against the values stored in the 
// database (backup_version) to determine whether upgrades should
// be performed (see db/backup_*.php)

$backup_version = 2005070500;   // The current version is a date (YYYYMMDDXX)

$backup_release = "1.5.3";  // User-friendly version number
