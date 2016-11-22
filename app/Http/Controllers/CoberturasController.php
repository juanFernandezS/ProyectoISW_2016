<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cobertura;
use Laracasts\Flash\Flash;

class CoberturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coberturas= Cobertura::orderBy('id','ASC')->paginate(5);
        return view('admin.coberturas.index')->with('coberturas', $coberturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coberturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate( $request, [
            'nombre'=> 'required|unique:coberturas,nombre',
            'precio'=> 'required|min:2000|max:20000|numeric'
        ]);

        $cobertura = new Cobertura($request->all());
        $cobertura->nombre=$request->nombre;
        $cobertura->precio=$request->precio;
        $cobertura->save();

        Flash::success('La cobertura '. $cobertura->nombre .' se a ingresado con exito');


        return redirect('admin/coberturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cobertura= Cobertura::find($id);
        return view('admin.coberturas.show')->with('cobertura', $cobertura);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cobertura= Cobertura::find($id);
        return view('admin.coberturas.edit')->with('cobertura', $cobertura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aux= Cobertura::all();

        foreach ( $aux as $coberturas){
            if($id!=$coberturas->id){
               if($coberturas->nombre == $request->nombre    ){
                   Flash::error('El nombre ya existe!');
                   return redirect('/admin/coberturas/'.$id.'/edit');
               }
            }
        }

        $this-> validate( $request, [
            'nombre'=> 'required',
            'precio'=> 'required|min:2000|max:20000|numeric'
        ]);

        $cobertura = new Cobertura($request->all());
        $cobertura->nombre=$request->nombre;
        $cobertura->precio=$request->precio;

        $cobertura = Cobertura::find($id);
        $cobertura->fill($request->all());
        $cobertura->save();
        Flash::warning('La cobertura '. $cobertura->nombre. ' a sido editada con exito!');
        return redirect()->route('admin.coberturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cobertura= Cobertura::find($id);
        $cobertura->delete();

        Flash::error('La cobertura ha sido borrada!');

        return redirect()->route('admin.coberturas.index');
    }
}
