<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('Santoku Sushi |', '')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {{ Html::style("plugins/others/bootstrap/css/bootstrap.min.css") }}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {{ Html::style("plugins/others/dist/css/AdminLTE.min.css") }}
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    {{ Html::style("plugins/others/dist/css/skins/skin-blue.min.css") }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Santoku</b>Sushi</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown">
                            <li><a href="{{URL::to('auth/logout')}}"><b>Cerrar Sesion</b></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="active"><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

                <!-- Optionally, you can add icons to the links -->

                <!--li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li-->

                <li class="header">Adminstrar</li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-folder"></i> <span>Usuarios</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/users')}}">Ver listado</a></li>
                        <li><a href="{{URL::to('admin/users/create')}}">Crear nuevo</a></li>
                        <li><a href="{{URL::to('admin/users')}}">Modificar datos</a></li>
                        <li><a href="{{URL::to('admin/users')}}">Eliminar usuario</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-folder"></i> <span>Productos</span>
                        <span class="pull-right-container">
            	  	<i class="fa fa-angle-left pull-right"></i>
            	</span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#"><i class="fa fa-folder"></i> <span>Ingredientes</span>
                                <span class="pull-right-container">
              				<i class="fa fa-angle-left pull-right"></i>
            			</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('admin/ingrediente')}}">Ver listado</a></li>
                                <li><a href="{{URL::to('admin/ingrediente/create')}}">Crear nuevo</a></li>
                                <li><a href="{{URL::to('admin/ingerdiente')}}">Modificar datos</a></li>
                                <li><a href="{{URL::to('admin/ingrediente')}}">Eliminar ingrediente</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-folder"></i> <span>Coberturas</span>
                                <span class="pull-right-container">
              				<i class="fa fa-angle-left pull-right"></i>
            			</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('admin/coberturas')}}">Ver listado</a></li>
                                <li><a href="{{URL::to('admin/coberturas/create')}}">Crear nuevo</a></li>
                                <li><a href="{{URL::to('admin/coberturas')}}">Modificar datos</a></li>
                                <li><a href="{{URL::to('admin/coberturas')}}">Eliminar Cobertura</a></li>
                            </ul>
                        </li>

                    </ul>

                <li class="treeview">
                    <a href="#"><i class="fa fa-folder"></i> <span>Zona reparto</span>
                        <span class="pull-right-container">
              				<i class="fa fa-angle-left pull-right"></i>
            			</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/zonas')}}">Ver listado</a></li>
                        <li><a href="{{URL::to('admin/zonas/create')}}">Crear nuevo</a></li>
                        <li><a href="{{URL::to('admin/zonas')}}">Modificar datos</a></li>
                        <li><a href="{{URL::to('admin/zonas')}}">Eliminar Zona</a></li>
                    </ul>
                </li>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-folder"></i> <span>Datos clientes</span>
                        <span class="pull-right-container">
            	  	<i class="fa fa-angle-left pull-right"></i>
            		</span>
                    </a>
                        <ul class="treeview-menu">
                           <li><a href="{{URL::to('commonusers/clientes')}}">Ver listado</a></li>
                           <li><a href="{{URL::to('commonusers/clientes/create')}}">Crear nuevo</a></li>
                           <li><a href="{{URL::to('commonusers/clientes')}}">Modificar datos</a></li>
                           <li><a href="{{URL::to('commonusers/clientes')}}">Eliminar cliente</a></li>
                        </ul>
                </li>
                <li class="header">Informes</li>
                <li class="treeview"><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Ventas del dia</span></a></li>
                <li class="treeview"><a href="{{URL::to('admin/informes/historialPrecios')}}"><i class="fa fa-file-pdf-o"></i> <span>Historial de precios</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            <div class="container" >
                @include('flash::message')
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body">@yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Santoku Sushi Delivery</a>.</strong> Todos los derechos reservados.
    </footer>


</div>
<!--script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.6 -->
{{ Html::script("plugins/others/dist/js/app.min.js") }}

{{ Html::script("plugins/others/bootstrap/js/bootstrap.min.js") }}
<!-- AdminLTE App -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>