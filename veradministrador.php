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
      <a class="bombon" href="consultaAdmin.php">Regresar</a>
      <a class="bombon" href="inicioadministrador.php">Cerrar Sesión</a>
    </div>
  </header>
			
  <section>
    <center>  
      <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
    </center>
  </section>

  <center>
  	 <section>
      <h1>Lista de adminsitradores</h1>
    </section>
  </center>

  <?php 

  include ("conectar.php");
  $sql=("SELECT nombre,correo FROM administrador ORDER BY nombre ASC");
  $resp=$conexion -> query($sql);

  ?>

<center>
      <table>
		<tr > 
			<th>NOMBRE</th>
			<th>CORREO</th>
			<th colspan='2'>MOVIMIENTOS</th>
		</tr>

  	<?php 
    	while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
    {
  ?>

  <tr>
    <td><?php echo $registro['nombre'] ?></td>
    <td><?php echo $registro['correo'] ?></td>   
    <td><a href="editaralumno.php?editar=1&correo=<?php echo $registro['correo']; ?>"><img src='imagenes/lapiz.png' width=20 height=20></a></td> 
    <td><a href="borraradministrador.php?correo=<?php echo $registro['correo']; ?>"><img src='imagenes/Equis_roja.png' width=20 height=20></a></td>
  </tr>

    <?php 
      }
   ?>

</table>
</center>
</body>
</html>