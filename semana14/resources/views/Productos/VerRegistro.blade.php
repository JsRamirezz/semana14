<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Del Artículo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Detalles del Artículo</h3>
                </div>
                <div class="card-body">
                    @if ($registro)
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nombre:</strong> {{$registro->articulo}}</li>
                            <li class="list-group-item"><strong>Precio:</strong> {{$registro->cantidad}}</li>
                            <li class="list-group-item"><strong>Existencia:</strong> {{$registro->existencias}}</li>
                        </ul>
                    @else 
                        <div class="alert alert-warning" role="alert">
                            Artículo no encontrado en la base de datos.
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('index') }}" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
