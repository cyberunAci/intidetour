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

/**
 * Admin
 */

use App\CircuitsModel;
use App\Http\Controllers\CircuitsController;

Route::resource('/dashboard', 'AdminController');

/**
 * Accueil
 */
Route::resource('/', 'AccueilController');

/**
 * CGU
 */
Route::get('/cgu', function () {
    return view('clients.cgu');
});

/**
 * À propos
 */
Route::get('/apropos', 'AboutController@index');


/**
 * Acceuil
 */
Route::get('/contact', function () {
    return view('clients.contact');
});

Route::get('/galerie', function () {
    return view('clients.galerie.pageGalerie');
});






Route::get('/circuits', function () {
    $ctrl = new CircuitsController();
    $circuits = $ctrl->index();
    return view('clients.circuits', ['circuits' => $circuits]);
});
