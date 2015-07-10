#
# Table structure for table `workshop`
#

CREATE TABLE `prefix_workshop` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `course` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `wtype` tinyint(3) unsigned NOT NULL default '0',
  `nelements` tinyint(3) unsigned NOT NULL default '1',
  `nattachments` tinyint(3) unsigned NOT NULL default '0',
  `phase` tinyint(2) unsigned NOT NULL default '0',
  `format` tinyint(2) unsigned NOT NULL default '0',
  `gradingstrategy` tinyint(2) unsigned NOT NULL default '1',
  `resubmit` tinyint(2) unsigned NOT NULL default '0',
  `agreeassessments` tinyint(2) unsigned NOT NULL default '0',
  `hidegrades` tinyint(2) unsigned NOT NULL default '0',
  `anonymous` tinyint(2) unsigned NOT NULL default '0',
  `includeself` tinyint(2) unsigned NOT NULL default '0',
  `maxbytes` int(10) unsigned NOT NULL default '100000',
  `submissionstart` int(10) unsigned NOT NULL default '0',
  `assessmentstart` int(10) unsigned NOT NULL default '0',
  `submissionend` int(10) unsigned NOT NULL default '0',
  `assessmentend` int(10) unsigned NOT NULL default '0',
  `releasegrades` int(10) unsigned NOT NULL default '0',
  `grade` tinyint(3) NOT NULL default '0',
  `gradinggrade` tinyint(3) NOT NULL default '0',
  `ntassessments` tinyint(3) unsigned NOT NULL default '0',
  `assessmentcomps` tinyint(3) unsigned NOT NULL default '2',
  `nsassessments` tinyint(3) unsigned NOT NULL default '0',
  `overallocation` tinyint(3) unsigned NOT NULL default '0',
  `timemodified` int(10) unsigned NOT NULL default '0',
  `teacherweight` tinyint(3) unsigned NOT NULL default '1',
  `showleaguetable` tinyint(3) unsigned NOT NULL default '0',
  `usepassword` tinyint(3) unsigned NOT NULL default '0',
  `password` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `course` (`course`)
) COMMENT='Defines workshop';
# --------------------------------------------------------

#
# Table structure for table `workshop_submissions`
#

CREATE TABLE `prefix_workshop_submissions` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `timecreated` int(10) unsigned NOT NULL default '0',
  `mailed` tinyint(2) unsigned NOT NULL default '0',
  `description` text NOT NULL,
  `gradinggrade` int(3) unsigned NOT NULL default '0',
  `finalgrade` int(3) unsigned NOT NULL default '0',
  `late` int(3) unsigned NOT NULL default '0',
  `nassessments` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  INDEX `userid` (`userid`),
  INDEX `workshopid` (`workshopid`),
  INDEX `mailed` (`mailed`)
) COMMENT='Info about submitted work from teacher and students';
# --------------------------------------------------------

#
# Table structure for table `workshop_assessments`
#

CREATE TABLE `prefix_workshop_assessments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0',
  `submissionid` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `timecreated` int(10) unsigned NOT NULL default '0',
  `timegraded` int(10) unsigned NOT NULL default '0',
  `timeagreed` int(10) unsigned NOT NULL default '0',
  `grade` float NOT NULL default '0',
  `gradinggrade` int(3) NOT NULL default '0',
  `mailed` tinyint(3) unsigned NOT NULL default '0',
  `resubmission` tinyint(3) unsigned NOT NULL default '0',
  `donotuse` tinyint(3) unsigned NOT NULL default '0',
  `generalcomment` text NOT NULL,
  `teachercomment` text NOT NULL,
  PRIMARY KEY  (`id`),
  INDEX (`submissionid`),
  INDEX (`userid`),
  INDEX `workshopid` (`workshopid`),
  INDEX `mailed` (`mailed`)
  ) COMMENT='Info about assessments by teacher and students';
# --------------------------------------------------------

#
# Table structure for table `workshop_elements`
#

CREATE TABLE `prefix_workshop_elements` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0',
  `elementno` tinyint(3) unsigned NOT NULL default '0',
  `description` text NOT NULL,
  `scale` tinyint(3) unsigned NOT NULL default '0',
  `maxscore` tinyint(3) unsigned NOT NULL default '1',
  `weight` tinyint(3) unsigned NOT NULL default '11',
  `stddev` float NOT NULL default '0.0',
  `totalassessments` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `workshopid` (`workshopid`)
) COMMENT='Info about marking scheme of assignment';
# --------------------------------------------------------


#
# Table structure for table `workshop_rubrics`
#

CREATE TABLE `prefix_workshop_rubrics` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0',
  `elementno` int(10) unsigned NOT NULL default '0',
  `rubricno` tinyint(3) unsigned NOT NULL default '0',
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
) COMMENT='Info about the rubrics marking scheme';
# --------------------------------------------------------

#
# Table structure for table `workshop_grades`
#

CREATE TABLE `prefix_workshop_grades` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0', 
  `assessmentid` int(10) unsigned NOT NULL default '0',
  `elementno` int(10) unsigned NOT NULL default '0',
  `feedback` text NOT NULL default '',
  `grade` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  INDEX (`assessmentid`),
  INDEX `workshopid` (`workshopid`)
) COMMENT='Info about individual grades given to each element';
# --------------------------------------------------------


#
# Table structure for table `workshop_stockcomments`
#

CREATE TABLE `prefix_workshop_stockcomments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0', 
  `elementno` int(10) unsigned NOT NULL default '0',
  `comments` text NOT NULL default '',
  PRIMARY KEY  (`id`)
) COMMENT='Info about the teacher comment bank';
# --------------------------------------------------------

#
# Table structure for table `workshop_comments`
#

CREATE TABLE `prefix_workshop_comments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `workshopid` int(10) unsigned NOT NULL default '0', 
  `assessmentid` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `timecreated` int(10) unsigned NOT NULL default '0',
  `mailed` tinyint(2) unsigned NOT NULL default '0',
  `comments` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `workshopid` (`workshopid`),
  KEY `assessmentid` (`assessmentid`),
  KEY `userid` (`userid`),
  KEY `mailed` (`mailed`)
) COMMENT='Defines comments';
# --------------------------------------------------------
        
        

INSERT INTO `prefix_log_display` VALUES ('workshop', 'assessments', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'close', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'display', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'resubmit', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'set up', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'submissions', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'view', 'workshop', 'name');
INSERT INTO `prefix_log_display` VALUES ('workshop', 'update', 'workshop', 'name');
