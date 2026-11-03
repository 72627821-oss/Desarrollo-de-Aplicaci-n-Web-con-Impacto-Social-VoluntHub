<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | VoluntHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .btn-green { background-color: #8cc63f; font-weight: 700; color: #000; border-radius: 12px; text-decoration: none; padding: 0.75rem 1.5rem; display: inline-block; }
        .btn-green:hover { background-color: #7bb532; color: #000; }
    </style>
</head>
<body>
    <header class="bg-white py-3 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="fw-bold fs-3 text-dark text-decoration-none">VoluntHub</a>
            <a href="{{ route('home') }}" class="btn btn-outline-dark btn-sm rounded-3">← Volver al inicio</a>
        </div>
    </header>

    <main class="container py-5">
        <div class="row align-items-center my-5">
            <div class="col-lg-6">
                <span class="text-uppercase fw-bold small" style="color: #8cc63f;">SOBRE NOSOTROS</span>
                <h1 class="display-4 fw-extrabold text-dark my-3">Conectando solidaridad en el corazón del Cusco</h1>
                <p class="fs-5 text-muted">VoluntHub nació para acortar la brecha entre organizaciones locales que necesitan apoyo y ciudadanos comprometidos con generar impacto positivo en su comunidad.</p>
                <div class="mt-4">
                    <a href="{{ route('oportunidades.index') }}" class="btn-green">Explorar causas &rarr;</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('img/hero-cusco.jpg') }}" class="img-fluid rounded-4 shadow-sm" alt="Nosotros VoluntHub">
            </div>
        </div>
    </main>
</body>
</html>