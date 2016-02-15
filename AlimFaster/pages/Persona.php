<?php

class Persona
{
	private $codigo_persona;
	private $cedula_identidad;
	private $nombre;
	private $apellido;
	private $fecha_nacimiento;
	private $estado_civil;
	private $genero;
	private $direccion_domicilio;
	private $telefono;
	
     function __construct$codigo_persona, $cedula_identidad , $nombre , $apellido , $fecha_nacimiento , $estado_civil , $genero,$direccion_domicilio ,$telefono) {
        $this->numero_factura = $numero_factura;
        $this->fecha = $fecha;
	    $this->hora = $hora;
		$this->codigo_pago = $codigo_pago;
		$this->codigo_cliente = $codigo_cliente;
		$this->subtotal = $subtotal;
		$this->descuento = $descuento;
		$this->iva = $iva;
		$this->total = $total;
     }
    
     function setNumero_factura($numero_factura){
       $this->numero_factura = $numero_factura;
     } 
     function getNumero_factura(){
       return $this->numero_factura;
     } 
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
	 function setHora($hora){
       $this->hora = $hora;
     } 
     function getHora(){
       return $this->hora;
	 } 
	 function setCodigo_pago($codigo_pago){
       $this->codigo_pago = $codigo_pago;
     } 
     function getCodigo_pago(){
       return $this->codigo_pago;
	 } 
	 function setCodigo_cliente($codigo_cliente){
       $this->codigo_cliente = $codigo_cliente;
     } 
     function getCodigo_cliente(){
       return $this->codigo_cliente;
	 } 
	 function setSubtotal($subtotal){
       $this->subtotal = $subtotal;
     } 
     function getSubtotal(){
       return $this->subtotal;
	 } 
	 function setDescuento($descuento){
       $this->descuento = $descuento;
     } 
     function getDescuento(){
       return $this->descuento;
	 } 
	 
	 function setIva($iva){
       $this->iva = $iva;
     } 
     function getIva(){
       return $this->iva;
	 } 
	 function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
	 } 
}

?>
