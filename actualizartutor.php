<?php

include ("conectar.php");

$correo=$_GET['correo'];
$nombremaestro=$_GET['nombremaestro'];
$contrasenia=$_GET['contrasenia'];
$rcontrasenia=$_GET['rcontrasenia'];

$querys = ("UPDATE maestro SET nombremaestro='$nombremaestro', contrasenia='$contrasenia', rcontrasenia='$rcontrasenia' WHERE correo='$correo'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		//echo '<p>Se guardo correctamnete, gracias.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=vertutor.php">';
	}

?>