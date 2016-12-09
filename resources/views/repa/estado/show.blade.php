@extends('admin.template.main')

@section('titulo', 'Cancelar pedido'. $estado->estado)

@section('content')
    {!! Form::open(['route' => ['repa.estadoPedidos.destroy', $estado], 'method' => 'GET']) !!}

    {!! Form::label('Pedido a cancelar') !!}


    <div class="form-group">
        {!!Form::label('estado','Estado') !!}
        {!!Form::label('estado', $estado->estado) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('repa.estadoPedidos.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection