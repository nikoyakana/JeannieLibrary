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
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    </head>
    <body>
        <?php
        // gravação em banco de dados
        //passo 01: resgatar os dados do form
        
        $nome= $_POST["nome"];
        $email = $_POST["email"];
        $login =  $_POST["login"];
        $senha = $_POST["senha"];
        $perfil =$_POST["perfil"];
           
        
               
        $nome=strtolower($nome);//converte tudo para minusculo
        $nome=  \ucwords($nome);//converte a primeira letra de cada palavra para maiúsculo
        $email=strtolower($email);//converte tudo para minusculo
        $login= strtolower($login);    
       
        
        // passo 02: montar a conexão com o banco (host, usuario, senha, base)
        include_once './conexao.php';
        
        //passo 03: montar a instrução sql de gravacao
        //insert into clientes values(null, 'variavel nome',variavel email, 'variavel sexo');
        // o mesmo ocorre para imprimir com o comando echo "idade:'".$idade."'anos";//Idade:'20'anos
        
        $sql= "insert into usuarios values (null, :nome, :email, :login, :senha,:perfil)";
        
        //passo 04: enviar a linha de comando para o banco 
        $sth = $con->prepare($sql);
        $sth->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':login' => $login,
            ':senha' => $senha,
            ':perfil' => $perfil,
        ]);
        if ($sth->rowCount()){
            ?>
        
       <div class="alert alert-success">
                    <?php
            $msg= "Dados gravado com sucesso.";
                    ?>
            
            </div>
        <?php
        }else{
            
            $msg= "Erro ao gravar.";
        }
        echo "<script> alert('".$msg."');
            location.href='index.php'
            </script>";
        
        //passo 05: fechar a conexão 
        
        ?>                        
    </body>
</html>
