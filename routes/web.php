<?php

use App\Http\Controllers\Bookcontroller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;

Route::get('/', [Pagecontroller::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function() {
    
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    
    Route::post('/book/save', [BookController::class, 'store'])->name('book.store');
    
    Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
    
    Route::get('/authors/{book}', [BookController::class, 'show'])->name('authors.show');
});


/* Route::get('/book', [Bookcontroller::class, 'index'])->name('index');
Route::post('/book/save', [Bookcontroller::class, 'store'])->name('store'); */
