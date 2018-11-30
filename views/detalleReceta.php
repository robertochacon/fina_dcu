<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


<div class="container" style="margin-top:80px;">

<div class="row" style="margin-top:20px;">

<?php 
include("../libs/conexion.php");

if (isset($_GET['receta'])) {
   $receta = $_GET['receta'];

$sql ="SELECT * FROM recetas WHERE id = '{$receta}'";
$datos = Conexion::consultar($sql);

foreach($datos as $items){ ?>

<div class="col-sm-12 col-md-7 col-lg-7">
  <div class="card recetas_item" style="width:100%">
      <div class="container" style="margin-top:10px;">
        <div class="row">
        <div class="col-md-6">
          <h4 class="card-title"><?= "<b>Tema:</b> ".$items['titulo']?></h4>
        </div>
        <div class="col-md-6">
          <p class="card-title text-right"><?=$items['fecha']?></p>
        </div>
        </div>
      </div>
      <div class="container">
          <img class="card-img-top" src="../img/recetas/<?=$items['imagen']?>" alt="Card image">
      </div>
    <div class="card-body">  
      <p class="card-text"><?= $items['descripcion']; ?></p>
      <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" id="wa" data-toggle="modal" data-target="#exampleModal">
          Ver video
        </button>
      </div>
    </div>    
  </div>
</div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $items['titulo'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?= $items['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="col-sm-12 col-md-5 col-lg-5" style="height:80vh;">
  <h3 class="text-warning">Comentarios</h3>
  <div class="comentarios">

    <?php
      if (isset($_GET['receta'])) {

         $receta = $_GET['receta'];
         $sql ="SELECT * FROM comentarios WHERE receta_id = '{$receta}'";
         $datos = Conexion::consultar($sql);

      foreach($datos as $items){ ?>
          
        <div class="container">
          <div class="row">
              <div class="col-sm-8 col-md-8 col-lg-8">
                <img src="../img/mensaje.png" style="width:40px;margin-right:5px;"><b><i class="text-right"><?=$items['comentario'];?></i></b>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 text-right">
                <i><?=$items['fecha'];?></i>
              </div>
          </div>
        </div><hr>

      <?php } }else{echo "<h2>No hay comentarios</h2>";}?>

  </div>
  <form action="../controllers/guardarComentario.php" method="post">
    <div class="form-group">
      <input type="hidden" name="receta_id" value="<?=$_GET['receta'];?>">
      <label for="descripcion">Comentarios</label>
      <textarea id="ckeditor" name="comentario" class="form-control" placeholder="comentario..." rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn-outline-warning" name="">
  </form>
</div>

<?php } }else{ ?>
  <h1 style="color: black;">No hay nada</h1>
<?php } ?>

</div>
</div>

<script src="../plugins/jquery.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

</body>
</html>