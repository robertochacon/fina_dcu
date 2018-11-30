<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<script src="../plugins/jquery.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.js"></script>
</head>
<body class="bg-dark">

<div class="container">

	<div class="col-sm-12 col-md-6 mt-10" style="background-color:#f1f1f1; margin: auto;margin-top: 50px;">
		<div class="container">
		<form id="login-form" action="../controllers/userLogin_controller.php" method="post" style="">
			<h2 class="text-center text-success">Iniciar sesion</h2>
			<center>
			<img class="text-center" src="../img/user.png" style="margin:auto;width:200px;padding:10px;"></center>
			<div class="form-group">
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" value="">
			</div>
			<div class="form-group">
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Clave">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-12 mb-5">
						<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-success" value="Inicar"><hr>
						<a href="../index.php" class="form-control btn btn-primary">Pagina principal</a>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>

</div>

</body>
</html>