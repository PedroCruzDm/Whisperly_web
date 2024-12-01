<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha == $confirmar_senha){
        echo "Usuário cadastrado com sucesso!";
        header('Location: ./../views/pages/menu.php');
    } else {
        echo "As senhas não conferem!";
    }
}

?>