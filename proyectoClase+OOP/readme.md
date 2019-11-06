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


### Update 2019-11-06.
Terminado el módulo MySQL retomamos el punto 10.
1. Modificamos el nombre de la variable `$json` a `$db` para generalizar la conexión. Luego la variable podrá tener dentro una conexión a **mysql** o a un archivo **json**.
1. Modificamos todas las llamadas a `$json` de los otros archivos del sistema. Cambiamos el nombre a `$db`.
2. Creamos una clase abstracta `Db` (db.php) con métodos abstractos que luego cada clase hija deberá definir.
3. Modificamos la clase `DbJson` (dbjson.php) para que extienda de `Db` (db.php).
4. Craamos la clase `DbMysql` (dbmysql.php) para que extienda de `Db` (db.php).
5. Escribimos los métodos de la clase  `DbMysql` (dbmysql.php).
6. Creamos una base de datos con una tabla `usuarios` para probar el sistema.
7. Finalemnte creamos un archivo `config.json` para manejar los datos de configuración por fuera de la clase `DbJson` y así evitar que cada miembro del equipo pise y commitee la clase `DbMysql` con sus propios datos de acceso a `PDO`.
