@extends('admin.template.main')

@section('title','lista de Comandas')

@section('content')
    <a href="{{ route('commonusers.comanda.create') }}" class="btn btn-info">Ingresar nueva comanda</a><hr>
    <table class="table" table-striped>
        <thead>
        <th>ID</th>
        <th>Nota</th>
        <th>Fecha</th>
        <th>Usuario</th>
        <th>Estado</th>
        <th>Cliente</th>
        <th>Pago</th>
        <th>Acciones</th>
        </thead>

        <tbody>

        @foreach($comandas as $comanda)
                <tr data-id="{{$comanda->id}}" data-nombre="{{ $comanda->nombre }}">

                    <td>{{ $comanda->id }}</td>
                    <td>{{ $comanda->nota }}</td>
                    <td>{{ $comanda->fecha }}</td>
                    <td>{{ $comanda->id_user }}</td>
                    <td>{{ $comanda->id_estado_comanda }}</td>
                    <td>{{ $comanda->id_cliente }}</td>
                    <td>{{ $comanda->id_pago }}</td>

                    <td><a href=" {{ route('admin.comanda.edit', $comanda->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <td><a href=" {{ route('admin.comanda.destroy', $comanda->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>

    {!! $comandas->render() !!}


@endsection