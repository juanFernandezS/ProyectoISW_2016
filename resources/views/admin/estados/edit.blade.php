@extends('admin.template.main')

@section('titulo','Editar Estaods')

@section('content')

    {!! Form::model($estados,['route' => ['admin.estados.update',$estados],'method' =>'PUT']) !!}
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
        {!! Form::label('nombre','Nombre estado') !!}

        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'Ingresar nombre']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class' => 'btn btn-primary'])!!}
        {!! Form::close() !!}
        <a href="{{route('admin.estados.index') }} " class="btn btn-primary" role="button">Cancelar</a>

    </div>
@endsection

