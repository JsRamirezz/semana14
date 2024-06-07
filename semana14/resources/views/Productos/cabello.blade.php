<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Barbershop Cousins Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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

    <div class="row"> 
    @foreach($servicios as $servicio)
        <div class="col-sm-4">
            <div class="card">
                <img style="width: 300px; height: 300px; align-self: center;" src="https://formatoapa.com/wp-content/uploads/2020/12/12f628abd2f3ccdd00d0ba0c6262ebdd-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $servicio->nombre_servicio }}</h5>
                    <p class="card-text">Precio: ${{ $servicio->precio }}</p>
                    <p class="card-text">Descripción: {{ $servicio->descripcion }}</p>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $servicio->id }}" id="id" name="id">
                        <input type="hidden" value="{{ $servicio->nombre_servicio }}" id="name" name="nombre_servicio">
                        <input type="hidden" value="{{ $servicio->precio }}" id="price" name="precio">
                        <button type="submit" class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                            <i class="fa fa-shopping-cart"></i> Agregar al carrito
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>

    <br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>