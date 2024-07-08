<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

//navigasi
Route::get('/pengadaan', [AdminController::class, 'indexpengadaan'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->name('get_books')->middleware('auth');
Route::get('/',[BooksController::class, 'indexhome'])->name('home');

//login-logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout',[LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'actionregister'])->name('actionregister');


//aksi

//search
Route::get('/books',[booksController::class, 'search'])->name('books.search');
//add-books
Route::post('/admin', [AdminController::class, 'store'])->name('store_books');
//add-publisher
Route::post('/publisher',[publisherController::class, 'store']);
//delete
Route::delete('/books/{id_buku}', [AdminController::class, 'destroy'])->name('buku.destroy');
//update
Route::put('books/{id_buku}', [AdminController::class, 'update'])->name('books.update');
//show-books for development-only
Route::get('/books/{id_buku}', [AdminController::class, 'show'])->name('buku.show');
//printCSV
Route::get('/exportcsv', [AdminController::class, 'exportCSV'])->name('exportcsv');