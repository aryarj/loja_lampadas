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
        body{
		font-size:18px;
		font-style: normal;		
		}
		.font{font-size:20px
				font-weight:bold}
        p { text-align: center;
        	margin: 20px 40px 20px 40px}
		
        ul{text-align: justify;
        	margin: 20px 40px 20px 40px}
			
        body {
		background-color: rgb(200,255,255);
		}
		
		
		
        img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		<!--.bg{background-color: green;}-->
		.bold{
			font-weight: bold;
			font-size: 20px}
		
		.underline { text-decoration: underline;
					font-weight: bold;
		 }
		h1{text-align: center;
		}
		h2{text-align: center;
		}  
		h3{text-align: center;
		}  
		h4{text-align: right;
		}    
        </style>
  </head>
  <body>
    
	
<div class="alert alert-info" role="alert" align="center">
  <h1 align="center"><b>Acesa</b></h1>
<h2 align="center"><b>A sua loja de lâmpadas</b></h2>
</div>
<div align=right>
<a href='restrito_entrada.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Acesso restrito&nbsp;</a>
</div>
<div align=center>
<?php
                        if(!isset($_SESSION["user"])){
							echo "Olá! Para entrar ou se cadastrar clique";
							echo "<a href='entrada.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;aqui&nbsp;</a>";
							echo "<br>";
						}else{
							echo "Olá, ";
							echo $_SESSION["user"];
							echo "!";
							echo "&nbsp&nbsp&nbsp";
							echo "<a href='venda_carrinho.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Carrinho de compras&nbsp;</a>";
							echo "&nbsp";
							echo "<a href='venda_historico.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Histórico de Compras&nbsp;</a>";
							echo "&nbsp";
							echo "<a href='sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
							
						}
								
					
?>

<hr/>


<!--Mostruário de produtos-->
<div class="album py-5 ">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
				<!--<img src="Ary_5mar2.jpg" alt="Minha foto" width="200">-->
				<img src="bulbo_led.jpg" alt="da internet" width="220">
                <div class="card-body">
                  <p class="card-text">Lâmpada de bulbo led 25 w 110/220 V</p>
                  <p class="card-text">R$ 24,99</p>
				  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=1'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
					  <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
					  <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
					<!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
				<br><img src="vela_led.jpg" alt="da internet" width="170"><br>
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Lâmpada vela com soquete 9 W 110/220 V</p>
				  <p class="card-text">R$ 15,99</p>
                  <div "align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=2'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
				<br><img src="vela_led2.jpg" alt="da internet" width="250"><br>
                <div class="card-body">
                  <p class="card-text">Lâmpada vela 9 W 110/220 V</p>
				  <p class="card-text">R$ 9,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=9'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="lampada_4w_12v.jpg" alt="da internet" width="250"><br>
				<div class="card-body">
                  <p class="card-text">Lâmpada miniaura 4 W 12 V</p>
				  <p class="card-text">R$ 4,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=3'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="lampada_halogena.jpg" alt="da internet" width="200">
				<div class="card-body">
                  <p class="card-text">Lâmpada halôgena 15 W 110/220 V</p>
				  <p class="card-text">R$ 14,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=4'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="tubular_led.jpg" alt="da internet" width="200">
				<div class="card-body">
                  <p class="card-text">Lâmpada tubular led 9 W 110/220 V</p>
				  <p class="card-text">R$ 22,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=5'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="lampada_pelo_celular.jpg" alt="da internet" width="200">
				<div class="card-body">
                  <p class="card-text">Lâmpada led 20 W 110/220 V com controle de luminosidade</p>
				  <p class="card-text">R$ 29,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=6'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="lampada_pelo_camera.jpg" alt="da internet" width="150"><br>
				<div class="card-body">
                  <p class="card-text">Lâmpada led 25 W 110/220 V com câmera</p>
				  <p class="card-text">R$ 199,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=7'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                <br><img src="soquete_sensor_presenca.jpg" alt="da internet" width="200"><br>
				<div class="card-body">
                  <p class="card-text">Sensor de presença de soquete</p>
				  <p class="card-text">R$ 9,99</p>
                  <div class="align-items-center">
                    <!--<div class="btn-group">-->
					<?php
					  echo "<a href='venda.php?id_prod=8'><button type='submit' class='btn btn-info'>Comprar</button></a>";
					?>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>-->
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>-->
                    <!--</div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao topo</a>
        </p>
        
      </div>
	  </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>