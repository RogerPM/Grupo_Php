<?php

	include_once('UsuarioDatos.php');
	$UsuarioDatosObj = new UsuarioDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['usuario']) ||empty($_POST['password']) ) {
			echo "Por favor ingrese los datos ";			
			
		}
			
			$ced=$_POST["cedula_identidad"];
			$nom=$_POST["nombre"];
			$ape=$_POST["apellido"];
			$esc=$_POST["estado_civil"];
			$gen=$_POST["genero"];
			$dom=$_POST["domicilio"];
			$fono=$_POST["telefono"];

			$UsuarioDatosObj->insertarPersona($ced, $nom, $ape, $esc, $gen, $dom, $fono);
	
			//insertamos usuario
			
			$us=$_POST["usuario"];
			$passw=$_POST["password"];

			$UsuarioDatosObj->insertarUsuario($us, $passw);
			
			echo "El Usuario se ha agregado correctamente.";
		
}
?>