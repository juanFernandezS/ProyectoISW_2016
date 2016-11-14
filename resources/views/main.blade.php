<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>@yield('titulo','')  </title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>


    <section>
        <div class="container">
            @include('flash::message')
             <div class="panel panel-primary">
                 <div class="panel-heading"></div>
                 <div class="panel-body">@yield('content')
                </div>
            </div>
        </div>



    </section>

<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>