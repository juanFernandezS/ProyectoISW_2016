@extends('admin.template.main')

@section('titulo', 'eliminar coberturas'. $cobertura->name)

@section('content')
    {!! Form::open(['route' => ['admin.coberturas.destroy', $cobertura], 'method' => 'GET']) !!}

    {!! Form::label('Cobertura a eliminar') !!}


    <div class="form-group">
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::label('nombre', $cobertura->nombre) !!}
    </div>

    <div class="form-group">
        {!!Form::label('precio','Precio($)') !!}
        {!!Form::label('precio', $cobertura->precio) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('admin.coberturas.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection