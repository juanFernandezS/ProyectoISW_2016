@extends('admin.template.main')

@section('titulo','lista de coberturas')

@section('content')
    <table class="table" table-striped>
        <thead>
            <th>ID</th>
            <th>Nombre Cobertura</th>
            <th>Precio</th>
        </thead>
        <tbody>
            @foreach($coberturas as $cobertura)
                <tr>
                    <td>{{ $cobertura->id }}</td>
                    <td>{{ $cobertura->nombre }}</td>
                    <td>{{ $cobertura->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection