<?php

use App\Http\Controllers\DonationsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/donations/international', [DonationsController::class, 'international'])->name('donations.international.get');
    Route::post('/donations/international', [DonationsController::class, 'international'])->name('donations.international.post');
    Route::get('/donations/local', [DonationsController::class, 'local'])->name('donations.local');
    Route::post('/donations/local', [DonationsController::class, 'saveLocal'])->name('donations.local.post');

    Route::get('/donations/history', [DonationsController::class, 'history'])->name('donations.history');
});