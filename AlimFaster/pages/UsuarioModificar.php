<?php

	include_once("PerfilDatos.php");
	$PerfilObj = new PerfilDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['codigo']) ||empty($_POST['descripcion']) ||empty($_POST['registro']) ) {

			echo "Existen campos vacios para actualizar";
			echo "<meta http-equiv='Refresh' content='2;registrar_pagina.php'>";			
			
		}
		
		else {
			$ced=$_POST["cedula_identidad"];
			$nom=$_POST["nombre"];
			$ape=$_POST["apellido"];
			$use=$_POST["usuario"];
			$esc=$_POST["estado_civil"];
			$gen=$_POST["genero"];
			$dom=$_POST["domicilio"];
			$fono=$_POST["telefono"];

			$UsuarioDatosObj->insertarPersona($ced, $nom, $ape, $use, $esc, $gen, $dom, $fono);
	
			//insertamos usuario
			
			$us=$_POST["usuario"];
			$passw=$_POST["password"];

			$UsuarioDatosObj->insertarUsuario($us, $passw);
			
			echo "El Usuario se ha agregado correctamente.";
		}
		
		
		
	}
?>