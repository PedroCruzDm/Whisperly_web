<?php

$autopath = __DIR__ . '/vendor/autoload.php';

$rotta = $_REQUEST['r'];
$action = $_REQUEST['action'];

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $action = 'index';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $routeControllerClass = "Whisperly\\controllers\\" . $rota;
    $rotaControllerInstance = new $routeControllerClass();
    $rotaControllerInstance->$action($_POST);
}