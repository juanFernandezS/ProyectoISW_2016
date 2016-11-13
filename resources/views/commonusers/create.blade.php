@extends('commonusers.template.main')

@section('title','Crear Usuario')

@section('cliente-form')

    {!!Form::open(['route' => 'commonusers.clientes.store' , 'method' => 'POST']) !!}

    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono',null,['class' => 'form-control', 'placeholder' => 'Telefono' , 'required']) !!}

    <br>

    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre completo' , 'required']) !!}


    <br>

    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion',null,['class' => 'form-control', 'placeholder' => 'Direccion' , null]) !!}


    <br>


    {!! Form::label('id_zona', 'Zona') !!}
    {!! Form::select('id_zona',[
    '1'   =>  'Concepcion',
    'cll'   =>  'Collao',
    'bnor'  =>  'Barrio Norte',
    'hpn'   =>  'Hualpen',
    'thno'  =>  'Talcahuano',
     ],'null', ['class'=>'form-control']) !!}

    <br>
    <div class="form-group">
        {!! Form::submit('Registar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection

@section('section2')

    @endsection