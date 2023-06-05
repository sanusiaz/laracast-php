<?php

    $uri = $_SERVER['REQUEST_URI'];
    $uri = parse_url( $uri )['path'];


    $routes = require('routes.php');

    if ( array_key_exists($uri, $routes) ) {
        require_once $routes[$uri];
    }
    else {
        abort();
    }
