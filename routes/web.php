<?php
// namespace App;
use App\Usuario;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::resource("usuario","UsuarioController");
// Route::get('/usuarios/', "UsuarioController@index");
// Route::get('/usuario/crear', "UsuarioController@crear");
// Route::get('/usuario/guardar', "UsuarioController@guardar");
// Route::get('/usuarios/mostrar', "UsuarioController@mostrar");
// Route::get('/usuario/editar', "UsuarioController@editar");
// Route::get('/usuario/borrar', "UsuarioController@borrar");
// Route::get('/usuario/actualizar', "UsuarioController@actualizar");


Route::get('/leer', function(){
	$usuarios = Usuario::all();
	foreach ($usuarios as $key) {
		echo $key->nombre_completo . "..." . $key->email . "..." . $key->usuario;
	}
});


Route::get('/leerpocos', function(){
	$usuario = Usuario::where("usuario","hola")->take()->get();
	return $usuario;
});

Route::get('/leerpocos', function(){
	$usuarios = Usuario::where("usuario","hola")->orderBy("nombre_completo","desc")->get();
	return $usuarios;
});



Route::get('/insertar', function(){
	$usuario = new Usuario; // creamos una instancia del modelo
	// cada campo es una propiedad
	$usuario->nombre_completo = "nueve nueve";
	$usuario->usuario = "nueve";
	$usuario->email = "nueve@nueve.com";
	$usuario->password = "123";
	$usuario->avatar = "avatar.png";

	$usuario->save();  // ponemos el método save
});


Route::get('/actualizar', function(){
	$usuario = Usuario::find(3);

	$usuario->nombre_completo = "dos dos";
	$usuario->usuario = "dos";
	$usuario->email = "dos@dos.com";
	$usuario->password = "123";
	$usuario->avatar = "avatar.png";

	$usuario->save();  // ponemos al usuario con el método save
});



Route::get('/actualizar/varios', function(){
	// en where seleccionamos los registro que tienen el password en 123
	// en update le modificamos a esos registros con un array asociativo
	Usuario::where("password","1234")->where("usuario","cuatro")->update(["password"=>"123"]);
});



Route::get('/borrar', function(){
	// seleccionamos al usuario con find
	$usuario = Usuario::find(8);
	$usuario->delete();
	
});

Route::get('/borrar', function(){
	// seleccionamos al usuario con find
	Usuario::where("usuario","nueve")->delete();
	
	
});



Route::get('/insertar/simulta', function(){
	// como primer parámetro le pasamos un array asociativo con el campo y el valor
	Usuario::create(["nombre_completo"=>"ocho","usuario"=>"ocho","email"=>"ocho","password"=>"123"]);
});