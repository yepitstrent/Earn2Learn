<?PHP

function wiki_upgrade($oldversion) {
/// This function does anything necessary to upgrade 
/// older versions to match current functionality 

    global $CFG;

    if ($oldversion < 2004073000) {

       modify_database("", "ALTER TABLE prefix_wiki_pages DROP COLUMN id;"); 
       modify_database("", "ALTER TABLE ONLY prefix_wiki_pages 
                            ADD CONSTRAINT id PRIMARY KEY (pagename, \"version\");"); 
    }    
    if ($oldversion < 2004073001) {

       modify_database("", "ALTER TABLE prefix_wiki_pages DROP CONSTRAINT id;"); 
       modify_database("", "ALTER TABLE ONLY prefix_wiki_pages 
                            ADD CONSTRAINT id PRIMARY KEY (pagename, \"version\", wiki);"); 
    }
    if ($oldversion < 2004082200) {
        table_column('wiki_pages', '', 'userid', "integer", "10", "unsigned", "0", "not null", "author");
    }
    if ($oldversion < 2004082303) {  // Try to update userid for old records
        if ($pages = get_records('wiki_pages', 'userid', 0, 'pagename', 'lastmodified,author,pagename,version')) {
            foreach ($pages as $page) {
                $name = explode('(', $page->author);
                $name = trim($name[0]);
                $name = explode(' ', $name);
                $firstname = $name[0];
                unset($name[0]);
                $lastname = trim(implode(' ', $name));
                if ($user = get_record('user', 'firstname', $firstname, 'lastname', $lastname)) {
                    set_field('wiki_pages', 'userid', $user->id,                                                                                      'pagename', addslashes($page->pagename), 'version', $page->version);
                }
            }
        }
    }
    
    if ($oldversion < 2004111200) {
        execute_sql("DROP INDEX {$CFG->prefix}wiki_course_idx;",false);
        execute_sql("DROP INDEX {$CFG->prefix}wiki_entries_wikiid_idx;",false); 
        execute_sql("DROP INDEX {$CFG->prefix}wiki_entries_userid_idx;",false); 
        execute_sql("DROP INDEX {$CFG->prefix}wiki_entries_groupid_idx;",false);
        execute_sql("DROP INDEX {$CFG->prefix}wiki_entries_course_idx;",false); 
        execute_sql("DROP INDEX {$CFG->prefix}wiki_entries_pagename_idx;",false);

        modify_database('','CREATE INDEX prefix_wiki_course_idx ON prefix_wiki (course);');
        modify_database('','CREATE INDEX prefix_wiki_entries_wikiid_idx ON prefix_wiki_entries (wikiid);');
        modify_database('','CREATE INDEX prefix_wiki_entries_userid_idx ON prefix_wiki_entries (userid);');
        modify_database('','CREATE INDEX prefix_wiki_entries_groupid_idx ON prefix_wiki_entries (groupid);');
        modify_database('','CREATE INDEX prefix_wiki_entries_course_idx ON prefix_wiki_entries (course);');
        modify_database('','CREATE INDEX prefix_wiki_entries_pagename_idx ON prefix_wiki_entries (pagename);');
    }


    if ($oldversion < 2004112400) {
        execute_sql("ALTER TABLE {$CFG->prefix}wiki_pages DROP CONSTRAINT id;",false); 
        execute_sql("ALTER TABLE {$CFG->prefix}wiki_pages DROP CONSTRAINT {$CFG->prefix}wiki_pages_id;",false); 
        execute_sql("ALTER TABLE {$CFG->prefix}wiki_pages DROP CONSTRAINT {$CFG->prefix}wiki_pages_pagename_version_wiki_unique;",false);
        modify_database("", "ALTER TABLE ONLY prefix_wiki_pages 
                            ADD CONSTRAINT prefix_wiki_pages_pagename_version_wiki_unique PRIMARY KEY (pagename, \"version\", wiki);"); 
    }

    if ($oldversion < 2005022000) {
        // recreating the wiki_pages table completelly (missing id, bug 2608)
        if ($rows = count_records("wiki_pages")) {
            // we need to use the temp stuff
            modify_database("","CREATE TABLE prefix_wiki_pages_tmp (
                id SERIAL8 PRIMARY KEY, 
                pagename VARCHAR(160) NOT NULL,
                version INTEGER  NOT NULL DEFAULT 0,
                flags INTEGER  DEFAULT 0,
                content TEXT,
                author VARCHAR(100) DEFAULT 'ewiki',
                userid INTEGER  NOT NULL DEFAULT 0,
                created INTEGER  DEFAULT 0,
                lastmodified INTEGER  DEFAULT 0,
                refs TEXT,
                meta TEXT,
                hits INTEGER  DEFAULT 0,
                wiki INT8  NOT NULL);");
            
            execute_sql("INSERT INTO {$CFG->prefix}wiki_pages_tmp (pagename, version, flags, content,
                                                                   author, userid, created, lastmodified,
                                                                   refs, meta, hits, wiki) 
                         SELECT pagename, version, flags, content,
                                author, userid, created, lastmodified,
                                refs, meta, hits, wiki
                         FROM {$CFG->prefix}wiki_pages");

            $insertafter = true;
        }

        execute_sql("DROP TABLE {$CFG->prefix}wiki_pages");

        modify_database("","CREATE TABLE prefix_wiki_pages (
            id SERIAL8 PRIMARY KEY, 
            pagename VARCHAR(160) NOT NULL,
            version INTEGER  NOT NULL DEFAULT 0,
            flags INTEGER  DEFAULT 0,
            content TEXT,
            author VARCHAR(100) DEFAULT 'ewiki',
            userid INTEGER  NOT NULL DEFAULT 0,
            created INTEGER  DEFAULT 0,
            lastmodified INTEGER  DEFAULT 0,
            refs TEXT,
            meta TEXT,
            hits INTEGER  DEFAULT 0,
            wiki INT8  NOT NULL);");

        modify_database("","CREATE UNIQUE INDEX prefix_wiki_pages_pagename_version_wiki_uk 
                            ON prefix_wiki_pages (pagename, version, wiki);");
        
        if (!empty($insertafter)) {
            execute_sql("INSERT INTO {$CFG->prefix}wiki_pages (pagename, version, flags, content,
                                                               author, userid, created, lastmodified,
                                                               refs, meta, hits, wiki) 
                         SELECT pagename, version, flags, content,
                                author, userid, created, lastmodified,
                                refs, meta, hits, wiki
                         FROM {$CFG->prefix}wiki_pages_tmp");

            execute_sql("DROP TABLE {$CFG->prefix}wiki_pages_tmp");
        }
    }
    
    return true;
}

?>
