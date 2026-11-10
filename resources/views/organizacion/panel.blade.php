<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Organización | VoluntHub</title>
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
                <span class="badge bg-dark text-white px-3 py-2 rounded-pill">Organización Registrada</span>
                <h2 class="fw-bold mt-2">🏛️ {{ auth()->user()->nombre_organizacion ?? auth()->user()->name }}</h2>
                <p class="text-muted mb-0">Contacto: {{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
            </div>
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">Volver al Inicio</a>
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">Tus Convocatorias de Voluntariado</h4>
            <button class="btn btn-success fw-bold py-2 px-3 rounded-3" style="background-color: #8cc63f; border: none; color: #000;">+ Publicar Oportunidad</button>
        </div>
        <div class="p-4 bg-light rounded-3 text-center text-muted">
            Aún no has publicado convocatorias en Cusco. ¡Crea la primera para recibir voluntarios!
        </div>
    </div>
</body>
</html>