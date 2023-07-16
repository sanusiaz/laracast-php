<?php
    define( 'ABSOLUTE_PATH', dirname(__FILE__) );
    define( 'VIEWS_PATH', dirname(__FILE__) . './resources/views/view' );

    function url($path = '/') {
        $path = str_replace("/", "", $path);
        return ( $path === '' ) ? '/' : $path;
    }

    function dd($data)
    {
        echo "<pre>";
        print_r($data);
    }


    function loadView($viewName) 
    {
        $viewName = str_replace( ".",  "/", $viewName );
        if ( file_exists( ABSOLUTE_PATH . './resources/views/' . $viewName . '.php' ) ) {
            include_once  ABSOLUTE_PATH . './resources/views/' . $viewName . '.php';
        }
        else {
            die('Please Create View File ' . $viewName);
        }
    }
    require_once('router.php');