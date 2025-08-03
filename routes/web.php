<?php

use App\Http\Controllers\AplicationsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Series\DesplazamientoController;
use App\Http\Controllers\Series\FibraController;
use App\Http\Controllers\Series\FotoelectricoController;
use App\Http\Controllers\Series\LaserController;
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

Route::get('productos/sensor-fotoelectrico/serie-c', [FotoelectricoController::class, 'serie_c'])->name('series.desplazamiento.serie_c');
Route::get('productos/sensor-fotoelectrico/serie-e', [FotoelectricoController::class, 'serie_e'])->name('series.desplazamiento.serie_e');
Route::get('productos/sensor-fotoelectrico/serie-j', [FotoelectricoController::class, 'serie_j'])->name('series.desplazamiento.serie_j');
Route::get('productos/sensor-fotoelectrico/serie-j2', [FotoelectricoController::class, 'serie_j2'])->name('series.desplazamiento.serie_j2');
Route::get('productos/sensor-fotoelectrico/serie-j3', [FotoelectricoController::class, 'serie_j3'])->name('series.desplazamiento.serie_j3');
Route::get('productos/sensor-fotoelectrico/serie-v', [FotoelectricoController::class, 'serie_v'])->name('series.desplazamiento.serie_v');
Route::get('productos/sensor-fotoelectrico/serie-v2', [FotoelectricoController::class, 'serie_v2'])->name('series.desplazamiento.serie_v2');
Route::get('productos/sensor-fotoelectrico/serie-v3&v4', [FotoelectricoController::class, 'serie_v3_v4'])->name('series.desplazamiento.serie_v3_v4');
Route::get('productos/sensor-fotoelectrico/serie-srq', [FotoelectricoController::class, 'serie_srq'])->name('series.desplazamiento.srq');
Route::get('productos/sensor-fotoelectrico/serie-s&bgs-s', [FotoelectricoController::class, 'serie_s_bgs_s'])->name('series.desplazamiento.serie_s_bgs_s');
Route::get('productos/sensor-fotoelectrico/serie-z', [FotoelectricoController::class, 'serie_z'])->name('series.desplazamiento.serie_z');
Route::get('productos/sensor-fotoelectrico/serie-k', [FotoelectricoController::class, 'serie_k'])->name('series.desplazamiento.serie_k');
Route::get('productos/sensor-fotoelectrico/serie-bgs&fgs', [FotoelectricoController::class, 'serie_bgs_fgs'])->name('series.desplazamiento.serie_bgs_fgs');
Route::get('productos/sensor-fotoelectrico/serie-bgs', [FotoelectricoController::class, 'serie_bgs'])->name('series.desplazamiento.serie_bgs');

Route::get('productos/sensor-laser/serie-d', [LaserController::class, 'serie_d'])->name('series.laser.serie_d');
Route::get('productos/sensor-laser/serie-d2sa', [LaserController::class, 'serie_d2sa'])->name('series.laser.serie_d2sa');
Route::get('productos/sensor-laser/serie-dm', [LaserController::class, 'serie_dm'])->name('series.laser.serie_dm');
Route::get('productos/sensor-laser/serie-ds', [LaserController::class, 'serie_ds'])->name('series.laser.serie_ds');
Route::get('productos/sensor-laser/serie-zl', [LaserController::class, 'serie_zl'])->name('series.laser.serie_zl');

Route::get('productos/sensor-de-fibra/serie-drf', [FibraController::class, 'serie_drf'])->name('series.fibra.serie_drf');
Route::get('productos/sensor-de-fibra/serie-brf', [FibraController::class, 'serie_brf'])->name('series.fibra.serie_brf');
Route::get('productos/sensor-de-fibra/serie-tgf&vgt-t', [FibraController::class, 'serie_tgf_vgt_t'])->name('series.fibra.serie_tgf_vgt_t');
Route::get('productos/sensor-de-fibra/serie-nf', [FibraController::class, 'serie_nf'])->name('series.fibra.serie_nf');



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
