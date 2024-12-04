<?php
namespace Concord\controllers;

use Concord\src\model\Usuario;
use Concord\config\ConnectionFactory;
use \PDOException;

class UsuarioController{
    public function cadastrarUser($pegarUserInfo){
        try{
            $pdo = ConnectionFactory::getConnection();

            $nome_usuario = $_POST['nome'];
            $nick_usuario = $_POST['nickUser'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];
            $senha = $_POST['senha'];
            $confirmar_senha = $_POST['confirmar_senha'];

            if($senha != $confirmar_senha){ //manitos isso é caso se a senha for diferente, o ! é negar o valor 
                echo "As senhas não são iguais";
                return;
            }else{
                $sql = "INSERT INTO users(nome, nickUser, email, telefone, senha, dt_criado) VALUES($nome_usuario, $nick_usuario, $email, $numero, $senha, NOW())";
                
                $stmt = $pdo->prepare($sql); //prepara a query :D

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $pegarUserInfo = $_POST;
                }else{
                    echo "Erro ao cadastrar usuário";
                }

                $stmt->bindParam(':nome', $nome_usuario);
                $stmt->bindParam(':nickUser', $nick_usuario);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefone', $numero);
                $stmt->bindParam(':senha', $senha);

                $stmt->execute();

                if ($stmt->rowCount()) {
                    header("Location: ./../views/menu.php");
                    exit();
                } else {
                    echo "Erro ao cadastrar!";
                }
                }
            } catch (PDOException $e) {
                error_log("Erro no cadastro: " . $e->getMessage());
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        }
}
    

?>