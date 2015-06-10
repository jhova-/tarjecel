<?php
  	if(session_status() === PHP_SESSION_NONE)
    	header("Location: ../tarjecel/");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TarjeCel</title>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
  </head>
  <body>
    <div id="login-form">
      <input id="user" type="text" placeholder="Usuario" />
      <input id="pass" type="password" placeholder="Contraseña" />
      <button id="btLogin" onclick="Login();">Entrar</button>
    </div>
  </body>
</html>