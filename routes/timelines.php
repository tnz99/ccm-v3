<?php

use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/timelines', [TimelineController::class, 'index'])->name('timelines.index');
    // Route::get('/timelines/new', [TimelineController::class, 'create'])->name('timelines.new');
    Route::post('/timelines', [TimelineController::class, 'create'])->name('timelines.create');
    Route::get('/timelines/edit/{id}', [TimelineController::class, 'edit'])->name('timelines.edit');
    // Route::post('/timelines/update', [TimelineController::class, 'update'])->name('timelines.update');
    // Route::post('/timelines/search', [TimelineController::class, 'search'])->name('timelines.search');
    Route::delete('/timelines/delete', [TimelineController::class, 'delete'])->name('timelines.delete');
});