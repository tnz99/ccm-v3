<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
    Route::post('/admins', [AdminController::class, 'create'])->name('admins.create');
    Route::get('/admins/edit/{id}', [AdminController::class, 'edit'])->name('admins.edit');
    Route::post('/admins/update', [AdminController::class, 'update'])->name('admins.update');
    Route::post('/admins/search', [AdminController::class, 'search'])->name('admins.search');
    Route::delete('/admins', [AdminController::class, 'delete'])->name('admins.delete');
    Route::get('/admins/profile', [AdminController::class, 'profile'])->name('admins.profile');
});