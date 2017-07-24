<!DOCTYPE html>
<html>
<head>
	<title>Classificados - Login</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<!--<link rel="stylesheet" type="text/js" href="../js/jquery-3.2.1.min.js">

	<link rel="stylesheet" type="text/javascript" href="../bootstrap/js/bootstrap.min.js"
	>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortout icon" href="../img/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<div id="dvLogin">

		<div class="row">
			<div class="col-lg-12 alignCenter">

				<img src="../img/logoFundoClaro.png" alt="Logo Brasil Classificados">

			</div>
			<div class="clear"></div>
			<div class="borderBottom"></div>

			<div class="col-lg-12">
						<br>
 					 <div class="form-group">
   						 <label for="txtUsuario">Usuário</label>
  							<input type="email" class="form-control" id="txtUsuario" placeholder="Usuario">
					  </div>
					   <div class="form-group">
   						 <label for="txtSenha">Senha</label>
  							<input type="password" class="form-control" id="txtSenha" placeholder="********">
					  </div>
 					  <button type="submit" value="submit" class="btn btn-success">Entrar</button>
 					 
			</div>


		</div>


	</div>
 
<script type="text/javascript"></script>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>

<div class="container">
  <h2>Alert Methods</h2>
  <p>The <strong>close</strong> method closes the alert message.</p>
  <div class="alert alert-danger alert-dismissible" id="myAlert">
    <a href="#" class="close">&times;</a>
    <strong>Hey you!</strong> Try to close this alert message.
  </div>
</div>

<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});
</script>

</body>
</html>