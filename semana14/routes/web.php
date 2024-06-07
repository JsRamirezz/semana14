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


//RUTAS DE PRODUCTOS
Route::get('/nuevoreg',[ProductosController::class,'forminsertar'])->name('forminsertar');
Route::post('/nuevoreg',[ProductosController::class,'crearreg'])->name('crear');
Route::get('/verreg',[ProductosController::class,'buscarreg'])->name('buscar');
Route::get('/editar/{id}', [ProductosController::class, 'editar'])->name('editar'); 
Route::put('/editar/{id}', [ProductosController::class, 'actualizar'])->name('actualizar'); 
Route::delete('/eliminar/{id}', [ProductosController::class, 'eliminar'])->name('eliminar');


//RUTA DE FORMULARIO DE CONTACTO
Route::get('/contacto', [ProductosController::class,'contacto'])->name('contacto');

//RUTA PARA MOSTRAR LAS CITAS AGENDADAS
Route::get('/citas', [ProductosController::class, 'getCitas'])->name('citas');


//RUTAS RESERVA DE CITA
Route::get('/reservas', [ProductosController::class,'reservas'])->name('reservas');
Route::post('/reservas', [ProductosController::class,'guardarCita'])->name('guardarCita');



//RUTAS CATEGORIA
Route::get('/categorias', [ProductosController::class,'indexx'])->name('indexx');
Route::get('/', [ProductosController::class,'categorias'])->name('categorias');
Route::get('/cabello', [ProductosController::class,'cabello'])->name('cabello');
Route::get('/barba', [ProductosController::class,'barba'])->name('barba');
Route::get('/cejas', [ProductosController::class,'cejas'])->name('cejas');



// RUTAS CART
Route::post('/add', [ProductosController::class, 'add'])->name('cart.store');
Route::get('/cart', [ProductosController::class, 'cart'])->name('cart.index');
Route::post('/remove', [ProductosController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [ProductosController::class, 'clear'])->name('cart.clear');











