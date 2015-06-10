<?php
	if(!isset($_POST['loged']))
    	header("Location: ../../tarjecel/");
    	
	session_start();

	session_unset();

	session_destroy();
?>