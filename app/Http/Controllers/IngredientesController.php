<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Http\Requests;

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
            return redirect()->to('admin.ingredientes.create\'')->withInput()->withErrors($validacion->messages());
        }
    }

    public function store(Request $request){

        $this->validate( $request,[
            'nombre'=>'required |alpha|unique:ingredientes,nombre'
        ]);
        $ingredientes = new Ingrediente($request->all());
        $ingredientes->save();
        return redirect()->route('admin.ingrediente.index');

    }

    public function show($id){
        $ingredientes = Ingrediente::find($id);
        $ingredientes->delete();
        return redirect()->route('admin.ingrediente.index');
    }

    public function edit($id){
        $ingredientes = Ingrediente::find($id);
        return view('admin.ingredientes.edit')->with('ingredientes',$ingredientes);


    }

    public function update(Request $request,$id){

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