<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\VehicleController;
use App\Http\Controllers\Api\V1\WorkshopController;
use App\Http\Controllers\Api\V1\WorkOrderController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\NotificationController;

// Ruta de prueba
Route::get('/ping', fn() => response()->json(['message' => 'pong']));

// Autenticación
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Rutas protegidas con Sanctum
/* Route::middleware('auth:sanctum')->group(function () {

    // Usuarios
    Route::apiResource('users', UserController::class);

    // Perfiles
    Route::apiResource('profiles', ProfileController::class);

    // Vehículos
    Route::apiResource('vehicles', VehicleController::class);

    // Talleres
    Route::apiResource('workshops', WorkshopController::class);

    // Órdenes de trabajo
    Route::apiResource('work-orders', WorkOrderController::class);

    // Notificaciones
    Route::apiResource('notifications', NotificationController::class);

    // Cierre de sesión
    Route::post('/logout', [AuthController::class, 'logout']);
}); */