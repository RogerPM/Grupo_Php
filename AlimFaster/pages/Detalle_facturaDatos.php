 <?php 
include_once('Detalle_factura.php');
include_once('Collector.php');

class  Detalle_facturaDatos extends Collector 
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

}

?>