@extends('admin.template.main')

@section('titulo', 'Estado del pedido |'.$estado->estado)

@section('content')
    {!! Form::open(['route' => ['repa.estado.update', $estado], 'method' => 'PUT']) !!}

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
        {!!Form::label('estado','Estado del pedido') !!}
        {!!Form::text('estado', $estado->estado , ['class'=> 'form-control', 'placeholder' => 'Estado', 'require']) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Editar', ['class' => 'btn btn-warning']) !!}
        <a href="{{route('repa.estado.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}

@endsection