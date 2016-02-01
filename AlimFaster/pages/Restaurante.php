<?php

class Restaurante
{

    private $codigo_restaurante;
    private $codigo_sucursal;
	private $codigo_reservacion;
    private $razon_social;
	private $telefono;
    private $correo_electronico;
	private $autorizacion_sri;
    private $autorizacion_fecha;
	private $telefax;
    private $telefono_movil;
	private $nombre_imagen;
	
    
     function __construct($codigo_restaurante, $codigo_sucursal, $codigo_reservacion, $razon_social, $telefono, $correo_electronico, $autorizacion_sri, $autorizacion_fecha,$telefax,$telefono_movil,$nombre_imagen) {
       $this->idRestaurante = $codigo_restaurante;
	   $this->idSucursal = $codigo_sucursal;
	   $this->idReservacion = $codigo_reservacion;
	   $this->razonSocial = $razon_social;
	   $this->telefono = $telefono;
	   $this->correoElectronico = $correo_electronico;
	   $this->autorizacionSri = $autorizacion_sri;
	   $this->autorizacionFecha = $autorizacion_fecha;
	   $this->telefax = $telefax;
       $this->telefonoMovil = $telefono_movil;
	   $this->nombreImagen = $nombre_imagen;
     }
	 
	  function __construct($codigo_restaurante, $codigo_sucursal, $codigo_reservacion, $razon_social, $nombre_imagen) {
       $this->idRestaurante = $codigo_restaurante;
	   $this->idSucursal = $codigo_sucursal;
	   $this->idReservacion = $codigo_reservacion;
	   $this->razonSocial = $razon_social;
	   $this->nombreImagen = $nombre_imagen;
     }
	 
   public function getCodigo_restaurante(){
		return $this->codigo_restaurante;
	}

	public function setCodigo_restaurante($codigo_restaurante){
		$this->codigo_restaurante = $codigo_restaurante;
	}

	public function getCodigo_sucursal(){
		return $this->codigo_sucursal;
	}

	public function setCodigo_sucursal($codigo_sucursal){
		$this->codigo_sucursal = $codigo_sucursal;
	}

	public function getCodigo_reservacion(){
		return $this->codigo_reservacion;
	}

	public function setCodigo_reservacion($codigo_reservacion){
		$this->codigo_reservacion = $codigo_reservacion;
	}

	public function getRazon_social(){
		return $this->razon_social;
	}

	public function setRazon_social($razon_social){
		$this->razon_social = $razon_social;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getCorreo_electronico(){
		return $this->correo_electronico;
	}

	public function setCorreo_electronico($correo_electronico){
		$this->correo_electronico = $correo_electronico;
	}

	public function getAutorizacion_sri(){
		return $this->autorizacion_sri;
	}

	public function setAutorizacion_sri($autorizacion_sri){
		$this->autorizacion_sri = $autorizacion_sri;
	}

	public function getAutorizacion_fecha(){
		return $this->autorizacion_fecha;
	}

	public function setAutorizacion_fecha($autorizacion_fecha){
		$this->autorizacion_fecha = $autorizacion_fecha;
	}

	public function getTelefax(){
		return $this->telefax;
	}

	public function setTelefax($telefax){
		$this->telefax = $telefax;
	}

	public function getTelefono_movil(){
		return $this->telefono_movil;
	}

	public function setTelefono_movil($telefono_movil){
		$this->telefono_movil = $telefono_movil;
	}

	public function getNombre_imagen(){
		return $this->nombre_imagen;
	}

	public function setNombre_imagen($nombre_imagen){
		$this->nombre_imagen = $nombre_imagen;
	}
}

?>
