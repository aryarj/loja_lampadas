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
	<style>
		body {
			background-color: rgb(150,255,150);
			}
	</style>
    <title>loja de lâmpadas</title>
  </head>
  <body>
    	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>
<div align="center"><h3><b>Você tem certeza que deseja apagar esse usuário?</b></h3></div>
<hr/>
<section align="center"><font size='5'>
    <form method="POST">
    <fieldset>

<?php

    $id_usu = $_GET['id_usu'];

    echo '<a href="restrito_loginsenha.php"><button type="button" class="btn btn-primary">Não</button></a>';
    echo "&nbsp;&nbsp;";
    echo '<a href="restrito_loginsenha_apagar.php?id_usu='.$id_usu.'"><button type="button" class="btn btn-danger">Sim</button></a>';
    echo '<br><br>';

    // Mostrando o registro que será apagado
    $dados1 = mysqli_query($conexao,"SELECT * FROM usuario where id_usu=$id_usu") or die(mysqli_error($conexao));
    echo "<table align=center border='1'>";
            
            echo '<tr align=center>';
                echo '<th><font size=5>Login</font></th>';
                echo '<th><font size=5>senha</font></th>';
                echo '<th><font size=5>Administrador</font></th>';
                echo '</tr>';
           while($dados2 = mysqli_fetch_array($dados1)){
                $id_usu=$dados2['id_usu'];
                echo '<tr align=center>';
                echo '<td><font size=5>'.$dados2['login'].'</font></td>';
                echo '<td><font size=5>'.base64_decode($dados2['senha']).'</font></td>';
                echo '<td><font size=5>'.$dados2['admin'].'</font></td>';
                echo '</tr>';
                }
        echo '</table>';
        mysqli_close($conexao);
?>    
           
                    
                </fieldset>
    </form>
</section>
<hr/>

</body>
</html>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>