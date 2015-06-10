<?php 
	if(!isset($_POST['loged']))
    	header("Location: ../../tarjecel/");	

	require ("../conexion/conexion.php");

	$query = $conn -> prepare("SELECT * FROM productos");
	$query -> execute();

	echo "<table id = 'tabla_Productos'>";
	echo "<caption>Inventario de Productos</caption>";
	echo "<thead><tr><th>Imagen</th><th>Codigo</th><th>Producto</th><th>Desc.</th><th>Precio</th><th>Acciones</th></tr></thead>";
	echo "<tbody>";
	while($data = $query -> fetch()){
		if($data["imagen"] == null){
			echo "<tr>
					<td><img src='img/producto.jpg' alt='".$data['nombre']."' width='100' height='100'></td>
					<td>".$data['codigo']."</td>
					<td>".$data['marca']." ".$data['nombre']."</td>
					<td>".$data['descripcion']."</td>
					<td>".$data['precio']." por ".$data['unidad']."</td>
					<td><button id='btMod'>Modificar</button><br><button id='btDel'>Eliminar</button></td>
				  </tr>";
		}
		else{
			echo "<tr>
					<td><img src='img/producto.jpg' alt='".$data['nombre']."' width='100' height='100'></td>
					<td>".$data['codigo']."</td>
					<td>".$data['marca']." ".$data['nombre']."</td>
					<td>".$data['descripcion']."</td>
					<td>".$data['precio']." por ".$data['unidad']."</td>
					<td><button id='btMod'>Modificar</button><br><button id='btDel'>Eliminar</button></td>
				  </tr>";
		}
	}
	echo "</tbody></table>";
?>