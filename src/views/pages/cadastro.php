<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./../css/main.css">
    <link rel="stylesheet" href="./../css/header.css">
    <link rel="stylesheet" href="./../css/cadastro.css">
    <script src="./../../js/verificadorSenha.js"></script>
</head>
<body>
    <header>
        <?php include('./includes/header.php') ?>
    </header>
    <main>
        <div class="conteiner_cadastro">
            <form action="./../../model/usuario.php" method="POST">
                <center>
                    <h2>Cadastrar-se</h2>
                    
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required><br>

                    <label for="nickUser">NickUser:</label><br>
                    <input type="text" name="nickUser" id="nickUser" placeholder="@nomeUsuario" required><br>

                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" id="email" placeholder="E-mail" required><br>

                    <label for="numero">Número:</label><br>
                    <input type="text" name="numero" id="numero" placeholder="Número" required><br>
                <div class="divisoria">
                    
                    <div>
                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>

                    <div>
                        <label for="confirmar_senha">Confirmar Senha:</label><br>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar Senha" required>
                    </div>
                </div>
                    <button type="submit">Cadastrar</button>
                    
                </center>
            </form>
        </div>
    </main>
    
</body>
</html>