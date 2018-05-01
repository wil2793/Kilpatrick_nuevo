<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="consulta.css" type="text/css">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
	<body>
	<header id="cabecera2">
	    <div id="cabeza2">
          <a class="bombon" href="<?=$_SERVER["HTTP_REFERER"]?>">Regresar</a>
          <a class="bombon" href="logoutAlumno.php">Cerrar Sesión</a>
	    </div>
 	</header>

	<section>
		<center>  
		  <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
		</center>
	</section>

			<div id="titulo">
		<h2 >CALIFICACION</h2>
		</div>

<?php 

  include ("conectar.php");
  $sql=("SELECT matricula,nombrealumno,nombremateria,calificacion FROM calificaciones");
  $resp=$conexion -> query($sql);

  ?>
<div>

	<center>
		<table>
			<tr  align='center'>
	            <th>MATRICULA</th>    
				<th>MATERIA</th>
				<th>CALIFICACION</th>
			</tr>

		  	<?php 
		    	while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
		    {
		  ?>

		  <tr>
		    <td><?php echo $registro['nombrealumno'] ?></td>
		    <td><?php echo $registro['nombremateria'] ?></td>   
		    <td id="icono"><?php echo $registro['calificacion'] ?></td>    
		  </tr>

		    <?php 
		      }
		   ?>

		</table>
	</center>


</div>

	</body>
</html>

