<?php

use App\Http\Controllers\DonarsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/donars', [DonarsController::class, 'index'])->name('donars.index');
    Route::post('/donars', [DonarsController::class, 'create'])->name('donars.create');
    // Route::get('/donars/edit/{id}', [DonarsController::class, 'edit'])->name('donars.edit');
    // Route::post('/donars/update', [DonarsController::class, 'update'])->name('donars.update');
    Route::post('/donars/search', [DonarsController::class, 'search'])->name('donars.search');
    // Route::delete('/donars', [DonarsController::class, 'delete'])->name('donars.delete');
    Route::get('/donars/profile', [DonarsController::class, 'profile'])->name('donars.profile');
});