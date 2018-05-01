<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
	<body>

	<header id="cabecera2">
	    <div id="cabeza2">
	    <a class="bombon" href="logoutMaestro.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

	<center>

		<h1>BIENVENIDO MAESTRO</h1>

	   <div >
	       		
	       		<a class="botones" href="evaluargrupo.php">Asingnar Calificaciones</a>
	       		<a class="botones" href="evaluargrupoconsulta.php">Consultar Calificaciones</a><br>
	   </div>
						

       </div>
	</body>
</html>

<?php
}else{
	echo '<script> window.location="iniciomaestro.php"; </script>';
}
?>