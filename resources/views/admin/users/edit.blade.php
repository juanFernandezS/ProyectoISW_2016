@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('content')

    {!! Form::model($user,['route' =>  ['admin.users.update', $user],  'method' => 'PUT']) !!}
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

        {!! Form::label('rut','Rut') !!}
        {!! Form::text('rut', null,['class' => 'form-control','placeholder' => ''] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre', null,['class' => 'form-control','placeholder' => ''] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono','Telefono') !!}
        {!! Form::text('telefono', null,['class' => 'form-control','placeholder' => ''] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('correo','Correo') !!}
        {!! Form::email('correo', null,['class' => 'form-control','placeholder' => ''] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('direccion','Direccion') !!}
        {!! Form::text('direccion', null,['class' => 'form-control','placeholder' => ''] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('estado','Estado') !!}
    {!! Form::select('id_estado',[
       '1'   =>  'Habilitado',
       '2'   =>  'No habilitado',
       '3'  =>  'Full-Time',
       '4'   =>  'Part-time',
        ],$user->id_estado, ['class'=>'form-control']) !!}
</div>


    <div class="form-group">
        {!! Form::label('tipos_de_usarios','Tipo') !!}
        {!! Form:: select('tipos_de_usuarios',[''=>'Seleccione un tipo','administrador'=>'adminstrador','cajero'=>'cajero','repartidor'=>'repartidor'])!!}

    </div>



    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
        <a href="{{route('admin.users.index') }} " class="btn btn-primary" role="button">Cancelar</a>

    </div>


    {!! Form::close() !!}


@endsection