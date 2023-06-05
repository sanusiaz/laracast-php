<?php

    $notes = $db->query("select * from notes")->get();

    $loggedInUserId = 1;
    if ( isset($_GET['id']) ) {
        $id = $_GET['id'];

        $id = htmlentities($id);
        if ( preg_match('/[0-9]/', $id) ) {
            $id = preg_replace("#[^a-zA-Z0-9]#", "", $id);

            $notes = $db->query("select * from notes where id = {$id}")->findOrFail();
            authorize( $notes[0]['user_id'], 1 );
        }
    }

    require_once dirname(__FILE__, 2) . './views/notes.php';

