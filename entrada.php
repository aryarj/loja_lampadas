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

</div>
<div align="center">
	<a href='index.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para a Loja&nbsp;</a>
</div>             

<hr/>

<br/>
<h3 align="center"><b>Por favor entre com seu login e senha para continuar o atendimento ou cadastrar-se</b></h3>
<br>
<section align="center">
    <form action="login.php" target="_self" method="POST">
        <fieldset>
            <label>Login</label>
            <input type="text" name="login" maxlength="11" placeholder="CPF ou CNPJ"/><br/><br/>
            <label>Senha</Label>
            <input type="password" maxlength="6" name="senha"><br/><br/>
            <button type="submit" class="btn btn-info">Entrar</button><br/><br/>
        
    </form>
    <form action="cadastrar_opcao.php" target="_self" method="POST">
        
            <button type="submit" class="btn btn-success"> Ou cadastrar-se</button>
			
        </fieldset>
    </form>
</section>
<hr/>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>