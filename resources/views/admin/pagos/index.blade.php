@extends('admin.template.main')
@section('titulo','Lista de tipo de pago')
@section('content')

        <a href="{{route('admin.pagos.create')}}" class="btn btn-info"> Registar nuevo tipo de pago</a><hr>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>tipo de pago</th>
                 <th>Accion</th>
            </thead>
           <tbody>
           <div>

            {!! Form::label('tipo_pago','Listado de tipos de pago') !!}
            </div><hr>
                @foreach($pagos as $pago)
                    <tr>
                        <td>{!! $pago->id !!}</td>
                        <td> {!!$pago->tipo_pago !!}</td>
                        <td><a href=" {{ route('admin.pagos.edit', $pago->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                            <a href=" {{ route('admin.pagos.show', $pago->id) }}" class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    </tr>


                @endforeach()

            </tbody>

        </table>


        {!! $pagos->render() !!}

@endsection

