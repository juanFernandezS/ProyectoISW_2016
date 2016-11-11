@extends('admin.template.main')

@section('titulo', 'agregar coberturas')

@section('content')
    {!! Form::open(['route' => 'admin.coberturas.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::text('nombre', null, ['class'=> 'form-control', 'placeholder' => 'Nombre de la cobertura', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('precio','Precio($)') !!}
        {!!Form::text('precio', null, ['class'=> 'form-control', 'placeholder' => '10000', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('registrar', ['class' => 'btn btn-primary']) !!}
    </div>

   {!! Form::close()!!}

@endsection
