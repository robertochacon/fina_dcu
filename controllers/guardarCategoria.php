<?php

include("../libs/conexion.php");

$categoria = @$_POST['categoria'];


$sql = "INSERT INTO categoria(nombre) VALUES ('".$categoria."')";
$valid = Conexion::ejecutar($sql);
if ($valid) {
	// echo "good";
	header("Location:../views/categorias.php?m=true");
}else{
	// echo "bad";
	header("Location:../views/categorias.php?m=false");
}

?>