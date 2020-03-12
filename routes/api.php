<?php

use App\Http\Middleware\Cors;
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

Route::post('/login', 'AuthController@login');

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'AuthController@logout');

    //TODO deplacer les routes ici plus tard 

});

// TODO route à deplacer

/**
 * API circuits
 */
Route::prefix('circuits')->group(function () {
    Route::get('/', 'CircuitsController@index');
    Route::post('/add', 'CircuitsController@add');
    Route::post('/{id}/traces', 'CircuitsController@addTrace')->where('id', "[0-9]+");
    Route::get('/{id}', 'CircuitsController@show')->where('id', "[0-9]+");
    Route::post('/{id}', 'CircuitsController@update')->where('id', '[0-9]+');
    Route::delete('/{id}', 'CircuitsController@delete')->where('id', "[0-9]+");
    Route::get('/{id}/traces/', 'CircuitsController@showTrace')->where('id', "[0-9]+");
    Route::get('/photos', 'CircuitsController@ListePhoto');
    Route::post('/photos/{id}', 'CircuitsController@addPhoto')->where('id', "[0-9]+");
});

/**
 * API Utilisateurs
 */
Route::prefix('users')->group(function () {
    Route::get('/', 'UsersController@index')->middleware(Cors::class);
    Route::post('/{id}', 'UsersController@update')->where('id', "[0-9]+");
    Route::delete('/{id}', 'UsersController@delete')->where('id', "[0-9]+");
});

/**
 * API Success
 */
Route::prefix('success')->group(function () {
    Route::get('/', 'SuccessController@index');
    Route::post('/', 'SuccessController@store');
    Route::post('/{id}', 'SuccessController@update');
    Route::get('/{id}', 'SuccessController@show')->where('id', "[0-9]+");
    Route::delete('/{id}', 'SuccessController@destroy');
    Route::post('/image/{id}', 'SuccessController@addImage')->where('id', "[0-9]+");
});

/**
 * API Interest points
 */
Route::prefix('interestpoints')->group(function () {
    Route::get('/', 'InterestPointsController@index');
    Route::get('/types', 'InterestPointsController@getTypes');
    Route::post('/', 'InterestPointsController@add');
});

/**
 * API À propos
 */
Route::prefix('/apropos')->group(function () {
    Route::get('/', 'AboutController@addApropos');
    Route::post('/{id}', 'AboutController@update')->where('id', "[0-9]+");
});

/**
 * API Galerie
 */
Route::prefix('/galerie')->group(function () {
    Route::get('/', 'GalerieController@index');
    Route::post('/', 'GalerieController@store');
    Route::post('/update', 'GalerieController@update');

    
});
