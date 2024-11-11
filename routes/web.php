<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
 
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home/create', [HomeController::class, 'create'])->name('createNote');
    Route::post('/home/store', [HomeController::class, 'store'])->name('store');


    Route::get('/home/{note}/edit', [HomeController::class,'edit'])->name(name: 'edit');


    Route::put('/home/{note}', [HomeController::class,'update'])->name(name: 'update');

    Route::delete('/home/destroy/{note}', [HomeController::class,'destroy'])->name(name: 'destroy');


});

