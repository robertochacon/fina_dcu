<?php include("layout/header.php");?>

<div class="container">
<div class="row categorias">
<div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:10px;">
<h2 class="text-center">Agregar Categoria</h2>
<form action="../controllers/guardarCategoria.php" method="post">
  <div class="form-group">
    <label for="Categoria">Categoria</label>
    <input type="text" class="form-control" id="Categoria" name="categoria" placeholder="Categoria" required="">
  </div>
  <input type="submit" value="Guardar" class="btn btn-success">
</form>
<div id="mensaje">
  <?php 
  if(isset($_GET['m'])){
    if ($_GET['m'] == "true") {
      echo "<h2 class='text-center text-success'>Guardado Correctamente</h2>";
    }else{
    echo "<h2 class='text-center text-danger'>Problemas al guardar la informacion</h2>";
    }
  }
  ?>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-6" style="">
	<div class="categorias_show">
		<h2 class="text-center">Todas las categorias</h2>
		<div class="container">
		<?php
		include("../libs/conexion.php");
		$sql = "SELECT * FROM categoria";
		$valid = Conexion::consultar($sql);
		foreach ($valid as $key) {
			echo "<h5>".$key['nombre']."</h5><hr>";
		}
		?>
		</div>
	</div>
</div>
</div>
</div>


<?php include("layout/footer.php");?>