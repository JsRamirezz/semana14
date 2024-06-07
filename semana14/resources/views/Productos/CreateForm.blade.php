<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Crear Nuevo Producto</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('crear') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="articulo" class="form-label">Nombre del Producto</label>
                            <input type="text" name="articulo" id="articulo" class="form-control" placeholder="Ingrese el nombre del producto" required>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Precio</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Ingrese el precio del producto" required min="0" step="0.1">
                        </div>
                        <div class="mb-3">
                            <label for="existencias" class="form-label">Cantidad</label>
                            <input type="number" name="existencias" id="existencias" class="form-control" placeholder="Ingrese las existencias del producto" required min="0">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
