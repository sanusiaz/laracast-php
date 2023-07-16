<?php

    return  [
        "users" => [
            'id' => 'int(11) auto_increment PRIMARY KEY',
            "name" => "varchar(255) NOT NULL",
            "email" => "varchar(200) Not null",
            "password" => "varchar(255) NOT NULL"
        ]
    ];