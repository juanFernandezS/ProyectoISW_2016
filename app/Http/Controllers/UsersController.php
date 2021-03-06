<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Laracasts\Flash\Flash;


class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $users= User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }
    public function create(){

             return view('admin.users.create');
        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            Flash::warning('El usuario '. $users->nombre. ' a sido editado con exito!');
            return redirect()->to('admin.users.create')->withInput()->withErrors($validacion->messages());
        }




    }
    public function store(Request $request){
/* */
        $this->validate($request,[
            'rut' => 'required | unique:users,rut',
            'nombre' => 'required | max:40' ,
            'telefono' =>'required | unique:users,telefono',
            'correo' => 'required | unique:users,correo',
            'direccion' => 'required',
            'tipos_de_usuarios' => 'required | in:administrador,cajero,repartidor',
            'id_estado'=>'required',
            'password' => 'required'
        ]);

        $user = new User($request->all());
        $user->rut=$request->rut;
        $user->nombre=$request->nombre;
        $user->telefono=$request->telefono;
        $user->correo=$request->correo;
        $user->direccion=$request->direccion;
        $user->tipo_de_usuario=$request->tipos_de_usuarios;
        $user->id_estado=$request->id_estado;
        $user->password =bcrypt($request->password);

        $user->save();
        Flash::success('El usuario '. $user->nombre .' se a ingresado con exito');
      
        return redirect()->route('admin.users.index');
    }
    public function show($id){
        $users= User::find($id);
        return view('admin.users.show')->with('user', $users);


        //Flash::Warning('El usuario' . $user->nombre . 'ha sido borrado con exito');
        //return redirect()->route('admin.users.index ');
    }
    public function destroy($id)
    {
        $users= User::find($id);
        $users->delete();

        Flash::error('El Usuario ha sido borrada!');

        return redirect()->route('admin.users.index');
    }
    public function edit($id){

        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);

    }
    public function update(Request $request, $id){

        $aux= User::all();


        $this->validate($request,[
            'rut' => 'required',
            'nombre' => 'required  | max:40' ,
            'telefono' =>'required',
            'correo' => 'required',
            'direccion' => 'required',
            'tipos_de_usuarios' => 'required | in:administrador,cajero,repartidor',
            'id_estado'=>'required',
            'password' => 'required'



        ]);


        $user= User::find($id);
        $user->rut=$request->rut;
        $user->nombre=$request->nombre;
        $user->telefono=$request->telefono;
        $user->correo=$request->correo;
        $user->direccion=$request->direccion;
        $user->tipo_de_usuario=$request->tipos_de_usuarios;
        $user->id_estado=$request->id_estados;
        $user->password =bcrypt($request->password);


        $user->save();

        return redirect('admin/users');





    }
}
