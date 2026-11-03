<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | VoluntHub</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
            background-color: #ffffff;
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
        }

        .btn-green-main:hover { background-color: #7bb532; color: #000; }

        .card-stat {
            background: #f8faf7;
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid #eef2f0;
        }

        .footer-dark-custom {
            background-color: #0d3b36;
            color: #ffffff;
            padding: 4rem 0 2rem 0;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar Principal -->
    <header class="header-custom">
        <div class="full-width-container d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('img/logo.jpg') }}" alt="VoluntHub" height="42" class="me-2" onerror="this.style.display='none'">
                <span class="fw-bold fs-3 text-dark">VoluntHub</span>
            </a>
            
            <nav class="d-flex align-items-center gap-4">
                <a href="{{ route('home') }}" class="nav-link-custom">Inicio</a>
                <a href="{{ route('oportunidades.index') }}" class="nav-link-custom">Oportunidades</a>
                <a href="{{ route('nosotros') }}" class="nav-link-custom active">Nosotros</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link-custom fw-bold text-success">Mi Panel</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link-custom">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn-green-main">Crear cuenta</a>
                @endauth
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Nosotros -->
        <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f7faf6 100%);">
            <div class="full-width-container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <span class="fw-bold small text-uppercase tracking-wider d-block mb-2" style="color: #8cc63f;">✦ SOBRE NUESTRA PLATAFORMA</span>
                        <h1 class="display-4 fw-extrabold text-dark mb-4">Conectando solidaridad en el corazón del Cusco</h1>
                        <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                            VoluntHub nació para acortar la brecha entre organizaciones locales que necesitan apoyo y ciudadanos comprometidos con generar impacto positivo en su comunidad.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="{{ route('oportunidades.index') }}" class="btn-green-main">Explorar causas &rarr;</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-dark fw-bold px-4 rounded-3 d-flex align-items-center">Registrar organización</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <img src="{{ asset('img/hero-cusco.jpg') }}" class="w-100 rounded-4 shadow-sm" style="height: 400px; object-fit: cover;" alt="Nosotros VoluntHub">
                    </div>
                </div>
            </div>
        </section>

        <!-- Valores / Pilares -->
        <section class="py-5 bg-white">
            <div class="full-width-container py-4">
                <div class="text-center mb-5">
                    <span class="fw-bold small text-uppercase tracking-wider d-block mb-1" style="color: #8cc63f;">NUESTROS PILARES</span>
                    <h2 class="fw-bold display-6">¿Por qué existe VoluntHub?</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card-stat h-100">
                            <div class="fs-1 mb-3">🤝</div>
                            <h4 class="fw-bold text-dark">Conexión Transparente</h4>
                            <p class="text-muted mb-0">Facilitamos la comunicación directa entre voluntarios con vocación de servicio y proyectos sociales verificados.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-stat h-100">
                            <div class="fs-1 mb-3">🌱</div>
                            <h4 class="fw-bold text-dark">Desarrollo Sostenible</h4>
                            <p class="text-muted mb-0">Apoyamos iniciativas enfocadas en el medio ambiente, educación rural y apoyo social en Cusco y el Valle Sagrado.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-stat h-100">
                            <div class="fs-1 mb-3">⭐</div>
                            <h4 class="fw-bold text-dark">Reconocimiento</h4>
                            <p class="text-muted mb-0">Valoramos y visibilizamos el tiempo invertido por los voluntarios mediante certificados e historial de participación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-dark-custom">
        <div class="full-width-container d-flex justify-content-between align-items-center">
            <div>
                <span class="fw-bold fs-4 text-white">VoluntHub</span>
                <p class="small text-white-50 mb-0">Plataforma social de voluntariado en Cusco.</p>
            </div>
            <div class="small text-white-50">
                © 2026 VoluntHub
            </div>
        </div>
    </footer>

</body>
</html>