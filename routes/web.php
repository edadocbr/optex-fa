<?php

use App\Http\Controllers\AplicationsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Series\DesplazamientoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//Navegacion
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('nosotros', [PagesController::class, 'about'])->name('pages.about');
Route::get('contactenos', [PagesController::class, 'contact'])->name('pages.contact');

####################################
// Start - Navegacion - Productos //
####################################
Route::get('productos/sensor-imagenes-cvs1', [ProductsController::class, 'imagenes_cvs1'])->name('products.imagenes_cvs1');
Route::get('productos/sensor-de-desplazamiento', [ProductsController::class, 'desplazamiento'])->name('products.desplazamiento');
Route::get('productos/sensor-fotoelectrico', [ProductsController::class, 'fotoelectrico'])->name('products.fotoelectrico');
Route::get('productos/sensor-laser', [ProductsController::class, 'laser'])->name('products.laser');
Route::get('productos/sensor-de-fibra', [ProductsController::class, 'fibra'])->name('products.fibra');
Route::get('productos/comparador-de-sincronizacion', [ProductsController::class, 'comparador_sincronizacion'])->name('products.comparador_sincronizacion');

Route::get('productos/sensor-de-desplazamiento/serie-cd1', [DesplazamientoController::class, 'serie_cd1'])->name('series.desplazamiento.serie_cd1');
Route::get('productos/sensor-de-desplazamiento/serie-cd3', [DesplazamientoController::class, 'serie_cd3'])->name('series.desplazamiento.serie_cd3');
Route::get('productos/sensor-de-desplazamiento/serie-cd5', [DesplazamientoController::class, 'serie_cd5'])->name('series.desplazamiento.serie_cd5');


##################################
// End - Navegacion - Productos //
##################################

// Navegacion - Aplicaciones
Route::get('aplicaciones/automotriz', [AplicationsController::class, 'automotriz'])->name('aplications.automotriz');
Route::get('aplicaciones/alimentos-y-farmaceuticos', [AplicationsController::class, 'alimentos_farmaceuticos'])->name('aplications.alimentos_farmaceuticos');
Route::get('aplicaciones/electronica-y-semiconductures', [AplicationsController::class, 'electronica_semiconductores'])->name('aplications.electronica_semiconductores');
Route::get('aplicaciones/logistica-y-trasnporte', [AplicationsController::class, 'logistica_transporte'])->name('aplications.logistica_transporte');



/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
