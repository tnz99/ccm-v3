<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/news-and-events', [PagesController::class, 'newsAndEvent'])->name('pages.news-and-event');
Route::get('/story/{id}', [PagesController::class, 'story'])->name('pages.story');
Route::get('/stories/gallery/{id}', [PagesController::class, 'gallery'])->name('pages.gallery');
Route::get('/stories/timeline/{id}', [PagesController::class, 'timeline'])->name('pages.timeline');
Route::get('/stories/main-story/{id}', [PagesController::class, 'mainStory'])->name('pages.main-story');

// Admin Routes
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/pages', [PagesController::class, 'index'])->name('pages.index');
});
