<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/new', [GalleryController::class, 'create'])->name('galleries.new');
    Route::post('/galleries', [GalleryController::class, 'create'])->name('galleries.create');
    Route::get('/galleries/edit/{id}', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::get('/galleries/show/{id}', [GalleryController::class, 'show'])->name('galleries.show');
    Route::post('/galleries/update/', [GalleryController::class, 'update'])->name('galleries.update');
    Route::post('/galleries/search', [GalleryController::class, 'search'])->name('galleries.search');
});