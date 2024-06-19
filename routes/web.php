<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\booksController;


//navigasi
Route::get('/', [booksController::class, 'index']);
Route::get('/pengadaan', [booksController::class, 'index']);
Route::get('/about', function(){
    return view('about', ['nama' => 'Radot']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', function () {
    return view('admin');
});


//aksi
Route::post('/publisher',[publisherController::class, 'store']);

Route::post('/books', [booksController::class, 'store']);

Route::delete('/books{id}', [booksController::class, 'destroy'])->name('buku.destroy');
