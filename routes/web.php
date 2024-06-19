<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\booksController;


//navigasi
Route::get('/', [booksController::class, 'index']);
Route::get('/pengadaan', [booksController::class, 'indexpengadaan']);
Route::get('/admin', [booksController::class, 'indexadmin']);

Route::get('/about', function(){
    return view('about', ['nama' => 'Radot']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});


//aksi

Route::get('/books',[booksController::class, 'search'])->name('books.search');

Route::post('/publisher',[publisherController::class, 'store']);

Route::post('/books', [booksController::class, 'store']);

Route::delete('/books{id}', [booksController::class, 'destroy'])->name('buku.destroy');
