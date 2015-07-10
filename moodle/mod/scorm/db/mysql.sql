#
# Table structure for table `scorm`
#
 
CREATE TABLE prefix_scorm (
  id int(10) unsigned NOT NULL auto_increment,
  course int(10) unsigned NOT NULL default '0',
  name varchar(255) NOT NULL default '',
  reference varchar(255) NOT NULL default '',
  version varchar(9) NOT NULL default '',
  maxgrade float(3) NOT NULL default '0',
  grademethod tinyint(2) NOT NULL default '0',
  launch int(10) unsigned NOT NULL default '0',
  summary text NOT NULL,
  browsemode tinyint(2) NOT NULL default '0',
  auto tinyint(1) unsigned NOT NULL default '0',
  width int(10) unsigned NOT NULL default '800',
  height int(10) unsigned NOT NULL default '600',
  timemodified int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY id (id),
  KEY course (course)
) ENGINE=MyISAM;

CREATE TABLE prefix_scorm_scoes (
  id int(10) unsigned NOT NULL auto_increment,
  scorm int(10) unsigned NOT NULL default '0',
  manifest varchar(255) NOT NULL default '',
  organization varchar(255) NOT NULL default '',
  parent varchar(255) NOT NULL default '',
  identifier varchar(255) NOT NULL default '',
  launch varchar(255) NOT NULL default '',
  parameters varchar(255) NOT NULL default '',
  scormtype varchar(5) NOT NULL default '',
  title varchar(255) NOT NULL default '',
  prerequisites varchar(200) NOT NULL default '',
  maxtimeallowed varchar(19) NOT NULL default '',
  timelimitaction varchar(19) NOT NULL default '',
  datafromlms varchar(255) NOT NULL default '',
  masteryscore varchar(200) NOT NULL default '',
  next tinyint(1) unsigned NOT NULL default '0',
  previous tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY (id),
  UNIQUE KEY id (id),
  KEY scorm (scorm)
) ENGINE=MyISAM;

CREATE TABLE prefix_scorm_scoes_track (
  id int(10) unsigned NOT NULL auto_increment,
  userid int(10) unsigned NOT NULL default '0',
  scormid int(10) NOT NULL default '0',
  scoid int(10) unsigned NOT NULL default '0',
  element varchar(255) NOT NULL default '',
  value longtext NOT NULL default '',
  timemodified int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY userid (userid),
  KEY scormid (scormid),
  KEY scoid (scoid),
  KEY elemeny (element),
  UNIQUE track (userid, scormid, scoid, element)
) ENGINE=MyISAM;

#
# Dumping data for table log_display
#

INSERT INTO prefix_log_display VALUES ('scorm', 'view', 'scorm', 'name');
INSERT INTO prefix_log_display VALUES ('scorm', 'review', 'scorm', 'name');
INSERT INTO prefix_log_display VALUES ('scorm', 'update', 'scorm', 'name');
INSERT INTO prefix_log_display VALUES ('scorm', 'add', 'scorm', 'name');
