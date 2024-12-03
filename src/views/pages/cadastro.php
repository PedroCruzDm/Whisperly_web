<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="./../../js/verificadorSenha.js"></script>
</head>
<body>
    <header>
        <?php include('./includes/header.php') ?>
    </header>
    <main>
        <div class="conteiner_cadastro">
            <form action="" method="post">
                <center>
                    <h2>Cadastrar-se</h2>
                    
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                <br>
                    <label for="nickUser">NickUser:</label>
                    <input type="text" name="nickUser" id="nickUser" placeholder="@nomeUsuario" required>
                <br>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                <br>
                    <label for="numero">Número:</label>
                    <input type="text" name="numero" id="numero" placeholder="Número" required>
                <br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <br>
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar Senha" required>
                <br>
                    <button type="submit">Cadastrar</button>
                    
                </center>
            </form>
        </div>
    </main>
    
</body>
</html>