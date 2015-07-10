<?php // $Id: datasetitems.php,v 1.7.4.1 2005/06/11 13:16:57 mindforge Exp $
// Allows a teacher to create, edit and delete datasets

// Set up strings
    $strdatasetnumber = get_string("datasetnumber", "quiz");
    $strnumberinfo = get_string("categoryinfo", "quiz");
    $strquestions = get_string("questions", "quiz");
    $strpublish = get_string("publish", "quiz");
    $strdelete = get_string("remove", "quiz");
    $straction = get_string("action");
    $stradd = get_string("add");
    $strcancel = get_string("cancel");
    $strsavechanges = get_string("savechanges");
    $strbacktoquiz = get_string("backtoquiz", "quiz");

    $streditingquiz = get_string("editingquiz", "quiz");
    $streditdatasets = get_string("editdatasets", "quiz");
    $strreuseifpossible = get_string('reuseifpossible', 'quiz');
    $strforceregeneration = get_string('forceregeneration', 'quiz');

    if (empty($question->id)) {
        $datasetdefs = $this->get_dataset_definitions(
         $SESSION->datasetdependent->definitionform);
    } else {
        if (empty($question->options)) {
            $this->get_question_options($question);
        }
        $datasetdefs = $this->get_dataset_definitions($form);
    }

    // Handle generator options...
    $olddatasetdefs = $datasetdefs;
    $datasetdefs = $this->update_dataset_options($olddatasetdefs, $form);
    $maxnumber = -1;
    $datasets = empty($form->dataset) ? $form->definition : $form->dataset;
    foreach ($datasetdefs as $defid => $datasetdef) {
        if (isset($datasetdef->id)
         && $datasetdef->options != $olddatasetdefs[$defid]->options) {
            // Save the new value for options
            update_record('quiz_dataset_definitions', $datasetdef);
        }

        // Get maxnumber
        if ($maxnumber == -1 || $datasetdef->itemcount < $maxnumber) {
            $maxnumber = $datasetdef->itemcount;
        }
    }

// Handle adding and removing of dataset items
    // This twisted condition should effectively stop resubmits caused by reloads
    if (isset($form->addbutton) && $maxnumber + 1 == $form->numbertoadd) {
        $addeditem->number = $form->numbertoadd;
        foreach ($form->definition as $key => $defid) {
            $addeditem->definition = $datasetdefs[$defid]->id;
            $addeditem->value = $form->value[$key];
            if ($form->itemid[$key]) {
                // Reuse an previously used record
                $addeditem->id = $form->itemid[$key];
                if (!update_record('quiz_dataset_items', $addeditem)) {
                    error("Error: Unable to update dataset item");
                }
            } else {
                unset($addeditem->id);
                if (!insert_record('quiz_dataset_items', $addeditem)) {
                    error("Error: Unable to insert dataset item");
                }
            }

            foreach ($datasetdefs as $key => $newdef) {
                if (isset($newdef->id) && $newdef->itemcount <= $maxnumber) {
                    $newdef->itemcount = $maxnumber+1;
                    // Save the new value for options
                    update_record('quiz_dataset_definitions', $newdef);
                }
            }
        }
        // else Success:
        $maxnumber = $addeditem->number;

    } else if (isset($form->deletebutton)
               && $maxnumber == $form->numbertodelete)  {
        // Simply decrease itemcount where == $maxnumber
        foreach ($datasetdefs as $datasetdef) {
            if ($datasetdef->itemcount == $maxnumber) {
                $datasetdef->itemcount--;
                if (!update_record('quiz_dataset_definitions',
                                   $datasetdef)) {
                     error("Error: Unable to update itemcount");
                }
            }
        }
        --$maxnumber;
    }

    make_upload_directory("$course->id");  // Just in case
    $grosscoursefiles = get_directory_list("$CFG->dataroot/$course->id",
                                       "$CFG->moddata");

// Have $coursefiles indexed by file paths:
    $coursefiles = array();
    foreach ($grosscoursefiles as $coursefile) {
        $coursefiles[$coursefile] = $coursefile;
    }

// Generate a new dataset item (or reuse an old one)
    foreach ($datasetdefs as $defid => $datasetdef) {
        if (isset($datasetdef->id)) {
            $datasetdefs[$defid]->items = get_records_sql( // Use number as key!!
                    " SELECT number, definition, id, value
                      FROM {$CFG->prefix}quiz_dataset_items
                      WHERE definition = $datasetdef->id ");
        }

        if (isset($datasetdefs[$defid]->items[$maxnumber + 1]) && (
            empty($form->forceregeneration) &&
            isset($form->regenerateddefid) &&
            $form->regenerateddefid != $defid ||
            isset($form->deletebutton))) {
            // Reuse existing datasets
        } else {
            $datasetitem = new stdClass;
            $datasetitem->id =
             isset($datasetdefs[$defid]->items[$maxnumber + 1]->id)
             ? $datasetdefs[$defid]->items[$maxnumber + 1]->id : '';
            $datasetitem->number = $maxnumber + 1;
            if ($this->supports_dataset_item_generation()) {
                if (!empty($form->addbutton) || // If we added an item
                    !isset($form->value) ||     // If we don't have a value
                    $form->regenerateddefid == $defid) { // If we explicitly ask for regeneration
                        $datasetitem->value =
                         $this->generate_dataset_item($datasetdef->options);
                } else {
                    $definition = array_flip($form->definition);
                    $datasetitem->value = $form->value[$definition[$defid]];
                }
            } else {
                $datasetitem->value = '';
            }
            $datasetdefs[$defid]->items[$maxnumber + 1] = clone($datasetitem);

        }
    }

// Get question header if any
    $strquestionheader = $this->comment_header($question);

// Set up the table with the controls for creating new dataset items
    $table->head = $addtable->head = array($straction, $strdatasetnumber);
    $addtable->align = array("center", "center");

    $forceregeneration = '';
    if ($this->supports_dataset_item_generation()) {
        $force = $reuse = '';
        empty($form->forceregeneration)
         ? $reuse = ' checked="checked" '
         : $force = ' checked="checked" ';
        $forceregeneration = '<br/><input type="radio" name="forceregeneration" '
                . $reuse . ' value="0"/>' . $strreuseifpossible
                . '<br/><input type="radio" name="forceregeneration" value="1" '
                . $force . ' />' . $strforceregeneration;
    }

    $addline[] = '<input type="hidden" name="numbertoadd" value="'.
                 ($maxnumber+1).'"/><input type="submit" name="addbutton" '.
                 'value="'.$stradd.'"/>'.$forceregeneration;
    $addline[] = $maxnumber+1;


    foreach ($datasetdefs as $defid => $datasetdef) {
        if ($datasetdef->name) {
            $table->head[] = $datasetdef->name;
            $addtable->head[] = $datasetdef->name
                    . ($this->supports_dataset_item_generation()
                    ?  '<br/>' . $this->custom_generator_tools($datasetdef)
                    : '');
            //$table->align[] = "center";

            if (isset($datasetdef->items[$maxnumber + 1]->id)) {
                $itemid = $datasetdef->items[$maxnumber + 1]->id;
            } else {
                $itemid = '';
            }

            $addline[] =
                    '<input type="hidden" name="itemid[]" value="'.$itemid.'"/>'
                    . "<input type=\"hidden\" name=\"definition[]\" value=\"$defid\"/>"
                    . ( 2 != $datasetdef->type
                      ? '<input type="text" size="20" name="value[]" value="'
                            . $datasetdef->items[$maxnumber + 1]->value
                            . '"/>'
                      : choose_from_menu($coursefiles, 'value[]',
                            $datasetdef->items[$maxnumber + 1]->value,
                            '', '', '', true));
            $data[$datasetdef->name] = $datasetdef->items[$maxnumber + 1]->value;
        }
    }

    if ($strquestionheader) {
        $table->head[] = $strquestionheader;
        $addtable->head[] = $strquestionheader;
        if (empty($question->id) &&
            isset($SESSION->datasetdependent->questionform)) {
            $tmp = &$SESSION->datasetdependent->questionform;
            $answers = array();
            foreach ($tmp->answers as $key => $val) {
                $answers[$key]->answer    = $tmp->answers[$key];
                $answers[$key]->tolerance = $tmp->tolerance[$key];
                $answers[$key]->tolerancetype = $tmp->tolerancetype[$key];
                $answers[$key]->correctanswerlength = $tmp->correctanswerlength[$key];
                $answers[$key]->correctanswerformat = $tmp->correctanswerformat[$key];
            }
            $question->options->answers = $answers;
        }
        $addline[] = $this->comment_on_datasetitems($question, $data, $maxnumber + 1);
    }

// Set up the table showing existing datasets
    $table->data = array();
    $table->align = $addtable->align;
    for ($number = $maxnumber ; $number > 0  ; --$number) {
        $columns = array();
        if ($maxnumber == $number) {
            $columns[] =
                    "<input type=\"hidden\" name=\"numbertodelete\" value=\"$number\"/>
                     <input type=\"submit\" name=\"deletebutton\" value=\"$strdelete\"/>";
        } else {
            $columns[] = '';
        }
        $columns[] = $number;
        foreach ($datasetdefs as $defid => $datasetdef) {
            $columns[] =
                '<input type="hidden" name="itemid[]" value="'. $datasetdef->items[$number]->id .'"/>'
                . "<input type=\"hidden\" name=\"number[]\" value=\"$number\"/>
                <input type=\"hidden\" name=\"definition[]\" value=\"$defid\"/>"
                . // Set $data:
                ($data[$datasetdef->name] = $datasetdef->items[$number]->value) ;
        }
        if ($strquestionheader) {
            $columns[] = $this->comment_on_datasetitems($question, $data, $number);
        }
        $table->data[] = $columns;
    }


/// Print heading

    print_heading_with_help($streditdatasets, 'questiondatasets', "quiz");

// Print the new-dataset table
    $addtable->data = array($addline);
    echo "<form name=\"addform\" method=\"post\" action=\"question.php\">
            <input type=\"hidden\" name=\"regenerateddefid\" value=\"0\"/>
            <input type=\"hidden\" name=\"id\" value=\"$question->id\"/>
            <input type=\"hidden\" name=\"category\" value=\"$question->category\"/>
            <input type=\"hidden\" name=\"qtype\" value=\"$question->qtype\"/>
            <input type=\"hidden\" name=\"sesskey\" value=\"".sesskey()."\"/>
            <input type=\"hidden\" name=\"wizardpage\" value=\"datasetitems\"/>";
    print_table($addtable);
    echo '</form>';

    //             <input type=\"hidden\" name=\"editdatasets\" value=\"1\"/>

// Print the existing-datasets table
    if (!empty($table->data)) {
        echo "<form method=\"post\" action=\"question.php\">
            <input type=\"hidden\" name=\"id\" value=\"$question->id\"/>
            <input type=\"hidden\" name=\"category\" value=\"$question->category\"/>
            <input type=\"hidden\" name=\"qtype\" value=\"$question->qtype\"/>
            <input type=\"hidden\" name=\"sesskey\" value=\"".sesskey()."\"/>
            <input type=\"hidden\" name=\"wizardpage\" value=\"datasetitems\"/>";
        print_table($table);
        echo '</form>';
    }

    echo "<center><br /><br /><form method=\"post\" action=\"question.php\">
          <input type=\"hidden\" name=\"id\" value=\"$question->id\"/>
          <input type=\"hidden\" name=\"category\" value=\"$question->category\"/>
          <input type=\"hidden\" name=\"qtype\" value=\"$question->qtype\"/>
          <input type=\"hidden\" name=\"sesskey\" value=\"".sesskey()."\"/>
          <input type=\"hidden\" name=\"wizardpage\" value=\"datasetitems\"/>
          <input type=\"submit\" name=\"backtoquiz\" value=\"$strbacktoquiz\">
          </form></center>\n";
?>
