# Gestión de Empleados, Departamentos y Asistencias

Este proyecto es una aplicación desarrollada en **Laravel 11** que permite gestionar empleados, departamentos y asistencias. Integra operaciones CRUD (Crear, Leer, Actualizar, Eliminar) y autenticación utilizando **Laravel Breeze**.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

-   **PHP 8.2 o superior**
-   **Composer** (gestor de dependencias de PHP)
-   **Node.js** (para la compilación de assets frontend)
-   **NPM o Yarn** (gestor de paquetes para Node.js)
-   **MySQL** (o cualquier otro sistema de base de datos compatible)

## Instalación

Sigue estos pasos para instalar y configurar el proyecto:

### 1. Clonar el repositorio

Clona el repositorio en tu máquina local:

git clone https://github.com/mscorrea17/parcial_m_s.git
cd parcial_m_s siempre y cuando sea colaborador y hayas solicitado tu rama

###

Instalar dependencias de PHP
Instala todas las dependencias necesarias para Laravel usando Composer:
composer install

###

Instalar dependencias de Node.js
Instala las dependencias de frontend que son necesarias para compilar los archivos CSS y JavaScript:

Si estás usando npm, ejecuta:

npm install o yarn install

.env.example .env

###

Genera una nueva clave de aplicación para Laravel:
php artisan key:generate

###

Ejecutar las migraciones
Para crear las tablas necesarias en tu base de datos, ejecuta las migraciones:

php artisan migrate
mkdir -p storage/framework/views
php artisan config:clear
php artisan cache:clear
php artisan view:clear

Compilar los archivos de frontend
Compila los archivos de CSS y JavaScript utilizando npm o Yarn:

Si usas npm:

npm run dev o yarn dev

# Por ultimo

php artisan serve
