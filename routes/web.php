<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NormalUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use App\Http\Middleware\CheckRole;


Auth::routes();

Route::get('/', function () {
    return view('home');
});


//>middleware('auth') เป็นการตรวจสอบว่า loginหรือไม่
// หน้า Home
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/AddTread', [HomeController::class, 'AddTread'])->name('AddTread')->middleware('auth');

Route::post('/insert',[HomeController::class.'insert'])->name('insert')->middleware('auth');

// หน้า Home Page สำหรับ Admin
/* Route::middleware(CheckRole::class . ':admin')->group(function () {
    Route::get('/HomePage', [AdminController::class, 'HomePage'])->name('Home');
});
 */
// Fallback Route สำหรับหน้าที่ไม่มีในเส้นทางข้างบน
Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
