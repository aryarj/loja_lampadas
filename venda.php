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

    <title>loja venda</title>
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
		background-color: rgb(200,255,255);
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
							echo "<a href='venda_carrinho.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Carrinho de compras&nbsp;</a>";
							echo "&nbsp";
							echo "<a href='sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							echo "&nbsp";
							$id_prod = $_GET['id_prod'];
							echo "&nbsp";
							
						}
						
				// Selecinando o pedido para o carrinho de compras
				// primeiro a data
				date_default_timezone_set('America/Sao_Paulo');
				$dia_atual=date('d/m/Y');
				
				// agora o cliente
				$cliente = mysqli_query($conexao, "SELECT * FROM cpf WHERE cpf = '".$_SESSION["cpf"]."'") or die (mysqli_error($conexao));
				$cliente2 = mysqli_fetch_array($cliente);
				
				// e o produto
				$produto = mysqli_query($conexao, "SELECT * FROM produto WHERE id_prod = '$id_prod'") or die (mysqli_error($conexao));
				$produto2 = mysqli_fetch_array($produto);
					
?>						


</div>

<table class="table table-striped">
  <thead align="center">
    <tr>
      <th scope="col">Data de entrada no carrinho</th>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Produto</th>
	  <th scope="col">Valor</th>
	  <th scope="col">Quantidade<br>Selecione a quantidade<br>(entre 1 e 100)</th>
    </tr>
  </thead>
  <tbody align="center">
    <tr>
      <th scope="row"><?php echo $dia_atual;?></th>
      <td><?php echo $cliente2['cpf'];?></td>
      <td><?php echo $cliente2['nome'];?></td>
      <td><?php echo $produto2['rotulo'];?></td>
	  <td><?php echo $produto2['preco'];?></td>
	  <td>
  <form method="POST">
	  <input type="number" required name="quantidade" min="1" max="100">
	  <button type="submit">Inserir no carrinho</button>
  </form></td>
	</tr>
	</tbody>
	</table>
 <?php 
		// Verificando se a quantidade foi escolhida
		if (!isset($_POST['quantidade'])){
					   echo "";
				   }else{
					$quantidade=($_POST['quantidade']);
					
				   }
		   
		   
		 // inserindo os dados do cliente e do produto na tabela venda, se a quantidade foi escolhida
		 if (!isset($quantidade)){
               echo "";
           }else{
			 $sqlVenda = "INSERT INTO venda(data,cpf,nome,rotulo,preco, quantidade) VALUES ('$dia_atual','".$cliente2['cpf']."',
				'".$cliente2['nome']."','".$produto2['rotulo']."','".$produto2['preco']."','$quantidade')";
				if(mysqli_query($conexao,$sqlVenda)){
					echo "<script language='javascript' type='text/javascript'>
					alert('O produto foi colocado no carrinho de compras!');
					window.location.href='venda_carrinho.php';
					</script>";
				}else{
					echo "<script language='javascript' type='text/javascript'>
					alert('Erro! O produto não foi colocado no carrinho de compras!!');
					window.location.href='index.php';
					</script>";
				}

			 	mysqli_close($conexao);
			}


?>

    </tr>
    
  </tbody>
</table>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>