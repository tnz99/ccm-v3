<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/news-and-events', [PagesController::class, 'newsAndEvent'])->name('pages.news-and-event');

// Admin Routes
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/pages', [PagesController::class, 'index'])->name('pages.index');
});
