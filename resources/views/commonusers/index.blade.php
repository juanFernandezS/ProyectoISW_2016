
@extends('admin.template.main')

@section('title','Lista de Clientes')

@section('titlepanel','Lista de Clientes')
@section('content')

    <a href="{{route('commonusers.clientes.create')}}" class="btn btn-info">Nuevo Usuario</a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thread>
                <th>ID</th>
                <th>Telefono</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Zona</th>
                <th>Acción</th>
            </thread>
            <tbody>
            @foreach($cliente as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>
                        {{App\Zona::find($item->id_zona)->nombre}}

                    </td>
                    <td>
                        <a href="{{route('commonusers.clientes.edit',$item->id)}}"
                           class="btn btn-warning">
                            <span class=" glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="{{route('commonusers.clientes.destroy',$item->id)}}"
                           onclick="return confirm('Seguro?')"
                           class="btn btn-danger">

                            <span class="glyphicon glyphicon-remove-sign"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>


    {!! $cliente->render() !!}
    @endsection