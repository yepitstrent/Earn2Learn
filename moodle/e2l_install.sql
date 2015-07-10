/*This is a script to update the database for
  Earn2Learn after a fresh install. Rather than
  trying to make the Moodle installer run this,
  it will be easier to manually run this after
  setup is complete. Earn2Learn won't function 
  correctly without running this script.*/

USE moodle;

/*ALLOW for NULL values in the tables. 
  Make sure to check for NULL values throughout E2L.*/

/*ADD dollar reward to Task*/
ALTER TABLE mdl_assignment 
ADD dollar decimal(10, 2);

/*ADD dollar reward to Lesson*/
ALTER TABLE mdl_lesson 
ADD dollar decimal(10, 2);

/*ADD reward amount to the User table*/
ALTER TABLE mdl_user 
ADD rewards decimal(10, 2);

/*ADD youtube id to Lesson*/
ALTER TABLE mdl_lesson 
ADD preview varchar(255);

/*ADD a time limit to the Tasks*/
ALTER TABLE mdl_assignment 
ADD timelimit int(10) unsigned;

