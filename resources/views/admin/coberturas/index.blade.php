@extends('admin.template.main')

@section('Coberturas','lista de coberturas')

@section('content')


    <script>
        function mensaje_eliminar($cobertura){
            //return "seguro que quieres eliminar\n**nombre: **\n**precio: ";
            return "seguro que quieres eliminar\n**nombre: ",+$cobertura->nombre,"**\n**precio: ",+$cobertura->precio,"";
        }
    </script>

    <a href="{{ route('admin.coberturas.create') }}" class="btn btn-info">Ingresar nueva cobertura</a><hr>
    <table class="table" table-striped>
        <thead>
            <th>ID</th>
            <th>Nombre Cobertura</th>
            <th>Precio</th>
            <th>Acción</th>
        </thead>

        <tbody>

            @foreach($coberturas as $cobertura)
                <tr>
                    <td>{{ $cobertura->id }}</td>
                    <td>{{ $cobertura->nombre }}</td>
                    <td>{{ $cobertura->precio }}</td>

                    <td><a href=" {{ route('admin.coberturas.edit', $cobertura->id) }} " class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href=" {{ route('admin.coberturas.destroy', $cobertura->id) }}" class="btn btn-danger" onclick= "return confirm(mensaje_eliminar($cobertura))"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $coberturas->render() !!}

@endsection