
<?php
    session_start();
    include("banco.php");
    $id_usu = $_GET['id_usu'];

   // marcando um registro para ser apagado/ocultado
   $sql = "DELETE FROM usuario WHERE id_usu='$id_usu'";
    if(mysqli_query($conexao,$sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuario apagado com sucesso!');
        window.location.href='restrito_loginsenha.php';
        </script>";
    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário não apagado!');
        window.location.href='restrito_loginsenha.php';
        </script>";
    }
    mysqli_close($conexao);
?>

