<?php
include "conectar.php";

$correo=$_POST['correo'];
$nombremaestro=$_POST['nombremaestro'];
$contrasenia=$_POST['contrasenia'];
$rcontrasenia=$_POST['rcontrasenia'];

    $consulta="INSERT INTO maestro (correo,nombremaestro,contrasenia,rcontrasenia) VALUES('$correo','$nombremaestro','$contrasenia','$rcontrasenia')";
                          

	$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

	if($resultado)
		{
			echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=vertutor.php">';
		}
	
?>
