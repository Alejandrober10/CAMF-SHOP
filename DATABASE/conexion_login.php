<?php

    $mysqli = new mysqli('localhost', 'root', '','CLAMF');
    $mysqli -> set_charset("utf8");

	//obtenemos los valores del formulario
	$Usuario = $_POST['Usuario'];
	$Contraseña = $_POST['Contraseña'];

	//Obtiene la longitus de un string
	$req = (strlen($Usuario)*strlen($Contraseña)) or die("No se han llenado todos los campos");

	$consulta= "SELECT `Usuario`, `Contraseña` FROM `prueba` WHERE 1";
	$query=mysqli_query($mysqli,$consulta);
	$array=mysqli_fetch_array($query);

	if ($Usuario == $array[0]) {
  		if ($Contraseña==$array[1]) {
  			echo "Bienvenido";
  		}
  		else{
  			echo "Contraseña incorrecta";
  		}
	}
	else{
		echo "Usuario incorrecto";
	}

?>