@extends('admin.template.main')

@section('titulo', 'Sin entregar')

@section('content')
    {!! Form::open(['route' => 'repa.estadoPedidos.store', 'method' => 'POST']) !!}

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
        {!!Form::label('estado','Estado') !!}
        {!!Form::text('estado', null, ['class'=> 'form-control', 'placeholder' => 'Estado del pedido', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('registrar', ['class' => 'btn btn-success']) !!}
        <a href="{{route('repa.estadoPedidos.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

   {!! Form::close()!!}

@endsection
