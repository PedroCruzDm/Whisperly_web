<?php

namespace Whisperly\Model;
require_once __DIR__ . '/../Config/ConnectionFactory.php';

use Whisperly\Config\ConnectionFactory;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastrar_usuario = new Cadastrar_Usuario();
    $cadastrar_usuario->cadastrar();
}
class Cadastrar_Usuario {

    public function cadastrar(){

        $nome = $_POST['nome'];
        $nickUser = $_POST['nickUser'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];

        $connection = (new ConnectionFactory())->getConnection();

        $sql_insert = "INSERT INTO `usuarios`( `nome`, `nick_user`, `nick_user_permanente`, `email`, `telefone`, `senha`) VALUES (:nome, :nick_user, :nick_user_permanente, :email, :telefone, :senha)";
        $stmt = $connection->prepare($sql_insert);

        // Verifica se as senhas coincidem
        if ($senha === $confirmar_senha) {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);  // Hash da senha

            // Vincula os parâmetros à query
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':nick_user', $nickUser);
            $stmt->bindParam(':nick_user_permanente', $nickUser);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $numero);
            $stmt->bindParam(':senha', $senha_hash);

            // Executa a query
            if ($stmt->execute()) {
                header("Location: ./../views/pages/menu.php");
                exit;
            } else {
                echo "Erro ao cadastrar usuário.";
            }
        } else {
            echo "As senhas não coincidem!";
        }
    }
}
?>
