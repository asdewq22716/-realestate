<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NormalUserController;
use App\Http\Controllers\AdminController;

use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(CheckRole::class . ':admin')->group(function () {
    Route::get('/admin-panel', function () {
        //
    });
});

Route::middleware(CheckRole::class . ':normal_user')->group(function () {
    Route::get('/admin-panel', function () {
        //
    });
});