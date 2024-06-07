<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Barbershop Cousins Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
</head>
<body>
@include('layouts.navbar')
<div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-white mb-4">Bienvenidos a Cousins Barbershop</h1>
            <br>
            <p class="lead text-white">¡Encuentra el mejor servicio al mejor precio!</p>
        </div>
    </div>
    <br/>
    <h2 class="text-center">Categorias</h2>
    <br>
    <div class="row"> 
            <div class="col-sm-4">
                <div class="card">
                <a href="{{route('cabello')}}"  style="align-self: center;">
                    <img style="width: 300px; height: 300px; align-self: center;" src="https://i.pinimg.com/564x/9c/25/9c/9c259c396773145a59ae2e87d3bb51c3.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Cortes de cabello</h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <a href="{{route('barba')}}" style="align-self: center;">
                    <img style="width: 300px; height: 300px;" src="https://img.maspormas.com/2017/06/shutterstock_364870139.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Corte de barba</h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <a href="{{route('cejas')}}"  style="align-self: center;">
                    <img style="width: 300px; height: 300px; align-self: center;" src="https://img77.uenicdn.com/image/upload/v1618604816/business/f4502534d0614697a2c10ad230179068.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body">
                       <h5 class="card-title text-center">Perfilado de cejas</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>