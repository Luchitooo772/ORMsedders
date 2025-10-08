<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController; // 👈 1. Importa el controlador DocenteController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// La ruta que mapea la URL base (/) a tu controlador
// Cuando un usuario visite http://tu-app.test/
Route::get('/', [DocenteController::class, 'index']); // 👈 2. Mapea la raíz al método index

// Opcional: Si quieres que la lista esté en /docentes (como en tu presentación)
// Route::get('/docentes', [DocenteController::class, 'index']); // 👈 3. Ruta alternativa

// Ejemplo de otras rutas que puedes tener:
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');