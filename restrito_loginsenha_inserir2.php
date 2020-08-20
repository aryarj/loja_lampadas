<?php
session_start();
include("banco.php");
$login = $_POST['login'];
$senha = base64_encode($_POST['senha']);
$admin = $_POST['admin'];
if($admin==1){
    $admin2='Sim';
}else{$admin2='';}

if($login == "" || $senha == ""){
    echo ("<script>alert('Login ou senha em branco!');</script>");
    echo ("<script>location.href='restrito_loginsenha_inserir.php';</script>");
}
// Verificando se o login e a senha digitados correspondem aos armazenados
$verifica=mysqli_query($conexao, "SELECT * FROM usuario WHERE login = '$login'") or die("Erro ao selecionar!");
if(mysqli_num_rows($verifica)>0){
    echo ("<script>alert('Esse login já existe. Tente outro.');</script>");
    echo ("<script>location.href='restrito_loginsenha_inserir.php';</script>");
}else{
    echo ("<script>location.href='restrito_loginsenha.php';</script>");
    $sqlGravar="INSERT INTO usuario(login, senha, admin) VALUES ('".$login."','".$senha."','".$admin2."')";
    if(mysqli_query($conexao, $sqlGravar))
    {
        echo "New record created successfully";
    }else
    {
        echo "Error: " . $sqlGravar . "<br>" . mysqli_error($conexao);
    }
}


mysqli_close($conn);
?> 