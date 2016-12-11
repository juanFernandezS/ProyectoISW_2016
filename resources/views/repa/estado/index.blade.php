@extends('admin.template.main')

@section('titulo','lista de coberturas')

@section('content')

    <a href="{{ route('repa.estadoPedidos.create') }}" class="btn btn-info">Nuevo estado</a><hr>
    <table class="table" table-striped>
        <thead>
            <th>ID</th>
            <th>Estado del pedido</th>
        </thead>

        <tbody>

            @foreach($estados as $estado)
                <tr data-id="{{$estado->id}}" data-nombre="{{ $estado->estado }}">

                    <td>{{ $estado->id }}</td>
                    <td>{{ $estado->estado }}</td>

                    <td><a href=" {{ route('repa.estadoPedidos.edit', $estado->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href=" {{ route('repa.estadoPedidos.show', $estado->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $estado->render() !!}

@endsection