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
@php
$servicios = [
    (object)[
        'id' => 1,
        'nombre_servicio' => 'Corte preciso de cejas',
        'precio' => 15.25,
        'descripcion' => 'Un corte preciso y limpio de cejas para un look natural.',
        'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhxW0mD6e2OOYlyyOe9d8m3JfZthG9A68nmkmdJNYWURLr2Z3XIWLayMLBq18p87qAEnI&usqp=CAU'
    ],
    (object)[
        'id' => 2,
        'nombre_servicio' => 'Corte y forma de cejas',
        'precio' => 25.50,
        'descripcion' => 'Un corte y forma de cejas profesional para un look estilizado.',
        'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk_Ubq0Pv3tzb90sKYaxa-f9xaI9qbBrDZcydWHg7vOlnbGI2d1pgL4erb3eb0QkS_ikk&usqp=CAU'
    ],
    (object)[
        'id' => 3,
        'nombre_servicio' => 'Corte preciso de cejas',
        'precio' => 40.90,
        'descripcion' => 'Un corte preciso y detallado de cejas para un look definido.',
        'imagen_url' => 'https://i.pinimg.com/564x/82/fb/b5/82fbb57afced4bc0d37deda1d631a633.jpg'
    ],
    (object)[
        'id' => 4,
        'nombre_servicio' => 'Corte personalizado de cejas',
        'precio' => 30.25,
        'descripcion' => 'Un corte personalizado de cejas adaptado a tus preferencias.',
        'imagen_url' => 'https://i.pinimg.com/564x/a5/2b/0c/a52b0c58eb726fed32deedafc3b08694.jpg'
    ],
    (object)[
        'id' => 5,
        'nombre_servicio' => 'Corte artístico de cejas',
        'precio' => 45.80,
        'descripcion' => 'Un corte artístico de cejas para un look único y creativo.',
        'imagen_url' => 'https://i.pinimg.com/564x/8b/6d/b4/8b6db48f86a592b97afabea47c0ac8b7.jpg'
    ],
    (object)[
        'id' => 6,
        'nombre_servicio' => 'Corte detallado de cejas',
        'precio' => 35.25,
        'descripcion' => 'Un corte detallado de cejas para una apariencia elegante y pulida.',
        'imagen_url' => 'https://i.pinimg.com/564x/e7/4f/01/e74f01d5836c68403a4cade78f162921.jpg'
    ]
];
@endphp

    @foreach($servicios as $servicio)
        <div class="col-sm-4">
            <div class="card">
                <img style="width: 300px; height: 300px; align-self: center;" src="{{ $servicio->imagen_url }}" class="card-img-top" alt="{{ $servicio->nombre_servicio }}">
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $servicio->nombre_servicio }}</h5>
                    <p class="card-text">Precio: ${{ $servicio->precio }}</p>
                    <p class="card-text">Descripción: {{ $servicio->descripcion }}</p>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
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

<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
