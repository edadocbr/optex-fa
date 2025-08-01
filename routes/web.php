<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//Navegacion
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('nosotros', [PagesController::class, 'about'])->name('pages.about');
Route::get('contactenos', [PagesController::class, 'contact'])->name('pages.contact');

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
