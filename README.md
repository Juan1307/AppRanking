# AppRanking - Cursalab

Una aplicación de ranking de estudiantes que comtempla cursos y temas, utilizando tecnologias como:

- Laravel 9.
- Vue 3.
- Inertia JS.

### Para la ejecución de la App.

Para ejecutar la App necesitará lo siguiente.

Requisitos:

- PHP 8.
- Composer 2.1
- XAMPP(Apache y PhpMyAdmin).
- Node 16.13.2

Luego de realizar la instalación de las herramientas requeridas ejecutar lo siguiente.

*** Recuerda: *** hacer un fork o clon de este repositorio.

- Importar la base de datos que se encuentra en la carpeta ```/db``` a su gestor de base de datos MySql.
- Ejecutar: ```composer install``` // para las dependecias de LARAVEL.
- Ejecutar: ```npm install``` // para las dependencias de INERTIA, VUE 3 y VITE.
- Ejecutar: ```npm run dev``` // puerto 3000 - por defecto para servir VUE 3.
- Ejecutar: ```php artisan serve``` // puerto 8000 - por defecto para servir LARAVEL.


Abrir una pestaña en el puerto 8000 para visualizar la App.

### Notas

- Generalmente es mala practica dejar el archivo ```.env``` disponible, dado que contiene información sensible, en este caso se ha hecho una excepción para poder integrar de forma rápida la ejecución de la App, despues de importar la base de datos en su gestor de MySql.