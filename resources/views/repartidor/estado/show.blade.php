@extends('admin.template.main')

@section('titulo', 'eliminar estado usuario'. $estado->estado)

@section('content')
    {!! Form::open(['route' => ['repartidor.EstadoComanda.destroy', $estado], 'method' => 'PUT']) !!}

    {!! Form::label('Estado de entrega a eliminar') !!}


    <div class="form-group">
        {!!Form::label('estado','Estado Comanda') !!}
        {!!Form::label('estado', $estado->estado) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('repartidor.EstadoComanda.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection