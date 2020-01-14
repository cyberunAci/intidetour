<?php

use Illuminate\Http\Request;

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

/**
 * API circuits
 */
Route::prefix('circuits')->group(function () {
    Route::get('/', 'CircuitsController@index');
    Route::post('/add', 'CircuitsController@add');
    Route::post('/{id}/trace/', 'CircuitsController@addTrace')->where('id', "[0-9]+");
    Route::get('/{id}', 'CircuitsController@show')->where('id', "[0-9]+");
    Route::put('/{id}', 'CircuitsController@update')->where('id', '[0-9]+');
    Route::delete('/{id}', 'CircuitsController@delete')->where('id', "[0-9]+");
    Route::get('/{id}/trace/', 'CircuitsController@showTrace')->where('id', "[0-9]+");
    
   
});

/**
 * API Utilisateurs
 */
Route::prefix('users')->group(function () {
    Route::get('/', 'AdminController@getUsers');
    Route::delete('/{id}', 'ClientsController@delete')->where('id', "[0-9]+");
});

/**
 * API Success
 */
Route::prefix('success')->group(function () {
    Route::post('/', 'SuccessController@store');
    Route::post('/{id}', 'SuccessController@update');
    Route::delete('/{id}', 'SuccessController@destroy');
});


/**
 * API Interest points
 */
Route::prefix('interestpoints')->group(function () {
    Route::get('/', 'InterestPointsController@index');
    Route::get('/', 'InterestPointsController@interestsPointsTypes');
});
