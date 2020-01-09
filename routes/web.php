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
 * Adimin
 */
Route::resource('/dashboard', 'AdminController');

/**
 * Acceuil
 */
Route::resource('/', 'AccueilController');

/**
 * À propos
 */
Route::get('/apropos', function () {
    return view('clients.apropos');
});

/**
 * Acceuil
 */
Route::get('/contact', function () {
    return view('clients.contact');
});

Route::get('/page_galerie', function () {
    return view('clients.galerie.pageGalerie');
});