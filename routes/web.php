<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro del grupo
| que contiene el middleware "web".
|
*/

// Ruta principal - Página de inicio del portfolio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Ruta para procesar el formulario de contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

// Si en el futuro quieres agregar más rutas:
// Route::get('/blog', function () {
//     return view('blog.index');
// })->name('blog.index');

// Route::get('/proyectos', function () {
//     return view('proyectos.index');
// })->name('proyectos.index');