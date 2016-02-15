<?php 
include_once('Detalle_factura.php');
include_once('Collector.php');

class Detalle_facturaDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM detalle_factura");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Detalle_factura($c{'secuencia'},$c{'codigo_producto'},$c{'cantidad'},$c{'precio_unitario'},$c{'precio_total'},$c{'servicio'},$c{'numero_factura'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	/*
	function createDemo($nombre) {    
		$insertrow = self::$db->insertRow("INSERT INTO clasedb.demo (iddemo, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
	}  

    function readDemos() {
		$rows = self::$db->getRows("SELECT * FROM demo ");        
		$arrayDemo= array();        
		foreach ($rows as $c){
		  $aux = new Demo($c{'iddemo'},$c{'nombre'});
		  array_push($arrayDemo, $aux);
		}
		return $arrayDemo;        
	}
  
	function updateDemo($id,$nombre) {    
		$insertrow = self::$db->updateRow("UPDATE clasedb.demo SET demo.nombre = ?  WHERE demo.iddemo = ? ", array( "{$nombre}",$id));
	}  
	*/
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM detalle_factura WHERE secuencia= ?", array("{$id}"));
	} 

}

?>
