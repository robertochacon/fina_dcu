<?php

include("../libs/conexion.php");
$sql = "SELECT * FROM recetas";
$valid = Conexion::consultar($sql);
$datos = array();
// $datos['datos'] = array();
foreach ($valid as $key) {

	$items = array(
		"id" => $key['id'],
		"titulo" => $key['titulo'],
		"descripcion" => $key['descripcion'],
		"imagen" => "http://testing/img/recetas/".$key['imagen'],
		"video" => $key['video'],
		"fecha" => $key['fecha']
	);

	array_push($datos, $items);

}

echo json_encode($datos);

?>