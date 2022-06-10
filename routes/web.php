<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.layouts.admin');
});
Route::get('admin/login1', [App\Http\Controllers\Auth\AuthAdminController::class, 'getLogin1']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('admin/login', [App\Http\Controllers\Auth\AuthAdminController::class, 'postLogin'])->name('adminLoginPost');
Route::post('admin/logout', [App\Http\Controllers\Auth\AuthAdminController::class, 'logout'])->name('adminLogout');

Route::prefix('admin')->middleware('adminauth')->group(function () {
	// Admin Dashboard
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard'); 
});


