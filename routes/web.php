<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('home');

Route::resource('books', BookController::class)
    ->only(['create', 'store'])
    ->middleware(['auth']);

Route::resource('author', AuthorController::class)
    ->only(['index', 'create', 'store'])
    ->middleware(['auth']);

Route::resource('library', LibraryController::class)
    ->only(['index', 'create', 'store'])
    ->middleware(['auth']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
