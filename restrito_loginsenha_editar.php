<?php
session_start();
    include("banco.php");
    $id_usu = $_GET['id_usu'];
    
    $_SESSION["id_usu"] = $id_usu;
    
        // selecionando os dados do usuário que será editado
        $dados = mysqli_query($conexao,"SELECT * FROM usuario where id_usu=$id_usu") or die(mysqli_error($conexao));
        $usuario = mysqli_fetch_array($dados);
        $teste=$id_usu;
    //retenção dos dados com método 'POST'
    if (isset($_POST['login']) && $_POST['login'] != '') {
            $usuario = array();
            
            //Senha          
                $usuario['senha']=$_POST['senha'];
                                                
            // Status de administrador ou não
                $usuario['admin']=$_POST['admin'];
			
                       
       }
	   
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

<hr/>
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
					echo "<a href='restrito_loginsenha.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Logins e senhas&nbsp;</a>";
					echo "&nbsp;&nbsp;";
                    echo "&nbsp;&nbsp;";
                    echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
    ?>
</div>
<hr>
<div align=center>
<form method='POST' action="restrito_loginsenha_editar2.php" target="_self" >
     
                <fieldset id="contorno1" style="width:600px;height:250px; margin:auto">
                 <h3>Editando um usuário</h3>  
                <!--Login-->
                 <label>
                    <p> <?php echo 'Login: '; echo $usuario['login'];?></p>
                    </label>
					<br><br>
					
                    <!--Senha-->
                 <label>
                    Senha:
                    <input type="text" required name="senha" placeholder=<?php echo "Senha"; echo "_atual:";echo base64_decode($usuario['senha']);?>>
					</label>
					<br><br>
				   
                   <!--Administrador ou não-->
                    <label>
                    Administrador:
                        <input type="checkbox" name="admin" value="1"
                        <?php echo ($usuario['admin']==1)?'checked':'';?>/>
                        
                    </label><br><br>


                   <button align="right"  type="submit">Editar</button><br>
    
                </fieldset>
     </form>
</div>  
                    
    </body>

</html>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>