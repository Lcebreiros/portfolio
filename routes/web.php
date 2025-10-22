<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Ruta para cambiar el idioma (ES/EN)
Route::get('lang/{locale}', function ($locale) {
    $available = ['es', 'en'];
    if (! in_array($locale, $available)) {
        $locale = config('app.locale');
    }
    session(['app_locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

// Ruta principal - Página de inicio del portfolio
Route::get('/', function () {
    $locale = session('app_locale', config('app.locale'));
    app()->setLocale($locale);
    return view('welcome');
})->name('home');

// Ruta para procesar el formulario de contacto
Route::post('/contacto', [ContactController::class, 'send'])->name('contacto.store');

// cuanto sabe demo
Route::view('/cuanto-sabe-demo', 'cuanto-sabe-demo')->name('cuanto-sabe-demo');

// Si en el futuro quieres agregar más rutas:
// Route::get('/blog', function () {
//     return view('blog.index');
// })->name('blog.index');

// Route::get('/proyectos', function () {
//     return view('proyectos.index');
// })->name('proyectos.index');
