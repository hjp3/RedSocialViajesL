<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{$usuario->nombre_completo}}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>{{$usuario->nombre_completo}}</h1>
		<p>{{$usuario->email}}</p>
		<p>{{$usuario->usuario}}</p>
		<p>{{$usuario->avatar}}</p>
    </body>
</html>