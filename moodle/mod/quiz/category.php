<?php // $Id: category.php,v 1.37.2.1 2005/12/06 21:01:32 patrickslee Exp $
      // Allows a teacher to create, edit and delete categories

    require_once("../../config.php");
    require_once("locallib.php");

    $id = required_param('id');   // course id

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID is incorrect");
    }

    if (isset($_REQUEST['backtoquiz'])) {
        redirect("edit.php");
    }

    require_login($course->id, false);

    if (!isteacheredit($course->id)) {
        error("Only teachers authorized to edit the course '{$course->fullname}' can use this page!");
    }

    /// Header:
    print_header_simple(get_string('editcategories', 'quiz'), '',
                 "<a href=\"index.php?id=$course->id\">".get_string('modulenameplural', 'quiz').'</a>'.
                 '-> <a href="edit.php">'.get_string('editquestions', 'quiz').'</a>'.
                 ' -> '.get_string('editcategories', 'quiz'));

    if (isset($SESSION->modform->instance) and $quiz = get_record('quiz', 'id', $SESSION->modform->instance)) {
        include('tabs.php');
    }

    /// CHECK FOR AND ACT UPON VARIABLES SUBMITTED VIA GET OR POST
    $qcobject = new quiz_category_object();
    $qcobject->set_course($course);

    // Execute commands, but only if sesskey is o.k.
    if (isset($_REQUEST['sesskey']) and confirm_sesskey()) {
        if (isset($_REQUEST['delete']) and !isset($_REQUEST['cancel'])) {
            if (isset($_REQUEST['confirm'])) {
                /// 'confirm' is the category to move existing questions to
                $qcobject->delete_category($_REQUEST['delete'], $_REQUEST['confirm']);
            } else {
                $qcobject->delete_category($_REQUEST['delete']);
            }
        } else if (isset($_REQUEST['moveup'])) {
            $qcobject->move_category_up_down('up', $_REQUEST['moveup']);
        } else if (isset($_REQUEST['movedown'])) {
            $qcobject->move_category_up_down('down', $_REQUEST['movedown']);
        } else if (isset($_REQUEST['hide'])) {
            $qcobject->publish_category(false, $_REQUEST['hide']);
        } else if (isset($_REQUEST['move']) and isset($_REQUEST['moveto'])) {
            $qcobject->move_category($_REQUEST['move'], $_REQUEST['moveto']);
        } else if (isset($_REQUEST['publish'])) {
            $qcobject->publish_category(true, $_REQUEST['publish']);
        } else if (isset($_REQUEST['addcategory'])) {
            $newparent   = required_param('newparent');
            $newcategory = required_param('newcategory');
            $newinfo     = required_param('newinfo');
            $newpublish  = required_param('newpublish');
            $qcobject->add_category($newparent, $newcategory, $newinfo, $newpublish, $course->id);
        } else if (isset($_REQUEST['edit'])) {
            $qcobject->edit_single_category($_REQUEST['edit']);
        } else if (isset($_REQUEST['updateid'])) {
            $updateparent  = required_param('updateparent');
            $updatename    = required_param('updatename');
            $updateinfo    = required_param('updateinfo');
            $updatepublish = required_param('updatepublish');
            $qcobject->update_category($_REQUEST['updateid'], $updateparent, $updatename, $updateinfo, $updatepublish, $course->id);
        }
    }

    /// DISPLAY THE NORMAL USER INTERFACE
    $qcobject->display_user_interface();

    print_footer($course);



/**
* Class quiz_category_object
*
* Used for handling changes to the quiz categories
*
*/
class quiz_category_object {

    var $str;
    var $pixpath;
    var $edittable;
    var $newtable;
    var $tab;
    var $tabsize = 3;
    var $categories;
    var $categorystrings;
    var $defaultcategory;
    var $course;

/**
* Constructor
*
* Gets necessary strings and sets relevant path information
*
*/
    function quiz_category_object() {
        global $CFG;

        $this->tab = str_repeat('&nbsp;', $this->tabsize);

        $this->str->course         = get_string('course');
        $this->str->category       = get_string('category', 'quiz');
        $this->str->categoryinfo   = get_string('categoryinfo', 'quiz');
        $this->str->questions      = get_string('questions', 'quiz');
        $this->str->add            = get_string('add');
        $this->str->movecategoryto = get_string('movecategoryto');
        $this->str->delete         = get_string('delete');
        $this->str->moveup         = get_string('moveup');
        $this->str->movedown       = get_string('movedown');
        $this->str->edit           = get_string('editthiscategory');
        $this->str->hide           = get_string('hide');
        $this->str->publish        = get_string('publish', 'quiz');
        $this->str->order          = get_string('order');
        $this->str->parent         = get_string('parent', 'quiz');
        $this->str->add            = get_string('add');
        $this->str->action         = get_string('action');
        $this->str->top            = get_string('top', 'quiz');
        $this->str->addcategory    = get_string('addcategory', 'quiz');
        $this->str->editcategory   = get_string('editcategory', 'quiz');
        $this->str->cancel         = get_string('cancel');
        $this->str->editcategories = get_string('editcategories', 'quiz');
        $this->pixpath = $CFG->pixpath;

    }

/**
* Sets the course for this object
*
* @param object course
*/
    function set_course($course) {
        $this->course = $course;
    }

/**
* Displays the user interface
*
* @param object modform
*/
    function display_user_interface() {
        $this->initialize();

        /// Interface for adding a new category:
        print_heading_with_help($this->str->addcategory, 'categories_edit', 'quiz');
        $this->output_new_table();
        echo '<br />';

        /// Interface for editing existing categories
        print_heading_with_help($this->str->editcategories, 'categories', 'quiz');
        $this->output_edit_table();
        echo '<br />';

        print_continue('edit.php');

    }


/**
* Initializes this classes general category-related variables
*
*/
    function initialize() {

        /// Get the existing categories
        if (!$this->defaultcategory = quiz_get_default_category($this->course->id)) {
            error("Error: Could not find or make a category!");
        }

        $this->categories = $this->get_quiz_categories(null, "parent, sortorder, name ASC");

        $this->categories = $this->arrange_categories($this->categories);

        // create the array of id=>full_name strings
        $this->categorystrings = $this->expanded_category_strings($this->categories);
    }



/**
* Outputs a table to allow entry of a new category
*
*/
    function output_new_table() {
        global $USER;
        $publishoptions[0] = get_string("no");
        $publishoptions[1] = get_string("yes");

        $this->newtable->head  = array ($this->str->parent, $this->str->category, $this->str->categoryinfo, $this->str->publish, $this->str->action);
        $this->newtable->width = 200;
        $this->newtable->data[] = array();
        $this->newtable->tablealign = 'center';

        /// Each section below adds a data cell to the table row


        $viableparents[0] = $this->str->top;
        $viableparents = $viableparents + $this->categorystrings;
        $this->newtable->align['parent'] =  "left";
        $this->newtable->wrap['parent'] = "nowrap";
        $row['parent'] = choose_from_menu ($viableparents, "newparent", $this->str->top, "", "", "", true);

        $this->newtable->align['category'] =  "left";
        $this->newtable->wrap['category'] = "nowrap";
        $row['category'] = '<input type="text" name="newcategory" value="" size="15" />';

        $this->newtable->align['info'] =  "left";
        $this->newtable->wrap['info'] = "nowrap";
        $row['info'] = '<input type="text" name="newinfo" value="" size="50" />';

        $this->newtable->align['publish'] =  "left";
        $this->newtable->wrap['publish'] = "nowrap";
        $row['publish'] = choose_from_menu ($publishoptions, "newpublish", "", "", "", "", true);

        $this->newtable->align['action'] =  "left";
        $this->newtable->wrap['action'] = "nowrap";
        $row['action'] = '<input type="submit" value="' . $this->str->add . '" />';


        $this->newtable->data[] = $row;

        // wrap the table in a form and output it
        echo '<form action="category.php" method="post">';
        echo "<input type=\"hidden\" name=\"sesskey\" value=\"$USER->sesskey\" />";
        echo '<input type="hidden" name="id" value="'. $this->course->id . '" />';
        echo '<input type="hidden" name="addcategory" value="true" />';
        print_table($this->newtable);
        echo '</form>';
    }

/**
* Outputs a table to allow editing/rearranging of existing categories
*
* $this->initialize() must have already been called
*
* @param object course
*/
    function output_edit_table() {
        $this->edittable->head  = array ($this->str->category, $this->str->categoryinfo, $this->str->questions, $this->str->publish,
                                    $this->str->delete, $this->str->order, $this->str->movecategoryto);
        $this->edittable->width = 200;
        $this->edittable->tablealign = 'center';

        $courses = $this->course->shortname;

        $this->build_edit_table_body($this->categories);
        print_table($this->edittable);
    }
/**
* Recursively builds up the edit-categories table body
*
* @param array categories contains category objects in  a tree representation
* @param mixed courses String with shortname of course | array containing courseid=>shortname
* @param int depth controls the indenting
*/
    function build_edit_table_body($categories, $depth = 0) {
        $countcats = count($categories);
        $count = 0;
        $first = true;
        $last = false;

        foreach ($categories as $category) {
            $count++;
            if ($count == $countcats) {
                $last = true;
            }
            $up = $first ? false : true;
            $down = $last ? false : true;
            $first = false;
            $this->quiz_edit_category_row($category, $depth, $up, $down);
            if (isset($category->children)) {
                $this->build_edit_table_body($category->children, $depth + 1);
            }
        }
    }

/**
* gets all the courseids for the given categories
*
* @param array categories contains category objects in  a tree representation
* @return array courseids flat array in form categoryid=>courseid
*/
    function get_course_ids($categories) {
        $courseids = array();
        foreach ($categories as $key=>$cat) {
            $courseids[$key] = $cat->course;
            if (!empty($cat->children)) {
                $courseids = array_merge($courseids, $this->get_course_ids($cat->children));
            }
        }
        return $courseids;
    }

/**
* Constructs each row of the edit-categories table
*
* @param object category
* @param int depth controls the indenting
* @param string shortname short name of the course
* @param boolean up can it be moved up?
* @param boolean down can it be moved down?
*/
    function quiz_edit_category_row($category, $depth, $up = false, $down = false) {
        global $USER;
        $fill = str_repeat($this->tab, $depth);

        $linkcss = $category->publish ? ' class="published"' : ' class="unpublished"';

        /// Each section below adds a data cell to this table row

        $this->edittable->align["$category->id.name"] =  "left";
        $this->edittable->wrap["$category->id.name"] = "nowrap";
        $row["$category->id.name"] = '<a ' . $linkcss . 'title="' . $this->str->edit. '" href="category.php?id=' . $this->course->id .
            '&amp;edit=' . $category->id . '&amp;sesskey='.$USER->sesskey.'"><img src="' . $this->pixpath . '/t/edit.gif" height="11" width="11" border="0"
            alt="' .$this->str->edit. '" /> ' . $fill . $category->name . '</a>';

        $this->edittable->align["$category->id.info"] =  "left";
        $this->edittable->wrap["$category->id.info"] = "nowrap";
        $row["$category->id.info"] = '<a ' . $linkcss . 'title="' . $this->str->edit .'" href="category.php?id=' . $this->course->id .
            '&amp;edit=' . $category->id . '&amp;sesskey='.$USER->sesskey.'">' . $category->info . '</a>';

        $this->edittable->align["$category->id.qcount"] = "center";
        $row["$category->id.qcount"] = $category->questioncount;

        $this->edittable->align["$category->id.publish"] =  "center";
        $this->edittable->wrap["$category->id.publish"] = "nowrap";
        if (!empty($category->publish)) {
              $row["$category->id.publish"] = '<a title="' . $this->str->hide . '" href="category.php?id=' . $this->course->id . '&amp;hide=' . $category->id .
              '&amp;sesskey='.$USER->sesskey.'"><img src="' . $this->pixpath . '/t/hide.gif" height="11" width="11" border="0" alt="' .$this->str->hide. '" /></a> ';
        } else {
            $row["$category->id.publish"] = '<a title="' . $this->str->publish . '" href="category.php?id=' . $this->course->id . '&amp;publish=' . $category->id .
                 '&amp;sesskey='.$USER->sesskey.'"><img src="' . $this->pixpath . '/t/show.gif" height="11" width="11" border="0" alt="' .$this->str->publish. '" /></a> ';
        }

        if ($category->id != $this->defaultcategory) {
            $this->edittable->align["$category->id.delete"] =  "center";
            $this->edittable->wrap["$category->id.delete"] = "nowrap";
            $row["$category->id.delete"] =  '<a title="' . $this->str->delete . '" href="category.php?id=' . $this->course->id .
                    '&amp;delete=' . $category->id . '&amp;sesskey='.$USER->sesskey.'"><img src="' . $this->pixpath . '/t/delete.gif" height="11" width="11" border="0" alt="' .$this->str->delete. '" /></a> ';
        } else {
            $row["$category->id.delete"] = '';
        }

        $this->edittable->align["$category->id.order"] =  "left";
        $this->edittable->wrap["$category->id.order"] = "nowrap";
        $icons = '';
        if ($up) {
            $icons .= '<a title="' . $this->str->moveup .'" href="category.php?id=' . $this->course->id . '&amp;moveup=' . $category->id . '&amp;sesskey='.$USER->sesskey.'">
                <img src="' . $this->pixpath . '/t/up.gif" height="11" width="11" border="0" alt="' . $this->str->moveup. '" /></a> ';
        }
        if ($down) {
            $icons .= '<a title="' . $this->str->movedown .'" href="category.php?id=' . $this->course->id . '&amp;movedown=' . $category->id . '&amp;sesskey='.$USER->sesskey.'">
                 <img src="' . $this->pixpath . '/t/down.gif" height="11" width="11" border="0" alt="' .$this->str->movedown. '" /></a> ';
        }
        $row["$category->id.order"]= $icons;

        $this->edittable->align["$category->id.moveto"] =  "left";
        $this->edittable->wrap["$category->id.moveto"] = "nowrap";
        if ($category->id != $this->defaultcategory) {
            $viableparents = $this->categorystrings;
            $this->set_viable_parents($viableparents, $category);
            $viableparents = array(0=>$this->str->top) + $viableparents;

            $row["$category->id.moveto"] = popup_form ("category.php?id={$this->course->id}&amp;move={$category->id}&amp;sesskey=$USER->sesskey&amp;moveto=",
               $viableparents, "moveform{$category->id}", "$category->parent", "", "", "", true);
        } else {
            $row["$category->id.moveto"]='---';
        }


        $this->edittable->data[$category->id] = $row;
    }


    function edit_single_category($categoryid) {
    /// Interface for adding a new category
        global $USER;
        $this->initialize();

        /// Interface for editing existing categories
        if ($category = get_record("quiz_categories", "id", $categoryid)) {
            echo '<h2 align="center">';
            echo $this->str->edit;
            helpbutton("categories_edit", $this->str->editcategory, "quiz");
            echo '</h2>';
            echo '<table width="100%"><tr><td>';
            $this->output_edit_single_table($category);
            echo '</td></tr></table>';
            echo '<p><div align="center"><form action="category.php" method="get">
                <input type="hidden" name="sesskey" value="'.$USER->sesskey.'" />
                <input type="hidden" name="id" value="' . $this->course->id . '" />
                <input type="submit" value="' . $this->str->cancel . '" /></form></div></p>';
            print_footer($this->course);
            exit;
        } else {
            error("Category $categoryid not found", "category.php?id={$this->course->id}");
        }
    }


/**
* Outputs a table to allow editing of an existing category
*
* @param object category
*/
    function output_edit_single_table($category) {
        global $USER;
        $publishoptions[0] = get_string("no");
        $publishoptions[1] = get_string("yes");
        $strupdate = get_string('update');

        unset ($edittable);

        $edittable->head  = array ($this->str->parent, $this->str->category, $this->str->categoryinfo, $this->str->publish, $this->str->action);
        $edittable->width = 200;
        $edittable->data[] = array();
        $edittable->tablealign = 'center';

        /// Each section below adds a data cell to the table row

        $viableparents = $this->categorystrings;
        $this->set_viable_parents($viableparents, $category);
        $viableparents = array(0=>$this->str->top) + $viableparents;
        $edittable->align['parent'] =  "left";
        $edittable->wrap['parent'] = "nowrap";
        $row['parent'] = choose_from_menu ($viableparents, "updateparent", "{$category->parent}", "", "", "", true);

        $edittable->align['category'] =  "left";
        $edittable->wrap['category'] = "nowrap";
        $row['category'] = '<input type="text" name="updatename" value="' . $category->name . '" size="15" />';

        $edittable->align['info'] =  "left";
        $edittable->wrap['info'] = "nowrap";
        $row['info'] = '<input type="text" name="updateinfo" value="' . $category->info . '" size="50" />';

        $edittable->align['publish'] =  "left";
        $edittable->wrap['publish'] = "nowrap";
        $selected = (boolean)$category->publish ? 1 : 0;
        $row['publish'] = choose_from_menu ($publishoptions, "updatepublish", $selected, "", "", "", true);

        $edittable->align['action'] =  "left";
        $edittable->wrap['action'] = "nowrap";
        $row['action'] = '<input type="submit" value="' . $strupdate . '" />';

        $edittable->data[] = $row;

        // wrap the table in a form and output it
        echo '<p><form action="category.php" method="post">';
        echo "<input type=\"hidden\" name=\"sesskey\" value=\"$USER->sesskey\" />";
        echo '<input type="hidden" name="id" value="'. $this->course->id . '" />';
        echo '<input type="hidden" name="updateid" value="' . $category->id . '" />';
        print_table($edittable);
        echo '</form></p>';
    }


/**
* Creates an array of "full-path" category strings
* Structure:
*    key => string
*    where key is the category id, and string contains the name of all ancestors as well as the particular category name
*   E.g. '123'=>'Language / English / Grammar / Modal Verbs"
*
* @param array $categories an array containing categories arranged in a tree structure
*/
    function expanded_category_strings($categories, $parent=null) {
        $prefix = is_null($parent) ? '' : "$parent / ";
        $categorystrings = array();
        foreach ($categories as $key => $category) {
            $expandedname = "$prefix$category->name";
            $categorystrings[$key] = $expandedname;
            if (isset($category->children)) {
                $categorystrings = $categorystrings + $this->expanded_category_strings($category->children, $expandedname);
            }
        }
        return $categorystrings;
    }


/**
* Arranges the categories into a hierarchical tree
*
* If a category has children, it's "children" property holds an array of children
* The questioncount for each category is also calculated
*
* @param    array records a flat list of the categories
* @return   array categorytree a hierarchical list of the categories
*/
    function arrange_categories($records) {
    //todo: get the question count for all records with one sql statement: select category, count(*) from quiz_questions group by category
        $levels = array();

        // build a levels array, which places each record according to it's depth from the top level
        $parents = array(0);
        while (!empty($parents)) {
            $children = array();
            foreach ($records as $record) {
                if (in_array($record->parent, $parents)) {
                    $children[] = $record->id;
                }
            }
            if (!empty($children)) {
                $levels[] = $children;
            }
            $parents = $children;
        }
        // if there is no hierarchy (e.g., if all records have parent == 0), set level[0] to these keys
        if (empty($levels)) {
            $levels[0] = array_keys($records);
        }

        // build a hierarchical array that depicts the parent-child relationships of the categories
        $categorytree = array();
        for ($index = count($levels) - 1; $index >= 0; $index--) {
            foreach($levels[$index] as $key) {
                $parentkey = $records[$key]->parent;
                if (!($records[$key]->questioncount = count_records('quiz_questions', 'category', $records[$key]->id, 'hidden', 0, 'parent', '0'))) {
                    $records[$key]->questioncount = 0;
                }
                if ($parentkey == 0) {
                    $categorytree[$key] = $records[$key];
                } else {
                    $records[$parentkey]->children[$key] = $records[$key];
                }
            }
        }
        return $categorytree;
    }


/**
* Sets the viable parents
*
*  Viable parents are any except for the category itself, or any of it's descendants
*  The parentstrings parameter is passed by reference and changed by this function.
*
* @param    array parentstrings a list of parentstrings
* @param   object category
*/
    function set_viable_parents(&$parentstrings, $category) {

        unset($parentstrings[$category->id]);
        if (isset($category->children)) {
            foreach ($category->children as $child) {
                $this->set_viable_parents($parentstrings, $child);
            }
        }
    }

/**
* Gets quiz categories
*
* @param    int parent - if given, restrict records to those with this parent id.
* @param    string sort - [[sortfield [,sortfield]] {ASC|DESC}]
* @return   array categories
*/
    function get_quiz_categories($parent=null, $sort="sortorder ASC") {

        if (is_null($parent)) {
            $categories = get_records('quiz_categories', 'course', "{$this->course->id}", $sort);
        } else {
            $select = "parent = '$parent' AND course = '{$this->course->id}'";
            $categories = get_records_select('quiz_categories', $select, $sort);
        }
        return $categories;
    }


/**
* Deletes an existing quiz category
*
* @param    int deletecat  id of category to delete
* @param    int destcategoryid id of category which will inherit the orphans of deletecat
*/
    function delete_category($deletecat, $destcategoryid = null) {
        global $USER;

        if (!$category = get_record("quiz_categories", "id", $deletecat)) {  // security
            error("No such category $deletecat!", "category.php?id={$this->course->id}");
        }

        if (!is_null($destcategoryid)) { // Need to move some questions before deleting the category
            if (!$category2 = get_record("quiz_categories", "id", $destcategoryid)) {  // security
                error("No such category $destcategoryid!", "category.php?id={$this->course->id}");
            }
            if (! quiz_move_questions($category->id, $category2->id)) {
                error("Error while moving questions from category '$category->name' to '$category2->name'", "category.php?id={$this->course->id}");
            }

        } else {
            // todo: delete any hidden questions that are not actually in use any more
            if ($count = count_records("quiz_questions", "category", $category->id)) {
                $vars->name = $category->name;
                $vars->count = $count;
                print_simple_box(get_string("categorymove", "quiz", $vars), "center");
                $this->initialize();
                $categorystrings = $this->categorystrings;
                unset ($categorystrings[$category->id]);
                echo "<p><div align=\"center\"><form action=\"category.php\" method=\"get\">";
                echo "<input type=\"hidden\" name=\"sesskey\" value=\"$USER->sesskey\" />";
                echo "<input type=\"hidden\" name=\"id\" value=\"{$this->course->id}\" />";
                echo "<input type=\"hidden\" name=\"delete\" value=\"$category->id\" />";
                choose_from_menu($categorystrings, "confirm", "", "");
                echo "<input type=\"submit\" value=\"". get_string("categorymoveto", "quiz") . "\" />";
                echo "<input type=\"submit\" name=\"cancel\" value=\"{$this->str->cancel}\" />";
                echo "</form></div></p>";
                print_footer($this->course);
                exit;
            }
        }
        delete_records("quiz_categories", "id", $category->id);

        /// Send the children categories to live with their grandparent
        if ($childcats = get_records("quiz_categories", "parent", $category->id)) {
            foreach ($childcats as $childcat) {
                if (! set_field("quiz_categories", "parent", $category->parent, "id", $childcat->id)) {
                    error("Could not update a child category!", "category.php?id={$this->course->id}");
                }
            }
        }

        /// Finally delete the category itself
        if (delete_records("quiz_categories", "id", $category->id)) {
            notify(get_string("categorydeleted", "quiz", $category->name), 'green');
        }
    }

/**
* Moves a category up or down in the display order
*
* @param    string direction  up|down
* @param    int categoryid id of category to move
*/
    function move_category_up_down ($direction, $categoryid) {
    /// Move a category up or down
        $swapcategory = NULL;
        $movecategory = NULL;

        if ($direction == 'up') {
            if ($movecategory = get_record("quiz_categories", "id", $categoryid)) {
                $categories = $this->get_quiz_categories("$movecategory->parent", 'parent, sortorder, name');

                foreach ($categories as $category) {
                    if ($category->id == $movecategory->id) {
                        break;
                    }
                    $swapcategory = $category;
                }
            }
        }
        if ($direction == 'down') {
            if ($movecategory = get_record("quiz_categories", "id", $categoryid)) {
                $categories = $this->get_quiz_categories("$movecategory->parent", 'parent, sortorder, name');
                $choosenext = false;
                foreach ($categories as $category) {
                    if ($choosenext) {
                        $swapcategory = $category;
                        break;
                    }
                    if ($category->id == $movecategory->id) {
                        $choosenext = true;
                    }
                }
            }
        }
        if ($swapcategory and $movecategory) {        // Renumber everything for robustness
            $count=0;
            foreach ($categories as $category) {
                $count++;
                if ($category->id == $swapcategory->id) {
                    $category = $movecategory;
                } else if ($category->id == $movecategory->id) {
                    $category = $swapcategory;
                }
                if (! set_field("quiz_categories", "sortorder", $count, "id", $category->id)) {
                    notify("Could not update that category!");
                }
            }
        }
    }

/**
* Changes the parent of a category
*
* @param    int categoryid
* @param    int parentid
*/
    function move_category($categoryid, $parentid) {
    /// Move a category to a new parent

        if ($tempcat = get_record("quiz_categories", "id", $categoryid)) {
            if ($tempcat->parent != $parentid) {
                if (! set_field("quiz_categories", "parent", $parentid, "id", $tempcat->id)) {
                    notify("Could not update that category!");
                }
            }
        }
    }

/**
* Changes the published status of a category
*
* @param    boolean publish
* @param    int categoryid
*/
    function publish_category($publish, $categoryid) {
    /// Hide or publish a category

        $publish = ($publish == false) ? 0 : 1;
        $tempcat = get_record("quiz_categories", "id", $categoryid);
        if ($tempcat) {
            if (! set_field("quiz_categories", "publish", $publish, "id", $tempcat->id)) {
                notify("Could not update that category!");
            }
        }
    }

/**
* Creates a new category with given params
*
* @param int $newparent       id of the parent category
* @param string $newcategory  the name for the new category
* @param string $newinfo      the info field for the new category
* @param int $newpublish      whether to publish the category
* @param int $newcourse       the id of the associated course
*/
    function add_category($newparent, $newcategory, $newinfo, $newpublish, $newcourse) {

        if ($newparent) {
            // first check that the parent category is in the correct course
            if(!(get_field('quiz_categories', 'course', 'id', $newparent) == $newcourse)) {
                return false;
            }
        }

        $cat = NULL;
        $cat->parent = $newparent;
        $cat->name = $newcategory;
        $cat->info = $newinfo;
        $cat->publish = $newpublish;
        $cat->course = $newcourse;
        $cat->sortorder = 999;
        $cat->stamp = make_unique_id_code();
        if (!insert_record("quiz_categories", $cat)) {
            error("Could not insert the new quiz category '$newcategory'", "category.php?id={$newcourse}");
        } else {
            notify(get_string("categoryadded", "quiz", $newcategory), 'green');
        }

    }

/**
* Updates an existing category with given params
*
* @param    int updateid
* @param    int updateparent
* @param    string updatename
* @param    string updateinfo
* @param    int updatepublish
* @param    int courseid the id of the associated course
*/
    function update_category($updateid, $updateparent, $updatename, $updateinfo, $updatepublish, $courseid) {

        $cat = NULL;
        $cat->id = $updateid;
        $cat->parent = $updateparent;
        $cat->name = $updatename;
        $cat->info = $updateinfo;
        $cat->publish = $updatepublish;
        if (!update_record("quiz_categories", $cat)) {
            error("Could not update the category '$updatename'", "category.php?id={$courseid}");
        } else {
            notify(get_string("categoryupdated", 'quiz'), 'green');
        }
    }

}

?>
