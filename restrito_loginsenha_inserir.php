<?php 
    session_start();
    include("banco.php");
?>
<html lang="pt-br" align="center"><font size='4'>
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
<div align=center>
<?php

// Deixando a primeira entrada (nome do radionuclídeo e demais)
//com uma informação qualquer, para não gerar erro
          $usuario=array('login'=>'',
                        'senha'=>'',
                        'admin'=>''
                        );
            
            $erros_validacao=array();
            
    //retenção dos dados com método 'POST'
    if (isset($_POST['login']) && $_POST['login'] != '') {
            $usuario = array();
            
            // login
           		$usuario['login']=$_POST['login'];
			                        
            //Senha          
                $usuario['senha']=$_POST['senha'];
                                                
            // Status de administrador ou não
                $usuario['admin']=$_POST['admin'];
			
            $SESSION[]=$usuario;
            
       }
        
        
                
        // Login e se há essa informação
        if (isset($_POST['login']) && ($_POST['login'])!='')
        {
            $login=$usuario['login'];
        }else
        {
            $login ='Sem login';
        } 
        
        // Senha e se há essa informação
        if (isset($_POST['senha']) && ($_POST['senha'])!='')
        {
            $senha=$usuario['senha'];
        }else
        {
            $senha ='Sem senha';
        } 

        // Permissão de administrador e se há essa informação
        if(isset($_POST['admin']) && ($_POST['senha'])!='')
        {
            $admin=$usuario['admin'];
        }else
        {
            $admin='Sem permissão';
        }

          

                    
                    $user = $_SESSION["user"];
                     // Se não houver usuário, volta-se a página de login com o método "header"
                    if(!isset($user))
                    {
                     session_destroy();
                     header('location:index.php');
                    }
                    echo "Nome do usuário: ";
                    echo $user;
                    echo "&nbsp;&nbsp;";
                    echo "<a href='restrito_opcoes.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Menu&nbsp;</a>";
					echo "&nbsp;&nbsp;";
					echo "<a href='restrito_loginsenha.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para Logins e senhas&nbsp;</a>";
					echo "&nbsp;&nbsp;";
                    echo "<a href='restrito_sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
                   
    ?>
</div>	
<hr>
<!--entrada dos dados-->

	 <form method='POST' action="restrito_loginsenha_inserir2.php" target="_self" align=center>
     <!--action="restrito_loginsenha_inserir2.php"-->
                <fieldset id="contorno1" style="width:600px;height:250px; margin:auto">
                 <h3>Inserindo um novo usuário</h3>  
                <!--Login-->
                 <label>
                    Login:
                    <input type="text" required name="login"/>
					</label>
					<br><br>
					
					<!--Senha-->
                 <label>
                    Senha:
                    <input type="text" required name="senha"/>
					</label>
					<br><br>
				   
                   <!--Administrador ou não-->
                    <label>
                    Administrador:
                        <input type="checkbox" name="admin" value="1"
                        <?php echo ($usuario['admin']==1)?'checked':'';?>/>
                        
                    </label><br><br>


                   <button align="right"  type="submit">Inserir</button><br>
    
                </fieldset>
     </form>
                
                    
    </body>

</html>






    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>