<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin/zone'], function () {
	Route::GET('/','App\Http\Controllers\zoneController@index');
	Route::POST('addzone','App\Http\Controllers\zoneController@addZone');
	Route::GET('detailzone/{id}','App\Http\Controllers\zoneController@detailZone');
	Route::GET('deletezone/{id}','App\Http\Controllers\zoneController@deleteZone');
	Route::POST('editzone','App\Http\Controllers\zoneController@editZone');
});


// Route::group(['prefix' => 'admin', 'middleware' => 'adminCheck'], function () {
//     Route::get('/',function(){
// 		return view('admin.index');
// 	});
// });