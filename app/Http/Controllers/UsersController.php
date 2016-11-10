<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;


class UsersController extends Controller
{
    public function index(){
        $users= User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }
    public function create(){
     return view('admin.users.create');
    }
    public function store(Request $requests){
/* */
        //dd($requests);
       $user = new User($requests->all());
        $user->rut=$requests->rut;
        $user->nombre=$requests->nombre;
        $user->telefono=$requests->telefono;
        $user->correo=$requests->correo;
        $user->direccion=$requests->direccion;
        $user->tipo_de_usuario=$requests->tipo_de_usuario;
        $user->estado=$requests->estado;
       $user->password =bcrypt($requests->password);
        $user->tipo_de_usuario = $requests->tipos_de_usuarios;
        $user->estado=$requests->estado;

        $user->save();
      
        return redirect()->route('admin.users.index');
    }
    public function destroy($id){
        dd($id);
    }
}
