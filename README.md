## Examen
# Requisitos
* LARAVEL 8
* composer 2.*
* php 7.4 o 8.0
# Instalación
* Ingresar a la carpeta del proyecto
* Crear una copia del archivo `.env.example` con el nombre `.env`
* Configurar el archivo .env para la conexión de la base de datos
* Ejecutar `composer install` para instalar las dependencias
* Ejecutar `php artisan key:generate`
* Ejecutar `php artisan serve` para levantar el servidor
* Ingresar desde un navegador web a la ruta `http://localhost:8000` y Listo!!!!
# Caracteristicas
* Detecta a los estudiantes por carnet para no registrarlos de nuevo
* Genera reportes en pdf por sucursal y por estudiantes
# Alternativa
* Para crear una base de datos con los datos de prueba con las migraciones y seeders de Laravel programadas, crea una base de datos vacia, configurala en el .env y ejecuta `php artisan migrate:fresh --seed` y creara todas las tablas e insertara todos los datos de inicializacion automaticamente 