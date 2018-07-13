<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\GaleriaUsuario;

class UsuarioController extends Controller{

    public function mostrarTodos(){
        $usuarios = Usuario::all();

        $variables = [
            "usuarios" => $usuarios,
        ];

        return view('todos_usuarios.index', $variables);

    }

    public function crear() {
        return view('crear_usuarios');
    }

    public function guardar(Request $request){
        $rules = [
            "nombre_completo" => "required",
            "usuario" => "required",
            "email" => "required|unique:usuario",
            "password" => "required"
            "avatar" => "required"
        ];

        $messages = [
            "required" => "El :attribute es requerido!",
            "unique" => "El :attribute tiene que ser único!",
            "numeric" => "El :attribute tiene que ser numérico!",
            "between" => "El :attribute tiene que estar entre :min y :max!"
        ];

        $request->validate($rules, $messages);

        $usuario = Usuario::create([
            'nombre_completo' => $request->input('nombre_completo'),
            'usuario' => $request->input('usuario'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'avatar' => $request->input('avatar')
        ]);

        return redirect('/usuarios');
    }

    public function mostrar($id){
        $usuario = Usuario::find($id);

        $variables = [
            "usuario" => $usuario
        ];

        return view('usuario', $variables);
    }
    
    public function editar(Request $request, $id){
        $usuario = Usuario::find($id);

        $usuario->nombre_completo = $request->input('nombre_completo');
        $usuario->usuario = $request->input('usuario');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->avatar = $request->input('avatar');

        $usuario->save();  // ponemos al usuario con el método save

    }

    public function borrar($id){
      $usuario = Usuario::find($id);
      $usuario->delete();
    }
}
