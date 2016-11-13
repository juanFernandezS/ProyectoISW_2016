@extends('admin.template.main')

@section('titulo','Editaringrediente')

@section('content')

    {!! Form::model($ingredientes,['route' => ['admin.ingrediente.update',$ingredientes],'method' =>'PUT']) !!}
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
        {!! Form::label('nombre','Editar ingrediente') !!}
        {!! Form::text('nombre',null,['class' =>'form-control','placeholder'=>'']) !!}
    </div>

    <div class="form-group">

    {!! Form::submit('Editar',['class' => 'btn btn-primary'])!!}


    {!! Form::close() !!}
        <a href="{{route('admin.ingrediente.index') }} " class="btn btn-primary" role="button">Cancelar</a>


@endsection

