# BELogsCar - Laravel 12 API

Este proyecto es una API RESTful desarrollada en Laravel 12 para gestionar usuarios, vehículos, talleres, órdenes de trabajo y más, basada en un diagrama ER. Está diseñada para ser consumida por una aplicación web y una app Flutter.

---

## 🧰 Herramientas necesarias

Antes de comenzar, asegúrate de tener instaladas las siguientes herramientas:

- Git – Control de versiones
- XAMPP – Servidor Apache y MySQL
- Visual Studio Code – Editor de código
- Postman – Cliente para probar APIs
- Composer – Gestor de dependencias PHP

---

## 🚀 Instalación del Proyecto

### 1. Clonar el repositorio


git clone https://github.com/tu-usuario/BELogsCar.git
cd BELogsCar

### 2. Instalar dependencias

composer install

### 3. Copiar archivo .env y configurar

cp .env.example .env

### Edita el archivo .env y configura tu conexión a la base de datos MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=logscar_db
DB_USERNAME=root
DB_PASSWORD=

### 4. Generar clave de aplicación

php artisan key:gen

### 5. Migrar la base de datos

php artisan migrate

## 🔐 Configurar Laravel Sanctum


composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\\Sanctum\\SanctumServiceProvider"
php artisan migrate

## 🧪 Probar login y registro en Postman

### 📌 Endpoint: Registro

- URL: http://localhost:8000/api/v1/register
- Método: POST
- Headers:
    - Content-Type: application/json
    - Accept: application/json
- Body (raw JSON):

{
  "email": "admin@example.com",
  "username": "Administrador",
  "password": "Admin123",
  "password_confirmation": "Admin123"
}

### 📌 Endpoint: Login

- URL: http://localhost:8000/api/v1/login
- Método: POST
- Body (raw JSON):

{
  "email": "admin@example.com",
  "password": "Admin123"
}
