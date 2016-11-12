
@extends('commonusers.template.main')

@section('title','Lista de Clientes')

@section('titlepanel','Lista de Usuarios')
@section('cliente-form')

    <a href="{{route('commonusers.clientes.create')}}" class="btn btn-info">Nuevo Usuario</a>
    <br>
    <br>
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
                    @if($item->id_zona==1)
                         Concepcion
                        @endif
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                        <span class=" glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{route('commonusers.clientes.destroy',$item->id)}}"
                       onclick="return confirm('Seguro?')"
                       class="btn btn-warning">

                        <span class="glyphicon glyphicon-remove-sign"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $cliente->render() !!}
    @endsection