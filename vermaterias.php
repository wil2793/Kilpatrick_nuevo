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
      <a class="bombon" href="consultaMateria.php">Regresar</a>
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
      <h1>Lista de materias</h1>
    </section>
  </center>

<?php 

  include ("conectar.php");
  $sql=("SELECT nombremateria FROM materias ORDER BY nombremateria ASC");
  $resp=$conexion -> query($sql);

  ?>

<center>
      <table >
<tr>
      
	<th>NOMBRE DE LA MATERIA</th>
	<th>ELIMINAR</th>
</tr>

  <?php 
    while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
      {
  ?>


  <tr>
    <td><?php echo $registro['nombremateria'] ?></td>  
    <td id="icono"><a href="borrarmateria.php?nombremateria=<?php echo $registro['nombremateria']; ?>"><img src='imagenes/Equis_roja.png' width=20 height=20></a></td>
  </tr>

    <?php 
      }
   ?>

</table>
</center>

</body>
</html>
