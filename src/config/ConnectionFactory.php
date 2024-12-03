<?php

namespace Concord\src\config;

class ConnectionFactory
{
    private static $connection;

    public static function getConnection()
    {
        if (self::$connection === null) {
            $host = 'localhost';
            $db = 'Concord';
            $user = '';
            $pass = '';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$connection = new \PDO($dsn, $user, $pass, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        return self::$connection;
    }
}