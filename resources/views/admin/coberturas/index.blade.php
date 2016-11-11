@extends('admin.template.main')

@section('titulo','lista de coberturas')

@section('content')
    <a href="{{ route('admin.coberturas.create') }}" class="btn btn-info">Ingresar nueva cobertura</a>
    <table class="table" table-striped>
        <thead>
            <th>ID</th>
            <th>Nombre Cobertura</th>
            <th>Precio</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($coberturas as $cobertura)
                <tr>
                    <td>{{ $cobertura->id }}</td>
                    <td>{{ $cobertura->nombre }}</td>
                    <td>{{ $cobertura->precio }}</td>

                    <td><a href=" {{ route('admin.coberturas.edit', $cobertura->id) }} " class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                        <a href=" {{ route('admin.coberturas.destroy', $cobertura->id) }}" class="btn btn-warning" onclick="return confirm('seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $coberturas->render() !!}

@endsection