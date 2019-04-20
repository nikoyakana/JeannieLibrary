<?php session_start();
 include_once './autenticacao.php';
    //esse comando serve para verificar se o usuario esta ou nao logado evitando invasao

?>
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
    </head>
    <body>
        <div class="container">
            <h1></h1>
           <p>Seja bem vindo(a):<?php echo $_SESSION["nome"]; ?></p>
            <h3>Painel do Sistema</h3>
            <?php if($_SESSION["perfil"]=="admin"){
     include_once 'menuAdm.php';
            }elseif($_SESSION["perfil"]=="user"){
                include_once 'menuUser.php';
            }
                    ?>
            </div>
 <?php
        // put your code here
        ?>
    </body>
</html>
