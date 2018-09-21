<?php
$uri = array_values(
    array_filter(
        explode('/', $_SERVER['REQUEST_URI'])
    )
);

include ('Controllers/BaseController');
include('Views/View.php');

/**
 * on index 0 of $uri will be the name of controller.
 */

/**
 * setting home as default controller.
 */
if(!isset($uri[0])) {
    $uri[0] = 'home';
}

$controller = ucfirst($uri[0]) . 'Controller';
$controllerClass = 'Controllers\\' . $controller;

include ('Controllers/' . $controller . '.php');

$controllerObject = new $controllerClass;

/**
 * $uri[1] for action, if not present index will be considered as action.
 */
$action = (!isset($uri[1])) ?  'index': $uri[1];

$controllerObject->$action();