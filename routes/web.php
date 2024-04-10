<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\TenantCreateController;
use Illuminate\Support\Facades\Route;

// INÍCIOS DAS ROTAS PÚBLICAS DO SITE
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tenant/create', [TenantCreateController::class, 'create'])->name('tenant.create');
Route::post('/tenant/store', [TenantCreateController::class, 'store'])->name('tenant.store');
Route::get('/tenant/welcome', [TenantCreateController::class, 'welcome'])->name('tenant.welcome');

// FIM DAS ROTAS PÚBLICAS DO SITE

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
