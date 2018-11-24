<?php
$uri = array_values(
    array_filter(
        explode('/', $_SERVER['REQUEST_URI'])
    )
);

$controller = 'pages';

/**
 * on index 0 of $uri will be the name of controller.
 * setting home as default controller.
 */
if(isset($uri[0])) {
    $controller = $uri[0];
}

/**
 * $uri[1] for action, if not present index will be considered as action.
 */
$action = (!isset($uri[1])) ? 'index': $uri[1];