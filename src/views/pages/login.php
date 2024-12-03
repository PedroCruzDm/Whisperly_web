<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <?php include('./includes/header.php') ?>
    </header>
    <main>
        <div class="conteiner_login">
            <form action="" method="post">
                <center>
                    <h2>Login</h2>
                    
                    <label for="nickUser">NickUser:</label>
                    <input type="text" name="nickUser" id="nickUser" placeholder="@nomeUsuario" required>
                <br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <br>
                    <button type="submit">Entrar</button>
                    
                </center>
            </form>
        </div>
</body>
</html>