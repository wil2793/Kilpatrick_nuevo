<?php
  session_start();
  include 'conectar.php';
  if(isset($_SESSION['correo'])){
  echo '<script> window.location="indexadmin.php"; </script>';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content="Inicio de sesion">
	<link rel="stylesheet" type="text/css" href="iniciodirector.css">
  <link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<title>Iniciar sesion</title>
  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
  <title>Inicio</title>
	<script type="text/javascript">

//Nombramos la función
function valida_envia(){

//Validamos un campo o área de texto, por ejemplo el campo nombre
if (document.form.email.value.length==0){
alert("Tiene que escribir tu correo")
document.form.email.focus()
return 0;
}

if (document.form.passadmin.value.length==0){
alert("Ingresar contraseña")
document.form.passadmin.focus()
return 0;
}

//Si todos los campos han validado correctamente, se envía el formulario
document.form.submit();
}

</script>
</head>
<body> 	
 	<header>
  <div id="Cabecera">
    <div id="boton">
      <a class="botones" href="inicio.php">Inicio</a> 
      <a class="botones" href="iniciodirector.php">Director</a>
      <a class="botones" href="inicioadministrador.php">Administrador</a>
      <a class="botones" href="iniciomaestro.php">Maestro</a>
      <a class="botones" href="inicioalumno.php">Alumno</a>
    </div>
  </div>
 </header>

<section id="cuerpo">

   <h1>Bievenido</h1>
   <h2>Inicio de sesión administrador</h2>

      <form  method="POST" action="seguridadAdmin.php">
       <p>
        <label for="username">Correo:</label>
        <input type="text" name="correo">
        <br><br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="contrasenia">
        <br><br>
        <input type="submit" name="enviar" value="Entrar">
        <br>  
       </p>
      </form>

  </section>
</body>
</html>