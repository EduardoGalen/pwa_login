@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Encabezado de la sección de contacto -->
    <div class="text-center mt-5 p-5" style="background-color: #f8d7da; border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
        <h1 style="font-family: 'Cardinal', serif; font-size: 3rem; color: #343a40; letter-spacing: 2px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">
            Contáctanos
        </h1>
        <p style="color: #6c757d; font-size: 1.2rem;">Estamos aquí para ayudarte. ¡Déjanos tu mensaje!</p>
    </div>

    <!-- Formulario de contacto -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <form class="p-4" style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                <div class="form-group">
                    <label for="name" style="font-weight: bold; color: #343a40;">
                        <i class="fas fa-user"></i> Nombre
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required style="border-radius: 10px;">
                </div>

                <div class="form-group mt-3">
                    <label for="email" style="font-weight: bold; color: #343a40;">
                        <i class="fas fa-envelope"></i> Correo Electrónico
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required style="border-radius: 10px;">
                </div>

                <div class="form-group mt-3">
                    <label for="message" style="font-weight: bold; color: #343a40;">
                        <i class="fas fa-comment-dots"></i> Mensaje
                    </label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje" required style="border-radius: 10px;"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-4" style="background-color: #ff69b4; border: none; font-size: 1.2rem; font-weight: bold; border-radius: 10px; transition: background-color 0.3s;">
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
