<?php

namespace App\Http\Controllers;

use App\Estado_comanda;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mockery\CountValidator\Exception;

class EstadoComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Estado_comanda::all(); //enviamos esos registros a la vista

        return view('repartidor.estado.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repartidor.estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $estadoComanda=new Estado_comanda();
            $estadoComanda -> estado = $request-> estado;
            $estadoComanda ->save();

            return redirect()->route('repartidor.EstadoComanda.index');
        }catch(Exception $e){

            return "FATAL ERROR -".$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Estado_comanda::find($id);
        return view('repartidor.estado.index')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Estado_comanda::findOrFail($id);
        return view('repartidor.estado.edit')->with('data',$data);
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
        $estado= Estado_comanda::findOrFail($id);
        $estado->estado = $request->estado;
        $estado->save();
        return redirect()->route('repartidor.EstadoComanda.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try{
           $estado=Estado_comanda::findOrFail($id);
           $estado->delete();
           return redirect()->route('repartidor.EstadoComanda.index');

       }catch(Exception $e){
           return "FATAL ERROR -".$e->getMessage();
       }
    }
}
