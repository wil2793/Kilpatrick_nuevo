<?php

include ("conectar.php");

$matricula=$_POST['matricula'];
$nombrealumno=$_POST['nombrealumno'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$rcontrasenia=$_POST['rcontrasenia'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$grado=$_POST['grado'];

echo $nombrealumno;
echo $matricula;
echo $correo;
echo $contrasenia;
echo $rcontrasenia;
echo $genero;
echo $edad;
echo $grado;

$log = mysqli_query($conexion, "SELECT correo, contrasenia FROM `administrador` WHERE correo='$correo' AND contrasenia='$contrasenia' ");


$consulta = "INSERT INTO alumno (matricula,nombrealumno,correo,contrasenia,rcontrasenia,genero,edad,grado) VALUES('$matricula','$nombrealumno','$correo','$contrasenia','$rcontrasenia','$genero','$edad','$grado')";
                          

$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=altaalumno.php">';
	}


?>