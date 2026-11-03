<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $oportunidad->titulo }} | VoluntHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; color: #1a2b27; }
        .btn-green-main { background-color: #8cc63f; color: #000; font-weight: 700; border-radius: 12px; padding: 0.75rem 1.5rem; text-decoration: none; display: block; text-align: center; }
        .btn-green-main:hover { background-color: #7bb532; color: #000; }
    </style>
</head>
<body>
    <header class="py-3 border-bottom bg-white">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="fw-bold fs-3 text-dark text-decoration-none">VoluntHub</a>
            <a href="{{ route('home') }}" class="btn btn-outline-dark btn-sm rounded-3">← Volver al inicio</a>
        </div>
    </header>

    <main class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <span class="badge bg-success-subtle text-success border border-success fw-bold mb-2">{{ $oportunidad->categoria ?? 'Voluntariado' }}</span>
                <h1 class="display-5 fw-bold mb-3">{{ $oportunidad->titulo }}</h1>
                <p class="text-muted fs-6">Organizado por: <strong>{{ $oportunidad->organizacion ?? 'Organización Aliada' }}</strong></p>
                <hr class="my-4">
                <h4 class="fw-bold mb-3">Detalles de la oportunidad</h4>
                <p class="fs-5 text-secondary" style="line-height: 1.7;">{{ $oportunidad->descripcion }}</p>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 bg-light p-4 rounded-4 shadow-sm">
                    <h5 class="fw-bold mb-3">Información clave</h5>
                    <p class="mb-2">📍 <strong>Ubicación:</strong> {{ $oportunidad->ubicacion }}</p>
                    <p class="mb-4">📅 <strong>Fecha/Frecuencia:</strong> {{ $oportunidad->fecha }}</p>
                    <a href="{{ route('register') }}" class="btn-green-main">Postular como voluntario</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>