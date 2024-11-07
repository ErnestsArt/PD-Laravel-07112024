<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/index', [PostController::class, 'index'])-> name('index');
Route::get('/posts/create', [PostController::class, 'create'])-> name('create');
Route::get('/posts/show', [PostController::class, 'show'])-> name('show');

Route::post('/posts/store', [PostController::class, 'store']);
Route::get('posts/{id}/edit', [PostController::class, 'edit']);
Route::put('posts/{id}/update', [PostController::class, 'update']);
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy']);
Route::get('posts/{id}', [PostController::class, 'show']);
