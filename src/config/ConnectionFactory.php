<?php

namespace Whisperly\Config;
class ConnectionFactory{

    public static $connection;
    public static function getConnection() {

    
    if(!isset($Connection)){
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'whisperly';
    
    try{

        // Cria uma nova conexão PDO
        self::$connection = new \PDO( $database, $username, $password);
        // Configura o modo de erro do PDO para exceções
        self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } 
    catch (\PDOException $e) {
        // Em caso de erro, exibe uma mensagem e encerra a execução
        die('Connection failed: ' . $e->getMessage());
    }  
}

// Retorna a conexão estabelecida
return self::$connection;
    }
}