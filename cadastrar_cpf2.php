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


<?php
		//CPF e se há essa informação
		if (isset($_POST['cpf']) && ($_POST['cpf'])!='') 
		{
			$cpf=$dados['cpf'];
		}else
		{
			$cpf ='sem informação';
		}

		//nome e se há essa informação
		if (isset($_POST['nome']) && ($_POST['nome'])!='') 
		{
			$nome=$dados['nome'];
		}else
		{
			$nome ='sem informação';
		}

		//sobrenome e se há essa informação
		if (isset($_POST['sobrenome']) && ($_POST['sobrenome'])!='') 
		{
			$sobrenome=$dados['sobrenome'];
		}else
		{
			$sobrenome ='sem informação';
		}
		
		//logradouro e se há essa informação
		if (isset($_POST['logradouro']) && ($_POST['logradouro'])!='')
		{
			$logradouro=$dados['logradouro'];
		}else
		{
			$logradouro ='sem informação';
		}
		
		//numero e se há essa informação
		if (isset($_POST['numero']) && ($_POST['numero'])!='')
		{
			$numero=$dados['numero'];
		}else
		{
			$numero ='sem informação';
		}
		
		
		//complemento e se há essa informação
		if (isset($_POST['complemento']) && ($_POST['complemento'])!='')
		{
			$complemento=$dados['complemento'];
		}else
		{
			$complemento ='';
		}
		
		//cidade e se há essa informação
		if (isset($_POST['cidade']) && ($_POST['cidade'])!='')
		{
			$cidade=$dados['cidade'];
		}else
		{
			$cidade ='sem informação';
		}

		//estado e se há essa informação
		if (isset($_POST['estado']) && ($_POST['estado'])!='')
		{
			$estado=$dados['estado'];
		}else
		{
			$estado ='sem informação';
		}
		
		//cep e se há essa informação
		if (isset($_POST['cep']) && ($_POST['cep'])!='')
		{
			$cep=$dados['cep'];
		}else
		{
			$cep ='sem informação';
		}
		
		//telefone e se há essa informação
		if (isset($_POST['telefone']) && ($_POST['telefone'])!='')
		{
			$telefone=$dados['telefone'];
		}else
		{
			$telefone ='';
		}
		
		//celular e se há essa informação
		if (isset($_POST['celular']) && ($_POST['celular'])!='')
		{
			$celular=$dados['celular'];
		}else
		{
			$celular ='sem informação';
		}
		
		//email e se há essa informação
		if (isset($_POST['email']) && ($_POST['email'])!='')
		{
			$email=$dados['email'];
		}else
		{
			$email ='sem informação';
		}
		
		//senha e se há essa informação
		if (isset($_POST['senha']) && ($_POST['senha'])!='')
		{
			$senha=$dados['senha'];
		}else
		{
			$senha ='sem informação';
		}
		
		//senha_confirmar e se há essa informação
		if (isset($_POST['senha_confirmar']) && ($_POST['senha_confirmar'])!='')
		{
			$senha_confirmar=$dados['senha_confirmar'];
		}else
		{
			$senha_confirmar ='sem informação';
		}

			include "cadastrar_cpf3.php";



?>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>