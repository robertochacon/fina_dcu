<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DCU</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
  <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="../plugins/leaflet/leaflet..css"> -->
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <script src="../plugins/jquery.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.js"></script>
  <script src="../plugins/leaflet/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="">
<!-- <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script> -->
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
    <form action="../controllers/buscarBuscador.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


<div class="container">
  
<div id="mapa"></div>

</div>


<style>
  #mapa { margin:auto; margin-top: 100px; width:90%; max-width: 400px; height: 300px;}
</style>

<script> 
  var mymap = L.map('mapa').setView([51.505, -0.09], 13);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
  }).addTo(mymap);

  L.marker([18.459581, -69.937438]).addTo(mymap)
    .bindPopup("<b>A&B Masters Escuela Dominicana de Alimentos y Bebidas</b>").openPopup();

  L.marker([18.472037, -69.939069]).addTo(mymap)
    .bindPopup("<b>Risk Escuela Culinaria</b>").openPopup();

  L.marker([18.472197, -69.900872]).addTo(mymap)
    .bindPopup("<b>Repostería Miriam Gautreaux</b>").openPopup();

  L.marker([18.473416, -69.888252]).addTo(mymap)
    .bindPopup("<b>Jacada Academy</b>").openPopup();
    
  L.marker([18.474561, -69.926795]).addTo(mymap)
    .bindPopup("<b>Escuela de Gastronomia Mariano Moreno</b>").openPopup();

  var popup = L.popup();
</script>

</body>
</html>