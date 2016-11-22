@extends('admin.template.main')

@section('Coberturas','lista de coberturas')

@section('content')


    <a href="{{ route('admin.coberturas.create') }}" class="btn btn-info">Ingresar nueva cobertura</a><hr>
    <table class="table" table-striped>
        <thead>
            <th>ID</th>
            <th>Nombre Cobertura</th>
            <th>Precio</th>
            <th>Acción</th>
        </thead>

        <tbody>

            @foreach($coberturas as $cobertura)
                <tr data-id="{{$cobertura->id}}" data-nombre="{{ $cobertura->nombre }}">

                    <td>{{ $cobertura->id }}</td>
                    <td>{{ $cobertura->nombre }}</td>
                    <td>{{ $cobertura->precio }}</td>

                    <td><a href=" {{ route('admin.coberturas.edit', $cobertura->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href=" {{ route('admin.coberturas.show', $cobertura->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $coberturas->render() !!}

@endsection