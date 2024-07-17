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
Route::get('/home2',[BooksController::class, 'indexhome2'])->name('home2');

//login-logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout',[LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'actionregister'])->name('actionregister');

//aksi

//search-books-page
Route::get('/books',[booksController::class, 'search'])->name('home.search');
//search-admin-page
Route::get('/admin/books',[booksController::class, 'search'])->name('admin.search');
//search-pengadaan-page
Route::get('/pengadaan/books',[booksController::class, 'search'])->name('pengadaan.search');



//add-books
Route::post('/admin', [AdminController::class, 'store'])->name('store_books');
//add-publisher
Route::post('/publisher',[publisherController::class, 'store']);
//delete
Route::delete('/books/{id_buku}', [AdminController::class, 'destroy'])->name('buku.destroy');
//update
Route::put('books/{id_buku}', [AdminController::class, 'update'])->name('books.update');
//show-books-detail
Route::get('/books/{id_buku}', [booksController::class, 'show'])->name('buku.show');

//viewbookaspenerbit
Route::get('/bookaspenerbit/{id_penerbit}', [booksController::class, 'bookaspenerbit'])->name('viewaspenerbit');