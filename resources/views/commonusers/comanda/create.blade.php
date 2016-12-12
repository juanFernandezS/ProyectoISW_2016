@extends('admin.template.main')

@section('title','Guardar Comanda')

@section('content')
    {!! Form::open(['route' => 'commonusers.comanda.store', 'method' => 'POST']) !!}

    @if($errors->has())
        <div class="alert alert-danger">
            <ul>
                <strong>Whoops!</strong> Hubo problemas con tus entradas.
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="form-group">
        {!!Form::label('Nota','Nota') !!}
        {!!Form::text('Nota', null, ['class'=> 'form-control','id'=>'nota','name'=>'nota', 'placeholder' => 'Nota']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('fecha','Fecha') !!}
        {!!Form::text('fecha', null, ['class'=> 'form-control','id'=>'fecha','name'=>'fecha', 'value'=>date('now'),'placeholder' => date('now'), 'readonly'=>'true']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('id_pago','pago') !!}
        <select class="form-control" id="id_pagos" name="id_pagos">
            @foreach(\App\Pago::all() as $pagos)
                <option value="{{$pagos->id }}">{{$pagos->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!!Form::submit('registrar', ['class' => 'btn btn-success']) !!}
        <a href="{{route('commonusers.comanda.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}

@endsection
