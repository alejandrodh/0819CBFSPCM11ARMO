### Pasos de la migración a Objetos
Corresponde a la clase virtual del día 11/10/19.

0. Creamos la carpeta `/clases`.
1. Creamos la clase `DbJson` y configuramos el Constructor.
2. Migramos las funciones de `functions.php` a métodos de la clase.
3. Recordar hacer siempre chequeos intermedios para controlar que el código esté funcionando correctamente.
4. Creamos el archivo `init.php` con la información que vamos a necesitar incluir en todos los archivos `.php`.
4. Creamos la clase `Usuario`.
5. Incluimos la función `nextId()`. **Atención** que es un método de otra clase.

### ToDos para ver en clase
6. Incluir código en el constructor de la clase `DbJson` para que no rompa si el archivo de guardado no existe.
6. Refactorizar la función `guardarUsuario()` para que procese un Objeto de tipo `Usuario` y lo guarde.
7. Refactorizar la función `buscarUsuarioPorEmail()` para que devuelva un objeto `Usuario`.
9. Migrar las funciones validadoras.
10. Dejar preparado el sistema para que pueda guardar datos en `json` o en `MySQL`.
