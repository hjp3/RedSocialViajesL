<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Agregar Productos</h1>
		<form class="col-md-5" action="/usuarios/agregar" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="nombre_completo">Nombre Completo</label>
				<input type="text" name="nombre_completo" id="nombre_completo" value="" class="form-control">
			</div>
			<div class="form-group">
				<label for="usuario">usuario</label>
				<input type="text" name="usuario" id="usuario" value="" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">email</label>
				<input type="text" name="email" id="email" value="" class="form-control">
			</div>
            <div class="form-group">
				<label for="password">Categoría</label>
				<input type="text" name="password" id="password" value="" class="form-control">
			</div>
			<div class="form-group">
				<label for="avatar">Categoría</label>
				<input type="text" name="avatar" id="avatar" value="" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" name="button" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>