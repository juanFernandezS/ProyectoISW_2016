@extends('admin.template.main')
@section('titulo','Lista de Estados de comandas')
@section('content')

    <a href="{{route('repartidor.EstadoComanda.index')}}" class="btn btn-info"> Registar nuevo estado</a><hr>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Accion</th>
        </thead>
        <tbody>
        <div>

            {!! Form::label('estado','Listado de estados de comandas') !!}
        </div><hr>
        @foreach($data as $estado)
            <tr>
                <td>{!! $estado->id !!}</td>
                <td> {!! $estado->estado !!}</td>
                <td><a href=" {{ route('repartidor.EstadoComanda.edit', $estado->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href=" {{ route('repartidor.EstadoComanda.show', $estado->id) }}" class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            </tr>


        @endforeach()

        </tbody>

    </table>


@endsection

