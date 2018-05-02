<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
 <body>

	 <header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="vergrupo.php">Regresar</a>
	      <a class="bombon" href="inicio.php">Cerrar Sesión</a>
	    </div>
	 </header>

	<div>
		<h1>Actualizar grupos</h1>
	</div>

	<?php 
		include("conectar.php");
		if (isset($_GET['editar'])) 
		{
		$nombregrupo=$_GET['nombregrupo'];
		}

		$sql = mysqli_query($conexion, "SELECT * FROM grupos WHERE nombregrupo='$nombregrupo'");
		$registro = mysqli_fetch_array($sql)

	?>
<center>
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
			<input type="hidden" name="nombregrupo" value="<?php echo $_GET['nombregrupo']; ?>">

	        <?php 
                include ("conectar.php");
                $sql2=("SELECT nombremaestro FROM maestro");
                $resp2=$conexion -> query($sql2);
            ?>
           
          <label>Materia:</label>
            <select id="tamañotxt" name='nombremaestro'> 
              <?php 
                while ($registro2 = $resp2 -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

              <option value='<?php echo $registro2['nombremaestro'] ?>' selected><?php echo $registro2['nombremaestro'] ?></option> 

              <?php 
                  }
              ?> 
        </tr>

        <br><br>
		
		<tr>
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
        </tr> <br> <br>

        <input id="bombon2" type="submit" name="actualizar" value="Actualizar"> 
		
		</form>
		</table>

	


</center>
</body>
</html>