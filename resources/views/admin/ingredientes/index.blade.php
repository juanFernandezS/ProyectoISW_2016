@extends('admin.template.main')
@section('titulo','lista de ingredientes')
@section('content')

        <a href="{{route('admin.ingrediente.create')}}" class="btn btn-info"> Resistar nuevo ingrediente</a><hr>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Accion</th>
            </thead>
           <tbody>
                @foreach($ingredientes as $ingrediente)
                    <tr>
                        <td>{!! $ingrediente->id !!}</td>
                        <td> {!!$ingrediente->nombre !!}</td>
                        <td> <a href="{{route('admin.ingrediente.destroy',$ingrediente->id)}}"class="btn btn-danger glyphicon glyphicon-remove"></a>  <a href="{{route('admin.ingrediente.edit',$ingrediente->id)}}"class="btn btn-warning glyphicon glyphicon-wrench"></a></td>
                    </tr>

                @endforeach()

            </tbody>

        </table>

        {!! $ingredientes->render() !!}

@endsection

