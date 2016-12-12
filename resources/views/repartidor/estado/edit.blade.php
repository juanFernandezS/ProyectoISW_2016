@extends('admin.template.main')

@section('titulo','Editar Estado Comanda')

@section('content')

    {!! Form::model($estados,['route' => ['repartidor.estado.update',$estados],'method' =>'PUT']) !!}
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
        {!! Form::label('estado','Estado comanda') !!}

        {!! Form::text('estado',null,['class' =>'form-control','placeholder'=>'Ingresar estado comanda']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class' => 'btn btn-primary'])!!}
        {!! Form::close() !!}
        <a href="{{route('repartidor.estado.index') }} " class="btn btn-primary" role="button">Cancelar</a>

    </div>
@endsection

