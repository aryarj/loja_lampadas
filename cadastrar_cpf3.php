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
    
	
<h3 align="center">Por favor, preencha seus dados</h3>
<h5 align="center">Somente o complemento e o telefone não são obrigatórios</h5><br>

<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-8">
      <!--entrada de dados-->
	  <form method='POST' align="left"><font size="5">

                <label>
                CPF:
                    <input type="text" maxlength="11" name="cpf" placeholder="Somente números"/>
                </label>
                <?php if(isset($erros_validacao['cpf'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['cpf'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Primeiro nome:
                    <input type="text" required name="nome" placeholder="Nome"/>
                </label>
                <?php if(isset($erros_validacao['nome'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['nome'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Sobrenome:
                    <input type="text" required name="sobrenome" placeholder="Sobrenome"/>
                </label>
                <?php if(isset($erros_validacao['sobrenome'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['sobrenome'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Logradouro:
                    <input type="text" required name="logradouro" placeholder="rua, av, praça"/>
                </label>
                <?php if(isset($erros_validacao['logradouro'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['logradouro'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Número:
                    <input type="text" required name="numero" placeholder=""/>
                </label>
                <?php if(isset($erros_validacao['numero'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['numero'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Complemento:
                    <input type="text" name="complemento" placeholder="casa, torre, apt"/>
                </label>
                <?php if(isset($erros_validacao['complemento'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['complemento'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Cidade:
                    <input type="text" required name="cidade" placeholder=""/>
                </label>
                <?php if(isset($erros_validacao['cidade'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['cidade'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Estado (sigla: PR, SP, RJ . . .):
                    <input type="text" required name="estado" maxlength="2" size="2" placeholder=""/>
                </label>
                <?php if(isset($erros_validacao['estado'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['estado'];?>
                            </span>
                <?php endif;?><br>

				<label>
                CEP:
                    <input type="text" required maxlength="8" name="cep" placeholder="Somente números"/>
                </label>
                <?php if(isset($erros_validacao['cep'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['cep'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Telefone com DDD:
                    <input type="text" name="telefone" maxlength="10" placeholder="Somente números"/>
                </label>
                <?php if(isset($erros_validacao['telefone'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['telefone'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Celular com ddd:
                    <input type="text" required name="celular" maxlength="11" placeholder="Somente números"/>
                </label>
                <?php if(isset($erros_validacao['celular'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['celular'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Email:
                    <input type="email" required name="email" placeholder=""/>
                </label>
                <?php if(isset($erros_validacao['email'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['email'];?>
                            </span>
                <?php endif;?><br>

				<label>
                Senha (até 6 digitos):
                    <input type="password" required name="senha" maxlength="6" placeholder="numeros e/ou letras"/>
                </label>
                <?php if(isset($erros_validacao['senha'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['senha'];?>
                            </span>
                <?php endif;?><br>
				
				<label>
                Repita a senha:
                    <input type="password" required name="senha_confirmar" maxlength="6" placeholder="redigite a mesma senha"/>
                </label>
                <?php if(isset($erros_validacao['senha_confirmar'])):?>
                            <span class="erro" >
                <?php echo $erros_validacao['senha_confirmar'];?>
                            </span>
                <?php endif;?><br>
				
		<!--Confirmando os dados para registro-->
		<div align="center">
				<button type="submit" class="btn btn-info">Confirma</button><br/><br/>
		</div>
		</form>
	  
    </div>
    <div class="col">
      
    </div>
  </div>
</div>

<hr><br>

<?php
	                 // Se topdas as informações obrigatórias foram colocadas
                     if($cpf!='sem informação' && $nome!='sem informação' && $sobrenome!='sem informação' &&
					    $logradouro!='sem informação' && $numero!='sem informação' && $cidade!='sem informação' &&
                        $estado!='sem informação' && $cep!='sem informação' && $celular!='sem informação' &&
						$email!='sem informação' && $senha!='sem informação' && $senha_confirmar!='sem informação')
                        {
							// Se a senha e a confirmação são iguais
							if($senha!=$senha_confirmar){
							echo "<p>Atenção: senha digitada e a de confirmação não são iguais!</p>";
							}else{
							//echo "Se as informações estiverem corretas clique ";
						   //echo "<a href='cadastrar_cpf4.php' style='text-decoration:none; font-weight:bold;'><font size='4'>aqui</font></a><br>";
						  						  
								$_SESSION["cpf"] = $cpf;
								$_SESSION["nome"] = $nome;
								$_SESSION["sobrenome"] = $sobrenome;
								$_SESSION["logradouro"] = $logradouro;
								$_SESSION["numero"] = $numero;
								$_SESSION["complemento"] = $dados['complemento'];
								$_SESSION["cidade"]= $cidade;
								$_SESSION["estado"] = $estado;
								$_SESSION["cep"] = $cep;
								$_SESSION["telefone"] = $telefone;
								$_SESSION["celular"] = $celular;
								$_SESSION["email"] = $email;
								$_SESSION["senha"] = $senha;
						
							// enviando os dados para cadastramento em cadastrar_cpf4.php
								//header('location:cadastrar_cpf4.php');
								 $url='cadastrar_cpf4.php';
								 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                        }
					}
                    
                    ?> 




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>