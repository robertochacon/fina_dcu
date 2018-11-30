<?php

include("../libs/conexion.php");

$titulo = @$_POST['titulo'];
$categoria = @$_POST['categoria'];
$descripcion = @$_POST['descripcion'];
$imagen = @$_FILES['imagen']['name'];
$fileImage = @$_FILES['imagen']['tmp_name'];
$video = @$_POST['video'];
$fecha = date("Y-m-d");


$ruta = "../img/recetas";
$ruta = $ruta."/".$imagen;
move_uploaded_file($fileImage, $ruta);


$sql = "INSERT INTO recetas(titulo,categoria,descripcion,imagen,video,fecha) VALUES
		 ('".$titulo."','".$categoria."','".$descripcion."','".$imagen."','".$video."','".$fecha."')";
$valid = Conexion::ejecutar($sql);
if ($valid) {
	// echo "good";
	header("Location:../views/recetas.php?m=true");
}else{
	// echo "bad";
	header("Location:../views/recetas.php?m=false");
}

?>