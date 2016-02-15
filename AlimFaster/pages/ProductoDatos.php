<?php 
include_once('Producto.php');
include_once('Collector.php');

class ProductoDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM producto");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Producto($c{'codigo_producto'},$c{'descripcion'},$c{'costo'},$c{'pvp'},$c{'utilidad'},$c{'contenido_neto'},$c{'peso_neto'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function ConsultaEspecifica($id) {
		$row = self::$db->getRows("SELECT * FROM producto where codigo_producto= ? ", array("{$id}")); 
		$ObjDemo = new Producto($row[0]{'codigo_producto'},$row[0]{'descripcion'});
		return $ObjDemo;
	  }

	function consultaEspecific($id){
		$rows = self::$db->getRows("SELECT * FROM producto WHERE codigo_producto= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Producto($c{'codigo_producto'},$c{'descripcion'},$c{'costo'},$c{'pvp'},$c{'utilidad'},$c{'contenido_neto'},$c{'peso_neto'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
}

?>
