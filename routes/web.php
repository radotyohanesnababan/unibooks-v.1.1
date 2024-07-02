<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

//navigasi
Route::get('/home', [booksController::class, 'indexhome']);
Route::get('/pengadaan', [AdminController::class, 'indexpengadaan']);
Route::get('/admin', [AdminController::class, 'index'])->name('get_books');
Route::get('/register', function () {
    return view('register');
});

//login-middleware
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/home',[BooksController::class, 'indexhome'])->name('home')->middleware('auth');
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