@extends('admin.template.main')

@section('titulo', 'eliminar  usuario'. $user->nombre)

@section('content')
    {!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'GET']) !!}

    {!! Form::label('Estado de usuario a eliminar') !!}


    <div class="form-group">
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::label('nombre', $user->nombre) !!}
    </div>


    <div class="form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        <a href="{{route('admin.users.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}


@endsection