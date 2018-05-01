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
	      <a class="bombon" href="indexmaestro.php">Regresar</a>
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

    <?php 
      include ("conectar.php");
      $sql=("SELECT nombregrupo FROM grupos");
      $resp=$conexion -> query($sql);
    ?>
	
        <form method="POST" action="consultarCalificacion.php" >
          <label for="">Grupo:</label>
            <select name='grupo' id="tamañotxt"> 
              <?php 
                while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

                  <option value='<?php echo $registro['nombregrupo'] ?>' selected><?php echo $registro['nombregrupo'] ?></option> 

              <?php 
                  }
              ?> </select><br><br><br>

         	<input class="botones" name="enviar" type="submit" value="Entrar" onclick="valida_envia()"></center> 
          </form>
</div>

			 </div>
	
	</body>
</html>