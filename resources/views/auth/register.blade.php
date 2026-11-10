<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | VoluntHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8faf7; color: #1a2b27; }
        .card-auth { border-radius: 24px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08); background: #fff; }
        .btn-green-main { background-color: #8cc63f; color: #000; font-weight: 700; border-radius: 12px; border: none; padding: 0.8rem; }
        .btn-green-main:hover { background-color: #7bb532; }
        .role-selector { display: flex; gap: 1rem; margin-bottom: 1.5rem; }
        .role-card { flex: 1; border: 2px solid #eef2f0; border-radius: 16px; padding: 1rem; text-align: center; cursor: pointer; transition: all 0.2s; }
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
                        <p class="text-muted small">Selecciona cómo deseas participar en la plataforma</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as$error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register.post') }}" method="POST">
                        @csrf
                        
                        <!-- Seleccion de Rol -->
                        <label class="form-label fw-bold small text-uppercase text-muted mb-2">Quiero registrarme como:</label>
                        <div class="role-selector">
                            <div class="role-card active" id="btn-voluntario" onclick="selectRole('voluntario')">
                                <div class="fs-3">🙋‍♂️</div>
                                <div>Voluntario</div>
                            </div>
                            <div class="role-card" id="btn-organizacion" onclick="selectRole('organizacion')">
                                <div class="fs-3">🏛️</div>
                                <div>Organización</div>
                            </div>
                        </div>
                        <input type="hidden" name="role" id="role-input" value="voluntario">

                        <!-- Campos Comunes -->
                        <div class="mb-3">
                            <label class="form-label fw-bold small">Nombre Completo de Contacto</label>
                            <input type="text" name="name" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('name') }}" required placeholder="ej. Juan Pérez">
                        </div>

                        <!-- Campos Exclusivos para Organizacion -->
                        <div id="fields-organizacion" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Nombre de la Organización / ONG</label>
                                <input type="text" name="nombre_organizacion" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('nombre_organizacion') }}" placeholder="ej. Asociación Patitas Cusco">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Descripción breve de la causa</label>
                                <textarea name="descripcion_organizacion" class="form-control rounded-3 fs-6" rows="2" placeholder="¿A qué se dedica tu organización?">{{ old('descripcion_organizacion') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Teléfono / WhatsApp de contacto</label>
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