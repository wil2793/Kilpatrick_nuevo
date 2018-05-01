<?php

include ("conectar.php");

$nombremateria=$_POST['nombremateria'];

$consulta="INSERT INTO materias (nombremateria) VALUES('$nombremateria')";
                          

$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=altaMateria.php">';
	}
?>