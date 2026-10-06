# VoluntHub

## Plataforma web para conectar voluntarios con organizaciones sociales en Cusco

**VoluntHub** es una plataforma web desarrollada con el propósito de facilitar la conexión entre personas interesadas en realizar actividades de voluntariado y organizaciones sociales que requieren apoyo en la ciudad del Cusco.

La plataforma busca centralizar las oportunidades de voluntariado en un solo espacio digital, permitiendo que los usuarios puedan encontrar actividades según sus intereses, ubicación y disponibilidad, mientras que las organizaciones pueden publicar y gestionar sus convocatorias.

---

## Objetivo general

Desarrollar una plataforma web que facilite la conexión entre voluntarios y organizaciones sociales en Cusco, permitiendo la publicación, búsqueda y gestión de oportunidades de voluntariado mediante una interfaz accesible, organizada y responsive.

---

## Objetivos específicos

- Diseñar una interfaz web clara y fácil de utilizar.
- Permitir que los voluntarios puedan explorar oportunidades de voluntariado.
- Implementar filtros para facilitar la búsqueda de oportunidades.
- Permitir el registro de voluntarios y organizaciones.
- Diseñar paneles diferenciados según el tipo de usuario.
- Permitir que las organizaciones puedan crear oportunidades de voluntariado.
- Implementar validaciones mediante JavaScript.
- Diseñar una estructura preparada para una futura integración con backend y base de datos.

---

## Problemática

Actualmente, muchas oportunidades de voluntariado se difunden mediante diferentes redes sociales, grupos de mensajería y otros medios digitales.

Esta dispersión puede dificultar que las personas interesadas encuentren convocatorias relacionadas con sus intereses y disponibilidad.

Asimismo, las organizaciones necesitan mecanismos que les permitan organizar sus convocatorias y gestionar de manera más estructurada la participación de posibles voluntarios.

VoluntHub propone centralizar esta información mediante una plataforma web especializada en oportunidades de voluntariado.

---

## Usuarios del sistema

VoluntHub contempla tres tipos principales de usuarios:

### Voluntario

El voluntario podrá:

- Crear una cuenta.
- Iniciar sesión.
- Explorar oportunidades.
- Buscar oportunidades de voluntariado.
- Aplicar filtros.
- Consultar información detallada.
- Postular a oportunidades.
- Consultar sus postulaciones.
- Visualizar oportunidades recomendadas.
- Gestionar su perfil.

### Organización

La organización podrá:

- Crear una cuenta.
- Iniciar sesión.
- Acceder a su panel.
- Crear oportunidades de voluntariado.
- Consultar oportunidades publicadas.
- Revisar postulantes.
- Aceptar o rechazar postulantes.
- Gestionar sus convocatorias.

### Administrador

En una etapa posterior, el administrador podrá:

- Gestionar usuarios.
- Gestionar organizaciones.
- Administrar categorías.
- Supervisar oportunidades publicadas.
- Moderar contenido de la plataforma.

---

## Tecnologías utilizadas

Para el desarrollo inicial de VoluntHub se utilizan las siguientes tecnologías:

- **HTML5:** estructura y contenido de las páginas.
- **CSS3:** diseño visual y adaptación responsive.
- **JavaScript:** interactividad y validaciones.
- **Git:** control de versiones.
- **GitHub:** almacenamiento y seguimiento del repositorio.

Actualmente el proyecto se encuentra principalmente en la etapa de desarrollo frontend.

---

## Estructura del proyecto

```text
VoluntHub/
│
├── index.html
├── README.md
│
├── css/
│   └── styles.css
│
├── js/
│   ├── main.js
│   └── oportunidades.js
│
├── img/
│   └── logo.png
│
└── pages/
    ├── oportunidades.html
    ├── detalle-oportunidad.html
    ├── login.html
    ├── registro.html
    │
    ├── voluntario/
    │   └── panel.html
    │
    └── organizacion/
        ├── panel.html
        └── crear-oportunidad.html
```

---

## Páginas principales

### Página de inicio

La página principal presenta VoluntHub y permite acceder a las principales funciones de la plataforma.

Desde esta página el usuario puede dirigirse a:

- Oportunidades.
- Inicio de sesión.
- Registro.
- Información general del proyecto.

---

### Oportunidades

La sección de oportunidades permite visualizar diferentes convocatorias de voluntariado.

Incluye funcionalidades como:

- Búsqueda.
- Filtrado por categoría.
- Filtrado por ubicación.
- Filtrado por disponibilidad.
- Ordenamiento de oportunidades.
- Visualización de resultados.

---

### Detalle de oportunidad

Permite consultar información específica sobre una actividad de voluntariado.

Puede mostrar información como:

- Título.
- Categoría.
- Descripción.
- Ubicación.
- Horario.
- Requisitos.
- Habilidades relacionadas.
- Información de la organización.
- Botón para postular.

---

### Inicio de sesión

La página de inicio de sesión incluye validaciones mediante JavaScript.

Actualmente corresponde a una demostración frontend, debido a que todavía no se ha implementado autenticación mediante servidor y base de datos.

---

### Registro

La página de registro permite seleccionar entre dos tipos de cuenta:

- Voluntario.
- Organización.

El formulario valida información como:

- Nombre.
- Apellido.
- Correo electrónico.
- Contraseña.
- Confirmación de contraseña.
- Aceptación de términos.

Cuando se selecciona el tipo de usuario **Organización**, se muestra adicionalmente el campo correspondiente al nombre de la organización.

---

## Panel del voluntario

El panel del voluntario permite representar las funcionalidades que tendrá un usuario registrado.

Incluye:

- Resumen de actividad.
- Postulaciones.
- Estado de postulaciones.
- Oportunidades recomendadas.
- Información del perfil.
- Intereses.
- Disponibilidad.

Los datos mostrados actualmente en este panel son demostrativos y no representan estadísticas reales de usuarios.

---

## Panel de organización

El panel de organización permite representar la gestión de las actividades publicadas.

Incluye:

- Resumen de oportunidades.
- Número demostrativo de postulaciones.
- Oportunidades publicadas.
- Estado de las oportunidades.
- Lista demostrativa de postulantes.
- Aceptación de postulantes.
- Rechazo de postulantes.
- Acceso al formulario para crear oportunidades.

Actualmente estas interacciones se realizan únicamente desde el frontend.

---

## Creación de oportunidades

Las organizaciones cuentan con un formulario para crear nuevas oportunidades de voluntariado.

El formulario permite ingresar:

- Título.
- Categoría.
- Ubicación.
- Descripción.
- Fecha.
- Hora de inicio.
- Hora de finalización.
- Número de cupos.
- Requisitos.
- Habilidades relacionadas.

JavaScript realiza diferentes validaciones antes de permitir continuar.

---

## Validaciones con JavaScript

El proyecto incorpora validaciones del lado del cliente mediante JavaScript.

Entre las principales validaciones se encuentran:

- Verificación de campos obligatorios.
- Validación del formato del correo electrónico.
- Longitud mínima de contraseña.
- Confirmación de contraseña.
- Validación de fechas.
- Validación de horarios.
- Validación del número de cupos.
- Contadores de caracteres.
- Interacciones con elementos del DOM.

Estas validaciones mejoran la experiencia del usuario, aunque en una implementación completa también deberán realizarse validaciones desde el servidor.

---

## localStorage

VoluntHub utiliza `localStorage` en algunas funciones demostrativas.

Por ejemplo, el formulario para crear oportunidades permite guardar temporalmente un borrador en el navegador.

Esto permite demostrar persistencia básica del lado del cliente antes de incorporar una base de datos.

---

## Diseño responsive

La interfaz de VoluntHub está diseñada para adaptarse a diferentes tamaños de pantalla.

Para ello se utilizan:

- Flexbox.
- CSS Grid.
- Media queries.
- Componentes reutilizables.
- Diseño adaptable para dispositivos móviles.

El objetivo es mantener una navegación comprensible tanto en computadoras como en dispositivos con pantallas más pequeñas.

---

## Accesibilidad

Durante el desarrollo se consideran elementos básicos de accesibilidad web, como:

- Uso de etiquetas HTML semánticas.
- Etiquetas `label` asociadas a formularios.
- Textos alternativos en imágenes.
- Navegación identificable.
- Estados de foco.
- Uso de atributos ARIA cuando corresponde.
- Organización jerárquica del contenido.

---

## Arquitectura propuesta

Para las siguientes etapas del proyecto se plantea utilizar una arquitectura basada en el patrón:

### Modelo - Vista - Controlador (MVC)

La arquitectura permitirá separar las diferentes responsabilidades del sistema.

### Modelo

Será responsable de la gestión de los datos relacionados con:

- Usuarios.
- Voluntarios.
- Organizaciones.
- Oportunidades.
- Categorías.
- Habilidades.
- Inscripciones.
- Participaciones.

### Vista

Corresponde a las interfaces con las que interactúan los usuarios.

Actualmente esta parte se encuentra representada mediante las páginas desarrolladas con HTML, CSS y JavaScript.

### Controlador

Será responsable de recibir las solicitudes del usuario, procesar las operaciones correspondientes y comunicarse con el modelo.

Esta parte será desarrollada en una etapa posterior cuando se incorpore el backend.

---

## Modelo de datos propuesto

Para una futura implementación de base de datos se consideran las siguientes entidades principales:

- Usuario.
- Voluntario.
- Organización.
- Categoría.
- Habilidad.
- Oportunidad.
- Inscripción.
- Participación.

También se contemplan relaciones entre voluntarios y habilidades, así como entre oportunidades y habilidades.

---

## Seguridad considerada

Para las siguientes etapas del desarrollo se consideran diferentes medidas de seguridad.

Entre ellas:

- Validación de datos.
- Sanitización de entradas.
- Prevención de ataques XSS.
- Prevención de inyección SQL.
- Uso futuro de consultas preparadas.
- Almacenamiento seguro de contraseñas.
- Control de acceso según roles.
- Manejo seguro de sesiones.
- Uso de HTTPS en un entorno de producción.

En la etapa actual se han implementado principalmente validaciones del lado del cliente mediante JavaScript.

---

## Funcionalidades implementadas

Actualmente el prototipo incluye:

- Página principal.
- Navegación entre páginas.
- Página de oportunidades.
- Búsqueda de oportunidades.
- Filtros.
- Detalle de oportunidad.
- Inicio de sesión demostrativo.
- Registro de usuarios.
- Selección de tipo de usuario.
- Panel del voluntario.
- Panel de organización.
- Formulario para crear oportunidades.
- Validaciones mediante JavaScript.
- Manipulación del DOM.
- Guardado temporal mediante `localStorage`.
- Diseño responsive.

---

## Funcionalidades futuras

En las siguientes etapas se plantea implementar:

- Backend.
- Base de datos.
- Autenticación real.
- Registro persistente de usuarios.
- CRUD conectado a base de datos.
- Gestión real de postulaciones.
- Gestión de perfiles.
- Panel administrativo.
- Recuperación de contraseña.
- Gestión de sesiones.
- Mayor control de seguridad.
- Registro de participación y horas de voluntariado.

---

## Estado actual del proyecto

**Estado:** desarrollo inicial del frontend.

La versión actual representa un prototipo funcional y navegable desarrollado principalmente con HTML, CSS y JavaScript.

Algunas funciones son demostrativas porque todavía no existe conexión con una base de datos ni un sistema de autenticación real.

---

## Control de versiones

El proyecto utiliza **Git** para registrar los cambios realizados durante el desarrollo.

GitHub se utiliza como repositorio remoto para:

- Mantener el código del proyecto.
- Registrar versiones.
- Documentar avances.
- Facilitar el trabajo colaborativo.
- Mantener evidencia del proceso de desarrollo.

---

## Repositorio

El código fuente del proyecto se encuentra disponible en GitHub:

https://github.com/72627821-oss/Desarrollo-de-Aplicaci-n-Web-con-Impacto-Social-VoluntHub

---

## Equipo de desarrollo

**Integrantes:**

- Jose Andres Valencia Sullca
- Johan Aime Lopez
- Gary Elliot Paucar Cazas

---

## Información académica

**Proyecto:** VoluntHub  
**Asignatura:** Programación Web  
**Lugar:** Cusco, Perú  
**Año:** 2026

---

## Nota

VoluntHub se encuentra en proceso de desarrollo.

Los nombres, cantidades, postulaciones, horas de voluntariado y demás información utilizada para demostrar determinadas interfaces del prototipo no deben interpretarse como estadísticas reales de la plataforma.

---

## Licencia y uso

Este repositorio corresponde a un proyecto académico.

Los recursos, librerías o contenidos de terceros utilizados durante el desarrollo deberán mantener sus respectivos créditos y condiciones de uso.