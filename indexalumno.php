<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['matricula'])) {?>

<!DOCTYPE html>
 <html>
 <link rel="stylesheet" href="cabecerabtnizq.css">
 <link rel="stylesheet" type="text/css" href="estilocabecera.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
 <body>
 		<header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="logoutAlumno.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

	<center>
		
		<h1>BIENVENIDO ALUMNO</h1>

 		<div>
 			<a class="botones" href="vercalificaciones.php">Consultar Calificaciones</a><br>
		</div>
 	</div>

	</body>
</html>

<?php
}else{
	echo '<script> window.location="inicioalumno.php"; </script>';
}
?>