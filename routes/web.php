<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\booksController;


//navigasi
Route::get('/', [AdminController::class, 'indexhome']);
Route::get('/pengadaan', [AdminController::class, 'indexpengadaan']);
Route::get('/admin', [AdminController::class, 'index'])->name('get_books');


//aksi-unibooks

//search
Route::get('/books',[booksController::class, 'search'])->name('books.search');
//add
Route::post('/admin', [AdminController::class, 'store'])->name('store_books');

//add-publisher
Route::post('/publisher',[publisherController::class, 'store']);

//delete
Route::delete('/books/{id_buku}', [AdminController::class, 'destroy'])->name('buku.destroy');
//update
Route::put('books/{id_buku}', [AdminController::class, 'update'])->name('books.update');

//show-development-only
Route::get('/books/{id_buku}', [AdminController::class, 'show'])->name('buku.show');