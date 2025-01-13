<?php
    $autoloadpath = __DIR__ . "/../../vendor/autoload.php";
    include_once($autoloadpath);
    var_dump($autoloadpath);

    $rota = $_REQUEST['r'];
    $action = $_REQUEST['action'];

    switch($_SERVER["REQUEST_METHOD"]){
        case 'POST':
            $rotacontrollerClass = "Whisperly\\Controllers\\" . $rota;
            $rotacontrollerInstance = new $rotacontrollerClass();
            $rotacontrollerInstance->$action();
            break;
            
            case 'GET':
            $action = 'index';
            break;

            case !'POST' && !'GET':
                echo "Método não permitido";
    }
    
    /*    if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $rotacontrollerClass = "Whisperly\\Controllers\\" . $rota;
            $rotacontrollerInstance = new $rotacontrollerClass();
            $rotacontrollerInstance->$action();
        }
    
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $action = 'index';
        }
    */