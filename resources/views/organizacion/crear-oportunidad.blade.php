<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Oportunidad | VoluntHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .card-custom { border-radius: 20px; border: none; box-shadow: 0 4px 20px rgba(0,0,0,0.06); }
        .btn-green { background-color: #8cc63f; color: #000; font-weight: 700; border-radius: 10px; border: none; }
    </style>
</head>
<body class="py-5">
    <div class="container" style="max-width: 750px;">
        <div class="card card-custom p-4 p-md-5 bg-white">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold m-0">Publicar Nueva Convocatoria</h3>
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm">Volver al Panel</a>
            </div>

            <form action="{{ route('oportunidades.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold small">Título de la Causa</label>
                    <input type="text" name="titulo" class="form-control rounded-3" placeholder="ej. Reforestación en Urubamba" required>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold small">Categoría</label>
                        <select name="categoria" class="form-select rounded-3" required>
                            <option value="Medio Ambiente">Medio Ambiente</option>
                            <option value="Educación">Educación</option>
                            <option value="Protección Animal">Protección Animal</option>
                            <option value="Salud y Comunidad">Salud y Comunidad</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small">Ubicación (Distrito / Provincia)</label>
                        <input type="text" name="ubicacion" class="form-control rounded-3" placeholder="ej. San Sebastián, Cusco" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold small">Fecha del Evento / Convocatoria</label>
                    <input type="date" name="fecha" class="form-control rounded-3" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold small">Descripción Completa</label>
                    <textarea name="descripcion" class="form-control rounded-3" rows="4" placeholder="Detalla las actividades y requisitos para los voluntarios..." required></textarea>
                </div>

                <button type="submit" class="btn btn-green w-100 py-3">Publicar Oportunidad</button>
            </form>
        </div>
    </div>
</body>
</html>