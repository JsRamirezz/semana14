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
        'nombre_servicio' => 'Candado completo',
        'precio' => 15.60,
        'descripcion' => 'Un estilo clásico de barba completa.',
        'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqXezszKLRzt_IU8cnhEMf3x94z1xJhpVmv4wFla8C2HMKxI2BN3_xcQR3G23wfLiplCo&usqp=CAU'
    ],
    (object)[
        'id' => 2,
        'nombre_servicio' => 'Candado con linea normal',
        'precio' => 50.90,
        'descripcion' => 'Un estilo moderno con una línea.',
        'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2GtiNLI1PPj6YQjz49pB9bT6CMZK81fTRow&s'
    ],
    (object)[
        'id' => 3,
        'nombre_servicio' => 'Candado con dos lineas',
        'precio' => 40.90,
        'descripcion' => 'Un estilo con dos líneas.',
        'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCTx58VQflXDPf33Ci94Y1nNcBqOn3IodHWg&s'
    ],
    (object)[
        'id' => 4,
        'nombre_servicio' => 'Candado linea moderna',
        'precio' => 32.15,
        'descripcion' => 'Un estilo moderno de candado.',
        'imagen_url' => 'https://i.pinimg.com/originals/b4/e3/0d/b4e30d86309daf5fb7b4971777884887.jpg'
    ],
    (object)[
        'id' => 5,
        'nombre_servicio' => 'Barba y bigote y dos lineas',
        'precio' => 39.99,
        'descripcion' => 'Estilo de barba y bigote con dos líneas.',
        'imagen_url' => 'https://i.pinimg.com/originals/5c/0a/b2/5c0ab25c1d41fca8bd073d35e43aee33.jpg'
    ],
    (object)[
        'id' => 6,
        'nombre_servicio' => 'Obalado sencillo y dos lineas',
        'precio' => 60.10,
        'descripcion' => 'Un estilo ovalado con dos líneas.',
        'imagen_url' => 'https://i.pinimg.com/736x/90/d4/97/90d4977c5450e62f00904119419e494a.jpg'
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
