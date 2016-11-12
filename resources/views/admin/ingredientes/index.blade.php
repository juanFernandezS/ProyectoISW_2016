@extends('admin.template.main')
@section('titulo','Lista ingredientes')
@section('content')

        <a href="{{route('admin.ingrediente.create')}}" class="btn btn-info"> Resistar nuevo ingrediente</a><hr>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Accion</th>
            </thead>
           <tbody>
           <div>
            {!! Form::label('nombre','Listado de ingredientes') !!}
            </div><hr>
                @foreach($ingredientes as $ingrediente)
                    <tr>
                        <td>{!! $ingrediente->id !!}</td>
                        <td> {!!$ingrediente->nombre !!}</td>
                    <td><a href=" {{ route('admin.ingrediente.edit', $ingrediente->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                     <a href=" {{ route('admin.ingrediente.destroy', $ingrediente->id) }}" class="btn btn-danger" onclick="return confirm('seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    </tr>

                @endforeach()

            </tbody>

        </table>

        {!! $ingredientes->render() !!}

@endsection

