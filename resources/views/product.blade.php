@extends('layouts.app')

@section('content')
<div class="container text-center mt-5 p-5" style="background-color: #f8d7da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="font-family: 'Cardinal', serif; font-size: 3rem; color: #343a40; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
        Nuestros Productos
    </h1>
    <p style="color: #6c757d; font-size: 1.2rem;">Descubre nuestra línea de productos para el cuidado y belleza.</p>
</div>

<!-- Nueva Sección de Productos -->
<div class="container mt-5">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card product-card border-0 shadow-lg h-100">
                <img src="/icons/esmalte.jpg" class="card-img-top img-fluid" alt="Producto 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Esmalte</h5>
                    <p class="card-text">Breve descripción del producto.</p>
                    <a href="/producto-1" class="btn btn-primary btn-rounded">Agregar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card product-card border-0 shadow-lg h-100">
                <img src="/icons/gel.jpg" class="card-img-top img-fluid" alt="Producto 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Gel DE COLOR</h5>
                    <p class="card-text">Breve descripción del producto.</p>
                    <a href="/producto-2" class="btn btn-primary btn-rounded">Agregar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card product-card border-0 shadow-lg h-100">
                <img src="/icons/mascara.jpg" class="card-img-top img-fluid" alt="Producto 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Mascara</h5>
                    <p class="card-text">Breve descripción del producto.</p>
                    <a href="/producto-3" class="btn btn-primary btn-rounded">Agregar</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CSS personalizado -->
<style>
    /* Fondo de la sección */
    .custom-background {
        background: linear-gradient(135deg, #ff9fe5, #ff69b4);
        color: white;
        padding: 3rem 0;
    }

    /* Diseño de las tarjetas */
    .product-card {
        overflow: hidden;
        border-radius: 15px;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .product-card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    /* Imagen de la tarjeta */
    .product-card img {
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .product-card:hover img {
        transform: scale(1.1);
    }

    /* Título de producto */
    .card-title {
        color: #ff69b4;
        font-weight: bold;
        font-family: 'Cardinal', serif;
    }

    /* Botón personalizado */
    .btn-primary {
        background-color: #ff69b4;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #ff4fa1;
    }

    /* Bordes redondeados en el botón */
    .btn-rounded {
        border-radius: 50px;
    }
</style>

@endsection
