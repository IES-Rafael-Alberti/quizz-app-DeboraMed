En la cuarta parte del proyecto, nos centraremos en implementar la autenticación de usuarios y la gestión de sesiones para mejorar la aplicación de cuestionarios. A continuación, se enumeran los pasos y las modificaciones necesarias:

**Paso 1: Crear la tabla de usuarios**

1. **Creación de la tabla de usuarios:**
   - Crear una nueva tabla llamada "Usuario" para almacenar la información de los usuarios.
   - Incluir campos como `user_id`, `username`, `password` (encriptada), `email` y cualquier otra información relacionada con el usuario.

```sql
CREATE TABLE User (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  -- Agregue otros campos relacionados con el usuario según sea necesario
);
```

**Paso 2: Implementar la autenticación de usuarios**

1. **Registro de usuarios (inscripción):**
   - Crear un formulario de registro para que los usuarios se registren.
   - Implementar código PHP para validar las entradas del usuario, encriptar contraseñas e insertar datos del usuario en la tabla "Usuario".

2. **Inicio de sesión de usuario:**
   - Desarrollar un formulario de inicio de sesión para que los usuarios introduzcan sus credenciales.
   - Implementar código PHP para autenticar a los usuarios comparando su contraseña encriptada con la almacenada en la tabla "Usuario".

3. **Cierre de sesión de usuario:**
   - Crear una función de cierre de sesión para finalizar la sesión de un usuario y redirigirlo a la página de inicio de sesión.

**Paso 3: Gestión de sesiones**

1. **Inicio de sesión:**
   - Utilizar `session_start()` de PHP para iniciar una sesión cuando un usuario inicia sesión.

2. **Variables de sesión:**
   - Almacenar variables de sesión para realizar un seguimiento de los datos relacionados con el usuario, como ID de usuario y nombre de usuario.

**Paso 4: Cookies (si es necesario)**

1. **Funcionalidad "Recuérdame" (opcional):**
   - Implementar una función "Recordarme" utilizando cookies si es necesario.
   - Permitir que los usuarios permanezcan conectados incluso después de cerrar el navegador.

**Paso 5: Sesión de cuestionario**

1. **Sesiones de progreso del cuestionario:**
   - Cuando un usuario inicia un cuestionario, crear y almacenar variables de sesión para realizar un seguimiento de su progreso (por ejemplo, pregunta actual, respuestas seleccionadas).

**Paso 6: Continuar el cuestionario más tarde**

1. **Continuar el cuestionario más tarde:**
   - Implementar una función que permita a los usuarios guardar su progreso en el cuestionario y continuarlo más tarde.
   - Utilizar *cookies* o almacenamiento en la base de datos para guardar los datos de progreso.

**Paso 7: Prueba y depuración**

1. **Pruebas:**
   - Probar exhaustivamente la autenticación de usuarios, la gestión de sesiones y cualquier funcionalidad relacionada con cookies.
   - Asegúrese de que los usuarios puedan iniciar sesión, iniciar cuestionarios y continuarlos sin problemas.

2. **Depuración:**
   - Identificar y corregir cualquier problema o error que surja durante las pruebas.

**Paso 8: Documentación para el usuario**

1. **Proporcionar documentación:**
   - Ofrecer documentación clara para el usuario sobre cómo registrarse, iniciar sesión, administrar cuestionarios y utilizar cualquier función adicional (por ejemplo, "Recordarme").

**Paso 9: Preguntas y respuestas y discusión**

1. **Discusión y participación:**
   - Alentar a los estudiantes a discutir los desafíos y soluciones relacionados con la autenticación de usuarios, la gestión de sesiones y las cookies.
   - Fomentar una comprensión más profunda de las funciones relacionadas con los usuarios en las aplicaciones web.

Esta parte del proyecto mejorará la aplicación de cuestionarios agregando autenticación de usuarios, gestión de sesiones y funciones opcionales como "Recordarme" y continuación del progreso del cuestionario.
