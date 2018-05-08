<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilocabecera.css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="consulta.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
	<body>
	<header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="evaluargrupoconsulta.php">Regresar</a>
	      <a class="bombon" href="logoutMaestro.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

		<div>
			<h1>LISTA DE CALIFICACIONES</h1>
		</div>
  <?php 

  include ("conectar.php");
  $sql=("SELECT nombre,nombremateria,calificacion FROM calificaciones ORDER BY nombre ASC");
  $resp=$conexion -> query($sql);

  ?>
<div>

	<center>
		<table>
			<tr  align='center'>
	            <th>NOMBRE</th>    
				<th>MATERIA</th>
				<th>CALIFICACION</th>
				<th>ELIMINAR</th>
			</tr>

		  	<?php 
		    	while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
		    {
		  ?>

		  <tr>
		    <td><?php echo $registro['nombre'] ?></td>
		    <td><?php echo $registro['nombremateria'] ?></td>   
		    <td id="icono"><?php echo $registro['calificacion'] ?></td>    
		    <td id="icono"><a href="borraradministrador.php?correo=<?php echo $registro['correo']; ?>"><img src='imagenes/Equis_roja.png' width=20 height=20></a></td>
		  </tr>

		    <?php 
		      }
		   ?>

		</table>
	</center>


</div>

	</body>
</html>

<?php
}else{
  echo '<script> window.location="iniciomaestro.php"; </script>';
}
?>