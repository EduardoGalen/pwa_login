@extends('layouts.app') <!-- Extiende el layout -->

@section('content') <!-- Sección de contenido -->
<div class="container text-center mt-5 custom-background">
    <h1 style="font-family: 'Cardinal', serif; color: #ff1493; font-weight: bold; font-size: 2.5rem;">
        Bienvenidos a Uñas y Pestañas Ross
    </h1>
</div>

<div class="container mt-5 p-5" style="background-color: #fff0f5; border-radius: 20px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); max-width: 800px;">
    <h2 class="text-center" style="font-family: 'Cardinal', serif; color: #333; letter-spacing: 1.5px;">
        ¡Bienvenidos a Uñas y Pestañas Ross! 🌟
    </h2>

    <p class="lead mt-4" style="text-align: justify; font-size: 1.1em; line-height: 1.8; color: #555;">
        En <strong>Uñas y Pestañas Ross</strong>, nos especializamos en ofrecerte lo mejor en <strong>belleza femenina</strong> con productos y servicios de alta calidad. 💅✨ Nos enorgullece ser un referente en <strong>estilo, elegancia y creatividad</strong> para quienes buscan destacar y cuidar su imagen.
    </p>

    <p class="lead mt-3" style="text-align: justify; font-size: 1.1em; line-height: 1.8; color: #555;">
        Con una mentalidad de mejora continua, estamos comprometidos a <strong>expandir nuestro alcance</strong> y potenciar nuestra <strong>presencia en redes sociales</strong> para brindarte una experiencia enriquecedora. 🎨💖
    </p>

    <p class="lead mt-3" style="text-align: justify; font-size: 1.1em; line-height: 1.8; color: #555;">
        ¡Gracias por ser parte de nuestra comunidad y acompañarnos en este viaje de belleza y transformación! 💫 <strong>¡No olvides seguirnos</strong> para enterarte de nuestras <strong>novedades y promociones exclusivas</strong>!
    </p>

    <!-- Botón de llamada a la acción -->
    <div class="text-center mt-4">
        <a href="https://www.facebook.com/profile.php?id=61563486098673" target="_blank" class="btn btn-primary" style="background-color: #ff69b4; border: none; padding: 10px 20px; font-size: 1.1rem;">
            Explora más
        </a>
    </div>
</div>

<!-- Carrusel de imágenes -->
<div class="container text-center mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="max-width: 600px; margin: auto; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/icons/Uña4.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="/icons/Uña5.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="/icons/Uña6.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

@endsection
