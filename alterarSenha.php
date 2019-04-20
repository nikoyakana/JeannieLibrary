<?php session_start();
 include_once './autenticacao.php';
    //esse comando serve para verificar se o usuario esta ou nao logado evitando invasao

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Senha</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Alterar senha</h1>
            <form action="atualizarSenha.php" method="post">
                <label>
                    Nova Senha:<br>
                    <input type="password" name="novasenha" required>
                </label>
                <input type="submit" value="Atualizar" class="btn btn-sucess">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
