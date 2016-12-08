<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Santoku-Sushi</a>
            <a class="navbar-brand" href="{{route('admin.users.index')}}">Usuario</a>
            <a class="navbar-brand" href="{{route('admin.ingrediente.index')}}">Ingrediente</a>
            <a class="navbar-brand" href="{{route('admin.coberturas.index')}}">Cobertura</a>

        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                        <li role="separator" class="divider"></li>
                <a class="navbar-brand" method= "GET" href="{{url('auth/logout')}}">Cerrar Sesion</a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>