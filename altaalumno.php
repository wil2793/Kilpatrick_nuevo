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
      <a class="bombon" href="consultarAlumno.php">Regresar</a>
      <a class="bombon" href="inicioalumno.php">Cerrar Sesión</a>
    </div>
  </header>

  <section>
    <center>  
      <img id="logo1" src="imagenes/logo.jpg" alt=""><br>
    </center>
  </section>

  <center>  
    <section>
      <h1>Registrar Alumno</h1>
    </section>

    <?php 
      include ("conectar.php");
      $sql=("SELECT nombregrupo FROM grupos");
      $resp=$conexion -> query($sql);
    ?>

     <section>
      <form method="POST" action="insertaralumno.php" enctype="multipart/form-data"><br><br>

        <label for="">Matricula:</label>
        <input type="text" name="matricula" placeholder="Ingresa Matricula"><br><br>

        <label for="">Nombre:</label>
        <input type="text" name="nombrealumno" placeholder="Ingresa Nombre"><br><br>

        <label for="">Correo:</label>
        <input type="text" name="correo" class="bota" placeholder="Ingresa correo"><br><br>

        <label for="">Contraseña:</label>
        <input type="password" name="contrasenia" placeholder="Ingresa contraseña"><br><br>

        <label for="">Confirmar contraseña:</label>
        <input type="password" name="rcontrasenia" placeholder="Repita la contraseña"><br><br>

        <label for="">Genero:</label>
         Hombre<input type="radio" name="genero" value="Hombre">
         Mujer<input type="radio" name="genero"  value="Mujer"> <br><br>

         <label for="">Edad:</label>
         <input type="text" name="edad" placeholder="Tu edad"> <br><br>

         <label for="">Grado:</label> 
           <select name='grado' id="tamañotxt"> 
              <option value='1'>Primero</option>
              <option value='2'>Segundo</option>
              <option value='3'>Tercero</option> 
              <option value='4'>Cuarto</option>
              <option value='5'>Quinto</option>
              <option value='6'>Sexto</option> 
            </select> <br><br>

        <input id="bombon2" type="submit" name="" value="Registrar" size="0"> 
        
      </form>
    </section>
</body>
</html>