<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Tienda Barbershop Cousins Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/styleReserva.css') }}">
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
<section class="booking">
    <h2>Reserva tu Cita</h2>
    <div id="app">
        <citas-form :estilistas="{{ json_encode($estilistas) }}" :servicios="{{ json_encode($servicios) }}"></citas-form>
    </div>


</section>
<br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>