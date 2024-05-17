<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanoController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/planos/{plano}/edit', [PlanoController::class, 'edit'])->name('planos.edit');
Route::get('/planos', [PlanoController::class, 'index'])->name('planos.index');
Route::get('/planos/create', [PlanoController::class, 'create'])->name('planos.create')->middleware('auth');
Route::post('/planos', [PlanoController::class, 'store'])->name('planos.store');
Route::get('/planos/{id}/edit', [PlanoController::class, 'edit'])->name('planos.editar');
Route::put('/planos/{id}', [PlanoController::class, 'update'])->name('planos.update')->middleware('auth');
Route::delete('/planos/{id}', [PlanoController::class, 'destroy'])->name('planos.destroy')->middleware('auth');
Route::get('/planos/escolher', [PlanoController::class, 'escolher'])->name('planos.escolher');




require __DIR__.'/auth.php';
