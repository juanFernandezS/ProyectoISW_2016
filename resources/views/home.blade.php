@extends('admin.template.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <h4><b>BIENVENIDO ****{{ Auth::user ()->nombre }}****, AL SISTEMA GESTION DE COMADAS Y REPARTO SANTOKU-SUSHI</b></h4>
                </div>
        </div>
    </div>
</div>
@endsection
