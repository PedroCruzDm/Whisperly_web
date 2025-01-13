<?php 

namespace Whisperly\Model;
use Whisperly\Config\ConnectionFactory;
use \PDOException;

Class Cadastrar_Usuario {

    public function cadastrar(){
        $nome = $_POST['nome'];
        $nickUser = $_POST['nickUser'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];

        $connection = ConnectionFactory::getConnection();

        $sql_insert = "INSERT INTO usuarios (nome, nick_user, nick_user_permanente, email, telefone, senha) VALUES (:nome, :nick_user, :nick_user, :email, :telefone, :senha)";
        $stmt = $connection->prepare($sql_insert);

        if (!$stmt){
            echo "Erro na preparação da query" . $connection->errorInfo();
        }

        if (!$connection){
            echo "A conexão falhou" . $connection->errorInfo();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if ($senha == $confirmar_senha){
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':nick_user', $nickUser);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefone', $numero);
                $stmt->bindParam(':senha', $senha);

                $stmt->execute();
            } else {
                echo "As senhas não coincidem";
            }

        }

    }
}