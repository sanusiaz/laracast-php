<?php

    require_once './Database.php';



    $config = require 'config.php';
    $db = new Database($config['database']);
    
    include_once dirname(__FILE__) . './functions.php';
    include_once dirname(__FILE__) .'./router.php';

    

    // dd($db->query("select * from posts order by id desc limit 1")->fetch());
    // dd($db->query("select * from posts")->fetchAll());

