<?php

namespace Concord\config;

class ConnectionFactory
{
    private static $conn;

    public static function getConnection()
    {
        if (!isset(self::$conn)) {
            self::$conn = new \PDO('mysql:host=localhost;dbname=concord', '', '');
            echo "Conexão realizada com sucesso!";
        }else{
            return self::$conn;
        }
    }
}