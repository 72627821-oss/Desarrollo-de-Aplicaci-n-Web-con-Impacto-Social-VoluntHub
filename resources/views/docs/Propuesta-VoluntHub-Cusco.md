# Propuesta de proyecto: VoluntHub Cusco

**Curso:** [completar]  
**Equipo:** [completar nombres]  
**Docente:** [completar]  
**Fecha:** [completar]  
**Estado del documento:** borrador de trabajo. Las entrevistas, cifras y nombres entre corchetes deben completarse con evidencia real antes de la entrega.

## 1. Resumen ejecutivo

VoluntHub Cusco propone facilitar el encuentro entre personas que desean realizar voluntariado y organizaciones sociales que necesitan apoyo en la provincia de Cusco. El prototipo web reúne oportunidades en un catálogo con búsqueda y filtros, presenta información detallada y contempla perfiles diferenciados para voluntarios y organizaciones. La propuesta responde a una hipótesis que se debe validar en campo: cuando las convocatorias se publican en canales separados, a las personas les cuesta descubrir opciones confiables y adecuadas a su disponibilidad, mientras que las organizaciones deben atender consultas y postulaciones de manera dispersa.

El proyecto no afirma que esta situación haya sido demostrada todavía. En las semanas 9 y 10 el equipo recogerá testimonios de al menos tres beneficiarios potenciales y datos locales publicados por fuentes oficiales. La versión existente ya presenta Cusco como contexto, pero sus organizaciones, fechas y oportunidades son ejemplos demostrativos. Antes de un piloto se deben verificar y actualizar con organizaciones locales; no se deben presentar los ejemplos actuales como convocatorias reales.

## 2. Problemática social y población beneficiaria

### Problema por investigar

Las oportunidades de voluntariado pueden difundirse por redes sociales, mensajería, páginas institucionales y contactos directos. Esa dispersión podría dificultar que jóvenes, estudiantes y otros vecinos encuentren convocatorias vigentes, comprendan sus requisitos o comparen su ubicación y horario. También podría generar trabajo repetido para las organizaciones que reciben consultas por distintos medios. El equipo verificará en Cusco si estas barreras existen, a quiénes afectan y cuáles son sus causas; no se asumirán como hechos sin evidencia.

### Beneficiarios potenciales

- Personas de la provincia de Cusco interesadas en apoyar iniciativas comunitarias, en especial quienes necesitan información clara sobre tareas, fechas, requisitos y ubicación antes de comprometerse.
- Organizaciones sociales locales que convocan y coordinan voluntariado y que podrían beneficiarse de publicar información estructurada en un canal común.
- Como beneficiaria indirecta, la comunidad que recibe el apoyo de actividades de educación, ambiente, cultura o ayuda social.

### Investigación y evidencia local

Durante la Fase 1 el equipo registrará la fecha de consulta, el periodo estadístico, la unidad de análisis y el enlace o documento de cada fuente. No se mezclarán datos de toda la región Junín con datos de la provincia de Huancayo sin indicarlo.

| Evidencia por reunir | Fuente sugerida | Registro para completar |
|---|---|---|
| Población y características demográficas del ámbito elegido | INEI: Censos Nacionales y publicaciones territoriales disponibles | [cifra, año, ámbito, tabla/página y enlace] |
| Acceso a internet o dispositivos, si es pertinente para evaluar el canal digital | INEI: ENAHO o publicación oficial disponible; indicar nivel geográfico y limitaciones de representatividad | [cifra, periodo, ámbito y enlace] |
| Organizaciones, servicios o prioridades sociales locales relacionadas con las causas seleccionadas | Municipalidad Provincial del Cusco y Gobierno Regional del Cusco: planes, diagnósticos o registros oficiales | [hallazgo, documento, fecha y enlace] |
| Contexto del voluntariado y organizaciones registradas, si existen datos públicos comparables | MIMP: información y registros oficiales de voluntariado | [cifra, fecha de corte, cobertura y enlace] |

Si una fuente no publica datos para la provincia, se dejará constancia y no se extrapolará una cifra regional como si fuera provincial. Las estadísticas contextualizan el problema, pero no sustituyen las entrevistas ni prueban por sí solas que la plataforma vaya a tener impacto.

### Entrevistas a beneficiarios potenciales

Se realizarán al menos tres entrevistas breves: idealmente dos a personas interesadas o con experiencia en voluntariado y una a una persona que coordine actividades en una organización local. Registrar consentimiento, fecha, perfil general sin datos innecesarios y notas anonimizadas. No anotar nombres, teléfonos ni información sensible en el informe sin autorización expresa.

**Preguntas sugeridas:**

1. ¿Cómo te enteras actualmente de oportunidades de voluntariado en Cusco?
2. ¿Qué te dificulta decidir si una convocatoria es confiable y adecuada para ti?
3. ¿Qué información necesitas conocer antes de postular (tareas, horario, ubicación, requisitos, seguridad u otra)?
4. ¿Qué dispositivo y tipo de conexión usas habitualmente para buscar estas oportunidades? ¿Qué dificultades encuentras al usar páginas web?
5. Si representas una organización: ¿cómo publicas convocatorias y organizas las postulaciones? ¿Qué parte del proceso te toma más tiempo?
6. ¿Qué te gustaría que una plataforma como VoluntHub hiciera primero? ¿Qué preocupación tendrías al usarla?

**Formato de hallazgo (duplicar por entrevista):** código [P1/P2/P3], perfil general [ ], fecha [ ], consentimiento [sí/no], necesidad expresada [ ], solución actual [ ], barrera citada [ ], frase anonimizada [ ], implicación para el diseño [ ].

### Impacto esperado y medición

El impacto esperado es reducir el esfuerzo para descubrir y comparar oportunidades locales, y facilitar a las organizaciones la publicación de convocatorias con información completa. Es una expectativa del proyecto, no un resultado ya alcanzado. Para una prueba inicial se propone medir: oportunidades locales verificadas y vigentes; porcentaje de convocatorias con campos esenciales completos; participantes que encuentran una opción adecuada en una sesión de prueba; tiempo y errores observados al buscar; y opinión de las organizaciones sobre la facilidad de publicar. El equipo definirá una línea base, metas y periodo de medición después de entrevistar a usuarios. Visitas o clics no se presentarán como evidencia suficiente de impacto social.

## 3. Justificación y rol de la ingeniería

Una herramienta digital puede ordenar información que hoy resulte difícil de comparar y hacer más visible la oferta de voluntariado. Para que esa contribución sea útil, la ingeniería debe comenzar por validar necesidades reales, no por asumir que toda persona tiene conexión rápida o experiencia digital. Debe diseñar formularios comprensibles, navegación accesible, datos mínimos y controles adecuados al riesgo. También debe reconocer los límites del prototipo: no autentica usuarios en un servidor, no verifica organizaciones ni conserva de manera confiable postulaciones entre dispositivos.

El éxito técnico se evaluará junto con la utilidad y la confianza: información vigente, facilidad de uso en móvil, participación de organizaciones locales, protección de datos y capacidad del equipo para mantener el servicio. La plataforma complementa el trabajo comunitario; no reemplaza la coordinación, supervisión ni medidas de seguridad de las organizaciones.

## 4. Fase 1: investigación, ética y planificación (semanas 9–10)

Los responsables se asignan por rol y deben reemplazarse por nombres reales del equipo.

| Semana / hito | Actividades y evidencia | Responsable principal | Apoyo |
|---|---|---|---|
| 9, inicio: pregunta y alcance | Definir provincia/distrito de estudio, población, pregunta de investigación y criterios de selección; preparar consentimiento y guía de entrevista | Coordinación del equipo | Todo el equipo |
| 9: evidencia documental | Buscar estadísticas y diagnósticos en fuentes oficiales; guardar citas, fecha, ámbito y limitaciones | Responsable de investigación | Responsable de documentación |
| 9–10: entrevistas | Contactar y entrevistar a tres o más beneficiarios potenciales; anonimizar notas; extraer necesidades recurrentes | Responsable de investigación | Responsable de ética |
| 10: análisis y propuesta | Contrastar entrevistas y fuentes; priorizar problema y requisitos; acordar indicadores iniciales | Coordinación + investigación | Todo el equipo |
| 10, cierre: revisión ética y entrega | Revisar consentimiento, referencias, compromisos, cronograma y coherencia con el prototipo; entregar documento de 3–5 páginas según formato del curso | Responsable de documentación | Todo el equipo |

## 5. Acuerdos de trabajo y compromisos éticos

1. Cada integrante cumple los hitos asignados y comunica retrasos con anticipación; los acuerdos, decisiones y cambios de alcance se registran en el repositorio o acta del equipo.
2. Las entrevistas son voluntarias. Antes de empezar se explica el propósito académico, el uso de las notas y que la persona puede no responder o retirarse. Se pide permiso antes de grabar; si no hay permiso, se toman notas sin identificar a la persona.
3. Se recopila solo información necesaria. No se publican datos personales, fotografías, audios ni testimonios identificables sin autorización explícita. Los archivos de investigación se limitan al equipo y se eliminan al terminar el curso, salvo autorización y necesidad académica justificada.
4. El equipo tratará con respeto a participantes y organizaciones, evitará prometer beneficios que el prototipo no ofrece y presentará resultados y limitaciones con honestidad.
5. Las convocatorias de demostración se rotularán como ficticias o de prueba hasta ser confirmadas por la organización responsable. No se publicarán datos de contacto reales sin autorización.

### Propiedad intelectual y atribución

El equipo utilizará código, imágenes, tipografías, iconos y textos propios o con licencia compatible con el uso previsto. Antes de incorporar un recurso externo, registrará autor o entidad, título, URL, licencia, fecha de consulta y modificaciones realizadas. Se respetarán las condiciones de atribución, redistribución y uso comercial de cada licencia; una cita no reemplaza el permiso cuando este sea necesario. No se copiarán diseños, fotografías ni código de terceros sin verificar derechos. Las contribuciones del equipo se atribuirán mediante commits identificables y, cuando corresponda, créditos en la documentación. El proyecto emplea Bootstrap 5.3.3 como framework CSS, distribuido bajo licencia MIT, además de HTML5, CSS3 y JavaScript nativos. Se carga su hoja de estilos desde jsDelivr con integridad SRI; `css/styles.css` se importa después para conservar la identidad visual propia. La referencia y licencia se registran en la sección de fuentes.

## 6. Fase 2: diseño y desarrollo (semanas 11–14)

### Arquitectura actual y propuesta

El prototipo utiliza páginas HTML separadas para inicio, oportunidades, detalle, registro, inicio de sesión y paneles por rol; `css/styles.css` concentra estilos y `js/main.js` gestiona interacciones comunes. Hay lógica adicional en JavaScript de las páginas y el formulario de oportunidades guarda un borrador en `localStorage`. Bootstrap 5.3.3 aporta la cuadrícula responsiva (`row`, `g-3`, `col-12`, `col-md-6`) en los formularios de registro y creación, además de la clase `form-select`; la hoja propia se carga después para controlar colores, tipografía y componentes. Esta separación permite aprovechar el sistema de columnas móvil-first sin rehacer ni debilitar la identidad visual. La interfaz y varios datos son demostrativos. No hay servidor, base de datos, autenticación real, control de acceso seguro ni persistencia compartida.

Bootstrap se eligió como framework CSS porque el proyecto es multipágina y ya tiene estilos propios: su sistema de cuadrícula permite adaptar campos a móvil y escritorio con clases declarativas, mientras los estilos personalizados preservan la apariencia de VoluntHub. Se usa solo la hoja CSS, sin JavaScript de Bootstrap, ya que el prototipo no necesita componentes interactivos dependientes del framework. Esta decisión reduce código de presentación repetido y evita migrar todo el sitio a otro framework de JavaScript. Como evolución, separar presentación, lógica de interfaz y acceso a datos facilitará sustituir datos de prueba por una API y una base de datos; cualquier arquitectura de backend se documentará como futura, no como existente.

### Accesibilidad, escalabilidad y sostenibilidad

- **Accesibilidad y baja barrera tecnológica:** priorizar diseño móvil, lenguaje directo, contraste suficiente, etiquetas visibles, navegación por teclado, foco perceptible, encabezados ordenados y mensajes de error comprensibles. No depender solo del color ni de iconos sin nombre accesible. Probar con personas de distintos niveles de experiencia digital y conexiones limitadas; mantener páginas livianas y evitar dependencias innecesarias.
- **Escalabilidad:** separar datos de oportunidades de la presentación y definir campos consistentes (organización, categoría, distrito, fecha, horario, requisitos y contacto autorizado). Validar entradas y permitir filtros sin duplicar la lógica por página. El frontend actual solo demuestra flujos; para crecer se necesitarán API, persistencia, autenticación, permisos por rol, moderación y respaldo de datos.
- **Sostenibilidad:** preferir tecnologías de bajo costo y abiertas, mantener instrucciones de instalación y uso, asignar responsables de revisión de convocatorias y definir cómo retirar información vencida. Antes de operar, acordar con organizaciones quién verifica contenido, atiende consultas y financia mantenimiento. La sostenibilidad social y operativa no se resuelve únicamente con código.

### Cronograma de desarrollo y control de calidad

| Semana / hito | Tareas y criterio de salida | Responsable principal | Apoyo |
|---|---|---|---|
| 11: diseño validado | Convertir entrevistas en historias de usuario; priorizar búsqueda, detalle y publicación; definir flujo, campos y prototipo accesible | Diseño/UX | Investigación y desarrollo |
| 12: adaptación del prototipo | Verificar y actualizar el contenido de Cusco con organizaciones locales, o rotularlo claramente como ficticio; revisar rutas, filtros y formularios; documentar alcance y limitaciones | Desarrollo frontend | Contenido e investigación |
| 13: implementación y pruebas | Completar flujos prioritarios; probar móvil, teclado, etiquetas, validaciones, enlaces y casos vacíos; corregir defectos encontrados | Desarrollo + QA | Todo el equipo |
| 14: cierre y demostración | Revisar citas y licencias; consolidar commits; ejecutar pruebas de aceptación con voluntarios/organización; documentar resultados, pendientes y demostración | Coordinación + documentación | Todo el equipo |

### Pruebas y registro de contribuciones

Cada integrante trabajará con su propia cuenta de Git y commits pequeños que describan el cambio realizado, por ejemplo: `feat: agregar filtro por distrito` o `docs: registrar hallazgos de entrevistas`. No se compartirán cuentas ni se crearán commits ficticios o retrospectivos para aparentar trabajo. El equipo revisará el historial y anotará en el informe qué hizo cada persona. Antes de entregar, se comprobarán los enlaces entre páginas, la búsqueda/filtros, validaciones de formularios, adaptación a móvil y navegación por teclado. Se anotarán los errores pendientes y las funciones que siguen siendo solo demostrativas.

## 7. Matriz de cumplimiento de la rúbrica

La rúbrica asigna 0 puntos si no hay evidencia, 1 si la evidencia es débil y 2 si es suficiente, para un máximo de 20 puntos. Esta matriz identifica qué debe mostrarse en el sitio, el código o la sustentación. Los resultados de las pruebas se completan después de ejecutarlas; no se deben marcar como aprobadas sin evidencia.

| Indicador | Evidencia del proyecto | Cómo comprobarlo / pendiente |
|---|---|---|
| 1. Comprensión y aplicación del framework | Bootstrap 5.3.3; cuadrícula `row`/`col-*` y `form-select` en formularios; CSS local se carga después | Mostrar el formulario en móvil y escritorio y explicar cuadrícula, breakpoint `md` y precedencia de estilos |
| 2. Estructura y navegabilidad | Páginas separadas para inicio, oportunidades, detalle, acceso, registro y paneles por rol; enlaces entre flujos | Recorrer enlaces principales y comprobar que no haya rutas rotas |
| 3. Apariencia visual y diseño estético | Variables visuales, componentes y estilos propios en `css/styles.css`; identidad consistente | Revisar capturas de inicio, catálogo y formulario, y registrar observaciones de legibilidad |
| 4. Compatibilidad y responsividad | Meta viewport, media queries en CSS y columnas responsive de Bootstrap | Probar en móvil y escritorio, incluida navegación, filtros y formulario |
| 5. Estructura y legibilidad del código fuente | Separación entre páginas, estilos compartidos y JavaScript; nombres descriptivos y secciones por responsabilidad | Inspeccionar rutas y validar que las páginas modificadas no tengan errores HTML/JS |
| 6. Funcionalidad y cumplimiento de requisitos | Búsqueda, filtros, detalles, validaciones, registro de demostración, paneles y borrador local | Ejecutar la lista de pruebas de la sección 8; aclarar que backend y autenticación real no están implementados |
| 7. Buenas prácticas de programación | HTML semántico, labels, atributos ARIA, validación de entradas, SRI para CSS externo y Git por integrante | Revisar teclado, mensajes de validación, consola y commits auténticos del equipo |
| 8. Claridad y detalle del informe | Problema, beneficiarios, ética, cronograma, arquitectura, limitaciones, citas y esta matriz | Completar datos del equipo, entrevistas, estadísticas y referencias verificadas antes de entregar |
| 9. Justificación de decisiones de diseño y desarrollo | Elección de Bootstrap CSS, enfoque multipágina, estilos propios y alcance frontend explicados | Sustentar por qué el grid se usa en formularios y qué limitaciones tendría una migración completa |
| 10. Incorporación de pruebas y resultados | Casos de prueba reproducibles con resultado, dispositivo y evidencia | Completar la tabla de pruebas; adjuntar capturas o registro de resultados observados |

## 8. Pruebas y registro de contribuciones

Cada integrante trabajará con su propia cuenta de Git y commits pequeños que describan el cambio realizado, por ejemplo: `feat: agregar filtro por distrito` o `docs: registrar hallazgos de entrevistas`. No se compartirán cuentas ni se crearán commits ficticios o retrospectivos para aparentar trabajo. El equipo revisará el historial y anotará en el informe qué hizo cada persona. Se anotarán los errores pendientes y las funciones que siguen siendo solo demostrativas.

| Prueba | Pasos resumidos | Resultado esperado | Resultado observado |
|---|---|---|---|
| Navegación principal | Inicio → oportunidades → detalle → volver | Cada destino abre correctamente | [completar con fecha y evidencia] |
| Búsqueda y filtros | Buscar una palabra y combinar categoría/ubicación | El catálogo muestra resultados coincidentes o estado vacío claro | [completar] |
| Registro | Probar campos vacíos, tipo de cuenta y confirmación de contraseña | Se muestran validaciones y campos según el rol | [completar] |
| Crear oportunidad | Revisar campos requeridos y guardar borrador | Errores comprensibles; borrador recuperable en el mismo navegador | [completar] |
| Cuadrícula Bootstrap | Abrir registro y creación a menos de 768 px y desde 768 px | Campos apilados en móvil y en dos columnas desde `md` | [completar] |
| Teclado y etiquetas | Navegar formularios solo con Tab/Shift+Tab y activar controles | Orden lógico, foco visible, labels asociados | [completar] |
| Compatibilidad visual | Revisar páginas principales en al menos dos tamaños de pantalla | Sin desbordamiento horizontal ni contenido superpuesto | [completar] |

La fecha de ejecución, navegador, ancho de pantalla, capturas y defectos encontrados se deben registrar al completar las pruebas. Un resultado pendiente no equivale a una prueba aprobada.

## 9. Fuentes y referencias por completar

Bootstrap Team. (2024). *Bootstrap v5.3: Documentation*. https://getbootstrap.com/docs/5.3/ (framework CSS, cuadrícula y formularios; licencia MIT). Hoja de estilos distribuida por jsDelivr: https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css. Fecha de consulta: [completar].

Las referencias finales deben corresponder a los documentos efectivamente consultados. Registrar entidad, año, título, tabla o página, URL y fecha de consulta. Fuentes iniciales para la búsqueda: Instituto Nacional de Estadística e Informática (INEI), publicaciones censales y estadísticas disponibles para Cusco; Municipalidad Provincial del Cusco, planes o diagnósticos locales; Gobierno Regional del Cusco, documentos de planificación; Ministerio de la Mujer y Poblaciones Vulnerables (MIMP), información oficial sobre voluntariado. Añadir aquí las referencias completas y las citas dentro del texto una vez verificadas.

**Pendientes antes de entregar:** completar datos del equipo y curso; realizar y resumir al menos tres entrevistas en Cusco; insertar cifras locales verificadas con citas; establecer metas con línea base; ejecutar y registrar cada prueba; completar fecha de consulta de Bootstrap; obtener evidencias visuales para la rúbrica; y verificar o rotular como demostrativos las oportunidades y organizaciones del prototipo antes de presentarlas como reales.