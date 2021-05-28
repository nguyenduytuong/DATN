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
//Route::get('/', function () {
//    return view('user.index');
//});
//Route::get('/admin', function () {
//    return view('admin.layouts.index');
//});
//Route::get('/admin/room', function () {
//    return view('admin.listrooms');
//});


Route::get('/room', function () {
    return view('user.listrooms');
});
Route::get('admin/dangnhap','App\Http\Controllers\LoginController@getdangnhapAdmin');
Route::post('admin/dangnhap','App\Http\Controllers\LoginController@postdangnhapAdmin');
Route::get('admin/logout','App\Http\Controllers\LoginController@getdangxuatAdmin');

// Route::group(["prefix" => "admin", 'middleware' => 'login_check'], function () {

//     Route::get('/', [AdminController::class, 'getListAdmin'])->name('getListAdmin');


// });
Route::get('dangky','App\Http\Controllers\LoginController@getDangky');
Route::post('dangky','App\Http\Controllers\LoginController@postDangky');
