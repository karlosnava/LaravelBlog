<?php

use Illuminate\Support\Facades\Route;

// CONTROLADORES
use App\Http\Controllers\PostController;


// === RUTAS

// POSTS
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

// CATEGORÍAS
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

// TAGS
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

// ADMINISTRADOR


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

