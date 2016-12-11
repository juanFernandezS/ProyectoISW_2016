@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

  {!! Form::open(['route' =>  'admin.users.store',  'method' => 'POST']) !!}
    <div>      {!! Form::label('nombre','Crear Usuario') !!}</div><hr>

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
      {!! Form::text('rut', null,['class' => 'form-control','placeholder' => '18.811.415-6','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('nombre','Nombre') !!}
      {!! Form::text('nombre', null,['class' => 'form-control','placeholder' => 'Nombre Completo','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('telefono','Telefono') !!}
      {!! Form::text('telefono', null,['class' => 'form-control','placeholder' => '+56957004821','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('correo','Correo') !!}
      {!! Form::email('correo', null,['class' => 'form-control','placeholder' => 'felipe.igonza@outlook.cl','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('direccion','Direccion') !!}
      {!! Form::text('direccion', null,['class' => 'form-control','placeholder' => 'Maipu #193 Dpto B','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('password','Contraseña') !!}
      {!! Form::password('password',['class' => 'form-control','placeholder' => '*********','required'] ) !!}
  </div>

  <div class="form-group">
      {!! Form::label('tipos_de_usarios','Tipo') !!}
      {!! Form:: select('tipos_de_usuarios',[''=>'Seleccione un tipo','administrador'=>'adminstrador','cajero'=>'cajero','repartidor'=>'repartidor'])!!}
        &nbsp;

      {!! Form::label('estado','Estados') !!}
      {!! Form:: select('estado',['vigente'=>'vigente','no vigente'=>'no vigente'])!!}

  </div>


  <div class="form-group">
      {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
      <a href="{{route('admin.users.index') }} " class="btn btn-primary" role="button">Cancelar</a>

  </div>


   {!! Form::close() !!}


    @endsection