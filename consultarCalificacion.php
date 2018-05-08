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
	<link rel="stylesheet" href="consulta.css">
    <link rel="stylesheet" href="estilocabecera.css">
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

            <div id="titulo">
            <h2>Calificaciones</h2>
        </div>

<div id="caja">
    
    <div id="formulario">

        <form method="POST" action="insertarcalificacion.php">
            <?php 
              include ("conectar.php");
              $sql=("SELECT nombrealumno FROM alumno");
              $resp=$conexion -> query($sql);
            ?>

        <label for="">Alumno:</label>

            <select name='nombrealumno' id="tamañotxt"> 
              <?php 
                while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

                  <option value='<?php echo $registro['nombrealumno'] ?>' selected><?php echo $registro['nombrealumno'] ?></option> 

              <?php 
                  }
              ?>
            </select> <br><br>

        <label for="">Materia:</label>

            <?php 
              include ("conectar.php");
              $sql2=("SELECT nombremateria FROM materias");
              $resp2=$conexion -> query($sql2);
            ?>

            <select name='nombremateria' id="tamañotxt"> 
              <?php 
                while ($registro = $resp2 -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

                  <option value='<?php echo $registro['nombremateria']?>' selected><?php echo $registro['nombremateria'] ?></option> 

              <?php 
                  }
              ?>
            </select> <br><br>

            <label for="">Calificación:</label>
            <input type="text" name="calificacion" id="tamañotxt"><br><br>

            <input class="botones" name="enviar" type="submit" value="Enviar Datos" onclick="valida_envia()"></center> 
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