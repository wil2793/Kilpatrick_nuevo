<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
<head >
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="indexadmin.css" type="text/css" >
	<link rel="stylesheet" href="estilocabecera.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>

	<header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="logout.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

	<center>
		
		  <h1>BIENVENIDO ADMINISTRADOR</h1>
		

	<section>	
		<a class="botones" href="consultamaestro.php">Maestros</a>
		<a class="botones" href="consultaMateria.php">Materias</a>
		<a class="botones" href="consultaGrupos.php">Grupos</a>
		<a class="botones" href="consultarAlumno.php">Alumnos</a>
	</section>	

	</center>		

</body>
</html>

<?php
}else{
	echo '<script> window.location="inicioadministrador.php"; </script>';
}
?>