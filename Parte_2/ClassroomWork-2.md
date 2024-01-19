**Asunto: Actividad de cuestionario PHP - Parte 2: Integración de base de datos**

Estimados estudiantes,

Construyendo sobre los conocimientos y habilidades adquiridos en la actividad anterior de cuestionario PHP, nos entusiasma presentar la segunda parte de nuestro proyecto de cuestionario PHP. En esta parte, mejorará la aplicación del cuestionario integrándola con una base de datos para recuperar preguntas del cuestionario de forma dinámica. Esto le dará experiencia práctica en la conectividad de la base de datos y las consultas SQL en PHP.

**Objetivo:**
El objetivo principal de esta actividad es ampliar sus habilidades en PHP integrando una base de datos en la aplicación del cuestionario. Aprenderá a recuperar preguntas y opciones de un cuestionario de una base de datos y presentarlas a los usuarios de forma dinámica.

**Descripción general de la actividad:**
En esta actividad de dos horas, tomará el proyecto de cuestionario existente y lo modificará para que use una base de datos. En lugar de codificar preguntas de cuestionario de forma fija, creará una tabla de base de datos para almacenar datos de cuestionario, incluidas preguntas, opciones, respuestas correctas y comentarios. Su código PHP recuperará estos datos de la base de datos y los mostrará a los usuarios.

**Componentes de la actividad:**

1. **Configuración de la base de datos (15 minutos):**
    - Puesta a punto guiada de la base de datos la aplicación del cuestionario.
    - Creará una tabla de base de datos para almacenar preguntas, opciones, respuestas correctas y comentarios.

2. **Modificación de la aplicación de cuestionarios (30 minutos):**
    - Actualizará el código PHP de la aplicación de cuestionarios para conectarse a la base de datos.
    - Escribirá consultas SQL para recuperar preguntas de cuestionarios y datos relacionados.
    - Reemplazará las preguntas codificadas anteriormente con preguntas recuperadas dinámicamente de la base de datos.

3. **Mejorando la interfaz de usuario (20 minutos):**
    - Hará los ajustes necesarios en la interfaz del cuestionario para adaptarse a las preguntas cargadas dinámicamente.
    - Es posible que necesite actualizar el HTML y CSS para garantizar una experiencia de usuario fluida.

4. **Pruebas y depuración (20 minutos):**
    - Probar exhaustivamente la aplicación de cuestionario modificada para asegurarse de que las preguntas se recuperan correctamente.
    - Solucionará problemas y depurará cualquier problema que pueda surgir durante el proceso de integración.

5. **Implementación de medidas de seguridad (15 minutos):**
    - Introduciremos consideraciones de seguridad al trabajar con bases de datos, incluida la prevención de inyecciones SQL.
    - Implementará medidas de seguridad adecuadas para proteger la aplicación.

6. **Preguntas y respuestas (15 minutos):**
    - Reservaremos tiempo para preguntas, discusión y experiencias compartidas.
    - Puede solicitar aclaraciones sobre conceptos y prácticas recomendadas de integración de bases de datos.

7. **Conclusión (10 minutos):**
    - En la última parte, resumiremos los aspectos clave de la actividad de integración de la base de datos.
    - Enfatizaremos la importancia de las aplicaciones basadas en bases de datos en el desarrollo web del mundo real.

**Materiales necesarios:**
    - Acceso a un servidor web compatible con PHP con soporte de base de datos (por ejemplo, MySQL).
    - Conocimiento básico de consultas SQL (le proporcionaremos orientación).

Creemos que esta actividad de integración de bases de datos ampliará aún más sus habilidades en PHP y lo preparará para crear aplicaciones web dinámicas que dependen de datos almacenados en bases de datos. Es una oportunidad emocionante para llevar su proyecto de cuestionario al siguiente nivel y aplicar sus nuevas habilidades de conectividad con la base de datos.

Esté atento a las instrucciones detalladas y los recursos relacionados con esta actividad. Esperamos ver su aplicación de cuestionario mejorada en acción.

Si tiene alguna pregunta o necesita ayuda, no dude en comunicarse con nosotros.

Atentamente,

[Su nombre]
[Su información de contacto]

## Apéndice I
**Para una aplicación de cuestionario que recupera preguntas de cuestionario de una base de datos, generalmente necesitará al menos dos tablas: una para almacenar información sobre el cuestionario en sí y otra para almacenar las preguntas y respuestas. Aquí están las tablas necesarias y sus estructuras básicas:**

**1. Tabla de cuestionarios:**
   - Esta tabla almacena información sobre cuestionarios individuales, como títulos de cuestionarios, descripciones y cualquier metadatos relacionada con todo el cuestionario.

| Campo | Tipo | Descripción |
|---|---|---|
| quiz_id | INT (Clave principal) | Identificador único para cada cuestionario. |
| title | VARCHAR(255) | Título o nombre del cuestionario. |
| description | TEXT | Descripción del cuestionario. |
| created_at | DATETIME | Marca de tiempo de cuándo se creó el cuestionario. |
| ... | ... | Metadatos adicionales según sea necesario. |

**2. Tabla de preguntas:**
   - Esta tabla almacena las preguntas individuales del cuestionario, sus opciones y respuestas correctas.

| Campo | Tipo | Descripción |
|---|---|---|
| question_id | INT (Clave principal) | Identificador único para cada pregunta. |
| quiz_id | INT (Clave externa) | Relaciona cada pregunta con un cuestionario específico. |
| question_text | TEXT | El texto de la pregunta del cuestionario. |
| option_a | VARCHAR(255) | Opción A para la pregunta de opción múltiple. |
| option_b | VARCHAR(255) | Opción B para la pregunta de opción múltiple. |
| option_c | VARCHAR(255) | Opción C para la pregunta de opción múltiple. |
| option_d | VARCHAR(255) | Opción D para la pregunta de opción múltiple. |
| correct_option | CHAR(1) | Indica la opción correcta (A, B, C o D). |
| ... | ... | Campos adicionales según sea necesario. |

La relación entre estas dos tablas se establece a través del campo `quiz_id`, que actúa como una clave externa en la tabla Questions, haciendo referencia a la clave principal de la tabla Quiz.

Es posible que se requieran tablas o campos adicionales según los requisitos específicos de su aplicación de cuestionario. Por ejemplo, si desea rastrear las respuestas del usuario y las puntuaciones, es posible que necesite una tabla para almacenar las presentaciones de los usuarios y las puntuaciones asociadas con cada cuestionario.

Recuerda considerar los tipos de datos, las restricciones e los índices al diseñar tus tablas de base de datos para garantizar una recuperación de datos eficiente y la integridad de los datos.
