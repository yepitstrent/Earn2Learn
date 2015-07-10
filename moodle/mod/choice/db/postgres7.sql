# phpMyAdmin MySQL-Dump
# version 2.2.1
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
#
# Host: localhost
# Generation Time: Nov 14, 2001 at 04:44 PM
# Server version: 3.23.36
# PHP Version: 4.0.6
# Database : `moodle`
# --------------------------------------------------------

#
# Table structure for table `choice`
#

CREATE TABLE prefix_choice (
  id SERIAL PRIMARY KEY,
  course integer NOT NULL default '0',
  name varchar(255) NOT NULL default '',
  text text NOT NULL default '',
  format integer NOT NULL default '0',
  showunanswered integer NOT NULL default '0',
  limitanswers integer NOT NULL default '0',
  publish integer NOT NULL default '0',
  release integer NOT NULL default '0',
  display integer NOT NULL default '0',
  allowupdate integer NOT NULL default '0',
  timeopen integer NOT NULL default '0',
  timeclose integer NOT NULL default '0',
  timemodified integer NOT NULL default '0'
);

CREATE INDEX prefix_choice_course_idx ON prefix_choice (course);

# --------------------------------------------------------

#
# Table structure for table `choice_answers`
#

CREATE TABLE prefix_choice_answers (
  id SERIAL PRIMARY KEY,
  choiceid integer NOT NULL default '0',
  userid integer NOT NULL default '0',
  optionid integer NOT NULL default '0',
  timemodified integer NOT NULL default '0'
);

CREATE INDEX prefix_choice_answers_choice_idx ON prefix_choice_answers (choiceid);
CREATE INDEX prefix_choice_answers_userid_idx ON prefix_choice_answers (userid);

# --------------------------------------------------------

#
# Table structure for table `choice_options`
#

CREATE TABLE prefix_choice_options (
  id SERIAL PRIMARY KEY,
  choiceid integer NOT NULL default '0',
  text TEXT,
  maxanswers integer NULL default '0',
  timemodified integer NOT NULL default '0'
);

CREATE INDEX prefix_choice_options_choice_idx ON prefix_choice_options (choiceid);

#
# Dumping data for table `log_display`
#

INSERT INTO prefix_log_display VALUES ('choice', 'view', 'choice', 'name');
INSERT INTO prefix_log_display VALUES ('choice', 'update', 'choice', 'name');
INSERT INTO prefix_log_display VALUES ('choice', 'add', 'choice', 'name');
INSERT INTO prefix_log_display VALUES ('choice', 'report', 'choice', 'name');
INSERT INTO prefix_log_display VALUES ('choice', 'choose', 'choice', 'name');
INSERT INTO prefix_log_display VALUES ('choice', 'choose again', 'choice', 'name');

