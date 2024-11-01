<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap CSS desde un CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace al archivo manifest.json para PWA -->
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/resources/css/contacto.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Mi PWA con Laravel</title>
</head>

<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                console.log('ServiceWorker registrado con éxito:', registration);
            }).catch(function(error) {
                console.log('ServiceWorker fallo en registrarse:', error);
            });
        });
    }
</script>

<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg, #ff69b4, #ff1493); border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 10px 20px;">
        <a class="navbar-brand" href="#">
            <img src="/icons/logo1.png" alt="Logotipo" style="height: 120px; width: 120px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/home" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/quienes" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">¿Quienes Somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="/faq" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">Preguntas Frecuentes</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">Contáctanos</a></li>
                <li class="nav-item"><a class="nav-link" href="/ubicacion" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">Ubicación</a></li>
                <li class="nav-item"><a class="nav-link" href="/product" style="color: white; font-size: 1.2rem; margin: 0 10px; transition: color 0.3s;">Productos</a></li>
            </ul>

            <!-- Menú de autenticación -->
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        <!-- Menú desplegable para el usuario autenticado -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 1.2rem; margin: 0 10px;">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <!-- Opciones de iniciar sesión y registrarse para usuarios no autenticados -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color: white; font-size: 1.2rem; margin: 0 10px;">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="color: white; font-size: 1.2rem; margin: 0 10px;">Registrarse</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer class="footer mt-5 pt-4 pb-4 text-center text-black" style="background-color: #f8f9fa; border-top: 2px solid #ddd;">
        <div class="container">
            <p style="font-family: 'Cardinal', serif; font-size: 1.2rem; color: #333;">&copy; 2024 Uñas y Pestañas Ross</p>
            <p style="margin: 0; color: #555;">Dirección: Av. Acueducto #262, Acámbaro, México</p>
            <p style="margin: 0; color: #555;">Teléfono: +52 417 177 6775 | Email: rossbrownde3@gmail.com</p>
            <div style="margin-top: 15px;">
                <a href="https://www.facebook.com/profile.php?id=61563486098673" target="_blank" style="color: #4267B2; margin: 0 10px;">Facebook</a>
                <a href="https://www.instagram.com" target="_blank" style="color: #C13584; margin: 0 10px;">Instagram</a>
                <a href="https://www.twitter.com" target="_blank" style="color: #1DA1F2; margin: 0 10px;">Twitter</a>
            </div>
        </div>
    </footer>

    <!-- Enlaces a jQuery y Bootstrap JS desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
