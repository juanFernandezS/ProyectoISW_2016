@section('content')
    {!! Form::open(['route' => 'commonusers.comandas.store', 'method' => 'POST']) !!}

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

    @if(($request->id!='')AND() )
    @endif

    <div class="form-group">
        {!!Form::label('nombre','Nombre') !!}
        {!!Form::text('nombre', null, ['class'=> 'form-control','id'=>'nombre','name'=>'nombre', 'placeholder' => 'Nombre de la cobertura', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::label('precio','Precio($)') !!}
        {!!Form::text('precio', null, ['class'=> 'form-control','id'=>'precio','name'=>'precio', 'placeholder' => '10000', 'require']) !!}
    </div>

    <div class="form-group">
        {!!Form::submit('registrar', ['class' => 'btn btn-success']) !!}
        <a href="{{route('admin.coberturas.index') }} " class="btn btn-primary" role="button">Cancelar</a>
    </div>

    {!! Form::close()!!}

@endsection
