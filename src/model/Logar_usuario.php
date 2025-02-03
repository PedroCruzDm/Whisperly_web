<?php
namespace Whisperly\Model;

require_once __DIR__ . '/../Config/ConnectionFactory.php';

use Whisperly\Config\ConnectionFactory;
use PDO;
use PDOException;

session_start(); // Inicia a sessão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $logarUsuario = new Logar_Usuario();
    $logarUsuario->login_sistema();
}

class Logar_Usuario {

    public function login_sistema() {
        // Captura e sanitiza as entradas
        $usuario = trim($_POST['usuario_login']);
        $senha = trim($_POST['senha_login']);

        // Valida se os campos estão preenchidos
        if (empty($usuario) || empty($senha)) {
            $this->exibirMensagem("Preencha todos os campos!");
            return;
        }

        // Verifica se o usuário é um e-mail ou um nome de usuário
        $campo = filter_var($usuario, FILTER_VALIDATE_EMAIL) ? 'email' : 'nick_user_permanente';

        // Conexão com o banco de dados
        $connection = (new ConnectionFactory())->getConnection();

        // Prepara a consulta
        $sql_select = 'SELECT * FROM usuarios WHERE ' . $campo . ' = :usuario';
        $stmt = $connection->prepare($sql_select);
        $stmt->bindParam(':usuario', $usuario);
        
        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->exibirMensagem("Erro ao acessar o banco de dados: " . $e->getMessage());
            return;
        }

        // Verifica se encontrou o usuário
        if (!$user) {
            $this->exibirMensagem("Usuário não encontrado!");
            return;
        }

        // Verifica a senha com password_verify
        if (!password_verify($senha, $user['senha'])) {
            $this->exibirMensagem("Senha incorreta!");
            return;
        }

        // Se tudo estiver certo, armazena os dados na sessão
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nick_user'];

        // Redireciona para a página inicial do usuário
        header("Location: ./../views/pages/menu.php");
        exit; // Garante que o script pare aqui
    }

    private function exibirMensagem($mensagem) {
        // Você pode personalizar a forma como a mensagem é exibida
        echo "<script>alert('$mensagem');</script>";
    }
}