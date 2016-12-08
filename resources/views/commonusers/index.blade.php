
@extends('commonusers.template.main')

@section('title','Lista de Clientes')

@section('titlepanel','Lista de Clientes')
@section('cliente-form')

    <a href="{{route('commonusers.clientes.create')}}" class="btn btn-info">Nuevo Usuario</a>
    <br>
    <br>
    <div class="table-responsive"><table class="table table-striped">
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
                    @elseif($item->id_zona==2)
                            Collao
                    @elseif($item->id_zona==3)
                            Barrio Norte
                    @elseif($item->id_zona==4)
                        Hualpen
                    @elseif($item->id_zona==5)
                        Talcahuano
                        @endif

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
    </table></div>
    {!! $cliente->render() !!}
    @endsection