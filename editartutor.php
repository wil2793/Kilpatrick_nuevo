<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="estilocabecera.css">
</head>
 <body>

	 <header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="vertutor.php">Regresar</a>
	      <a class="bombon" href="inicio.php">Cerrar Sesión</a>
	    </div>
	 </header>

	<div>
		<h1>Actualizar datos del Maestro</h1>
	</div>

	<?php 
		include("conectar.php");
		if (isset($_GET['editar'])) 
		{
		$correo=$_GET['correo'];
		}

		$sql = mysqli_query($conexion, "SELECT * FROM maestro WHERE correo='$correo'");
		$registro = mysqli_fetch_array($sql)

	?>

	<table align="center">
		<form name="form1" method="GET" action="
			<?php 
			if($_GET['editar']==1)
			{
				echo "actualizartutor.php";
			} 
				else
			{
				echo "vervutor.php";
			}   
		?> ">

		<tr>
			<input type="hidden" name="correo" value="<?php echo $_GET['correo']; ?>">
	        <label for="">Nombre:</label>
	        <input type="text" name="nombremaestro" placeholder="Ingresa Nombre" value="<?php echo $registro['nombremaestro'];?>"><br><br>
        </tr>

        <tr>
        	<label for="">Contraseña:</label>
       		<input type="password" name="contrasenia" placeholder="Contraseña" value="<?php echo $registro['contrasenia'];?>"><br><br>
        </tr>

        <tr>
        	<label for="">Confirmar contraseña:</label>
       		<input type="password" name="rcontrasenia" placeholder="Repita la contraseña" value="<?php echo $registro['rcontrasenia'];?>"><br><br>
        </tr>

        <input id="bombon2" type="submit" name="actualizar" value="Registrar"> 
		
		</form>
		</table>

	

</center>
</body>
</html>