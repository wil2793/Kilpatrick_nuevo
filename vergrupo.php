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
      <a class="bombon" href="consultaGrupos.php">Regresar</a>
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
      <h1>Lista de grupos</h1>
    </section>
  </center>

  <?php 

  include ("conectar.php");
  $sql=("SELECT nombregrupo,nombremaestro ,nombremateria  FROM grupos ORDER BY nombregrupo ASC");
  $resp=$conexion -> query($sql);

  ?>

<center>
      <table id='tabla' cellspacing='5'>
<tr  align='center'>
      
  <th>GRUPO</th>
  <th>MAESTRO</th>
  <th>MATERIA</th>
  <th colspan='2'>MOVIMIENTOS</th>
</tr>

  <?php 
    while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
      {
  ?>

  <tr>
    <td><?php echo $registro['nombregrupo'] ?></td>
    <td><?php echo $registro['nombremaestro'] ?></td>
    <td><?php echo $registro['nombremateria'] ?></td> 
    <td id="icono"><a href="editaradministrador.php?editar=1&correo=<?php echo $registro['correo']; ?>"><img src='imagenes/lapiz.png' width=20 height=20></a></td> 
    <td id="icono"><a href="borrargrupo.php?nombregrupo=<?php echo $registro['nombregrupo']; ?>"><img src='imagenes/Equis_roja.png' width=20 height=20></a></td>
  </tr>

    <?php 
      }
   ?>

</table>
</center>
</body>
</html>
