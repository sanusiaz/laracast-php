<?php

    $notes = $db->query("select * from notes")->fetchAll();


    require_once dirname(__FILE__, 2) . './views/notes.php';

