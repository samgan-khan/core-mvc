<?php
include ('Core/loader.php');

$controllerClass = 'Controllers\\' . ucfirst($controller) . 'Controller';
$controllerObject = new $controllerClass;
$controllerObject->$action();