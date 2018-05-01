<?php
	session_start(); 
?>

<?php
	include 'conectar.php';
	if(isset($_POST['enviar'])){
		$nombre = $_POST['nombre'];
		$contrasenia = $_POST['contrasenia'];

		$log = mysqli_query($conexion, "SELECT nombre, contrasenia FROM `director` WHERE nombre='$nombre' AND contrasenia='$contrasenia' ");


		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			$_SESSION["nombre"] = $row['nombre']; 
		  	echo 'Iniciando sesión para '.$_SESSION['nombre'].' <p>';
			echo '<script> window.location="indexdirector.php"; </script>';
		}
		else{
			echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			echo '<script> window.location="iniciodirector.php"; </script>';
		}
	}
?>	