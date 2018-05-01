<?php

include ("conectar.php");

$nombregrupo=$_POST['nombregrupo'];
$nombremaestro =$_POST['nombremaestro'];
$nombremateria =$_POST['nombremateria'];

echo $nombremateria;
echo $nombregrupo;
echo $nombremaestro;

$consulta="INSERT INTO grupos (nombregrupo,nombremaestro,nombremateria) VALUES('$nombregrupo','$nombremaestro','$nombremateria')";
                          

$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=vergrupo.php">';
	}
?>