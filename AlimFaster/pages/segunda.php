<?php require_once('php/conexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyABcvzwpua9QIgDkzdG_afvS0IHC40g_Gs"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/initmap.js"></script>
<title>Consulta y Reservacion en restaurante</title>
<link href="css/lis.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="firstInitialize()">
<div id='cargando' style='display:none; position:absolute; top:0; bottom:0; left:0; right:0; background-color:black; opacity:0.8;'>
Cargando...</div>
<h1>RESTAURANT</h1>
<ul>
	<li>Entrada</li>
	<li>Sopa</li>
	<li>Plato Fuerte</li>
	<li>Bebida</li>
</ul>
</body>
<script src="js/actions.js"></script>
</html>