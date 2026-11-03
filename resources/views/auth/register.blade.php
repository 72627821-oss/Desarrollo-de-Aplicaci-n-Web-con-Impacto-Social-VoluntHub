<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta | VoluntHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">VoluntHub</a>
            <div class="navbar-nav ms-auto align-items-center">
                <a class="nav-link px-3" href="{{ route('home') }}">Inicio</a>
                <a class="nav-link px-3" href="{{ route('oportunidades.index') }}">Oportunidades</a>
                <a class="nav-link px-3" href="{{ route('nosotros') }}">Nosotros</a>
                <a class="nav-link px-3 fw-semibold text-dark ms-2" href="{{ route('login') }}">Iniciar sesión</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row align-items-center justify-content-between py-4">
            
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <span class="text-uppercase text-muted small fw-bold">ÚNETE A NUESTRA COMUNIDAD</span>
                <h1 class="display-4 fw-bold mt-2 text-dark">
                    Haz la diferencia <br>
                    <span style="color: #8cc63f;">en Cusco</span>
                </h1>
                <p class="lead text-secondary mt-3">Regístrate para empezar a participar en proyectos con verdadero impacto social.</p>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 shadow-lg p-4 rounded-4 bg-white">
                    <div class="card-body">
                        <h3 class="fw-bold text-dark mb-1">Crear cuenta</h3>
                        <p class="text-muted small mb-4">Completa tus datos para registrarte.</p>

                        @if ($errors->any())
                            <div class="alert alert-danger py-2 small mb-3">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label small fw-semibold text-muted">Nombre completo</label>
                                <input type="text" name="name" id="name" class="form-control bg-light" placeholder="Tu nombre" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label small fw-semibold text-muted">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control bg-light" placeholder="nombre@correo.com" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label small fw-semibold text-muted">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control bg-light" placeholder="Mínimo 8 caracteres" required>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label small fw-semibold text-muted">Confirmar contraseña</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control bg-light" placeholder="Repite tu contraseña" required>
                            </div>

                            <button type="submit" class="btn w-100 py-3 fw-bold text-white rounded-3 mb-3" style="background-color: #8cc63f; border: none;">
                                Registrarse
                            </button>

                            <div class="text-center">
                                <span class="small text-muted">¿Ya tienes cuenta? </span>
                                <a href="{{ route('login') }}" class="small fw-bold text-dark text-decoration-none">Iniciar sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>