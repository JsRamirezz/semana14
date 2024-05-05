<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Barbershop Supply Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">¡¡¡Reservar Con Nosotros Es Mejor!!!</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('indexx')}}">Home</a>
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

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-white mb-4">Bienvenidos a Barbershop Supply Shop</h1>
            <p class="lead text-white">¡Encuentra los mejores productos al mejor precio!</p>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h2>Categorías</h2>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://bellezammc.com.gt/wp-content/uploads/2022/05/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Cepillo para el polvo</h5>
                        <p class="card-text">Precio: $5.90</p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/61lPohH6RuL._SX466_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Maquinilla de afeitar recta</h5>
                        <p class="card-text">Precio: $50.90</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/61Qnhd6u7VL._AC_SL1500_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Botella de Spray Continuo</h5>
                        <p class="card-text">Precio: $40.90</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://i.ebayimg.com/images/g/I4YAAOSwavRibKK0/s-l500.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Capa de barbero</h5>
                        <p class="card-text">Precio: $30.70</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/41LLjM5IFSL._SX300_SY300_QL70_FMwebp_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Crema de afeitar</h5>
                        <p class="card-text">Precio: $9.88</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2022/03/24/16481304156092.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Kits para el cuidado de la barba</h5>
                        <p class="card-text">Precio: $120.20</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_733703-MLU74091361221_012024-O.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Maquina para cortar cabello</h5>
                        <p class="card-text">Precio: $150.80</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://kissbel.com/cdn/shop/products/espejo-profesional-con-mango-de-color-negro_2160x2160_crop_center.jpg?v=1603902838.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Espejo profesional con mango de color negro</h5>
                        <p class="card-text">Precio: $10.20</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://kissbel.com/cdn/shop/products/peine-pua-ceramico-n-1-bifull-blanco_500x500_crop_center.jpg?v=1632396432.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Peine púa cerámica blanco</h5>
                        <p class="card-text">Precio: $3.30</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


