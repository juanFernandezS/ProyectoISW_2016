@extends('admin.template.main')

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>


    @endif

{!!Form::open(['route' => 'admin.zonas.store' , 'method' => 'POST']) !!}



<br>

{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre Zona' , 'required']) !!}



<br>
<div class="form-group">
    {!! Form::submit('Registar',['class' => 'btn btn-primary','id'=>'Registrar','name'=>'Registrar','value'=>'Registrar']) !!}
</div>

    <a href="{{URL::to('admin/zonas')}}" class="btn btn-info" role="button">Volver</a>
{!! Form::close() !!}



@endsection

@section('section2')

@endsection