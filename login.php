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
		session_start();
		include("banco.php");
		$login = $_POST['login'];
		$senha = base64_encode($_POST['senha']);
		if($login == "" || $senha == ""){
			echo ("<script>alert('Login ou senha em branco!');</script>");
			echo ("<script>location.href='entrada.php';</script>");
		}
		// Verificando se o login e a senha digitados correspondem aos armazenados
		$logar = mysqli_query($conexao, "SELECT * FROM cpf WHERE cpf = '$login' AND senha = '$senha'") or die("Erro ao selecionar!");
		if(mysqli_num_rows($logar)>0){
			$logar2 = $logar->fetch_array();
			$_SESSION['user'] = $logar2['nome'];
			$_SESSION['cpf']=$logar2['cpf'];
			echo $_SESSION['user'];
			echo ("<script>location.href='index.php';</script>");
		} else {
			echo ("<script>alert('Login ou senha inválido!');</script>");
			echo ("<script>location.href='entrada.php';</script>");
		}
		mysqli_close($conexao);

	?> 
	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>

<hr/>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>