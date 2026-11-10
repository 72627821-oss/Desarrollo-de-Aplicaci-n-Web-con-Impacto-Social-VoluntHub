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
        .card-custom { border-radius: 20px; border: none; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .btn-green-main { background-color: #8cc63f; color: #000; font-weight: 700; border-radius: 10px; border: none; padding: 0.6rem 1.2rem; text-decoration: none; }
    </style>
</head>
<body class="p-4 p-md-5">
    <div class="container" style="max-width: 1000px;">
        
        <!-- Header del Panel -->
        <div class="card card-custom p-4 p-md-5 mb-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <span class="badge bg-dark text-white px-3 py-2 rounded-pill mb-2">Organización Registrada</span>
                    <h2 class="fw-bold m-0">🏛️ {{ auth()->user()->nombre_organizacion ?? auth()->user()->name }}</h2>
                    <p class="text-muted mb-0 mt-1">Responsable: {{ auth()->user()->name }} | 📧 {{ auth()->user()->email }} | 📞 {{ auth()->user()->telefono ?? 'Sin teléfono' }}</p>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary me-2">Volver al Inicio</a>
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

        <!-- Seccion Convocatorias y Postulantes -->
        <div class="card card-custom p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold m-0">Tus Convocatorias y Voluntarios Postulados</h4>
                <a href="{{ route('oportunidades.create') }}" class="btn-green-main">+ Publicar Oportunidad</a>
            </div>

            @php
                $misOportunidades = \App\Models\Oportunidad::where('user_id', auth()->id())->latest()->get();
            @endphp

            @forelse($misOportunidades as $op)
                <div class="border rounded-4 p-4 mb-4 bg-light">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="badge bg-success text-white mb-1">{{ $op->categoria }}</span>
                            <h5 class="fw-bold m-0">{{ $op->titulo }}</h5>
                            <small class="text-muted">📍 {{ $op->ubicacion }} | 📅 {{ $op->fecha }}</small>
                        </div>
                        <a href="{{ route('oportunidades.show', $op->id) }}" class="btn btn-sm btn-outline-dark">Ver causa pública</a>
                    </div>

                    <h6 class="fw-bold mt-4 mb-3">🙋‍♂️ Voluntarios Interesados ({{ $op->postulaciones->count() }})</h6>
                    
                    @if($op->postulaciones->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Voluntario</th>
                                        <th>Contacto</th>
                                        <th>Estado</th>
                                        <th>Acción de Evaluación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($op->postulaciones as $postu)
                                        <tr>
                                            <td>
                                                <strong>{{ $postu->voluntario->name }}</strong>
                                            </td>
                                            <td>
                                                📧 {{ $postu->voluntario->email }}<br>
                                                📞 {{ $postu->voluntario->telefono ?? 'Sin teléfono' }}
                                            </td>
                                            <td>
                                                @if($postu->estado === 'aceptado')
                                                    <span class="badge bg-success">Aceptado / Apto</span>
                                                @elseif($postu->estado === 'rechazado')
                                                    <span class="badge bg-danger">No Apto</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pendiente</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('postulaciones.estado', $postu->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="estado" value="aceptado">
                                                    <button class="btn btn-sm btn-success me-1">Aceptar</button>
                                                </form>
                                                <form action="{{ route('postulaciones.estado', $postu->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="estado" value="rechazado">
                                                    <button class="btn btn-sm btn-outline-danger">Rechazar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted small m-0">Aún no hay voluntarios postulados a esta convocatoria.</p>
                    @endif
                </div>
            @empty
                <div class="p-4 bg-light rounded-3 text-center text-muted">
                    Aún no has publicado convocatorias en Cusco. ¡Crea la primera para recibir voluntarios!
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>