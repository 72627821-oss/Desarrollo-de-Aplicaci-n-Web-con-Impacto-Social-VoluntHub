<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Organización | VoluntHub</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .card-custom { border-radius: 20px; border: none; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .btn-green-main { background-color: #8cc63f; color: #000; font-weight: 700; border-radius: 10px; border: none; padding: 0.75rem 1.25rem; text-decoration: none; display: inline-block; }
        .btn-green-main:hover { background-color: #7bb532; color: #000; }
    </style>
</head>
<body class="p-4 p-md-5">
    <div class="container" style="max-width: 1000px;">
        
        <!-- Perfil de la Organización -->
        <div class="card card-custom p-4 p-md-5 mb-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <span class="badge bg-dark text-white px-3 py-2 rounded-pill mb-2">Panel Institucional de Organización</span>
                    <h2 class="fw-bold m-0">🏛️ {{ auth()->user()->nombre_organizacion ?? auth()->user()->name }}</h2>
                    <p class="text-muted mb-0 mt-1">Responsable: {{ auth()->user()->name }} | 📧 {{ auth()->user()->email }} | 📞 {{ auth()->user()->telefono ?? 'Sin teléfono' }}</p>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary me-2">Ir al Inicio</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success rounded-3 mb-4">{{ session('success') }}</div>
        @endif

        <!-- Módulo de Convocatorias y Postulados -->
        <div class="card card-custom p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold m-0">Tus Convocatorias Publicadas</h4>
                <a href="{{ route('oportunidades.create') }}" class="btn-green-main">+ Publicar Nueva Oportunidad</a>
            </div>

            @php
                if (\Illuminate\Support\Facades\Schema::hasColumn('oportunidades', 'user_id')) {
                    $misConvocatorias = \App\Models\Oportunidad::where('user_id', auth()->id())->latest()->get();
                } else {
                    $misConvocatorias = \App\Models\Oportunidad::latest()->get();
                }
            @endphp

            @forelse($misConvocatorias as $convocatoria)
                @php
                    // Obtención ultra segura del ID (soporta id, id_oportunidad o la clave primaria Eloquent)
                    $idConvocatoria = $convocatoria->id ?? $convocatoria->id_oportunidad ?? $convocatoria->getKey();
                @endphp
                <div class="border rounded-4 p-4 mb-4 bg-light">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="badge bg-success text-white mb-1">{{ $convocatoria->categoria }}</span>
                            <h5 class="fw-bold m-0">{{ $convocatoria->titulo }}</h5>
                            <small class="text-muted">📍 Ubicación: {{ $convocatoria->ubicacion }} | 📅 Fecha: {{ $convocatoria->fecha }}</small>
                        </div>
                        @if($idConvocatoria)
                            <a href="{{ route('oportunidades.show', $idConvocatoria) }}" class="btn btn-sm btn-outline-dark">Ver causa en la web</a>
                        @endif
                    </div>

                    @php
    $postulaciones = collect();
    try {
        if (\Illuminate\Support\Facades\Schema::hasTable('postulaciones') && isset($convocatoria->postulaciones)) {
            $postulaciones = $convocatoria->postulaciones;
        }
    } catch (\Exception $e) {
        $postulaciones = collect();
    }
@endphp

<h6 class="fw-bold mt-4 mb-3">🙋‍♂️ Personas Postuladas ({{ $postulaciones->count() }})</h6>

@if($postulaciones->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Voluntario</th>
                                        <th>Contacto</th>
                                        <th>Estado</th>
                                        <th>Evaluación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($convocatoria->postulaciones as $postu)
                                        <tr>
                                            <td><strong>{{ $postu->voluntario ? $postu->voluntario->name : 'Voluntario' }}</strong></td>
                                            <td>
                                                📧 {{ $postu->voluntario ? $postu->voluntario->email : '-' }}<br>
                                                📞 {{ ($postu->voluntario && $postu->voluntario->telefono) ? $postu->voluntario->telefono : 'Sin teléfono' }}
                                            </td>
                                            <td>
                                                @if($postu->estado === 'aceptado')
                                                    <span class="badge bg-success">Aceptado</span>
                                                @elseif($postu->estado === 'rechazado')
                                                    <span class="badge bg-danger">Rechazado</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pendiente</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('postulaciones.estado', $postu->id ?? $postu->id_postulacion) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="estado" value="aceptado">
                                                    <button type="submit" class="btn btn-sm btn-success me-1">Aceptar</button>
                                                </form>
                                                <form action="{{ route('postulaciones.estado', $postu->id ?? $postu->id_postulacion) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="estado" value="rechazado">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">Rechazar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted small m-0">Aún no se han postulado voluntarios a esta convocatoria.</p>
                    @endif
                </div>
            @empty
                <div class="p-5 bg-light rounded-4 text-center">
                    <p class="text-muted fs-5 mb-3">Todavía no has publicado ninguna convocatoria de voluntariado.</p>
                    <a href="{{ route('oportunidades.create') }}" class="btn-green-main px-4 py-3">+ Crear tu primera convocatoria</a>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>