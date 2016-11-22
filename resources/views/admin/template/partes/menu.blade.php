<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Santoku-Sushi</a>
            <a class="navbar-brand" href="{{route('admin.users.index')}}">Usuario</a>
            <a class="navbar-brand" href="{{route('admin.ingrediente.index')}}">Ingrediente</a>
            <a class="navbar-brand" href="{{route('admin.coberturas.index')}}">Cobertura</a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">

                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.users.index')}}">Usuario</a></li>
                        <li><a href="{{route('admin.ingrediente.index')}}">Ingredientes</a></li>
                        <li><a href="{{ route('admin.coberturas.index') }}">Coberturas</a></li>
                        <li><a href="#">Comandas</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
              </form>
            <ul class="nav navbar-nav navbar-right">

                        <li role="separator" class="divider"></li>
                <a class="navbar-brand" method= "GET" href="{{url('auth/logout')}}">Cerrar Sesion</a>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>