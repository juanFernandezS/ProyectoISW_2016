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

    <!-- estilo del login-->
{{ Html::style("plugins/others/login.css") }}

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
<body class="hold-transition skin-blue sidebar-mini" background="">
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

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <li><a class="btn btn-primary" data-toggle="modal" data-target="#myModal"><b>Iniciar Sesión</b></a></li></li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Iniciar</h4>
                </div> <!-- /.modal-header -->

                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('auth/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="text" name="rut" class="form-control" placeholder="Rut" value="{{ old('rut') }}">
                                @if ($errors->has('rut'))
                                        {{ $error_rut=$errors->first('rut') }}
                                @endif
                                <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="Clave">
                                @if ($errors->has('password'))
                                        {{ $error_pass = $errors->first('password') }}
                                @endif
                                <span class="input-group-addon"><i class=" glyphicon glyphicon-lock"></i></span>
                            </div> <!-- /.input-group -->
                        </div> <!-- /.form-group -->

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Recordarme
                            </label>
                        </div> <!-- /.checkbox -->
                        <div class="modal-footer">
                            <button class="form-control btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Ok</button>
                        </div> <!-- /.modal-footer -->
                    </form>

                </div> <!-- /.modal-body -->



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <section>
        <div class="container">
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
        </div>



    </section>
</div>


<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>