<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//RUTAS USADAS PARA EL CRUD DE VUE
Route::get('/citas', [ProductosController::class, 'citas']);
Route::put('/citas/{id}', [ProductosController::class, 'update']);
Route::delete('/citas/{id}', [ProductosController::class, 'destroy']);
Route::get('/servicios', [ProductosController::class, 'getServicios']);
Route::get('/estilistas', [ProductosController::class, 'getEstilistas']);



