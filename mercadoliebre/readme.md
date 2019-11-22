## Pasos para crear un proyecto Laravel
Vamos crear un ecommerce:

Pensemos la estructura mínima de base de datos que podemos necesitar. Pensemos los modelos y los posibles cruces de datos entre si.
- User.
- Product:
	tiene un usuario que lo carga/ dueño del producto.
	tienen una categoría.
- Category.
- Cart:
	Tiene productos.
	Tiene un usuario que está comprando.

### Links de consulta
Revisen siempre la documentación de Laravel. Es muy buena y está muy clara.  
Laravel: https://laravel.com/docs/5.8/  
Faker: https://github.com/fzaninotto/Faker  

### ¿Y por dónde empezamos?
1.- Crear la estructura del proyecto: descargamos laravel vía composer.
2.- Crear la base de datos.
3.- Configurar .env con los datos de la base.
4.- Crear la estructura de login/ registro con `php artisan make:auth`.
5.- Crear storage link `php artisan storage:link`.
6.- Crear los modelos (menos el de Users que ya viene con `auth`) y todos los archivos relacionados usando `php artisan make:model Nombredelmodelo -a` (Creará el modelo, la migration, el controlador con todas las funciones std y la factory).
7.- Revisar si la migración de Users tiene los datos necesarios. Sino hacer una migración para modificar la tabla.
8.- Completar las migraciones de las restantes tablas.
9.- Correr migraciones.
10.- Si aparece el error ```SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))```
Resolverlo con las instrucciones de: https://laravel-news.com/laravel-5-4-key-too-long-error
11. Si sucedió el error del paso anterior correr `php artisan migrate:fresh` para eliminar todas las tablas y que corran las migraciones todas desde cero.
12. Crear las Foreign Keys si no lo hicieron anteriormente y correr migraciones. `php artisan migrate`.
11. Crear fakers/ seeders. Ojo con las foreign keys al momento de correr los seeders.
12. Correr los seeders con `php artisan db:seed`.
13. Agregar en los archivos de modelos el atributo `protected $guarded = []` para permitir a Laravel escribir en la db cuadno se envíe info por formularios. Para comodidad, en el modelo `User` hay que cambiar `protected $fillable =  [.....]` por `protected $guarded = []`.


//====================================================================  
=======================================



<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
