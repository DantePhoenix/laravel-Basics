<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Forma 1 de como escribir las rutas usando controladores
// Route::get('home', [PageController:: class, 'home'])->name('home');

// Route::get('blog', [PageController:: class, 'blog'])->name('blog');

// Route::get('blog/{slug}', [PageController:: class, 'blog/{slug}'])->name('post');


// Forma 2 de como escribir las rutas usando controladores, usando grupos (mas corto)
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
});
