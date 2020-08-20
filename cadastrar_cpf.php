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

    <title>loja de lâmpadas</title>
	<style>
        .erro{
			color: red;
			font-size: 20px}
    </style>
  </head>
  <body>
    
	
	
	
<div class="alert alert-info" role="alert">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
<h2 align="center"><b>Cadastramento pessoa FÍSICA</b></h2>
</div>

</div>
<div align="center"> 
<?php
                    
					echo "<a href='index.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar para a Loja&nbsp;</a>";
                    echo "<a href='cadastrar_opcao.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Voltar&nbsp;</a>";
                    echo "&nbsp;&nbsp;";
					echo "<br>";
					
?>
</div>
<hr/>
<?php
// Deixando as entradas com uma informação qualquer, para não gerar erro
$dados=array(
            'cpf'=>'',
            'nome'=>'',
            'sobrenome'=>'',
            'logradouro'=>'',
            'numero'=>'',
            'complemento'=>'',
            'cidade'=>'',
			'estado'=>'',
			'cep'=>'',
			'telefone'=>'',
			'celular'=>'',
			'email'=>'',
			'senha'=>'',
			'senha_confirmar'=>''
            );

//Variável para armazenar erro de preenchimento
$erros_validacao=array();

if (isset($_POST['cpf']) && $_POST['cpf'] !='') {
    $dados = array();
	
	// cpf
    if (isset($_POST['cpf']) && ($_POST['cpf'])!=''){
        $dados['cpf']=$_POST['cpf'];
    }else{
        $erros_validacao['cpf']='O CPF é obrigatório';
    }
		
	// nome
    if (isset($_POST['nome']) && ($_POST['nome'])!=''){
        $dados['nome']=$_POST['nome'];
    }else{
        $erros_validacao['nome']='O nome é obrigatório';
    }
	
	// sobrenome
    if (isset($_POST['sobrenome']) && ($_POST['sobrenome'])!=''){
        $dados['sobrenome']=$_POST['sobrenome'];
    }else{
        $erros_validacao['sobrenome']='O sobrenome é obrigatório';
    }
	
	// logradouro
    if (isset($_POST['logradouro']) && ($_POST['logradouro'])!=''){
        $dados['logradouro']=$_POST['logradouro'];
    }else{
        $erros_validacao['logradouro']='O logradouro é obrigatório';
    }
	
	// numero
    if (isset($_POST['numero']) && ($_POST['numero'])!=''){
        $dados['numero']=$_POST['numero'];
    }else{
        $erros_validacao['numero']='O numero é obrigatório';
    }
	
	// complemento
    if (isset($_POST['complemento']) && ($_POST['complemento'])!=''){
        $dados['complemento']=$_POST['complemento'];
    }else{
         $dados['complemento']='';
    }
	
	// cidade
    if (isset($_POST['cidade']) && ($_POST['cidade'])!=''){
        $dados['cidade']=$_POST['cidade'];
    }else{
         $erros_validacao['cidade']='A cidade é obrigatória';
    }
	
	// estado
    if (isset($_POST['estado']) && ($_POST['estado'])!=''){
        $dados['estado']=$_POST['estado'];
    }else{
        $erros_validacao['estado']='O estado é obrigatório';
    }
	
	// cep
    if (isset($_POST['cep']) && ($_POST['cep'])!=''){
        $dados['cep']=$_POST['cep'];
    }else{
        $erros_validacao['cep']='O CEP é obrigatório';
    }
	
	// telefone
    if (isset($_POST['telefone']) && ($_POST['telefone'])!=''){
        $dados['telefone']=$_POST['telefone'];
    }else{
        $erros_validacao['telefone']='';
    }
	
	// celular
    if (isset($_POST['celular']) && ($_POST['celular'])!=''){
        $dados['celular']=$_POST['celular'];
    }else{
        $erros_validacao['celular']='O celular é obrigatório';
    }
	
	// email
    if (isset($_POST['email']) && ($_POST['email'])!=''){
        $dados['email']=$_POST['email'];
    }else{
        $erros_validacao['email']='O email é obrigatório';
    }
	
	// senha
    if (isset($_POST['senha']) && ($_POST['senha'])!=''){
        $dados['senha']=base64_encode($_POST["senha"]);
    }else{
        $erros_validacao['senha']='A senha é obrigatória';
    }
	
	// senha_confirmar
    if (isset($_POST['senha_confirmar']) && ($_POST['senha_confirmar'])!=''){
        $dados['senha_confirmar']=base64_encode($_POST['senha_confirmar']);
    }else{
        $erros_validacao['senha_confirmar']='A confirmação da senha é obrigatória';
    }
	// armazenamento dos dados em um vetor
	$transporte[]=$dados;
}
		//criando um vetor vazio
		$lista_dados[]=array();
		
		//Verificando se há informação no vetor $transporte
		// havendo essas informações passam para o vetor $lista_dados
		if(isset($transporte)){
				$lista_dados=$transporte;
			}else{
				$lista_dados=array();
			}

			include "cadastrar_cpf2.php";



?>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>