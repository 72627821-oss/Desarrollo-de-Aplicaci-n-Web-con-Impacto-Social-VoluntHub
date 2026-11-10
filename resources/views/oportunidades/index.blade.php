<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VoluntHub | Oportunidades de Voluntariado</title>
    
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

        .card-opportunity {
            border-radius: 24px;
            overflow: hidden;
            border: none;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            height: 100%;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-opportunity:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
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
            transition: transform 0.2s;
        }

        .like-heart-btn:hover {
            transform: scale(1.1);
        }

        .like-heart-btn.active svg {
            fill: #e63946;
            stroke: #e63946;
        }

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
                <a href="{{ route('home') }}" class="nav-link-custom">Inicio</a>
                <a href="{{ route('oportunidades.index') }}" class="nav-link-custom active">Oportunidades</a>
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

    <main class="py-5" style="background-color: #ffffff;">
        <div class="full-width-container">
            <span class="fw-bold small text-uppercase tracking-wider d-block mb-1" style="color: #8cc63f;">✦ CATÁLOGO COMPLETO</span>
            <h1 class="display-4 fw-extrabold mb-2" style="font-weight: 800;">Oportunidades de Voluntariado</h1>
            <p class="text-muted fs-5 mb-4">Explora las causas activas en Cusco y encuentra dónde sumar tu apoyo.</p>

            <!-- Buscador Receptivo -->
            <form action="{{ route('oportunidades.index') }}" method="GET" class="row g-3 mb-5">
                <div class="col-md-9">
                    <input type="text" name="search" class="form-control form-control-lg rounded-3 fs-6 p-3" value="{{ request('search') }}" placeholder="Buscar por palabra clave, causa o ubicación (ej. Urubamba)...">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn-green-main w-100 h-100 fs-6">Buscar causas</button>
                </div>
            </form>

            <!-- Listado de Oportunidades -->
            <div class="row g-4 mb-5">
                @php
                    $listaOportunidades = isset($oportunidades) && count($oportunidades) > 0 ? $oportunidades : \App\Models\Oportunidad::all();
                @endphp

                @forelse($listaOportunidades as $item)
                    <div class="col-md-4">
                        <div class="card-opportunity" onclick="location.href='{{ route('oportunidades.show', $item->id) }}'">
                            <div class="position-relative">
                                <img src="{{ asset('img/' . ($item->imagen ?? 'bosques.jpg')) }}" alt="{{ $item->titulo }}" class="card-img-header" onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=500'">
                                <div class="position-absolute top-0 start-0 end-0 p-3 d-flex justify-content-between align-items-center">
                                    <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-normal shadow-sm">{{ $item->categoria }}</span>
                                    <button type="button" class="like-heart-btn @auth {{ auth()->user()->favoritos->contains($item->id) ? 'active' : '' }} @endauth" onclick="toggleHeart(event, {{ $item->id }}, this)">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <span class="text-uppercase text-muted fw-bold extra-small" style="font-size: 0.75rem;">{{ $item->organizacion }}</span>
                                <h4 class="fw-bold text-dark my-2 fs-5">{{ $item->titulo }}</h4>
                                <p class="text-muted small mb-1">📅 {{ $item->fecha }}</p>
                                <p class="text-muted small mb-4">📍 {{ $item->ubicacion }}</p>
                                
                                <div class="mt-auto">
                                    <button class="btn btn-outline-success w-100 rounded-3 fw-bold text-dark" style="border-color: #8cc63f;">Más información &rarr;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <h4 class="fw-bold">No se encontraron oportunidades registradas.</h4>
                        <a href="{{ route('oportunidades.index') }}" class="btn btn-link text-success fw-bold text-decoration-none">Ver todas las causas</a>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <!-- Footer Verde Oscuro Completo -->
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

    <!-- Script AJAX para Favoritos -->
    <script>
        function toggleHeart(event, id, btn) {
            event.stopPropagation();
            fetch(`/favoritos/toggle/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(res => {
                if (res.status === 401) {
                    window.location.href = "{{ route('login') }}";
                    return;
                }
                return res.json();
            })
            .then(data => {
                if (data && data.success) {
                    if (data.is_favorite) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                }
            });
        }
    </script>
</body>
</html>