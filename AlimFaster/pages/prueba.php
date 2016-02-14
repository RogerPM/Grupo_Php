<?php
	session_start();	
?>
﻿<!doctype html>
<html lang="es">
<HEAD>
<TITLE>Añadir Filas </TITLE>
 <SCRIPT language="javascript">

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
</HEAD>

<BODY>

<?php
include_once("ProductoDatos.php");
$id = 1;
$ProductoDatosObj = new ProductoDatos();
?>
     
     <TABLE id="dataTable" width="350px" border="1">
		<thead>
			<TR>
				<TH> Selección </TH>
				<TH> Cantidad </TH>
				<TH> Descripción </TH>
				<TH> Precio Unitario</TH>
				<TH> Precion Total </TH>
		  </TR>
		</thead>

		<tbody>
			<INPUT type="button" value="x" onclick="deleteRow('dataTable');"/> 
		
			<?php
			foreach ($ProductoDatosObj->consultaGeneral() as $c){
				/*echo "<div>";
				echo "Codigo: " .$c->getcodigo_producto() . "  Descripcion:  " .$c->getdescripcion() . "  Costo:  " .$c->getCosto() . "  Precio:  " .$c->getPvp() . "  Utilidad:  " .$c->getUtilidad() . "  Contenido_neto:  " .$c->getContenido_neto() . "  Peso_neto:  " .$c->getPeso_neto();
				echo "</div>";*/
			?>	
			  <TR>
					<TD><INPUT type="checkbox" NAME="chk"/></TD>
					<td><?php echo $c->getcodigo_producto(); ?> </td>
					<td><?php echo $c->getdescripcion(); ?></td>
					<td><?php echo $c->getCosto(); ?></td>
					<td><?php echo $c->getPvp(); ?></td>
			  </TR>
			<?php } ?>
			
		</tbody>
     </TABLE>

</BODY>

</html>