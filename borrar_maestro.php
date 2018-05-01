<?php
	include ("conectar.php");

	$nombremaestro =$_GET['nombremaestro'];
	echo $nombremaestro;

	$consulta = "DELETE FROM maestro WHERE nombremaestro ='$nombremaestro'";
	$resultado = $conexion -> query($consulta) || die ("Ha ocurrido un error al eliminar los datos");

	if($resultado)

	{
		echo'<META HTTP-EQUIV=Refresh CONTENT="0;URL=vertutor.php">';
	}
?>