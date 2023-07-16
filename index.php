<?php

function abort() {
    die('Not Found');
    return http_response_code(404);
}

function go_ahead( $route ) {
    die($route);
}
    require_once('router.php');