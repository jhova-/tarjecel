<?php
	session_start();
	
	if(session_status() === PHP_SESSION_NONE)
		header("Location: ../tarjecel/");

	if(isset($_POST["pagina"])){
		$_SESSION["pagina"] = $_POST["pagina"];
		echo $_SESSION["pagina"];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>TarjeCel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/menu.css">
    	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="js/menu.js"></script>
	</head>
	<body>
		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="menu" class="navbar-brand navi">TarjeCel</a>
				</div>
				<nav id="navbar" class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
		<?php
			switch ($_SESSION["rol"]) {
				case 'Gerente':
			  	  echo '<li class="dropdown">
							<a class="dropdown-toggle" 
						   	   aria-expanded="false" role="button" data-toggle="dropdown">
								Ventas
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a class="navi" id="venta">Venta</a>
								</li>
								<li class="divider"></li>
								<li>
									<a class="navi" id="historial">Historial</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" 
						   	   aria-expanded="false" role="button" data-toggle="dropdown">
								Inventario
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a class="navi" id="inventario">Inventario</a>
								</li>
								<li class="divider"></li>
								<li>
									<a class="navi" id="agregarProd">Agregar Producto</a>
								</li>
							</ul>
						</li>';
			  		  break;
							
				default:
			  	  echo '<li>
							<a class="navi" id="venta">Venta</a>
					 	</li>';
			  	  break;
			}
		?>
						<li>
							<a href="https://region2.telcel.com">Region 2</a>
						</li>
						<li>
							<a href="https://dataire.telcel.com:1443/VTAE_Web/login.jsp">Tiempo Aire</a>
						</li>
						<li>
							<a href="http://recargamigoweb.telcel.com">Transaciones</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a class="dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown">
								<?php echo $_SESSION["usuario"]; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a><?php echo $_SESSION["rol"]; ?></a></li>
								<li class="divider"></li>
								<li><a id="btLogout">Cerrar Session</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="container">
			<div class="jumbotron">
<?php 
		switch ($_SESSION['pagina']) {
			case 'venta':
				include ('venta.php');
				break;
			case 'historial':
				include ('historial.php');
				break;
			case 'inventario':
				include ('inventario.php');
				break;
			case 'agregarProd':
				include ('agregarProd.php');
				break;
			case 'menu':
				echo "<p>Esta en pagina principal.</p>";
				break;
		}
?>
			</div>
    	</div>
	</body>
</html>