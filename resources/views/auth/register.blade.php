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
        
        /* Radios personalizados visibles para evitar errores */
        .role-option-box {
            border: 2px solid #eef2f0;
            border-radius: 16px;
            padding: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            background-color: #fff;
        }
        .role-option-box:hover {
            border-color: #8cc63f;
        }
        .btn-check:checked + .role-option-box {
            border-color: #8cc63f;
            background-color: #f2f9e8;
        }
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
                        <p class="text-muted small">Selecciona el tipo de perfil con el que ingresarás</p>
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

                    <form action="{{ route('custom.register') }}" method="POST">
                        @csrf
                        
                        <!-- Seleccion Explicita de Rol -->
                        <label class="form-label fw-bold small text-uppercase text-muted mb-2">Tipo de usuario:</label>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="role" id="role_voluntario" value="voluntario" {{ old('role', 'voluntario') === 'voluntario' ? 'checked' : '' }} onchange="toggleFormFields()">
                                <label class="role-option-box w-100 text-center d-block" for="role_voluntario">
                                    <div class="fs-2 mb-1">🙋‍♂️</div>
                                    <strong class="d-block text-dark">Voluntario</strong>
                                    <small class="text-muted" style="font-size: 0.75rem;">Para buscar y postular</small>
                                </label>
                            </div>
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="role" id="role_organizacion" value="organizacion" {{ old('role') === 'organizacion' ? 'checked' : '' }} onchange="toggleFormFields()">
                                <label class="role-option-box w-100 text-center d-block" for="role_organizacion">
                                    <div class="fs-2 mb-1">🏛️</div>
                                    <strong class="d-block text-dark">Organización</strong>
                                    <small class="text-muted" style="font-size: 0.75rem;">Para publicar causas</small>
                                </label>
                            </div>
                        </div>

                        <!-- Nombre del usuario o representante -->
                        <div class="mb-3">
                            <label class="form-label fw-bold small" id="lbl-name">Nombre Completo</label>
                            <input type="text" name="name" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('name') }}" required placeholder="ej. Juan Pérez">
                        </div>

                        <!-- Campos condicionales para Organizacion -->
                        <div id="fields-organizacion" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Nombre de la Organización / ONG</label>
                                <input type="text" name="nombre_organizacion" id="input_nombre_org" class="form-control form-control-lg rounded-3 fs-6" value="{{ old('nombre_organizacion') }}" placeholder="ej. Asociación Patitas Cusco">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Descripción breve de la organización</label>
                                <textarea name="descripcion_organizacion" class="form-control rounded-3 fs-6" rows="2" placeholder="¿A qué se dedica tu institución?">{{ old('descripcion_organizacion') }}</textarea>
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

                        <button type="submit" class="btn btn-green-main w-100 mb-3">Crear Cuenta</button>
                    </form>

                    <div class="text-center small">
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-success fw-bold text-decoration-none">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleFormFields() {
            const isOrg = document.getElementById('role_organizacion').checked;
            const fieldsOrg = document.getElementById('fields-organizacion');
            const lblName = document.getElementById('lbl-name');
            const inputNombreOrg = document.getElementById('input_nombre_org');

            if (isOrg) {
                fieldsOrg.style.display = 'block';
                lblName.textContent = 'Nombre del Responsable / Representante';
                inputNombreOrg.setAttribute('required', 'required');
            } else {
                fieldsOrg.style.display = 'none';
                lblName.textContent = 'Nombre Completo';
                inputNombreOrg.removeAttribute('required');
            }
        }

        // Ejecutar al cargar la pagina por si regresa con errores de validacion
        document.addEventListener('DOMContentLoaded', toggleFormFields);
    </script>
</body>
</html>