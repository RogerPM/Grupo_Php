<?php
	session_start();
?>
?<!doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Edwin Estacio, edwindavid.11@hotmail.com" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas,Confirmacion">
<meta name="description" content="Confirmacion de pedidos del menu personalizado de comidas gourmet" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="confirmacion de reserva de pedidos gourmet, confirmacion reservas de pedidos y pagos online de restaurantes gourmet, confirmacion de la personalizacion de pedidos de menus gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">


<link href="../css/full-slider.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirmacion de Pedido - Restaurante</title>
 <SCRIPT language="javascript">
			function Eliminar (i) {
				document.getElementsByTagName("table")[0].setAttribute("id","tableid");
				document.getElementById("tableid").deleteRow(i);
			}

          function deleteRow(tableID) {

               try {

               var table = document.getElementById(tableID);

               var rowCount = table.rows.length;

 

               for(var i=0; i<rowCount; i++) {

                    var row = table.rows[i];

                    var chkbox = row.cells[0].childNodes[0];

                    if(null != chkbox && true == chkbox.checked) {

                         table.deleteRow(i);

                         rowCount--;

                         i--;

                    }

               }

               }catch(e) {

                    alert(e);

               }

          }

 

     </SCRIPT>
</head>
<body>
<?php
include_once("Detalle_facturaDatos.php");
$id = 1;
$Detalle_facturaDatosObj = new Detalle_facturaDatos();
?>

<!-- boostrap -->
	<div class="jumbotron">
	<div class="bannerSuperior">
		
			<!-- Logo Y Texto Banner  -->
<div class="jumbotron">
<div class="banImgText">
				 <div class="col-md-8">
				<img src="../img/logotipo.png" title="Restaurante1"  height="100" width="240" alt="px">
				</div>
				<div class="col-md-4">
				<h1>Restaurant</h1>
				</div>
</div>
				</div>
				
<!-- Botones  -->
<div class="jumbotron">
<div class="botones">

				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="segunda.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>


</div>
</div>
		
	</div>
	</div>
	<div class="fondoPantalla" style ="width = 100%">
		<div class="container">
		<!--INPUT type="button" value="Delete Row" onclick="deleteRow('table table-striped-edwin');" /-->
		<table class="table table-striped-edwin"  BORDER=10>
				<thead class="CaberaSuperiorTablaStriped">
					<tr ALIGN=center>
						<th>Eliminar</th>
						<th style="display:none">Codigo</th>
						<th>Cantida</th>
						<th>Descripción</th>
						<th>Precio Unitario</th>
						<th>Precio Total</th>
					</tr>
				</thead>
				<tbody class="fuente">
					<?php
					foreach ($Detalle_facturaDatosObj->consultaGeneral() as $c){
						
					?>
					<tr>					
						<!--TD><INPUT type="checkbox" NAME="chk"/></TD-->
						<td><input type="button" value="x" onclick="Eliminar(this.parentNode.parentNode.rowIndex)"/></td>
						<td style="display:none"><?php echo $c->getSecuencia(); ?> </td>
						<td><?php echo $c->getCantidad(); ?> </td>
						<td>Sopa de Camaron</td>
						<td><?php echo $c->getPrecio_unitario(); ?></td>
						<td><?php echo $c->getPrecio_total(); ?></td>
					</Tr>
					<?php } ?>
					
					<tr>
						<!--td> </td-->
						<!--td> </td-->
						<td colspan="3">TOTAL</td>
						<!--td> </td-->
						<td colspan="2">$59,50 </td>		
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="divFormBoton">
				<a href="cuarta.php">
					<input class="objetoConfirmarPedido" type="submit" value="Confirmar Pedido"/>
				</a>
			</div>
		</div>
		<div class="divEspacioEnBlanco"> </div> 
	</div>
	<div class="footer">
	Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
	</div>
</body>

</html>
