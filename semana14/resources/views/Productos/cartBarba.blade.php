<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Carrito de Compras</h1>
    @if(session('cart'))
        <div class="row">
            @foreach(session('cart') as $id => $details)
                <div class="col-sm-4">
                    <div class="card mb-4">
                        <img style="width: 300px; height: 300px; align-self: center;" src="{{ $details['imagen_url'] }}" class="card-img-top" alt="{{ $details['nombre_servicio'] }}">
                        <div class="card-body">
                            <h5 class="card-title">Nombre: {{ $details['nombre_servicio'] }}</h5>
                            <p class="card-text">Precio: ${{ $details['precio'] }}</p>
                            <p class="card-text">Cantidad: {{ $details['cantidad'] }}</p>
                        </div>
                        <div class="card-footer" style="background-color: white;">
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay servicios en el carrito.</p>
    @endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
