@extends('layouts.app') <!-- Extiende el layout que creaste -->

@section('content') <!-- Sección de contenido -->
<div class="container text-center mt-5 p-5" style="background-color: #f8d7da; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="font-family: 'Cardinal', serif; font-size: 3rem; color: #343a40; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
        ¿Quiénes Somos?
    </h1>
</div>

<!-- Sección del logotipo -->
<div class="container text-center mt-5 custom-background" style="max-width: 1000px; margin: 0 auto;">
    <a class="navbar-brand" href="#">
        <img src="/icons/portada.jpg" alt="Logotipo Uñas y Pestañas Ross" style="height: 500px; width: 100%; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    </a>
</div>

<!-- Sección de presentación -->
<div class="container text-center py-5" style="max-width: 800px; margin: 0 auto;">
    <p class="lead" style="text-align: justify; font-size: 1.2rem; color: #343a40; line-height: 1.6;">
        La empresa <strong>Uñas y Pestañas Ross</strong> fue fundada con el propósito de brindar servicios especializados en el cuidado de uñas y pestañas. A lo largo de su trayectoria, ha ofrecido aplicaciones de uñas acrílicas, manicuras, extensiones de pestañas y otros tratamientos de cuidado personal. Además de estos servicios, la empresa también comercializa una gama de productos de belleza enfocados en el cuidado de uñas y cabello, dirigidos principalmente a mujeres interesadas en mejorar su imagen personal.
    </p>

    <!-- Botón de llamada a la acción -->
    <a href="/explore" class="btn btn-primary btn-lg mt-4" style="background-color: #ff69b4; border: none; padding: 10px 30px; font-size: 1.2rem; border-radius: 50px; transition: background-color 0.3s ease;">
        Explora más
    </a>
</div>

   
@endsection
