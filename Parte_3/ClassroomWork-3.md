En la tercera parte del proyecto, se ampliará el esquema de la base de datos para acomodar diversos tipos de preguntas de cuestionarios, incluyendo preguntas de opción múltiple, preguntas de respuesta corta y posiblemente otros tipos de preguntas. Además, se creará un sistema CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar las preguntas del cuestionario. A continuación, se enumeran los pasos y modificaciones necesarios:

**Paso 1: Modificar el esquema de la base de datos**

1. **Modificación de la tabla "Questions":**
  - Agregar un nuevo campo llamado `question_type` para diferenciar entre los tipos de preguntas (por ejemplo, 'multiple_choice', 'short_answer', 'other').
  - Ajustar la estructura de la tabla para acomodar detalles específicos de cada pregunta (por ejemplo, opciones correctas múltiples para preguntas de opción múltiple).

```sql
ALTER TABLE Questions
ADD question_type VARCHAR(50) NOT NULL,
ADD question_details TEXT;
```

El campo `question_details` se puede utilizar para almacenar información adicional según el tipo de pregunta.

**Paso 2: Crear el sistema CRUD**

1. **Crear pregunta (C):**
  - Crear un formulario web para agregar nuevas preguntas al cuestionario.
  - Implementar código PHP para insertar preguntas en la base de datos con el tipo de pregunta y los detalles apropiados.

2. **Leer preguntas (R):**
  - Crear una página para enumerar las preguntas del cuestionario desde la base de datos, mostrando sus tipos y detalles.
  - Implementar opciones de paginación o filtrado para una mejor usabilidad.

3. **Actualizar pregunta (U):**
  - Desarrollar un formulario para editar y actualizar preguntas existentes.
  - Implementar código PHP para modificar los detalles de las preguntas en la base de datos.

4. **Eliminar pregunta (D):**
  - Agregar funcionalidad para eliminar preguntas del cuestionario desde la base de datos según la selección del usuario.

**Paso 3: Ajustar la interfaz de usuario (IU)**

1. Modificar la interfaz de usuario para admitir diferentes tipos de preguntas. Por ejemplo:
  - Para preguntas de opción múltiple, proporcionar campos de entrada para las opciones y casillas de verificación para las respuestas correctas.
  - Para preguntas de respuesta corta, ofrecer campos de entrada de texto.
  - Personalizar la IU para otros tipos de preguntas según sea necesario.

**Paso 4: Implementar validación y manejo de errores**

1. Asegurarse de que las operaciones CRUD incluyan una validación robusta para evitar inconsistencias y errores en los datos.

**Paso 5: Proteger la aplicación**

1. Implementar medidas de seguridad adecuadas para proteger contra vulnerabilidades web comunes, incluyendo inyecciones SQL y scripts entre sitios (XSS).

**Paso 6: Probar el sistema CRUD**

1. Probar a fondo las funcionalidades de creación, lectura, actualización y eliminación para asegurar que funcionen correctamente para todos los tipos de preguntas.

**Paso 7: Documentación para el usuario**

1. Proporcionar documentación sobre cómo utilizar el sistema CRUD para gestionar eficazmente las preguntas del cuestionario.

**Paso 8: Preguntas, discusión y retroalimentación**

1. Permitir tiempo para preguntas, discusión y compartir experiencias relacionadas con la adición de funcionalidad CRUD y el soporte de varios tipos de preguntas.


