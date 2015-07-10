# phpMyAdmin MySQL-Dump
# version 2.2.1
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
#
# Host: localhost
# Generation Time: Nov 14, 2001 at 04:43 PM
# Server version: 3.23.36
# PHP Version: 4.0.6
# Database : `moodle`
# --------------------------------------------------------

#
# Table structure for table `resource`
#

CREATE TABLE prefix_resource (
  id SERIAL PRIMARY KEY,
  course integer NOT NULL default '0',
  name varchar(255) NOT NULL default '',
  type varchar(30) NOT NULL default '',
  reference varchar(255) default NULL,
  summary text NOT NULL default '',
  alltext text NOT NULL default '',
  popup text NOT NULL default '',
  options varchar(255) NOT NULL default '',
  timemodified integer NOT NULL default '0'
);

CREATE INDEX prefix_resource_course_idx ON prefix_resource (course);

#
# Dumping data for table `log_display`
#

INSERT INTO prefix_log_display VALUES ('resource', 'view', 'resource', 'name');
INSERT INTO prefix_log_display VALUES ('resource', 'update', 'resource', 'name');
INSERT INTO prefix_log_display VALUES ('resource', 'add', 'resource', 'name');
