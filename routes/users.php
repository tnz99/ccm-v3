<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::post('/users', [UsersController::class, 'create'])->name('users.create');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('/users/update', [UsersController::class, 'update'])->name('users.update');
    Route::post('/users/search', [UsersController::class, 'search'])->name('users.search');
    Route::delete('/users', [UsersController::class, 'delete'])->name('users.delete');
});