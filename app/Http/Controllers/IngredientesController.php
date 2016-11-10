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
    }

    public function store(Request $request){

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
}