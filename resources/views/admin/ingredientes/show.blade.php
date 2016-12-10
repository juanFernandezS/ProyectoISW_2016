@extends('admin.template.main')

@section('titulo', 'eliminar ingrediente'. $ingredientes->nombre)

@section('content')
    {!! Form::open(['route' => ['admin.ingredientes.destroy', $ingredientes], 'method' => 'GET']) !!}

    {!! Form::label('Ingrediente a eliminar') !!}


    <div class="form-group">
        {!!Form::label('nombre','Nombre del ingrediente:') !!}
        {!!Form::label('nombre', $ingredientes->nombre) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('admin.ingrediente.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection