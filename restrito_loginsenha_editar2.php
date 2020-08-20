<?php
session_start();
include("banco.php");
$id_usu = $_SESSION['id_usu'];
$senha = base64_encode($_POST['senha']);
$admin = $_POST['admin'];
if($admin==1){
    $admin2='Sim';
}else{$admin2='';}

echo $id_usu;
echo $senha;
echo '/';
echo $admin;
if($senha ==""){
    echo ("<script>alert('Senha em branco!');</script>");
    echo ("<script>location.href='restrito_loginsenha.php';</script>");
}else
{
    echo ("<script>location.href='restrito_loginsenha.php';</script>");
    $sqlEditar="UPDATE usuario SET senha='".$senha."', admin='".$admin2."' WHERE id_usu='$id_usu'";
    
    if(mysqli_query($conexao,$sqlEditar))
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário editado com sucesso!');
        window.location.href='loginsenha.php';
        </script>";
    }
    else
    {
        echo "Error: " . $sqlGravar . "<br>" . mysqli_error($conexao);
    }

}
mysqli_close($conexao);
?> 