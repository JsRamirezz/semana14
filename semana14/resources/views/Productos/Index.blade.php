<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('layouts.navbar')
    <div class="container">
        <h1 class="mt-5 mb-4">Pedidos De Barbershop Supply Shop</h1>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <form action="{{ route('buscar') }}" method="get" class="d-flex">
                <input type="text" name="articulo" id="articulo" class="form-control me-2" placeholder="Buscar nombre">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
            <a href="{{ route('forminsertar') }}" class="btn btn-primary">Agregar</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                $registro = 1;
                @endphp
                @foreach($productos as $producto)
                <tr id="row-{{$producto->id}}">
                    <td>{{$registro}}</td>
                    <td>{{$producto->articulo}} </td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->existencias}}</td>
                    <td>
                        <button class="btn btn-warning" onclick="editarProducto({{$producto->id}})">Editar</button>

                        <form id="form-eliminar-{{$producto->id}}" action="{{ route('eliminar', ['id' => $producto->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                        </form>

                        <!-- Modal de edición -->
                        <div class="modal fade" id="modalEditar-{{$producto->id}}" tabindex="-1" aria-labelledby="modalEditarLabel-{{$producto->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditarLabel-{{$producto->id}}">Editar Producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form-editar-modal-{{$producto->id}}" action="{{ route('actualizar', ['id' => $producto->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="articulo" id="nombre-editar-modal-{{$producto->id}}" class="form-control mb-2">
                                            <input type="text" name="cantidad" id="precio-editar-modal-{{$producto->id}}" class="form-control mb-2">
                                            <input type="text" name="existencias" id="existencias-editar-modal-{{$producto->id}}" class="form-control mb-2">
                                            <input type="hidden" id="edit-id-{{$producto->id}}" name="edit-id" value="">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @php
                $registro++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function editarProducto(id) {
            // Mostrar el modal de edición correspondiente al producto seleccionado
            $('#modalEditar-' + id).modal('show');

            // Obtener los datos del producto seleccionado y completar el formulario del modal
            var nombre = $('#row-' + id + ' td:eq(1)').text();
            var precio = $('#row-' + id + ' td:eq(2)').text();
            var existencias = $('#row-' + id + ' td:eq(3)').text();
            $('#nombre-editar-modal-' + id).val(nombre);
            $('#precio-editar-modal-' + id).val(precio);
            $('#existencias-editar-modal-' + id).val(existencias);
            $('#edit-id-' + id).val(id);
        }

        // Al enviar el formulario de edición en el modal
        $('form[id^="form-editar-modal"]').submit(function(event) {
            event.preventDefault();
            var id = $(this).find('input[name="edit-id"]').val();
            var nombre = $(this).find('input[name="articulo"]').val();
            var cantidad = $(this).find('input[name="cantidad"]').val();
            var existencias = $(this).find('input[name="existencias"]').val();

            

            // actualiza los valores en la tabla
            $('#row-' + id + ' td:eq(1)').text(nombre);
            $('#row-' + id + ' td:eq(2)').text(cantidad);
            $('#row-' + id + ' td:eq(3)').text(existencias);

            // Cerrar el modal
            $('#modalEditar-' + id).modal('hide');
        });
    </script>

</body>

</html>