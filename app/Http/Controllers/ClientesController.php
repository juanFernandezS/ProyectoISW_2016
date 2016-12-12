<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpKernel\Client;
use App\Http\Requests\ClienteRequest;
use App\Zona;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $cliente = Cliente::orderBy('id','DES')->paginate(10);
        $zona = Zona::all();
        return view ('commonusers.index')->with('cliente',$cliente)->with('zona',$zona);

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
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente($request->all());
        $cliente -> save();
        Flash::success('Save Successfull');
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
        $zona = Zona::find($cliente->id_zona);
        $apiKey = 'AIzaSyCh9sMgLZE0vIuWvT-YZ1E1NWHu3ckjSEI';

        $addres = $cliente->direccion." ".$zona->nombre;
        $config = array();
        $config['center'] = $addres;
        $config['directions'] = TRUE;
        $config['apiKey'] = $apiKey;
        $config['directionsDivID'] = 'directionsDiv';
        $config['map_width'] = 600;
        $config['map_height'] = 400;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
          var mapCentre = map.getCenter();
          marker_0.setOptions({
              position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

          });
      }
      centreGot = true;';

        \Gmaps::initialize($config);
        // Colocar el marcador
        // Una vez se conozca la posición del usuario
        $marker = array();
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

       return view ('commonusers.clientes.edit',compact('map'))->with('cliente',$cliente);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->telefono = $request->telefono;
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->id_zona = $request->id_zona;
        $cliente->save();

        Flash::success('Editado con exito');

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
        Flash::error('Success');
        return redirect()->route('commonusers.clientes.index');
    }
}
