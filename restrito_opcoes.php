<?php
	session_start();
    include("banco.php");
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		body {
			background-color: rgb(150,255,150);
			}
	</style>
    <title>loja de lâmpadas</title>
  </head>
  <body>
    	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>

<hr/>

<div align="center">
    <?php
                    
                    $user = $_SESSION["user"];
                    // Se não houver usuário, volta-se a página de login com o método "header"
                    if(!isset($user))
                    {
                    session_destroy();
                    header('location:restrito_entrada.php');
                    }
                    /*// Se não houver usuário, volta-se a página de login com o método "Refresh"
                    if(!isset($user))
                    {session_destroy();
                    $url='index.php';
                    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                    }*/
                    echo "Nome do usuário: ";
                    echo $user;
                    echo "&nbsp;&nbsp;";
                    echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
    ?>
</div>
<hr/>
<h2 align=center>Menu</h2>
<table align="center">
    <tr>
        <td>
            <a href='restrito_clientes.php' style='text-decoration:none; font-weight:bold;'><font size="6">Para a tela de CLIENTES</font></a><br><br>
            <a href='restrito_produtos.php' style='text-decoration:none; font-weight:bold;'><font size="6">Para a tela de PRODUTOS/ ESTOQUES</font></a><br><br>
			<a href='restrito_compra_historico.php' style='text-decoration:none; font-weight:bold;'><font size="6">Para a tela de HISTÓRICO DE COMPRAS</font></a><br><br>
            <?php 
            $permission = mysqli_query($conexao, "SELECT * FROM usuario where login='$user'") or die("Erro ao selecionar!");
            $permission2 = $permission->fetch_array();
            if($permission2['admin']=="Sim")
            {
                echo "<a href='restrito_vendas.php' style='text-decoration:none; font-weight:bold;'><font size='6'>Para a tela de VENDAS</font></a><br><br>";
				echo "<a href='restrito_loginsenha.php' style='text-decoration:none; font-weight:bold;'><font size='6'>Para a tela de edição de LOGIN e SENHA</font></a>";
            }
            mysqli_close($conexao);
            ?>
<br><br><br>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>