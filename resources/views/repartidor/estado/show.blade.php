@extends('admin.template.main')

@section('titulo', 'eliminar estado usuario'. $estado->nombre)

@section('content')
    {!! Form::open(['route' => ['admin.estados.destroy', $estado], 'method' => 'GET']) !!}

    {!! Form::label('Estado de usuario a eliminar') !!}


    <div class="form-group">
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::label('nombre', $estado->nombre) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('admin.estados.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection