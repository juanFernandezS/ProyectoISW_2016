<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpKernel\Client;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::orderBy('id','ASC')->paginate(5);
        return view ('commonusers.index')->with('cliente',$cliente);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commonusers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $cliente = new Cliente($request->all());

        $cliente -> save();

        Flash::success('Success');
        return redirect()->route('commonusers.clientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        //dd($id);
        return view ('commonusers.clientes.edit')->with('cliente',$cliente);

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
        $cliente = Cliente::find($id);
        $cliente->telefono = $request->telefono;
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->id_zona = $request->id_zona;
        $cliente->save();

        Flash::success('Edit Success');

        return redirect()->route('commonusers.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        //Flash::danger('Erase Success');
        Flash::error('Success');
        return redirect()->route('commonusers.clientes.index');
    }
}
