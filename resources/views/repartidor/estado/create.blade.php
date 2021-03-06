@extends('admin.template.main')

@section('titulo','Estado de la comanda')

@section('content')

    {!! Form::open(['route' => 'repartidor.EstadoComanda.store','method' =>'POST']) !!}
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
        {!! Form::label('estado','Comanda') !!}

        {!! Form::text('estado',null,['class' =>'form-control','placeholder'=>'Entregado o cancelado']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('registrar',['class' => 'btn btn-primary'])!!}
        <a href="{{route('repartidor.EstadoComanda.index') }} " class="btn btn-primary" role="button">Cancelar</a>

    {!! Form::close() !!}

@endsection


