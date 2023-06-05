<?php

    function dd($value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    function abort($code = 404) {
        http_response_code($code);

        require_once 'views' . '/' . $code . '.php';

        exit();
    }

    function authorize( $id, $user_id, $status = Response::UNAUTHORIZED ) {
        if ( !($id === $user_id) ) {
            abort( $status );
        } 
    }
?>