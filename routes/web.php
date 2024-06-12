<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//book

Route::get('/book/create',[BookController::class,'create'])->name('book.create');
Route::post('/book/store',[BookController::class,'store'])->name('book.store');
Route::get('/book/index',[BookController::class,'index'])->name('book.index');
Route::get('/book/{book}',[BookController::class,'show'])->name('book.show');
Route::put('/book/{book}',[BookController::class,'update'])->name('book.update');
Route::delete('/book/{book}',[BookController::class,'destroy'])->name('book.destroy');
Route::get('/book/{book}/edit',[BookController::class,'edit'])->name('book.edit');