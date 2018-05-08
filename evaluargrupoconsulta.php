<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="consulta.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
	<body>

	<header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="<?=$_SERVER["HTTP_REFERER"]?>">Regresar</a>
	      <a class="bombon" href="logoutMaestro.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>
	
		<div id="caja">
			<div id='confirma'>
	
        <form method="post" action="verlista.php" >
        <label>Nombre del Grupo:</label>
         
         <input type="text" name="materia">
         <br>
         <br>
         
         <center><input class="botones" name="enviar" type="submit" value="Entrar" onclick="valida_envia()"></center> </center> 
          </form>
</div>


		</div>
	
	</body>
</html>

<?php
}else{
  echo '<script> window.location="iniciomaestro.php"; </script>';
}
?>