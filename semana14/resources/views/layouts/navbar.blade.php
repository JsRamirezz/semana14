<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/styleCategorias.css') }}"> -->

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RESERVAS DE PRODUCTOS EN LA TIENDITA</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('categorias')}}">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('indexx')}}">Tienda Barbershop</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('reservas')}}">Reservar cita</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('citas') }}">Citas</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('contacto')}}">Contactanos</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Inventario</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('forminsertar')}}">Añadir producto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
