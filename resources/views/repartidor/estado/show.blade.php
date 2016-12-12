@extends('admin.template.main')

@section('titulo', 'eliminar estado usuario'. $estado_comanda->estado)

@section('content')
    {!! Form::open(['route' => ['repartidor.EstadoComanda.destroy', $estado_comanda], 'method' => 'GET']) !!}

    {!! Form::label('Estado de entrega a eliminar') !!}


    <div class="form-group">
        {!!Form::label('estado','Estado Comanda') !!}
        {!!Form::label('estado', $estado_comanda->estado) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('repartidor.EstadoComanda.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection