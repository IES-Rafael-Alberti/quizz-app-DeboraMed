# Actividad Parte I: Aplicación de cuestionario en PHP

Estimados estudiantes,

¡Nos entusiasma presentar una actividad interactiva y atractiva de cuestionario PHP que les permitirá poner en práctica y reforzar su conocimiento de los conceptos clave de PHP! Esta actividad está diseñada para ser divertida y educativa, proporcionándoles experiencia práctica en el desarrollo web con PHP.

## **Objetivo:**
El objetivo principal de esta actividad es aplicar y consolidar la comprensión de varios conceptos de PHP, incluyendo pero no limitado a: bucles, condicionales, variables, funciones, programación orientada a objetos (POO), manejo de formularios con métodos POST y GET, validación de formularios y matrices.

### **Descripción general de la actividad:**
En esta actividad de dos horas, crearán una aplicación de cuestionario en línea utilizando PHP. El cuestionario cubrirá varios temas de PHP, y serán responsables de diseñar la interfaz del cuestionario, manejar las presentaciones de los usuarios y proporcionar comentarios inmediatos a los usuarios en función de sus respuestas.

### **Componentes de la actividad:**

**1. Configuración del entorno (15 minutos):** Lo guiaremos a través del proceso de configuración para garantizar que tenga acceso a un servidor web con capacidad para PHP o un entorno de desarrollo adecuado.

**2. Creación del formulario de cuestionario (30 minutos):**
   - Se proporcionarán plantillas HTML y CSS para crear el formulario de cuestionario. Este formulario incluirá preguntas de opción múltiple relacionadas con los conceptos de PHP.
   - La tarea es personalizar el formulario agregando preguntas y opciones que cubran diversos temas de PHP, como bucles, condicionales, variables, funciones, POO, manejo de formularios con métodos POST y GET, validación de formularios y matrices.
   - Puede utilizar la plantilla HTML y CSS proporcionada como punto de partida y modificarla para que coincida con su diseño preferido para la interfaz del cuestionario.

**3. Manejo de la presentación del formulario (20 minutos):**
   - En esta parte, hay que procesar los formularios utilizando la superglobal `$_POST` de PHP.
   - La tarea es validar el formulario para asegurarse de que todas las preguntas estén respondidas. Muestra un mensaje de error si falta la respuesta a alguna pregunta.

**4. Creación de una clase PHP para la lógica del cuestionario (20 minutos):**
   - Crear una clase PHP (por ejemplo, `Quiz`) para manejar la lógica del cuestionario.
   - La clase debe incluir métodos para almacenar y recuperar preguntas y respuestas, calcular la puntuación en función de las respuestas correctas y generar comentarios para cada pregunta.

**5. Visualización de los resultados del cuestionario (15 minutos):**
   - Utilizar PHP para mostrar los resultados del cuestionario después de la presentación.
   - Mostrará la puntuación del usuario y proporcionará comentarios sobre cada pregunta.
   - Incluya un botón que permita a los usuarios repetir el cuestionario si lo desean.

**6. Añadiendo el método GET para repetición (10 minutos):**
   - Uso de `$_GET` para pasar datos a través de URL:
     - Agregará un enlace o botón que permita a los usuarios repetir el cuestionario, enviando un parámetro `?retake=true` en la URL.
   - Modificará la lógica del cuestionario para manejar este parámetro y reiniciar el cuestionario si se solicita.

**7. Desafíos adicionales (10 minutos):**
   - Como bono, lo desafiaremos a agregar funciones adicionales a la aplicación del cuestionario, como un temporizador, una tabla de clasificación o la capacidad de guardar puntuaciones altas.
   - Esto fomenta la creatividad y la exploración para mejorar sus habilidades de PHP.

**8. Preguntas y discusión (10 minutos):**
   - Reservaremos tiempo para preguntas y discusión.
   - Puede hacer cualquier pregunta relacionada con la actividad, solicitar aclaraciones sobre los conceptos o discutir cualquier desafío que haya encontrado.

**9. Conclusión (10 minutos):**
   - En la última parte, resumiremos las claves de la actividad.
   - Discutiremos la importancia de practicar conceptos de PHP a través de aplicaciones del mundo real y lo alentaremos a seguir explorando y construyendo con PHP.

**Materiales necesarios:**
   - Un servidor web con soporte para PHP (por ejemplo, contenedor Docker, XAMPP, WAMP o cualquier entorno de alojamiento web con PHP).
   - Conocimiento básico de HTML y CSS (se proporcionarán plantillas iniciales).
