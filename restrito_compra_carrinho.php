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

    <title>venda carrinho</title>
	<style>
        body{
		font-size:18px;
		font-style: normal;		
		}
		.font{font-size:20px
				font-weight:bold}
        p { text-align: center;
        	margin: 20px 40px 20px 40px}
		
        ul{text-align: justify;
        	margin: 20px 40px 20px 40px}
			
        body {
		background-color: rgb(150,255,150);
		}
		
		
		
        img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		<!--.bg{background-color: green;}-->
		.bold{
			font-weight: bold;
			font-size: 20px}
		
		.underline { text-decoration: underline;
					font-weight: bold;
		 }
		h1{text-align: center;
		}
		h2{text-align: center;
		}  
		h3{text-align: center;
		}  
		h4{text-align: right;
		}    
        </style>
  </head>
  <body>
    	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>
<div align=center>
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
							echo "<a href='restrito_opcoes.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Menu&nbsp;</a>";
							echo "&nbsp;&nbsp;";
							echo "<a href='restrito_produtos.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para produtos&nbsp;</a>";
							echo "&nbsp;&nbsp;";
							echo "<a href='restrito_compra_historico.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Histórico de compras&nbsp;</a>";
							echo "&nbsp;&nbsp;";
							echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							echo "&nbsp";
																		
				// atualizando a data
				date_default_timezone_set('America/Sao_Paulo');
				$dia_atual=date('d/m/Y');							
						
?>
</div>
<hr/>
<h2>Seu carrinho</h2>
<p>Confira sua atualização, finalise ou a esclua</p>>

<?php
 $dados1 = mysqli_query($conexao,"SELECT * FROM compra where comprado='' and nome='".$user."' ORDER BY id_compra DESC")
 or die(mysqli_error($conexao));
 ?>
 
	<table class="table table-striped">
  <thead align="center">
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Nome</th>
      <th scope="col">Produto</th>
	  <th scope="col">Valor</th>
	  <th scope="col">Quantidade</th>
	  <th scope="col"></th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <?php  
  $total=0;
  while($dados2 = mysqli_fetch_array($dados1)){
    $id_compra=$dados2['id_compra'];
	  echo "<tbody align='center'>";
		echo '<tr>';
		  echo '<th scope="row">'.$dados2['data'].'</th>';
		  echo '<td>'.$dados2['nome'].'</td>';
		  echo '<td>'.$dados2['rotulo'].'</td>';
		  echo '<td>'.$dados2['preco_compra'].'</td>';
		  echo '<td>'.$dados2['quantidade'].'</td>';
		  echo '<td><a href="restrito_compra_carrinho_update.php?id_compra='.$id_compra.'"><button type="submit" class="btn btn-info btn-lg">Comprar</button></a>';
		  echo '<a href="restrito_compra_carrinho_apagar.php?id_compra='.$id_compra.'"><button type="submit" class="btn btn-danger btn-lg">Apagar</button></a></td>';
		  
		echo '</tr>';
		echo '</tbody>';
		$total+=$dados2['preco_compra']*$dados2['quantidade'];
	}
	
	echo "<tbody align='right'>";
		echo '<tr>';
		  echo '<th scope="row"></th>';
		  echo '<th scope="row"></th>';
		  echo '<th scope="row"></th>';
		  echo '<th scope="row">Total R$</th>';
		  echo '<th scope="row">'.$total.'</th>';
		echo '</tr>';
	echo '</tbody>';
	?>
	</table>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>