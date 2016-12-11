<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class PagosController extends Controller
{

    public function index()
    {
        $pagos=Pago::orderBy('id','ASC')->paginate(20);
        return view('admin.pagos.index')->with('pagos',$pagos);
    }


    public function create()
    {
        return view('admin.pagos.create');
    }


    public function store(Request $request)
    {
        $this->validate( $request,[
            'tipo_pago'=>'required |alpha|unique:pagos,tipo_pago',
        ]);

        $pagos = new Pago($request->all());
        $pagos->tipo_pago=$request->tipo_pago;
        $pagos->save();

        Flash::success('El tipo de pago '. $pagos->tipo_pago .' se a agregado con exito');
        return redirect()->route('admin.pagos.index');

    }

    public function show($id)
    {
        $pago = Pago::find($id);
        return view('admin.pagos.show')->with('pago',$pago);
    }

    public function destroy($id){
        $pago= Pago::find($id);
        $pago->delete();

        Flash::error('El tipo de pago ha sido borrado!');

        return redirect()->route('admin.pagos.index');
    }

    public function edit($id)
    {
        $pagos = Pago::find($id);
        return view('admin.pagos.edit')->with('pagos',$pagos);

    }


    public function update(Request $request, $id)
    {
        $aux= Pago::all();

        $this->validate( $request,[
            'tipo_pago'=>'required |alpha|unique:pagos,tipo_pago',
        ]);

        $pagos = Pago::find($id);
        $pagos ->tipo_pago=$request->tipo_pago;
        $pagos->save();
        return redirect()->route('admin.pagos.index');

        $validacion = Validator::make($input,$rules);
        if($validacion->fails()){
            return redirect()->to('pago/'.$id.'/edit')->withInput()->withErrors($validacion->messages());
        }
    }


}
