<?php
session_start();
//esse comando permite a pagina criar variaveis dentro do navegador (sessao)
$login=$_POST["login"];
$senha= md5 ($_POST["senha"]);

include_once './conexao.php';
//esse comando serve para incluir APENAS UMA VEZ
//o arquivo php, já o include sozinho serve para icluir 2 ou mais vezes um arquivo

$sql="select*from usuarios where login=:login and senha =:senha";

//echo $sql;

$sth = $con->prepare($sql);
$sth->execute([
    ':login' => $login,
    ':senha' => $senha
]);

//texte de login
$row = $sth->fetch();
if($row){
    //criar variavel que fica no navegador se a pessoa esta logado ou nao 
    //guardando em sessao
    $_SESSION["id"]=$row["id"];
    $_SESSION["nome"]=$row["nome"];
    $_SESSION["login"]=$row["login"];
    $_SESSION["perfil"]=$row["perfil"];
    
    header("location:painel.php");
    //serve para acessar o painel.
}else{
    $msg= "Login/Senha invalido(s)!";
    header("location:index.php?erro=".$msg);
// serve para em caso de erro voltar para a index sem mostrar a pagina de configuracao o ? serve para indicar de levar uma mns no end do site
}
?>


