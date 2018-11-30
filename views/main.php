<?php include("layout/header.php");?>


<div class="container">
<div class="row" style="margin-top:20px;">

<?php 
include("../libs/conexion.php");

	$sql ="SELECT * FROM recetas order by id desc limit 8";
	$datos = Conexion::consultar($sql);

if (count($datos) == null) {
	echo "<h1 class='text-white'>Busqueda no encontrada :(</h1>";
}

foreach($datos as $items){ ?>

<div class="col-sm-12 col-md-6 col-lg-3">
	<div class="card recetas_item" style="width:100%">
	  <img class="card-img-top" src="../img/recetas/<?=$items['imagen']?>" alt="Card image" style="height:180px;">
	  <div class="card-body">
	    <h5 class="card-title"><?= $items['titulo']; ?></h5>
	    <p class="card-text"><?= $items['descripcion']; ?></p>
	  </div>
	</div>
</div>

<?php }?>

</div>
</div>
</div>


<?php include("layout/footer.php");?>