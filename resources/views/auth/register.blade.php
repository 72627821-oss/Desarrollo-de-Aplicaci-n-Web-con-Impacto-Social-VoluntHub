<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | VoluntHub Cusco</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .card-auth { border-radius: 24px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08); background: #ffffff; }
        .btn-green-main { background-color: #8cc63f; color: #000000; font-weight: 700; border-radius: 12px; border: none; padding: 0.8rem; text-decoration: none; display: block; text-align: center; }
        .btn-green-main:hover { background-color: #7bb532; color: #000; }
        .role-selector { display: flex; gap: 1rem; margin-bottom: 1.5rem; }
        .role-card { flex: 1; border: 2px solid #eef2f0; border-radius: 16px; padding: 1.25rem 1rem; text-align: center; cursor: pointer; transition: all 0.2s ease; background-color: #fff; }
        .role-card.active { border-color: #8cc63f; background-color: #f2f9e8; font-weight: 700; }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <div class="card card-auth p-4 p-md-5">
                    <div class="text-center mb-4">
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            <span class="fw-bold fs-3 text-dark">VoluntHub</span>
                        </a>
                        <h4 class="fw-bold mt-2">Crea tu cuenta</h4>
                        <p class="text-muted small">Elige tu perfil para comenzar en Cusco</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <ul class="mb-0 small ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        
                        <!-- Selector de Perfil -->
                        <label class="form-label fw-bold small text-uppercase text-muted mb-2">Quiero registrarme como:</label>
                        <div class="role-selector">
                            <div class="role-card active" id="btn-voluntario" onclick="selectRole('voluntario')">
                                <div class="fs-2 mb-1">🙋‍♂️</div>
                                <div>Voluntario</div>
                                <small class="text-muted fw-normal d-block" style="font-size: 0.75rem;">Para buscar y postular a causas</small>
                            </div>
                            <div class="role-card" id="btn-organizacion" onclick="selectRole('organizacion')">
                                <div class="fs-2 mb-1">🏛️</div>
                                <div>Organización</div>
                                <small class="text-muted fw-normal d-block" style="font-size: 0.75rem;">Para publicar convocatorias</small>
                            </div>
                        </div>
                        <input type="hidden" name="role" id="role-input" value="voluntario">

                        <!-- Campos para el Representante o Usuario -->
                        <div class="mb-3">
                            <label class="form-label fw-bold small">Nombre Completo del Responsable</label>
                            <input type="text" name="name" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('name') }}" required placeholder="ej. Juan Pérez">
                        </div>

                        <!-- Campos Exclusivos para Organización -->
                        <div id="fields-organizacion" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Nombre de la Organización / ONG</label>
                                <input type="text" name="nombre_organizacion" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('nombre_organizacion') }}" placeholder="ej. Asociación Patitas Cusco">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Descripción breve de la organización</label>
                                <textarea name="descripcion_organizacion" class="form-control rounded-3 fs-6" rows="2" placeholder="¿A qué labor o causas se dedican?">{{ old('descripcion_organizacion') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Teléfono / WhatsApp de Contacto</label>
                            <input type="text" name="telefono" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('telefono') }}" placeholder="+51 987 654 321">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('email') }}" required placeholder="correo@ejemplo.com">
                        </div>

                        <div class="row g-2 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Contraseña</label>
                                <input type="password" name="password" class="form-control form-control-lg rounded-3 fs-6" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Confirmar Contraseña</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg rounded-3 fs-6" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-green-main w-100 mb-3">Completar Registro</button>
                    </form>

                    <div class="text-center small">
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-success fw-bold text-decoration-none">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectRole(role) {
            document.getElementById('role-input').value = role;
            const btnVol = document.getElementById('btn-voluntario');
            const btnOrg = document.getElementById('btn-organizacion');
            const fieldsOrg = document.getElementById('fields-organizacion');

            if (role === 'organizacion') {
                btnOrg.classList.add('active');
                btnVol.classList.remove('active');
                fieldsOrg.style.display = 'block';
            } else {
                btnVol.classList.add('active');
                btnOrg.classList.remove('active');
                fieldsOrg.style.display = 'none';
            }
        }
    </script>
</body>
</html>