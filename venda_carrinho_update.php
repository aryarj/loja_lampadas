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

    <title>loja de lâmpadas</title>
  </head>
  <body>
    	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>

<hr/>
<?php
    // caso não seja feito o login
						if(!isset($_SESSION["user"])){
							header('location:venda_sem_login.php');
						// Se o login foi feito	
						}else{
							echo "Olá, ";
							echo $_SESSION["user"];
							echo "!";
							echo "&nbsp";
							echo "<a href='index.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para a Loja&nbsp;</a>";
							echo "&nbsp";
							echo "<a href='sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							echo "&nbsp";
						}
						// atualizando a data
						date_default_timezone_set('America/Sao_Paulo');
						$dia_atual=date('d/m/Y');	
						
					$id_venda = $_GET['id_venda'];
					$sql = "UPDATE venda SET comprado='X', data='$dia_atual' WHERE id_venda='$id_venda'";
					   if(mysqli_query($conexao,$sql)){
						   echo "<script language='javascript' type='text/javascript'>
						   alert('Compra efetuada com sucesso!');
						   window.location.href='venda_carrinho.php';
						   </script>";
					   }else{
						   echo "<script language='javascript' type='text/javascript'>
						   alert('Erro! Compra não efetuada!');
						   window.location.href='venda_carrinho.php';
						   </script>";
					   }
						
						//atualizando o estoque na tabela produto
						//quantidade vendida
						  $venda1 = mysqli_query($conexao,"SELECT * FROM venda where id_venda='$id_venda'") or die(mysqli_error($conexao));
						  $venda2 = mysqli_fetch_array($venda1);
						 
						//Quantidade em estoque 
						  $produto1=mysqli_query($conexao,"SELECT * FROM produto where rotulo='".$venda2['rotulo']."'") or die(mysqli_error($conexao));
						  $produto2 = mysqli_fetch_array($produto1);
						
						// Realizando as contas
						  
						  $estoque_atual=$produto2['estoque']-$venda2['quantidade'];
						  						  
						//Atualizando o estoque  
						  $sql2 = "UPDATE produto SET estoque='$estoque_atual' WHERE rotulo='".$venda2['rotulo']."'";
						  mysqli_query($conexao,$sql2);
					 				   
					   mysqli_close($conexao);

?>





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>