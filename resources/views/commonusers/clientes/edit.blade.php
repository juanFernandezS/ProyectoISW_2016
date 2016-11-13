@extends('commonusers.template.main')

@section('title','Editar Cliente')

@section('cliente-form')

    {!!Form::model(['route' => 'commonusers.clientes.update' , 'method' => 'PUT']) !!}

    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono',$cliente->telefono,['class' => 'form-control', 'placeholder' => 'Telefono' , 'required']) !!}

    <br>

    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder' => 'Nombre completo' , 'required']) !!}


    <br>

    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion',$cliente->direccion,['class' => 'form-control', 'placeholder' => 'Direccion' , null]) !!}


    <br>


    {!! Form::label('id_zona', 'Zona') !!}
    {!! Form::select('id_zona',[
    '$cliente->id_zona'   =>  'Concepcion',
    '$cliente->id_zona'   =>  'Collao',
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