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
	      <a class="bombon" href="veralumnos.php">Regresar</a>
	      <a class="bombon" href="inicio.php">Cerrar Sesión</a>
	    </div>
	 </header>

	<div>
		<h1>Actualizar datos de alumno</h1>
	</div>

	<?php 
		include("conectar.php");
		if (isset($_GET['editar'])) 
		{
		$matricula=$_GET['matricula'];
		}

		$sql = mysqli_query($conexion, "SELECT * FROM alumno WHERE matricula='$matricula'");
		$registro = mysqli_fetch_array($sql)

	?>
		<table align="center">
		<form name="form1" method="GET" action="
			<?php 
			if($_GET['editar']==1)
			{
				echo "actualizar.php";
			} 
				else
			{
				echo "altaalumno.php";
			}   
		?> ">

        <tr>
			<input type="hidden" name="matricula" value="<?php echo $_GET['matricula']; ?>">
	        <label for="">Nombre:</label>
	        <input type="text" name="nombrealumno" placeholder="Ingresa Nombre" value="<?php echo $registro['nombrealumno'];?>"><br><br>
        
        </tr>

        <tr>
	        <label for="">Correo:</label>
	        <input type="text" name="correo" placeholder="Ingresa correo" value="<?php echo $registro['correo'];?>"><br><br>        	
        </tr>

        <tr>
        	<label for="">Contraseña:</label>
       		<input type="password" name="contrasenia" placeholder="Contraseña" value="<?php echo $registro['contrasenia'];?>"><br><br>
        </tr>

        <tr>
        	<label for="">Confirmar contraseña:</label>
       		<input type="password" name="rcontrasenia" placeholder="Repita la contraseña" value="<?php echo $registro['rcontrasenia'];?>"><br><br>
        </tr>

        <tr>
	        <label for="">Genero:</label>
	         Hombre<input type="radio" name="genero" value="Hombre"
				<?php  
					if($registro["genero"]=="Hombre")
					{
						echo "checked";
					}
				?>
				>
	  
	         Mujer<input type="radio" name="genero"  value="Mujer"
	         <?php  
					if($registro["genero"]=="Mujer")
					{
						echo "checked";
					}
				?>
				>
	         
	         <br><br>        	
        </tr>

        <tr>
	        <label for="">Edad:</label>
	        <input type="text" name="edad" placeholder="Tu edad" value="<?php echo $registro['edad'];?>"> <br><br>
        	
        </tr>

        <tr>

         <label for="">Grado:</label> 
           <select name='grado'> 
              <option value='1'
              	<?php
					if ($registro["grado"]=="1")
					echo "selected";
				 ?>
              >Primero</option>
              <option value='2'
				<?php
					if ($registro["grado"]=="2")
					echo "selected";
				 ?>
              >Segundo</option>
              <option value='3'
				<?php
					if ($registro["grado"]=="3")
					echo "selected";
				 ?>
              >Tercero</option> 
              <option value='4'
              	<?php
					if ($registro["grado"]=="4")
					echo "selected";
				 ?>
              >Cuarto</option>
              <option value='5'
              	<?php
					if ($registro["grado"]=="5")
					echo "selected";
				 ?>
              >Quinto</option>
              <option value='6'
              	<?php
					if ($registro["grado"]=="6")
					echo "selected";
				 ?>
              >Sexto</option>
            </select> <br><br>

        </tr>

        <input id="bombon2" type="submit" name="actualizar" value="Registrar" size="0"> 
		
		</form>
		</table>

</center>
</body>
</html>