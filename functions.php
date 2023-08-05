<?php

    function url($path = '/')
    {
        return ($path === '') ? '/' : $path;
    }

    function dd($data)
    {
        echo "<pre>";
        print_r($data);
    }


    function base_path($path) {
        include_once dirname(__FILE__) . $path;
    }

    function return_base_path_data($path) {
        return include_once(dirname(__FILE__) . './' . $path);
    }

    function view($path, $attributes = [])
    {
        extract($attributes);
        
        if ( file_exists( dirname(__FILE__) . './resources/views/' . $path . '.php' ) ) {
            include_once dirname(__FILE__) . './resources/views/' . $path . '.php';
        }
        else {
            echo 'View File Not Found '  . $path;
        }
    }
