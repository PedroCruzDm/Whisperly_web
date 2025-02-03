<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./../css/main.css">
    <link rel="stylesheet" href="./../css/header.css">
    <link rel="stylesheet" href="./../css/cadastro.css">
    <script src="./../../js/index.js" type="module"></script>
    <script src="./../../js/localstorage.js" type="module"></script>
</head>
<body>
    <header id="header"></header>
    <main id="main_cadastro">
        <div class="containercadastro">
            <div class="Titulo">
                <h1>Whisperly</h1>
                <h2>Cadastra-se</h2>
            </div>

            <form action="./../../model/Cadastrar_Usuario.php" class="form_cadastro"  method="post"> 
                    <h2>Cadastrar-se</h2>
                    
                    <div class="grupo_input">
                        <label for="nome">Nome:</label><br>
                        <input type="text" id="nome" name="nome" placeholder="Nome" required><br>
                    </div>

                    <div class="grupo_input">
                        <label for="nickUser">NickUser:</label><br>
                        <input type="text" name="nickUser" id="nickUser" placeholder="Nome de Exibição" required><br>
                    </div>

                    <div class="grupo_input">
                        <label for="email">E-mail:</label><br>
                        <input type="email" name="email" id="email" placeholder="E-mail" required><br>
                    </div>

                    <div class="grupo_input">
                        <label for="numero">Número:</label><br>
                        <input type="text" name="numero" id="numero" placeholder="Número" required><br>
                    </div>

                <div class="divisoria">
                    <div class="grupo_input">
                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>

                    <div class="grupo_input">
                        <label for="confirmar_senha">Confirmar Senha:</label><br>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar Senha" required>
                    </div>
                </div>

                    <input type="submit" id="btn_cadastrar" value="Cadastrar" class="btn-cadastrar">
                   <p>Ja possui uma conta? Venha fazer <strong><a href="./login.php">Login</a></strong></p> 
                
            </form>
        </div>
    </main>
    
</body>
</html>