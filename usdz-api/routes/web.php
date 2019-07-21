<?php

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', '\L5Swagger\Http\Controllers\SwaggerController@api')->name('l5swagger.api');
});

Route::group(['prefix' => '/USDZ/search'], function () {
    Route::post('/GET', 'USDZController@getUSDZ');
});
