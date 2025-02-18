<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Forma 1 de como escribir las rutas usando controladores
// Route::get('home', [PageController:: class, 'home'])->name('home');

// Route::get('blog', [PageController:: class, 'blog'])->name('blog');

// Route::get('blog/{slug}', [PageController:: class, 'blog/{slug}'])->name('post');


// Forma 2 de como escribir las rutas usando controladores, usando grupos (mas corto)
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route:: resource('posts', PostController::class) -> except('show');

require __DIR__ . '/auth.php';
