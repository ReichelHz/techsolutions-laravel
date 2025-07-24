# Techsolutions Laravel - Sistema de Gestión de Proyectos

## Descripción

Este proyecto es una aplicación web desarrollada con Laravel para la gestión de proyectos, creada como parte de la Evaluación Sumativa Unidad 1. La aplicación permite realizar operaciones CRUD (crear, leer, actualizar y eliminar) sobre proyectos, mostrando además el valor actualizado de la Unidad de Fomento (UF) consultado desde una API externa.

## Funcionalidades principales

- Listar todos los proyectos.
- Crear un nuevo proyecto.
- Editar proyectos existentes.
- Eliminar proyectos.
- Mostrar detalles de un proyecto.
- Mostrar el valor actual de la UF en la vista principal.

## Tecnologías utilizadas

- PHP 8.2
- Laravel Framework (coloca la versión que uses)
- MySQL / MariaDB para la base de datos
- Composer para gestión de dependencias
- Git para control de versiones

## Instalación

Clona el repositorio con:
git clone https://github.com/ReichelHz/techsolutions-laravel.git
Entra a la carpeta del proyecto con: cd techsolutions-laravel
Instala las dependencias con Composer: composer install
Copia el archivo de configuración de entorno y edítalo si es necesario para configurar la base de datos: cp .env.example .env
Genera la clave de la aplicación: php artisan key:generate
Ejecuta las migraciones para crear las tablas en la base de datos: php artisan migrate
Levanta el servidor local: php artisan serve
Abre en tu navegador la URL: http://localhost:8000

## Uso

- Navega por la aplicación para ver la lista de proyectos.
- Puedes crear, editar, eliminar y ver detalles de proyectos.
- En la página principal, se muestra el valor actualizado de la Unidad de Fomento (UF).

## Autor

- María José Reichel Hernández
- Sebastián Lagos Hernández

## Licencia

Este proyecto es parte de una evaluación académica y no está bajo ninguna licencia pública.





