<?php // $Id: assignment.class.php,v 1.5.2.15 2006/05/03 08:19:43 moodler Exp $

/**
 * Extend the base assignment class for assignments where you upload a single file
 *
 */
class assignment_online extends assignment_base {

    function assignment_online($cmid=0) {
        parent::assignment_base($cmid);
    }

    function get_id() {
        echo $this->course->id;
        return $this->course->id;
    }

    function view() {
        global $USER, $CFG;
//echo $USER->student[1];
        $submission = $this->get_submission();
        //Guest can not submit nor edit an assignment (bug: 4604)
        if (isguest($USER->id)) {
            $editable = null;
        }
        else {
            $editable = $this->isopen() && (!$submission || $this->assignment->resubmit || !$submission->timemarked);
        }
        $editmode = ($editable && !empty($_GET['edit']));

        if ($editmode) {
            //guest can not edit or submit assignment
            if (isguest($USER->id)) {
                 error(get_string('guestnosubmit', 'assignment'));
            }
            $this->view_header(get_string('editmysubmission', 'assignment'));
        } else {
            $this->view_header();
        }

        //echo $this->is_student($USER);

	if( !( $this->find_in_db($submission) ) && $this->is_student($USER) ){
            //echo "IS NOT IN DB";
    	    $submission = $this->prepare_new_submission($USER->id);
            $this->insert_new_submission($submission);
	} else {
	    //echo "IN DB";
	    //CREATE NEW INFO...
	}

        echo "<script> TASK_ID = ".$this->cm->instance."; show_chart();</script>";
        echo "<div id=\"outer_box\">";
	//LEFT PANEL:
	echo "<div class=\"left\" id=\"e2l_task_box\" >";
	echo     "<div id=\"inner_box\">";
	echo         "<div style=\"float: left;\"><img src=\"".$USER->site."/resources/dashboard/task.svg\" ></div>";
        echo         "<div id=\"e2l_task_text\" style=\"text-align: left;\"><br><br><center>INSTRUCTIONS:</center></div><br><br><br><br>";
	echo         "<div id=\"e2l_task_text\" style=\"text-align: left;\">".$this->e2l_view_intro()."</div>";
	echo         "<div id=\"e2l_task_text\" style=\"text-align: left; padding: 100px 0px 0px 0px;\">";
	//$dollar = $this->
	echo             "<div style=\"float: left;\">Completed Tasks:</div><div id=\"tasks_completed\" style=\"float: right;\">25</div>";
	echo         "</div>";
	echo         "<div id=\"e2l_task_text\" style=\"text-align: left; padding: 50px 0px 0px 0px;\">";
	$dollar = $this->e2l_get_reward();
	echo             "<div style=\"float: left;\">Reward For This Task:</div><div id=\"reward_amoumnt\" style=\"float: right;\">$".$dollar."</div>";
	echo         "</div>";
	echo     "</div>";//inner_box
        echo "</div>";
	
	
        //RIGHT PANEL:
	echo "<div class=\"right\" id=\"e2l_task_box\" >";
	echo     "<div id=\"inner_box\">";
	echo         "<div id=\"e2l_task_text\">".$this->view_dates()."</div>";
	echo         "<div id=\"my_div\">";
	echo         "<center>";
//	echo         "<div><span class=\"chart\" data-percent=\"100\"><span class=\"percent\"></span>%</span></div>";
	echo         "<div><span class=\"chart\" data-percent=\"100\"></span></div>";
	echo         "<div><span id=\"time\">00:00:00</span></div>";
	echo         "<div style=\"padding: 5px;\" onclick=\"start_e2l();\"><img id=\"top_btn\" style=\"height: 12%;\" src=\"".$USER->site."/resources/dashboard/task_start.svg\"></div>";
	echo         "<div style=\"padding: 5px;\" onclick=\"done_btn();\"><img style=\"height: 12%;\" src=\"".$USER->site."/resources/dashboard/task_done.svg\"></div>";
//	echo         "<div style=\"padding: 5px;\"><input type=\"image\" style=\"height: 12%;\" src=\"".$USER->site."/resources/dashboard/task_done.svg\" name=\"saveForm\" class=\"btTxt submit\" id=\"saveForm\" /></div>";
	echo         "</center>";
	echo         "</div>";
	echo     "</div>";//e2l_task_box
	echo "</div>";
	echo "</div>";//outer_box
	

	

/*
        if ($data = data_submitted()) {      // No incoming data?
            if ($editable && $this->update_submission($data)) {
                //TODO fix log actions - needs db upgrade
                $submission = $this->get_submission();
                add_to_log($this->course->id, 'assignment', 'upload', 
                        'view.php?a='.$this->assignment->id, $this->assignment->id, $this->cm->id);
                $this->email_teachers($submission);
                //redirect to get updated submission date and word count
                redirect('view.php?id='.$this->cm->id.'&saved=1');
            } else {
                // TODO: add better error message
                notify(get_string("error")); //submitting not allowed!
            }
        } else if (!empty($_GET['saved'])) {
            notify(get_string('submissionsaved', 'assignment'));
        }

        print_simple_box_start('center', '70%', '', '', 'generalbox', 'online');
        if ($editmode) {
	///////////////////
            $this->view_edit_form($submission);
	///////////////////
        } else {
            if ($submission) {
                echo format_text($submission->data1, $submission->data2);
            } else if (isguest($USER->id)) { //fix for #4604
                echo '<center>'. get_string('guestnosubmit', 'assignment').'</center>';
            } else if ($this->isopen()){    //fix for #4206
                echo '<center>'.get_string('emptysubmission', 'assignment').'</center>';
            }
            if ($editable) {
	    //echo "BUTTON";
                print_single_button('view.php', array('id'=>$this->cm->id,'edit'=>'1'), 
                                     get_string('editmysubmission', 'assignment'));
            }
        }
        print_simple_box_end();

        if ($editmode and $this->usehtmleditor) {
            use_html_editor();   // MUst be at the end of the page
        }

        $this->view_feedback();
*/
//        $this->view_footer();
    }

    function is_student($user){
        if($user->student[1]){
	    //echo "STUDENT";
	    return true;
	} else {
	    //echo "NOT STUDENT";
	    return false;
	}
    }

    function insert_new_submission($sub){
        $servername = "localhost";
        $username = "moodleuser";
        $password = "password";
        $dbname = "moodle";

        $ret = false;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 
//mysql> select count(*) from mdl_assignment_submissions where assignment = 1 and userid = 3;

        $sql = "INSERT INTO mdl_assignment_submissions ".
	       "(assignment, userid, timecreated, timemodified, numfiles, ".
	       "data1, data2, grade, comment, format, teacher, timemarked, mailed) ".
	       "VALUES ('".$sub->assignment."', '".$sub->userid."', '".$sub->timecreated."', ".
	       "'".$sub->timemodified."', '".$sub->numfiles."', ".
	       "'".$sub->data1."', '".$sub->data2."', '".$sub->grade."', '".$sub->comment."', ".
	       "'".$sub->format."', '".$sub->teacher."', ".
	       "'".$sub->timemarked."', '".$sub->mailed."')";


        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);     
    }

    function find_in_db($sub){
        //echo "IN SET".var_dump($sub);
        $servername = "localhost";
        $username = "moodleuser";
        $password = "password";
        $dbname = "moodle";

        $ret = false;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 
//mysql> select count(*) from mdl_assignment_submissions where assignment = 1 and userid = 3;

        $sql = "SELECT COUNT(*) AS count ".
	       "FROM mdl_assignment_submissions ".
	       "WHERE assignment = ".$sub->assignment." ".
	       "AND userid = ".$sub->userid;

        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)) {
//	    echo $row["count"];
            if($row["count"] > 0){
	        $ret = true; 
	    } else {
	        $ret = false;
	    }
        }

        mysqli_close($conn);    

	return $ret;
    }
    /*
     * Display the assignment dates
     */
    function view_dates() {
        global $USER;

        if (!$this->assignment->timeavailable && !$this->assignment->timedue) {
            return;
        }

        $ret = '<div>';
        if ($this->assignment->timeavailable) {
	    $ret = $ret.'<div>';
            $ret = $ret.get_string('availabledate','assignment').':';
            $ret = $ret.userdate($this->assignment->timeavailable);
	    $ret = $ret.'</div><br>';
        }
        if ($this->assignment->timedue) {
	    $ret = $ret.'<div>';
            $ret = $ret.get_string('duedate','assignment').':';
            $ret = $ret.userdate($this->assignment->timedue);
	    $ret = $ret.'</div><br>';
        }
	$ret = $ret.'</div>';
/*
        print_simple_box_start('center', '', '', '', 'generalbox', 'dates');
        echo '<table>';
        if ($this->assignment->timeavailable) {
            echo '<tr><td class="c0">'.get_string('availabledate','assignment').':</td>';
            echo '    <td class="c1">'.userdate($this->assignment->timeavailable).'</td></tr>';
        }
        if ($this->assignment->timedue) {
            echo '<tr><td class="c0">'.get_string('duedate','assignment').':</td>';
            echo '    <td class="c1">'.userdate($this->assignment->timedue).'</td></tr>';
        }
        $submission = $this->get_submission($USER->id);
        if ($submission) {
            echo '<tr><td class="c0">'.get_string('lastedited').':</td>';
            echo '    <td class="c1">'.userdate($submission->timemodified);
            echo ' ('.get_string('numwords', '', count_words(format_text($submission->data1, $submission->data2))).')</td></tr>';
        }
        echo '</table>';
        print_simple_box_end();*/
	return $ret;
    }

    function view_edit_form($submission = NULL) {
        global $CFG;

        $defaulttext = $submission ? $submission->data1 : '';
        $defaultformat = $submission ? $submission->data2 : $this->defaultformat;

        echo '<form name="theform" action="view.php" method="post">';  // do this so URLs look good

        echo '<table cellspacing="0" class="editbox" align="center">';
        echo '<tr><td align="right">';
        helpbutton('reading', get_string('helpreading'), 'moodle', true, true);
        echo '<br />';
        helpbutton('writing', get_string('helpwriting'), 'moodle', true, true);
        echo '<br />';
        if ($this->usehtmleditor) {
            helpbutton('richtext', get_string('helprichtext'), 'moodle', true, true);
        } else {
            emoticonhelpbutton('theform', 'text');
        } 
        echo '<br />';
        echo '</td></tr>';
        echo '<tr><td align="center">';

	//////////////////
        print_textarea($this->usehtmleditor, 20, 60, 630, 400, 'text', $defaulttext);
	//////////////////


        if (!$this->usehtmleditor) {
            echo '<div align="right" class="format">';
            print_string('formattexttype');
            echo ':&nbsp;';
            choose_from_menu(format_text_menu(), 'format', $defaultformat, '');
            helpbutton('textformat', get_string('helpformatting'));
            echo '</div>';
        } else {
            echo '<input type="hidden" name="format" value="'.FORMAT_HTML.'" />';
        }
        echo '</td></tr>';
        echo '<tr><td align="center">';
        echo '<input type="hidden" name="id" value="'.$this->cm->id.'" />';
        echo '<input type="submit" value="'.get_string('savechanges').'" />';
        echo '<input type="reset" value="'.get_string('revert').'" />';
        echo '</td></tr></table>';

        echo '</form>';

    }

    function update_submission($data) {
        global $CFG, $USER;

        $submission = $this->get_submission($USER->id, true);

        $update = NULL;
        $update->id = $submission->id;
        $update->data1  = $data->text;
        $update->format = $data->format;
        $update->timemodified = time();

        return update_record('assignment_submissions', $update);
    }


    /*
     *  Display and process the submissions 
     */ 
    function process_feedback() {                 
                
        global $USER;
                    
        if (!$feedback = data_submitted()) {      // No incoming data?
            return false;
        }       
        
        ///For save and next, we need to know the userid to save, and the userid to go...
        ///We use a new hidden field in the form, and set it to -1. If it's set, we use this
        ///as the userid to store...
        if ((int)$feedback->saveuserid !== -1){
            $feedback->userid = $feedback->saveuserid;
        }
        
        if (!empty($feedback->cancel)) {          // User hit cancel button
            return false;
        }       
        
        $newsubmission = $this->get_submission($feedback->userid, true);  // Get or make one
            
        $newsubmission->grade      = $feedback->grade;
        $newsubmission->comment    = $feedback->comment;
        $newsubmission->format     = $feedback->format;
        $newsubmission->teacher    = $USER->id;
        $newsubmission->mailed     = 0;       // Make sure mail goes out (again, even)
        $newsubmission->timemarked = time();

        unset($newsubmission->data1);  // Don't need to update this.
        unset($newsubmission->data2);  // Don't need to update this.

        if (! update_record('assignment_submissions', $newsubmission)) {
            return false;
        }
        
        add_to_log($this->course->id, 'assignment', 'update grades', 
                   'submissions.php?id='.$this->assignment->id.'&user='.$feedback->userid, $feedback->userid, $this->cm->id);   
        
        return $newsubmission;
                 
    }   

    function print_student_answer($userid, $return=false){
        global $CFG;
//echo "PSA";	
        if (!$submission = $this->get_submission($userid)) {
            return '';
        }
        $output = '<div class="files" id="abc">'.
                  '<img align="middle" src="'.$CFG->pixpath.'/f/html.gif" height="16" width="16" alt="html" />'.
                  link_to_popup_window ('/mod/assignment/type/online/file.php?id='.$this->cm->id.'&amp;userid='.
                  $submission->userid, 'file'.$userid, shorten_text(trim(strip_tags(format_text($submission->data1,$submission->data2))), 15), 450, 580, 
                  get_string('submission', 'assignment'), 'none', true).
                  '</div>';

                  return $output;
    }
    
    function print_user_files($userid, $return=false) {
        global $CFG;
//echo "IN HERE"; 
        if (!$submission = $this->get_submission($userid)) {
            return '';
        }
        
        $output = '<div class="files">'.
                  '<img align="middle" src="'.$CFG->pixpath.'/f/html.gif" height="16" width="16" alt="html" />'.
                  link_to_popup_window ('/mod/assignment/type/online/file.php?id='.$this->cm->id.'&amp;userid='.
                  $submission->userid, 'file'.$userid, shorten_text(trim(strip_tags(format_text($submission->data1,$submission->data2))), 15), 450, 580, 
                  get_string('submission', 'assignment'), 'none', true).
                  '</div>';

        ///Stolen code from file.php
        
        print_simple_box_start('center', '', '', '', 'generalbox', 'wordcount');
        echo '<table>';
        //if ($assignment->timedue) {
        //    echo '<tr><td class="c0">'.get_string('duedate','assignment').':</td>';
        //    echo '    <td class="c1">'.userdate($assignment->timedue).'</td></tr>';
        //}
        echo '<tr>';//<td class="c0">'.get_string('lastedited').':</td>';
        echo '    <td class="c1">';//.userdate($submission->timemodified);
        echo ' ('.get_string('numwords', '', count_words(format_text($submission->data1, $submission->data2))).')</td></tr>';
        echo '</table>';
        print_simple_box_end();
        print_simple_box(format_text($submission->data1, $submission->data2), 'center', '100%');
        
        ///End of stolen code from file.php
        
        if ($return) {
            //return $output;
        }
        //echo $output;
    }

    function preprocess_submission(&$submission) {
//echo "PS IN HERE TOP...";
        if ($this->assignment->var1 && empty($submission->comment)) {  // comment inline
            if ($this->usehtmleditor) {
                // Convert to html, clean & copy student data to teacher
                $submission->comment = format_text($submission->data1, $submission->data2);
                $submission->format  = FORMAT_HTML;
            } else {
                // Copy student data to teacher
                $submission->comment = $submission->data1;
                $submission->format  = $submission->data2;
            }
        }

    }



}

?>


<style>
#e2l_task_box {
    /*border: 2px solid #8AC007;*/
    height: 500px;  
    padding: 10px; 
    border-radius: 25px; 
    
}
#e2l_task_text {
    color: #006699;
    size: 12;
    font-family: 'Roboto Slab', serif;
    font-weight: 800;
}
.left{
    background-color: #CCFFFF; 
    float: left;
    width: 45%;
    overflow: hidden;
    /*padding: 10px;*/
    margin: 0px 5px 0px 90px;
}
.right{
    background-color: #AADEE9; 
    float: right;
    width: 30%;
    overflow: hidden;
    /*padding: 10px;*/
    margin: 0px 90px 0px 5px; 
} 
#inner_box {
    /*border: 2px solid #8AC007;*/
    width: 100%;
    padding: 10px 0px 10px 0px;
    margin-left: auto;
    margin-right: auto;
}
#outer_box {
    /*border: 2px solid #8AC007;*/
    padding: 15px 0px 15px 0px;
    margin: 0 auto;
}
#my_div {
    /*border: 2px solid #8AC007;*/
    margin-left: auto;
    margin-right: auto;
}
</style>
<script>
STATE = 1;
TIME = null; 
COUNTER = TIME;
INTERVAL = null;
TASK_ID = null;

function tester(){
    alert("IN TESTER");
}

function start_e2l(){
    if(STATE == 0){
        STATE = 1;
	clearInterval(INTERVAL);
        jQuery("#top_btn").attr("src", "http://"+window.location.hostname+"/moodle/resources/dashboard/task_start.svg")
    } else {
        //alert(COUNTER);
        STATE = 0;
        var display = document.querySelector('#time');
        startTimer(COUNTER, display);
	jQuery("#top_btn").attr("src", "http://"+window.location.hostname+"/moodle/resources/dashboard/task_stop.svg")
    }
}

function startTimer(duration, display) {
    var timer = duration, hours, minutes, seconds;
    INTERVAL = setInterval(function () {
        
        // extract hours
        hours = Math.floor(timer / (60 * 60));
 
        // extract minutes
        var divisor_for_minutes = timer % (60 * 60);
        minutes = Math.floor(divisor_for_minutes / 60);
 
        // extract the remaining seconds
        var divisor_for_seconds = divisor_for_minutes % 60;
        seconds = Math.ceil(divisor_for_seconds);

        COUNTER = timer;

	var num = 1 - ( COUNTER / TIME );
	num = num * 100;
	if(num > 100){
	    num = 100;
	}
	//alert();
        chart.update(num);

	if (timer-- < 0) {
            //timer = TIME;//FOR NOW...
	    clearInterval(INTERVAL);
	    COUNTER = 0;
	    submit_task();
	    minutes = seconds = hours = 0;
	    //I WANT TO SUBMIT THE ASSIGNMENT AT THE END OF THE CLOCK.
        }

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        hours   = hours   < 10 ? "0" + hours   : hours;

        display.textContent = hours + ":" + minutes + ":" + seconds;
	

    }, 1000);
}

function done_btn(){
    clearInterval(INTERVAL);
    submit_task();
}

function submit_task() { 

    $.ajax({ url: 'db.php',
         data: {action: 'test', time: COUNTER},
         type: 'post',
         success: function(output) {
                      //alert("OUTPUT:"+COUNTER);
                      window.location.assign("http://"+window.location.hostname+"/moodle/mod/assignment/completed.php")
                  } 
    });
}

document.addEventListener('DOMContentLoaded', function() {
   //alert("ON LOAD"+ TASK_ID);
   $.ajax({ url: 'db.php',
         data: {action: 'get_time', task_id: TASK_ID },
         type: 'post',
         success: function(output) {
                      //alert("RETURNED:"+parseInt(output));
		      var num = parseInt(output);
		      if(num == null) { 
		          num = 10; 
		      }
                      COUNTER = 60 * num;

		      TIME = COUNTER;
		      //alert(COUNTER);
                  } 
    });
}, false);

/*window.onload = function(e){ 
    //alert("ON LOAD"); 
    $.ajax({ url: 'db.php',
         data: {action: 'get_time', task_id: <?php echo "4"; ?> },
         type: 'post',
         success: function(output) {
                      //alert("RETURNED:"+parseInt(output));
                      COUNTER = 60 * parseInt(output);
		      //alert(COUNTER);
                  } 
    });
}*/

function show_chart(){
document.addEventListener('DOMContentLoaded', function() {
    var chart = window.chart = new EasyPieChart(document.querySelector('span'), {
        easing: 'easeOutElastic',
	delay: 3000,
	barColor: 'red',
	trackColor: '#7EADDA',
	scaleColor: false,
	lineWidth: 20,
	size: 200,
	trackWidth: 16,
	lineCap: 'butt',
	onStep: function(from, to, percent) {
		this.el.children[0].innerHTML = Math.round(percent);
	}
    });

    document.querySelector('.js_update').addEventListener('click', function(e) {
            var num = Math.random()*200-100;
	    if(num < 0){
	        num = num * -1;
	    }
	    chart.update(num);
    });

});
}
</script>

