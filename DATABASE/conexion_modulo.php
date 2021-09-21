<?php

    $mysqli = new mysqli('localhost', 'root', '','CLAMF');
    $mysqli -> set_charset("utf8");

	//obtenemos los valores del formulario
	$Usuario = $_POST['Usuario'];
	$Contraseña = $_POST['Contraseña'];
	$Cedula = $_POST['Cedula'];
	$NombreCompleto = $_POST['NombreCompleto'];
	$CorreoElectronico = $_POST['CorreoElectronico'];


	//se valida que todos los campos esten llenos
	$req = (strlen($Usuario)*strlen($Contraseña)*strlen($Cedula)*strlen($NombreCompleto)*strlen($CorreoElectronico)) or die("No se han llenado todos los campos");

	$consulta= "SELECT `Usuario`, `Contraseña`, `cedula`, `NombreCompleto`, `CorreoElectronico` FROM `prueba` WHERE 1";
	$query=mysqli_query($mysqli,$consulta);
	$array=mysqli_fetch_array($query);

	echo('<pre>');
var_dump($array);
echo('</pre>');

  	if ($_POST['Consultar']) {
         	for ($i=0; $i < lenght($array); $i++) { 
         		if ($cedula=$array[i]) {
         			
         		}
         	}
        
     }
    elseif ($_POST['Crear']) {
            $insertar= "INSERT INTO `prueba`(`Usuario`, `Contraseña`, `cedula`, `NombreCompleto`, `CorreoElectronico`) VALUES ('{POST_[Usuario]}','{POST_[Contraseña]}','{POST_[Cedula]}','{POST_[NombreCompleto]}','{POST_[CorreoElectronico]}')";
          	$query=mysqli_query($mysqli,$insertar);
			$array=mysqli_fetch_array($query);
     }
	elseif ($_POST['Validar']) {
          Echo "Se ha pulsado el botón validar";
     }
	elseif ($_POST['Borrar']) {
          Echo "Se ha pulsado el botón borrar";
     }
	
	

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