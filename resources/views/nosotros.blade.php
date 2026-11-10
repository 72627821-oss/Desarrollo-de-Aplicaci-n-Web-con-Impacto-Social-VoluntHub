<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoluntHub | Sobre Nuestra Plataforma</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
            margin: 0;
            padding: 0;
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

        .nav-link-custom.active {
            color: #000000;
            border-bottom: 3px solid #8cc63f;
        }

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

        .footer-dark-custom {
            background-color: #0d3b36;
            color: #ffffff;
            padding: 5rem 0 3rem 0;
        }

        .about-hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            color: #111827;
        }

        .card-image-box {
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            min-height: 400px;
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
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-3">Cerrar sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link-custom">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn-green-main">Crear cuenta</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="py-5">
        <div class="full-width-container">
            <div class="row align-items-center g-5 py-4">
                <div class="col-lg-6 pe-lg-5">
                    <span class="fw-bold small text-uppercase tracking-wider mb-2 d-block" style="color: #8cc63f;">✦ SOBRE NUESTRA PLATAFORMA</span>
                    <h1 class="about-hero-title mb-4">
                        Conectando solidaridad en el corazón del Cusco
                    </h1>
                    <p class="fs-5 text-secondary leading-relaxed mb-5">
                        VoluntHub nació para acortar la brecha entre organizaciones locales que necesitan apoyo y ciudadanos comprometidos con generar un impacto positivo en su comunidad.
                    </p>

                    <div class="d-flex align-items-center gap-3">
                        <a href="{{ route('oportunidades.index') }}" class="btn-green-main px-4 py-3 fs-6">
                            Explorar causas &rarr;
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-outline-dark rounded-3 px-4 py-3 fw-bold fs-6">
                            Registrar organización
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-image-box position-relative">
                        <img src="{{ asset('img/hero-cusco.jpg') }}" alt="Nosotros VoluntHub Cusco" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" onerror="this.src='https://images.unsplash.com/photo-1593113598332-cd288d649433?w=800'">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Verde Oscuro -->
    <footer class="footer-dark-custom mt-5">
        <div class="full-width-container">
            <div class="row align-items-center border-bottom border-secondary border-opacity-25 pb-5 mb-5">
                <div class="col-md-4 mb-4 mb-md-0">
                    <span class="text-uppercase extra-small text-white-50 fw-bold d-block mb-1">NUESTRO IMPACTO</span>
                    <h3 class="fw-bold mb-0 text-white fs-2">Crece con cada persona</h3>
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-4 border-start border-secondary border-opacity-25">
                            <h2 class="fw-extrabold display-5 mb-0" style="color: #8cc63f;">+500</h2>
                            <span class="small text-white-50">Voluntarios registrados</span>
                        </div>
                        <div class="col-4 border-start border-secondary border-opacity-25">
                            <h2 class="fw-extrabold display-5 mb-0" style="color: #8cc63f;">+30</h2>
                            <span class="small text-white-50">Organizaciones aliadas</span>
                        </div>
                        <div class="col-4 border-start border-secondary border-opacity-25">
                            <h2 class="fw-extrabold display-5 mb-0" style="color: #8cc63f;">+1200</h2>
                            <span class="small text-white-50">Horas de voluntariado</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <span class="fw-bold fs-3 text-white">VoluntHub</span>
                    <p class="small text-white-50 mb-0 mt-1">Conectamos personas con causas que transforman Cusco.</p>
                </div>
                <div class="d-flex gap-4 small text-white-50">
                    <a href="{{ route('oportunidades.index') }}" class="text-white-50 text-decoration-none">Oportunidades</a>
                    <a href="{{ route('nosotros') }}" class="text-white-50 text-decoration-none">Nosotros</a>
                    <a href="#" class="text-white-50 text-decoration-none">Contacto</a>
                    <span>© 2026 VoluntHub</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>