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

<hr>

<div align="center">
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
					echo "&nbsp";
					echo "<a href='restrito_opcoes.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Menu&nbsp;</a>";
					echo "&nbsp";
					echo "&nbsp;&nbsp;";
                    echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
    ?>
</div>

<section align="center">
    <form method="POST">
    <hr/>
<h2>Logins e senhas</h2><br>
<?php
 // Mostrando os logins e senhas
    

    $dados1 = mysqli_query($conexao,"SELECT * FROM usuario ORDER BY login ASC") or die(mysqli_error($conexao));
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
                echo '<td><a href="restrito_loginsenha_editar.php?id_usu='.$id_usu.'"><button type="button" class="btn btn-primary">Editar</button></a></td>';
                echo '<td><a href="restrito_loginsenha_apagar_pergunta.php?id_usu='.$id_usu.'"><button type="button" class="btn btn-danger">Apagar usuário</button></a></td>';
                echo '</tr>';
                }
        echo '</table>';
        mysqli_close($conexao);
		echo "<br>";
		echo "&nbsp;&nbsp;";
    echo '<a href="restrito_loginsenha_inserir.php"><button type="button" class="btn btn-success">Inserir um novo usuário</button></a><br><br>';
?>    
                        
                    
                
    </form>






    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>