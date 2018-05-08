<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['nombre'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="consulta.css">
	<link rel="stylesheet" href="estilocabecera.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>
  <header id="cabecera2">
    <div id="cabeza2">
        <a class="bombon" href="<?=$_SERVER["HTTP_REFERER"]?>">Regresar</a>
        <a class="bombon" href="logoutdirector.php">Cerrar Sesión</a>
    </div>
  </header>
			
  <section>
    <center>  
      <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
    </center>
  </section>

  <center>
  	 <section>
      <h1>Elija una opción</h1>
    </section>
  </center>

	<section id="caja">
		<center>	
			<a class="botones" href="infoMaestro.php">Consultar Maestros</a><br><br>
			<a class="botones" href="infoAlumno.php">Consultar Alumnos</a><br><br>
		</center>
	</section>			

</body>
</html>

<?php
}else{
  echo '<script> window.location="iniciodirector.php"; </script>';
}
?>