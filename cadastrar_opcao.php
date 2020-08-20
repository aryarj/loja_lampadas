<!DOCTYPE html>
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
<h2 align="center"><b>Cadastramento</b></h2>

</div>
<div align="center"> 
<?php
                    session_start();
                    include("banco.php");
					echo "<a href='index.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para a Loja&nbsp;</a>";
					echo "&nbsp;&nbsp;";
                    echo "<a href='entrada.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar&nbsp;</a>";
                    echo "&nbsp;&nbsp;";



?>
<br>
<!--Escolha entre CPF e CNPJ-->
		


<hr/>
<a href='cadastrar_cpf.php' class="btn btn-info" style='text-decoration:none' font-weight:bold'><font size='5'>CPF</font></a>
<p style='text-decoration:none' font-weight:bold'><font size='5'>ou</P>
<a href='cadastrar_cnpj.php' class="btn btn-info" style='text-decoration:none' font-weight:bold'><font size='5'>CNPJ</font></a>
</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>