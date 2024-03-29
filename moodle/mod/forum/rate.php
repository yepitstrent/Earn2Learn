<?php // $Id: rate.php,v 1.14.2.2 2006/03/13 12:52:39 moodler Exp $

//  Collect ratings, store them, then return to where we came from


    require_once("../../config.php");
    require_once("lib.php");

    if (isguest()) {
        error("Guests are not allowed to rate posts.", $_SERVER["HTTP_REFERER"]);
    }

    $id = required_param('id', PARAM_INT);  // The course these ratings are part of

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect");
    }

    require_login($course->id);

    $CFG->debug = 0;    /// Temporarily
    $returntoview = false;

    if (!$data = data_submitted("$CFG->wwwroot/mod/forum/discuss.php")) {    // form submitted
        if ($data = data_submitted("$CFG->wwwroot/mod/forum/view.php")) {    // Single forums are special case
            $returntoview = true;
        }
    }

    if ($data) {

        $lastpostid = 0;

        foreach ((array)$data as $postid => $rating) {
            if ($postid == "id") {
                continue;
            }

            $postid = (int)$postid;
            $lastpostid = $postid;

            if ($oldrating = get_record("forum_ratings", "userid", $USER->id, "post", $postid)) {
                if ($rating != $oldrating->rating) {
                    $oldrating->rating = $rating;
                    $oldrating->time = time();
                    if (! update_record("forum_ratings", $oldrating)) {
                        error("Could not update an old rating ($postid = $rating)");
                    }
                }
            } else if ($rating) {
                unset($newrating);
                $newrating->userid = $USER->id;
                $newrating->time = time();
                $newrating->post = $postid;
                $newrating->rating = $rating;

                if (! insert_record("forum_ratings", $newrating)) {
                    error("Could not insert a new rating ($postid = $rating)");
                }
            }
        }
        if ($post = get_record('forum_posts', 'id', $lastpostid)) {    // To find discussion we're in
            if ($returntoview and ($discussion = get_record('forum_discussions', 'id', $post->discussion))) {
                redirect("$CFG->wwwroot/mod/forum/view.php?f=$discussion->forum", get_string("ratingssaved", "forum"));
            } else {
                redirect("$CFG->wwwroot/mod/forum/discuss.php?d=$post->discussion", get_string("ratingssaved", "forum"));
            }
        } else {
            redirect($_SERVER["HTTP_REFERER"], get_string("ratingssaved", "forum"));
        }

    } else {
        error("This page was not accessed correctly");
    }

?>
