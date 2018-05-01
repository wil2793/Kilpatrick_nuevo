<?php
	include ("conectar.php");

	$correo=$_GET['correo'];
	echo $correo;

	$consulta = "DELETE FROM administrador WHERE correo='$correo'";
	$resultado = $conexion -> query($consulta) || die ("Ha ocurrido un error al eliminar los datos");

	if($resultado)

	{
		echo'<META HTTP-EQUIV=Refresh CONTENT="0;URL=veradministrador.php">';
	}
?>