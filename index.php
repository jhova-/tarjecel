<?php
	session_start();

	if(isset($_SESSION["usuario"]) && !$_SESSION["usuario"] == null)
		header ('Location: menu');
	else
		include ('login.php');
?>