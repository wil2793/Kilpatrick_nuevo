<?php
	include ("conectar.php");

	$matricula=$_GET['matricula'];
	echo $matricula;

	$consulta = "DELETE FROM alumno WHERE matricula='$matricula'";
	$resultado = $conexion -> query($consulta) || die ("Ha ocurrido un error al eliminar los datos");

	if($resultado)

	{
		echo'<META HTTP-EQUIV=Refresh CONTENT="0;URL=veralumnos.php">';
	}
?>