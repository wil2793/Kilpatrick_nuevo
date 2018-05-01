<?php
	include ("conectar.php");

	$nombregrupo=$_GET['nombregrupo'];
	echo $nombregrupo;

	$consulta = "DELETE FROM grupos WHERE nombregrupo='$nombregrupo'";
	$resultado = $conexion -> query($consulta) || die ("Ha ocurrido un error al eliminar los datos");

	if($resultado)

	{
		echo'<META HTTP-EQUIV=Refresh CONTENT="0;URL=vergrupo.php">';
	}
?>