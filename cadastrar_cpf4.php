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
					
                    // Checando se o clinete já é cadastrado
					$teste = mysqli_query($conexao,"SELECT * from cpf where cpf='".$_SESSION["cpf"]."'");
					if (mysqli_num_rows($teste)>0){
						echo ("<script>alert('Cliente já cadastrado!');</script>");
						echo ("<script>location.href='index.php';</script>");
						mysqli_close($conexao);
						
					}
					else{
                        // cadastrando o cliente
						$sqlGravar="INSERT INTO cpf(cpf, nome, sobrenome, logradouro, numero, complemento, cidade, estado, cep, telefone,
						celular,email,senha) 
						VALUES ('".$_SESSION["cpf"]."','".$_SESSION["nome"]."','".$_SESSION["sobrenome"]."','".$_SESSION["logradouro"]."',
						'".$_SESSION["numero"]."','".$_SESSION["complemento"]."','".$_SESSION["cidade"]."','".$_SESSION["estado"]."',
						'".$_SESSION["cep"]."','".$_SESSION["telefone"]."','".$_SESSION["celular"]."','".$_SESSION["email"]."',
						'".$_SESSION["senha"]."')";
						
						if(mysqli_query($conexao, $sqlGravar))
						{
							echo ("<script>alert('Cliente cadastrado com sucesso! Agora é só entrar com seu cpf e senha');</script>");
							echo ("<script>location.href='index.php';</script>");
						}else
						{
							echo "Error: " . $sqlGravar . "<br>" . mysqli_error($conexao);
						}
						
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