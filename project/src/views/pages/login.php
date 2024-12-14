<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./../css/main.css">
</head>
<body>
    <header>
        <?php include('./includes/header.php') ?>
    </header>

    <main>
        <div class="containerlogin">
            <form action="" method="post">
                <center>

                <div class="titulo">
                    <div class="wrapper">
	                    <svg>
		                    <text x="50%" y="50%" dy=".35em" text-anchor="middle">Whisperly</text>
	                    </svg>
                    </div>
                </div>

                        <h2 class="titulo_login">Login</h2>
                        
                        <div class="grupo_input">
                            <label for="nick">Usuario:</label> <br>
  
                            <div class="personalizado_input">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg_icon bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
                                </svg>

                                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required> <br>
                            </div>
                        </div>
                        
                        <div class="grupo_input">
                            <label for="senha">Senha:</label> <br>

                            <div class="personalizado_input">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg_icon bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                                </svg>

                                <input type="password" name="senha" id="senha" placeholder="Senha" required> <br>
                            </div>
                            
                        </div>
                        
                        <button type="submit">Entrar</button>
                        
                        <p>Não tem uma conta? venha se <strong> <a href="./cadastro.php">registrar-se</a> </strong> </p>
                    </center>
                </form>
            </div>
        </div>
    </main>
</body>
</html>