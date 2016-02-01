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

<body>
<div id='cargando' style='display:none; position:absolute; top:0; bottom:0; left:0; right:0; background-color:black; opacity:0.8;'>
Cargando...</div>
<h1>RESTAURANT</h1>
<form style="display:block;">
	<label>Donde le gustaría comer??</label>
	 <select id="restaurante">
        <option>--Seleccione su Restaurante Ideal--</option>
        <?php
		$res =mysql_query('SELECT * FROM establecimiento '); 
		while($filares =mysql_fetch_array($res)){
			$esta= $filares['nombre_es'];
			/*$max= $filares['max_personas'];
			$in= $filares['inicio_atencion'];
			$fin= $filares['fin_atencion'];*/
			echo "<option>".$esta."</option>";
		}
		?>
    </select>
    
    <div style="display:none;">
    	<label>Seleccione Sucursal</label>
        <select id="cord">
        </select>
    </div>
</form>
<label>Ubicacion de sucursal</label><div id="mimapa" style="width:500px;height:300px;display:inline-block;">
</div>

<div id='horarioAtencion'>
	<label>Horario de atencion</label>
	<span></span>
</div>

<div>
    <label>Fecha de Orden</label>
    <input type="date" id="fecha"/>
</div>

<div>
    <label>Hora de Orden</label>
	<select id='horarioReserv'>
	</select>
</div>

<div>
	<label>Numero de Personas</label>
    <select id="mesaPara">
        <option>--Seleccione cuantos comeran--</option>
        
    </select>
</div>

<div>
	<label>Mesas Disponibles para cantidad de personas a reservar</label>
    <div class="mesas">
        <span class="mesa3"> Mesa 3</span>
        <span class="mesa4"> Mesa 4</span>
        <span class="mesa5"> Mesa 5</span>
        <span class="mesa1"> Mesa 1</span>
        <span class="mesa2"> Mesa 2</span>
        <span class="mesa5"> Mesa 5</span>
        <span class="mesa3"> Mesa 3</span>
        <span class="mesa2"> Mesa 2</span>
        <span class="mesa4"> Mesa 4</span>
        <span class="mesa1"> Mesa 1</span>
        <div class="msg"></div>
    </div>
    
</div>

<!---- -->
<form action="" method="post" id="reserva" style="display:none;">
<h1>DATOS DE USUARIO</h1>
<!-- Horario de atencion seria solo informacion segun sea el restaurante que se liste-->


<input type="submit" value="OK"/>
</form>

</body>
<script src="js/actions.js"></script>
</html>
