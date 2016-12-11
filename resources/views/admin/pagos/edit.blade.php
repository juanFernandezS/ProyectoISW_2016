@extends('admin.template.main')

@section('titulo','Editar tipo de pago')

@section('content')

    {!! Form::model($pagos,['route' => ['admin.pagos.update',$pagos],'method' =>'PUT']) !!}
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
        {!! Form::label('tipo_pago','tipo de pago') !!}

        {!! Form::text('tipo_pago',null,['class' =>'form-control','placeholder'=>'Ingresar tipo de pago']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Editar',['class' => 'btn btn-primary'])!!}
        {!! Form::close() !!}
        <a href="{{route('admin.pagos.index') }} " class="btn btn-primary" role="button">Cancelar</a>

    </div>
@endsection

