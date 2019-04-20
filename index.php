<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
      <style>
            .erro{
                border:solid 2px red;
                padding:5px;
            }
            
            .logout{
                border:solid 2px green;
                padding:5px;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Biblioteca da Cris</h1>
            <form action="verificarLogin.php" method="post">
                <label>
                    Login:<br>
                    <input type="text" name="login" required>
                </label>
                <label>
                    Senha:<br>
                    <input type="password" name="senha" required>
                </label>
                <input type="submit" value="Entrar" class="btn btn-primary">
            </form>
        </div>
        
        <div class="msg">
        <?php
                     //se existir
                if(isset($_GET["erro"])){
                    echo "<div class='erro'>".$_GET["erro"]."</div>";
                }elseif(isset($_GET["sair"])){
                    echo "<div class='logout'>".$_GET["sair"]."</div>";
                }elseif(isset($_GET["msg"])){
                    echo "<div class='invasor'>".$_GET["msg"]."</div>";
                }
 
        
        // colocar a mns de erro aqui na index para imprimir aqui a msg
            //notepad.cc/qqurl
        ?>
        </div>
    </body>
</html>


 
 