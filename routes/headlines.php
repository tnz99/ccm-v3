<?php

use App\Http\Controllers\HeadlinesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/headlines', [HeadlinesController::class, 'index'])->name('headlines.index');
    // Route::post('/headlines/create', [HeadlinesController::class, 'create'])->name('headlines.create');
    Route::get('/headlines/edit/{id}', [HeadlinesController::class, 'edit'])->name('headlines.edit');
    Route::post('/headlines/update', [HeadlinesController::class, 'update'])->name('headlines.update');
    Route::post('/headlines/search', [HeadlinesController::class, 'search'])->name('headlines.search');
});