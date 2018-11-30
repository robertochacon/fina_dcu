<?php include("layout/header.php");?>

<div class="col-md-8 recetas">
<h2 class="text-center">Agregar Receta</h2>
<!-- <form action="../controllers/guardarReceta.php" method="post" enctype="multipart/form-data"> -->
<form action="../controllers/guardarReceta.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" required="">
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" name="categoria" id="categoria" required="">
      <?php
      include("../libs/conexion.php");
      $sql = "SELECT * FROM categoria";
      $valid = Conexion::consultar($sql);
      foreach ($valid as $key) {
        echo "<option value='{$key['id']}'>".$key['nombre']."</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea id="ckeditor" name="descripcion" class="form-control" id="descripcion" rows="3" required=""></textarea>
  </div>
  <input type="file" name="imagen" class="form-control" required="">
  <br>
  <div class="form-group">
    <label for="video">Video</label>
    <input type="text" class="form-control" name="video" id="video" placeholder="Link del video" required="">
  </div>
  <br>
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



<?php include("layout/footer.php");?>
