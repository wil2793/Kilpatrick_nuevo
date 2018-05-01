<?php
	include ("conectar.php");

	$nombremateria=$_GET['nombremateria'];
	echo $nombremateria;

	$consulta = "DELETE FROM materias WHERE nombremateria='$nombremateria'";
	$resultado = $conexion -> query($consulta) || die ("Ha ocurrido un error al eliminar los datos");

	if($resultado)

	{
		echo'<META HTTP-EQUIV=Refresh CONTENT="0;URL=vermaterias.php">';
	}
?>