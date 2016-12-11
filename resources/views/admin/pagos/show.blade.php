@extends('admin.template.main')

@section('titulo', 'eliminar tipo de pago'. $pago->name)

@section('content')
    {!! Form::open(['route' => ['admin.pagos.destroy', $pago], 'method' => 'GET']) !!}

    {!! Form::label('Tipo de pago a eliminar') !!}


    <div class="form-group">
        {!!Form::label('tipo_pago','Tipo de pago:') !!}
        {!!Form::label('tipo_pago', $pago->tipo_pago) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('admin.pagos.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection