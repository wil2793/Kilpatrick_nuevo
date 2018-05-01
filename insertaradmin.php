<?php

include ("conectar.php");

$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$contrasenia=$_POST['contrasenia'];
$rcontrasenia=$_POST['rcontrasenia'];

$checkemail=mysqli_query($conexion, "SELECT correo FROM * WHERE correo='$correo'");
$f1=mysqli_fetch_array($checkemail);

if($f1>0)
	{
		echo '<script>alert("Correo existente")</script> ';
	}

if($contrasenia != $rcontrasenia)
	{
		echo '<script>alert("Contraseñas diferentes")</script> ';
	}

	else

	{

$consulta="INSERT INTO administrador (correo,nombre,contrasenia,rcontrasenia) VALUES('$correo','$nombre','$contrasenia','$rcontrasenia')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=altaAdmin.php">';
	}
}
?>