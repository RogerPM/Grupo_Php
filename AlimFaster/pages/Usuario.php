<?php

class Usuario
{

    private $codigo_usuario;
    private $contrasena;
    
	
    
     function __construct($codigo_restaurante, $contraseña) 
     {
	   $this->codigo = $codigo_restaurante;
	   $this->contrasena = $contrasena;
     }
	 
	 
	 
   	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getContrasena()
	{
		return $this->contrasena;
	}

	public function setContrasena($contrasena)
	{
		$this->contrasena = $contrasena;
	}
}

?>
