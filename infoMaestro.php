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
      <a class="bombon" href="consulta.php">Regresar</a>
      <a class="bombon" href="iniciodirector.php">Cerrar Sesión</a>
    </div>
  </header>
			
  <section>
    <center>  
      <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
    </center>
  </section>

  <center>
  	 <section>
      <h1>Lista de maestros</h1>
    </section>
  </center>
			
<?php 
  
  include ("conectar.php");
  $sql=("SELECT nombremaestro,correo FROM maestro ORDER BY nombremaestro ASC");
  $resp=$conexion -> query($sql);

?>

	<center>
		<table>
			<tr align='center'>          
				<th>NOMBRE</th>
				<th>CORREO</th>
			</tr>

			  <?php 
			    while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
			      {
			  ?>

			  <tr>
			    <td><?php echo $registro['nombremaestro'] ?></td>
			    <td id="icono"><?php echo $registro['correo'] ?></td>
			  </tr>

			    <?php 
			      }
			   ?>
		
		</table>
	</center>
</body>
</html>
