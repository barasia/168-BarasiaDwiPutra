<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/login', function () {
    return view('login');
})->name('rLogin');
Route::get('/logout', function () {
    return view('home');
})->name('rLogout');
Route::get('/register', function () {
    return view('register');
})->name('rRegister');

Route::get('/', [HomeController::class, 'index'])->name("rHome");
Route::get('/detail', [HomeController::class, 'detail'])->name("rHome.detail");
Route::get('/create', [HomeController::class, 'create'])->name("rHome.create");
Route::post('/store', [HomeController::class, 'store'])->name("rHome.store");
Route::get('/edit', [HomeController::class, 'edit'])->name("rHome.edit");
Route::post('/update', [HomeController::class, 'update'])->name("rHome.update");
Route::get('/delete', [HomeController::class, 'delete'])->name("rHome.delete");
