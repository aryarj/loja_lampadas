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
							echo "<a href='restrito_produtos.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para produtos&nbsp;</a>";
							echo "&nbsp;&nbsp;";
							echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							echo "&nbsp";
							
							
						// atualizando a data
						date_default_timezone_set('America/Sao_Paulo');
						$dia_atual=date('d/m/Y');	
						
					$id_compra = $_GET['id_compra'];
					$sql = "UPDATE compra SET comprado='X', data='$dia_atual' WHERE id_compra='$id_compra'";
					   if(mysqli_query($conexao,$sql)){
						   echo "<script language='javascript' type='text/javascript'>
						   alert('Compra efetuada com sucesso!');
						   window.location.href='restrito_compra_carrinho.php';
						   </script>";
					   }else{
						   echo "<script language='javascript' type='text/javascript'>
						   alert('Erro! Compra não efetuada!');
						   window.location.href='restrito_compra_carrinho.php';
						   </script>";
					   }
						
						//atualizando o estoque na tabela produto
						//quantidade vendida
						  $compra1 = mysqli_query($conexao,"SELECT * FROM compra where id_compra='$id_compra'") or die(mysqli_error($conexao));
						  $compra2 = mysqli_fetch_array($compra1);
						 
						//Quantidade em estoque 
						  $produto1=mysqli_query($conexao,"SELECT * FROM produto where rotulo='".$compra2['rotulo']."'") or die(mysqli_error($conexao));
						  $produto2 = mysqli_fetch_array($produto1);
						
						// Realizando as contas
						  
						  $estoque_atual=$produto2['estoque']+$compra2['quantidade'];
						  						  
						//Atualizando o estoque  
						  $sql2 = "UPDATE produto SET estoque='$estoque_atual' WHERE rotulo='".$compra2['rotulo']."'";
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