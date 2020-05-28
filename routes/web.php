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

 
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CircuitsController;
use App\Http\Middleware\Cors;

Route::get('/toto',function(){
    return "toto";
})->middleware(Cors::class);

/**
 * Accueil
 */
// Route::resource('/', 'AccueilController');


/**
 * À propos
 */
Route::prefix('/apropos')->group (function() {
    Route::get('/', function () {
        $about = new AboutController();
        $apropos = $about->index();
        return view('clients.apropos', ['apropos' => $apropos]);
    });
});

/**
 * Acceuil
 */
Route::prefix('/contact')->group (function() {
    Route::get('/', 'ContactController@index');
    Route::post('/', 'ContactController@store');
});

Route::get('/galerie', function () {
    return view('clients.galerie.pageGalerie');
});

/**
 * Circuits
 */
Route::prefix('/circuits')->group(function () {

    Route::get('/', function () {
        $ctrl = new CircuitsController();
        $circuits = $ctrl->index();
        return view('clients.views.circuits', ['circuits' => $circuits]);
    });

    Route::get('/{id}', function ($id) {
        //recupere un circuit en fonction de son id
        $ctrl = new CircuitsController();
        $circuit = $ctrl->show($id);
        return view('clients.views.circuit',['circuit' => $circuit]);
    
    })->where('id', "[0-9]+");

});

/**
 * laisser en bas
 */

Route::prefix('/')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/{any}', 'AdminController@index')->where('any', '.*');
});





