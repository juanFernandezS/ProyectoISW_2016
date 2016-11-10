@extends('admin.template.main')

@section('titulo','editar ingrediente')

@section('content')
    {!! Form::model($ingredientes,['route' => ['admin.ingrediente.store',$ingredientes],'method' =>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre ingrediente') !!}
        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'']) !!}
    </div>

    <div class="form-group">

    {!! Form::submit('registrar',['class' => 'btn btn-primary'])!!}

    {!! Form::close() !!}

@endsection

