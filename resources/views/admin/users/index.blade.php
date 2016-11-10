@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <a href="{{route('admin.users.create')}}" class="btn btn-info"> Registrar nuevo usuario </a><hr>
    <table class="table,table-striped">
        <thead>

        <th>Rut</th>
        <th>Nombre</th>
        <th>telefono</th>
        <th>correo</th>
        <th>direccion</th>

        </thead>

        <tbody>
        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>

                <td>{{$user->nombre}}</td>
                <td>{{$user->telefono}}</td>
                <td>{{$user->correo}}</td>
                <td>{{$user->direccion}}</td>
                <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @stop