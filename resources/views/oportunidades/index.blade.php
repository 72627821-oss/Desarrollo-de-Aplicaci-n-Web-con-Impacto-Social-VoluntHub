<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Oportunidades de Voluntariado | VoluntHub</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
            background-color: #f8faf7;
            color: #1a2b27;
        }

        .full-width-container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        .header-custom {
            width: 100%;
            background: #ffffff;
            border-bottom: 1px solid #eef2f0;
            padding: 1.25rem 0;
        }

        .nav-link-custom {
            font-size: 0.95rem;
            font-weight: 600;
            color: #4a5568;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: all 0.2s;
        }

        .nav-link-custom:hover { color: #8cc63f; }
        .nav-link-custom.active { color: #000000; border-bottom: 3px solid #8cc63f; }

        .btn-green-main {
            background-color: #8cc63f;
            color: #000000;
            font-weight: 700;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            border: none;
            font-size: 0.95rem;
        }

        .card-opportunity {
            border-radius: 24px;
            overflow: hidden;
            border: none;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-opportunity:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .card-img-header {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .like-heart-btn {
            width: 38px;
            height: 38px;
            background: #ffffff;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            z-index: 5;
            cursor: pointer;
            color: #cbd5e1;
            font-size: 1.2rem;
            transition: all 0.2s ease;
        }

        .like-heart-btn.active, .like-heart-btn:hover {
            color: #ef4444;
            transform: scale(1.1);
        }

        .footer-dark-custom {
            background-color: #0d3b36;
            color: #ffffff;
            padding: 4rem 0 2rem 0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header-custom">
        <div class="full-width-container d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('img/logo.jpg') }}" alt="VoluntHub" height="42" class="me-2" onerror="this.style.display='none'">
                <span class="fw-bold fs-3 text-dark">VoluntHub</span>
            </a>
            
            <nav class="d-flex align-items-center gap-4">
                <a href="{{ route('home') }}" class="nav-link-custom">Inicio</a>
                <a href="{{ route('oportunidades.index') }}" class="nav-link-custom active">Oportunidades</a>
                <a href="{{ route('nosotros') }}" class="nav-link-custom">Nosotros</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link-custom fw-bold text-success">Mi Panel</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link-custom">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn-green-main">Crear cuenta</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="py-5">
        <div class="full-width-container">
            <div class="mb-5">
                <span class="fw-bold small text-uppercase tracking-wider d-block mb-1" style="color: #8cc63f;">✦ CATÁLOGO COMPLETO</span>
                <h1 class="fw-bold text-dark display-5">Oportunidades de Voluntariado</h1>
                <p class="text-muted fs-5">Explora las causas activas en Cusco y encuentra dónde sumar tu apoyo.</p>
            </div>

            <!-- Buscador -->
            <form action="{{ route('oportunidades.index') }}" method="GET" class="row g-3 mb-5">
                <div class="col-md-8">
                    <input type="text" name="search" class="form-control form-control-lg rounded-3 fs-6" placeholder="Buscar por palabra clave, causa o ubicación (ej. Urubamba)..." value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-green-main w-100 py-3">Buscar causas</button>
                </div>
            </form>

            <!-- Listado de Tarjetas -->
            <div class="row g-4">
                <!-- Tarjeta 1: Reforestación -->
                <div class="col-md-4">
                    <div class="card-opportunity h-100">
                        <div class="position-relative">
                            <a href="{{ route('oportunidades.show', 1) }}">
                                <img src="{{ asset('img/bosques.jpg') }}" alt="Reforestación" class="card-img-header" onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600'">
                            </a>
                            <div class="position-absolute top-0 start-0 end-0 p-3 d-flex justify-content-between align-items-center">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal shadow-sm">Medio Ambiente</span>
                                <button class="like-heart-btn" onclick="toggleHeart(this, 1)">♥</button>
                            </div>
                        </div>
                        <div class="p-4 d-flex flex-column justify-content-between">
                            <div>
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">BOSQUES DE CUSCO</span>
                                <a href="{{ route('oportunidades.show', 1) }}" class="text-decoration-none">
                                    <h4 class="fw-bold text-dark my-2 fs-5">Reforestación en el Valle Sagrado</h4>
                                </a>
                                <p class="text-muted small mb-1">📅 Sáb, 14 de junio</p>
                                <p class="text-muted small mb-3">📍 Urubamba</p>
                            </div>
                            <a href="{{ route('oportunidades.show', 1) }}" class="btn btn-outline-success btn-sm w-100 rounded-3 fw-bold py-2">Más información &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2: Refuerzo Escolar -->
                <div class="col-md-4">
                    <div class="card-opportunity h-100">
                        <div class="position-relative">
                            <a href="{{ route('oportunidades.show', 2) }}">
                                <img src="{{ asset('img/educacion.jpg') }}" alt="Educación" class="card-img-header" onerror="this.src='https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=600'">
                            </a>
                            <div class="position-absolute top-0 start-0 end-0 p-3 d-flex justify-content-between align-items-center">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal shadow-sm">Educación</span>
                                <button class="like-heart-btn" onclick="toggleHeart(this, 2)">♥</button>
                            </div>
                        </div>
                        <div class="p-4 d-flex flex-column justify-content-between">
                            <div>
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">SEMILLAS DEL ANDE</span>
                                <a href="{{ route('oportunidades.show', 2) }}" class="text-decoration-none">
                                    <h4 class="fw-bold text-dark my-2 fs-5">Refuerzo escolar para niños</h4>
                                </a>
                                <p class="text-muted small mb-1">📅 Martes y jueves</p>
                                <p class="text-muted small mb-3">📍 San Sebastián</p>
                            </div>
                            <a href="{{ route('oportunidades.show', 2) }}" class="btn btn-outline-success btn-sm w-100 rounded-3 fw-bold py-2">Más información &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3: Cuidado Animal -->
                <div class="col-md-4">
                    <div class="card-opportunity h-100">
                        <div class="position-relative">
                            <a href="{{ route('oportunidades.show', 3) }}">
                                <img src="{{ asset('img/animales.jpg') }}" alt="Animales" class="card-img-header" onerror="this.src='https://images.unsplash.com/photo-1548767797-d8c844163c4c?w=600'">
                            </a>
                            <div class="position-absolute top-0 start-0 end-0 p-3 d-flex justify-content-between align-items-center">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal shadow-sm">Protección Animal</span>
                                <button class="like-heart-btn" onclick="toggleHeart(this, 3)">♥</button>
                            </div>
                        </div>
                        <div class="p-4 d-flex flex-column justify-content-between">
                            <div>
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">PATITAS CUSCO</span>
                                <a href="{{ route('oportunidades.show', 3) }}" class="text-decoration-none">
                                    <h4 class="fw-bold text-dark my-2 fs-5">Jornada de cuidado animal</h4>
                                </a>
                                <p class="text-muted small mb-1">📅 Dom, 22 de junio</p>
                                <p class="text-muted small mb-3">📍 Wanchaq</p>
                            </div>
                            <a href="{{ route('oportunidades.show', 3) }}" class="btn btn-outline-success btn-sm w-100 rounded-3 fw-bold py-2">Más información &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-dark-custom">
        <div class="full-width-container d-flex justify-content-between align-items-center">
            <div>
                <span class="fw-bold fs-4 text-white">VoluntHub</span>
                <p class="small text-white-50 mb-0">Conectando personas con causas en Cusco.</p>
            </div>
            <div class="small text-white-50">
                © 2026 VoluntHub
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleHeart(btn, id) {
            btn.classList.toggle('active');
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(`/favoritos/toggle/${id}`, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': token, 'Content-Type': 'application/json' }
            }).catch(e => console.log(e));
        }
    </script>
</body>
</html>