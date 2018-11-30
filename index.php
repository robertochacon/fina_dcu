<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="plugins/jquery.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.js"></script>
</head>
<body>



<nav class="navbar navbar-expand-lg menuFuera animated fadeInDown">
  <a class="navbar-brand text-success" href="index.php">BabyRecests</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown"></li>
    </ul>
    <form action="controllers/buscarBuscador.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


<div class="container" style="margin-top:80px;">

<center>
    <form action="controllers/bucarCategoria.php" method="post" class="form-inline text-center center">
       <select class="form-control" name="categoria" id="categoria">
	      <?php
	      include("libs/conexion.php");
	      $sql = "SELECT * FROM categoria";
	      $valid = Conexion::consultar($sql);
	      foreach ($valid as $key) {
	        echo "<option value='{$key['id']}'>".$key['nombre']."</option>";
	      }
	      ?>
	    </select>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left:10px;">Buscar por categoria</button>
    	<a href="views/mapa.php" class="btn btn-outline-primary" style="margin-left:10px;">Escuelas de Recetas!</a>
    	<a href="views/login.php" class="btn btn-outline-warning" style="margin-left:10px;">Login</a>
    </form>
</center>

<div class="row" style="margin-top:20px;">

<?php 

if (isset($_GET['categoria'])) {

	$categoria = $_GET['categoria'];
	$sql ="SELECT * FROM categoria WHERE id = '{$categoria}'";
	$datos = Conexion::consultar($sql);

	foreach ($datos as $key) {
		$sql ="SELECT * FROM recetas WHERE categoria = '{$key['id']}' order by id desc";
		$datos = Conexion::consultar($sql);
	}

}else if (isset($_GET['buscar'])) {

	$buscar = $_GET['buscar'];
	$sql ="SELECT * FROM recetas WHERE titulo LIKE '%{$buscar}%' OR descripcion LIKE '%{$buscar}%' order by id desc";
	$datos = Conexion::consultar($sql);


}else{

	$sql ="SELECT * FROM recetas order by id desc";
	$datos = Conexion::consultar($sql);

}

if (count($datos) == null) {
	echo "<h1 class='text-white'>Busqueda no encontrada :(</h1>";
}

foreach($datos as $items){ ?>

<div class="col-sm-12 col-md-6 col-lg-3 animated fadeIn" style="margin-top: 20px;">
	<div class="card recetas_item" style="width:100%">
	  <img class="card-img-top" src="img/recetas/<?=$items['imagen']?>" alt="Card image" style="height:180px;">
	  <div class="card-body">
	    <h5 class="card-title"><?= substr($items['titulo'],0,20)."...." ?></h5>
	    <p class="card-text"><?= substr($items['descripcion'],0,50)." ....." ?></p>
	    <a href="views/detalleReceta.php?receta=<?=$items['id']?>" class="btn btn-outline-primary">Detalles</a>
	  </div>
	</div>
</div>

<?php }?>

</div>
</div>



<script>
	$('#myDropdown').on('show.bs.dropdown', function () {
  // do something…
})

</script>

</body>
</html>