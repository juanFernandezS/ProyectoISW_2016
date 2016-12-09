@extends('admin.template.main')
@section('titulo','Lista de Estados')
@section('content')

    <a href="{{route('admin.estados.create')}}" class="btn btn-info"> Registar nuevo estado</a><hr>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        </thead>
        <tbody>
        <div>

            {!! Form::label('nombre','Listado de tipo de usuarios') !!}
        </div><hr>
        @foreach($estados as $estado)
            <tr>
                <td>{!! $estado->id !!}</td>
                <td> {!! $estado->nombre !!}</td>
                <td><a href=" {{ route('admin.estados.edit', $estado->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href=" {{ route('admin.estados.destroy', $estado->id) }}" class="btn btn-danger" onclick="return confirm('seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            </tr>


        @endforeach()

        </tbody>

    </table>

    {!! $estados->render() !!}

@endsection

