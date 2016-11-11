@extends('admin.template.main')

@section('titulo','Editar')

@section('content')
    {!! Form::model($ingredientes,['route' => ['admin.ingrediente.update',$ingredientes],'method' =>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Editar ingrediente') !!}
        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'']) !!}
    </div>

    <div class="form-group">

    {!! Form::submit('Editar',['class' => 'btn btn-primary'])!!}

    {!! Form::close() !!}

@endsection

