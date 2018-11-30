<?php

include("../libs/conexion.php");

$receta_id = @$_POST['receta_id'];
$comentario = @$_POST['comentario'];
$fecha = date("Y-m-d");


$sql = "INSERT INTO comentarios(receta_id,comentario,fecha) VALUES ('".$receta_id."','".$comentario."','".$fecha."')";
$valid = Conexion::ejecutar($sql);
if ($valid) {
	// echo "good";
	header("Location:../views/detalleReceta.php?receta={$receta_id}");
}else{
	// echo "bad";
	header("Location:../views/detalleReceta.php?receta={$receta_id}");
}

?>