<?php

include ("conectar.php");

$matricula=$_GET['matricula'];
$nombrealumno=$_GET['nombrealumno'];
$correo=$_GET['correo'];
$contrasenia=$_GET['contrasenia'];
$rcontrasenia=$_GET['rcontrasenia'];
$genero=$_GET['genero'];
$edad=$_GET['edad'];
$grado=$_GET['grado'];

$querys = ("UPDATE alumno SET nombrealumno='$nombrealumno', correo='$correo', contrasenia='$contrasenia', rcontrasenia='$rcontrasenia', genero='$genero', edad='$edad', grado='$grado' WHERE matricula='$matricula'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		//echo '<p>Se guardo correctamnete, gracias.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=veralumnos.php">';
	}

?>