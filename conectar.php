<?php  

	//$conexion = new mysqli("localhost", "usuario", "contraseña", "nombredelabasededatos")

	$conexion = new mysqli("localhost", "root", "", "academia");

	//para comprobar la conexion
	if ($conexion -> connect_errno)
	{
		printf("Conexion fallida:", $conexion->connect_error); //imprime el error de conexion
	}
?>