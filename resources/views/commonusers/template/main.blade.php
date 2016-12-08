<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','titulo default') | Santoku Sushi</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</head>
<body>

@include('commonusers.template.nav')

<section>

    <div class="container">
        @include('flash::message')
        <div class="panel panel-primary">
            <div class="panel-heading">@yield('titlepanel','Default')
            </div>
            <div class="panel-body">@yield('cliente-form')
            </div>
        </div>

    </div>
</section>

<section>

    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">Pedido</div>

            <div class="panel-body">@yield('content2')

            </div>
        </div>

    </div>
</section>
</body>


<div class="panel panel-default">
    <div class="panel-body">
        Santoku Sushi Delivery &copy; - Grupo 1
    </div>
</div>


</html>