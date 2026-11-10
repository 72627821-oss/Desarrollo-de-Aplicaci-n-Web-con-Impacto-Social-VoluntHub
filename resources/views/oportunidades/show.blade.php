<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $oportunidad->titulo }} | VoluntHub</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .full-width-container { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 3rem; }
        .header-custom { width: 100%; background: #ffffff; border-bottom: 1px solid #eef2f0; padding: 1.25rem 0; }
        .nav-link-custom { font-size: 0.95rem; font-weight: 600; color: #4a5568; text-decoration: none; padding: 0.5rem 1rem; }
        .btn-green-main { background-color: #8cc63f; color: #000000; font-weight: 700; padding: 0.75rem 1.5rem; border-radius: 12px; border: none; text-decoration: none; display: inline-block; }
        .card-detail { border-radius: 28px; border: none; overflow: hidden; background: #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.06); }
        .footer-dark-custom { background-color: #0d3b36; color: #ffffff; padding: 5rem 0 3rem 0; }
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

    <main class="py-5">
        <div class="full-width-container" style="max-width: 950px;">
            <a href="{{ route('oportunidades.index') }}" class="text-dark fw-bold text-decoration-none mb-4 d-inline-block">&larr; Volver a las oportunidades</a>
            
            @if(session('success'))
                <div class="alert alert-success rounded-3 mb-4">{{ session('success') }}</div>
            @endif

            <div class="card card-detail">
                <div style="height: 380px; overflow: hidden; position: relative;">
                    <span class="badge bg-white text-dark position-absolute top-0 start-0 m-4 px-3 py-2 rounded-pill fw-bold shadow-sm" style="z-index: 5;">
                        {{ $oportunidad->categoria }}
                    </span>
                    <img src="{{ asset('img/' . ($oportunidad->imagen ?? 'bosques.jpg')) }}" alt="{{ $oportunidad->titulo }}" class="w-100 h-100 object-fit-cover" onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800'">
                </div>
                
                <div class="p-4 p-md-5">
                    <span class="text-uppercase fw-bold text-muted small">{{ $oportunidad->organizacion }}</span>
                    <h1 class="display-5 fw-extrabold text-dark mt-1 mb-4">{{ $oportunidad->titulo }}</h1>
                    
                    <div class="d-flex flex-wrap gap-4 text-muted mb-4 pb-3 border-bottom fs-5">
                        <div>📅 <strong>Fecha:</strong> {{ $oportunidad->fecha }}</div>
                        <div>📍 <strong>Ubicación:</strong> {{ $oportunidad->ubicacion }}</div>
                    </div>
                    
                    <h4 class="fw-bold mb-3 text-dark">Sobre esta causa</h4>
                    <p class="fs-5 text-secondary leading-relaxed mb-5">{{ $oportunidad->descripcion }}</p>
                    
                    <div class="p-4 rounded-4 d-flex justify-content-between align-items-center flex-wrap gap-3" style="background-color: #f0f7ee;">
                        <div>
                            <h5 class="fw-bold m-0 text-dark">¿Quieres ser parte de esta iniciativa?</h5>
                            <p class="text-muted small m-0 mt-1">Postula ahora y la organización se pondrá en contacto contigo.</p>
                        </div>
                        
                        @auth
                            @if(auth()->user()->esVoluntario())
                                @if($yaPostulado)
                                    <button class="btn btn-secondary fs-6 rounded-3 px-4 fw-bold" disabled>✓ Ya estás postulado</button>
                                @else
                                    <form action="{{ route('oportunidades.postular', $oportunidad->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-green-main fs-6">Quiero postularme &rarr;</button>
                                    </form>
                                @endif
                            @else
                                <span class="badge bg-secondary p-2">Acceso de Organización (no postula)</span>
                            @endif
                        @else
                            <a href="{{ route('register') }}" class="btn-green-main fs-6">Regístrate para postular &rarr;</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-dark-custom">
        <div class="full-width-container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <span class="fw-bold fs-3 text-white">VoluntHub</span>
                    <p class="small text-white-50 mb-0 mt-1">Conectamos personas con causas que transforman Cusco.</p>
                </div>
                <div class="d-flex gap-4 small text-white-50">
                    <a href="{{ route('oportunidades.index') }}" class="text-white-50 text-decoration-none">Oportunidades</a>
                    <a href="{{ route('nosotros') }}" class="text-white-50 text-decoration-none">Nosotros</a>
                    <span>© 2026 VoluntHub</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>