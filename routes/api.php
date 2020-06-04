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

Route::middleware(['auth:api', 'roles:admin'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:api', 'roles:admin'])->group(function () {
    /**
     * API circuits
     */
    Route::prefix('circuits')->group(function () {
        Route::post('/add', 'CircuitsController@add');
        Route::post('/{id}/traces', 'CircuitsController@addTrace')->where('id', "[0-9]+");
        Route::post('/{id}', 'CircuitsController@update')->where('id', '[0-9]+');
        Route::delete('/{id}', 'CircuitsController@delete')->where('id', "[0-9]+");
        Route::post('/photos/{id}', 'CircuitsController@addPhoto')->where('id', "[0-9]+");
    });

    /**
     * API Utilisateurs
     */
    Route::prefix('users')->group(function () {
        Route::post('/{id}', 'UsersController@update')->where('id', "[0-9]+");
        Route::delete('/{id}', 'UsersController@delete')->where('id', "[0-9]+");
    });

    /**
     * API Success
     */
    Route::prefix('success')->group(function () {
        Route::post('/', 'SuccessController@store');
        Route::post('/{id}', 'SuccessController@update');
        Route::delete('/{id}', 'SuccessController@destroy');
        Route::post('/image/{id}', 'SuccessController@addImage')->where('id', "[0-9]+");
    });


    /**
     * API Interest points
     */
    Route::prefix('interestpoints')->group(function () {
        Route::post('/', 'InterestPointsController@add');
    });

    /**
     * API À propos
     */
    Route::prefix('/apropos')->group(function () {
        Route::post('/{id}', 'AboutController@update')->where('id', "[0-9]+");
    });

    /**
     * API Galerie
     */

    Route::prefix('/galerie')->group(function () {
        Route::post('/', 'GalerieController@store');
        Route::post('/', 'GalerieController@update');
    });
});

Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->middleware('auth:api');


/**
 * Route non sécurisé // manque encore la separation Visiteur (non connecter) et Utilisateur
 */
Route::prefix('circuits')->group(function () {
    Route::get('/', 'CircuitsController@index');
    Route::get('/{id}', 'CircuitsController@show')->where('id', "[0-9]+"); //utilisateur
    Route::get('/{id}/traces/', 'CircuitsController@showTrace')->where('id', "[0-9]+"); //utilisateur
    Route::get('/photos', 'CircuitsController@ListePhoto');
});

Route::prefix('users')->group(function () { //utilisateur
    Route::get('/', 'UsersController@index')->middleware(Cors::class);
});

Route::prefix('success')->group(function () { //utilisateur
    Route::get('/', 'SuccessController@index');
    Route::get('/{id}', 'SuccessController@show')->where('id', "[0-9]+");
});

Route::prefix('interestpoints')->group(function () { //utilisateur
    Route::get('/', 'InterestPointsController@index');
    Route::get('/types', 'InterestPointsController@getTypes');
});

Route::prefix('/apropos')->group(function () {
    Route::get('/', 'AboutController@addApropos');
});

/**
 * API Profil
 */
Route::prefix('profil')->group(function () { //utilisateur
    Route::get('/', 'UserController@getCurrentUser');
    // Route::post('/{id}', 'AboutController@update')->where('id', "[0-9]+");
});


/**
 * API Galerie
 */

Route::prefix('/galerie')->group(function () {
    Route::get('/', 'GalerieController@index');
});
