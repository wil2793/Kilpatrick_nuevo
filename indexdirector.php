<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['nombre'])) {?>

<html>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="indexdirector.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>

 	<header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="logoutdirector.php">Cerrar Sesión</a>
	    </div>
 	</header>
		
		<center>	
	<img id="logo" src="imagenes/logo.jpg" alt="">

		<h1>BIENVENIDO DIRECTOR</h1>
			
		

	<a class="botones" href="consultaAdmin.php">Administradores</a>
	<a class="botones" href="consulta.php">Consultar informacion</a> <br> <br>

	</center>
</body>
</html>

<?php
}else{
	echo '<script> window.location="iniciodirector.php"; </script>';
}
?>