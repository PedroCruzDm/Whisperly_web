<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === 'ApenasPedro' && $senha === 'admin') {
        $_SESSION['usuario'] = $usuario;
        echo "<script>window.location.href = './../views/pages/menu.php';</script>";

    } else {
        echo "<script>window.location.href = './../views/pages/login.php'; console.error('Usuário ou senha inválidos!');</script>";
    }

} else {
    // Redireciona para o formulário de login se o acesso não for via POST
    header("Location: login.php");
    exit();
}
?>
?>