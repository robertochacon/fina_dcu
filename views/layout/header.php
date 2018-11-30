<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:../index.php");
}else{?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../plugins/ckeditor/contents.css">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script src="../plugins/jquery.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.js"></script>
	<script src="../plugins/ckeditor/ckeditor.js"></script>
</head>
<body>	

<header>
<input type="checkbox" id="btn">
<label for="btn"><img src="../img/menu.png"></label>
	<ul class="menu">
		<li><a href="main.php">Inicio</a></li>
		<li><a href="recetas.php">Recetas</a></li>
		<li><a href="categorias.php">Categorias</a></li>
		<li><a href="../controllers/salir.php">Salir</a></li>
	</ul>
</header>


<?php }?>