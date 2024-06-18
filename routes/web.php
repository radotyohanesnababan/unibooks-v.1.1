<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
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
Route::get('/pengadaan', function () {
    return view('pengadaan');
});

