<?php

use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
    Route::post('/stories', [StoryController::class, 'create'])->name('stories.create');
    Route::get('/stories/edit/{id}', [StoryController::class, 'edit'])->name('stories.edit');
    Route::post('/stories/update', [StoryController::class, 'update'])->name('stories.update');
    Route::delete('/stories', [StoryController::class, 'delete'])->name('stories.delete');
});