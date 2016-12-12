<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class IngredientesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ingredientes=Ingrediente::orderBy('id','ASC')->paginate(20);
        return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
    }

    public function create(){
        return view('admin.ingredientes.create');
        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            Flash::warning('El ingrediente '. $ingredientes->nombre. ' ha sido editado con exito!');
            return redirect()->to('admin.ingredientes.create\'')->withInput()->withErrors($validacion->messages());
        }
    }

    public function store(Request $request){

        $this->validate( $request,[
            'nombre'=>'required |alpha|unique:ingredientes,nombre',
            'cantidad_unitaria' => 'required|min:0|max:10000|numeric'
        ]);
        $ingredientes = new Ingrediente($request->all());
        $ingredientes->nombre=$request->nombre;
        $ingredientes->cantidad_unitaria=$request->cantidad_unitaria;
        $ingredientes->save();

        Flash::success('El ingrediente '. $ingredientes->nombre .' se a ingresado con exito');
        return redirect()->route('admin.ingrediente.index');

    }
    public function show($id){
        $ingredientes = Ingrediente::find($id);
        return view('admin.ingredientes.show')->with('ingredientes',$ingredientes);
    }
    public function destroy($id){
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



        $this->validate( $request,[
            'nombre'=>'required |max:40',
            'cantidad_unitaria'=>'required|min:0|max:10000|numeric'
        ]);

        $ingredientes = Ingrediente::find($id);
        $ingredientes ->nombre=$request->nombre;
        $ingredientes->cantidad_unitaria=$request->cantidad_unitaria;
        $ingredientes->save();
        return redirect()->route('admin.ingrediente.index');

        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            return redirect()->to('ingrediente/'.$id.'/edit')->withInput()->withErrors($validacion->messages());
        }

    }
}