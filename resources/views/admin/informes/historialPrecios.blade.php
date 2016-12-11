@extends('admin.template.main')

@section('titulo','Historial de Precios')

@section('content')
    <h4><b>Historial de Precios</b></h4>
    <table class="table" table-striped>
        <thead>
        <th>ID</th>
        <th>Nombre Cobertura</th>
        <th>Precio</th>
        <th>Fecha</th>
        </thead>

        <tbody>

        @foreach($coberturas as $cobertura)
            @if($cobertura->historial==true)
                <tr data-id="{{$cobertura->id}}" data-nombre="{{ $cobertura->nombre }}">

                    <td>{{ $cobertura->id }}</td>
                    <td>{{ $cobertura->nombre }}</td>
                    <td>{{ $cobertura->precio }}</td>
                    <td>{{ $cobertura->updated_at }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    {!! $coberturas->render() !!}

@endsection