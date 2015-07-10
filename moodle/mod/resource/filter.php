<?php // $Id: filter.php,v 1.12.2.3 2006/01/11 15:21:02 stronk7 Exp $
    //This function provides automatic linking to
    //resources when its name (title) is found inside every Moodle text
    //Williams, Stronk7, Martin D

    function resource_filter($courseid, $text) {

        global $CFG;

        static $nothingtodo;
        static $resourcelist;

        if (!empty($nothingtodo)) {   // We've been here in this page already
            return $text;
        }

        // if we don't have a courseid, we can't run the query, so
        if (empty($courseid)) {
            return $text;
        }
        
    /// Create a list of all the resources to search for.  It may be cached already.

        if (empty($resourcelist)) {

        /// The resources are sorted from long to short so longer ones can be linked first.

            if (!$resources = get_records('resource', 'course', $courseid, 'CHAR_LENGTH(name) DESC', 'id,name')) {
                $nothingtodo = true;
                return $text;
            }

            $resourcelist = array();

            foreach ($resources as $resource) {
                $currentname = trim($resource->name);
                $strippedname = strip_tags($currentname);
                /// Avoid empty or unlinkable resource names
                if (!empty($strippedname)) {
                    $resourcelist[] = new filterobject($currentname,
                            '<a class="resource autolink" title="'.$strippedname.'" href="'.
                             $CFG->wwwroot.'/mod/resource/view.php?r='.$resource->id.'" target="'.$CFG->framename.'">', 
                             '</a>', false, true);
                }
            }

        }
        return  filter_phrases($text, $resourcelist);  // Look for all these links in the text
    }

?>
