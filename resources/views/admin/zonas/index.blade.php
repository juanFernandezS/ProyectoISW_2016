
@extends('commonusers.template.main')

@section('title','Lista de Zonas')

@section('titlepanel','Lista de Zonas')
@section('cliente-form')

    <a href="{{route('admin.zonas.create')}}" class="btn btn-info">Nueva Zona</a>
    <br>
    <br>
    <table class="table table-striped">
        <thread>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thread>
        <tbody>
        @foreach($zona as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>
                    <a href="{{route('admin.zonas.edit',$item->id)}}"
                       class="btn btn-warning">
                        <span class=" glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{route('admin.zonas.destroy',$item->id)}}"
                       onclick="return confirm('Seguro?')"
                       class="btn btn-danger">

                        <span class="glyphicon glyphicon-remove-sign"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $zona->render() !!}
@endsection