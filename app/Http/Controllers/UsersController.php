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

        $user = new User($requests->all());
        $user->rut=$requests->rut;
        $user->nombre=$requests->nombre;
        $user->telefono=$requests->telefono;
        $user->correo=$requests->correo;
        $user->direccion=$requests->direccion;
        $user->tipo_de_usuario=$requests->tipos_de_usuarios;
        $user->estado=$requests->estado;
        $user->password =bcrypt($requests->password);
      //  $user->tipo_de_usuario = $requests->tipos_de_usuarios;
       // $user->estado=$requests->estado;

        $user->save();
      
        return redirect()->route('admin.users.index');
    }
    public function show($id){
        $user = User::find($id);
      $user ->delete();
        return redirect()->route('admin.users.index');


        //Flash::Warning('El usuario' . $user->nombre . 'ha sido borrado con exito');
        //return redirect()->route('admin.users.index ');
    }
    public function edit($id){

        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }
    public function update(Requests $requests, $id){
        $user= User::find($id);
        $user->rut=$requests->rut;
        $user->nombre=$requests->nombre;
        $user->telefono=$requests->telefono;
        $user->correo=$requests->correo;
        $user->direccion=$requests->direccion;
        $user->tipo_de_usuario=$requests->tipos_de_usuarios;
        $user->estado=$requests->estado;

        $user->save();

        return redirect('admin/user');





    }
}
