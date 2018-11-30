<?php

include("../libs/conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$valid = Conexion::login($usuario,$clave);

if ($valid) {
	header("Location: ../views/main.php");
}else{
	header("Location: ../index.php");
}


?>