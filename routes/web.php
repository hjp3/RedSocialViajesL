<?php
// namespace App;
use App\Usuario;
use App\GaleriaUsuario;

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



Route::get('/usuarios', 'UsuarioController@mostrarTodos');
Route::get('/usuario/{id}', 'UsuarioController@mostrarUno');
Route::get('/usuarios/guardar', 'UsuarioController@crear');
Route::post('/usuarios/guardar', 'UsuarioController@guardar');
Route::get('/usuarios/editar/{id}','UsuarioController@actualizar');
Route::get('/usuarios/borrar/{id}','UsuarioController@borrar');



Route::get("/usuario/{id}/galeria_usuario",function($id){
	return Usuario::find($id)->galeria_usuario;
});