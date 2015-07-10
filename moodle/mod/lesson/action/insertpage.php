<?php
echo "INSERTPAGE.PHP";
/****************** insert page ************************************/
        
    if (!isteacher($course->id)) {
        error("Only teachers can look at this page");
    }

    confirm_sesskey();
    //echo "PARM_ALPHA: ".PARAM_ALPHA;
    // check to see if the cancel button was pushed
    if (optional_param('cancel', '', PARAM_ALPHA)) {
        redirect("view.php?id=$cm->id");
    }

    $timenow = time();
    
    $form = data_submitted();
    $newpage = new stdClass;
    $newanswer = new stdClass;
//    echo var_dump($form)."<h1>BREEEEEEAAAAAAKKKKKK</h1>";
    if ($form->pageid) {
    //echo "HHHHHHHHHHHHHHHHHHHHHHHHEEEEEEEEEEEEEEEERRRRRRRRRREEEEEEEEEEEEe";
        // the new page is not the first page
        if (!$page = get_record("lesson_pages", "id", $form->pageid)) {
            error("Insert page: page record not found");
        }
        $newpage->lessonid = clean_param($lesson->id, PARAM_INT);
        $newpage->prevpageid = clean_param($form->pageid, PARAM_INT);
        $newpage->nextpageid = clean_param($page->nextpageid, PARAM_INT);
        $newpage->timecreated = $timenow;
        $newpage->qtype = $form->qtype;
        if (isset($form->qoption)) {
            $newpage->qoption = clean_param($form->qoption, PARAM_INT);
        } else {
            $newpage->qoption = 0;
        }
        /// CDC-FLAG /// 6/16/04
        if (isset($form->layout)) {
            $newpage->layout = clean_param($form->layout, PARAM_INT);
        } else {
            $newpage->layout = 0;
        }
        if (isset($form->display)) {
            $newpage->display = clean_param($form->display, PARAM_INT);
        } else {
            $newpage->display = 0;
        }
        /// CDC-FLAG ///
        $newpage->title = clean_param($form->title, PARAM_CLEANHTML);
        $newpage->contents = clean_param(trim($form->contents), PARAM_CLEANHTML);
        $newpage->title = addslashes($newpage->title);
	if($form->youtube != NULL){ 
	    $newpage->youtube = get_YoutubeID($form->youtube); 
            update_Preview($newpage);
	}	
        $newpage->contents = addslashes($newpage->contents);
        $newpageid = insert_record("lesson_pages", $newpage);
        if (!$newpageid) {
            error("Insert page: new page not inserted");
        }
        // update the linked list (point the previous page to this new one)
        if (!set_field("lesson_pages", "nextpageid", $newpageid, "id", $newpage->prevpageid)) {
            error("Insert page: unable to update next link");
        }
        if ($page->nextpageid) {
            // new page is not the last page
            if (!set_field("lesson_pages", "prevpageid", $newpageid, "id", $page->nextpageid)) {
                error("Insert page: unable to update previous link");
            }
        }
    } else {
//    echo "TOP OF ELSE:<br>";
        // new page is the first page
        // get the existing (first) page (if any)
        if (!$page = get_record_select("lesson_pages", "lessonid = $lesson->id AND prevpageid = 0")) {
//	echo "FIRST PAGE OF THE LESSON<br>";
            // there are no existing pages
            $newpage->lessonid = $lesson->id;
            $newpage->prevpageid = 0; // this is a first page
            $newpage->nextpageid = 0; // this is the only page
            $newpage->timecreated = $timenow;
	    if($form->youtube != NULL){ 
	        $newpage->youtube = get_YoutubeID($form->youtube); 
                update_Preview($newpage);
	    }
            $newpage->qtype = clean_param($form->qtype, PARAM_INT);
            if (isset($form->qoption)) {
                $newpage->qoption = clean_param($form->qoption, PARAM_INT);
            } else {
                $newpage->qoption = 0;
            }
            /// CDC-FLAG /// 6/16/04                
            if (isset($form->layout)) {
                $newpage->layout = clean_param($form->layout, PARAM_INT);
            } else {
                $newpage->layout = 0;
            }
            if (isset($form->display)) {
                $newpage->display = clean_param($form->display, PARAM_INT);
            } else {
                $newpage->display = 0;
            }                
            /// CDC-FLAG ///
            $newpage->title = clean_param($form->title, PARAM_CLEANHTML);
            $newpage->contents = clean_param(trim($form->contents), PARAM_CLEANHTML);
            $newpage->title = addslashes($newpage->title);
               $newpage->contents = addslashes($newpage->contents);
//echo var_dump($newpage);
            $newpageid = insert_record("lesson_pages", $newpage);
            if (!$newpageid) {
                error("Insert page: new first page not inserted");
            }
        } else {
	//////////////////////////////////////////////////////////////
//	echo "NOT THE FIRST PAGE<br>";
            // there are existing pages put this at the start
            $newpage->lessonid = $lesson->id;
            $newpage->prevpageid = 0; // this is a first page
            $newpage->nextpageid = $page->id;
            $newpage->timecreated = $timenow;
	    if($form->youtube != NULL){ 
	        $newpage->youtube = get_YoutubeID($form->youtube); 
                update_Preview($newpage);
	    }
            $newpage->qtype = clean_param($form->qtype, PARAM_INT);
            if (isset($form->qoption)) {
                $newpage->qoption = clean_param($form->qoption, PARAM_INT);
            } else {
                $newpage->qoption = 0;
            }
            /// CDC-FLAG /// 6/16/04
            if (isset($form->layout)) {
                $newpage->layout = clean_param($form->layout, PARAM_INT);
            } else {
                $newpage->layout = 0;
            }
            if (isset($form->display)) {
                $newpage->display = clean_param($form->display, PARAM_INT);
            } else {
                $newpage->display = 0;
            }                
            /// CDC-FLAG ///
            $newpage->title = clean_param($form->title, PARAM_CLEANHTML);
            $newpage->contents = clean_param(trim($form->contents), PARAM_CLEANHTML);
            $newpage->title = addslashes($newpage->title);
               $newpage->contents = addslashes($newpage->contents);
            $newpageid = insert_record("lesson_pages", $newpage);
//echo "<br><br>".var_dump($newpage);
            if (!$newpageid) {
                error("Insert page: first page not inserted");
            }
            // update the linked list
            if (!set_field("lesson_pages", "prevpageid", $newpageid, "id", $newpage->nextpageid)) {
                error("Insert page: unable to update link");
            }
	    /////////////////////////////////////////////////////////////////////////////////////////
        }
    }
    // now add the answers
    /// CDC-FLAG 6/16/04 added new code to handle essays
    if ($form->qtype == LESSON_ESSAY) {
        $newanswer->lessonid = $lesson->id;
        $newanswer->pageid = $newpageid;
        $newanswer->timecreated = $timenow;
        if (isset($form->jumpto[0])) {
            $newanswer->jumpto = clean_param($form->jumpto[0], PARAM_INT);
        }
        if (isset($form->score[0])) {
            $newanswer->score = clean_param($form->score[0], PARAM_INT);
        }
        $newanswerid = insert_record("lesson_answers", $newanswer);
        if (!$newanswerid) {
            error("Insert Page: answer record not inserted");
        }
    } else {
        if ($form->qtype == LESSON_MATCHING) {
            // need to add two to offset correct response and wrong response
            $lesson->maxanswers = $lesson->maxanswers + 2;
        }
        for ($i = 0; $i < $lesson->maxanswers; $i++) {
            if (trim(strip_tags($form->answer[$i]))) { // strip_tags because the HTML editor adds <p><br />...
                $newanswer->lessonid = $lesson->id;
                $newanswer->pageid = $newpageid;
                $newanswer->timecreated = $timenow;
                $newanswer->answer = clean_param(trim($form->answer[$i]), PARAM_CLEANHTML);
                $newanswer->answer = addslashes($newanswer->answer);
                if (isset($form->response[$i])) {
                    $newanswer->response = clean_param(trim($form->response[$i]), PARAM_CLEANHTML);
                    $newanswer->response = addslashes($newanswer->response);
                }
                if (isset($form->jumpto[$i])) {
                    $newanswer->jumpto = clean_param($form->jumpto[$i], PARAM_INT);
                }
                /// CDC-FLAG ///
                if ($lesson->custom) {
                    if (isset($form->score[$i])) {
                        $newanswer->score = clean_param($form->score[$i], PARAM_INT);
                    }
                }
                /// CDC-FLAG ///
                $newanswerid = insert_record("lesson_answers", $newanswer);
                if (!$newanswerid) {
                    error("Insert Page: answer record $i not inserted");
                }
            } else {
                if ($form->qtype == LESSON_MATCHING) {
                    if ($i < 2) {
                        $newanswer->lessonid = $lesson->id;
                        $newanswer->pageid = $newpageid;
                        $newanswer->timecreated = $timenow;
                        $newanswerid = insert_record("lesson_answers", $newanswer);
                        if (!$newanswerid) {
                            error("Insert Page: answer record $i not inserted");
                        }
                    }
                } else {
                    break;
                }
            }
        }
    }
    /// CDC-FLAG ///
    redirect("view.php?id=$cm->id", get_string('insertedpage', 'lesson'));


function get_YoutubeID($url){

    if($url == NULL){
//        echo "<script>alert('IN NULL')</script>";
        return NULL;
    }

    $haystack = $url;
    $needle = '=';
    $trim = "";
    $num = strpos($haystack, $needle);
echo "NUM:".$num;
    $trim = substr($haystack, $num + strlen($needle));

    if(strlen($trim) > 11){
        $trim = substr($trim, 0, 11);
    }   

//    echo "<script>alert('".strlen($trim)."')</script>";

    return $trim;
}

function update_Preview($pageinfo){

//    echo var_dump($pageinfo);
echo $pageinfo->youtube;
    $servername = "localhost";
    $username = "moodleuser";
    $password = "password";
    $dbname = "moodle";

    $ret = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /*$sql = "UPDATE mdl_lesson ".
           "SET preview = '".$pageinfo->youtube."' ".
           "WHERE id = ".$pageinfo->lessonid;*/
    $sql = "UPDATE mdl_lesson ".
           "SET preview = '".$pageinfo->youtube."' ".
	   "WHERE id = ".$pageinfo->lessonid;
  

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn).$sql;
    }

    mysqli_close($conn);
}
?>

