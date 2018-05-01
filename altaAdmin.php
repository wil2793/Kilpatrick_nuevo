<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="estilocabecera.css">
  <link rel="stylesheet" href="cabecerabtnizq.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>

  <header id="cabecera2">
    <div id="cabeza2">
      <a class="bombon" href="consultaAdmin.php">Regresar</a>
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
      <h1>Registrar Adminsitrador</h1>
    </section>
    <section>
      <form method="POST" action="insertaradmin.php">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingresa nombre"><br><br>
        
        <label for="">Correo:</label>
        <input type="email" name="correo" placeholder="Ingresa correo"><br><br>

        <label for="">Contraseña:</label>
        <input type="password" name="contrasenia" placeholder="Ingresa contraseña"><br><br>

        <label for="">Confirmar contraseña:</label>
        <input type="password" name="rcontrasenia" placeholder="Repita la contraseña"><br><br>
        
        <input id="bombon2" type="submit" name="" value="Registrar" size="0"> 
      </form>
    </section>
  <center/>

</body>
</html>