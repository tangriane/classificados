 <!DOCTYPE html>
<html>
<head>
	<title>Classificados - Painel</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/js" href="../js/jquery-3.2.1.min.js">

	<link rel="stylesheet" type="text/javascript" href="../bootstrap/js/bootstrap.min.js"
	>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortout icon" href="../img/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<div id="dvPainel" class="centralizada">
		<div class="row">
			<div class="col-lg-12" id="dvTopo">
				<div id="dvlogoTopo" class="alignCenter">
						<a href="painel.php"></a><img src="../img/logoFundoClaro.png" alt="Logo Brasil Classificados"/>
				</div>
				  <!--CONSTRUÇÃO DO MENU-->
			<div id="dvMenuTopo" class="alignCenter">
				<ul id="ulMenu">
					
					<li>
						<a href="painel.php">Inicio</a>
					</li>

					<li>
						<a href="?pagina=usuario">Usuario</a>
					</li>

					<li>
						<a href="?pagina=classificado">Classificados</a>
					</li>

					<li>
						<a href="?pagina=categoria">Categoria</a>
					</li>
					<li>
						<a href="?pagina=contato">Contato</a>
					</li>
					<li>
						<a href="">SAIR</a>
					</li>
					

					</ul>
				</div>
					<div class="clear"></div>	
			</div>
		</div>

		<br/>
		  <!--CHAMA AS PÁGINAS DO MENU-->
				<div class="row">
					<div class="col-lg-12" id="dvConteudo">
					<?php 

						require_once("../Util/RequestPage.php");

					 ?>
				<div class="clear"></div>	
					</div>	
				
			   </div>

			  
		
		</div>
	 <!--RODAPÉ-->
	 				 <br/>
			   <div id="dvRodape"  class="col-lg-12">
			   	<div class="centralizada">
			   		<div class="col-lg-6 col-xs-12"  >
			   		<p>&copy; Brasil XClassificaos - Todos os direitos reservados</p>
			   		</div>

			   		<div class="col-lg-6 col-xs-12"  >
			   		<p><a href="#">Facebook</a></p> <br/>
			   		<p><a href="#">Twitter</a></p> <br/>
			   		<p><a href="#">Youtube</a></p> <br/>
			   		<p><a href="#">Instagram</a></p> <br/>
			   		</div>
			   	 </div>
			
			   </div>
	</body>
</html>