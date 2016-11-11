@extends('admin.template.main')

@section('titulo','Crear')

@section('content')

    {!! Form::open(['route' => 'admin.ingrediente.store','method' =>'POST']) !!}
    @if($errors->has())
        <div class="alert alert-danger">
            <ul>
                <strong>Whoops!</strong> Hubo problemas con tus entradas.
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        {!! Form::label('nombre','Nombre ingrediente') !!}
        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'Ingresar nombre']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('registrar',['class' => 'btn btn-primary'])!!}


    {!! Form::close() !!}

@endsection


