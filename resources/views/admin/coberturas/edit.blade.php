@extends('admin.template.main')

@section('titulo', 'editar coberturas'. $cobertura->name)

@section('content')
    {!! Form::open(['route' => ['admin.coberturas.update', $cobertura], 'method' => 'PUT']) !!}

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
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::text('nombre', $cobertura->nombre , ['class'=> 'form-control', 'placeholder' => 'Nombre de la cobertura', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('precio','Precio($)') !!}
        {!!Form::text('precio', $cobertura->precio, ['class'=> 'form-control', 'placeholder' => '10000', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close()!!}

@endsection