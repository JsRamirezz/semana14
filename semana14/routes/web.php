<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('home',[ProductosController::class,'index'])->name('index');
Route::get('/nuevoreg',[ProductosController::class,'forminsertar'])->name('forminsertar');
Route::post('/nuevoreg',[ProductosController::class,'crearreg'])->name('crear');
Route::get('/verreg',[ProductosController::class,'buscarreg'])->name('buscar');
Route::get('/editar/{id}', [ProductosController::class, 'editar'])->name('editar'); 
Route::put('/editar/{id}', [ProductosController::class, 'actualizar'])->name('actualizar'); 
Route::delete('/eliminar/{id}', [ProductosController::class, 'eliminar'])->name('eliminar');
Route::get('/', [ProductosController::class,'indexx'])->name('indexx');







