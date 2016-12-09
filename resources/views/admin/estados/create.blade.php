@extends('admin.template.main')

@section('titulo','Crear Estado de los Usuarios')

@section('content')

    {!! Form::open(['route' => 'admin.estados.store','method' =>'POST']) !!}
    @if($errors->has())
        <div class="alert alert-danger">
            <ul>
                <strong>Uppss!</strong> Hubo problemas con tus entradas.
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        {!! Form::label('nombre','Tipo de usuario') !!}

        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'Ingresar nombre']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('registrar',['class' => 'btn btn-primary'])!!}
        <a href="{{route('admin.estados.index') }} " class="btn btn-primary" role="button">Cancelar</a>



    {!! Form::close() !!}

@endsection


