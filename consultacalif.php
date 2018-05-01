	
<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="consulta.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
	<body>

	<header id="cabecera2">
	    <div id="cabeza2">
          <a class="bombon" href="indexalumno.php">Regresar</a>
          <a class="bombon" href="inicioalumno.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

		<div>
			<div>
	<br>
	<br>
	<br>
        <form method="POST" action="vercalificaciones.php" >
        <label>Confirmar Matricula:</label>
         <input type="text" name="matricula"   placeholder="Matricula"/>
         <br>
         <br>
         <center>
         	<input class="botones" name="enviar" type="submit" value="Registrarse" onclick="valida_envia()"></center> 
          </form>
     </div>

		</div>
	

	</body>
</html>