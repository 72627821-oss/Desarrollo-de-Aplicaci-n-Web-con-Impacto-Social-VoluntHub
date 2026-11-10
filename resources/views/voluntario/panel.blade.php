<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Panel Voluntario | VoluntHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
    </style>
</head>
<body class="p-4 p-md-5">
    <div class="container bg-white p-4 p-md-5 rounded-4 shadow-sm" style="max-width: 900px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="badge bg-success text-white px-3 py-2 rounded-pill">Perfil Voluntario</span>
                <h2 class="fw-bold mt-2">¡Hola, {{ auth()->user()->name }}! 👋</h2>
            </div>
            <div>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary me-2">Volver al Inicio</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Cerrar Sesión</button>
                </form>
            </div>
        </div>
        <hr class="my-4">
        <h4 class="fw-bold mb-3">Tus Postulaciones y Favoritos</h4>
        <p class="text-muted">Aún no te has postulado a ninguna oportunidad. Explora las causas disponibles en Cusco.</p>
        <a href="{{ route('oportunidades.index') }}" class="btn btn-success fw-bold py-2 px-4 rounded-3" style="background-color: #8cc63f; border: none; color: #000;">Explorar Oportunidades &rarr;</a>
    </div>
</body>
</html>