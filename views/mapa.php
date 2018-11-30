<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script src="../plugins/jquery.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg menuFuera">
  <a class="navbar-brand text-success" href="../index.php">BabyRecests</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown"></li>
    </ul>
    <form action="../controllers/buscarBuscador.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>



</body>
</html>