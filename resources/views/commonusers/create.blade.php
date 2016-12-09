@extends('admin.template.main')


@section('titlepanel','Crear Cliente')



@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
            </ul>
        </div>


    @endif

    @section('title','Ingresar Cliente')

    {!!Form::open(['route' => 'commonusers.clientes.store' , 'method' => 'POST']) !!}

    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::number('telefono',null,['class' => 'form-control', 'placeholder' => 'Telefono' , 'required']) !!}

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
    '2'   =>  'Collao',
    '3'  =>  'Barrio Norte',
    '4'   =>  'Hualpen',
    '5'  =>  'Talcahuano',
     ],'null', ['class'=>'form-control']) !!}

    <br>
    <div class="form-group">
        {!! Form::submit('Registar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection

@section('section2')

    @endsection