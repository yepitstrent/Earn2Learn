<?PHP

function hotpot_update_to_v2_from_v1() {
	global $CFG;
	$ok = true;

	// remove, alter and add fields in database

	$table = 'hotpot';
	if (hotpot_db_table_exists($table)) {
		$ok = $ok && hotpot_update_fields($table);
	} else {
		$ok = $ok && hotpot_create_table($table);
	}

	$table = 'hotpot_attempts';
	$oldtable = 'hotpot_events';

	if (hotpot_db_table_exists($oldtable)) {
		$ok = $ok && hotpot_update_fields($oldtable);
		$ok = $ok && hotpot_db_append_table($oldtable, $table);
	} else {
		$ok = $ok && hotpot_create_table($table);
	}

	// create new tables (from mysql.sql)
	$ok = $ok && hotpot_create_table('hotpot_questions');
	$ok = $ok && hotpot_create_table('hotpot_responses');
	$ok = $ok && hotpot_create_table('hotpot_strings');

	// remove redundant scripts
	$files = array('coursefiles.php', 'details.php', 'dummy.html', 'hotpot.php', 'hotpot2db.php');
	foreach ($files as $file) {
		$filepath = "$CFG->dirroot/mod/hotpot/$file";
		if (file_exists($filepath)) {
			@unlink($filepath); // don't worry about errors
		}
	}

	return $ok;
}

function hotpot_update_to_v2_from_hotpotatoes() {
	global $CFG;

	$ok = true; // hope for the best!

	// check we have the minimum required hotpot module
	$minimum = 2005031400; 
	$module = get_record("modules", "name", "hotpot");
	if (empty($module) || $module->version<$minimum) {

		if ($module) {
			print ("<P>The update to the HotPotatoes module requires at least version $minimum of the HotPot module.</P>");
			print ("<P>The current version of the HotPot module on this site is $module->version.</P>");
		}
		print ("<P>Please install the latest version of the HotPot module and then try the update again.</P>");
		$ok = false;

	} else {
		// arrays to map foreign keys
		$new = array();
		$new['hotpot'] = array();
		$new['attempt'] = array();
		$new['question'] = array();
		$new['string'] = array();

		// save and switch off SQL message echo
		global $db;
		$debug = $db->debug;
		$db->debug = false;

		// import hotpotatoes (and save old ids)
		$ok = $ok && hotpot_update_fields('hotpotatoes');
		$ok = $ok && hotpot_transfer_records('hotpotatoes', 'hotpot', array(), 'hotpot', $new);

		// update course modules and logs
		$ok = $ok && hotpot_update_course_modules('hotpotatoes', 'hotpot', $new);

		// import hotpotatoes_strings (and save old ids)
		$ok = $ok && hotpot_transfer_records('hotpotatoes_strings', 'hotpot_strings', array(), 'string', $new);

		// import hotpotatoes_attempts (and save old ids)
		$ok = $ok && hotpot_transfer_records('hotpotatoes_attempts', 'hotpot_attempts', array('hotpotatoes'=>'hotpot'), 'attempt', $new);

		// import hotpotatoes_questions (and save old ids)
		$ok = $ok && hotpot_transfer_records('hotpotatoes_questions', 'hotpot_questions', array('hotpotatoes'=>'hotpot'), 'question', $new);

		// import hotpotatoes_responses
		$ok = $ok && hotpot_transfer_records('hotpotatoes_responses', 'hotpot_responses', array('attempt'=>'attempt', 'question'=>'question'), 'response', $new);

		// restore SQL message echo setting
		$db->debug = $debug;

		// remove the hotpotatoes tables, if the update went ok
		if ($ok) {
		//	hotpot_db_remove_table('hotpotatoes');
		//	hotpot_db_remove_table('hotpotatoes_attempts');
		//	hotpot_db_remove_table('hotpotatoes_questions');
		//	hotpot_db_remove_table('hotpotatoes_responses');
		//	hotpot_db_remove_table('hotpotatoes_strings');
		}

		// hide the hotpotatoes module (see admin/modules.php))
		if ($ok && ($module = get_record("modules", "name", "hotpotatoes"))) {
			set_field("modules", "visible", "0", "id", $module->id);

			print '<P>All HotPotatoes activities have been imported to the HotPot module.<BR>'."\n";
			print 'The HotPotatoes module has been hidden and can safely be deleted from this Moodle site.<BR>'."\n";
			print ' &nbsp; &nbsp; <A href="'.$CFG->wwwroot.'/admin/modules.php">Configuration -> Modules</A>, then click &quot;Delete&quot; for &quot;Hot Potatoes XML Quiz&quot;</P>'."\n";
		}
	}

	if ($ok) {
		print '<P align="center">Thank you for using the HotPotatoes module.<br>';
		print 'The HotPotatoes module has been replaced by<BR>version 2 of the HotPot module. Enjoy!</P>';
	}
	return $ok;
}

function hotpot_create_table($table) {
	global $CFG;
	$ok = true;

	static $sql;
	if (empty($sql)) { // first time only
		$filepath = "$CFG->dirroot/mod/hotpot/db/$CFG->dbtype.sql";

		if (function_exists('file_get_contents')) {
			$sql = file_get_contents($filepath);

		} else { // PHP < 4.3
			$sql = file($filepath);
			if (is_array($sql)) {
				 $sql = implode('', $sql);
			}
		}

		if(empty($sql)) { // $sql==false
			 $sql = '';
		}
	}

	// check table does not already exist
	if (!hotpot_db_table_exists($table)) {

		// extract and execute all CREATE statements relating to this table
		if (preg_match_all("/CREATE (TABLE|INDEX)(\s[^;]*)? prefix_{$table}(\s[^;]*)?;/s", $sql, $strings)) {
			foreach ($strings[0] as $string) {
				$ok = $ok && modify_database('', $string);
			}
		} else {
			// no CREATE statements found for this $table
			$ok = false;
		}
	}
	return $ok;
}
function hotpot_transfer_records($oldtable, $table, $foreignkeys, $primarykey, &$new) {
	global $db;
	$ok = true;

	// get the records, if any
	if (hotpot_db_table_exists($oldtable) && ($records = get_records($oldtable))) {

		// start progress report
		$i = 0;
		$count = count($records);
		hotpot_update_print("Transferring $count records from &quot;$oldtable&quot; to &quot;$table&quot; ... ");

		// transfer all $records
		foreach ($records as $record) {

			switch ($table) {
				case 'hotpot' :
					$record->summary = addslashes($record->summary);
					break;
				case 'hotpot_attempts' :
					$record->details = addslashes($record->details);
					break;
				case 'hotpot_questions' :
					$record->name = addslashes($record->name);
					hotpot_update_string_id_list($table, $record, 'TEXT', $new);
					break;
				case 'hotpot_responses' :
					hotpot_update_string_id_list($table, $record, 'correct', $new);
					hotpot_update_string_id_list($table, $record, 'ignored', $new);
					hotpot_update_string_id_list($table, $record, 'wrong', $new);
					break;
				case 'hotpot_strings' :
					$record->string = addslashes($record->string);
					break;
			}

			// update foreign keys, if any
			foreach ($foreignkeys as $oldkey=>$key) {

				// transfer (and update) key
				$value = $record->$oldkey;
				if (isset($new[$key][$value])) {
					$record->$key = $new[$key][$value];
				} else {
					// foreign key could not be updated
					$ok = hotpot_update_print_warning($key, $value, $oldtable, $record->id) && $ok;
					unset($record->id);
				}
			}
			if ($ok && isset($record->id)) {
				// store and remove old primary key
				$id = $record->id;
				unset($record->id);

				// add the updated record and store the new id
				$new[$primarykey][$id] = insert_record($table, $record, true);

				// check id is numeric
				if (!is_numeric($new[$primarykey][$id])) {
					hotpot_update_print("<li>Record could not added to $table table ($oldtable id=$id)</li>\n");
					//$ok = false;
				}
			}

			$i++;
			hotpot_update_print_progress($i);
		}
		// finish progress report
		hotpot_update_print_ok($ok);
	}

	return $ok;
}
function hotpot_update_course_modules($oldmodulename, $modulename, &$new) {

	$ok = true;

	$oldmoduleid = get_field('modules', 'id', 'name', $oldmodulename);
	$moduleid = get_field('modules', 'id', 'name', $modulename);

	if (is_numeric($oldmoduleid) && is_numeric($moduleid)) {

		// get module records
		if ($records = get_records('course_modules', 'module', $oldmoduleid)) {

			// start progress report
			$count = count($records);
			hotpot_update_print("Updating $count course modules from &quot;$oldmodulename&quot; to &quot;$modulename&quot; ... ");

			// update foreign keys in all $records
			foreach ($records as $record) {

				// update instance
				$instance = $record->instance;
				if (isset($new[$modulename][$instance])) {
					$record->instance = $new[$modulename][$instance];

				} else if ($record->deleted) {
					unset($record->id);

				} else {
					// could not find new id of course module
					$ok = hotpot_update_print_warning("$modulename instance", $instance, 'course_modules', $record->id) && $ok;
					unset($record->id);
				}

				// update module id
				if ($ok && isset($record->id)) {
					$record->module = $moduleid;
					$ok = update_record('course_modules', $record);
				}
			}

			// finish progress report
			hotpot_update_print_ok($ok);
		}

		// update logs
		$ok = $ok && hotpot_update_logs($oldmodulename, $modulename, $moduleid, $new);
	}

	return $ok;
}
function hotpot_update_logs($oldmodulename, $modulename, $moduleid, &$new) {

	$table = 'log';
	$ok = true;

	// get log records for the oldmodule
	if ($records = get_records($table, 'module', $oldmodulename)) {

		// start progress report
		$i = 0;
		$count = count($records);
		hotpot_update_print("Updating $count log records ... ");

		// update foreign keys in all $records
		foreach ($records as $record) {
	
			// update course module name
			$record->module = $modulename;
	
			// check if module id was given (usually it is)
			if ($record->cmid) {
	
				// update course module id, if necessary
				if (isset($new[$modulename][$record->cmid])) {
					$record->cmid = $new[$modulename][$record->cmid];
				} else {
					// could not update course module id
					$ok = hotpot_update_print_warning('cmid', $record->cmid, 'log', $record->id) && $ok;
					unset($record->id);
				}
	
				// update url and info
				switch ($record->action) {
	
					case "add":
					case "update":
					case "view":
						$record->url = "view.php?id=".$record->cmid;
						$record->info = $moduleid;
						break;
	
					case "view all":
						// do nothing
						break;
	
					case "report":
						$record->url = "report.php?id=".$record->cmid;
						$record->info = $moduleid;
						break;
	
					case "attempt":
					case "submit":
					case "review": 
						$id = substr(strrchr($record->url,"="),1);
						if (isset($new->attempt[$id])) { 
							$id = $new->attempt[$id];
						}
						$record->url = "review.php?id=".$record->cmid."&attempt=$id";
						$record->info = $moduleid;
						break;

					default:
						// unknown log action
						$ok = hotpot_update_print_warning('action', $record->action, 'log', $record->id) && $ok;
						unset($record->id);

				} // end switch
			}
			if (isset($record->id)) {
				$ok = $ok && update_record($table, $record);
			}

			$i++;
			hotpot_update_print_progress($i);

		} // end foreach

		// finish progress report
		hotpot_update_print_ok($ok);
	}
	return $ok;
}
function hotpot_update_fields($table, $feedback=false) {
	global $CFG, $db;
	$ok = true;

	// check the table exists
	if (hotpot_db_table_exists($table)) {

		switch ($table) {

			case 'hotpot' :
				// == ADD ==
				hotpot_db_update_field_type($table, '', 'location',     'INTEGER', 4, 'UNSIGNED', 'NOT NULL', 0);
				hotpot_db_update_field_type($table, '', 'navigation',   'INTEGER', 4, 'UNSIGNED', 'NOT NULL', 1);
				hotpot_db_update_field_type($table, '', 'outputformat', 'INTEGER', 4, 'UNSIGNED', 'NOT NULL', 1);
				hotpot_db_update_field_type($table, '', 'shownextquiz', 'INTEGER', 4, 'UNSIGNED', 'NOT NULL', 0);
				hotpot_db_update_field_type($table, '', 'forceplugins', 'INTEGER', 4, 'UNSIGNED', 'NOT NULL', 0);
				hotpot_db_update_field_type($table, '', 'password',     'VARCHAR', 255, '',       'NOT NULL', '');
				hotpot_db_update_field_type($table, '', 'subnet',       'VARCHAR', 255, '',       'NOT NULL', '');

				// == ALTER ==
				hotpot_db_update_field_type($table, 'summary',   'summary',   'TEXT',    '',  '', 'NOT NULL', '');
				hotpot_db_update_field_type($table, 'reference', 'reference', 'VARCHAR', 255, '', 'NOT NULL', '');

				// == REMOVE ==
				hotpot_db_remove_field($table, 'intro');
				hotpot_db_remove_field($table, 'attemptonlast');
				hotpot_db_remove_field($table, 'sumgrades');

				hotpot_db_set_table_comment($table, 'details about Hot Potatoes quizzes');
			break;

			case 'hotpot_events' :

				// == ADD ==
				hotpot_db_update_field_type($table, '', 'hotpot',     'INTEGER', 10, 'UNSIGNED', 'NOT NULL');
				hotpot_db_update_field_type($table, '', 'attempt',    'INTEGER', 6,  'UNSIGNED', 'NOT NULL');
				hotpot_db_update_field_type($table, '', 'details',    'TEXT',    '', '', '', '');
				hotpot_db_update_field_type($table, '', 'timestart',  'INTEGER', 10, 'UNSIGNED', 'NOT NULL', 0);
				hotpot_db_update_field_type($table, '', 'timefinish', 'INTEGER', 10, 'UNSIGNED', 'NOT NULL', 0);

				// == ALTER ==
				hotpot_db_update_field_type($table, 'score',     'score',      'INTEGER', 6,  'UNSIGNED', 'NULL');
				hotpot_db_update_field_type($table, 'wrong',     'penalties',  'INTEGER', 6,  'UNSIGNED', 'NULL');
				hotpot_db_update_field_type($table, 'starttime', 'starttime',  'INTEGER', 10, 'UNSIGNED', 'NULL');
				hotpot_db_update_field_type($table, 'endtime',   'endtime',    'INTEGER', 10, 'UNSIGNED', 'NULL');

				// save and switch off SQL message echo
				$debug = $db->debug;
				$db->debug = $feedback;

				// get array mapping course module ids to hotpot ids
				$hotpotmoduleid = get_field('modules', 'id', 'name', 'hotpot');
				$coursemodules = get_records('course_modules', 'module', $hotpotmoduleid, 'id', 'id, instance');


				// get all event records
				if (hotpot_db_field_exists($table, 'hotpotid')) {
					$records = get_records($table, '', '', 'userid,hotpotid,time');
				} else {
					$records = false; // table has already been updated
				}

				if ($records) {

					$count = count($records);
					hotpot_update_print("Updating $count records in $table ... ");

					$ids = array_keys($records);
					foreach ($ids as $i=>$id) {
					
						// reference to current record
						$record = &$records[$id];

						// set timestart and timefinish (the times recorded by Moodle)
						if (empty($record->timestart) && $record->time) {
							$record->timestart = $record->time;
						}

						if (empty($record->timefinish) && $record->timestart) {

							if ($record->starttime && $record->endtime) {
								$duration = ($record->endtime - $record->starttime);

							} else {
								if (($i+1)>=$count) {
									$nextrecord = NULL;
								} else {
									$nextrecord = &$records[$ids[$i+1]];
								}
								if (isset($nextrecord) && $nextrecord->userid==$record->userid && $nextrecord->hotpotid==$record->hotpotid) {
									$duration = $nextrecord->time - $record->time;
								} else {
									$duration = NULL;
								}
							}

							if (isset($duration)) {
								$record->timefinish = $record->timestart + $duration;
							}
						}

						// unset score and penalties, if quiz was abandoned
						if (empty($record->endtime) || (empty($record->penalties) && empty($record->score))) {
							unset($record->score);
							unset($record->penalties);
						}

						// get last (=previous) record
						if ($i==0) {
							$lastrecord = NULL;
						} else {
							$lastrecord = &$records[$ids[$i-1]];
						}

						// increment or reset $attempt number
						if (isset($lastrecord) && $lastrecord->userid==$record->userid && $lastrecord->hotpotid==$record->hotpotid) {
							$attempt++;
						} else {
							$attempt = 1;
						}

						// set $record->$attempt, if necessary
						if (empty($record->attempt) || $record->attempt<$attempt) {
							$record->attempt = $attempt;
						} else {
							$attempt = $record->attempt;
						}

						// set hotpot id and update record
						if (isset($record->hotpotid) && isset($record->id)) {
							if (isset($coursemodules[$record->hotpotid])) {
								$record->hotpot = $coursemodules[$record->hotpotid]->instance;
								hotpot_db_update_record($table, $record, true);
	
							} else {
								// hotpotid is invalid (shouldn't happen)
								$ok = hotpot_update_print_warning('hotpotid', $record->hotpotid, $table, $record->id) && $ok;
								delete_records($table, 'id', $record->id);
							}
						} else {
								// empty record (shouldn't happen)
						}

						hotpot_update_print_progress($i);
					}

					// finish progress report
					hotpot_update_print_ok($ok);
				}

				// restore SQL message echo setting
				$db->debug = $debug;

				// == REMOVE ==
				hotpot_db_remove_field($table, 'hotpotid');
				hotpot_db_remove_field($table, 'course');
				hotpot_db_remove_field($table, 'time');
				hotpot_db_remove_field($table, 'event');

				hotpot_db_set_table_comment($table, 'details about Hot Potatoes quiz attempts');

			break;

			case 'hotpotatoes' :
				// == ALTER ==
				hotpot_db_update_field_type($table, 'intro', 'summary', 'TEXT', '', '', '', 'NULL');
			break;

		}
	}
	return $ok;
}
function hotpot_update_string_id_list($table, &$record, $field, &$new) {

	$ok = true;

	if (isset($record->$field)) {

		$oldids = explode(',', $record->$field);
		$newids = array();

		foreach ($oldids as $id) {

			if (isset($new['string'][$id])) {
				$newids[] = $new['string'][$id];
			} else if (is_numeric($id)) {
				// string id could not be updated
				$ok = hotpot_update_print_warning("string id in $field", $id, $table, $record->id) && $ok;
			} else {
				// ignore non-numeric ids (e.g. blanks)
			}
		}
		if ($ok) {
			$record->$field = implode(',', $newids);
		}
	}

	return $ok;
}

///////////////////////////
//     print functions
///////////////////////////

function hotpot_update_print($msg=false, $n=300) {
	// this function prints $msg and flush output buffer

	if ($msg) {
		if (is_string($msg)) {
			print $msg;
		} else {
			print strftime("%X", time());
		}
	}

	// fill output buffer
	if ($n) {
		print str_repeat(" ", $n);
	}

	// some browser's require newline to flush
	print "\n";

	// flush PHP's output buffer
	flush();
}
function hotpot_update_print_progress($i) {
	if ($i%10==0) {
		$msg = '.';
		hotpot_update_print($msg);
	}
}
function hotpot_update_print_ok($ok) {
	if ($ok) {
		hotpot_update_print('<FONT color="green">'.get_string('success')."</FONT><BR>\n");
 	} else {
		hotpot_update_print('<FONT color="red">'.get_string('error')."</FONT><BR>\n");
	}
}
function hotpot_update_print_warning($field, $value, $table, $id) {
	hotpot_update_print("<li><b>Warning:</b> invalid $field field (value=$value) in $table (id=$id)</li>\n");
	return true;
}

///////////////////////////
//     database functions
///////////////////////////

function hotpot_db_table_exists($table, $feedback=false) {
	return hotpot_db_object_exists($table, '', $feedback);
}
function hotpot_db_field_exists($table, $field, $feedback=false) {
	return 
		hotpot_db_object_exists($table, '', $feedback) &&
		hotpot_db_object_exists($table, $field, $feedback)
	;
}
function hotpot_db_object_exists($table, $field='', $feedback=false) {

	global $CFG,$db;

	// expand table name
	$table = "{$CFG->prefix}$table";

	// set $sql
	switch (strtolower($CFG->dbtype)) {
		case 'mysql' : 
			if (empty($field)) {
				$sql = "SHOW TABLES LIKE '$table'";
			} else {
				$sql = "SHOW COLUMNS FROM `$table` LIKE '$field'";
			}
		break;
		
		case 'postgres7' :
			if (empty($field)) {
				$sql = "SELECT relname FROM pg_class WHERE relname = '$table' AND relkind='r'";
			} else {
				$sql = "
					SELECT attname FROM pg_attribute WHERE attname = '$field' 
					AND attrelid = (SELECT oid FROM pg_class WHERE relname = '$table')
				";
			}
		break;
	}

	// save and switch off SQL message echo
	$debug = $db->debug;
	$db->debug = $feedback;

	// execute sql
	$rs = $db->Execute($sql);

	// restore SQL message echo setting
	$db->debug = $debug;

	// report error if required
	if (empty($rs) && isset($CFG->debug) and $CFG->debug > 7) {
		notify($db->ErrorMsg()."<br /><br />$sql");
	}

	return ($rs && $rs->RecordCount()>0);
}
function hotpot_db_remove_table($table, $feedback=true) {
	global $CFG;
	if (hotpot_db_table_exists($table)) {
		$ok = execute_sql("DROP TABLE {$CFG->prefix}$table", $feedback);
	} else {
		$ok = true;
	}
	return $ok;
}
function hotpot_db_rename_table($oldtable, $table, $feedback=true) {
	global $CFG;
	if (hotpot_db_table_exists($oldtable)) {
		$ok = execute_sql("ALTER TABLE {$CFG->prefix}$oldtable RENAME TO {$CFG->prefix}$table", $feedback);
	} else {
		$ok = true;
	}
	return $ok;
}
function hotpot_db_append_table($oldtable, $table, $feedback=true) {
	global $CFG, $db;

	if (hotpot_db_table_exists($oldtable)) {
		if (hotpot_db_table_exists($table)) {

			// expand table names
			$table = "{$CFG->prefix}$table";
			$oldtable = "{$CFG->prefix}$oldtable";
		
			// get field info
			$fields = $db->MetaColumns($table);
			$oldfields = $db->MetaColumns($oldtable);

			$fieldnames = array();
			if (!empty($fields) || !empty($oldfields)) {
				foreach ($fields as $field) {
					if ($field->name!='id' && isset($oldfields[strtoupper($field->name)])) {
						$fieldnames[] = $field->name;
					}
				}
			}
			$fieldnames = implode(',', $fieldnames);

			if (empty($fieldnames)) {
				$ok = false;
			} else {
				switch (strtolower($CFG->dbtype)) {
					case 'mysql':
						$ok = execute_sql("INSERT INTO `$table` ($fieldnames) SELECT $fieldnames FROM `$oldtable` WHERE 1");
						break;
					case 'postgres7':
						$ok = execute_sql("INSERT INTO $table ($fieldnames) SELECT $fieldnames FROM $oldtable");
						break;
					default:
						$ok = false;
						break;
				}
			}

		} else { // $table does not exist
			$ok = hotpot_db_rename_table($oldtable, $table, $feedback);
		}

	} else { // $oldtable does not exist
		$ok = hotpot_db_table_exists($table, $feedback);
	}
	return $ok;
}
function hotpot_db_set_table_comment($table, $comment, $feedback=true) {
	global $CFG;
	$ok = true;

	switch (strtolower($CFG->dbtype)) {
		case 'mysql' :
			$ok = execute_sql("ALTER TABLE {$CFG->prefix}$table COMMENT='$comment'");
			break;
		case 'postgres7' :
			$ok = execute_sql("COMMENT ON TABLE {$CFG->prefix}$table IS '$comment'");
			break;
	}

	return $ok;
}
function hotpot_db_remove_field($table, $field, $feedback=true) {
	global $CFG;
	if (hotpot_db_field_exists($table, $field)) {
		$ok = execute_sql("ALTER TABLE {$CFG->prefix}$table DROP COLUMN $field", $feedback);
	} else {
		$ok = true;
	}
	return $ok;
}
function hotpot_db_update_field_type($table, $oldfield, $field, $type, $size, $unsigned, $notnull, $default=NULL, $after=NULL) {
	$ok = true;
	global $CFG,$db;

	// check validity of arguments, and adjust if necessary

	if ($oldfield && !hotpot_db_field_exists($table, $oldfield)) {
		$oldfield = '';
	}
	if (empty($oldfield) && hotpot_db_field_exists($table, $field)) {
		$oldfield = $field;
	}
	if (is_string($unsigned)) {
		$unsigned = (strtoupper($unsigned)=='UNSIGNED');
	}
	if (is_string($notnull)) {
		$notnull = (strtoupper($notnull)=='NOT NULL');
	}
	if (isset($default)) {
		if (!is_numeric($default) && strtoupper($default)!='NULL' && !preg_match("|^'.*'$|", $default)) {
			$default = "'$default'";
		}
	}

	// set full table name
	$table = "{$CFG->prefix}$table";

	// update the field in the database

	switch (strtolower($CFG->dbtype)) {

		case 'mysql':

			// optimize integer types
			switch (strtoupper($type)) {
				case 'TEXT':
					$size = '';
					$unsigned = false;
				break;
				case 'INTEGER' :
					if (!is_numeric($size)) {
						$size = '';
					} else if ($size <= 4) {
						$type = "TINYINT";   // 1 byte
					} else if ($size <= 6) {
						$type = "SMALLINT";  // 2 bytes
					} else if ($size <= 8) {
						$type = "MEDIUMINT"; // 3 bytes
					} else if ($size <= 10) {
						$type = "INTEGER";   // 4 bytes (=INT)
					} else if ($size > 10) {
						$type = "BIGINT";    // 8 bytes
					}
				break;
				case 'VARCHAR':
					$unsigned = false;
				break;
			}

			// set action
			if (empty($oldfield)) {
				$action = "ADD";
			} else {
				$action = "CHANGE `$oldfield`";
			}

			// set fieldtype
			$fieldtype = $type;
			if ($size) {
				$fieldtype .= "($size)";
			}
			if ($unsigned) {
				$fieldtype .= ' UNSIGNED';
			}
			if ($notnull) {
				$fieldtype .= ' NOT NULL';
			}
			if (isset($default)) {
				$fieldtype .= " DEFAULT $default";
			}
			if (!empty($after)) {
				$fieldtype .= " AFTER `$after`";
			}

			$ok = $ok && execute_sql("ALTER TABLE `$table` $action `$field` $fieldtype");
		break;

		case 'postgres7':

			// get db version
			$dbinfo = $db->ServerInfo();
			$dbversion = substr($dbinfo['version'],0,3);

			// prevent conflicts with reserved words
			$tmpfield = "\"temporary_{$field}_".time()."\"";
			$oldfield = "\"$oldfield\"";
			$field    = "\"$field\"";

			switch (strtoupper($type)) {
				case "INTEGER":
					if (!is_numeric($size)) {
						$fieldtype = "INTEGER";
					} else if ($size <= 4) {
						$fieldtype = "INT2"; // 2 bytes
					} else if ($size <= 10) {
						$fieldtype = "INT4"; // 4 bytes (=INTEGER)
					} else if ($size > 10) {
						$fieldtype = "INT8"; // 8 bytes
					}
				break;
				case "VARCHAR":
					$fieldtype = "VARCHAR($size)";
				break;
				default:
					$fieldtype = $type;
			}

			// start transaction
			execute_sql("BEGIN");

			// create temporary field
			execute_sql("ALTER TABLE $table ADD COLUMN $tmpfield $fieldtype");

			// set default
			if (isset($default)) {
				execute_sql("UPDATE $table SET $tmpfield = $default");
				execute_sql("ALTER TABLE $table ALTER COLUMN $tmpfield SET DEFAULT $default");
			} else {
				execute_sql("ALTER TABLE $table ALTER COLUMN $tmpfield DROP DEFAULT");
			}

			// set not null
			if ($dbversion >= "7.3") {
				$notnull = ($notnull ? "SET NOT NULL" : "DROP NOT NULL");
				execute_sql("ALTER TABLE $table ALTER COLUMN $tmpfield $notnull");

			} else {
				execute_sql("
					UPDATE pg_attribute SET attnotnull=".($notnull ? 'TRUE' : 'FALSE')." 
					WHERE attname = $tmpfield
					AND attrelid = (SELECT oid FROM pg_class WHERE relname = '$table')
				");
			}

			// transfer $oldfield values, if necessary
			if ( $oldfield != '""' ) {
				execute_sql("UPDATE $table SET $tmpfield = $oldfield");
				execute_sql("ALTER TABLE $table DROP COLUMN $oldfield");
			}

			// rename $tmpfield to $field
			execute_sql("ALTER TABLE $table RENAME COLUMN $tmpfield TO $field");

			// do the transaction
			execute_sql("COMMIT");

			// reclaim disk space (must be done outside transaction)
			if ($oldfield != '""' && $dbversion >= "7.3") {
				execute_sql("UPDATE $table SET $field = $field");
				execute_sql("VACUUM FULL $table");
			}

		break;

	} // end switch $CGF->dbtype

	return $ok;
}
function hotpot_db_update_record($table, $record, $forcenull=false) {
	global $CFG, $db;
	$ok = true;

	// set full table name
	$table = "{$CFG->prefix}$table";

	// get field names
	$fields = $db->MetaColumns($table);

	if (empty($fields)) {
		$ok = false;
	} else {

		// get values
		$values = array();
		foreach ($fields as $field) {
			$fieldname = $field->name;
			if ($fieldname!='id' && ($forcenull || isset($record->$fieldname))) {
				$value = isset($record->$fieldname) ? "'".$record->$fieldname."'" : 'NULL';
				$values[] = "$fieldname = $value";
			}
		}
		$values = implode(',', $values);

		// update values (if there are any)
		if ($values) {
			$sql = "UPDATE $table SET $values WHERE id='$record->id'";
			$rs = $db->Execute($sql);

			if (empty($rs)) {
				$ok = false;
				if (isset($CFG->debug) and $CFG->debug > 7) {
					notify($db->ErrorMsg()."<br /><br />$sql");
				}
			}
		}
	}
	return $ok;
}

?>
