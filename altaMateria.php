<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="estilocabecera.css">
  <link rel="stylesheet" href="cabecerabtnizq.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>

  <header id="cabecera2">
    <div id="cabeza2">
      <a class="bombon" href="consultamateria.php">Regresar</a>
      <a class="bombon" href="indexadmin.php">Cerrar Sesión</a>
    </div>
  </header>

  <section>
    <center>  
      <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
    </center>
  </section>

  <center>  
    <section>
      <h1>Alta materia</h1>

		<form method="post" action="insertarmateria.php" >
			<label for="">Nombre de la materia:</label>
	        <input type="text" name="nombremateria" placeholder="Ingresa nombre"><br><br>
	        <input id="bombon2" type="submit" name="enviar" value="Enviar Datos" size="0"> 
		</form>	
    </section>
   </center> 
		
</body>
</html>