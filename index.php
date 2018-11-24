<?php
include ('Core/loader.php');

$controllerClass = 'Controllers\\' . ucfirst($uri[0]) . 'Controller';
$controllerObject = new $controllerClass;
$controllerObject->$action();