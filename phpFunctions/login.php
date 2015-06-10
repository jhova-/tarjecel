<?php
	if(!isset($_POST['loged']))
    	header("Location: ../../tarjecel/");
    	
	require ('../conexion/conexion.php');

	if((isset($_POST["usuario"]) && $_POST["usuario"] != null) && (isset($_POST["contraseña"]) && $_POST["contraseña"] != null)){
		$query = $conn -> prepare("SELECT nombre, rol FROM usuarios WHERE usuario = :user AND contra = :contra");
		$query -> execute(array(':user' => $_POST["usuario"], ':contra' => $_POST["contraseña"]));
		$data = $query -> fetch();

		if(!empty($data)){
			session_start();

			$_SESSION["usuario"] = $data['nombre'];
			$_SESSION["rol"] = $data['rol'];
			$_SESSION["pagina"] = "menu";

			session_write_close();

			echo 1;
		}
		else
			echo 0;
	}
	else
		echo 0;
?>