<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('home');
})->name('login');
Route::get('/logout', function () {
    return view('home');
})->name('logout');
Route::get('/register', function () {
    return view('home');
})->name('register');
Route::get('/', function () {
    return view('home');
});
