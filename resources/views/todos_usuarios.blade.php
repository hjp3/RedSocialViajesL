<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <ul>
        @foreach ($usuarios as $usuario)
			<li>{{$usuario->nombre_completo}}</li>
		@endforeach
    </ul>
    </body>
</html>