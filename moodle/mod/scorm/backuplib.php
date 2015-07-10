<?php //$Id: backuplib.php,v 1.9.2.1 2005/07/04 17:34:24 stronk7 Exp $
    //This php script contains all the stuff to backup/restore
    //scorm mods

    //This is the "graphical" structure of the scorm mod:
    //
    //                      scorm                                      
    //                   (CL,pk->id)---------------------
    //                        |                         |
    //                        |                         |
    //                        |                         |
    //                   scorm_scoes                    |
    //             (UL,pk->id, fk->scorm)               |
    //                        |                         |
    //                        |                         |
    //                        |                         |
    //                scorm_scoes_track                 |
    //  (UL,k->id, fk->scormid, fk->scoid, k->element)---
    //
    // Meaning: pk->primary key field of the table
    //          fk->foreign key to link with parent
    //          nt->nested field (recursive data)
    //          CL->course level info
    //          UL->user level info
    //          files->table may have files)
    //
    //-----------------------------------------------------------

    function scorm_backup_mods($bf,$preferences) {
        
        global $CFG;

        $status = true;

        //Iterate over scorm table
        $scorms = get_records ("scorm","course",$preferences->backup_course,"id");
        if ($scorms) {
            foreach ($scorms as $scorm) {
                //Start mod
                fwrite ($bf,start_tag("MOD",3,true));
                //Print scorm data
                fwrite ($bf,full_tag("ID",4,false,$scorm->id));
                fwrite ($bf,full_tag("MODTYPE",4,false,"scorm"));
                fwrite ($bf,full_tag("NAME",4,false,$scorm->name));
                fwrite ($bf,full_tag("REFERENCE",4,false,$scorm->reference));
                fwrite ($bf,full_tag("VERSION",4,false,$scorm->version));
                fwrite ($bf,full_tag("MAXGRADE",4,false,$scorm->maxgrade));
                fwrite ($bf,full_tag("GRADEMETHOD",4,false,$scorm->grademethod));
                fwrite ($bf,full_tag("LAUNCH",4,false,$scorm->launch));
                fwrite ($bf,full_tag("SUMMARY",4,false,$scorm->summary));
                fwrite ($bf,full_tag("BROWSEMODE",4,false,$scorm->browsemode));
                fwrite ($bf,full_tag("AUTO",4,false,$scorm->auto));
                fwrite ($bf,full_tag("WIDTH",4,false,$scorm->width));
                fwrite ($bf,full_tag("HEIGHT",4,false,$scorm->height));
                fwrite ($bf,full_tag("TIMEMODIFIED",4,false,$scorm->timemodified));
                $status = backup_scorm_scoes($bf,$preferences,$scorm->id);
 
                //if we've selected to backup users info, then execute backup_scorm_scoes_track
                if ($status) {
                    if ($preferences->mods["scorm"]->userinfo) {
                        $status = backup_scorm_scoes_track($bf,$preferences,$scorm->id);
                    }
                }
                //End mod
                $status =fwrite ($bf,end_tag("MOD",3,true));
            }
            //backup scorm files
            if ($status) {
                $status = backup_scorm_files($bf,$preferences);    
            }
            
        }
        return $status;
    }

    //Backup scorm_scoes contents (executed from scorm_backup_mods)
    function backup_scorm_scoes ($bf,$preferences,$scorm) {

        global $CFG;

        $status = true;

        $scorm_scoes = get_records("scorm_scoes","scorm",$scorm,"id");
        //If there is scoes
        if ($scorm_scoes) {
            //Write start tag
            $status =fwrite ($bf,start_tag("SCOES",4,true));
            //Iterate over each sco
            foreach ($scorm_scoes as $sco) {
                //Start sco
                $status =fwrite ($bf,start_tag("SCO",5,true));
                //Print submission contents
                fwrite ($bf,full_tag("ID",6,false,$sco->id));
                fwrite ($bf,full_tag("MANIFEST",6,false,$sco->manifest));
                fwrite ($bf,full_tag("ORGANIZATION",6,false,$sco->organization));
                fwrite ($bf,full_tag("PARENT",6,false,$sco->parent));
                fwrite ($bf,full_tag("IDENTIFIER",6,false,$sco->identifier));
                fwrite ($bf,full_tag("LAUNCH",6,false,$sco->launch));
                fwrite ($bf,full_tag("PARAMETERS",6,false,$sco->parameters));
                fwrite ($bf,full_tag("SCORMTYPE",6,false,$sco->scormtype));
                fwrite ($bf,full_tag("TITLE",6,false,$sco->title));
                fwrite ($bf,full_tag("PREREQUISITES",6,false,$sco->prerequisites));
                fwrite ($bf,full_tag("MAXTIMEALLOWED",6,false,$sco->maxtimeallowed));
                fwrite ($bf,full_tag("TIMELIMITACTION",6,false,$sco->timelimitaction));
                fwrite ($bf,full_tag("DATAFROMLMS",6,false,$sco->datafromlms));
                fwrite ($bf,full_tag("MASTERYSCORE",6,false,$sco->masteryscore));
                fwrite ($bf,full_tag("NEXT",6,false,$sco->next));
                fwrite ($bf,full_tag("PREVIOUS",6,false,$sco->previous));
                //End sco
                $status =fwrite ($bf,end_tag("SCO",5,true));
            }
            //Write end tag
            $status =fwrite ($bf,end_tag("SCOES",4,true));
        }
        return $status;
    }
  
   //Backup scorm_scoes_track contents (executed from scorm_backup_mods)
    function backup_scorm_scoes_track ($bf,$preferences,$scorm) {

        global $CFG;

        $status = true;

        $scorm_scoes_track = get_records("scorm_scoes_track","scormid",$scorm,"id");
        //If there is track
        if ($scorm_scoes_track) {
            //Write start tag
            $status =fwrite ($bf,start_tag("SCO_TRACKS",4,true));
            //Iterate over each sco
            foreach ($scorm_scoes_track as $sco_track) {
                //Start sco track
                $status =fwrite ($bf,start_tag("SCO_TRACK",5,true));
                //Print track contents
                fwrite ($bf,full_tag("ID",6,false,$sco_track->id));
                fwrite ($bf,full_tag("USERID",6,false,$sco_track->userid));
                fwrite ($bf,full_tag("SCOID",6,false,$sco_track->scoid));
                fwrite ($bf,full_tag("ELEMENT",6,false,$sco_track->element));
                fwrite ($bf,full_tag("VALUE",6,false,$sco_track->value));
                //End sco track
                $status =fwrite ($bf,end_tag("SCO_TRACK",5,true));
            }
            //Write end tag
            $status =fwrite ($bf,end_tag("SCO_TRACKS",4,true));
        }
        return $status;
    }
   
   ////Return an array of info (name,value)
   function scorm_check_backup_mods($course,$user_data=false,$backup_unique_code) {
        //First the course data
        $info[0][0] = get_string("modulenameplural","scorm");
        if ($ids = scorm_ids ($course)) {
            $info[0][1] = count($ids);
        } else {
            $info[0][1] = 0;
        }

        //Now, if requested, the user_data
        if ($user_data) {
            $info[1][0] = get_string("scoes","scorm");
            if ($ids = scorm_scoes_track_ids_by_course ($course)) {
                $info[1][1] = count($ids);
            } else {
                $info[1][1] = 0;
            }
        }
        return $info;
    }

    //Backup scorm package files
    function backup_scorm_files($bf,$preferences) {

        global $CFG;

        $status = true;

        //First we check to moddata exists and create it as necessary
        //in temp/backup/$backup_code  dir
        $status = check_and_create_moddata_dir($preferences->backup_unique_code);
        //Now copy the scorm dir
        if ($status) {
            if (is_dir($CFG->dataroot."/".$preferences->backup_course."/".$CFG->moddata."/scorm")) {
                $status = backup_copy_file($CFG->dataroot."/".$preferences->backup_course."/".$CFG->moddata."/scorm",
                                           $CFG->dataroot."/temp/backup/".$preferences->backup_unique_code."/moddata/scorm");
            }
        }

        return $status;

    }

    //Return a content encoded to support interactivities linking. Every module
    //should have its own. They are called automatically from the backup procedure.
    function scorm_encode_content_links ($content,$preferences) {

        global $CFG;

        $base = preg_quote($CFG->wwwroot,"/");

        //Link to the list of scorms
        $buscar="/(".$base."\/mod\/scorm\/index.php\?id\=)([0-9]+)/";
        $result= preg_replace($buscar,'$@SCORMINDEX*$2@$',$content);

        //Link to scorm view by moduleid
        $buscar="/(".$base."\/mod\/scorm\/view.php\?id\=)([0-9]+)/";
        $result= preg_replace($buscar,'$@SCORMVIEWBYID*$2@$',$result);

        return $result;
    }

    // INTERNAL FUNCTIONS. BASED IN THE MOD STRUCTURE

    //Returns an array of scorms id
    function scorm_ids ($course) {

        global $CFG;

        return get_records_sql ("SELECT a.id, a.course
                                 FROM {$CFG->prefix}scorm a
                                 WHERE a.course = '$course'");
    }
   
    //Returns an array of scorm_scoes id
    function scorm_scoes_track_ids_by_course ($course) {

        global $CFG;

        return get_records_sql ("SELECT s.id , s.scormid
                                 FROM {$CFG->prefix}scorm_scoes_track s,
                                      {$CFG->prefix}scorm a
                                 WHERE a.course = '$course' AND
                                       s.scormid = a.id");
    }
?>
