<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API Routes for Cars managing
Route::group([ 'prefix' => 'car/'], function(){

    Route::get('show', 'CarController@show' )->name('cars.show');
    Route::post('create', 'CarController@store' )->name('cars.store');
    Route::post('update', 'CarController@update' )->name('cars.update');
    Route::delete('delete/{id}', 'CarController@delete' )->name('cars.delete');


});

// API Routes for Categories managing
Route::group([ 'prefix' => 'category/'], function(){

    Route::get('show', 'CategoryController@show' )->name('category.show');
    Route::post('create', 'CategoryController@store' )->name('category.store');
    Route::post('update', 'CategoryController@update' )->name('category.update');
    Route::delete('delete/{id}', 'CategoryController@delete' )->name('category.delete');

});