<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="indexdirector.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>

	<header id="cabecera2">
	    <div id="cabeza2">
	      	<a class="bombon" href="<?=$_SERVER["HTTP_REFERER"]?>">Regresar</a>
     		<a class="bombon" href="logout.php">Cerrar Sesión</a>
	    </div>
	</header>

	<section id="caja">
		<center>	
			<img id="logo" src="imagenes/logo.jpg" alt=""><br>
				<h1>Elegir Opción</h1><br>
				<a class="botones" href="altatutor.php">Alta maestro</a><br><br>
				<a class="botones" href="vertutor.php">Consultar maestros</a><br><br>
		</center>
	</section>
		
</body>
</html>

<?php
}else{
	echo '<script> window.location="inicioadministrador.php"; </script>';
}
?>