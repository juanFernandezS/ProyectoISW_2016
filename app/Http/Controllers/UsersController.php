<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Laracasts\Flash\Flash;


class UsersController extends Controller
{
    public function index(){
        $users= User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }
    public function create(){

             return view('admin.users.create');
        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            Flash::warning('El usuario '. $users->nombre. ' a sido editado con exito!');
            return redirect()->to('admin.users.create\'')->withInput()->withErrors($validacion->messages());
        }




    }
    public function store(Request $requests){
/* */
        $this->validate($requests,[
            'rut' => 'required | unique:users,rut',
            'nombre' => 'required | max:40' ,
            'telefono' =>'required | unique:users,telefono',
            'correo' => 'required | unique:users,correo',
            'direccion' => 'required',
            'tipos_de_usuarios' => 'required | in:administrador,cajero,repartidor',
            'estado' => 'required | in:vigente,no vigente',
            'password' => 'required'
        ]);

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
        Flash::success('El usuario '. $user->nombre .' se a ingresado con exito');
      
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

        $aux= User::all();

        foreach ( $aux as $user){
            if($user->nombre == $request->nombre){
                Flash::error('El nombre ya existe!');
                return redirect('/admin/users/'.$id.'/edit');
            }
        }

        $this->validate($requests,[
            'rut' => 'required | unique:users,rut',
            'nombre' => 'required | max:40',
            'telefono' =>'required | unique:users,telefono',
            'correo' => 'required | unique:users,correo',
            'direccion' => 'required',
            'tipo_de_usuario' => 'required | in:administrador,cajero,repartidor',
            'estado' => 'required | in: vigente, no vigente',
            'password' => 'required'
        ]);


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
