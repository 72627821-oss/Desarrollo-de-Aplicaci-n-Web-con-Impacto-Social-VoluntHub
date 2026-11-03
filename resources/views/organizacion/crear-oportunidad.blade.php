<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Crear una nueva oportunidad de voluntariado en VoluntHub."
    >

    <title>Crear oportunidad | VoluntHub</title>

    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">

        <div class="container nav-container">

            <a href="../../index.html" class="logo">
                <img
                    src="../../img/logo.png"
                    alt="Logo de VoluntHub"
                    class="logo-img"
                >
                <span>VoluntHub</span>
            </a>

            <button
                class="menu-toggle"
                id="menuToggle"
                aria-label="Abrir menú"
                aria-expanded="false"
            >
                ☰
            </button>

            <nav
                class="nav"
                id="mainNav"
                aria-label="Navegación principal"
            >

                <a href="../../index.html" class="nav-link">
                    Inicio
                </a>

                <a href="../oportunidades.html" class="nav-link">
                    Oportunidades
                </a>

                <a href="panel.html" class="nav-link active">
                    Mi organización
                </a>

                <div class="nav-actions">

                    <a
                        href="panel.html"
                        class="btn btn-outline"
                    >
                        Volver al panel
                    </a>

                </div>

            </nav>

        </div>

    </header>


    <!-- CONTENIDO -->
    <main class="create-opportunity-page">

        <div class="container create-opportunity-container">

            <!-- ENCABEZADO -->
            <section class="create-header">

                <a
                    href="panel.html"
                    class="back-link"
                >
                    ← Volver al panel
                </a>

                <span class="section-label">
                    ORGANIZACIÓN
                </span>

                <h1>
                    Crear nueva oportunidad
                </h1>

                <p>
                    Completa la información necesaria para
                    publicar una nueva convocatoria de
                    voluntariado.
                </p>

            </section>


            <!-- FORMULARIO -->
            <section class="create-form-card">

                <form
                    id="opportunityForm"
                    novalidate
                >

                    <!-- INFORMACIÓN GENERAL -->
                    <div class="form-section">

                        <div class="form-section-title">

                            <span class="form-section-number">
                                1
                            </span>

                            <div>
                                <h2>
                                    Información general
                                </h2>

                                <p>
                                    Indica los datos principales
                                    de la oportunidad.
                                </p>
                            </div>

                        </div>


                        <!-- TÍTULO -->
                        <div class="form-group">

                            <label for="opportunityTitle">
                                Título de la oportunidad *
                            </label>

                            <input
                                type="text"
                                id="opportunityTitle"
                                name="title"
                                placeholder="Ej. Jornada de reforestación"
                                maxlength="80"
                                required
                            >

                            <div class="field-footer">

                                <small
                                    class="form-error"
                                    id="titleError"
                                ></small>

                                <small
                                    class="character-counter"
                                    id="titleCounter"
                                >
                                    0 / 80
                                </small>

                            </div>

                        </div>


                        <!-- CATEGORÍA -->
                        <div class="form-row">

                            <div class="form-group">

                                <label for="category">
                                    Categoría *
                                </label>

                                <select
                                    id="category"
                                    name="category"
                                    required
                                >
                                    <option value="">
                                        Selecciona una categoría
                                    </option>

                                    <option value="medio-ambiente">
                                        Medio ambiente
                                    </option>

                                    <option value="educacion">
                                        Educación
                                    </option>

                                    <option value="animales">
                                        Protección animal
                                    </option>

                                    <option value="adulto-mayor">
                                        Apoyo al adulto mayor
                                    </option>

                                    <option value="social">
                                        Ayuda social
                                    </option>

                                    <option value="alimentos">
                                        Alimentos y donaciones
                                    </option>

                                    <option value="comunidad">
                                        Comunidad
                                    </option>

                                    <option value="cultura">
                                        Cultura y patrimonio
                                    </option>
                                </select>

                                <small
                                    class="form-error"
                                    id="categoryError"
                                ></small>

                            </div>


                            <!-- UBICACIÓN -->
                            <div class="form-group">

                                <label for="location">
                                    Ubicación *
                                </label>

                                <input
                                    type="text"
                                    id="location"
                                    name="location"
                                    placeholder="Ej. Cusco"
                                    required
                                >

                                <small
                                    class="form-error"
                                    id="locationError"
                                ></small>

                            </div>

                        </div>


                        <!-- DESCRIPCIÓN -->
                        <div class="form-group">

                            <label for="description">
                                Descripción *
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="6"
                                maxlength="600"
                                placeholder="Describe el objetivo de la actividad y las tareas que realizarán los voluntarios..."
                                required
                            ></textarea>

                            <div class="field-footer">

                                <small
                                    class="form-error"
                                    id="descriptionError"
                                ></small>

                                <small
                                    class="character-counter"
                                    id="descriptionCounter"
                                >
                                    0 / 600
                                </small>

                            </div>

                        </div>

                    </div>


                    <!-- FECHA Y HORARIO -->
                    <div class="form-section">

                        <div class="form-section-title">

                            <span class="form-section-number">
                                2
                            </span>

                            <div>
                                <h2>
                                    Fecha y horario
                                </h2>

                                <p>
                                    Define cuándo se realizará
                                    la actividad.
                                </p>
                            </div>

                        </div>


                        <div class="form-row">

                            <!-- FECHA -->
                            <div class="form-group">

                                <label for="date">
                                    Fecha *
                                </label>

                                <input
                                    type="date"
                                    id="date"
                                    name="date"
                                    required
                                >

                                <small
                                    class="form-error"
                                    id="dateError"
                                ></small>

                            </div>


                            <!-- CUPOS -->
                            <div class="form-group">

                                <label for="capacity">
                                    Número de cupos *
                                </label>

                                <input
                                    type="number"
                                    id="capacity"
                                    name="capacity"
                                    min="1"
                                    max="500"
                                    placeholder="Ej. 20"
                                    required
                                >

                                <small
                                    class="form-error"
                                    id="capacityError"
                                ></small>

                            </div>

                        </div>


                        <div class="form-row">

                            <!-- INICIO -->
                            <div class="form-group">

                                <label for="startTime">
                                    Hora de inicio *
                                </label>

                                <input
                                    type="time"
                                    id="startTime"
                                    name="startTime"
                                    required
                                >

                                <small
                                    class="form-error"
                                    id="startTimeError"
                                ></small>

                            </div>


                            <!-- FINAL -->
                            <div class="form-group">

                                <label for="endTime">
                                    Hora de finalización *
                                </label>

                                <input
                                    type="time"
                                    id="endTime"
                                    name="endTime"
                                    required
                                >

                                <small
                                    class="form-error"
                                    id="endTimeError"
                                ></small>

                            </div>

                        </div>

                    </div>


                    <!-- REQUISITOS -->
                    <div class="form-section">

                        <div class="form-section-title">

                            <span class="form-section-number">
                                3
                            </span>

                            <div>
                                <h2>
                                    Requisitos
                                </h2>

                                <p>
                                    Indica qué necesita cumplir
                                    el voluntario.
                                </p>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="requirements">
                                Requisitos de participación *
                            </label>

                            <textarea
                                id="requirements"
                                name="requirements"
                                rows="5"
                                maxlength="500"
                                placeholder="Ej. Disponibilidad durante toda la actividad, responsabilidad y disposición para trabajar en equipo."
                                required
                            ></textarea>

                            <div class="field-footer">

                                <small
                                    class="form-error"
                                    id="requirementsError"
                                ></small>

                                <small
                                    class="character-counter"
                                    id="requirementsCounter"
                                >
                                    0 / 500
                                </small>

                            </div>

                        </div>


                        <!-- HABILIDADES -->
                        <fieldset class="skills-fieldset">

                            <legend>
                                Habilidades relacionadas
                            </legend>

                            <p class="field-help">
                                Selecciona las habilidades que
                                pueden ser útiles para esta actividad.
                            </p>


                            <div class="skills-checkboxes">

                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="trabajo-equipo"
                                    >
                                    <span>
                                        Trabajo en equipo
                                    </span>
                                </label>


                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="comunicacion"
                                    >
                                    <span>
                                        Comunicación
                                    </span>
                                </label>


                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="liderazgo"
                                    >
                                    <span>
                                        Liderazgo
                                    </span>
                                </label>


                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="educacion"
                                    >
                                    <span>
                                        Educación
                                    </span>
                                </label>


                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="medio-ambiente"
                                    >
                                    <span>
                                        Medio ambiente
                                    </span>
                                </label>


                                <label class="skill-checkbox">
                                    <input
                                        type="checkbox"
                                        name="skills"
                                        value="organizacion"
                                    >
                                    <span>
                                        Organización
                                    </span>
                                </label>

                            </div>

                        </fieldset>

                    </div>


                    <!-- MENSAJE -->
                    <div
                        class="form-message create-message"
                        id="opportunityMessage"
                        role="alert"
                    ></div>


                    <!-- BOTONES -->
                    <div class="create-actions">

                        <a
                            href="panel.html"
                            class="btn btn-secondary"
                        >
                            Cancelar
                        </a>


                        <button
                            type="button"
                            class="btn btn-outline"
                            id="draftButton"
                        >
                            Guardar borrador
                        </button>


                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Publicar oportunidad
                        </button>

                    </div>

                </form>

            </section>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="container footer-bottom">

            <p>
                © 2026 VoluntHub. Proyecto académico.
            </p>

        </div>

    </footer>


    <script src="../../js/main.js"></script>


    <script>

        /* ========================================
           ELEMENTOS
        ======================================== */

        const opportunityForm =
            document.getElementById("opportunityForm");

        const titleInput =
            document.getElementById("opportunityTitle");

        const categoryInput =
            document.getElementById("category");

        const locationInput =
            document.getElementById("location");

        const descriptionInput =
            document.getElementById("description");

        const dateInput =
            document.getElementById("date");

        const capacityInput =
            document.getElementById("capacity");

        const startTimeInput =
            document.getElementById("startTime");

        const endTimeInput =
            document.getElementById("endTime");

        const requirementsInput =
            document.getElementById("requirements");

        const opportunityMessage =
            document.getElementById("opportunityMessage");

        const draftButton =
            document.getElementById("draftButton");


        /* ========================================
           CONTADORES
        ======================================== */

        function createCounter(input, counter) {

            input.addEventListener("input", function () {

                counter.textContent =
                    input.value.length +
                    " / " +
                    input.maxLength;

            });

        }


        createCounter(
            titleInput,
            document.getElementById("titleCounter")
        );

        createCounter(
            descriptionInput,
            document.getElementById("descriptionCounter")
        );

        createCounter(
            requirementsInput,
            document.getElementById("requirementsCounter")
        );


        /* ========================================
           VALIDACIÓN
        ======================================== */

        function clearErrors() {

            document
                .querySelectorAll(".form-error")
                .forEach(function (error) {

                    error.textContent = "";

                });


            document
                .querySelectorAll(".input-error")
                .forEach(function (input) {

                    input.classList.remove("input-error");

                });


            opportunityMessage.textContent = "";

            opportunityMessage.classList.remove(
                "success-message"
            );

        }


        function showError(
            input,
            errorId,
            message
        ) {

            document.getElementById(
                errorId
            ).textContent = message;

            input.classList.add(
                "input-error"
            );

        }


        opportunityForm.addEventListener(
            "submit",
            function (event) {

                event.preventDefault();

                clearErrors();

                let valid = true;


                /* TÍTULO */

                if (
                    titleInput.value.trim().length < 5
                ) {

                    showError(
                        titleInput,
                        "titleError",
                        "El título debe tener al menos 5 caracteres."
                    );

                    valid = false;

                }


                /* CATEGORÍA */

                if (categoryInput.value === "") {

                    showError(
                        categoryInput,
                        "categoryError",
                        "Selecciona una categoría."
                    );

                    valid = false;

                }


                /* UBICACIÓN */

                if (
                    locationInput.value.trim().length < 3
                ) {

                    showError(
                        locationInput,
                        "locationError",
                        "Ingresa una ubicación válida."
                    );

                    valid = false;

                }


                /* DESCRIPCIÓN */

                if (
                    descriptionInput.value.trim().length < 20
                ) {

                    showError(
                        descriptionInput,
                        "descriptionError",
                        "La descripción debe tener al menos 20 caracteres."
                    );

                    valid = false;

                }


                /* FECHA */

                if (dateInput.value === "") {

                    showError(
                        dateInput,
                        "dateError",
                        "Selecciona una fecha."
                    );

                    valid = false;

                } else {

                    const selectedDate =
                        new Date(
                            dateInput.value +
                            "T00:00:00"
                        );

                    const today =
                        new Date();

                    today.setHours(
                        0,
                        0,
                        0,
                        0
                    );


                    if (selectedDate < today) {

                        showError(
                            dateInput,
                            "dateError",
                            "La fecha no puede ser anterior a hoy."
                        );

                        valid = false;

                    }

                }


                /* CUPOS */

                const capacity =
                    Number(capacityInput.value);


                if (
                    !Number.isInteger(capacity) ||
                    capacity < 1 ||
                    capacity > 500
                ) {

                    showError(
                        capacityInput,
                        "capacityError",
                        "Ingresa una cantidad entre 1 y 500."
                    );

                    valid = false;

                }


                /* HORA DE INICIO */

                if (startTimeInput.value === "") {

                    showError(
                        startTimeInput,
                        "startTimeError",
                        "Selecciona la hora de inicio."
                    );

                    valid = false;

                }


                /* HORA FINAL */

                if (endTimeInput.value === "") {

                    showError(
                        endTimeInput,
                        "endTimeError",
                        "Selecciona la hora de finalización."
                    );

                    valid = false;

                }


                /* COMPARAR HORAS */

                if (
                    startTimeInput.value !== "" &&
                    endTimeInput.value !== "" &&
                    endTimeInput.value <=
                    startTimeInput.value
                ) {

                    showError(
                        endTimeInput,
                        "endTimeError",
                        "La hora final debe ser posterior a la hora de inicio."
                    );

                    valid = false;

                }


                /* REQUISITOS */

                if (
                    requirementsInput
                        .value
                        .trim()
                        .length < 10
                ) {

                    showError(
                        requirementsInput,
                        "requirementsError",
                        "Describe los requisitos de participación."
                    );

                    valid = false;

                }


                /* FORMULARIO CORRECTO */

                if (valid) {

                    opportunityMessage.textContent =
                        "La oportunidad fue validada correctamente. En la versión final se almacenará en la base de datos.";

                    opportunityMessage.classList.add(
                        "success-message"
                    );


                    /*
                     * Actualmente no existe backend.
                     * Por eso no se guarda realmente
                     * la oportunidad.
                     */

                    setTimeout(function () {

                        window.location.href =
                            "panel.html";

                    }, 1500);

                }

            }
        );


        /* ========================================
           BORRADOR
        ======================================== */

        draftButton.addEventListener(
            "click",
            function () {

                /*
                 * Simulación temporal mediante
                 * localStorage.
                 */

                const draft = {

                    title:
                        titleInput.value,

                    category:
                        categoryInput.value,

                    location:
                        locationInput.value,

                    description:
                        descriptionInput.value,

                    date:
                        dateInput.value,

                    capacity:
                        capacityInput.value,

                    startTime:
                        startTimeInput.value,

                    endTime:
                        endTimeInput.value,

                    requirements:
                        requirementsInput.value

                };


                localStorage.setItem(
                    "volunthubOpportunityDraft",
                    JSON.stringify(draft)
                );


                opportunityMessage.textContent =
                    "Borrador guardado temporalmente en este navegador.";

                opportunityMessage.classList.add(
                    "success-message"
                );

            }
        );


        /* ========================================
           RECUPERAR BORRADOR
        ======================================== */

        const savedDraft =
            localStorage.getItem(
                "volunthubOpportunityDraft"
            );


        if (savedDraft) {

            try {

                const draft =
                    JSON.parse(savedDraft);


                titleInput.value =
                    draft.title || "";

                categoryInput.value =
                    draft.category || "";

                locationInput.value =
                    draft.location || "";

                descriptionInput.value =
                    draft.description || "";

                dateInput.value =
                    draft.date || "";

                capacityInput.value =
                    draft.capacity || "";

                startTimeInput.value =
                    draft.startTime || "";

                endTimeInput.value =
                    draft.endTime || "";

                requirementsInput.value =
                    draft.requirements || "";


                document.getElementById(
                    "titleCounter"
                ).textContent =
                    titleInput.value.length +
                    " / 80";


                document.getElementById(
                    "descriptionCounter"
                ).textContent =
                    descriptionInput.value.length +
                    " / 600";


                document.getElementById(
                    "requirementsCounter"
                ).textContent =
                    requirementsInput.value.length +
                    " / 500";

            } catch (error) {

                console.error(
                    "No se pudo recuperar el borrador."
                );

            }

        }

    </script>

</body>
</html>