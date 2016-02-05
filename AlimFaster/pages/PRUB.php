<?php
include_once("ProductoDatos.php");

$ProductoDatosobj = new ProductoDatos();

foreach ($ProductoDatosobj->consultaGeneral() as $x){
	echo "<div>";
	echo "Codigo: " .$x->getCodigo_producto(). "Descripcion: " .$x->getDescripcion(). "Costo: " .$x->getCosto(). "Precio: " .$x->getPvp(). "Utilidad: " .$x->getUtilidad(). "Contenido Neto: " .$x->getContenido_neto(). "Peso Neto: " .$x->getPeso_neto();
	echo "</div>"
}

?>