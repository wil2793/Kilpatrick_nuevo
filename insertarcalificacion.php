<?php

include ("conectar.php");

$matricula =$_POST['matricula'];
$nombrealumno =$_POST['nombrealumno'];
$nombremateria=$_POST['nombremateria'];
$calificacion=$_POST['calificacion'];

$consulta="INSERT INTO calificaciones (matricula,nombrealumno,nombremateria,calificacion) VALUES('$matricula','$nombrealumno','$nombremateria','$calificacion')";
                          

$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=consultarCalificacion.php">';
	}
?>