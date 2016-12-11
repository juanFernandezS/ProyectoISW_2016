@extends('admin.template.main')

@section('titulo','Crear Tipo de Pago')

@section('content')

    {!! Form::open(['route' => 'admin.pagos.store','method' =>'POST']) !!}
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
        {!! Form::label('tipo_pago','Tipo de pago(remplazar el espacio con letra en mayuscula)') !!}

        {!! Form::text('tipo_pago',null,['class' =>'form-control','placeholder'=>'Ingresar nombre']) !!}
    </div>


    <div class="form-group">

        {!! Form::submit('registrar',['class' => 'btn btn-primary'])!!}
        <a href="{{route('admin.pagos.index') }} " class="btn btn-primary" role="button">Cancelar</a>



    {!! Form::close() !!}

@endsection


