<?php

namespace Whisperly\Config;

use PDO;
use PDOException;

class ConnectionFactory {

    // Definição das credenciais de conexão
    private static $host = 'localhost';
    private static $dbname = 'whisperly';
    private static $username = 'root';
    private static $password = '';
    private static $pdo = null;

    // Método estático para obter a conexão com o banco de dados
    public static function getConnection() {
        
        // Verifica se já existe uma conexão aberta
        if (self::$pdo === null) {
            try {
                // Estabelecendo a conexão com PDO
                self::$pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
                
                // Configurando o PDO para lançar exceções em caso de erro
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                // Caso haja erro, exibe a mensagem de erro
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        // Retorna a instância da conexão
        return self::$pdo;
    }
}
