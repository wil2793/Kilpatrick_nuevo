<?php
	session_start(); 
?>

<?php
	include 'conectar.php';
	if(isset($_POST['enviar'])){
		$matricula = $_POST['matricula'];
		$contrasenia = $_POST['contrasenia'];

		$log = mysqli_query($conexion, "SELECT matricula, contrasenia FROM `alumno` WHERE matricula='$matricula' AND contrasenia='$contrasenia' ");


		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			$_SESSION["matricula"] = $row['matricula']; 
		  	echo 'Iniciando sesión para '.$_SESSION['matricula'].' <p>';
			echo '<script> window.location="indexalumno.php"; </script>';
		}
		else{
			echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			echo '<script> window.location="inicioalumno.php"; </script>';
		}
	}
?>	