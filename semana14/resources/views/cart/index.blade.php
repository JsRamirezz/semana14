<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Barbershop Cousins Barbershop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
</head>
<body>
@include('layouts.navbar')

<div class="container" style="margin-top: 80px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Tienda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    
    @if(session()->has('success_msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success_msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('alert_msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('alert_msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

<?php $contador = 1; $total = 0; ?>
<div class="row justify-content-center">
    <div class="col-lg-7">
        <br>
        @if(count($cartCollection) > 0)
            <h4>{{count($cartCollection)}} Producto(s) en el carrito</h4><br>
        @else
            <h4>No Product(s) In Your Cart</h4><br>
            <a href="/cabello" class="btn btn-dark">Continue en la tienda</a>
        @endif

        @foreach($cartCollection as $registro)
        <?php $contador += 1; $total += $registro->precio; ?>
            <div class="row">
                <div class="col-lg-3">
                    <img src="https://formatoapa.com/wp-content/uploads/2020/12/12f628abd2f3ccdd00d0ba0c6262ebdd-1.jpg" class="img-thumbnail" width="200" height="200">
                </div>
                <div class="col-lg-5">
                    <p>
                        <b><a href="">{{$registro->nombre_servicio}}</a></b><br>
                        <b>Price: </b>${{$registro->precio}}<br>
                        <b>Sub Total: </b>${{$total}}<br>                              
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <div class="row">
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <input type="hidden" value="" id="id" name="id">                                        
                                <button class="btn btn-secondary btn-sm" style="margin-right: 10px; width: 25%;"><i class="fa fa-edit"></i></button>
                            </div>
                        </form>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $registro->id }}" id="id" name="id">
                            <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        @if(count($cartCollection)>0)
            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-secondary btn-md">Borrar Carrito</button> 
            </form>
        @endif
    </div>
    @if(count($cartCollection)>0)
        <div class="col-lg-5">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Total: </b>${{$total}}</li>
                </ul>
            </div>
            <br>
            <a href="/cabello" class="btn btn-dark">Continue en la tienda</a>
            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-success">Proceder a reservar su corte</button> 
            </form>
        </div>
    @endif
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
