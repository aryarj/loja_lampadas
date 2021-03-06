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

    <title>restrito_clientes</title>
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
						// caso não seja feito o login
						if(!isset($_SESSION["user"])){
							header('location:restrito_entrada.php');
						// Se o login foi feito	
						}else{
							echo "Olá, ";
							echo $_SESSION["user"];
							echo "!";
							echo "&nbsp";
							echo "<a href='restrito_opcoes.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Menu&nbsp;</a>";
							echo "&nbsp";
							//echo "<a href='venda_carrinho.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Carrinho de compras&nbsp;</a>";
							//echo "&nbsp";
							echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							echo "&nbsp";
						}
						
									
						
?>
</div>
<hr/>
<h2>Cadastro de Clientes</h2>

<?php
 $dados1 = mysqli_query($conexao,"SELECT * FROM cpf ORDER BY nome ASC")
 or die(mysqli_error($conexao));
 ?>
 
	<table class="table table-striped">
  <thead align="center">
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Logradouro</th>
	  <th scope="col">Número</th>
	  <th scope="col">Complemento</th>
	  <th scope="col">Cidade</th>
	  <th scope="col">Estado</th>
	  <th scope="col">CEP</th>
	  <!--<th scope="col">Despachado?</th>-->
	  <th scope="col"></th>
    </tr>
  </thead>
  <?php  
  $total=0;
  while($dados2 = mysqli_fetch_array($dados1)){
    //$id_venda=$dados2['id_venda'];
	  echo "<tbody align='center'>";
		echo '<tr>';
		  echo '<th scope="row">'.$dados2['cpf'].'</th>';
		  echo '<td>'.$dados2['nome'].'</td>';
		  echo '<td>'.$dados2['sobrenome'].'</td>';
		  echo '<td>'.$dados2['logradouro'].'</td>';
		  echo '<td>'.$dados2['numero'].'</td>';
		  echo '<td>'.$dados2['complemento'].'</td>';
		  echo '<td>'.$dados2['cidade'].'</td>';
		  echo '<td>'.$dados2['estado'].'</td>';
		  echo '<td>'.$dados2['cep'].'</td>';
	
	}
	
	
	?>
	</table>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>