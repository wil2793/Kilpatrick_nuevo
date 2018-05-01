<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="estilocabecera.css">
  <link rel="stylesheet" href="cabecerabtnizq.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
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
      <h1>Registrar grupo</h1>
    </section>

    <?php 
      include ("conectar.php");
      $sql=("SELECT nombremaestro FROM maestro");
      $resp=$conexion -> query($sql);
    ?>

      <div id="caja">      
        <form method="POST" action="insertargrupo.php" ><br><br>
           <label>Nombre del Grupo:</label>
           <input id="tamañotxt" type="text" name="nombregrupo" placeholder="Ingresa Nombre"><br><br><br>

           <label>Maestro:</label>
           <select id="tamañotxt" name='nombremaestro'> 
           
          <?php 
            while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
              {
          ?>

              <option value='<?php echo $registro['nombremaestro'] ?>' selected><?php echo $registro['nombremaestro'] ?></option> 

          <?php 
              }
          ?>
   
          </select><br><br><br>
              <?php 
                include ("conectar.php");
                $sql2=("SELECT nombremateria FROM materias");
                $resp2=$conexion -> query($sql2);
              ?>
           
          <label>Materia:</label>
            <select id="tamañotxt" name='nombremateria'> 
              <?php 
                while ($registro2 = $resp2 -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

              <option value='<?php echo $registro2['nombremateria'] ?>' selected><?php echo $registro2['nombremateria'] ?></option> 

              <?php 
                  }
              ?> 

            </select><br><br><br>
           
          <input id="bombon2" type="submit" name="" value="Registrar" size="0"> 
        </form>
      </div>
</body>
</html>