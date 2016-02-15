<?php

class Producto
{
    private $codigo_producto;
    private $descripcion;
	private $costo;
	private $pvp;
	private $utilidad;
	private $contenido_neto;
	private $peso_neto;
    
     function __construct($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$contenido_neto,$peso_neto) {
        $this->codigo_producto = $codigo_producto;
        $this->descripcion = $descripcion;
	    $this->costo = $costo;
		$this->pvp = $pvp;
		$this->utilidad = $utilidad;
		$this->contenido_neto = $contenido_neto;
		$this->peso_neto = $peso_neto;
     }
    
     function setCodigo_producto($codigo_producto){
       $this->codigo_producto = $codigo_producto;
     } 
     function getCodigo_producto(){
       return $this->codigo_producto;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
	 function setCosto($costo){
       $this->costo = $costo;
     } 
     function getCosto(){
       return $this->costo;
	 } 
	 function setPvp($pvp){
       $this->pvp = $pvp;
     } 
     function getPvp(){
       return $this->pvp;
	 } 
	 function setUtilidad($utilidad){
       $this->utilidad = $utilidad;
     } 
     function getUtilidad(){
       return $this->utilidad;
	 } 
	 function setContenido_neto($contenido_neto){
       $this->contenido_neto = $contenido_neto;
     } 
     function getContenido_neto(){
       return $this->contenido_neto;
	 } 
	 function setPeso_neto($peso_neto){
       $this->peso_neto = $peso_neto;
     } 
     function getPeso_neto(){
       return $this->peso_neto;
	 } 
}

?>
