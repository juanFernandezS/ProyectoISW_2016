@extends('commonusers.template.main')

@section('title','Editar Cliente ')

@section('titlepanel','Editar Cliente: '.$cliente->nombre)



@section('cliente-form')

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


    {!!Form::model($cliente,['route' => ['commonusers.clientes.update',$cliente] , 'method' => 'PUT']) !!}

    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono',$cliente->telefono,['class' => 'form-control', 'placeholder' => 'Telefono' , 'required']) !!}

    <br>

    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder' => 'Nombre completo' , 'required']) !!}


    <br>

    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion',$cliente->direccion,['class' => 'form-control', 'placeholder' => 'Direccion' , null]) !!}


    <br>


    {!! Form::select('id_zona',[
   '1'   =>  'Concepcion',
   '2'   =>  'Collao',
   '3'  =>  'Barrio Norte',
   '4'   =>  'Hualpen',
   '5'  =>  'Talcahuano',
    ],$cliente->id_zona, ['class'=>'form-control']) !!}



    <br>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-warning']) !!}

    </div>

    {!! Form::close() !!}



@endsection

@section('section2')

@endsection