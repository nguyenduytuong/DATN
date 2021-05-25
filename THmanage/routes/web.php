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
    return view('user.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/room', function () {
    return view('admin.listrooms');
});

Route::get('/room', function () {
    return view('user.listrooms');
});

// Route::group(["prefix" => "admin", 'middleware' => 'login_check'], function () {
    
//     Route::get('/', [AdminController::class, 'getListAdmin'])->name('getListAdmin');
    

// });