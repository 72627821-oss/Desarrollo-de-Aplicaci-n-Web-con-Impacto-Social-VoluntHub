<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoluntHub | Voluntariado en Cusco</title>
    
    <!-- Carga directo de tu CSS original + Fuente Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        /* Ajustes de tipografía, tamaños y ancho fluido idénticos a tu prototipo */
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

        /* Header original */
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

        /* Hero a pantalla completa */
        .hero-custom {
            padding: 4rem 0 5rem 0;
            background: linear-gradient(180deg, #ffffff 0%, #f7faf6 100%);
        }

        .hero-title-custom {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -1.5px;
            color: #111827;
        }

        .hero-title-custom span {
            color: #8cc63f;
        }

        /* Tarjeta gradiente gigante de la derecha */
        .card-gradient-hero {
            background: linear-gradient(135deg, #b8f090 0%, #7dbd72 50%, #5d9e5b 100%);
            border-radius: 40px;
            min-height: 480px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.04);
        }

        .heart-bubble {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .badge-floating-custom {
            background: #ffffff;
            border-radius: 16px;
            padding: 1rem 1.25rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            position: absolute;
            display: flex;
            align-items: center;
            gap: 0.85rem;
            z-index: 10;
        }

        .badge-floating-custom.top-right {
            top: 40px;
            right: -20px;
        }

        .badge-floating-custom.bottom-left {
            bottom: 40px;
            left: -20px;
        }

        .icon-box-small {
            width: 36px;
            height: 36px;
            background: #f0fdf4;
            color: #8cc63f;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* Oportunidades */
        .card-opportunity {
            border-radius: 24px;
            overflow: hidden;
            border: none;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            height: 100%;
        }

        .card-header-gradient-1 { background: linear-gradient(135deg, #a8e063, #56ab2f); }
        .card-header-gradient-2 { background: linear-gradient(135deg, #f6d365, #fda085); }
        .card-header-gradient-3 { background: linear-gradient(135deg, #84fab0, #8fd3f4); }

        .like-heart-btn {
            width: 38px;
            height: 38px;
            background: #ffffff;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Pasos 01 02 03 */
        .step-card-custom {
            background: #ffffff;
            border-radius: 24px;
            padding: 2.5rem 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            height: 100%;
        }

        /* Footer verde oscuro */
        .footer-dark-custom {
            background-color: #0d3b36;
            color: #ffffff;
            padding: 5rem 0 3rem 0;
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
                <a href="{{ route('home') }}" class="nav-link-custom active">Inicio</a>
                <a href="{{ route('oportunidades.index') }}" class="nav-link-custom">Oportunidades</a>
                <a href="{{ route('nosotros') }}" class="nav-link-custom">Nosotros</a>

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

    <main>
        <!-- Sección Hero Exacta -->
        <section class="hero-custom">
            <div class="full-width-container">
                <div class="row align-items-center">
                    
                    <!-- Lado Izquierdo -->
                    <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                        <span class="fw-bold small text-uppercase tracking-wider mb-2 d-block" style="color: #8cc63f;">✦ HAZ QUE TU TIEMPO CUENTE</span>
                        <h1 class="hero-title-custom">
                            Conecta con causas <br>
                            <span>sociales en Cusco</span>
                        </h1>
                        <p class="fs-5 text-secondary mt-4 mb-4" style="max-width: 520px; line-height: 1.6;">
                            Encuentra oportunidades cercanas, comparte tus talentos y sé parte del cambio que nuestra comunidad necesita.
                        </p>

                        <div class="d-flex align-items-center gap-3 pt-2 mb-5">
                            <a href="{{ route('oportunidades.index') }}" class="btn-green-main fs-6 px-4 py-3">
                                Buscar voluntariados &rarr;
                            </a>
                            <a href="{{ route('nosotros') }}" class="btn btn-link text-dark fw-bold text-decoration-none px-3 fs-6">
                                Conoce cómo funciona
                            </a>
                        </div>

                        <!-- Avatares -->
                        <div class="d-flex align-items-center pt-3">
                            <div class="d-flex me-3">
                                <span class="badge rounded-circle bg-warning text-dark p-2 border border-2 border-white shadow-sm">MC</span>
                                <span class="badge rounded-circle bg-info text-dark p-2 border border-2 border-white shadow-sm ms-n2">JP</span>
                                <span class="badge rounded-circle bg-secondary text-white p-2 border border-2 border-white shadow-sm ms-n2">AL</span>
                            </div>
                            <div>
                                <strong class="d-block text-dark small">Personas comprometidas</strong>
                                <span class="text-muted extra-small">con causas sociales en Cusco</span>
                            </div>
                        </div>
                    </div>

                    <!-- Lado Derecho (Tarjeta Verde Gigante) -->
                    <div class="col-lg-6 ps-lg-4">
                        <div class="card-gradient-hero">
                            <div class="heart-bubble">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <h2 class="fw-extrabold display-4 text-white mb-0">Voluntariado</h2>
                            <h3 class="fw-bold fs-2 text-white opacity-90">en Cusco</h3>

                            <!-- Insignias flotantes -->
                            <div class="badge-floating-custom top-right">
                                <div class="icon-box-small">✦</div>
                                <div>
                                    <strong class="d-block small text-dark">Nuevas oportunidades</strong>
                                    <span class="text-muted extra-small" style="font-size: 0.75rem;">Descubre cómo ayudar</span>
                                </div>
                            </div>

                            <div class="badge-floating-custom bottom-left">
                                <div class="icon-box-small">✓</div>
                                <div>
                                    <strong class="d-block small text-dark">Impacto social</strong>
                                    <span class="text-muted extra-small" style="font-size: 0.75rem;">Organizaciones locales</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Oportunidades Destacadas -->
        <section class="py-5 bg-white">
            <div class="full-width-container py-4">
                <span class="fw-bold small text-uppercase tracking-wider d-block mb-1" style="color: #8cc63f;">OPORTUNIDADES DESTACADAS</span>
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <h2 class="fw-bold text-dark display-5 mb-0">Una causa está esperando por ti</h2>
                    <a href="{{ route('oportunidades.index') }}" class="text-muted fw-bold text-decoration-none">Ver todas &rarr;</a>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1 -->
                    <div class="col-md-4">
                        <div class="card-opportunity">
                            <div class="p-4 card-header-gradient-1 position-relative d-flex justify-content-between align-items-start" style="min-height: 180px;">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal">Medio Ambiente</span>
                                <button class="like-heart-btn">♥</button>
                            </div>
                            <div class="p-4">
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">BOSQUES DE CUSCO</span>
                                <h4 class="fw-bold text-dark my-2 fs-5">Reforestación en el Valle Sagrado</h4>
                                <p class="text-muted small mb-1">📅 Sáb, 14 de junio</p>
                                <p class="text-muted small mb-0">📍 Urubamba</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="col-md-4">
                        <div class="card-opportunity">
                            <div class="p-4 card-header-gradient-2 position-relative d-flex justify-content-between align-items-start" style="min-height: 180px;">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal">Educación</span>
                                <button class="like-heart-btn">♥</button>
                            </div>
                            <div class="p-4">
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">SEMILLAS DEL ANDE</span>
                                <h4 class="fw-bold text-dark my-2 fs-5">Refuerzo escolar para niños</h4>
                                <p class="text-muted small mb-1">📅 Martes y jueves</p>
                                <p class="text-muted small mb-0">📍 San Sebastián</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="col-md-4">
                        <div class="card-opportunity">
                            <div class="p-4 card-header-gradient-3 position-relative d-flex justify-content-between align-items-start" style="min-height: 180px;">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal">Protección Animal</span>
                                <button class="like-heart-btn">♥</button>
                            </div>
                            <div class="p-4">
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">PATITAS CUSCO</span>
                                <h4 class="fw-bold text-dark my-2 fs-5">Jornada de cuidado animal</h4>
                                <p class="text-muted small mb-1">📅 Dom, 22 de junio</p>
                                <p class="text-muted small mb-0">📍 Wanchaq</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección ¿Cómo Funciona? -->
        <section class="py-5" style="background-color: #f8faf7;">
            <div class="full-width-container text-center py-4">
                <span class="fw-bold small text-uppercase tracking-wider d-block mb-1" style="color: #8cc63f;">¿CÓMO FUNCIONA?</span>
                <h2 class="fw-bold text-dark display-5 mb-2">Empieza a generar impacto</h2>
                <p class="text-muted mb-5">Encontrar una oportunidad de voluntariado puede ser sencillo con VoluntHub.</p>

                <div class="row g-4 text-start">
                    <div class="col-md-4">
                        <div class="step-card-custom">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="icon-box-small p-3" style="width: 48px; height: 48px;">👤</div>
                                <span class="display-3 fw-bold text-muted opacity-25">01</span>
                            </div>
                            <h4 class="fw-bold text-dark">Crea tu cuenta</h4>
                            <p class="text-muted small mb-0">Regístrate como voluntario y completa tu información básica, intereses y habilidades.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card-custom">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="icon-box-small p-3" style="width: 48px; height: 48px;">🔍</div>
                                <span class="display-3 fw-bold text-muted opacity-25">02</span>
                            </div>
                            <h4 class="fw-bold text-dark">Encuentra una causa</h4>
                            <p class="text-muted small mb-0">Busca oportunidades según la categoría, ubicación o disponibilidad que mejor se adapte a ti.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card-custom">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="icon-box-small p-3" style="width: 48px; height: 48px;">♥</div>
                                <span class="display-3 fw-bold text-muted opacity-25">03</span>
                            </div>
                            <h4 class="fw-bold text-dark">Participa</h4>
                            <p class="text-muted small mb-0">Postula a una oportunidad y forma parte de actividades que buscan generar impacto social.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Verde Oscuro -->
    <footer class="footer-dark-custom">
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

    <!-- CSS Bootstrap 5 auxiliar para flexbox y columnas dinámicas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>