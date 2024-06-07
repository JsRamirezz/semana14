<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Barbershop Cousins Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/styleContacto.css') }}">
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
    <form action="#" method="post">
        <br>
        <h2>¡¡Contáctate con nosotros!!</h2>
        <p>¿Cómo podemos ayudarles?<span aria-hidden="true">*</span></p>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Número de teléfono</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="phone">Comentarios</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button type="submit">Enviar mensaje</button>
    </form>
<br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>