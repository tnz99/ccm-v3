<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\NewsController;

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/pages.php';
require __DIR__.'/donations.php';
require __DIR__.'/headlines.php';
require __DIR__.'/stories.php';
require __DIR__.'/galleries.php';
require __DIR__.'/timelines.php';
require __DIR__.'/donars.php';
require __DIR__.'/admins.php';

// Route::post('donations', [DonationsController::class, 'international'])->name('donations.international');
Route::get('donations/success', [DonationsController::class, 'success'])->name('donations.success');
Route::get('donations/cancel', [DonationsController::class, 'cancel'])->name('donations.cancel');


Route::get('news/{id?}', [NewsController::class, 'index'])->name('news.index');
Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::delete('news/delete', [NewsController::class, 'delete'])->name('news.delete');
Route::post('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news', [NewsController::class, 'update'])->name('news.update');





