<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Estado;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class EstadosController extends Controller
{

    public function index()
    {
        $estados= Estado::orderBy('id','ASC')->paginate(5);
        return view('admin.estados.index')->with('estados', $estados);
    }


    public function create()
    {
        return view('admin.estados.create');
    }

    public function store(Request $request)
    {
        $this->validate( $request,[
            'nombre'=>'required |unique:estados,nombre|max:400',

        ]);
        $estado = new Estado($request->all());
        $estado->nombre=$request->nombre;
        $estado->save();

        Flash::success('El estado '. $estado->nombre .' se a ingresado con exito');
        return redirect()->route('admin.estados.index');
    }


    public function show($id)
    {
        $estados= Estado::find($id);
        return view('admin.estados.show')->with('estado', $estados);

    }

    public function destroy($id)
    {
        $estados= Estado::find($id);
        $estados->delete();

        Flash::error('El Estado ha sido borrada!');

        return redirect()->route('admin.estados.index');
    }

    public function edit($id)
    {
        $estados= Estado::find($id);
        return view('admin.estados.edit')->with('estados', $estados);
    }


    public function update(Request $request, $id)
    {
        $aux= Estado::all();


        $this->validate($request,[

            'nombre' => 'required ' ,


        ]);


        $estados= Estado::find($id);
        $estados->nombre=$request->nombre;

        $estados->save();

        return redirect('admin/estados');

        $validacion = Validator::make($input,$rules);
        if ($validacion->fails()){
            return redirect()->to('estado/'.$id.'/edit')->withInput()->withErrors($validacion->messages());

        }



    }



}
