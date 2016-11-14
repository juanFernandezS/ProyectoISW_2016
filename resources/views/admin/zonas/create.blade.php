@extends('commonusers.template.main')


@section('titlepanel','Crear Cliente')



@section('cliente-form')

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

@section('title','Ingresar Zona')

{!!Form::open(['route' => 'admin.zonas.store' , 'method' => 'POST']) !!}



<br>

{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre Zona' , 'required']) !!}



<br>
<div class="form-group">
    {!! Form::submit('Registar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}



@endsection

@section('section2')

@endsection