
<link rel="stylesheet" type="text/css" href="css/agregarProd.css">

<!--style type="text/css"> @import url("css/agregarProd.css"); </style-->

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Codigo</label>
			<br>
			<input type="email" class="form-control" id="codigo" placeholder="Codigo">
		</div>
		<div class="form-group">
			<label>Marca</label>
			<br>
			<input type="text" class="form-control" id="marca" placeholder="Marca">
		</div>
		<div class="form-group">
			<label>Nombre</label>
			<br>
			<input type="text" class="form-control" id="nombre" placeholder="Nombre">
		</div>
		<div class="form-group">
			<label>Tipo de Venta</label>
			<br>
			<input type="text" class="form-control" id="unidad" placeholder="Unidad ó KG, etc.">
		</div>
		<div class="form-group">
			<label>Precio por Tipo de Venta</label>
			<br>
			<label class="sr-only">Precio (en pesos)</label>
			<div class="input-group">
				<div class="input-group-addon">$</div>
				<input type="number" class="form-control" id="precio" placeholder="Precio">
				<div class="input-group-addon">.00</div>
			</div>
		</div>
		<div class="form-group">
			<label>Cantidad</label>
			<br>
			<input type="number" class="form-control" id="cantidad" placeholder="Cantidad">
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<label>Imagen del Producto</label>
			<br>
			<canvas id="imagenProd" >Tu navegador no soporta html5.</canvas>
		</div>
		<div class="form-group">
			<label>Subir imagen del producto:</label>
			<br>
			<input type="file" id="imagenUp">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<button id="btSave">Guardar</button>
	</div>
</div>