@extends('admin.template.main')

@section('title','Editar Cliente ')

@section('titlepanel','Editar Cliente: '.$cliente->nombre)


@section('content')

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

    <select class="form-control" id="id_zona" name="id_zona">

        @foreach(\App\Zona::all() as $zona)
            <option value="{{$zona->id }}">{{$zona->nombre}}</option>
        @endforeach
    </select>



    <br>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-warning']) !!}

    </div>

    {!! Form::close() !!}
    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
    <div class="col-xs-12 col-md-8">
    <div class="row">
        {!! $map['html'] !!}
    </div>
    </div>


@endsection

@section('section2')



@endsection