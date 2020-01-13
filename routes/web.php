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
Route::resource('/dashboard', 'AdminController');

/**
 * Accueil
 */
Route::resource('/', 'AccueilController');

/**
 * CGU
 */
Route::get('/cgu', function() {
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