<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class IngredientesController extends Controller
{

    public function index(){
        $ingredientes=Ingrediente::orderBy('id','ASC')->paginate(20);
        return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
    }

    public function create(){
        return view('admin.ingredientes.create');
        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            Flash::warning('El ingrediente '. $ingredientes->nombre. ' a sido editado con exito!');
            return redirect()->to('admin.ingredientes.create\'')->withInput()->withErrors($validacion->messages());
        }
    }

    public function store(Request $request){

        $this->validate( $request,[
            'nombre'=>'required |alpha|unique:ingredientes,nombre'
        ]);
        $ingredientes = new Ingrediente($request->all());
        $ingredientes->save();
        Flash::success('El ingrediente '. $ingredientes->nombre .' se a ingresado con exito');
        return redirect()->route('admin.ingrediente.index');

    }

    public function show($id){
        $ingredientes = Ingrediente::find($id);
        $ingredientes->delete();
        Flash::error('El ingrediente ha sido borrada!');
        return redirect()->route('admin.ingrediente.index');
    }

    public function edit($id){
        $ingredientes = Ingrediente::find($id);
        return view('admin.ingredientes.edit')->with('ingredientes',$ingredientes);


    }

    public function update(Request $request,$id){

        $aux= Ingrediente::all();

        foreach ( $aux as $ingredientes){
            if($ingredientes->nombre == $request->nombre){
                Flash::error('El nombre ya existe!');
                return redirect('/admin/ingrediente/'.$id.'/edit');
            }
        }

        $this->validate( $request,[
            'nombre'=>'required |alpha|unique:ingredientes,nombre'
        ]);

        $ingredientes = Ingrediente::find($id);
        $ingredientes ->nombre=$request->nombre;
        $ingredientes->save();
        return redirect()->route('admin.ingrediente.index');

        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            return redirect()->to('ingrediente/'.$id.'/edit')->withInput()->withErrors($validacion->messages());
        }

    }
}