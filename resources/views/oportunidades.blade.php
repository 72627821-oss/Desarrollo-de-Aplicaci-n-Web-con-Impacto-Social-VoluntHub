<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Encuentra oportunidades de voluntariado social en Cusco con VoluntHub."
    >

    <title>Oportunidades | VoluntHub</title>

    <link
        rel="stylesheet"
        href="../css/styles.css"
    >
</head>


<body>

    <!-- =========================================
         HEADER
    ========================================== -->

    <header class="header">

        <div class="container navbar">

            <!-- LOGO -->

            <a
                href="../index.html"
                class="logo"
                aria-label="Ir al inicio de VoluntHub"
            >
                <img
                    src="../img/logo.png"
                    alt="Logo de VoluntHub"
                >
            </a>


            <!-- NAVEGACIÓN PRINCIPAL -->

            <nav
                class="nav"
                aria-label="Navegación principal"
            >

                <a href="../index.html">
                    Inicio
                </a>

                <a
                    href="oportunidades.html"
                    class="active"
                >
                    Oportunidades
                </a>

                <a href="../index.html#nosotros">
                    Nosotros
                </a>

            </nav>


            <!-- ACCIONES -->

            <div class="nav-actions">

                <a
                    href="login.html"
                    class="login-link"
                >
                    Iniciar sesión
                </a>

                <a
                    href="registro.html"
                    class="btn btn-primary"
                >
                    Crear cuenta
                </a>

            </div>


            <!-- BOTÓN MÓVIL -->

            <button
                class="menu-button"
                id="menuButton"
                type="button"
                aria-label="Abrir menú"
                aria-expanded="false"
            >
                ☰
            </button>

        </div>


        <!-- MENÚ MÓVIL -->

        <nav
            class="mobile-nav"
            id="mobileNav"
            aria-label="Navegación móvil"
        >

            <a href="../index.html">
                Inicio
            </a>

            <a href="oportunidades.html">
                Oportunidades
            </a>

            <a href="../index.html#nosotros">
                Nosotros
            </a>

            <a href="login.html">
                Iniciar sesión
            </a>

            <a href="registro.html">
                Crear cuenta
            </a>

        </nav>

    </header>


    <!-- =========================================
         HERO
    ========================================== -->

    <main>

        <section class="opportunities-hero">

            <div class="container">

                <span class="section-label">
                    OPORTUNIDADES
                </span>

                <h1>
                    Encuentra tu próxima oportunidad de ayudar
                </h1>

                <p>
                    Explora actividades de voluntariado y encuentra
                    una iniciativa que se adapte a tus intereses,
                    ubicación y disponibilidad.
                </p>


                <!-- BUSCADOR -->

                <form
                    class="opportunities-search"
                    id="searchForm"
                >

                    <label
                        for="searchInput"
                        class="sr-only"
                    >
                        Buscar oportunidades
                    </label>

                    <input
                        type="search"
                        id="searchInput"
                        placeholder="Buscar por nombre, categoría o ubicación"
                    >

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Buscar
                    </button>

                </form>

            </div>

        </section>


        <!-- =========================================
             FILTROS Y OPORTUNIDADES
        ========================================== -->

        <section class="opportunities-page">

            <div class="container">


                <!-- FILTROS -->

                <div class="filters-card">

                    <div class="filter-group">

                        <label for="categoryFilter">
                            Categoría
                        </label>

                        <select id="categoryFilter">

                            <option value="todas">
                                Todas
                            </option>

                            <option value="medio ambiente">
                                Medio ambiente
                            </option>

                            <option value="educación">
                                Educación
                            </option>

                            <option value="animales">
                                Protección animal
                            </option>

                            <option value="social">
                                Ayuda social
                            </option>

                            <option value="cultura">
                                Cultura
                            </option>

                        </select>

                    </div>


                    <div class="filter-group">

                        <label for="locationFilter">
                            Ubicación
                        </label>

                        <select id="locationFilter">

                            <option value="todas">
                                Todas
                            </option>

                            <option value="cusco">
                                Cusco
                            </option>

                            <option value="urubamba">
                                Urubamba
                            </option>

                            <option value="san sebastián">
                                San Sebastián
                            </option>

                            <option value="wanchaq">
                                Wanchaq
                            </option>

                        </select>

                    </div>


                    <div class="filter-group">

                        <label for="availabilityFilter">
                            Disponibilidad
                        </label>

                        <select id="availabilityFilter">

                            <option value="todas">
                                Cualquier día
                            </option>

                            <option value="semana">
                                Entre semana
                            </option>

                            <option value="fin de semana">
                                Fin de semana
                            </option>

                        </select>

                    </div>


                    <button
                        type="button"
                        class="clear-filters"
                        id="clearFilters"
                    >
                        Limpiar filtros
                    </button>

                </div>


                <!-- RESULTADOS -->

                <div class="results-header">

                    <p
                        class="results-count"
                        id="resultsCount"
                    >
                        6 oportunidades encontradas
                    </p>


                    <div class="sort-container">

                        <label for="sortFilter">
                            Ordenar:
                        </label>

                        <select id="sortFilter">

                            <option value="recent">
                                Más recientes
                            </option>

                            <option value="az">
                                Nombre A-Z
                            </option>

                        </select>

                    </div>

                </div>


                <!-- =====================================
                     TARJETAS
                ====================================== -->

                <div
                    class="opportunities-grid"
                    id="opportunitiesGrid"
                >


                    <!-- 1 -->

                    <article
                        class="opportunity-card"
                        data-category="medio ambiente"
                        data-location="urubamba"
                        data-availability="fin de semana"
                        data-title="Reforestación en el Valle Sagrado"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Medio ambiente
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            🌱
                        </div>


                        <h2>
                            Reforestación en el Valle Sagrado
                        </h2>

                        <p class="opportunity-description">
                            Participa en una jornada de reforestación
                            y recuperación de espacios naturales.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 Urubamba, Cusco
                            </span>

                            <span>
                                🗓️ Fin de semana
                            </span>

                            <span>
                                👥 20 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización ambiental
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>


                    <!-- 2 -->

                    <article
                        class="opportunity-card"
                        data-category="educación"
                        data-location="san sebastián"
                        data-availability="semana"
                        data-title="Refuerzo escolar para niños"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Educación
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            📚
                        </div>


                        <h2>
                            Refuerzo escolar para niños
                        </h2>

                        <p class="opportunity-description">
                            Apoya en actividades educativas y
                            acompañamiento escolar para niños.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 San Sebastián, Cusco
                            </span>

                            <span>
                                🗓️ Entre semana
                            </span>

                            <span>
                                👥 12 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización educativa
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>


                    <!-- 3 -->

                    <article
                        class="opportunity-card"
                        data-category="animales"
                        data-location="wanchaq"
                        data-availability="fin de semana"
                        data-title="Jornada de cuidado animal"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Protección animal
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            🐾
                        </div>


                        <h2>
                            Jornada de cuidado animal
                        </h2>

                        <p class="opportunity-description">
                            Colabora en actividades de cuidado,
                            limpieza y atención de animales.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 Wanchaq, Cusco
                            </span>

                            <span>
                                🗓️ Fin de semana
                            </span>

                            <span>
                                👥 15 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización de protección animal
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>


                    <!-- 4 -->

                    <article
                        class="opportunity-card"
                        data-category="social"
                        data-location="cusco"
                        data-availability="fin de semana"
                        data-title="Campaña de recolección de alimentos"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Ayuda social
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            🤝
                        </div>


                        <h2>
                            Campaña de recolección de alimentos
                        </h2>

                        <p class="opportunity-description">
                            Apoya en la recepción, clasificación
                            y organización de donaciones.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 Cusco
                            </span>

                            <span>
                                🗓️ Fin de semana
                            </span>

                            <span>
                                👥 25 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización social
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>


                    <!-- 5 -->

                    <article
                        class="opportunity-card"
                        data-category="educación"
                        data-location="cusco"
                        data-availability="semana"
                        data-title="Taller de lectura comunitaria"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Educación
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            📖
                        </div>


                        <h2>
                            Taller de lectura comunitaria
                        </h2>

                        <p class="opportunity-description">
                            Participa en actividades de lectura y
                            acompañamiento educativo comunitario.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 Cusco
                            </span>

                            <span>
                                🗓️ Entre semana
                            </span>

                            <span>
                                👥 10 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización educativa
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>


                    <!-- 6 -->

                    <article
                        class="opportunity-card"
                        data-category="medio ambiente"
                        data-location="cusco"
                        data-availability="fin de semana"
                        data-title="Limpieza de espacios naturales"
                    >

                        <div class="opportunity-card-top">

                            <span class="opportunity-category">
                                Medio ambiente
                            </span>

                            <button
                                class="favorite-btn"
                                type="button"
                                aria-label="Guardar oportunidad"
                            >
                                ♡
                            </button>

                        </div>


                        <div class="opportunity-icon">
                            ♻️
                        </div>


                        <h2>
                            Limpieza de espacios naturales
                        </h2>

                        <p class="opportunity-description">
                            Participa en una jornada comunitaria
                            de limpieza y conservación ambiental.
                        </p>


                        <div class="opportunity-info">

                            <span>
                                📍 Cusco
                            </span>

                            <span>
                                🗓️ Fin de semana
                            </span>

                            <span>
                                👥 30 cupos
                            </span>

                        </div>


                        <div class="opportunity-footer">

                            <span class="organization-name">
                                Organización ambiental
                            </span>

                            <a
                                href="detalle-oportunidad.html"
                                class="opportunity-link"
                            >
                                Ver oportunidad →
                            </a>

                        </div>

                    </article>

                </div>


                <!-- SIN RESULTADOS -->

                <div
                    class="no-results"
                    id="noResults"
                    hidden
                >

                    <div class="no-results-icon">
                        🔎
                    </div>

                    <h2>
                        No encontramos oportunidades
                    </h2>

                    <p>
                        Prueba cambiando los filtros o realizando
                        otra búsqueda.
                    </p>

                    <button
                        class="btn btn-primary"
                        id="resetFilters"
                        type="button"
                    >
                        Ver todas
                    </button>

                </div>

            </div>

        </section>


        <!-- =========================================
             CTA
        ========================================== -->

        <section class="opportunities-cta">

            <div class="container">

                <div>

                    <span class="section-label">
                        FORMA PARTE
                    </span>

                    <h2>
                        ¿Quieres empezar a generar impacto?
                    </h2>

                    <p>
                        Crea tu perfil de voluntario y encuentra
                        actividades relacionadas con tus intereses.
                    </p>

                </div>


                <a
                    href="registro.html"
                    class="btn btn-primary btn-large"
                >
                    Crear cuenta
                </a>

            </div>

        </section>

    </main>


    <!-- =========================================
         FOOTER
    ========================================== -->

    <footer class="footer">

        <div class="container footer-content">

            <div class="footer-brand">

                <div class="footer-logo">
                    Volunt<span>Hub</span>
                </div>

                <p>
                    Conectando personas con causas sociales en Cusco.
                </p>

            </div>


            <nav
                class="footer-nav"
                aria-label="Enlaces del pie de página"
            >

                <a href="../index.html">
                    Inicio
                </a>

                <a href="oportunidades.html">
                    Oportunidades
                </a>

                <a href="../index.html#nosotros">
                    Nosotros
                </a>

            </nav>


            <p class="copyright">
                © 2026 VoluntHub
            </p>

        </div>

    </footer>


    <!-- JS GENERAL -->

    <script src="../js/main.js"></script>

    <!-- JS DE OPORTUNIDADES -->

    <script src="../js/oportunidades.js"></script>

</body>

</html>